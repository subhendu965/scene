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

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//include scene init
include $rootpath."scene/scene_init.php";

if($hb_user_logged_in){

}else{
	die("You are not logged in. Please <a href='http://accounts.hazrabrothers.com/login/sign_in'>Log in</a> first to go to Scene Dashboard.");
}
$body_background_lyh7u=1;

$hb_header1_contentent_add_f5ttyq7we=<<<CODE_f5ttyq7we_HB

<style>

@media screen and (min-width:900px){
	#hb_menu_dashboard_rf4g{
		display:none;
	}
}
@media screen and (max-width:899px){
	#hb_menu_dashboard_rf4g{
		display:block;
	}
}

#hb_menu_dashboard_rf4g{
	width:25px;
	height: 36px;
	float:left;
	padding:7px;
	background: url('/images/navMenuLogo.png') no-repeat;
	background-size:69% auto;
	background-position: center 12px;
	background-clip: border-box;
	cursor: pointer;
	transition:background 0.3s, box-shadow 0.3s, border 0.3s;
}

#hb_menu_dashboard_rf4g:hover{
	background-color:#00aed9;
}
</style>

<div id="hb_menu_dashboard_rf4g" onClick="show_hb_dashboard_menu_h5455t();">&nbsp;</div>

CODE_f5ttyq7we_HB;

?>

<html>
<head>
	<title>Scene Dashboard of <?php echo $_SESSION['hb_user']['first_name']." ".$_SESSION['hb_user']['last_name']; ?></title>
	<link rel="shortcut icon" href="/images/scene_logo_title.png" />
	<meta name="viewport" content="width=device-width" />
</head>

<body>
<?php
//////////////////////////////////////include header///////////////////////////////////////////////
include "../auxiliary_header.php";
?>
<div id="hb_scene_blank"></div>
<?php
////////////////////////////////end of header/////////////////////////////////////////////////
?>

<?php ///////////////////////////////////////////main page area/////////////////////////////////////////// ?>
<style>

@media screen and (min-width:1100px){
	div#hb_dashboard_left_panel{
		width:20%;
		position: fixed;
	}
	#hb_scene_dash_left_panel{
		border-right:3px solid #0090b1;
	}
	div#hb_dashboard_right_panel{
		width:80%;
	}
}
@media screen and (min-width:900px) and (max-width:1099px){
	div#hb_dashboard_left_panel{
		width:25%;
		position: fixed;
	}
	#hb_scene_dash_left_panel{
		border-right:3px solid #0090b1;
	}
	div#hb_dashboard_right_panel{
		width:75%;
	}
}
@media screen and (max-width:899px){
	div#hb_dashboard_left_panel{
		width:100%;
		display:none;
		/*z-index:170;*/
	}
	#hb_scene_dash_left_panel{
		border-right:0px solid #0090b1;
	}
	div#hb_dashboard_right_panel{
		width:100%;
	}
}


@font-face{
	font-family:montserrat_regular;
	font-weight:normal;
	src:url('/fonts/Montserrat-Light.ttf');
}
@font-face{
	font-family:montserrat_regular;
	font-weight:bold;
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
	/*background:url("/images/bgt.png") repeat fixed;*/
	background-size: auto;
	background-position: center center;
	background-color:#eee;
}
#main_page{
	/*margin-top:43px;
	background-color: rgba(255,255,255,0.75);*/
}
.hb_acc_dashboard_bth_panel_565{

}
div#hb_dashboard_left_panel{
	float:left;
	overflow:hidden;
	margin:0px;
	padding: 0px;
	/*border-right: 2px solid #666;*/
	background: rgba(255,255,255,0.95);
}

#hb_scene_dash_left_panel{
	font-size:18px;
	/*border-right:3px solid #0090b1;*/
}
#hb_scene_dash_left_panel a{
	text-decoration:none;
}
#hb_scene_dash_left_panel [id^=open_dashboard_]{
	cursor:pointer;
}
#hb_scene_dash_left_panel [id^=open_dashboard_]>div{
	padding:8px;
	color:black;
	transition:background 0.3s;
}

#hb_scene_dash_left_panel [id^=open_dashboard_]:nth-child(odd) >div{
	background-color:rgba(0,0,0,0.06);
}
#hb_scene_dash_left_panel [id^=open_dashboard_]:nth-child(even) >div{
	background-color:rgba(0,0,0,0.02);
}

#hb_scene_dash_left_panel [id^=open_dashboard_]>div:hover{
	background-color:rgba(0,0,0,0.2);
}

/*---------------------------------------------------------------------------------
---------------------------------------------------------------------------------*/

div#hb_dashboard_right_panel{
	/*background: white;*/
	float: right;
	margin: 0px;
	/*background: rgba(255,255,255,0.75);*/
}
</style>
<div id="main_page">
	<div id="hb_dashboard_left_panel" class="hb_acc_dashboard_bth_panel_565">
		<div id="hb_scene_dash_left_panel">
			<div onClick="open_dashboard_page_y7t('home',this)" id="open_dashboard_home"><div>Home</div></div>
			<div onClick="open_dashboard_page_y7t('settings',this)" id="open_dashboard_settings"><div>Settings</div></div>
			<div onClick="open_dashboard_page_y7t('personalize',this)" id="open_dashboard_personalize"><div>Personalize</div></div>
			<div onClick="open_dashboard_page_y7t('my_activities',this)" id="open_dashboard_my_activities"><div>My Activities</div></div>
			<div onClick="open_dashboard_page_y7t('uploads',this)" id="open_dashboard_uploads"><div>Uploads</div></div>
			<div onClick="open_dashboard_page_y7t('my_scene_page',this)" id="open_dashboard_my_scene_page"><div>My Scene Page</div></div>
			<div onClick="open_dashboard_page_y7t('my_scene_blog',this)" id="open_dashboard_my_scene_blog"><div>My Scene Blog</div></div>
			<div onClick="open_dashboard_page_y7t('my_subcriptions',this)" id="open_dashboard_my_subcriptions"><div>My Subcriptions</div></div>
		</div>
	</div>
	<div id="hb_dashboard_right_panel" class="hb_acc_dashboard_bth_panel_565">
		<div id="hb_scene_dash_right_panel">

		</div>
	</div>
	<div style="clear:both;font-size:1px;"></div>
</div>

<script>
bln_hb_dashboard_menu_h5455t_state=false;
hb_page_scrolled_offset=0;
hb_page_prev_opened="";
/*===============================================================================================================*/

function open_dashboard_page_y7t(page,listItem){
	request=new XMLHttpRequest();
	request.open("GET",page+".php",true);
	request.onreadystatechange=getResponse;
	request.send(null);
	//alert("sa9");

	div_uio8=listItem.id;
	//alert(div_uio8)

	for(var yu=0; yu<document.querySelectorAll("#hb_scene_dash_left_panel [id^=open_dashboard_] div").length; yu++){
		document.querySelectorAll("#hb_scene_dash_left_panel [id^=open_dashboard_] div")[yu].style.borderRight="";
	}

	document.querySelector("#hb_scene_dash_left_panel #"+div_uio8+" div").style.borderRight="8px solid #0090b1";
	document.querySelector("#hb_scene_dash_right_panel").innerHTML=splashScreen1;

	//hb_page_prev_opened=listItem;

	if(bln_hb_dashboard_menu_h5455t_state){ //if menu opened :small view
		show_hb_dashboard_menu_h5455t();
	}

	if(hb_page_prev_opened!=div_uio8){
		hb_page_scrolled_offset=0;
	}

	hb_page_prev_opened=div_uio8;
}

function getResponse(){
	if(request.status==200 && request.readyState==4){
		//alert(request.responseText);
		//document.querySelector("#hb_scene_dash_right_panel").innerHTML=request.responseText;

		if(request.responseText.substr(0,6)=="Error:"){
			/////////////////for unable to connect server
			document.querySelector("#hb_scene_dash_right_panel").innerHTML="There is some error! Try again.";
		}else{
			if(request.responseText.substr(0,5)=="Done:"){
				document.querySelector("#hb_scene_dash_right_panel").innerHTML=request.responseText.substr(5);
				if(document.querySelector("#image_class_script_id_5697")){
					eval(document.querySelector("#image_class_script_id_5697").innerHTML);  /////for image class///////
				}
				eval(document.querySelector("#dashboard_response_scipt").innerHTML);

				setSizeOfMainObjects();

				window.scrollTo(0,hb_page_scrolled_offset);
			}else{
				///////////////tmp//////////////////////
			}
		}
	}
}

function show_hb_dashboard_menu_h5455t(){
	if(bln_hb_dashboard_menu_h5455t_state){ //if opened
		document.querySelector("div#hb_dashboard_left_panel").style.display="";
		document.querySelector("#hb_menu_dashboard_rf4g").style.paddingBottom="";
		document.querySelector("#hb_menu_dashboard_rf4g").style.borderBottom="";


		document.querySelector("div#hb_dashboard_right_panel").style.display="";
		window.scrollTo(0,hb_page_scrolled_offset);

		bln_hb_dashboard_menu_h5455t_state=false;
	}else{
		hb_page_scrolled_offset=window.scrollY;

		document.querySelector("div#hb_dashboard_left_panel").style.display="block";
		document.querySelector("#hb_menu_dashboard_rf4g").style.paddingBottom="2px";
		document.querySelector("#hb_menu_dashboard_rf4g").style.borderBottom="5px solid rgb(0, 174, 217)";

		document.querySelector("div#hb_dashboard_right_panel").style.display="none";

		window.scrollTo(0,0);

		bln_hb_dashboard_menu_h5455t_state=true;
	}
}

/////////////////////////////////////splash screen///////////////////////////////////////////
var splashScreen1=`

<div id="Splash_Screen">

<div id="logo">

	<div id="Wait_Wheel">
		<div></div>
	</div>
</div>
</div>

<style>
@keyframes spinWheel{
from{
    background:#0a89a4;
    border-radius:100px;
    transform:rotate(0deg);
}
50%{

    background:#0a546c;
    border-radius:0px;
    transform:rotate(180deg);
}
to{
    background:#0a89a4;
    border-radius:100px;
    transform:rotate(360deg);
}

}

#Splash_Screen{
	height:200px;
	padding:100px;
}
#Splash_Screen>#logo{



}
#Splash_Screen>#logo>#Wait_Wheel>div{
	width:100px;
	height:100px;
	background:#0a89a4;
	border-radius:100px;
	margin:auto;

	animation-name:spinWheel;
	animation-duration:1.5s;
	animation-iteration-count:infinite;

	transition:background 0.7s, border-radius 0.5s, transform 0.5s;
}
</style>

	`;

/*------------  End of circle to square ----------------------------------------------------
------------------------------------------------------------------------------------------*/

/////////////////////////////////////end of splash screen////////////////////////////////////

function hb_scene_show_image(url_qstring){
	//alert(url_qstring);
	window.location="http://scene.hazrabrothers.com/scene_viewer/?imageUrl="+url_qstring;
}
</script>


<?php ///////////////////////////////////////////end of main page area/////////////////////////////////////////// ?>

<div id="footer_blank_0032">&nbsp;</div>
<?php
///////////////////////////////////////////////include footer/////////////////////////////////////////////////////
include $rootpath."scene/footer.php";
?>
<style>

#main_page{
    min-height:800px;
}
#hb_scene_footer{
	position:absolute;
	bottom:0px;
	z-index:80;
}
</style>

<script>

function setSizeOfMainObjects(){
	document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height)+"px";

	if(window.innerWidth >= 900){
		document.querySelector('div#hb_dashboard_left_panel #hb_scene_dash_left_panel').style.height=(window.innerHeight-document.querySelector('#hb_scene_header').clientHeight)+'px';
	}else{
		document.querySelector('div#hb_dashboard_left_panel #hb_scene_dash_left_panel').style.height="";
	}
	//document.title=document.querySelector("html").clientWidth+"  "+window.innerWidth;

	//set_hb_dashboard_menu_visibility();
}


/*function set_hb_dashboard_menu_visibility(){
	if(window.innerWidth >= 900){
		//alert(document.querySelector("html").clientWidth)
		document.querySelector("div#hb_dashboard_left_panel").style.display="block";
		//document.querySelector('div#hb_dashboard_right_panel').style.width=(document.querySelector("html").clientWidth-document.querySelector('div#hb_dashboard_left_panel').clientWidth)+'px';

	}else{
		if(!bln_hb_dashboard_menu_h5455t_state){ //if not opened
			document.querySelector("div#hb_dashboard_left_panel").style.display="none";
		}

		document.querySelector('div#hb_dashboard_right_panel').style.width="100%";
	}
}*/

</script>
<?php ///////////////////////////////////////////////end of footer///////////////////////////////////////////////////// ?>


<?php include "event.php"; ?>

</body>

</html>
