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

	
	
	<link rel="stylesheet" href="css/cms.css">
	<link rel="stylesheet" href="css/slicknav.css">

	<script src="js/jquery.1.11.1.min.js"></script>
    <script src="js/wow.js" type="text/javascript"></script>
	



</head>
<body class="bg-pic">
<?php
include_once('header.php');
?>

	<div class="wrapper wrapper-640">

		<form action="" method="" id="j-forms" class="j-forms" novalidate>

			<div class="header">
				<p>IJET - Submit Manuscript / Paper</p>
			</div>


			<div class="content">
				<div class="j-row">
					<div class="span6 unit">
						<label class="label">Name</label>
						<div class="input">
							<label class="icon-left" for="name">
								<i class="fa fa-user"></i>
							</label>
							<input type="text" id="name" name="name">
						</div>
					</div>
					<div class="span6 unit">
						<label class="label">Phone/Mobile</label>
						<div class="input">
							<label class="icon-left" for="phoneNumber">
								<i class="fa fa-phone"></i>
							</label>
							<input type="text" id="phoneNumber" name="phoneNumber">
						</div>
					</div>
				</div>

				
				<div class="j-row">
					<div class="span12 unit">
						<label class="label">Email</label>
						<div class="input">
							<label class="icon-left" for="email">
								<i class="fa fa-envelope-o"></i>
							</label>
							<input type="email"  name="email" id="email">
						</div>
					</div>
				</div>

				
				<div class="j-row">
					<div class="span12 unit">
						<label class="label">Paper Title</label>
						<div class="input">
							<label class="icon-left" for="subject">
								<i class="fa fa-tag"></i>
							</label>
							<input type="text" name="subject" id="subject">
						</div>
					</div>
				</div>

				
				<div class="j-row">
					<div class="span12 unit">
						<label class="label">Name of Author's </label>
						<div class="input">
							<label class="icon-left" for="author">
								<i class="fa fa-file-text-o"></i>
							</label>
							<input type="text"  id="author">
						</div>
					</div>
				</div>
				
				

				<div class="j-row">
					<div class="span12 unit">
						<label class="label">Postal Address </label>
						<div class="input">
							<label class="icon-left" for="postal">
								<i class="fa fa-map-pin"></i>
							</label>
							<input type="text"  id="postal">
						</div>
					</div>
				</div>


				<div class="unit">
					<label class="input append-big-btn">
						<label class="icon-left" for="append-big-btn">
							<i class="fa fa-download"></i>
						</label>
						<div class="file-button">
							Browse
							<input type="file" name="file1" onchange="document.getElementById('append-big-btn').value = this.value;">
						</div>
						<input type="text" id="append-big-btn" readonly="" placeholder="no file selected">
						<span class="hint">Only: pdf , docx</span>
						
					</label>
				</div>

			</div>
			
			<div class="footer">
				<button type="submit" class="primary-btn">Send message</button>
			</div>
			<!-- end /.footer -->

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