<?php
    //establish a connection to the database
    include "connectdatabase.php";

    //check fields are not empty
    if(isset($_POST["id"])){
        $id = $_POST["id"];
    }
    if(isset($_POST["location_name"])){
        $location_name = $_POST["location_name"];
    }
    if(isset($_POST["starting_date"])){
        $starting_date = $_POST["starting_date"];
    }
    if(isset($_POST["ending_date"])){
        $ending_date = $_POST["ending_date"];
    }
    if(isset($_POST["starting_time"])){
        $starting_time = $_POST["starting_time"];
    }
    if(isset($_POST["details"])){
        $details = $_POST["details"];
    }
    if(isset($_POST["comments"])){
        $comments = $_POST["comments"];
    }

    //insert values into the database
    $sql = "INSERT INTO events_tbl ( id, location_name, starting_date, ending_date, starting_time, details, comments) VALUES ('$id','$location_name','$starting_date', '$ending_date', '$starting_time', '$details', '$comments')";

    //if values are successful redirect back to events.php or print error message

    if(mysqli_query($con, $sql)){
        header("Location: eventsmasterpage.php");
    }
    else
    {
        echo "error:" . mysqli_error($con);
    }
?>