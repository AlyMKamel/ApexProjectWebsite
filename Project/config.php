<?php
$con=mysqli_connect("localhost:3307","root","")or die("Error Can't Reach The Server");
$db=mysqli_select_db($con,"webproject")or die ("Can't Connect To The Database");
?>