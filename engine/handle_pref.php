<?php 
    session_start();

    require ("db_conn.php");

    $location =    $_POST['location'];
    $qualification =    $_POST['qualification'];
    $jobType =    $_POST['jobType'];
    $email = $_SESSION['email'];


        $sql = "UPDATE user_data SET location_state ='$location'WHERE email='$email'";

        if ($conn->query($sql) === TRUE) {
            $sql_second = "UPDATE user_data SET qualification ='$qualification' WHERE email='$email'";
            if ($conn->query($sql_second) === TRUE) {
                $sql_third = "UPDATE user_data SET job_type ='$jobType' WHERE email='$email'";
                if ($conn->query($sql_third) === TRUE) {
                    echo 'posted';
                }
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
 
