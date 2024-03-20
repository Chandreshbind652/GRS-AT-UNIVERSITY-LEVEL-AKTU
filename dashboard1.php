<?php
session_start();
//echo $_SESSION['user'];
if($_SESSION['user']=="")
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
<body>
    <!----------main start---------->
        <div class="sidebar" style="background-image:linear-gradient(#8fd3f4,indianred,#8fd3f4);">
        <h3 align="center" style="margin-top:10px;"><img src="images/s1.jpg" style="width:100px; height:100px;" /></h3>
        <h4 align="center" style="margin-top:-25px;">User</h4>
        <hr/>
        <div class="logo" style="height:10px;">
        <ul class="main" style="padding:20px; height:10px;">
            <li style="padding:7px;">
                <a href="dashboard1.php">
                <i class="bi bi-house-door"></i>
                 <span>Dashboard</span>
                </a>
            </li>
            <li style="padding:7px;">
                <a href="update.php">
                <i class="bi bi-calendar-plus-fill"></i>
                 <span>Update Profile</span>
                </a>
            </li>
            <li style="padding:7px;">
                <a href="profile.php">
                <i class="bi bi-calendar-plus-fill"></i>
                 <span>Update Profilepic</span>
                </a>
            </li>

            <li style="padding:7px;">
                <a href="form.php">
                <i class="bi bi-building"></i>
                 <span>Add Complain</span>
                </a>
            </li>
            <li style="padding:7px;">
                <a href="mycomplain.php">
                <i class="bi bi-person-video2"></i>
                 <span >My Complains</span>
                </a>
            </li>
            <li style="padding:7px;">
                <a href="closecomplain.php">
                <i class="bi bi-currency-exchange"></i>
                 <span>Close Complains</span>
                </a>
            </li>
            <li style="padding:7px;">
                <a href="discuss.php">
                <i class="bi bi-calendar-plus-fill"></i>
                 <span>Discussion Forum</span>
                </a>
            </li>
            <li style="padding:7px;">
                <a href="change.php">
                <i class="bi bi-currency-exchange"></i>
                 <span>Change Password</span>
                </a>
            </li>
            <li class="logout" style="padding:15px;">
                <a href="../admin/logout.php">
                <i class="bi bi-archive-fill"></i>
                 <span>Logout</span>
                </a>
            </li>
        </ul>
</div>
</div>
<div class="main--content">
    <div class="header-wrapper" style="background-color:#8fd3f4;">
        <div class="header-title">
            <span>user<span>
            <h4>Dashboard</h4>    
        </div>
        <div class="user--info">
            <!-- <div class="search--box"> -->
            <h5 style="color:black;">
              <?php
               echo date("d/m/y");?>&nbsp; <?php
               echo $_SESSION['user'];
              ?>
            </h5>&nbsp;
            <!-- </div> -->
            <img src="images/s1.jpg" alt="">
</div>
</div>
</body>
</html>