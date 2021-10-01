<?php
require('clientdb_conn.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])) {
	// removes backslashes
	$username = stripslashes($_REQUEST['username']);
	//escapes special characters in a string
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	//check if user exist
	$sql = "SELECT * FROM `users` WHERE username='$username'";
	$response = mysqli_query($conn, $sql);
	$lines = mysqli_num_rows($response);
	if ($lines === 0) {
		header("Location: sign_in.php?error=User does not exist");
		exit;
	}
	//Checking if user existing in the database or not
	$query = "SELECT * FROM `users` WHERE username='$username'
		and password='" . md5($password) . "'";
	$result = mysqli_query($conn, $query)/* or die(mysql_error())*/;
	$rows = mysqli_num_rows($result);
	if ($rows == 1) {
		$row = mysqli_fetch_assoc($result);

		$_SESSION['username'] = $row['username'];
		$_SESSION['first_name'] = $row['first_name'];
		$_SESSION['last_name'] = $row['last_name'];
		$_SESSION['trn_date'] = $row['trn_date'];
		$_SESSION['id'] = $row['id'];


		header("Location: client_dashboard.php");
		echo "success";
	} else {
		header("Location: sign_in.php?error=Invalid password");
	}
}
