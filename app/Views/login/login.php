<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Carlos Alvarez - Alvarez.is">

	<!-- Le styles -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/template/bootstrap/css/bootstrap.min.css" />

	<link href="<?= base_url(); ?>/template/css/login.css" rel="stylesheet">

	<script type="text/javascript" src="<?= base_url(); ?>/template/js/jquery.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/template/bootstrap/js/bootstrap.min.js"></script>

	<style type="text/css">
		body {
			padding-top: 30px;
		}

		pbfooter {
			position: relative;
		}
	</style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

	<!-- Jquery Validate Script -->
	<script type="text/javascript" src="<?= base_url(); ?>/template/js/jquery.validate.js"></script>

	<!-- Jquery Validate Script - Validation Fields -->
	<script type="text/javascript">
		$.validator.setDefaults({
			submitHandler: function() {
				window.open('dashboard.html', '_self', false)
			}
		});

		$().ready(function() {
			// validate the comment form when it is submitted
			$("#commentForm").validate();

			// validate signup form on keyup and submit
			$("#signupForm").validate({
				rules: {
					firstname: "required",
					lastname: "required",
					username: {
						required: true,
						minlength: 1
					},
					password: {
						required: true,
						minlength: 1
					},
					confirm_password: {
						required: true,
						minlength: 2,
						equalTo: "#password"
					},
					email: {
						required: true,
						email: true
					},
					topic: {
						required: "#newsletter:checked",
						minlength: 2
					},
					agree: "required"
				},
				messages: {
					firstname: "Please enter your firstname",
					lastname: "Please enter your lastname",
					username: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 1 character"
					},
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 1 character long"
					},
					confirm_password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					email: "Please enter a valid email address",
					agree: "Please accept our policy"
				}
			});

			// propose username by combining first- and lastname
			$("#username").focus(function() {
				var firstname = $("#firstname").val();
				var lastname = $("#lastname").val();
				if (firstname && lastname && !this.value) {
					this.value = firstname + "." + lastname;
				}
			});

			//code to hide topic selection, disable for demo
			var newsletter = $("#newsletter");
			// newsletter topics are optional, hide at first
			var inital = newsletter.is(":checked");
			var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
			var topicInputs = topics.find("input").attr("disabled", !inital);
			// show when newsletter is checked
			newsletter.click(function() {
				topics[this.checked ? "removeClass" : "addClass"]("gray");
				topicInputs.attr("disabled", !this.checked);
			});
		});
	</script>

</head>

<style>
	.pbfooter {
		position: relative;
	}
</style>

<body style="background:url('<?= base_url(); ?>/template/images/bg.JPG') no-repeat center center; height:700px;">

	<div class="container">
		<div class="row">
			<div class="col-lg-offset-4 col-lg-4" style="margin-top:100px">
				<div class="block-unit" style="text-align:center; padding:8px 8px 8px 8px;">
					<br>
					<br>
					<form class="cmxform" action="<?= base_url(); ?>/login" method="post">
						<fieldset>
							<p>
								<input name="username" type="text" placeholder="Email or Username">
								<input name="password" type="password">
							</p>
							<button class="btn btn-success btn btn-large" type="submit">Login</button>
						</fieldset>
					</form>
				</div>

			</div>


		</div>
	</div>
	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="<?= base_url(); ?>/template/js/bootstrap.js"></script>
</body>

</html>