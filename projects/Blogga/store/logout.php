<?php
	session_start(); 
	session_destroy();
	
	header('location: ../store/login/store_login.php');
	exit();
?>