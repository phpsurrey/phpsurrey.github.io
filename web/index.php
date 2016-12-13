<?php

header('HTTP/1.1 301 Moved Permanently')
header('Location: http://phpberks.co.uk');
die;

$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

$app = require __DIR__.'/../src/app.php';
