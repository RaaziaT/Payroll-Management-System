<?php
$pg_id=$_POST['pg_id'];
$over_time=$_POST['over_time'];
$houserent=$_POST['houserent'];
$fuel=$_POST['fuel'];
$medical=$_POST['medical'];
$vehicle=$_POST['vehicle'];
$utility=$_POST['utility'];
$entertainment=$_POST['entertainment'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql=" INSERT INTO `allowances`(`pg_id`, `over_time`, `houserent`, `fuel`, `medical`, 
`vehicle`, `utility`, `entertainment`) 
VALUES ('$pg_id', '$over_time', '$houserent','$fuel','$medical','$vehicle','$utility','$entertainment')";
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
header('Location:../dataadded/allowancesadded.php');
?>
