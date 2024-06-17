<?php
	require_once "dbconnection.php";
	session_start();
	
	if (!isset($_SESSION['u_id'])) {
		header('Location: views/login.php');
	}
?>