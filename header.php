<?php
session_start();
include 'Dbcon.php';
$obj = new Dbcon();
$sql = $obj->__construct();

include 'productclass.php';
$pdt = new productclass();


?>
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
											<li><a href="<?php echo $row['link']; ?>"><?php echo $row['prod_name']; ?></a></li>
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