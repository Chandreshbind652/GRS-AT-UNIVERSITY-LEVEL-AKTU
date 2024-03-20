<?php
include("../connection.php");
$query="select * from tbl_question";
$res=mysqli_query($con,$query);
?>
<html>
<head>
</head>
<style>
    *
    {
        background-color:cornsilk;
    }
    </style>
<body>
    <form action="discusscode.php" method="post" align="center">
    <h1>ADD QUESTION</h1>
    <br/>
   <textarea name="ques" cols="100" rows="8" style="margin-top:-20px; background-color:skyblue;"></textarea>
   <br/>
   <input  type="submit" value="ADD QUESTION" style="margin-top:15px; width:130px; height:40px; background-color:lightgreen;">
   <br/>
   <a href="dashboard1.php"><button type="button" class="btn btn-danger p-0" style="width:130px; height:40px; background-color:red; margin-top:15px;">BACK</button></a>
</form>
   <table border="1" align="center" style="margin-top:30px; background-color:green;">
    <tr>
        <th>S.NO</th>
        <th>QUESTION</th>
        <th>POST ANSWER</th>
        <th>VIEW ANSWER</th>
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
    <td> <a href="post.php?qid=<?php echo $row['qid'];?>">Post</a></td>
    <td><a href="view.php?qid=<?php echo $row['qid'];?>">View</a></td>
    <td><a href="delete.php?qid=<?php echo $row['qid'];?>">delete</a></td>

</tr>

 <?php   
 $a++;
} 
?>
</table>
 
</body>
</html>