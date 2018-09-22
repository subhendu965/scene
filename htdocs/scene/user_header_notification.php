<?php
//checking if some one access directly or not
if(isset($rootpath)){
	include $rootpath."universal/init/init_protect.php";
}else{
	die("Unautorized Entry!");
}
?>


<style>
#hb_user_header_notification_3461_logo{
	display:inline-block;
	width:30px;
	height:30px;
	float:right;
	margin:10px 5px 10px 0px;
	padding:0px;
	border-radius:100px;
	background:url("/images/notification_logo.png");
	background-size:65% auto;
	background-repeat:no-repeat;
	background-position: center center;
	background-clip:padding-box;
	cursor:pointer;
	color:black;
	border-radius:300px;
	background-color:white;
	transition: border 0.3s, background 0.3s, border-radius 0.3s, box-shadow 0.3s;
}
#hb_user_header_notification_3461_logo:hover{
	/*background-color:#fff1da;*/
	background-color:#bef;
}
/*---------------------------*/
#hb_user_header_notification_3461_logo_number{
	position:relative;
	top:-8px;
	right:-7px;
	z-index:10;
	height:12px;
	color:white;
	font-size:10px;
	font-weight:bold;
	padding:2px 5px;
	background-color:red;
	border-radius:300px;
	transform-origin:50% 50%;
	transform:scale(0,0);
	box-shadow:rgba(0,0,0,0.25) -1px 1px 1px;
	transition: transform 0.3s;
}
/*================================================================*/
#hb_user_header_notification_3461_div{
	position:absolute;
	right:0px;
	top:50px;
	width:250px;
	z-index:90;
	transform-origin:100% 50%;
	transform:scale(0,1);
	opacity:0.3;
	overflow:auto;
	font-size:15px;
	color:white;
	margin:0px;
	padding:0px 5px;
	background-color:rgba(0,0,0,0.8);
	text-align:center;
	box-shadow:rgba(0,0,0,0.5) -2px 0px 3px;
	transition:transform 0.3s, opacity 0.3s;
}

/*--------------------------------*/
#hb_user_header_notification_3461_div #header_part{
	border-bottom:2px solid rgba(255,255,255,0.8);
}
#hb_user_header_notification_3461_div #header_part>header{
	font-size:22px;
	padding:5px 0px 0px 0px;
}
#hb_user_header_notification_3461_div #header_part #notification_count{
	font-size:12px;
	padding:5px 0px;
}
/*------------------------------------------------*/
#hb_user_header_notification_3461_div #middle_part{

}

#hb_user_header_notification_3461_div [id$=_but_567]{
	margin:10px 0px 10px 0px;
	cursor:pointer;
	background-color:rgba(255,255,255,0.2);
	padding:4px 7px;
	color:white;
	font-size:12px;
	border:2px solid rgba(255,255,255,0.7);
	border-radius:5px;
	transition:background 0.3s, color 0.3s, border 0.3s;
}

#hb_user_header_notification_3461_div [id$=_but_567]:disabled{
	background-color:rgba(120,120,120,0.8);
	color:#ccc;
	border-color:#ccc;
	cursor:default;
}

#hb_user_header_notification_3461_div [id$=_but_567]:disabled:hover{
	background-color:rgba(120,120,120,0.8);
}
/*-------------------------*/
#hb_user_header_notification_3461_div #show_all_but_567{
	float:left;
}

#hb_user_header_notification_3461_div #show_all_but_567:hover{
	background-color:rgba(35,110,180,0.8);
}
/*-- -- -- -- -- --*/
#hb_user_header_notification_3461_div #clear_all_but_567{
	float:right;
}

#hb_user_header_notification_3461_div #clear_all_but_567:hover{
	background-color:rgba(200,60,20,0.8);
}
/*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii{
	text-align:left;
}
/*---  - - - - - - ---*/
#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element{
	transform-origin:50% 0%;
	overflow:hidden;
	transition: transform 0.3s, height 0.3s, opacity 0.3s;
}
#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element .notification_element_inner{
	padding:5px;
	cursor:pointer;
	border-top:1px solid rgba(255,255,255,0.5);
	color:white;
	transform-origin:50% 0%;
	overflow:hidden;
	transition:background 0.3s, color 0.3s, transform 0.3s, height 0.3s;
}
/*---  - - - - - - ---*/
#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element:nth-child(odd) .notification_element_inner{
	background-color:rgba(255,255,255,0.17);
}
#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element:nth-child(even) .notification_element_inner{

}
/*---  - - - - - - ---*/
#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element:last-child .notification_element_inner{
	border-bottom:1px solid rgba(255,255,255,0.5);
}
/*---  - - - - - - ---*/
#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element:hover .notification_element_inner{
	/*background-color:rgba(60,150,220,0.8);*/
	background-color:rgba(255,255,255,0.9);
	color:black;
}
/*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
#hb_user_header_notification_3461_div a{
	text-decoration: none;
}
#hb_user_header_notification_3461_div a.ntfy45d54{

}
/*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
/*------------------------------------------------*/
#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element .notification_cross_btn_65sdf5s6{
	float:right;
	font-size:15px;
	width:16px;
	height:18px;
	margin-top:3px;
	background-color:rgba(60,150,220,0.8);
	border-radius:3px;
	color:white;
	padding:1px;
	text-align:center;
	transition:background 0.3s, color 0.3s;
}
#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element .notification_cross_btn_65sdf5s6:hover{
	background-color:rgba(200,60,20,0.8);
}
/*------------------------------------------------*/
#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element .notify_element_big_font{
	font-size:17px;
	padding:3px 0px;
}
#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element .notify_element_mid_font{
	font-size:15px;
	padding:3px 0px;
}
#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element .notify_element_mid_small_font{
	font-size:13px;
	padding:3px 0px;
}
#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element .notify_element_small_font{
	font-size:11px;
	padding:3px 0px;
}

/*===================================================================*/
#hb_user_header_notification_3461_div #footer_part{

}
</style>

<div id="hb_user_header_notification_3461_logo" style="float:right; color:white;" onClick="expand_hb_user_header_notification_3461_showNotificationDiv();">

	<div id="hb_user_header_notification_3461_logo_number" style="float:right;">0</div>
</div>


<div id="hb_user_header_notification_3461_div">
	<div id="header_part">
		<header>Notification</header>
		<div id="notification_count"><div id="notification_count_number_4654" style="display:inline-block;"></div> Notification(s)</div>
	</div>

	<div id="middle_part">
		<a class="ntfy_but_show_all" href="#"><button id="show_all_but_567">Show All</button></a>
		<button id="clear_all_but_567" onClick="clear_all_notification_element();">Clear All</button>

		<div style="clear:both; height:0px; overflow:hidden; font-size:1px; opacity:0;">&nbsp;</div>
	</div>

	<div id="notification_area_ty7g744fg4iii">

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_big_font">
			You have won 100 points! What is it?
			</div>
			<div class="notify_element_mid_font">
			It happens only when you use scene. I don't care about it!! Is it real?
			</div>
			<div class="notify_element_small_font">
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			</div>
		</div>
		</a>
		</div>

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_mid_font">
			It happens only when you use scene. I don't care about it!! Is it real?
			</div>
			<div class="notify_element_small_font">
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			</div>
		</div>
		</a>
		</div>

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_big_font">
			You have won 100 points! What is it?
			</div>
			<div class="notify_element_small_font">
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			</div>
		</div>
		</a>
		</div>

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_big_font">
			You have won 100 points! What is it?
			</div>
			<div class="notify_element_mid_font">
			It happens only when you use scene. I don't care about it!! Is it real?
			</div>
		</div>
		</a>
		</div>

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_small_font">
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			</div>
		</div>
		</a>
		</div>

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_mid_small_font">
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			</div>
		</div>
		</a>
		</div>

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_mid_small_font">
			Wow! What a good n e w s t h a t y o u h a v e w o n 1 0 0 p o i n t s though your images w e r e u s e l e s s and you are too rubbish to upload a good picture.
			</div>
		</div>
		</a>
		</div>

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_big_font">
			You have won 100 points! What is it?
			</div>
		</div>
		</a>
		</div>

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_mid_font">
			It happens only when you use scene. I don't care about it!! Is it real?
			</div>
		</div>
		</a>
		</div>

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_big_font">
			You have won 100 points! What is it?
			</div>
			<div class="notify_element_mid_font">
			It happens only when you use scene. I don't care about it!! Is it real?
			</div>
			<div class="notify_element_small_font">
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			</div>
		</div>
		</a>
		</div>

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_big_font">
			You have won 100 points! What is it?
			You have won 100 points! What is it?
			You have won 100 points! What is it?
			You have won 100 points! What is it?
			You have won 100 points! What is it?
			You have won 100 points! What is it?
			You have won 100 points! What is it?
			</div>
			<div class="notify_element_mid_font">
			It happens only when you use scene. I don't care about it!! Is it real?
			</div>
			<div class="notify_element_small_font">
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			</div>
		</div>
		</a>
		</div>

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_big_font">
			You have won 100 points! What is it?
			</div>
			<div class="notify_element_mid_font">
			It happens only when you use scene. I don't care about it!! Is it real?
			It happens only when you use scene. I don't care about it!! Is it real?
			It happens only when you use scene. I don't care about it!! Is it real?
			It happens only when you use scene. I don't care about it!! Is it real?
			It happens only when you use scene. I don't care about it!! Is it real?
			It happens only when you use scene. I don't care about it!! Is it real?
			It happens only when you use scene. I don't care about it!! Is it real?
			It happens only when you use scene. I don't care about it!! Is it real?
			It happens only when you use scene. I don't care about it!! Is it real?
			</div>
			<div class="notify_element_small_font">
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			</div>
		</div>
		</a>
		</div>

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_big_font">
			You have won 100 points! What is it?
			You have won 100 points! What is it?
			</div>
			<div class="notify_element_mid_font">
			It happens only when you use scene. I don't care about it!! Is it real?
			It happens only when you use scene. I don't care about it!! Is it real?
			It happens only when you use scene. I don't care about it!! Is it real?
			</div>
			<div class="notify_element_small_font">
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			</div>
		</div>
		</a>
		</div>

		<div class="notification_element"><a class="ntfy45d54" href="#"><div class="notification_element_inner">
		<div class="notification_cross_btn_65sdf5s6">X</div>

			<div class="notify_element_big_font">
			You have won 100 points! What is it?
			You have won 100 points! What is it?
			</div>
			<div class="notify_element_mid_font">
			It happens only when you use scene. I don't care about it!! Is it real?
			</div>
			<div class="notify_element_small_font">
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			Wow! What a good news that you have won 100 points though your images were useless and you are too rubbish to upload a good picture.
			</div>
		</div>
		</a>
		</div>

	</div>

	<div id="footer_part">

	</div>
</div>

<script>
	bln_expand_hb_user_header_notification_3461_showNotificationDiv = false;
	int_hb_user_header_notification_3461_logo_number=0;

/************************************************************************************************************************************/

	hb_notification_div_65456 = document.querySelector("#hb_user_header_notification_3461_div");
	hb_notification_logo_65456 = document.querySelector("#hb_user_header_notification_3461_logo");
	hb_notification_logo_number_65456 = document.querySelector("#hb_user_header_notification_3461_logo_number");

	hb_notification_element_65sdf5s6 = document.querySelectorAll("#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element");
	for(var i=0; i<hb_notification_element_65sdf5s6.length; i++){
		hb_notification_logo_number_65456.innerHTML=parseInt(hb_notification_logo_number_65456.innerHTML)+1;
	}
	change_hb_user_header_notification_3461_logo_number('+0');


	hb_notification_cross_btn_65sdf5s6 = document.querySelectorAll("#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element .notification_cross_btn_65sdf5s6");
	for(var i=0; i<hb_notification_cross_btn_65sdf5s6.length; i++){
		hb_notification_cross_btn_65sdf5s6[i].addEventListener("click",function (){
			close_notification_element(this);
		},false);
	}

/************************************************************************************************************************************/

	if(document.querySelector('[id*=hb_scene_header]')){
		hb_notification_div_65456.style.height=(window.innerHeight-document.querySelector('[id*=hb_scene_header]').clientHeight)+"px";
	}else{
		hb_notification_div_65456.style.height=(window.innerHeight-50)+"px";
	}

	//document.querySelector("#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii").style.height=(window.innerHeight-document.querySelector('#hb_scene_header').clientHeight-document.querySelector("#hb_user_header_notification_3461_div #header_part"))+"px";

/************************************************************************************************************************************/
	function expand_hb_user_header_notification_3461_showNotificationDiv(){
		if(!bln_expand_hb_user_header_notification_3461_showNotificationDiv){

			if(document.querySelector('[id*=hb_scene_header]')){
				hb_notification_div_65456.style.height=(window.innerHeight-document.querySelector('[id*=hb_scene_header]').clientHeight)+"px";
			}else{
				hb_notification_div_65456.style.height=(window.innerHeight-50)+"px";
			}

			hb_notification_div_65456.style.transform="scale(1,1)";
			hb_notification_div_65456.style.opacity="1";

			//hb_notification_logo_65456.style.backgroundColor="#ffb94a";
			hb_notification_logo_65456.style.backgroundColor="#5ac";
			hb_notification_logo_65456.style.backgroundImage="url('/images/notification_logo_white.png')";
			hb_notification_logo_65456.style.boxShadow="#bef 0px 0px 2px 3px";

			bln_expand_hb_user_header_notification_3461_showNotificationDiv = true;
		}else{
			hb_notification_div_65456.style.transform="scale(0,1)";
			hb_notification_div_65456.style.opacity="0.3";

			hb_notification_logo_65456.style.backgroundColor="";
			hb_notification_logo_65456.style.backgroundImage="";
			hb_notification_logo_65456.style.boxShadow="";

			bln_expand_hb_user_header_notification_3461_showNotificationDiv = false;
		}
	}

	function change_hb_user_header_notification_3461_logo_number(hb_notification_number){
		hb_notification_number=hb_notification_number.trim();
		var hb_notification_number_to_be=0;
		if(hb_notification_number.substr(0,1) == "+"){
			hb_notification_number_to_be=parseInt(hb_notification_logo_number_65456.innerHTML)+parseInt(hb_notification_number.substr(1));
		}else{
			if(hb_notification_number.substr(0,1) == "-"){
				hb_notification_number_to_be=parseInt(hb_notification_logo_number_65456.innerHTML)-parseInt(hb_notification_number.substr(1));
				if(hb_notification_number_to_be < 0){
					hb_notification_number_to_be=0;
				}
			}else{
				hb_notification_number_to_be=hb_notification_number;
			}
		}

		hb_notification_logo_number_65456.innerHTML=hb_notification_number_to_be;
		document.querySelector("#hb_user_header_notification_3461_div #notification_count_number_4654").innerHTML=hb_notification_number_to_be;
		int_hb_user_header_notification_3461_logo_number=hb_notification_number_to_be;

		if(parseInt(hb_notification_number_to_be) > 0){
			hb_notification_logo_number_65456.style.transform="scale(1,1)";
		}else{
			hb_notification_logo_number_65456.style.transform="scale(0,0)";
			document.querySelector("#hb_user_header_notification_3461_div #clear_all_but_567").disabled=true;
		}
	}

	function close_notification_element(obj){
		obj.style.transform="scale(0,0)";
		var obj_to_close_45gh5t = obj.parentNode.parentNode.parentNode;

		obj_to_close_45gh5t.style.height=obj_to_close_45gh5t.clientHeight+"px";
		setTimeout(function (){
			obj_to_close_45gh5t.style.height="0px";
			obj_to_close_45gh5t.style.opacity="0.6";
			obj_to_close_45gh5t.style.transform="translateX(40%) scale(0.2,0.2)";
		},0);

		setTimeout(function(){
			obj_to_close_45gh5t.outerHTML="";
		},300);

		change_hb_user_header_notification_3461_logo_number("-1");
	}

	function clear_all_notification_element(){
		var close_notification_element_buttons_6554se4 = document.querySelectorAll("#hb_user_header_notification_3461_div #notification_area_ty7g744fg4iii .notification_element .notification_cross_btn_65sdf5s6");

		var delay_time_f64g46=(1000/close_notification_element_buttons_6554se4.length);

		for(var i=0; i < close_notification_element_buttons_6554se4.length; i++){
			setTimeout(function (i_nth){
				close_notification_element(close_notification_element_buttons_6554se4[i_nth]);
			},i*delay_time_f64g46,i);
		}
	}

</script>
