<!DOCTYPE html>
<html>
<head>
    <title>Add Allowances</title>
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
      <h1 style="text-align: center;color: blue;">ADD ALLOWANCES</h1>
      <form  method="post" action="../datasubmitted/submitallowances.php">
      <table width="100%" align="center">
        <tr>
        <td>
        <label>Pay Group ID</label>
        </td>
        <td>
        <input type="number" name="pg_id" placeholder="Enter Pay Group ID" required>
        </td>
        </tr>
        <tr>
        <td>
        <label>Over Time</label>
        </td>
        <td>
        <input type="number" name="overtime" placeholder="Enter Over Time" required>
        </td>
        </tr>
        <tr>
        <td>
        <label>House Rent</label>
        </td>
        <td>
        <input type="number" name="houserent" placeholder="Enter House Rent Allowances" required>
        </td>
        </tr>
        <tr>
        <td>
        <label>Fuel</label>
        </td>
        <td>
        <input type="number" name="fuel" placeholder="Enter Fuel Amount" required>
        </td>
        </tr>
        <tr>
        <td>
        <label>Medical</label>
        </td>
        <td>
        <input type="number" name="medical" placeholder="Enter Medical Expense" required>
        </td>
        </tr>
        <tr>
        <td>
        <label>Vehicle</label>
        </td>
        <td>
        <input type="number" name="vehicle" placeholder="Enter Vehicle Expense" required>
        </td>
        </tr>
        <tr>
        <td>
        <label>Utility</label>
        </td>
        <td>
        <input type="number" name="utility" placeholder="Enter Utility Expense" required>
        </td>
        </tr>
        <tr>
        <td>
        <label>Entertainment</label>
        </td>
        <td>
        <input type="number" name="entertainment" placeholder="Enter Entertainment Expense" required>
        </td>
        </tr>
        <tr>
        <td colspan="1">
             <button type="submit"> ADD</button>
        </td>
        <td>
          <button class="back">BACK</button>
        </td>
        </td>
        </tr>
        </table>
      </form>
      </div>
    </td>
  </tr>
</table>
</div>
</div>
</body>
</html>
