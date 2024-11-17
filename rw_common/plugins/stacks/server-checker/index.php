<?php
ini_set('display_errors', '0');
register_shutdown_function(function () {
    $lastError = error_get_last();

    if (!empty($lastError) && $lastError['type'] == E_ERROR) {
        http_response_code(500);
        echo $lastError["message"];
    }
});

header('X-Robots-Tag: noindex');

if (strpos($_SERVER["HTTP_REFERER"], "127.0.0.1") !== false) {
    header("Access-Control-Allow-Origin: *");
}

$checks = [];

const MIN_REQUIRED = '7.4.0';

$required = isset($_GET["require"]) ? $_GET["require"] : MIN_REQUIRED;

$checks["php"]  = [
    "installed" => PHP_VERSION,
    "required"  => $required,
    "upgrade"   => !version_compare(PHP_VERSION, $required, '>=')
];
$checks["gd"]        = extension_loaded('gd');
$checks["imagick"]   = extension_loaded('imagick');
$checks["gmagick"]   = extension_loaded('Gmagick');
$checks["vips"]      = extension_loaded('vips');
$checks["curl"]      = extension_loaded('curl');
$checks["intl"]      = extension_loaded('intl');
$checks["iconv"]     = extension_loaded('iconv');
$checks["mbstring"]  = extension_loaded('mbstring');
$checks["memcached"] = extension_loaded('memcached');
$checks["apc"]       = (extension_loaded('apcu') && ini_get('apc.enabled'));
$checks["exif"]      = function_exists('exif_read_data');
$checks["json"]      = function_exists('json_decode');

if (isset($_GET['info'])) {
    $checks["rootpath"] = preg_replace('/(.*).rw_common.+/', '$1', __DIR__);
    $checks["server"]   = $_SERVER;
    $checks["ini"]      = ini_get_all();
    echo '<pre>';
    print_r($checks);
    phpinfo();
    echo '</pre>';
} else {
    header('Content-Type: application/json');
    echo json_encode($checks);
}
