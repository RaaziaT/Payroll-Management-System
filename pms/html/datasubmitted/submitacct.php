<?php
$bank_id=$_POST['bank_id'];
$acct_id=$_POST['acct_id'];
$acct_name=$_POST['acct_name'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql=" INSERT INTO `accounts`(`acct_id`,`bank_id`, `acct_name`)
 VALUES ('$acct_id','$bank_id', '$acct_name')";
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
header('Location:../dataadded/acctadded.php');
?>
