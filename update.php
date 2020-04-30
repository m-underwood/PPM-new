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

    if(isset($_POST["community_info"])){
        $community_info = $_POST["community_info"];
    }

    if(isset($_POST["community_contact"])){
        $community_contact = $_POST["community_contact"];
    }

    $sql = "UPDATE events_tbl SET 
    event_name = '$event_name', 
    location_name = '$location_name',
    officers = '$officers', 
    begin_date = '$begin_date', 
    end_date = '$end_date', 
    start_time = '$start_time', 
    details = '$details', 
    comments = '$comments',
    community_info = '$community_info',
    community_contact = '$community_contact'
    WHERE ID = '$id'";

    if(mysqli_query($con, $sql)){
        header("Location: eventsmasterpage.php");
    }
    else
    {
        echo mysqli_error($con);
    }

?>
