<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17010;
$hb_folder_layer=3;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//include scene init
include $rootpath."scene/scene_init.php";

if(!$hb_user_logged_in){
	die("<a href='http://accounts.hazrabrothers.com/login/sign_in'>Log in</a> first to to upload images to scene.");
}

/////////// set header background flag ////////
$body_background_lyh7u=1;

if(isset($_SESSION['hb_scene']['tmp_uploader_welcome']) && $_SESSION['hb_scene']['tmp_uploader_welcome']=="jky639"){

}else{
	//check if already exist user_data
	$uq="SELECT sl,username FROM hb_scene_pages WHERE username='".$_SESSION['hb_user']['username']."' LIMIT 1";
	if($uqs=mysqli_query($hb_scene_db,$uq)){
			if($ruqr=mysqli_fetch_array($uqs,MYSQLI_BOTH)){
				if($ruqr['username']==$_SESSION['hb_user']['username']){
					header("location:http://scene.hazrabrothers.com/upload/single");
				}
			}
		}else{
			die("Unauthorized Entry!");
		}

}
if($hb_user_logged_in){

}else{
	die("You are not logged in. Please <a href='http://accounts.hazrabrothers.com/login/sign_in'>Log in</a> first to upload.");
}

?>
	<html>
	<head>
		<title>Scene welcoming you to upload images</title>
		<link rel="shortcut icon" href="/images/scene_logo_title.png" />
		<meta name="viewport" content="width=device-width" />
	</head>

	<body>
<?php
	//////////////////////////////////////include header///////////////////////////////////////////////
	include $rootpath."scene/auxiliary_header.php";
?>
	<div id="hb_scene_blank"></div>
<?php
////////////////////////////////end of header/////////////////////////////////////////////////

?>


<style>
@media screen and (min-width:900px){
	#hb_scene_upload_welcome_display_area [id^=the_article_]{
		width:60%;
	}
	#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #hb_name_uploader>input{
		width:50%;
	}
}
@media screen and (max-width:899px){
	#hb_scene_upload_welcome_display_area [id^=the_article_]{
		width:auto;
	}
	#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #hb_name_uploader>input{
		width:85%;
	}
}

body{
	background-image: url('/images/vb.png');
	background-color:rgba(1,62,74,1);
	background-position: center center;
	background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	color:white;
	transition: background 0.5s, color 0.3s;
}

#main_wrapper{
	width:80%;
	margin:20px auto;
	border:10px solid rgba(255,255,255,0.3);
	border-radius: 20px;
	padding:10px;
	box-shadow: black 0px 0px 50px;
	transition: box-shadow 0.3s, border 0.3s;
}
#hb_scene_upload_welcome_display_area [id^=next2page_btn_]{
	text-decoration: none;
}
#hb_scene_upload_welcome_display_area [id^=next2page_btn_]>div{
	font-size: 20px;
	margin:5px;
	margin-top: 10px;
	padding: 8px 15px;
	border:3px solid rgba(0,0,0,0.4);
	background:rgba(0,0,0,0.4);
	border-radius: 5px;
	color:white;
	transition: background 0.3s, border 0.3s, color 0.3s;
}
#hb_scene_upload_welcome_display_area [id^=next2page_btn_]>div:hover{
	background:rgba(200,200,200,0.4);
}
/*================================================================*/
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_first_page{
  display: block;
	margin:5px;
}

#hb_scene_upload_welcome_display_area #header_main{
	text-align:center;
	font-size:40px;
	padding-bottom:15px;
	border-bottom:2px solid rgba(255,255,255,0.4);
	line-height: 50px;
	transition:border 0.3s;
}
#hb_scene_upload_welcome_display_area #div_main{
	margin-top:20px;
}
#hb_scene_upload_welcome_display_area #head_note{
	font-size: 22px;
	height:75%;
	margin:0px 8px;
	line-height: 30px;
	letter-spacing: 1px;
	text-align: center;
}
#hb_scene_upload_welcome_display_area [id^=the_article_]{
	margin: auto;
	padding:20px 0px;
	font-size:20px;
	text-align: left;
	height:80%;
}
#hb_scene_upload_welcome_display_area [id^=the_article_] header{
	font-size:25px;
	border-bottom:1px solid rgba(255,255,255,0.4);
	padding-bottom:10px;
	line-height: 30px;
	letter-spacing: 1px;
	transition:border 0.3s;
}
#hb_scene_upload_welcome_display_area [id^=the_article_] section{
	font-size:20px;
	padding-top:10px;
	line-height: 30px;
	letter-spacing: 1px;
}
#hb_scene_upload_welcome_display_area #why_upload{
	width:90%;
	margin: auto;
}
#hb_scene_upload_welcome_display_area #why_upload header{
	font-size:25px;
	border-bottom:1px solid rgba(255,255,255,0.4);
	padding-bottom:10px;
	line-height: 30px;
	letter-spacing: 1px;
}
#hb_scene_upload_welcome_display_area #why_upload section{
	font-size:20px;
	padding-top:10px;
	line-height: 30px;
	letter-spacing: 1px;
}
#hb_scene_upload_welcome_display_area #why_upload section .why_gfhf57il{
	margin:5px auto;
}
#hb_scene_upload_welcome_display_area #why_upload section .why_gfhf57il div:nth-child(2){
	padding-left: 20px;
	background: url("/images/check.png") no-repeat;
	background-position: 0% 10px;
	background-size: 12px auto;
}
#hb_scene_upload_welcome_display_area #footer_bar{
	border-top:2px solid rgba(255,255,255,0.4);
	padding-top:10px;
	transition:border 0.3s;
}
#hb_scene_upload_welcome_display_area #footer_bar header{
	font-size:22px;
	line-height: 25px;
	text-align: left;
}
#hb_scene_upload_welcome_display_area #footer_bar section{
	font-size: 18px;
}
#hb_scene_upload_welcome_display_area #footer_bar #next2page_btn_1{
	float:right;
}

/*================================================================*/
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page{
  display: none;
	margin: 5px;
}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page header{
	text-align:center;
	font-size:40px;
	padding-bottom:15px;
	border-bottom:2px solid rgba(0,0,0,0.4);
	line-height: 50px;
	transition:border 0.3s;
}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page section{
	margin: auto;
	padding:20px 0px;
	font-size:18px;
	text-align: left;
}

/*----------------------------------------------------------------------*/
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_outer{
		width:250px;
		height:250px;
		margin:auto;
}

#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885{
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
		transition: background 0.3s, color 0.3s;
	}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885:hover{
		background-color: rgba(150,170,195,0.5);
		color:rgba(150,10,10,0.8);
	}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #error_message_457k{
		font-size:14px;
		color:red;
		padding: 4px 8px;
		border:1px solid red;
		background: rgba(255,255,255,0.8);
		border-radius: 4px;
		text-align: center;
		transform: scale(1,0);
		transition: transform 0.3s;
	}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #hb_file_uploader_label{

	}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #hb_file_uploader{
		display: none;
	}

#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #hb_name_uploader{
		text-align: center;
		font-size: 20px;
}

#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #hb_name_uploader>input{
		margin:5px;
		padding:8px 15px;
		font-size: 16px;
		border:2px solid rgba(0, 0, 0, 0.9);
		background: rgba(255,255,255,0.9);
		border-radius:100px;
		transition: border 0.3s, background 0.3s, box-shadow 0.3s;
}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #hb_name_uploader>input:hover{
	border:2px solid rgba(0, 0, 0, 1);
	background: rgba(255,255,255,1);
	box-shadow: rgba(0, 0, 0, 0.8) 2px 2px 4px;
}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #hb_name_uploader>input:focus{
	box-shadow: rgba(0, 0, 0, 0.8) 2px 2px 4px;
}

	/*--------------------------------------------------------------------*/

#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page footer{

}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page footer #next2page_btn_2{
	float:left;
}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page footer #next2page_btn_X{
	float:left;
}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page footer #next2page_btn_X>div{
	font-size: 15px;
	padding:11px 8px;
}

#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page footer #next2page_btn_3{
	float:right;
}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page footer #next2page_btn_3[href='javascript:']>div{
	background:rgba(180,180,180,0.9);
	border:3px solid rgba(0,0,0,0.5);
	color:rgba(0,0,0, 0.6);
	box-shadow: rgba(0,0,0,0) 2px 2px 4px;
}
/*================================================================*/
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_third_page{
  display: none;
}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_third_page header{
	text-align:center;
	font-size:40px;
	padding-bottom:15px;
	border-bottom:2px solid rgba(0,0,0,0.4);
	line-height: 50px;
	transition:border 0.3s;
}
#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_third_page #div_the_t_a_c{
	height:60%;
	overflow-y: auto;
	font-size: 15px;
	padding:5px;
	margin:15px 5px;
	border:2px solid black;
	background:rgba(255,255,255,0.6);
}

#hb_scene_upload_welcome_display_area #check_t_a_c{
	font-size: 15px;
	padding:5px;
}
#hb_scene_upload_welcome_display_area [id^=hbkjl132_]{
	display: inline-flex;
}
#hb_scene_upload_welcome_display_area  #check_t_a_c input{
	-webkit-appearance:none;
	-moz-appearance:none;
	-ms-appearance:none;
	width:16px;
	height:16px;
	border:1px solid black;
	background-color: rgba(255,255,255,0.8);
	background-position: center center;
	background-size: 75% 75%;
	background-repeat: no-repeat;
	box-shadow: rgba(0, 0, 0, 0.4) 1px 1px 2px;
	transition: background 0.3s, box-shadow 0.3s;
}
#hb_scene_upload_welcome_display_area  #check_t_a_c input:checked{
	background-image:url('/images/check.png');
}
#hb_scene_upload_welcome_display_area  #check_t_a_c input:hover{
	background-color: rgba(255,255,255,1);
	box-shadow: rgba(0, 0, 0, 0.6) 2px 2px 4px;
}

#hb_scene_upload_welcome_display_area #next2page_btn_4{
	float: left;
}
#hb_scene_upload_welcome_display_area #welcome_submit_btn{
	float: right;
	font-size: 20px;
	margin:5px;
	margin-top: 10px;
	padding: 8px 15px;
	border:3px solid rgba(0,0,0,0.4);
	background:rgba(0,0,0,0.4);
	border-radius: 5px;
	color:white;
	box-shadow:none;
	transition: background 0.3s, border 0.3s, color 0.3s, box-shadow 0.3s;
}

#hb_scene_upload_welcome_display_area #welcome_submit_btn:hover{
	background:rgba(150,150,150,0.4);
	box-shadow: rgba(0,0,0,0.5) 2px 2px 4px;
}
#hb_scene_upload_welcome_display_area #welcome_submit_btn:disabled{
	background:rgba(180,180,180,0.9);
	border:3px solid rgba(0,0,0,0.5);
	color:rgba(0,0,0, 0.6);
	box-shadow: rgba(0,0,0,0) 2px 2px 4px;
}
/*================================================================*/
#hb_scene_upload_welcome_display_area #hb_scene_box9562_1{
  font-size:15px;
}
</style>
<div id="main_wrapper">

	<div id="hb_scene_upload_welcome_display_area">
	  <form name="welcome_to_scene_upload_form" action="create_scene_page.php" method="post" onsubmit="return check_accept();" enctype="multipart/form-data">

	    <div id="hb_scene_upload_welcome_first_page">
	      <!-- for first page **************************************************** -->
				<header id="header_main">You are going to upload</header>

				<div id="div_main">
					<div id="head_note">
						Please create a scene page to upload your image. Creating a Scene page is essential and so you have to create a scene page.
						Upload image and share to your friends.
						Thank you for being a part of Scene.
					</div>

					<article id="the_article_1">
						<header>
							Take your camera
						</header>
						<section>
							<div>

							</div>
							<div>
								Capturing a picture is a very passionate work. It may be your hobby or profession.
								Now you can upload your favourite captures to scene to share and
								show your passion to the entire world. So take your camera, Capture the moment and
								<span>Scene</span> it.
							</div>
						</section>
					</article>

					<article id="the_article_2">
						<header>
							Draw on your canvas
						</header>
						<section>
							<div>

							</div>
							<div>
								You may be a good artist and have the power to create a wonder.
								You may want to share your creativity to the world.
								Take your canvas, pencils and colours to make a beautiful drawing and
								<span>Scene</span> it.
							</div>
						</section>
					</article>

					<article id="the_article_3">
						<header>
							Computer Graphics
						</header>
						<section>
							<div>
								If you have the potential to create a computer graphics, you can upoad and share it with few clicks.
								Make your image with your favourite software like Photoshop, Gimp, Blend or that you wish.
								It may be a meaningful one or abstract. Just create the image and
								<span>Scene</span> it.
							</div>
						</section>
					</article>

					<article id="why_upload">
						<header>
							Why will you upload?
						</header>
						<section>
							<div class='why_gfhf57il'>
								<div></div>
								<div>Share your images to world with a web platform. We are providing you to upload
								</div>
							</div>
							<div class='why_gfhf57il'>
								<div></div>
								<div>You can upload and download most of the images of Scene gallery and it is totally free.</div>
							</div>
							<div class='why_gfhf57il'>
								<div></div>
								<div>You will get 500 MB disc space to make your own Scene page and store your images.</div>
							</div>
							<div class='why_gfhf57il'>
								<div></div>
								<div>You can use Scene as a private gallery only for you.</div>
							</div>
							<div class='why_gfhf57il'>
								<div> </div>
								<div>You can get Scene points to download more and more images from scene gallery.
								</div>
							</div>
							<div class='why_gfhf57il'>
								<div></div>
								<div>You can earn money by setting price when you are uploading an image.
									But be sure that your image is not a copyrighted and sensitive.

								</div>
							</div>
						</section>
					</article>
				</div>

				<footer id="footer_bar">
					<header>Make your Scene Page now</header>
					<section>
						<div>
							It is mandatory to create a Scene page to upload your images.
						</div>

						<a href="javascript:next2second();" id="next2page_btn_1"><div>Next</div></a>

					</section>
					<div style='clear:both;height:0px;font-size:1px;'>&nbsp;</div>

				</footer>
	    </div>

	    <div id="hb_scene_upload_welcome_second_page">
				<header>Make your Scene Page now</header>
				<section>
						<div>
							To create your Scene page please provide a suitable Scene Name and Scene Mask.
							<p>
								Scene Name is public name of your page by which your follower can identify you.
								If you leave it blank then Your name will be default Scene Name that can be chaged from Scene Dashboard any time.
							</p>
							<p>
								Scene Mask is just like display picture of your Scene Page.
								It can be changed from Scene Dashboard any time also.
							</p>
						<div>


				<script>
								function drag_upload_file_over(event){
									event.preventDefault();
									document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885").style.border="5px solid #c55";
									document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885").style.padding="8px";
								}

								function drag_upload_file_leave(event){
									event.preventDefault();
									document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885").style.border="3px solid rgba(0,0,0,0.8)";
									document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885").style.padding="10px";

								}
								function drag_upload_file_drop(event){
										event.preventDefault();
										document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885").style.border="3px solid rgba(0,0,0,0.8)";
										document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885").style.padding="10px";
										file_to_upload_56974=event.dataTransfer.files[0];

										if(check_img_type(file_to_upload_56974.type)){
											url=window.URL || window.webkitURL;
											src=url.createObjectURL(file_to_upload_56974);
											document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885").style.backgroundImage="url('"+src+"')";
										}

										bln_from_drop_event_458=true;
								}
								function file_to_upload_changed(){
									file458=document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #hb_file_uploader").files[0];

									if(file458){
										if(check_img_type(file458.type)){
											url=window.URL || window.webkitURL;
											src=url.createObjectURL(file458);
											document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885").style.backgroundImage="url('"+src+"')";
										}
									}else{
										document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885").style.backgroundImage="";
										document.querySelector("#error_message_457k").style.transform="scale(1,0)";
										document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page footer #next2page_btn_3").href="javascript:next2third();";
									}

									bln_from_drop_event_458=false;
								}
								function check_img_type(file_type){
									chk455=file_type.substr(6);

									if(chk455 == "png" || chk455 == "jpg" || chk455 == "jpeg" || chk455 == "gif"){
										document.querySelector("#error_message_457k").style.transform="scale(1,0)";
										document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page footer #next2page_btn_3").href="javascript:next2third();";

										return true;
									}else{
										document.querySelector("#error_message_457k").innerHTML="Only image file of 'png', 'jpg', 'jpeg' or 'gif' format is supported!";
										document.querySelector("#error_message_457k").style.transform="scale(1,1)";

										document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885").style.backgroundImage="";
										document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page footer #next2page_btn_3").href="javascript:";

										return false;
									}
								}

								function reset_welcome_form(){
									document.welcome_to_scene_upload_form.reset();
									document.welcome_to_scene_upload_form.submit.disabled=true;

									document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885").style.backgroundImage="";
									document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page footer #next2page_btn_3").href="javascript:next2third();";document.querySelector("#error_message_457k").style.transform="scale(1,0)";
									document.querySelector("#error_message_457k").style.transform="scale(1,0)";

								}
					</script>



						<div id="div_fields">

							<div id="error_message_457k">&nbsp;</div>
							<br>
							Choose your Scene Mask:
							<div id="upload_outer">
							<label for="hb_file_uploader" id="for_scene_mask">

								<div id="upload_div_area_885" ondrop="drag_upload_file_drop(event)" ondragover="drag_upload_file_over(event)" ondragleave="drag_upload_file_leave(event)">
								<div id="file_upload_area_desc_526">&nbsp;</div>
								<div>

								<input type="file" name="scene_mask" id="hb_file_uploader" onchange="file_to_upload_changed()">

								</div>

							</div>

							</label>
						</div>

				      <label for="scene_name" id="for_scene_name">

								<div id="hb_name_uploader">Scene Name<br>
									<input type="text" name="scene_name" maxlength="100" placeholder="Your Scene Name" />
								</div>

								<br>
							</label>

							<label style="text-align:center;">
								<div id="check_t_a_c">
									<div id="hbkjl132_1"><input type="checkbox" name="dp_as_scene_mask" onchange="set_dp_as_scene_mask(this);" /></div>
									<div id="hbkjl132_2">Set my Hazra Brothers Profile Picture as Scene mask.</div>
								</div>
							</label>

				      <div id="hb_scene_box9562_1"></div>
				    </div>
				</section>
				<footer>
						<a href="javascript:next2first();" id="next2page_btn_2"><div>Back</div></a>
					 	<a href="javascript:reset_welcome_form();" id="next2page_btn_X"><div>Reset</div></a>

						<a href="javascript:next2third();" id="next2page_btn_3"><div>Next</div></a>
						<div style="clear:both;height:0px;font-size:1px;">&nbsp;</div>
				</footer>
	    </div>

	    <div id="hb_scene_upload_welcome_third_page">
				<header>Terms and conditions</header>
				<section>
					<div id="div_the_t_a_c">
						<!-- *****************terms and conditions************ -->
					</div>
	        <label>
						<div id="check_t_a_c">
							<div id="hbkjl132_1"><input type="checkbox" name="terms_accept" onchange="accept_change(this);" /></div>
							<div id="hbkjl132_2">I Accept the terms and conditions.</div>
						</div>
					</label>

				</section>
				<footer>
					<a href="javascript:next2second();"  id="next2page_btn_4"><div>Back</div></a>
					<input type="submit" name="submit" id="welcome_submit_btn" value="Go" disabled />

					<div style="clear:both;height:0px;font-size:1px;">&nbsp;</div>
				</footer>

	    </div>
	</form>
	</div>
</div>
<script>
	function set_dp_as_scene_mask(obj){
			if(obj.checked){
				//alert("sa");
				tmp_keep_scene_mask_image=document.querySelector("#hb_file_uploader").value;
				document.querySelector("#hb_file_uploader").value="";
				document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #upload_div_area_885").style.backgroundImage="";
				document.querySelector("#error_message_457k").style.transform="scale(1,0)";
				document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page footer #next2page_btn_3").href="javascript:next2third();";

				document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #hb_file_uploader").disabled=true;
			}else{
				document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page #hb_file_uploader").disabled=false;
			}
	}

	function next2first(){
		document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_first_page").style.display="block";
		document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page").style.display="none";
		document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_third_page").style.display="none";
		window.scrollTo(0,0);
		hb_background_img_change();

	}
  function next2third(){
    document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_first_page").style.display="none";
    document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page").style.display="none";
    document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_third_page").style.display="block";
		window.scrollTo(0,0);
		hb_background_img_change();

  }
  function next2second(){
    document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_first_page").style.display="none";
    document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page").style.display="block";
    document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_third_page").style.display="none";
		window.scrollTo(0,0);
		hb_background_img_change();

  }
  function accept_change(){
    if(document.welcome_to_scene_upload_form.terms_accept.checked){
      document.welcome_to_scene_upload_form.submit.disabled=false;
    }else{
      document.welcome_to_scene_upload_form.submit.disabled=true;
    }
  }
  function check_accept(){
    if(document.welcome_to_scene_upload_form.terms_accept.checked){
      return true;
    }
    else{
      alert("You have to accept terms and conditions of Scene to upload images.");
      return false;
    }
  }

</script>

<?php ///////////////////////////////////////////end of main page area/////////////////////////////////////////// ?>

<div id="footer_blank_0032">&nbsp;</div>
<?php
///////////////////////////////////////////////include footer/////////////////////////////////////////////////////
include $rootpath."scene/footer.php";
?>
<style>

#hb_scene_footer{
	position:absolute;
	bottom:0px;
	z-index:80;
}
</style>
<script>

document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height+25)+"px";
</script>
<?php ///////////////////////////////////////////////end of footer///////////////////////////////////////////////////// ?>

<?php include "event.php"; ?>

</body>

</html>
