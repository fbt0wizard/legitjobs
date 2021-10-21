<?php  
include "db_conn.php";

    // removes backslashes

$fname = stripslashes($_REQUEST['first_name']);
$lname = stripslashes($_REQUEST['last_name']);
$username = stripslashes($_REQUEST['username']);
$email = stripslashes($_REQUEST['email']);
$email2 = stripslashes($_REQUEST['v_email']);
$password = stripslashes($_REQUEST['password']);
$password2 = stripslashes($_REQUEST['v_password']);
$phone = stripslashes($_REQUEST['phone']);

// Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);

    if (strlen($fname) < 4) {
		echo 'Firstname must be minimum of three characters';
	    exit();
	}else if(strlen($lname) < 4){
       echo 'lastname must be minimum of three characters';
	    exit();
	}else if(strlen($username) < 5) {
       echo 'Username must be minimum of four characters';
        exit();
    }else if(strlen($email) < 7) {
        echo 'Invalid email';
        exit();
    }else if(strlen($phone) < 10){
        echo 'Invalid Phone Number';
        exit();
    }

    if(strcmp($email, $email2) != 0) {
        echo 'Email do not match';
        exit;
    }

    if(strlen($password) < 6) {
       echo 'Password too short!';
        exit;
    }
    if(!$number) {
        echo 'Password must include at least one number!';
        exit;
    }
    if(!$uppercase) {
        echo 'Password must include at least one uppercase letter!';
        exit;
    }
    if(strcmp($password, $password2) != 0) {
        echo 'Password do not match';
        exit;
    }


    //escapes special characters in a string
    
$fname = mysqli_real_escape_string($conn,$fname); 
$lname = mysqli_real_escape_string($conn,$lname); 
$username = mysqli_real_escape_string($conn,$username); 
$email = mysqli_real_escape_string($conn,$email);
$password = mysqli_real_escape_string($conn,$password);
$phone = mysqli_real_escape_string($conn,$phone);
$trn_date = date("Y-m-d H:i:s");
 
    // conver first letter to uppercase
    $fname = strtolower($fname);
    $lname = strtolower($lname);
    $email = strtolower($email);
    $username = strtolower($username);
    
    $fname = ucfirst($fname);
    $lname = ucfirst($lname);
    $username = ucfirst($username);

    $sql = "SELECT * FROM `users` WHERE username='$username'";

    $outcome = mysqli_query($conn, $sql);
    if (mysqli_num_rows($outcome) === 1) {
        echo 'Username already exist';
        exit;
    }

    $check = "SELECT * FROM `users` WHERE email='$email'";

    $answer = mysqli_query($conn, $check);
    if (mysqli_num_rows($answer) === 1) {
        echo 'Email already exist';
        exit;
    }
    
    $sol = "SELECT * FROM `users` WHERE phone_no='$phone'";

    $res = mysqli_query($conn, $sol);
    if (mysqli_num_rows($res) === 1) {
        echo 'Phone number already exist';
        exit;
    }else {
        $query = "INSERT into `users` (first_name, last_name, username, password, phone_no, email, trn_date)
        VALUES ('$fname', '$lname', '$username', '".md5($password)."', '$phone', '$email', '$trn_date')";
       $result = mysqli_query($conn,$query);

       if($result){
        $second_query = "INSERT into `user_data` (email)
        VALUES ('$email')";
        $second_result = mysqli_query($conn,$second_query);
        if($second_result) {
            echo 'ok';
        }
       }
    }

?>