<?php
$pg_id=$_POST['pg_id'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql="DELETE FROM `allowances` WHERE `pg_id`='$pg_id'";
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
header('Location:../datadeleted/allowancesdeleted.php');
?>
