<?php

?>
<html>
    <head>
        <style>
            input{
                height:40px;
                background-color:red;
                border-radius:10px;
                color:white;
            }
            </style>
    </head>
    <body style="background-image:url('images/AKTU.jpg'); color:white;">
      <h1 align="center">ADD COMPLAIN AND REASON FOR COMPLAIN</h1>
        <form align="center" action="formcode.php" method="post">
<br/>
Complain Type
<select required name="com">
    <option value="">Select Complain</option>
    <?php
    
$con=mysqli_connect("localhost","root","","grs");
$query="select * from tbl_complaintype";
$res=mysqli_query($con,$query);
       while($row=mysqli_fetch_array($res))
       {
?>
<option value="<?php echo $row['ctid'];?>">
<?php echo $row['complaintype'];?></option>
<?php

}
                                
?>
</select>
<br/>
<br/>


<textarea rows="20" cols="60" placeholder="Enter Your Complain Reason" name="reason"  style="border-radius:10px; text-align:center; background-color:skyblue;"></textarea>

<br/>
<br/>
<br/>
<input type="submit" value="Submit Complain"/>

        </form>
    </body>
</html>