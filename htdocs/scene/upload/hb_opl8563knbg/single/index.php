<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17010;
$hb_folder_layer=4;
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

if($hb_user_logged_in){
	$query="SELECT sl,username FROM hb_scene_uploader WHERE username='".$_SESSION['hb_user']['username']."'";
	if($rows=mysqli_query($hb_scene_db,$query)){
			if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
				if($row['username']==$_SESSION['hb_user']['username']){

				}else{
					///////show welcome screen to welcome
					$_SESSION['hb_scene']['tmp_uploader_welcome']="jky639";
					header("location:http://scene.hazrabrothers.com/upload/welcome");
				}
			}else{
				///////show welcome screen to welcome
				$_SESSION['hb_scene']['tmp_uploader_welcome']="jky639";
				header("location:http://scene.hazrabrothers.com/upload/welcome");
			}

	}else{
		///////show welcome screen to welcome
		$_SESSION['hb_scene']['tmp_uploader_welcome']="jky639";
		header("location:http://scene.hazrabrothers.com/upload/welcome");
	}
	////////setting a session for upload
	$_SESSION['hb_scene']['single_file_upload_user_96523']="Gfx62Pliu26E";
}else{
	die("You are not logged in. Please <a href='http://accounts.hazrabrothers.com/login/sign_in'>Log in</a> first to upload.");
}
?>

<html>
<head>
	<title>Upload to Scene</title>
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

<?php ///////////////////////////////////////////main page area/////////////////////////////////////////// ?>

<style>
	@media screen and (min-width:900px){
		#main_area{
			width:55%;
		}
		form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_left{
			width:45%;
		}
		form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right{
			width:45%;
		}
		form[name="post_hb_scene_upload_form"] #form_area_1458 label > div#div_points_of_image > .rg42_left{
			width:37%;
		}
		form[name="post_hb_scene_upload_form"] #form_area_1458 label > div#div_price_of_image > .rg42_left{
			width:37%;
		}
	}
	@media screen and (max-width:899px){
		#main_area{
			width:85%;
		}
		form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_left{
			width:95%;
		}
		form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right{
			clear: both;
			width:95%;
		}
		form[name="post_hb_scene_upload_form"] #form_area_1458 label > div#div_points_of_image > .rg42_left{
			width:80%;
		}
		form[name="post_hb_scene_upload_form"] #form_area_1458 label > div#div_price_of_image > .rg42_left{
			width:80%;
		}
	}

body{
	background:url("/images/keyPass.png") no-repeat fixed;
}
	
#main_area{
	margin:50px auto 20px auto;
	font-family: montserrat_bold;
}
#upload_photo_div{
	border:5px solid rgba(150,167,193,0.85);
	background:rgba(255,255,255,0.85);
	border-radius:15px;
	box-shadow:rgba(0,0,0,0.6) 0px 0px 15px;
}
#upload_photo_div #title_header{
	font-size:25px;
	text-align:center;
	padding:15px 5px;
}


#upload_photo_div #uploading_progress{
	border-top:1px solid rgba(92,113,146,0.85);
}
#upload_photo_div #uploading_progress div{
	height:4px;
	width:0%;
	background:rgb(92,113,146);
	transition:width 0.3s;
}
#upload_photo_div #error_message_457k{
	font-size:12px;
	color:red;
	text-align: center;
	transform: scale(1,0);
	transition: transform 0.3s;
}
#upload_photo_div section{

}
#upload_photo_div form[name'hb_scene_upload_form']{

}

#upload_photo_div section{
	padding:10px;
}


#upload_album{
	width:100%;
	margin-top:15px;
	text-align:right;
}
#upload_album a{
	text-decoration:none;
	color:white;
	margin:0px 0px 0px 10px;
	padding:0px 0px 0px 10px;
	font-size:15px;
	transition:color 0.3s;
}
#upload_album a:hover{
	color:#e3e9ef;
	text-decoration:underline;
}
#upload_album a:focus{
	text-decoration:underline;
}
/***************************************************************/
form[name="hb_scene_upload_form"]{
	display:block;
}
form[name="post_hb_scene_upload_form"]{
	display: none;
}
form[name=post_hb_scene_upload_form] #new_form_declaration{
	font-size: 12px;
	font-style: italic;

}
/*******************************************************************/
form[name="post_hb_scene_upload_form"] #form_area_1458 #show_image_div_2587{
	text-align: center;
}
form[name="post_hb_scene_upload_form"] #form_area_1458 #show_image_div_2587 img{
	height: 150px;
	background-color:#ffffd6;
	margin:10px;
	padding:5px;
	border:1px solid gray;
	box-shadow: rgba(120,120,120,1) 0px 0px 6px;
}
/*----------------------------------------*/
form[name="post_hb_scene_upload_form"] #form_area_1458 #show_image_div_2587 #post_image_gcode_88,
form[name="post_hb_scene_upload_form"] #form_area_1458 #show_image_div_2587 #post_image_gcode_88:disabled{
	padding:10px;
	background: #eeeeff;
	border:1px solid #aaaaee;
	color:black;
	border-radius: 5px;
}
/*---------------------------------------*/

form[name="post_hb_scene_upload_form"] #form_area_1458 label > div{
		width:100%;
		min-height:30px;
		font-size: 15px;
}
form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_left{
		float: left;
		padding:5px 2px 5px 15px;
}

form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right{
		float:right;
		padding:5px 15px 5px 2px;
}
	/*------------------------------*/

form[name="post_hb_scene_upload_form"] #form_area_1458 select{
		-webkit-appearance:none;
		-moz-appearance:none;
		-ms-appearance:none;

		background-image:url('/images/logo_select_arrow.png');
		background-position:95% center;
		background-repeat:no-repeat;
		background-size:8px auto;
}

form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > input[type=text],
form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > select,
form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > input[type=number]{
		font-size: 15px;
		font-family: montserrat_bold;
		width:100%;
		padding:7px 10px;
		background-color:rgba(255,255,255,0.7);
		border:1px solid rgba(92,113,146,0.3);
		border-bottom:2px solid rgba(92,113,146,0.7);
		transition:border 0.3s, box-shadow 0.3s,background 0.3s;

}
form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > input[type=text]:hover,
form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > select:hover,
form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > input[type=number]:hover{
		border-color: rgba(92,113,146,0.9);
		box-shadow: rgba(92,113,146,0.9) 0px 0px 5px;
}

form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > input[type=text]:focus,
form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > select:focus,
form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > input[type=number]:focus{
		border-color:#004453;
		box-shadow: #004453 0px 0px 5px;
		background-color:rgba(255,255,255,0.95);
}


form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > textarea{
		font-size: 15px;
		font-family: montserrat_bold;
		padding:7px 10px;
		background:rgba(255,255,255,0.7);
		border:1px solid rgba(92,113,146,0.3);
		border-bottom:2px solid rgba(92,113,146,0.7);
		transition:border 0.3s, box-shadow 0.3s,background 0.3s;
}

form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > textarea:hover{
		border-color: rgba(92,113,146,0.9);
		box-shadow: rgba(92,113,146,0.9) 0px 0px 5px;
}

form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > textarea:focus{
		border-color:#004453;
		box-shadow: #004453 0px 0px 5px;
		background-color:rgba(255,255,255,0.95);
}

form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > #yu8_textarea{
		resize: none;
		width:100%;
		font-size: 12px;

}

form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > input[type=text]:disabled,
form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > select:disabled,
form[name="post_hb_scene_upload_form"] #form_area_1458 label > div > .rg42_right > input[type=number]:disabled{
		background-color:rgba(190,190,190,0.7);
}

	form[name='post_hb_scene_upload_form'] #form_area_1458 #div_price_of_image,
	form[name='post_hb_scene_upload_form'] #form_area_1458 #div_points_of_image{
		color:#777;
	}
/*/////////////////////////////*/
form[name="post_hb_scene_upload_form"] #form_area_1458 #expander_5128 div{
	margin: auto;
	text-align: center;
	color:rgba(0,0,0,0.5);
	width: 100px;
}
form[name="post_hb_scene_upload_form"] #form_area_1458 #expander_5128 div:hover{
	text-decoration:underline;
	cursor:pointer;
}
form[name="post_hb_scene_upload_form"] #form_area_1458 #expand_container_5128{
	transform: scale(1,0);
	transform-origin: 50% 0%;
	height:0px;
	overflow: hidden;
	transition: transform 0.3s,height 0.3s;
}
/*///////////////////////////////////////*/
	form[name="post_hb_scene_upload_form"] #form_area_1458 input[name=ckeck_points_of_image]{
		float:left;
		margin-top:8px;

	}
	form[name="post_hb_scene_upload_form"] #form_area_1458 input[name=ckeck_price_of_image]{
		float:left;
		margin-top:8px;

	}
/*-------------------------------------*/

form[name="post_hb_scene_upload_form"] input[name="post_hb_scene_upload_button"]{
		background-color: #004453;
		border:none;
		color: white;
		border-radius: 5px;
		padding:8px 15px;
		margin-right: 10px;
		float: right;
		font-size: 18px;
		box-shadow: rgba(120,120,120,0.6) 2px 2px 3px;
		cursor: pointer;
		transition: background 0.3s,box-shadow 0.3s;
}
form[name="post_hb_scene_upload_form"] input[name="post_hb_scene_upload_button"]:hover{
	background-color: #007088;
	box-shadow: rgba(120,120,120,0.85) 3px 3px 4px;
}
/***************************************************************/
form[name="post_hb_scene_upload_form"] #form_area_1458 #klsize_tabs_99{
		clear:both;
}
form[name="post_hb_scene_upload_form"] #form_area_1458 #klsize_tabs_99 .oj78_head{
		display: inline-block;
}
/*----------------------------------------------------------------------*/
	form[name="hb_scene_upload_form"] #upload_div_area_885{
		border:3px dashed rgba(0,0,0,0.8);
		margin:0px 15px;
		padding:10px;
		color:rgba(0,0,0,0.8);
		text-shadow: rgba(255,255,255,0.8) 0px 0px 5px;
		font-size: 25px;
		text-align: center;
		background-repeat: no-repeat;
		background-position: center center;
		background-size: contain;
		cursor:pointer;
		transition: background 0.3s, color 0.3s;
	}
	form[name="hb_scene_upload_form"] #upload_div_area_885:hover{
		background-color: rgba(150,170,195,0.5);
		color:rgba(150,10,10,0.8);
	}
	form[name="hb_scene_upload_form"] #hb_file_uploader_label{

	}
	form[name="hb_scene_upload_form"] #hb_file_uploader{
		display: none;
	}
	form[name="hb_scene_upload_form"] #img_upload_btn{
		float:right;
		font-size: 18px;
		margin:15px;
		padding:5px 15px;
		background: #265;
		border:3px solid #265;
		border-radius: 5px;
		color:white;
		cursor:pointer;
		transition: background 0.3s, color 0.3s;
	}
	form[name="hb_scene_upload_form"] #img_upload_btn:hover{
		background: #aec;
		color:#142;
	}
	form[name="hb_scene_upload_form"] #img_upload_btn:disabled{
		background: #888;
		border:3px solid #666;
		color:white;
	}
/*----------------------------------------------------------------------*/
#upload_photo_div footer{
	text-align:right;
	border-top:1px solid rgba(92,113,146,0.85);
	padding:5px 10px;
    font-size:12px;
    color:rgba(92,113,146,0.85);
    clear: both;
}
</style>
<script>
	function drag_upload_file_over(event){
		event.preventDefault();
		document.querySelector("form[name='hb_scene_upload_form'] #upload_div_area_885").style.border="5px dashed #c55";
		document.querySelector("form[name='hb_scene_upload_form'] #upload_div_area_885").style.padding="8px";
	}

	function drag_upload_file_leave(event){
		event.preventDefault();
		document.querySelector("form[name='hb_scene_upload_form'] #upload_div_area_885").style.border="3px dashed rgba(0,0,0,0.8)";
		document.querySelector("form[name='hb_scene_upload_form'] #upload_div_area_885").style.padding="10px";

	}
	function drag_upload_file_drop(event){
			event.preventDefault();
			document.querySelector("form[name='hb_scene_upload_form'] #upload_div_area_885").style.border="3px dashed rgba(0,0,0,0.8)";
			document.querySelector("form[name='hb_scene_upload_form'] #upload_div_area_885").style.padding="10px";
			file_to_upload_56974=event.dataTransfer.files[0];

			if(check_img_type(file_to_upload_56974.type)){
				url=window.URL || window.webkitURL;
				src=url.createObjectURL(file_to_upload_56974);
				document.querySelector("form[name='hb_scene_upload_form'] #upload_div_area_885").style.backgroundImage="url('"+src+"')";
			}

			bln_from_drop_event_458=true;
	}
	function file_to_upload_changed(){
		file458=document.querySelector("form[name='hb_scene_upload_form'] #hb_file_uploader").files[0];

		if(check_img_type(file458.type)){
			url=window.URL || window.webkitURL;
			src=url.createObjectURL(file458);
			document.querySelector("form[name='hb_scene_upload_form'] #upload_div_area_885").style.backgroundImage="url('"+src+"')";
		}

		bln_from_drop_event_458=false;
	}
	function check_img_type(file_type){
		chk455=file_type.substr(6);
		if(chk455 == "png" || chk455 == "jpg" || chk455 == "jpeg" || chk455 == "gif"){
			document.querySelector("#error_message_457k").style.transform="scale(1,0)";
			document.querySelector("form[name='hb_scene_upload_form'] #img_upload_btn").disabled=false;

			return true;
		}else{
			document.querySelector("#error_message_457k").innerHTML="Only image file of 'png', 'jpg', 'jpeg' or 'gif' format is supported!";
			document.querySelector("#error_message_457k").style.transform="scale(1,1)";

			document.querySelector("form[name='hb_scene_upload_form'] #img_upload_btn").disabled=true;
			document.querySelector("form[name='hb_scene_upload_form'] #upload_div_area_885").style.backgroundImage="";
			return false;
		}
	}

</script>
<div id="main_area">
	<div id="upload_photo_div">
		<header id="title_header">Upload Your Image</header>
		<div id="uploading_progress"><div>&nbsp;</div></div>
		<div id="error_message_457k">Error</div>

		<section>
			<form name="hb_scene_upload_form" enctype="multipart/formd-ata" method="post">

				<label id="hb_file_uploader_label" for="hb_file_uploader">
				<div id="upload_div_area_885" ondrop="drag_upload_file_drop(event)" ondragover="drag_upload_file_over(event)" ondragleave="drag_upload_file_leave(event)">
					<div id="file_upload_area_desc_526">
						<br>
						Drop an image <br>
						or <br>
						click here to Upload<br>
						<br>
					</div>
					<div>

					<input type="file" name="image_file" id="hb_file_uploader" onchange="file_to_upload_changed()">

					</div>
				</div>

			</label>

				<input type="button" id="img_upload_btn" onclick="upload_image_file()" value="Upload" disabled>

			</form>


			<form name="post_hb_scene_upload_form" method="post">
				<div id="post_image_viewer_5214"></div>
				<div id="new_form_area">

					<div id="form_area_1458">
						<div id="show_image_div_2587">
							<img src="/hb_gallery/hb_scene_17a2nFz7vLNeKoZEH.jpeg" alt="Your Uploaded Image" />
							<br>
							Your Image ID: <input type="text" id="post_image_gcode_88" size="30" disabled>
							<br><br>
						</div>

						<div id="new_form_declaration">
							Plase fill up the fiew image parameters.
							You can change this parameters later from Scene Dashboard in any time.
						</div>

						<br>

						<label>
						<div>
							<div class='rg42_left'>Name of your image:</div>

							<div  class='rg42_right'>
							<input type="text" name="name_of_image" maxlength="200" required placeholder="Give a suitable name" />
							</div>

						</div>
						</label>

						<br>
						<label>
						<div>
							<div class='rg42_left'>Choose category:</div>

							<div  class='rg42_right'>

							<select  name="category_of_image" required>
								<option value="others">Others</option>
								<option value="flowers">flowers</option>
								<?php ?>
							</select>

							</div>


						</div>
						</label>

						<br>
						<label>
						<div>
							<div class='rg42_left'>Privacy:</div>

							<div  class='rg42_right'>
							<select name="privacy_of_image">
								<option value="public">Public</option>
								<option value="protected">Protected</option>
								<option value="ashb">As Hazra Brothers</option>
								<option value="private">Private</option>
							</select>
							</div>


						</div>
						</label>

						<br>
						<label>
						<div>
							<div class='rg42_left'>Story of Image:</div>

							<div  class='rg42_right'>
							<textarea id="yu8_textarea" rows="3" name="story_of_image" maxlength="10000" placeholder="Write the story of your image."></textarea>
							</div>


						</div>
						</label>

						<br><br>
				<br>
				<div  id='expander_5128'>
					<div onClick="expand_show_more_5128()">Show More</div>
				</div>
				<div id='expand_container_5128'>


						<br>
						<input type="checkbox" name="ckeck_points_of_image" onChange="enable_points();" />
						<label>
						<div id="div_points_of_image">
							<div class='rg42_left'>Points:</div>

							<div  class='rg42_right'>
							<input type="number" name="points_of_image" min="25" placeholder="Minimum points 25" disabled onblur="check_points(this)" />
							</div>


						</div>
						</label>

					<br>
						<input type="checkbox" name="ckeck_price_of_image" onChange="enable_price();" />
						<label>
						<div id="div_price_of_image">
							<div class='rg42_left'>Price:</div>

							<div  class='rg42_right'>
							<input type="number" name="price_of_image" min="2" placeholder="Minimum price 2$" disabled onblur="check_price(this)" />
							</div>


						</div>
						</label>


						<br>

						<label>
						<div>
							<div class='rg42_left'>Who can download your picture? </div>

							<div  class='rg42_right'>
							<select name="can_download_of_image">
								<option value="hb_user">Users of Hazra Brothers</option>
								<option value="all">Any One</option>
							</select>
							</div>


						</div>
						</label>

						<!--<br>
						<label>
						<div>
							<div class='rg42_left'>To download original picture requred:</div>

							<div  class='rg42_right'>
							<select name="download_original_required_of_image">
								<option>Nothing</option>
								<option>Price only</option>
								<option>Points only</option>
								<option>Price or Points</option>
								<option>Your permission</option>
							</select>
							</div>


						</div>
						</label>-->

						<br><br>
						<label>
						<div>
							<div class='rg42_left'>What should be watermark on your picture:</div>

							<div  class='rg42_right'>
							<select name="watermark_of_image">
								<option value="scene_mask">Your Scene Mask</option>
								<option value="scene">Scene</option>
								<option value="hb">Hazra Brothers</option>
								<option value="profile_picture">Your Profile Picture</option>
								<option value="none">None</option>
							</select>
							</div>


						</div>
						</label>

						<!--<br><br>
						<label>
						<div>
							<div class='rg42_left'>Set download size settings:</div>

							<div id='klsize_tabs_99'>
							<div>
								<div>
									<header class='oj78_head'>GUI</header>
									<header class='oj78_head'>Code</header>
								</div>

								<section>
									<textarea></textarea>
								</section>
								<section>

								</section>
							</div>


							</div>

						</div>
						</label>
					-->
			</div>



					</div>
					<br>

					<input type="button" name="post_hb_scene_upload_button"	onclick="post_upload_image_data()" value="Save Settings" />
				</div>
				<br><br>
			</form>
		</section>

		<footer>
			You are uploading this single photo as <?php echo $_SESSION['hb_user']['first_name']." ".$_SESSION['hb_user']['last_name'] ?> to your gallery.
		</footer>
	</div>
		<div id="upload_album"><a href="/upload/albums">Upload images as album</a></div>
</div>

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

<script>
////////////////////////////////post upload image data/////////////////////
bln_disabled_price=true;
bln_disabled_points=true;

function check_points(obj){
	if(parseInt(obj.value)<25){
		document.querySelector("#error_message_457k").innerHTML="Point should be greater than 25 if you want to set.";
		document.querySelector("#error_message_457k").style.transform="scale(1,1)";
		obj.focus();
	}else {
		document.querySelector("#error_message_457k").style.transform="scale(1,0)";
	}
}

function check_price(obj){
	if(parseInt(obj.value)<2){
		document.querySelector("#error_message_457k").innerHTML="Price should be greater than 2$ if you want to set.";
		document.querySelector("#error_message_457k").style.transform="scale(1,1)";
		obj.focus();
	}else{
		document.querySelector("#error_message_457k").style.transform="scale(1,0)";
	}
}

function checkRequiredData(){
	if(document.post_hb_scene_upload_form.ckeck_price_of_image.checked){
		if(parseInt(document.post_hb_scene_upload_form.price_of_image.value)<2){
			document.querySelector("#error_message_457k").innerHTML="Price should be greater than 2$.";
			document.querySelector("#error_message_457k").style.transform="scale(1,1)";
			document.post_hb_scene_upload_form.price_of_image.focus();
			return false;
		}else{
			document.querySelector("#error_message_457k").style.transform="scale(1,0)";
			return true;
		}
	}else{
		document.querySelector("#error_message_457k").style.transform="scale(1,0)";
		return true;
	}

	if(document.post_hb_scene_upload_form.ckeck_points_of_image.checked){
		if(parseInt(document.post_hb_scene_upload_form.points_of_image.value)<25){
			document.querySelector("#error_message_457k").innerHTML="Points should be greater than 25.";
			document.querySelector("#error_message_457k").style.transform="scale(1,1)";
			document.post_hb_scene_upload_form.price_of_image.focus();
			return false;
		}else{
			return true;
		}
	}else{
		return true;
	}

}

function post_upload_image_data(){

	if(checkRequiredData()){
		queryString="name="+document.post_hb_scene_upload_form.name_of_image.value;
		queryString+="&category="+document.post_hb_scene_upload_form.category_of_image.value;
		queryString+="&privacy="+document.post_hb_scene_upload_form.privacy_of_image.value;
		queryString+="&story="+document.post_hb_scene_upload_form.story_of_image.value;
		queryString+="&price="+document.post_hb_scene_upload_form.price_of_image.value;
		queryString+="&points="+document.post_hb_scene_upload_form.points_of_image.value;
		queryString+="&can_download="+document.post_hb_scene_upload_form.can_download_of_image.value;
		queryString+="&watermark="+document.post_hb_scene_upload_form.watermark_of_image.value;
		queryString+="&imageid="+document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #show_image_div_2587 #post_image_gcode_88").value;

		postUploadImageDataAjaxRequest=new XMLHttpRequest();
		postUploadImageDataAjaxRequest.open("POST","upload_image_data.php",true);
		postUploadImageDataAjaxRequest.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		postUploadImageDataAjaxRequest.onreadystatechange=getResponse_PostUploadImageData;
		postUploadImageDataAjaxRequest.send(queryString);

	}else{

	}

}
function getResponse_PostUploadImageData(){
	if(postUploadImageDataAjaxRequest.readyState==4 && postUploadImageDataAjaxRequest.status==200){
		//alert(postUploadImageDataAjaxRequest.responseText);
				document.querySelector("#upload_photo_div section").innerHTML=postUploadImageDataAjaxRequest.responseText;
	}
}
////////////////////////////////////////////////////////////////////////////
///////////////////////////////show more expander////////////////////////////
bln_expand_show_more_5128=true;

function expand_show_more_5128(){
	if(bln_expand_show_more_5128){
		document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #expand_container_5128").style.transform="scale(1,1)";
		document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #expand_container_5128").style.height=height_of_expand_container_5128+"px";
		document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #expander_5128 div").innerText="Show Less";
		bln_expand_show_more_5128=false;
	}else{
		document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #expand_container_5128").style.transform="scale(1,0)";
		document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #expand_container_5128").style.height="0px";
		document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #expander_5128 div").innerText="Show More";
		bln_expand_show_more_5128=true;
	}

}

//////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////
function upload_image_file() {

	if(bln_from_drop_event_458){
		var image_file=file_to_upload_56974;
	}else{
		var image_file=document.querySelector("form[name='hb_scene_upload_form'] #hb_file_uploader").files[0];
	}
	if(image_file){
			var formdata=new FormData();
	formdata.append("image_file",image_file);
	ajaxRequest=new XMLHttpRequest();
	ajaxRequest.upload.addEventListener("progress",ajax_progress_handler,false);
	ajaxRequest.addEventListener("load",ajax_complete_handler,false);
	ajaxRequest.addEventListener("error",ajax_error_handler,false);
	ajaxRequest.addEventListener("abort",ajax_abort_handler,false);
	ajaxRequest.open("POST","file_parser.php",true);
	ajaxRequest.send(formdata);
	}else{
		alert("Give an input");
	}

}
function ajax_progress_handler(e) {
	//document.title=(e.loaded/e.total)*100+"%";
	document.querySelector("#upload_photo_div #uploading_progress div").style.height="4px";
	document.querySelector("#upload_photo_div #uploading_progress div").style.width=(e.loaded/e.total)*100+"%";
	}
function ajax_complete_handler(e){

	if(e.target.responseText.substr(0,4)=="Done"){
		//setting up filename and gcode
		var gcode=e.target.responseText.substr(4,20);
		var filename=e.target.responseText.substr(24);
		//bring front the form
		document.querySelector("form[name='hb_scene_upload_form']").style.display="none";
		document.querySelector("form[name='post_hb_scene_upload_form']").style.display="block";

		//set height of expanding div
		document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #expand_container_5128").style.height="auto";
		height_of_expand_container_5128=document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #expand_container_5128").clientHeight;
		document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #expand_container_5128").style.height="0px";


		document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #show_image_div_2587 #post_image_gcode_88").value=gcode;
		document.querySelector("#upload_photo_div #uploading_progress div").style.width="0%";
		document.querySelector("#upload_photo_div #uploading_progress div").style.height="0px";
		document.querySelector("#show_image_div_2587 img").src="/hb_gallery/"+filename;
		document.querySelector("#error_message_457k").style.transform="scale(1,0)";

	}else{
		if(e.target.responseText.substr(0,6)=="Error:"){
			document.querySelector("#error_message_457k").innerHTML=e.target.responseText.substr(6);
			document.querySelector("#error_message_457k").style.transform="scale(1,1)";
		}
	}

//document.write(e.target.responseText);

//document.querySelector("form[name='hb_scene_upload_form']").innerText=e.target.responseText;
}
function ajax_error_handler() {

}
function ajax_abort_handler() {

}

//enable price section
function enable_price(){
	if(bln_disabled_price){
		document.post_hb_scene_upload_form.price_of_image.disabled=false;
		document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #div_price_of_image").style.color="black";

		bln_disabled_price=false;
	}else{
		document.post_hb_scene_upload_form.price_of_image.disabled=true;
		document.post_hb_scene_upload_form.price_of_image.value="";
		document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #div_price_of_image").style.color="#777";

		bln_disabled_price=true;
	}
}
//enable price section
function enable_points(){
	if(bln_disabled_points){
		document.post_hb_scene_upload_form.points_of_image.disabled=false;
		document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #div_points_of_image").style.color="black";

		bln_disabled_points=false;
	}else{
		document.post_hb_scene_upload_form.points_of_image.disabled=true;
		document.post_hb_scene_upload_form.points_of_image.value="";
		document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #div_points_of_image").style.color="#777";

		bln_disabled_points=true;
	}
}
////////////////////////////////////////////////////////////////////////////////////////
</script>

<?php include "event.php"; ?>

</body>

</html>
