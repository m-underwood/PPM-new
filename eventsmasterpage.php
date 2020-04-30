<!Doctype HTML>
<?php
    include "connectdatabase.php";

    @$day = $_REQUEST['day'];
    @$month = $_REQUEST['month'];
    @$year = $_REQUEST['year'];
    @$combineddate = $year.-$month.-$day;

    if ((!is_null($day)) and (!is_null($month)) and (!is_null($year))){
        echo "<br><br>Nothing is null.<br><br>";
        echo "Day: " . $day . ", Month: " . $month . ", Year: " . $year . ", Combined: " . $combineddate;


        $sql = "SELECT * FROM events_tbl WHERE '$combineddate' BETWEEN starting_date AND ending_date";
    }
    else {
        $sql = "SELECT * FROM events_tbl";
    }

    //if theres a dynamic url { $sql = "SELECT * FROM events_tbl WHERE '$combineddate' BETWEEN starting_date AND ending_date";} else { $sql = "SELECT * FROM events_tbl WHERE starting_date = '$combineddate'"; }
    
    $result = mysqli_query($con, $sql);
    
?>

<html>
    <head>
        <title>Events</title>
        <!--link rel="stylesheet"  href="css/stylesheet.css"-->
    </head>
    <body>
        <?php
        
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<div>".
                "<p> ID: " . $row["id"].
                "<br> Location: ". $row["location_name"].
                "<br> Starting Date: " . $row["starting_date"].
                "<br> Ending Date: " . $row["ending_date"].
                "<br> Starting Time: " . $row["starting_time"].
                "<br> Details: " . $row["details"].
                "<br> Comments: " . $row["comments"].
                "<br><a href=events.php?ID=". $row["id"].">See further details</a>".
                "<br><a href=inserteventsform.php?ID=". $row["id"].">Insert</a>".
                "<br><a href=deleteevent.php?ID=". $row["id"].">Delete Entry</a>".
                "<br><a href=updateform.php?ID=". $row["id"].">Update Event</a>".
                "</p>".
                "</div>";
            }
        ?>
    </body>
</html>
