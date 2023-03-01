<?php
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "jobrecruitment");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
<?php
   include("webadmin.php");
   ?>
<table border="2px" cellspacing="4px" cellpadding="10px">
   <tr><th colspan=7><h2>Selected Applicant Queries Details!</h2></h2></th></tr>
    <!-- <tr colspan=3> -->
    <th>Query id</th>
    <th>Applicant Id</th>
    <th>Query</th>
    <th>Response status</th>
    <th>Response Time</th>
    <th>Posted Time</th>
    <th>Update Response</th>

</tr>
        <td>
            <?php 
            if(isset($_GET['search']))
            {
                $filtervalues = $_GET['search'];
                $query = "select queryId, postDescription, response, responseTime, postingTime, applicantId from queries where applicantId like '%$filtervalues%'";
                $result = mysqli_query($con, $query);

                if(mysqli_num_rows($result) > 0){
                    while($rows=mysqli_fetch_assoc($result))
                    {
                        ?>
                        <tr>
                            <td><?php echo $rows['queryId'] ?></td>
                            <td><?php echo $rows['applicantId'] ?></td>
                            <td><?php echo $rows['postDescription'] ?></td>
                            <td><?php echo $rows['response'] ?></td>
                            <td><?php echo $rows['responseTime'] ?></td>
                            <td><?php echo $rows['postingTime'] ?></td>
                            <td><a href='edit.php? qr=$rows[queryId] & rp=$rows[response] & rt=$rows[responseTime]'>Edit</td>
                           
                        </tr>
        
                        <?php
                    }
                }
                else {
                    ?>
                       <script>alert("No record found for selected applicant")</script>
                    <?php
                }
            }
            ?>
        </td>
    </table>
</body>
</html>