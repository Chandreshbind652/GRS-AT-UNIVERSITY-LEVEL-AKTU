<?php
session_start();
$com=$_POST['com'];
//echo $com;
$reason=$_POST['reason'];
//echo $reason;
$email=$_SESSION['user'];
//echo $email;
$con=mysqli_connect("localhost","root","","grs");
$query="select uid from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
 $id=$row['uid'];
}
//include("../connection.php");

$query2="insert into tbl_complain(ctid,uid,complain,doc,status) values ('$com','$id','$reason',curdate(),'N')";
mysqli_query($con,$query2);
echo "<script>alert('SUCCESSFULLY FILED COMPLAIN');window.location.href='dashboard1.php';</script>";
?>