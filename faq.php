<?php
echo "<pre>If this line isn't printed you have a parse error in your script</pre>\n"; flush();
error_reporting(E_ALL); ini_set('display_errors', true);    
extension_loaded('pgsql') || die('pgsql module unavailable');


$connection = pg_connect("host=ec2-23-21-171-249.compute-1.amazonaws.com dbname=d5bfmmilh08e9i user=weeyppzdvmawbl password=c0b534e93a7b15481529e16eda0cc19504b16834ecc472acbbfe9235603cd4b3"); 
if (!$connection) { 
  echo "Couldn't make a connection! ". pg_last_error(); 
}
else {
  echo 'connected to server';
}
flush();
?>