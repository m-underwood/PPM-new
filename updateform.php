<?php

    include "connectdatabase.php";
    
    $id = $_REQUEST["ID"];
    $sql = "SELECT * FROM events_tbl WHERE ID = '$id'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<DOCTYPE html>
<html>

<head>

</head>

<body>

    <form action = "update.php" method = "post">

    

    
    ID: <input type = "text" name = "id" value = <?php echo $row["id"];?> readonly>
    <p>Event Name: <input type = "text" name = "event_name" value = <?php echo $row["event_name"];?>>
    <p>Location: <input type = "text" name = "location_name" value = <?php echo $row["location_name"];?>>
    <p>Officers: <input type = "text" name ="officers" value = <?php echo $row["officers"];?>>
    <p>Starting Date: <input type = "date" name = "begin_date" value = <?php echo $row["begin_date"];?>>
    <p>Ending Date: <input type = "date" name = "end_date" value = <?php echo $row ["end_date"];?>>
    <p>Starting Time: <input type = "text" name = "start_time" value = <?php echo $row["start_time"];?>>
    <p>Details: <input type = "text" name = "details" value = <?php echo $row["details"];?>>
    <p>Comments: <input type = "text" name = "comments" value = <?php echo $row["comments"];?>>
    <p>Community Information: <input type = "text" name = "community_info" value = <?php echo $row["community_info"];?>>
    <p>Community Contact: <input type = "text" name = "community_contact" value = <?php echo $row["community_contact"];?>>
    

    <input type = "submit">
</form>
</body>


</html>
