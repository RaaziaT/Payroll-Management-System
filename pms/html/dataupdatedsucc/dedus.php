<?php
$pg_id=$_POST['pg_id'];
$ded_id=$_POST['ded_id'];
$gpfund=$_POST['gpfund'];
$incometax=$_POST['incometax'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql=" UPDATE `deductions` SET `incometax`='$incometax',`gpfund`='$incometax' where `ded_id`='$ded_id' ";
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
header('Location:../dataupdated/dedupdated.php');
?>
