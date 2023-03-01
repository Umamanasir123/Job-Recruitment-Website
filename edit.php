<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      form{
          margin-left:500px;
          margin-top:-40px;

      }

    </style>
</head>
<body>
    <?php
    error_reporting("0");
         include("submitted.php"); 
         $qr=$_GET['qr'] ;
         $rp=$_GET['rp']; 
         $rt=$_GET['rt']; 
         ?>
         <form action="" method='GET'>
              <table style="margin-left:240px; width:280px; height:130px; border:4px solid black; margin-top:-290px;">
              <tr>
              <th colspan=2 style="font-size:20px;"><h3>Update Query Response</h3></th></tr><br>
              <tr>
              <th style="font-size:20px;">Query Id</th>
              <td><input type="text" style="width:300px; margin-top:20px; margin-left:-50px; " name="qid" value="<?php echo "$qr" ?>"
               required></td> </tr>
               <tr>
               <th style="font-size:18px;">Response</th>
               <td><input type="text" style="width:300px; margin-top:20px; margin-left:-50px; " name="resp" value="<?php echo "$rp" ?>" ></td></tr>
               <tr>
               <th style="font-size:18px;">Response Time</th>
                <td><input type="time" style="width:300px; margin-top:20px; margin-left:-50px; " name="resptm" value="<?php echo "$rt" ?>" ></td></tr>   <tr>
            
                <tr>
                   
                    <td ><input type="submit" name="update" value="Update Response" style="margin-left:274px; margin-top:40px; border-radius:15px; font-style:italic; background:transaparent; width:140px; height:60px; "></td> </tr>
                
                <?php
                        if(($_GET['update'])) 
                        { 
                          $qid=$_GET['qid'] ; 
                          $resp=$_GET['resp'] ; 
                          $resptm=$_GET['resptm'] ; 
                          $queryy="update queries set response=' $resp', responseTime='$resptm' WHERE queryId='$qid'; "; 
                          $result=mysqli_query($conn,$queryy); 
                          if($result) 
                          { 
                            "<script>alert('query is updated')</script>";
                             
                          } 
                          else{ 
                            "<script>alert('Failed to update query')</script>";
                             
                          } 
                        }
                ?>
                <!--<div>
                    <img src="imag/resp2.jpg" width="300px" height="300px" style="margin-left:1110px; border-radius:30px; margin-top: -600px; box-shadow:12px 10px 9px grey; ">
                    </div>-->

</body>
</html>