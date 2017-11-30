<?php
$enrollement=$_POST['gajjar'];
$text=$_POST['text1'];
$comment=$_POST['dfgr'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'dos');

$q="INSERT INTO colleage2detin(enrollement_no,student_name,comment) VALUES ($enrollement,'$text','$comment')";
$v="select *from colleage2detin";
$status=mysqli_query($con,$q);
$status=mysqli_query($con,$v);
mysqli_close($con);
?>
<html>
<head>
</head>
<body>
<h1 align="center"> your data successfully registrate gajjar darshit system</h1>
</body>
</html>