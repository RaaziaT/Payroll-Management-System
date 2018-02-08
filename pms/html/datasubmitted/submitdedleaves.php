<?php
$ded_id=$_POST['ded_id'];
$sick=$_POST['sick'];
$casual=$_POST['casual'];
$halftime=$_POST['halftime'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql=" INSERT INTO `deduction_leaves`(`ded_id`, `sick`, `casual`, `halftime`)
VALUES ('$ded_id','$sick','$casual','$halftime') where ded_id='$ded_id'";
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
header('Location:../dataadded/dedleavesadded.php');
?>
