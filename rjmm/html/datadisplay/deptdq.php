<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
    <link rel="icon" href="../payroll.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../bootstrap.css">
</head>
<body>
<div class="wrap">
<table  width="95%" class="table" align="center">
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
    <h1 style="text-align: center;color: blue;">DEPARTMENTS(<a href="../admin/adminpanel.php" style="text-decoration: none;">BACK</a>)</h1>
    <?php
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if(! $conn)
{
   die ('Could not connect:'.mysql_error());
}
$sql ="SELECT  `dept_id`, `dept_name` FROM `departments`";
mysql_select_db('rjmm');
$retval = mysql_query($sql,$conn);
if(! $retval)
{
   die ('Could not get data:'.mysql_error());
}?>
<div class="display">
<table class="table" align="center" cellpadding="20px" border="1px solid blue" style="border-color: blue;">
  <tr>
  <th>DEPARTMENT ID</th>
  <th>DEPARTMENT NAME</th>
  </tr>
  <?php
while ($row=mysql_fetch_array($retval,MYSQL_ASSOC)) 
{
  ?>
  <tr>
    <td><?php echo "{$row['dept_id']}";?></td>
    <td><?php echo "{$row['dept_name']}";?></td>
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
</div>
</div>
</body>
</html>
