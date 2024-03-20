<?php
$session=$_POST['session'];
//echo $session;
 $con=mysqli_connect("localhost","root","","grs");
 $check="select * from tbl_session where session='$session'";
 $res=mysqli_query($con,$check);
 if($row=mysqli_fetch_array($res))
 {
    header("location:session.php");
 }
 else
 {
 $query="insert into tbl_session(session,status,dor) values('$session','N',curdate())";
 mysqli_query($con,$query);
 header("location:session.php");
 }
?>