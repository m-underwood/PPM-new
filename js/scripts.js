let today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();
let selectYear = document.getElementById("year");
let selectMonth = document.getElementById("month");

let months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
let monthFull = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

let monthAndYear = document.getElementById("txtTitle");  //----Title bar
showCalendar(currentMonth, currentYear);


function next() {
    //currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
    if (currentMonth === 11){ currentYear += 1; }
    currentMonth = (currentMonth + 1) % 12;
    showCalendar(currentMonth, currentYear);
}

function previous() {
    //currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
    if (currentMonth == 0){ currentYear -= 1; }
    //currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
    if (currentMonth == 0){ currentMonth = 11; } else { currentMonth -= 1; } // DOUBLE EQUALS, NOT TRIPLE
    showCalendar(currentMonth, currentYear);
}

function jump() {
    currentYear = parseInt(selectYear.value);
    currentMonth = parseInt(selectMonth.value);
    showCalendar(currentMonth, currentYear);
}

function showCalendar(month, year) {

    let firstDay = (new Date(year, month)).getDay();
    let daysInMonth = 32 - new Date(year, month, 32).getDate();

    let tbl = document.getElementById("calendar-body"); // body of the calendar

    // clearing all previous cells
    tbl.innerHTML = "";

    // filing data about month and in the page via DOM.
    txtTitle.innerHTML = monthFull[month] + " " + year;  // title bar
    selectYear.value = year;
    selectMonth.value = month;

    if (month == 0){ lastMonth = 11; pyear = year - 1; } else { lastMonth = month - 1; pyear = year; }
    previousMonth.innerHTML = "Previous Month: <br>" + monthFull[lastMonth] + " " + pyear;  // previous month

    nowMonth.innerHTML = "Current Month: <br>" + monthFull[month] + " " + year;  // current month

    if (currentMonth == 11){ followingMonth = (month + 1) % 12; nyear = year + 1 } else { followingMonth = month + 1; nyear = year; }
    nextMonth.innerHTML = "Next Month: <br>" + monthFull[followingMonth] + " " + nyear;  // next month
    console.log(nextMonth);
    console.log(monthFull[nextMonth]);

    // creating all cells
    let date = 1;
    for (let i = 0; i < 6; i++) { // creates row (tr)

        let row = document.createElement("tr"); // creates a table row

        for (let j = 0; j < 7; j++) { // iterating through days
            if (i === 0 && j < firstDay) { // only executing on the first day of the week
                let cell = document.createElement("td"); // creates cell (td)
                row.appendChild(cell); // appends cell
            }

            else if (date > daysInMonth) { // if its the last day of the month
                break; // stop creating rows/cells
            }

            else {
                let cell = document.createElement("td"); // creates cell (td)
                cell.id = date; // sets cells id to its date
                cell.className = "displayCell";
                cell.onclick = function(){
                    //let destination = new URL("http://localhost:8080/PPM-new-master/eventsmasterpage.php"); // ABSOLUTE ADDRESS
                    let addressSuffix = 9;
                    let filePath = window.location.pathname;
                    let hostPath = filePath.substring(0, filePath.length - addressSuffix); // removes address location
                    let destination = new URL(window.location.protocol + window.location.host + hostPath + "eventsmasterpage.php"); // location address
                    destination.search = "?day=" + cell.id + "&month=" + (month + 1) + "&year=" + year; // dynamic URL
                    window.location.href = destination; // sends user to address
                }
                
                let cellText = document.createTextNode(date); // creates text with day no.
                //if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {} // custom style for today's date
                cell.appendChild(cellText); // appends text to cells
                row.appendChild(cell); // appends cells to rows
                date++;
            }

        }

        tbl.appendChild(row); // appends row
    }

}
