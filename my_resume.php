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
    <title>Manage Resume</title>
    <link rel="stylesheet" href="/legitjobs/css/side-nav.css">
    <link rel="stylesheet" href="/legitjobs/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/chosen.css">
    <link rel="stylesheet" href="/legitjobs/css/client_dashboard.css">

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
          <a class="link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</a>
          <a class="active" href=""><i class="fa fa-wrench" aria-hidden="true"></i>My Resume</a>
          <a class="link" href="edit_profile.php"><i class="fa fa-briefcase" aria-hidden="true"></i>Edit Profile</a>
          <a class="link" href="my_jobs.php"><i class="fa fa-envelope" aria-hidden="true"></i>My Jobs</a>
          <a class="link" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>About Us</a>

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
            <a href="#">View your profile</a> <a href="update_resume.php">Update your profile!!!</a>
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
        
      </div>
    </div>
    <!-- <script src="/legitjobs/js/chosen.jquery.js" type="text/javascript"></script> -->
    <!-- <script src="/legitjobs/js/init.js" type="text/javascript" charset="utf-8"></script> -->
    <script src="/legitjobs/js/jquery-3.6.0.min.js"></script>
    <script src="/legitjobs/js/sweetalert2.all.min.js"></script>

  </body>

  </html>

<?php
} else {
  header("Location: home.php");
  exit();
}
?>