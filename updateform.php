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
    <link rel="stylesheet" href="css/databaseCss.css">
    
    </head>

    <body style="background-color: #999999;">
        <div id="header">
            <img id="logo" src="images/Logo.jpg"onclick="window.location.href = 'index.php'">
            Update event ID: <?php echo $row["id"];?>
            <div id="btnLogout" onclick="window.location.href='logout_ppm.php';">Logout</div>
        </div>
        <div id="updateContent">
            <form action = "update.php" method="post">
                ID: <input type = "text" name="id" value= <?php echo $row["id"];?> readonly>
                <p>Event Name: <input type="text" name="event_name" value="<?php echo $row["event_name"];?>">
                <p>Details: <textarea name="details" ><?php echo $row["details"];?></textarea>
                <p>Location: <input type="text" name="location_name" value="<?php echo $row["location_name"];?>">
                <p>Officers: <input type="text" name="officers" value="<?php echo $row["officers"];?>">
                <p>Starting Date: <input type="date" name="begin_date" value="<?php echo $row["begin_date"];?>">
                <p>Ending Date: <input type="date" name="end_date" value="<?php echo $row ["end_date"];?>">
                <p>Starting Time: <input type="text" name="start_time" value="<?php echo $row["start_time"];?>">
                <p>Community Information: <textarea name="community_info" ><?php echo $row["community_info"];?></textarea>
                <p>Community Contact: <textarea name="community_contact"><?php echo $row["community_contact"];?></textarea>
                <p>Comments: <textarea name="comments"><?php echo $row["comments"];?></textarea>
                <input type = "submit">
            </form>
        </div>
    </body>
</html>
