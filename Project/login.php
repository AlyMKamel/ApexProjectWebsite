<!DOCTYPE HTML5>
<HTML>
<HEAD>
	<title>Welcome to Apex Legends</title>
	<meta charset="UTF-8">
	
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
		<div class="login-wrapper">
      <form  method="post" class="form" action="LoginHandler.php">
        <h2>Login</h2>
        <div class="inputgrp">
          <input type="text" name="loginUser" id="loginUser" placeholder="Enter your username"required />
          
        </div>
        <div class="inputgrp">
          <input
            type="password"  name="loginPassword" id="loginPassword" placeholder="Enter your password"required />
        </div>
        <input type="submit" value="Login"  />
		<div class="loading">
		</div>
      </form>
    </div>

			
		
		<div id="footer">You are the APEX LEGEND</div>


</body>
