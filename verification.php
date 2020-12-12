<!DOCTYPE HTML>
<html>

<head>
	<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
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
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!--script-->
</head>

<?php include('header.php'); ?>
<div>
	<form style="margin-left: 5%;padding:20px" action="logic.php" method="POST">
		<table>
			<tr>
				<td>
					<label>Verify Your Mail</label>
				</td>
			</tr>
			<tr>
				<td>
					<p><?php
						if (isset($_SESSION['vemail'])) {
							echo $_SESSION['vemail'];
						} else {
							echo $_SESSION['email'];
						}
						?></p>
				</td>
				<td>
					<input type="text" name="eotp" id="eotp" style="padding:10px;width:100%;margin-left:5px;">
				</td>
				<td>
					<input type="submit" value="Send Email" name="rsemail1" id="semail" class="a">
					<input type="submit" value="Resend Email" name="rsemail1" id="rvemail" class="a">
				</td>
			</tr>
			<tr>
				<td>
					<label>Verify Your Mobile</label>
				</td>
			</tr>
			<tr>
				<td>
					<p>
						<?php
						if (isset($_SESSION['vmobile'])) {
							echo $_SESSION['vmobile'];
						} else {
							echo $_SESSION['mobile'];
						}
						?>
					</p>
				</td>
				<td>
					<input type="text" name="motp" id="motp" style="padding:10px;width:100%;margin-left:5px;">
				</td>
				<td>
					<input type="submit" value="Send Mobile" name="rsemail2" id="semail" class="a">
					<input type="submit" value="Resend Mobile" name="rsemail2" id="rvemail" class="a">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Verify" name="verify" id="vemail" class="a">
				</td>
			</tr>
		</table>
	</form>
</div>

<?php include('footer.php'); ?>