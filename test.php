<?php
require_once __DIR__ . '/vendor/autoload.php';

use Pack\Test\Service;

$obj = new Service();
print_r($obj);exit();

$msg = $obj->hello();
var_dump($msg);