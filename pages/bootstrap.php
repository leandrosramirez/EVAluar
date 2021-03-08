<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ('lib/xcrud/xcrud.php');
//require ('lib/xcrud/xcrud_config.php'); // configuration
define('DBHOST',		Xcrud_config::$dbhost);
define('DBUSER',		Xcrud_config::$dbuser);
define('DBPASS',		Xcrud_config::$dbpass);
define('DBNAME',		Xcrud_config::$dbname);
define('APPNAME','XCRUD Enterprise V1.0');
define('DBCHARSET',	'utf8mb4');

require_once('api/v1/dbHelper.php');
require_once('api/authentication/user.php');
require_once('api/v1/userObject.php');
require_once('api/v1/modelObject.php');

?>
