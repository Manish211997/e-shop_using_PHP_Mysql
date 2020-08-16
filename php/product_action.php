<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Product_action</title>
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
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$rate=$_REQUEST['rate'];
$author=$_REQUEST['author'];
$category=$_REQUEST['category'];
$quantity=$_REQUEST['bookquantity'];
$con=mysqli_connect("localhost","root","","book store");
$q=mysqli_query($con,"insert into product values('$id','$name','$rate','$author','$category','$quantity')");
if($q)
{
	echo "<script>alert('details inserted')</script>";
    echo "<meta http-equiv=refresh content='1;url=http://localhost/e-shop updated/admin.html'></meta>";
	move_uploaded_file($_FILES['image']['tmp_name'],"product_image\\".$_FILES['image']['name']);

}
else
{
	echo "<script>alert('Problem occured !')</script><script>alert('Renter details')</script>";
	echo "<meta http-equiv=refresh content='1;url=http://localhost/project/e-shop updated/admin.html'></meta>";
}
$q1=mysqli_query($con,"select * from category");
$count=0;
while($res=mysqli_fetch_array($q1))
{
	if($res[0]==$category)
		{
		$count++;
		}
}
if($count==0)
{
	mysqli_query($con,"insert into category values('$category')");
}
?>	
</body>
</html>
