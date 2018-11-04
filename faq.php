<?php

$connection = pg_connect("host=ec2-23-21-171-249.compute-1.amazonaws.com dbname=d5bfmmilh08e9i user=weeyppzdvmawbl password=c0b534e93a7b15481529e16eda0cc19504b16834ecc472acbbfe9235603cd4b3"); 


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