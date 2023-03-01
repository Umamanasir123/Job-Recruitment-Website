<?php
$conn=mysqli_connect("localhost","root","");
$dbconn=mysqli_select_db($conn,"jobrecruitmentsystem");
$id=$_REQUEST['id'];
$re=mysqli_query($conn,"select * from queries where applicantId='$id';");
while($r=mysqli_fetch_assoc($re)){
    $qid=$r['queryId'];
}

?>
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

        #postNew {
            width: 100%;
            height: 500px;
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
            margin-top: 100px;
        }

        #right {
            text-align: center;
            padding-left: 5%;
        }

        button {
            width: 200px;
            height: 40px;
            border-radius: 20px;
            background-color: pink;
            color: white;
            font-weight: bold;
            margin-top: 20px;
        }

        #posted{
            display: flex;
            justify-content: center;
            align-items: stretch;
            background-color: thistle;
            text-align: justify;
            flex-wrap:wrap;
        }
        #posted>div{
            padding:20px;
            margin-top:50px;
            border:2px solid pink; 
        }
        textarea {
            margin-top: 80px;
        }

        span {
            /* font-weight:bold; */
            font-size: 20px;
        }

        p {
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1 style="text-align:center">Drop New Queries</h1>
    <div id="postNew">
        <div id="center">
            <div id="left">
                <img src="image/message.png" alt="">
            </div>
            <div id="right">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td><textarea name="message" id="message" cols="60" rows="10"
                                    placeholder="Drop Your Queries"></textarea></td>
                        </tr>
                        <tr>
                            <td><button name="submitq">SUBMIT</button></td>
                            <?php
if(isset($_POST['submitq'])){
$ressult = mysql_query("SELECT count(queryId) FROM queries");
$rowse = mysql_fetch_array($ressult);

$total = $rowse[0];
echo $total;
// $mess=$_POST['message'];
// $date=date('d-m-y h:i:s');
// $id=$_REQUEST['id'];
// $res=mysqli_query($conn,"INSERT into queries(queryId,postDescription,postingTime,applicantId) values ($qid+1,'$mess','$date','$id')");
}
?>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <h1 style="text-align:center">Posted Queries</h1>
    <div id="posted">
        <?php
            $q=mysqli_query($conn,"select * from queries");
            while($rowss=mysqli_fetch_assoc($q)){
            $qiid=$rowss['queryId'];
            $des=$rowss['postDescription'];
            $ptime=$rowss['postingTime'];
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
                <p><span>POSTING TIME: </span>
                    <?php echo $ptime?>
                </p>
                <p><span>RESPONSE: </span>
                    <?php if($respnse==""){echo "No-response pposted yet";
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
</body>

</html>
