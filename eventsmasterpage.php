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
            <img id="logo" src="images/Logo.jpg"onclick="window.location.href = 'index.php'">
            Events
        </div>
        <div id="content">
            <div id="btnInsert" onclick="window.location.href = 'inserteventsform.php'">
                <strong>Insert a new event</strong>
            </div>
            <?php
                echo"<table id='tblDatabase'>
                    <thead>
                        <tr>
                            <th>ID: </th>
                            <th>Event Name: </th>
                            <th>Location: </th>
                            <th>Officers: </th>
                            <th>Starting Date: </th>
                            <th>Ending Date: </th>
                            <th>Starting Time: </th>
                            <th>Details: </th>
                            <th>Comments: </th>
                            <th>Community: </th>
                            <th>Contact Info: </th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>";
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo
                            "<tr><td>" . $row["id"].
                            "<td>". $row["event_name"].
                            "<td>". $row["location_name"].
                            "<td>". $row["officers"].
                            "<td>" . $row["begin_date"].
                            "<td>" . $row["end_date"].
                            "<td>" . $row["start_time"].
                            "<td>" . $row["details"].
                            "<td>" . $row["comments"].
                            "<td>" . $row["community_info"].
                            "<td>" . $row["community_contact"].
                            "<td><a href=deleteevent.php?ID=". $row["id"].">Delete Entry</a>".
                            "<td><a href=updateform.php?ID=". $row["id"].">Update Event</a>".
                            "</td>";
                        }
                    echo"</tr>
                </table>";
            ?>

        </div>

    </body>

</html>
