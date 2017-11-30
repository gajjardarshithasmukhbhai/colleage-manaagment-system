<?php
$present=$_POST['gajjar'];
$year=$_POST['year'];
$day=$_POST['day'];
$date=$_POST['date'];

$present1=$_POST['gajjar1'];
$year1=$_POST['year1'];
$day1=$_POST['day1'];
$date1=$_POST['date1'];

$present2=$_POST['gajjar2'];
$year2=$_POST['year2'];
$day2=$_POST['day2'];
$date2=$_POST['date2'];

$present3=$_POST['gajjar3'];
$year3=$_POST['year3'];
$day3=$_POST['day3'];
$date3=$_POST['date3'];

$present4=$_POST['gajjar4'];
$year4=$_POST['year4'];
$day4=$_POST['day4'];
$date4=$_POST['date4'];

$present5=$_POST['gajjar5'];
$year5=$_POST['year5'];
$day5=$_POST['day5'];
$date5=$_POST['date5'];

$present6=$_POST['gajjar6'];
$year6=$_POST['year6'];
$day6=$_POST['day6'];
$date6=$_POST['date6'];

$present7=$_POST['gajjar7'];
$year7=$_POST['year7'];
$day7=$_POST['day7'];
$date7=$_POST['date7'];

$present8=$_POST['gajjar8'];
$year8=$_POST['year8'];
$day8=$_POST['day8'];
$date8=$_POST['date8'];

$present9=$_POST['gajjar9'];
$year9=$_POST['year9'];
$day9=$_POST['day9'];
$date9=$_POST['date9'];

$present10=$_POST['gajjar10'];
$year10=$_POST['year10'];
$day10=$_POST['day10'];
$date10=$_POST['date10'];

$present11=$_POST['gajjar11'];
$year11=$_POST['year11'];
$day11=$_POST['day11'];
$date11=$_POST['date11'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'dos');

$q="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present,'$year','$day','$date')";
$status=mysqli_query($con,$q);

$q1="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present1,'$year1','$day1','$date1')";
$status=mysqli_query($con,$q1);

$q2="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present2,'$year2','$day2','$date2')";
$status=mysqli_query($con,$q2);

$q3="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present3,'$year3','$day3','$date3')";
$status=mysqli_query($con,$q3);

$q4="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present4,'$year4','$day4','$date4')";
$status=mysqli_query($con,$q4);

$q5="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present5,'$year5','$day5','$date5')";
$status=mysqli_query($con,$q5);

$q6="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present6,'$year6','$day6','$date6')";
$status=mysqli_query($con,$q6);

$q7="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present7,'$year7','$day7','$date7')";
$status=mysqli_query($con,$q7);

$q8="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present8,'$year8','$day8','$date8')";
$status=mysqli_query($con,$q8);

$q9="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present9,'$year9','$day9','$date9')";
$status=mysqli_query($con,$q9);

$q10="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present10,'$year10','$day10','$date10')";
$status=mysqli_query($con,$q10);

$q11="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present11,'$year11','$day11','$date11')";
$status=mysqli_query($con,$q11);

$q12="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present12,'$year12','$day12','$date12')";
$status=mysqli_query($con,$q12);

$q13="INSERT INTO colleage1(present_student,year,day,date) VALUES ($present13,'$year13','$day13','$date13')";
$status=mysqli_query($con,$q13);

mysqli_close($con);
?>
<html>
<body>
<h1 align="center">successfully!registrate your data</h1>
</body>
</html>