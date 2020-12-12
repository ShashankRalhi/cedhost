<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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

<body>
	<?php
	include 'header.php';
	?>
	<!---login--->
	<div class="content">
		<!-- registration -->
		<div class="main-1">
			<div class="container">
				<div class="register">
					<form action="logic.php" method="POST" onsubmit="return alexa()">
						<div class="register-top-grid">
							<h3>personal information</h3>
							<div>
								<span>Name<label>*</label></span>
								<input type="text" name="name" id="name" required pattern="^[a-zA-Z]+( [a-zA-Z]+)*$" />
							</div>
							<div>
								<span>Mobile<label>*</label></span>
								<input type="text" name="mobile" required id="mobile">
							</div>
							<div>
								<span>Email<label>*</label></span>
								<input type="email" name='email' id="email" required>
							</div>
						</div>

						<div class="clearfix"> </div>
						<div class="register-bottom-grid">
							<h3>Security Information</h3>

							<span>Security Question<label>*</label></span>
							<!-- <input type="text" name="" required> -->
							<select name="squestion" required>
								<option value="" selected disabled hidden>Select Your Security Question</option>
								<option value="What was your childhood nickname?">What was
									your childhood nickname?
								</option>
								<option value="What is the name of your favourite childhood friend?">What is the
									name of your favourite childhood friend?</option>
								<option value="What was your favourite place to visit as a child?">What was your
									favourite place to visit as a child?</option>
								<option value="What was your dream job as a child?">What was your dream job as a
									child?</option>
								<option value="What is your favourite teacher's nickname?">What is your favourite
									teacher's nickname?</option>
							</select>

							<div>
								<span>security_answers<label>*</label></span>
								<input type="text" name="sanswer" id="ans" pattern="^[ A-Za-z0-9_@./#$&+-]*$" required>
							</div>
						</div>
						<div class="clearfix"> </div>
						<a class="news-letter" href="#">
							<!-- <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label> -->
						</a>
				</div>
				<div class="register-bottom-grid">
					<h3>login information</h3>
					<div>
						<span>Password<label>*</label></span>
						<input type="password" name="pass1" id="pass" required onblur="this.value=removeSpaces(this.value);" maxlength="16" minlength="8" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">
					</div>
					<div>
						<span>Confirm Password<label>*</label></span>
						<input type="password" name="pass2" id="cpass" required onblur="this.value=removeSpaces(this.value);" maxlength="16" minlength="8" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">
					</div>
				</div>

				<div class="clearfix"> </div>
				<div class="register-but">

					<input type="submit" name="register" class="b">
					<div class="clearfix"> </div>

				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- registration -->

	</div>
	<!-- login -->
	<?php
	include 'footer.php';
	?>
</body>

</html>




<script>
	function removeSpaces(string) {
		return string.split(' ').join('');
	}



	$('#name').on("cut copy paste drag drop", function(e) {
		e.preventDefault();
	});


	$('#mobile').on("cut copy paste drag drop", function(e) {
		e.preventDefault();
	});


	$('#email').on("cut copy paste drag drop", function(e) {
		e.preventDefault();
	});


	$('#answer').on("cut copy paste drag drop", function(e) {
		e.preventDefault();
	});


	$('#pass').on("cut copy paste drag drop", function(e) {
		e.preventDefault();
	});


	$('#cpass').on("cut copy paste drag drop", function(e) {
		e.preventDefault();
	});



	$("#email").bind("keypress", function(e) {


		var keyCode = e.which ? e.which : e.keyCode
		if (!(keyCode == 46) && !(keyCode >= 48 && keyCode <= 57) && !(keyCode >= 64 && keyCode <= 90) && !(keyCode >= 97 && keyCode <= 122)) {
			//console.log(keycode);
			return false;
		}




	});

	$("#email").bind("keypress keyup keydown", function(e) {


		var email = $('#email').val();
		var regtwodots = /^(?!.*?\.\.).*?$/;
		var lemail = email.length;
		if ((email.charAt(0) == ".") || !(regtwodots.test(email))) {
			alert("invalid email");
			$('#email').val("");
			return;
		}

	});


	$("#mobile").bind("keypress", function(e) {


		var keyCode = e.which ? e.which : e.keyCode
		if (!(keyCode >= 48 && keyCode <= 57)) {
			//console.log(keycode);
			return false;
		}

	});
	$("#mobile").bind("keypress", function(e) {

		// count_mob2+=$("#mobile").length;

		// if(count_mob2==10) {
		// 	for(i=0;i<9;i++) {
		// 		var a=$("#mobile").val().substr(i,1);
		// 		var b=$("#mobile").val().substr(i+1,1);
		// 		if(a==b) {
		// 			$("#mobile").val("");

		// 			count_mob2=0;
		// 		}
		// 	 }
		// }



		var keyCode = e.which ? e.which : e.keyCode
		if (!(keyCode >= 48 && keyCode <= 57)) {
			//console.log(keycode);
			return false;
		}

	});

	// $("#mobile").bind("paste", function(e){

	// 	e.preventDefault();

	// 	// var pastedData = e.originalEvent.clipboardData.getData('text/plain');

	// 	// if(pastedData.length==10) {

	// 	// 	for(i=0;i<10;i++) {
	// 	// 		// var a=$("#mobile").val().substr(i,1);
	// 	// 		// var b=$("#mobile").val().substr(i+1,1);
	// 	// 		// if(a==b) {
	// 	// 		// 	$("#mobile").val("");
	// 	// 		// }
	// 	// 		//console.log(pastedData[i]);
	// 	// 		var d=pastedData[i];
	// 	// 		var e=pastedData[i+1];



	// 	// 		if(d==e) {


	// 	// 		}

	// 	// 	}

	// 	// }
	// });
	var count_mob = 0;
	$("#mobile").bind("keyup", function(e) {


		mobile_no = $("#mobile").val();
		count_mob += $("#mobile").length;

		var fchar = $("#mobile").val().substr(0, 1);
		var schar = $("#mobile").val().substr(1, 1);

		if (fchar == 0) {
			$('#mobile').attr('maxlength', '11');
			$('#mobile').attr('minlength', '11');
			if (count_mob == 10) {
				for (i = 1; i < 11; i++) {
					var a = $("#mobile").val().substr(i, 1);
					var b = $("#mobile").val().substr(i + 1, 1);
					if (a == b) {
						$("#mobile").val("");
						count_mob = 0;
					}
				}
			}
			if (schar == 0) {
				$("#mobile").val(0);
				count_mob = 0;

				if (fchar == "") {
					$("#mobile").val("");
					count_mob = 0;
				}

			}
		} else {
			$('#mobile').attr('maxlength', '10');
			$('#mobile').attr('minlength', '10');
			//console.log(count_mob2);
			console.log(count_mob);
			if (count_mob == 10) {
				for (i = 0; i < 10; i++) {
					var a = $("#mobile").val().substr(i, 1);
					var b = $("#mobile").val().substr(i + 1, 1);
					if (a == b) {
						$("#mobile").val("");
						count_mob = 0;

					}
				}
			}
		}
	});



	function alexa() {
		$alex = $('#ans').val();
		if (Number.isInteger(parseInt($alex))) {
			alert("answer can be only in alphanumeric or alphabets");
			$('#ans').val("");
			return false;
		} else {
			return true;
		}

	}
</script>