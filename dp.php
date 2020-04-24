<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = pg_connect("host=ec2-34-225-82-212.compute-1.amazonaws.com
dbname=dd9efi8q4ghjrl
user=dunvoapgifiumh
password=cf6cea11161152908e2a1b1d093f96b9df895b690214175ca82985929a281f79");

// Check connection
if($link === false){
    die("ERROR: Could not connect. ");
} else {
  echo "Connection to Heroku";
}
pg_close($link);
?>