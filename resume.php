<?php 
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"jobrecruitment");
    $rid=$_GET['rid'];
    echo $rid;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <style>
        #desc img {
            width: 30px;
            height: 30px;
        }
      
        .imag1 {

            width: 130px;
            height: 130px;
            border-radius: 100px;
            
        }
        #container{
            width:681px;
            height:500px;
            border:2px solid red;
            padding:50px;   
        }
        #desc{
            width:300px;
            text-align:center;
        }
        h1{
            text-align:center;
            background-color:lightblue;
        }
       
    </style>
</head>
<body>
    <h1>Fill form to send job request</h1>
    <form action="#" method="POST">

    JobId:<input type="number" name="jo1" id="">
    <br>
    RecruiterId:<input type="number" name="rec1" id="">
    <br>
    CandidateId:<input type="number" name="can1" id="">
    <br>
    <button name="submiss">send</button>
</form>
<h1>JOB REQUESTS SEND</h1>


<table border=5 cellpadding="10px" cellspacing="10px">
    
<tr>
        <th>CandidateId</th>
        <th>JobId</th>
        <th>Status</th>
<?php

$myquery1=mysqli_query($conn,"SELECT * FROM applicantoffered where recruiterId=$rid;");

while($rows2=mysqli_fetch_assoc($myquery1))
{
    
?>
    </tr>


    <tr>
        <td><?php echo $rows2['applicantId'] ?></td>
        <td><?php echo $rows2['jobId']?></td>
        <td><?php echo $rows2['statuss']?></td>
    </tr>
    <?php } ?>
</table>


<script>
 
   </script>
</body>
</html>
<?php
if(isset($_POST['submiss']))
{
    $jo1=$_POST['jo1'];
    $rec1=$_POST['rec1'];
    $can1=$_POST['can1'];
    $myquery=mysqli_query($conn,"insert into applicantoffered(recruiterId,applicantId,jobId,statuss) values('$rec1','$can1','$jo1','no-response')");
    if($myquery)
    {
        echo "success";
    }
    else
    {
        echo "error";
    }
}
?>