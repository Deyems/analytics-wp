<?php


/**
 * Entry Point
 */
require_once '../vendor/autoload.php';

$app = new App\Application();
$app->mount();

