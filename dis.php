<?php
include("../connection.php");
$query="select * from tbl_question";
$res=mysqli_query($con,$query);

?>
<html>
<head>
</head>
<body>
<table border="1">
    <tr>
        <th>S.NO</th>
        <th>QUESTION</th>
        <th>POSTED BY</th>
        <th>ANSWER</th>
        <th>DELETE</th>
    </tr>
    <?php
    $a=1;
    while($row=mysqli_fetch_array($res))
    {
    ?>
  
      <tr>
        <td><?php echo $a;?></td>
        <td><?php echo $row['question'];?></td>
        <?php $uid=$row['uid'];
        $query2="select * from tbl_user where uid='$uid'";
        $res2=mysqli_query($con,$query2);
        if($row2=mysqli_fetch_array($res2))
        {
                $pic=$row2['profilepic'];
                $name=$row2['name'];
        }
        
        ?>
        <td><img src="../upload/<?php echo $pic; ?>" alt="" style="width:30px;"><?php echo $name;?></td>
        <?php  $qid=$row['qid'];
        $query1="select * from tbl_answer where qid='$qid'";
        $res1=mysqli_query($con,$query1);
        while($row1=mysqli_fetch_array($res1))
        {
            $ans=$row1['answer'];
        }
        ?>
        <td><?php echo $ans?></td>
        <td><a href="delete.php?qid=<?php echo $row['qid']?>">delete</a></td>
      </tr>


<?php
$a++;
    }
    ?>
</table>
</body>
</html>