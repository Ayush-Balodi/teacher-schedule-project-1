<?php
    $servername = "localg=host";
    $username = "root";
    $password = "";
    $database = "wow";

    $conn = mysqli_connect($servername , $username , $password , $database);

    if( !$conn ){
        die("Sorry! we failed to connect.".mysqli_connect_error());
    }
    else{
        echo "Connected successfully (:-:)";
    }
?>