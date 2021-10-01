<?php  
include "clientdb_conn.php";

if (isset($_REQUEST['submit'])){
    // removes backslashes

$fname = stripslashes($_REQUEST['fname']);
$lname = stripslashes($_REQUEST['lname']);
$username = stripslashes($_REQUEST['username']);
$email = stripslashes($_REQUEST['email']);
$email2 = stripslashes($_REQUEST['email2']);
$password = stripslashes($_REQUEST['password']);
$password2 = stripslashes($_REQUEST['password2']);
$phone = stripslashes($_REQUEST['phone']);

// Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);

    if (strlen($fname) < 4) {
		header("Location: sign_up.php?error=Firstname must be minimum of three characters");
	    exit();
	}else if(strlen($lname) < 4){
        header("Location: sign_up.php?error=lastname must be minimum of three characters");
	    exit();
	}else if(strlen($username) < 5) {
        header("Location: sign_up.php?error=Username must be minimum of four characters");
        exit();
    }else if(strlen($email) < 7) {
        header("Location: sign_up.php?error=Invalid email");
        exit();
    }else if(strlen($phone) < 10){
        header("Location: sign_up.php?error=Invalid Phone Number");
        exit();
    }

    if(strcmp($email, $email2) != 0) {
        header("Location: sign_up.php?error=Email do not match");
        exit;
    }

    if(strlen($password) < 6) {
        header("Location: sign_up.php?error=Password too short!");
        exit;
    }
    if(!$number) {
        header("Location: sign_up.php?error=Password must include at least one number!");
        exit;
    }
    if(!$uppercase) {
        header("Location: sign_up.php?error=Password must include at least one uppercase letter!");
        exit;
    }
    if(strcmp($password, $password2) != 0) {
        header("Location: sign_up.php?error=Password do not match");
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
    
    $query = "INSERT into `users` (first_name, last_name, username, password, phone_no, email, trn_date)
     VALUES ('$fname', '$lname', '$username', '".md5($password)."', '$phone', '$email', '$trn_date')";
    $result = mysqli_query($conn,$query);
    if($result){
        header("Location: sign_in.php?success=Registration successfull, please sign in now");
    }
}
?>