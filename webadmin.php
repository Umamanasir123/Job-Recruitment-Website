
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
        }
        body{
            background-color: rgb(238, 238, 238);
        }

        #leftpane {
            margin-top:-20px;
            width: 100px;
            height: 163vh;
            float: left;
            background-color:slateblue;
        }

        #toppane {
            width: 93%;
            float: left;
            background-color:		#DCDCDC;
            margin-top:-20px;
            color:black;
            font-weight:bold;
            font-size:20px;

        }

        #midpane {
            float: left;
            border: 1px solid salmon;
            width: 86%;
            margin-left: 120px;
            margin-top: 25px;
            border-radius: 8px;
            height: 670px;

        }

        #logo-img {
            width: 60px;
            height: 57px;
            border-radius:30%;

        }

        #logo {
            text-align: center;
            margin-top: 10px;
            border-radius:30%;
           

        }

        #optionsContainer {
            text-align: center;
            margin-top: 30px;

        }

        #optionsContainer div {
            display: flex;
            flex-direction: column;
            margin-top: 30px;
            justify-content: center;
            align-items: center;

        }

        a {
            text-decoration: none;
            color: black;
            font-weight:bold;

        }

        .allimg {
            width: 76px;
            height: 64px;
            border-radius:34%;
       
            padding:30px;
        }

       

        #toppane input {
            border: none;
            background-color: rgb(214, 198, 198);
            width:400px;
     
            
        }

        #toppane img {
            height: 20px;
            width: 20px;
            margin-left: 9px;

        }

        
        input:focus{
            outline: none;
        }
        #topleft{
            margin-left: 30px;
            margin-top: 10px;
            margin-bottom: 10px;
            width:400px;
            float:left;
            background-color: rgb(214, 198, 198);
            height: 33px;
            border-radius: 5px ;
        }
        #topright{
            float:right;
            margin-right: 30px;
        }
        #topright img{
            border-radius: 50% ;
            height:40px;
            width:40px;
            box-shadow: 0px 6px 5px grey;
        }
        .class1{
            display:flex;
            align-items: center;
        }
        button {
            background-color: slateblue;
            border: none;
            border-radius:20%;
            width:90px;
            height:40px;
            color:white;
        }
    </style>
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
   
      </div>

      <div id="leftpane">
        <div id="logo">
            <img id="logo-img" src="image/quer.png" alt="error">
        </div>
        <div id="optionsContainer">
            <div id="total">
                <img class="allimg" src="image/sub.png" width="40px">
                <a href="submitted.php" target="_self">Submitted Queries</a>
            </div>
            <div id="answered">
                <img class="allimg" src="image/ans.png" width="40px">
                <a href="answered.php">Answered Queries</a>
            </div>
            <div id="unanswered">
                <img class="allimg" src="image/unans.png" width="40px">
                <a href="unanswered.php">Unanswered Queries</a>
            </div>
            <br>
            <button name="goback" style="border:2px solid black;font-weight:bold;background:transparent;color:black;">LOG OUT</button>
        </div>
    </div>

    <div id="toppane">
        <div class="class1">

        </div>
  
        <div id="topright" class="class1">
            
            <p>Welcome <?php 
                $result=mysqli_query($conn,"select * from webadmin");
                {
                        while($rows=mysqli_fetch_assoc($result))
                        {    
                            echo "
                            <tr> 
                            <td>". $rows['adminName'] ."</td></tr>
                            ";
                        }
                    }
            
            ?></p>
            <img src="image/serch.png" alt="#" width="30px">
        </div>
    </div>
    <br><br>
    <?php
if(isset($_POST['goback'])){
    header("Location:loginpg.php");
    exit();
}

?>
   

    

</body>

</html>