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
  $ded_id=$_POST['ded_id'];
  $sick=$_POST['sick'];
  $casual=$_POST['casual'];
  $halftime=$_POST['halftime'];

  $sql=" UPDATE `deduction_leaves` SET `sick`='$sick',`casual`='$casual',`halftime`='$halftime' where `ded_id`='$ded_id'";

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
    header('Location:../dataupdated/dedleavesupdated.php');
   ?>