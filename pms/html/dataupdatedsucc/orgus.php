<?php
$org_id=$_POST['org_id'];
$org_name=$_POST['org_name'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql=" UPDATE `organization` SET `org_name`='$org_name' where `org_id`='$org_id'";
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
header('Location:../dataupdated/orgupdated.php');
?>
