<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17006;
$hb_folder_layer=3;
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

	<title>Sign In</title>



</head>
<body>
	<?php include $rootpath."user/login/header.php"; ?>

<?php
if(isset($_POST['submit'])){
	//checking emil or username

	if($_POST['loginwith']=='email'){

		////////////////////////////////////////////////login with email//////////////////////////////////////////////

		$query="SELECT email,username,password,sqcode from hb_user_main_security WHERE " ;
		$query.="email='".mysqli_real_escape_string($hb_db,$_POST['username'])."' AND password='".mysqli_real_escape_string($hb_db,$_POST['password'])."' LIMIT 1";
		if($rows=mysqli_query($hb_db,$query)){
			if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
				if($_POST['username']==$row['email'] && $_POST['password']==$row['password']){
				//++++++++++++++++++++++++++++log in code here++++++++++++++++++++++++++++++++++++++++++++++
					if(isset($_POST["stay_signed"])){
						if(isset($_GET['pgid']) && !empty($_GET['pgid'])){
							afterLogin($row['sqcode'],"true",$_GET['pgid'],$row['username']);
						}else{
							afterLogin($row['sqcode'],"true","",$row['username']);
						}

					}else{
						if(isset($_GET['pgid']) && !empty($_GET['pgid'])){
							afterLogin($row['sqcode'],"false",$_GET['pgid'],$row['username']);
						}else{
							afterLogin($row['sqcode'],"false","",$row['username']);
						}
					}

				}else{
					$ifLoginError=true;
					showform();

				}
			}else{
				$ifLoginError=true;
				showform();
			}
		}else{
			echo "Problem to login";
			showform();
		}

	}elseif($_POST['loginwith']=='username'){

	//////////////////////////////////////////////////////login with username/////////////////////////////////////////////////

		$query="SELECT username,password,sqcode from hb_user_main_security WHERE " ;
		$query.="username='".mysqli_real_escape_string($hb_db,$_POST['username'])."' AND password='".mysqli_real_escape_string($hb_db,$_POST['password'])."' LIMIT 1";
		if($rows=mysqli_query($hb_db,$query)){
			if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
				if($_POST['username']==$row['username'] && $_POST['password']==$row['password']){

				//++++++++++++++++++++++++++++log in code here++++++++++++++++++++++++++++++++++++++++++++++

					if(isset($_POST["stay_signed"])){
						if(isset($_GET['pgid']) && !empty($_GET['pgid'])){
							afterLogin($row['sqcode'],"true",$_GET['pgid'],$row['username']);
						}else{
							afterLogin($row['sqcode'],"true","",$row['username']);
						}
					}else{
						if(isset($_GET['pgid']) && !empty($_GET['pgid'])){
							afterLogin($row['sqcode'],"false",$_GET['pgid'],$row['username']);
						}else{
							afterLogin($row['sqcode'],"false","",$row['username']);
						}
					}

				}else{
					$ifLoginError=true;
					showform();

				}
			}else{
				$ifLoginError=true;
				showform();
			}
		}else{
			echo "Problem to login";
			showform();
		}
	}else{
		$ifLoginError=true;
		showform();
	}
}else{
	//check if already looged in

	showform();
}

////////////////////////////////////////////////////////showform area/////////////////////////////////////////////////////////////
function showform(){
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

/*-------------------------------------------------------------*/

</style>


	<div id="form_label">Sign In</div>

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
	<div id="hb_incorrect_field">Username/email or password incorrect</div>

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
		if(isset($_GET['pgid']) && !empty($_GET['pgid'])){
			$sign_in_action="index.php?pgid=".$_GET['pgid'];
		}else{
			$sign_in_action="index.php";
		}
	?>

	<form name="login_form" action="<?php echo $sign_in_action; ?>" method="post" onsubmit="return verifyData();">

		<div id="input_element">
			<label>Username or email:
				<input type="text" name="username" autofocus onblur="verifyData();" required />
			</label>
		</div>
		<div tprop="username_error_message"></div>

		<div id="input_element">
			<label>Password:
				<input type="password" name="password" onblur="validatePassword()" required />
			</label>
		</div>
		<div tprop="password_error_message"></div>

		<input type="hidden" name="loginwith" />


		<br />

		<input type="checkbox" name="stay_signed" checked />
		<label for="stay_signed">Stay Signed in</label>

		<style>
		form[name='login_form'] [name=stay_signed]{
			display:inline-block;
			float:left;
		}
		form[name='login_form'] #other_links_div{
			display:inline-block;
			float:left;
		}
		form[name='login_form'] label[for=stay_signed]{
			float:left;
		}

		form[name='login_form'] .other_link{
			text-decoration:none;
		}
		form[name='login_form'] .other_link div{
			color:#358;
			margin:0px 0px 0px 10px;
			padding:4px 0px 4px 10px;
			border-left:2px solid black;
			font-size:15px;
			transition:color 0.3s;
		}
		form[name='login_form'] .other_link div:hover{
			color:#7191c1;
			text-decoration:underline;
		}
		form[name='login_form'] .other_link div:focus{
			text-decoration:underline;
		}
		</style>
		<div id="other_links_div">
			<a class="other_link" href="/user/login/sign_up/registration"><div>Create Account</div></a>
			<a class="other_link" href="/user/login/sign_in/forget_password"><div>Forget Password</div></a>
		</div>

		<input type="submit" name="submit" value="Sign In" />

		<div style='clear:both;height:0px;font-size:1px;'>&nbsp;</div>

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

//check email ...
	function validateEmail(){
	var myRegExp=/[\`\~\#\$\%\^\*\\\?\;\"\|\=\<\>\{\}\']/g;
	if(!myRegExp.test(document.login_form.username.value)){
		var myRegExp=/[\@]/g;
		if(document.login_form.username.value.match(myRegExp)){
			var myRegExp=/[\.]/g;
			if(document.login_form.username.value.match(myRegExp)){
				hideError("username_error_message");
				return true;
			}else{
				document.login_form.username.focus();
				showError("email should contain .(dot)","username_error_message");
				return false;
			}
		}else{
			document.login_form.username.focus();
			showError("email should contain @","username_error_message");
			return false;
		}
	}else{
		document.login_form.username.focus();
		showError("email should not contain `~#$%^*\\?;\"|=<>{}","username_error_message");
		return false;
	}
	}




//username checking ...
	function validateUsername(){
		var myRegExp=/[^a-z\d]/gi;
		var myRegExp2=/[\.\_]/g;
		if(!myRegExp.test(document.login_form.username.value)){
			hideError("username_error_message");
			return true;
		}else{
			if(myRegExp2.test(document.login_form.username.value)){
				hideError("username_error_message");
				return true;

			}else{
				document.login_form.username.focus();
				showError("username should contain a-z, A-Z, 0-9, . and _ only!","username_error_message");
				return false;
			}

		}
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
	if(document.login_form.username.value.indexOf("@")>=0){
		document.login_form.loginwith.value="email";
		return flag=validateEmail() && validatePassword();
	}else{
		document.login_form.loginwith.value="username";
		return flag=validateUsername() && validatePassword();
	}
	return false;
}
</script>

<?php
}

///////////////////////////////////////////////////end of showform//////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////afterLogin///////////////////////////////////////////////////////////////////////

function afterLogin($nr,$signed,$pgid="",$username){
	global $rootpath;
	global $hb_user_os;
	global $hb_user_browser;
	//////////////////////////////write log file/////////////////
	$user_data_path=$rootpath."user/users/user_".$username."/user_data/";
	if(file_exists($user_data_path."user_login_history.xml")){
		$xml=simplexml_load_file($user_data_path."user_login_history.xml");
		$tmpxml=new SimpleXMLElement($xml->asXML());
		$newcomment=$tmpxml->addChild("login");
		$newcomment->addChild("date",date("Y-m-d"));
		$newcomment->addChild("time",date("H:i:s"));
		$newcomment->addChild("os",$hb_user_os);
		$newcomment->addChild("browser",$hb_user_browser);
		$newcomment->addChild("ip",$_SERVER['REMOTE_ADDR']);
		$tmpxml->asXML($user_data_path."user_login_history.xml");
	}else{
		//create xml files login
					$string="<?xml version=\"1.0\"?>";
					$string.="<logins>";
					$string.="<login>";
					$string.="<date>";
					$string.=date("Y-m-d");
					$string.="</date>";
					$string.="<time>";
					$string.=date("H:i:s");
					$string.="</time>";
					$string.="<os>";
					$string.=$hb_user_os;
					$string.="</os>";
					$string.="<browser>";
					$string.=$hb_user_browser;
					$string.="</browser>";
					$string.="<ip>";
					$string.=$_SERVER['REMOTE_ADDR'];
					$string.="</ip>";
					$string.="</login>";
					$string.="</logins>";

					$handle=fopen($user_data_path."user_login_history.xml","w");
					fwrite($handle,$string);
					fclose($handle);
	}

	/////////////set all//////////////////
	$nr=encryptData($nr);
	$sendersecurity="Anj5213964xmj0d";
	$sendersecurity=encryptData($sendersecurity);
	$url="location:/accountant.php?senderid=accountpage&";
	$url.="sendersecurity=".$sendersecurity."&";
	$url.="nr=".$nr."&signed=".$signed;

	if(isset($pgid) && !empty($pgid)){
		$url.="&pgid=".$pgid;
	}else{

	}

	header($url);
}

//////////////////////////////////////////////////end of afterLogin/////////////////////////////////////////////////////////////////
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
