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
    <title>IJET | Submit Manuscript / Paper</title>

	<link rel="stylesheet" href="css/cms.css">
	<link rel="stylesheet" href="css/slicknav.css">

	<script src="js/jquery.1.11.1.min.js"></script>
    <script src="js/wow.js" type="text/javascript"></script>


</head>
<body class="bg-pic">
<?php
include_once('header.php');
?>



	<div class="wrapper wrapper-980">
		<form enctype="multipart/form-data" action="email_menuscript.php" method="post" id="j-forms" class="j-forms" novalidate>

			<div class="header">
				<p>IJET - Submit Manuscript / Paper</p>
			</div>


			<div class="content">


				<div class="j-row">
					<div class="span6 unit">
						<label class="label">Username(Email-ID) *</label>
						<div class="input">
							<label class="icon-left" for="username">
								<i class="fa fa-user"></i>
							</label>
							<input type="text" id="username" name="username">
						</div>
					</div>

					<div class="span6 unit">
						<label class="label">Mobile Number *</label>
						<div class="input">
							<label class="icon-left" for="phoneNumber">
								<i class="fa fa-phone"></i>
							</label>
							<input type="text" id="phoneNumber" name="phoneNumber">
							<span class="tooltip tooltip-right-top">Without country code</span>
						</div>
					</div>
				</div>


				<div class="j-row">
					<div class="span12 unit">
						<label class="label">House No./ Building / Apartment Name</label>
						<div class="input">
							<label class="icon-left" for="house">
								<i class="fa fa-home"></i>
							</label>
							<input type="text"  name="house" id="house">
						</div>
					</div>
				</div>

				<div class="j-row">
					<div class="span6 unit">
						<label class="label">Street / Society</label>
						<div class="input">
							<label class="icon-left" for="Street">
								<i class="fa fa-road"></i>
							</label>
							<input type="text"  name="Street" id="Street">
						</div>
					</div>

					<div class="span6 unit">
						<label class="label">Landmark</label>
						<div class="input">
							<label class="icon-left" for="Landmark">
								<i class="fa fa-street-view"></i>
							</label>
							<input type="text" name="Landmark" id="Landmark">
						</div>
					</div>
				</div>

				<div class="j-row">
					<div class="span6 unit">
						<label class="label">City *</label>
						<div class="input">
							<label class="icon-left" for="city">
								<i class="fa fa-tag"></i>
							</label>
							<input type="text" name="city" id="city">
						</div>
					</div>

					<div class="span6 unit">
						<label class="label">State *</label>
						<div class="input">
							<label class="icon-left" for="state">
								<i class="fa fa-tag"></i>
							</label>
							<input type="text" name="state" id="state">
						</div>
					</div>
				</div>


				<div class="j-row">
					<div class="span6 unit"><!-- start service -->
						<label class="label">Pin/Zip Code </label>
						<div class="input">
							<label class="icon-left" for="postal">
								<i class="fa fa-map-pin"></i>
							</label>
							<input type="text" name="postal"  id="postal">
						</div>
					</div><!-- end service -->
					<div class="span6 unit"><!-- start budget -->
						<label class="label">Country * </label>
						<label class="input select">
						<select name="country">
							<option value="none" selected="" disabled="">Select country</option>
        <option value="Afganistan">Afghanistan</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="American Samoa">American Samoa</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Anguilla">Anguilla</option>
	<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
	<option value="Argentina">Argentina</option>
	<option value="Armenia">Armenia</option>
	<option value="Aruba">Aruba</option>
	<option value="Australia">Australia</option>
	<option value="Austria">Austria</option>
	<option value="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas">Bahamas</option>
	<option value="Bahrain">Bahrain</option>
	<option value="Bangladesh">Bangladesh</option>
	<option value="Barbados">Barbados</option>
	<option value="Belarus">Belarus</option>
	<option value="Belgium">Belgium</option>
	<option value="Belize">Belize</option>
	<option value="Benin">Benin</option>
	<option value="Bermuda">Bermuda</option>
	<option value="Bhutan">Bhutan</option>
	<option value="Bolivia">Bolivia</option>
	<option value="Bonaire">Bonaire</option>
	<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
	<option value="Botswana">Botswana</option>
	<option value="Brazil">Brazil</option>
	<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
	<option value="Brunei">Brunei</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso">Burkina Faso</option>
	<option value="Burundi">Burundi</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Canary Islands">Canary Islands</option>
	<option value="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic">Central African Republic</option>
	<option value="Chad">Chad</option>
	<option value="Channel Islands">Channel Islands</option>
	<option value="Chile">Chile</option>
	<option value="China">China</option>
	<option value="Christmas Island">Christmas Island</option>
	<option value="Cocos Island">Cocos Island</option>
	<option value="Colombia">Colombia</option>
	<option value="Comoros">Comoros</option>
	<option value="Congo">Congo</option>
	<option value="Cook Islands">Cook Islands</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Cote DIvoire">Cote D'Ivoire</option>
	<option value="Croatia">Croatia</option>
	<option value="Cuba">Cuba</option>
	<option value="Curaco">Curacao</option>
	<option value="Cyprus">Cyprus</option>
	<option value="Czech Republic">Czech Republic</option>
	<option value="Denmark">Denmark</option>
	<option value="Djibouti">Djibouti</option>
	<option value="Dominica">Dominica</option>
	<option value="Dominican Republic">Dominican Republic</option>
	<option value="East Timor">East Timor</option>
	<option value="Ecuador">Ecuador</option>
	<option value="Egypt">Egypt</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Estonia">Estonia</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands">Falkland Islands</option>
	<option value="Faroe Islands">Faroe Islands</option>
	<option value="Fiji">Fiji</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
	<option value="French Guiana">French Guiana</option>
	<option value="French Polynesia">French Polynesia</option>
	<option value="French Southern Ter">French Southern Ter</option>
	<option value="Gabon">Gabon</option>
	<option value="Gambia">Gambia</option>
	<option value="Georgia">Georgia</option>
	<option value="Germany">Germany</option>
	<option value="Ghana">Ghana</option>
	<option value="Gibraltar">Gibraltar</option>
	<option value="Great Britain">Great Britain</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Grenada">Grenada</option>
	<option value="Guadeloupe">Guadeloupe</option>
	<option value="Guam">Guam</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Guinea">Guinea</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Hawaii">Hawaii</option>
	<option value="Honduras">Honduras</option>
	<option value="Hong Kong">Hong Kong</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran">Iran</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Isle of Man">Isle of Man</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kiribati">Kiribati</option>
	<option value="Korea North">Korea North</option>
	<option value="Korea Sout">Korea South</option>
	<option value="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Laos">Laos</option>
	<option value="Latvia">Latvia</option>
	<option value="Lebanon">Lebanon</option>
	<option value="Lesotho">Lesotho</option>
	<option value="Liberia">Liberia</option>
	<option value="Libya">Libya</option>
	<option value="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania">Lithuania</option>
	<option value="Luxembourg">Luxembourg</option>
	<option value="Macau">Macau</option>
	<option value="Macedonia">Macedonia</option>
	<option value="Madagascar">Madagascar</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Malawi">Malawi</option>
	<option value="Maldives">Maldives</option>
	<option value="Mali">Mali</option>
	<option value="Malta">Malta</option>
	<option value="Marshall Islands">Marshall Islands</option>
	<option value="Martinique">Martinique</option>
	<option value="Mauritania">Mauritania</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mayotte">Mayotte</option>
	<option value="Mexico">Mexico</option>
	<option value="Midway Islands">Midway Islands</option>
	<option value="Moldova">Moldova</option>
	<option value="Monaco">Monaco</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montserrat">Montserrat</option>
	<option value="Morocco">Morocco</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Myanmar">Myanmar</option>
	<option value="Nambia">Nambia</option>
	<option value="Nauru">Nauru</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherland Antilles">Netherland Antilles</option>
	<option value="Netherlands">Netherlands (Holland, Europe)</option>
	<option value="Nevis">Nevis</option>
	<option value="New Caledonia">New Caledonia</option>
	<option value="New Zealand">New Zealand</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Niger">Niger</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Niue">Niue</option>
	<option value="Norfolk Island">Norfolk Island</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Palau Island">Palau Island</option>
	<option value="Palestine">Palestine</option>
	<option value="Panama">Panama</option>
	<option value="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Phillipines">Philippines</option>
	<option value="Pitcairn Island">Pitcairn Island</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Puerto Rico">Puerto Rico</option>
	<option value="Qatar">Qatar</option>
	<option value="Republic of Montenegro">Republic of Montenegro</option>
	<option value="Republic of Serbia">Republic of Serbia</option>
	<option value="Reunion">Reunion</option>
	<option value="Romania">Romania</option>
	<option value="Russia">Russia</option>
	<option value="Rwanda">Rwanda</option>
	<option value="St Barthelemy">St Barthelemy</option>
	<option value="St Eustatius">St Eustatius</option>
	<option value="St Helena">St Helena</option>
	<option value="St Kitts-Nevis">St Kitts-Nevis</option>
	<option value="St Lucia">St Lucia</option>
	<option value="St Maarten">St Maarten</option>
	<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
	<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
	<option value="Saipan">Saipan</option>
	<option value="Samoa">Samoa</option>
	<option value="Samoa American">Samoa American</option>
	<option value="San Marino">San Marino</option>
	<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
	<option value="Saudi Arabia">Saudi Arabia</option>
	<option value="Senegal">Senegal</option>
	<option value="Serbia">Serbia</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Sierra Leone">Sierra Leone</option>
	<option value="Singapore">Singapore</option>
	<option value="Slovakia">Slovakia</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Solomon Islands">Solomon Islands</option>
	<option value="Somalia">Somalia</option>
	<option value="South Africa">South Africa</option>
	<option value="Spain">Spain</option>
	<option value="Sri Lanka">Sri Lanka</option>
	<option value="Sudan">Sudan</option>
	<option value="Suriname">Suriname</option>
	<option value="Swaziland">Swaziland</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syria">Syria</option>
	<option value="Tahiti">Tahiti</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tajikistan">Tajikistan</option>
	<option value="Tanzania">Tanzania</option>
	<option value="Thailand">Thailand</option>
	<option value="Togo">Togo</option>
	<option value="Tokelau">Tokelau</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turkmenistan">Turkmenistan</option>
	<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
	<option value="Tuvalu">Tuvalu</option>
	<option value="Uganda">Uganda</option>
	<option value="Ukraine">Ukraine</option>
	<option value="United Arab Erimates">United Arab Emirates</option>
	<option value="United Kingdom">United Kingdom</option>
	<option value="United States of America">United States of America</option>
	<option value="Uraguay">Uruguay</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu">Vanuatu</option>
	<option value="Vatican City State">Vatican City State</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Vietnam">Vietnam</option>
	<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
	<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
	<option value="Wake Island">Wake Island</option>
	<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
	<option value="Yemen">Yemen</option>
	<option value="Zaire">Zaire</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>
						</select>
						<i></i>
					</label>
					</div><!-- end budget -->
				</div>

				<div class="j-row">
					<div class="span12 unit">
						<label class="label">College / Institute / University / Company * </label>
						<div class="input">
							<label class="icon-left" for="company">
								<i class="fa fa fa-graduation-cap"></i>
							</label>
							<input type="text" name="company" id="company">
						</div>
					</div>
				</div>


				<div class="j-row">
					<div class="span12 unit">
						<label class="label">Paper Title * </label>
						<div class="input">
							<label class="icon-left" for="title">
								<i class="fa fa-tag"></i>
							</label>
							<input type="text" name="title" id="title">
						</div>
					</div>
				</div>



				<div class="unit">
					<label class="label">Upload Papper / Manuscript *</label>
					<label class="input append-big-btn">
						<label class="icon-left" for="append-big-btn">
							<i class="fa fa-download"></i>
						</label>
						<div class="file-button">
							Browse
							<input type="file" name="file1"  onchange="document.getElementById('append-big-btn').value = this.value;">
						</div>
						<input type="text" id="append-big-btn" readonly="" placeholder="no file selected">
						<span class="hint">Only: doc , docx</span>

					</label>
				</div>

				<!-- start copy -->
				<div class="unit">
					<label class="checkbox">
						<input type="checkbox" id="check-enable-button">
						<i></i>
						I agree to <a href="#" class="link">Terms of Service and Privacy</a>
						<input type="hidden" name="action" id="action" value="add" />
					</label>
				</div>
				<!-- end copy -->

			</div>
			
<?php

if(isset($_GET['status'])==1) {
	echo "<div id='response'><div class='success-message unit'><i class='fa fa-check'></i>Your message has been sent</div></div>";
} 

?>
			
								 


			<div class="footer">
				<button type="submit" class="primary-btn disabled-view" id="enable-button" disabled="">Submit</button>
				<button type="reset" class="secondary-btn">Reset</button>
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
			username: {
                required: !0
            },
			phoneNumber: {
                required: !0,
                phoneUS: true
            },
			city: {
                required: !0
            },
			state: {
                required: !0
            },
			country: {
                required: !0
            },
			company: {
                required: !0
            },
			title: {
                required: !0
            },
			file1: {
                required: !0,
                extension: "doc|docx"
			}
        },
        messages: {
            username: {
                required: "Please Enter Username or Registered Email ID"
            },
            phoneNumber: {
                required: "Please Enter Your Mobile Number"
            },
            city: {
                required: "Please Enter Your  City"
            },
			state: {
                required: "Please Enter Your  State"
            },
			country:{
				 required: "Please Select a Country"
			},
			company:{
				 required: "Please Enter The College / Institute / University / Company"
			},
			title:{
				 required: "Please Enter The Paper Title"
			},
            file1: {
                required: "Please upload Paper",
                extension: "Incorrect file format"
            }
        },
        highlight: function(e, s, r) {
            $(e).closest(".input").removeClass(r).addClass(s), ($(e).is(":checkbox") || $(e).is(":radio")) && $(e).closest(".check").removeClass(r).addClass(s)
        },
        unhighlight: function(e, s, r) {
            $(e).closest(".input").removeClass(s).addClass(r), ($(e).is(":checkbox") || $(e).is(":radio")) && 	$(e).closest(".check").removeClass(s).addClass(r)
        },
        errorPlacement: function(e, s) {
            $(s).is(":checkbox") || $(s).is(":radio") ? $(s).closest(".check").append(e) : $(s).closest(".unit").append(e)
        }
    })
});
</script>


	<!-- Scripts -->
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/additional-methods.min.js"></script>
	<script src="js/jquery.form.min.js"></script>
	<script src="js/j-forms.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<!--[if lt IE 10]>
			<script src="j-folder/js/jquery.placeholder.min.js"></script>
		<![endif]-->
	<script>
	$(document).ready(function() {
////////////////////////////////////////////////////
		// Enabled button
		$('#check-enable-button').on('change', function() {
			if ( $('#check-enable-button').is(':checked') ) {
				$('#enable-button').attr('disabled', false).removeClass('disabled-view');
			} else {
				$('#enable-button').attr('disabled', true).addClass('disabled-view');
			};
		});
////////////////////////////////////////////////////
	});
	</script>

<script>
if(window.location.href.indexOf('g/menuscript.php?status=1')!=-1)
{
  var x = 0;
  var myVar = setInterval(function(){
    if(x == 0){
      if(jQuery('.success-message').is(":visible") == true)
      {
        ga('send','event','form','submit','menuscript');
        clearInterval(myVar);
        x = 1;
      }
    }
  }, 1000);
}
</script>


</body>
</html>