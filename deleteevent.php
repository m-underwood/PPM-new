<?php

    include "connectdatabase.php";

    $id = $_REQUEST["ID"];
    $sql = "DELETE FROM events_tbl WHERE ID = '$id'";
    

    if(mysqli_query($con, $sql)){
        header("Location: eventsmasterpage.php");
    }
    else{
        echo "error".mysqli_errno();
    }

?>
