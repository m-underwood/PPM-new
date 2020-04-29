<!DOCTYPE html>
<html lang="en">
	<?php
session_start();

?>
<?php

include("connection.php");



if(isset($_POST['ppm_login']))
{
    $ppm_username=$_POST['ppm_username'];
    $ppm_password=$_POST['ppm_password'];
	
	

    $check_user="select * from ppm_users WHERE ppm_username ='$ppm_username' AND ppm_password='$ppm_password'";

 
    $run=mysqli_query($con,$check_user);
	

    if(mysqli_num_rows($run)>0)
    {
echo "<script>alert('You have signed in!')</script>";
		$_SESSION['ppm_username']=$ppm_username;
 echo"<script>window.open('signed/index.php','_self')</script>";      

exit();
    }
    else
    {
        echo "<script>alert('Username or password is incorrect!')</script>";
		

		
    }
}
?>
	
    <head>
        <link rel="stylesheet"  href="../PPM/css/login.css">
		<link rel="stylesheet"  href="../PPM/css/stylesheet.css">
    </head>

	
	
<body>
<img class= "logo" src="images/Logo.jpg">
	<div class = "sign-up-form">
		<div id="error"></div>

		<h1> Sign In </h1>

		<form id="form" method="post" action="ppm_login.php">
			<div>
			<input id="username" type="username" class ="inputBox" placeholder="Your Username" name = "ppm_username">
			</div>
			<div>
			<input id="password1" type="password" class ="inputBox" placeholder="Your Password" name = "ppm_password">
			</div>
			<button type = "submit" class = "signBtn" name = "ppm_login"> Sign In </button>

			<p> Forgot Password? <a href="http://google.com">Click Here</a></p>



		</form>
			<script src="form.js"></script>


</body>
</html>
