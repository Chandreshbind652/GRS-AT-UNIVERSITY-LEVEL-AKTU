<?php
session_start();
if($_SESSION['admin']=="")
{
   session_destroy();
   header("location:../index.php");
}
include("../connection.php");
$query="select * from tbl_user";
$res=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    
</head>
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
                <i class="bi bi-person-video2"></i>
                 <span >Complain Type</span>
                </a>
            </li><!------
            <li style="padding:2px;">
                <a href="#">
                <i class="bi bi-building"></i>
                <div class="btn-group dropend">
                <span><div class="dropdown">
  <button class="btn btn- dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:rosybrown; color:black;">
    Complain manage
  </button>
  <ul class="dropdown-menu" style="background-color:khaki;">
  <li><a class="dropdown-item" href="npc.php">Not Process Yet</a></li>
    <li><a class="dropdown-item" href="pc.php">Pending Complaint</a></li>
    <li><a class="dropdown-item" href="cc.php">Closed Complaint</a></li>
    <li><a class="dropdown-item" href="#">Download Report</a></li>
  </ul>
</div></span>
                </a>
            </li>----->
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
            <!-- <div class="search--box">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Search"/>
            </div> -->
            <h5 style="color:black;">
              <?php
               echo date("d/m/y");?>&nbsp; <?php
               echo $_SESSION['admin'];
              ?>
            </h5>&nbsp;
            <img src="images/p1.jpg" alt=""/>
        </div>
    </div>
    <!-------header coplete----->
  
   <!-- <div class="admin-view py-4 m-4 text-center" style="width:720px; font-size:12px;">  -->
    <table class="table-bordered p-1 m-1 table table-danger table-striped" style="font-size:9px;">
        <tr>
            <th>S.No</th>
            <th>NAME</th>
            <th>F'NAME</th>
            <th>GENDER</th>
            <th>EMAIL</th>
            <!-- <th>PASSWORD</th> -->
             <th>MOBILE</th>
            <th>D.O.B</th>
            <th>ADDRESS</th>
            <th>CITY</th>
            <th>PINCODE</th>
            <th>COURSE</th>
            <th>SESSION</th>
            <th>COLLEGE</th>
            <th>STATUS</th>
            <th>DATE OF REGISTRATION</th>
            <th>DELETE</th>
        </tr>
        <?php
        $a=1;
        while($row=mysqli_fetch_array($res))
        {
         ?>
          <tr>
          <td><?php echo $a;?></td>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['fname'];?></td>
          <td><?php echo $row['gender'];?></td>
          <td><?php echo $row['email'];?></td>
          <!-- <td><?php echo $row['password'];?></td> -->
          <td><?php echo $row['mobile'];?></td>
          <td><?php echo $row['dob'];?></td>
          <td><?php echo $row['address'];?></td>
          <td><?php echo $row['city'];?></td>
          <td><?php echo $row['pincode'];?></td>
          <td><?php echo $row['course'];?></td>
          <?php $com=$row['sid'];
          $query1="select * from tbl_session where sid='$com'";
          $res1=mysqli_query($con,$query1);
          if($row1=mysqli_fetch_array($res1))
          {
             $session=$row1['session'];
          }
          ?>
          <td><?php echo $session;?></td>
          <?php  $cid=$row['cid'];
          $query2="select * from tbl_college where cid='$cid'";
          $res2=mysqli_query($con,$query2);
          if($row2=mysqli_fetch_array($res2))
          {
            $college=$row2['college'];
          }
          ?>
          <td><?php echo $college;?></td>
          <td><?php echo $row['status'];?></td>
          <td><?php echo $row['dor'];?></td>
          <td><a href="delete.php?uid=<?php echo $row['uid'];?>">delete</a></td>
          </tr>
        <?php
        $a++;
        }
        ?>
    </table>
<!-- </div> -->
</body>
</html>