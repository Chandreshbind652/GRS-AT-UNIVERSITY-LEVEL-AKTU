<?php
session_start();
include("../connection.php");
$email=$_SESSION['user'];
//echo $email;
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
     $uid=$row['uid'];
}
$query1="select * from tbl_complain where uid='$uid' and status='C'";
$res1=mysqli_query($con,$query1);
?>
<html>
<head>
</head>
<body>
<table border="1">
    <tr>
        <th>S.NO</th>
        <th>COMPLAIN TYPE</th>
        <th>COMPLAIN</th>
        <th>DATE OF COMPLAIN</th>
        <th>STATUS OF COMPLAIN</th>
</tr>
<?php
$a=1;
while($row1=mysqli_fetch_array($res1))
{
?>


<tr>
    <td><?php echo $a;?></td>
    <?php  $type=$row1['ctid'];
    $query2="select * from tbl_complaintype where ctid='$type'";
    $res2=mysqli_query($con,$query2);
    if($row2=mysqli_fetch_array($res2))
    {
        $ctype=$row2['complaintype'];
    }
    ?>
    <td><?php echo $ctype;?></td>
    <td><?php echo $row1['complain'];?></td>
    <td><?php echo $row1['doc'];?></td>
    <td><?php echo $row1['status'];?></td>


</tr>

<?php
$a++;
}    
?>
</body>
</html>