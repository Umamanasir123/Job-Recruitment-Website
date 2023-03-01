<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  
</style>
<body>
<br>
<h2 style="color:black; font-size:24px; text-align:center">ANSWERED QUERIES:</h2>
<br>
    <?php
       include("webadmin.php");

    $result=mysqli_query($conn,"select * from queries");
    while($rows=mysqli_fetch_assoc($result))
    {
     ?>
    


   
      <?php
        if(($rows['response'])=="" ) 
        {
        
      }
       else{
          echo '<div style="color:black; background-color:rgb(240, 255, 255); font-size:19px; margin-Left:120px; margin-top:20px; font-weight:bold;">'.'<details>'.'<summary>'.'Query:  &nbsp;&nbsp;'.$rows['postDescription'].'</summary>'.'<p>'.'Response: &nbsp;&nbsp;'.$rows['response'].'</p>'.'</details>'.'</div>';
                
       }
       ?>

       <?php
}

?>



</body>
</html>