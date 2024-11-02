<?php
$con=mysqli_connect("localhost:typeyourPortNumber","UserName default for xampp is root","Password default for xampp is'empty- no password'")or die("Error Can't Reach The Server");
$db=mysqli_select_db($con,"databaseName")or die ("Can't Connect To The Database");
?>
