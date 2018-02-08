<?php
$dept_id=$_POST['dept_id'];
$emp_id=$_POST['emp_id'];
$acct_id=$_POST['acct_id'];
$payroll_id=$_POST['payroll_id'];
$emp_name=$_POST['emp_name'];
$hire_date=$_POST['hire_date'];
$DOB=$_POST['DOB'];
$address=$_POST['address'];
$designation=$_POST['designation'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$sql=" INSERT INTO `employees`(`dept_id`, `emp_id`, `acct_id`, `payroll_id`, `emp_name`,
 `DOB`, `address`, `hire_date`, `designation`)
 VALUES ('$dept_id', '$emp_id', '$acct_id', '$payroll_id','$emp_name', '$DOB', 
 '$address', '$hire_date','$designation')";
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
header('Location:../dataadded/empadded.php');
?>
