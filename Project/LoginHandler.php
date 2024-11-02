<?php
$username=$_POST["loginUser"];
$password=$_POST["loginPassword"];

include "config.php";

$Login= "SELECT username,password FROM user WHERE username='$username' and password ='$password'";

$result=mysqli_query($con,$Login);
$count=mysqli_num_rows($result);
if ($count==1){
	echo "Welcome $username";
}
else {
	echo "Invalid Login";
}
?>