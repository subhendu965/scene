<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17012;
$hb_folder_layer=1;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//include scene init
include  $rootpath."scene/scene_init.php";
$_SESSION['hb_scene']['show_details_541']="loKm2Pd";
$_SESSION['hb_scene']['comments']="Lmk69a";
?>
<html>
<head>
	<title>Scene</title>
	<link rel="shortcut icon" href="/images/scene_logo_title.png" />
	<meta name="viewport" content="width=device-width" />
</head>
<body>
<?php ///////cover div/////////////////?>
<div id="top_cover_1230"></div>
<style>
	#top_cover_1230{
		position:fixed;
		left:0px;
		top:0px;
		width:100%;
		height:100%;
		background-color:rgba(0,0,0,0.8);
		z-index: 200;
		display: none;

	}
</style>
<?php ///////end of cover div //////////////?>


<?php /////////////////////more... div ?>
<style>
#hb_original_download_557{
	position: fixed;
	z-index: 201;
	background-color: white;
	padding:5px;
	border-radius: 5px;
	border:1px solid black;
	height:70%;
	width:50%;
	display: none;
}
#hb_original_download_557 #hb_more_download_header_254{
	padding:10px;
	text-align: center;
	border-bottom:1px solid gray;
}
#hb_original_download_557 #hb_more_download_header_254 #hb_more_download_title_742{
	font-size: 15px;
	font-weight: bold;
}
#hb_original_download_557 #hb_more_download_cross_77{
	float:right;
	cursor: hand;
	padding:5px;
	border-radius: 100%;
	width:15px;
	height:15px;
	font-size: 12px;
	transition: background 0.3s;
}
#hb_original_download_557 #hb_more_download_cross_77:hover{
	background:red;
	color:white;
}
#hb_original_download_557 #hb_more_download_article_469{
	padding:10px;

}
#hb_original_download_557 #hb_more_download_article_469 #hb_more_download_size_indicator_552{
	float: right;
	font-size: 10px;
}
#hb_original_download_557 #hb_more_download_viewer_5667 #image{
	background-color:#345;
	background-size:contain;
	background-position:center center;
	background-repeat:no-repeat;
	overflow:auto;
	width:100%;
	height:70%;
	border:1px solid black;
}
#hb_original_download_557 #hb_more_download_article_469 #hb_more_download_size_856{
	padding-bottom: 5px;
}
#hb_original_download_557 #hb_more_download_article_469 #hb_more_download_type_497{
	padding-top:15px;
}
#hb_original_download_557 #hb_more_download_article_469 #hb_more_download_type_497 #hb_more_download_do_152{
	float:right;
}
#hb_original_download_557 #hb_more_download_article_469 #hb_more_download_type_497 #hb_more_download_do_152 a{
	text-decoration: none;
	border:1px solid #054e8c;
	background-color:#054e8c;
	color:white;
	padding:5px;
	border-radius: 3px;
	box-shadow: rgba(120,120,120,0.6) 2px 2px 3px;
	transition: background 0.3s;
}
#hb_original_download_557 #hb_more_download_article_469 #hb_more_download_type_497 #hb_more_download_do_152 a:hover{
	background-color: #076cc1;
}
</style>

<script>
	function close_hb_original_download_557() {
		document.querySelector("#hb_original_download_557").style.display="none";
		document.querySelector("#top_cover_1230").style.display="none";
	}
</script>

<div id="hb_original_download_557">
	<header id="hb_more_download_header_254">

	<div id="hb_more_download_cross_77" onClick="close_hb_original_download_557()">X</div>
	<div id="hb_more_download_title_742">Original Image is not available now.</div>

	</header>
	<article>
		Download of original image is not available now. You will be notified when it will be available.
	</article>
	<footer>
		Hazra Brothers
	</footer>
</div>
<?php /////////////////////end of more... div ?>


<script>
/*-------------  Starting of circle to square ----------------------------------------------
------------------------------------------------------------------------------------------*/
/*
Wait_Wheel_CubicState = true;
Wait_Wheel_rotate = 0;


setInterval(Wait_Wheel_Transition,1000);

function Wait_Wheel_Transition(){
	Wait_Wheel = document.querySelector("#Splash_Screen>#logo>#Wait_Wheel>div");
	if(Wait_Wheel){

		if(Wait_Wheel_CubicState){
			Wait_Wheel.style.background = "#0a89a4";
			Wait_Wheel.style.borderRadius = "100px";
			Wait_Wheel_CubicState = false;
		}else{
			Wait_Wheel.style.background = "#0a546c";
			Wait_Wheel.style.borderRadius = "0px";
			Wait_Wheel_CubicState = true;
		}

		Wait_Wheel_rotate++;
		Wait_Wheel.style.transform="rotate("+(Wait_Wheel_rotate*180)+"deg)";
	}
}


*/
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

/*------- for wait wheel in show_details ------------/

			Wait_Wheel_CubicState_ul = true;
			Wait_Wheel_rotate_ul = 0;

			setInterval(Wait_Wheel_Transition_ul,1000);

			function Wait_Wheel_Transition_ul(){

					Wait_Wheel_ul = document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line_ul #Splash_Screen_ul>#logo>#Wait_Wheel>div");
					if(Wait_Wheel_ul){

						document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line_ul").style.opacity = 1;
						document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line_ul #hb_7458_div_main_inner #waitWheel_div").style.height=document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_image").clientHeight+"px";
						document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line_ul").style.top=(-1*document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_image").clientHeight)+"px";



						if(Wait_Wheel_CubicState_ul){
							Wait_Wheel_ul.style.background = "rgba(255,255,255,0.65)";
							Wait_Wheel_ul.style.borderRadius = "100px";
							Wait_Wheel_CubicState_ul = false;
						}else{
							Wait_Wheel_ul.style.background = "rgba(255,255,255,0.85)";
							Wait_Wheel_ul.style.borderRadius = "0px";
							Wait_Wheel_CubicState_ul = true;
						}

						Wait_Wheel_rotate_ul++;
						Wait_Wheel_ul.style.transform="rotate("+(Wait_Wheel_rotate_ul*180)+"deg)";
					}
				}
/*------- end of for wait wheel in show_details ------------*/
</script>
<?php ///////////////////////////////////////////Main page Style tag starts here////////////////////////////////////////// ?>
<style>
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
	/*background:url("http://hazrabrothers.com/images/background/texture/hg2.png") repeat fixed;
	background-size: auto;
	background-position: center center;
	background-color:#fafafa;*/
}
#main_page{
	margin-left:auto;
}

#main_area{
	position: relative;
	text-align:center;
	margin-left:auto;
	width:100%;
	transition:width 0.3s, padding-top 0.3.s;
}



/*::-webkit-scrollbar{
	width:10px;
	background:transparent;
}
::-webkit-scrollbar-track{
	background:#e7e7e7;
	border:1px solid #ababab;
	box-shadow:rgba(120,120,120,0.8) 0px 0px 5px inset;
}
::-webkit-scrollbar-thumb{
	background:#0994b7;
	box-shadow:rgba(80,80,80,0.8) 0px 0px 6px;
}*/

#hb_scene_image_viewer{
	width:0%;
	height:0%;
	position:fixed;
	z-index:65;
	overflow:hidden;
	font-family:montserrat_regular;
	box-shadow:rgba(0,0,0,0.5) 4px 4px 5px;
	transition:width 0.3s, height 0.3s;
}

#hb_scene_image_viewer #hb_scene_image_viewer_div{
	overflow:hidden;
	height:100%;
}


</style>
<?php ///////////////////////////////////////////Main PageStyle tag starts here//////////////////////////////////////////// ?>

<?php
//////////////////////////////////////include header///////////////////////////////////////////////
include  $rootpath."scene/header.php";
//////////////////////////////////////////////////////////////////////////////////////////////////
?>

<?php ///////////////////////////////////////////main page area/////////////////////////////////////////// ?>

<div id="main_page">
<div id='hb_scene_image_viewer' >

	<div id="hb_scene_image_viewer_div">


		<style>

		@media screen and (min-width:900px){

		}
		@media screen and (max-width:899px){

		}


				#hb_scene_image_viewer #hb_scene_image_viewer_image{
					background-color:#345;
					background-size:contain;
					background-position:center center;
					background-repeat:no-repeat;
					overflow:auto;
					width:100%;
					height:55%;

				}
				#hb_scene_image_viewer #hb_scene_image_viewer_header{
					background:#269;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_collapse{
					float:right;
					padding:10px 15px;
					background:transparent;
					transition:background 0.5s;
					height:19px;
					width:19px;
					text-align:center;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_collapse:hover{
					background:#FF4B1E;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_collapse_a{
					font-size:15px;
					text-decoration:none;
					color:white;
				}
				/**************************************************************************/
				/**************************************************************************/
				#hb_scene_image_viewer #hb_scene_image_viewer_rating{
					float:right;
					padding:10px 35px 10px 15px;
					color:white;
					height:19px;
					background:url('/images/logo_rating.png');
					background-repeat:no-repeat;
					background-size:auto 50%;
					background-position:86% center;

					cursor:pointer;
					transition:background 0.3s;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details{
					position:absolute;
					right:70px;
					height:0px;
					width:0px;
					opacity:0;
					margin:0px 5px 0px 0px;
					overflow:hidden;
					transition:height 0.3s, width 0.3s, right 0.3s, opacity 0.3s;
					font-size:13px;
				}


				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main{
					height:133px;
					margin:0px 5px 5px 5px;
					padding:10px;
					background:white;
					border:1px solid rgba(0,0,0,0.5);
					border-radius:5px;
					box-shadow:rgba(0,0,0,0.5) -2px 2px 3px;

				}

				/******************************************************************************************/
				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257{
					font-size:11px;
					height:15px;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257 .hb_rate_progress_text{
					display:inline-block;
					float:left;
					width:25%;
					background:url('/images/logo_rating.png');
					background-repeat:no-repeat;
					background-size:auto 80%;
					background-position:55% center;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257 .hb_rate_progress_6501{
					display:inline-block;
					width:50%;
					height:3px;
					margin:6px 0px 0px 0px;
					background:#bbb;
					float:left;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257 .hb_rate_people_num{
					width:25%;
					float:right;
					text-align:right;
				}

				/*-------------------------------------------------------------------------*/

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(1) .hb_rate_progress_6501 .hb_rate_progress_6501_fill{
					height:3px;
					background:#00a600;
					width:0%;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(2) .hb_rate_progress_6501 .hb_rate_progress_6501_fill{
					height:3px;
					background:#84ff00;
					width:0%;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(3) .hb_rate_progress_6501 .hb_rate_progress_6501_fill{
					height:3px;
					background:#ffff00;
					width:0%;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(4) .hb_rate_progress_6501 .hb_rate_progress_6501_fill{
					height:3px;
					background:#fd7828;
					width:0%;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(5) .hb_rate_progress_6501 .hb_rate_progress_6501_fill{
					height:3px;
					background:#ff0000;
					width:0%;
				}

				/*-------------------------------------------------------------------------*/

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257 .hb_rate_people_num{
					display:inline-block;
				}

				/*-------------------------------------------------------------------------*/

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(1) .hb_rate_people_num{
				color:#00a600;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(2) .hb_rate_people_num{
				color:#6ebd2f;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(3) .hb_rate_people_num{
				color:#c3c122;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(4) .hb_rate_people_num{
				color:#fd7828;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(5) .hb_rate_people_num{
				color:#ff0000;
				}
				/*-------------------------------------------------------------------------*/

				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main #hb_rate_of_mine_text{
					margin-top:8px;
					padding-top:5px;
					text-align:center;
					border-top:1px solid rgba(0,0,0,0.4);
					font-size:13px;
					cursor:default;
				}

				/*-----------------------------------------*/
				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main #hb_rate_of_mine_text #div_rateBut_1457{
					margin-top:8px;
					cursor:default;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main #hb_rate_of_mine_text #div_rateBut_1457 button[id^='rateBut_1457_']{
					display:inline-block;
					padding:5px;
					width:20px;
					height:20px;
					background-color:transparent;
					border:none;
					cursor:pointer;
					background:url('/images/logo_rating_gray.png');
					background-repeat:no-repeat;
					background-size:auto 82%;
					background-position:center 25%;
					border:2px solid transparent;
					border-radius:30px;
					transition:border 0.3s, box-shadow 0.3s;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main #hb_rate_of_mine_text #div_rateBut_1457 button[id^='rateBut_1457_']:hover{
					border:2px solid gold;
					box-shadow:gold 0px 0px 5px;
				}
/***************************************************************************/

				#hb_scene_image_viewer #hb_scene_image_viewer_name{
					color:white;
					padding:10px;
					height:19px;
					font-size:15px;
					overflow:hidden;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_details{
					/*position:relative;*/
					background: #345;
					background:-webkit-linear-gradient(top,#345, #5c738a);
					background:-moz-linear-gradient(top,#345, #5c738a);
					background:-ms-linear-gradient(top,#345, #5c738a);
					font-size:13px;
					color:white;
					overflow:auto;
					border-top:2px solid rgba(255,255,255,0.5);
				}
				/*-------------------**----------------------*/

				#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line{
					position:relative;
					height:0px;
					top:-42px;
					visibility:hidden;
					opacity:0;
					transition: visibility 0.3s, opacity 0.3s;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line #hb_7458_div_main{
					width:100%;
					height:30px;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line #hb_7458_div_main_inner{
					width:100%;
					text-align:right;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line #hb_7458_div_main_inner>div[id^=hb_7458_]{
					height:30px;
					width:30px;
					display: inline-block;
					margin:0px 10px 0px auto;

					background-repeat:no-repeat;
					background-size:auto 80%;
					background-position:0% center;
					cursor:pointer;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line #hb_7458_div_main_inner>#hb_7458_full_screen{
					background-image:url('/images/logo_full_screen.png');
					transition:transform 0.3s;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line #hb_7458_div_main_inner>#hb_7458_full_screen:hover{
					transform:scale(1.2);
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line #hb_7458_div_main_inner>#hb_7458_new_tab{
					background-image:url('/images/open_new_tab_logo.png');
					transition:transform 0.3s;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line #hb_7458_div_main_inner>#hb_7458_new_tab:hover{
					transform:rotate(30deg) scale(1.2);
				}
				/*-------------------**---------------------*/
				/*--------------------*/
				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top{
					padding:5px;
					border-bottom:1px solid rgba(255,255,255,0.2);
					font-size:15px;

				}

				#hb_scene_image_viewer #hb_scene_image_viewer_details .hb_scene_image_viewer_inside_top_line{
					display:inline-block;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_view{
					padding:0px 5px 0px 25px;
					text-align:right;
					background:url('/images/logo_view.png');
					background-repeat:no-repeat;
					background-size:auto 80%;
					background-position:0% center;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_download{
					padding:0px 8px 0px 25px;
					text-align:right;
					background:url('/images/logo_download.png');
					background-repeat:no-repeat;
					background-size:auto 80%;
					background-position:0% center;
					border-right:1px solid rgba(255,255,255,0.2);
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_uploaded_by{
					padding:0px 5px 0px 2px;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_uploader_logo{
          			width:18px;
					height:18px;
          			margin:0px 0px 0px 5px;
					background:url('/images/jjkl.JPG');
					background-color: #ccc;
					background-repeat:no-repeat;
					background-size:cover;
					background-position:center center;
					border-radius: 200px;
				}

             /*----------------------------------------------------------------------------------*/


        #hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_download_link{
          position: relative;
          top:-1px;
          width:20px;
          height:20px;
          float:right;
          background:url('/images/logo_download_link.png');
					background-repeat:no-repeat;
					background-size:cover;
          cursor:pointer;
					background-position:center center;
					margin-right:10px;
          transition: transform 0.3s;
        }



        #hb_scene_image_viewer #hb_scene_image_viewer_download_link_details{
					position:absolute;
					right:70px;
					height:0px;
					width:0px;
					opacity:0;
					margin:5px 5px 0px 0px;
					overflow:hidden;
					transition:height 0.3s, width 0.3s, right 0.3s, opacity 0.3s;
					font-size:12px;
				}


                #hb_scene_image_viewer #hb_scene_image_viewer_download_link_details > #hg564_download_main{
					/*height:138px;*/
					margin:0px 5px 5px 5px;
					padding:10px;
					background:white;
          			color:black;
					border:1px solid rgba(0,0,0,0.5);
					border-radius:5px;
					box-shadow:rgba(0,0,0,0.5) -2px 2px 3px;

				}

        #hb_scene_image_viewer #hb_scene_image_viewer_download_link_details > #hg564_download_main #fsk45>a>li{
          display:block;
          padding:3px 3px 3px 6px;
          cursor: pointer;
        	transition: background 0.3s, color 0.3s;
        }
				 #hb_scene_image_viewer #hb_scene_image_viewer_download_link_details > #hg564_download_main #fsk45>a>li:hover{
           background: #57a;
           color:white;
        }
        #hb_scene_image_viewer #hb_scene_image_viewer_download_link_details > #hg564_download_main #fsk97>#fs{
          padding:3px 1px 3px 6px;
          width:50%;
          cursor: pointer;
          transition: background 0.3s, color 0.3s;
        }
        #hb_scene_image_viewer #hb_scene_image_viewer_download_link_details > #hg564_download_main #fsk97>#fs:hover{
           background: #f50;
           color:white;
        }
       #hb_scene_image_viewer #hb_scene_image_viewer_download_link_details > #hg564_download_main #fsk97>#more{
          float:right;
          padding:3px 3px 3px 6px;
        	border-left:1px solid rgba(0,0,0,1);
          width:40%;
          cursor: pointer;
          transition: background 0.3s, color 0.3s;
        }
        #hb_scene_image_viewer #hb_scene_image_viewer_download_link_details > #hg564_download_main #fsk97>#more:hover{
           background: #0a6;
					 color:white;
        }
            /******************************************************************************************/

				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_liked{
					float:right;
					text-align:right;
					margin-right:8px;
					cursor:default;
					border-right:1px solid rgba(255,255,255,0.2);
				}

        #hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_liked #icon{
          display: inline-block;
          width:18px;
          height:18px;
          cursor:pointer;
					background:url('/images/logo_like.png');
					background-repeat:no-repeat;
					background-size:auto 80%;
					background-position:0% center;
          transition: transform 0.2s;
      }


      #hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_liked #icon:hover{
          transform: translateY(-2px) scale(1.3);
      }
      #hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_liked #text{
					padding:0px 8px 0px 2px;
          display: inline-block;
      }


				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_unliked{
					float:right;
					text-align:right;
					cursor:default;
				}

        #hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_unliked #icon{
          display: inline-block;
          width:18px;
          height:18px;
          cursor:pointer;
					background:url('/images/logo_unlike.png');
					background-repeat:no-repeat;
					background-size:auto 80%;
					background-position:0% center;
          transition: transform 0.2s;
      }
        #hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_unliked #icon:hover{
          transform: translateY(2px) scale(1.3);
      	}

        #hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_unliked #text{
					padding:0px 8px 0px 2px;
          display: inline-block;
        }


				/*-------------------------*/
				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_middle{
					/*position: relative;*/
				}

				#hb_scene_image_viewer_tab_header{
					text-align: center;
				}
				div[id^='HB7845_tab_header_']{
					display: inline-block;
					padding:2px 8px;
					cursor:pointer;
					transition: border-bottom 0.3s;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_file_description{
					float:right;
					width:30%;
					font-size:12px;
					padding:2px 5px;
					padding-left:15px;

				}
				/*--------------------------------------------------------------------------------------*/
				#hb_scene_image_viewer #hb_scene_image_viewer_details [id^=hb_scene_image_viewer_file_description_]{
					border-bottom:1px solid rgba(255,255,255,0.2);
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_details .HB89CDi_keyword{
					display:inline-block;
					float:left;
					width:49%;
					padding:3px 0px;
				}

				#hb_scene_image_viewer #hb_scene_image_viewer_details .HB89CDi_value{
					display:inline-block;
					float:right;
					width:49%;
					padding:3px 0px;
					font-style:italic;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_file_description_quality > div:last-child{
					background:#37a;
					color:white;
					text-align:center;
					font-style:normal;
				}


				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_description_box{
					padding:10px;

				}

				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_bottom_line{
					clear:both;
					padding:5px 0px 10px 0px;
					border-top:1px solid rgba(255,255,255,0.2);
					/*position:absolute;
					bottom:0px;*/
					width: 100%;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_bottom_line #HB_5699_hb{
					float:right;
					color:rgba(255,255,255,0.5);
					padding-right: 10px;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_bottom_line .links562p{
					float:right;
					padding-right: 5px;
					margin-right: 5px;
					border-right: 1px solid rgba(255,255,255,0.5);
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_bottom_line .links562p a{
					color:rgba(255,255,255,0.5);
					text-decoration: none;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_bottom_line .links562p a:hover{
					text-decoration: underline;
				}
				#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_bottom_line #HB_5699_cpr{
					font-size:10px;
					color:rgba(255,255,255,0.5);
					padding-left: 10px;
				}

				/*************************************************************************/
				#notification_pop_up_6g76df7g{
					position:fixed;
					top:50px;
					left:35%;
					width:30%;
					z-index: 250;
					background: rgba(0,0,0,0.9);
					border-width:0px 1px 1px 1px;
					border-style:solid;
					border-color:rgba(255,255,255,0.4);
					border-radius:0px 0px 8px 8px;
					box-shadow: rgba(0,0,0,0.6) 2px 2px 3px;
					color:white;
					padding:5px;
					opacity: 0;
					transform-origin: 50% 0%;
					transform: scale(1,0);
					transition: transform 0.3s, opacity 0.3s;
				}
				#notification_pop_up_6g76df7g #img_div{
					float: left;
					display: none;
					width:100px;
					height:100px;
					margin:4px 8px 4px 4px;
					background-size: contain;
					background-position:center center;
					background-color: rgba(255,255,255,0.2);
					background-repeat: no-repeat;
				}
				#notification_pop_up_6g76df7g #main_div{
					display: inline-block;
					font-size:15px;
					padding:3px;
				}
				#notification_pop_up_6g76df7g .button_notify_pop_up{
					float:right;
					bottom:5px;
					right:5px;
					padding:3px 5px;
					font-size: 13px;
					background-color: rgba(60,150,220,0.8);
					color:white;
					cursor: pointer;
					border:2px solid rgba(255,255,255,0.35);
					border-radius:4px;
					transition: color 0.3s, background 0.3s;
				}
				#notification_pop_up_6g76df7g .button_notify_pop_up:hover{
					background-color: rgba(200,60,20,0.8);
				}
				#notification_pop_up_6g76df7g #psudo_button_ok_div{
					color:transparent;
					padding:5px 7px;
					font-size: 15px;
					display: none;
					overflow: hidden;
				}
				</style>

				<div id="hb_scene_image_viewer_header">
				<a href='javascript:hb_scene_collapse_image_viewer()' id='hb_scene_image_viewer_collapse_a'><div id='hb_scene_image_viewer_collapse'>X</div></a>

				<div id='hb_scene_image_viewer_rating' onmouseover='hb_scene_image_viewer_show_rating_details_over(this)' onmouseout='hb_scene_image_viewer_show_rating_details_over(this)'  onclick='hb_scene_image_viewer_show_rating_details(this)'>--&nbsp;&nbsp;&nbsp;</div>

				<div id='hb_scene_image_viewer_rating_details'>
					<div id='hb_ju24_main'>
						<div>
							<div class='hb_rate_each_1257'>
								<div class='hb_rate_progress_text'>&nbsp;&nbsp;5</div>
								<div class='hb_rate_progress_6501'>
									<div class='hb_rate_progress_6501_fill'>&nbsp;</div>
								</div>
								<div class='hb_rate_people_num'>--</div>
							</div>
							<div class='hb_rate_each_1257'>
								<div class='hb_rate_progress_text'>&nbsp;&nbsp;4</div>
								<div class='hb_rate_progress_6501'>
									<div class='hb_rate_progress_6501_fill'>&nbsp;</div>
								</div>
								<div class='hb_rate_people_num'>--</div>
							</div>
							<div class='hb_rate_each_1257'>
								<div class='hb_rate_progress_text'>&nbsp;&nbsp;3</div>
								<div class='hb_rate_progress_6501'>
									<div class='hb_rate_progress_6501_fill'>&nbsp;</div>
								</div>
								<div class='hb_rate_people_num'>--</div>
							</div>
							<div class='hb_rate_each_1257'>
								<div class='hb_rate_progress_text'>&nbsp;&nbsp;2</div>
								<div class='hb_rate_progress_6501'>
									<div class='hb_rate_progress_6501_fill'>&nbsp;</div>
								</div>
								<div class='hb_rate_people_num'>--</div>
							</div>
							<div class='hb_rate_each_1257'>
								<div class='hb_rate_progress_text'>&nbsp;&nbsp;1</div>
								<div class='hb_rate_progress_6501'>
									<div class='hb_rate_progress_6501_fill'>&nbsp;</div>
								</div>
								<div class='hb_rate_people_num'>--</div>
							</div>
						</div>

						<div id='hb_rate_of_mine_text'>
							Give your rating
							<div id='div_rateBut_1457'>
								<button id='rateBut_1457_1' onclick="rate_the_image_kl65p('1')">&nbsp;</button>
								<button id='rateBut_1457_2' onclick="rate_the_image_kl65p('2')">&nbsp;</button>
								<button id='rateBut_1457_3' onclick="rate_the_image_kl65p('3')">&nbsp;</button>
								<button id='rateBut_1457_4' onclick="rate_the_image_kl65p('4')">&nbsp;</button>
								<button id='rateBut_1457_5' onclick="rate_the_image_kl65p('5')">&nbsp;</button>
							</div>
						</div>
					</div>
				</div>


				<div id='hb_scene_image_viewer_name'>Loading ...</div>

				</div>

				<div id='hb_scene_image_viewer_image' onMouseOver='hb_scene_image_viewer_show_bottom_floating_line(true);' onMouseOut='hb_scene_image_viewer_show_bottom_floating_line(false);'>&nbsp;</div>

				<div id='hb_scene_image_viewer_floating_button_line' onMouseOver='hb_scene_image_viewer_show_bottom_floating_line(true);' onMouseOut='hb_scene_image_viewer_show_bottom_floating_line(false);'>
					<div id='hb_7458_div_main'>
						<div id='hb_7458_div_main_inner'>
							<div id='hb_7458_full_screen'>&nbsp;</div>
							<div id='hb_7458_new_tab'>&nbsp;</div>
						</div>
					</div>
				</div>

				<div id='hb_scene_image_viewer_details'>

				<div id='hb_scene_image_viewer_top'>
					<div id='hb_scene_image_viewer_details_view' class='hb_scene_image_viewer_inside_top_line'>
						--
					</div>
					<div id='hb_scene_image_viewer_details_download' class='hb_scene_image_viewer_inside_top_line'>
						--
					</div>
               <div id='hb_scene_image_viewer_details_uploader_logo' class='hb_scene_image_viewer_inside_top_line'>
                     &nbsp;
               </div>
					<div id='hb_scene_image_viewer_details_uploaded_by' class='hb_scene_image_viewer_inside_top_line'>
						-----
					</div>
					<div id='hb_scene_image_viewer_details_unliked' class='hb_scene_image_viewer_inside_top_line'>
						<div id="icon" onclick="like_the_image_5214('unlike')">&nbsp;</div>
                        <div id="text">--</div>
					</div>
					<div id='hb_scene_image_viewer_details_liked' class='hb_scene_image_viewer_inside_top_line'>
                        <div id="icon" onclick="like_the_image_5214('like')">&nbsp;</div>
                        <div id="text">--</div>
					</div>

               <div id='hb_scene_image_viewer_download_link' class='hb_scene_image_viewer_inside_top_line'  onmouseover='hb_scene_image_viewer_show_download_link_details_over(this)' onmouseout='hb_scene_image_viewer_show_download_link_details_over(this)'  onclick='hb_scene_image_viewer_show_download_link_details(this)'>
						&nbsp;
					</div>
                    <div id='hb_scene_image_viewer_download_link_details'>
                        <div id="hg564_download_main">
                            <div id="fsk45">

                            </div>

                           <div id="fsk97">
                               <div id="more" onClick="hb_download_link_click();">Download</div>
                               <div id="fs" onClick="hb_download_original_click()">Original</div>

                            </div>

                        </div>
                    </div>

				</div>


<style>

</style>


				<div id='hb_scene_image_viewer_middle'>

					<div id='hb_scene_image_viewer_tab_header'>

						<div id='HB7845_tab_header_1' onClick="HB7845_tab_show(this);">Story</div>
						<div id='HB7845_tab_header_2' onClick="HB7845_tab_show(this);">Overview</div>
						<div id='HB7845_tab_header_3' onClick="HB7845_tab_show(this);">Comments</div>

					</div>


					<div id='hb_scene_image_viewer_HB7845_tab_1'>

					<div id='hb_scene_image_viewer_description_box'>
					Loading ...
					</div>

					</div>

					<div id='hb_scene_image_viewer_HB7845_tab_2'>
					<div id='hb_scene_image_viewer_file_description'>

						<div id='hb_scene_image_viewer_file_description_album'>
							<div class='HB89CDi_keyword' >Album</div>
							<div class='HB89CDi_value' >---</div>
							<div style="clear:both; height:0px; font-size:1px; overflow:hidden;">&nbsp;</div>
						</div>

						<div id='hb_scene_image_viewer_file_description_category'>
							<div class='HB89CDi_keyword' >Category</div>
							<div class='HB89CDi_value' >---</div>
							<div style="clear:both; height:0px; font-size:1px; overflow:hidden;">&nbsp;</div>
						</div>

						<div id='hb_scene_image_viewer_file_description_quality'>
							<div class='HB89CDi_keyword' >Quality</div>
							<div style="text-align:center;" class='HB89CDi_value' >&nbsp;---</div>
							<div style="clear:both; height:0px; font-size:1px; overflow:hidden;">&nbsp;</div>
						</div>

						<div id='hb_scene_image_viewer_file_description_type'>
							<div class='HB89CDi_keyword' >Type</div>
							<div class='HB89CDi_value' >---</div>
							<div style="clear:both; height:0px; font-size:1px; overflow:hidden;">&nbsp;</div>
						</div>

						<div id='hb_scene_image_viewer_file_description_imageSize'>
							<div class='HB89CDi_keyword' >Image Size</div>
							<div class='HB89CDi_value' >---</div>
							<div style="clear:both; height:0px; font-size:1px; overflow:hidden;">&nbsp;</div>
						</div>

						<div id='hb_scene_image_viewer_file_description_fileSize'>
							<div style="border:none;" class='HB89CDi_keyword' >Size</div>
							<div style="border:none;" class='HB89CDi_value' >---</div>
							<div style="clear:both; height:0px; font-size:1px; overflow:hidden;">&nbsp;</div>
						</div>

					</div>

					</div>

					<div id='hb_scene_image_viewer_HB7845_tab_3'>

					</div>


				</div>



				<!-- <div id="psudo_hb_scene_image_viewer_bottom_line">&nbsp;</div> -->

				<div id='hb_scene_image_viewer_bottom_line' >
					<div id='HB_5699_hb'>Hazra Brothers</div>
					<div id='HB_5699_rpt' class='links562p'><a href="#">Report</a></div>
					<div id='HB_5699_terms' class='links562p'><a href="#">Terms of use</a></div>
					<div id='HB_5699_cpr'>Pictures May be subjected to copyright</div>

				</div>

				</div>
	</div>

</div>





<div id="main_area" onscroll='hb_scene_main_area_scroll(this);'>
</div>

	</div>

	<div id="notification_pop_up_6g76df7g">
		<style id="style_65fth6f">

		</style>
		<div id="img_div">&nbsp;</div>
		<div id='main_div'>&nbsp;</div>
		<div id="button_ok_div" class="button_notify_pop_up" onclick="hide_notification_pop_up_g4h4x()">OK</div>
		<div id="psudo_button_ok_div">&nbsp;</div>
	</div>

<?php ///////////////////////////////////////////end of main page area/////////////////////////////////////////// ?>

<div id="footer_blank_0032">&nbsp;</div>
<?php
///////////////////////////////////////////////include footer/////////////////////////////////////////////////////
include  $rootpath."scene/footer.php";
?>

<style>
#main_area{
   /* min-height:800px;*/
}
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

	document.getElementById("main_area").innerHTML=splashScreen1;

	var hb_scene_image_scroll_timer;

	var bln_hb_scene_image_viewer_state=false;
	var bln_hb_scene_image_viewer_rating_details=false;
	var bln_hb_scene_image_viewer_rating_details_over=false;

	var bln_hb_scene_image_viewer_download_link_details=false;
	var bln_hb_scene_image_viewer_download_link_details_over=false;

	var hb_scene_image_viewer_tab_selected="HB7845_tab_header_1";

	///////////////////////////////////////////////////////////////////

	//////////////////////////////////////////////////////////////
	////rating section ///////////////////////////////////////////
	//////////////////////////////////////////////////////////////
hb_show_details_rating_buttons_all=document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main #hb_rate_of_mine_text #div_rateBut_1457");
hb_show_details_rating_numbers_all=document.querySelectorAll("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257");
var rating_gold_icons_current=new Array();

for(var kj=0; kj<hb_show_details_rating_buttons_all.querySelectorAll("[id^=rateBut_1457]").length; kj++){
	hb_show_details_rating_buttons_all.querySelectorAll("[id^=rateBut_1457]")[kj].addEventListener("mouseover",function (){
		rating_image_over_state(this,true);
	},false);
	hb_show_details_rating_buttons_all.querySelectorAll("[id^=rateBut_1457]")[kj].addEventListener("mouseout",function (){
		rating_image_over_state(this,false);
	},false);
}

	function rating_image_over_state(obj,over_out){
		if(over_out){
			for(var fd=0; fd<obj.id.substr("-1"); fd++){
				hb_show_details_rating_buttons_all.querySelectorAll("[id^=rateBut_1457]")[fd].style.backgroundImage="url('/images/logo_rating.png')";
			}
		}else{
			for(var fg=0; fg<5; fg++){
				if(rating_gold_icons_current[fg] != '1'){
					hb_show_details_rating_buttons_all.querySelectorAll("[id^=rateBut_1457]")[fg].style.backgroundImage="url('/images/logo_rating_gray.png')";
				}
			}
		}
	}

	function rate_the_image_kl65p(rating){
		//alert(rating);
		var rating_but_6hg56h = hb_show_details_rating_buttons_all.querySelector("button#rateBut_1457_"+rating);

		rating_image_request=new XMLHttpRequest();
		ratingPostString='sqc=pJ94c&rating='+rating+'&';
		ratingPostString+='url='+globalSearchUrl;
		rating_image_request.open('POST','rate_image.php',true);
		rating_image_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		rating_image_request.onreadystatechange=rating_get_response_hu45k;
		rating_image_request.send(ratingPostString);

		rating_but_6hg56h.style.opacity="0.5";
	}

	function rating_get_response_hu45k(){
		if(rating_image_request.status==200 && rating_image_request.readyState==4){
			if(rating_image_request.responseText.substr(0,5)=="Done:"){

				var rating_response_array_hg555kh=rating_image_request.responseText.substr(5).split("~#@#~");
				var tmp458GGhJk=parseInt(rating_response_array_hg555kh[1])+parseInt(rating_response_array_hg555kh[2])+parseInt(rating_response_array_hg555kh[3])+parseInt(rating_response_array_hg555kh[4])+parseInt(rating_response_array_hg555kh[5]);

				document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating").innerHTML=rating_response_array_hg555kh[6];

				var perskk=new Array();
				perskk[0]=0;
				perskk[1]=0;
				perskk[2]=0;
				perskk[3]=0;
				perskk[4]=0;

				if(tmp458GGhJk!=0){
					perskk[0]=Math.round((parseInt(rating_response_array_hg555kh[1])/tmp458GGhJk)*100);
					perskk[1]=Math.round((parseInt(rating_response_array_hg555kh[2])/tmp458GGhJk)*100);
					perskk[2]=Math.round((parseInt(rating_response_array_hg555kh[3])/tmp458GGhJk)*100);
					perskk[3]=Math.round((parseInt(rating_response_array_hg555kh[4])/tmp458GGhJk)*100);
					perskk[4]=Math.round((parseInt(rating_response_array_hg555kh[5])/tmp458GGhJk)*100);
				}

				for(var igg=0; igg<5; igg++){
					hb_show_details_rating_numbers_all[igg].querySelector(".hb_rate_people_num").innerText=rating_response_array_hg555kh[igg+1];
					hb_show_details_rating_numbers_all[igg].querySelector(".hb_rate_progress_6501 .hb_rate_progress_6501_fill").style.width=perskk[igg]+"%";

				}

				change_rating_text_icon_6h4hhg(rating_response_array_hg555kh[0]);
			}else{
					if(rating_image_request.responseText.substr(0,6)=="Error:"){
						change_rating_text_icon_6h4hhg('error');
						show_notification_pop_up_g4h4x(rating_image_request.responseText.substr(6),"","","");
					}
				}
		}
	}

	function change_rating_text_icon_6h4hhg(rate){
		for(var hh=0; hh<5; hh++){
			hb_show_details_rating_buttons_all.querySelectorAll("[id^=rateBut_1457]")[hh].style.backgroundImage="url('/images/logo_rating_gray.png')";
			hb_show_details_rating_buttons_all.querySelectorAll("[id^=rateBut_1457]")[hh].style.opacity="1";
			rating_gold_icons_current[hh]='0';
		}

		if(rate=='1' || rate=='2' || rate=='3' || rate=='4' || rate=='5'){
			for(var jk=0; jk<rate; jk++){
				hb_show_details_rating_buttons_all.querySelectorAll("[id^=rateBut_1457]")[jk].style.backgroundImage="url('/images/logo_rating.png')";
				rating_gold_icons_current[jk]='1';
			}
		}else{

		}
	}

	//////////////////////////////////////////////////////////////
	////like and unlike section //////////////////////////////////
	//////////////////////////////////////////////////////////////
	hb_show_details_like_6574=document.querySelector("  #hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_liked");
	hb_show_details_unlike_6574=document.querySelector("  #hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_unliked");

	function like_the_image_5214(react){
		//alert(react);
		like_image_request=new XMLHttpRequest();
		likePostString='sqc=nm41K&react='+react+'&';
		likePostString+='url='+globalSearchUrl;
		like_image_request.open('POST','like_image.php',true);
		like_image_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		like_image_request.onreadystatechange=like_get_response_p147;
		like_image_request.send(likePostString);

		if(react=="like"){
			hb_show_details_like_6574.querySelector("#icon").style.opacity="0.5";
		}else{
			if(react=="unlike"){
				hb_show_details_unlike_6574.querySelector("#icon").style.opacity="0.5";
			}
		}
	}

	function like_get_response_p147(){
			if(like_image_request.status==200 && like_image_request.readyState==4){
				//alert(like_image_request.responseText)
				if(like_image_request.responseText.substr(0,5)=="Done:"){

					var like_response_array_5hv78v=like_image_request.responseText.substr(5).split("~#@#~");

					hb_show_details_like_6574.querySelector("#text").innerText = like_response_array_5hv78v[1];
					hb_show_details_unlike_6574.querySelector("#text").innerText = like_response_array_5hv78v[2];

					like_unlike_icon_change_84cv8f(like_response_array_5hv78v[0]);

				}else{
						if(like_image_request.responseText.substr(0,6)=="Error:"){
							like_unlike_icon_change_84cv8f('error');
							show_notification_pop_up_g4h4x(like_image_request.responseText.substr(6),"","","");
						}
					}
			}
	}

	function like_unlike_icon_change_84cv8f(react){
		if(react=="like"){
			hb_show_details_like_6574.querySelector("#icon").style.backgroundImage="url('/images/logo_like_active.png')";
			hb_show_details_like_6574.querySelector("#icon").style.opacity="1";

			hb_show_details_unlike_6574.querySelector("#icon").style.backgroundImage="url('/images/logo_unlike.png')";

		}else if(react=="unlike"){
			hb_show_details_unlike_6574.querySelector("#icon").style.backgroundImage="url('/images/logo_unlike_active.png')";
			hb_show_details_unlike_6574.querySelector("#icon").style.opacity="1";

			hb_show_details_like_6574.querySelector("#icon").style.backgroundImage="url('/images/logo_like.png')";

		}else{
			hb_show_details_like_6574.querySelector("#icon").style.opacity="1";
			hb_show_details_unlike_6574.querySelector("#icon").style.opacity="1";

			hb_show_details_like_6574.querySelector("#icon").style.backgroundImage="url('/images/logo_like.png')";
			hb_show_details_unlike_6574.querySelector("#icon").style.backgroundImage="url('/images/logo_unlike.png')";

		}

	}

	////////////////////end of like and unlike section////////////

	///////////////////////////////////////////////
/*

	function hb_scene_image_name_scroll(img){
				if(document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').offsetLeft<-1*parseInt(document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').getBoundingClientRect().width)){
					//clearInterval(hb_scene_image_scroll_timer);
					document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').style.left="";
					document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').style.left=document.querySelector('#'+img.id+' .hb_scene_image_name').getBoundingClientRect().width;
				}
				document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').style.left=document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').offsetLeft-50;

				//document.title=document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').offsetLeft;
				//alert("adsa");

	}

	function hb_over_image(img){
		document.querySelector("#"+img.id+" .hb_scene_image_name").style.opacity="1";
		document.querySelector("#"+img.id+" .hb_scene_image_bottom_div").style.opacity="1";

		if(parseInt(document.querySelector("#"+img.id+" .hb_scene_image_name .imageName .imageNamePre").getBoundingClientRect().width) > parseInt(document.querySelector("#"+img.id+" .hb_scene_image_name .imageName").getBoundingClientRect().width)){

			document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').style.left=(document.querySelector('#'+img.id+' .hb_scene_image_name .imageName').getBoundingClientRect().width)/3;
			hb_scene_image_scroll_timer=setInterval(hb_scene_image_name_scroll,100,img);

		}

	}*/
	/*function hb_out_image(img){
		document.querySelector("#"+img.id+" .hb_scene_image_name").style.opacity="";
		document.querySelector("#"+img.id+" .hb_scene_image_bottom_div").style.opacity="";
		//document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').style.left=0;

		if(parseInt(document.querySelector("#"+img.id+" .hb_scene_image_name .imageName .imageNamePre").getBoundingClientRect().width) > parseInt(document.querySelector("#"+img.id+" .hb_scene_image_name .imageName").getBoundingClientRect().width)){

			document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').style.left=(document.querySelector('#'+img.id+' .hb_scene_image_name .imageName').getBoundingClientRect().width)/3;
			clearInterval(hb_scene_image_scroll_timer);
		}
	}*/




	//function for showing the image
	function hb_scene_show_image(searchUrl){
		////setting up global searchUrl
		globalSearchUrl=searchUrl;

		if(window.innerWidth >= window.innerHeight - document.querySelector("#hb_scene_header").clientHeight){
			document.querySelector('#hb_scene_image_viewer').style.width='50%';
			document.querySelector('#main_area').style.width='50%';
		}else{
			document.querySelector('#hb_scene_image_viewer').style.height=(window.innerHeight-document.querySelector('#hb_scene_header').clientHeight)/1.5+"px";

			document.querySelector('#main_area').style.paddingTop=(window.innerHeight-document.querySelector('#hb_scene_header').clientHeight)/1.5+"px";

			document.querySelector('#hb_scene_image_viewer').style.width='100%';
			document.querySelector('#main_area').style.width='100%';
		}

		//immediate show the image
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_image").style.backgroundImage=document.querySelector("a[href*='"+searchUrl+"']>div>div.hb_scene_image").style.backgroundImage;


		//immediate show name
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_name").innerText=document.querySelector("a[href*='"+searchUrl+"']>div pre.imageNamePre").innerText;

		////open in new tab the image
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line #hb_7458_new_tab").addEventListener("click",function (){
			window.open('http://scene.hazrabrothers.com/scene_viewer/?imageUrl='+globalSearchUrl,"_blank");
		},false);




		//immediate show the waitWheel
		/*if(document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line_ul")){
			document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line_ul").style.opacity = 0;
			Wait_Wheel_rotate_ul = 0;
		}
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line_ul #hb_7458_div_main_inner").style.height=document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_image").clientHeight;
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line_ul").style.top=(-1*document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_image").clientHeight)+"px";
		*/

		//HB7845_tab_show(document.querySelector("#hb_scene_image_viewer_middle #hb_scene_image_viewer_tab_header #HB7845_tab_header_1"));
		HB7845_tab_show(document.querySelector("#hb_scene_image_viewer_middle #hb_scene_image_viewer_tab_header #"+hb_scene_image_viewer_tab_selected));

		//immediate show view and download
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details_view").innerText=document.querySelector("a[href*='"+searchUrl+"']>div div.hb_scene_image_bottom_rvd_view_div").innerText;
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details_download").innerText=document.querySelector("a[href*='"+searchUrl+"']>div div.hb_scene_image_bottom_rvd_download_div").innerText;

		//immediate show rating
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating").innerText=document.querySelector("a[href*='"+searchUrl+"']>div div.hb_scene_image_bottom_rvd_rating_div").innerText;

		//set like unlike icons
		hb_show_details_like_6574.querySelector("#icon").style.opacity="1";
		hb_show_details_like_6574.querySelector("#icon").style.backgroundImage="url('/images/logo_like.png')";

		hb_show_details_unlike_6574.querySelector("#icon").style.opacity="1";
		hb_show_details_unlike_6574.querySelector("#icon").style.backgroundImage="url('/images/logo_unlike.png')";

		//immediate show width X height, filesize
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_file_description_imageSize .HB89CDi_value").innerText=document.querySelector("a[href*='"+searchUrl+"']>div div.hb_scene_image_bottom_size_width_div").innerText + " " + document.querySelector("a[href*='"+searchUrl+"']>div div.hb_scene_image_bottom_size_height_div").innerText;
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_file_description_fileSize .HB89CDi_value").innerText=document.querySelector("a[href*='"+searchUrl+"']>div div.hb_scene_image_bottom_size_filesize_div").innerText;

		//immediate show quality and its background and color
		quality_text_84lk="Unknoun";
		switch(document.querySelector("a[href*='"+searchUrl+"']>div div.hb_scene_image_quality_div").innerText){
			case "L":
				quality_text_84lk="Low";
				break;
			case "M":
				quality_text_84lk="Medium";
				break;
			case "N":
				quality_text_84lk="Normal";
				break;
			case "G":
				quality_text_84lk="Good";
				break;
			case "V":
				quality_text_84lk="Very Good";
				break;
			case "E":
				quality_text_84lk="Excellent";
				break;
			case "O":
				quality_text_84lk="Outstanding";
				break;
		}
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_file_description_quality .HB89CDi_value").innerText=quality_text_84lk;
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_file_description_quality .HB89CDi_value").style.background=document.querySelector("a[href*='"+searchUrl+"']>div div.hb_scene_image_quality_div").style.backgroundColor;
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_file_description_quality .HB89CDi_value").style.color=document.querySelector("a[href*='"+searchUrl+"']>div div.hb_scene_image_quality_div").style.color;

		/*
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details").style.height = document.querySelector("#hb_scene_image_viewer").clientHeight - (document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_image").clientHeight + document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_name").clientHeight);
		*/

		//reset selector
		deselector=document.querySelectorAll(".hb_scene_image_container");
		for(i=0;i<deselector.length;i++){
			deselector[i].style.border='';
			deselector[i].style.boxShadow='';
		}

		//set selector
		recentSelector=document.querySelector("a[href*='"+searchUrl+"']>div");
		recentSelector.style.border='1px solid blue';
		recentSelector.style.boxShadow='rgba(20,50,100,0.95) 0px 0px 3px 2px';

		document.querySelector("#HB_5699_rpt a").href="http://scene.hazrabrothers.com/report/image.php?sqc=sF5q7&imurl="+searchUrl;

		//////////////////////////////////////////
		//sending request to server
		//////////////////////////////////////////

		detail_request=new XMLHttpRequest();
		detail_request.open("GET","show_details.php?sqc=P4lko23cds69&url="+searchUrl,true);
		detail_request.onreadystatechange=getDetailsResponse;
		detail_request.send(null);


		//move to selected picture
		setTimeout(function(){

			//if the picture is down from screen
			if((recentSelector.getBoundingClientRect().top + recentSelector.clientHeight) >= (window.innerHeight)){
				//window.scrollTo(0,recentSelector.offsetTop-100);
				window.scrollBy(0,(recentSelector.getBoundingClientRect().top + recentSelector.clientHeight)-(window.innerHeight)+15);

			//if the picture is above screen
			}else if((recentSelector.getBoundingClientRect().top) <= (document.querySelector("#hb_scene_header").clientHeight)){

				window.scrollBy(0,(recentSelector.getBoundingClientRect().top)-(document.querySelector("#hb_scene_header").clientHeight)-15);
			}

			//recentSelector.scrollIntoView(false);

			},320);

		setTimeout(function (){
		//setting height of details
			document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details").style.height = document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_div").clientHeight - (document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_image").clientHeight + document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_name").clientHeight);

			//setting top of rating details
			document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details").style.top=document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating").clientHeight;
			//set height of hidden div under details footer
			//document.querySelector("#psudo_hb_scene_image_viewer_bottom_line").style.height=document.querySelector("#hb_scene_image_viewer_bottom_line").clientHeight+"px";
			bln_hb_scene_image_viewer_state=true;
		},300);

	}

	function getDetailsResponse(){
		if(detail_request.status==200 && detail_request.readyState==4){

			if(detail_request.responseText.substr(0,5)=="Error"){
				/////////////////for unable to connect server
				document.getElementById("hb_scene_image_viewer").innerHTML="Unable to connect to server! Try again.";
			}else{
				if(detail_request.responseText.substr(0,4)=="Done"){
					//////////for success receive of response
					var responseText=detail_request.responseText.substr(5);
					var responseArray=responseText.split("~^92f6#@~");

					/* responseArray now

						[0] => rate5
						[1] => rate4
						[2] => rate3
						[3] => rate2
						[4] => rate1
						[5] => rating
						[6] => view
						[7] => download
						[8] => uploaded_by
						[9] => album
						[10]=> category
						[11]=> type
						[12]=> liked
						[13]=> unliked
						[14]=> imUl
						[15]=> description
					*/
					var tmpAdd895=parseInt(responseArray[0])+parseInt(responseArray[1])+parseInt(responseArray[2])+parseInt(responseArray[3])+parseInt(responseArray[4]);

					var pers5=0;
					var pers4=0;
					var pers3=0;
					var pers2=0;
					var pers1=0;

					if(tmpAdd895!=0){
						pers5=Math.round((parseInt(responseArray[0])/tmpAdd895)*100);
						pers4=Math.round((parseInt(responseArray[1])/tmpAdd895)*100);
						pers3=Math.round((parseInt(responseArray[2])/tmpAdd895)*100);
						pers2=Math.round((parseInt(responseArray[3])/tmpAdd895)*100);
						pers1=Math.round((parseInt(responseArray[4])/tmpAdd895)*100);
					}

					///------ Set text of main rating ----------

					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating").innerHTML=responseArray[5];

					///------- Set % of rating progressbar ---------

					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(1) .hb_rate_progress_6501 .hb_rate_progress_6501_fill").style.width=pers5+"%";

					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(2) .hb_rate_progress_6501 .hb_rate_progress_6501_fill").style.width=pers4+"%";

					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(3) .hb_rate_progress_6501 .hb_rate_progress_6501_fill").style.width=pers3+"%";

					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(4) .hb_rate_progress_6501 .hb_rate_progress_6501_fill").style.width=pers2+"%";

					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(5) .hb_rate_progress_6501 .hb_rate_progress_6501_fill").style.width=pers1+"%";


					///------- Set text of each rating text ---------

					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(1) .hb_rate_people_num").innerHTML=responseArray[0];

					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(2) .hb_rate_people_num").innerHTML=responseArray[1];

					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(3) .hb_rate_people_num").innerHTML=responseArray[2];

					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(4) .hb_rate_people_num").innerHTML=responseArray[3];

					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(5) .hb_rate_people_num").innerHTML=responseArray[4];


					///------- Set text of view text ---------
					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_view").innerHTML=responseArray[6];

					///------- Set text of download text ---------
					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_download").innerHTML=responseArray[7];

					///------- Set text of uploaded_by ---------
					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_uploaded_by").innerHTML=responseArray[8];

					///------- Set text of liked ---------
					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_liked #text").innerHTML=responseArray[12];

					///------- Set text of unliked ---------
					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_top #hb_scene_image_viewer_details_unliked #text").innerHTML=responseArray[13];

					///------- Set text of album ---------
					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_file_description_album .HB89CDi_value").innerHTML=responseArray[9];

					///------- Set text of category ---------
					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_file_description_category .HB89CDi_value").innerHTML=responseArray[10];

					///------- Set text of type ---------
					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_file_description_type .HB89CDi_value").innerHTML=responseArray[11].substr(6);

					///------- Set liked or unlike image icon ---------
					//alert(responseArray[15])
					like_unlike_icon_change_84cv8f(responseArray[15]);

					///------- Set rating image icon ---------
					//alert(responseArray[16])
					change_rating_text_icon_6h4hhg(responseArray[16]);

					///------- Set text of description ---------
					document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_description_box").innerHTML=responseArray[17];

					///-------requesting image ---------------------------------------------------------------------------------------
                    var mainImage=new Image();
                    mainImage.src=responseArray[14];
                    document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_image").style.backgroundImage="url('"+mainImage.src+"')";
                    //document.querySelector("#hb_original_download_557 #hb_more_download_viewer_5667 #image").style.backgroundImage="url('"+mainImage.src+"')";


										if(bln_hb_scene_image_viewer_state){
											document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.height='auto';
											document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.width='auto';

											hb_7845_download_link_height=document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details > #hg564_download_main').clientHeight;
											if(bln_hb_scene_image_viewer_download_link_details){
												document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.height=hb_7845_download_link_height;
												document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.width='200px';
											}else{
												document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.height='0px';
												document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.width='0px';
											}

										}else{
										setTimeout(function (){
										document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.height='auto';
										document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.width='auto';

										hb_7845_download_link_height=document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details > #hg564_download_main').clientHeight;

										if(bln_hb_scene_image_viewer_download_link_details){
											document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.height=hb_7845_download_link_height;
											document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.width='200px';
										}else{
											document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.height='0px';
											document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.width='0px';
										}

										},300);
										}

				}
			}




		}

	}

	function hb_scene_collapse_image_viewer(){

		if(window.innerWidth >= window.innerHeight - document.querySelector("#hb_scene_header").clientHeight){
			document.querySelector('#hb_scene_image_viewer').style.width='0%';
			document.querySelector('#main_area').style.width='100%';
		}else{
			document.querySelector('#hb_scene_image_viewer').style.height='0%';
			document.querySelector('#main_area').style.paddingTop="0%";
		}

		bln_hb_scene_image_viewer_state=false;
	}
/*******************************************************/
	///////////////////full screen the image
		var hb_7458_full_screen=document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line #hb_7458_full_screen");
		var full_screen_image_8569=document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_image");

		fullScreenVariable=false;

		//////initializing event listeners
		full_screen_image_8569.addEventListener('webkitfullscreenchange',on_change_fullScreen_415,false);
		full_screen_image_8569.addEventListener('mozfullscreenchange',on_change_fullScreen_415,false);
		full_screen_image_8569.addEventListener('msfullscreenchange',on_change_fullScreen_415,false);
		full_screen_image_8569.addEventListener('fullscreenchange',on_change_fullScreen_415,false);

		///setting an resetting properties of actual image viewer div
		function on_change_fullScreen_415(){
			if (fullScreenVariable) {
				full_screen_image_8569.style.height="55%";
				fullScreenVariable=false;
			}else {
				full_screen_image_8569.style.height="100%";
				fullScreenVariable=true;
			}
		}

		/////functions of actual fullscreen methods
		hb_7458_full_screen.addEventListener("click",actualFullScreen_1025,false);
		full_screen_image_8569.addEventListener('dblclick',function (){
			if (fullScreenVariable){
				actualExitFullScreen_1025();
			}else{
				actualFullScreen_1025();
			}
		},false);

		/////////////actual full screen method ///////////////////
		function actualFullScreen_1025(){
			//full_screen_image_8569.style.height="100%";
			if (full_screen_image_8569.requestFullScreen) {
				full_screen_image_8569.requestFullScreen();

			}else if (full_screen_image_8569.webkitRequestFullScreen) {
				full_screen_image_8569.webkitRequestFullScreen();

			}else if (full_screen_image_8569.mozRequestFullScreen) {
				full_screen_image_8569.mozRequestFullScreen();

			}else if (full_screen_image_8569.msRequestFullScreen) {
				full_screen_image_8569.msRequestFullScreen();

			}
		}

		/////////////actual exit screen method ///////////////////
		function actualExitFullScreen_1025(){

			//full_screen_image_8569.style.height="100%";
			if (document.exitFullscreen) {
				document.exitFullscreen();

			}else if (document.webkitExitFullscreen) {
				document.webkitExitFullscreen();

			}else if (document.mozExitFullscreen) {
				document.mozExitFullscreen();

			}else if (document.msExitFullscreen) {
				document.msExitFullscreen();

			}
		}

///////////////////////////////end of full screen functions///////////////////////////

	//for mouseover and mouseout handle of rating
	function hb_scene_image_viewer_show_rating_details_over(obj){
		if(!bln_hb_scene_image_viewer_rating_details){ //not down
			if(!bln_hb_scene_image_viewer_rating_details_over){ //not over
				obj.style.backgroundColor='rgba(255,255,255,0.2)';
				bln_hb_scene_image_viewer_rating_details_over=true;
			}else{
				obj.style.backgroundColor='transparent';
				bln_hb_scene_image_viewer_rating_details_over=false;
			}
		}else{

		}
	}
	//for collapse and expand rating details
	function hb_scene_image_viewer_show_rating_details(obj){
		if(!bln_hb_scene_image_viewer_rating_details){ //if collapsed
			obj.style.backgroundColor='rgba(255,255,255,0.4)';
			//setting height of rating details to 0
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_rating_details').style.height='160px';
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_rating_details').style.width='200px';
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_rating_details').style.right='0px';
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_rating_details').style.opacity='1';
			bln_hb_scene_image_viewer_rating_details=true;
		}else{
			obj.style.backgroundColor='rgba(255,255,255,0.2)';
			//setting height of rating details to 0
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_rating_details').style.height='0px';
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_rating_details').style.width='0px';
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_rating_details').style.right='70px';
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_rating_details').style.opacity='0';
			bln_hb_scene_image_viewer_rating_details=false;
		}

	}


	//for mouseover and mouseout handle of download link
	function hb_scene_image_viewer_show_download_link_details_over(obj){
		if(!bln_hb_scene_image_viewer_download_link_details){ //not down
			if(!bln_hb_scene_image_viewer_download_link_details_over){ //not over
				obj.style.transform='scale(1.15)';
				bln_hb_scene_image_viewer_download_link_details_over=true;
			}else{
				obj.style.transform='scale(1)';
				bln_hb_scene_image_viewer_download_link_details_over=false;
			}
		}else{

		}
	}
	//for collapse and expand download link details
	function hb_scene_image_viewer_show_download_link_details(obj){
		if(!bln_hb_scene_image_viewer_download_link_details){ //if collapsed
			obj.style.transform='scale(1.27)';
			//setting height of download details to 0
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.height=hb_7845_download_link_height;
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.width='200px';
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.right='15px';
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.opacity='1';
			bln_hb_scene_image_viewer_download_link_details=true;
		}else{
			obj.style.transform='scale(1.15)';
			//setting height of download details to 0
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.height='0px';
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.width='0px';
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.right='115px';
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details').style.opacity='0';
			bln_hb_scene_image_viewer_download_link_details=false;
		}

	}



	//for show and hide the floating pane on image
	function hb_scene_image_viewer_show_bottom_floating_line(bool_758){
		if(bool_758){
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line').style.visibility='visible';
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line').style.opacity='1';
		}else{
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line').style.visibility='hidden';
			document.querySelector('#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line').style.opacity='0';
		}
	}

	//for changeing tabs of description box
	function HB7845_tab_show(obj){
		HB7845_tabs = document.querySelectorAll("#hb_scene_image_viewer_middle div[id^='hb_scene_image_viewer_HB7845_tab_']");

		HB7845_tab_header = document.querySelectorAll("#hb_scene_image_viewer_middle #hb_scene_image_viewer_tab_header div[id^='HB7845_tab_header_']");

		tabNum=String(obj.id.substr(obj.id.indexOf('HB7845_tab_header_')+'HB7845_tab_header_'.length));

		for(var i=0;i<HB7845_tabs.length;i++){
			HB7845_tabs[i].style.display="none";
			HB7845_tab_header[i].style.borderBottom="3px solid transparent";
		}
		document.querySelector("#hb_scene_image_viewer_middle #hb_scene_image_viewer_HB7845_tab_"+tabNum).style.display="block";
		obj.style.borderBottom="3px solid #57a";

		hb_scene_image_viewer_tab_selected=obj.id;

		if(obj.id=="HB7845_tab_header_3"){
			load_comment_data();
		}

	}

	function load_comment_data(){
		//making an ajax request to load
			replyOpenArray="";
			comment_univ_request=new XMLHttpRequest();
			postString="sqc=mlo4B6rt&replyOpenArray="+replyOpenArray+"&";
			postString+="url="+globalSearchUrl;
			comment_univ_request.open("POST","comment.php",true);
			comment_univ_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			comment_univ_request.onreadystatechange=getCommentDetailsUnivResponse;
			comment_univ_request.send(postString);
			document.querySelector("#hb_scene_image_viewer_middle #hb_scene_image_viewer_HB7845_tab_3").innerHTML="Loading comments ...";
	}

//////////////////////////////////////////////////////////////////////////////////

	function getCommentDetailsUnivResponse(){
		if(comment_univ_request.status==200 && comment_univ_request.readyState==4){
			//alert(comment_univ_request.responseText);
			if(comment_univ_request.responseText.substr(0,6)=="Error:"){
				/////////////////for unable to connect server
				document.getElementById("hb_scene_image_viewer_HB7845_tab_3").innerHTML=comment_univ_request.responseText.substr(6);
			}else{
				if(comment_univ_request.responseText.substr(0,5)=="Done:"){
					document.getElementById("hb_scene_image_viewer_HB7845_tab_3").innerHTML=comment_univ_request.responseText.substr(5);
					eval(document.querySelector("#hb_scene_image_viewer_HB7845_tab_3 #script_submit_comment_58p").innerHTML);

					if(document.querySelector("#hb_scene_image_viewer_HB7845_tab_3 #script_submit_reply_f5b")){
						tmp_script_b6m=document.querySelectorAll("#hb_scene_image_viewer_HB7845_tab_3 #script_submit_reply_f5b");
						for(i=0; i<tmp_script_b6m.length; i++){
							eval(tmp_script_b6m[i].innerHTML);
						}

					}


					///////////now do some post processing as required.///////////////////////////////////////
					///////focus on reply_on_comment input box after clicking reply on main thread.
					//alert(comment_request_function_code_4kl);

					if(comment_request_function_code_4kl=="main_comment_6158kt" || comment_request_function_code_4kl=="after_new_thread_creation_6397pt"){
						document.querySelector("div #hb_comment_new_wrapper").querySelector("#comment_message_125K").focus();
					}

					if(comment_request_function_code_4kl=="reply_on_comment_63204gt"){
					//alert(last_reply_on_comment_indicator_plo58);
						//document.querySelector("div[hbcomment="+last_reply_on_comment_indicator_plo58+"]").style.background="red";
						document.querySelector("div[hbcomment="+last_reply_on_comment_indicator_plo58+"]").querySelector("#reply_message_v7Uh").focus();
					}

				}else{
					if(comment_univ_request.responseText.substr(0,9)=="Redirect:"){
						window.location=comment_univ_request.responseText.substr(9);
						//alert(comment_univ_request.responseText.substr(9));
					}else{
							document.getElementById("hb_scene_image_viewer_HB7845_tab_3").innerHTML="Something went wrong. Please try again later.";
					}
				}
			}
		}
	}

	/*function getCommentDetailsResponse(){
		if(comment_request.status==200 && comment_request.readyState==4){
			alert(comment_request.responseText);
			if(comment_request.responseText.substr(0,6)=="Error:"){
				/////////////////for unable to connect server
				document.getElementById("hb_scene_image_viewer_HB7845_tab_2").innerHTML=comment_request.responseText.substr(6);
			}else{
				if(comment_request.responseText.substr(0,5)=="Done:"){
					document.getElementById("hb_scene_image_viewer_HB7845_tab_2").innerHTML=comment_request.responseText.substr(5);
					eval(document.querySelector("#hb_scene_image_viewer_HB7845_tab_2 #script_submit_comment_58p").innerHTML);

				}else{
					document.getElementById("hb_scene_image_viewer_HB7845_tab_2").innerHTML="Something went wrong. Please try again later.";
				}
			}
		}
	}*/


	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	////**********************************************************************************************************************////////
	////////////////////////////////functions for commenting like unlike reply etc////////////////////////////////////////////////////
	function like_on_comment(like_thread){
		////process data

		if(like_thread.substr(0,7)=="REPCMT_"){
			var main_id=like_thread.substr(7);
			comment_univ_request=new XMLHttpRequest();
			postString='sqc=mlo4B6rt&token=bh15s&replyOpenArray='+replyOpenArray+'&';
			postString+='main_id='+main_id+'&';
			postString+='url='+globalSearchUrl;
			comment_univ_request.open('POST','comment.php',true);
			comment_univ_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			comment_univ_request.onreadystatechange=getCommentDetailsUnivResponse;
			comment_univ_request.send(postString);
			//alert(postString);
		}else{
			//////form main like
			var main_id=like_thread;
			comment_univ_request=new XMLHttpRequest();
			postString='sqc=mlo4B6rt&token=mc6Om&replyOpenArray='+replyOpenArray+'&';
			postString+='main_id='+main_id+'&';
			postString+='url='+globalSearchUrl;
			comment_univ_request.open('POST','comment.php',true);
			comment_univ_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			comment_univ_request.onreadystatechange=getCommentDetailsUnivResponse;
			comment_univ_request.send(postString);
		}



		//alert(postString);
	}

	function unlike_on_comment(unlike_thread){
		////process data

		if(unlike_thread.substr(0,7)=="REPCMT_"){
			var main_id=unlike_thread.substr(7);
			comment_univ_request=new XMLHttpRequest();
			postString='sqc=mlo4B6rt&token=ct16J&replyOpenArray='+replyOpenArray+'&';
			postString+='main_id='+main_id+'&';
			postString+='url='+globalSearchUrl;
			comment_univ_request.open('POST','comment.php',true);
			comment_univ_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			comment_univ_request.onreadystatechange=getCommentDetailsUnivResponse;
			comment_univ_request.send(postString);
		}else{
			var main_id=unlike_thread;
			comment_univ_request=new XMLHttpRequest();
			postString='sqc=mlo4B6rt&token=nB65j&replyOpenArray='+replyOpenArray+'&';
			postString+='main_id='+main_id+'&';
			postString+='url='+globalSearchUrl;
			comment_univ_request.open('POST','comment.php',true);
			comment_univ_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			comment_univ_request.onreadystatechange=getCommentDetailsUnivResponse;
			comment_univ_request.send(postString);
		}


		//alert(postString);
	}

	function reply_on_comment(reply_thread){

		////process data

		//show_new_reply_comment_form=main_id;
		if(reply_thread.substr(0,7)=="REPCMT_"){
			var main_id=reply_thread.substr(7);
			//document.querySelector("div[hbcomment="+reply_thread+"]").style.background="red";
			//alert(document.querySelector("div[hbcomment="+reply_thread+"]").parentNode.style.background="red");
			document.querySelector("div[hbcomment="+reply_thread+"]").parentNode.querySelector("#reply_message_v7Uh").focus();

			////////////there should be a request function number to differece among request functions as there is only one response function.
			//////let that variable is comment_request_function_code_4kl
			comment_request_function_code_4kl="reply_on_comment_63204gt";

			/////to detect the last reply request thread we have introduced another new variable called last_reply_on_comment_indicator_plo58
			last_reply_on_comment_indicator_plo58=main_id.substr(0,10);



		}else{
			var main_id=reply_thread;
			replyOpenArray+=main_id+"~";
			comment_univ_request=new XMLHttpRequest();
			postString='sqc=mlo4B6rt&token=cV20M&replyOpenArray='+replyOpenArray+"&";
			postString+='main_id='+main_id+'&';
			postString+='url='+globalSearchUrl;
			comment_univ_request.open('POST','comment.php',true);
			comment_univ_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			comment_univ_request.onreadystatechange=getCommentDetailsUnivResponse;
			comment_univ_request.send(postString);

			////////////there should be a request function number to differece among request functions as there is only one response function.
			//////let that variable is comment_request_function_code_4kl
			comment_request_function_code_4kl="reply_on_comment_63204gt";

			/////to detect the last reply request thread we have introduced another new variable called last_reply_on_comment_indicator_plo58
			last_reply_on_comment_indicator_plo58=reply_thread;

		}


	}

    function report_on_comment(report_thread){
		////process data

		if(report_thread.substr(0,7)=="REPCMT_"){
			var main_id=report_thread.substr(7);
			comment_univ_request=new XMLHttpRequest();
			postString='sqc=mlo4B6rt&token=MnTC6&replyOpenArray='+replyOpenArray+'&';
			postString+='main_id='+main_id+'&';
			postString+='url='+globalSearchUrl;
			comment_univ_request.open('POST','comment.php',true);
			comment_univ_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			comment_univ_request.onreadystatechange=getCommentDetailsUnivResponse;
			comment_univ_request.send(postString);
		}else{
			var main_id=report_thread;
			comment_univ_request=new XMLHttpRequest();
			postString='sqc=mlo4B6rt&token=lmK2g&replyOpenArray='+replyOpenArray+'&';
			postString+='main_id='+main_id+'&';
			postString+='url='+globalSearchUrl;
			comment_univ_request.open('POST','comment.php',true);
			comment_univ_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			comment_univ_request.onreadystatechange=getCommentDetailsUnivResponse;
			comment_univ_request.send(postString);
		}


		//alert(postString);
	}

	/*function getThreadReplyAuxiliaryResponse(){
		if(comment_univ_request.status==200 && comment_univ_request.readyState==4){
			alert(comment_univ_request.responseText);
			if(comment_univ_request.responseText.substr(0,5)=='Done:'){
				document.querySelector('div[hbcomment='+show_new_reply_comment_form+'] #reply_container_745').innerHTML=comment_univ_request.responseText.substr(5);
				eval(document.querySelector('#hb_scene_image_viewer_HB7845_tab_2 #script_submit_reply_f5b').innerHTML);
			}
		}
	}*/


/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////  end of comments section  /////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

//////////function for download button
	function hb_download_link_click() {
		window.location="download.php?sqc=85pl1Nko&url="+globalSearchUrl;
		//close the menu that popped up
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_file_description_quality").click();

	}

///////////////function for original button
	function hb_download_original_click(){
		document.querySelector("#top_cover_1230").style.display="block";
		document.querySelector("#hb_original_download_557").style.display="block";
		document.querySelector("#hb_original_download_557").style.left = (window.innerWidth - document.querySelector("#hb_original_download_557").getBoundingClientRect().width)/2+"px";
		document.querySelector("#hb_original_download_557").style.top = (window.innerHeight - document.querySelector("#hb_original_download_557").getBoundingClientRect().height)/2+"px";
		//close the menu that popped up
		document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details #hb_scene_image_viewer_file_description_quality").click();

	}

///////////////////////////////////////////////////////////////////////////
////// show or hide pop up for notification
////////////////////////////////////////////////////////////
notification_pop_up_g4h54fe=document.querySelector("#notification_pop_up_6g76df7g");

function show_notification_pop_up_g4h4x(kk5_message, kk5_button_text, kk5_img_url, kk5_style){
	//alert(kk5_message)
	if(kk5_message && kk5_message.trim()!=""){
		notification_pop_up_g4h54fe.querySelector("#main_div").innerHTML=kk5_message;
	}

	if(kk5_button_text && kk5_button_text.trim()!=""){
		notification_pop_up_g4h54fe.querySelector("#button_ok_div").innerHTML=kk5_button_text;
	}

	if(kk5_img_url && kk5_img_url.trim()!=""){
		notification_pop_up_g4h54fe.querySelector("#img_div").style.display="flex";
		notification_pop_up_g4h54fe.querySelector("#main_div").style.display="flex";
		notification_pop_up_g4h54fe.querySelector(".button_notify_pop_up").style.position="absolute";
		notification_pop_up_g4h54fe.querySelector("#psudo_button_ok_div").style.display="block";

		notification_pop_up_g4h54fe.querySelector("#img_div").style.backgroundImage="url('"+kk5_img_url+"')";
	}else{
			notification_pop_up_g4h54fe.querySelector("#img_div").style.display="none";
			notification_pop_up_g4h54fe.querySelector("#main_div").style.display="inline-block";
			notification_pop_up_g4h54fe.querySelector(".button_notify_pop_up").style.position="static";
			notification_pop_up_g4h54fe.querySelector("#psudo_button_ok_div").style.display="none";
	}

	if(kk5_style && kk5_style.trim()!=""){
		notification_pop_up_g4h54fe.querySelector("#style_65fth6f").innerHTML+=kk5_style;
	}


	notification_pop_up_g4h54fe.style.transform="scale(1,1)";
	notification_pop_up_g4h54fe.style.opacity="1";

}

function hide_notification_pop_up_g4h4x(){
	notification_pop_up_g4h54fe.style.transform="scale(1,0)";
	notification_pop_up_g4h54fe.style.opacity="0";
}

</script>
<?php
	include "event.php";
?>
</body>
</html>
