<?php
if(!isset($_SESSION)){
	session_start();
}
require_once('dbHelper.php');
require_once('api/model/model.php');
require_once('api/phpmailer/mail.php');

$dbHelper = new dbHelper();
$db = $dbHelper->db;
$model = new Model($db);

?>
