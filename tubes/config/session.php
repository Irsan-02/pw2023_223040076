<?php 
	session_start();
	if(!isset($_SESSION['id_user'])) header("Location: form-login.php");
?>