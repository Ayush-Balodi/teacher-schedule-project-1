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

    echo $username;

    // $row=""; 
    // $sql = "SELECT Username , Id , Password FROM _login_details";
    // $result = mysqli_query($conn,$sql);
    // if(mysqli_num_rows($result) > 0) 
    // {
    //     while($row = mysqli_fetch_assoc($result)) 
    //     {
    //         if( $username == $row["Username"] )
    //         {
    //             echo "Renter username it already exist.";
    //             return;
    //         }
    //     }
    // }
    echo $username." " .$password;
    $sql = "INSERT INTO _login_details ('Username','Password') values($username,$password)";
    $result = mysqli_query($conn , $sql);
    if( $result > 0 ){
        echo "Added";
    }
    else{
        return;
    }
?>