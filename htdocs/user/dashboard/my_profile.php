<?php

/*if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']=="http://accounts.hazrabrothers.com/dashboard/"){

}else{
	die("Unauthorized Entry!");
}*/
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17006;
$hb_folder_layer=2;
$rootpath='';
for($i=1; $i<=$hb_folder_layer; $i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

if(!$hb_user_logged_in){
	die("<a href='/user/login/sign_in/'>Log In</a> first to manage your Hazra Brothers account");
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//fetching all the datas.
//from biodata
$query="SELECT * from hb_user_main_biodata WHERE user_id='".$_SESSION['hb_user']['user_id']."' LIMIT 1";
if($rows_biodata=mysqli_query($hb_db,$query)){
	if($row_biodata=mysqli_fetch_array($rows_biodata,MYSQLI_BOTH)){
		if($row_biodata['user_id']==$_SESSION['hb_user']['user_id']){
			$profile['first_name']=$row_biodata['first_name'];
			$profile['last_name']=$row_biodata['last_name'];
			$profile['dob']=$row_biodata['dob'];
			$profile['gender']=$row_biodata['gender'];
			$profile['address']=$row_biodata['address'];
			$profile['pincode']=$row_biodata['pincode'];
			$profile['profile_picture_current']=$row_biodata['profile_picture_current'];

		}else{
			die("Error:Unable to fetch data!");
		}
	}else{
		die("Error:Unable to fetch data!");
	}
}else{
	die("Error:Unable to fetch data!");
}

///from hb_user_main_security
$query="SELECT username,email,phone,user_id from hb_user_main_security WHERE user_id='".$_SESSION['hb_user']['user_id']."' LIMIT 1";
if($rows_security=mysqli_query($hb_db,$query)){
	if($row_security=mysqli_fetch_array($rows_security,MYSQLI_BOTH)){
		if($row_security['user_id']==$_SESSION['hb_user']['user_id']){
			$profile['username']=$row_security['username'];
			$profile['email']=$row_security['email'];
			$profile['phone']=$row_security['phone'];
		}
	}
}

echo "Done:";
?>
<style>
@media screen and (min-width:950px){
	#myprofile_left_box{
		width:50%;
	}
	#myprofile_right_box{
		width:50%;
	}
	#myprofile_left_box>#div_inner{
		border-right:1px solid rgba(0,0,0,0.3);
	}
	#myprofile_left_box .content_for_edit [id^=spn_]{
		width:50%;
		margin-top: 0px;
	}
	[id^=hb_pop_up_box_for_] #hb_pop_up_box_main{
		width:60%;
	}
}
@media screen and (max-width:949px){
	#myprofile_left_box{
		width:100%;
	}
	#myprofile_right_box{
		width:100%;
	}
	#myprofile_left_box>#div_inner{
		border-right:0px solid rgba(0,0,0,0);
	}
	#myprofile_left_box .content_for_edit [id^=spn_]{
		width:100%;
		margin-top: 3px;
	}
	[id^=hb_pop_up_box_for_] #hb_pop_up_box_main{
		width:95%;
	}
}

#main_div{
	background: rgba(255,255,255,0.75);
}


#myprofile_header{
	/*background: rgba(212,235,255,0.9);
	border-bottom:2px solid #0090b1;*/
	border-bottom:2px solid rgba(0,0,0,0.5);
}
#myprofile_header_inner{
	/*border-bottom:6px solid rgba(0,0,0,0.2);*/
	text-align: center;
}
#myprofile_header_img_div{
	margin:auto;
	margin-bottom:20px;
	transition:8px solid black;
}

#myprofile_header_img{
	margin:auto;
	width:200px;
	height:200px;
	background-color:rgba(235,235,235,0.85);
	background-size:cover;
	background-repeat:no-repeat;
	background-position: center center;
	background-clip:padding-box;
	border-radius:200px;
	box-shadow:rgba(0,0,0,0.5) 0px 0px 5px;
	overflow: hidden;
}

/*- -  - -  - - - - - -    - - - -- - - */

#myprofile_pic_change_button{
	width:100%;
	height:70px;
	margin:auto;

	background-color: rgba(0,0,0,0.3);

	opacity: 0;
	margin-top:130px;
	transform-origin: 50% 100%;
	transform: scale(1,0);
	text-align: center;
	cursor: pointer;
	transition:opacity 0.27s, transform 0.27s;
}

#myprofile_header_img:hover #myprofile_pic_change_button{
	opacity:1;
	transform: scale(1,1);
}

#myprofile_pic_change_button>div{
	height:80px;

	background-image: url("/images/camera_logo.png");
	background-size:auto 70%;
	background-repeat:no-repeat;
	background-position: center 30%;

	transform-origin: 50% 50%;
	transform:translateY(150px);
	transition: transform 0.4s;

}

#myprofile_header_img:hover #myprofile_pic_change_button>div{
	transform:translateY(0px);
}
/*- -  - -  - - - - - -    - - - -- - - */

#mycover_pic_change_button{
	width:45px;
	height:45px;
	margin: 10px 10px 0px auto;

	background-color: rgba(0,0,0,0.3);
	background-image: url("/images/camera_logo.png");
	background-size:70% auto;
	background-repeat:no-repeat;
	background-position: center center;

	border-radius: 600px;
	opacity:0;
	transform: scale(0,0) rotateZ(90deg);
	cursor:pointer;
	transition: opacity 0.3s, transform 0.3s, background 0.3s;
}

#mycover_pic_change_button:hover{
	background-color: rgba(0,0,0,0.6);
}
#myprofile_header:hover #mycover_pic_change_button{
	opacity:1;
	transform: scale(1,1) rotateZ(0deg);
}

/*-------------------------------------------------------------*/
#line_mdl7vd{
	background: rgba(127,127,127,0.9);
	background: -webkit-linear-gradient(left,transparent,rgba(127,127,127,0.9),transparent);
	background: -moz-linear-gradient(left,transparent,rgba(127,127,127,0.9),transparent);
	background: -ms-linear-gradient(left,transparent,rgba(127,127,127,0.9),transparent);
	height:1px;
	margin:auto;
}
#myprofile_header_name_div{
	background:rgba(127,127,127,0.5);
	background: -webkit-linear-gradient(left,transparent,rgba(127,127,127,0.5),transparent);
	background: -moz-linear-gradient(left,transparent,rgba(127,127,127,0.5),transparent);
	background: -ms-linear-gradient(left,transparent,rgba(127,127,127,0.5),transparent);
	color:white;
}
#myprofile_header_name{
	font-size: 25px;
	height:28px;
	padding:16px 0px 16px 10px;
}
/*-------------------------------------------------*/
#myprofile_left_box{
	display: inline-block;
	float: left;
}
#myprofile_left_box>#div_inner{
	/*border-right:1px solid rgba(0,0,0,0.3);*/
}
/*------------------------------------------------------*/

#myprofile_left_box .content_for_edit{
	text-align: right;
	padding:0px 10px 0px 20px;
	font-size: 18px;
	border-bottom: 1px solid rgba(0,0,0,0.3);
}
#myprofile_left_box .content_for_edit .field_name{
	float:left;
	padding:10px 0px;
}
#myprofile_left_box .content_for_edit [id^=spn_]{
	display: inline-block;
	text-align: right;
	font-size: 18px;
	color:rgba(0,0,0,0.7);
}
#myprofile_left_box .content_for_edit [id^=spn_] .span_text{
	display:inline-block;
	padding:10px 0px;
}
#myprofile_left_box .content_for_edit [id^=edit862_]{
	float:right;
	border:none;
	margin:10px 0px 0px 5px;
	padding:0px;
	width: 20px;
	height: 20px;
	background-image: url('/images/logo_edit.png');
	background-color: transparent;
	background-position: center center;
	background-size: 100% 100%;
	background-repeat: no-repeat;
	opacity: 0.3;
	transition: opacity 0.3s;
}
#myprofile_left_box .content_for_edit:hover [id^=edit862_]{
	opacity: 1;
}
#myprofile_left_box #saveChangesButton_div{
	text-align: right;
	display: none;
}

/*-------------------------------------------------------------*/
#myprofile_left_box #saveChangesButton{
	background:#57a;
	border:2px solid transparent;
	border-radius:5px;
	padding:5px 10px;
	margin:5px;
	font-size:15px;
	font-weight:bold;
	color:white;
	box-shadow:rgba(120,120,120,0.6) 2px 2px 3px;
	transition:background 0.3s,color 0.3s, border 0.3s;
	cursor:pointer;
}
#myprofile_left_box #saveChangesButton:hover{
	background:#CBE0FF;
	border:2px solid #57a;
	color:#2a4a7b;
}
/*-----------------------------------------------------------------*/

#myprofile_left_box .content_for_edit [id^=editcross862_]{
	float:right;
	border:none;
	margin:10px 0px 0px 5px;
	padding:0px;
	width: 20px;
	height: 20px;
	display: none;
	background-image: url('/images/logo_editcross.png');
	background-color: transparent;
	background-position: center center;
	background-size: 100% 100%;
	background-repeat: no-repeat;
	transition: opacity 0.3s;
}
#myprofile_left_box .content_for_edit #spn_address{
	float:none;
}

#main_div input[type=text],
#main_div input[type=date],
#main_div textarea,
#main_div input[type=tel]
{
	font-size:18px;
	height:20px;
	border:0px solid transparent;
	background:  rgba(0,0,0,0.03);
	border-bottom:2px solid rgba(0,0,0,0.3);
	border-radius: 0px;
	padding:10px 10px;
	margin:0px auto;
	width:92%;
	transition: border 0.3s, border-radius 0.3s, background 0.3s, box-shadow 0.3s;
}

#main_div input[type=text]:focus,
#main_div input[type=date]:focus,
#main_div textarea:focus,
#main_div input[type=tel]:focus
{
	box-shadow:rgba(0,0,0,0.6) 0px 0px 4px;
	border-bottom:2px solid rgba(0,0,0,0.9);
}

#main_div input[type=text]:hover,
#main_div input[type=date]:hover,
#main_div input[type=tel]:hover
{
	border-bottom:2px solid rgba(0,0,0,0.9);
	background: rgba(0,0,0,0.07);
}

#main_div textarea:hover{
	border-bottom:2px solid rgba(0,0,0,0.9);
	background: rgba(0,0,0,0.07);
}

#myprofile_left_box .content_for_edit textarea{
	height:70px;
	resize: none;
}
#myprofile_left_box .content_for_edit form[name=gender_selection_form]{
	padding:10px 0px;
	font-size:18px;
	color:black;
}
#myprofile_left_box .content_for_edit form[name=gender_selection_form]>div{
	display:inline-block;
}
/*-------------------------------------------------------------*/

div[tprop$=_error_message]{
	clear:both;
	color:red;
	font-size:12px;
	text-align:right;
	height:0px;
	overflow:hidden;
	transition:height 0.3s;
}
/*-------------------------------------------------------------*/

#main_div #gender_div{
	margin-top:20px;
}
#main_div #email_div{
	padding:5px 15px 4px 15px;
	margin:5px;
	border:1px solid rgba(0,0,0,0.25);
	background: rgba(0,0,0,0.1);
	border-radius:3px;
}
#main_div #username_div{
	padding:5px 15px 4px 15px;
	margin:5px;
	border:1px solid rgba(0,0,0,0.25);
	background: rgba(0,0,0,0.1);
	border-radius: 3px;
}
#main_div .hb_emlusr_5f64qw4{
	display:inline-block;
	border-bottom: 1px solid;
}


/*-------------------------------------------------------------*/
#main_div .hb_user_dashboard_profile_btn{
	text-decoration:none;
}
#main_div .hb_user_dashboard_profile_btn>div{
	float:left;
	background:#57a;
	border:2px solid transparent;
	border-radius:5px;
	padding:5px 10px;
	margin:5px;
	font-size:15px;
	font-weight:bold;
	color:white;
	box-shadow:rgba(120,120,120,0.6) 2px 2px 3px;
	transition:background 0.3s,color 0.3s, border 0.3s;
	cursor:pointer;
}
#main_div .hb_user_dashboard_profile_btn>div:hover{
	background:#CBE0FF;
	border:2px solid #57a;
	color:#2a4a7b;
}
/*-----------------------------------------------------------------*/


/*===================================================================================
===================================================================================*/
#myprofile_right_box{
	display: inline-block;
	float: right;
}

/*------------------------------------*/
#myprofile_right_box>#div_inner{
}

/*==========================================================================*/
#main_div #upload_outer_dp{
		width:250px;
		height:250px;
		margin:auto;
}
#main_div #upload_div_area_dp{
		width:200px;
		height:200px;
		border:3px solid rgba(0,0,0,0.8);
		border-radius: 500px;
		padding:10px;
		margin:auto;
		color:rgba(0,0,0,0.8);
		text-shadow: rgba(255,255,255,0.8) 0px 0px 5px;
		font-size: 25px;
		text-align: center;
		background-image: url('/images/user_logo.png');
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
		cursor:pointer;
		transition: background 0.3s, color 0.3s, box-shadow 0.3s;
}
#main_div #upload_div_area_dp:hover{
		/*background-color: rgba(150,170,195,0.5)*/
		background-color: rgba(0,0,0,0.08);
		color:rgba(150,10,10,0.8);
		box-shadow:rgba(0,0,0,0.5) 0px 0px 8px 5px;
}
/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
#main_div #upload_outer_cover{
		height:250px;
		margin:auto;
}
#main_div #upload_div_area_cover{
		width:auto;
		height:200px;
		border:3px solid rgba(0,0,0,0.8);
		padding:10px;
		margin:auto;
		color:rgba(0,0,0,0.8);
		text-shadow: rgba(255,255,255,0.8) 0px 0px 5px;
		font-size: 25px;
		text-align: center;
		background-image: url('/images/background/shade/back2.png');
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
		cursor:pointer;
		transition: background 0.3s, color 0.3s, box-shadow 0.3s;
}
#main_div #upload_div_area_cover:hover{
		/*background-color: rgba(150,170,195,0.5)*/
		background-color: rgba(0,0,0,0.08);
		color:rgba(150,10,10,0.8);
		box-shadow:rgba(0,0,0,0.5) 0px 0px 8px 5px;
}

/*==========================================================================*/
#main_div #error_message_457k{
		font-size:14px;
		color:red;
		padding: 4px 8px;
		border-top:1px solid red;
		background: rgba(255,255,255,0.8);
		text-align: center;
		transform-origin:50% 100%;
		transform: scale(1,0);
		transition: transform 0.3s;
	}
#main_div #hb_file_uploader_label{

	}
#main_div [id^='hb_file_uploader']{
		display: none;
	}

#main_div #hb_name_uploader{
		text-align: center;
		font-size: 20px;
}

#main_div #hb_name_uploader>input{
		margin:5px;
		padding:8px 15px;
		font-size: 16px;
		border:2px solid rgba(0, 0, 0, 0.9);
		background: rgba(255,255,255,0.9);
		border-radius:100px;
		transition: border 0.3s, background 0.3s, box-shadow 0.3s;
}
#main_div #hb_name_uploader>input:hover{
	border:2px solid rgba(0, 0, 0, 1);
	background: rgba(255,255,255,1);
	box-shadow: rgba(0, 0, 0, 0.8) 2px 2px 4px;
}
#main_div #hb_name_uploader>input:focus{
	box-shadow: rgba(0, 0, 0, 0.8) 2px 2px 4px;
}

/*--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<o>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>--*/
/*--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<o>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>--*/
/*--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<o>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>--*/

#hb_img_btn_654{
	text-align:center;
}

#hb_img_btn_654 .hb_user_dashboard_profile_btn{
	color:#035069;
	width:max-content;
	border:2px solid #035069;
	background-color:rgba(255,255,255,0.4);
	padding:5px 10px;
	border-radius:5px;
	cursor:pointer;
	transition:color 0.3s, background 0.3s;
}
#hb_img_btn_654 .hb_user_dashboard_profile_btn:hover{
	color:white;
	background-color:#035069;
}
#hb_img_btn_654 .hb_user_dashboard_profile_btn:disabled{
	color:#444;
	border:2px solid #444;
	background-color:rgba(0,0,0,0.2);
}

#hb_img_btn_654 .hb_user_dashboard_profile_btn:disabled:hover{
	color:#444;
}

/*====================------------===================*/

[id^=hb_pop_up_box_for_]{
	display:none;
	position:fixed;
	width:100%;
	height:600px;
	z-index:100;
	top:40px;
	left:0px;
	background: rgba(0,0,0,0);
	transition: background 0.3s;
}

[id^=hb_pop_up_box_for_] #hb_pop_up_box_main{
	margin:25px auto;
	background: white;
	border-radius: 10px;
	overflow: hidden;
	box-shadow: rgba(0,0,0,0.5) 3px 3px 5px;
	transform-origin: 50% 50%;
	transform:scale(1,0);
	transition: transform 0.2s;
}

[id^=hb_pop_up_box_for_] #hb_pop_up_box_main>#div_inner{
	padding:10px;
}

/*
[id^=hb_pop_up_box_for_] #hb_pop_up_box_main #close_hb_pop_up_box_btn{
	float:right;
	width:20px;
	height:20px;
	font-size: 18px;
	padding:5px 3px 10px 12px;
	background: #ee0000;
	color:white;
	cursor: pointer;
	border-bottom-left-radius: 80%;
	transition: background 0.3s, color 0.3s;
}
[id^=hb_pop_up_box_for_] #hb_pop_up_box_main #close_hb_pop_up_box_btn:hover{
	background:#f8d100;
	color:black;
}
*/

[id^=hb_pop_up_box_for_] #hb_pop_up_box_main #close_hb_pop_up_box_btn{
	float:right;
	font-size:22px;
	width:18px;
	height:18px;
	margin:4px 4px 0px 0px;
	background-color:rgba(180,130,90,1);
	border-radius:2px 8px 2px 10px;
	color:white;
	cursor:pointer;
	padding:7px 10px 13px 10px;
	text-align:center;
	transition:background 0.3s, color 0.3s;
}
[id^=hb_pop_up_box_for_] #hb_pop_up_box_main #close_hb_pop_up_box_btn:hover{
	background-color:rgba(200,60,20,1);
}


</style>

<header id="myprofile_header">
	<div id="myprofile_header_inner">
		<div id="myprofile_header_img_div">

			<div id="mycover_pic_change_button">&nbsp;</div>

			<div id="myprofile_header_img" style="background-image:url('<?php
			if(!empty($profile['profile_picture_current'])){
				echo '/users/user_'.$profile['username']."/profile_pictures/".$profile['profile_picture_current'];
			} else{
				echo '/images/user_logo.png';
			}

			?>');">
				<div id="myprofile_pic_change_button"><div>&nbsp;</div></div>
			</div>

	</div>

	<div id="line_mdl7vd"></div>

	<div id="myprofile_header_name_div">
		<div id="myprofile_header_name"><?php echo $profile['first_name']." ".$profile['last_name'] ?></div>
	</div>

</div>
</header>

<div id="main_div">

	<div id="myprofile_left_box">
	<div id="div_inner">
		<div>
			<div class='content_for_edit'><span class='field_name'>First Name: </span>
				<button type="button" id="edit862_first_name" >&nbsp;</button>
				<button type="button" id="editcross862_first_name" >&nbsp;</button>
				<span id="spn_first_name"><div class="span_text"><?php echo $profile['first_name']; ?></div></span>
				<div tprop=first_name_error_message></div>
			</div>
		</div>

		<div>
			<div class='content_for_edit'><span class='field_name'>Last Name: </span>
				<button type="button" id="edit862_last_name" >&nbsp;</button>
				<button type="button" id="editcross862_last_name" >&nbsp;</button>
				<span id="spn_last_name"><div class="span_text"><?php echo $profile['last_name']; ?></div></span>
				<div tprop=last_name_error_message></div>
			</div>
		</div>

		<div>
			<div class='content_for_edit'><span class='field_name'>Date of birth: </span>
				<button type="button" id="edit862_dob" >&nbsp;</button>
				<button type="button" id="editcross862_dob" >&nbsp;</button>
				<span id="spn_dob"><div class="span_text"><?php echo $profile['dob']; ?></div></span>
				<div tprop=dob_error_message></div>
			</div>
		</div>

		<div>
			<div class='content_for_edit'><span class='field_name'>Gender: </span>
				<button type="button" id="edit862_gender" >&nbsp;</button>
				<button type="button" id="editcross862_gender" >&nbsp;</button>
				<span id="spn_gender"><div class="span_text"><?php echo $profile['gender']; ?></div></span>
				<div tprop=gender_error_message></div>
			</div>
		</div>

		<div>
			<div class='content_for_edit'><span class='field_name'>Address: </span>
				<button type="button" id="edit862_address" >&nbsp;</button>
				<button type="button" id="editcross862_address" >&nbsp;</button>
				<span id="spn_address"><div class="span_text"><?php echo $profile['address']; ?></div></span>
				<div tprop=address_error_message></div>
		</div>
		</div>

		<div>
			<div class='content_for_edit'><span class='field_name'>Pincode: </span>
				<button type="button" id="edit862_pincode" >&nbsp;</button>
				<button type="button" id="editcross862_pincode" >&nbsp;</button>
				<span id="spn_pincode"><div class="span_text"><?php echo $profile['pincode']; ?></div></span>
				<div tprop=pincode_error_message></div>
			</div>
		</div>

		<div>
			<div class='content_for_edit'><span class='field_name'>Phone: </span>
				<button type="button" id="edit862_phone" >&nbsp;</button>
				<button type="button" id="editcross862_phone" >&nbsp;</button>
				<span id="spn_phone"><div class="span_text"><?php echo $profile['phone']; ?></div></span>
				<div tprop=phone_error_message></div>
			</div>
		</div>

		<div id="saveChangesButton_div">
			<input type="button" value="Save Changes" id="saveChangesButton" />
		</div>



		<div id="email_div">
			<div class="hb_emlusr_5f64qw4">E-mail:</div> <?php echo $profile['email']; ?>
		</div>
		<div id="username_div">
			<div class="hb_emlusr_5f64qw4">Username:</div> <?php echo $profile['username']; ?>
		</div>
		<div><a href="/user/login/sign_in/change_password" class="hb_user_dashboard_profile_btn"><div>Change Password</div></a></div>

		<div style="clear:both;font-size:1px; height:0px; overflow:hodden; opacity:0;">&nbsp;</div>
	<br>

	</div>
	</div>


	<div id="myprofile_right_box">
	<div id="div_inner">
	I am the best and anothers are the paste!! <br>
	I am the best and anothers are the paste!! <br>
	I am the best and anothers are the paste!! <br><br>
	I am the best and anothers are the paste!! <br>
	I am the best and anothers are the paste!! <br>
	I am the best and anothers are the paste!! <br><br>
	I am the best and anothers are the paste!! <br>
	I am the best and anothers are the paste!! <br>
	<br><br>
<!--
		<div>


		<div id="div_fields">

			<div id="error_message_457k">&nbsp;</div>
			<br>
			<div id="upload_outer">
			<label for="hb_file_uploader" id="for_scene_mask">

				<div id="upload_div_area_885">
				<div id="file_upload_area_desc_526">&nbsp;</div>
				<div>

				<input type="file" name="scene_mask" id="hb_file_uploader">

				</div>

			</div>

			</label>

			</div>
		</div>
		<div id="hb_img_btn_654">
			<button type="button" class="hb_user_dashboard_profile_btn" id="btn_reset">Reset</button>
			<button type="button" class="hb_user_dashboard_profile_btn" id="btn_changeNow" disabled>Change Now</button>
		</div>

		</div>

-->

		<div "profile_social_link_box">

		</div>

	</div>
	</div>



<div style="clear:both;font-size:1px;height:0px;"></div>

<!-- ==================pop up for changing profile picture============== -->

<div id="hb_pop_up_box_for_dp">
	<div id="hb_pop_up_box_main">

		<div id="close_hb_pop_up_box_btn">X</div>

		<div id="div_inner">

		<div id="div_fields">

			<div id="upload_outer_dp">
			<label for="hb_file_uploader_dp" id="for_scene_mask">

				<div id="upload_div_area_dp" hb_up_code='upload_div_area_885'>
				<div id="file_upload_area_desc_526">&nbsp;</div>
				<div>

				<input type="file" name="scene_mask" id="hb_file_uploader_dp">

				</div>

				</div>

			</label>

			</div>
		</div>
		<div id="hb_img_btn_654">
			<button type="button" class="hb_user_dashboard_profile_btn" id="btn_reset">Reset</button>
			<button type="button" class="hb_user_dashboard_profile_btn" id="btn_changeNow" disabled>Change Now</button>
		</div>

		</div>

		<div id="error_message_457k">Only image file of 'png', 'jpg', 'jpeg' or 'gif' format is supported!</div>

	</div>
</div>


<!-- ==================END changing profile picture============== -->

<!-- ==================pop up for changing cover picture============== -->

<div id="hb_pop_up_box_for_cover">
	<div id="hb_pop_up_box_main">

		<div id="close_hb_pop_up_box_btn">X</div>

		<div id="div_inner">

		<div id="div_fields">

			<div id="upload_outer_cover">
			<label for="hb_file_uploader_cover" id="for_scene_mask">

				<div id="upload_div_area_cover" hb_up_code='upload_div_area_885'>
				<div id="file_upload_area_desc_526">&nbsp;</div>
				<div>

				<input type="file" name="scene_mask" id="hb_file_uploader_cover">

				</div>

			</div>

			</label>

			</div>
		</div>
		<div id="hb_img_btn_654">
			<button type="button" class="hb_user_dashboard_profile_btn" id="btn_reset">Reset</button>
			<button type="button" class="hb_user_dashboard_profile_btn" id="btn_changeNow" disabled>Change Now</button>
		</div>

		</div>

		<div id="error_message_457k">Only image file of 'png', 'jpg', 'jpeg' or 'gif' format is supported!</div>

	</div>
</div>

<!-- ==================END changing cover picture============== -->

</div>
<div style="clear:both;font-size:1px;height:0px;"></div>


<script id='my_profile_script_856'>
now_opened_pop_up="";
obj_upload="";

document.querySelector("#myprofile_pic_change_button").addEventListener("click",function (){pop_up_show('dp');},false);
document.querySelector("#mycover_pic_change_button").addEventListener("click",function (){pop_up_show('cover');},false);

close_hb_pop_up_box_btn=document.querySelectorAll("#close_hb_pop_up_box_btn");

for(i=0;i<close_hb_pop_up_box_btn.length;i++){
		close_hb_pop_up_box_btn[i].addEventListener("click",function (){
			pop_up_close(now_opened_pop_up);
		},false);
}

////////////////////edit button//////////////
	edit_fields=document.querySelectorAll("button[id^=edit862_]");

	for(i=0;i<edit_fields.length;i++){
			edit_fields[i].addEventListener("click",function (){
				edit_field(this);
			},false);
	}

///////////////////////cross button//////////////////////////////
	editcross_fields=document.querySelectorAll("button[id^=editcross862_]");

	for(i=0;i<edit_fields.length;i++){
			editcross_fields[i].addEventListener("click",function (){
				editcross_field(this);

				//alert("dug");
			},false);
	}

	saveChangesButton=document.querySelector("#saveChangesButton");
	saveChangesButton.addEventListener("click",changeNow,false);
	universal_field_string="";

	function editcross_field(editcross_btn){
		editcross_btn.parentNode.querySelector("div.content_for_edit [id^=spn_]").innerHTML="<div class='span_text'></div>";
		var editable_field=editcross_btn.parentNode.querySelector("div.content_for_edit [id^=spn_] .span_text");

		switch(editcross_btn.id.substr(13)){
			case "first_name":
				old_value_field=old_value_first_name;
				break;
			case "last_name":
				old_value_field=old_value_last_name;
				break;
			case "dob":
				old_value_field=old_value_dob;
				break;
			case "gender":
				old_value_field=old_value_gender;
				break;
			case "address":
				old_value_field=old_value_address;
				break;
			case "pincode":
				old_value_field=old_value_pincode;
				break;
			case "phone":
				old_value_field=old_value_phone;
				break;
			default:
			break;
		}

		editable_field.innerText=old_value_field;
		editcross_btn.style.display="none";
		editcross_btn.parentNode.querySelector("#edit862_"+editcross_btn.id.substr(13)).style.display="block";
		universal_field_string=universal_field_string.replace(editcross_btn.id.substr(13)+"~","");

		if(universal_field_string.trim()==""){
			document.querySelector("#saveChangesButton_div").style.display="none";
		}

		//editcross_btn.parentNode.querySelector("div[tprop$=_error_message]").style.display="block";
		editcross_btn.parentNode.querySelector("div[tprop$=_error_message]").style.height="0px";
		//document.title=editcross_btn.parentNode.querySelector("div[tprop$=_error_message]").getAttribute('tprop');
		editcross_btn.parentNode.querySelector("div[tprop$=_error_message]").innerText="";
	}

	function edit_field(edit_btn){
		var editable_field=edit_btn.parentNode.querySelector("div.content_for_edit span[id^=spn]");

		document.querySelector("#saveChangesButton_div").style.display="block";

		var elm_to_be_changed=edit_btn.id.substr(8);
		//alert(elm_to_be_changed);
		switch (elm_to_be_changed) {
			case "first_name":
				old_value_first_name=editable_field.innerText;
				editable_field.innerHTML="<input type='text' id=input_text_"+edit_btn.id.substr(8)+">";
				edit_btn.style.display="none";
				edit_btn.parentNode.querySelector("#editcross862_"+edit_btn.id.substr(8)).style.display="block";
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).addEventListener("blur",function (){
					validateFirstName(this);
				});
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).value=old_value_first_name;
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).focus();
				universal_field_string+=edit_btn.id.substr(8)+"~";
				break;

			case "last_name":
				old_value_last_name=editable_field.innerText;
				editable_field.innerHTML="<input type='text' id=input_text_"+edit_btn.id.substr(8)+">";
				edit_btn.style.display="none";
				edit_btn.parentNode.querySelector("#editcross862_"+edit_btn.id.substr(8)).style.display="block";
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).addEventListener("blur",function (){
					validateLastName(this);
				});
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).value=old_value_last_name;
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).focus();
				universal_field_string+=edit_btn.id.substr(8)+"~";
				break;

			case "dob":
				old_value_dob=editable_field.innerText;
				editable_field.innerHTML="<input type='date' id=input_date_"+edit_btn.id.substr(8)+">";
				edit_btn.style.display="none";
				edit_btn.parentNode.querySelector("#editcross862_"+edit_btn.id.substr(8)).style.display="block";
				editable_field.querySelector("#input_date_"+edit_btn.id.substr(8)).addEventListener("blur",function (){
					validateDOB(this);
				})
				editable_field.querySelector("#input_date_"+edit_btn.id.substr(8)).value=old_value_dob;
				editable_field.querySelector("#input_date_"+edit_btn.id.substr(8)).focus();
				universal_field_string+=edit_btn.id.substr(8)+"~";
				break;

			case "gender":
				old_value_gender=editable_field.innerText;
				editable_field.innerHTML="<form name='gender_selection_form'><div><input type='radio' name='gender_of_user' id=input_radio_"+edit_btn.id.substr(8)+" value=Male> Male</div> <div><input type='radio' name='gender_of_user' id=input_radio_"+edit_btn.id.substr(8)+" value=Female> Female</div> <div><input type='radio' name='gender_of_user' id=input_radio_"+edit_btn.id.substr(8)+" value=Other> Other</div></form>";
				edit_btn.style.display="none";
				edit_btn.parentNode.querySelector("#editcross862_"+edit_btn.id.substr(8)).style.display="block";
				editable_field.querySelector("#input_radio_"+edit_btn.id.substr(8)).addEventListener("blur",function (){
					validateGender(this);
				})

				switch(old_value_gender){
					case "male":
						editable_field.querySelector("#input_radio_"+edit_btn.id.substr(8)+"[value=Male]").checked=true;
						break;
					case "female":
						editable_field.querySelector("#input_radio_"+edit_btn.id.substr(8)+"[value=Female]").checked=true;
						break;
					case "other":
						editable_field.querySelector("#input_radio_"+edit_btn.id.substr(8)+"[value=Other]").checked=true;
						break;
				}
				editable_field.querySelector("#input_radio_"+edit_btn.id.substr(8)).focus();
				universal_field_string+=edit_btn.id.substr(8)+"~";
				break;

			case "address":
				old_value_address=editable_field.innerText;
				editable_field.innerHTML="<textarea id=input_textarea_"+edit_btn.id.substr(8)+"></textarea>";
				edit_btn.style.display="none";
				edit_btn.parentNode.querySelector("#editcross862_"+edit_btn.id.substr(8)).style.display="block";
				editable_field.querySelector("#input_textarea_"+edit_btn.id.substr(8)).addEventListener("blur",function (){
					validateAddress(this);
				})
				editable_field.querySelector("#input_textarea_"+edit_btn.id.substr(8)).value=old_value_address;
				editable_field.querySelector("#input_textarea_"+edit_btn.id.substr(8)).focus();
				universal_field_string+=edit_btn.id.substr(8)+"~";
				break;

			case "pincode":
				old_value_pincode=editable_field.innerText;
				editable_field.innerHTML="<input type='text' id=input_text_"+edit_btn.id.substr(8)+" />";
				edit_btn.style.display="none";
				edit_btn.parentNode.querySelector("#editcross862_"+edit_btn.id.substr(8)).style.display="block";
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).addEventListener("blur",function (){
					validatePincode(this);
				})
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).value=old_value_pincode;
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).focus();
				universal_field_string+=edit_btn.id.substr(8)+"~";
				break;

			case "phone":
				old_value_phone=editable_field.innerText;
				editable_field.innerHTML="<input type='text' id=input_text_"+edit_btn.id.substr(8)+" />";
				edit_btn.style.display="none";
				edit_btn.parentNode.querySelector("#editcross862_"+edit_btn.id.substr(8)).style.display="block";
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).addEventListener("blur",function (){
					validatePhone(this);
				})
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).value=old_value_phone;
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).focus();
				universal_field_string+=edit_btn.id.substr(8)+"~";
				break;

			default:

		}

	}

	function changeNow(){
		var fields=universal_field_string.split("~");
		var qstring="";
		for(var i=0;i<fields.length;i++){
			if(fields[i]==""){

			}else{
				switch(fields[i]){
					case "first_name":
							qstring+="first_name="+document.querySelector("#input_text_first_name").value.trim()+"&";
							break;
					case "last_name":
						qstring+="last_name="+document.querySelector("#input_text_last_name").value.trim()+"&";
						break;
					case "dob":
						qstring+="dob="+document.querySelector("#input_date_dob").value.trim()+"&";
						break;
					case "gender":
						qstring+="gender="+document.gender_selection_form.gender_of_user.value.trim()+"&";
						break;
					case "address":
						qstring+="address="+document.querySelector("#input_textarea_address").value.trim()+"&";
						break;
					case "pincode":
						qstring+="pincode="+document.querySelector("#input_text_pincode").value.trim()+"&";
						break;
					case "phone":
						qstring+="phone="+document.querySelector("#input_text_phone").value.trim()+"&";
						break;
				}
			}
		}
		//alert(qstring);
		//alert(universal_field_string);
		//refresh the page.
		edit_request=new XMLHttpRequest();
		edit_request.open("POST","edit_profile.php",true);
		edit_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		edit_request.onreadystatechange=getEditResponse;
		edit_request.send(qstring);
	}

	function getEditResponse(){
		if(edit_request.readyState==4 && edit_request.status==200){
			//alert(edit_request.responseText);
			if(edit_request.responseText.substr(0,6)=="Error:"){

			}else{
				if(edit_request.responseText.substr(0,5)=="Done:"){
					hb_acc_dashboard_show("my_profile");
				}
			}
		}
	}


	/*********************************************************************************************************************/
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
		}
	}

	//hide error
	function hideError(obj){
		document.querySelector("div[tprop="+obj+"]").style.height="0px";
		document.querySelector("div[tprop="+obj+"]").setAttribute("error_tprop_showed","false");
		document.querySelector("div[tprop="+obj+"]").innerText="";

	}

	//first name checking ...
	function validateFirstName(obj){
		var myRegExp=/[^a-z\^A-Z ]/g;
		if(!(myRegExp.test(obj.value))){
			if(obj.value.length>=1 && obj.value.length<=30){
				hideError("first_name_error_message");
				return true;
			}else{
				//obj.focus();
				showError("Length of first name should lie between 1-30","first_name_error_message");
				return false;
			}
		}else{
			//obj.focus();
			showError("First name should contain only A-Z and a-z","first_name_error_message");
			return false;
		}
	}

	//last name checking ...
	function validateLastName(obj){
		var myRegExp=/[^a-z\^A-Z ]/g;
		if(!(myRegExp.test(obj.value))){
			if(obj.value.length>=1 && obj.value.length<=30){
				hideError("last_name_error_message");
				return true;
			}else{
				//obj.focus();
				showError("Length of last name should lie between 1-30","last_name_error_message");
				return false;
			}
		}else{
			//obj.focus();
			showError("Last name should contain only A-Z and a-z","last_name_error_message");
			return false;
		}
	}

	///dob checking
	function validateDOB(obj){
		//alert(document.reg_form.dob.value);
		if(obj.value>="<?php echo date("Y-m-d",strtotime('-100year')); ?>" && obj.value<="<?php echo date("Y-m-d",strtotime('-10year')); ?>"){
			hideError("dob_error_message");
			return true;
		}else{
			//obj.focus();
			showError("Please provide valid date between <?php echo date("Y-m-d",strtotime('-100year')); ?> and <?php echo date("Y-m-d",strtotime('-10year')); ?> ","dob_error_message");
			return false;
		}
	}

	///gender checking...
	function validateGender(obj){
		if(obj.value!=""){
			hideError("gender_error_message");
			return true;
		}else{
			//obj.focus();
			showError("Select a gender please","geder_error_message");
			return false;
		}
	}

	//address checking ...
	function validateAddress(obj){
		var myRegExp=/[\`\~\#\$\%\^\*\\\?\;\"\|\=\<\>\{\}]/g;
		if(!myRegExp.test(obj.value)){
			if(obj.value.length>=10 && obj.value.length<=100){
				hideError("address_error_message");
				return true;
			}else{
				//obj.focus();
				showError("Length of address should lie between 10-100","address_error_message");
				return false;
			}

		}else{
			//obj.focus();
			showError("address should not contain `~#$%^*\\?;\"|=<>{}","address_error_message");
			return false;

		}
	}

	//pincode checking ...
	function validatePincode(obj){
		var myRegExp=/[\D]/g;
		if(!myRegExp.test(obj.value)){
			if(obj.value.length>=3 && obj.value.length<=20){
				hideError("pincode_error_message");
				return true;
			}else{
				//obj.focus();
				showError("Length of pincode should be 3-20!","pincode_error_message");
				return false;
			}

		}else{
			//obj.focus();
			showError("Pincode should contain number only!","pincode_error_message");
			return false;

		}
	}

	//phone checking
	function validatePhone(obj){
		var myRegExp=/[\D]/g;
		if(!myRegExp.test(obj.value)){
			if(obj.value.length>=4 && obj.value.length<=20){
				hideError("phone_error_message");
				return true;
			}else{
				//obj.focus();
				showError("Length of phone number length shoule be 4-20","phone_error_message");
				return false;
			}
		}else{
			//obj.focus();
			showError("Phone number should contain number only!","phone_error_message");
			return false;
		}
	}



	/*-------------------------------------------------------*/
	/*----------- Open and Close pop up dp change -----------*/
	/*-------------------------------------------------------*/

				function pop_up_show(obj){
					var myObj=document.querySelector("#hb_pop_up_box_for_"+obj);
					var myObj_main=document.querySelector("#hb_pop_up_box_for_"+obj+" #hb_pop_up_box_main");

					myObj.style.display='block';
					setTimeout(function (){
						myObj_main.style.transform="scale(1,1)";
						myObj.style.background='rgba(0,0,0,0.5)';
					},0);
					now_opened_pop_up=obj;
					obj_upload="#"+myObj.id;
					//document.title=obj_upload;
				}

				function pop_up_close(obj){
					var myObj=document.querySelector("#hb_pop_up_box_for_"+obj);
					var myObj_main=document.querySelector("#hb_pop_up_box_for_"+obj+" #hb_pop_up_box_main");

					myObj_main.style.transform="scale(1,0)";
					myObj.style.background='rgba(0,0,0,0)';
					setTimeout(function (){
						myObj.style.display='none';
					},200);
					now_opened_pop_up="";
					obj_upload="";
					//document.title=obj_upload;
				}

	/*---------------------------------------------------------------------------------------------------
	----------------------- Profile Picture Change
	---------------------------------------------------------------------------------------------------*/

			for(var i=0; i<document.querySelectorAll("[id^=hb_pop_up_box_for_] [hb_up_code='upload_div_area_885']").length; i++){
				document.querySelectorAll("[id^=hb_pop_up_box_for_] [id^='hb_file_uploader']")[i].addEventListener('change',function (){file_to_upload_changed();},false);

				document.querySelectorAll("[id^=hb_pop_up_box_for_] [hb_up_code='upload_div_area_885']")[i].addEventListener('drop',function (){drag_upload_file_drop(event);},false);
				document.querySelectorAll("[id^=hb_pop_up_box_for_] [hb_up_code='upload_div_area_885']")[i].addEventListener('dragover',function (){drag_upload_file_over(event);},false);
				document.querySelectorAll("[id^=hb_pop_up_box_for_] [hb_up_code='upload_div_area_885']")[i].addEventListener('dragleave',function (){drag_upload_file_leave(event);},false);

				document.querySelectorAll("[id^=hb_pop_up_box_for_] #hb_img_btn_654 .hb_user_dashboard_profile_btn[id=btn_reset]")[i].addEventListener('click',function (){reset_welcome_form();},false);

			}


				function drag_upload_file_over(event){
					event.preventDefault();
					document.querySelector(obj_upload+" [hb_up_code='upload_div_area_885']").style.border="7px solid #c55";
					document.querySelector(obj_upload+" [hb_up_code='upload_div_area_885']").style.padding="8px";
				}

				function drag_upload_file_leave(event){
					event.preventDefault();
					document.querySelector(obj_upload+" [hb_up_code='upload_div_area_885']").style.border="3px solid rgba(0,0,0,0.8)";
					document.querySelector(obj_upload+" [hb_up_code='upload_div_area_885']").style.padding="10px";

				}
				function drag_upload_file_drop(event){
						event.preventDefault();
						document.querySelector(obj_upload+" [hb_up_code='upload_div_area_885']").style.border="3px solid rgba(0,0,0,0.8)";
						document.querySelector(obj_upload+" [hb_up_code='upload_div_area_885']").style.padding="10px";
						var file_to_upload_56974=event.dataTransfer.files[0];

						if(check_img_type(file_to_upload_56974.type)){
							var url=window.URL || window.webkitURL;
							var src=url.createObjectURL(file_to_upload_56974);
							document.querySelector(obj_upload+" [hb_up_code='upload_div_area_885']").style.backgroundImage="url('"+src+"')";
						}

						bln_from_drop_event_458=true;
				}
				function file_to_upload_changed(){
					var file458=document.querySelector(obj_upload+" [id^='hb_file_uploader']").files[0];
					if(file458){
						if(check_img_type(file458.type)){
							var url=window.URL || window.webkitURL;
							var src=url.createObjectURL(file458);
							document.querySelector(obj_upload+" [hb_up_code='upload_div_area_885']").style.backgroundImage="url('"+src+"')";
						}
					}else{
						document.querySelector(obj_upload+" [hb_up_code='upload_div_area_885']").style.backgroundImage="";
						document.querySelector(obj_upload+" #error_message_457k").style.transform="scale(1,0)";
						document.querySelector(obj_upload+" #hb_img_btn_654 .hb_user_dashboard_profile_btn[id=btn_changeNow]").disabled=true;
						//document.querySelector(obj_upload+" #hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page footer #next2page_btn_3").href="javascript:next2third();";
					}
					if(document.querySelector(obj_upload+" [id^='hb_file_uploader']").value == ""){
						document.querySelector(obj_upload+" #hb_img_btn_654 .hb_user_dashboard_profile_btn[id=btn_changeNow]").disabled=true;
					}

					bln_from_drop_event_458=false;
				}
				function check_img_type(file_type){
					chk455=file_type.substr(6);

					if(chk455 == "png" || chk455 == "jpg" || chk455 == "jpeg" || chk455 == "gif"){
						document.querySelector(obj_upload+" #error_message_457k").style.transform="scale(1,0)";
						document.querySelector(obj_upload+" #hb_img_btn_654 .hb_user_dashboard_profile_btn[id=btn_changeNow]").disabled=false;

						return true;
					}else{
						//document.querySelector(obj_upload+" #error_message_457k").innerHTML="Only image file of 'png', 'jpg', 'jpeg' or 'gif' format is supported!";
						document.querySelector(obj_upload+" #error_message_457k").style.transform="scale(1,1)";

						document.querySelector(obj_upload+" [hb_up_code='upload_div_area_885']").style.backgroundImage="";
						document.querySelector(obj_upload+" #hb_img_btn_654 .hb_user_dashboard_profile_btn[id=btn_changeNow]").disabled=true;

						return false;
					}
				}

				function reset_welcome_form(){
					document.querySelector(obj_upload+" [id^='hb_file_uploader']").value="";
					document.querySelector(obj_upload+" #hb_img_btn_654 .hb_user_dashboard_profile_btn[id=btn_changeNow]").disabled=true;

					document.querySelector(obj_upload+" [hb_up_code='upload_div_area_885']").style.backgroundImage="";
					document.querySelector(obj_upload+" #error_message_457k").style.transform="scale(1,0)";

				}


</script>
