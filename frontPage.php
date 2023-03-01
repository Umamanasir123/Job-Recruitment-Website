<?php
$conn=mysqli_connect("localhost","root","");
$dbconn=mysqli_select_db($conn,"jobrecruitment");
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

        header {
            width: 99.8%;
            height: 85px;
            display: flex;
            align-items: center;
            position: sticky;
            top: 1px;
            background-color: thistle;
            z-index: 3;
        }

        header img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
        }

        #floatRight {
            width: 30%;
            text-align: right;
        }

        #floatRight button {
            width: 100px;
            height: 40px;
            background-color: turquoise;
            color: white;
            border-radius: 20px;
            font-weight: bold;
            font-size: 15px;
        }

        button:hover {
            cursor: pointer;
        }

        #headCenter {
            width: 55%;
            text-align: center;
        }

        #headCenter a {
            margin-left: 35px;

        }

        a {
            text-decoration: none;
            color: black;
            font-size: 20px;
        }

        #mainImage img {
            width: 100%;
            height: 500px;

        }

        #imageDiv {
            width: 50%;
        }

        #imageDiv img {
            width: 100%;
            height: 100%;
        }

        #textDiv {
            text-align: center;
            line-height: 1.9em;
            width: 50%;

        }

        #about {
            width: 80%;
            margin: auto;
            margin-top: 80px;
            display: flex;
        }

        #services h1 {
            width: 40%;
        }

        #services {
            display: flex;
            justify-items: center;
            align-items: center;
            width: 80%;
            margin: auto;
            text-align: center;
            margin-top: 90px;

        }

        #services table {
            width: 50%;
        }

        #services td {
            border: 2px solid black;
            text-align: center;
            height: 200px;
        }

        #services td p {
            display: none;
            margin-top: 4px;
            font-size: 20px;
            font-weight: bold;
            line-height: 1.3;
            margin-top: 20px;
        }

        #services img {
            width: 70px;
        }

        #services td h3 {
            margin-top: 160px;
            background-color: grey;
            height: 40px;
            opacity: 0.8;
            z-index: 1;
        }

        #imagesFooter {
            text-align: center;
            background-color: black;
            color: white;
        }

        #imagesFooter img {
            margin-top: 5px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-left: 20px;
        }

        #cpFooter {
            background-color: lightcoral;
            text-align: center;
            font-size: 20px;
            height: 40px;
            font-weight: bold;
        }

        .divMessage {
            background: url("messageBox.png") no-repeat center/cover;
            width: 410px;
            height: 360px;
            margin: auto;
            position: relative;
            top: -220px;
            padding: 25px;

        }

        .divMessage p {
            margin-top: -30px;
            font-weight: bold;
        }

        .achiev {
            padding-top:7px;
            text-align: center;
            background-color: turquoise;
            width: 470px;
            height: 600px;
            margin:12px;

        }

        .achiev>p {
            font-size: 24px;
        }

        .divMessage img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 7px solid white;
            position: relative;
            top: -70px;
            box-shadow: 4px 4px 2px grey;
        }

        .divPicture {
            width: 100%;
            height: 150px;
            background-color: white;
            margin-top: 150px;
        }

        .name {
            position: relative;
            top: 150px;
            background-color: white;
            height: 30px;
            width: 200px;
            margin: auto;
            border-radius: 15px;
            box-shadow: 2px 2px 2px grey;
        }

        #contactUs {
            text-align: center;
            margin-bottom: 10px;
            background-color: rgb(247, 243, 243);

        }

        #contactUs>p {
            color: grey;
        }

        #mainDivs {
            width: 60%;
            height: 500px;
            border: 1px solid salmon;
            margin: auto;
            display: flex;
            background-color: white;
            margin-top: 15px;
        }

        #div1>p {
            margin-top: 15px;
        }

        #div1 {
            width: 40%;
            border: 1px solid salmon;
            background: url("contactbg.jpg") no-repeat center/cover;
            color: white;
            text-align: left;
            padding: 30px;
        }
        #div2{
            background:url("contactus.gif") no-repeat center/cover;
        }
        table {

            text-align: left;
            width: 90%;
            margin: auto;
            margin-top: 100px;
        }

        table input {
            border: none;
            border-bottom: 1px solid grey;
        }

        #div2 {
            width: 60%;
            border: 1px solid salmon;
        }

        table img {
            width: 30px;
            height: 30px;
        }

        table button {
            width: 100px;
            height: 30px;
            background-color: blueviolet;
            color: white;
            font-weight: bold;
            font-size: 15px;
        }

        #achievements>div {
            display: inline-block;
        }

        #recruitOptions a {
            background-color: thistle;
            color: white;
            width: 100px;
            height: 30px;
            border-radius: 20%;
            margin-top: 10px;
        }

        #recruitOptions {
            background-color: thistle;
            display: inline-block;
            position: absolute;
            right: 110px;
            top: 80px;
            display: none;
            padding: 10px;
        }
        #floatRight a{
            color:white;
            font-weight:bold;
            font-size:15px;
        }
    </style>
</head>

<body>

    <div id="recruitOptions">
        <a href="applicant.php">APPLICANT</a> <br>
        <a href="recruiter.php">RECRUITER</a>
    </div>
    <div id="mainDiv">
        <header>
            <img src="image/zariya.jpg" alt="#">
            <h1>ZARIYA</h1>
            <div id="headCenter">
                <a href="#about">About Us</a>
                <a href="#services">Services</a>
                <a href="#achievements">Achievements</a>
                <a href="#contactUs">Contact Us</a>
            </div>
            <div id="floatRight">
                <button onclick="showsdiv()">REGISTER</button>
                <button><a href="loginpg.php">LOG IN</a></button>
            </div>
        </header>
        <div id="mainImage">
            <img src="image/image/mainbg.jpg" alt="#">
        </div>
        <div id="about">
            <div id="imageDiv">
                <img src="image/aboutUs.jpg" alt="">
            </div>
            <div id="textDiv">
                <h1>ABOUT US</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam neque tempore harum, itaque dolorum rem
                    ea quaerat, fugit ratione nihil sit consequuntur tempora, corrupti laborum illo possimus explicabo!
                    Blanditiis possimus ea pariatur, expedita doloribus neque aperiam eaque qui ullam est fuga harum
                    nisi corporis consequatur, magnam hic sit quo? Deserunt, quibusdam! Nisi, eaque! Laboriosam,
                    deserunt? Debitis repudiandae, eius eveniet, harum sit molestias animi, eligendi quasi aliquam error
                    soluta cupiditate necessitatibus! At voluptatibus aliquid beatae architecto autem, obcaecati amet
                    porro, modi nemo dignissimos voluptates ea pariatur eius exercitationem, quae nisi. Impedit
                    inventore placeat repellendus accusantium doloremque, eligendi id sint voluptas nisi veritatis. Eius
                    fuga quaerat id adipisci optio laborum vel, quas numquam rem, quis tenetur magni dolorum quasi
                    labore quam pariatur aspernatur nemo molestiae, iste modi praesentium corrupti unde assumenda.
                    Voluptates architecto sapiente officiis amet consequatur? Iste corrupti nam consequuntur facere
                    dignissimos blanditiis, at porro tempore aut reiciendis ad veritatis! Sunt repellat obcaecati totam.
                </p>
            </div>
        </div>
        <div id="services">
            <h1>SERVICES</h1>
            <table>
                <tr>
                    <td onmouseover="displayText()" onmouseleave="hideText()"
                        style="background:url(recruitment.jpg) no-repeat center/cover">
                        <p id="service1">Getting a job is now <br>on your finger tips. It is simple <br> as never
                            imagined of. </p>
                        <h3>Easier Recruitment</h3>
                    </td>
                    <td onmouseover="displayText1()" onmouseleave="hideText1()"
                        style="background:url(response.jpg) no-repeat center/cover">
                        <p id="service2">Response to your job<br> requests is guaranteed <br>within 24 hours</p>
                        <h3>Quick Response</h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" onmouseover="displayText2()" onmouseleave="hideText2()"
                        style="background:url(security.jpg) no-repeat center/cover;text-align: center;">
                        <p id="service3">Protection of your personal information is now <br>our duty. Not only this but
                            the authenticity of the <br>jobs and even recruiters is ensured.</p>
                        <h3>Security</h3>
                    </td>
                </tr>
                <tr>
                    <td onmouseover="displayText3()" onmouseleave="hideText3()"
                        style="background:url(infoAccess.png) no-repeat center/cover">
                        <p id="service4">Enabling recruiters to aquire<br> paperless environment where every <br>minor
                            details <br>of the applicant is <br>easily available through digital means.</p>
                        <h3>Easier Information Access</h3>
                    </td>
                    <td onmouseover="displayText4()" onmouseleave="hideText4()"
                        style="background:url(competition.png) no-repeat center/cover">
                        <p id="service5">Recruiter has sufficient options <br>to find the best of candidates <br>for the
                            post.</p>
                        <h3>Competitive Candidates</h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" onmouseover="displayText5()" onmouseleave="hideText5()"
                        style="background:url(interaction.png) no-repeat center/cover;text-align: center;">
                        <p id="service6">Neither applicant nor recruiter get to physically ineract <br>with each other
                            as they communicate over the website.</p>
                        <h3>Minimum Physical Interaction</h3>
                    </td>
                </tr>
            </table>
        </div>

        <div id="achievements" style="margin-top:50px;">
        <h1 style="text-align:center">Our Success Stories</h1>
            <div class="achiev">
                <p><i>What Our Clients Say About Us...</i></p>
                <div class="divPicture">
                </div>
                <div class="divMessage">
                    <img src="image/mainbg.jpg" alt="">
                    <p>A person graduated with 1st class and not getting a job is such a painful thing i have been
                        through.
                        I was not able to get a job due to the cliche procedures of our country and that also includes
                        sources so i wanted a platform that could help me find a job easily and to my surprise Zariya
                        helped
                        me getting a job of my own choice within a week.</p>
                    <div class="name">
                        <h3>Fariha Waheed</h3>
                    </div>
                </div>
            </div>
            <div class="achiev">
                <p><i>What Our Clients Say About Us...</i></p>
                <div class="divPicture">
                </div>
                <div class="divMessage">
                    <img src="image/mainbg.jpg" alt="">
                    <p>A person graduated with 1st class and not getting a job is such a painful thing i have been
                        through.
                        I was not able to get a job due to the cliche procedures of our country and that also includes
                        sources so i wanted a platform that could help me find a job easily and to my surprise Zariya
                        helped
                        me getting a job of my own choice within a week.</p>
                    <div class="name">
                        <h3>Faqiha Hakeem</h3>
                    </div>
                </div>
            </div>
            <div class="achiev">
                <p><i>What Our Clients Say About Us...</i></p>
                <div class="divPicture">
                </div>
                <div class="divMessage">
                    <img src="image/mainbg.jpg" alt="">
                    <p>A person graduated with 1st class and not getting a job is such a painful thing i have been
                        through.
                        I was not able to get a job due to the cliche procedures of our country and that also includes
                        sources so i wanted a platform that could help me find a job easily and to my surprise Zariya
                        helped
                        me getting a job of my own choice within a week.</p>
                    <div class="name">
                        <h3>Majid Jameel</h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="contactUs">
            <h1>Contact Us</h1>
            <p>Any questions or remarks? Just write us a message!</p>
            <div id="mainDivs">
                <div id="div1">
                    <h2>Contact Information</h2>
                    <p>Fill up the form and our Team will get back to you within 24 hours.</p>
                    <div id="divim">
                        <table cellpadding="10px">
                            <tr>
                                <td><img src="image/phone.jpg" alt="#"></td>
                                <td> +9233422-36178</td>
                            </tr>
                            <tr>
                                <td><img src="image/mess.png" alt="#" style="border-radius:50%"></td>
                                <td>zariya@gmail.com</td>
                            </tr>
                            <tr>
                                <td><img src="image/address.png" alt=""></td>
                                <td>clifton road, karachi</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="div2">
                    
                </div>
            </div>
        </div>

        <footer>
            <div id="imagesFooter">
                <a href="https://facebook.com" target="none"><img src="image/facebook.png" alt="facebook"></a>
                <a href="https://twitter.com" target="none"><img src="image/twitter.png" alt="facebook"></a>
                <a href="https://linkedin.com" target="none"><img src="image/linkedin.png" alt="facebook"></a>
                <a href="https://instagram.com" target="none"><img src="image/insta.png" alt="facebook"></a>
            </div>
            <div id="cpFooter">Copyright &copy;All Rights Reserved</div>
        </footer>
        <script>
            let text1 = document.getElementById("service1");
            function displayText() {
                text1.style.display = "block";
            }
            function hideText() {
                text1.style.display = "none";

            }
            let text2 = document.getElementById("service2");
            function displayText1() {
                text2.style.display = "block";
            }
            function hideText1() {
                text2.style.display = "none";

            }
            let text3 = document.getElementById("service3");
            function displayText2() {
                text3.style.display = "block";
            }
            function hideText2() {
                text3.style.display = "none";

            }
            let text4 = document.getElementById("service4");
            function displayText3() {
                text4.style.display = "block";
            }
            function hideText3() {
                text4.style.display = "none";

            }
            let text5 = document.getElementById("service5");
            function displayText4() {
                text5.style.display = "block";
            }
            function hideText4() {
                text5.style.display = "none";

            }
            let text6 = document.getElementById("service6");
            function displayText5() {
                text6.style.display = "block";
            }
            function hideText5() {
                text6.style.display = "none";

            }
            let coun = 0;
            function showsdiv() {
                let divshow = document.getElementById("recruitOptions");
                if (coun == 0) {
                    divshow.style.display = "inline-block";
                    coun = 1;
                }
                else {
                    divshow.style.display = "none";
                    coun = 0;
                }

            }
        </script>
</body>

</html>