<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="refresh" content="1; url=indexphp.php" />
<title></title>
</head>

<body>
<?php

$fn=$_REQUEST['firstname'];
$ln=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$country=$_REQUEST['country'];
$zip=$_REQUEST['zip-code'];
$phone=$_REQUEST['tel'];
$con=mysqli_connect("localhost","root","","book store");
$q=mysqli_query($con,"insert into order values('$fn','$ln','$email','$address','$city','$country','$zip','$phone')");
#$q2=mysqli_query($con,"select * from order");
#$res=mysqli_fetch_array($q2);
#echo $res[1];

?>
<script>alert("Thanks for shopping");</script>
</body>
</html>
