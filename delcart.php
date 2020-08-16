<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="1; url=cartpage.php" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
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
session_start();
echo "<div align='center' style='padding:18%'><div class='loader'>";
echo "</div>";
echo "</div>";
$con=mysqli_connect("localhost","root","","book store");
	$name=$_REQUEST['bname'];
	$email=$_SESSION['email'];
	$query3=mysqli_query($con,"select * from items where Email='$email'");
$result=mysqli_fetch_array($query3);
$total=$result[1];
$count=$result[2];
	$query2=mysqli_query($con,"delete from cart where book_name='$name'");
if($query2)
{
	$query1=mysqli_query($con,"select * from product where Name='$name'");
	while($row=mysqli_fetch_array($query1))
		{
		if($name==$row[1])
			{
				if($total==NULL and $count==NULL)
				{
				mysqli_query($con,"delete from items where Email='$email'");
			    }
				else
				{
				$total=$total-$row[2];
				$count=$count-1;
				$query4=mysqli_query($con,"update items set total='$total',count='$count' where Email='$email'");
			    }
		     }
	     }
}
?>
</body>
</html>