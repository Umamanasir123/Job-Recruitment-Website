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
            echo "Connected web server<br>";
        }
        $db=mysqli_select_db($conn,db_name);
        if($db==false)
        {
            dir('error');
        }

        else{
            echo "Connected Database";
        }
    
    ?>
    <?php
       if (isset($_POST['submit']))
       {
          
          $aplname=$_POST['lname'];
          $apgen=$_POST['gen'];
          $apdob=$_POST['dob'];
          $approv=$_POST['prov'];
          $apcity=$_POST['cit'];
          $apnic=$_POST['nic'];
          $apemail=$_POST['eml'];
          $apcont=$_POST['con'];
          $apuname=$_POST['uname'];
          $appass=$_POST['psw'];

          $edu=$_POST['edu'];
          $degree=$_POST['deg'];
          $resume=$_POST['res'];
          $pwe=$_POST['working'];
          $skill=$_POST['skl'];
          $position=$_POST['post'];
          $payrang=$_POST['proj'];
        
          $er=mysqli_query($conn,"select detailsId from appdetails");
          while($t=mysqli_fetch_assoc($er)){
            $did=$t['detailsId'];
          }
          $did+=1;
          $query1=mysqli_query($conn,"INSERT INTO appdetails (detailsId,education,experience,skills) VALUES ('$did','$edu','$pwe','$skill')"); 

         $query=mysqli_query($conn,"INSERT INTO applicant(applicantId,applicantName,email,contact,username,password,detailsId) VALUES($did,'$aplname','$apemail','$apcont','$apuname','$appass','$did');");
        
                  if($query1 && $query)
                  {
                          header("Location:loginpg.php");
                  }
                  else{
                    echo "Something went wrong";
                  }
       }
       ?>
</body>
</html>