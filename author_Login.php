<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">


	<!-- Your META here -->
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="font/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/j-forms.css">
   <link rel="icon" type="image/png" href="http://www.ijetjournal.org/images/myicon.jpg" />
   <title>IJET | Author Login</title>


	<link rel="stylesheet" href="css/cms.css">
	<link rel="stylesheet" href="css/slicknav.css">

	<script src="js/jquery.1.11.1.min.js"></script>
    <script src="js/wow.js" type="text/javascript"></script>




</head>
<body class="bg-pic">
<?php
include_once('header.php');
?>

	<div class="wrapper wrapper-400">

		<form action="" method="post" class="j-forms" id="j-forms-log" novalidate>

			<div class="header">
				<p>Author Login</p>
			</div>
			<!-- end /.header -->

			<div class="content">

				<!-- start login -->
				<div class="unit">
					<label class="label">Username (Registered Email-ID) *</label>
					<div class="input">
						<label class="icon-left" for="login">
							<i class="fa fa-user"></i>
						</label>
						<input type="text" id="login" name="login" />
					</div>
				</div>
				<!-- end login -->

				<!-- start password -->
				<div class="unit">
					<label class="label">Password *</label>
					<div class="input">
						<label class="icon-left" for="password">
							<i class="fa fa-lock"></i>
						</label>
						<input type="password" id="password" name="password" />
						<span class="hint">
							<a href="#" class="link">Forgot password?</a>
						</span>
					</div>
				</div>
				<!-- end password -->

				<!-- start keep logged -->
				<div class="unit">
					<label class="checkbox">
						<input type="checkbox" name="logged" value="true" checked="">
						<i></i>
						Remember Me
					</label>
				</div>
				<!-- end keep logged -->

				<!-- start response from server -->
				<div class="response"></div>
				<!-- end response from server -->

			</div>
			<!-- end /.content -->

			<div class="footer">
				<button type="reset" class="primary-btn">Sign Up</button>
				<button type="submit" class="primary-btn">Login</button>
			</div>
			<!-- end /.footer -->

		</form>
	</div>



<?php
	include_once('footer.php');
?>



<script>
$(document).ready(function() {
    $("#j-forms-log").validate({
        errorClass: "error-view",
        validClass: "success-view",
        errorElement: "span",
        onkeyup: !1,
        onclick: !1,
		rules: {
			login: {
				required: !0
			},
			password: {
				required: !0,
				minlength: 6
			}
		},
		messages: {
			login: {
				required: "Please enter your login"
			},
			password: {
				required: "Please enter your password",
				minlength: "At least 6 characters"
			}
		},
        highlight: function(e, s, r) {
            $(e).closest(".input").removeClass(r).addClass(s), ($(e).is(":checkbox") || $(e).is(":radio")) && $(e).closest(".check").removeClass(r).addClass(s)
        },
        unhighlight: function(e, s, r) {
            $(e).closest(".input").removeClass(s).addClass(r), ($(e).is(":checkbox") || $(e).is(":radio")) && $(e).closest(".check").removeClass(s).addClass(r)
        },
        errorPlacement: function(e, s) {
            $(s).is(":checkbox") || $(s).is(":radio") ? $(s).closest(".check").append(e) : $(s).closest(".unit").append(e)
        },
        submitHandler: function() {
            $("#j-forms").ajaxSubmit({
                target: "#j-forms #response",
                error: function(e) {
                    $("#j-forms #response").html("An error occured: " + e.status + " - " + e.statusText)
                },
                beforeSubmit: function() {
                    $('#j-forms button[type="submit"]').attr("disabled", !0).addClass("processing")
                },
                success: function() {
                    $('#j-forms button[type="submit"]').attr("disabled", !1).removeClass("processing"), $("#j-forms .input").removeClass("success-view error-view"), $("#j-forms .check").removeClass("success-view error-view"), $("#j-forms .success-message").length && ($("#j-forms").resetForm(), $('#j-forms button[type="submit"]').attr("disabled", !0), setTimeout(function() {
                        $("#j-forms #response").removeClass("success-message").html(""), $('#j-forms button[type="submit"]').attr("disabled", !1)
                    }, 5e3))
                }
            })
        }
    })
});
</script>




	<!-- Scripts -->
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/additional-methods.min.js"></script>
	<script src="js/jquery.form.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<!--[if lt IE 10]>
			<script src="j-folder/js/jquery.placeholder.min.js"></script>
		<![endif]-->

</body>
</html>