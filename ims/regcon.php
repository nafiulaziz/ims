<?php

$firstn = $_POST['userfn'];
$lastn = $_POST['userln'];
$mail = $_POST['usermail'];
$pass = $_POST['userpass'];

include 'dbcon.php';

$SQLin = "INSERT INTO users
 (u_fn, u_ln, u_mail, u_pass)
     VALUES ('$firstn','$lastn','$mail','$pass')"; 
$con->query($SQLin);

header("Location: http://localhost/practice_3/login.php");


$con->close();

?>