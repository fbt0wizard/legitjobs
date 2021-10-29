<?php 
session_start();
require "engine/db_conn.php";

if (isset($_SESSION['username'])) {
        $id = $_GET['id'];

        $str = '';
        $sql = "SELECT * FROM `job_post` WHERE id='$id'";

        $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
      $id = $row['id'];
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
      $company_details  = $row['company_details'];

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

              <p class='experience'><span class='names'>Experience </span><a href='#'>$experience - $experience_to years</a></p>
              <p class='job_type'><span class='names'>Job Type </span><a href='#'> $job_type</a></p>
              <p class='qualification'><span class='names'>Qualification </span><a href='#'> $qualification</a></p>
              <p class='job_field'><span class='names'>Job Field </span><a class='field' href='#'> $job_field</a></p>


              <p class='job-details-section'>Job Descibtion:</p>

              <div class='job-describtion'>$job_describtion</div>
              
              <p class='app-method'>Application Method:</p>

              <p class='App-method'>$job_methos</p>
          </div>";
    }
  }

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $heading ?></title>
    <link rel="stylesheet" href="/legitjobs/css/client_dashboard.css">
    <link rel="stylesheet" href="/legitjobs/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="/legitjobs/css/side-nav.css">
    <link rel="stylesheet" href="/legitjobs/css/jobs.css">
    <link rel="stylesheet" href="css/chosen.css">

  </head>

  <body>
    <div class="sticky-side-nav">
      <div class="side-nav">
        <div class="site-logo">
          <a href="index.php"><img class="logoimg" src="/legitjobs/images/Group 1.png" alt="logo"></a>
          <p class="close-nav">
            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
          </p>
        </div>
        <div class="nav-links">
          <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</a>
          <a href="#"><i class="fa fa-wrench" aria-hidden="true"></i>My Resume</a>
          <a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i>Edit Profile</a>
          <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>My Jobs</a>
          <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>About Us</a>

        </div>
      </div>
    </div>

    <div class="main-body" id="mainBody">
      <div class="top-nav">
        <div class="mobile-menu">
          <div class="left-side">
            <div class="burger">
              <div class="l1"></div>
              <div class="l2"></div>
              <div class="l3"></div>
            </div>
          </div>
          <div class="right-nav-link">
            <div class="right-link-container">
              <div class="right-link-links">
                <a href="jobs_section.php">Jobs</a>
              </div>
                <div class="dropdown">
                    <button class="dropbtn"><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php echo $_SESSION['first_name']; ?></button>
                    <div class="dropdown-content">
                      <a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Account Settings</a>
                      <a href="/legitjobs/engine/client_logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-1">
        <div class="profile">
          <h3 class="p-logo">
            OD
          </h3>
        </div>
        <div class="prgress">
          <div class="user-name">
            <h2 class="f-name">
              Hi, <?php echo $_SESSION['first_name']; ?>
            </h2>
            <a href="#">View your profile</a> <a href="update_resume.php">Update your resume now</a>
          </div>

          <div id="progressbar">
            <div></div>
          </div>
          <p class="profile-completion">
            Almost ready... Your profile is <strong class="process">20%</strong> completed.
          </p>
          <p class="complete">It's time to complete your profile for that dream job!</p>
        </div>
      </div>
      <div class="section-2">
        <div class="grid-container">
          <!-- <div class="item1">
              <div class="sub-item3">
                <h3>Hot jobs container</h3>
              </div>
          </div> -->
          <div class="item2">
            <?php echo $str; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- <script src="/legitjobs/js/chosen.jquery.js" type="text/javascript"></script> -->
    <!-- <script src="/legitjobs/js/init.js" type="text/javascript" charset="utf-8"></script> -->
    <script src="/legitjobs/js/jquery-3.6.0.min.js"></script>
    <script src="/legitjobs/js/sweetalert2.all.min.js"></script>
    <script src="js/test.js"></script>

  </body>

  </html>

<?php
} else {
  header("Location: sign_in.php");
  exit();
}
?>