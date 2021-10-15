<?php 
session_start();

session_destroy();

header("Location: /legitjobs/home.php");