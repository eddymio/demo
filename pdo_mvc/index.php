<?php

require __DIR__ . "/vendor/autoload.php";

use App\Controller\Frontend;

$controller = new Frontend();
$controller->home();

