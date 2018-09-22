<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$hb_folder_layer=4;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

$pageid="17002";
//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_SESSION['hb_user']['create_account']) && $_SESSION['hb_user']['create_account']=="Tf7g59k"){

}else{
	die("Unauthorized Entry!");
}

if(isset($_SESSION['hb_captcha']['isverified']) && $_SESSION['hb_captcha']['isverified']=="Im6fL24"){

}else{
	die("Error:Invalid captcha.");
}

/*/checking in php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Rule is that:
The server will send Email activation link to the corresponding mail and a request code that also will be included in the mail will be shown to the user at the browser. In the account creation there is nothing to show now. user can proceed after activating the mail.
*/
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//checking firstname
function validateFirstName($name){
	if(!preg_match("/[^A-Z\^a-z ]/",$name)){
		if(strlen($name)>=1 && strlen($name)<=30){
			return true;
		}else{
			echo "Error:Length of firstname should be 1 to 30";
			return false;
		}
	}else{
		echo 'Error:first name should contain A-Z and a-z only';
		return false;
	}
}


//checking lasttname
function validateLastName($name){
	if(!preg_match("/[^A-Z\^a-z ]/",$name)){
		if(strlen($name)>=1 && strlen($name)<=30){
			return true;
		}else{
			echo "Error:Length of lastname should be 1 to 30";
			return false;
		}
	}else{
		echo 'Error:last name should contain A-Z and a-z only';
		return false;
	}
}

//check date of birth
function validateDOB($dob){
	if($dob>date("Y-m-d",strtotime('-100year')) && $dob < date("Y-m-d",strtotime('-10year'))){
		return true;
	}else{
		echo "Error:DOB should after ".date("Y-m-d",strtotime('-100year'))." and before ".date("Y-m-d",strtotime('-10year'));
		return false;
	}
}

//check gender
function validateGender($gender){
	if($gender=='Male' | $gender=='Female' | $gender=='Other'){
		return true;
	}else{
		echo "Error:Please select your gender";
	}
}

//checking address
function validateAddress($address){
	if(!preg_match("/[\`\~\#\$\%\^\*\\\?\;\"\|\=\<\>\{\}]/",$address)){
		if(strlen($address)>=10 && strlen($address)<=100){

			return true;
		}else{
			echo "Error:Length of address should be 10 to 100";
			return false;
		}
	}else{
		echo 'Error:address should not contain `~#$%^*\\?;\"|=<>{}';
		return false;
	}
}

//checking pincode ...
function validatePincode($pincode){
	if(!preg_match("/[\D]/",$pincode)){
		if(strlen($pincode)<=20){
			return true;
		}else{
			echo "Error:Length of pincode should be less than 20 only!";
			return false;
		}
	}else{
		echo "Error:Pincode should contain number only!";
		return false;
	}
}

/*/validate country
function validateCountry($country){
	if(!preg_match("/[^A-Z\^a-z]/",$country)){
		if(strlen($country)>=2 && strlen($country)<=40){
			return true;
		}else{
			echo "Error:Length of country should be 2 to 40";
			return false;
		}
	}else{
		echo 'Error:country name should contain A-Z and a-z only';
		return false;
	}
}*/

//validate phone ...
function validatePhone($phone){
	if(!preg_match("/[\D]/",$phone)){
		if(strlen($phone)<=20){
			return true;
		}else{
			echo "Error:Length of phone number length should less than 20";
			return false;
		}
	}else{
		echo "Error:Phone number should contain number only!";
		return false;
	}
}

//validate email
function validateEmail($email){
	if(!preg_match("/[\`\~\#\$\%\^\*\\\?\;\"\|\=\<\>\{\}\']/",$email)){
		if(preg_match("/(\w)+@{1}(\w)+\.{1}(\w)+/",$email)){
			if(strlen($email)>=5 && strlen($email)<=50){
				return true;
			}else{
				echo "Length of email should lie between 5-50";
				return false;
			}
		}else{
			echo "Error:Invalid email format (format : exam@pl.com)";
			return false;
		}
	}else{
		echo 'Error:email should not contain `~#$%^*\\?;\"|=<>{}';
		return false;
	}
}

//checking security questions
function validateSecurityQuestion($question){
	if(strlen($question)>=2 && strlen($question)<=100){
		return true;
	}else{
		echo "Error:length of security question should 2-100";
		return false;
	}
}

//checking username
function validateUsername($username){
	if(!preg_match("/[^a-z\d]/i",$username)){
		if(strlen($username)>=4 && strlen($username)<=30){
			return true;
		}else{
			echo "Error:length username should 4-30";
			return false;
		}
	}else{
		if(preg_match("/[\.\_]/",$username)){
			if(strlen($username)>=4 && strlen($username)<=30){
				return true;
			}else{
				echo "Error:length of username should 4-30";
				return false;
			}
		}else{
			echo "Error:username should contain a-z, A-Z, 0-9, . and _ only!";
				return false;
		}
	}
}

//check password
function validatePassword($password){
	if(!preg_match("[\=\"\'\(\){\}\[\]]",$password)){
		if(preg_match("/[a-z]/",$password)){
			if(preg_match("/[A-Z]/",$password)){
				if(preg_match("/\d/",$password)){
					if(preg_match("/[\~\`\!\@\#\$\%\^\&\*\_\-\+\|\/\:\;\?\.\,\<\>]/",$password)){
						if(strlen($password)>=8 && strlen($password)<=30){
							return true;
						}else{
							echo "Error:length of password should 8-30";
							return false;
						}
					}else{
						echo "Error:Password should contain at least one special character like ~`!@#$%^&*()_-+|/:;?.,<>!";
						return false;
					}
				}else{
					echo "Error:Password should contain at least one numerical character!";
					return false;
				}
			}else{
				echo "Error:Password should contain at least one uppercase character!";
				return false;
			}
		}else{
			echo "Error:Password should contain at least one lowercase character!";
			return false;
		}
	}else{
		echo "Error:Password should not contain ={}[]() \' and \"";
		return false;
	}
}
 //checking confirm_password
 function validateConfirmPassword($password,$confirm_password){
 	if($password==$confirm_password){
 		return true;
 	}else{
 		echo "Error:password mismatch";
 		return false;
 	}
 }

$flag=validateFirstName($_POST['first_name']);
$flag=$flag && validatelastName($_POST['last_name']);
$flag=$flag && validateDOB($_POST['dob']);
$flag=$flag && validateGender($_POST['gender']);
$flag=$flag && validateAddress($_POST['address']);
$flag=$flag && validatePincode($_POST['pincode']);
$flag=$flag && validatePhone($_POST['phone']);
//$flag=$flag && validateCountry($_POST['country']);
$flag=$flag && validateEmail($_POST['email']);
$flag=$flag && validateSecurityQuestion($_POST['sqa']);
$flag=$flag && validateUsername($_POST['username']);
$flag=$flag && validatePassword($_POST['password']);
$flag=$flag && validateConfirmPassword($_POST['password'],$_POST['confirm_password']);

if($flag){

//generating rcode
$rcode=substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"),0,20);
//registerinf data

$query="INSERT INTO hb_user_tmp_data SET ";
$query.="ip='".mysqli_real_escape_string($hb_db,$hb_user_ip)."',";
$query.="date='".mysqli_real_escape_string($hb_db,date("Y-m-d"))."',";
$query.="time='".mysqli_real_escape_string($hb_db,date("H:i:s"))."',";

$query.="browser='".mysqli_real_escape_string($hb_db,$hb_user_browser)."',";
$query.="os='".mysqli_real_escape_string($hb_db,$hb_user_os)."',";
$query.="country='".mysqli_real_escape_string($hb_db,$hb_user_country_full)."',";
$query.="first_name='".mysqli_real_escape_string($hb_db,$_POST['first_name'])."',";
$query.="last_name='".mysqli_real_escape_string($hb_db,$_POST['last_name'])."',";
$query.="gender='".mysqli_real_escape_string($hb_db,$_POST['gender'])."',";
$query.="dob='".mysqli_real_escape_string($hb_db,$_POST['dob'])."',";
$query.="address='".mysqli_real_escape_string($hb_db,$_POST['address'])."',";
$query.="pincode='".mysqli_real_escape_string($hb_db,$_POST['pincode'])."',";
$query.="username='".mysqli_real_escape_string($hb_db,$_POST['username'])."',";
$query.="password='".mysqli_real_escape_string($hb_db,$_POST['password'])."',";
$query.="phone='".mysqli_real_escape_string($hb_db,$_POST['phone'])."',";
$query.="email='".mysqli_real_escape_string($hb_db,$_POST['email'])."',";
$query.="sqq='".mysqli_real_escape_string($hb_db,$_POST['sqq'])."',";
$query.="sqa='".mysqli_real_escape_string($hb_db,$_POST['sqa'])."',";
$query.="rcode='".$rcode."'";


if(mysqli_query($hb_db,$query)){

	//sending mail to the registered email address.
	include $rootpath."user/login/sign_up/mail_verification/send_mail.php";



	//sending mail verification page
		echo "Done:";

	$sendCode=<<<CODE

		<style>

@media screen and (min-width:900px){

	form[name=email_active_form] input[type=text]
	{
		width:50%;
		margin-top:0px;
	}

}
@media screen and (max-width:899px){

	form[name=email_active_form] input[type=text]

	{
		width:95%;
		margin-top:7px;
	}

}
			#mail_verify_heading{
				text-align:center;
				font-size:30px;
				padding:0px 0px;
				font-weight:normal;
			}
			#mail_verify_body{
				font-size:15px;
				padding:30px;
				padding-top:10px;
			}
			#mail_verify_body article{
				border-top:1px solid #CDCDCD;
			}
			#mail_verify_body article div:first-child{
				float:left;
				background:#57a;
				padding:5px;
				border-radius:100%;
				color:white;
				width:20px;
				height:20px;
				text-align:center;
				margin-top:10px;

			}

			form[name=email_active_form] input[type=text]{
				font-size:20px;
				background:rgba(255,255,255,0.5);
				border:0px solid transparent;
				border:1px solid rgba(85,119,170,0.2);
				border-bottom:2px solid #57a;
				padding:10px;
				transition:box-shadow 0.3s, border 0.3s, background 0.3s;
			}
			form[name=email_active_form] input[type=text]:hover{
				border:1px solid rgba(85,119,170,0.8);
				border-bottom:2px solid #57a;
				box-shadow:#57a 0px 0px 2px;
			}
			form[name=email_active_form] input[type=text]:focus{
				background:rgba(85,119,170,0.04);
				border:1px solid rgba(85,119,170,0.8);
				border-bottom:2px solid #57a;
				box-shadow:#57a 0px 0px 2px;
			}
			form[name=email_active_form]>input[name='submit_reg']{
				float:right;
				background:#57a;
				border:2px solid transparent;
				border-radius:5px;
				padding:10px;
				margin:10px;
				font-size:15px;
				font-weight:bold;
				color:white;
				box-shadow:rgba(120,120,120,0.6) 2px 2px 3px;
				transition:background 0.3s,color 0.3s, border 0.3s;
				cursor:pointer;
			}
			form[name=email_active_form]>input[name='submit_reg']:hover{
				background:#CBE0FF;
				border:2px solid #57a;
				color:#2a4a7b;
			}

		</style>
		<h1 id="mail_verify_heading">Verify your email</h1>

		<!-- The line as div -->
		<div style="	 background:rgba(150,150,150,0.5);
				 background:-webkit-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
			 	 background:-moz-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
			 	 background:-ms-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
				 font-size:1px;
				 height:1px;
				 ">&nbsp;</div>

		<section id="mail_verify_body">
			You have to verify your email to activate your account for use. You can not log in to your account without verifying your email address. There are two methods available.<br /><br />
			<article id="mail_verify_article1">
			<div>1</div>
			<div style="float:right;color:#AAA;margin-right:10px;">(Recommended method)</div><br /><br />
			An activation link is sent to your registered email address. Please click that link or paste that link to the browser to activate the account. Your account will be activated automatically by this method.<br /><br />
			</article>
			<article id="mail_verify_article2">
			<div>2</div>
			<br /><br />Otherwise you can put request code sent to your registered email address to the box below.<br /><br />
			<form name="email_active_form" method="post" onsubmit="submitform();" action="/user/login/sign_up/mail_verification/verify_imd.php">
			<input type="text" name="verify_code" required />
			<input type="submit" name="submit_reg" value="Verify Now" />

			<div style='clear:both;height:0px;font-size:1px;'>&nbsp;</div>
			</form>
			</article>
		</section>
CODE;

	echo $sendCode;
}else{
	echo "Error:".mysqli_error($hb_db);
}
}

unset($_SESSION['hb_user']['create_account']);
unset($_SESSION['hb_captcha']);

?>
