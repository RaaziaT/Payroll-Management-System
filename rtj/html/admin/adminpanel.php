<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
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
        <li><a href="welcome.php">HOME</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="welcome.php">LOG OUT</a></li>
      </ol>
      </nav>
    </td>
  </tr>
  <tr>
    <td class="img">
      <h1 class="ap">WELCOME TO ADMIN PANEL</h1>
      <div class="adminpanel">
      <table class="panel" align="center">
  <tr>
    <td colspan="2">
          <ul>
        <li><b>DEPARTMENT</b>
            <li><a href="../addingdata/adddept.php"><b>ADD</b></a></li>
            <li><a href="../updatedata/updatedept.php"><b>UPDATE</b></a></li>
            <li><a href="../deletedata/deletedept.php"><b>DELETE</b></a></li>
            <li><a href="../datadisplay/deptdq.php"><b>VIEW</b></a></li>
            <li><a href="../searchdata/searchdept.php"><b>SEARCH</b></a></li>
        </li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>
          <ul>
        <li><b>EMPLOYEES</b>
            <li><a href="../addingdata/addemp.php"><b>ADD</b></a></li>
            <li><a href="../updatedata/updateemp.php"><b>UPDATE</b></a></li>
            <li><a href="../deletedata/deleteemp.php"><b>DELETE</b></a></li>
            <li><a href="../datadisplay/empdq.php"><b>VIEW</b></a></li>
            <li><a href="../searchdata/searchemp.php"><b>SEARCH</b></a></li>
        </li>
      </ul>
    </td>
    <td>    <ul>
        <li><b>PAY GROUP</b>
            <li><a href="../addingdata/addpg.php"><b>ADD</b></a></li>
            <li><a href="../updatedata/updatepg.php"><b>UPDATE</b></a></li>
            <li><a href="../deletedata/deletepg.php"><b>DELETE</b></a></li>
            <li><a href="../datadisplay/pgdq.php"><b>VIEW</b></a></li>
            <li><a href="../searchdata/searchpg.php"><b>SEARCH</b></a></li>
        </li>
      </ul></td>
  </tr>
  <tr>
    <td>    <ul>
        <li><b>PAYROLL</b>
            <li><a href="../addingdata/addpayroll.php"><b>ADD</b></a></li>
            <li><a href="../updatedata/updatepayroll.php"><b>UPDATE</b></a></li>
            <li><a href="../deletedata/deletepayroll.php"><b>DELETE</b></a></li>
            <li><a href="../datadisplay/payrolldq.php"><b>VIEW</b></a></li>
            <li><a href="../searchdata/searchpayroll.php"><b>SEARCH</b></a></li>
        </li>
      </ul></td>
    <td>    <ul>
        <li><b>BANKS</b>
            <li><a href="../addingdata/addbank.php"><b>ADD</b></a></li>
            <li><a href="../updatedata/updatebank.php"><b>UPDATE</b></a></li>
            <li><a href="../deletedata/deletebank.php"><b>DELETE</b></a></li>
            <li><a href="../datadisplay/bankdq.php"><b>VIEW</b></a></li>
            <li><a href="../searchdata/searchbank.php"><b>SEARCH</b></a></li>
        </li>
      </ul></td>
  </tr>
  <tr>
    <td>    <ul>
        <li><b>ACCOUNTS</b>
            <li><a href="../addingdata/addacct.php"><b>ADD</b></a></li>
            <li><a href="../updatedata/updateacct.php"><b>UPDATE</b></a></li>
            <li><a href="../deletedata/deleteacct.php"><b>DELETE</b></a></li>
            <li><a href="../datadisplay/acctdq.php"><b>VIEW</b></a></li>
            <li><a href="../searchdata/searchacct.php"><b>SEARCH</b></a></li>
        </li>
      </ul></td>
    <td>    <ul>
        <li><b>ALLOWANCES</b>
            <li><a href="../addingdata/addallowances.php"><b>ADD</b></a></li>
            <li><a href="../updatedata/updateallowances.php"><b>UPDATE</b></a></li>
            <li><a href="../deletedata/deleteallowances.php"><b>DELETE</b></a></li>
            <li><a href="../datadisplay/allowancesdq.php"><b>VIEW</b></a></li>
            <li><a href="../searchdata/searchallowances.php"><b>SEARCH</b></a></li>
        </li>
      </ul></td>
  </tr>
  <tr>
    <td>    <ul>
        <li><b>DEDUCTION</b>
            <li><a href="../addingdata/addded.php"><b>ADD</b></a></li>
            <li><a href="../updatedata/updateded.php"><b>UPDATE</b></a></li>
            <li><a href="../deletedata/deleteded.php"><b>DELETE</b></a></li>
            <li><a href="../datadisplay/deddq.php"><b>VIEW</b></a></li>
            <li><a href="../searchdata/searchded.php"><b>SEARCH</b></a></li>
            </li>
      </ul></td>
    <td>    <ul>
        <li><b>LEAVES</b>
            <li><a href="../addingdata/adddedleaves.php"><b>ADD</b></a></li>
            <li><a href="../updatedata/updatededleaves.php"><b>UPDATE</b></a></li>
            <li><a href="../deletedata/deletededleaves.php"><b>DELETE</b></a></li>
            <li><a href="../datadisplay/dedleavesdq.php"><b>VIEW</b></a></li>
            <li><a href="../searchdata/searchdedleaves.php"><b>SEARCH</b></a></li>
        </li>
      </ul></td>
  </tr>
</table>
</div>
    </td>
  </tr>
</table>
</body>
</html>
