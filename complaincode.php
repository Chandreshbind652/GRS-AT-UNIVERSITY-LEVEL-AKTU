<?php
$complain=$_POST['complain'];
echo $complain;
//  $con=mysqli_connect("localhost","root","","grs");
include("../connection.php");
 $check="select * from tbl_complaintype where complaintype='$complain'";
 $res=mysqli_query($con,$check);
 if($row=mysqli_fetch_array($res))
 {  
    header("location:complaintype.php");
 }
 else
 {
 $query="insert into tbl_complaintype(complaintype,status,dor) values('$complain','N',curdate())";
 mysqli_query($con,$query);
 header("location:complaintype.php"); 
 }
?>