<?php
$rand=substr(rand(),0,4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<!-- Your META here -->
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="font/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/j-forms1.css">
    <link rel="icon" type="image/png" href="http://www.ijetjournal.org/images/myicon.jpg" />
    <title>IJET | Registration for Conference Proceedings</title>


	<link rel="stylesheet" href="css/cms.css">
	<link rel="stylesheet" href="css/slicknav.css">

	<script src="js/jquery.1.11.1.min.js"></script>
    <script src="js/wow.js" type="text/javascript"></script>


<style type="text/css">
.code {
	width:60px;
	background-image:url(images/bj.jpg) !important;
	font-size:20px;
	border: 1px solid;

    -moz-user-select: -moz-none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -o-user-select: none;
    user-select: none;
}

.color {
	color:#FF0000;
}


</style>


</head>
<body class="bg-pic">
<?php
include_once('header.php');
?>


	<div class="wrapper wrapper-980">
		<form action="email_conference.php" enctype="multipart/form-data" method="post" id="j-forms" class="j-forms" novalidate>

			<div class="header">
				<p>Registration for Conference Proceedings</p>
			</div>

			
<?php

if(isset($_GET['status'])==1) {
	echo "<div id='response'><div class='success-message unit'><i class='fa fa-check'></i>Your message has been sent</div></div>";
} 

?>
			
			<div class="content">

				<div class="j-row">
					<div class="span6 unit">
						<label class="label">Correspondence Name *</label>
						<div class="input">
							<label class="icon-left" for="correspondenceName">
								<i class="fa fa-user"></i>
							</label>
							<input type="text" id="correspondenceName" name="correspondenceName" >
						</div>
					</div>

					<div class="span6 unit">
						<label class="label">Organized by (Department) *</label>
						<div class="input">
							<label class="icon-left" for="department">
								<i class="fa fa-building-o"></i>
							</label>
							<input type="text" id="department" name="department" >
						</div>
					</div>
				</div>

				<div class="j-row">
					<div class="span6 unit">
						<label class="label">Email *</label>
						<div class="input">
							<label class="icon-left" for="email">
								<i class="fa fa-envelope-o"></i>
							</label>
							<input type="email" id="email" name="email" >
						</div>
					</div>
					<div class="span6 unit">
						<label class="label">Name of Conference *</label>
						<div class="input">
							<label class="icon-left" for="conference">
								<i class="fa fa-home"></i>
							</label>
							<input type="text"  name="conference" id="conference">
						</div>
					</div>

				</div>

				<div class="j-row">
					<div class="span6 unit">
						<label class="label">contact Number  *</label>
						<div class="input">
							<label class="icon-left" for="phoneNumber">
								<i class="fa fa-phone"></i>
							</label>
							<input type="text" id="phoneNumber" name="phoneNumber" >
						</div>
					</div>

					<div class="span6 unit">
						<label class="label">Conference Date </label>
						<div class="input">
						<label class="icon-right" for="popup-from">
							<i class="fa fa-calendar"></i>
						</label>
							<input type="text" name="date1" id="popup-from" >
						</div>
					</div>
				</div>

				<div class="j-row">
					<div class="span6 unit">
						<label class="label">College / Institute Website *</label>
						<div class="input">
							<label class="icon-left" for="institute">
								<i class="fa fa-graduation-cap"></i>
							</label>
							<input type="text"  name="institute" id="institute" >
						</div>
					</div>

					<div class="span6 unit">
						<label class="label">Conference Website (if any)</label>
						<div class="input">
							<label class="icon-left" for="Landmark">
								<i class="fa fa-globe"></i>
							</label>
							<input type="text" name="Landmark" id="Landmark" >
						</div>
					</div>
				</div>



				<div class="j-row">
					<div class="span6 unit">
						<label class="label">University / College Name * </label>
						<div class="input">
							<label class="icon-left" for="university">
								<i class="fa fa-graduation-cap"></i>
							</label>
							<input type="text" name="university" id="university" >
						</div>
					</div>

					<div class="span6 unit">
						<label class="label">Full Address *</label>
						<div class="input">
							<label class="icon-right" for="fullAddress">
								<i class="fa fa-file-text-o"></i>
							</label>
							<textarea spellcheck="false" id="textarea" name="fullAddress" ></textarea>
						</div>
					</div>
				</div>




				<div class="j-row">

					<div class="span6 unit">
						<label class="label">Conference Brochure(if any)</label>
						<label class="input append-small-btn">
							<div class="file-button">
								Upload
								<input type="file" name="file1" onchange="document.getElementById('append-small-btn').value = this.value;">
							</div>
							<input type="text" id="append-small-btn" readonly="" placeholder="no file selected">
						</label>
					</div>

					<div class="span6 unit">
						<label class="label">&nbsp; </label>
						<div class="captcha-group">
							<div class="input">
								<label class="icon-right" for="captcha_code">
									<i class="fa fa-unlock-alt"></i>
								</label>
								<input type="text" id="captcha_code" name="captcha_code" placeholder="solve the captcha...">
								<span class="tooltip tooltip-right-top">Enter sum of the digits</span>
							</div>
							<label class="captcha" for="captcha_code">
								<input type="text" id="code"  unselectable="on"  readonly class="code" value="<?php echo $rand; ?>" />
							</label>
						</div>
					</div>
				</div>



				<!-- start copy -->
				<div class="unit">

				</div>
				<!-- end copy -->

			</div>

			<div class="footer">
				<button type="submit" class="primary-btn">Submit</button>
				<button type="reset" class="primary-btn">Back</button>
			</div>
			<!-- end /.footer -->

		</form>
	</div>


<?php
	include_once('footer.php');
?>



<script>
$(document).ready(function() {
    $("#j-forms").validate({
        errorClass: "error-view",
        validClass: "success-view",
        errorElement: "span",
        onkeyup: !1,
        onclick: !1,
        rules: {
            correspondenceName: {
                required: !0
            },
			department: {
                required: !0
            },
            email: {
                required: !0,
                email: !0
            },
			conference: {
                required: !0
            },
			phoneNumber: {
                required: !0,
                phoneUS: true
            },
			institute: {
                required: !0
            },
			university: {
                required: !0
            },
			fullAddress: {
                required: !0,
                minlength: 20
            },
			captcha_code:{
				required: !0,
                equalTo: '#code'
			}

        },
        messages: {
            correspondenceName: {
                required: "Please Enter Your Correspondence Name"
            },
            department: {
                required: "Please Enter Your Department Name"
            },
            email: {
                required: "Please Enter Your Email",
                email: "Incorrect Email format"
            },
            conference: {
                required: "Please Enter The Conference Name"
            },
            phoneNumber: {
                required: "Please Enter Your Contact Number"
            },
			institute: {
                required: "Please Enter Your College Or Institute Name"
            },
			university:{
				 required: "Please Enter Your College Or University Name"
			},
			fullAddress:{
				 required: "Please Enter The Address"
			},
			captcha_code:{
				required: "Captcha is required",
                equalTo: "Correct captcha is required"
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
        }

    })
});
</script>


<script>
  $( function() {
	  $( "#popup-from" ).datepicker({
		  dateFormat: 'dd/mm/yy',
	  		prevText: '<i class="fa fa-caret-left"></i>',
			nextText: '<i class="fa fa-caret-right"></i>'
	  });
  } );
  </script>


	<!-- Scripts -->
	
	<script src="js/jquery.ui.min.js"></script>

	<script src="js/jquery.validate.min.js"></script>
	<script src="js/additional-methods.min.js"></script>
	<script src="js/jquery.form.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<!--[if lt IE 10]>
			<script src="j-folder/js/jquery.placeholder.min.js"></script>
		<![endif]-->

</body>
</html>