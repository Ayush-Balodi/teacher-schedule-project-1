<?php
    $name = "";
    $starting_time = "";
    $ending_time = "";
    $day = "";

    $id = $_COOKIE["ID"];
    $username = $_COOKIE["Username"];
    $row = "";

    $sql = "SELECT Username , Name FROM _user_to_name";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) 
        {
          if($row["Username"]==$username)
          {
            $name = $row["Name"];
          }
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $starting_time = $_POST['Starting_time'];
        $ending_time = $_POST['Ending_time'];
        $day = $_POST['Day'];
 
        $sql = "INSERT INTO _teacher_slot (`ID`, `Name`, `Starting_time`, `Ending_time`, `Day`) VALUES ( '$id' , '$name' , '$starting_time' , '$ending_time' , '$day')";
        
        if($conn->query($sql) === TRUE ) 
        {
            echo "Details added to the database successfully.";
        }
        else{
            die("Addition unsuccessful.".mysqli_error($conn));
        }
    }
?>