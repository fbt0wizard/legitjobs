<?php
require('db_conn.php');
session_start();

	// removes backslashes
	$username = stripslashes($_POST['username']);
	//escapes special characters in a string
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_POST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	//check if user exist
	$sql = "SELECT * FROM `users` WHERE username='$username'";
	$response = mysqli_query($conn, $sql);
	$lines = mysqli_num_rows($response);
	if ($lines === 0) {
		echo "User does not exist";
		exit;
	}else {
			//Checking if password is correct and log user in
	$query = "SELECT * FROM `users` WHERE username='$username'
	and password='" . md5($password) . "'";
	$result = mysqli_query($conn, $query);
	$rows = mysqli_num_rows($result);
	if ($rows == 1) {
		$row = mysqli_fetch_assoc($result);

		$_SESSION['username'] = $row['username'];
		$_SESSION['first_name'] = $row['first_name'];
		$_SESSION['last_name'] = $row['last_name'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['phone'] = $row['phone_no'];
		$_SESSION['trn_date'] = $row['trn_date'];
		$_SESSION['id'] = $row['id'];
	

		echo "good";
	}else {
		echo "Incorrect Password";
	}
	}


