<?php 

 $mail = $_POST['email'];
 $pass = $_POST['password'];

 include 'dbcon.php';

 $sql ="SELECT u_mail, u_pass from users"; 
 $res = $con->query($sql);
 
 
 foreach($res as $row)
 {
    $ma = $row['u_mail'];
    $pa = $row['u_pass'];
    
if(($mail == $ma) && ($pass == $pa))
     header("Location: http://localhost/practice_3/dash.php");

elseif(($mail == $ma) or ($pass == $pa))
{
     echo ' <script>
             window.location.href ="login.php";
             alert("Login Failed. Invalid Username or Password")
            </script>';
}
else
{
     echo ' <script>
             window.location.href ="login.php";
             alert("Register First. You are not in the system")
            </script>';
}
}
?>