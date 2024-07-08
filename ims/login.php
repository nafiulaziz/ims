<?php
 session_start();

 session_destroy();
 ?>
<!DOCTYPE html>

<html>
    
<head>
    <title>Login</title>
    <link rel="stylesheet" href="log-reg.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,900&display=swap" rel="stylesheet">
   
</head>

<body>


    <div class="container">
            <div class="loginHeader">
                <h1>IMS</h1>
                <p>Inventory Management System</p>
            </div>

            <form id="form" action="logcheck.php" method="post">
                <h1>Login</h1>

                    <div class="input-control">
                        <label for="email">Email:</label>
                        <input type="email"  name="email" id="email" required>
                    </div>

                    <div class="input-control">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" required>
                    </div>

                    <div>
                        <button  onclick="myFunction()" type="submit" > Login </button>  
                        <button type="button"> <a href="reg.php" class="link"> Create an acount</a></button>
                    </div>
                    <div align="center">
                        <button type="button"> <a href="frgtpa.php" class="link"> Forget Password</a></button>
                    </div>
            </form>
    </div>
</body>
</html>