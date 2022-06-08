<?php

    include 'mysqlll.php';

    $name = "";
    $starting_time = "";
    $ending_time = "";

    $username = $_COOKIE["Username"];
    $day = "";
    
    $row = "";
    $sql = "SELECT Username , Name FROM _user_to_name";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) 
        {
          if($row["Username"]==$username){
            $name = $row["Name"];
          }
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $starting_time = $_POST['Starting_time'];
        $ending_time = $_POST['Ending_time'];
        $day = $_POST['hidden'];
 
        $sql = "INSERT INTO _teacher_slot ( `Username` , `Name`, `Starting_time`, `Ending_time`, `Day`) VALUES ( '$username' , '$name' , '$starting_time' , '$ending_time' , '$day')";
        
        if($conn->query($sql) === TRUE ) 
        {
            echo "Details added to the database successfully.";
        }
        else{
            die("Addition unsuccessful.".mysqli_error($conn));
        }
    }
?>