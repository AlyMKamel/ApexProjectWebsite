<?php
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

include "config.php";

$insertUser= "INSERT INTO user (username,email,password)
values('$username','$email','$password')";

$result=mysqli_query($con,$insertUser);
if($result){
	echo "<h1>User Created Successfully</h1>";
	echo "<a href='login.php'>Login</a>";
}
else 
	echo "Error:".mysqli_error($con);
?>