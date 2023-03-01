<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>

<style>
    #main{
        width:40%;
        height: 560px;
        border: 2px solid saddlebrown;
        background-color: lightgrey;
        margin: auto;
    }
    #header{
        width:99.8%;
        height: 70px;
        background-color: lightyellow;
        border: 2px solid rgb(29, 29, 27);
    }
    #header h1{
        text-align: center;
        /* margin-top: -3px; */
        display: inline;
        margin-left: 240px;

    }
    #header span{
        text-align: center;
        font-size: 20px;
        font-style: italic;
        margin-top: -5px;
        font-weight: bold;
        margin-left: 140px;
    }
    #portal{
        width: 70%;
        height: 440px;
        border: 4px solid black;
        border-radius: 10px;
        margin: auto;
        margin-top: 20px;
    }
    #phead{
        width: 99%;
        height: 60px;
        color: white;
        background-color: rgb(82, 65, 68);
        text-shadow: 2px 2px solid black;
        font-style: italic;
        text-align: center;
        font-weight: bold;
        margin-top: 13px;
        word-spacing: 4px;
        letter-spacing: 2px;
        border-radius: 10px;
        padding: 2px;
    }
  
    .buts{
        width: 80px;
        height: 30px;
        background-color: lightblue;
        font-weight: bold;
        border-bottom-left-radius: 20px;
        border-top-right-radius: 20px;
        text-align: center;
        margin: 4px;
        /* margin-left: 19px; */

    }
    table{
        width:200px;
        height:66px;
        margin-left:40px;
        margin-top:-10px;

    }
    #up{
        
        font-weight:bold;
  
    }
    #up img{
        border-radius:45%;
        width:130px;
        height:90px;
        margin-left:160px;
        margin-top:15px;
        border:2px solid gray;
    }
    #up h4{
        text-align:center;
        font-size: 21px;
        font-weight:bold;
        text-decoration:underline;
    }
    

</style>
<body>
    <div id="main">
        <div id="header">
            <h1>ZARIYA </h1><br>
            <span>A place from where you can find job easily!</span>
        </div>
        <div id="portal">
            <div id="phead">
                <h2>LOGIN PORTAL </h2>
            </div>

            <div id="up">
                <img  src="image/loginpic.jpg">
                <h4>Enter your credentials here to login!</h4>

        <section id="sec1" >         
                <form method="POST" action="checklogin.php">
                <table cellspacing="2px" border="3px">
                    <tr><th>username</th>
                    <td><input type="text" name="au" placeholder=" enter username" required></td>
                </tr>
                
                <tr><th>password</th>
                    <td><input type="password" name="ap" placeholder="enter password" required></td>
                </tr>
              
</section>

           
   
                <tr >
               
                
                <td  style="display:flex;"><input type="submit" name="sub"  class="buts" value="Applicant" style="margin-left:-2px;">
               <input type="submit" name="sub2" class="buts"  value="Recruiter" style="margin-left:10px;"></td>
            <td> <input type="submit" name="sub3" class="buts"  value="Web Administrator" style="margin-left:30px; width:140px; "></td> 

            </tr>



</form>
   
</table>
</body>
</html>