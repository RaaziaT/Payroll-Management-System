<?php
$pg_id=$_POST['pg_id'];
$payroll_id=$_POST['payroll_id'];
$payroll_name=$_POST['payroll_name'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql=" INSERT INTO `payroll`(`pg_id`,`payroll_id`,`payroll_name`)
 VALUES ('$pg_id','$payroll_id','$payroll_name')";
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
header('Location:../dataadded/payrolladded.php');
?>
