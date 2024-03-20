<?php
session_start();
include("../connection.php");
$email=$_SESSION['user'];
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
      
$query2="select * from tbl_session";
$res2=mysqli_query($con,$query2);

$cquery3="select * from tbl_college";
$res3=mysqli_query($con,$cquery3);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration From</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.bundle.js">
        
    </script>
    <style>
     *
     {
        margin:0px;
     }
      #outer
      {
        /* background-image: url('images/s8.jpg');
        background-repeat:no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
         */
         
        height:591px;
        background-image: url('images/.jpg');
        background-color:teal;
      }
      table
      {
        width:100%;
      }
      td
      {
        width:30%;
         color:white; 
       
      }
      input[type="text"]
      {
        width:300px;
        text-align: center;
        font-size: 19px;
        border-radius: 10px;
        box-shadow:0px 0px 10px red;
        background-color:white;
        color:black;
      }
      input[type="email"]
      {
        width:300px;
        text-align: center;
        font-size: 20px;
        border-radius: 10px;
        box-shadow:0px 0px 10px red;
        background-color:white;
        color:black;
      }
      input[type="password"]
      {
        width:300px;
        text-align: center;
        font-size: 20px;
        border-radius: 10px;
        box-shadow:0px 0px 10px red;
        background-color:;
        color:black;
      }
      input[type="date"]
      {
        width:300px;
        text-align: center;
        font-size: 20px;
        border-radius: 10px;
        box-shadow:0px 0px 10px red;
        background-color:white;
        color:black;
      }
      textarea
      {
        width:300px;
        text-align: center;
        font-size: 19px;
        border-radius: 10px;
        box-shadow:0px 0px 10px red;
        background-color:white;
        color:black;
        
      }
      select
      {
        width:300px;
        text-align: center;
        font-size: 19px;
        border-radius: 10px;
        box-shadow:0px 0px 10px red;
        background-color:white;
        color:black;
      }
      h1{
        color:white;
      }
      .title
      {
        font-size:18px;
        text-shadow:0px 0px 2px red;
      }
      </style>
<body>
<div id="outer">
    <h1 align="center">UPDATE YOUR PROFILE</h1>
    <hr/>
    <!-- <fieldset style="width:400px;">
        <legend><UPDATE PROFILE</legend> -->
    <form action="updatecode.php" method="post">
        <table cellpadding="20px">
            <tr>
            <td class="title">ENTER YOUR NAME:</td>
            <td><input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $row['name'];?>" required/></td>
            
            <td class="title">ENTER YOUR FATHER NAME:</td>
            <td><input type="text" name="fname" placeholder="Enter Your Father Name" value="<?php echo $row['fname'];?>"required/></td></tr>

            </tr>
            <tr>
            <td class="title">ENTER YOUR GENDER:</td>
            <td><input type="radio" name="a" value="male" <?php if($row['gender']=='male') {?> checked <?php } ?>/>Male
            <input type="radio" name="a" value="female" <?php if($row['gender']=='female') {?> checked <?php } ?>/>Female</td>
            <td class="title">ENTER YOUR EMAIL ID:</td>
            <td><input type="email" name="email" value="<?php echo $row['email'];?>"required /></td></tr>
             <tr>
            <td class="title">ENTER YOUR PASSWORD:</td>
            <td><input type="password" name="pass" value="<?php echo "********";?>" required /></td>
            <td class="title">ENTER YOUR MOBILE NO:</td>
            <td><input type="text" name="mn" value="<?php echo $row['mobile'];?>" required/></td></tr>
            <tr>
                <td class="title">ENTER DATE OF BIRTH:</td>
               <td><input type="date" name="date" value="<?php echo $row['dob'];?>" required/></td>
                <td class="title">ENTER YOUR ADDRESS</td>
                <td><textarea name="area" placeholder="Enter Your Address" value="" required><?php echo $row['address'];?></textarea>
            </tr>
            <tr>
            <td class="title">ENTER YOUR CITY:</td>
             <td><select name="city" value="<?php echo $row['city'];?>">
             <!-- <option>---Select City---</option> -->
             <option>Jaunpur</option>
             <option>Varanasi</option>
             <option>Prayagraj</option>
             <option>Ghaziabad</option>
             <option>Ghazipur</option>
             <option>Shamli</option>
             </select></td>
            <td class="title">ENTER YOUR PINCODE:</td>
            <td><input type="text" name="code" placeholder="Enter Your Pincode" value="<?php echo $row['pincode'];?>"/></td>
            </tr>
            <tr>
           
            <?php
}
?>
            </tr>
            <tr><td></td>
            <td><input type="submit" value="UPDATE" style="width:150px; height:40px; background-color:black; color:white; border-radius:10px;"/>
            <td><a href="dashboard1.php"><button type="button" class="btn btn-danger p-0" style="width:150px; height:40px; background-color:red; color:white; border-radius:10px;">BACK</button></a></td>
        </td></tr>
      </table>
</form>
<!-- </fieldset> -->
</div>
</body>    
</html>