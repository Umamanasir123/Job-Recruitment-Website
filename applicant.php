<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #main {
        height: 1200px;
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
        width: 30%;
        height: 380px;
        background-color: lightyellow;
        margin-top: 22px;
        margin-left: 9px;
    }

    #div2 {
        width: 65%;
        height: 380px;

        margin-top: -380px;

        margin-left: 250px;
        background-color: antiquewhite;
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
        padding: 7px;

    }

    table {
        text-align: left;
    }

    #rad {
        width: 300px;
        height: 25px;

        display: flex;
        margin-left: 8px;
    }
    #div3{
        width: 30%;
        height: 160px;
        /* border:2px solid firebrick; */
        background-color: lightyellow;
        margin-top: 20px;
        margin-left: 9px;

    }
    #div4{
        width: 65%;
        height: 160px;
        /* border:2px solid firebrick; */
        margin-top: -160px;

        margin-left: 250px;
        background-color: antiquewhite;
    }

    #div5{
        width: 30%;
        height: 200px;
        /* border:2px solid firebrick; */
        background-color: lightyellow;
        margin-top: 20px;
        margin-left: 9px;

    }
    #div6{
        width: 65%;
        height: 200px;
        /* border:2px solid firebrick; */
        margin-top: -200px;
        background-color: antiquewhite;
        margin-left: 250px;
    }
    input[type='submit']
    {
        background-color: rgb(79, 83, 77);
        width:130px;
        height: 30px;
        font-weight: bold;
        margin-left: 300px;
        color: white;
        font-size: 17px;
        text-transform: uppercase;

    }
    #ui{
        margin-top:-89px;
    }
   
</style>

<body>
    <div id="main">
        <h2>ZARIYA</h2>
        <p>A place from where you get your desired job </p>
        <span>Phone: +92-33404230123</span>
        <span id="eml">email:zariya@gmail.com</span>
       
        <h2>APPLICANT REGISTRATION FORM</h2>
        <br>

        <div id="forma">
            <div id="pinfo">
                <h3>PERSONAL INFORMATION</h3>
            </div>

            <form method="POST" action="addapp.php">
                <div id="div1">
                    <table>                    
                        <tr >
                            <th> Name</th>
                        </tr>
                        
                        <tr colspan="2">
                            <th>Gender</th>
                        </tr>
                        <tr>
                            <th>Date Of Birth</th>
                        </tr>
                       
                        <tr>
                            <th>Province</th>
                        </tr>

                        <tr>
                            <th>City</th>
                        </tr>
                        <tr>
                            <th>CNIC</th>
                        </tr>
                     
                        <tr>
                            <th>Email Id</th>
                        </tr>
                        <tr>
                            <th>Contact Number</th>
                        </tr>
                        
                        <tr>
                            <th>Username</th>
                        </tr>
                        <tr>
                            <th>Password</th>
                        </tr>
                     
                    </table>
                </div>
                <div id="div2">
                    <table>
                       
                        <tr>
                            <td><input type="text" name="lname"></td>
                        </tr>
                        <tr colspan="2">
                            <td>
                                <div id="rad"><input type="radio" name="gen" value="Male">Male
                                    <input type="radio" name="gen" value="Female">Female
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="date" name="dob"></td>
                        </tr>
                       
                        <tr >
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
                           
                        <tr >
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
                        <br>
                        <tr>
                            <td><input type="text"  name="nic"></td>
                        </tr>
                        <tr>
                            <td><input type="email" name="eml"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="con"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="uname"></td>
                        </tr>                    
                        <tr>
                            <td><input type="password" name="psw"></td>
                        </tr>
                       
                    </table>
                </div>
                <br>
                <div id="pinfo">
                    <h3>EDUCATIONAL BACKGROUND</h3>
                    </div>
                    <div id="div3">
                        <table >
                            <tr>
                                <th>Last Qualification</th>
                            </tr>
                           
                            <tr>
                                <th>Upload Document </th>
                            </tr>
                            <tr>
                                <th>Upload resume</th>
                            </tr>
                            
                        </table>
                    </div>
                    <div id="div4">
                        <table cellpadding="4.6px" cellspacing="2.8px">
                           
                            <tr>
                                <td>
                                    <input type="text" name="edu">
                                </td>
                            </tr>
                            
                            <tr>
                                <td><input type="file" name="deg" id="deg"></td>
                            </tr>

                            <tr>
                                <td><input type="file" name="res" id="res"></td>
                            </tr>
                            
                        </table>
                    </div>
                    <br>
                    <div id="pinfo">
                        <h3>JOB RELATED INFORMATION</h3>
                        </div>
                        <div id="div5">
                            <table>
                                <tr colspan="2">
                                    <th>Past working experience</th>
                                </tr>
                                <tr>
                                    <th>Major Skills</th>
                                </tr>
                                <tr>
                                   <th> Position Sought</th>
                                </tr>
                                <tr>
                                    <th>Projects</th>
                                 </tr>
                               

                            </table>
                        </div>

                        <div id="div6">
                            <table cellpadding="2px" cellspacing="2px">
                            <tr colspan="2">
                            <td>
                                <input type="text" name="working">
                            </td>
                        </tr>
                               
                                <tr>
                                    <td><input type="text" name="skl"></td>
                                </tr>
                                <tr colspan="2">
                                    <td>
                                        <div id="rad"><input type="checkbox" name="post">Manager&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" name="post" value="Assistant">Assistant&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" name="post" value="Trainee">Trainee&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" name="post" value="MD">MD&nbsp;&nbsp;&nbsp;

                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="proj"></td>
                                </tr>
                              
                            </table>
                        </div>
                        <br>
                        <input type="submit"  name="submit" value="submit">



                    

      

        </form>
    </div>

 
  

</body>

</html>
