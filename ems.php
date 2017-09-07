<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IJET | Welcome to IJET Editorial Management System</title>

	<!-- Your META here -->
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="font/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/j-forms1.css">
    <link rel="icon" type="image/png" href="http://www.ijetjournal.org/images/myicon.jpg" />


	<link rel="stylesheet" href="css/cms.css">
	<link rel="stylesheet" href="css/slicknav.css">

	<script src="js/jquery.1.11.1.min.js"></script>
    <script src="js/wow.js" type="text/javascript"></script>




</head>
<body class="bg-pic">

<script type="text/javascript">
	new WOW().init();
    $(document).ready(function () {
        $('#menu').slicknav();
    });
</script>


<?php
include_once('header.php');
?>


	<div class="wrapper wrapper-980">
		<form action="" method="" class="j-forms" novalidate>

			<!-- start header -->
			<div class="header">
				<p>Welcome to IJET Editorial Management System</p>
			</div>
			<!-- end header -->

			<div class="content">

				<div class="j-row">
					<div class="span12">&nbsp;</div>
				</div>
				<div class="j-row">
					<div class="span12">&nbsp;</div>
				</div>

				<div class="j-row">
					<div class="span4"><a href="menuscript.php">
						<div class="social-btn twitter">
							<i class="fa fa-file-text-o"></i>
							<button type="button">Submit  Paper</button></A>
						</div>
					</div>
					<div class="span4"><a href="author_Login.php">
						<div class="social-btn google-plus">
							<i class="fa fa-child"></i>
							<button type="button">Login As Author</button></a>
						</div>
					</div>

					<div class="span4"><a href="Reviewer_login.php">
						<div class="social-btn facebook">
							<i class="fa fa-pencil-square-o"></i>
							<button type="button">Login As Reviewer</button></a>
						</div>
					</div>

				</div>

				<div class="j-row">
					<div class="span12">&nbsp;</div>
				</div>
				<div class="j-row">
					<div class="span12">&nbsp;</div>
				</div>
				<div class="j-row">
					<div class="span12">&nbsp;</div>
				</div>
				<div class="j-row">
					<div class="span12">&nbsp;</div>
				</div>
			</div>
			<!-- end /.content -->

		</form>
	</div>

	<?php
		include_once('footer.php');
?>

	<!-- Scripts -->
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/additional-methods.min.js"></script>
	<script src="js/jquery.form.min.js"></script>
	<script src="js/j-forms.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<!--[if lt IE 10]>
			<script src="j-folder/js/jquery.placeholder.min.js"></script>
		<![endif]-->

</body>
</html>