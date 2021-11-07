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
        <title><?php echo $_SESSION['first_name'] ?> | Update Profile</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
        <link rel="stylesheet" href="/legitjobs/css/side-nav.css">
        <!-- <link rel="stylesheet" href="/legitjobs/css/client_dashboard.css"> -->
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
                    <a class="link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</a>
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
            </div>
            <div class="section-2">
                <div class="form-section">
                    <h3 class="head-text">Let's get you rolling</h3> <br>
                    <p class="more-i">A good profile attracts potential employer</p>
                    <form id="post">
                        <fieldset class="fieldset-data">
                            <legend class="legend-data">Personal data</legend>
                            <div class="name">
                                <div class="tittle">
                                    <label class="required" for="tittle">Tittle</label> <br>
                                    <select name="tittle" id="tittle">
                                        <option value=""></option>
                                        <option value="Miss">Miss</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                    </select>
                                </div>
                                <div class="first-name">
                                    <label class="required" for="first-name">First Name</label> <br>
                                    <input type="text" name="first-name" id="firstName" value=<?php echo $_SESSION['first_name']; ?>>
                                </div>
                                <div class="last-name">
                                    <label class="required" for="last-name">Last Name</label> <br>
                                    <input type="text" name="last-name" id="lastName" value=<?php echo $_SESSION['last_name']; ?>>
                                </div>
                            </div>
                            <div class="email">
                                <label class="not-required" for="email">Email Address</label> <br>
                                <p class="email-address"><?php echo $_SESSION['email'] ?></p>
                            </div>
                            <div class="phone">
                                <label class="not-required" for="email">Phone</label> <br>
                                <p class="phone-number"><?php echo $_SESSION['phone'] ?></p>
                            </div>
                            <div class="add">
                                <label class="required" for="address">Address</label> <br>
                                <input type="text" id="add" name="add">
                            </div>
                            <div class="address">
                                <div class="group-set1">
                                    <div class="group1">
                                        <label class="required">Country</label> <br>
                                        <select name="country" class="countries" id="countryId">
                                            <option value="">Select Country</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="group-set2">
                                    <div class="group3">
                                        <label class="required">State</label> <br>
                                        <select name="state" class="states" id="stateId">
                                            <option value="">Select State</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="group-set3">
                                    <div class="group4">
                                        <label class="required">City</label> <br>
                                        <select name="city" class="cities" id="cityId">
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fieldset-work">
                            <legend class="legend-work">Work history</legend>
                            <div class="work-history">
                                <div class="default">
                                    <div class="organisation">
                                        <label class="required" for="org">Company/Organisation</label> <br>
                                        <input name="organisation" id="org" type="text" class="org">
                                    </div>
                                    <div class="position">
                                        <label class="required" for="position">Position</label> <br>
                                        <input name="role" id="position" type="text">
                                    </div>
                                    <div class="duration" id="default">
                                        <div class="from">
                                            <label class="required" for="dateFrom">From</label> <br>
                                            <input name="datefrom" id="dateFrom" type="date">
                                        </div>
                                        <div class="still-working">
                                            <label class="required" for="stillWorking">Till date</label> <br>
                                            <input onchange="act()" type="checkbox" name="present" id="stillWorking">
                                        </div>
                                        <div class="to">
                                            <label class="required" for="dateTo">To</label> <br>
                                            <input name="dateto" id="dateTo" type="date">
                                        </div>
                                    </div>
                                </div>
                                <span id="showHere"></span>

                                <button type="button" onclick="moreFields()" id="addMore">Add more <i class="fa fa-plus-circle" aria-hidden="true"></i></button>

                                <div class="default2" id="default2">
                                <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" id="remove">Remove field <i class="fa fa-minus-circle" aria-hidden="true"></i></button>
                                    <div class="organisation">
                                        <label class="required" for="org">Company/Organisation</label> <br>
                                        <input name="organisation" id="org2" type="text" class="org">
                                    </div>
                                    <div class="position">
                                        <label class="required" for="position">Position</label> <br>
                                        <input name="role" id="position2" type="text">
                                    </div>
                                    <div class="duration">
                                        <div class="from">
                                            <label class="required" for="dateFrom">From</label> <br>
                                            <input name="datefrom" id="dateFrom2" type="date">
                                        </div>
                                        <div class="still-working">
                                            <label class="required" for="stillWorking">Till date</label> <br>
                                            <input name="dateto" type="checkbox" name="present2" id="stillWorking">
                                        </div>
                                        <div class="to">
                                            <label class="required" for="dateTo">To</label> <br>
                                            <input  id="dateTo2" type="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fieldset-qual">
                            <legend class="legend-qual">Qualification</legend>
                            <div class="qualification-section">
                                <div class="highest-qualification">
                                    <label class="required" for="qual">Highest qualification</label> <br>
                                    <select name="qualification" id="qual">
                                        <option>Select</option>
                                        <option value="NCE">NCE</option>                                        
                                        <option value="BA/BSc/HND">BA/BSc/HND</option>
                                        <option value="SSCE">SSCE</option>
                                        <option value="OND">OND</option>
                                        <option value="MBA/MSc/MA">MBA/MSc/MA</option>
                                    </select>
                                </div>
                                <div class="qual-field">
                                    <label class="required" for="field">Field of study</label> <br>
                                    <input type="text" name="field" id="studyField">
                                </div>
                            </div>
                        </fieldset>

                        <div class="update-btn">
                            <button type="button" id="submit" class="update-button">Update profile</button>
                        </div>
                    </form>
                    <div id="put"></div>
                </div>
            </div>
        </div>
        </div>
        <script src="/legitjobs/js/jquery-3.6.0.min.js"></script>
        <script src="/legitjobs/js/countrystatecity.js"></script>
        <script src="/legitjobs/js/nav-mobile.js"></script>
        <script src="/legitjobs/js/update_resume.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location: home.php");
    exit();
}
?>