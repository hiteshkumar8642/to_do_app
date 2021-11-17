<?php

include "dbconnect.php";

$id = $_GET['id'];

$del = "delete from tasks where id = '".$id."'";
$query=mysqli_query($con,$del);
if($del)
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