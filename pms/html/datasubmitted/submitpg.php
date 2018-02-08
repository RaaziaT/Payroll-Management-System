<?php
$pg_id=$_POST['pg_id'];
$pg_name=$_POST['pg_name'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql=" INSERT INTO `paygroup`(`pg_id`, `pg_name`) VALUES ('$pg_id', '$pg_name')";
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
header('Location:../dataadded/pgadded.php');
?>
