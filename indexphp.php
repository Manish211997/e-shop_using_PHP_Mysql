<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
?> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="favicon.png" type="image/gif" sizes="16x16">
	<title>Home-Online Book store</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	

  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	.containerimage {
    position: relative;
    width: 100%;
    max-width: 400px;
}

.containerimage img {
    width: 100%;
    height: auto;
}

.containerimage .btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: white;
    color: black;
    font-size: 16px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.containerimage .btn:hover {
    background-color: #F8694A;
	border:1px solid black;
	color:#FFFFFF;
}

.button
{
	border:none;
	background-color:#F8694A;
	border-radius:6px;
	width:120px;
	color:white;
}
.button:hover
{
	border:none;
	background-color:black;
	color:white;
	text-align:center;
	width:120px;
}


  </style>
</head>
<body>

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
							<?php
							if(!isset($_SESSION['email']))
							{
							
							echo "<strong class='text-uppercase'>My Account <i class='fa fa-caret-down'></i></strong>";
							echo "</div>";
							echo "<a href='#' class='text-uppercase'></a> <a href='#' class='text-uppercase'></a>";
							
							echo "<ul class='custom-menu'>";
								echo "<li><a href='registration.html'><i class='fa fa-user-plus'></i>Sign-up</a></li>";
							echo "</ul>";
							
			echo "<span class=><a href='login.html'><i class='fa fa-unlock'></i>Login</a>/<a href='registration.html'>Sign up</a></span>";
							}
							else
							{
							echo "</div>";
							echo "<span><a href='logout.php'><i class='fa fa-lock'></i>logout</a></span>";
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
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <i class="fa fa-bars"></i>                       
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav"  style="background-color:#F8694A">
        <li style="background-color:#F8694A;border-radius:3px">
  <button type="button" class="btn btn-#F8694A dropdown-toggle" data-toggle="dropdown">
 <i class="fa fa-bars"></i> Category
  </button>
  
  <div class="dropdown-menu">
  <?php
					$con=mysqli_connect("localhost","root","","book store");
					$q=mysqli_query($con,"select * from category");
					$data=array();
						while($res=mysqli_fetch_array($q))
						{
						echo " <a class='dropdown-item' href='category.php?cat=".$res[0]."'>";
						echo $res[0];
						echo "</a>";
						}
	?>
  </div>
</li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>

<div class="container"> 
   
  <div class="row">
  	<?php
$con=mysqli_connect("localhost","root","","book store");
$q=mysqli_query($con,"select * from product");
while($res=mysqli_fetch_array($q))
{
   echo "<div class='col-sm-4'>";
     echo "<div class='panel panel-warning'>";
    echo "<div class='panel-heading'><strong>";
	echo $res[1];
	echo "</strong></div>";
	echo "<div class='containerimage'>";
        echo "<div class='panel-body'><img src='php/product_image/".$res[1].".jpg' class='img-responsive' style='width:100%' alt='Image'></img></div>";
		echo "<a href='product-page.php?bname=".$res[1]."&cat=".$res[4]."'><button class='btn'><i class='fa fa-search-plus'></i><br />Quick View</button></a>";
		echo "</div>";
        echo "<div class='panel-footer'><strong>₹ ";
		echo $res[2];
		echo "<a href='cart.php?name=".$res[1]."&rate=".$res[2]."'></strong><button style='float:right;padding:.5%' class='button'>Add to cart</button></div></a>";
      echo "</div></div>";
}
?>
   </div>
   </div> 
	<br>

<br><br>

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


</body>
</html>

