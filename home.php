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
</head>

<body>

    <div class="nav-container">
        <div class="nav-item-left">
            <div class="site-logo">
                <a href="index.php"><img class="logoimg" src="/legitjobs/images/Group 1.png" alt="logo"></a>
            </div>
            <div class="container" onclick="burger(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
        <div class="nav-item-right">
            <div class="nav-links">
                <a href="index.php">Home</a>
                <a href="#news">Resume</a>
                <a href="#news">Blog</a>
                <a href="post_a_job.php">Post Job</a>
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
                    <label for="search" class="search-label"><i class="fa fa-question" aria-hidden="true"></i><input type="search" id="searchJob" placeholder="Job name..."></input></label>


                    <label class="search-label" for="states"><i class="fa fa-map-marker" aria-hidden="true"></i><input type="search" id="searchJob" placeholder="State..."></input></label>
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
                <?php
                $str = '';
                $data_query = mysqli_query($conn, 'SELECT * FROM job_post WHERE user_close= "no" ORDER BY id DESC');

                if (mysqli_num_rows($data_query) > 0) {

                    while ($row = mysqli_fetch_array($data_query)) {
                        $id = $row['id'];
                        $heading = $row['heading'];
                        $job_type =  $row['job_type'];
                        $job_tittle =  $row['job_tittle'];
                        $location =  $row['location'];
                        $location1 =  $row['location1'];
                        $location2 =  $row['location2'];
                        $location3 =  $row['location3'];
                        $location4 =  $row['location4'];
                        $date_time = $row['date_posted'];
                        $company_name  =  $row['company_name'];
                        $company_details  = substr($row['company_details'], 0, 200);
                        $date_time_now = date("Y-m-d H:i:s");
                        $start_date = new DateTime($date_time);
                        $end_date = new DateTime($date_time_now);
                        $interval = $start_date->diff($end_date);


                        if ($interval->y >= 1) {
                            if ($interval->y == 1)
                                $time_message = $interval->y . "Year ago";
                            else
                                $time_message = $interval->y . "Years ago";
                        } else if ($interval->m >= 1) {
                            if ($interval->d == 0) {
                                $days = " ago";
                            } else if ($interval->d == 1) {
                                $days = $interval->d . " day ago";
                            } else {
                                $days = $interval->d . " days ago";
                            }

                            if ($interval->m == 1) {
                                $time_message = $interval->m . " month ago";
                            } else {
                                $time_message = $interval->m . " months ago";
                            }
                        } else if ($interval->d >= 1) {
                            if ($interval->d == 1) {
                                $time_message = " Yesterday";
                            } else {
                                $time_message = $interval->d . " days ago";
                            }
                        } else if ($interval->h >= 1) {
                            if ($interval->h == 1) {
                                $time_message = $interval->h . " hour ago";
                            } else {
                                $time_message = $interval->h . " hours ago";
                            }
                        } else if ($interval->i >= 1) {
                            if ($interval->i == 1) {
                                $time_message = $interval->i . " minute ago";
                            } else {
                                $time_message = $interval->i . " minutes ago";
                            }
                        } else {
                            if ($interval->s < 30) {
                                $time_message = " Just now";
                            } else {
                                $time_message = $interval->s . " seconds ago";
                            }
                        }

                        $str .=
                            "<div class='posted-job'>
                                <h3 class='heading'><a href='job_details.php?id=$id'>$job_tittle at $company_name </a></h3>
        
                                <p class='location'>Location: $location  
                                <span class='location'>$location1 </span>
                                <span class='location'>$location2 </span>
                                <span class='location'>$location3 </span> 
                                <span class='location'>$location4</span></p>
                                <p class='date'>Posted $date_time</p>
                                <p class='date'>Posted $time_message</p>
                                <br>
                                <p class='company-name'> $company_name</p>
                                <p class='company-details'>$company_details<a href='job_details.php?id=$id'> Read more>>></a></p>
                            </div>";
                    }
                }

                echo $str;
                ?>
            </div>
        </div>
        <div class="item3">
            <div class="card">
                <h3>Subscribe For Job Update</h3>
                <input type="email" name="email" id="userEmail" placeholder="Enter your email...">
                <button class="update-btn" onclick="subscribe()">Subscribe</button>
                <div class="container-terms">
                    <p>By subscribing for job updates, you agree to our <a href="#">Terms.</a> You can change your consent settings at any time by unsubscribing.</p>
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