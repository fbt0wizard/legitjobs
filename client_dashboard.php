<?php 
session_start();

if (isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1> <?php echo $_SESSION['first_name']; ?>, you registered</h1> <a href="/legitjobs/engine/client_logout.php">Logout</a>
</body>
</html>

<?php
} else {
  header("Location: sign_in.php?error=Please sign in");
  exit();
}
?>