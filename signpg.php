<?php

    $username = "";
    $password = "";
    $c_password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $Username = $_POST["Username"];
        $password = $_POST["Password"];
        $c_password = $_POST["C_password"];

        if( $password != $c_password ){
            echo "Password do not match.<br>";
            goto back;
        }
    }

    $sql = "SELECT Username , Password From _login_details";
?>