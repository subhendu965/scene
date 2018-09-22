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
	die("<a href='/user/login/sign_in/'>Log In</a> first to manage your Hazra Brothers account");
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$hb_header1_contentent_add_f5ttyq7we=<<<CODE_f5ttyq7we_HB

<style>

@media screen and (min-width:950px){
	#hb_menu_dashboard_rf4g{
		display:none;
	}
}
@media screen and (max-width:949px){
	#hb_menu_dashboard_rf4g{
		display:block;
	}
}

#hb_menu_dashboard_rf4g{
	width:30px;
	height:30px;
	margin:5px;
	float:left;
	font-size:1px;
	border-radius:4px;

	background:url('/images/logo_nav_menu.png');
	background-color:rgba(0,0,0,0.4);
	background-position:center center;
	background-repeat:no-repeat;
	background-size:auto 48%;

	cursor:pointer;
	transition:background 0.3s, box-shadow 0.3s;
}

#hb_menu_dashboard_rf4g:hover{
	background-color:rgba(0,144,177,0.7);
}
</style>

<div id="hb_menu_dashboard_rf4g" onClick="show_hb_dashboard_menu_h5455t();">&nbsp;</div>

CODE_f5ttyq7we_HB;

?>

<!doctype html>
<html>


<head>
	<link rel="shortcut icon" href="/images/universal/icon.png" media="screen" />
	<meta name="viewport" content="width=device-width">

	<title>Account Dashboard of <?php echo $_SESSION['hb_user']['first_name']." ".$_SESSION['hb_user']['last_name']; ?></title>



</head>
<body>
<?php
//////////////////////////////start of header///////////////////
include $rootpath."user/login/header.php";
///////////////////////////////////////////////end of header////////////////////
?>
<style>

@media screen and (min-width:1100px){
	div#hb_acc_dashboard_left_panel{
		width:20%;
		position: fixed;
	}
	#inner_left_panel{
		border-right:3px solid #0090b1;
	}
	div#hb_acc_dashboard_right_panel{
		width:80%;
	}
}

@media screen and (min-width:900px) and (max-width:1099px){
	div#hb_acc_dashboard_left_panel{
		width:25%;
		position: fixed;
	}
	#inner_left_panel{
		border-right:3px solid #0090b1;
	}
	div#hb_acc_dashboard_right_panel{
		width:75%;
	}
}
@media screen and (max-width:949px){
	div#hb_acc_dashboard_left_panel{
		width:100%;
		display:none;
		/*z-index:170;*/
	}
	#inner_left_panel{
		border-right:0px solid #0090b1;
	}
	div#hb_acc_dashboard_right_panel{
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
	background:url("/images/background/shade/back1.png") repeat fixed;
	background-size: auto;
	background-position: center center;
	background-color:#eee;
}
#main_page{
	margin-top:43px;
	/*background-color: rgba(255,255,255,0.75);*/
}
.hb_acc_dashboard_bth_panel_565{

}
div#hb_acc_dashboard_left_panel{
	float:left;
	overflow:hidden;
	margin:0px;
	padding: 0px;
	/*border-right: 2px solid #666;*/
	background: rgba(255,255,255,0.95);
}

#inner_left_panel{
	font-size:18px;
	/*border-right:3px solid #0090b1;*/
}
#inner_left_panel a{
	text-decoration:none;
}
#inner_left_panel a>div{
	padding:8px;
	color:black;
	transition:background 0.3s;
}

#inner_left_panel a:nth-child(odd) >div{
	background-color:rgba(0,0,0,0.06);
}
#inner_left_panel a:nth-child(even) >div{
	background-color:rgba(0,0,0,0.02);
}

#inner_left_panel a>div:hover{
	background-color:rgba(0,0,0,0.2);
}

/*---------------------------------------------------------------------------------
---------------------------------------------------------------------------------*/

div#hb_acc_dashboard_right_panel{
	/*background: white;*/
	float: right;
	margin: 0px;
	/*background: rgba(255,255,255,0.75);*/
}
</style>
<div id="main_page">
	<div id="hb_acc_dashboard_left_panel" class="hb_acc_dashboard_bth_panel_565">
		<div id="inner_left_panel">
			<a href="javascript:hb_acc_dashboard_show('home','left_panel_list_item_home')"><div id="left_panel_list_item_home">Home</div></a>
			<a href="javascript:hb_acc_dashboard_show('my_profile','left_panel_list_item_my_profile')"><div id="left_panel_list_item_my_profile">My Profile</div></a>
			<a><div>Notifications</div></a>
			<a><div>Settings</div></a>
			<a><div>Others Dashboards</div></a>
		</div>
	</div>
	<div id="hb_acc_dashboard_right_panel" class="hb_acc_dashboard_bth_panel_565">
		<div id="inner_right_panel">

		</div>
	</div>
	<div style="clear:both;font-size:1px;"></div>
</div>

<script>
bln_hb_dashboard_menu_h5455t_state=false;
hb_page_scrolled_offset=0;
hb_page_prev_opened="";
/*===============================================================================================================*/

function hb_acc_dashboard_show(page,listItem){
	request=new XMLHttpRequest();
	request.open("GET",page+".php",true);
	request.onreadystatechange=getResponse;
	request.send(null);

	for(var yu=0; yu<document.querySelectorAll("#inner_left_panel [id^=left_panel_list_item_]").length; yu++){
		document.querySelectorAll("#inner_left_panel [id^=left_panel_list_item_]")[yu].style.borderRight="";
	}

	document.querySelector("#inner_left_panel #"+listItem).style.borderRight="8px solid #0090b1";
	document.querySelector("#inner_right_panel").innerHTML=splashScreen1;

	//hb_page_prev_opened=listItem;

	if(bln_hb_dashboard_menu_h5455t_state){ //if menu opened :small view
		show_hb_dashboard_menu_h5455t();
	}

	if(hb_page_prev_opened!=listItem){
		hb_page_scrolled_offset=0;
	}

	hb_page_prev_opened=listItem;
}

function getResponse(){
	if(request.status==200 && request.readyState==4){
		//document.querySelector("#inner_right_panel").innerHTML=request.responseText;

		if(request.responseText.substr(0,6)=="Error:"){
			/////////////////for unable to connect server
			document.querySelector("#inner_right_panel").innerHTML="There is some error! Try again.";
		}else{
			if(request.responseText.substr(0,5)=="Done:"){
				document.querySelector("#inner_right_panel").innerHTML=request.responseText.substr(5);
				if(document.querySelector("#my_profile_script_856")){
					eval(document.querySelector("#my_profile_script_856").innerHTML);
				}

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
		document.querySelector("div#hb_acc_dashboard_left_panel").style.display="";
		document.querySelector("#hb_menu_dashboard_rf4g").style.backgroundColor="";
		document.querySelector("#hb_menu_dashboard_rf4g").style.boxShadow="";

		document.querySelector("div#hb_acc_dashboard_right_panel").style.display="";
		window.scrollTo(0,hb_page_scrolled_offset);

		bln_hb_dashboard_menu_h5455t_state=false;
	}else{
		hb_page_scrolled_offset=window.scrollY;

		document.querySelector("div#hb_acc_dashboard_left_panel").style.display="block";
		document.querySelector("#hb_menu_dashboard_rf4g").style.backgroundColor="rgba(0,120,145,1)";
		document.querySelector("#hb_menu_dashboard_rf4g").style.boxShadow="rgba(0,144,177,0.5) 0px 0px 1px 2px";

		document.querySelector("div#hb_acc_dashboard_right_panel").style.display="none";

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
window.addEventListener("resize",setSizeOfMainObjects,false);

function setSizeOfMainObjects(){
	document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_user_footer").getBoundingClientRect().height)+"px";

	if(window.innerWidth >= 950){
		document.querySelector('div#hb_acc_dashboard_left_panel #inner_left_panel').style.height=(window.innerHeight-document.querySelector('#hb_header1').clientHeight)+'px';
	}else{
		document.querySelector('div#hb_acc_dashboard_left_panel #inner_left_panel').style.height="";
	}
	//document.title=document.querySelector("html").clientWidth+"  "+window.innerWidth;

	//set_hb_dashboard_menu_visibility();
}

setSizeOfMainObjects();
/*
function set_hb_dashboard_menu_visibility(){
	if(window.innerWidth >= 950){

		document.querySelector("div#hb_acc_dashboard_left_panel").style.display="block";
		document.querySelector('div#hb_acc_dashboard_right_panel').style.width=(document.querySelector("html").clientWidth-document.querySelector('div#hb_acc_dashboard_left_panel').clientWidth)+'px';

	}else{
		if(!bln_hb_dashboard_menu_h5455t_state){ //if not opened
			document.querySelector("div#hb_acc_dashboard_left_panel").style.display="none";
		}

		document.querySelector('div#hb_acc_dashboard_right_panel').style.width="100%";
	}
}*/

</script>

<?php
	include "event.php";
?>
</body>

</html>
