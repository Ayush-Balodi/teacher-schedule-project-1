<?php
    include 'newpg.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>teachers_schedule</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="func.js"></script>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    
    <div class="tab">
        <div>
            <p>
                <h2 style="text-align: left;">This week:</h2>
            </p>
            <br>
            <table>
                <td onclick="openForm('Monday')" id = "Day" value="Monday" >Mon</td>
                <td onclick="openForm('Tuesday')" id = "Day" value="Tuesday">Tue</td>
                <td onclick="openForm('Wednesday')" id = "Day" value="Wednesday">Wed</td>
                <td onclick="openForm('Thursday')" id = "Day" value="Thrusday">Thurs</td>
                <td onclick="openForm('Friday')" id = "Day" value="Friday">Fri</td>
                <td onclick="openForm('Saturday')" id = "Day" value="Saturday">Sat</td>
            </table>
            <br>
            <br>
            <br>
            <br>
            <h1 onclick="openTable()">View your schedule for this week</h1>
        </div>
    </div>
    <div class="bg">
        <form action="newpg.php" class="formContainer" method="post">
        <div class="formPopup" id="popupForm">
                <h2>Please enter the timings</h2>
                <br>
                <input type="hidden" id="hiddenDay" name="hidden" value=""/>
                <label for="Starting_name" aria-placeholder="Select time">From</label>
                <select name="Starting_time" id="Starting_time">
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <label for="Ending_time" aria-placeholder="Select time">To</label>
                <select name="Ending_time" id="Ending_time">
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <br>
                <input type="submit" class="btn" placeholder="Enter">
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
    </div>
    <div id="viewTable">
    </div>
    <div class="mdpg">
        <a class="mod" type="button" href="modifypg.html">Modify your schedule</a>
        <p class="mod" style="padding-bottom: 25px;">Set reminder</p>
    </div>
</body>
</html>