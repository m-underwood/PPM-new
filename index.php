<!DOCTYPE html>
<html>
    <head>
        <title>Calendar</title>
        <link rel="stylesheet"  href="css/calendarCSS.css">
        <link rel="icon" href="images/icon.jpg"/>
    </head>
    <body>
        <div id="header">
            <img id="logo" src="images/Logo.jpg">

            <div id="txtTitle">
                
            </div>
        </div>

        <div id="monthViewer">
            <div id="btnCycleBack" onclick="previous();">
                &#9650
            </div>

            <div id="previousMonth">
                January
            </div>

            <div id="currentMonth">
                February
            </div>

            <div id="nextMonth">
                March
            </div>

            <div id="btnCycleForward" onclick="next();">
                &#9660
            </div>
        </div>
        <div id="dayViewer">
            <table id="calendar">
                <thead>
                    <tr>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                    </tr>
                </thead>

                <tbody id="calendar-body">

                </tbody>
            </table>
            <!--div class="form-inline">
                <button id="previous" onclick="previous()">Previous</button>
                <button id="next" onclick="next()">Next</button>
            </div-->
            <br/>
            <form class="form-inline" style="position:absolute; bottom: 20px; right: 20px;">
                <select name="month" id="month" onchange="jump()">
                    <option value=0>Jan</option>
                    <option value=1>Feb</option>
                    <option value=2>Mar</option>
                    <option value=3>Apr</option>
                    <option value=4>May</option>
                    <option value=5>Jun</option>
                    <option value=6>Jul</option>
                    <option value=7>Aug</option>
                    <option value=8>Sep</option>
                    <option value=9>Oct</option>
                    <option value=10>Nov</option>
                    <option value=11>Dec</option>
                </select>

                <label for="year"></label>

                <select name="year" id="year" onchange="jump()">
                    <option value=2019>2019</option>
                    <option value=2020>2020</option>
                    <option value=2021>2021</option>
                    <option value=2022>2022</option>
                    <option value=2023>2023</option>
                    <option value=2024>2024</option>
                    <option value=2025>2025</option>
                    <option value=2026>2026</option>
                    <option value=2027>2027</option>
                    <option value=2028>2028</option>
                    <option value=2029>2029</option>
                    <option value=2030>2030</option>
                </select>
            </form>
        </div>

        <script src="js/scripts.js"></script>
    </body>
</html>
