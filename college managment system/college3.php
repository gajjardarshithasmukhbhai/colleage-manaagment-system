<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>colleage managment system</title>
    <style type="text/css">
        #myid
        {
            background-color: #4176AF;
            width:100%;
            height:90px;
        }
        #gajjar {
            width: 25%;
            height: 1280px;
            background-color: #8E8E8E;
            position: absolute;
            right: 10px;
            top: 70px;
        }
        .ggf {
            font-size: 190%;
            font-style: italic;
            color: black;
            font-weight: 800;
        }
        .hh
        {
            font-size: 190%;
            font-family: "Arial Narrow";
            color: black;
            font-weight: 800;
        }
        div
        {
            width:28px;
            height:5px;
            background-color: black;
            margin: 13px 0;

        }


        ul li a
        {
            color: red;
            font-weight: bold;
            font-size: 170%;
            text-decoration: none;

        }

        ul {
            margin: 0px;
            padding: 0px;
        }
        ul li
        {
            float: left;
            background-color: #2B2C2D;
            height: 50px;
            width: 190px;
            line-height: 400%;
            font-size:80%;


        }
        ul li a:hover
        {
            background-color: #00bcd4;
        }
        ul  li  ul  li
        {
            display: none;
        }
        ul li ul li ul li ul li{
            display: none;
        }
        ul li:hover ul li
        {
            display: table;
        }
        #dfg
        {
            width: 99%;
            height: 72px;
            background-color: #e91e63;
            position:absolute;
            top:100px;
            right: 0px;
            left: 3px;
        }
        #ss
        {
            background-color: #9AC9D8;
            width:100%;
            height:120px;
        }
        .ll{background-color: black;}
        .ll:hover{background-color: red;}
        #sg{
        .ll{background-color: black;}
        .ll:hover{background-color: red;}
        }
        .ggh
        {
            width: 4%;
            height: 71px;
            background-color: #9c27b0;
        }
        .ggh:hover
        {
            width: 4%;
            height: 71px;
            background-color:greenyellow;
        }
        .WORD{font-weight: bolder;font-size: medium;}
        .dashboard
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
        }
        .dashboard:hover
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
            color: #e91e63;
        }
        .user
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
        }
        .user:hover
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
            color: #e91e63;
        }
        .manage
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
        }
        .manage:hover
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
            color: #e91e63;
        }
        .student
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
        }
        .student:hover
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
            color: #e91e63;
            font-style: normal;
        }
        .course
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
        }
        .course:hover
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
            color: #e91e63;
        }
        .fee
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
        }
        .fee:hover
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
            color: #e91e63;
        }
        .subject
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
        }
        .subject:hover
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
            color: #e91e63;
        }
        .sendmail
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;
        }
        .sendmail:hover
        {
            font-size: 100%;
            font-weight: bolder;
            color: #e91e63;
        }
        .studentreport
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;

        }
        .studentreport:hover
        {
            font-size: 100%;
            font-weight: bolder;
            font-family: bold;

            color: #e91e63;
        }
        .pp
        {
            position: absolute;
            length:top: opx;
        }
        img
        {
            margin:2px auto;
            display: block;
            border: solid;
        }
        .img:hover
        {
            background-color: #00FF00;
            border-color: red;
            width: 105;
            height: 103;
        }
        .admin
        {
            margin:2px auto;
            display: block;
        }
        .ff {
            align-content: center;
        }

        .cv
        {
            font-style: italic;
            font-size: medium;
            font-weight: 800;
            color: red;
            font-size: 150%;
            position: absolute;
            top: 350px;
            left: 180px;

        }
        .cv:hover
        {
            font-style: normal;
            color: #202050;

        }
        .img1
        {
            margin:2px auto;
            display: block;
            border: solid;
            position: absolute;
            top:260px;
            left:180px;
        }
        .img1:hover
        {
            background-color: #00FF00;
            border-color: red;
            width: 105;
            height: 103;
        }
        .gmail
        {
            position: absolute;
            margin:2px auto;
            display: block;
            border: solid;
            top: 195px;
            left:280px;
        }
        .gmail:hover
        {
            background-color: #00FF00;
            border-color: red;
            width: 105;
            height: 103;

        }
        .cv2
        {
            position: absolute;
            margin:2px auto;
            top: 320px;
            left:280px;
            font-size: medium;
            font-weight: 800;
            color: red;
            font-size: 150%;
            font-style: italic;
            text-decoration: underline;
            text-decoration-color: #202050;
        }
        .cv2:hover
        {
            font-style: normal;
            color: #202050;

        }
        .img2
        {
            margin:2px auto;
            display: block;
            border: solid;
            position: absolute;
            top:260px;
            left:570px;
        }
        .img2:hover
        {
            background-color: #00FF00;
            border-color: red;
            width: 105;
            height: 103;
        }
        .cv3
        {
            font-style: italic;
            font-size: medium;
            font-weight: 800;
            color: red;
            font-size: 150%;
            position: absolute;
            top: 350px;
            left: 540px;
        }
        .cv3:hover
        {
            font-style: normal;
            color: #202050;
        }
        .text1
        {
            width: 20%;
            position: absolute;
            top: 120px;
            left: 0px;

        }
        .name1
        {
            position: absolute;
            position: absolute;
            top: 80px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .name2
        {
            position: absolute;
            position: absolute;
            top: 80px;
            left: 300px;
            color: black;
            font-weight: 800;
        }
        .text2
        {
            width: 20%;
            position: absolute;
            top: 120px;
            left: 300px;
        }
        .name3
        {
            position: absolute;
            position: absolute;
            top: 80px;
            left: 600px;
            color: black;
            font-weight: 800;
        }
        .text3
        {
            width: 20%;
            position: absolute;
            top: 120px;
            left: 600px;
        }
        .name4
        {
            position: absolute;
            top: 160px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .text4
        {
            position: absolute;
            top: 200px;
            left: 0px;
            color: black;
        }
        .name5
        {
            position: absolute;
            top: 240px;
            left: 0px;
            color: black;
            font-weight: 800;

        }
        .text5
        {
            position: absolute;
            top: 280px;
            left: 0px;
            color: black;

        }
        .name6{
            position: absolute;
            top: 320px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .text6
                 {
                     position: absolute;
                     top: 360px;
                     left: 0px;
                     color: black;

                 }
        .name7
        {
            position: absolute;
            top: 400px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .text7
        {
            position: absolute;
            top: 440px;
            left: 0px;
            color: black;
        }
        .name8
        {
            position: absolute;
            top: 480px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .text8
        {
            position: absolute;
            top: 520px;
            left: 0px;
            color: black;

        }
        .name9
        {
            position: absolute;
            top: 560px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .text9
        {
            position: absolute;
            top: 600px;
            left: 0px;
            color: black;

        }
        .name10
        {
            position: absolute;
            top: 640px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .text10
        {
            position: absolute;
            top: 680px;
            left: 0px;
            color: black;

        }
        .name11
        {
            position: absolute;
            top: 720px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .text11
        {
            position: absolute;
            top: 760px;
            left: 0px;
            color: black;

        }
        .name12
        {
            position: absolute;
            top: 800px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .text12
        {
            position: absolute;
            top: 840px;
            left: 0px;
            color: black;

        }
        .name13
        {
            position: absolute;
            top: 880px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .text13
        {
            position: absolute;
            top: 920px;
            left: 0px;
            color: black;

        }
        .name14
        {
            position: absolute;
            top: 960px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .text14
        {
            position: absolute;
            top: 1000px;
            left: 0px;
            color: black;

        }
        .name15
        {
            position: absolute;
            top: 1040px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .text15
        {
            position: absolute;
            top: 1080px;
            left: 0px;
            color: black;

        }
        .name16
        {
            position: absolute;
            top: 1120px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .text16
        {
            position: absolute;
            top: 1160px;
            left: 0px;
            color: black;
        }
        .name17
        {
            position: absolute;
            top: 1200px;
            left: 0px;
            color: black;
            font-weight: 800;
        }
        .text17
        {
            position: absolute;
            top: 1240px;
            left: 0px;
            color: black;
        }
        .
        .btndanger
        {
            background-color: red;
        }
        .btn {
            border: none;
            color: green;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
        }
        .danger {background-color: red; position: absolute;
        top: 1280px;} /* Red */
        .danger:hover {background: bisque ;}
        .danger2 {background-color: #9c27b0; position: absolute;
            top: 1280px; left: 170px} /* Red */
        .danger2:hover {background: bisque ; background-color: #00FF00}
    </style>
</head>
<body bgcolor="#deb887">
<form action="colleage3 control.php" method="post">
<div id="myid">
    <h1 align="center">colleage managment system </h1>
</div>
<script>
    function ff()
    {
        window.location="logout1.html";
    }
</script>
<div id="dfg">
    <button type="button" class="ggh" onclick="ff()" ><div ></div>
        <div  ></div>
        <div ></div></button>
<table>
    <p class="name1">Name</p>
    <input type="text" class="text1" placeholder="First Name" align="left"  name="name" required/>
    <p class="name2">middel Name</p>
    <input type="text" class="text2" placeholder="middel Name" align="left" name="middelname" required/>
    <p class="name3">last Name</p>
    <input type="text" class="text3" placeholder="last Name" align="left" name="lastname" required/>
    <p class="name4">father name</p>
    <input type="text" class="text4" placeholder="father Name" align="left" name="fathername" required/>
    <p class="name5">mother Name</p>
    <input type="text" class="text5" placeholder="mother Name" align="left"  name="mothername" required/>
    <p class="name6">date of birth</p>
    <input type="text" class="text6" placeholder="date of birth" align="left" name="datebirth"required/>
    <p class="name7">percentage of HS</p>
    <input type="text" class="text7" placeholder="percentge of the HS" align="left" name="percentagehs" required/>
    <p class="name8">percentage of inter.</p>
    <input type="text" class="text8" placeholder="percentage of inter." align="left" name="percentageinter" required/>
    <p class="name9">CGPA</p>
     <input type="text" class="text9" placeholder="CGPA" align="left" name="cgpa" required/>
    <p class="name11">password</p>
    <input type="password" class="text11" placeholder="PASSWORD" align="left" name="password" required/>
    <p class="name12">adress 1</p>
    <input type="text" class="text12" placeholder="ADRESS1" align="left" name="adress1" required/>
    <p class="name13">adress 2</p>
    <input type="text" class="text13" placeholder="ADRESS2" align="left" name="adress2" required/>
    <p class="name14">city</p>
    <SELECT class="text14" name="city">
        <option class="">Ahemedabad</option>
        <OPTION class="text14">Surat</OPTION>
        <OPTION class="text14">bhavnagar</OPTION>
        <OPTION class="text14">suredranagar</OPTION>
        <OPTION class="text14">Kadi</OPTION>
        <OPTION class="text14">limadi</OPTION>
        <OPTION class="text14">mumbai</OPTION>
        <OPTION class="text14">delhi</OPTION>
        <OPTION class="text14">banglore</OPTION>
        <OPTION class="text14">goregav</OPTION>
        <OPTION class="text14">gadhinagar</OPTION>
        <OPTION class="text14">mehsana</OPTION>
        <OPTION class="text14">chennai</OPTION>
    </SELECT>
    <p class="name15">state</p>
    <SELECT class="text15" name="state">
        <OPTION class="text15">Gujrat</OPTION>
        <OPTION class="text15">karnatak</OPTION>
        <OPTION class="text15">orrisa</OPTION>
        <OPTION class="text15">bihar</OPTION>
        <OPTION class="text15">uttar pradesh</OPTION>
        <OPTION class="text15">adhra pradesh</OPTION>
        <OPTION class="text15">bhopal</OPTION>
    </SELECT>
        <p class="name16">country</p>
    <select class="text16" name="country">
        <option>India</option>
        <option>USA</option>
        <option>ENGLAND</option>
        <option>south africa</option>
        <option>span</option>
        <option>bhopal</option>
        <option>china</option>
    </select>
    <p class="name17">Pincode</p>
    <input type="text" class="text17" placeholder="pin_code" align="left" name="pincode" required/>
     <button type="submit" class="btn danger" value="value"/>submit</button>
     <button type="reset"  class="btn danger2" >Cancel</button>
	 <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
</script><!----//the work will bi empty of the button---->
    <div id="gajjar">
        <br/>
        <br>
        <a href="#"> <p class="dashboard" align="center">@DASHBOARD</p></a>
        <br/>
        <br/>
        <a href="colleage"> <p class="user" align="center">^user registration</p></a>
        <br/>
        <br/>
        <a href="#"> <p class="manage" align="center">!manage user</p></a>
        <br/>
        <br/>
        <a href="#"> <p class="student" align="center">$student fee deposit</p></a>
        <br/>
        <br/>
        <a href="#"> <p class="course" align="center">&manage the course name</p></a>
        <br/>
        <br/>
        <a href="#"> <p class="fee" align="center">#manage the colleage fee</p></a>
        <br/>
        <br/>
        <a href="#"> <p class="fee" align="center" >Émange the subject</p></a>
        <br/>
        <br/>
        <a href="#"> <p class="subject" align="center">?send mail</p></a>
        <br/>
        <br/>
        <a href="#"> <p class="sendmail" align="center">::student report</p></a>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="90" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
        <br/>
        <br/>
       </div>
</table>
</form>
</body>
</html>