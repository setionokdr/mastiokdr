<?php

// Front controller sederhana untuk CodeIgniter 4.
// Untuk instalasi penuh, jalankan `composer install` lalu gunakan index.php bawaan CI4.

define('APPPATH', dirname(__DIR__) . '/app/');

require_once dirname(__DIR__) . '/vendor/autoload.php';

$app = Config\Services::codeigniter();
$app->initialize();
$app->run();
