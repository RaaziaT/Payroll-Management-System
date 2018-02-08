<?php
$pg_id=$_POST['pg_id'];
$ded_id=$_POST['ded_id'];
$gpfund=$_POST['gpfund'];
$incometax=$_POST['incometax'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql=" INSERT INTO `deductions`(`ded_id`, `incometax`, `gpfund`, `pg_id`) 
 VALUES ('$ded_id','$incometax','$gpfund','$pg_id') where pg_id='$pg_id'";
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
header('Location:../dataadded/dedadded.php');
?>
