<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17010;
$hb_folder_layer=2;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";


if(isset($_SESSION['hb_user']['feedback_form']) && $_SESSION['hb_user']['feedback_form']=="fl6nF"){

}else{
	die("Unauthorized Entry2!");
}

if(isset($_POST['submit'])){
	if(isset($_POST['hid_54']) && $_POST['hid_54']=="7458P"){
		//generate unique id foe feedback path.
	}else{
		die('Unauthorized Entry! 5');
	}
}else{
		die('Unauthorized Entry! 56 due to big file');
}

///////////////////////////////////
if(isset($_POST['hid_54']) && $_POST['hid_54']=='7458P'){

}else{
	die('Unauthorized entry 69');
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//include scene init
include $rootpath."scene/scene_init.php";
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
	text-align:center;
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

	<div id="form_label">Thanks for Your Feedback</div>

	<!-- The line as div -->

	<div style="	 background:rgba(150,150,150,0.5);
			 background:-webkit-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-moz-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-ms-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
			 font-size:1px;
			 height:1px;
			 ">&nbsp;</div>



<div id="main">

<?php ///////////////////////////////////////////////main section////////////////////////////////////////////////////

///////////////////////////////////////////
if(isset($_SESSION['hb_captcha']['isverified']) && $_SESSION['hb_captcha']['isverified']=="Im6fL24"){
	$flag=true;


	///////////////create folder///////////////
	//mkdir($rootpath."scene/feedback/storage/fdbk_".feedback);

	if($hb_user_logged_in){
		$email=$_SESSION['hb_user']['email'];
		$flag=$flag && true;
	}elseif(isset($_POST['email']) && !empty($_POST['email'])){
		$email=$_POST['email'];
		if(validateEmail($email)){
			$email=$_POST['email'];
			$flag=true;
		}else{
			$flag=$flag && false;
			echo "<li>email address that you have provided is in wrong format. Please provide a correct format.</li>";
		}
	}else{
		$flag=$flag && false;
		echo "<li>Please provide your email address.</li>";
	}

	/////////////////////////////
	if(isset($_POST['message']) && !empty($_POST['message'])){
		if(strlen($_POST['message'])<=10000){
			if(strlen($_POST['subject'])<=200){
				$flag=$flag && true;
			}else{
				$flag=$flag && false;
				echo "<li>Subject should be less than 200.</li>";
			}
			
		}else{
			$flag=$flag && false;
			echo "<li>Message should be less than 10000.</li>";
		}
	}else{
		$flag=$flag && false;
		echo "<li>Please Write something to us.</li>";
	}
	if($flag){
		//////////////////////create Uniqe Id of 20 digit///////////////
		do{
			//generation of 4 digit code
			$feedback_id=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789_"),0,20);
			$query="SELECT sl FROM hb_scene_feedback WHERE feedback_id='".$feedback_id."' LIMIT 1";
			//check in the database to avoid :))...
			$rows=mysqli_query($hb_scene_db,$query);
			if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
				continue;
			}else{
				break;
			}

		}while(1);

		$query="INSERT INTO hb_scene_feedback SET date='".date("Y-m-d")."',time='".date("H:i:s")."',subject='".mysqli_real_escape_string($hb_scene_db,$_POST['subject'])."',message='".mysqli_real_escape_string($hb_scene_db,$_POST['message'])."',email='".mysqli_real_escape_string($hb_scene_db,$email)."',feedback_id='".$feedback_id."',reply=0 ";
		if(mysqli_query($hb_scene_db,$query)){
			//var_dump($_FILES);
			//echo "<br>";
			//print_r($_FILES['attach_files']);

			if(isset($_FILES['attach_files'])){
				$noOfFiles=count($_FILES['attach_files']['name']);
				if($noOfFiles>0){
					if(!file_exists($rootpath."scene/feedback/storage/fdbk_".$feedback_id)){
						///////////////create folder///////////////
						if(mkdir($rootpath."scene/feedback/storage/fdbk_".$feedback_id)){
							for($i=0; $i<$noOfFiles; $i++){

								move_uploaded_file($_FILES['attach_files']['tmp_name'][$i],$rootpath."scene/feedback/storage/fdbk_".$feedback_id."/".$_FILES['attach_files']['name'][$i]);
							}
						}

					}
				}
			}else{

			}
			/////////show Thanks
?>
			<div style="font-size:20px;">
				Thanks for your feedback. Your feedback will help us to improve our services.
			</div>
			<div style="font-size:15px; border:1px solid #888; padding:20px 5px; margin:20px 0px; border-radius:5px;">
				<div>Your feedback is successfully registered.</div>
				<div style="font-size:18px; color:white; background:green; padding:10px 0px; text-align:center; border-radius:5px;">Feedback ID: <?php echo $feedback_id; ?></div>
			</div>
			<div style="font-size:15px; color:gray;">
				We shall send you an email to <?php echo $email; ?> to notify you when our team will reply to your feedback.
			</div>
			<div style="text-align:center;margin:10px;"><a href="http://scene.hazrabrothers.com" style="text-decoration:none; background:#0e4d79; padding:6px 10px; border-radius:5px; color:white; font-size:15px;">Return to Scene</a></div>

<?php
			unset($_SESSION['hb_user']['feedback_form']);

		}else{
			echo "<div style='color:red;border:1px solid red;padding:5px;'>Thank Your for your effort to write us feedback. But we can not take your message because of internal error. Please try again later.</div>";
		}

	}else{
		echo "<div style='color:red;border:1px solid red;padding:5px;'>Thank Your for your effort to write us feedback. But we can not take your message for the reason written above.</div>";
	}

}else{
	echo "Invalid captcha. Please Provide a valid captcha and try again.";
	echo "<br>";
	echo "<a href='javascript:window.history.back()'>Back</a>";
}

unset($_SESSION['hb_user']['feedback_form']);
///////////////////////////////////////////////////////////////////////////////////////
//validate email
function validateEmail($email){
	if(!preg_match("/[\`\~\#\$\%\^\*\\\?\;\"\|\=\<\>\{\}\']/",$email)){
		if(preg_match("/(\w)+@{1}(\w)+\.{1}(\w)+/",$email)){
			if(strlen($email)>=5 && strlen($email)<=50){
				return true;
			}else{
				echo "<li>Length of email should lie between 5-50</li>";
				return false;
			}
		}else{
			echo "<li>Invalid email format (format : exam@pl.com)</li>";
			return false;
		}
	}else{
		echo '<li>Email should not contain `~#$%^*\\?;\"|=<>{}</li>';
		return false;
	}
}

?>


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
