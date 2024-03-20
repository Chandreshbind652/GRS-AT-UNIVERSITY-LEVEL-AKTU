<?php
session_start();

include("../connection.php");
$filename=$_FILES['file']['name'];
//echo $filename;
$size=$_FILES['file']['size'];
//echo $size;
$type=$_FILES['file']['type'];
//echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $temp_name;
$location="../upload/";


$email=$_SESSION['user'];
//echo $email;
$query2="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query2);
if($row=mysqli_fetch_array($res))
{
    $uid=$row['uid'];
}
$query="update tbl_user set profilepic='$filename' where uid='$uid'";  

mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$filename);

header("location:profile.php");

?>