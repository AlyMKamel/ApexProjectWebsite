<!DOCTYPE HTML5>
<HTML>
<HEAD>
	<title>Welcome to Apex Legends</title>
	<meta charset="UTF-8">
	<script src="styles/Js.js"></script>
	<link rel="stylesheet" href="styles/myStyle1.css">
</head>
<Body>
	<div id="header">Apex Legends</div>
	<img src="images/menu.png" width="30px" onclick="openMenu();">
		<div id="menu">
			<ul>
				<li><a class="closeBtn" onclick="closeMenu();">&times;</a></li>
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			
			</ul>
		</div>
			<html>


<body>
<div align="center">
 <div class="Registrationform">
    <h2>Registration</h2>
	<form onsubmit="return validation()" method="post" name="regForm" action="RegisterHandler.php">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="username" >
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" >
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="password" >
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="passwordd" >
      </div>
	  <div id="error" ></div>
      <div class="policy">
        <input type="checkbox" >
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now" onclick="clear2()";>
      </div>
	  <div class="input-box button">
        <input type="reset" value="Clear" onclick="clear2();">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.html">Login now</a></h3>
      </div>
    </form>
  </div>
</div>


</body>

</html>

			
		
		<div id="footer">You are the APEX LEGEND</div>


</body>

