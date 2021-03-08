<?php 
session_start();
// require('api/v1/userObject.php');

//logout
// $user->logout();  --> session_destroy() keeps failing

$_SESSION = array();	

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

//logged in return to index page
header('Location: login.php');
exit;
?>