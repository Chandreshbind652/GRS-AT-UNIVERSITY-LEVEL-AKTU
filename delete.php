<?php
$qid=$_REQUEST['qid'];
include("../connection.php");
$query="delete from tbl_question where qid='$qid'";
mysqli_query($con,$query);
header("location:discuss.php");

?>