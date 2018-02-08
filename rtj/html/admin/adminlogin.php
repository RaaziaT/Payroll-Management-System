<?php
session_start();
if(!isset($_POST['un'])&&!isset($_POST['pw']))
{
  header("location:welcome.php");
}
$un=$_POST['un'];
$password=$_POST['pw'];
$dbhost ='localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if(! $conn)
{
   die ('Could not connect:'.mysql_error());
}
if($password=='raazia'&& $un=='raazia')
{
  $_SESSION['state']='active';
  header("location:adminpanel.php");

}
else
{
  header("location:welcome.php");
}
?>
