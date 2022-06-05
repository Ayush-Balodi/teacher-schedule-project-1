<?php

    include 'mysqlll.php';
    include 'signpg.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Signup form</title>
    </head>
    <body class="header">
        <div class="banner">
            <a href="teacherlogin.php" title="Home"> <img src="images/finalogo.png" width="30%"> </a>
        </div>
        <form method="POST">
            <div class="loginbutton">
                <h2>Sign Up</h2>
                <br>
                <div>
                    <input type="text" name="Username" placeholder="UserName" style="margin:5px;font-size: 12px; width: 85%; height: 18px; padding:4px;" required>
                </div>
                <br>
                <div>
                    <input type="password" name="Password" placeholder="Password" style="font-size: 12px; width: 85%; height: 18px;padding:4px;" required>
                </div>
                <br>
                <div>
                    <input type="text" name="C_password" placeholder="Confirm password" style="font-size: 12px; width: 85%; height: 18px;padding:4px;" required>
                </div>
                <br>
                <br>
                <div>
                    <a href="signpg.php"><input type="submit" value="Submit" class="subbutton"></a>
                </div>
            </div>

        </form>

        <div class="footer">
            <h4>Graphic Era Hill University &copy; 2022</h4>
            <h4>For queries, contact us at +91 94xx xxxx xx</h4>
        </div>
    </body>
</html>