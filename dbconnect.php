<?php
$host='localhost';
$user='admin';
$pass='';
$db='todo_dev';
$con=mysqli_connect('localhost','admin','','todo_dev',3308);

// Check connection
if (!$con)         //<---- ! conn = NOT conn
    {
    echo "Failed";
        die("Connection failed: " . mysqli_connect_error());
    }
// else
//     {
//     echo "Connected successfully";
//     }
?>