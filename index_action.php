<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>index_action</title>
</head>

<body style="padding:10%">
<?php
$con=mysqli_connect("localhost","root","","book store");
$q=mysqli_query($con,"select * from product ");
while($res=mysqli_fetch_array($q))
{
echo $res[1],"<br>";
echo "<img src=php/product_image/".$res[1].".jpg>";
}
?>
</body>
</html>
