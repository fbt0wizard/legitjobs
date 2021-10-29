<?php
session_start();

if (isset($_SESSION['user_name'])) {

    if(isset($_POST['go'])) {
        require ("db_conn.php");

        $data_query = mysqli_query($conn, 'SELECT job_tittle, id, date_posted, company_name FROM job_post
        WHERE user_close = "no"  ORDER BY id ');

        if (mysqli_num_rows($data_query) > 0) {
            while ($row = mysqli_fetch_array($data_query)) {
                $job_tittle =  $row['job_tittle'];
                $date_posted =  $row['date_posted'];
                $company_name =  $row['company_name'];
                $id =  $row['id'];

                echo  "<div class='new-posted-job'>
                        <h3 class='heading' id='checkJob'>$job_tittle at $company_name</h3>

                        <p class='date'>Posted on $date_posted</p> <br>
                        <button onclick='view($id)' id='viewBtn'>View <i class='fa fa-chevron-circle-down' aria-hidden='true'></i></button> 
                        <button id='deleteBtn'>Delete <i class='fa fa-trash-o' aria-hidden='true'></i></button>
                    </div>";
            }
        }
    };

    if(isset($_POST['step'])) {
        require ("db_conn.php");

        $data_query = mysqli_query($conn, 'SELECT job_tittle, id, date_posted, company_name FROM job_post
        WHERE user_close = "yes"  ORDER BY id ');

        if (mysqli_num_rows($data_query) > 0) {
            while ($row = mysqli_fetch_array($data_query)) {
                $job_tittle =  $row['job_tittle'];
                $date_posted =  $row['date_posted'];
                $company_name =  $row['company_name'];
                $id =  $row['id'];

                echo  "<div class='new-posted-job'>
                        <h3 class='heading' id='checkJob'>$job_tittle at $company_name</h3>

                        <p class='date'>Posted on $date_posted</p> <br>
                        <button onclick='viewPending($id)' id='viewBtn'>View <i class='fa fa-chevron-circle-down' aria-hidden='true'></i></button> 
                        <button id='deleteBtn'>Delete <i class='fa fa-trash-o' aria-hidden='true'></i></button>
                        <button onclick='approve($id)' id='approveBtn'>Approve <i class='fa fa-check-square-o' aria-hidden='true'></i></button>
                    </div>";
            }
        }else {
            echo '<h3 style="text-align: center; color: #008080; margin-top: 1rem;">No pending job</h3>
                <br> <p style="text-align: center; color: #464646; font-size: 15px;">check later</p>';
        }
    };


    if(isset($_POST['approve'])) {
        require ("db_conn.php");

        $approve = $_POST['approve'];

        $sql = "UPDATE job_post SET user_close ='no' WHERE id = '$approve'";
            $result = mysqli_query($conn, $sql);

            if ($conn->query($sql) === TRUE) {
                echo "done";
                } else {
                echo "no";
            }
    };
    

    if (isset($_POST['id'])) {
        require ("db_conn.php");
        $id = $_POST['id'];

        $sql = "SELECT * FROM `job_post` WHERE id='$id'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $heading = $row['heading'];
                $experience = $row['experience'];
                $experience_to = $row['experience_to'];
                $qualification =  $row['qualification'];
                $job_type =  $row['job_type'];
                $job_tittle =  $row['job_tittle'];
                $job_field =  $row['job_field'];
                $location =  $row['location'];
                $job_describtion =  $row['job_describtion'];
                $job_methos  =  $row['job_methos'];
                $date_time = $row['date_posted'];
                $company_name  =  $row['company_name'];
                $company_details  =  $row['company_details'];

                
                echo   "<div class='posted-job'>
                <h3 class='heading' id='checkJob'>$job_tittle at $company_name </h3>
            
                    <p class='location'>Location: $location </p>
                    <p class='date'>Posted $date_time</p>
                    <p class='apply-now'>
                    <a href=''><i class='fa fa-envelope' aria-hidden='true'></i>Apply Now</a>
                </p>
                            <p class='company-section'>Company Details:</p>

                            <p class='company-name'>$company_name</p>
                            <p class='company-details'>$company_details</p>
                            
                            <p class='tittle-qualification'>$job_tittle</p>

                            <p class='experience-list'><span class='names'>Experience: </span><a href='#'>$experience $experience_to years</a></p>
                            <p class='job_type'><span class='names'>Job Type: </span><a href='#'> $job_type</a></p>
                            <p class='qualification'><span class='names'>Qualification: </span><a href='#'> $qualification</a></p>
                            <p class='job_field'><span class='names'>Job Field: </span><a class='field' href='#'> $job_field</a></p>


                            <p class='job-details-section'>Job Descibtion:</p>

                            <div class='job-describtion'>$job_describtion</div>
                            
                            <p class='app-method'>Application Method:</p>

                            <div class='application-method'>$job_methos</div>
                        </div>";
            }
        } else {
            echo ('failed');
        }
            }

}else {
    echo "out";
}