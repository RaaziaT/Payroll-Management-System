<?php
$dept_id=$_POST['dept_id'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql="DELETE FROM `deptartments` where `dept_id`='$dept_id'";
mysql_select_db("rtj",$conn);
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
header('Location:../datadeleted/deptdeleted.php');
?>
