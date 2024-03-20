<?php
session_start();
//echo $_SESSION['admin'];
if($_SESSION['admin']=="")
{
session_destroy();
header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    
</head>
<style>
    .dash
    {
        margin:auto;
        height:160px;
        width:200px;
        border-radius:20px;
        background-image:linear-gradient(lavender,lightgreen,lavender);
   
     box-shadow:0px 0px 10px cadetblue;

    }
</style>
<body>
    <!----------main start---------->
        <div class="sidebar" style="background-color:rosybrown;">
        <h3 align="center" style="margin-top:10px;"><img src="images/p1.jpg" style="width:70px; height:70px;" /></h3>
        <h5 align="center">Admin</h5>
        <hr/>
        <div class="logo" style="height:10px;">
        <ul class="main" style="padding:10px; height:10px;">
            <li class="active"  style="padding:5px;">
                <a href="dashboard.php">
                 <i class="fas fa-tachometer-alt"></i>
                 <span>Dashboard</span>
                </a>
            </li>
            <li style="padding:5px;">
                <a href="college.php">
                <i class="bi bi-house-door"></i>
                 <span>College Management</span>
                </a>
            </li>
            <li style="padding:5px;">
                <a href="session.php">
                <i class="bi bi-calendar-plus-fill"></i>
                 <span>Session Management</span>
                </a>
            </li>
            <li style="padding:5px;">
                <a href="complaintype.php">
                <i class="bi bi-calendar-plus-fill"></i>
                 <span>Complain Type</span>
                </a>
            </li>
            
           <li>
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:rosybrown; color:black;">
  Complain Manage
  </button>
  <ul class="dropdown-menu" style="background-color:khaki;">
    <li><a class="dropdown-item" href="npc.php">Not Process Yet</a></li>
    <li><a class="dropdown-item" href="pc.php">Pending Complaint</a></li>
    <li><a class="dropdown-item" href="cc.php">Closed Complaint</a></li>
  </ul>
</li>

            <li style="padding:5px;">
                <a href="srecord.php">
                <i class="bi bi-person-video2"></i>
                 <span >User Management</span>
                </a>
            </li>
            <li style="padding:5px;">
                <a href="dis.php">
                <i class="bi bi-currency-exchange"></i>
                 <span>Discussion Forum </span>
                </a>
            </li>
            <li style="padding:5px;">
                <a href="change.php">
                <i class="bi bi-currency-exchange"></i>
                 <span>Change Password</span>
                </a>
            </li>
            <li class="logout" style="padding:5px;">
                <a href="logout.php">
                <i class="bi bi-archive-fill"></i>
                 <span>Logout</span>
                </a>
            </li>
        </ul>
</div>
</div>
<div class="main--content">
    <div class="header-wrapper" style="background-color:rosybrown">
        <div class="header-title">
            <span>Admin<span>
            <h4>Dashboard</h4>    
        </div>
        <div class="user--info">
            <!-- <div class="search--box"> -->
            <h5 style="color:black;">
              <?php
               echo date("d/m/y");?>&nbsp; <?php
               echo $_SESSION['admin'];
              ?>
            </h5>&nbsp;
            <!-- </div> -->
            <img src="images/p1.jpg" alt=""/>
        </div>
    </div>

    <div class="row m-auto p-auto">
    <div class="col-sm-3 text-center bg-primary dash py-2">
       <h5> Not process</h5>
       <?php
       include("../connection.php");
       $query="select count(status) from tbl_complain where status='N'";
       $res=mysqli_query($con,$query);
       if($row=mysqli_fetch_array($res))
       {
           $count=$row['count(status)'];
       }
       ?><h1 style="color:red;"><i class="bi bi-hourglass-bottom"></i>
       <?php echo $count;?></h1><p>Total Not Process Complain Here</p>
    </div>
    <div class="col-sm-3 dash py-2 text-center">
    <h5>Pending Complaint</h5>
       <?php
       include("../connection.php");
       $query1="select count(status) from tbl_complain where status='P'";
       $res1=mysqli_query($con,$query1);
       if($row1=mysqli_fetch_array($res1))
       {
           $count1=$row1['count(status)'];
       }
       ?><h1><i class="bi bi-hourglass-split"></i>
       <?php echo $count1;?></h1><p>Total Pending Complain Here</p>
    </div>
    <div class="col-sm-3 bg-primary dash text-center py-2">
        <h5>Close Complaint</h5>
       <?php
       include("../connection.php");
       $query2="select count(status) from tbl_complain where status='C'";
       $res2=mysqli_query($con,$query2);
       if($row2=mysqli_fetch_array($res2))
       {
           $count2=$row2['count(status)'];
       }
       ?><h1 style="color:yellow;"><i class="bi bi-hourglass-bottom"></i>
       <?php echo $count2;?></h1><p>Total Close Complain Here</p></div>
    <div class="col-sm-3 text-center dash py-2">
    <h5>Total Students</h5>
       <?php
       include("../connection.php");
       $query3="select count(uid) from tbl_user";
       $res3=mysqli_query($con,$query3);
       if($row3=mysqli_fetch_array($res3))
       {
           $count3=$row3['count(uid)'];
       }
       ?><h1 style="color:green;"><i class="bi bi-hourglass-split"></i>
       <?php echo $count3;?></h1>
     <p>Total Student Here</p>    
    </div>  
    </div>
</div></body>
</html>