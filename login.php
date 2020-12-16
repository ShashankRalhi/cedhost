	<?php
	include 'header.php';
	?>
	<!---login--->
	<div class="content">
		<div class="main-1">
			<div class="container">
				<div class="login-page">
					<div class="account_grid">
						<div class="col-md-6 login-left">
							<h3>new customers</h3>
							<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
							<a class="acount-btn" href="account.php">Create an Account</a>
						</div>
						<div class="col-md-6 login-right">
							<h3>registered</h3>
							<p>If you have an account with us, please log in.</p>
							<form action="logic.php" method="POST">
								<div>
									<span>Email Address<label>*</label></span>
									<input type="text" name="email" id="email" required>
								</div>
								<div>
									<span>Password<label>*</label></span>
									<input type="password" name="pass1" minlength="8" maxlength="16" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" onKeyDown="javascript: var keycode = keyPressed(event); if(keycode==32){ return false; }" required>
								</div>
								<a class="forgot" href="#">Forgot Your Password?</a>
								<input type="submit" value="Login" name="login">
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- login -->
	<?php
	include 'footer.php';
	?>
	</body>

	</html>


	<script>
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

		function keyPressed() {
			var key = event.keyCode || event.charCode || event.which;
			return key;
		}
	</script>