<!DOCTYPE html>
<html>
<head>
    <title>Update Pay Group</title>
    <link rel="icon" href="../payroll.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../../css/style.css" />
    <script src="../../js/jquery-3.1.1.js"></script>
    <script src="../../js/myJquery.js"></script>
</head>
<body>
<div class="wrap">
<div>
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
      <h1 style="text-align: center;color: blue;">UPDATE PAY GROUP</h1>
      <form  method="post" action="../dataupdatedsucc/pgus.php">
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
        <label>Pay Group Name</label>
        </td>
        <td>
        <input type="text" name="pg_name" placeholder="Enter Pay Group Name" pattern="[a-zA-Z]{2}-[0-9]{3}" required>
        </td>
        </tr>
        <tr>
          <td colspan="1">
         <button type="submit">UPDATE</button>
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
