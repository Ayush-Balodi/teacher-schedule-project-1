<?php
    // include 'action_page.php';
    // $servername = "";
    $name = "";
    // $starting_time = "";
    // $ending_time = "";
    // $day = "";

    include 'mysqlll.php';
    
    $username = $_POST['btn1'];
    $id = "";
    $row = ""; 
    $sql = "SELECT Username , Name FROM _user_to_name";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) 
        {
          if($row["Username"]==$username)
          {
            $id = $row["ID"];
            $name = $row["Name"];
            echo "Success! Name => ".$name." ID => ".$id;
            break;
          }
        }
    }

    // if($_SERVER["REQUEST_METHOD"] == "POST")
    // {
    //     $starting_time = $_POST['Starting_time'];
    //     $ending_time = $_POST['Ending_time'];
    //     $day = $_POST['Day'];
    //     //$row=""; 
    //     $sql = "INSERT INTO _teacher_slot (`ID`, `Name`, `Starting_time`, `Ending_time`, `Day`) VALUES ( '$id' , '$name' , '$starting_time' , '$ending_time' , $day)";
        
    //     $result = mysqli_query($conn,$sql);
        
    //     if(mysqli_num_rows($result)) 
    //     {
    //         echo "Details added to the database successfully.";
    //     }
    //     else{
    //         die("Addition unsuccessful.".mysqli_error($conn));
    //     }
    // }
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
                <label for="Day" aria-placeholder="Select time">Day</label>
                <select name="Day" id="Day">
                    <option value ="Monday">Monday</option>
                    <option value ="Tuesday">Tuesday</option>
                    <option value ="Wednesday">Wednesday</option>
                    <option value ="Thrusday">Thrusday</option>
                    <option value ="Friday">Friday</option>
                    <option value ="Saturday">Saturday</option>
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