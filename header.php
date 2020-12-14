<?php
session_start();
include 'Dbcon.php';
$obj = new Dbcon();
$sql = $obj->__construct();
include 'productclass.php';
$pdt = new productclass();

// if ($_SESSION['admin'] != 0) {
// 	header('location: login.php');
// }
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!---fonts-->
	<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!---fonts-->
	<!--script-->
	<script src="js/modernizr.custom.97074.js"></script>
	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<!--lightboxfiles-->
	<script type="text/javascript">
		$(function() {
			$('.team a').Chocolat();
		});
	</script>
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
	<script type="text/javascript">
		$(function() {

			$(' #da-thumbs > li ').each(function() {
				$(this).hoverdir();
			});

		});
	</script>
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!--script-->
</head>

<body>
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<i class="sr-only">Toggle navigation</i>
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
						</button>
						<div class="navbar-brand">
							<h1 class="logo"><a href="index.html"> <span>Ced</span> <strong>Hosting</strong></a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.php">Services</a></li>
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
								<ul class="dropdown-menu">

									<?php
									$row1 = $pdt->fetchcategory($obj->conn);
									if (isset($row1)) {
										foreach ($row1 as $key => $row) {

											if ($row['id'] != 1) {
									?>
												<li><a href="catpage.php?id=<?php echo $row['id']; ?>"><?php echo $row['prod_name']; ?></a></li>
									<?php
											}
										}
									}
									?>

									<!-- <li><a href="linuxhosting.php">Linux hosting</a></li>
								<li><a href="wordpresshosting.php">WordPress Hosting</a></li>
								<li><a href="windowshosting.php">Windows Hosting</a></li>
								<li><a href="cmshosting.php">CMS Hosting</a></li> -->
								</ul>
							</li>
							<li><a href="pricing.php">Pricing</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="cart.php">Cart&#x1f6d2;</a></li>
							<?php
							if (isset($_SESSION['username'])) {
							?>
								<li><a href="logout.php">Logout</a></li>
							<?php
							} else {
							?>
								<li><a href="login.php">Login</a></li>
							<?php
							}
							?>

							<!-- <li><a href="logout.html">Logout</a></li> -->
						</ul>

					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
	<!---header--->