<!Doctype HTML>
<?php
    
    include "connectdatabase.php";
    $sql = "SELECT * FROM events_tbl";
    $result = mysqli_query($con, $sql);

?>

<html>

<head>

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