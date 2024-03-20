<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>website2</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.bundle.js">
        
    </script>
    <style>
      #outer
      {
        
        background-image: url('images/s8.jpg');
        background-repeat:no-repeat;
        background-position: center; 
         background-size: cover;
        background-attachment: fixed;
        height:590px;
    
      }
      table
      {
        width:100%;
      }
      td
      {
        width:50%;
      }
      input[type="email"]
      {
        width:500px;
        text-align: center;
        font-size: 20px;
        border-radius: 10px;
        box-shadow:0px 0px 10px red;
      }
      input[type="email"]:hover
      {
        background-color:khaki;
        color:black;
      }
      input[type="password"]
      {
        width:500px;
        text-align: center;
        font-size: 20px;
        border-radius: 10px;
        box-shadow:0px 0px 10px red;
      }
      input[type="password"]:hover
      {
        background-color:khaki;
        color:black;
      }
    </style>
    </head>
    <body>
        <div id="outer" class="container-fluid">
           <div class="row text-center">
                <div class="col-sm-12 bg-transparent" style="margin-top:100px; margin-bottom:50px; border-radius:30px;">
                    <fieldset style="border-radius:30px; border-color:1px solid black;">
                        <legend  style="color:black;"><h1>Admin Login</h1></legend>
                        <form action="" method="post">
                           <table cellpadding="20px">
                            
                            <tr>
                                <td colspan="2"><input type="email" name="email" placeholder="Enter your email"/></td>
                            </tr>
                            <tr>
                                <td><input type="password" name="pass" placeholder="Enter your password"/></td>
                            </tr>
                            <tr>
                                <td><input type="submit"  value="login" style="background-color:lightgreen; color:white; border-radius:5px; width:250px;"/></td>
                            </tr>
                            <tr>
                            <td><a href="index.php"><button type="button" class="btn btn-danger p-0" style="width:150px; height:37px;">Back</button></a></td>
                            </tr>
                          </table>  
                        </form> 
                    </fieldset>
                </div>
           </div>
        </div>        
    </body>
    </html>
