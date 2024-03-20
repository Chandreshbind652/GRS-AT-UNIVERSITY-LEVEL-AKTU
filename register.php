<?php
include("connection.php");
$query="select * from tbl_session";
$res=mysqli_query($con,$query);

$query="select * from tbl_college";
$cres=mysqli_query($con,$query);
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
     
      #outer
      {
        background-image: url('images/AKTU2.jpg');
        background-repeat:no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    
        
        
        
      }
      table
      {
        width:100%;
      }
      td
      {
        width:50%;
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
      input::placeholder
      {
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
        box-shadow:0px 0px 10px white;
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
      textarea::placeholder
      {
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
      #address
      {
        width:200px;
        height:50px;
      }
      </style>
      </head>
      <body>
      <div id="outer" class="container-fluid">
      <div class="row">
        <div class="col-sm-2"></div>
      <div class="col-sm-8 bg-transparent m-auto">
        <fieldset>
            <legend align="center" style="color:black;"><h2>Registration Form</h2></legend>
            <form action="code.php" method="post">
               <table cellpadding="15px">
               <tr>
<td>Name</td>
<td><input type="text" name="name" placeholder="Enter your name"/></td>
<td>Fname</td>
<td><input type="text" name="fname" placeholder="Enter your father's name"/></td></tr>
<tr>
<td>Gender</td>
<td style="color:black;"><input type="radio" name="a" value="male"/>Male
<input type="radio" name="a" value="female" style="margin-left:50px;"/>Female</td>
<td>Email</td>
<td><input type="email" name="email" placeholder="Enter your email"/></td></tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" placeholder="Enter your password"/></td>
<td>Mobile</td>
<td><input type="text" name="mn"placeholder="Enter your mobile.no"/></td></tr>
<tr>
<td>DOB</td>
<td><input type="date" name="dob" placeholder="Enter your DOB"/></td>
<td>Address</td>
<td id="address"><textarea name="area" placeholder="Enter your address" cols="4"></textarea></td></tr>
<tr>
<td>City</td>
<td><select name="city">
<option>---Select City---</option>
<option>Jaunpur</option>
<option>Varanasi</option>
<option>Prayagraj</option>
<option>Ghaziabad</option>
<option>Ghazipur</option>
<option>Shamli</option>
</select></td>
<td>Pincode</td>
<td><input type="text" name="code" placeholder="Enter your pincode"/></td></tr>
<tr>
<td>Course</td>
<td><select name="course">
<option>---Select Course---</option>
<option>B.E.</option>
<option>B.Tech</option>
<option>B.Pharma</option>
<option>M.E.</option>
<option>M.Tech</option>
<option>BBA</option>
<option>BCA</option>
<option>B.Com</option>
<option>M.Com</option>
<option>MBA</option>
<option>PHD</option>
</select></td>
<td>Session</td>
<td><select name="session">
  <option>---Select Session----</option>
<?php
  while($row=mysqli_fetch_array($res))
  {
  ?>
    <option value="<?php echo $row['sid'];?>"><?php echo $row['session'];?></option>
  <?php  
  }
  ?>
</select></td>
</tr>
<tr>
<td>College</td>
<td><select name="college">
<option>---Select College----</option>
  <?php
  while($row=mysqli_fetch_array($cres))
  {
  ?>
    <option value="<?php echo $row['cid'];?>"><?php echo $row['college'];?></option>
  <?php  
  }
  ?>
</select></td></tr>
<tr><td></td>
<td><input type="submit" style="width:150px;" class="btn btn-danger"></td>
<td><a href="stu_login.php"><button type="button" class="btn btn-danger p-0" style="width:150px; height:37px;">login</button></a></td>
<td><a href="index.php"><button type="button" class="btn btn-danger p-0" style="width:150px; height:37px; margin-left:120px;">Back</button></a></td>
</tr>
               </table>  
            </form> 
        </fieldset>
            </div> 
            <div class="col-sm-2"></div> 
     </div>
      </div>
      </body>
      </html>