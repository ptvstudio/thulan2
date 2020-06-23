<?php

define('DB_SERVER', 'ec2-35-172-73-125.compute-1.amazonaws.com');
define('DB_USERNAME', 'd120l5u259o1la');
define('DB_PASSWORD', '25ffc0cd7a2f79a8d6cc7e1d560a8f4ae1da44f7dfcfae4a795b7c3fe3cf3915');
define('DB_NAME', 'd120l5u259o1la');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>