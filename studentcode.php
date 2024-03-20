<?php
session_start();
$email=$_POST['email'];
//echo $email;
$password=$_POST['pass'];
//echo $password;
include("connection.php");
$query="select * from tbl_user where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
  $_SESSION['user']=$email; 
  header("location:student/dashboard1.php");
}
else
{
  header("location:index.php");
}

?>