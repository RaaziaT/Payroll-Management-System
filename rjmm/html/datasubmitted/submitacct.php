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


$bank_id=$_POST['bank_id'];
$acct_id=$_POST['acct_id'];
$acct_name=$_POST['acct_name'];
$sql=" INSERT INTO `accounts`(`acct_id`,`bank_id`, `acct_name`)
 VALUES ('$acct_id','$bank_id', '$acct_name')";

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
header('Location:../dataadded/acctadded.php');
  ?>
    

    


    