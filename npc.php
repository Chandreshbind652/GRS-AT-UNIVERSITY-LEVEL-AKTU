<?php
include("../connection.php");
$query1="select * from tbl_complain where status='N'";
$res1=mysqli_query($con,$query1);
?>
<html>
<head>
<head>
<body>
    <table border="1">
        <tr>
        <th>S.NO</th>
        <th>COMPLAIN</th>
        <th>STUDENT NAME</th>
        <th>COMPLAIN TYPE</th>
        <th>STATUS OF COMPLAIN</th>
        <th>DATE OF COMPLAIN</th>
</tr>
<?php
$a=1;
while($row1=mysqli_fetch_array($res1))
{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row1['complain'];?></td>
<?php $com=$row1['uid'];
$query2="select name from tbl_user where uid='$com'";
$res2=mysqli_query($con,$query2);
if($row2=mysqli_fetch_array($res2))
{
      $snp=$row2['name'];

}
?>
<td><?php echo $snp?></td>
<?php $hum=$row1['ctid'];
$query3="select complaintype from tbl_complaintype where ctid='$hum'";
$res3=mysqli_query($con,$query3);
if($row3=mysqli_fetch_array($res3))
{
   $cop=$row3['complaintype'];
}
?>
<td><?php echo $cop;?></td>
<td><a href="status.php?id=<?php echo $row1['cmpid'];?>"><?php echo $row1['status'];?></a></td>
<td><?php echo $row1['doc'];?></td>


</tr>
<?php
$a++;
}
?>
    </table>
</body>
</html>