<?php

$qid=$_REQUEST['qid'];
//echo $qid;
?>
<!doctype html>
<html lang="en">
  <head>
</head>     
    </script>
    <style>
        *
        {
            background-color:honeydew;
        }
       textarea
       {
        
        background-color:skyblue;    
        }
        
    </style>
    <body>
<div id="outer">
<form action="answer.php" method="post" align="center">
    <input type="hidden" name="qid" value="<?php echo $qid;?>">
    <h1>Post Answer</h1><br/>
<textarea cols="100" rows="10" name="ans" style="margin-top:50px;"></textarea><br/>
<input type="submit" value="POST ANSWER" style="margin-top:20px; width:130px; height:40px; background:green;"/>
<br/>
<a href="dashboard1.php"><button type="button" class="btn btn-danger p-0" style="width:130px; height:40px; background-color:red; margin-top:15px;">BACK</button></a>
</form>