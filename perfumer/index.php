<?php
/*
 * PIP v0.5.3
 */
//Start the Session
session_start(); 
// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
define('APP_DIR', ROOT_DIR .'app' . DIRECTORY_SEPARATOR);
// Includes
require(APP_DIR .'conf'. DIRECTORY_SEPARATOR . 'config.php');
require(ROOT_DIR .'core'. DIRECTORY_SEPARATOR . 'model.php');
require(ROOT_DIR .'core'. DIRECTORY_SEPARATOR . 'view.php');
require(ROOT_DIR .'core'. DIRECTORY_SEPARATOR . 'controller.php');
require(ROOT_DIR .'core'. DIRECTORY_SEPARATOR . 'route.php');
// Define base URL
global $config;
define('BASE_URL', $config['base_url']);
echo BASE_URL;
route();
?>