<?php
//  ডাটাবেজের সাথে কানেকশন
$servername = 'localhost'; // সার্ভার নেইম
$username = 'root'; // ইউজার নেইম
$password = ''; // পাসওয়ার্ড
$db_name = 'crud_app'; // ডাটাবেজের নাম

// কানেক্ট ডাটাবেজ
$con = mysqli_connect($servername, $username, $password, $db_name);

?>