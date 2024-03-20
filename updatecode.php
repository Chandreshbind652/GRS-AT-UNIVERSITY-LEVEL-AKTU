<?php
session_start();
include("../connection.php");
$name=$_POST['name'];
$fname=$_POST['fname'];
$gender=$_POST['a'];
// $email=$_POST['email'];
// $password=$_POST['pass'];
$mobile=$_POST['mn'];
$dob=$_POST['date'];
$address=$_POST['area'];
// $city=$_POST['city'];
$pincode=$_POST['code'];
$email=$_SESSION['user'];
$query="select uid from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
     $uid=$row['uid'];
}
$query2="update tbl_user set name='$name',fname='$fname',gender='$gender',mobile='$mobile',dob='$dob',address='$address',pincode='$pincode' where uid='$uid'"; 
mysqli_query($con,$query2);
//echo $query;
header ("location:dashboard1.php");
?>