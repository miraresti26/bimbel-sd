<?php
	require_once 'conn.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$status 	  = $_POST['status'];
	$conn->query("UPDATE admin SET username = '$username', password = '$password', status = '$status' WHERE admin_id = '$_REQUEST[admin_id]'") or die(mysqli_error());