<?php 
	require('session.php');

	if (isset($_SESSION)) {
		session_destroy();
	}
	header("Location: ../form-login.php");
?>