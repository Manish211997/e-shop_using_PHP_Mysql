<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv=refresh content="1;url='http://localhost/e-shop updated/indexphp.php" />
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
<title></title>
</head>

<body>
<?php
echo "<div align='center' style='padding:18%'><div class='loader'></div></div>";
session_start();
$con=mysqli_connect("localhost","root","","book store");
$name=$_REQUEST['name'];
$rate=$_REQUEST['rate'];
if(isset($_SESSION['email']))
{
$email=$_SESSION['email'];
}
else
{
$email=NULL;
}
$query1=mysqli_query($con,"select total,count from items where Email='$email'");
$result=mysqli_fetch_array($query1);
$total=$result[0];
$count=$result[1];
$query=mysqli_query($con,"select * from cart where book_name='$name'");
$res=mysqli_fetch_array($query);
if(isset($email))
{
		if(!isset($res[0]))
		{			
			$q2=mysqli_query($con,"insert into cart values('$name','$rate','$email',1)");
			if($total==NULL and $count==NULL)
			{
			$total=$total+$rate;
			$count++;
			mysqli_query($con,"insert into items values('$email','$total','$count')");
			}
			else
			{
			$total=$total+$rate;
			$count++;
			mysqli_query($con,"update items set total='$total',count='$count' where Email='$email'");
			}
        }
		else
		{
		echo "<script>alert('already added to cart');</script>";
		}
}
else
{
		echo "<script>alert('login first')</script>";
}

?>

</body>
</html>
