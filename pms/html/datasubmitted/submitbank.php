<?php
$bank_id=$_POST['bank_id'];
$bank_name=$_POST['bank_name'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqlis_connect($dbhost,$dbuser,$dbpass);
$sql=" INSERT INTO `bank`(`bank_id`, `bank_name`) VALUES ('$bank_id', '$bank_name')";
mysql_select_db("pms",$conn);
$retval = mysql_query($sql,$conn);
if(! $conn)
{
   die ('Could not connect:'.mysql_error());
}
if(! $retval)
{
   die ('Could not get data:'.mysql_error());
}
mysql_close($conn);
header('Location:../dataadded/bankadded.php');
?>
