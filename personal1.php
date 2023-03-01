<html>

<?php
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"jobrecruitment");
$rid=$_REQUEST['rid'];
$result=mysqli_query($conn,"select * from recruiter where recruiterId=$rid");
//echo $rid;
?>

<head>
    <style>
        body {
            background-color: rgb(238, 238, 238);
        }

        * {
            margin: 0px;
        }

        #leftpane {
            border: 2px solid salmon;
            width: 200px;
            height: 120vh;
            float: left;
            border-radius: 10px;
            background-color: rgb(121, 121, 212);

        }

        #toppane {

            width: 84%;
            float: left;
            background-color: white;

        }

        #midpane {
            border: 2px solid grey;
            width: 1100px;
            height: 500px;
            float: left;
            margin-left: 20px;
            margin-top: 25px;
            border-radius: 8px;
            background-color: white;
            overflow-y: scroll;

        }

        #logo {
            text-align: center;

            margin-top: 10px;
        }

        #logo img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        a {
            text-decoration: none;
            color: black;
        }

        #options {

            margin-top: 50px;
            text-align: center;

        }

        #options div {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        #options img {

            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .class1 {
            display: flex;
            align-items: center;
        }

        #toppane img {
            height: 20px;
            width: 20px;
            margin-left: 5px;
        }

        #toppane input {
            border: none;
            background-color: rgb(250, 242, 242);
            width: 400px;
            margin-left: 5px;
            border-radius: 10px;
        }

        #topleft {
            float: left;
            margin-left: 30px;
            margin-top: 10px;
            margin-bottom: 30px;
            background-color: rgb(250, 242, 242);
            width: 400px;
            height: 30px;
            border-radius: 10px;
        }

        input:enabled {
            outline: none;
        }

        #topright {
            margin-right: 30px;
            margin-top: 10px;
            float: right;
        }

        #topright img {
            border-radius: 100px;
            height: 60px;
            width: 60px;
            border-radius: 50%;
            box-shadow: 3px 3px 2px gray;

        }

        #midheader {
            font-size: 20px;
            height: 40px;
            margin-top: 9px;
            border-bottom: 2px solid gray;
            display: none;

        }

        #midheader a {
            padding-left: 50px;
            color: gray;
        }

        .Opty {
            border: 2px solid rgb(212, 210, 223);
            height: 90px;
            width: 183px;
            margin-left: 42px;
            text-align: center;
            font-size: 20px;
            padding-top: 10px;
            display: inline-block;
            display: none;
            box-shadow: 3px 3px 2px slateblue;

        }

        #softoptions {
            width: 183px;

        }

        #mechoptions {
            width: 183px;
            position: sticky;
            left: 300px;


        }

        #Chemoptions {
            width: 220px;
            position: sticky;
            left: 700px;

        }

        #Eleoptions {
            width: 183px;
            position: sticky;
            left: 500px;

        }



        #desc img {
            width: 30px;
            height: 30px;
        }

        .imag1 {

            width: 130px;
            height: 130px;
            border-radius: 100px;

        }

        #container {
            width: 681px;
            height: 500px;
            border: 2px solid red;
            padding: 50px;
        }

        #desc {
            width: 300px;
            text-align: center;
        }

        #im1 {
            float: right;
            border-radius: 50%;
        }

        input {
            display: block;
        }

        input:enabled {

            outline: none;
        }

        #a1 {
            float: right;
        }

        #but1 {
            margin-left: 300px;
            border-radius: 20px;
            color: lightcoral;
            width: 100px;
            height: 20px;
        }

        #div1 {
            display: inline-block;
            width: 30%;

        }

        #div2 {
            display: inline-block;
            width: 70%;

        }

        h1 {
            text-align: center;
        }

        #formdiv {

            padding-left: 100px;
            display: none;


        }
    </style>
</head>
<?php 

    while($rows=mysqli_fetch_assoc($result))
    {
    $id=$rows['recruiterId'];
    $name=$rows['recruiterName'];
    $username=$rows['username'];
    $password=$rows['password'];
    $email=$rows['email'];
    $registerid=$rows['companyRegistrationId'];
    }
  
    ?>

<body>
    <div id="leftpane">
        <div id="logo">
            <img src="image/zariyalogo.jpg" alt="">
        </div>
        <!--recruiter(personal info(open implementation),sent job req,received job req(accept/decline),check resumes(offer job))-->
        <div id="options">
            <div id="opt1">
                <img src="image/pinfo.jpg" alt="">
                <form action="#" method="get">
                    <a href="#" onclick="show1()">personal Information</a>
                </form>
            </div>
            <div id="opt2">
                <img src="image/sent.jpg" alt="">
                <a href="#" onclick="show()">Browse candidates</a>
            </div>
            <div id="opt3">
                <img src="image/rece.png" alt="">
                <a href="receivedagain.php?rid=<?php echo $rid ?>">Received Job Requests</a>
            </div>
            <div id="opt4">
                <img src="image/apimg.png" alt="">
                <a href="resume.php?rid=<?php echo $rid ?>">sent job request</a>
            </div>
            <div id="opt5">
                <img src="image/offer.png" alt="">
                <a href="offerjob.php?rid=<?php echo $rid ?>">Offer Jobs</a>
            </div>
            <div id="opt7">
                <a href="checklogin.php">Logout</a>
            </div>
        </div>
    </div>
    <div id="toppane">
    <div id="topLeft" class="class1">
                <h3 style="margin-left:100px">Zariya for your Rozgar</h3>
            </div>
        <div id="topright" class="class1">
            <p>Hi,
                <?php echo "$name" ?>
            </p>
            <img src="image/namelogo.jpg" alt="" width="60px">

        </div>

    </div>
    <div id="midpane">
        <form action="" method="post">
            <div id="midheader">
                <a href="#" onclick="showsoft()">Software Engineering</a>
                <a href="#" onclick="showmech()">Mechanical Engineering</a>
                <a href="#" onclick="showelec()">Electrical Engineering</a>
                <a href="#" onclick="showchem()">Chemical Engineering</a>

            </div>
            <div id="everyopt">
                <div class="Opty" id="softoptions">
                    <button name="submit1">Database Manager</button>
                    <br>
                    <button name="submit2">Web developer</button>
                </div>
                <div class="Opty" id="mechoptions">
                    <button name="submit3">Machine Engineer</button>
                    <br>
                    <button name="submit4">Parts Engineer</button>
                </div>
                <div class="Opty" id="Eleoptions">
                    <button name="submit5">Circuit Engineer</button>
                    <br>
                    <button name="submit6">Power Engineer</button>
                </div>
                <div class="Opty" id="Chemoptions">
                    <button name="submit7">Chemist</button>
                    <br>
                    <button name="submit8">Assistant</button>
                </div>
            </div>

            <div id="formdiv">

                <h1>PERSONAL INFORMATION</h1>
                <br>
                <img src="image/rec.png" alt="" width="150px" height="150px" id="im1">
                <b>RecruiterId:</b> <input type="number" value="<?php echo  "$id" ?>" name="recid">
                Name<input type="text" value="<?php echo  " $name" ?>" name="recn">
                username: <input type="text" value="<?php echo  " $username" ?>" name="recus">
                password: <input type="text" value="<?php echo  " $password" ?>" name="recp">
                email: <input type="text" value="<?php echo  " $email" ?>" name="rece">
                companyRegistrationId: <input type="text" value="<?php echo  " $registerid" ?>" name="reccri">
                <button id="but1" name="submi">Save</button>

        </form>
    </div>

    <?php 
        if(isset($_POST['submi']))
        {
            $recid=$_POST['recid'];
            $recn=$_POST['recn'];
            $recus=$_POST['recus'];
            $recp=$_POST['recp'];
            $rece=$_POST['rece'];
            $reccri=$_POST['reccri'];
            $query2=mysqli_query($conn,"update recruiter set recruiterName='$recn',username='$recus',password='$recp',email='$rece' where recruiterId=$recid");
        }
        ?>
    <?php

       if(isset($_POST['submit2'])){
    $result2=mysqli_query($conn,"select a.applicantId,a.applicantName,a.email,a.contact,a.detailsId,d.skills,d.experience,d.education  from applicant a,appdetails d where a.detailsId=d.detailsId and d.skills='WEB DEVELOPER'");
    while($rows1=mysqli_fetch_assoc($result2))
    {
        $idc=$rows1['applicantId'];
    $namec=$rows1['applicantName'];
    $mail=$rows1['email'];
    $phone=$rows1['contact'];
    $detail=$rows1['detailsId'];
        $educa=$rows1['education'];
        $expa=$rows1['experience'];
        $skil=$rows1['skills'];
    ?>

    <table border="5">
        <tr>
            <td>
                <div id="desc">
                    <h2>
                        <?php echo "ID:$idc" ?>
                    </h2>
                    <h2>
                        <?php echo "NAME:$namec" ?>
                    </h2><br>
                    <img src="image/phone.jpg" alt=""><br>
                    <a href="">
                        <?php echo " 0$phone" ?>
                    </a> <br>
                    <img src="image/email.jpg" alt=""><br>
                    <a href="">
                        <?php echo  "$mail" ?>
                    </a><br>
                </div>
            </td>
        </tr>
    </table>
    <div id="container">
        <div class="">
            <img src="image/candidate.png" alt="" class="imag1">
        </div>

        <h2>EDUCATION</h2>
        <p>
            <?php echo "$educa" ?>
        </p>

        <h2>TECHNICAL SKILLS AND SOFT SKILLS</h2>
        <p>
            <?php echo "$skil" ?>
        </p>

        <h2>EXPERIENCE</h2>
        <p>
            <?php echo "$expa" ?>
        </p>
    </div>
    <?php
    }
}

?>
    <?php
if(isset($_POST['submit1'])){
    $result2=mysqli_query($conn,"select a.applicantId,a.applicantName,a.email,a.contact,a.detailsId,d.skills,d.experience,d.education  from applicant a,appdetails d where a.detailsId=d.detailsId and d.skills='DATABASE MANAGER'");
    while($rows1=mysqli_fetch_assoc($result2))
    {
        $idc=$rows1['applicantId'];
    $namec=$rows1['applicantName'];
    $mail=$rows1['email'];
    $phone=$rows1['contact'];
    $detail=$rows1['detailsId'];
        $educa=$rows1['education'];
        $expa=$rows1['experience'];
        $skil=$rows1['skills'];
    ?>

    <table border="5">
        <tr>
            <td>
                <div id="desc">
                    <h2>
                        <?php echo "ID:$idc" ?>
                    </h2>
                    <h2>
                        <?php echo "NAME:$namec" ?>
                    </h2><br>
                    <img src="image/phone.jpg" alt=""><br>
                    <a href="">
                        <?php echo " 0$phone" ?>
                    </a> <br>
                    <img src="image/email.jpg" alt=""><br>
                    <a href="">
                        <?php echo  "$mail" ?>
                    </a><br>
                </div>
            </td>
        </tr>
    </table>
    <div id="container">
        <div class="">
            <img src="image/candidate.png" alt="" class="imag1">
        </div>

        <h2>EDUCATION</h2>
        <p>
            <?php echo "$educa" ?>
        </p>

        <h2>TECHNICAL SKILLS AND SOFT SKILLS</h2>
        <p>
            <?php echo "$skil" ?>
        </p>

        <h2>EXPERIENCE</h2>
        <p>
            <?php echo "$expa" ?>
        </p>
    </div>
    <?php
    }
}


?>
    <?php
if(isset($_POST['submit3'])){
   
    $result2=mysqli_query($conn,"select a.applicantId,a.applicantName,a.email,a.contact,a.detailsId,d.skills,d.experience,d.education  from applicant a,appdetails d where a.detailsId=d.detailsId and d.skills='MACHINE ENGINEER'");
    while($rows1=mysqli_fetch_assoc($result2))
    {
    $idc=$rows1['applicantId'];
    $namec=$rows1['applicantName'];
    $mail=$rows1['email'];
    $phone=$rows1['contact'];
    $detail=$rows1['detailsId'];
        $educa=$rows1['education'];
        $expa=$rows1['experience'];
        $skil=$rows1['skills'];
    ?>

    <table border="5">

        <tr>
            <td>
                <div id="desc">
                    <h2>
                        <?php echo  "ID:$idc" ?>
                    </h2>
                    <h2>
                        <?php echo "NAME:$namec" ?>
                    </h2><br>
                    <img src="image/phone.jpg" alt=""><br>
                    <a href="">
                        <?php echo " 0$phone" ?>
                    </a> <br>
                    <img src="image/email.jpg" alt=""><br>
                    <a href="">
                        <?php echo  "$mail" ?>
                    </a><br>
                </div>
            </td>
        </tr>
    </table>
    <div id="container">
        <div class="">
            <img src="image/candidate.png" alt="" class="imag1">
        </div>

        <h2>EDUCATION</h2>
        <p>
            <?php echo "$educa" ?>
        </p>

        <h2>TECHNICAL SKILLS AND SOFT SKILLS</h2>
        <p>
            <?php echo "$skil" ?>
        </p>

        <h2>EXPERIENCE</h2>
        <p>
            <?php echo "$expa" ?>
        </p>
    </div>

    <?php
    }
}

?>




    <script>
        countf = 0;
        function show1() {
            let fori1 = document.getElementById("formdiv");
            if (countf == 0) {
                fori1.style.display = "block";
                countf++;
            }
            else {
                fori1.style.display = "none";
                countf = 0;
            }

        }
        function show() {

            let header = document.getElementById("midheader");
            header.style.display = "block";

            let header1 = document.getElementById("everyopt");
            header1.style.display = "block";

        }
        let countmech = 0;
        function showmech() {
            let dab = document.getElementById("mechoptions");
            if (countmech == 0) {
                dab.style.display = "inline-block";
                countmech++;
            }
            else {
                dab.style.display = "none";
                countmech = 0;
            }
        }
        let countsoft = 0;
        function showsoft() {
            let dab = document.getElementById("softoptions");
            if (countsoft == 0) {
                dab.style.display = "inline-block";
                countsoft++;
            }
            else {
                dab.style.display = "none";
                countsoft = 0;
            }
        }
        let countele = 0;
        function showelec() {
            let dab = document.getElementById("Eleoptions");
            if (countele == 0) {
                dab.style.display = "inline-block";
                countele++;
            }
            else {
                dab.style.display = "none";
                countele = 0;
            }
        }
        let countchem = 0;
        function showchem() {
            let dab = document.getElementById("Chemoptions");
            if (countchem == 0) {
                dab.style.display = "inline-block";
                countchem++;
            }
            else {
                dab.style.display = "none";
                countchem = 0;
            }
        }
        let countfo = 0;


    </script>
</body>

</html>