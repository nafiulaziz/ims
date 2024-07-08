<?php
$st_pr = $_POST['prdname'];
$st_qu = $_POST['qnty'];

include 'dbcon.php';

$sql ="SELECT qu From products where p_na='$st_pr'"; 
$res = $con->query($sql);

$to_qu=0;
foreach ($res as $row)
{ 
    echo $row['qu'];
    $to_qu = $row['qu'] - $st_qu ;
}

$sql2 = "UPDATE products SET qu ='$to_qu' where p_na='$st_pr'"; 
$con->query($sql2);

$sql3 = "INSERT INTO stocks 
    (s_na, s_qu)
  VALUES('$st_pr','-$st_qu')";
$con->query($sql3);

header("Location: http://localhost/practice_3/productView.php");

$con->close();

?>