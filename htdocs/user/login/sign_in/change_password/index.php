<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17006;
$hb_folder_layer=4;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

if(!$hb_user_logged_in){
	die("<a href='/user/login/sign_in/'>Log in</a> first to change password.");
}

///////////////////////////////////
?>
<!doctype html>
<html>


<head>
	<link rel="shortcut icon" href="/images/universal/icon.png" media="screen" />
	<meta name="viewport" content="width=device-width">

	<title>Reset Password</title>



</head>
<body>
	<?php

	include $rootpath."user/login/header.php";

/////////////////////////////////////
$error_message_text="";
///////////////////////////////////////
if(isset($_POST['submit'])){
	//checking emil or username

	if(isset($_POST['current_password']) && !empty($_POST['current_password'])){
		////////////check if current password is properly given///////////
		$query="SELECT email,username,password FROM hb_user_main_security WHERE email='".mysqli_real_escape_string($hb_db,$_SESSION['hb_user']['email'])."' LIMIT 1";
		if($rows=mysqli_query($hb_db,$query)){
			if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
				if($row['email']==$_SESSION['hb_user']['email']){
					if($row['password']==$_POST['current_password']){
						if(isset($_POST['new_password']) && !empty($_POST['new_password']) && isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])){
							////////////////////////////main works are going here//////////////////////////////////////

							if(validatePassword($_POST['new_password']) && validateConfirmPassword($_POST['new_password'],$_POST['confirm_password'])){
					    	$query="UPDATE hb_user_main_security SET password='".mysqli_real_escape_string($hb_db,$_POST['new_password'])."' WHERE email='".mysqli_real_escape_string($hb_db,$_SESSION['hb_user']['email'])."' LIMIT 1";

								  if(mysqli_query($hb_db,$query)){
										$user_data_path=$rootpath."/user/users/user_".$row['username']."/user_data/";
										if(file_exists($user_data_path."user_password_history.xml")){
											$xml=simplexml_load_file($user_data_path."user_password_history.xml");
											$tmpxml=new SimpleXMLElement($xml->asXML());
											$newcomment=$tmpxml->addChild("password");
											$newcomment->addChild("value",$_POST['new_password']);
											$newcomment->addChild("date",date("Y-m-d"));
											$newcomment->addChild("time",date("H:i:s"));
											$newcomment->addChild("os",$hb_user_os);
											$newcomment->addChild("browser",$hb_user_browser);
											$newcomment->addChild("ip",$_SERVER['REMOTE_ADDR']);
											$tmpxml->asXML($user_data_path."user_password_history.xml");

											header("location:/user/dashboard");
										}else{
											showUnableReset("Unable to set password successfully.");
										}

					        }else{
					          showUnableReset("Unable to set successfully.");
					        }

					      }
							////////////////////////////////////////end of main works//////////////////////////////////
						}else{ ////////////////end of new_password and confirm_password set or not
							$error_message_text="Please provide proper fields to reset password.";
							$ifLoginError=true;
							showform();
						}

					}else{////////////////////wrong current_password given//////////
						$error_message_text="Current password that you have given is wrong. Retry or <a style='padding:auto 10px; color:yellow; margin-left:10px;' href='/user/login/sign_in/forget_password'>Forget password</a>";
						$ifLoginError=true;
						showform();
					}
				}else{
					showUnableReset("Some problem arised. Try again.");
				}
			}else{
				showUnableReset("Some problem arised. Try again.");
			}
		}else{
			showUnableReset("Some problem arised. Try again.");
		}

	}else{ ///////////end of current_password set or not
		$error_message_text="Please provide current password to reset your password.";
		$ifLoginError=true;
		showform();
	}


}else{
	//check if already looged in

	showform();
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////showform area/////////////////////////////////////////////////////////////
function showform(){
	global $error_message_text;
	global $ifLoginError;
?>


	<div id="reset_password_div">

<style>

@media screen and (min-width:950px){
	#reset_password_div{
		width:55%;
	}
	form[name=reset_password_form] input[type=password]
	{
		width:50%;
		margin-top:0px;
	}

}
@media screen and (max-width:949px){
	#reset_password_div{
		width:85%;
	}
	form[name=reset_password_form] input[type=password]
	{
		width:95%;
		margin-top:7px;
	}

}

/*-----------------------------*/
html{
	position:relative;
	min-height:100%;
}
/*-------------------------------------------------------------*/
#reset_password_div{
	text-align:left;
	border:1px solid #999;
	border-radius:7px;
	background:rgba(255,255,255,0.95);
	margin:100px auto 20px auto;
	box-shadow:#666 0px 0px 10px;
}
#reset_password_div>#form_label{
	text-align:center;
	font-size:30px;
	padding:15px 0px;
}
#reset_password_div>#main{
	font-size:20px;
	margin:30px;
}#reg_div>#form_label{
	text-align:center;
	font-size:30px;
	padding:15px 0px;
}
#reg_div>#main{
	font-size:20px;
	margin:30px;
}

/*-------------------------------------------------------------*/
#reg_div>#form_label{
	text-align:center;
	font-size:30px;
	padding:15px 0px;
}
#reg_div>#main{
	font-size:20px;
	margin:30px;
}

form[name=reset_password_form]>div>label{
	/*float:left;
	padding:5px;
	font-size:20px;
	width:45%;*/
}


/*-------------------------------------------------------------*/

form[name=reset_password_form] input[type=text],
form[name=reset_password_form] input[type=password]
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

form[name=reset_password_form] input[type=text]:focus,
form[name=reset_password_form] input[type=password]:focus
{
	background:rgba(85,119,170,0.04);
	border:1px solid rgba(85,119,170,0.8);
	border-bottom:2px solid #57a;
	box-shadow:#57a 0px 0px 2px;
}

form[name=reset_password_form] input[type=text]:hover,
form[name=reset_password_form] input[type=password]:hover
{
	border:1px solid rgba(85,119,170,0.8);
	border-bottom:2px solid #57a;
	box-shadow:#57a 0px 0px 2px;
}

/*-------------------------------------------------------------*/
form[name='reset_password_form'] input[name='submit']{
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
form[name='reset_password_form'] input[name='submit']:hover{
	background:#CBE0FF;
	border:2px solid #57a;
	color:#2a4a7b;
}

/*-------------------------------------------------------------*/
#input_element{
	height:30px;
}

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

/*-------------------------------------------------------------*/

</style>

<div id="form_label">Reset Your Password</div>

	<!-- The line as div -->

	<div style="	 background:rgba(150,150,150,0.5);
			 background:-webkit-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-moz-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-ms-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
			 font-size:1px;
			 height:1px;
			 ">&nbsp;</div>

	<style>
	#hb_incorrect_field{
		color:red;
		font-size:15px;
		text-align:center;
		margin-top:5px;
		padding:0px;
		background:red;
		color:white;
		box-shadow:#555 0px 0px 5px;
		height:0px;
		overflow:hidden;
		opacity:0;
		transition:height 0.3s, padding 0.2s, opacity 0.3s;
	}
	</style>

	<div id="hb_incorrect_field"><?php echo $error_message_text; ?></div>

<script>
	errorRibbonShowed=false;
</script>

	<?php
		if($ifLoginError){

$script_err=<<<sc
			<script>
			setTimeout("hb_incorrect_field_func()",0);
			function hb_incorrect_field_func(){
				document.querySelector('#hb_incorrect_field').style.height='auto';
				document.querySelector('#hb_incorrect_field').style.padding='5px';
				document.querySelector('#hb_incorrect_field').style.opacity='1';
				errorRibbonShowed=true;
			}
			</script>
sc;
			echo $script_err;
		}

	?>

<div id="main">

	<form name="reset_password_form" action="index.php" method="post" onsubmit="return verifyData();">

		<div id="input_element">
			<label>Current Password:
				<input type="password" name="current_password" autofocus />
			</label>
		</div>
		<div tprop="current_password_error_message"></div>

		<div id="input_element">
			<label>New Password:
				<input type="password" name="new_password" onblur="validatePassword();" />
			</label>
		</div>
		<div tprop="new_password_error_message"></div>

		<div id="input_element">
			<label>Confirm Password:
				<input type="password" name="confirm_password" onblur="confirmPassword();" />
			</label>
		</div>
		<div tprop="confirm_password_error_message"></div>

		<input type="submit" name="submit" value="Reset Password" />
		<br />
		<br />

	</form>
</div>

</div>
<script>

//function of show error
function showError(string,obj){
	document.querySelector("div[tprop="+obj+"]").innerText=string;

	document.querySelector("div[tprop="+obj+"]").style.height="auto";
	tprop_height667=document.querySelector("div[tprop="+obj+"]").clientHeight;
	//document.title=tprop_height667;
	document.querySelector("div[tprop="+obj+"]").style.height="0px";

	setTimeout(function (){
		document.querySelector("div[tprop="+obj+"]").style.height=tprop_height667+"px";
	},0);
	document.querySelector("div[tprop="+obj+"]").setAttribute("error_tprop_showed","true");
}


//hide error
function hideError(obj){
	document.querySelector("div[tprop="+obj+"]").style.height="0px";
	document.querySelector("div[tprop="+obj+"]").setAttribute("error_tprop_showed","false");
	document.querySelector("div[tprop="+obj+"]").innerText="";
	
}

	//password checking ...
	function validatePassword(){
		var myRegExp=/[\=\"\'\(\){\}\[\]]/g;
		if(!myRegExp.test(document.reset_password_form.new_password.value)){
			myRegExp=/[a-z]/g;
			if(document.reset_password_form.new_password.value.match(myRegExp)){
				myRegExp=/[A-Z]/g;
				if(document.reset_password_form.new_password.value.match(myRegExp)){
					myRegExp=/\d/g;
					if(document.reset_password_form.new_password.value.match(myRegExp)){
						myRegExp=/[\~\`\!\@\#\$\%\^\&\*\_\-\+\|\/\:\;\?\.\,\<\>]/g;
						if(document.reset_password_form.new_password.value.match(myRegExp)){
							if(document.reset_password_form.new_password.value.length>=8 && document.reset_password_form.new_password.value.length<=30){
								hideError("new_password_error_message");
								return true;
							}else{
								document.reset_password_form.new_password.focus();
								showError("Length of password should lie between 8-30","new_password_error_message");
								return false;
							}
						}else{
							document.reset_password_form.new_password.focus();
							showError("Password should contain at least one special character like ~`!@#$%^&*()_-+|/:;?.,<>!","new_password_error_message");
							return false;
						}
					}else{
						document.reset_password_form.new_password.focus();
						showError("Password should contain at least one numerical character!","new_password_error_message");
						return false;
					}
				}else{
					document.reset_password_form.new_password.focus();
					showError("Password should contain at least one uppercase character!","new_password_error_message");
					return false;
				}
			}else{
				document.reset_password_form.new_password.focus();
				showError("Password should contain at least one lowercase character!","new_password_error_message");
				return false;
			}
		}else{
			document.reset_password_form.new_password.focus();
			showError("Password should not contain ={}[]() \' and \"","new_password_error_message");
			return false;
		}
	}



	//check confirm password ...
	function confirmPassword(){
		if(document.reset_password_form.new_password.value==document.reset_password_form.confirm_password.value){
			hideError("confirm_password_error_message");
			return true;
		}else{
			document.reset_password_form.new_password.focus();
			showError("Password mismatched! ","confirm_password_error_message");
			return false;
		}
	}


function verifyData(){
	return flag=validatePassword() && confirmPassword();
	return false;
	//return true;
}
</script>

<?php
}

///////////////////////////////////////////////////end of showform//////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////afterLogin///////////////////////////////////////////////////////////////////////

function afterLogin($nr,$signed){
	$nr=encryptData($nr);
	$sendersecurity="Anj5213964xmj0d";
	$sendersecurity=encryptData($sendersecurity);
	$url="location:/user/accountant.php?senderid=accountpage&";
	$url.="sendersecurity=".$sendersecurity."&";
	$url.="nr=".$nr."&signed=".$signed;
	header($url);
}

//////////////////////////////////////////////////end of afterLogin/////////////////////////////////////////////////////////////////
/************************************************************************************/
////////////check password if used before/////////////
function checkBeforeUsed($password){
	global $hb_db;
	global $rootpath;
	global $ifLoginError;
	global $error_message_text;
	/////////////fetch data from main_security/////////////////
	$query="SELECT email,username FROM hb_user_main_security WHERE email='".mysqli_real_escape_string($hb_db,$_SESSION['hb_user']['email'])."' LIMIT 1";
	if($rows=mysqli_query($hb_db,$query)){
		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
			if($row['email']==$_SESSION['hb_user']['email']){

				$user_data_path=$rootpath."/user/users/user_".$row['username']."/user_data/";

				$xml=simplexml_load_file($user_data_path."user_password_history.xml");
				$tmpxml=new SimpleXMLElement($xml->asXML());
				$used_before=false;

				foreach($tmpxml->children() as $password_old){

					if($password_old->value == $password){
						$used_before=true;
						break;

					}else{
						$used_before=false;
					}
				}
				if($used_before){
					$error_message_text="You can not set password which is already given by you.";
					$ifLoginError=true;
					showform();
					return false;
				}else{
					return true;
				}

			}else{
				showUnableReset("Some problem arised. Try again.");
			}
		}else{
			showUnableReset("Some problem arised. Try again.");
		}
	}else{
		showUnableReset("Some problem arised. Try again.");
	}

}

//check password with preg_match
function validatePassword($password){
	global $ifLoginError;
	global $error_message_text;

	if(!preg_match("[\=\"\'\(\){\}\[\]]",$password)){
		if(preg_match("/[a-z]/",$password)){
			if(preg_match("/[A-Z]/",$password)){
				if(preg_match("/\d/",$password)){
					if(preg_match("/[\~\`\!\@\#\$\%\^\&\*\_\-\+\|\/\:\;\?\.\,\<\>]/",$password)){
						if(strlen($password)>=8 && strlen($password)<=30){
							return checkBeforeUsed($password);
						}else{
							$error_message_text="Length of password should 8-30";
							$ifLoginError=true;
							showform();
							return false;
						}
					}else{
						$error_message_text="Password should contain at least one special character like ~`!@#$%^&*()_-+|/:;?.,<>!";
						$ifLoginError=true;
						showform();
						return false;
					}
				}else{
					$error_message_text="Password should contain at least one numerical character!";
					$ifLoginError=true;
					showform();
					return false;
				}
			}else{
				$error_message_text="Password should contain at least one uppercase character!";
				$ifLoginError=true;
				showform();
				return false;
			}
		}else{
			$error_message_text="Password should contain at least one lowercase character!";
			$ifLoginError=true;
			showform();
			return false;
		}
	}else{
		$error_message_text="Password should not contain ={}[]() \' and \"";
		$ifLoginError=true;
		showform();
		return false;
	}
}
 //checking confirm_password
 function validateConfirmPassword($password,$confirm_password){
	global $error_message_text;
	global $ifLoginError;

 	if($password==$confirm_password){
 		return true;
 	}else{
 		$error_message_text="Password mismatched!";
		$ifLoginError=true;
		showform();
 		return false;
 	}
 }
 ///showError function
 function showUnableReset($message){
?>


	<div id="reset_password_div">

<style>

html{
	position:relative;
	min-height:100%;
}
/*-------------------------------------------------------------*/
#reset_password_div{
	width:55%;
	text-align:left;
	border:1px solid #999;
	border-radius:7px;
	background:rgba(255,255,255,0.95);
	margin:100px auto 20px auto;
	box-shadow:#666 0px 0px 10px;
}
#reset_password_div>#form_label{
	text-align:center;
	font-size:30px;
	padding:15px 0px;
}
#reset_password_div>#main{
	font-size:20px;
	margin:30px;
}#reg_div>#form_label{
	text-align:center;
	font-size:30px;
	padding:15px 0px;
}
#reg_div>#main{
	font-size:20px;
	margin:30px;
}

/*-------------------------------------------------------------*/
#reg_div>#form_label{
	text-align:center;
	font-size:30px;
	padding:15px 0px;
}
#reg_div>#main{
	font-size:20px;
	margin:30px;
}

form[name=reset_password_form]>div>label{
	/*float:left;
	padding:5px;
	font-size:20px;
	width:45%;*/
}

/*-------------------------------------------------------------*/

</style>

<div id="form_label">Reset Your Password</div>

	<!-- The line as div -->

	<div style="	 background:rgba(150,150,150,0.5);
			 background:-webkit-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-moz-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-ms-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
			 font-size:1px;
			 height:1px;
			 ">&nbsp;</div>

<div id="main">

<?php
	echo $message;
?>
</div>
</div>
<?php
die();
 }

?>

<div id="footer_blank_0032">&nbsp;</div>
<?php
///////////////////////////////////////////////include footer/////////////////////////////////////////////////////
 include $rootpath."user/login/footer.php"; ?>
<style>
#hb_user_footer{
	position:absolute;
	bottom:0px;
	z-index:80;
}
</style>

<script>

	document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_user_footer").getBoundingClientRect().height+25)+"px";

</script>
<?php
	include "event.php";
?>

</body>
</html>
