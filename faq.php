<?php

$con=mysqli_connect('localhost','root','');

if (!$con) {
	echo 'not connected to the server';
}

if (!mysqli_select_db($con,'rashifaldotcom')) {
	echo 'database not selected';
}

$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$Email=$_POST['email'];
$Query=$_POST['query'];

$sql="INSERT INTO FAQ (Firstname , Lastname , Email, Query) VALUES ('$firstName', '$lastName', '$Email','$Query')";

if (!mysqli_query($con,$sql)) {
	echo 'not inserted';
}

else{
	echo 'inserted';
}

header("refresh:5; url=index.php");

?>