<?php 

session_start();
if (isset($_SESSION['username'])) {

        if (isset($_POST['keyword'])) {
            require ("db_conn.php");
            $search_word = $_POST['keyword'];
            $search_word = mysqli_real_escape_string($conn, $search_word);

            if(str_contains($search_word, '%')) {
                exit;
            }

            if(str_contains($search_word, ' ')) {
                exit;
            }

            if(str_contains($search_word, '_')) {
                exit;
            }

            $query = "SELECT DISTINCT company_name FROM job_post WHERE company_name LIKE '$search_word%' UNION
             SELECT DISTINCT job_tittle FROM job_post WHERE job_tittle LIKE '$search_word%' LIMIT 100"; 
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                while ($res = mysqli_fetch_array($result)) { 
                        // if($res['c'])
                    
                    ?>

                <div id="down" onclick='fill("<?php echo $res['company_name']; ?> ")'>
                <p> <?php echo $res['company_name']; ?> </div></p>

                <?php

                }
            } else {
                echo "";
            }


        }; ?>

        <?php

        if (isset($_POST['locationKey'])) {
            require ("db_conn.php");
            $search_word = $_POST['locationKey'];
            $search_word = mysqli_real_escape_string($conn, $search_word);

            if(str_contains($search_word, '%')) {
                exit;
            }

            if(str_contains($search_word, ' ')) {
                exit;
            }

            if(str_contains($search_word, '_')) {
                exit;
            }

            $query = "SELECT DISTINCT location FROM job_post WHERE location LIKE '$search_word%' UNION 
                SELECT DISTINCT location1 FROM job_post WHERE location1 LIKE '$search_word%' UNION
                SELECT DISTINCT location2 FROM job_post WHERE location2 LIKE '$search_word%' UNION
                SELECT DISTINCT location3 FROM job_post WHERE location3 LIKE '$search_word%' UNION
                SELECT DISTINCT location4 FROM job_post WHERE location4 LIKE '$search_word%' UNION
                SELECT DISTINCT city FROM job_post WHERE city LIKE '$search_word%'
              LIMIT 10";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0) {
                while ($res = mysqli_fetch_array($result)) { 
                    ?>

                <div id="down2" onclick='fill2("<?php echo $res['location']; ?> ")'>
                <p> <?php echo $res['location']; ?> </div></p>

                <?php

                }
            } else {
                echo "";
            }


        };

        if (isset($_POST['whichJob']) || isset($_POST['where'])) {
            require ("db_conn.php");

            $whichJob = $_POST['whichJob'];
            $where = $_POST['where'];
            $useremail = $_SESSION['email'];

            $whichJob = mysqli_real_escape_string($conn,$whichJob);
            $where = mysqli_real_escape_string($conn,$where);

            $whichJob = trim($whichJob);
            $where = trim($where);

            if(str_contains($whichJob, '%') || str_contains($where, '%')) {
                
                exit;
            }
            if(str_contains($whichJob, '_') || str_contains($where, '_')) {
                exit;
            }
            // if(str_contains($whichJob, ' ') || str_contains($where, ' ')) {
            //     exit;
            // }

            $whichJob = $_POST['whichJob'];
            $where = $_POST['where'];
            $useremail = $_SESSION['email'];

            $whichJob = mysqli_real_escape_string($conn,$whichJob);
            $where = mysqli_real_escape_string($conn,$where);

            $whichJob = trim($whichJob);
            $where = trim($where);

            if(str_contains($whichJob, '%') || str_contains($where, '%')) {
                exit;
            }
            if(str_contains($whichJob, '_') || str_contains($where, '_')) {
                exit;
            }

            $sql = "UPDATE user_data SET search_one ='$whichJob', search_two ='$where' WHERE email='$useremail'";
            $result = mysqli_query($conn, $sql);

            if ($conn->query($sql) === TRUE) {
                if(strlen($whichJob) > 1 && strlen($where) > 1) {
                    $data_query = mysqli_query($conn, "SELECT * FROM job_post WHERE (company_name LIKE '%$whichJob%' 
                    OR job_tittle LIKE '%$whichJob%') AND (location LIKE '$where' 
                    OR location1 LIKE '$where' OR location2 LIKE '$where' OR location3 LIKE '$where' 
                    OR location4 LIKE '$where' OR city LIKE '$where') AND (user_close= 'no') ORDER BY id DESC ");
                }elseif(strlen($whichJob) > 1) {
                    $data_query = mysqli_query($conn, "SELECT * FROM job_post WHERE (company_name LIKE '%$whichJob%' 
                    OR job_tittle LIKE '%$whichJob%') AND (user_close= 'no') ORDER BY id DESC ");

                }elseif(strlen($where) > 1) {
                    $data_query = mysqli_query($conn, "SELECT * FROM job_post WHERE (location LIKE '$where' 
                    OR location1 LIKE '$where' OR location2 LIKE '$where' OR location3 LIKE '$where' 
                    OR location4 LIKE '$where' OR city LIKE '$where') AND (user_close= 'no')
                     ORDER BY id DESC ");
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
        
                
                            echo "<div class='posted-job'>
                            <h3 class='heading'><a href='jobs.php?id=$id'>$job_tittle at $company_name </a></h3>
            
                                <p class='location'><span class='loc-t'>Location:</span> $location  
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
                    }else {
                        echo '<h3 style="text-align: center; color: #008080; margin-top: 1rem;">No job found</h3>
                        <br> <p style="text-align: center; color: #464646; font-size: 15px;">Kindly adjust your prefrence</p>';
                    }

                // }
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
} ?>