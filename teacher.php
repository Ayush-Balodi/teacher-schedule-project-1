<?php
    $username = "";
    $password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        
        setcookie("Username" , $username , time() + 2 * 24 * 60 * 60 );
        
        $row=""; 
        $sql = "SELECT Username , Password FROM _login_details";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result)) 
            {
              if( $row["Username"]==$username && $row["Password"]==$password)
              {
                header('Location: ./newpage2.php');
                exit;
              }
            }
            echo "Incorrect credentials";
        }
    }
?>