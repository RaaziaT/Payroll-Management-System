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
$sql=" UPDATE `allowances` SET `over_time`='$over_time',`houserent`=$houserent',
`fuel`='$fuel',`medical`='$medical',`vehicle`='$vehicle',`utility`='$utility',
`entertainment`='$entertainment' where `pg_id`='$pg_id'";
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
header('Location:../dataupdated/allowancesupdated.php');
?>
