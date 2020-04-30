<?php
    //establish a connection to the database
    include "connectdatabase.php";

    //check fields are not empty
    if(isset($_POST["id"])){           
        $id = $_POST["id"];
    }
    if(isset($_POST["event_name"])){    
        $event_name = $_POST["event_name"];
    }
    if(isset($_POST["location_name"])){
        $location_name = $_POST["location_name"];
    }
    if(isset($_POST["officers"])){
        $officers = $_POST["officers"];
    }
    
    if(isset($_POST["begin_date"])){
        $begin_date = $_POST["begin_date"];
    }

    if(isset($_POST["end_date"])){
        $end_date = $_POST["end_date"];
    }

    if(isset($_POST["start_time"])){
        $start_time = $_POST["start_time"];
    }
    if(isset($_POST["details"])){
        $details = $_POST["details"];
    }
    if(isset($_POST["comments"])){
        $comments = $_POST["comments"];
    }

    //insert values into the database
    $sql = "INSERT INTO events_tbl ( id, event_name, location_name, officers, begin_date, end_date, start_time, details, comments) VALUES ('$id', '$event_name', '$location_name', '$officers', '$begin_date', '$end_date', '$start_time', '$details', '$comments')";

    //if values are successful redirect back to events.php or print error message

    if(mysqli_query($con, $sql)){
        header("Location: eventsmasterpage.php");
    }
    else
    {
        echo "error:" . mysqli_error($con);
    }
?>
