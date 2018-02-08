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
  $over_time=$_POST['over_time'];
  $houserent=$_POST['houserent'];
  $fuel=$_POST['fuel'];
  $medical=$_POST['medical'];
  $vehicle=$_POST['vehicle'];
  $utility=$_POST['utility'];
  $entertainment=$_POST['entertainment'];

 $sql=" INSERT INTO `allowances`(`pg_id`, `over_time`, `houserent`, `fuel`, `medical`, `vehicle`,`utility`,`entertainment`)  VALUES ('$pg_id', '$over_time', '$houserent','$fuel','$medical','$vehicle','$utility','$entertainment')";

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
    header('Location:../dataadded/allowancesaddede.php');
   ?>