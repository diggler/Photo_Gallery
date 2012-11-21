<?php

//Define the core paths
//Define tham as absolute paths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : 
	define('SITE_ROOT', DS.'xampp'.DS.'htdocs'.DS.'photo_gallery');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

defined('LOG_PATH') ? null : define('LOG_PATH', SITE_ROOT.DS.'logs');

//load config file frist
require_once(LIB_PATH.DS.'config.php');

//load basic functions next so that everything after can use them
require_once(LIB_PATH.DS.'functions.php');

//Load core objects
require_once(LIB_PATH.DS.'session.php');
require_once(LIB_PATH.DS.'database.php');
require_once(LIB_PATH.DS.'database_object.php');

//Load database-related objects
require_once(LIB_PATH.DS.'user.php');
?>