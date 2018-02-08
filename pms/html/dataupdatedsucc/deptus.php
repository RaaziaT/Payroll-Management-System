<?php
$org_id=$_POST['org_id'];
$dept_id=$_POST['dept_id'];
$dept_name=$_POST['dett_name'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql=" UPDATE `departments` SET `dept_name`='$dept_name' where org_id='$org_id' AND `dept_id`='$dept_id'";
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
header('Location:../dataupdated/deptupdated.php');
?>
