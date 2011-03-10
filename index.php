<?php

// for use in development mode
error_reporting(E_ALL);

define('BASE_PATH', dirname(realpath(__FILE__)) . '/');
define('APP_PATH', BASE_PATH . 'app/');

include BASE_PATH . 'libraries/core.php';