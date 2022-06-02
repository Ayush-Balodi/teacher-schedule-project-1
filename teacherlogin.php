<?php
    include 'mysqlll.php';
    include 'teacher.php';
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>teachers_schedule</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style1.css">
    </head>

    <body class="header">
        <div class="banner">
            <a href="newpage2.html" title="Home"> <img src="images/finalogo.png" width="30%"> </a>
        </div>
        <form style="background-color:white;" method="POST">
            <div class="loginbutton">
                <h2>Login</h2>
                <br>
                <div>
                    <input type="text" name="Username" placeholder="UserName" style="margin:5px;font-size: 12px; width: 85%; height: 18px; padding:4px;" required>
                </div>
                <br>
                <div>
                    <input type="password" name="Password" placeholder="Password" style="font-size: 12px; width: 85%; height: 18px;padding:4px;" required>
                </div>
                <br>
                <br>
                <div>
                    <a href="newpage2.php"><input type="submit" name="btn1" id='btn1' value="Submit" class="subbutton"></a>
                </div>
                <br>
                <div class="block">
                    <input id="rememberme" type="checkbox">
                    <label for="rememberme" style="float: left; padding-left:4px;">Remember Me</label>
                    <a id="forgotpassword" href="" style="float: right; color: green; font-size:12px;">Forgot Password?</a>
                </div>
                <br>
                <div class="signup">
                    <a href="signup.php" style="color: #474747;">Sign Up</a>
                </div>
            </div>

        </form>

        <div class="footer">
            <h4>Graphic Era Hill University &copy; 2022</h4>
            <h4>For queries, contact us at +91 94xx xxxx xx</h4>
        </div>
    </body>

    </html>