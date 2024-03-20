<?php
session_start();
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;
//echo $_SESSION['user'];
$email=$_SESSION['user'];
include("../connection.php");
$query="select password from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $pp=$row['password'];
}
if($pp==$op)
{
    if($op==$np)
    {
       echo "<script>alert('ERROR:-Your Old Password and New Password are same.');window.location.href='change.php';</script>";
    }
    elseif($np==$cnp)
    {
       $query2="update tbl_user set password='$np' where email='$email'";
       mysqli_query($con,$query2);
       echo "<script>alert('Change Password Successfully');window.location.href='../admin/logout.php';</script>";
    }
    else
    {
        echo "<script>alert('ERROR:-Your New Password and Confirm New Password are not same.');window.location.href='change.php';</script>";
    }
}
else
{
    echo "<script>alert('ERROR:-Your Old Password and Database password are not same.');window.location.href='change.php';</script>";
}
?>