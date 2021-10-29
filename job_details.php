<?php
require "engine/db_conn.php";
$id = $_GET['id'];

$str = '';
$sql = "SELECT * FROM `job_post` WHERE id='$id'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $heading = $row['heading'];
        $experience = $row['experience'];
        $experience_to = $row['experience_to'];
        $qualification =  $row['qualification'];
        $job_type =  $row['job_type'];
        $job_tittle =  $row['job_tittle'];
        $job_field =  $row['job_field'];
        $location =  $row['location'];
        $job_describtion =  $row['job_describtion'];
        $job_methos  =  $row['job_methos'];
        $date_time = $row['date_posted'];
        $company_name  =  $row['company_name'];
        $company_details  =  $row['company_details'];

        $str .=
            "<div class='posted-job'>
            <h3 class='heading'><a href='job_details.php?id=$id'>$heading </a></h3>
    
            <p class='location'>Location: $location </p>
            <p class='date'>Posted $date_time</p>
            <p class='apply-now'>
            <a href=''><i class='fa fa-envelope' aria-hidden='true'></i>Apply Now</a>
        </p>
                    <p class='company-section'>Company Details:</p>

                    <p class='company-name'>$company_name</p>
                    <p class='company-details'>$company_details</p>
                    
                    <p class='tittle-qualification'>$job_tittle</p>

                    <p class='experience'><span class='names'>Experience: </span><a href='#'>$experience $experience_to years</a></p>
                    <p class='job_type'><span class='names'>Job Type: </span><a href='#'> $job_type</a></p>
                    <p class='qualification'><span class='names'>Qualification: </span><a href='#'> $qualification</a></p>
                    <p class='job_field'><span class='names'>Job Field: </span><a class='field' href='#'> $job_field</a></p>


                    <p class='job-details-section'>Job Descibtion:</p>

                    <div class='job-describtion'>$job_describtion</div>
                    
                    <p class='app-method'>Application Method:</p>

                    <div class='application-method'>$job_methos</div>
                </div>";
    }
} else {
    echo ('failed');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $heading ?></title>
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
                <?php
                echo $str;
                ?>
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