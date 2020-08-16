<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="icon" href="favicon.png" type="image/gif" sizes="16x16">
	<title>Cart-Online Book store</title>

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
                       <a href="indexphp.php">GO TO HOME</a>
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
						<a  class="logo" href="#">
							
					<img src="./img/logo.png" alt="">
						</a>
						
					</div>
					<!-- /Logo -->
					<!-- Search --
					<div class="header-search">
						<form>
							<input class="input search-input" type="text" placeholder="Enter your keyword">
							<!-- cateogories  --
							<select class="input search-categories">
								<option value="0">All Categories</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
							</select> 
							
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
					
				</div>
				<div class="pull-right">
					<ul class="header-btns">
					
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="#" class="text-uppercase"></a> <a href="#" class="text-uppercase"></a>
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="registration.html"><i class="fa fa-user-plus"></i>Sign-up</a></li>
							</ul>
						</li>
						<!-- /Account -->

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
					<!--	<li><a href="#">Bags & Shoes</a></li>-->
						<li><a href="#">View All</a></li>
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu<i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="indexphp.php">Home</a></li>
					<!--	<li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Sci-fi <i class="fa fa-caret-down"></i></a>-->
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women�s Clothing</a></li>
											<li><a href="#">Men�s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											
										</ul>
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											
										</a>
									</div>
								</div>
							</div>
						</li>
			<!--		<li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Latest <i class="fa fa-caret-down"></i></a> -->
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-3">
										
				
				<!-- menu nav -->
				
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- HOME-->
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Your Cart:</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots">
							</div>
						</div>
					</div>
				</div>
				<!-- /section-title -->
				

				
					
				
				<!-- /Product Slick -->
				<?php
				$con=mysqli_connect("localhost","root","","book store");
$q=mysqli_query($con,"select * from cart ");
$r=mysqli_fetch_array($q);
if(isset($_SESSION['email']) and isset($r))
{
$email=$_SESSION['email'];
$q1=mysqli_query($con,"select * from cart where Email='$email'");

	while($res=mysqli_fetch_array($q1))
		{
									echo "<img src='php/product_image/".$res[0].".jpg' width='10%' height='10%'>";
						
								echo "<div class='product-body'>";																
									echo "<h2 class='product-name' style='font-size:2vw'><a href='product-page?bname=".$res[0]."'>".$res[0]."</a></h2>";
									echo "<h3 style='font-size:2vw'>";
									echo "₹ ".$res[1];
									echo "</h3>";
									echo "<h3 align='right' class='product-price'>";	
									
		echo "<button class='main-btn quick-view'  align='center'><i class='fa fa-shopping-cart'></i><a href='checkout.php'> BUY</a></button>";
							echo "<button class='main-btn quick-view'><a href='delcart.php?bname=".$res[0]."' align='right'><i class='fa fa-trash'></i></a></button>";
					
									echo "</div>";
									echo "<div>";
									echo "<hr />";
									
		}
}
else
{
			echo "<h3 align='center'>NO PRODUCT IN CART:</h3>";
			$_SESSION['total']=0;
			
}
echo "<div class='product-body'>";
echo "<h3 align='right' class='product-price'>";
if(isset($_SESSION['email']))
{
$email=$_SESSION['email'];
$con=mysqli_connect("localhost","root","","book store");
$query1=mysqli_query($con,"select total from items where Email='$email'");
$result=mysqli_fetch_array($query1);
if(isset($result[0]))
{
$total=$result[0];
}
else
{
$total=0;
}
echo "TOTAL:₹ ".$total;
echo "</div>";
}
else
{
echo "</div>";
}

?>
					</div>
			</div>
</div>


			</div>
			<!-- /row -->
			<!-- row -->
			<div class="row">
				<!-- section title -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title 
				
				<!-- /Product Single -->

				
				<!-- /Product Single -->
			</div>
			<!-- /row -->

			
				<!-- /Product Single -->
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

						<p>Book store a shopping website where you get books on demand and great offers.</p>

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

				<!-- footer widget 
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">My Account</h3>
						<ul class="list-links">
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Compare</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget 
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Shiping & Return</a></li>
							<li><a href="#">Shiping Guide</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

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
