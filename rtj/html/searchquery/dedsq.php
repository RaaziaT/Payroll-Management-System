<!DOCTYPE html>
<html>
<head>
    <title>Deductions Search Result</title>
    <link rel="icon" href="../payroll.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../../css/style.css" />
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
    <h1 style="text-align: center;color: blue;">DEDUCTIONS(<a href="../admin/adminpanel.php" style="text-decoration: none;">BACK</a>)</h1>
    <?php
$ded_id  =$_POST['ded_id'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if(! $conn)
{
   die ('Could not connect:'.mysql_error());
}
$sql ="SELECT `ded_id`, `incometax`, `gpfund`, `pg_id` FROM `deductions` where `ded_id`='$ded_id'";
mysql_select_db('rtj');
$retval = mysql_query($sql,$conn);
if(! $retval)
{
   die ('Could not get data:'.mysql_error());
}?>
<div class="display">
<table class="table" align="center" cellpadding="20px" border="1px solid blue" style="border-color: blue;">
  <tr>
  <th>DEDUCTION ID</th>
  <th>INCOMETAX</th>
  <th>GP FUND</th>
  <th>PAY GROUP ID</th>
  </tr>
  <?php
while ($row=mysql_fetch_array($retval,MYSQL_ASSOC)) 
{
  ?>
  <tr>
    <td> <?php echo "{$row['ded_id']}"; ?></td>
    <td> <?php echo "{$row['incometax']}"; ?></td>
    <td> <?php echo "{$row['gpfund']}"; ?></td>
    <td> <?php echo "{$row['pg_id']}"; ?></td>   
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
