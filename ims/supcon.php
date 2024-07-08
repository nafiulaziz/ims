<?php

$product = $_POST['suna'];
$bu = $_POST['supro'];
$qu = $_POST['sulo'];
$bup= $_POST['sumail'];

include 'dbcon.php';

$sql = "INSERT INTO suppliers
    (su_na, su_l, su_pro, su_mail)
  VALUES('$product','$qu','$bu','$bup')";
$con->query($sql);

header("Location: http://localhost/practice_3/supVi.php");

$con->close();

?>