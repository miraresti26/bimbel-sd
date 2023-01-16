<?php
	require_once 'conn.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$status   = "Belum";
	$conn->query("INSERT INTO `admin` VALUES('', '$username', '$password','$status')") or die(mysqli_error());
