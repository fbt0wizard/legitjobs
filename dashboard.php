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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.quilljs.com/1.1.3/quill.snow.css" rel="stylesheet"> -->
    <?php include("engine.php") ?>
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
        <a href="logout.php"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span>Logout</a>
      </div>
      <div class="main-container">
        <div class="job-post" id="jobPost">
          <h3 class="section-name">Post a new job</h3>
          <form method="post">
            <div class="desc">
              <div class="input">
                <label for="heading">Job Heading:</label>
                <input type="text" name="heading"> <br>

                <label for="experience">Experience:</label>
                <select id="experience" name="experience">
                <option value="">Select</option>
                <option value="None">None</option>
                <option value="1 year">1 year</option>
                <option value="2 year">2 year</option>
                <option value="3 year">3 year</option>
                <option value="4 year">4 year</option>
                <option value="5 year">5 year</option>
                <option value="6 year">6 year</option>
                <option value="7 year">7 year</option>
                <option value="8 year">8 year</option>
                <option value="9 year">9 year</option>
                <option value="10 year">10 year</option>
                <option value="11 year">11 year</option>
                <option value="12 year">12 year</option>
                <option value="13 year">13 year</option>
                <option value="14 year">14 year</option>
                <option value="15 year">15 year</option>
                <option value="16 year">16 year</option>
                <option value="17 year">17 year</option>
                <option value="18 year">18 year</option>
                <option value="19 year">19 year</option>
                <option value="20 year">20 year</option>
                </select> <br>

                <label for="qualification">Qualification:</label>
                <select id="qualification" name="qualification">
                <option value="">Select</option>
                <option value="SSCE">SSCE</option>
                <option value="OND">OND</option>
                <option value="NCE">NCE</option>
                <option value="BA/BSc/HND">BA/BSc/HND</option>
                <option value="MBA/MSc/MA">MBA/MSc/MA</option>
                <option value="Expatriate Job">Expatriate Job</option>
                </select> <br>

                <label for="jobtype">Job Type:</label>
                <select id="jobType" name="jobtype">
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
                <select id="state" name="location">
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
            </div>
            <?php if (isset($_GET['success'])) { ?>
              <p class="new-job"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            <fieldset class="description">
				<label for="job-description">
					Job Description:
				</label>
				<textarea name="jobdescription" class="widgEditor nothing">Enter Job Description...</textarea>
			</fieldset>

      <fieldset class="job-method">
				<label for="method">
					Method Of Application:
				</label>
				<textarea name="method" class="widgEditor nothing">Enter Method Of Application...</textarea>
			</fieldset>

            <input class="post-btn" type="submit" name="submit" value="Post">
          </form>

        </div>
        <div class="manage-job" id="manageJob">2</div>
        <div class="post-blog" id="postBlog">3</div>
        <div class="manage-blog" id="manageBlog">4</div>
        <div class="statistic" id="statistic">5</div>
      </div>

    </div>
    <!-- <script src="https://cdn.quilljs.com/1.1.3/quill.js"></script> -->
    <!-- <script src="/legitjobs/js/jquery-3.6.0.min.js"></script> -->
    <script src="/legitjobs/js/dashboard.js"></script>
    <script src="/legitjobs/js/widgEditor.js"></script>
  </body>

  </html>


<?php
} else {
  header("Location: backend.php");
  exit();
}
?>