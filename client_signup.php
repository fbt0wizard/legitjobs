<?php  
include "clientdb_conn.php";

if (isset($_REQUEST['submit'])){
    // removes backslashes
$fname = stripslashes($_REQUEST['fname']);
$lname = stripslashes($_REQUEST['lname']);
$username = stripslashes($_REQUEST['username']);
$email = stripslashes($_REQUEST['email']);
$password = stripslashes($_REQUEST['password']);
$phone = stripslashes($_REQUEST['phone']);
    //escapes special characters in a string
$fname = mysqli_real_escape_string($conn,$fname); 
$lname = mysqli_real_escape_string($conn,$lname); 
$username = mysqli_real_escape_string($conn,$username); 
$email = mysqli_real_escape_string($conn,$email);
$password = mysqli_real_escape_string($conn,$password);
$phone = mysqli_real_escape_string($conn,$phone);
$trn_date = date("Y-m-d H:i:s");
     $query = "INSERT into `users` (first_name, last_name, username, password, phone_no, email, trn_date)
     VALUES ('$fname', '$lname', '$username', '".md5($password)."', '$phone', '$email', '$trn_date')";
    $result = mysqli_query($conn,$query);
    if($result){
        header("Location: sign_in.php?success=Registration success, please sign in now");
    }
}
?>