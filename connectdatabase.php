<?php
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "ppm_database";

    $con = mysqli_connect($host, $username, $password, $db);
    
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to Sql server".mysqli_connect_error();
    }
    else
    {
        echo "<strong>Successfully connected to database</strong><br><br>";
    }

?>
