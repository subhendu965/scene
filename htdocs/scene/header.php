<?php
//checking if some one access directly or not
if(isset($rootpath)){
	include $rootpath."universal/init/init_protect.php";
}else{
	die("Unautorized Entry!");
}



?>

<style>
	@media screen and (min-width:900px){
		#hb_scene_header>div>#link_label{
			display: block;
		}
		#hb_scene_header>div>#link_label_resp_menu_btn{
			display: none;
		}
		#hb_scene_header>div>#hb_header_right_container>a#upload_button{
			display: inline-block;
		}
		#upload_button_resp_125q{
			transform: scale(0,0);
		}
	}
	@media screen and (max-width:899px){
		#hb_scene_header>div>#link_label{
			display: none;
		}
		#hb_scene_header>div>#link_label_resp_menu_btn{
			display: inline-block;
		}
		#hb_scene_header>div>#hb_header_right_container>a#upload_button{
			display: none;
		}
		#upload_button_resp_125q{
			transform: scale(1,1);
		}
	}

#hb_scene_header{
	position:fixed;
	width:100%;
	height:50px;
	top:0px;
	z-index:1000;
	font-family:montserrat_regular;
	background:rgba(17,34,61,1);
	box-shadow:rgba(0,0,0,0.5) 0px 3px 4px;
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
	cursor:pointer;
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
	/*---------------*/
#hb_scene_header>div>#link_label_resp_menu_btn{
	width:25px;
	height: 36px;
	float:left;
	padding:7px;
	background: url('/images/navMenuLogo.png') no-repeat;
	background-size: auto 52%;
	background-position: center center;
	cursor: pointer;
	transition:background 0.5s,border 0.3s;
}
#hb_scene_header>div>#link_label_resp_menu_btn:hover{
	background-color:#00aed9;
}

/*######################## RIGHT CONTAINER ############################*/
#hb_scene_header>div>#hb_header_right_container>a{
	text-decoration:none;
	color:white;
}
#hb_scene_header>div>#hb_header_right_container{
	float:right;
}
/*------------------------------------------------*/
#hb_scene_header>div>#hb_header_right_container>a#upload_button>div{
	display:inline-block;
	height:30px;
	width:30px;
	margin:10px 0px;
	float:right;
	transition: border 0.3s, background 0.3s;
	background: url('/images/logo_upload_blue.png') no-repeat;
	background-color:white;
	background-size: 50% 50%;
	background-position: center 62%;
	border-radius:300px;
}
#hb_scene_header>div>#hb_header_right_container>a#upload_button>div:hover{
	background-color:#bef;
}
/*------------------------------------------------------------------------------------------------*/
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
	font-size:13px;
	background:transparent;
	padding:0px 3px 0px 0px;
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

/*===================================================================*/
#link_label_resp_menu{
	display: none;
	background: rgb(120,150,150);
	box-shadow: rgb(70,100,100) 0px 5px 6px;
}
#link_label_resp_menu a{
	text-decoration: none;
}
#link_label_resp_menu div[id^=hb_scene_]{
	padding:10px 15px;
	color:white;
	border-bottom: 1px solid rgb(170,200,200);
}

#link_label_resp_menu a:nth-child(odd) div[id^=hb_scene_]{
	background: rgb(120,150,150);
}
#link_label_resp_menu a:nth-child(even) div[id^=hb_scene_]{
	background: rgb(90,120,120);
}
	/*-----------------------------*/
	#upload_button_resp_125q{
		text-decoration: none;
	}
	#upload_button_resp_125q div{
		width:60px;
		height:60px;
		position:fixed;
		bottom:12px;
		right:12px;
		z-index:85;
		opacity: 0.9;
		background: url('/images/logo_upload.png') no-repeat;
		background-color: rgb(45,100,140);
		background-size: 50% 50%;
		background-position: center 60%;
		border-radius:300px;
		transform-origin: 50% 50%;
		box-shadow:rgba(0,0,0,0.3) 2px 2px 3px;
		transition:transform 0.3s, background 0.3s, box-shadow 0.3s;
	}
	#upload_button_resp_125q div:hover{
		background-color: rgb(30,130,130);
		box-shadow:rgba(0,0,0,0.5) 2px 2px 4px;
	}
/*=========================================================================*/

</style>

<header id="hb_scene_header" >
<div>

	<div id="link_label_resp_menu_btn" onClick="show_navMenu();">&nbsp;</div>

	<img src="/images/scene_logo.png" width="36px" height="36px" onclick="window.location.href='http://scene.hazrabrothers.com/'" />
	<div id="link_label">
		<a href="javascript:hb_scene_show('hb_scene_popular');">
		<div id="hb_scene_popular">Popular</div>
		</a>

		<a href="javascript:hb_scene_show('hb_scene_new');">
		<div id="hb_scene_new">New</div>
		</a>

		<a href="javascript:hb_scene_show('hb_scene_categories');">
		<div id="hb_scene_categories">Categories</div>
		</a>

		<a href="javascript:hb_scene_show('hb_scene_albums');">
		<div id="hb_scene_albums">Albums</div>
		</a>

		<a href="javascript:hb_scene_show('hb_scene_pages');">
		<div id="hb_scene_pages">Scene Pages</div>
		</a>


	</div>



	<div id="hb_header_right_container">

		<?php include $rootpath."scene/user_header_logo.php"; ?>

		<?php include $rootpath."scene/user_header_notification.php"; ?>

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

		<a href="/upload/single/" id="upload_button">
			<div id="hb_head_upload">&nbsp;</div>
		</a>

	</div>

</div>
</header>

<div id="hb_scene_blank"></div>

<div id="link_label_resp_menu">

		<a href="javascript:hb_scene_show('hb_scene_popular');">
		<div id="hb_scene_popular">Popular</div>
		</a>

		<a href="javascript:hb_scene_show('hb_scene_new');">
		<div id="hb_scene_new">New</div>
		</a>

		<a href="javascript:hb_scene_show('hb_scene_categories');">
		<div id="hb_scene_categories">Categories</div>
		</a>

		<a href="javascript:hb_scene_show('hb_scene_albums');">
		<div id="hb_scene_albums">Albums</div>
		</a>

		<a href="javascript:hb_scene_show('hb_scene_pages');">
		<div id="hb_scene_pages">Scene Pages</div>
		</a>


</div>

<a  href="/upload/single/" id="upload_button_resp_125q"><div id="upload_button_resp_125q">&nbsp;</div></a>

<script>

hb_which_show_selected = "hb_scene_topRated";
hb_if_searched = false;
hb_0357view_state = false;
hb_45479_collapse_state = true;

hb_show_navMenu_state = false;
hb_scroll_val_of_page = 0; //how much is the page scrolled?

//-------------------------------------------------------------------------

//initial arrange
//document.onload=initWork();
function initWork(){
	hb_scene_show("hb_scene_popular");
	/*header_request=new XMLHttpRequest();
	header_request.open("GET","hb_scene_topRated.php?page=1&sqc=NC89R45jki12",true);
	header_request.onreadystatechange=getResponse;
	header_request.send(null);


	hb_scene_header_selector=document.querySelectorAll("#hb_scene_header #link_label a>div[id^='hb_scene_']");
	for(var i=0; i<hb_scene_header_selector.length; i++){
			hb_scene_header_selector[i].style.padding="15px 8px";
			hb_scene_header_selector[i].style.borderBottom="none";
	}

	document.getElementById('hb_scene_topRated').style.padding="15px 8px 10px 8px";
	document.getElementById('hb_scene_topRated').style.borderBottom="5px solid #00aed9";

	hb_scene_header_selector=document.querySelectorAll("#link_label_resp_menu div[id^=hb_scene_]");
	for(var i=0; i<hb_scene_header_selector.length; i++){
			hb_scene_header_selector[i].style.paddingLeft="15px";
			hb_scene_header_selector[i].style.borderLeft="none";
	}

	document.querySelector("#link_label_resp_menu div[id=hb_scene_topRated]").style.paddingLeft="5px";
	document.querySelector("#link_label_resp_menu div[id=hb_scene_topRated]").style.borderLeft="10px solid rgb(170,200,200)";
	*/

	hb_0357press();
}

//functions for show menu options in header click
function hb_scene_show(sub){
	header_request=new XMLHttpRequest();
	header_request.open("GET",sub+".php?page=1&sqc=NC89R45jki12",true);
	header_request.onreadystatechange=getResponse;
	header_request.send(null);

	hb_scene_header_selector=document.querySelectorAll("#hb_scene_header #link_label a>div[id^='hb_scene_']");
	for(var i=0; i<hb_scene_header_selector.length; i++){
			hb_scene_header_selector[i].style.padding="15px 8px";
			hb_scene_header_selector[i].style.borderBottom="none";
	}

	hb_which_show_selected = sub;
	hb_if_searched = false;

	document.getElementById(sub).style.padding="15px 8px 10px 8px";
	document.getElementById(sub).style.borderBottom="5px solid #00aed9";

	hb_scene_header_selector=document.querySelectorAll("#link_label_resp_menu div[id^=hb_scene_]");
	for(var i=0; i<hb_scene_header_selector.length; i++){
			hb_scene_header_selector[i].style.paddingLeft="15px";
			hb_scene_header_selector[i].style.borderLeft="none";
	}

	document.querySelector("#link_label_resp_menu div[id="+sub+"]").style.paddingLeft="5px";
	document.querySelector("#link_label_resp_menu div[id="+sub+"]").style.borderLeft="10px solid rgb(170,200,200)";

	document.getElementById("main_area").innerHTML=splashScreen1;

	if(hb_show_navMenu_state){
		show_navMenu();
	}

	window.scrollTo(0,0);

}

///////////////response function/////////////////////////////////////////////////////////////
function getResponse(){
	if(header_request.status==200 && header_request.readyState==4){
		//alert(header_request.responseText);
		document.getElementById("main_area").innerHTML=header_request.responseText;

		if(document.querySelector("#image_class_script_id_5697")){
			eval(document.querySelector("#image_class_script_id_5697").innerHTML);
		}

		if(document.querySelector("#scr_hb_scene_popular_filter_569p")){
			eval(document.querySelector("#scr_hb_scene_popular_filter_569p").innerHTML);
		}
	}
}

/////////////////function for search //////////////////
function hb_scene_search(){
	var search_text=document.querySelector("#hb_scene_header #hb_header_search_input").value;
	if(hb_45479_collapse_state){
			hb_45479_collapse_expand();
	}else{
		if(search_text.trim() != ""){
			header_request=new XMLHttpRequest();
			header_request.open("GET","hb_scene_search.php?page=1&sqc=NC89R45jki12&search="+search_text,true);
			header_request.onreadystatechange=getResponse;
			header_request.send(null);

			hb_scene_header_selector=document.querySelectorAll("#hb_scene_header #link_label a>div[id^='hb_scene_']");
			for(var i=0; i<hb_scene_header_selector.length; i++){
					hb_scene_header_selector[i].style.padding="15px 8px";
					hb_scene_header_selector[i].style.borderBottom="none";
			}

			hb_if_searched = true;

			document.getElementById("main_area").innerHTML=splashScreen1;

			window.scrollTo(0,0);


		}else{

			if(hb_if_searched == true){
				document.getElementById("main_area").innerHTML=splashScreen1;


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
			document.getElementById("main_area").innerHTML=splashScreen1;


			hb_scene_show(hb_which_show_selected);
			hb_if_searched = false;
		}

		document.querySelector("#hb_scene_header #hb_header_search_input").focus();

}

</script>
