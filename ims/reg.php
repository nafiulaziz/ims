<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="log-reg.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
       <div class="container">
               <div class="loginHeader">
                    <h1>IMS</h1>
                    <p>Inventory Management System</p>
               </div>
               <form id="form" action="regcon.php" method="POST">
                    <h1>Registration</h1>
                            <div class="input-control">
                                <label for="userfn">First Name:</label>
                                <input type="text"  name="userfn" id="userfnid" required>
                            </div>

                            <div class="input-control">
                                <label for="userln">Last Name:</label>
                                <input type="text"  name="userln" id="userlnid" required>
                            </div>

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
                                <input type="password" name="userpass2" id="userpass2id" required>
                            </div>

                            <div>
                                <button type="submit" onclick="myFunction()" type="submit" > Sing-up </button> 
                                <button type="button"> <a href="login.php" class="link"> Back to Login </a> </button>
                            </div>
               </form>
       </div>
</body>
<script>
function myFunction() {
  alert("Registration Successful");
}
</script>
</html>