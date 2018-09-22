<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17001;
$hb_folder_layer=4;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

include $rootpath."universal/init/init_check.php";


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($hb_user_logged_in){
	die("<a href='/user/login/logout.php'>Log out</a> first to create another account");
}

$_SESSION['hb_user']['create_account']="Tf7g59k";
?>
<!doctype html>
<html>


<head>
	<link rel="shortcut icon" href="/images/universal/icon.png" media="screen" />
	<meta name="viewport" content="width=device-width">

	<title>Create Account</title>



</head>


<style>
@media screen and (min-width:900px){
	#reg_div{
		width:55%;
	}
	form[name=reg_form] input[type=text],
	form[name=reg_form] input[type=password],
	form[name=reg_form] input[type=date],
	form[name=reg_form] textarea,
	form[name=reg_form] input[type=tel],
	form[name=reg_form] input[type=email]
	{
		width:50%;
		margin-top:0px;
	}
	form[name=reg_form] select{
		width:53.2%;
		margin-top:0px;
	}

}
@media screen and (max-width:899px){
	#reg_div{
		width:85%;
	}
	form[name=reg_form] input[type=text],
	form[name=reg_form] input[type=password],
	form[name=reg_form] input[type=date],
	form[name=reg_form] textarea,
	form[name=reg_form] input[type=tel],
	form[name=reg_form] input[type=email]
	{
		width:95%;
		margin-top:7px;
	}

	form[name=reg_form] select{
		width:100%;
		margin-top:5px;
	}

}

html{
	position:relative;
	min-height:100%;
}
/*---------------------------------------------------------*/
#reg_div{
	text-align:left;
	border:1px solid #999;
	border-radius:7px;
	background:rgba(255,255,255,0.95);
	margin:100px auto 20px auto;
	box-shadow:#666 0px 0px 10px;
}
/*-------------------------------------------------------------*/
#reg_div>div>#form_label{
	text-align:center;
	font-size:30px;
	padding:15px 0px;
}
#reg_div>div>#main{
	font-size:20px;
	margin:30px;
}

</style>

<body>
<?php include "../../header.php"; ?>

	<div id="reg_div">


<style>

form[name=reg_form]>div>label{
	/*float:left;
	padding:5px;*/
	font-size:20px;
	/*width:45%;*/
}

form[name=reg_form] input[type=text],
form[name=reg_form] input[type=password],
form[name=reg_form] input[type=date],
form[name=reg_form] textarea,
form[name=reg_form] input[type=tel],
form[name=reg_form] input[type=email]
{
	float:right;
	font-size:18px;
	background:rgba(255,255,255,0.5);
	border:0px solid transparent;
	border:1px solid rgba(85,119,170,0.2);
	border-bottom:2px solid #57a;
	padding:10px;
	transition:box-shadow 0.3s, border 0.3s, background 0.3s;
}

form[name=reg_form] select{
	float:right;

	-webkit-appearance:none;
	-moz-appearance:none;
	-ms-appearance:none;

	background-image:url('/images/logo_select_arrow.png');
	background-position:95% center;
	background-repeat:no-repeat;
	background-size:8px auto;
	background-color:rgba(255,255,255,0.5);

	font-size:18px;
	border:0px solid transparent;
	border:1px solid rgba(85,119,170,0.3);
	border-bottom:2px solid #57a;
	padding:10px;
	transition:box-shadow 0.3s, border 0.3s, background 0.3s;
}

form[name=reg_form] input[type=text]:focus,
form[name=reg_form] select:focus,
form[name=reg_form] input[type=password]:focus,
form[name=reg_form] input[type=date]:focus,
form[name=reg_form] textarea:focus,
form[name=reg_form] input[type=tel]:focus,
form[name=reg_form] input[type=email]:focus
{
	background-color:rgba(85,119,170,0.04);
	border:1px solid rgba(85,119,170,0.8);
	border-bottom:2px solid #57a;
	box-shadow:#57a 0px 0px 2px;
}

form[name=reg_form] input[type=text]:hover,
form[name=reg_form] select:hover,
form[name=reg_form] input[type=password]:hover,
form[name=reg_form] input[type=date]:hover,
form[name=reg_form] textarea:hover,
form[name=reg_form] input[type=tel]:hover,
form[name=reg_form] input[type=email]:hover
{
	border:1px solid rgba(85,119,170,0.8);
	border-bottom:2px solid #57a;
	box-shadow:#57a 0px 0px 2px;
}

/*-------------------------------------------------------------*/

form[name=reg_form] #gender_div{
	margin-top:20px;
}

/*-------------------------------------------------------------*/

.input_element{
	width:100%;
	margin:auto;
}

/*-------------------------------------------------------------*/
form[name='reg_form']>input[name='submit_reg']{
	background:#57a;
	border:2px solid transparent;
	border-radius:5px;
	padding:10px;
	margin:5px;
	float:right;
	font-size:15px;
	font-weight:bold;
	color:white;
	box-shadow:rgba(120,120,120,0.6) 2px 2px 3px;
	transition:background 0.3s,color 0.3s, border 0.3s;
	cursor:pointer;
}
form[name='reg_form']>input[name='submit_reg']:hover{
	background:#CBE0FF;
	border:2px solid #57a;
	color:#2a4a7b;
}
/*-------------------------------------------------------------*/
form[name='reg_form']>input[name='reset']{
	background:#eee;
	border:2px solid transparent;
	border-radius:5px;
	padding:10px;
	margin:5px;
	font-size:15px;
	font-weight:bold;
	color:#888;
	box-shadow:rgba(120,120,120,0.6) 2px 2px 3px;
	transition:background 0.3s,color 0.3s, border 0.3s;
}
form[name='reg_form']>input[name='reset']:hover{
	background:#777;
	border:2px solid #777;
	color:white;
}

/*-------------------------------------------------------------*/

div[tprop$=_error_message]{
	clear:both;
	padding-top:4px;
	margin:5px;
	color:red;
	font-size:12px;
	text-align:right;
	height:0px;
	overflow:hidden;
	transition:height 0.3s;
}
</style>
	<div id="wrapper">
	<div id="form_label">Create Account</div>

	<!-- The line as div -->

	<div style="	 background:rgba(150,150,150,0.5);
			 background:-webkit-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-moz-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-ms-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
			 font-size:1px;
			 height:1px;
			 ">&nbsp;</div>

	<div id="main">

		<form name="reg_form" onSubmit="return check_form();">

		<div class="input_element">
		<label>
		First Name:
		<input type="text" autofocus name="first_name" placeholder="First Name" onblur="validateFirstName();" required />
		</label>
		</div>
		<div tprop="first_name_error_message"></div>


		<div class="input_element">
		<label>
		Last Name:
		<input type="text" name="last_name" placeholder="Last Name" onblur="validateLastName();" required />
		</label>
		</div>
		<div tprop="last_name_error_message"></div>


		<div class="input_element">
		<label>
		Date Of Birth:
		<input type="date" name="dob" required min="<?php echo date("Y-m-d",strtotime('-100year')); ?>" max="<?php echo date("Y-m-d",strtotime('-10year')); ?>" onblur="validateDOB();" />
		</label>
		</div>
		<div tprop="dob_error_message"></div>

		<div class="input_element" id="gender_div">
		<label class="radio_label">Gender: </label>
		<span style="float:right">
		<label><input type="radio" name="gender" value="Male" onblur="validateGender();" required /> Male </label>
		<lable><input type="radio" name="gender" value="Female"  /> Female </label>
		<label><input type="radio" name="gender" value="Other"  /> Other </label>
		</span>
		</div>
		<div tprop="gender_error_message"></div>


		<div class="input_element">
		<label>
		Address:
		<textarea placeholder="Your Permanent Address" rows="3" name="address" style="resize:none;" required onblur="validateAddress();" ></textarea>
		</label>
		</div>
		<div tprop="address_error_message"></div>


		<div class="input_element">
		<label>
		Pincode:
		<input type="text" placeholder="Pincode" name="pincode" onblur="validatePincode();" required />
		</label>
		</div>
		<div tprop="pincode_error_message"></div>

		<div class="input_element">
		<label>Phone:
		<input type="tel" placeholder="Phone" name="phone" onblur="validatePhone();" required />
		</label>
		</div>
		<div tprop="phone_error_message"></div>


		<div class="input_element">
		<label>E-mail:
		<input type="email" placeholder="e-mail" name="email" onblur="validateEmail();" required onblur="checkEmailExist(this);" />
		</label>
		</div>
		<div tprop="email_error_message"></div>


		<div class="input_element">
		<label>
		Security question:
		<select name="sqq" required >
		<option value="first_school">What is your first school</option>
		<option value="first_pet">What is your first pet</option>
		<option value="nick_name">What is your nick name</option>
		<option value="mother_name">What is your mother's name</option>
		<option value="head_master">Who was your first head master</option>
		<option value="first_tour">In which place you have travelled first</option>
		<option value="favourite_fruit">What is your favourite fruit</option>
		<option value="favourite_book">What is your favourite book</option>
		<option value="favourite_car">What is your favourite car</option>
		</select>
		</label>
		</div>
		<div tprop="sqq_error_message"></div>


		<div class="input_element">
		<label>
		Answer:
		<input type="text" placeholder="Answer of question" name="sqa" required onblur="validateSequrityQuestion();" />
		</label>
		</div>
		<div tprop="sqa_error_message"></div>

		<div class="input_element">
		<label>
		Choose Username:
		<input type="text" placeholder="Username" name="username" onblur="validateUsername();" required />
		</label>
		</div>
		<div tprop="username_error_message"></div>


		<div class="input_element">
		<label>
		Give password:
		<input type="password" placeholder="Password" name="password" onblur="validatePassword();" required />
		</label>
		</div>
		<div tprop="password_error_message"></div>


		<div class="input_element">
		<label>
		Re-enter Password:
		<input placeholder="Re-enter password" type="password" name="confirm_password" onblur="confirmPassword();" required />
		</label>
		</div>
		<div tprop="confirm_password_error_message"></div>

		<br />

		<label>
		<input type="checkbox" name="accept" onblur="validateAccept();" required />
		I am accepting
		<a href="javascrpt:showTermsAndConditions()" id="terms_and_conditions">
		<style>
		form[name=reg_form] #terms_and_conditions{
			text-decoration:none;
			color:#358;
			transition:color 0.3s;
		}
		form[name=reg_form] #terms_and_conditions:hover{
			color:#7191c1;
			text-decoration:underline;
		}
		form[name=reg_form] #terms_and_conditions:focus{
			text-decoration:underline;
		}
		</style>
		the terms and conditions</a>.</label>
		<div tprop="terms_and_conditions_error_message"></div>
		<br />

		<div id="captcha">
		<!--label for="capchaText">Capcha: </label>
		<input type="text" name="capchaText" required /-->
		<?php include $rootpath."user/captcha/controller.php" ?>
		</div>
		<div tprop="captcha_error_message"></div>
		<br />

		<input type="reset" value="Reset" name="reset" onreset="reset_form();" />
		<input type="Submit" value="Register" name="submit_reg" />


	</form>
	</div> <!--div main-->

	</div><!--div wrapper-->

	<div id="Splash_Screen">

	</div>

	</div><!--div reg_div-->


	<script>

	/********************************************************************************************************************/

	//function of show error

	function showError(string,obj,col){
		document.querySelector("div[tprop="+obj+"]").innerText=string;

		document.querySelector("div[tprop="+obj+"]").style.height="auto";
		tprop_height667=document.querySelector("div[tprop="+obj+"]").clientHeight;
		//document.title=tprop_height667;
		document.querySelector("div[tprop="+obj+"]").style.height="0px";

		setTimeout(function (){
			document.querySelector("div[tprop="+obj+"]").style.height=tprop_height667+"px";
		},0);
		document.querySelector("div[tprop="+obj+"]").setAttribute("error_tprop_showed","true");

		if(col){
			document.querySelector("div[tprop="+obj+"]").style.color=col;
		}else{
			document.querySelector("div[tprop="+obj+"]").style.color="red";
		}
	}


	//hide error
	function hideError(obj){
		document.querySelector("div[tprop="+obj+"]").style.height="0px";
		document.querySelector("div[tprop="+obj+"]").setAttribute("error_tprop_showed","false");
		document.querySelector("div[tprop="+obj+"]").innerText="";

	}

	/********************************************************************************************************************/

	/*******************************************************************************************************************

	section of username checking only

	*******************************************************************************************************************/
	uservalid=false;
	function checkUserExist(username){

		var request = new XMLHttpRequest;
		url="checkuser.php?username="+username.value;
		request.open("POST",url,true);
		request.onreadystatechange=function(){
			if(request.readyState==4 && request.status==200){
				if(request.responseText.substr(0,6)=="Inform"){

					if(request.responseText.substr(7)=="2120"){
						//document.title=request.responseText.substr(7);
						uservalid=true;

					}else{
						if(request.responseText.substr(7)=="2106"){
							//document.title=request.responseText.substr(7);
							uservalid=false;
						}else{

							//or other code
						}
					}
				}else{
					//else code here
				}

				if(uservalid){
						hideError("username_error_message");
						showError("Your username is available","username_error_message","green");
					return true;
				}else{
					document.querySelector("div[tprop=username_error_message]").style.display="block";
					//document.reg_form.username.focus();
					showError("username is already taken!","username_error_message");
					return false;
				}

			}
		}
		request.send(null);
		//change before getting request
		showError("Checking availability ...","username_error_message","red");
	}

	/*******************************************************************************************************************

	section of email checking only

	*******************************************************************************************************************/
	emailvalid=false;
	function checkEmailExist(email){
		var request = new XMLHttpRequest;
		url="checkuser.php?email="+email.value;
		request.open("POST",url,true);
		request.onreadystatechange=function(){
			if(request.readyState==4 && request.status==200){
				if(request.responseText.substr(0,6)=="Inform"){

					if(request.responseText.substr(7)=="0520"){
						//document.title=request.responseText.substr(7);
						emailvalid=true;

					}else{
						if(request.responseText.substr(7)=="0506"){
							//document.title=request.responseText.substr(7);
							emailvalid=false;
						}else{

							//or other code

							///end of other code

						}
					}
			}

			if(emailvalid){
					hideError("email_error_message");
					showError("Your email address is available","email_error_message","green");
					return true;
				}else{
					document.querySelector("div[tprop=email_error_message]").style.display="block";
					//document.reg_form.email.focus();
					showError("email is already used!","email_error_message","red");
					return false;
				}
			}
		}
		request.send(null);
		//change before getting request
		showError("Checking availability ...","email_error_message","red");
	}

	/*******************************************************************************************************************

	Section of ultimate form checking

	*********************************************************************************************************************/
	//first name checking ...
	function validateFirstName(){
		var myRegExp=/[^a-z\^A-Z ]/g;
		if(!(myRegExp.test(document.reg_form.first_name.value))){
			if(document.reg_form.first_name.value.length>=1 && document.reg_form.first_name.value.length<=30){
				hideError("first_name_error_message");
				return true;
			}else{
				//document.reg_form.first_name.focus();
				showError("Length of first name should lie between 1-30","first_name_error_message");
				return false;
			}
		}else{
			//document.reg_form.first_name.focus();
			showError("First name should contain only A-Z and a-z","first_name_error_message");
			return false;
		}
	}

	//last name checking ...
	function validateLastName(){
		var myRegExp=/[^a-z\^A-Z ]/g;
		if(!(myRegExp.test(document.reg_form.last_name.value))){
			if(document.reg_form.last_name.value.length>=1 && document.reg_form.last_name.value.length<=30){
				hideError("last_name_error_message");
				return true;
			}else{
				//document.reg_form.last_name.focus();
				showError("Length of last name should lie between 1-30","last_name_error_message");
				return false;
			}
		}else{
			//document.reg_form.last_name.focus();
			showError("Last name should contain only A-Z and a-z","last_name_error_message");
			return false;
		}
	}

	///dob checking
	function validateDOB(){
		//alert(document.reg_form.dob.value);
		if(document.reg_form.dob.value>="<?php echo date("Y-m-d",strtotime('-100year')); ?>" && document.reg_form.dob.value<="<?php echo date("Y-m-d",strtotime('-10year')); ?>"){
			hideError("dob_error_message");
			return true;
		}else{
			//document.reg_form.dob.focus();
			showError("Please provide valid date beteen <?php echo date("Y-m-d",strtotime('-100year')); ?> and <?php echo date("Y-m-d",strtotime('-10year')); ?> ","dob_error_message");
			return false;
		}
	}

	//address checking ...
	function validateAddress(){
		var myRegExp=/[\`\~\#\$\%\^\*\\\?\;\"\|\=\<\>\{\}]/g;
		if(!myRegExp.test(document.reg_form.address.value)){
			if(document.reg_form.address.value.length>=10 && document.reg_form.address.value.length<=100){
				hideError("address_error_message");
				return true;
			}else{
				//document.reg_form.address.focus();
				showError("Length of address should lie between 10-100","address_error_message");
				return false;
			}

		}else{
			//document.reg_form.address.focus();
			showError("address should not contain `~#$%^*\\?;\"|=<>{}","address_error_message");
			return false;

		}
	}

	///gender checking...
	function validateGender(){
		if(document.reg_form.gender.value!=""){
			hideError("gender_error_message");
			return true;
		}else{
			showError("Select a gender please","gender_error_message");
			//document.reg_form.gender.focus();
			return false;
		}
	}

	//pincode checking ...
	function validatePincode(){
		var myRegExp=/[\D]/g;
		if(!myRegExp.test(document.reg_form.pincode.value)){
			if(document.reg_form.pincode.value.length>=3 && document.reg_form.pincode.value.length<=20){
				hideError("pincode_error_message");
				return true;
			}else{
				//document.reg_form.pincode.focus();
				showError("Length of pincode should be 3-20!","pincode_error_message");
				return false;
			}

		}else{
			//document.reg_form.pincode.focus();
			showError("Pincode should contain number only!","pincode_error_message");
			return false;

		}
	}

	/*/country name checking ...
	function validateCountry(){
		var myRegExp=/[^a-z\^A-Z ]/g;
		if(!(myRegExp.test(document.reg_form.country.value))){
			if(document.reg_form.country.value.length>=2 && document.reg_form.country.value.length<=40){
				hideError("country_error_message");
				return true;
			}else{
				document.reg_form.country.focus();
				showError("Length of country name should lie between 2-40","country_error_message");
				return false;
			}
		}else{
			document.reg_form.country.focus();
			showError("country name should contain only A-Z and a-z","country_error_message");
			return false;
		}
	}*/

	//phone checking
	function validatePhone(){
		var myRegExp=/[\D]/g;
		if(!myRegExp.test(document.reg_form.phone.value)){
			if(document.reg_form.phone.value.length>=4 && document.reg_form.phone.value.length<=20){
				hideError("phone_error_message");
				return true;
			}else{
				//document.reg_form.phone.focus();
				showError("Length of phone number length shoule be 4-20","phone_error_message");
				return false;
			}
		}else{

			//document.reg_form.phone.focus();
			showError("Phone number should contain number only!","phone_error_message");
			return false;
		}
	}

	//check email ...
	function validateEmail(){
	var myRegExp=/[\`\~\#\$\%\^\*\\\?\;\"\|\=\<\>\{\}\,\']/g;
	if(!myRegExp.test(document.reg_form.email.value)){
		var myRegExp=/[\@]/g;
		if(document.reg_form.email.value.match(myRegExp)){
			var myRegExp=/[\.]/g;
			if(document.reg_form.email.value.match(myRegExp)){
				if(document.reg_form.email.value.length>=5 && document.reg_form.email.value.length<=50){

				checkEmailExist(document.reg_form.email);


				}else{
					//document.reg_form.email.focus();
					showError("Length of email should lie between 5-50!","email_error_message");
					return false;
				}
			}else{
				//document.reg_form.email.focus();
				showError("email should contain .(dot)","email_error_message");
				return false;
			}
		}else{
			//document.reg_form.email.focus();
			showError("email should contain @","email_error_message");
			return false;
		}
	}else{
		//document.reg_form.email.focus();
		showError("email should not contain `~#$%^*\\?;\",|=<>{}","email_error_message");
		return false;
	}
	}

	//check security questions ...
	function validateSequrityQuestion(){
		if(document.reg_form.sqa.value.length>=2 && document.reg_form.sqa.value.length<=100){
			hideError("sqa_error_message");
			return true;
		}else{
				//document.reg_form.sqa.focus();
				showError("Length of security questions should lie between 2-100!","sqa_error_message");
				return false;
			}
		}





	//username checking ...
	function validateUsername(){
		var myRegExp=/[^a-z\d]/gi;
		var myRegExp2=/[\.\_]/g;
		if(!myRegExp.test(document.reg_form.username.value)){
			if(document.reg_form.username.value.length>=4 && document.reg_form.username.value.length<=30){
				return checkUserExist(document.reg_form.username);


			}else{
				showError("Length of username should lie between 4-30","username_error_message");
				//document.reg_form.username.focus();
				return false;
			}
		}else{
			if(myRegExp2.test(document.reg_form.username.value)){
				if(document.reg_form.username.value.length>=4 && document.reg_form.username.value.length<=30){

					return checkUserExist(document.reg_form.username);

				}else{
					showError("Length of username should lie between 4-30","username_error_message");
					//document.reg_form.username.focus();
					return false;
				}
			}else{
				showError("username should contain a-z, A-Z, 0-9, . and _ only!","username_error_message");
				//document.reg_form.username.focus();
				return false;
			}

		}
	}

	//password checking ...
	function validatePassword(){
		var myRegExp=/[\=\"\'\(\){\}\[\]]/g;
		if(!myRegExp.test(document.reg_form.password.value)){
			myRegExp=/[a-z]/g;
			if(document.reg_form.password.value.match(myRegExp)){
				myRegExp=/[A-Z]/g;
				if(document.reg_form.password.value.match(myRegExp)){
					myRegExp=/\d/g;
					if(document.reg_form.password.value.match(myRegExp)){
						myRegExp=/[\~\`\!\@\#\$\%\^\&\*\_\-\+\|\/\:\;\?\.\,\<\>]/g;
						if(document.reg_form.password.value.match(myRegExp)){
							if(document.reg_form.password.value.length>=8 && document.reg_form.password.value.length<=30){
								hideError("password_error_message");
								return true;
							}else{
								//document.reg_form.password.focus();
								showError("Length of password should lie between 8-30","password_error_message");
								return false;
							}
						}else{
							//document.reg_form.password.focus();
							showError("Password should contain at least one special character like ~`!@#$%^&*()_-+|/:;?.,<>!","password_error_message");
							return false;
						}
					}else{
						//document.reg_form.password.focus();
						showError("Password should contain at least one numerical character!","password_error_message");
						return false;
					}
				}else{
					//document.reg_form.password.focus();
					showError("Password should contain at least one uppercase character!","password_error_message");
					return false;
				}
			}else{
				//document.reg_form.password.focus();
				showError("Password should contain at least one lowercase character!","password_error_message");
				return false;
			}
		}else{
			//document.reg_form.password.focus();
			showError("Password should not contain ={}[]() \' and \"","password_error_message");
			return false;
		}
	}

	//check confirm password ...
	function confirmPassword(){
		if(document.reg_form.password.value==document.reg_form.confirm_password.value){
			hideError("confirm_password_error_message");
			return true;
		}else{
			//document.reg_form.password.focus();
			showError("Password mismatched! ","confirm_password_error_message");
			return false;
		}
	}

	//check accept terms and conditions
	function validateAccept(){
		if(document.reg_form.accept.checked){
			hideError("terms_and_conditions_error_message");
			return true;
		}else{
			//document.reg_form.accept.focus();
			showError("You have to accept terms and conditions to register!","terms_and_conditions_error_message");
			return false;
		}
	}

	//check capcha text
	global_captcha_verified=false;
	function validateCapcha(){
		if(global_captcha_verified==true){
			return true;
		}else{
			showError("Captcha Not Verified.","captcha_error_message");
			return false;
		}

	}

	function check_form(){

		var flag = validateFirstName();
		flag = flag && validateLastName();
		flag = flag && validateGender();
		flag = flag && validateAddress();
		flag = flag && validatePincode();
		//flag = flag && validateCountry();//obtain from ip
		flag = flag && validatePhone();
		flag = flag && emailvalid;  //not a function
		flag = flag && validateSequrityQuestion();
		flag = flag && uservalid;  //not a function
		flag = flag && validatePassword();
		flag = flag && confirmPassword();
		flag = flag && validateAccept();
		flag = flag && validateCapcha();


		if(flag){
			url="first_name="+encodeURIComponent(document.reg_form.first_name.value).trim()+"&";
			url+="last_name="+encodeURIComponent(document.reg_form.last_name.value).trim()+"&";
			url+="dob="+encodeURIComponent(document.reg_form.dob.value).trim()+"&";
			url+="gender="+encodeURIComponent(document.reg_form.gender.value).trim()+"&";
			url+="address="+encodeURIComponent(document.reg_form.address.value).trim()+"&";
			url+="pincode="+encodeURIComponent(document.reg_form.pincode.value).trim()+"&";
			url+="username="+encodeURIComponent(document.reg_form.username.value).trim()+"&";
			url+="password="+encodeURIComponent(document.reg_form.password.value)+"&";
			url+="confirm_password="+encodeURIComponent(document.reg_form.confirm_password.value)+"&";
			url+="phone="+encodeURIComponent(document.reg_form.phone.value).trim()+"&";
			url+="email="+encodeURIComponent(document.reg_form.email.value).trim()+"&";
			url+="sqq="+encodeURIComponent(document.reg_form.sqq.value).trim()+"&";
			url+="sqa="+encodeURIComponent(document.reg_form.sqa.value).trim();

			request=new XMLHttpRequest();
			request.open("POST","request.php",true);
			request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			request.onreadystatechange=getResponse;
			request.send(url);

			document.getElementById("wrapper").style.display="none";
			document.getElementById("Splash_Screen").style.display="block";
			//setInterval("Wait_Wheel_Transition()",1000);
			//alert('sa')

		}


		return false;
	}
////////////////////////////////////////////////AJAX Function/////////////////////////////////////////////////////////////////
	function getResponse(){
		if(request.readyState==4 && request.status==200){
			//alert(request.responseText);
			if(request.responseText.substr(0,5)=="Error"){
				alert(request.responseText.substr(6));
			}else{
				if(request.responseText.substr(0,4)=="Done"){
					document.getElementById("reg_div").innerHTML=request.responseText.substr(5);
				}
			}
		}

//alert(request.responseText);
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	</script>

	</div>

<div id="footer_blank_0032">&nbsp;</div>
<?php
///////////////////////////////////////////////include footer/////////////////////////////////////////////////////
 include $rootpath."user/login/footer.php";?>
<style>
#hb_user_footer{
	position:absolute;
	bottom:0px;
}
</style>
</body>

<script>

	document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_user_footer").getBoundingClientRect().height+30)+"px";

</script>
</html>
