<?php 
    @session_start(); 
    @session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css" media="all">
    <link rel="stylesheet" href="css/login_rep.css" media="all">
    <title>RENT MANAGEMENT</title>
</head>
<body>
        
    
    <div class="login-sec">

        <div class="logo">
            <img src="image/logo.png">
        </div>

        <h1>SIGN IN</h1>

        <form name="login-form" action="auth/backend_login.php" method="post">

            <?php
                if (isset($_GET['msg'])) {
                    echo "<div class='msg-log'>$_GET[msg]</div>";
                }
            ?>

            <table>
            
                <tr>
                    <td><span>USERNAME/EMAIL ADDRESS</span>
                    <input type="text" name="email" placeholder="Enter Your Email Address or Username"></td>
                </tr>
                
                <tr>
                    <td><span>PASSWORD</span>
                    <input type="password" name="pass" placeholder="Enter Your Password" class="p-pass"></td>
                </tr>

                <tr>            
                    <td id="tock">
                        <input type="checkbox" >VIEW PASSWORD
                    </td>
                    
                </tr>

                <script src="js/jquery.js"></script>
                <script src="js/pass.js"></script>


            </table>

            

            <div class="btn-div">
                <button class="btn">ENTER</button>
            </div>
            
        </form>

    </div>

</body>
</html>