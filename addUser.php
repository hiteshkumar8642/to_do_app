<h2>
Form submitted
</h2>
<?php
include "dbconnect.php";

echo "Form submitted";
$email=$_POST['email'];
$name=$_POST['name'];
$pswd=$_POST['password'];

echo $name;
echo $email;
echo $pswd;
$sql="insert into users( `name`, `email`, `password`) values('".$name."','".$email."','".$pswd."');";
echo $sql;
$query=mysqli_query($con,$sql);
?>