<?php
$str = '';
$data_query = mysqli_query($conn, 'SELECT * FROM job_post WHERE user_close= "no" ORDER BY id DESC');

if (mysqli_num_rows($data_query) > 0) {

    while ($row = mysqli_fetch_array($data_query)) {
        $id = $row['id'];
        $heading = $row['heading'];
        $experience = $row['experience'];
        $experience_to = $row['experience_to'];
        $qualification =  $row['qualification'];
        $job_type =  $row['job_type'];
        $location =  $row['location'];
        $job_describtion =  $row['job_describtion'];
        $job_methos  =  $row['job_methos'];
        $date_time = $row['date_posted'];
        $company_name  =  $row['company_name'];
        $company_details  =  $row['company_details'];

        $date_time_now = date("Y-m-d H:i:s");
        $start_date = new DateTime($date_time);
        $end_date = new DateTime($date_time_now);
        $interval = $start_date->diff($end_date);


        if ($interval->y >= 1) {
            if ($interval->y == 1)
                $time_message = $interval->y . "Year ago";
            else
                $time_message = $interval->y . "Years ago";
        } else if ($interval->m >= 1) {
            if ($interval->d == 0) {
                $days = " ago";
            } else if ($interval->d == 1) {
                $days = $interval->d . " day ago";
            } else {
                $days = $interval->d . " days ago";
            }

            if ($interval->m == 1) {
                $time_message = $interval->m . " month ago";
            } else {
                $time_message = $interval->m . " months ago";
            }
        } else if ($interval->d >= 1) {
            if ($interval->d == 1) {
                $time_message = " Yesterday";
            } else {
                $time_message = $interval->d . " days ago";
            }
        } else if ($interval->h >= 1) {
            if ($interval->h == 1) {
                $time_message = $interval->h . " hour ago";
            } else {
                $time_message = $interval->h . " hours ago";
            }
        } else if ($interval->i >= 1) {
            if ($interval->i == 1) {
                $time_message = $interval->i . " minute ago";
            } else {
                $time_message = $interval->i . " minutes ago";
            }
        } else {
            if ($interval->s < 30) {
                $time_message = " Just now";
            } else {
                $time_message = $interval->s . " seconds ago";
            }
        }

        $str .=
            "<div class='posted-job-1'>
                    <h3><a href='#'>$heading </a></h3>
    
                    <p class='location'> $location </p>
                    <p class='date'>Posted $time_message</p>
                    <p class='apply-now'>
                        <a href=''><i class='fa fa-envelope' aria-hidden='true'></i>Apply Now</a>
                    </p>
                    <p class='company-name'>$company_name</p>
                    <p class='company-details'>$company_details</p>
                </div>";
    }
}
