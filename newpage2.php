<?php
    include 'action_page.php';
    $servername = "";
    $name = "";
    $starting_time = "";
    $ending_time = "";
    $day = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST['Name'];
        $starting_time = $_POST['Starting_time'];
        $ending_time = $_POST['Ending_time'];
        $day = $_POST['Day'];
        $row=""; 
        $sql = "SELECT Username , Password FROM _login_details";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result)) 
            {
              if($row["Username"]==$username && $row["Password"]==$password)
              {
                header('Location: ./newpage2.html');
                exit;
              }
            }
            echo "Incorrect credentials";
        }
    }
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
    <script src=func.js></script>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div>
        <p>
            <h2>This week:</h2>
        </p>
        <div class="tab">
            <table>
                <th>
                    <td class="data" onclick="openForm()">Mon</td>
                    <td class="data" onclick="openForm()">Tue</td>
                    <td class="data" onclick="openForm()">Wed</td>
                    <td class="data" onclick="openForm()">Thurs</td>
                    <td class="data" onclick="openForm()">Fri</td>
                    <td class="data" onclick="openForm()">Sat</td>
                </th>
            </table>
        </div>
    </div>
    </div>
    <div class="loginPopup">
        <div class="formPopup" id="popupForm">
            <form action="action_page.php" class="formContainer" method="post">
                <h2>Please enter the timings</h2>
                <br>
                <label for="from" aria-placeholder="Select time">From</label>
                <select id="from">
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
                <label for="to" aria-placeholder="Select time">To</label>
                <select id="to">
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
</body>

</html>