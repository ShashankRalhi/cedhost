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
					<!-- <input type="submit" value="Resend Email" name="rsemail1" id="rvemail" class="a"> -->
					<input type="submit" value="Verify" name="verifye" id="verifye" class="a">
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
					<!-- <input type="submit" value="Resend Mobile" name="rsemail2" id="rvemail" class="a"> -->
					<input type="submit" value="Verify" name="verifym" id="verify" class="a">
				</td>
			</tr>
		</table>
	</form>
</div>

<?php include('footer.php'); ?>



<!-- <script>
	$(document).ready(function() {
		// $("#rvemail").attr("disabled", true);
		$("#eotp").attr("disabled", true);
		$("#verifye").attr("disabled", true);

		$("#semail").click(function() {
			$("#eotp").attr("disabled", false);
		});

		$email = $("#eotp").val();
		if ($email != "") {
			$("#verifye").attr("disabled", false);
		}
	});
</script> -->