<DOCTYPE html>
<html>

        <head>
        <link rel="stylesheet" href="css/databaseCss.css">

        </head>

        <body style="background-color: #999999;">
                <div id="header">
                        <img id="logo" src="images/Logo.jpg"onclick="window.location.href = 'index.php'">
                        Insert a new event:
                        <div id="btnLogout" onclick="window.location.href='logout_ppm.php';">Logout</div>
                </div>
                <div id="insertContent">
                        <form action="insertevents.php" method="post">
                                ID: <input type="text" name="id">
                                <p>Event Name: <input type="text" name="event_name">
                                <p>Details: <textarea name="details"></textarea>
                                <p>Location: <input type="text" name="location_name">
                                <p>Officers: <input type="text" name="officers">
                                <p>Starting Date: <input type="date" name="begin_date">
                                <p>Ending Date: <input type="date" name="end_date">
                                <p>Starting Time: <input type="text" name="start_time">
                                <p>Community Information: <textarea name="community_info"></textarea>
                                <p>Community Contact: <textarea type="text" name="community_contact"></textarea>
                                <p>Comments: <textarea name="comments"></textarea>
                                <input type ="submit" id="btnSubmit">
                        </form>
                </div>
        </body>
</html>
