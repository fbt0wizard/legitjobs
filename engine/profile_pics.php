<?php

session_start();
if (isset($_SESSION['username'])) {
    require("db_conn.php");

    if (isset($_FILES["file"]["type"])) {
        $email = $_SESSION['email'];

        $sql = "SELECT profile_pics, picture_name FROM user_data WHERE email='$email'";

        $data_query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($data_query) > 0) {

            while ($row = mysqli_fetch_array($data_query)) {
                $profile_pics_link =  $row['profile_pics'];
                $picture_name =  $row['picture_name'];

                if (strlen($profile_pics_link) > 4) {
                    $sql = "UPDATE user_data SET profile_pics ='', picture_name = '' WHERE email='$email'";

                    if ($conn->query($sql) === TRUE) {
                        $previous = "../upload/$picture_name";
                        unlink($previous);
                    }
                }
            }
        }

        $validextensions = array("jpeg", "jpg", "png");

        $temporary = explode(".", $_FILES["file"]["name"]);

        $file_extension = end($temporary);

        $file_name = $_FILES["file"]["name"];
        // $file_name = $prod .".". $file_extension;
        $file_location = "/legitjobs/upload/$file_name";

        $email = $_SESSION['email'];

        // Compress image
        function compressImage($source, $destination, $quality)
        {

            $info = getimagesize($source);


            if ($info['mime'] == 'image/jpeg')
                $image = imagecreatefromjpeg($source);

            elseif ($info['mime'] == 'image/gif')
                $image = imagecreatefromgif($source);

            elseif ($info['mime'] == 'image/png')
                $image = imagecreatefrompng($source);

            imagejpeg($image, $destination, $quality);
        }


        if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $validextensions)) {
            if ($_FILES["file"]["error"] > 0) {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
            } else {
                if (file_exists("../upload/" . $_FILES["file"]["name"])) {
                    echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
                } else {
                    $sourcePath = $_FILES['file']['tmp_name'];
                    $targetPath = "../upload/" . $_FILES['file']['name'];

                    compressImage($sourcePath, $targetPath, 60);


                    $sql_update = "UPDATE user_data SET profile_pics ='$file_location', picture_name = '$file_name' WHERE email='$email'";

                    if ($conn->query($sql_update) === TRUE) {
                        echo 'success';
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
            }
        } else {
            echo "invalid";
        }
    }

    if (isset($_POST['store'])) {

        $email = $_SESSION['email'];

        require("db_conn.php");


        $sql = "SELECT profile_pics FROM user_data WHERE email='$email'";

        $data_query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($data_query) > 0) {

            while ($row = mysqli_fetch_array($data_query)) {
                $profile_pics_link =  $row['profile_pics'];

                echo $profile_pics_link;
            }
        }
    }

    if (isset($_POST['delete'])) {

        $email = $_SESSION['email'];

        $sql = "SELECT picture_name FROM user_data WHERE email='$email'";

        $data_query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($data_query) > 0) {


            while ($row = mysqli_fetch_array($data_query)) {
                $picture_name =  $row['picture_name'];
            }

            $previous = "../upload/$picture_name";
            unlink($previous);

            $sql = "UPDATE user_data SET profile_pics ='' WHERE email='$email'";

            if ($conn->query($sql) === TRUE) {
                echo 'deleted';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}
