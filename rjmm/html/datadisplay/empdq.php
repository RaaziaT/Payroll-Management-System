<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
    <link rel="icon" href="../payroll.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../bootstrap.css">
</head>
<body>
<div class="wrap">

<table width="95%" class="table" align="center">
  <tr>
    <td class="mono">
      <h1 id="title">
        Payroll Management System
      </h1>
    </td>
  </tr>
  <tr>
    <td id="nav">
    <nav>
      <ol>
        <li><a href="../admin/welcome.php">HOME</a></li>
        <li><a href="../admin/aboutus.php">ABOUT US</a></li>
        <li><a href="../admin/welcome.php">LOG OUT</a></li>
      </ol>
      </nav>
    </td>
  </tr>
  <tr>
    <td class="img">
    <h1 style="text-align: center;color: blue;">EMPLOYEES(<a href="../admin/adminpanel.php" style="text-decoration: none;">BACK</a>)</h1>
    <?php
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if(! $conn)
{
   die ('Could not connect:'.mysql_error());
}
$sql ="SELECT `dept_id`, `emp_id`, `acct_id`, `payroll_id`, `emp_name`, `DOB`, `address`,
 `hire_date`, `designation` FROM `employees`";
mysql_select_db('rjmm');
$retval = mysql_query($sql,$conn);
if(! $retval)
{
   die ('Could not get data:'.mysql_error());
}?>
<div class="display">
<table class="table" align="center" cellpadding="0.8em" border="1px solid blue" style="border-color: blue;">
  <tr>
  <th>DEPARTMENT ID</th>
  <th>EMPLOYEE ID</th>
  <th>ACCOUNT ID</th>
  <th>PAYROLL ID</th>
  <th>EMPLOYEE NAME</th>
  <th>EMPLOYEE'S DOB</th>
  <th>EMPLOYEE'S ADDRESS</th>
  <th>EMPLOYEE'S HIRE_DATE</th>
  <th>EMPLOYEE'S DESIGNATION</th>
  </tr>
  <?php
while ($row=mysql_fetch_array($retval,MYSQL_ASSOC)) 
{
  ?>
  <tr>
    <td> <?php echo "{$row['dept_id']}"; ?></td>
    <td> <?php echo "{$row['emp_id']}"; ?></td>
    <td> <?php echo "{$row['acct_id']}"; ?></td>
    <td> <?php echo "{$row['payroll_id']}"; ?></td>
    <td> <?php echo "{$row['emp_name']}"; ?></td>
    <td> <?php echo "{$row['DOB']}"; ?></td>
    <td> <?php echo "{$row['address']}"; ?></td>
    <td> <?php echo "{$row['hire_date']}"; ?></td>
    <td> <?php echo "{$row['designation']}"; ?></td>    
  </tr>
  <?php
}
  ?>
<?php

mysql_close($conn);
?>
    </td>
  </tr>
</table>
</div>
</body>
</html>
