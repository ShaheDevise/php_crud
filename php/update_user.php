<?php

require_once('./config.php');

$id = $_POST['id'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$skills = $_POST['skills'];
$experience_level = $_POST['experience_level'];
$github_profile = $_POST['github_profile'];
$portfolio_website = $_POST['portfolio_website'];
$current_job_title = $_POST['current_job_title'];

$update_sql = "UPDATE personal SET `fullname` = '$full_name', `email` = '$email', `mobile` = '$phone', `gender` = '$gender' WHERE `id` = '$id'";

$run_update_sql = mysqli_query($con, $update_sql);

if($run_update_sql){
    header("refresh:1.5;url=./../index.php");
}else{
    echo "Something went wrong. Please try again";
}

$update_sql_about = "UPDATE about SET skills = '$skills', experience_level = '$experience_level', github_profile = '$github_profile', portfolio_website = '$portfolio_website', current_job_title = '$current_job_title' WHERE id = '$id'";

$run_update_sql_two = mysqli_query($con, $update_sql_about);

if($run_update_sql_two){
    header("refresh:1.5;url=./../index.php");
}else{
    echo "Something went wrong. Please try again";
}

?>