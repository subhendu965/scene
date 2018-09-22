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

if($hb_user_logged_in){
	die("<a href='/user/login/logout.php'>Log out</a> first to login again with another account");
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<!doctype html>
<html>


<head>
	<link rel="shortcut icon" href="/images/universal/icon.png" media="screen" />
	<meta name="viewport" content="width=device-width">

	<title>Forget Password</title>



</head>
<body>
	<?php include "../../header.php"; ?>
<?php ////////////////////////////////////////////////////////////////// ?>
<center>
	<div id="log_div">


<style>

@media screen and (min-width:950px){
	#log_div{
		width:55%;
	}
	form[name=login_form] input[type=email]
	{
		width:50%;
		margin-top:0px;
	}

}
@media screen and (max-width:949px){
	#log_div{
		width:85%;
	}
	form[name=login_form] input[type=email]
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
#log_div{
	text-align:left;
	border:1px solid #999;
	border-radius:7px;
	background:rgba(255,255,255,0.95);
	margin:100px 0px 20px 0px;
	box-shadow:#666 0px 0px 10px;
}
#log_div>#form_label{
	text-align:center;
	font-size:30px;
	padding:15px 0px;
}
#log_div>#main{
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

form[name=login_form]>div>label{
	float:left;
	padding:5px;
	font-size:20px;
	width:45%;
}


/*-------------------------------------------------------------*/

form[name=login_form] input[type=email]{
	float:right;
	font-size:18px;
	background:rgba(255,255,255,0.5);
	border:0px solid transparent;
	border:1px solid rgba(85,119,170,0.2);
	border-bottom:2px solid #57a;
	padding:10px;
	transition:box-shadow 0.3s, border 0.3s, background 0.3s;
}

form[name=login_form] input[type=email]:focus{
	background:rgba(85,119,170,0.04);
	border:1px solid rgba(85,119,170,0.8);
	border-bottom:2px solid #57a;
	box-shadow:#57a 0px 0px 2px;
}

form[name=login_form] input[type=email]:hover{
	border:1px solid rgba(85,119,170,0.8);
	border-bottom:2px solid #57a;
	box-shadow:#57a 0px 0px 2px;
}

/*-------------------------------------------------------------*/
form[name='login_form'] input[name='submit']{
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
form[name='login_form'] input[name='submit']:hover{
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

/*-----------------------
&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
--------------------------------------*/

#message_to_user_6320{
	padding:20px;
	font-size:16px;
}
#message_to_user_6320 #home_btn{
	text-decoration:none;
}
#message_to_user_6320 #home_btn div{
	color:#035069;
	width:max-content;
	border:2px solid #035069;
	padding:5px 10px;
	border-radius:5px;
	transition:color 0.3s, background 0.3s;
}
#message_to_user_6320 #home_btn div:hover{
	color:white;
	background-color:#035069;
}
</style>


	<div id="form_label">Forget Password</div>

	<!-- The line as div -->

	<div style="	 background:rgba(150,150,150,0.5);
			 background:-webkit-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-moz-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-ms-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
			 font-size:1px;
			 height:1px;
			 ">&nbsp;</div>


<?php ////////////////////////////////////////////////////////////////// ?>
<?php
if(isset($_POST['submit'])){
	$query="SELECT email from hb_user_main_security WHERE " ;
	$query.="email='".mysqli_real_escape_string($hb_db,$_POST['email'])."' LIMIT 1";
	if($rows=mysqli_query($hb_db,$query)){
		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
				if($_POST['email']==$row['email']){
					sendmail(); //for sending mail

				}else{
					$ifLoginError=true;
					showform();

				}
			}else{
				$ifLoginError=true;
				showform();
			}
		}else{
			echo "Unknown Problem to fetch your data! Please contact with our account management team or register a complaint.";
			showform();
		}
}else{

	showform();
}

////////////////////////////////////////////////////////showform area/////////////////////////////////////////////////////////////
function showform(){
?>
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
	<div id="hb_incorrect_field">Your email is not registered. <a style="padding:auto 10px; color:yellow; margin-left:10px;" href='/user/login/sign_up/registration'>Create account</a></div>

<script>
	errorRibbonShowed=false;
</script>

	<?php
		global $ifLoginError;
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

	<form name="login_form" action="index.php" method="post" onsubmit="return validateEmail();">
	<div style="font-size:15px;padding-bottom:20px;">

		Give your email and click to 'send email' button. An email with reset link will be sent to your email inbox.
		Click that link to reset your password.
	</div>
		<div id="input_element">
			<lable for="email">Enter your email:</label>
			<input type="email" name="email" autofocus onblur="validateEmail();" required />
		</div>
		<div tprop="email_error_message"></div>

		<input type="submit" name="submit" value="Send Email" />
		<br />

		<style>
		form[name='login_form'] .other_link{
			text-decoration:none;
			color:#358;
			margin:0px;
			padding:0px;
			/*border-left:2px solid black;*/
			font-size:15px;
			transition:color 0.3s;
		}
		form[name='login_form'] .other_link:hover{
			color:#7191c1;
			text-decoration:underline;
		}
		form[name='login_form'] .other_link:focus{
			text-decoration:underline;
		}
		</style>
		<a class="other_link" href="/user/login/sign_up/registration">Create Account</a>

	</form>
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
	setTimeout(function (){
		document.querySelector("div[tprop="+obj+"]").innerText="";
	},300);
}



//check email ...
	function validateEmail(){
	var myRegExp=/[\`\~\#\$\%\^\*\\\?\;\"\|\=\<\>\{\}\,\']/g;
	if(!myRegExp.test(document.login_form.email.value)){
		var myRegExp=/[\@]/g;
		if(document.login_form.email.value.match(myRegExp)){
			var myRegExp=/[\.]/g;
			if(document.login_form.email.value.match(myRegExp)){
				hideError("email_error_message");
				return true;
			}else{
				document.login_form.email.focus();
				showError("email should contain .(dot)","email_error_message");
				return false;
			}
		}else{
			document.login_form.email.focus();
			showError("email should contain @","email_error_message");
			return false;
		}
	}else{
		document.login_form.email.focus();
		showError("email should not contain `~#$%^*\\?;\",|=<>{}","email_error_message");
		return false;
	}
	}

</script>

<?php
}

///////////////////////////////////////////////////end of showform//////////////////////////////////////////////////////////////////


////////////////////////////////////////////////sendmail///////////////////////////////////////////////////////////////////////////

function sendmail(){

global $hb_db;
global $_POST;

$query="SELECT email,u_request,time,time_request FROM hb_user_forget_password WHERE email='".mysqli_real_escape_string($hb_db,$_POST['email'])."' LIMIT 1";

//generating rcode
$rcode=substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"),0,20);
//generating rsq
$rsq=substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"),0,20);

if($rows=mysqli_query($hb_db,$query)){
	if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){

	if(time()>strtotime($row['time'])+120){ //checking two minutes of time
		$u_request=$row['u_request'];
		$time_request=$row['time_request']+1;

		$query="UPDATE hb_user_forget_password SET time_request='".$time_request."',time='".date('Y-m-d H:i:s')."',rcode='".$rcode."',rsq='".$rsq."' WHERE email='".mysqli_real_escape_string($hb_db,$_POST['email'])."'";

			if(mysqli_query($hb_db,$query)){
				$x=substr($rcode,0,15);
				$y=substr($rcode,15).substr($rsq,0,5);
				$z=substr($rsq,5);

				//sending mail to the registered email address.
				//send email
				$verification_url="accounts.hazrabrothers.com/redirect/index.php?red=13368&";
				$verification_url.="x=".encryptData($x)."&";
				$verification_url.="y=".encryptData($y)."&";
				$verification_url.="z=".encryptData($z)."&";
				$verification_url.="u=".encryptData($u_request);

				$handle=fopen("mail_".$_POST['email'].".txt","w");
				fwrite($handle,$verification_url);
				fclose($handle);

				//sending confirmation to the user
				$sendCode=<<<CODE
					<section id='message_to_user_6320'>
						An email with activation link is sent to your registered email. Plaese go to your inbox and click that link to reset
						your password. Be sure that you are using latest link that you have got. <br />
						<b>Do not refresh this page again.</b><br/>
						<br /><br />
						<a href="/" id="home_btn"><div>Home</div></a>
					</section>

CODE;

				echo $sendCode;
			}else{
				//echo "Error:".mysqli_error($hb_db);
			}
	}else{//if time is within 2 minutes

		//sending confirmation to the user
	$sendCode=<<<CODE
		<section id='message_to_user_6320'>
			An email with activation link is sent to your registered email within 2 minutes. You can request to resend this email after 2 minutes of sending previous request. <br />
			<b>Remember you have to use latest activation link always sent to your mail.</b><br/>
			<br /><br />
			<a href="/" id="home_btn"><div>Home</div></a>
		</section>
CODE;

	echo $sendCode;

	}

	//new registration
	}else{

		//generating u_request
		do{
			$u_request=substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"),0,20);

			//checking if same u_request
			$query="SELECT email FROM hb_user_forget_password WHERE u_request='".$u_request."' LIMIT 1";

			if($rows=mysqli_query($hb_db,$query)){
				if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
					continue;
				}else{
					break;
				}


			}else{
				echo "Error:".mysqli_error($hb_db);
			}

		}while(1);

		$query="INSERT INTO hb_user_forget_password SET ";
		$query.="email='".mysqli_real_escape_string($hb_db,$_POST['email'])."',";
		$query.="rcode='".mysqli_real_escape_string($hb_db,$rcode)."',";
		$query.="rsq='".mysqli_real_escape_string($hb_db,$rsq)."',";
		$query.="time='".date('Y-m-d H:i:s')."',";
		$query.="u_request='".mysqli_real_escape_string($hb_db,$u_request)."',";
		$query.="time_request=1";

		//insert to database
			if(mysqli_query($hb_db,$query)){
				$x=substr($rcode,0,15);
				$y=substr($rcode,15).substr($rsq,0,5);
				$z=substr($rsq,5);

				//sending mail to the registered email address.
				//send email
				$verification_url="accounts.hazrabrothers.com/redirect/index.php?red=13368&";
				$verification_url.="x=".encryptData($x)."&";
				$verification_url.="y=".encryptData($y)."&";
				$verification_url.="z=".encryptData($z)."&";
				$verification_url.="u=".encryptData($u_request);

				$handle=fopen("mail_".$_POST['email'].".txt","w");
				fwrite($handle,$verification_url);
				fclose($handle);

				//sending confirmation to the user
				$sendCode=<<<CODE
					<section id='message_to_user_6320'>
						An email with activation link is sent to your registered email. Plaese go to your inbox and click that link to reset
						your password. Be sure that you are using latest link that you have got. <br />
						<b>Do not refresh this page again.</b><br/>
						<br /><br />
						<a href="/" id="home_btn"><div>Home</div></a>
					</section>

CODE;

				echo $sendCode;


			}else{
				//echo "Error:".mysqli_error($hb_db);
			}

	}

}else{
	//echo "Error:".mysqli_error($hb_db);
}



}
////////////////////////////////////////////////end of sendmail////////////////////////////////////////////////////////////////////
?>
</div> <?php ////////////////////end of form div/////////////////////?>
<div id="footer_blank_0032">&nbsp;</div>
<?php
///////////////////////////////////////////////include footer/////////////////////////////////////////////////////
	include "../../footer.php";
 ?>

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
