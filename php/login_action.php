<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login-action</title>
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

session_start();
$email=$_POST['email'];
$psw=$_POST['psw'];
$_SESSION['email']=$email;
/*connection establish*/
$con=mysqli_connect("localhost","root","","book store");
/*creating query*/
$q=mysqli_query($con,"select * from user");
/*storing the value of table in row*/
$c=0;
while($row=mysqli_fetch_array($q))
{
	/*condition for checking name and password*/
	if( $email == $row[1] && $psw == $row[4] )
	{
		  $c++;
	}
	
 }
 if($c>=1)
 {
 $_SESSION['email']=$email;
 	echo "<meta http-equiv=refresh content='1; url=http://localhost/e-shop updated/indexphp.php'></meta>";
}
else
	{	
		 $_SESSION['email']=NULL;
	   echo "<meta http-equiv=refresh content='1; url=http://localhost/e-shop updated/login1.2.html'></meta>";

	}
?>
</body>
</html>
	