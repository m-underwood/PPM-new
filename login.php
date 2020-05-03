<!DOCTYPE HTML>
<html>
<head>
 	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
	<body>
	<img class= "logo" src="images/Logo.jpg">
	<div class = "sign-up-form">
		<div id="error"></div>
		<h1> Sign In </h1>
		<form id="form" action = "ppm_login.php" method="post">
			<div>
			<input id="username" type="username" class ="inputBox" placeholder="Your Username" name = "ppm_username" required>
			</div>
			<div>
			<input id="password1" type="password" class ="inputBox" placeholder="Your Password" name = "ppm_password" required>
			</div>
			<button type = "submit" class = "signBtn"> Sign In </button>
		</form>
			<script src="form.js"></script>
	</body>
</html>
