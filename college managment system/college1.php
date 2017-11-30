<?php
$username=$_POST['username'];
$password=$_POST['password'];
$confirmation_password=$_POST['confirmation_password'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'dos');

$q="INSERT INTO colleage(user_name,password,confirmation_password) VALUES ('$username',$password,$confirmation_password)";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>
        colleage system
    </title>
<style type="text/css">
    #myid
    {
     background-color: #4176AF;
        width:100%;
        height:90px;
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
    #gajjar
    {
        width:25%;
        height: 940px;
        background-color: #8E8E8E;
       position: absolute;
        right: 10px;
        top: 185px;
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
ddd        font-size: 100%;
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
        font-size: medium;
        font-weight: 800;
        color: red;
        font-size: 150%;
        font-style: italic;
    }
    .cv:hover
    {
        font-style: normal;
        color: #202050;

    }
    .img1
    {
        position: absolute;
        margin:2px auto;
        display: block;
        border: solid;
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
    .gmail2
    {
        position: absolute;
        margin:2px auto;
        display: block;
        border: solid;
        top: 380px;
        left:280px;
    }
    .gmail2:hover
    {
        background-color: #00FF00;
        border-color: red;
        width: 105;
        height: 103;
    }
    .cv3
    {
        position: absolute;
        margin:2px auto;
        top: 497px;
        left:280px;
        font-size: medium;
        font-weight: 800;
        color: red;
        font-size: 150%;
        font-style: italic;
        text-decoration: underline;
        text-decoration-color: #202050;
    }
    .cv3:hover
    {

        font-style: normal;
        color: #202050;
    }
    .gmail3
    {

        position: absolute;
        margin:2px auto;
        display: block;
        border: solid;
        top: 550px;
        left:280px;
    }
    .gmail3:hover
    {
        background-color: #00FF00;
        border-color: red;
        width: 105;
        height: 103;
    }
    .cv4
    {
        position: absolute;
        margin:2px auto;
        top: 670px;
        left:280px;
        font-size: medium;
        font-weight: 800;
        color: red;
        font-size: 150%;
        font-style: italic;
        text-decoration: underline;
        text-decoration-color: #202050;
    }
    .cv4:hover
    {
        font-style: normal;
        color: #202050;
    }
.gmail4
{
    position: absolute;
    margin:2px auto;
    display: block;
    border: solid;
    top: 720px;
    left:280px;
}
    .gmail4:hover
    {
        background-color: #00FF00;
        border-color: red;
        width: 105;
        height: 103;
    }
    .cv5
    {
        position: absolute;
        margin:2px auto;
        top: 840px;
        left:280px;
        font-size: medium;
        font-weight: 800;
        color: red;
        font-size: 150%;
        font-style: italic;
        text-decoration: underline;
        text-decoration-color: #202050;
    }
    .cv5:hover
    {
        font-style: normal;
        color: #202050;
    }
.gmail5
{
    position: absolute;
    margin:2px auto;
    display: block;
    border: solid;
    top: 195px;
    left:630px;
}
    .gmail5:hover
    {
        background-color: #00FF00;
        border-color: red;
        width: 105;
        height: 103;
    }
    .cv6
    {
        position: absolute;
        margin:2px auto;
        top: 315px;
        left:630px;
        font-size: medium;
        font-weight: 800;
        color: red;
        font-size: 150%;
        font-style: italic;
        text-decoration: underline;
        text-decoration-color: #202050;
    }
    .cv6:hover
    {
        font-style: normal;
        color: #202050;

    }
    .gmail6
    {

        position: absolute;
        margin:2px auto;
        display: block;
        border: solid;
        top: 390px;
        left:630px;
    }
    .gmail6:hover
    {
        background-color: #00FF00;
        border-color: red;
        width: 105;
        height: 103;
    }
    .cv7
    {

        position: absolute;
        margin:2px auto;
        top: 500px;
        left:630px;
        font-size: medium;
        font-weight: 800;
        color: red;
        font-size: 150%;
        font-style: italic;
        text-decoration: underline;
        text-decoration-color: #202050;
    }
    .cv7:hover
    {
        font-style: normal;
        color: #202050;
    }
    .gmail7
    {
        position: absolute;
        margin:2px auto;
        display: block;
        border: solid;
        top: 560px;
        left:630px;
    }
    .gmail7:hover
    {
        background-color: #00FF00;
        border-color: red;
        width: 105;
        height: 103;
    }
    .cv8
    {
        position: absolute;
        margin:2px auto;
        top: 680px;
        left:630px;
        font-size: medium;
        font-weight: 800;
        color: red;
        font-size: 150%;
        font-style: italic;
        text-decoration: underline;
        text-decoration-color: #202050;
    }
    .cv8:hover
    {
        font-style: normal;
        color: #202050;

    }
	.gmail18
	{
		position: absolute;
        margin:2px auto;
        display: block;
        border: solid;
        top: 750px;
        left:630px;
	}
	.gmail18:hover
	{
		background-color: #00FF00;
        border-color: red;
        width: 105;
        height: 103;
	}
	.cv9
    {
        position: absolute;
        margin:2px auto;
        top: 870px;
        left:630px;
        font-size: medium;
        font-weight: 800;
        color: red;
        font-size: 150%;
        font-style: italic;
        text-decoration: underline;
        text-decoration-color: #202050;
    }
	.cv9:hover
    {
        font-style: normal;
        color: #202050;

    }
    
</style>
</head>
<body bgcolor="#deb887">
<div id="myid">
    <h1 align="center">colleage managment system </h1>
</div>
<script>
    function button()
    {
        window.location="logout.html";
    }
</script>
<div id="dfg">
  <button type="button" class="ggh" onclick="button()" ><div ></div>
    <div  ></div>
      <div ></div></button>
</div>
<br/>
<br/>
<br/>
<br/>
<img src="https://image.flaticon.com/icons/svg/167/167707.svg" width="100" height="100" alt="School free icon" title="School free icon" align="left" class="img" onclick="dar()">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<a href="colleage2.html" ><p class="cv">1)admission</p></a>

<img src="https://image.flaticon.com/icons/png/128/164/164955.png"   width="100" height="100" class="img1" >
<br/>
<br/>
<br/>
<br/>
<br/>
<a href="transport5.html" ><p class="cv">2)Transport</p></a>
<img src="https://image.flaticon.com/icons/png/128/295/295429.png" width="100" height="100" class="img1">
<br/>
<br/>
<br/>
<br/>
<br/>
<a href="colleage information.html" ><p class="cv">3)college information </p></a>
<img src="https://image.flaticon.com/icons/png/128/481/481994.png" width="100" height="100" class="img1">
<br/>
<br/>
<br/>
<br/>
<br/>
<a href="faculty performance.html" ><p class="cv">4)Faulty performance</p></a>
<script>
function gmail()
{
window.location="https://mail.google.com/mail/u/0/#sent?compose=new";
}
</script>
<img src="http://findicons.com/files/icons/1765/windows_icons_v2/128/gmail.png" width="100" height="100" class="gmail" onclick="gmail()">
<br/>
<br/>
<br/>
<br/>
<br/>
<a src="http://gmail.com" ><p class="cv2">5)send mail</p></a>
</br>
</br>
</br>
</br>
</br>
<img src="https://image.flaticon.com/icons/png/128/89/89243.png" width="100" height="100" class="gmail2" >
<a href="student store information.html" ><p class="cv3">6)student store information </p></a>
</br>
</br>
</br>
</br>
</br>
<img src="https://image.flaticon.com/icons/png/128/91/91108.png"  width="100" height="100" class="gmail3">
<a href="career%20informtion.html"><p class="cv4">7)career information </p></a>
<img src="https://image.flaticon.com/icons/png/128/199/199456.png" width="100" height="100" class="gmail4">
<a href="attendence7.php"><p class="cv5">8)Attendence </p></a>
<img src="https://image.flaticon.com/icons/png/128/254/254025.png" width="100" height="100" class="gmail5">
<a href="" ><p class="cv6">9)news about college </p></a>
<img src="https://image.flaticon.com/icons/png/128/158/158236.png" width="100" height="100" class="gmail6">
<a href="" ><p class="cv7">9)news paer </p></a>
<img src="https://image.flaticon.com/icons/png/128/218/218674.png" width="100" height="100" class="gmail7">
<a href=""><p class="cv8">10)Scolarship</p></a>
<img src="https://image.flaticon.com/icons/png/128/164/164338.png" width="100" height="100" class="gmail18">
<a href="detin list.php"><p class="cv9">11)detin list and unregular stu.</p></a>

<div id="gajjar">
<br/>
    <br>
    <a href="#"> <p class="dashboard" align="center">@DASHBOARD</p></a>
    <br/>
    <br/>
    <a href="#"> <p class="user" align="center">^user registration</p></a>
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
    <a href="#"> <p class="fee" align="center">#manage the college fee</p></a>
    <br/>
    <br/>
    <a href="#"> <p class="fee" align="center">Émange the subject</p></a>
    <br/>
    <br/>
    <a href="#"> <p class="subject" align="center">?send mail</p></a>
    <br/>
    <br/>
    <a href="#"> <p class="sendmail" align="center">::student report</p></a>
    <br/>
    <br/>
    <a href="#"> <p class="sendmail" align="center">::devloper information</p></a>
</div>
</body>
</html>