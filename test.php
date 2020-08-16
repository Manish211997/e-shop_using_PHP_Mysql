<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=2">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="icon" href="favicon.png" type="image/gif" sizes="16x16">
	<title>Home-Online Book store</title>

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
	<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
}

.header {
    text-align: center;
    padding: 32px;
}

.rowmy {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.columnmy {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.columnmy img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .columnmy {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .columnmy {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}
</style>

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
								echo "<span>? ";
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
								echo "<span>? ";
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
						echo "<a href=''>";
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

	<!-- HOME-->
					
		
	<!-- /HOME -->
	<!-- /section -->
	<table>
				<tr>
				
				<div class="rowmy">
				<!-- /Product Slick -->
				<?php
$con=mysqli_connect("localhost","root","","book store");
$q=mysqli_query($con,"select * from product");
$i=0;
while($res=mysqli_fetch_array($q))
{
echo "<div class='columnmy'>";
				echo "<td>";
				echo "<div class='col-md-9 col-sm-6 col-xs-6' >";
					
						echo "<div id='product-slick-1' class='product-slick' >";
					
							echo "<div class='product product-single'>";
								echo "<div class='product-thumb'>";
									echo "<div class='product-label'>";
									echo "</div>";
echo "<button class='main-btn quick-view'><i class='fa fa-search-plus'></i><a href='product-page.php?bname=".$res[1]."&cat=".$res[4]."'> Quick view</a></button>";
									echo "<img src='./php/product_image/".$res[1].".jpg'>";
								echo "</div>";
									echo "<div class='product-body'>";
									echo "<h3 class='product-price'>";
									echo "₹ ".$res[2];
									echo "<br />";
										echo "<div class='product-rating'>";
										echo "<i class='fa fa-star'></i>";
										echo "<i class='fa fa-star'></i>";
										echo "<i class='fa fa-star'></i>";
										echo "<i class='fa fa-star'></i>";
										echo "<i class='fa fa-star-o empty'></i>";
										echo "</div>";
									echo "<h2 class='product-name'><a href='product-page.php?bname=".$res[1]."&cat=".$res[4]."'>".$res[1]."</a></h2>";
										echo "<div class='product-btns'>";
echo "<a href='cart.php?name=".$res[1]."&rate=".$res[2]."'><button class='primary-btn add-to-cart'><i class='fa fa-shopping-cart'></i>Add to Cart</button></a>";
				
						
									echo "</div>";
									
						echo "</td>";
						if($i>4)
{
	echo "<br />";
}
					$i++;
					
}
?>
	</div>
		</div>
	</div>			
</tr>
</table>
	
	
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
							<a class="logo" href="indexphp.php">
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
