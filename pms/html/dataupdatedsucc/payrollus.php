<?php
$pg_id=$_POST['pg_id'];
$payroll_id=$_POST['payroll_id'];
$payroll_name=$_POST['payroll_name'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql=" UPDATE `payroll` SET `payroll_name`='$payroll_name' where `payroll_id`='$payroll_id' ";
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
header('Location:../dataupdated/payrollupdated.php');
?>
