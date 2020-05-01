<!Doctype HTML>
<?php
    include "connectdatabase.php";

    @$day = $_REQUEST['day'];
    @$month = $_REQUEST['month'];
    @$year = $_REQUEST['year'];
    @$combineddate = $year.-$month.-$day;

    if ((!is_null($day)) and (!is_null($month)) and (!is_null($year))){
        //echo "<br><br>Nothing is null.<br><br>";
        //echo "Day: " . $day . ", Month: " . $month . ", Year: " . $year . ", Combined: " . $combineddate;


        $sql = "SELECT * FROM events_tbl WHERE '$combineddate' BETWEEN begin_date AND end_date";
    }
    else {
        $sql = "SELECT * FROM events_tbl";
    }
    
    $result = mysqli_query($con, $sql);
    
?>

<html>
    <head>
        <title>Events</title>
        <link rel="stylesheet"  href="css/databaseCSS.css">
        <link rel="icon" href="images/icon.jpg"/>
    </head>
    <body>
        <div id="header">
            test
        </div>
        <div id="content">

        <a href=inserteventsform.php>Insert a new entry</a><br><br>
            <?php
                echo"
                <table id='tblDatabase'>
                    <tr>test";
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo
                            "<td> ID: " . $row["id"].
                            "<br> Event Name: ". $row["event_name"].
                            "<br> Location: ". $row["location_name"].
                            "<br> Officers: ". $row["officers"].
                            "<br> Starting Date: " . $row["begin_date"].
                            "<br> Ending Date: " . $row["end_date"].
                            "<br> Starting Time: " . $row["start_time"].
                            "<br> Details: " . $row["details"].
                            "<br> Comments: " . $row["comments"].
                            "<br> Community Information: " . $row["community_info"].
                            "<br> Community Contact: " . $row["community_contact"].
                            "<br><a href=deleteevent.php?ID=". $row["id"].">Delete Entry</a>".
                            "<br><a href=updateform.php?ID=". $row["id"].">Update Event</a>".
                            "</td>";
                        }
                    echo
                "</tr>
                </table>";
            ?>

        </div>

    </body>

</html>
