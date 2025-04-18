<?php
session_start();
include './connection.php';
?>

<!DOCTYPE html>
<html>
<head>

	<title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Packaged Foods :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
</head>

<body>
	<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="products.html">SHOP NOW</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<li><a href="registered.php"> Create Account </a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="contact.php">Help</a></li>
				</ul>
			</div>
			<div class="product_list_header">
				<form action="#" method="post" class="last">
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="display" value="1">
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>

				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="shop.php">super Market</a></h1>
			</div>
			<div class="w3l_search">
				<form action="#" method="post">
					<input type="search" name="Search" placeholder="Search for a Product..." required="">
					<button type="submit" class="btn btn-default search" aria-label="Left Align">
						<i class="fa fa-search" aria-hidden="true"> </i>
					</button>
					<div class="clearfix"></div>
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li class="active"><a href="shop.php" class="act">Home</a></li>
						<!-- Mega Menu -->
						<?php
						include './menu.php';
						?>
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<!-- //navigation -->
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="shop.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Packaged Foods</li>
			</ol>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!--- pakagedfoods --->
		<div class="container">
			<div class="col-md-12 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids">
<?php
$userid = $_SESSION['uid'];
//login check
if(!isset($_SESSION['uid']))
{
    header("location:login.php");
}
//Delete
if(isset($_GET['did']))
{
    $did = $_GET['did'];
    $did = mysqli_query($connection,"delete from tbl_cart where cart_id='{$did}'");
}
$q = mysqli_query($connection,"select * from tbl_cart where user_id='{$userid}'");
$count = mysqli_num_rows($q);
if($count>0)
{
echo "<h1>Cart</h1>";
echo "<table border='1' class='timetable_sub'>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>Name</td>";
echo "<td>Photo</td>";
echo "<td>Price</td>";
echo "<td>Qty</td>";
echo "<td>Subtotal</td>";
echo "<td>Delete</td>";
echo "</tr>";
$i = 0;
$grandtotal = 0;
while($data = mysqli_fetch_array($q))
{
    $pq = mysqli_query($connection,"select * from tbl_product where product_id='{$data['product_id']}'");
    $pdata = mysqli_fetch_array($pq);
    $i++;
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>{$pdata['product_name']}</td>";
    echo "<td><img src='uploads/{$pdata['product_image']}' width='100'/></td>";
    echo "<td>{$pdata['product_price']}</td>";
	echo "<td><form action='update.php' method='POST'>
	<input type='hidden' name='id' value='{$data['cart_id']}'/>
	<input type='number' name='qty' value='{$data['product_qty']}' min='1' max='10'> 
                     <button type='submit' name='submit' class='update-btn'>Update</button>
					 </form></td>";
    $subtotal = $pdata['product_price'] * $data['product_qty'];
    $grandtotal+=$subtotal;
    echo "<td>$subtotal</td>";
    echo "<td><a href='cart.php?did={$data['cart_id']}'>X</td>";
	echo "<tr>";
}
echo"<tr>
<td></td> <td></td> <td></td> <td></td> <td>Total</td>
<td>$grandtotal</td>
</tr>";
echo "</table>";
echo "<a href='checkout.php'>Checkout |</a>";
}else{
    echo"Cart is empty";
}
echo "<a href='shop.php'> Shop</a>";
?>
