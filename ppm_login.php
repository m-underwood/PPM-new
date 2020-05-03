<?php

    session_start();
    include "connectdatabase.php";

    if(isset($_POST["ppm_username"])){
        $ppm_username = $_POST["ppm_username"];
    }
    if(isset($_POST["ppm_password"])){
        $ppm_password = $_POST["ppm_password"];
    }

    $sql = "SELECT * FROM users_tbl WHERE username = '$ppm_username' AND password = '$ppm_password'";
    
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) ==1)
    {
        echo "<script>alert('You have signed in!')</script>";
        $_SESSION["ppm_username"] = $ppm_username;
        echo"<script>window.open('index.php','_self')</script>"; 
    
exit();
    }
    else
    {
        echo "<script>alert('Username or password is incorrect!')</script>";
		
    }
    
?>

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
