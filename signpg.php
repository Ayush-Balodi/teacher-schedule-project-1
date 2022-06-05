<?php

    $username = "";
    $password = "";
    $c_password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = $_POST["Username"];
        $password = $_POST["Password"];
        $c_password = $_POST["C_password"];

        if( $password != $c_password ){
            echo "Password do not match.<br>";
            return;
        }
    }

    $sql = "INSERT INTO _login_details (`Username`,`Password`) VALUES ('$username','$password')";

    if($conn->query($sql) === TRUE ) 
    {
        echo "Details added to the database successfully.";
    }
    else{
        echo "Addition unsuccessful.".mysqli_error($conn);
    }
?>