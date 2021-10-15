<?php
require "engine/db_conn.php";
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
    <link rel="stylesheet" href="/legitjobs/css/p_cv.css">
</head>

<body>

<div class="nav-container">
        <div class="nav-item-left">
            <div class="site-logo">
                <a href="home.php"><img class="logoimg" src="/legitjobs/images/Group 1.png" alt="logo"></a>
            </div>
            <div class="container" onclick="burger(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
        <div class="nav-item-right">
            <div class="nav-links">
                <a href="home.php">Home</a>
                <a href="#news">Resume</a>
                <a href="#news">Blog</a>
            </div>
            <div class="sign-in">
                <a href="./sign_in.php">Sign In</a><a href="./sign_up.php">Sign Up</a>
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

    <div class="grid-container">
        <div class="item1">
            <div class="card-left">
                <div class="side-links">
                    <a href="premium_cv_review.php">Apply for CV Review</a>
                    <a href="#">Apply for Internship</a>
                    <a href="#">Scholarship</a>
                    <a href="#">Career advice</a>
                </div>
            </div>
        </div>
        <div class="item2">
            <div class="card-2">
                <div class="columns">
                    <ul class="price">
                        <li class="header">Free</li>
                        <li class="grey">&#8358;0.00</li>
                        <li>10GB Storage</li>
                        <li>10 Emails</li>
                        <li>10 Domains</li>
                        <li>1GB Bandwidth</li>
                        <li class="grey"><a href="#" class="button">Sign Up</a></li>
                    </ul>
                </div>

                <div class="columns">
                    <ul class="price">
                        <li class="header" style="background-color:#008080">Pro</li>
                        <li class="grey">&#8358;10,000</li>
                        <li>25GB Storage</li>
                        <li>25 Emails</li>
                        <li>25 Domains</li>
                        <li>2GB Bandwidth</li>
                        <li class="grey"><a href="#" class="button">Sign Up</a></li>
                    </ul>
                </div>

                <div class="columns">
                    <ul class="price">
                        <li class="header">Premium</li>
                        <li class="grey">&#8358;20,000</li>
                        <li>50GB Storage</li>
                        <li>50 Emails</li>
                        <li>50 Domains</li>
                        <li>5GB Bandwidth</li>
                        <li class="grey"><a href="#" class="button">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="item3">
            <div class="card">
                <h3>Subscribe For Jobs Update</h3>
                <input type="email" name="email" id="userEmail" placeholder="Enter your email...">
                <button class="update-btn" onclick="subscribe()">Subscribe</button>
                <div class="container-terms">
                    <p>By subscribing for jobs updates, you agree to our <a href="#">Terms.</a> You can change your consent settings at any time by unsubscribing.</p>
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