<?php

session_start();
session_destroy();
header("Location: ../ppm_login.php");
?>