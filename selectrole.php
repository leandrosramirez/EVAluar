<?php 
session_start();
$_SESSION['role'] = $_GET['role'];
//logged in return to index page
header('Location: index.php');
exit;
?>