<!Doctype HTML>
<?php
    include "connectdatabase.php";

    @$day = $_REQUEST['day'];
    @$month = $_REQUEST['month'];
    @$year = $_REQUEST['year'];
    @$combineddate = $year.-$month.-$day;
    @$sort =$_REQUEST['sort'];

    $colNames = array("id", "event_name", "location_name", "officers", "begin_date", "end_date", "start_time", "details", "comments", "community_info", "community_contact");

    if (isset($day) and isset($month) and isset($year)){
        $selective= true;

        if (isset($sort)){
            $column = $colNames[$_REQUEST['sort']];
            $sql = "SELECT * FROM events_tbl WHERE '$combineddate' BETWEEN begin_date AND end_date ORDER BY $column ASC";
        }
        else{
            $sql = "SELECT * FROM events_tbl WHERE '$combineddate' BETWEEN begin_date AND end_date";
        }

    }

    else {
        $selective = false;
        if (isset($sort)){
            $column = $colNames[$_REQUEST['sort']];
            $sql = "SELECT * FROM events_tbl ORDER BY $column ASC";
        }
        else{
            $sql = "SELECT * FROM events_tbl";
        }
    }
    
    $result = mysqli_query($con, $sql);
    
?>

<html>
    <head>
        <title>Events</title>
        <link rel="stylesheet"  href="css/databaseCSS.css">
        <link rel="icon" href="images/icon.jpg"/>
        
        <!--script>
            function removeDynamic(){
                window.location.href = (window.location.protocol + window.location.host + window.location.pathname);
                window.location.href = cleanAddress; // sends user to address
            }
        </script-->
        <?php echo
            "<script>
                function sortby(column){

                    let addressRoot = ('http://' + window.location.host + window.location.pathname);";
                    if (isset($day) and isset($month) and isset($year)){ echo"
                        let addressEnd = ('?day=' + " . @$_REQUEST['day'] . " + '&month=' + " . @$_REQUEST['month'] . " + '&year=' + " . @$_REQUEST['year'] . " + '&sort=' + column" . ");";
                    } else {
                        echo"
                        let addressEnd = ('?sort=' + column" . ");";
                    }
                    echo"
                    let address = new URL(addressRoot + addressEnd);
                    event.preventDefault();
                    window.location.href = address;
                }
            </script>";
        ?>

    </head>
    <body>
        <div id="header">
            <img id="logo" src="images/Logo.jpg"onclick="window.location.href = 'index.php'">
            <?php if ($selective){ echo "Events active on: " . $day . "/" . $month . "/" . $year; } else { echo "All events"; }?>
            <div id="btnLogout" onclick="window.location.href='logout_ppm.php';">Logout</div>
        </div>
        <div id="content">
            <div id="btnInsert" class="buttonHM" onclick="window.location.href = 'inserteventsform.php'">
                <strong>Insert a new event</strong>
            </div>
            <div id="btnViewAll" class="buttonHM" onclick="window.location.href = 'eventsmasterpage.php'">
                <strong>View all events</strong>
            </div>
            <?php
                echo"<table id='tblDatabase'>
                    <thead>
                        <tr>
                            <th onclick='sortby(0)';>ID: </th>
                            <th onclick='sortby(1)';>Event Name: </th>
                            <th onclick='sortby(2)';>Location: </th>
                            <th onclick='sortby(3)';>Officers: </th>
                            <th onclick='sortby(4)';>Starting Date: </th>
                            <th onclick='sortby(5)';>Ending Date: </th>
                            <th onclick='sortby(6)';>Starting Time: </th>
                            <th onclick='sortby(7)';>Details: </th>
                            <th onclick='sortby(8)';>Comments: </th>
                            <th onclick='sortby(9)';>Community: </th>
                            <th onclick='sortby(10)';>Contact Info: </th>
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
