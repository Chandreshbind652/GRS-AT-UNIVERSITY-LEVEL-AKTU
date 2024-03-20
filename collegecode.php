<?php
$college=$_POST['college'];
//echo $collage;
//  $con=mysqli_connect("localhost","root","","grs");
include("../connection.php");
 $check="select * from tbl_college where college='$college'";
 $res=mysqli_query($con,$check);
 if($row=mysqli_fetch_array($res))
 {
    header("location:college.php");
 }
 else
 {
 $query="insert into tbl_college(college,status,dor) values('$college','N',curdate())";
 mysqli_query($con,$query);
 header("location:college.php"); 
 }
?>