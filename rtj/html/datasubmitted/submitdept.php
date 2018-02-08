<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "rtj";


   // $servernameS = "localhost";
   // $usernameS = "root";
   // $passwordS = "";
   // $dbnameS = "pms";

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
  $dept_name=$_POST['dept_name'];
//  $org_id=$_POST['1'];

   $sql=" INSERT INTO `departments` (`dept_id`, `dept_name`) VALUES ('$dept_id', '$dept_name')";
//   $sqlS=" INSERT INTO `departments` (`org_id`,`dept_id`, `dept_name`) VALUES ('$org_id',$dept_id', '$dept_name')";

    if ($conn->query($sql) === TRUE) {
     echo "Successfully Saved";

    } else {
      echo "Error: Go back and Try Again ! " . $sql . "<br>" . $conn->error;
    }

    // if ($connS->query($sqlS) === TRUE) {
    //  echo "Successfully Saved";

    // } else {
    //   echo "Error: Go back and Try Again ! " . $sql . "<br>" . $connS->error;
    // }
    $conn->close();
 //   $connS->close();
    header('Location:../dataadded/deptadded.php');
   ?>