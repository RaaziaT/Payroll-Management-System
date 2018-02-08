<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "rtj";


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
  $pg_id=$_POST['pg_id'];
  $payroll_id=$_POST['payroll_id'];
  $payroll_name=$_POST['payroll_name'];

  $sql=" INSERT INTO `payroll`(`pg_id`,`payroll_id`,`payroll_name`) VALUES ('$pg_id','$payroll_id','$payroll_name')";

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
    header('Location:../dataadded/payrolladded.php');
   ?>