<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2 style="color:black; font-size:24px; text-align:center">UNANSWERED QUERIES</h2>
<br>

<?php
       include("webadmin.php");
 
    $result=mysqli_query($conn,"select * from queries");
    while($rows=mysqli_fetch_assoc($result))
    {
     ?>
    
      <?php
        if($rows['response']=="") 
        {
            echo '<div style="color:black; background-color:#F0F8FF; font-size:19px; margin-Left:120px; margin-top:20px; font-weight:bold;">'.'<details>'.'<summary>'.'Query:  &nbsp;&nbsp;'.$rows['postDescription'].'</summary>'.'<p>'.'Response: &nbsp;&nbsp Sorry your query still under process.Please wait and Check after some time! ;'.'</p>'.'</details>'.'</div>';
      
    }
       else{
      
             
       }
       ?>

       <?php
}

?>
      
</body>
</html>