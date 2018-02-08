<?php
$bank_id=$_POST['bank_id'];
$acct_id=$_POST['acct_id'];
$acct_name=$_POST['acct_name'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql=" UPDATE `accounts` SET `acct_name`='$acct_name' 
where bank_id='$bank_id' AND `acct_id`='$acct_id'";
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
header('Location:../dataupdated/acctupdated.php');
?>
