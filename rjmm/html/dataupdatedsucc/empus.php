<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "rjmm";


   $servernameS = "localhost";
   $usernameS = "root";
   $passwordS = "";
   $dbnameS = "pms";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   $connS = new mysqli($servernameS, $usernameS, $passwordS, $dbnameS);

   // Check connection
  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   if ($connS->connect_error) {
       die("Connection failed: " . $connS->connect_error);
   }

   //escape variables for security
<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "rjmm";


   $servernameS = "localhost";
   $usernameS = "root";
   $passwordS = "";
   $dbnameS = "pms";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   $connS = new mysqli($servernameS, $usernameS, $passwordS, $dbnameS);

   // Check connection
  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   if ($connS->connect_error) {
       die("Connection failed: " . $connS->connect_error);
   }

   //escape variables for security


$dept_id=$_POST['dept_id'];
$emp_id=$_POST['emp_id'];
$acct_id=$_POST['acct_id'];
$payroll_id=$_POST['payroll_id'];
$emp_name=$_POST['emp_name'];
$hire_date=$_POST['hire_date'];
$DOB=$_POST['DOB'];
$address=$_POST['address'];
$designation=$_POST['designation'];
$sql=" UPDATE `employees` SET `emp_name`='$emp_name',`DOB`='$DOB',`address`='$address',
`hire_date`='$hire_date',`designation`='$designation' where `emp_id`='$emp_id'";
    if ($conn->query($sql) === TRUE) {
     echo "Successfully Saved";

    } else {
      echo "Error: Go back and Try Again ! " . $sql . "<br>" . $conn->error;
    }

    if ($connS->query($sql) === TRUE) {
     echo "Successfully Saved";

    } else {
      echo "Error: Go back and Try Again ! " . $sql . "<br>" . $connS->error;
    }
    $conn->close();
    $connS->close();
header('Location:../dataupdated/empupdated.php');
  ?>
    

    