	<?php
	include 'header.php';
	if (isset($_SESSION['username'])) {
		echo "<script> window.location='index.php';</script>";
	} else {

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
							<input type="password" name="pass1" id="pass" required maxlength="16" minlength="8" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false; }" />
						</div>
						<div>
							<span>Confirm Password<label>*</label></span>
							<input type="password" name="pass2" id="cpass" required maxlength="16" minlength="8" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false; }" />
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
	}
	?>
	</body>

	</html>











	<script>
		function keyPressed() {
			var key = event.keyCode || event.charCode || event.which;
			return key;
		}



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


		var count_mob = 0;
		var count_mob2 = 0;
		var count_pass = 0;
		var count_cpass = 0;
		//var mobile_no='';
		var c = 0;
		var v = 0;


		function validate() {
			if (Number.isInteger(parseInt($('#sans').val()))) {
				alert('Enter Security Answer in Correct Fornat');
				$('#sans').val("");
				return false;
			} else {
				return true;
			}
		}

		$('#email').bind("keypress keyup keydown", function(e) {
			var email = $('#email').val();
			var regtwodots = /^(?!.*?\.\.).*?$/;
			var lemail = email.length;
			if ((email.indexOf(".") == 0) || !(regtwodots.test(email))) {
				alert("invalid email address");
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



		$('#mobile').on("cut copy paste drag drop", function(e) {
			e.preventDefault();
		});


		$("#mobile").bind("keyup", function(e) {

			mobile = $("#mobile").val();

			var fchar = $("#mobile").val().substr(0, 1);
			var schar = $("#mobile").val().substr(1, 1);

			count2 = 0;
			if (fchar == 0) {
				$('#mobile').attr('maxlength', '11');
				if (schar == 0) {
					$("#mobile").val(0);
					if (fchar == "") {
						$("#mobile").val("");
					}

				}
			} else {
				$('#mobile').attr('maxlength', '10');
			}
			if (mobile.length > 9) {
				for (i = 0; i <= mobile.length; i++) {

					if (mobile.substr(i, 1) == mobile.substr(i + 1, 1)) {
						count2++;
						console.log(count2);
						if (count2 == 9) {
							count2 = 0;
							alert('Invalid Phone no.');
							$("#mobile").val("");
							mobile = '';
							console.log(mobile.length);
						}

					} else if (mobile.substr(i, 1) != mobile.substr(i + 1, 1)) {
						count2 = 0;
					}
				}
			}
		});
	</script>