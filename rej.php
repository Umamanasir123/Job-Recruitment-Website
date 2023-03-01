<?php 
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"jobrecruitment");
    $appid=$_GET['rn2'];
    $jid=$_GET['jid'];

    $query1=mysqli_query($conn,"update applicantapplied set statuss='rejected' where applicantId='$appid' and jobId=$jid");
?>