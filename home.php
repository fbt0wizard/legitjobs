<?php
require "engine/db_conn.php";
require "engine/echo.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legit Jobs</title>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/legitjobs/css/home.css">
</head>
<body>
    
<div class="grid-container">
  <div class="item1">
  <div class="nav-container">
  <div class="flex-nav-left">
  <div class="site-logo">
                <a href="#"><img class="logoimg" src="/legitjobs/images/Group 1.png" alt="logo"></a>
            </div>
  </div>
  <div class="flex-nav-middle">
  <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#news">Resume</a>
                <a href="#news">Blog</a>
            </div>
  </div>
  <div class="flex-nav-right">
  <div class="sign-in">
                <a href="./sign_in.php">Sign In</a><a href="./sign_up.php">Sign Up</a>
            </div>
  </div>
</div>
  </div>
</div>

<div class="grid-search-container">
  <div class="search-item1">
  <div class="search-container">
            <div class="grid-item-search">
                <input type="search" id="searchJob" placeholder="Job name..."></input>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <input type="search" id="searchJob" placeholder="State..."></input>
                <button class="search"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
  </div>
</div>

<div class="flex-container">
  <div class="flex-item-left">
  <div class="card-right">
            <div class="side-links">
                <a href="#">Apply for CV Review</a>
                <a href="#">Apply for Internship</a>
                <a href="#">local and international scholarship</a>
                <a href="#">Career advice</a>
            </div>
        </div>
  </div>
  <div class="flex-item-middle">
  <div class="card-2">
            <?php
            echo $str;
            ?>
        </div>
  </div>
  <div class="flex-item-right">
  <div class="card">
            <h3>Sign Up For Jobs Update</h3>
            <input type="email" name="email" id="userEmail" placeholder="Enter your email...">
            <button class="update-btn" onclick="subscribe()">Get Updates Now</button>
            <div class="container">
                <p>By signing up for jobs updates, you agree to our <a href="#">Terms.</a> You can change your consent settings at any time by unsubscribing.</p>
            </div>
        </div>
  </div>  
</div>


<footer>
        <div class="social-links">
            <p class="facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></p>
            <p class="twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></p>
            <p class="linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></p>

        </div>
        <div class="footer-links">
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Terms of use</a>
            <a href="#">Privacy Policy</a>
            <p>Copyright VOA initiative &#169 2021</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="/legitjobs/js/app.js"></script>
</body>
</html>