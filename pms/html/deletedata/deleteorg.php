<!DOCTYPE html>
<html>
<head>
    <title>Delete Organization</title>
    <link rel="icon" href="../payroll.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../../css/style.css" />
    <script src="../../js/jquery-3.1.1.js"></script>
    <script src="../../js/myJquery.js"></script>    
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
      <div class="container">
      <h1 style="text-align: center;color: blue;">DELETE ORGANIZATION</h1>
        <form action="../datadeletedsucc/orgds.php" method="post">
        <table width="100%" align="center">
          <tr>
            <td>
            <label>
              Organization ID
            </label>
            </td>
            <td>
           <input type="number" name="bank_id" placeholder="Enter Organization ID" required> 
            </td>
          </tr>
          <tr>
          <td colspan="1">
         <button type="submit">DELETE</button>
        </td>
        <td>
          <button class="back">BACK</button>
        </td>
          </tr>
        </table>
      </div>
      </form>
    </td>
  </tr>
</table>
</div>
</div>
</body>
</html>