<?php
 $type =$_GET['report'];
 $file_name = '.xls';

 $mapping_filenames = 
[
    'product' => 'Product Report',
    'supplier' => 'Supplier Report',
    'stock' => 'Stock Report' 
];

$file_name = $mapping_filenames[$type]. '.xls';
header("Content-Disposition: attachment; filename=\"$file_name\"");
header("Content-Type: application/vnd.ms-excel");

include 'dbcon.php';
if($type == 'product')
{
    $ro = ['ID', 'Name', 'Selling Price', 'Buying Price', 'Quantity'];
    echo implode("\t", array_values($ro)) ."\n";
$sql ="SELECT p_id, p_na, p_s, p_bu, qu from products"; 
$res = $con->query($sql);
foreach($res as $row)
 {
echo implode("\t", array_values($row)) ."\n";
}
}

elseif($type == 'supplier')
{
    $ro = ['ID', 'Name', 'Location', 'Product', 'Mail'];
    echo implode("\t", array_values($ro)) ."\n";
$sql2 ="SELECT su_id, su_na, su_l, su_pro, su_mail from suppliers"; 
$res = $con->query($sql2);
foreach($res as $row)
 {
echo implode("\t", array_values($row)) ."\n";
}
}

elseif($type == 'stock')
{
    $ro = ['ID', 'Name','Quantity'];
    echo implode("\t", array_values($ro)) ."\n";
$sql3 ="SELECT s_id, s_na, s_qu from stocks"; 
$res = $con->query($sql3);
foreach($res as $row)
 {
echo implode("\t", array_values($row)) ."\n";
}
}
?>
