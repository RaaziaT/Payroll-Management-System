<!DOCTYPE html>
<html>
<head>
    <title>Allowances</title>
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
    <h1 style="text-align: center;color: blue;">ALLOWANCES(<a href="../admin/adminpanel.php" style="text-decoration: none;">BACK</a>)</h1>
    <?php
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if(! $conn)
{
   die ('Could not connect:'.mysql_error());
}
$sql ="SELECT `pg_id`, `over_time`, `houserent`, `fuel`, `medical`, `vehicle`, `utility`,
 `entertainment` FROM `allowances`";
mysql_select_db('rjmm');
$retval = mysql_query($sql,$conn);
if(! $retval)
{
   die ('Could not get data:'.mysql_error());
}?>
<div class="display">
<table class="table" align="center" cellpadding="20px" border="1px solid blue" style="border-color: blue;">
  <tr>
  <th>PAY GROUP ID</th>
  <th>OVER TIME</th>
  <th>HOUSE RENT</th>
  <th>FUEL</th>
  <th>MEDICAL</th>
  <th>VEHICLE</th>
  <th>UTILITY</th>
  <th>ENTERTAINMENT</th>
  </tr>
  <?php
while ($row=mysql_fetch_array($retval,MYSQL_ASSOC)) 
{
  ?>
  <tr>
    <td> <?php echo "{$row['pg_id']}"; ?></td>
    <td> <?php echo "{$row['over_time']}"; ?></td>
    <td> <?php echo "{$row['houserent']}"; ?></td>
    <td> <?php echo "{$row['fuel']}"; ?></td>
    <td> <?php echo "{$row['medical']}"; ?></td>
    <td> <?php echo "{$row['vehicle']}"; ?></td>
    <td> <?php echo "{$row['utility']}"; ?></td>
    <td> <?php echo "{$row['entertainment']}"; ?></td>    
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
