<?php
$acct_id=$_POST['acct_id'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql="DELETE FROM `accounts` WHERE `acct_id`='$acct_id'";
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
header('Location:../datadeleted/acctdeleted.php');
?>
