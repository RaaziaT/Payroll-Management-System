<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
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
        <li><a href="welcome.php">HOME</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
      </ol>
      </nav>
    </td>
  </tr>
  <tr>
    <td class="img">
    <div class="login">
      <form action="adminlogin.php" method="post" class="log">
        <label id="ad" style="margin-left:18.55%">
          ADMIN LOGIN
        </label>
        <br>
        <p style="text-align:center;">
          <b>USERNAME</b>
        </p>
        <br>
        <b><input type="text" name="un" placeholder="Enter Username" style="text-align: center; width:85%; font-size:1.1em" required></b>
        <p style="text-align:center;">
          <b>PASSWORD</b>
        </p>
        <b><input type="password" name="pw" style="text-align: center; width:85%; font-size:1.1em" required></b>
        <br>
        <button type="submit" style="margin-left:37%;color: #fff; background-color: #337ab7; border-color: #2e6da4; border-radius:10px;">LOG IN</button>
      </form>
    </div>
    </td>
  </tr>
</table>
</div>
</div>
</body>
</html>
