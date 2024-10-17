<?php

require_once('./config.php');

$user_id = $_GET['slug'];

$delete_sql = "DELETE FROM `personal` WHERE `slug` = '$user_id'";

$run_delete_sql = mysqli_query($con, $delete_sql);

if($run_delete_sql){
    header("refresh:1;url=./../index.php");
}else{
    echo "Sorry. Please try again";
}

$delete_sql_two = "DELETE FROM `about` WHERE `slug` = '$user_id'";

$run_delete_sql_two = mysqli_query($con, $delete_sql_two);

if($run_delete_sql_two){
    header("refresh:1;url=./../index.php");
}else{
    echo "Sorry. Please try again";
}

?>