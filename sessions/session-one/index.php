<?php if (strlen(session_id()) < 1) {
session_start();
} ?><?php ob_start(); ?>
<?php header('pwa-no-cache: true'); ?><!doctype html>  
<html lang="en">
<head>

	<!-- Aspen 2.0.0 -->

	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@Birkbeck_CS">
	<meta name="twitter:creator" content="@Birkbeck_CS">
	<meta name="twitter:title" content="Session One">
	<meta name="twitter:image" content="https://birkbeck.github.io/primer-dec-2024/resources/primer-ds-logo.png">
	<meta name="twitter:url" content="https://birkbeck.github.io/primer-dec-2024/sessions/session-one/index.php">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="CMS Primer — Birkbeck, University of London">
	<meta property="og:title" content="Session One">
	<meta property="og:image" content="https://birkbeck.github.io/primer-dec-2024/resources/primer-ds-logo.png">
	<meta property="og:url" content="https://birkbeck.github.io/primer-dec-2024/sessions/session-one/index.php">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="baseurl" content="https://birkbeck.github.io/primer-dec-2024/">
	<title>Session One</title>
	<link rel="stylesheet" type="text/css" media="all" href="../../rw_common/themes/aspen/consolidated.css?rwcache=753644042" />
		
	
	
	
			<link rel='stylesheet' type='text/css' media='all' href='../../rw_common/plugins/stacks/stacks.css?rwcache=753644042' />
		<link rel='stylesheet' type='text/css' media='all' href='files/stacks_page_page4.css?rwcache=753644042' />
        <script type='text/javascript' charset='utf-8' src='../../rw_common/plugins/stacks/jquery-2.2.4.min.js?rwcache=753644042'></script>
        
        
        
<script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/jscookie.min.js?rwcache=753644042"></script>		
		<script type='text/javascript' charset='utf-8' src='files/stacks_page_page4.js?rwcache=753644042'></script>
		

	
</head>
<body>
  <div class="figure_bg">
    <div class="figure_cropping">
      <div class="figure-container parallax">
        <div id="theme_input"></div>
        <img src="../../rw_common/images/primer-ds-logo.png" alt="Banner">
      </div>
    </div><!-- Figure Crop -->
    <figure class="theme max_width_wrap">
      <header class="theme cf" data-baseurl="https://birkbeck.github.io/primer-dec-2024/">
        <img src="../../rw_common/images/For_students_who_do_more.jpg" width="600" height="280" alt="Birkbeck, University of London logo"/>
        <div class="nav_btn offest"></div>
        <div class="nav_expand">
          <div class="nav_close">+</div>
          <nav class="theme offest cf">
            <ul class="theme cf"><li><a href="../../" rel="">Home</a></li><li><a href="../../key-info/" rel="">Key Information</a></li><li class="currentParent"><a href="../../sessions/" rel="">Sessions</a><ul class="theme cf"><li><a href="../../sessions/session-zero/" rel="">Introduction</a></li><li><a  class="current" href="./" rel="">Session One</a></li><li><a href="../../sessions/session-two/" rel="">Session Two</a></li><li><a href="../../sessions/session-three/" rel="">Session Three</a></li><li><a href="../../sessions/session-four/" rel="">Session Four</a></li><li><a href="../../sessions/session-five/" rel="">Session Five</a></li><li><a href="../../sessions/session-six/" rel="">Session Six</a></li></ul></li><li><a href="../../software/" rel="">Software</a></li><li><a href="../../reading-list/" rel="">Reading List</a></li><li><a href="../../resources/" rel="">Resources</a></li><li><a href="../../about/" rel="">About</a></li></ul>
          </nav>
        </div>
        <div class="float_right contact_info">
          <ul>
            <li class="special-li">
              &copy; 2014-24 Birkbeck, University of London <a href="#" class="394855D5-4ED7-4683-9DC0-C23BCD349C22">Contact Me (Keith Mannock)</a><script type="text/javascript">(function(){ var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":k.";var _rwObsfuscatedHref3 = "man";var _rwObsfuscatedHref4 = "noc";var _rwObsfuscatedHref5 = "k@b";var _rwObsfuscatedHref6 = "bk.";var _rwObsfuscatedHref7 = "ac.";var _rwObsfuscatedHref8 = "uk";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8; Array.from(document.getElementsByClassName("394855D5-4ED7-4683-9DC0-C23BCD349C22")).forEach(function(x){x.href = _rwObsfuscatedHref});})()</script>
              <a class="cartloom-viewcart">
                <span class="cartloom-cart-count">0</span>
                <span class="social-bag"></span>
              </a>
            </li>
          </ul>
        </div>
      </header>
      <section class="main_heading offest cf">
        <h1 class="site_title"></h1>
        <div class="heading_break">
          <ul class="breadcrumb theme cf"><li><a href="../../">Home</a></li><li><a href="../../sessions/">Sessions</a></li><li><a href="./">Session One</a></li></ul>
          <div class="social_icons">
            <ul>
            </ul>
          </div>
          <span class="theme_scroll_btn">
            <a href="#">
              <span class="mouse">
                <span>
                </span>
              </span>
            </a>
          </span>
        </div>
      </section>
    </figure>
  </div>
  <aside class="theme max_width_wrap cf">
    <div class="col_a"></div>
    <div class="col_b">
      <div class="inner_content">
        <h2 class="site_slogan"></h2>
        
      </div>
    </div>
  </aside>
  <div class="break_degree"><div></div></div>
  <main class="theme cf">
    <div class="max_width_wrap_content">
      
<div id='stacks_out_1' class='stacks_top'><div id='stacks_in_1' class=''><div id='stacks_out_4' class='stacks_out'><div id='stacks_in_4' class='stacks_in '><div id='stacks_out_4_2' class='stacks_out'><div id='stacks_in_4_2' class='stacks_in stack_stack'><div id='stacks_out_4_4' class='stacks_out'><div id='stacks_in_4_4' class='stacks_in markdown_stack'><h1 id="schoolofcomputingandmathematicalsciences">School of Computing and Mathematical Sciences</h1>

<p>The definitive information on the College and our programmes is on Birkbeck's <a href="https://www.bbk.ac.uk/">main website</a>.</p></div></div></div></div></div></div><div id='stacks_out_11' class='stacks_out'><div id='stacks_in_11' class='stacks_in stack_stack'><div id='stacks_out_12' class='stacks_out'><div id='stacks_in_12' class='stacks_in markdown_stack'><h1 id="sessionone">Session One</h1></div></div><div id='stacks_out_15' class='stacks_out'><div id='stacks_in_15' class='stacks_in markdown_stack'><p>TBC</p></div></div><div id='stacks_out_17' class='stacks_out'><div id='stacks_in_17' class='stacks_in uk_co_doobox_responsiveshim_stack'><!-- Start Responsive Shim stack template --><div class="stacks_in_17shim"></div><!-- End Responsive Shim stack template --></div></div></div></div><div id='stacks_out_18' class='stacks_out'><div id='stacks_in_18' class='stacks_in '>

<?php
$cookie = str_replace(" ", "", 'pagesafe');
if (isset($_GET["logout"])) {
    setcookie($cookie, '', 1, '/');
    unset($_SESSION[$cookie]);
    session_unset();
    session_destroy();
    session_start();
    $current_url = explode("?", $_SERVER['REQUEST_URI']);
    header('Location: '.$current_url[0]);
}
$_SESSION[$cookie] = false;
if (isset($_COOKIE[$cookie])) {
    $_SESSION[$cookie] = password_verify($cookie.session_id(), $_COOKIE[$cookie]);
}
if ($_SESSION[$cookie] === false) {
    ob_get_clean(); // discard everything above
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">

	<title>Enter the passcode to login</title>

	<?php
    // Support PWA if it exists on the page
    echo $pageSpeedHeader??""; ?>

	<link rel="stylesheet" href="files/stacks_in_18_2_pagesafe.css?rwcache=753644042" />
</head>
<body class="color linear  ">

<section id="pagesafe-wrapper" class="">

	<form id="pagesafe" class="input-pin icon-keyhole digits6" method="post" action="files/stacks_in_18_2_pagesafe.php" data-action="files/stacks_in_18_2_pagesafe.php">

		
		<svg id="icon" width="50%" height="50%" viewBox="0 0 300 300" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1"><stop stop-color="#B4ED50" offset="0%"></stop><stop stop-color="#429321" offset="43.3992347%"></stop></linearGradient><linearGradient x1="50%" y1="12.8926772%" x2="50%" y2="129.707617%" id="linearGradient-2"><stop stop-color="#42AD3F" offset="0%"></stop><stop stop-color="#B4ED50" offset="100%"></stop></linearGradient><linearGradient x1="50%" y1="97.9174516%" x2="50%" y2="19.7989543%" id="linearGradient-3"><stop stop-color="#B4ED50" offset="0%"></stop><stop stop-color="#356921" offset="100%"></stop></linearGradient><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-4"><stop stop-color="#F55160" offset="0%"></stop><stop stop-color="#9F031B" offset="100%"></stop></linearGradient><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-5"><stop stop-color="#E91D2F" offset="0%"></stop><stop stop-color="#CC1C36" offset="100%"></stop></linearGradient><linearGradient x1="50%" y1="97.5050407%" x2="50%" y2="2.58208243%" id="linearGradient-6"><stop stop-color="#F5515F" offset="0%"></stop><stop stop-color="#9F031B" offset="100%"></stop></linearGradient><linearGradient x1="50%" y1="0%" x2="50%" y2="43.3992347%" id="linearGradient-7"><stop stop-color="#FFFFFF" offset="0%"></stop><stop stop-color="#4E534C" offset="100%"></stop></linearGradient><linearGradient x1="50%" y1="12.8926772%" x2="50%" y2="129.707617%" id="linearGradient-8"><stop stop-color="#989898" offset="0%"></stop><stop stop-color="#F8F8F8" offset="100%"></stop></linearGradient><linearGradient x1="50%" y1="97.9174516%" x2="50%" y2="19.7989543%" id="linearGradient-9"><stop stop-color="#FFFFFF" offset="0%"></stop><stop stop-color="#565656" offset="100%"></stop></linearGradient><filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-10"><feOffset dx="0" dy="1" in="SourceAlpha" result="shadowOffsetInner1"></feOffset><feGaussianBlur stdDeviation="1.5" in="shadowOffsetInner1" result="shadowBlurInner1"></feGaussianBlur><feComposite in="shadowBlurInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"></feComposite><feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.35 0" in="shadowInnerInner1" type="matrix" result="shadowMatrixInner1"></feColorMatrix><feMerge><feMergeNode in="SourceGraphic"></feMergeNode><feMergeNode in="shadowMatrixInner1"></feMergeNode></feMerge></filter><radialGradient cx="50%" cy="50%" fx="50%" fy="50%" r="86.8979379%" id="radialGradient-11"><stop stop-color="#FFFFFF" offset="0%"></stop><stop stop-color="#000000" offset="100%"></stop></radialGradient><linearGradient x1="50%" y1="38.8427734%" x2="50%" y2="100%" id="linearGradient-12"><stop stop-color="#FFFFFF" stop-opacity="0" offset="0%"></stop><stop stop-color="#000000" stop-opacity="0.6" offset="100%"></stop></linearGradient></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><g id="lock" sketch:type="MSLayerGroup" transform="translate(7.000000, 7.000000)"><path d="M284.522,142.363 C284.522,220.723 220.999,284.244 142.638,284.244 C64.277,284.244 0.755,220.723 0.755,142.363 C0.755,64.002 64.277,0.48 142.638,0.48 C220.999,0.48 284.522,64.002 284.522,142.363" id="outer-ring" fill="#1D1E1C" sketch:type="MSShapeGroup"></path><g id="success-ring" transform="translate(3.000000, 3.000000)" sketch:type="MSShapeGroup"><path d="M278.367,139.363 C278.367,215.98 216.258,278.092 139.638,278.092 C63.02,278.092 0.909,215.98 0.909,139.363 C0.909,62.745 63.02,0.632 139.638,0.632 C216.258,0.632 278.367,62.745 278.367,139.363" id="Success-Out" fill="url(#linearGradient-1)"></path><path d="M272.692,139.363 C272.692,212.848 213.124,272.415 139.638,272.415 C66.151,272.415 6.584,212.848 6.584,139.363 C6.584,65.876 66.151,6.309 139.638,6.309 C213.124,6.309 272.692,65.876 272.692,139.363" id="Success" fill="url(#linearGradient-2)"></path><path d="M253.775,139.363 C253.775,202.398 202.676,253.496 139.636,253.496 C76.6,253.496 25.502,202.398 25.502,139.363 C25.502,76.327 76.6,25.227 139.636,25.227 C202.676,25.227 253.775,76.327 253.775,139.363" id="Success-In" fill="url(#linearGradient-3)"></path></g><g id="error-ring" transform="translate(3.000000, 3.000000)" sketch:type="MSShapeGroup"><path d="M278.367,139.363 C278.367,215.98 216.258,278.092 139.638,278.092 C63.02,278.092 0.909,215.98 0.909,139.363 C0.909,62.745 63.02,0.632 139.638,0.632 C216.258,0.632 278.367,62.745 278.367,139.363" id="Error-Out" fill="url(#linearGradient-4)"></path><path d="M272.692,139.363 C272.692,212.848 213.124,272.415 139.638,272.415 C66.151,272.415 6.584,212.848 6.584,139.363 C6.584,65.876 66.151,6.309 139.638,6.309 C213.124,6.309 272.692,65.876 272.692,139.363" id="Error" fill="url(#linearGradient-5)"></path><path d="M253.775,139.363 C253.775,202.398 202.676,253.496 139.636,253.496 C76.6,253.496 25.502,202.398 25.502,139.363 C25.502,76.327 76.6,25.227 139.636,25.227 C202.676,25.227 253.775,76.327 253.775,139.363" id="Error-In" fill="url(#linearGradient-6)"></path></g><g id="default-ring" transform="translate(3.000000, 3.000000)" sketch:type="MSShapeGroup"><path d="M278.367,139.363 C278.367,215.98 216.258,278.092 139.638,278.092 C63.02,278.092 0.909,215.98 0.909,139.363 C0.909,62.745 63.02,0.632 139.638,0.632 C216.258,0.632 278.367,62.745 278.367,139.363" id="Default-Out" fill="url(#linearGradient-7)"></path><path d="M272.692,139.363 C272.692,212.848 213.124,272.415 139.638,272.415 C66.151,272.415 6.584,212.848 6.584,139.363 C6.584,65.876 66.151,6.309 139.638,6.309 C213.124,6.309 272.692,65.876 272.692,139.363" id="Default" fill="url(#linearGradient-8)"></path><path d="M253.775,139.363 C253.775,202.398 202.676,253.496 139.636,253.496 C76.6,253.496 25.502,202.398 25.502,139.363 C25.502,76.327 76.6,25.227 139.636,25.227 C202.676,25.227 253.775,76.327 253.775,139.363" id="Default-In" fill="url(#linearGradient-9)"></path></g><g id="keyhole" transform="translate(35.000000, 36.000000)" sketch:type="MSShapeGroup"><path d="M107.638,3.155 C165.184,3.155 211.846,49.819 211.846,107.363 C211.846,158.666 174.395,202.468 123.747,210.329 L123.559,210.357 L123.559,201.086 C123.559,198.494 121.548,196.361 118.962,196.208 C110.494,195.71 107.793,185.116 107.793,178.187 C107.793,171.296 109.774,160.147 118.675,160.147 C121.364,160.147 123.559,157.952 123.559,155.262 L123.559,118.061 C123.559,115.372 121.364,113.176 118.675,113.176 L115.521,113.176 C111.264,113.176 107.793,109.706 107.793,105.449 L107.793,104.462 C107.793,102.61 108.381,100.976 109.559,99.546 L113.839,94.355 C115.083,92.849 115.678,91.197 115.678,89.243 L115.678,76.679 C115.678,75.728 114.9,74.948 113.943,74.948 L101.333,74.948 C100.381,74.948 99.599,75.728 99.599,76.679 L99.599,85.688 C99.599,88.304 98.778,90.596 97.114,92.611 L92.834,97.802 C92.074,98.72 91.717,99.716 91.717,100.909 L91.717,113.737 C91.717,116.424 93.911,118.62 96.602,118.62 C105.499,118.62 107.481,129.772 107.481,136.662 C107.481,143.589 104.783,154.188 96.314,154.685 C93.729,154.835 91.717,156.968 91.717,159.559 L91.717,210.357 L91.53,210.329 C40.883,202.468 3.43,158.666 3.43,107.363 C3.43,49.819 50.094,3.155 107.638,3.155 L107.638,3.155 Z M214.68,107.363 C214.68,48.255 166.748,0.322 107.638,0.322 C48.529,0.322 0.597,48.255 0.597,107.363 C0.597,166.467 48.529,214.404 107.638,214.404 C166.748,214.404 214.68,166.467 214.68,107.363 L214.68,107.363 Z" id="Fill-275" fill="#1F201E"></path><path d="M93.159,211.976 C97.891,212.626 102.728,212.96 107.638,212.96 C112.549,212.96 117.386,212.626 122.117,211.976 L122.117,201.086 C122.117,199.256 120.699,197.755 118.876,197.65 C109.514,197.099 106.352,185.96 106.352,178.187 C106.352,170.398 108.792,158.704 118.675,158.704 C120.571,158.704 122.117,157.154 122.117,155.262 L122.117,118.061 C122.117,116.167 120.571,114.617 118.675,114.617 L115.521,114.617 C110.469,114.617 106.352,110.501 106.352,105.449 L106.352,104.462 C106.352,102.275 107.055,100.315 108.445,98.629 L112.728,93.44 C113.763,92.19 114.235,90.863 114.235,89.243 L114.235,76.679 C114.235,76.522 114.101,76.389 113.943,76.389 L101.333,76.389 C101.177,76.389 101.042,76.522 101.042,76.679 L101.042,85.688 C101.042,88.638 100.103,91.254 98.227,93.529 L93.946,98.717 C93.398,99.381 93.159,100.05 93.159,100.909 L93.159,113.737 C93.159,115.628 94.711,117.18 96.602,117.18 C106.48,117.18 108.924,128.873 108.924,136.662 C108.924,144.438 105.76,155.575 96.401,156.123 C94.577,156.23 93.159,157.731 93.159,159.559 L93.159,211.976" id="Fill-284" fill="#2D2E2B" filter="url(#filter-10)"></path><path d="M107.64,3.314 C165.104,3.314 211.692,49.908 211.692,107.363 C211.692,159.347 173.55,202.437 123.726,210.171 L123.726,201.086 C123.726,198.409 121.646,196.204 118.977,196.046 C110.601,195.557 107.957,184.999 107.957,178.187 C107.957,171.419 109.883,160.305 118.683,160.305 C121.458,160.305 123.726,158.038 123.726,155.262 L123.726,118.061 C123.726,115.283 121.458,113.016 118.683,113.016 L115.529,113.016 C111.356,113.016 107.957,109.617 107.957,105.449 L107.957,104.462 C107.957,102.646 108.53,101.049 109.687,99.649 L113.968,94.457 C115.237,92.922 115.841,91.237 115.841,89.243 L115.841,76.679 C115.841,75.637 114.993,74.787 113.951,74.787 L101.335,74.787 C100.292,74.787 99.44,75.637 99.44,76.679 L99.44,85.688 C99.44,88.267 98.633,90.519 96.994,92.509 L92.715,97.7 C91.929,98.649 91.56,99.675 91.56,100.909 L91.56,113.737 C91.56,116.513 93.827,118.782 96.604,118.782 C105.402,118.782 107.327,129.895 107.327,136.662 C107.327,143.473 104.685,154.035 96.309,154.524 C93.64,154.681 91.56,156.883 91.56,159.559 L91.56,210.171 C41.739,202.437 3.593,159.347 3.593,107.363 C3.593,49.908 50.188,3.314 107.64,3.314" id="Fill-295" fill="#FFFFFF"></path><path d="M110.215,107.436 C136.006,108.773 156.519,130.107 156.519,156.234 C156.519,176.871 143.712,194.522 125.617,201.685 L125.617,201.083 C125.617,197.409 122.758,194.374 119.087,194.16 C111.922,193.742 109.847,183.851 109.847,178.187 C109.847,172.654 111.223,162.198 118.683,162.198 C122.502,162.198 125.617,159.081 125.617,155.262 L125.617,118.061 C125.617,114.239 122.502,111.125 118.683,111.125 L115.529,111.125 C113.103,111.125 111.022,109.587 110.215,107.436 L110.215,107.436 Z M58.769,156.234 C58.769,135.593 71.572,117.943 89.669,110.781 L89.669,113.737 C89.669,117.558 92.783,120.673 96.604,120.673 C104.068,120.673 105.432,131.127 105.432,136.662 C105.432,142.329 103.363,152.217 96.199,152.637 C92.528,152.852 89.669,155.882 89.669,159.559 L89.669,201.685 C71.572,194.522 58.769,176.871 58.769,156.234 L58.769,156.234 Z" id="key-circle" fill-opacity="0.5" fill="url(#radialGradient-11)"></path></g><circle id="keyhole-overlay" fill="url(#linearGradient-12)" sketch:type="MSShapeGroup" cx="143" cy="144" r="104"></circle></g></g></svg>
		

		

		<p id="cookie-warning">You have cookies disabled in your browser. Enable cookies to login.</p>

		

		

		
		<input id="d1" name="d1" type="number" pattern="\d*" tabindex="1" autofocus="autofocus">
		<input id="d2" name="d2" type="number" pattern="\d*" tabindex="2">
		<input id="d3" name="d3" type="number" pattern="\d*" tabindex="3">
		<input id="d4" name="d4" type="number" pattern="\d*" tabindex="4">
		
		<input id="d5" name="d5" type="number" pattern="\d*" tabindex="5">
		
		
		<input id="d6" name="d6" type="number" pattern="\d*" tabindex="6">
		
		

		<p id="placeholder">Enter 6-Digit Pin</p>
		
	</form>
</section>

<footer id="pagesafe-footer">
	

	
</footer>


	<script src="files/stacks_in_18_2_pagesafe.js?rwcache=753644042"></script>
<?php
	if (class_exists('\TotalCMS\ReplaceText')) {
		$totalob = ob_get_clean();
		ob_start();
		$totalreplace = new \TotalCMS\ReplaceText();
		echo $totalreplace->replace($totalob);
	}
	// hack for RW7 so that it does not add Body content
    echo '</bo'.'dy>'; ?>
</html>
<?php
    if (ob_get_level()) {
        ob_end_flush();
    } // send buffer
    exit;
}
?>



</div></div></div></div><!--  -->

      
    </div>
  </main>
  <footer class="theme max_width_wrap_content cf">
    <div class="float_left">&copy; 2014-24 Birkbeck, University of London <a href="#" class="394855D5-4ED7-4683-9DC0-C23BCD349C22">Contact Me (Keith Mannock)</a><script type="text/javascript">(function(){ var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":k.";var _rwObsfuscatedHref3 = "man";var _rwObsfuscatedHref4 = "noc";var _rwObsfuscatedHref5 = "k@b";var _rwObsfuscatedHref6 = "bk.";var _rwObsfuscatedHref7 = "ac.";var _rwObsfuscatedHref8 = "uk";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8; Array.from(document.getElementsByClassName("394855D5-4ED7-4683-9DC0-C23BCD349C22")).forEach(function(x){x.href = _rwObsfuscatedHref});})()</script></div>
    <div class="float_right"></div>
  </footer>
  <div id="config_theme"></div>
  <script>window.jQuery || document.write('<script src="../../rw_common/themes/aspen/assets/js/jquery.js">\x3C/script>')</script>
  <script type="text/javascript" src="../../rw_common/themes/aspen/assets/js/function-min.js"></script>
<rapidweaver-badge url="https://www.bbk.ac.uk" position-x="left" position-y="bottom" transition="fade" delay-type="time" delay="1000" mode="auto" target="_blank"><img src= "../../rw_common/assets/bbklogo-shield-only.png" alt="Birkbeck Icon" /><p>Birkbeck, University of London</p></rapidweaver-badge>
<script src="../../rw_common/assets/rw-badge.js"></script>
</body>
</html>