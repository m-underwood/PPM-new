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
    ID: <input type = "text" name = "id" value = <?php echo $row["id"];?> readonly><p>    
    Location: <input type = "text" name = "location_name" value = <?php echo $row["location_name"];?>><p>
    Starting Date: <input type = "date" name = "starting_date" value = <?php echo $row["starting_date"];?>><p>
    Ending Date: <input type = "date" name = "ending_date" value = <?php echo $row ["ending_date"];?>><p>
    Starting Time: <input type = "text" name = "starting_time" value = <?php echo $row["starting_time"];?>><p>
    Details: <input type = "text" name = "details" value = <?php echo $row["details"];?>><p>
    Comments: <input type = "text" name = "comments" value = <?php echo $row["comments"];?>><p>
    <input type = "submit">
</form>
</body>


</html>
