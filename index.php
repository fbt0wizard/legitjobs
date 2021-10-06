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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/legitjobs/css/style.css">
    <link rel="stylesheet" href="/legitjobs/css/nav.css">
</head>

<body>

    <div>
        <div class="navbar">
            <div class="site-logo">
                <a href="#"><img class="logoimg" src="/legitjobs/images/Group 1.png" alt="logo"></a>
            </div>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#news">Resume</a>
                <a href="#news">Blog</a>
            </div>
            <div class="sign-in">
                <a href="./sign_in.php">Sign In</a>/<a href="./sign_up.php">Sign Up</a>
            </div>
        </div>
    </div>
    </div>


    <div>
        <div class="grid-container">
            <div class="grid-item-search">
                <input type="search" id="searchJob" placeholder="Job name..."></input>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <input type="search" id="searchJob" placeholder="State..."></input>
                <button class="search"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>

    <!-- hero sectiom -->
    <div class="hero">

        <div class="card-right">
            <div class="side-links">
                <a href="#">Apply for CV Review</a>
                <a href="#">Apply for Internship</a>
                <a href="#">local and international scholarship</a>
                <a href="#">Career advice</a>
            </div>
        </div>
        <div class="middle-card">

        </div>
        <div class="card-2">
            <?php
            $str = '';
            $data_query = mysqli_query($conn, 'SELECT * FROM job_post WHERE user_close= "no" ORDER BY id DESC');

            if (mysqli_num_rows($data_query) > 0) {

                while ($row = mysqli_fetch_array($data_query)) {
                    $id = $row['id'];
                    $heading = $row['heading'];
                    $experience = $row['experience'];
                    $experience_to = $row['experience_to'];
                    $qualification =  $row['qualification'];
                    $job_type =  $row['job_type'];
                    $location =  $row['location'];
                    $job_describtion =  $row['job_describtion'];
                    $job_methos  =  $row['job_methos'];
                    $date_posted  =  $row['date_posted'];
                    $company_name  =  $row['company_name'];
                    $company_details  =  $row['company_details'];

                    $str .=
                    "<div class='posted-job-1'>
                    <h3><a href='#'>$heading </a></h3>
    
                    <p class='location'> $location </p>
                    <p class='date'>Posted on $date_posted</p>
                    <p class='apply-now'>
                        <a href=''><i class='fa fa-envelope' aria-hidden='true'></i>Apply Now</a>
                    </p>
                    <p class='company-name'>$company_name</p>
                    <p class='company-details'>$company_details</p>
                </div>";
                }
            }
            echo $str;
            ?>
        </div>
       <div class="right">
        </div>
        <div class="card">
            <h3>Sign Up For Jobs Update</h3>
            <input type="email" name="email" id="userEmail" placeholder="Enter your email...">
            <button class="update-btn" onclick="subscribe()">Get Updates Now</button>
            <div class="container">
                <p>By signing up for jobs updates, you agree to our <a href="#">Terms.</a> You can change your consent settings at any time by unsubscribing.</p>
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