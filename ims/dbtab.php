<?php
include 'dbcon.php';
/* 
  $sql = " CREATE table users (
    u_id int(5) NOT NULL AUTO_INCREMENT,
    u_fn varchar(10), 
    u_ln varchar(10), 
    u_ct datetime NOT NULL DEFAULT CURRENT_TIMESTAMP, 
    u_ut datetime NOT NULL DEFAULT CURRENT_TIMESTAMP, 
    u_mail varchar(30), 
    u_pass varchar (15),
    PRIMARY KEY (u_id)
)"; 
$res = $con->query($sql); 
if ($res == TRUE)
   echo "<br> New Table Created";
else 
echo "<br>Table Not Created";


$sql2 = " CREATE table admin (
    ad_id int(5) NOT NULL AUTO_INCREMENT,
    ad_fn varchar(10), 
    ad_ln varchar(10), 
    ad_ct datetime NOT NULL DEFAULT CURRENT_TIMESTAMP, 
    ad_ut datetime NOT NULL DEFAULT CURRENT_TIMESTAMP, 
    ad_mail varchar(30), 
    ad_pass varchar (15),
    PRIMARY KEY (ad_id)
)"; 
$res = $con->query($sql2);
if ($res == TRUE)
   echo "<br> New Table 2 Created";
else 
echo "<br>Table Not Created";

$sql3 = " CREATE table products (
  p_id int(4) NOT NULL AUTO_INCREMENT,
  p_na varchar(10), 
  p_ct datetime NOT NULL DEFAULT CURRENT_TIMESTAMP, 
  p_ut datetime NOT NULL DEFAULT CURRENT_TIMESTAMP, 
  p_s float(5),
  p_bu float(5),
  p_cr varchar(10), 
  qu int(5),
  PRIMARY KEY (p_id)
)";
$res = $con->query($sql3); 
if ($res == TRUE)
   echo "<br> New Table 3 Created";
else 
echo "<br>Table Not Created";

$sql4 = " CREATE table stocks (
  s_id int(3) NOT NULL AUTO_INCREMENT,
  s_na varchar(10), 
  s_ct datetime NOT NULL DEFAULT CURRENT_TIMESTAMP, 
  s_ut datetime NOT NULL DEFAULT CURRENT_TIMESTAMP, 
  s_qu int(5),
  PRIMARY KEY (s_id)
)";

$res = $con->query($sql4); 
if ($res == TRUE)
   echo "<br> New Table 4 Created";
else 
echo "<br>Table Not Created";
 

$sql5 = " CREATE table suppliers (
  su_id int(5) NOT NULL AUTO_INCREMENT,
  su_na varchar(10),
  su_l  varchar(35),
  su_pro varchar(10),
  su_mail varchar(30),
  su_ct datetime NOT NULL DEFAULT CURRENT_TIMESTAMP, 
  su_ut datetime NOT NULL DEFAULT CURRENT_TIMESTAMP, 
  PRIMARY KEY (su_id)
)";

$res = $con->query($sql5); 
if ($res == TRUE)
   echo "<br> New Table 5 Created";
else 
echo "<br>Table Not Created";

*/
?>