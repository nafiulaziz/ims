<?php
$mail = $_POST['usermail'];
$pa = $_POST['userpass'];

include 'dbcon.php';

$sql2 = "UPDATE users SET u_pass ='$pa' where u_mail='$mail'"; 
$res2 = $con->query($sql2);

header("Location: http://localhost/practice_3/login.php");

$con->close();

?>