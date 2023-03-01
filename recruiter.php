recruiter.php:
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    #main {
        height: 800px;
        width: 65%;
        border: 2px solid black;
        margin: auto;
        background: whitesmoke;
        font-weight: bold;
    }

    #main h2 {
        margin-left: 35px;
        font-weight: bold;
    }

    #main span {
        margin-left: 35px;
        font-weight: bold;
        margin-top: -10px;
        font-size: 15px;
    }

    #main p {
        margin-left: 35px;
        font-weight: bold;
        margin-top: -10px;
        font-size: 15px;
    }

    #pic {
        width: 140px;
        height: 130px;
        border: 2px solid black;
        /* float: right;
        margin-right: 30px;
        margin-top: -190px; */
        background-size: cover;
        /* background-repeat: no-repeat; */
        background-position: center;
    }

    #forma {
       /* border: 1px solid black; */
        width: 90%;
        height: 1100px;
        margin: 50px;
        margin-top: -8px;
    }

    #div1 {
        width: 95%;
        height: 430px;
        /* border:2px solid firebrick; */
        background-color: lightyellow;
        margin-top: 28px;
        margin-left: 9px;
        text-align:center;
        box-shadow: 12px 14px 12px  gray;
        border-radius:7px;;
    }


    #pinfo {
        background-color: black;
        color: white;
        font-weight: bold;
        height: 34px;
        word-spacing: 4px;
        letter-spacing: 2px;
        text-align: center;
        margin-top: -20px;
        /* padding: 4px; */
    }

    input {
        width: 390px;
        margin: 5px;
    }

    table th {
        padding: 9px;
        text-align:center;
      
        
    }

    table {
        text-align: center;
        width:700px;
        margin-left:60px;
        background-color: lightwheat;
    }


    #rad {
        width: 300px;
        height: 25px;

        display: flex;
        margin-left: 8px;
    }
    </style>

    <div id="main">
        <h2>ZARIYA</h2>
        <p>A place from where you get your desired job </p>
        <span>Phone: +92-33404230123</span>
        <span id="eml">email:zariya@gmail.com</span>
       
        <h2>RECRUITER REGISTRATION FORM</h2>
        <br>

        <div id="forma">
            <div id="pinfo">
                <h3>PERSONAL INFORMATION</h3>
            </div>

            <form method="POST" action="addrec.php">
                <div id="div1"> 
                     <table cellspacing="3px" border="4px">                    
                        <tr>
                            <th style="margin-top:5px;">Name</th>
                            <td  ><input type="text" name="fname"></td>
                        </tr>
                        <tr colspan="2">
                            <th>Gender</th>
                            <td>
                                <div id="rad"><input type="radio" name="gen" value="Male">Male
                                    <input type="radio" name="gen" value="Female">Female
                                </div>
                            </td>
                        </tr>
                       
                        <tr>
                            <th>Province</th>
                            <td >
                            <label for="prov" style="margin-left:6px; ">Choose Province:</label>

                            <select id="prov" name="prov" style="margin-left:10px;">
                                <option value="Sindh" name="prov">Sindh</option>
                                <option value="Punjab" name="prov">Punjab</option>
                                <option value="Baluchistan" name="prov">Baluchistan</option>
                                <option value="Kpk" name="prov">KPK</option> 
                            </select>
                            </td>
                        </tr>

                        <tr>
                            <th>City</th>
                            <td >
                            <label for="cit" style="margin-left:6px; ">Choose City:</label>

                            <select id="cit" name="cit" style="margin-left:27px;margin-top:12px;">
                            <option value="Karachi" name="cit" >Karachi</option>
                                <option value="Peshawar" name="cit">Peshawar</option>
                                <option value="Multan" name="cit">Multan</option>
                                <option value="Lahore" name="cit">Lahore</option>
                                <option value="Gawadar" name="cit">Gawadar</option>
                                <option value="Hyderabad" name="cit">Hyderabad</option>
                           
                            </select>
                        </td>
                        </tr>
                       
                        <tr>
                            <th>Email Id</th>
                            <td><input type="email" name="eml"></td>
                        </tr>
                        <tr>
                            <th>Contact Number</th>
                            <td><input type="text" name="con"></td>
                        </tr>
                        <tr>
                            <th>Company Registration Id</th>
                            <td><input type="text" name="comreg"></td>
                        </tr>
                       
                        <tr>
                            <th>Username</th>
                            <td><input type="text" name="uname"></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><input type="password" name="psw"></td>
                        </tr>
                     
                    
                       <tr>
                        <td colspan="2"><input type="submit"  name="submit" value="SUBMIT FORM" style="margin-left:80px; background-color:lightblue;  height:30px; font-weight:bold; "></td></tr>
                        </form>
                        </table>
</table>
</div>
</form>
</body>
</html>
