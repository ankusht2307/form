<?php

// $connection = pg_connect("host=ec2-23-21-171-249.compute-1.amazonaws.com dbname=d5bfmmilh08e9i user=weeyppzdvmawbl password=c0b534e93a7b15481529e16eda0cc19504b16834ecc472acbbfe9235603cd4b3"); 


$db_url = getenv("DATABASE_URL") ?: "postgres://weeyppzdvmawbl:c0b534e93a7b15481529e16eda0cc19504b16834ecc472acbbfe9235603cd4b3@ec2-23-21-171-249.compute-1.amazonaws.com:5432/d5bfmmilh08e9i";
echo "$db_url\n";

$db = pg_connect($db_url);
if($db) {echo "connected";} else {echo "not connected";}

$selectSql = "SELECT 1";
$result =  pg_query($db, $selectSql);

while ($row = pg_fetch_row($result)) {
    var_dump($row);
}


header("refresh:5; url=index.php");

?>