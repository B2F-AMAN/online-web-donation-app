<!-- Donor Login Modal Starts here -->
<div class="modal fade" id="DonorLoginModal" role="dialog">
	<form method="post" action="" onsubmit="return validateform1()">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Donor Login Window</h4>
				</div>
				<div class="modal-body" style="padding-left: 55px;padding-right: 55px;">

					<div class="row">
						Email ID : <input type="email" name="donoremail_id" id="donoremail_id" class="form-control">
						<span id="errdonoremail_id" class="errorclass"></span>
					</div>
					<br>

					<div class="row">
						Password : <input type="password" name="donorpassword" id="donorpassword" class="form-control">
						<span id="errdonorpassword" class="errorclass"></span>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" name="btnforgotpassword" id="btnforgotpassword" class="btn btn-default">Forgot Password</button>
					<button type="submit" name="btndonorlogin" id="btndonorlogin" class="btn btn-default">Click to Login</button>
				</div>
			</div>
		</div>
	</form>
</div>
<!-- Donor Login Modal Ends here -->

<!--Forgot Password Code Starts here -->
<div class="modal fade" id="Donorforgotpass" role="dialog">
	<form method="post" action="" >
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Recover password</h4>
				</div>
				<div class="modal-body" style="padding-left: 55px;padding-right: 55px;">
					<div class="row">
						Enter Email ID : <input type="email" name="donorrecemail_id" id="donorrecemail_id" class="form-control" required >
					</div>
					<br>
				</div>
				<div class="modal-footer">
					<button type="submit" name="btnrecoverpass" id="btnrecoverpass" class="btn btn-default">Click here to Recover</button>
				</div>
			</div>
		</div>
	</form>
</div>
<!--Forgot Password Code Ends here -->



<!-- DonorRegisterModal Starts here -->
<div class="modal fade" id="DonorRegisterModal" role="dialog">
	<form method="post" action="" onsubmit="return validateform2()">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Donor Register Window</h4>
				</div>

				<div class="modal-body" style="padding-left: 55px;padding-right: 55px;">
					<div class="row">
						Name : <input type="text" name="name" id="name" class="form-control">
						<span id="errname" class="errorclass"></span>
					</div>
					<br>


					<div class="row">
						Email ID: <input type="email" name="donoremailid" id="donoremailid" class="form-control">
						<span id="errdonoremailid" class="errorclass"></span>
					</div>
					<br>

					<div class="row">
						Contact no: <input type="number" name="contactno" id="contactno" class="form-control">
						<span id="errcontactno" class="errorclass"></span>
					</div>
					<br>

					<div class="row">
						Password : <input type="password" name="donornpassword" id="donornpassword" class="form-control">
						<span id="errdonornpassword" class="errorclass"></span>
					</div>
					<br>

					<div class="row">
						Confirm password: <input type="password" name="donorcpassword" id="donorcpassword" class="form-control">
						<span id="errdonorcpassword" class="errorclass"></span>
					</div>
					<br>

				</div>


				<div class="modal-footer">
					<button type="submit" name="btndonorregister" id="btndonorregister" class="btn btn-info">Click to Register</button>
				</div>
			</div>
		</div>
	</form>
</div>
<!-- DonorRegisterModal Ends here -->

<!-- Donor Login Modal Starts here -->
<div class="modal fade" id="StaffLoginModal" role="dialog">
	<form method="post" action="" onsubmit="return validateform3()">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Staff Login Window</h4>
				</div>
				<div class="modal-body" style="padding-left: 55px;padding-right: 55px;">

					<div class="row">
						Login ID : <input type="text" name="staffloginid" id="staffloginid" class="form-control">
						<span id="errstaffloginid" class="errorclass"></span>
					</div>
					<br>

					<div class="row">
						Password : <input type="password" name="staffpassword" id="staffpassword" class="form-control">
						<span id="errstaffpassword" class="errorclass"></span>
					</div>

				</div>
				<div class="modal-footer">
					<button type="submit" name="btnstafflogin" id="btnstafflogin" class="btn btn-default">Click to Login</button>
				</div>
			</div>
		</div>
	</form>
</div>
<!-- Donor Login Modal Ends here -->


<footer id="footer" class="section">

	<div class="container">

		<div class="row">

			<div class="col-md-4">
				<div class="footer">
					<div class="footer-logo">
						<a class="logo" href="#"><img src="imgs/Logo.png" alt=""></a>
					</div>
					<p>A platform where patients can raise funds for their surgeries and operations. 
						We believe in the power of community support to overcome medical challenges.
						 Whether it's cancer treatment, heart surgery, or eye operations, 
						 your donation can make a life-changing difference. Join us in restoring hope and transforming lives. 
						 Together, we can make healthcare accessible to all. Start a fundraiser or donate today. Every contribution counts.</p>
				</div>
			</div>


			<div class="col-md-4">
				<div class="footer">
					<h3 class="footer-title">Contact</h3>
					<p>

					<ul class="footer-contact">
						<li><i class="fa fa-map-marker"></i> The Helping Hand<br> &nbsp;&nbsp;&nbsp; Ambernath <br> &nbsp;&nbsp;&nbsp; Ambernath-421501</li>
						<li><i class="fa fa-phone"></i> +91 9075650355</li>
						<li><i class="fa fa-envelope"></i> <a href="#"><span class="__cf_email__" data-cfemail="8fcce7eefde6fbf6cfeae2eee6e3a1ece0e2">amangshaikh523@gmail.com</span></a></li>
					</ul>

					</p>
					<hr>
					<ul class="footer-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
			</div>

		</div>


		<div id="footer-bottom" class="row">
			<div class="col-md-6 col-md-push-6">
				<?php
				if (!isset($_SESSION['staff_id']) && !isset($_SESSION['donor_id'])) {
				?>
					<ul class="footer-nav">
						<li><a href="" onclick="return false" data-toggle="modal" data-target="#StaffLoginModal">Staff Login</a></li>
					</ul>
				<?php
				}
				?>
			</div>
			<div class="col-md-6 col-md-pull-6">
				<div class="footer-copyright">
					<span>
						Copyright &copy;<script data-cfasync="false" src="scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
						<script type="7909e31ca7813c4694085191-text/javascript">
							document.write(new Date().getFullYear());
						</script>
					</span>
				</div>
			</div>
		</div>

	</div>

</footer>


<script src="js/jquery.min.js" type="7909e31ca7813c4694085191-text/javascript"></script>
<script src="js/bootstrap.min.js" type="7909e31ca7813c4694085191-text/javascript"></script>
<script src="js/owl.carousel.min.js" type="7909e31ca7813c4694085191-text/javascript"></script>
<script src="js/jquery.stellar.min.js" type="7909e31ca7813c4694085191-text/javascript"></script>
<script src="js/main.js" type="7909e31ca7813c4694085191-text/javascript"></script>

<script src="scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="7909e31ca7813c4694085191-|49" defer=""></script>

<script src="js/jquery-3.3.1.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
		$('#datatable').DataTable();
	});
</script>
</body>

</html>

<script>
	function validateform1() {
		var i = 0;
		$('.errorclass').html('');

		if (document.getElementById("donoremail_id").value == "") {
			document.getElementById("errdonoremail_id").innerHTML = "Kindly enter the Donor Login ID...";
			i = 1;
		}
		if (document.getElementById("donorpassword").value == "") {
			document.getElementById("errdonorpassword").innerHTML = "Kindly enter the Donor Password......";
			i = 1;
		}
		if (i == 0) {
			return true;
		} else {
			return false;
		}
	}
</script>
<script>
	function validateform2() {
		var i = 0;
		var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
		var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets with space
		var alphanumericExp = /^[a-zA-Z0-9]+$/; //Variable to validate only alphanumerics
		var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
		var emailpattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //For email id
		$('.errorclass').html('');

		if (document.getElementById("name").value == "") {
			document.getElementById("errname").innerHTML = "Kindly enter the name ...";
			i = 1;
		}
		if (document.getElementById("donoremailid").value == "") {
			document.getElementById("errdonoremailid").innerHTML = "Kindly enter the donor Email ID..";
			i = 1;
		}
		if (document.getElementById("contactno").value.length != 10) {
			document.getElementById("errcontactno").innerHTML = "Kindly enter 10 digit Mobile number...";
			i = 1;
		}
		if (!document.getElementById("contactno").value.match(numericExpression)) {
			document.getElementById("errcontactno").innerHTML = "Mobile number is not valid..";
			i = 1;
		}
		if (document.getElementById("contactno").value == "") {
			document.getElementById("errcontactno").innerHTML = "Contact number should not be empty..";
			i = 1;
		}
		if (document.getElementById("donornpassword").value == "") {
			document.getElementById("errdonornpassword").innerHTML = "Kindly enter donor password....";
			i = 1;
		}
		if (document.getElementById("donorcpassword").value == "") {
			document.getElementById("errdonorcpassword").innerHTML = "Kindly enter confirm password....";
			i = 1;
		}
		if (document.getElementById("donorcpassword").value != document.getElementById("donornpassword").value) {
			document.getElementById("errdonorcpassword").innerHTML = "Donor password and Confirm password not matching....";
			i = 1;
		}
		if (i == 0) {
			return true;
		} else {
			return false;
		}
	}
</script>
<script>
	function validateform3() {
		var i = 0;
		$('.errorclass').html('');

		if (document.getElementById("staffloginid").value == "") {
			document.getElementById("errstaffloginid").innerHTML = "Kindly enter the staff login id ...";
			i = 1;
		}
		if (document.getElementById("staffpassword").value == "") {
			document.getElementById("errstaffpassword").innerHTML = "Kindly enter the staff password ...";
			i = 1;
		}
		if (i == 0) {
			return true;
		} else {
			return false;
		}
	}
</script>
<script>
	//jquery submit for btnforgotpassword 
	$(document).ready(function() {
		$("#btnforgotpassword").click(function() {
			$("#Donorforgotpass").modal("show");
		});
	});
</script>