<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(!isset($_SESSION)){
	session_start();
}

//require_once('api/phpmailer/mail.php');
$dbHelper = new dbHelper();
$db = $dbHelper->db;
$user = new User($db);

?>
