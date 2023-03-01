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
          $conn = mysqli_connect('localhost','root',"",'jobrecruitmentsystem');
          if($conn==false)
          {
              dir('error');
          }
          else{
              echo "Connected web server<br>";
          }
          $db=mysqli_select_db($conn,'jobrecruitmentsystem');
          if($db==false)
          {
              dir('error');
          }
  
          else{
              echo "Connected Database";
          }
      
       if (isset($_POST['submit']))
       {
           $name=$_POST['fname'];
           $unam=$_POST['uname'];
           $pass=$_POST['psw'];
           $cont=$_POST['con'];
           $email=$_POST['eml'];
           $comp=$_POST['comreg'];

           $rest=mysqli_query($conn,"SELECT * from company");
           $compid=mysqli_fetch_assoc($rest)['companyId'];

           $quer=mysqli_query($conn,"INSERT INTO recruiter(recruiterName,username,password,companyRegistrationId,email)
           values('$name','$unam','$pass','$comp','$email')");
           
           if($quer)
           {
               echo "<script> window.open('loginpg.php','_self')</script>";
            }
                  else{
                    echo "Something went wrong";
                  }
       }
    
    ?>
           
          
</body>
</html>