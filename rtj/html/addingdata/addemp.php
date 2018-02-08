<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link rel="icon" href="../payroll.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../bootstrap.css">
    <script src="../../js/jquery-3.1.1.js"></script>
    <script src="../../js/myJquery.js"></script>    
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
      <div class="container">
      <h1 style="text-align: center;color: blue;">ADD EMPLOYEE</h1>
      <form  method="post" action="../datasubmitted/submitemp.php">
      <table width="100%" align="center">
        <tr>
        <td>
        <label>Employee Name</label>
        </td>
        <td>
        <input type="text" name="emp_name" placeholder="Enter Employee Name" pattern="[a-zA-Z][a-zA-Z\s]{1,20}" required>
        </td>
        </tr>
        <tr>
        <td>
        <label>Hire Date</label>
        </td>
        <td>
        <input type="date" name="hire_date" placeholder="Enter Employee Name" required>
        </td>
        </tr>
        <tr>
        <td>
        <label>Date of Birth</label>
        </td>
        <td>
        <input type="date" name="DOB" placeholder="DOB" required>
        </td>
        </tr>
        <tr>
        <td>
        <label>Address</label>
        </td>
        <td>
        <input type="text" name="address" placeholder="Enter Employee Address" pattern="{1,20}" required>
        </td>
        </tr>
        <tr>
        <td>
        <label>Designation</label>
        </td>
        <td>
        <input type="text" name="designation" placeholder="Enter Employee Designa." required>
        </td>
        </tr>
        <tr>
        <tr>
          <td>
            <label>
              Department ID
            </label>
          </td>
          <td>
          <input type="number" name="dept_id" placeholder="Enter Department ID" required>
          </td>
        </tr>
        <tr>
          <td>
            <label>
              Employee ID
            </label>
          </td>
          <td>
          <input type="number" name="emp_id" placeholder="Enter Employee ID" required>
          </td>
        </tr>
        <tr>
          <td>
            <label>
              Payroll ID
            </label>
          </td>
          <td>
          <input type="number" name="payroll_id" placeholder="Enter Payroll ID" required>
          </td>
        </tr>
        <tr>
          <td>
            <label>
              Account ID
            </label>
          </td>
          <td>
          <input type="number" name="acct_id" placeholder="Enter Account ID" required>
          </td>
        </tr>
        <td colspan="1">
        <button type="submit"> ADD</button>
        </td>
        <td>
          <button class="back">BACK</button>
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
