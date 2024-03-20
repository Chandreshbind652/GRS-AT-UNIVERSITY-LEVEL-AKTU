<?php
$qid=$_REQUEST['qid'];
//echo $qid;
include("../connection.php");
$query="select * from tbl_answer where qid='$qid'";
$res=mysqli_query($con,$query);

?>
<!doctype html>
<html lang="en">
  <head>
</head>     
    </script>
    <style>
        *
        {
           background-color:lightpink; 
        }
        table
        {
            background-image:linear-gradient(darksalmon,tomato,plum);
        }
        #outer
        {
            text-align:center;
        }
        
        
    </style>
    <body>
<div id="outer">
    <h1 align="center">ANSWER VIEW</h1>
<table border="1" cellpadding="30px" align="center">
    <tr>
        <th>S.NO</th>
        <th>NAME</th>
        <th>QUESTION</th>
        <th>ANSWER</th>
        <th>DATE OF ANSWER</th>
    </tr>
    <?php
    $a=1;
    while($row=mysqli_fetch_array($res))
{
    ?>
    <tr>
        <td><?php echo $a;?></td>
        <?php $uid=$row['uid'];
        $query2="select * from tbl_user where uid='$uid'";
       //echo $query1;
        $res2=mysqli_query($con,$query2);
        //echo $res2;
        if($row2=mysqli_fetch_array($res2))
        {
             $name=$row2['name'];
        }
        ?>
        <td><?php echo $name;?></td>
        <?php  $qid=$row['qid'];
        $query3="select * from tbl_question where qid='$qid'";
        //echo $query1;
         $res3=mysqli_query($con,$query3);
         //echo $res2;
         if($row3=mysqli_fetch_array($res3))
         {
              $question=$row3['question'];
         }
        ?>
        <td><?php echo $question;?></td>
        <td><?php echo $row['answer'];?></td>
        <td><?php echo $row['date'];?></td>
    </tr>
<?php    
$a++;
}
?>
</table>
<a href="discuss.php"><button type="button" class="btn btn-danger p-0" style="width:130px; height:40px; background-color:red; text-align:center; margin-top:20px;">BACK</button></a>
</body>
</html>