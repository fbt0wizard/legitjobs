<?php 

if (isset($_POST['submit'])) {
    include "db_conn.php";
    $heading =    $_POST['heading'];
    $location =   $_POST['location'];
    $jobdetails = $_POST['job-details'];

    $sql = "INSERT INTO jobpost (tittle, location, body)
    VALUES ('.$heading.', '.$location.', '.$jobdetails.')";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php?success= One New Job Posted");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}
