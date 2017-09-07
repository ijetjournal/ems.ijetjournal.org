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
   <title>IJET | Reviewer Registration Form</title>

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

		<form enctype="multipart/form-data" action="email_Reviewer.php" method="post" id="j-forms" class="j-forms" novalidate>

			<div class="header">
				<p>IJET - Reviewer Registration Form</p>
			</div>


			<div class="content">

				
<div class="j-row">
	<div class="span12 unit">					
<?php

if(isset($_GET['status'])==1) {
	echo "<div id='response'><div class='success-message unit'><i class='fa fa-check'></i>Your message has been sent</div></div>";
} 

?>
</div></div>	
				
				
				
				<div class="j-row">
					<div class="span2 unit">
						<label class="label">&nbsp;</label>
						<label class="input select">
						<select name="gender">
							<option value="Mr">Mr.</option>
							<option value="Ms">Ms.</option>
							<option value="Prof">Prof.</option>
							<option value="Dr">Dr.</option>
						</select>
						<i></i>
					</label>
					</div>

					<div class="span4 unit">
						<label class="label">Full Name *</label>
						<div class="input">
							<label class="icon-left" for="fullName">
								<i class="fa fa-user"></i>
							</label>
							<input type="text" id="fullName" name="fullName">
						</div>
					</div>

					<div class="span6 unit">
						<label class="label">Branch *</label>
						<label class="input select">
						<select name="branch">
							<option value="none" selected="" disabled="">Please Select</option>
							<option value="Aeronautical Engineering ">Aeronautical Engineering </option>
							<option value="Agricultural Engineering">Agricultural Engineering</option>
							<option value="Applied sciences">Applied sciences</option>
							<option value="Bio Mechanical & Bio Medical Engineering">Bio Mechanical & Bio Medical Engineering</option>
							<option value="Chassis Engineering">Chassis Engineering </option>
							<option value="Chemical Engineering">Chemical Engineering</option>
							<option value="Civil Engineering">Civil Engineering</option>
							<option value="Communication Engineering">Communication Engineering</option>
							<option value="Construction Technology">Construction Technology</option>
							<option value="Earthquake engineering">Earthquake engineering</option>
							<option value="Electrical Engineering">Electrical Engineering</option>
							<option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
							<option value="Engineering Education">Engineering Education</option>
							<option value="Engineering Management">Engineering Management</option>
							<option value="Engineering Mathematics">Engineering Mathematics</option>
							<option value="Engineering Technology">Engineering Technology</option>
							<option value="Environment Engineering">Environment Engineering</option>
							<option value="Gas Engineering">Gas Engineering</option>
							<option value="Geo Technical Engineering">Geo Technical Engineering</option>
							<option value="Geological Engineering">Geological Engineering</option>
							<option value="Industrial Engineering">Industrial Engineering</option>
							<option value="Information & Technology">Information & Technology</option>
							<option value="Integrated Engineering">Integrated Engineering</option>
							<option value="Library and Information Science">Library and Information Science</option>
							<option value="Machine Engineering">Machine Engineering</option>
							<option value="Manufacturing Engineering">Manufacturing Engineering</option>
							<option value="Materials Engineering">Materials Engineering</option>
							<option value=" Materials Sciences"> Materials Sciences</option>
							<option value="Mathematics">Mathematics</option>
							<option value="Mechanical Engineering">Mechanical Engineering</option>
							<option value="Mineral & Metallurgical Engineering">Mineral & Metallurgical Engineering</option>
							<option value="Mining Engineering">Mining Engineering</option>
							<option value="Model Engineering">Model Engineering</option>
							<option value="Naval Architectural Engineering">Naval Architectural Engineering</option>
							<option value="Physics">Physics</option>
							<option value="Production Engineering">Production Engineering</option>
							<option value="Software Technology">Software Technology</option>
							<option value="Telecommunication Engineering">Telecommunication Engineering</option>
							<option value="Others">Others</option>
						</select>
						<i></i>
					</label>
					</div>
				</div>

				<div class="j-row">
					<div class="span6 unit">
						<label class="label">Username(Email-ID) *</label>
						<div class="input">
							<label class="icon-left" for="userName">
								<i class="fa fa-user"></i>
							</label>
							<input type="text" id="userName" name="userName">
						</div>
					</div>
					<div class="span6 unit">
						<label class="label">Qualification *</label>
						<label class="input select">
						<select name="qualification">
							<option value="none" selected="" disabled="">Please Select</option>
							<option value="Ph. D">Ph. D</option>
							<option value="M.Phil">M.Phil</option>
							<option value="MCA">MCA</option>
							<option value="M.Sc.">M.Sc</option>
							<option value="M. E">M. E</option>
							<option value="M. Tech">M. Tech</option>
							<option value="B.Tech">B.Tech</option>
							<option value="Post Doctorates">Post Doctorates</option>
							<option value="Others">Others</option>
						</select>
						<i></i>
					</label>
					</div>

				</div>

				<div class="j-row">
					<div class="span6 unit">
						<label class="label">Password *</label>
						<div class="input">
							<label class="icon-right" for="password">
								<i class="fa fa-unlock"></i>
							</label>
							<input type="password" id="password" name="password" placeholder="password">
						</div>
						<label class="checkbox">
							<input type="checkbox" id="show-pass">
							<i></i>
							Show password
						</label>
					</div>

					<div class="span6 unit">
						<label class="label">Affiliation (University / College / Company) *</label>
						<div class="input">
							<label class="icon-left" for="company">
								<i class="fa fa-street-view"></i>
							</label>
							<input type="text" name="company" id="company">
						</div>
					</div>
				</div>

				<div class="j-row">
					<div class="span6 unit">
						<label class="label">Confirm - Password *</label>
						<div class="input">
							<label class="icon-right" for="confirm-password">
								<i class="fa fa-unlock"></i>
							</label>
							<input type="password" id="confirm-password" name="confirm_password" placeholder="confirm password">
						</div>
						<label class="checkbox">
							<input type="checkbox" id="show-conf-pass">
							<i></i>
							Show password
						</label>
					</div>

					<div class="span6 unit">
						<label class="label">Designation *</label>
						<label class="input select">
						<select name="designation">
							<option value="none" selected="" disabled="">Please Select</option>
							<option value="Assistant Professor">Assistant Professor</option>
							<option value="Professor">Professor</option>
							<option value="Principal">Principal</option>
							<option value="Associate Professor">Associate Professor</option>
							<option value="Lecturer">Lecturer</option>
							<option value="Scientist">Scientist</option>
							<option value="Director">Director</option>
							<option value="Professional (Researcher)">Researcher</option>
							<option value="H.O.D">H.O.D</option>
							<option value="Dean">Dean</option>
						</select>
						<i></i>
					</label>
					</div>
				</div>


				<div class="j-row">
					<div class="span6 unit">
						<label class="label">Phone Number (Residence / Office / Work)</label>
						<div class="input">
							<label class="icon-left" for="mobileNumber">
								<i class="fa fa-phone"></i>
							</label>
							<input type="text" id="mobileNumber" name="mobileNumber" />
						</div>
					</div>

					<div class="span6 unit">
						<label class="label">Total Academic Experience (in Years) * </label>
						<label class="input select">
							<select name="academicYear">
								<option value="none" selected="" disabled="">Please Select</option>
                                                                <option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								<option value="32">32</option>
								<option value="33">33</option>
								<option value="34">34</option>
								<option value="35">35</option>
								<option value="36">36</option>
								<option value="37">37</option>
								<option value="38">38</option>
								<option value="39">39</option>
								<option value="40">40</option>
								<option value="41">41</option>
								<option value="42">42</option>
								<option value="43">43</option>
								<option value="44">44</option>
								<option value="45">45</option>
								<option value="46">46</option>
								<option value="47">47</option>
								<option value="48">48</option>
								<option value="49">49</option>
								<option value="50">50</option>
								<option value="51">51</option>
								<option value="52">52</option>
								<option value="53">53</option>
								<option value="54">54</option>
								<option value="55">55</option>
								<option value="56">56</option>
								<option value="57">57</option>
								<option value="58">58</option>
								<option value="59">59</option>
								<option value="60">60</option>
								<option value="61">61</option>
								<option value="62">62</option>
								<option value="63">63</option>
								<option value="64">64</option>
								<option value="65">65</option>
								<option value="66">66</option>
								<option value="67">67</option>
								<option value="68">68</option>
								<option value="69">69</option>
								<option value="70">70</option>
								<option value="71">71</option>
								<option value="72">72</option>
								<option value="73">74</option>
								<option value="74">74</option>
								<option value="75">75</option>
							</select>
						<i></i>
					</label>
					</div>
				</div>

				<div class="j-row">
					<div class="span6 unit">
						<label class="label">Mobile Number (Enter Without country code) *</label>
						<div class="input">
							<label class="icon-left" for="phoneNumber">
								<i class="fa fa-phone"></i>
							</label>
							<input type="text" id="phoneNumber" name="phoneNumber">
							<span class="tooltip tooltip-right-top">Without country code</span>
						</div>
					</div>

					<div class="span2 unit">
						<label class="label">Date Of Birth *</label>
						<label class="input select">
							<select name="day1">
								<option value="" selected="">Day</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
							<i></i>
						</label>
					</div>

					<div class="span2 unit">
						<label class="label">&nbsp;</label>
						<label class="input select">
							<select name="dayMonth">
								<option value="" selected="">Month</option>
								<option value="jan">January</option>
								<option value="feb">February</option>
								<option value="mar">March</option>
								<option value="apr">April</option>
								<option value="may">May</option>
								<option value="jun">June</option>
								<option value="jul">July</option>
								<option value="aug">August</option>
								<option value="sep">September</option>
								<option value="oct">October</option>
								<option value="nov">November</option>
								<option value="dec">December</option>
							</select>
							<i></i>
						</label>
					</div>

					<div class="span2 unit">
						<label class="label">&nbsp;</label>
						<label class="input select">
							<select name="dayYear">
								<option value="" selected="">Year</option>
								<option value="2015">2015</option>
								<option value="2016">2014</option>
								<option value="2017">2013</option>
								<option value="2018">2012</option>
								<option value="2019">2011</option>
								<option value="2020">2010</option>
								<option value="2021">2009</option>
								<option value="2022">2008</option>
								<option value="2021">2007</option>
								<option value="2022">2006</option>
								<option value="2021">2005</option>
								<option value="2022">2004</option>
								<option value="2021">2003</option>
								<option value="2022">2002</option>
								<option value="2021">2001</option>
								<option value="2022">2000</option>
								<option value="2021">1999</option>
								<option value="2022">1998</option>
								<option value="2021">1997</option>
								<option value="2022">1996</option>
								<option value="2021">1995</option>
								<option value="2022">1994</option>
								<option value="2021">1993</option>
								<option value="2022">1992</option>
								<option value="2021">1991</option>
								<option value="2022">1990</option>
								<option value="2021">1989</option>
								<option value="2022">1988</option>
								<option value="2021">1987</option>
								<option value="2022">1986</option>
								<option value="2021">1985</option>
								<option value="2022">1984</option>
								<option value="2021">1983</option>
								<option value="2022">1982</option>
								<option value="2021">1981</option>
								<option value="2022">1980</option>
								<option value="2021">1979</option>
								<option value="2022">1978</option>
								<option value="2021">1977</option>
								<option value="2022">1976</option>
								<option value="2021">1975</option>
								<option value="2022">1974</option>
								<option value="2021">1973</option>
								<option value="2022">1972</option>
								<option value="2021">1971</option>
								<option value="2022">1970</option>
								<option value="2021">1969</option>
								<option value="2022">1968</option>
								<option value="2021">1967</option>
								<option value="2022">1966</option>
								<option value="2021">1965</option>
								<option value="2022">1964</option>
								<option value="2021">1963</option>
								<option value="2022">1962</option>
								<option value="2021">1961</option>
								<option value="2022">1960</option>
								<option value="2021">1959</option>
								<option value="2022">1958</option>
								<option value="2021">1957</option>
								<option value="2022">1956</option>
								<option value="2021">1955</option>
								<option value="2022">1954</option>
								<option value="2021">1953</option>
								<option value="2022">1952</option>
								<option value="2021">1951</option>
								<option value="2022">1950</option>
								<option value="2021">1949</option>
								<option value="2022">1948</option>
								<option value="2021">1947</option>
								<option value="2022">1946</option>
								<option value="2021">1945</option>
								<option value="2022">1944</option>
								<option value="2021">1943</option>
								<option value="2022">1942</option>
								<option value="2021">1941</option>
								<option value="2022">1940</option>
							</select>
							<i></i>
						</label>
					</div>
				</div>



				<div class="j-row">
					<div class="span6 unit">
						<label class="label">State * </label>
						<div class="input">
							<label class="icon-left" for="state">
								<i class="fa fa fa-graduation-cap"></i>
							</label>
							<input type="text" name="state" id="state">
						</div>
					</div>

					<div class="span6 unit">
						<label class="label">Country * </label>
						<label class="input select">
						<select name="country">
							<option value="none" selected="" disabled="">Please Select</option>
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
					</div>
				</div>



			<div class="j-row">
				<div class="span6 unit">
					<label class="label">Postal Address *</label>
					<div class="input">
						<label class="icon-right" for="textarea">
							<i class="fa fa-file-text-o"></i>
						</label>
						<textarea spellcheck="false" id="textarea" name="postalAddress" ></textarea>
					</div>
				</div>

				<div class="span6 unit">
					<label class="label">Specialization (Enter Multiple by Comma / Newline) *</label>
					<div class="input">
						<label class="icon-right" for="textarea">
							<i class="fa fa-file-text-o"></i>
						</label>
						<textarea spellcheck="false" id="textarea" name="specialization" ></textarea>
					</div>
				</div>
			</div>


				<div class="j-row">

					<div class="span6 unit">
						<label class="label">Resume *</label>
						<label class="input append-small-btn">
							<div class="file-button">
								Upload
								<input type="file" name="file1"  onchange="document.getElementById('file1_input').value = this.value;">
							</div>
							<input type="text" id="file1_input" readonly="" placeholder="no file selected">
						</label>
					</div>

					<div class="span6 unit">
						<label class="label">Last Qualification Certificate *</label>
						<label class="input append-small-btn">
							<div class="file-button">
								Upload
								<input type="file"  name="file2" onchange="document.getElementById('file2_input').value = this.value;">
							</div>
							<input type="text" id="file2_input" readonly="" placeholder="no file selected">
						</label>
					</div>
				</div>


				<div class="j-row">
					<div class="span6 unit">
						<label class="checkbox">
							<input type="checkbox" id="check-enable-button">
							<i></i>
							I agree to <a href="#" class="link">Terms of Service and Privacy</a>
						</label>
					</div>

					<div class="span6 unit">
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



			</div>

			<div class="footer">
				<button type="submit" class="primary-btn disabled-view" id="enable-button" disabled="">Submit</button>
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

	$("#reload").click(function() {
		$("img#img").remove();
		var id = Math.random();
		$('<img id="img" src="captcha.php?id='+id+'"/>').appendTo("#imgdiv");
		id ='';
	});


		// Show password
		$("#show-pass").on("change", function(){
			$("#show-pass").is(":checked") ? $("#password").attr("type", "text") : $("#password").attr("type", "password");
		});

		// Show confirm password
		$("#show-conf-pass").on("change", function(){
			$("#show-conf-pass").is(":checked") ? $("#confirm-password").attr("type", "text") : $("#confirm-password").attr("type", "password");
		});



    $("#j-forms").validate({
        errorClass: "error-view",
        validClass: "success-view",
        errorElement: "span",
        onkeyup: !1,
        onclick: !1,
        rules: {
			fullName: {
                required: !0
            },
			userName: {
                required: !0
            },
			phoneNumber: {
                required: !0,
                phoneUS: true
            },
			branch: {
                required: !0
            },
			qualification: {
                required: !0
            },
			designation: {
                required: !0
            },
			academicYear: {
                required: !0
            },
			state: {
                required: !0
            },
			day1: {
                required: !0
            },
			dayMonth: {
                required: !0
            },
			dayYear: {
                required: !0
            },
			country: {
                required: !0
            },
			company: {
                required: !0
            },
			postalAddress: {
                required: !0,
				minlength: 20
            },
			specialization: {
                required: !0,
				minlength: 20
            },
			password: {
				required: true,
				minlength: 6,
				maxlength: 14
			},
			confirm_password: {
				required: true,
				minlength: 6,
				maxlength: 14,
				equalTo: '#password'
			},
			file1: {
                required: !0,
                extension: "doc|docx"
            },
			file2: {
                required: !0
            },
			captcha_code:{
				required: !0,
                equalTo: '#code'
			}
        },
        messages: {
            fullName: {
                required: "Please Enter Full Name"
            },
            userName: {
                required: "Please Enter Username or Registered Email ID"
            },
            phoneNumber: {
                required: "Please Enter Your Mobile Number"
            },
            branch: {
                required: "Please Enter Your  Branch"
            },
			qualification: {
                required: "Please Enter Your  Qualification"
            },
			designation: {
                required: "Please Enter Your  Designation"
            },
			academicYear: {
                required: "Please Select Academic Year"
            },
			day1: {
                required: "Please Select Day"
            },
			dayMonth: {
                required: "Please Select Month"
            },
			dayYear: {
                required: "Please Select Year"
            },
			state: {
                required: "Please Enter Your  State"
            },
			country:{
				 required: "Please Select a Country"
			},
			company:{
				 required: "Please Enter The University / College / Company"
			},
			postalAddress:{
				 required: "Please Enter The Address"
			},
			specialization:{
				 required: "Please Enter The Specialization"
			},
			password: {
				required: 'Please password is required'
			},
			confirm_password: {
				required: 'Please confirm your password',
				equalTo: 'Mismatched passwords'
			},
            file1: {
                required: "Please upload Resume",
                extension: "Incorrect file format"
			},
            file2: {
                required: "Please upload Certificate"
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


	<!-- Scripts -->
	<script src="js/jquery.ui.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/additional-methods.min.js"></script>
	<script src="js/jquery.form.min.js"></script>
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

</body>
</html>