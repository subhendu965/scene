<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17012;
$hb_folder_layer=2;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

$_SESSION['hb_user']['feedback_form']="fl6nF";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

<html>
<head>
	<title>Share your Feedback</title>
	<link rel="shortcut icon" href="/images/scene_logo_title.png" />
	<meta name="viewport" content="width=device-width" />
</head>


<body>
<?php

///////////////////////////////////////////////include header/////////////////////////////////////////////////////
include $rootpath."scene/auxiliary_header.php"
///////////////////////////////////////////////end of header//////////////////////////////////////////////////////
?>


<?php ///////////////////////////////////////////////main section//////////////////////////////////////////////////// ?>


<div id="log_div">

<style>
@media screen and (min-width:900px){
	#log_div{
		width:55%;
	}

	form[name=feedback_form] input[name=email]{
		width:50%;
	}
	form[name=feedback_form] #from_label{
		padding-right:20px;
	}
}
@media screen and (max-width:899px){
	#log_div{
		width:85%;
	}

	form[name=feedback_form] input[name=email]{
		width:85%;
	}
	form[name=feedback_form] #from_label{
		padding-right:5px;
	}
}


#log_div{
	text-align:left;
	border:1px solid #999;
	border-radius:7px;
	font-family: montserrat_bold;
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

form[name=feedback_form]>div>label{
	/*float:left;
	padding:5px;
	font-size:20px;
	width:45%;*/
	font-style:italic;
}

form[name=feedback_form] #main_from_label{
	display: block;
	width:100%;
	text-align: right;
}

/*-------------------------------------------------------------*/
form[name=feedback_form] input[name=subject]{
	width: 100%;
	font-size:18px;
	background:rgba(255,255,255,0.5);
	border:0px solid transparent;
	border:1px solid rgba(85,119,170,0.2);
	border-bottom:2px solid #57a;
	padding:10px;
	transition:box-shadow 0.3s, border 0.3s, background 0.3s;
}
form[name=feedback_form] input[name=email]{
	display: inline-block;
	font-size:18px;
	background:rgba(255,255,255,0.5);
	border:0px solid transparent;
	border:1px solid rgba(85,119,170,0.2);
	border-bottom:2px solid #57a;
	padding:10px;
	transition:box-shadow 0.3s, border 0.3s, background 0.3s;
}

form[name=feedback_form] textarea{
	float:right;
	resize:none;
	width:100%;
	margin:auto;
	font-size:18px;
	background:rgba(255,255,255,0.5);
	border:0px solid transparent;
	border:1px solid rgba(85,119,170,0.2);
	border-bottom:2px solid #57a;
	padding:10px;
	transition:box-shadow 0.3s, border 0.3s, background 0.3s;
}

form[name=feedback_form] input[name=email]:focus,
form[name=feedback_form] input[name=subject]:focus,
form[name=feedback_form] textarea:focus
{
	background:rgba(85,119,170,0.04);
	border:1px solid rgba(85,119,170,0.8);
	border-bottom:2px solid #57a;
	box-shadow:#57a 0px 0px 2px;
}

form[name=feedback_form] input[name=email]:hover,
form[name=feedback_form] textarea:hover
{
	border:1px solid rgba(85,119,170,0.8);
	border-bottom:2px solid #57a;
	box-shadow:#57a 0px 0px 2px;
}

form[name=feedback_form] #to_label{
	font-size:15px;
	padding-bottom:5px;
	font-style:italic;
}
form[name=feedback_form] #msg_label{
	padding-bottom:5px;
	font-style:italic;
}
form[name=feedback_form] #from_label{
	display: inline-block;
	padding-top:9px;
	font-style:italic;
	margin-bottom: 5px;
	text-align: right;
}
/*-------------------------------------------------------------*/
form[name='feedback_form'] #hb_file_input{
	display:none;
}
form[name='feedback_form'] #hb_file_div{
	float: left;
	margin:5px;
	border:2px solid rgba(0,0,0,0.5);
	border-radius: 5px;
	text-align: center;
	padding:9px 12px;
	font-size:15px;
	box-shadow: rgba(0,0,0,0.2) 2px 2px 3px;
	cursor: pointer;
	transition: background 0.3s, box-shadow 0.3s;
}
form[name='feedback_form'] #hb_file_div:hover{
	background-color: rgba(0,0,0,0.1);
	box-shadow: rgba(0,0,0,0.5) 2px 2px 4px;
}

form[name='feedback_form'] #attach_images_shocase_47Pk{
	text-align: left;
	overflow-x: auto;
}
/*-------------------------------------------------------------*/

form[name='feedback_form'] input[name='submit']{
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
form[name='feedback_form'] input[name='submit']:hover{
	background:#CBE0FF;
	border:2px solid #57a;
	color:#2a4a7b;
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
/*--------------------------------------------------------------*/

/*-------------------------------------------------------------*/
</style>

	<div id="form_label">Share Your Feedback</div>

	<!-- The line as div -->

	<div style="	 background:rgba(150,150,150,0.5);
			 background:-webkit-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-moz-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-ms-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
			 font-size:1px;
			 height:1px;
			 ">&nbsp;</div>



<div id="main">

	<form name="feedback_form" action="feedback.php" method="post" onsubmit="return verifyData();" enctype="multipart/form-data">
			<div id="to_label">
			To,<br />
			The Scene Team<br />
			Hazra Brothers
			</div>



		<div id="input_element">
			<label>
				<div id="msg_label">Subject</div>
				<input type="text" name="subject" autofocus placeholder="Subject of your feedback." onblur="validateSubject(this)"
				<?php
					if(isset($_GET['sub']) && !empty($_GET['sub'])){
						echo "value=".$_GET['sub'];
					}
				?>
				>
			</label>
		</div>
		<div tprop="subject_error_message"></div>

		<div id="input_element">
			<label>
				<div id="msg_label">Message</div>
				<textarea name="message" rows='5' required autofocus placeholder="Write the message that you want to share with us." onblur="validateMessage(this)"></textarea>
			</label>
		</div>
		<div tprop="message_error_message"></div>

		<div id="input_element">
			<label>
			<div id='main_from_label'>
				<div id="from_label">From </div>
				<?php
					if($hb_user_logged_in){
						echo "<div name='email'>".$_SESSION['hb_user']['first_name']." ".$_SESSION['hb_user']['last_name']."</div>";
					} else{
						echo "<input type='email' name='email' required  onblur='validateEmail(this);' placeholder='Your email address'  /><div tprop='email_error_message'></div>";
					}
				?>

			</div>
			</label>

			<br>
			<div id="captcha">
			<?php include $rootpath."scene/captcha/controller.php" ?>
			</div>
			<div tprop="captcha_error_message"></div>
			<br />

			<div id="attach_images_shocase_47Pk" style="font-size:12px;color:gray;">Remember, Maximim 20 files can be attached and file size of all files should be less than 5 MiB</div>

		</div>
		<div tprop="username_error_message"></div>
		<input type="hidden" name="hid_54" value="7458P" />



		<div>

			<label for="hb_file_input">
				<input type="file" name="attach_files[]" id="hb_file_input" multiple onchange="attach_file_changed_45pl()" />
				<div id='hb_file_div'>Attach files</div>
			</label>


			<input type="submit" name="submit" value="Send Feedback" />
		</div>

		<div style="clear:both;height:0px;font-size:1px;">&nbsp;</div>

	</form>
	<script>
	function attach_file_changed_45pl(){
		flo=document.getElementById("hb_file_input");
		if(flo.files.length<=20){
			var tmpCode="";
			var imgFiles=0;
			for(i=0;i<flo.files.length;i++){

				if(flo.files[i].type.substr(0,5).toLowerCase()=="image"){
					var f=flo.files[i];
					url=window.URL || window.webkitURL;
					src=url.createObjectURL(f);
					tmpCode=tmpCode+"<img src='"+src+"' height='30' style='margin:1px;' />";
					imgFiles+=1;
				}

			}

			document.querySelector("form[name='feedback_form'] #attach_images_shocase_47Pk").innerHTML=tmpCode;
			document.querySelector("form[name='feedback_form'] #attach_images_shocase_47Pk").innerHTML+="<div style='font-size:12px;color:green;'><br>"+imgFiles+" images and total "+flo.files.length+" files added.</div>";


		}else{
			document.querySelector("form[name='feedback_form'] #attach_images_shocase_47Pk").innerHTML="<div style='font-size:12px;color:red;'>Maximaum attach file limit is 20.</div>";
			flo.value="";
		}


	}

	/********************************************************************************************************************/

	//function of show error

	function showError(string,obj,col){
	  document.querySelector("div[tprop="+obj+"]").style.height="20px";
	  document.querySelector("div[tprop="+obj+"]").innerText=string;
	  if(col){
	      document.querySelector("div[tprop="+obj+"]").style.color=col;
	  }
	}

	/********************************************************************************************************************/
function verifyData(){
	var flag=validateMessage(document.feedback_form.message);
	<?php
	if($hb_user_logged_in){

	}else{
		echo "flag=flag && validateEmail(document.feedback_form.email);";
	}

	
	?>
	
	flag=flag && validateMessage(document.feedback_form.message);
	flag=flag && validateCapcha();
	return flag;
	//return true;
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

function validateSubject(sub){
	if(sub.value.length>200){
		showError("Please, Write subject within 200 letters.","subject_error_message");
		return false;
	}else{
		document.querySelector("div[tprop=subject_error_message]").style.height="0px";
		document.querySelector("div[tprop=subject_error_message]").innerText="";
		return true;
	}
}


function validateMessage(msg){
	if(msg.value.length==0){
		showError("Please write something to send your feedback.","message_error_message");
		return false;
	}else{
		if(msg.value.length>10000){
			showError("Please, Write message within 10000 letters.","message_error_message");
			return false;
		}else{
			document.querySelector("div[tprop=message_error_message]").style.height="0px";
			document.querySelector("div[tprop=message_error_message]").innerText="";
			return true;
		}
		
	}
}
function validateEmail(email){
	var myRegExp=/[\`\~\#\$\%\^\*\\\?\;\"\|\=\<\>\{\}\,\']/g;
	if(!myRegExp.test(email.value)){
		var myRegExp=/[\@]/g;
		if(email.value.match(myRegExp)){
			var myRegExp=/[\.]/g;
			if(email.value.match(myRegExp)){
				if(email.value.length>=5 && email.value.length<=50){
					document.querySelector("div[tprop=email_error_message]").style.height="0px";
				 	document.querySelector("div[tprop=email_error_message]").innerText="";
					return true;


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

	</script>
</div>

</div>
<?php ///////////////////////////////////////////////end of main section///////////////////////////////////////////////////// ?>


<div id="footer_blank_0032">&nbsp;</div>
<?php
///////////////////////////////////////////////include footer/////////////////////////////////////////////////////
 include $rootpath."scene/footer.php"; ?>
<style>
#hb_scene_footer{
	position:absolute;
	bottom:0px;
}
</style>

<script>

	document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height+30)+"px";

</script>

<?php include "event.php"; ?>

</body>

</html>
