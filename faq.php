<?php

$con=pg_connect("host=  dbname=  user=");

if (!$con) {
	echo 'not connected to the server';
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