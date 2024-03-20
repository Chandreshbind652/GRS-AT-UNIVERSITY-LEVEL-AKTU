<?php
session_start();
$ques=$_POST['ques'];
//echo $ques;
include("../connection.php");
 $email=$_SESSION['user'];
 $query="select * from tbl_user where email='$email'";
 $res=mysqli_query($con,$query);
 if($row=mysqli_fetch_array($res))
 {
    $uid=$row['uid'];
 }
$query1="insert into tbl_question(uid,question,dor) value('$uid','$ques',curdate())";
$res1=mysqli_query($con,$query1);
echo "<script>alert('Question Add Successfuly');window.location.href='discuss.php'</script>";
?>