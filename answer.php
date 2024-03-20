<?php
session_start();
$ans=$_POST['ans'];
echo $ans;
$qid=$_POST['qid'];
echo $qid;
include("../connection.php");
 $email=$_SESSION['user'];
 $query="select * from tbl_user where email='$email'";
 $res=mysqli_query($con,$query);
 if($row=mysqli_fetch_array($res))
 {
    $uid=$row['uid'];
 }
$query2="insert into tbl_answer(uid,qid,answer,date) value('$uid','$qid','$ans',curdate())";
$res2=mysqli_query($con,$query2);
echo "<script>alert('your Answer');window.location.href='discuss.php';</script>"
?>