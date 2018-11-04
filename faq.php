<?php
echo "<pre>If this line isn't printed you have a parse error in your script</pre>\n"; flush();
error_reporting(E_ALL); ini_set('display_errors', true);    
extension_loaded('pgsql') || die('pgsql module unavailable');


$connection = pg_connect("host=localhost dbname=mydb user=postgres password=pgsql"); 
if (!$connection) { 
  echo "Couldn't make a connection! ". pg_last_error(); 
}
else {
  echo 'connected to server';
}
flush();
?>