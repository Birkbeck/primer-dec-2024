class ServerChecker {
    constructor(url) {
        // The currently supported extensions
        this.supportedExtensions = [
            "gd", "imagick", "gmagick", "vips", "curl", "intl",
            "iconv", "mbstring", "memcached", "apc", "exif", "json",
        ];
        this.extensions = this.getRequiredExtensions();
        this.required   = this.getRequiredVersion();
        this.stacks     = this.getMentionedStacks();

        this.url = new URL(url);
        this.url.searchParams.append("require", this.required);
        this.url.searchParams.append("cache", this.cacheBuster());
    }

    cacheBuster(max=100000000) {
        return Math.floor(Math.random() * Math.floor(max));
    }

    el(domstring) {
        const html = new DOMParser().parseFromString( domstring , "text/html");
        return html.body.firstChild;
    }

    getMentionedStacks() {
        if ("undefined" == typeof window.phpstacks) return [];
        // return all unique stacks
        return window.phpstacks.filter((value, index, self) => self.indexOf(value) === index);
    }

    getRequiredExtensions() {
        // Default PHP Extensions Required
        if ("undefined" == typeof window.phpmodules) {
            window.phpmodules = [];
            // window.phpmodules.push("mbstring");
        }
        // return all unique and supported extensions
        return window.phpmodules.filter((value, index, self) => {
            return this.supportedExtensions.indexOf(value) >= 0 && self.indexOf(value) === index;
        });
    }

    getRequiredVersion() {
        // Default PHP Require Version
        if ("undefined" == typeof window.phprequire) {
            window.phprequire = [];
            window.phprequire.push("7.4.0");
        }

        // Figure out the latest version by comparing int versions
        // The last octet of the PHP version will be ignored
        let latest = "0";
        for (const version of window.phprequire) {
            if (parseFloat(version) > parseFloat(latest)) latest = version;
        }
        return latest;
    }

    phpExtensionWarning(missing) {
        // This cannot go into the HTML becuase if multiple stacks load it,
        // I do not want multiple instances on the page
        const html = `
        <div class="server-checker-warning">
        <span class="server-checker-close">&times;</span>
        <p>The following PHP extensions are not enabled on your server.
        These extensions are required in order for features to function
        properly in the stacks on your page. Please contact your host
        in order to get these extensions installed.</p>
        <ul>
            <li class="ext curl"><a href="https://www.php.net/manual/en/book.curl.php" target="_blank">Curl</a></li>
            <li class="ext mbstring"><a href="https://www.php.net/manual/en/book.mbstring.php" target="_blank">Multibyte Strings</a></li>
            <li class="ext intl"><a href="https://www.php.net/manual/en/book.intl.php" target="_blank">Internationalization Functions</a></li>
            <li class="ext iconv"><a href="https://www.php.net/manual/en/book.iconv.php" target="_blank">iconv</a></li>
            <li class="ext gd"><a href="https://www.php.net/manual/en/book.image.php" target="_blank">GD Image Processing</a></li>
            <li class="ext imagick"><a href="https://www.php.net/manual/en/book.imagick.php" target="_blank">ImageMagick</a></li>
            <li class="ext gmagick"><a href="https://www.php.net/manual/en/book.gmagick.php" target="_blank">Gmagick</a></li>
            <li class="ext memcached"><a href="https://www.php.net/manual/en/book.memcached.php" target="_blank">Memcached</a></li>
            <li class="ext apc"><a href="https://www.php.net/manual/en/book.apcu.php" target="_blank">APC User Cache</a></li>
            <li class="ext exif"><a href="https://www.php.net/manual/en/book.exif.php" target="_blank">EXIF Functions</a></li>
            <li class="ext vips"><a href="https://libvips.github.io/php-vips/" target="_blank">php-vips</a></li>
        </ul>
        ${this.mentionedStacksToList()}
        </div>
        `;
        this.addWarningtoDOM(html, warning => {
            // display missing extensions
            for (const extension of missing) {
                const item = warning.getElementsByClassName(extension)[0];
                if (item) item.style.display = "list-item";
            }
        });
    }

    phpVersionWarning(php) {
        // This cannot go into the HTML becuase if multiple stacks load it,
        // I do not want multiple instances on the page
        const html = `
        <div class="server-checker-warning">
        <span class="server-checker-close">&times;</span>
        <p>This project requires a web server that is running PHP
        <strong>v${php.required}</strong> or higher. Your web
        server is using PHP <strong>v${php.installed}</strong>,
        which may cause user-facing functionality to break.
        Please select a newer version via your hosting control panel or contacting
        your host directly. You can refer to the currently supported PHP versions
        <a href="https://www.php.net/supported-versions.php" target="_blank">here</a>.</p>
        ${this.mentionedStacksToList()}
        </div>
        `;
        this.addWarningtoDOM(html);
    }

    mentionedStacksToList() {
        if (this.stacks.length == 0) return "";
        return `<strong>Stacks</strong>: ${this.stacks.join(", ")}`;
    }

    addWarningtoDOM(html, callback) {
        const warning = this.el(html);
        const close = warning.getElementsByClassName("server-checker-close")[0];
        close.addEventListener("click", () => warning.classList.add("hide"));
        // Callback support in case DOM needs to be manipulated after created
        if ("function" == typeof callback) callback(warning);
        document.body.appendChild(warning);
    }

    checkServerData(data) {
        // If the version is not there, just display that warning
        if (data.php.upgrade) return this.phpVersionWarning(data.php);

        // Find all extensions that are missing from the server
        const missing = this.extensions.filter(value => data[value] === false);
        if (missing.length > 0) this.phpExtensionWarning(missing);
    }

    check() {
        fetch(this.url)
        .then(response => response.json())
        .then(data => this.checkServerData(data))
        .catch(error => console.error(error));
    }
}

if (window.servercheckerpath) {
    const checker = new ServerChecker(window.servercheckerpath);
    checker.check();
}
