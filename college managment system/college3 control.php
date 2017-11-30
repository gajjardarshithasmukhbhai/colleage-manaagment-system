<?php
$name=$_POST['name'];
$middelname=$_POST['middelname'];
$lastname=$_POST['lastname'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$date=$_POST['datebirth'];
$percentagehs=$_POST['percentagehs'];
$percentageinter=$_POST['percentageinter'];
$cgpa=$_POST['cgpa'];
$password=$_POST['password'];
$adress1=$_POST['adress1'];
$adress2=$_POST['adress2'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$pincode=$_POST['pincode'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dos');

$q="INSERT INTO colleage3(name,middel_name,last_name,father_name,mother_name,date_birth,percentage_hs,percentage_int,cgpa,password,adress1,adress2,city,state,country,pincode) VALUES('$name','$middelname','$lastname','$fathername','$mothername',$date,$percentagehs,$percentageinter,$cgpa,$password,'$adress1','$adress2','$city','$state','$country',$pincode)";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<html>
<head>
<style type="text/css">
.ss
{
	color:red*green;
}
</style>
</head>
<body>
<h1 class="ss">you data is successfully registration gajjar darshit system</h1>
</body>
</html>