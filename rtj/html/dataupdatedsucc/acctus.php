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
  $bank_id=$_POST['bank_id'];
  $acct_id=$_POST['acct_id'];
  $acct_name=$_POST['acct_name'];

  $sql=" UPDATE `accounts` SET `acct_name`='$acct_name' where bank_id='$bank_id' AND `acct_id`='$acct_id'";

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
    header('Location:../dataupdated/acctupdated.php');
   ?>