<?php
include('connection.php');
$stmt="CREATE TABLE IF NOT EXISTS posts(
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(50) NOT NULL,
keyword VARCHAR(50) NOT NULL,
description VARCHAR(50) NOT NULL,
heading VARCHAR(50) NOT NULL,
shortstory VARCHAR(50) NOT NULL,
fullstory VARCHAR(50) NOT NULL,
FOREIGN KEY (CategoryID) REFERENCES category(id),
postdate VARCHAR(50) NOT NULL,
)";
$qry=mysqli_query($con,$stmt) or die(mysqli_error());
if($qry)
{
	echo "Table Created Successfully";
}
else
{
	echo "Error Creating table or might exist";
}
?>