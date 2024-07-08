<?php

$servername = "localhost"; 
$username = "root"; 
$password= ""; 
$dbname = "inventory"; 

// MySQLi OO Way 
$con = new mysqli($servername, $username, $password, $dbname); 

if ($con->connect_error)
  die("<br> Connection not stablished. ". $con->connect_error); 
else 
 /* echo "<br><h2> OOW Alhamdulillah DB Server Connected </h2>";*/

?>