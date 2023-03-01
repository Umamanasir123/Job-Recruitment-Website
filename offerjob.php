<?php
$rid=$_REQUEST['rid'];
echo $rid;
?>
<html>
    <head>
        <style>
#im1{
    float: left;
}
.desc{
    float: left;
    margin-left: 10px;

}
#web1{display: none;}
#taby1{
    display:none;
    background-color:lightblue;
    width:500px;
}
button{
    border-radius:20px;
    background-color:aqua;
}
#hey1{
    text-align:center;
    background-color:lightblue;
}
        </style>
    </head>
  
    <body>
     <
    <button onclick="showy()" name="offer">POST A JOB</button>
    </form>
    <table border=5 cellpadding=10px cellspacing=10px id="taby1">
    <form action="#" method="post">
        <tr>
            <td colspan=2>JOB OFFERING FORM</td>
        </tr>
        <tr>
       <td> Job ID: </td>
       <td><input type="number" name="idj"></td>
        </tr>
        <tr>
       <td> Job Title: </td>
       <td><input type="text" name="tit"></td>
        </tr>
        <tr>
       <td> salary: </td>
       <td><input type="number" name="salj"></td>
        </tr>
        <tr>
       <td> designation: </td>
       <td><input type="text" name="desj"></td>
        </tr>
        <tr>
       <td> timing: </td>
       <td><input type="text" name="timj"></td>
        </tr>
        <tr>
       <td> location: </td>
       <td><input type="text" name="locj"></td>
        </tr>
        <tr>
       <td> Recruiter Id: </td>
       <td><input type="number" name="recj"></td>
        </tr>
        <tr>
       <td> category: </td>
       <td><select name="cat">
        <option value="2">Web developer</option>
        <option value="1">Database developer</option>
       </select></td>
        </tr>
<tr>
    <td>
        <button name="submit">Send Data</button>
    </td>
</tr>
    
    </table>
    <h1 id="hey1">JOB POSTS</h1>
    <?php 
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"jobrecruitment");
    $result=mysqli_query($conn,"select * from jobposts where recruiterId=$rid");
    while($rows=mysqli_fetch_assoc($result))
    {
    $jid=$rows['jobId'];
    $title=$rows['jobTitle'];
    $category=$rows['category'];
    $sal=$rows['salary'];
    $des=$rows['designation'];
    $tim=$rows['timings'];
    $loc=$rows['location'];
    $recid=$rows['recruiterId'];
    ?>

        <table border="5" cellpadding="10px" cellspacing="10px">
            <tr>
                <td>
                    <div id="im1">
                    <img src="image/hire.jpg" alt="" width="100px" height="100px">
                </div>
                <div class="desc">

                    <h2><?php echo "$title" ?></h2>
                     
                     <h3>Expenditure: <?php echo "$sal K" ?></h3>
                     <h4>9am-5pm</h4>
                     <p> <?php echo "$loc" ?> </p>
                     <p>FULL TIME </p>
                    </div>
                </td>
            </tr>
        </table>
        <?php
    }
    ?>
            
    <?php
    if(isset($_POST['submit']))
    {
        $idj=$_POST['idj'];
        $tit=$_POST['tit'];
        $salj=$_POST['salj'];
        $desj=$_POST['desj'];
        $timj=$_POST['timj'];
        $locj=$_POST['locj'];
        $recj=$_POST['recj'];
        $catj=$_POST['cat'];
        $query1=mysqli_query($conn,"insert into jobposts(jobId,jobTitle,category,salary,designation,timings,location,recruiterId) values('$idj','$tit','$catj','$salj','$desj','$timj','$locj','$recj')");
    }
    ?>
       <script>
        let count1=0;
        function showy()
        {
                let fora=document.getElementById("taby1");
                if(count1==0)
                {
                fora.style.display="block";
                count1++;
                }
                else{
                    fora.style.display="none";
                    count1=0;
                }
        }
       </script>
    </body>
   
</html>