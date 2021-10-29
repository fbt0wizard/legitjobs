<?php 
    session_start();

    require ("db_conn.php");


    $job_tittle =    $_POST['job_tittle'];

    $job_field =    $_POST['job_field'];
    $job_field1 =    $_POST['job_field1'];
    $job_field2 =    $_POST['job_field2'];
    $job_field3 =    $_POST['job_field3'];
    $job_field4 =    $_POST['job_field4'];

    $qualification =    $_POST['qualification'];
    $qualification1 =    $_POST['qualification1'];
    $qualification2 =    $_POST['qualification2'];
    $qualification3 =    $_POST['qualification3'];
    $qualification4 =    $_POST['qualification4'];

    $job_location =    $_POST['job_location'];
    $job_location1 =    $_POST['job_location1'];
    $job_location2 =    $_POST['job_location2'];
    $job_location3 =    $_POST['job_location3'];
    $job_location4 =    $_POST['job_location4'];

    $city =    $_POST['city'];
    $job_type =    $_POST['job_type'];
    $country =   $_POST['country'];
    $minExp =   $_POST['minExp'];
    $maxExp =   $_POST['maxExp'];
    $salaryCurrency =   $_POST['salaryCurrency'];
    $salaryTerm = $_POST['salaryTerm'];
    $minimumSalary = $_POST['minimumSalary'];
    $maximumSalary = $_POST['maximumSalary'];
    $applicationDeadline = $_POST['applicationDeadline'];
    $job_description = $_POST['job_description'];
    $job_method = $_POST['job_method'];
    $company_name = $_POST['company_name'];

    $companyIndustry = $_POST['companyIndustry'];
    $companyIndustry1 = $_POST['companyIndustry1'];
    $companyIndustry2 = $_POST['companyIndustry2'];
    $companyIndustry3 = $_POST['companyIndustry3'];
    $companyIndustry4 = $_POST['companyIndustry4'];

    $cac = $_POST['cac'];
    $website = $_POST['website'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $companyAddress = $_POST['companyAddress'];
    $company_details = $_POST['company_details'];
    $poster = $_SESSION['name'];
    $trn_date = date("Y-m-d H:i:s");

    $job_tittle = mysqli_real_escape_string($conn,$job_tittle);
    $city =  mysqli_real_escape_string($conn,$city);
    $job_type =  mysqli_real_escape_string($conn,$job_type);
    $country =  mysqli_real_escape_string($conn,$country); 
    $minExp =  mysqli_real_escape_string($conn,$minExp);
    $maxExp =  mysqli_real_escape_string($conn,$maxExp); 
    $salaryCurrency =  mysqli_real_escape_string($conn,$salaryCurrency); 
    $salaryTerm = mysqli_real_escape_string($conn,$salaryTerm);
    $minimumSalary = mysqli_real_escape_string($conn,$minimumSalary);
    $maximumSalary = mysqli_real_escape_string($conn,$maximumSalary);
    $applicationDeadline = mysqli_real_escape_string($conn,$applicationDeadline);
    $job_description = mysqli_real_escape_string($conn,$job_description);
    $job_method = mysqli_real_escape_string($conn,$job_method);
    $company_name = mysqli_real_escape_string($conn,$company_name);
    $cac = mysqli_real_escape_string($conn,$cac);
    $website = mysqli_real_escape_string($conn,$website);
    $email = mysqli_real_escape_string($conn,$email);
    $phone = mysqli_real_escape_string($conn,$phone);
    $companyAddress = mysqli_real_escape_string($conn,$companyAddress);
    $company_details = mysqli_real_escape_string($conn,$company_details);


    $sql = "INSERT INTO job_post (job_tittle , job_field, job_field1, job_field2, job_field3, job_field4, qualification, qualification1,
    qualification2, qualification3, qualification4, location, location1, location2, location3, location4,
     city, job_type, country, experience, experience_to,
    salary_currency, salary_term, min_salary, max_salary, app_deadline, job_describtion, job_methos, company_name, company_industry,
    company_industry1, company_industry2, company_industry3, company_industry4,
    cac, website, employer_email, employer_phone, company_address, company_details, date_posted,
     posted_by, user_close)
    VALUES ('$job_tittle', '$job_field', '$job_field1', '$job_field2', '$job_field3', '$job_field4', '$qualification', '$qualification1',
    '$qualification2', '$qualification3', '$qualification4', '$job_location', '$job_location1', '$job_location2', '$job_location3',
    '$job_location4', '$city', '$job_type',
    '$country', '$minExp', '$maxExp', '$salaryCurrency', '$salaryTerm', 
    '$minimumSalary','$maximumSalary', '$applicationDeadline', '$job_description', '$job_method', '$company_name',
     '$companyIndustry', '$companyIndustry1', '$companyIndustry2', '$companyIndustry3', '$companyIndustry4', '$cac','$website',
      '$email', '$phone',  '$companyAddress',
      '$company_details', '$trn_date', '$poster', 'no')";

    if ($conn->query($sql) === TRUE) {
        echo 'posted';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


