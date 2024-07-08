<!DOCTYPE html>
<html>
<head>
    <title>Forget Password</title>
    <link rel="stylesheet" href="log-reg.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
       <div class="container">
               <div class="loginHeader">
                    <h1>IMS</h1>
                    <p>Inventory Management System</p>
               </div>
               <form id="form" action="frgtpacon.php" method="POST">
                    <h1>Forget Password</h1>
                            <div class="input-control">
                                <label for="mail">Email:</label>
                                <input type="email"  name="usermail" id="usermailid" required>
                            </div>
                            <div class="input-control">
                                <label for="pass">Password:</label>
                                <input type="password" name="userpass" id="userpassid" required>
                            </div>
                            <div class="input-control">
                                <label for="pass2">Confirm Password:</label>
                                <input type="password" name="userpass2" id="userpassid2" required>
                            </div>
                            <div align="center">
                                <button type="submit" onclick="myFunction()" type="submit" > Submit </button> 
                            </div>
               </form>
       </div>
</body>
<script>
function myFunction() 
{
  alert("Change Password Successful");
}
</script>
</html>