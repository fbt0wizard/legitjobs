<?php
session_start();

if (isset($_SESSION['username'])) {
  require "engine/db_conn.php";

  $email = $_SESSION['email'];
  $prefirst = $_SESSION['first_name'];
  $presecond = $_SESSION['last_name'];
  $first = $prefirst[0];
  $second = $presecond[0];

  $loc_query = mysqli_query($conn, "SELECT * FROM user_data WHERE email= '$email'");
  if (mysqli_num_rows($loc_query) > 0) {

    while ($row = mysqli_fetch_array($loc_query)) {
      $pref = $row['location_state'];
      $qualification_pref = $row['qualification'];
      $jobType = $row['job_type'];
      $profile_pics = $row['profile_pics'];
    }
  }
  $str = '';

  if (strlen($pref) < 2 && strlen($qualification_pref) < 2 && strlen($jobType) < 2) {
    $data_query = mysqli_query($conn, 'SELECT * FROM job_post WHERE user_close= "no" ORDER BY id DESC');
  } elseif (strlen($pref) > 2 && strlen($qualification_pref) > 2 && strlen($jobType) > 2) {
    $data_query = mysqli_query($conn, "SELECT * FROM job_post WHERE location= '$pref' && qualification = '$qualification_pref' && job_type='$jobType' && user_close= 'no' ORDER BY id DESC");
  } elseif (strlen($qualification_pref) > 2 && strlen($pref) > 2) {
    $data_query = mysqli_query($conn, "SELECT * FROM job_post WHERE location= '$pref' && qualification = '$qualification_pref' && user_close= 'no' ORDER BY id DESC");
  } elseif (strlen($jobType) > 2 && strlen($pref) > 2) {
    $data_query = mysqli_query($conn, "SELECT * FROM job_post WHERE location= '$pref' && job_type='$jobType' && user_close= 'no' ORDER BY id DESC");
  } elseif (strlen($pref) > 2) {
    $data_query = mysqli_query($conn, "SELECT * FROM job_post WHERE location= '$pref' && user_close= 'no' ORDER BY id DESC");
  } elseif (strlen($pref) > 2 && strlen($qualification_pref) > 2) {
    $data_query = mysqli_query($conn, "SELECT * FROM job_post WHERE location= '$pref' && qualification = '$qualification_pref' && user_close= 'no' ORDER BY id DESC");
  } elseif (strlen($jobType) > 2 && strlen($qualification_pref) > 2) {
    $data_query = mysqli_query($conn, "SELECT * FROM job_post WHERE qualification = '$qualification_pref' && job_type='$jobType' && user_close= 'no' ORDER BY id DESC");
  } elseif (strlen($qualification_pref) > 2) {
    $data_query = mysqli_query($conn, "SELECT * FROM job_post WHERE qualification = '$qualification_pref' && user_close= 'no' ORDER BY id DESC");
  } elseif (strlen($qualification_pref) > 2 && strlen($jobType) > 2) {
    $data_query = mysqli_query($conn, "SELECT * FROM job_post WHERE job_type='$jobType' && qualification = '$qualification_pref' && user_close= 'no' ORDER BY id DESC");
  } elseif (strlen($pref) > 2 && strlen($jobType) > 2) {
    $data_query = mysqli_query($conn, "SELECT * FROM job_post WHERE location= '$pref' && job_type='$jobType' && user_close= 'no' ORDER BY id DESC");
  } elseif (strlen($jobType) > 2) {
    $data_query = mysqli_query($conn, "SELECT * FROM job_post WHERE job_type = '$jobType' && user_close= 'no' ORDER BY id DESC");
  }




  if (mysqli_num_rows($data_query) > 0) {

    while ($row = mysqli_fetch_array($data_query)) {
      $id = $row['id'];
      $heading = $row['heading'];
      $experience = $row['experience'];
      $experience_to = $row['experience_to'];
      $qualification =  $row['qualification'];
      $job_type =  $row['job_type'];
      $job_tittle =  $row['job_tittle'];
      $location =  $row['location'];
      $location1 =  $row['location1'];
      $location2 =  $row['location2'];
      $location3 =  $row['location3'];
      $location4 =  $row['location4'];
      $job_describtion =  $row['job_describtion'];
      $job_methos  =  $row['job_methos'];
      $date_time = $row['date_posted'];
      $company_name  =  $row['company_name'];
      $company_details  = substr($row['company_details'], 0, 100);

      $str .=
        "<div class='posted-job'>
                    <h3 class='heading'><a href='jobs.php?id=$id'>$job_tittle at $company_name </a></h3>

                    <p class='location'>Location: $location  
                    <span class='location'>$location1 </span>
                    <span class='location'>$location2 </span>
                     <span class='location'>$location3 </span> 
                     <span class='location'>$location4</span></p>
                    <p class='date'>Posted $date_time</p>
                        <br>
                    <p class='company-name'> $company_name</p>
                    <p class='company-details'>$company_details<a href='jobs.php?id=$id'> Read more>>></a></p>
                </div>";
    }
  } else {
    $str = '<h3 style="text-align: center; color: #008080; margin-top: 1rem;">No job found</h3>
          <br> <p style="text-align: center; color: #464646; font-size: 13px;">Kindly adjust your prefrence</p>';
  }

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['first_name']; ?> | Dashboard</title>
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
          <a class="active" href=""><i class="fa fa-home" aria-hidden="true"></i>Dashboard</a>
          <a class="link" href="my_resume.php"><i class="fa fa-id-card-o" aria-hidden="true"></i>My Resume</a>
          <a class="link" href="edit_profile.php"><i class="fa fa-user-o" aria-hidden="true"></i>Edit Profile</a>
          <a class="link" href="my_jobs.php"><i class="fa fa-briefcase" aria-hidden="true"></i>My Jobs</a>
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
                <a href="jobs_section.php">Jobs | search <i class="fa fa-search" aria-hidden="true"></i></a>
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
          <?php if (strlen($profile_pics) < 4) { ?>
            <h3 onclick="upload()" class="p-logo" id="profileText">
              <?php echo $first;
              echo $second; ?>
            </h3>
          <?php } else { ?>
            <div onclick="upload()" class="img">
              <img src="<?php echo $profile_pics ?>" alt="">
            </div>
          <?php } ?>
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
        <div class="filter-container">
          <p class="filter">
            Showing jobs in: <?php if (strlen($pref) == 0) {
                                echo "Nigeria";
                              } else {
                                echo $pref;
                              }  ?>
          </p>
          <p class="filter">
            Qualification: <?php if (strlen($qualification_pref) == 0) {
                              echo "All qualifications";
                            } else {
                              echo $qualification_pref;
                            } ?>
          </p>
          <p class="filter">
            Job type: <?php if (strlen($jobType) == 0) {
                        echo "All job types";
                      } else {
                        echo $jobType;
                      } ?>
          </p>
        </div>
        <div class="grid-container">
          <div class="item1">
            <div class="sub-item1">
              <div class="filter-heading">
                <h3 class="job-control">
                  Choose the type of job to see
                </h3>
              </div>
              <button class="right-links" onclick="setLocation()">
                <h3 class="update-profile">
                  Set your job preference
                </h3>
                <p class="more-updates">
                  Choose the type of job to be displayed<br> on your dashboard.
                </p>
              </button>
            </div>
            <div class="sub-item3">
              <h3>Featured Jobs</h3>
              <div id="hotResults">

              </div>
            </div>
          </div>
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
    <script src="/legitjobs/js/nav-mobile.js"></script>

  </body>

  </html>

<?php
} else {
  header("Location: home.php");
  exit();
}
?>