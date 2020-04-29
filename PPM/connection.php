<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PPM coursework</title>
</head>

<body>
	
	
<?php
	
	$host = "localhost";
	$username = "n0801179";
	$password = "gnO7k9u7";
	$db = "m_soft20181_n0801179";
	
	$con = mysqli_connect($host, $username, $password, $db);
	
	if ( mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:".mysqli_connect_error();
		
	}
	else
	{
		echo "Sucsess in connecting to database ! <br>";
	}
	
	?>
</body>
</html>