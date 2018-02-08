<?php
$org_id=$_POST['org_id'];
$dept_id=$_POST['dept_id'];
$dept_name=$_POST['dept_name'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql=" INSERT INTO `departments` (`org_id`,`dept_id`, `dept_name`)
 VALUES ('$org_id','$dept_id', '$dept_name')";
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
header('Location:../dataadded/deptadded.php');
?>
