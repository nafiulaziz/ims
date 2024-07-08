<?php

$product_name = $_POST['prdname'];
$created_by = $_POST['crtby'];
$quantity = $_POST['qnty'];
$buyprice = $_POST['buyprice'];
$sellprice = $_POST['sellprice'];

include 'dbcon.php';

$sql = "INSERT INTO products 
    (p_na, qu, p_bu, p_s, p_cr)
  VALUES('$product_name','$quantity','$buyprice','$sellprice','$created_by')";
$con->query($sql);

$sql2 = "INSERT INTO stocks 
    (s_na, s_qu)
  VALUES('$product_name','$quantity')";
$con->query($sql2);

header("Location: http://localhost/practice_3/productView.php");

$con->close();

?>

