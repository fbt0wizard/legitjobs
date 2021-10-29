<?php
session_start();
require "engine/db_conn.php";

if (isset($_SESSION['username'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Resume</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
        <link rel="stylesheet" href="/legitjobs/css/side-nav.css">
        <link rel="stylesheet" href="/legitjobs/css/client_dashboard.css">
        <link rel="stylesheet" href="/legitjobs/css/update_resume.css">
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
                                    <a href="#">Account Settings</a>
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
                        <a href="#">View your profile</a>
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
                <div class="form-section">
                    <h3 class="head-text">Let's get you rolling</h3>
                    <form action="#">
                        <div class="name">
                            <div class="tittle">
                                <label for="tittle">Tittle</label> <br>
                                <select name="tittle" id="tittle">
                                    <option value=""></option>
                                    <option value="Miss">Miss</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                </select>
                            </div>
                            <div class="first-name">
                                <label for="first-name">First Name</label> <br>
                                <input type="text" name="first-name" id="firstName" value=<?php echo $_SESSION['first_name']; ?>>
                            </div>
                            <div class="last-name">
                                <label for="last-name">Last Name</label> <br>
                                <input type="text" name="last-name" id="lastName" value=<?php echo $_SESSION['last_name']; ?>>
                            </div>
                        </div>
                        <div class="email">
                            <label for="email">Email Address</label> <br>
                            <p class="email-address"><?php echo $_SESSION['email'] ?></p>
                        </div>
                        <div class="phone">
                            <label for="email">Phone</label> <br>
                            <p class="phone-number"><?php echo $_SESSION['phone'] ?></p>
                        </div>
                        <div class="add">
                            <label for="address">Address</label> <br>
                            <input type="text" id="add" name="add">
                        </div>
                        <div class="address">
                            <div class="group-set1">
                                <div class="group1">
                                    <label>Country</label> <br>
                                    <select name="country" class="countries" id="countryId">
                                        <option value="">Select Country</option>
                                    </select>
                                </div>
                            </div>
                            <div class="group-set2">
                                <div class="group3">
                                    <label>State</label> <br>
                                    <select name="state" class="states" id="stateId">
                                        <option value="">Select State</option>
                                    </select>
                                </div>
                            </div>
                            <div class="group-set3">
                                <div class="group4">
                                    <label>City</label> <br>
                                    <select name="city" class="cities" id="cityId">
                                        <option value="">Select City</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="update-btn">
                            <button class="update-button">Update profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <script src="/legitjobs/js/jquery-3.6.0.min.js"></script>
        <!-- <script src="/legitjobs/js/jquery-min.js"></script> -->
        <script src="/legitjobs/js/countrystatecity.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location: home.php");
    exit();
}
?>