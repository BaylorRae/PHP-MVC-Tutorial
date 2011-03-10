<?php

if( !empty($_POST['_method']) && in_array($_POST['_method'], array('put', 'delete')) ) {
  $_SERVER['REQUEST_METHOD'] = strtoupper($_POST['_method']);
}

include 'object.php';
include 'controller.php';
include 'sammy.php';
include 'router.php';

include BASE_PATH . 'config/routes.php';

$sammy->run();