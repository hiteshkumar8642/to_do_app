<?php
include "dbconnect.php";

echo "Form submitted";
$Title=$_POST['title'];
$description=$_POST['description'];
$id=$_POST['id'];
$sql="UPDATE tasks
SET Title = '". $Title ."', Description = '" . $description. "'
WHERE Id=$id;";
echo"$sql";
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