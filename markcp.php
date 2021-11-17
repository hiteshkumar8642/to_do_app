<?php

include "dbconnect.php";

$id = $_GET['id'];

$sql="UPDATE tasks
SET Status=1
WHERE Id=$id;";
$query=mysqli_query($con,$sql);
if($sql)
{
    mysqli_close($db);
    header("location:index.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>