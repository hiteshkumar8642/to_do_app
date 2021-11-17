<?php
include "dbconnect.php";

echo "Form submitted";
$title=$_POST['title'];
$description=$_POST['description'];
$sql="insert into tasks( `Title`, `Description`) values('".$title."','".$description."');";
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