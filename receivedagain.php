<?php 
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"jobrecruitment");
    $rid=$_REQUEST['rid'];
?>

<html>
<head>
<style>
    h1{
        text-align:center;
        background-color:blue;
    }
</style>
</head>

<body>

<H1>RECEIVED JOB REQUESTS</H1>
<table border=5 cellspacing="10px" cellpadding="10px">
<tr>
       <th>Applicant Id</th>
       <th>Job Id</th>
       <th>status</th>
       <th>accept</th>
       <th>reject</th>
    </tr>
    <?php
    $myquery3=mysqli_query($conn,"select a.applicantId,a.jobid,a.statuss,j.recruiterId from applicantapplied a,jobposts j where a.jobid=j.jobId and j.recruiterId=$rid");
    while($rows3=mysqli_fetch_assoc($myquery3)){
  echo "
    <tr>
        <td>".$rows3['applicantId']."</td>
        <td>".$rows3['jobid']."</td>
        <td>".$rows3['statuss']."</td>
        <td><a href='acc.php?rn1=$rows3[applicantId] & jid=$rows3[jobid]'>accept</a></td>
        <td><a href='rej.php?rn2=$rows3[applicantId] & jid=$rows3[jobid]'>reject</a></td>
    </tr>";

    }
    ?>
</table>
</body>
</html>