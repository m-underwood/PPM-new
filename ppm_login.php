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

    $row = mysqli_fetch_assoc($result);

   if(mysqli_num_rows($result) ==1){
        $_SESSION["ppm_username"] = $ppm_username;
        header("Location: index.php");
    }
    else{
        header("Location: login.php");
    }
    
?>