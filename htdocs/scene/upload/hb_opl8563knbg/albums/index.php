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

if($hb_user_logged_in){

}else{
	die("You are not logged in. Please <a href='#'>Log in</a> first to upload.");
}
?>

<html>
<head>
	<title>Scene</title>
	<link rel="shortcut icon" href="/images/scene_logo_title.png" />
	<meta name="viewport" content="width=device-width" />
</head>

<body>

<?php ///////////////////////////////////////////Main page Style tag starts here////////////////////////////////////////// ?>
<style>
@font-face{
	font-family:montserrat_regular;
	font-weight:normal;
	src:url('/fonts/montserrat_regular.otf');
}

html{
	position:relative;
	min-height:100%;
}
body{
	margin:0px;
	padding:0px;
	font-family:montserrat_regular,ubuntu,tahoma;
	background:url("/images/scene_form_background.png") no-repeat fixed;
	background-color:#6d8ba5;
	background-size:cover;
}
</style>

<?php ///////////////////////////////////////////Main PageStyle tag starts here//////////////////////////////////////////// ?>

<?php
//////////////////////////////////////include header///////////////////////////////////////////////
?>
<style>

#hb_scene_header{
	position:fixed;
	width:100%;
	height:50px;
	top:0px;
	z-index:100;
	font-family:montserrat_regular;
	background:rgba(17,34,61,0.6);
}
#hb_scene_blank{
	height:50px;
}
*:focus{
	outline:none;
}
/*------------------------------------------------*/
#hb_scene_header>div>img{
	float:left;
	padding:7px;
	transition:background 0.5s,border 0.3s;
}
#hb_scene_header>div>img:hover{
	background:#00aed9;
}
/*######################## HEADER MENU OPTIONS ############################*/
#hb_scene_header>div>#link_label{
	float:left;
	font-size:16px;
	height:50px;
}
#hb_scene_header>div>#link_label>a{
	text-decoration:none;
	color:white;
}
#hb_scene_header>div>#link_label>a>div{
	display:inline-block;
	padding:15px 8px;
	transition:background 0.5s,border 0.3s;
	height:20px;
}
#hb_scene_header>div>#link_label>a>div:hover{
	background:#00aed9;
}
/*######################## RIGHT CONTAINER ############################*/
#hb_scene_header>div>#hb_header_right_container>a{
	text-decoration:none;
	color:white;
}
#hb_scene_header>div>#hb_header_right_container{
	float:right;
}

/*------------------------------------------------------------------------------------------------*/
#hb_scene_header>div>#hb_header_right_container>#hb_header_search{
	display:inline-block;
	float:right;
	margin:0px 7px;
	height:50px;
}
#hb_scene_header>div>#hb_header_right_container>#hb_header_search #hb_header_search_main_div{
	height:30px;
	margin:10px 0px;
	background-color:white;
	border-radius:200px;
	transition:background-color 0.3s;
}
#hb_scene_header>div>#hb_header_right_container>#hb_header_search #hb_45479_collapse{
	width:0px;
	overflow:hidden;
	transition: width 0.3s;
}
/*------------------------------------------------*/

input[type='search']::-webkit-search-decoration,
input[type='search']::-webkit-search-cancel-button,
input[type='search']::-webkit-search-results-button,
input[type='search']::-webkit-search-results-decoration{
	display:none;
}


#hb_scene_header>div>#hb_header_right_container>#hb_header_search #hb_header_search_input{
	height:30px;
	width:110px;
	border:none;
	font-size:12px;
	background:transparent;
	padding:8px 3px 8px 0px;
	margin-left:27px;
	color:black;
	font-family:montserrat_regular;
}
#hb_scene_header>div>#hb_header_right_container>#hb_header_search #hb_header_search_button{
	float:right;
	height:30px;
	width:31px;
	padding:7px 0px;
	font-size:12px;
	margin:0px;
	border:none;
	font-weight:bold;
	text-align:center;
	cursor:pointer;
	background-color:transparent;
	background-image:url("/images/search.png");
	background-repeat:no-repeat;
	background-size:auto 50%;
	background-position: center center;
	border-radius:200px;
	transition:background-color 0.3s, border-radius 0.3s;
}

#hb_scene_header>div>#hb_header_right_container>#hb_header_search #hb_header_search_button:hover{
	background-color:#bef;
}
/*------------------------------------------------*/
#hb_scene_header>div>#hb_header_right_container>#hb_header_search #hb_header_search_cancel_button{
	float:left;
	width:0px;
	height:16px;
	position:absolute;
	padding:7px 0px;
	margin:0px;
	border:none;
	font-size:12px;
	font-weight:bold;
	cursor:pointer;
	border-top-left-radius:200px;
	border-bottom-left-radius:200px;
	transition:background-color 0.3s, width 0.3s, opacity 0.5s;
}
/*------------------------------------------------*/
#hb_scene_header>div>#hb_header_right_container>#hb_header_search #hb_header_search_cancel_button>div{
	height:12px;
	width:17px;
	padding:5px 0px 0px 0px;
	float:right;
	background-image:url("/images/cross.png");
	background-color:transparent;
	background-repeat:no-repeat;
	background-size:50% 50%;
	background-position:center center;
	opacity:0;
	transition:width 0.2s, opacity 0.4s;
}

</style>

<header id="hb_scene_header" >
<div>
	<img src="/images/scene_logo.png" width="36px" height="36px" />
	<div id="link_label">
		<a href="javascript:javascript:history.back();">
		<div id="hb_scene_upload_back">Back</div>
		</a>


	</div>


	<div id="hb_header_right_container">

		<?php include $rootpath."scene/user_header_logo.php"; ?>

		<form id="hb_header_search" onSubmit="return hb_scene_search();" autocomplete="off">
			<div id="hb_header_search_main_div">
				<input type="submit" id="hb_header_search_button" onClick="hb_scene_search()" value="&nbsp;" />

				<div id="hb_45479_collapse">
					<div id="hb_header_search_cancel_button" onClick="hb_0357search_clear();" onMouseOver="this.style.backgroundColor='#e3d5d5';" onMouseOut="this.style.backgroundColor='transparent';">
						<div>&nbsp;</div>
					</div>

					<input type="search" id="hb_header_search_input" onKeyUp="hb_0357press();" placeholder="Search" />
				</div>
			</div>
		</form>

	</div>

</div>
</header>

<div id="hb_scene_blank"></div>
<?php
//////////////////////////////////////////////////////////////////////////////////////////////////
?>

<?php ///////////////////////////////////////////main page area/////////////////////////////////////////// ?>

<style>
#main_area{
	width:55%;
	margin:50px auto 20px auto;
}
#upload_photo_div{
	width:100%;
	border:5px solid rgba(150,167,193,0.85);
	background:rgba(255,255,255,0.85);
	border-radius:15px;
	box-shadow:rgba(0,0,0,0.6) 0px 0px 15px;
}
#upload_photo_div header{
	font-size:25px;
	text-align:center;
	padding:15px 5px;
}
#upload_photo_div section{

}
#upload_photo_div form[name'hb_scene_upload_form']{

}

#upload_photo_div footer{

}
#upload_photo_div #uploading_progress{
	border-top:1px solid rgba(92,113,146,0.85);
}
#upload_photo_div #uploading_progress div{
	height:4px;
	width:60%;
	background:rgb(92,113,146);
	transition:width 0.3s;
}
#upload_photo_div section{
	padding:10px;
}
#upload_photo_div footer{
	text-align:right;
	border-top:1px solid rgba(92,113,146,0.85);
	padding:5px 10px;
    font-size:12px;
    color:rgba(92,113,146,0.85);
}

#upload_single{
	width:100%;
	margin-top:15px;
	text-align:right;
}
#upload_single a{
	text-decoration:none;
	color:white;
	margin:0px 0px 0px 10px;
	padding:0px 0px 0px 10px;
	font-size:15px;
	transition:color 0.3s;
}
#upload_single a:hover{
	color:#e3e9ef;
	text-decoration:underline;
}
#upload_single a:focus{
	text-decoration:underline;
}
</style>

<div id="main_area">
	<div id="upload_photo_div">
		<header>Upload your album</header>

		<div id="uploading_progress"><div>&nbsp;</div></div>

		<section>
			<form>
			grfdrtg th t tru y uty  tyuik u yuik yu yu  uu yukiylko <br />
			grfdrtg th t tru y uty  tyuik u yuik yu yu  uu yukiylko <br />
			grfdrtg th t tru y uty  tyuik u yuik yu yu  uu yukiylko <br /><br />
			grfdrtg th t tru y uty  tyuik u yuik yu yu  uu yukiylko <br />
			grfdrtg th t tru y uty  tyuik u yuik yu yu  uu yukiylko <br />
			grfdrtg th t tru y uty  tyuik u yuik yu yu  uu yukiylko <br /><br />
			grfdrtg th t tru y uty  tyuik u yuik yu yu  uu yukiylko <br />
			grfdrtg th t tru y uty  tyuik u yuik yu yu  uu yukiylko <br />
			grfdrtg th t tru y uty  tyuik u yuik yu yu  uu yukiylko <br /><br />
			grfdrtg th t tru y uty  tyuik u yuik yu yu  uu yukiylko <br />
			grfdrtg th t tru y uty  tyuik u yuik yu yu  uu yukiylko <br />
			grfdrtg th t tru y uty  tyuik u yuik yu yu  uu yukiylko <br /><br />
			grfdrtg th t tru y uty  tyuik u yuik yu yu  uu yukiylko <br />


			</form>
		</section>
		<footer>
			You are uploading this album as <?php echo $_SESSION['hb_user']['first_name']." ".$_SESSION['hb_user']['last_name'] ?> to your gallery.
		</footer>
	</div>
	<div id="upload_single"><a href="/upload/single">Upload Single Photo</a></div>
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
<?php ///////////////////////////////////////////////end of footer///////////////////////////////////////////////////// ?>

<script>
hb_if_searched = false;
hb_0357view_state = false;
hb_45479_collapse_state = true;


	document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height+25)+"px";
/////////////////function for search //////////////////
function hb_scene_search(){
	var search_text=document.querySelector("#hb_scene_header #hb_header_search_input").value;
	if(hb_45479_collapse_state){
			hb_45479_collapse_expand();
	}else{
		if(search_text.trim() != ""){
			/*header_request=new XMLHttpRequest();
			header_request.open("GET","hb_scene_search.php?page=1&sqc=NC89R45jki12&search="+search_text,true);
			header_request.onreadystatechange=getResponse;
			header_request.send(null);

			hb_scene_header_selector=document.querySelectorAll("#hb_scene_header #link_label a>div[id^='hb_scene_']");
			for(var i=0; i<hb_scene_header_selector.length; i++){
					hb_scene_header_selector[i].style.padding="15px 8px";
					hb_scene_header_selector[i].style.borderBottom="none";
			}*/

			hb_if_searched = true;

			//document.getElementById("main_area").innerHTML=splashScreen1;
				//Wait_Wheel_rotate = 0;

		}else{

			if(hb_if_searched == true){
				//document.getElementById("main_area").innerHTML=splashScreen1;
				//Wait_Wheel_rotate = 0;

				hb_0357search_clear();
				hb_scene_show(hb_which_show_selected);

				hb_if_searched = false;
			}

		}

		document.querySelector("#hb_scene_header #hb_header_search_input").focus();
	}

	return false;
}
//------------------------------------expand the searchbar---------------------------------------//
function hb_45479_collapse_expand(){
	document.querySelector("#hb_scene_header>div>#hb_header_right_container>#hb_header_search #hb_45479_collapse").style.width="140px";
	hb_45479_collapse_state = false;
	document.querySelector("#hb_scene_header>div>#hb_header_right_container>#hb_header_search #hb_header_search_input").focus();
	document.querySelector("#hb_scene_header>div>#hb_header_right_container>#hb_header_search #hb_header_search_button").style.borderRadius="0px 200px 200px 0px";
}
//-----------------------------------//-----------------------------------//-----------------------------------//
//------------------FOR clearing search textbox and showing cross[X] icon ---------------------//
function hb_0357press(){
	if(document.querySelector("#hb_scene_header #hb_header_search_input").value != ""){
		if(hb_0357view_state == false){
			document.querySelector("#hb_scene_header #hb_header_search_cancel_button").style.width = "20px";
			document.querySelector("#hb_scene_header #hb_header_search_cancel_button").style.opacity = "1";

			document.querySelector("#hb_scene_header #hb_header_search_cancel_button>div").style.width = "17px";
			document.querySelector("#hb_scene_header #hb_header_search_cancel_button>div").style.opacity = "1";

			hb_0357view_state = true;
		}
	}else{
		if(!hb_if_searched){
			document.querySelector("#hb_scene_header #hb_header_search_cancel_button").style.width = "0px";
			document.querySelector("#hb_scene_header #hb_header_search_cancel_button").style.opacity = "0";
			document.querySelector("#hb_scene_header #hb_header_search_cancel_button").style.background = "transparent";

			document.querySelector("#hb_scene_header #hb_header_search_cancel_button>div").style.width = "0px";
			document.querySelector("#hb_scene_header #hb_header_search_cancel_button>div").style.opacity = "0";

			hb_0357view_state = false;
		}else{
			hb_0357view_state = true;
		}
	}
}
//--------------------------------------------------------//

function hb_0357search_clear(){
		document.querySelector("#hb_scene_header #hb_header_search_input").value="";

		document.querySelector("#hb_scene_header #hb_header_search_cancel_button").style.width = "0px";
		document.querySelector("#hb_scene_header #hb_header_search_cancel_button").style.opacity = "0";
		document.querySelector("#hb_scene_header #hb_header_search_cancel_button").style.background = "transparent";
		document.querySelector("#hb_scene_header #hb_header_search_cancel_button>div").style.width = "0px";
		document.querySelector("#hb_scene_header #hb_header_search_cancel_button>div").style.opacity = "0";
		hb_0357view_state = false;

		if(hb_if_searched == true){
			//document.getElementById("main_area").innerHTML=splashScreen1;
			//Wait_Wheel_rotate = 0;

			hb_scene_show(hb_which_show_selected);
			hb_if_searched = false;
		}

		document.querySelector("#hb_scene_header #hb_header_search_input").focus();

}

</script>

<?php include "event.php"; ?>

</body>

</html>
