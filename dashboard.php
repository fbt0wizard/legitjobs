<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/dashboard.css" />
    <link rel="stylesheet" href="./css/widgEditor.css" />
    <link rel="stylesheet" href="./css/info.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/widgContent.css" />
    <link rel="stylesheet" href="css/chosen.css">
    <!-- <link rel="stylesheet" href="./css/richtext.min.css" /> -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="sidenav">
      <a href="#">Post Job</a>
      <a href="#">Manage Jobs</a>
      <a href="#">Post Blog</a>
      <a href="#">Manage Blog</a>
      <a href="#">Statistics</a>
      <a href="#"></a>
    </div>

    <div class="main">
      <div class="navbar">
        <h3>Hello, <?php echo $_SESSION['name']; ?></h3>
        <a href="/legitjobs/engine/logout.php"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span>Logout</a>
      </div>
      <div class="main-container">
        <div class="job-post" id="jobPost">
          <h3 class="section-name">Post a new job</h3>
          <form method="post">
            <div class="desc">
              <div class="input">
                <label for="heading">Job Heading:</label>
                <input type="text" name="heading" id="heading"> <br>

                <label for="jon-tittle">Job Title:</label>
                <input type="text" name="job-tittle" id="tittle"> <br>

                <label for="job-field">Job field:</label>
                <input type="text" name="job-field" id="jobField"> <br>

                <label for="experience">Experience:</label>
                <select id="experience" name="experience">
                  <option value="">Select</option>
                  <option value="None">None</option>
                  <option value="1 year">1 year</option>
                  <option value="2 years">2 years</option>
                  <option value="3 years">3 years</option>
                  <option value="4 years">4 years</option>
                  <option value="5 years">5 years</option>
                  <option value="6 years">6 years</option>
                  <option value="7 years">7 years</option>
                  <option value="8 years">8 years</option>
                  <option value="9 years">9 years</option>
                  <option value="10 years">10 years</option>
                  <option value="11 years">11 years</option>
                  <option value="12 years">12 years</option>
                  <option value="13 years">13 years</option>
                  <option value="14 years">14 years</option>
                  <option value="15 years">15 years</option>
                  <option value="16 years">16 years</option>
                  <option value="17 years">17 years</option>
                  <option value="18 years">18 years</option>
                  <option value="19 years">19 years</option>
                  <option value="20 years">20 years</option>
                </select> 
                
                <select id="experienceTo" name="experience">
                  <option value="">Select</option>
                  <option value="None">None</option>
                  <option value="to 2 years">to 2 years</option>
                  <option value="to 3 years">to 3 years</option>
                  <option value="to 4 years">to 4 years</option>
                  <option value="to 5 years">to 5 years</option>
                  <option value="to 6 years">to 6 years</option>
                  <option value="to 7 years">to 7 years</option>
                  <option value="to 8 years">to 8 years</option>
                  <option value="to 9 years">to 9 years</option>
                  <option value="to 10 years">to 10 years</option>
                  <option value="to 11 years">to 11 years</option>
                  <option value="to 12 years">to 12 years</option>
                  <option value="to 13 years">to 13 years</option>
                  <option value="to 14 years">to 14 years</option>
                  <option value="to 15 years">to 15 years</option>
                  <option value="to 16 years">to 16 years</option>
                  <option value="to 17 years">to 17 years</option>
                  <option value="to 18 years">to 18 years</option>
                  <option value="to 19 years">to 19 years</option>
                  <option value="to 20 years">to 20 years</option>
                </select> <br>

                <label for="qualification">Qualification:</label>
                <select id="qualification" data-placeholder="Choose Qualification..." name="qualification[]" class="chosen-select" multiple tabindex="4">
                  <option value="">Select</option>
                  <option value="SSCE">SSCE</option>
                  <option value="OND">OND</option>
                  <option value="NCE">NCE</option>
                  <option value="BA/BSc/HND">BA/BSc/HND</option>
                  <option value="MBA/MSc/MA">MBA/MSc/MA</option>
                  <option value="Expatriate Job">Expatriate Job</option>
                </select> <br>

                <label id="typeLabel" for="jobtype">Job Type:</label>
                <select id="jobType" data-placeholder="Choose field..." name="job_field[]" class="chosen-select" multiple tabindex="4">
                  <option value="">Select</option>
                  <option value="Full-Time">Full-Time</option>
                  <option value="Part-Time">Part-Time</option>
                  <option value="Remote">Remote</option>
                  <option value="Contract">Contract</option>
                  <option value="Expatriate Job">Expatriate Job</option>
                </select>

              </div>
              <div class="input-2">
                <label for="location">Job Location:</label>
                <select id="jobLocation" data-placeholder="Choose Location..." name="location[]" class="chosen-select" multiple tabindex="4">
                  <option value="">Select</option>
                  <option value="Abia">Abia</option>
                  <option value="Abuja">Abuja</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="Akwa Ibom">Akwa Ibom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Kastina">Kastina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Pleatu">Pleatu</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamfara</option>
                </select>
              </div>

                  <label for="company-name">Company Name:</label>
                  <input type="text" name="company-name" id="companyName"> <br>

                  <label for="company-details">Company Details:</label>
                  <textarea type="text" name="company-details" id="companyDetails"></textarea>
            </div>
            <fieldset class="description" >
              <label for="job-description">
                Job Description:
              </label>
              <textarea id="jobDescription" name="jobdescription" class="widgEditor nothing">Enter Job Description...</textarea>
            </fieldset>

            <fieldset class="job-method">
              <label for="method">
                Method Of Application:
              </label>
              <textarea id="jobMethod" name="method" class="widgEditor nothing" >Enter Method Of Application...</textarea>
            </fieldset>

            <input class="post-btn" type="submit" name="submit" value="Post" id="postBtn">
          </form>

        </div>
        <div class="manage-job" id="manageJob">2</div>
        <div class="post-blog" id="postBlog">3</div>
        <div class="manage-blog" id="manageBlog">4</div>
        <div class="statistic" id="statistic">5</div>
      </div>

    </div>
    <script src="/legitjobs/js/jquery-3.6.0.min.js"></script>
    <script src="/legitjobs/js/chosen.jquery.js" type="text/javascript"></script>
    <script src="/legitjobs/js/init.js" type="text/javascript" charset="utf-8"></script>
    <!-- <script src="/legitjobs/js/jquery.richtext.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="/legitjobs/js/dashboard.js"></script>
    <script src="/legitjobs/js/widgEditor.js"></script>
    <script src="/legitjobs/js/post_ajax.js"></script>
  </body>

  </html>


<?php
} else {
  header("Location: backend.php");
  exit();
}
?>