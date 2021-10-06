<?php 
    session_start();

    require ("db_conn.php");

    $heading =    $_POST['heading'];
    $experience =    $_POST['experience'];
    $experienceto =    $_POST['experienceto'];
    $qualification =    $_POST['qualification'];
    $jobtype =    $_POST['job_type'];
    $jobfield =    $_POST['job_field'];
    $location =   $_POST['job_location'];
    $jobtittle =   $_POST['job_tittle'];
    $companyname =   $_POST['company_name'];
    $companydetails =   $_POST['company_details'];
    $jobdetails = $_POST['job_description'];
    $jobmethod = $_POST['job_method'];
    $postedby = $_SESSION['name'];

    $heading = mysqli_real_escape_string($conn,$heading);
    $experience = mysqli_real_escape_string($conn,$experience);
    $experienceto = mysqli_real_escape_string($conn,$experienceto);
    $qualification = mysqli_real_escape_string($conn,$qualification);
    $jobtype = mysqli_real_escape_string($conn,$jobtype);
    $jobfield = mysqli_real_escape_string($conn,$jobfield);
    $location = mysqli_real_escape_string($conn,$location);
    $jobtittle = mysqli_real_escape_string($conn,$jobtittle);
    $companyname = mysqli_real_escape_string($conn,$companyname);
    $companydetails = mysqli_real_escape_string($conn,$companydetails);
    $jobdetails = mysqli_real_escape_string($conn,$jobdetails);
    $jobmethod = mysqli_real_escape_string($conn,$jobmethod);

    $sql = "INSERT INTO job_post (heading, experience, experience_to, qualification,
    job_type, job_field, location, job_tittle, company_name, company_details, job_describtion,
    job_methos, posted_by, user_close)
    VALUES ('$heading', '$experience', '$experienceto', '$qualification', '$jobtype', '$jobfield',
    '$location', '$jobtittle', '$companyname', '$companydetails', '$jobdetails', 
    '$jobmethod','$postedby', 'no')";

    if ($conn->query($sql) === TRUE) {
        echo 'posted';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


