<?php

    $username = "";
    $password = "";
    $c_password = "";
    $sql="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = $_POST["Username"];
        $password = $_POST["Password"];
        $c_password = $_POST["C_password"];

        if( $password != $c_password ){
            echo "Password do not match.<br>";
            return;
        }
        else
        {
            $sql = "INSERT INTO _login_details (`Username`,`Password`) VALUES ('$username','$password')";
            $result=mysqli_query($conn,$sql);

            if($result==true) 
            {
                echo "Details added to the database successfully.";
            }
            else
            {
                echo "Addition unsuccessful.".mysqli_error($conn);
            }
        }
    } 
?>