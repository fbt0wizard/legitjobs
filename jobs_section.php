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
        <title>Job || Search</title>
        <!-- <link rel="stylesheet" href="/legitjobs/css/client_dashboard.css"> -->
        <link rel="stylesheet" href="/legitjobs/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
        <link rel="stylesheet" href="/legitjobs/css/side-nav.css">
        <link rel="stylesheet" href="/legitjobs/css/job_section.css">
        <link rel="stylesheet" href="css/chosen.css">
        <link rel="stylesheet" href="css/loader.css">

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
                <a class="link" href="#"><i class="fa fa-wrench" aria-hidden="true"></i>My Resume</a>
                <a class="link" href="#"><i class="fa fa-briefcase" aria-hidden="true"></i>Edit Profile</a>
                <a class="link" href="#"><i class="fa fa-envelope" aria-hidden="true"></i>My Jobs</a>
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
                                <a href="#">Jobs</a>
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
            <fieldset class="search-fieldset">
                <legend>Which job are you looking for?</legend>
                <br>
                <form >
                    <div class="search-flex-container">
                        <div class="search1">
                            <label id="labelOne" for="keyword">Which job? : <input type="text" autocomplete="off" placeholder="job tittle or company" name="name-search" id="keyword">
                            </label>
                            <div id="results"></div>

                        </div>
                        <div class="search2">
                            <label id="labelTwo" for="locationKey">Where? : <input type="text" autocomplete="off" placeholder="city or state" name="location-search" id="locationKey"></label>
                            <div id="loc"></div>
                        </div>
                        <div class="search3">
                            <button id="fireSearch" type="submit">Find Job</button>
                        </div>
                    </div>
                </form>

            </fieldset>
            <div class="section-2">
            <div class="grid-container">
                <div class="item1">
                    <div class="sub-item1">
                        <div class="filter-heading">
                            <h3 class="job-control">
                                Maybe for advert
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="item2">
                    <div class="search-result" id="searchResult">

                    </div>
                </div>
            </div>
            </div>
            <div class="loading-bar" id="loadingBar">
                <div class="loader">
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                </div>
            </div>
            <div class="search-history" id="searchHistory">
                <h2 class="search-head">Popular searches</h2>
                <div class="search-keys">
                    <a href="#">Remote jobs <i class="fa fa-search" aria-hidden="true"></i></a>
                    <a href="#">Lagos <i class="fa fa-search" aria-hidden="true"></i></a>
                    <a href="#">Abuja <i class="fa fa-search" aria-hidden="true"></i></a>
                    <a href="#">Banking <i class="fa fa-search" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>

        <script src="/legitjobs/js/jquery-3.6.0.min.js"></script>
        <script src="/legitjobs/js/sweetalert2.all.min.js"></script>
        <script src="/legitjobs/js/live_search.js"></script>


    </body>

    </html>

<?php
} else {
    header("Location: backend.php");
    exit();
}
?>