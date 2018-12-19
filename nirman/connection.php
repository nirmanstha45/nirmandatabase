<?php
//Also localhost in real server but changed in some //servers
$host="localhost";
$user="root";
$pass="";
//db is database
$db="nirman";
//mysqli_connect to connect to driver mysqli
$con=mysqli_connect($host,$user,$pass,$db) or die("something wrong while connecting to database");
?>