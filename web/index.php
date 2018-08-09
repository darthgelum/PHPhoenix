<?php

$root = dirname(__DIR__);
$loader = require $root.'/vendor/autoload.php';
$loader->add('', $root.'/classes/');

$phoenix = new \App\Phoenix;
$phoenix->bootstrap($root)->handle_http_request();
