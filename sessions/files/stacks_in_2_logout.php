<?php
    session_start();
    $cookie = str_replace(" ", "", 'pagesafe');
    $reload = $cookie.'-reload';
    setcookie($cookie, '', 1, '/');
    setcookie($reload, '', 1, '/');
    unset($_SESSION[$cookie]);
    session_unset();
    session_destroy();
    header('HTTP/1.1 200 Ok');
    exit;
