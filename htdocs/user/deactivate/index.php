<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17006;
$hb_folder_layer=2;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

if(!$hb_user_logged_in){
	die("<a href='http://accounts.hazrabrothers.com/login/sign_in/'>Log In</a> first to manage your Hazra Brothers account");
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>

<!doctype html>
<html>


<head>
	<link rel="shortcut icon" href="http://hazrabrothers.com/images/universal/icon.png" media="screen" />
	<meta name="viewport" content="width=device-width">

	<title>Account Dashboard of <?php echo $_SESSION['hb_user']['first_name']." ".$_SESSION['hb_user']['last_name']; ?></title>



</head>
<body>
<?php
//////////////////////////////start of header///////////////////
include $rootpath."user/login/header.php";
///////////////////////////////////////////////end of header////////////////////
?>

<div id="log_div">


<style>

@media screen and (min-width:950px){
	#log_div{
		width:55%;
	}
	form[name=login_form] input[type=text],
	form[name=login_form] input[type=password]
	{
		width:50%;
		margin-top:0px;
	}
	form[name='login_form'] [name=stay_signed]{
		margin-bottom:0px;
	}

}
@media screen and (max-width:949px){
	#log_div{
		width:85%;
	}
	form[name=login_form] input[type=text],
	form[name=login_form] input[type=password]
	{
		width:95%;
		margin-top:7px;
	}
	form[name='login_form'] [name=stay_signed]{
		margin-bottom:7px;
	}

}
/*-----------------------------*/

@media screen and (min-width:1150px){

	form[name='login_form'] .other_link div{
		display:inline-block;
	}

}
@media screen and (max-width:1149px){

	form[name='login_form'] .other_link div{
		display:block;
	}

}

/*-------------------------------*/

@media screen and (min-width:600px){
	form[name='login_form'] #other_links_div{
		clear:none;
	}
}
@media screen and (max-width:599px){
	form[name='login_form'] #other_links_div{
		clear:left;
	}

}

/*===================================================================================
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
_____________________________________________________________________________________
===================================================================================*/
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
	margin:100px auto 20px auto;
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
	/*float:left;
	padding:5px;
	font-size:20px;
	width:45%;*/
}


/*-------------------------------------------------------------*/

form[name=login_form] input[type=text],
form[name=login_form] input[type=password]
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

form[name=login_form] input[type=text]:focus,
form[name=login_form] input[type=password]:focus
{
	background:rgba(85,119,170,0.04);
	border:1px solid rgba(85,119,170,0.8);
	border-bottom:2px solid #57a;
	box-shadow:#57a 0px 0px 2px;
}

form[name=login_form] input[type=text]:hover,
form[name=login_form] input[type=password]:hover
{
	border:1px solid rgba(85,119,170,0.8);
	border-bottom:2px solid #57a;
	box-shadow:#57a 0px 0px 2px;
}

/*-------------------------------------------------------------*/
.hb_fs_button {
	background:#57a;
	border:2px solid transparent;
	border-radius:5px;
	text-align: center;
	padding:10px;
	margin:5px;
	font-size:15px;
	font-weight:bold;
	color:white;
	box-shadow:rgba(120,120,120,0.6) 2px 2px 3px;
	transition:background 0.3s,color 0.3s, border 0.3s;
	cursor:pointer;
}
.hb_fs_button:hover{
	background:#CBE0FF;
	border:2px solid #57a;
	color:#2a4a7b;
}

/*-------------------------------------------------------------*/

form[name=login_form] input[type=submit]{
	float:right;
}
/****************************************************************/
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

	#head_reason_457{
		border-top:5px solid rgba(240,80,30,1);
		font-size: 23px;
		background: #57a;
		padding:10px;
		color:white;
		margin-top:10px;
		margin-bottom:10px;
	}
	#alert_58pl{
		font-size: 15px;
		color:rgba(0,0,0,0.6);
		padding:10px;
		margin-top: 10px;
		border-top:1px solid rgba(0,0,0,0.8);
	}
</style>


	<div id="form_label">Deactivate Account</div>

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
	<div id="hb_incorrect_field">Password incorrect</div>

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

	<?php
	/////////////////////setting up final refering page after successful login//////////////
		if(isset($_GET['src']) && !empty($_GET['src'])){
			?>

			<form name="login_form" action="<?php echo $sign_in_action; ?>" method="post" onsubmit="return verifyData();">


				<div id="input_element">
					<label>Your Current password:
						<input type="password" autofocus name="password" onblur="validatePassword()" required />
					</label>
				</div>
				<div tprop="password_error_message"></div>

				<div id="head_reason_457">
					Reason For Deactivation	
				</div>

				<div id="input_element">
					<label>Found some strange activities which are not done by you.
						<input type="checkbox" name="strange_activity" />
					</label>
				</div>
				<br />

				<div id="input_element">
					<label>Someone is disturbing you through personal chat or comment.
						<input type="checkbox" name="disturbing" />
					</label>
				</div>
				<br />

				<div id="input_element">
					<label>You are not interested on our services.
						<input type="checkbox" name="not_interested" />
					</label>
				</div>
				<br />

				<div id="alert_58pl">
					
					Remember you can not sign in your account when your account is deavtivated.
					Know <a href="http://accounts.hazrabrothers.com/help/activate">how to activate</a> 
					your account again before deactivate it.
				</div>

				<input type="submit" name="submit" value="Deactivate" class="hb_fs_button" />

				<div style='clear:both;height:0px;font-size:1px;'>&nbsp;</div>

			</form>

		<?php
		}else{
			echo "<div style='font-size:15px;color:rgb(240,50,20);'>
				You can not deactivate without proper source.
				Go to your account dashboard or any other Hazra Brothers Service dashboard (like scene dashboard) to deactivate your account.
			</div>
			<br />
			<br />
			<div>
				<a style='text-decoration:none;' href='http://accounts.hazrabrothers.com/dashboard'><div class='hb_fs_button'>Go to your Account Dashboard</div></a>
			</div>"
			;

		}
	?>

	
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
		if(!myRegExp.test(document.login_form.password.value)){
			hideError("password_error_message");
			return true;
		}else{
			document.login_form.password.focus();
			showError("Password should not contain ={}[]() \' and \"","password_error_message");
			return false;
		}
	}

	function verifyData(){
	
		return flag = validatePassword();
	}
	return false;
}
</script>
</script>



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

</body>
</html>
