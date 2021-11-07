<?php 
    session_start();
    
    if (isset($_SESSION['username'])) {
        require ("db_conn.php");
        if(isset($_POST['location'])) {

            $location =    $_POST['location'];
            $qualification =    $_POST['qualification'];
            $jobType =    $_POST['jobType'];
            $email = $_SESSION['email'];


                $sql = "UPDATE user_data SET location_state ='$location', qualification ='$qualification', job_type ='$jobType' WHERE email='$email'";

                if ($conn->query($sql) === TRUE) {
                    echo 'posted';
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
        }

        if(isset($_POST['hot'])) {

            $data_query = mysqli_query($conn, 'SELECT job_tittle, id FROM job_post
            WHERE (CURRENT_DATE - date_posted) < 40 ORDER BY RAND() LIMIT 6');

            if (mysqli_num_rows($data_query) > 0) {

                while ($row = mysqli_fetch_array($data_query)) {
                    $job_tittle =  $row['job_tittle'];
                    $id =  $row['id'];

                    echo "<a class='hot-income' href='jobs.php?id=$id'><i class='fa fa-angle-double-right' aria-hidden='true'></i>
                    $job_tittle <i class='fa fa-angle-double-left' aria-hidden='true'></i>
                    </a> <br>";
                }
            }
        }
    }


 