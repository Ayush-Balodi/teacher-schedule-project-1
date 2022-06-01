<?php
    setcookie("Username" , $username , time() + 2 * 24 * 60 * 60 );

    if(isset($_COOKIE["Username"])){
        echo "Username is : ".$_COOKIE["Username"];
    }
    else{
        echo "No items for username";
    }
?>