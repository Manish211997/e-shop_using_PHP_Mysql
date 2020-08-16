<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>form</title>
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #F8694A;
  width: 80px;
  height: 80px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>

<body>
<?php
echo "<div align='center' style='padding:18%'><div class='loader'></div></div>";
$name=$_POST['firstname']." ".$_POST['surname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$psw=$_POST['psw'];
$dob=$_POST['dob'];
$con=mysqli_connect("localhost","root","","book store");
$r=mysqli_query($con,"insert into user values('$name','$email','$phone','$gender','$psw','$dob')");
if($r)
{
echo "<script>alert('Account created');</script>";
echo "<meta http-equiv=refresh content='1;url=http://localhost/e-shop updated/login.html'></meta>";
}
else
echo "<script>alert('Problem occured');</script>";
?>
</body>
</html>
