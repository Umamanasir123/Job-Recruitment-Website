<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        define('db_server', 'localhost');
        define('db_username', 'root');
        define('db_password', '');
        define('db_name', 'jobrecruitment');
        $conn = mysqli_connect(db_server, db_username, db_password, db_name);
        if($conn==false)
        {
            dir('error');
        }
        else{
           
        }
        $db=mysqli_select_db($conn,db_name);
        if($db==false)
        {
            dir('error');
        }

        else{
            
        }
    
    ?>
    <br>
  
    <?php
    include("loginpg.php");
   
    if(isset($_POST['sub']))
    {
       $username=$_POST['au'];
       $password=$_POST['ap'];
       $res=mysqli_query($conn,"select * from applicant");
       while($row=mysqli_fetch_assoc($res)){
           if($username==$row['username'] & $password==$row['password']){
            $id=$row['applicantId'];
            header("Location:customerPage.php?id=$id");
            
   }
}

 ?>
<table>
    <tr>
        <td><?php echo "INVALID ACCOUNT"?></td>
    </tr>
</table> 
<?php
   }
   ?>
   <?php

 if(isset($_POST['sub2']))
    {
       $rusername=$_POST['au'];
       $rpassword=$_POST['ap'];
       
       $res=mysqli_query($conn,"select * from recruiter");
       while($row=mysqli_fetch_assoc($res)){
           if($rusername==$row['username'] & $rpassword==$row['password']){
            $rid=$row['recruiterId'];
            header("Location:personal1.php?rid=$rid");
   }
}

 ?>
<table>
    <tr>
        <td><?php echo "INVALID ACCOUNT"?></td>
    </tr>
</table> 
<?php
   }
   ?>
 <?php

 if(isset($_POST['sub3']))
    {
       $ausername=$_POST['au'];
       $apassword=$_POST['ap'];
       
       $res=mysqli_query($conn,"SELECT * from webadmin");
       while($row=mysqli_fetch_assoc($res)){
           if($ausername==$row['username'] & $apassword==$row['password']){
            $wid=$row['adminId'];
            header("Location:webadmin.php?wid=$wid");
           
   }
}
 ?>
<table>
    <tr>
        <td><?php echo "INVALID ACCOUNT"?></td>
    </tr>
</table> 
<?php
   }
   ?>
</body>
</html>
