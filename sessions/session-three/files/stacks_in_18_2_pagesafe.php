<?php
session_start();

header('pwa-no-cache: true');

function forbidden_death()
{
    header('HTTP/1.0 403 Forbidden');
    die('Access Denied');
}

if (!isset($_POST['request'])) {
    forbidden_death();
}

$passcode = <<<PASSWORDS
131721
PASSWORDS;



$request   = $_POST['request'];
$passwords = preg_split('/\s+/', $passcode, -1, PREG_SPLIT_NO_EMPTY);
$master    = array();

foreach ($passwords as $password) {
    $master[] = base64_encode($password.'p8g3s8f3s8lt');
}

if (in_array($request, $master)) {
    $cookie = str_replace(" ", "", 'pagesafe');
    $hash   = password_hash($cookie.session_id(), PASSWORD_DEFAULT);
    $days   = 1;
    $unit   = 24*60*60;
    $expire = time()+($days*$unit);
    $_SESSION[$cookie] = true;
    header('HTTP/1.1 200 Ok');
    setcookie($cookie, $hash, $expire, '/');
    echo "Access Granted";
} else {
    forbidden_death();
}
exit;
