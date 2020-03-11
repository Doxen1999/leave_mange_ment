<?php
$host = "localhost";
$user = "root"; 
$pwd = "1234567890";
$dbname = "fat_1";
header("Access-Control-Allow-Origin:*");
$con=mysqli_connect($host, $user, $pwd) or die("cannot connect database");
mysqli_select_db($con,$dbname) or die("cannot select database");
mysqli_set_charset($con,"utf8")or die("cant set charset");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }


?>