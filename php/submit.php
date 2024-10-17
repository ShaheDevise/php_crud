<?php

// connect config file
require_once('./config.php');

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$skills = $_POST['skills'];
$experience_level = $_POST['experience_level'];
$github_profile = $_POST['github_profile'];
$portfolio_website = $_POST['portfolio_website'];
$current_job_title = $_POST['current_job_title'];
$slug = 'uai'.rand().time();

$personal_sql = "INSERT INTO `personal` (`fullname`, `email`, `mobile`, `gender`, `slug`) VALUES ('$full_name', '$email', '$phone', '$gender', '$slug')";

$personal_sql_insert = mysqli_query($con, $personal_sql);

if($personal_sql_insert){
    echo "Please waite...";
    header("refresh:1.5;url=./../index.php");
}else{
    echo "Oopss.. No insserted data bruuuda..🙎";
}

$about_sql = "INSERT INTO `about` (`skills`, `experience_level`, `github_profile`, `portfolio_website`, `current_job_title`, `slug`) VALUES ('$skills', '$experience_level', '$github_profile', '$portfolio_website', '$current_job_title', '$slug')";

$about_sql_insert = mysqli_query($con, $about_sql);

if($about_sql_insert){
    header("refresh:1.5;url=./../index.php");
}else{
    echo "Oopss.. No insserted data bruuuda..🙎";
}

?>