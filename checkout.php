<!DOCTYPE html>
<html lang="en">

<head>
<?php
session_start();
?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Checkout</title>
<link rel="icon" href="favicon.png" type="image/gif" sizes="16x16">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<p class="line-1 anim-typewriter">Welcome to Online Book Store and get best deals !</p>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a href="indexphp.php">Home</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="#">
							<img src="./img/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					
				</div>
				<div class="pull-right">
					<ul class="header-btns">
					
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">My Account </strong>
							</div>
							<a href="#" class="text-uppercase"></a> <a href="#" class="text-uppercase"></a>
							<ul class="custom-menu">
								<li><a href="registration.html"><i class="fa fa-user-plus"></i>Sign-up</a></li>
							</ul>
							<?php
							if(!isset($_SESSION['email']))
							{
							echo "<span><a href='login.html'><i class='fa fa-unlock'></i>Login</a>";
							}
							else
							{
							echo "<a href='logout.php'><i class='fa fa-lock'></i>logout</a></span>";
							}
							?>
								
						</li>
					
						<!-- /Account -->

							<!-- Cart -->
						<?php
						$con=mysqli_connect("localhost","root","","book store");
						if(isset($_SESSION['email']))
						{
							$email=$_SESSION['email'];
						
						$query1=mysqli_query($con,"select total,count from items where Email='$email'");
						$result=mysqli_fetch_array($query1);
						if(isset($result[0]) and isset($result[1]))
						{
						$total=$result[0];
						$count=$result[1];
						}
						else
						{
						$total=0;
						$count=0;
						}
							echo "<li class='header-cart dropdown default-dropdown'>";
							echo "<a  href='cartpage.php'>";
								echo "<div class='header-btns-icon'>";
									echo "<i class='fa fa-shopping-cart'></i>";
									echo "<span class='qty'>";
									echo $count;
										echo "</span>";
							echo	"</div>";
								echo "<span>My Cart:</span>";
								echo "<br>";
								echo "<span>₹ ";
								echo $total;
								echo "</span>";
									echo "</a>";
						}
						else
						{
							echo "<li class='header-cart dropdown default-dropdown'>";
							echo "<a  href='cartpage.php'>";
								echo "<div class='header-btns-icon'>";
									echo "<i class='fa fa-shopping-cart'></i>";
									echo "<span class='qty'>";
									echo 0;
										echo "</span>";
							echo	"</div>";
								echo "<span>My Cart:</span>";
								echo "<br>";
								echo "<span>₹ ";
								echo 0;
								echo "</span>";
									echo "</a>";
						}
							?>
				
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list">
					<?php
					$con=mysqli_connect("localhost","root","","book store");
					$q=mysqli_query($con,"select * from category");
					$data=array();
						while($res=mysqli_fetch_array($q))
						{
						echo "<li class='dropdown side-dropdown'>";
						echo "<a href='category.php?cat=".$res[0]."'>";
						echo $res[0];
						echo "</a>";
						echo "</li>";
						}
					
					?>
						<li><a href=''>veiw all</a></li>
					</ul>
					
				</div>
				
				<!-- menu nav -->
				
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Checkout</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form id="checkout-form" class="clearfix" action="order.php">
					<div class="col-md-6">
						<div class="billing-details">
							<p>Already a customer ? <a href="#">Login</a></p>
							<div class="section-title">
								<h3 class="title">Billing Details</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="firstname" placeholder="First Name">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="lastname" placeholder="Last Name">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telephone">
							</div>
							
						</div>
					</div>

					<div class="col-md-6">
						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">Shiping Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-1" checked>
								<label for="shipping-1">Free Shiping - Rs.0.00</label>
								<div class="caption">
									<p>Free Shipping is provided in reach area and expected delivery under 10 to 12 working days</p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-2">
								<label for="shipping-2">Standard - Rs.100</label>
								<div class="caption">
									<p>Delivery will be done within 3 to 4 working days.
										<p>
								</div>
							</div>
						</div>

						<div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Payments Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-1" checked>
								<label for="payments-1">Direct Bank Transfer</label>
								<div class="caption">
									<p>Choose this option for direct bank payment via netbanking.
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-2">
								<label for="payments-2">Cheque Payment</label>
								<div class="caption">
									<p>Cheque payement is available and you have to give the cheque to delivery man.
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-3">
								<label for="payments-3">Paypal System</label>
								<div class="caption">
									<p>If you are a international customer you can pay it by paypal.
										<p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
		<h3 class="title">Order Review<font color="#FF0000"> (* To delete a product from this list first delete from cart)</font></h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
<?php
		$con=mysqli_connect("localhost","root","","book store");
		if(isset($_SESSION['email']))
		{
		$email=$_SESSION['email'];
				$q=mysqli_query($con,"select * from cart where Email='$email'");

			while($res=mysqli_fetch_array($q))
				{
				echo "<tr>";
				echo "<td class='thumb'><img src='php/product_image/".$res[0].".jpg' alt=''></td>";
										echo "<td class='details'>";
											echo "<a href='product-page.php?bname=".$res[0]."'>";
											echo $res[0];
											echo "</a>";
											echo "<ul>";
											echo "</ul>";
										echo "</td>";
										echo "<td class='price text-center'><strong>";
										echo $res[1];
										echo "</strong><br></td>";
					echo "<td class='qty text-center'><input class='input' type='number' value='1'></td>";
echo "<td class='total text-center'><strong class='primary-color'>";
echo $res[1];
echo "</strong></td>";
				echo "</tr>";					
				}
		}
		else
		{
			echo "<tr><td><h3 align='center'>";
			echo "YOU NEED TO LOGIN FIRST !";
			echo "</h3></td></td>";
		}
?>
										
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan='2' class='sub-total'>
										<?php
										$con=mysqli_connect("localhost","root","","book store");
$q=mysqli_query($con,"select * from cart where Email='$email'");
$total=0;
				while($res=mysqli_fetch_array($q))
						{
								$total=$total+$res[1];
						}
						echo "₹ ".$total;
						?>
						</th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">
										<?php
										echo "₹ ".$total;
										?></th>
									</tr>
								</tfoot>
							</table>
							<div class="pull-right">
								<button class="primary-btn">Place Order</button>
							</div>
						</div>

					</div>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="./img/logo.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->


						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				

				<div class="clearfix visible-sm visible-xs"></div>

				

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Stay Connected</h3>
						<p>So that we can give you all updates.</p>
						<form>
							<div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
							<button class="primary-btn">Join Newslatter</button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
