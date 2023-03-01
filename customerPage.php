<!DOCTYPE html>
<?php
ob_start();
$conn=mysqli_connect("localhost","root","");
$dbconn=mysqli_select_db($conn,"jobrecruitment");
$result=mysqli_query($conn,"select * from applicant;");
$id=$_REQUEST['id'];
$n=mysqli_query($conn,"select applicantName from applicant where applicantId='$id';");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0px;
        }

        body {
            background-color: rgb(238, 238, 238);
        }

        #leftpane {
            /* border: 1px solid salmon; */
            width: 100px;
            height: 1000px;
            float: left;
            background-color: slateblue;
        }

        #toppane {
            /* border: 1px solid violet; */
            float: left;
            width: 93%;
            background-color: white;
        }

        #midpane {
            background-color: white;
            border: 1px solid tomato;
            float: left;
            width: 89%;
            margin-left: 20px;
            margin-top: 25px;
            border-radius: 8px;
            height: 900px;
        }

        #logo {
            text-align: center;
            margin-top: 10px;
            /* border: 1px solid black; */
        }

        #logo img {
            width: 55px;
            height: 55px;
        }

        #optionsContainer {
            text-align: center;
            margin-top: 30px;

        }

        #optionsContainer div {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            justify-items: center;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .class1 {
            display: flex;
            align-items: center;
        }

        #topLeft {
            margin-left: 30px;
            margin-top: 10px;
            margin-bottom: 10px;
            background-color: rgb(227, 218, 218);
            width: 400px;
            height: 30px;
            border-radius: 5px;
            /* display: inline-block; */
            float: left;
        }

        #toppane input {
            border: none;
            background-color: rgb(227, 218, 218);
            width: 400px;
        }

        #toppane img {
            margin-left: 9px;
            width: 20px;
            height: 20px;
        }

        input:focus {
            outline: none;
        }

        #topRight {
            float: right;
            margin-right: 30px;
        }

        #topRight img {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            box-shadow: 0px 6px 5px grey;
        }

        #midHeader {
            font-size: 20px;
            height: 40px;
            margin-top: 9px;
            border-bottom: 2px solid grey;
            display: none;
        }

        #midHeader a {
            color: grey;
            padding-left: 50px;
        }

        .Option {
            padding-top: 10px;
            border: 1px solid slateblue;
            display: inline-block;
            height: 90px;
            text-align: center;
            font-size: 20px;
            display: none;
            box-shadow: 2px 2px 2px slateblue;
        }

        #softOption {
            width: 183px;
            margin-left: 42px;
        }

        #mechOption {
            width: 183px;
            margin-left: 500px;
        }

        #electricOption {
            width: 183px;
            margin-left: 42px;
        }

        #chemicalOption {
            width: 183px;
            margin-left: 42px;
        }

        #Jobsoffered {
            display: flex;
            /* background-Color:salmon; */
            border: 1px solid salmon;
            background-color:thistle;
            justify-content: center;
            align-items: center;
        }

        #Jobsoffered div {
            margin-right: 50px;
        }

        #postNew {
            width: 100%;
            height: 350px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: pink;
        }

        #center {
            width: 70%;
            height: 70%;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #center div {
            width: 50%;
            height: 100%;
        }

        #left {
            text-align: center;
        }

        #left img {
            width: 50%;
            height: 50%;
        }

        #right {
            text-align: center;
            padding-left: 5%;
        }

        .button {
            width: 200px;
            height: 40px;
            border-radius: 20px;
            background-color: pink;
            color: white;
            font-weight: bold;
            margin-top: 20px;
        }

        #posted {
            display: flex;
            justify-content: center;
            align-items: stretch;
            background-color: thistle;
            text-align: justify;
            flex-wrap: wrap;
        }

        #posted>div {
            padding: 20px;
            margin-top: 50px;
            border: 2px solid pink;
        }


        span {
            /* font-weight:bold; */
            font-size: 20px;
        }

        .qp {
            font-size: 16px;
            margin-top: 10px;
        }

        .tab {
            background-Color: thistle;
            margin-top: 40px;
            margin-left: 10%;
            width: 70%;
        }

        .tab tr {
            background-color: pink;
        }

        button {
            background-color: slateblue;
            border: none;
            border-radius:20%;
            width:90px;
            height:40px;
            color:white;
        }

        h1 {
            text-align: center;
        }
        
        #ap {
            display: flex;
            width: 50%;
            margin: auto;
            border: 2px solid salmon;
            margin-top: 20px;
        }

        #ap div {
            margin-left: 200px;
        }
       #midpane{
        overflow: auto;
       }

       button:hover{
          cursor:pointer;
       }
    </style>
</head>

<body>
    <form action="#" method="post">
        <div id="leftpane">
            <div id="logo">
                <img src="image/zariyalogo.jpg" alt="zariya" style="border-radius:50%">
            </div>
            <div id="optionsContainer">
                <div id="opt1">
                    <img src="image/per.png" alt="#pinfo.php" width="40px">
                    <button name="pinf">Personal <br>Information</button>
                </div>
                <div id="opt2">
                    <img src="image/apimg.png" alt="#" width="40px">
                    <button name="showap">Applied <br> Post</button>
                </div>
                <div id="opt3">
                    <img src="image/jobp.jpg" alt="#" width="40px">
                    <a href="#" onclick="showheader()">Job <br> Posts</a>
                </div>
                <div id="opt4">
                    <img src="image/bmk.png" alt="#" width="40px">
                    <button name="bookmarks">Bookmarks</button>
                </div>
                <div id="opt5">
                    <img src="image/q1.png" alt="#" width="40px">
                    <button name="quer">Queries</button>
                </div>
                <div id="opt6">
                    <img src="image/joboffer.jpg" alt="#" width="40px">
                    <button name="joboff">Jobs <br> Offered</button>
                </div>
                <div>
                    <button name="goback" style="border:2px solid black;font-weight:bold">LOG OUT</button>
                </div>
            </div>
        </div>
        
        <div id="toppane">

            <div id="topLeft" class="class1">
                <h3 style="margin-left:100px">Zariya for your Rozgar</h3>
                <!-- <img src="search.png" alt="#">
                <input type="search" placeholder="Search"> -->
            </div>
            <div id="topRight" class="class1">
                <?php while($rr=mysqli_fetch_assoc($n)){?>
                <p>Welcome
                    <?php echo $rr['applicantName']?>
                </p>
                <?php
            }
            ?>
                <img src="image/namelogo.jpg" alt="#">
            </div>
        </div>
        <div id="midpane">

            <div id="midHeader">
                <a href="#" onclick="showSoftware()">Software Engineering</a>
                <a href="#" onclick="showmech()">Mechanical Engineering</a>
                <a href="#" onclick="showelec()">Electrical Engineering</a>
                <a href="#" onclick="showchem()">Chemical Engineering</a>
            </div>
            <div id="softOption" class="Option">
                <button name="dbmanager">Database Manager</button> 
                <button name="webengineer">Web Engineer</button>

            </div>
            <div id="mechOption" class="Option" style="margin-left:268px">
                <button name="mechassistant">Mechanical Assistant</button> 
                <button name="formulacar">Formula Car</button>
            </div>
            <div id="electricOption" class="Option" style="margin-left:535px">
                <button name="wiremanagement">Wire Management</button>
                <button name="communicationpath">Transfer Path</button>
            </div>
            <div id="chemicalOption" class="Option" style="margin-left:760px">
                <button name="reactionanalyst">Reaction Analyst</button>
                <button name="formulaanalyst">Formula Analyst</button>
            </div>
    </form>
    <?php
    if(isset($_POST['dbmanager'])){?>
    <table border=1px cellspacing="5px" cellpadding="20px" class="tab">
        <tr>
            <th>Job Id</th>
            <th>Job Title</th>
            <th>Job Salary</th>
            <th>Job Timings</th>
            <th>Job Location</th>
            <th colspan="2">Apply/Bookmark Job</th>

        </tr>
        <?php $qrr=mysqli_query($conn,"SELECT * FROM jobposts where category='1'"); 
    while($r=mysqli_fetch_assoc($qrr)){?>
        <tr>
            <td>
                <?php echo $r['jobId']?>
            </td>
            <td>
                <?php echo $r['jobTitle']?>
            </td>
            <td>
                <?php echo $r['salary']?>
            </td>
            <td>
                <?php echo $r['timings']?>
            </td>
            <td>
                <?php echo $r['location']?>
            </td>
            <td>
                <button name="apply" class="btn">Apply</button>
            </td>
            <td>
                <button name="bmk" class="btn">Bookmark</button>
            </td>
        </tr>
        <?php
    }
}
if(isset($_POST['webengineer'])){?>
        <table border=1px cellspacing="5px" cellpadding="20px" class="tab">
            <tr>
                <th>Job Id</th>
                <th>Job Title</th>
                <th>Job Salary</th>
                <th>Job Timings</th>
                <th>Job Location</th>
                <th colspan="2">Apply/Bookmark Job</th>

            </tr>
            <?php $qrr=mysqli_query($conn,"SELECT * FROM jobposts where category='2'"); 
        while($r=mysqli_fetch_assoc($qrr)){?>
            <tr>
                <td>
                    <?php echo $r['jobId']?>
                </td>
                <td>
                    <?php echo $r['jobTitle']?>
                </td>
                <td>
                    <?php echo $r['salary']?>
                </td>
                <td>
                    <?php echo $r['timings']?>
                </td>
                <td>
                    <?php echo $r['location']?>
                </td>
                <td>
                    <button name="apply" class="btn">Apply</button>
                </td>
                <td>
                    <button name="bmk" class="btn">Bookmark</button>
                </td>
            </tr>
            <?php
        }}
if(isset($_POST['formulaanalyst'])){?>
        <table border=1px cellspacing="5px" cellpadding="20px" class="tab">
            <tr>
                <th>Job Id</th>
                <th>Job Title</th>
                <th>Job Salary</th>
                <th>Job Timings</th>
                <th>Job Location</th>
                <th colspan="2">Apply/Bookmark Job</th>
            </tr>
            <?php $qrr=mysqli_query($conn,"SELECT * FROM jobposts where category='8'"); 
        while($r=mysqli_fetch_assoc($qrr)){?>
            <tr>
                <td>
                    <?php echo $r['jobId']?>
                </td>
                <td>
                    <?php echo $r['jobTitle']?>
                </td>
                <td>
                    <?php echo $r['salary']?>
                </td>
                <td>
                    <?php echo $r['timings']?>
                </td>
                <td>
                    <?php echo $r['location']?>
                </td>
                <td>
                    <button name="apply" class="btn">Apply</button>
                </td>
                <td>
                    <button name="bmk" class="btn">Bookmark</button>
                </td>
            </tr>
            <?php
        }}
if(isset($_POST['reactionanalyst'])){?>
        <table border=1px cellspacing="5px" cellpadding="20px" class="tab">
            <tr>
                <th>Job Id</th>
                <th>Job Title</th>
                <th>Job Salary</th>
                <th>Job Timings</th>
                <th>Job Location</th>
            </tr>
            <?php $qrr=mysqli_query($conn,"SELECT * FROM jobposts where category='7'"); 
        while($r=mysqli_fetch_assoc($qrr)){?>
            <tr>
                <td>
                    <?php echo $r['jobId']?>
                </td>
                <td>
                    <?php echo $r['jobTitle']?>
                </td>
                <td>
                    <?php echo $r['salary']?>
                </td>
                <td>
                    <?php echo $r['timings']?>
                </td>
                <td>
                    <?php echo $r['location']?>
                </td>
                <td>
                    <button name="apply" class="btn">Apply</button>
                </td>
                <td>
                    <button name="bmk" class="btn">Bookmark</button>
                </td>
            </tr>
            <?php
        }}
if(isset($_POST['communicationpath'])){?>
        <table border=1px cellspacing="5px" cellpadding="20px" class="tab">
            <tr>
                <th>Job Id</th>
                <th>Job Title</th>
                <th>Job Salary</th>
                <th>Job Timings</th>
                <th>Job Location</th>
            </tr>
            <?php $qrr=mysqli_query($conn,"SELECT * FROM jobposts where category='6'"); 
        while($r=mysqli_fetch_assoc($qrr)){?>
            <tr>
                <td>
                    <?php echo $r['jobId']?>
                </td>
                <td>
                    <?php echo $r['jobTitle']?>
                </td>
                <td>
                    <?php echo $r['salary']?>
                </td>
                <td>
                    <?php echo $r['timings']?>
                </td>
                <td>
                    <?php echo $r['location']?>
                </td>
                <td>
                    <button name="apply" class="btn">Apply</button>
                </td>
                <td>
                    <button name="bmk" class="btn">Bookmark</button>
                </td>
            </tr>
            <?php
        }}
if(isset($_POST['wiremanagement'])){?>
        <table border=1px cellspacing="5px" cellpadding="20px" class="tab">
            <tr>
                <th>Job Id</th>
                <th>Job Title</th>
                <th>Job Salary</th>
                <th>Job Timings</th>
                <th>Job Location</th>
                <th colspan="2">Apply/Bookmark Job</th>

            </tr>
            <?php $qrr=mysqli_query($conn,"SELECT * FROM jobposts where category='5'"); 
        while($r=mysqli_fetch_assoc($qrr)){?>
            <tr>
                <td>
                    <?php echo $r['jobId']?>
                </td>
                <td>
                    <?php echo $r['jobTitle']?>
                </td>
                <td>
                    <?php echo $r['salary']?>
                </td>
                <td>
                    <?php echo $r['timings']?>
                </td>
                <td>
                    <?php echo $r['location']?>
                </td>
                <td>
                    <button name="apply" class="btn">Apply</button>
                </td>
                <td>
                    <button name="bmk" class="btn">Bookmark</button>
                </td>
            </tr>
            <?php
        }}
if(isset($_POST['formulacar'])){?>
        <table border=1px cellspacing="5px" cellpadding="20px" class="tab">
            <tr>
                <th>Job Id</th>
                <th>Job Title</th>
                <th>Job Salary</th>
                <th>Job Timings</th>
                <th>Job Location</th>
                <th colspan="2">Apply/Bookmark Job</th>

            </tr>
            <?php $qrr=mysqli_query($conn,"SELECT * FROM jobposts where category='4'"); 
        while($r=mysqli_fetch_assoc($qrr)){?>
            <tr>
                <td>
                    <?php echo $r['jobId']?>
                </td>
                <td>
                    <?php echo $r['jobTitle']?>
                </td>
                <td>
                    <?php echo $r['salary']?>
                </td>
                <td>
                    <?php echo $r['timings']?>
                </td>
                <td>
                    <?php echo $r['location']?>
                </td>
                <td>
                    <button name="apply" class="btn">Apply</button>
                </td>
                <td>
                    <button name="bmk" class="btn">Bookmark</button>
                </td>
            </tr>
            <?php
        }}
if(isset($_POST['mechassistant'])){?>
        <table border=1px cellspacing="5px" cellpadding="20px" class="tab">
            <tr>
                <th>Job Id</th>
                <th>Job Title</th>
                <th>Job Salary</th>
                <th>Job Timings</th>
                <th>Job Location</th>
                <th>Apply/Bookmark Job</th>

            </tr>
            <?php $qrr=mysqli_query($conn,"SELECT * FROM jobposts where category='3'"); 
        while($r=mysqli_fetch_assoc($qrr)){?>
            <tr>
                <td>
                    <?php echo $r['jobId']?>
                </td>
                <td>
                    <?php echo $r['jobTitle']?>
                </td>
                <td>
                    <?php echo $r['salary']?>
                </td>
                <td>
                    <?php echo $r['timings']?>
                </td>
                <td>
                    <?php echo $r['location']?>
                </td>
                <td>
                    <button name="apply" class="btn">Apply</button>
                </td>
                <td>
                    <button name="bmk" class="btn">Bookmark</button>
                </td>
            </tr>
            <?php
        }}
if(isset($_POST['apply'])){?>
        <tr>
            <td>
                <input type="text" placeholder="Enter the id: " style="margin:100px" name="bid" id="bid">
            </td>
            <td>
                <button name="apl">Confirm</button>
            </td>
        </tr>
        <?php
}
else if(isset($_POST['bmk'])){?>
        <tr>
            <td>
                <input type="text" placeholder="Enter the id: " style="margin:100px" name="bmid" id="bmid">
            </td>
            <td>
                <button name="bmk1">Confirm</button>
            </td>
        </tr>
        <?php    
}

if(isset($_POST['apl'])){
    $er=mysqli_query($conn,"INSERT into applicantapplied(applicantId,jobId,statuss) values ($id,$_POST[bid],'No-response')");
    echo '<h1>' . "You have applied for the job Successfully!".'<br>'."We Wish You Best Of Luck" . '</h1>';
}

else if(isset($_POST['bmk1'])){

    $seb=mysqli_query($conn,"SELECT bookmarks from applicant where applicantId=$id");

    $c=mysqli_fetch_assoc($seb)['bookmarks'];

    if(strlen($c==1)){
        ?>
        <td>
        <td>YOU CANNOT BOOKMARK MORE THAN ONE JOB</td>
        </tr>
        <?php
    }
    else{
    $er=mysqli_query($conn,"UPDATE applicant set bookmarks=$_POST[bmid] where applicantId=$id");
    }

}

if(isset($_POST['showap'])){
    ?>
        <H1>JOBS APPLIED FOR</H1>
        <?php
    $results=mysqli_query($conn,"select * from jobposts,applicantapplied where jobposts.jobId=applicantapplied.jobId and applicantId=$id;");
    $i=1;
    while($rows=mysqli_fetch_assoc($results)){?>
    <div id="showaplied">
        <div id="ap">
            <div>
                <h1>
                    <?php echo $i ?>
                </h1>
            </div>
            <div>
                <table>
                    <tr>
                        <td>JOB TITLE</td>
                        <td>
                            <?php echo $rows['jobTitle']?>
                        </td>
                    </tr>
                    <tr>
                        <td>CATEGORY</td>
                        <td>
                            <?php echo $rows['category']?>
                        </td>
                    </tr>
                    <tr>
                        <td>SALARY</td>
                        <td>
                            <?php echo $rows['salary']?>
                        </td>
                    </tr>
                    <tr>
                        <td>JOB TIMINGS</td>
                        <td>
                            <?php echo $rows['timings']?>
                        </td>
                    </tr>
                    <tr>
                        <td>DESIGNATION</td>
                        <td>
                            <?php echo $rows['designation']?>
                        </td>
                    </tr>
                    <tr>
                        <td>LOCATION</td>
                        <td>
                            <?php echo $rows['location']?>
                        </td>
                    </tr>
                    <tr>
                        <td>STATUS</td>
                        <td>
                            <?php echo $rows['statuss']?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
        <?php
        $i++;
    }
    ?>
        <?php
}
if(isset($_POST['pinf'])){?>
        <table border="2px" cellspacing="10px" cellpadding="10px" class="tab">

            <?php
  
//   $result=mysqli_query($conn,"select * from applicant;");

  
        // $id=$_REQUEST['id'];
        $res=mysqli_query($conn,"select * from applicant where applicantId='$id';");
        while($r=mysqli_fetch_assoc($res)){?>
            <tr >
                <td colspan="4" style="text-align:center">
                    <?php echo $r['applicantName']?>
                </td>
            </tr>
            <tr>
                <td>Id: </td>
                <td>
                    <?php echo $r['applicantId']?>
                </td>
            </tr>
            <tr>
                <td>Contact:</td>
                <td>
                    <?php echo $r['contact']?>
                </td>
            </tr>
            <tr>
                <td>Email </td>
                <td>
                    <?php echo $r['email']?>
                </td>
            </tr>
            <tr>
                <td>Name: </td>
                <td>
                    <?php echo $r['applicantName']?>
                </td>
            </tr>
            <?php
            $det=mysqli_query($conn,"SELECT education,experience,skills from applicant,appdetails where applicant.detailsId=appdetails.detailsId and applicantId=$id;")
            ?>
            <tr>
                <td rowspan="5">Details: </td>
                <?php
                while($e=mysqli_fetch_assoc($det)){
                ?>
                <td>
                    Educational Details:
                </td>
                <td>
                    <?php echo $e['education']?>
                </td>
            </tr>
            <tr>
                <td>
                    Past Experience:
                </td>
                <td>
                    <?php echo $e['experience']?>
                </td>
            </tr>
            <tr>
                <td>
                    Skills Possessed
                </td>
                <td>
                    <?php echo $e['skills']?>
                </td>
            </tr>
            <?php
                }
                ?>
            </tr>
        </table>
        <?php
        }
    
}
if(isset($_POST['quer'])){
    ?>
        <h1 style="text-align:center">Drop New Queries</h1>
        <div id="postNew">
            <div id="center">
                <div id="left">
                    <img src="image/message.png" alt="">
                </div>
                <div id="right">
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td><textarea name="message" id="message" cols="45" rows="10"
                                placeholder="Drop Your Queries"></textarea></td>
                            </tr>
                            <tr>
                                <td><button name="submitqr" class="button">SUBMIT</button></td>
                                </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        
        <h1 style="text-align:center">Posted Queries</h1>
        <div id="posted">
            <?php
            $q=mysqli_query($conn,"select * from queries where applicantId=$id");
            while($rowss=mysqli_fetch_assoc($q)){
            $qiid=$rowss['queryId'];
            $des=$rowss['postDescription'];
            $respnse=$rowss['response'];
        ?>
            <div>
                <div id="num">
                    <h3>Query Id:
                        <?php echo $qiid?>
                    </h3>
                </div>
                <div id="queryDet">
                    <p><span>QUERY: </span>
                        <?php echo $des?>
                    </p>
                    <p><span>RESPONSE: </span>
                        <?php if($respnse==""){echo "No-response posted yet";
                }
                else{
                    echo $respnse;
                }
                ?>
                    </p>
                </div>
            </div>
            <?php 
    }
    ?>
        </div>
        <?php
}
if(isset($_POST['submitqr'])){
    $ressult = mysqli_query($conn,"SELECT count(queryId) FROM queries");
$rowse = mysqli_fetch_array($ressult);

$qid = $rowse[0];
$mess=$_POST['message'];

$res=mysqli_query($conn,"INSERT into queries(queryId,postDescription,applicantId) values ($qid+1,'$mess','$id')");

}

if(isset($_POST['joboff'])){
$qs=mysqli_query($conn,"SELECT * FROM applicantoffered,jobposts where applicantoffered.jobId=jobposts.jobId and applicantId=$id and applicantoffered.statuss not in ('ACCEPTED','REJECTED');");
    while($rows=mysqli_fetch_assoc($qs)){
    ?>

        <div id="Jobsoffered">
            <div id="num">
                <h3>Job Id: </h3>
                <?php echo $rows['jobId']?>
            </div>
            <div id="details">
                <table>
                    <tr>
                        <td>
                            <h3>Job Title: </h3>
                        </td>
                        <td>
                            <?php echo $rows['jobTitle']?>
                        </td>
                    </tr>
                    <?php
                $d=mysqli_query($conn,"SELECT categoryName from category where categoryNumber='$rows[category]'"); 
                $catname=mysqli_fetch_assoc($d)['categoryName'];
                ?>
                    <tr>
                        <td>
                            <h3>Category Name</h3>
                        </td>
                        <td>
                            <?php echo $catname?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Salary</h3>
                        </td>
                        <td>
                            <?php echo $rows['salary']?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Designation</h3>
                        </td>
                        <td>
                            <?php echo $rows['designation']?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Timings</h3>
                        </td>
                        <td>
                            <?php echo $rows['timings']?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Location</h3>
                        </td>
                        <td>
                            <?php echo $rows['location']?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button name="accept">Accept</button>
                            <button name="reject">Reject</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php

}
    }

?>
        <?php
if(isset($_POST['accept'])){?>
        <tr>
            <td>
                <input type="text" placeholder="ENTER THE JOB ID" id="jid" name="jid" style="margin:50px">
            </td>
            <td>
                <button name="s1">Submit</button>
            </td>
        </tr>
        <?php
}
else if(isset($_POST['reject'])){?>
        <tr>
            <td>
                <input type="text" placeholder="ENTER THE JOB ID" id="jiid" name="jiid" style="margin:50px">
            </td>
            <td>
                <button name="s2">Rejected</button>
            </td>
        </tr>
        <?php
}

if(isset($_POST['s1'])){
    $work="WORKING";
    $jid=$_POST['jid'];
   $se=mysqli_query($conn,"UPDATE applicant set statuss='$work' where applicantId=$id");
   echo  '<h1>'. "CONGRATS! You have selected for the job" .'<br>'."Yoour status is changed to Working".'</h1>';
}
else if(isset($_POST['s2'])){
    $rej="REJECTED";
    $jiid=$_POST['jiid'];
    $sr=mysqli_query($conn,"UPDATE applicantoffered set statuss='REJECTED' where jobId=$jiid and applicantId=$id");
}
if(isset($_POST['bookmarks'])){
    $bq=mysqli_query($conn,"SELECT * from jobPosts where jobId=(select bookmarks from applicant where applicantId=$id)");
    ?>

        <h1>BOOKMARKS</h1>
        <?php
    while($f=mysqli_fetch_assoc($bq)){?>
        <div id="ap">
            <div>
                <h1>
                    <?php echo 1 ?>
                </h1>
            </div>
            <div>
                <table>
                    <tr>
                        <td>JOB TITLE</td>
                        <td>
                            <?php echo $f['jobTitle']?>
                        </td>
                    </tr>
                    <tr>
                        <td>CATEGORY</td>
                        <td>
                            <?php echo $f['category']?>
                        </td>
                    </tr>
                    <tr>
                        <td>SALARY</td>
                        <td>
                            <?php echo $f['salary']?>
                        </td>
                    </tr>
                    <tr>
                        <td>JOB TIMINGS</td>
                        <td>
                            <?php echo $f['timings']?>
                        </td>
                    </tr>
                    <tr>
                        <td>DESIGNATION</td>
                        <td>
                            <?php echo $f['designation']?>
                        </td>
                    </tr>
                    <tr>
                        <td>LOCATION</td>
                        <td>
                            <?php echo $f['location']?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center"><button name="remove">Remove</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php
    }
}
if(isset($_POST['remove'])){
    $fg=mysqli_query($conn,"UPDATE applicant set bookmarks=null where applicantId=$id");
}
?>

    </table>
    </div>

    <script>
        let count = 0;
        let chem = document.getElementById("chemicalOption");
        let mech = document.getElementById("mechOption");
        let soft = document.getElementById("softOption");
        let elec = document.getElementById("electricOption");
        function showheader() {
            let header = document.getElementById('midHeader');
            if (count == 0) {
                header.style.display = "block";
                count = 1;
            }
            else {
                header.style.display = "none";
                count = 0;
            }
        }
        let countmech = 0;
        function showmech() {
            if (countmech == 0) {
                chem.style.display = "none";
                soft.style.display = "none";
                elec.style.display = "none";
                mech.style.display = "inline-block";
                countmech++;
            }
            else {
                mech.style.display = "none";
                countmech = 0;
            }
        }
        let countSoftware = 0;
        function showSoftware() {
            if (countSoftware == 0) {
                chem.style.display = "none";
                mech.style.display = "none";
                elec.style.display = "none";
                soft.style.display = "inline-block";
                countSoftware++;
            }
            else {
                soft.style.display = "none";
                countSoftware = 0;
            }
        }
        let countelectric = 0;
        function showelec() {
            if (countelectric == 0) {
                chem.style.display = "none";
                soft.style.display = "none";
                mech.style.display = "none";
                elec.style.display = "inline-block";
                countelectric++;
            }
            else {
                elec.style.display = "none";
                countelectric = 0;
            }
        }
        let countchem = 0;
        function showchem() {
            if (countchem == 0) {
                mech.style.display = "none";
                soft.style.display = "none";
                elec.style.display = "none";
                chem.style.display = "inline-block";
                countchem++;
            }
            else {
                chem.style.display = "none";
                countchem = 0;
            }
        }
    </script>
</body>
</html>
<?php
if(isset($_POST['goback'])){
    header("Location:loginpg.php");
    exit();
}

?>