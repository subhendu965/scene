<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17012;
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

?>
<html>
<head>
	<title>Scene</title>
	<link rel="shortcut icon" href="../images/scene_logo_title.png" />
	<meta name="viewport" content="width=device-width" />

<script>
	var bln_hb_scene_viewer_rating_details=false;
	var bln_hb_scene_viewer_rating_details_over=false;
	globalSearchUrl="<?php echo $_GET['imurl']; ?>";
////////////////////////////////////////comment//////////
	function getCommentDetailsUnivResponse(){
		if(comment_univ_request.status==200 && comment_univ_request.readyState==4){
			//alert(comment_univ_request.responseText);
			if(comment_univ_request.responseText.substr(0,6)=="Error:"){
				/////////////////for unable to connect server
				document.getElementById("scene_viewer_comment_container_52lm").innerHTML=comment_univ_request.responseText.substr(6);
			}else{
				if(comment_univ_request.responseText.substr(0,5)=="Done:"){
					document.getElementById("scene_viewer_comment_container_52lm").innerHTML=comment_univ_request.responseText.substr(5);
					eval(document.querySelector("#scene_viewer_comment_container_52lm #script_submit_comment_58p").innerHTML);

					if(document.querySelector("#scene_viewer_comment_container_52lm #script_submit_reply_f5b")){
						tmp_script_b6m=document.querySelectorAll("#scene_viewer_comment_container_52lm #script_submit_reply_f5b");
						for(i=0; i<tmp_script_b6m.length; i++){
							eval(tmp_script_b6m[i].innerHTML);
						}

					}
				}else{
					document.getElementById("scene_viewer_comment_container_52lm").innerHTML="Something went wrong. Please try again later.";
				}
			}
		}
	}

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
			//alert(postString);
		}


	}

	/////////////////////////end comment


function scrollPage(){

	document.querySelector("div#hb_scene_viewer #blank_2748").style.height=nav_line.getBoundingClientRect().height;
	nav_line=document.querySelector("div#hb_scene_viewer #nav_line");

	if(nav_line && document.querySelector("div#hb_scene_viewer #image")){

		if(this.pageYOffset > document.querySelector("div#hb_scene_viewer #image").clientHeight){
			nav_line.style.position="fixed";
			nav_line.style.width="100%";
			nav_line.style.backgroundColor="rgba(34, 102, 153, 0.95)";
			nav_line.style.color="white";
			nav_line.style.boxShadow="rgba(0,0,0,0.5) 0px 2px 3px";
			document.querySelector("div#hb_scene_viewer #blank_2748").style.display="block";
			nav_line.style.borderLeftWidth="0px";
			nav_line.style.borderRightWidth="0px";
			bln_nav_width_state=false;

		}else{
			nav_line.style.position="static";
			nav_line.style.width="100%";
			nav_line.style.backgroundColor="#269";
			nav_line.style.color="white";
			document.querySelector("div#hb_scene_viewer #blank_2748").style.display="none";
			nav_line.style.borderLeftWidth="0px";
			nav_line.style.borderRightWidth="0px";
			nav_line.style.boxShadow="transparent 0px 2px 3px";

		}

	}


}


//for mouseover and mouseout handle of rating
function hb_scene_image_viewer_show_rating_details_over(obj){
	if(!bln_hb_scene_viewer_rating_details){ //not down
		if(!bln_hb_scene_viewer_rating_details_over){ //not over
			obj.style.backgroundColor="rgba(150,175,190,0.8)";
			bln_hb_scene_viewer_rating_details_over=true;
		}else{
			obj.style.backgroundColor="transparent";
			bln_hb_scene_viewer_rating_details_over=false;
		}
	}else{

	}
}

//for collapse and expand rating details
function hb_scene_image_viewer_show_rating_details(obj){
	if(!bln_hb_scene_viewer_rating_details){ //if collapsed
		obj.style.backgroundColor="rgba(150,175,190,1)";

		document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.height="auto";
		//setting height of rating details to 0
		if(window.pageYOffset <= document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").clientHeight){
			window.scrollTo(0,(document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").clientHeight));
		}

		document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.height="0px";

		document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.height="160px";
		document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.width="200px";

		document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.left="5px";

		document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.opacity="1";
		bln_hb_scene_viewer_rating_details=true;

	}else{
		obj.style.backgroundColor="rgba(150,175,190,0.8)";
		//setting height of rating details to 0
		document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.height="0px";
		document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.width="0px";

		document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.left="10px";

		document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.opacity="0";
		bln_hb_scene_viewer_rating_details=false;
	}
}
</script>
</head>

<body onLoad="scrollPage();" onScroll="scrollPage();" onResize="scrollPage();">

<style>
@font-face{
	font-family:montserrat_regular;
	font-weight:normal;
	src:url('./fonts/Montserrat-Light.ttf');
}

html{
	position:relative;
	min-height:100%;
}
body{
	margin:0px;
	padding:0px;
	font-family:montserrat_regular,ubuntu,tahoma;
	background:#efefef;
}
*:focus{
	outline: none;
}
</style>

<?php
////////////////////////Checking pair////////////////////////////////
//if(isset($_GET['pariCode']) && decryptData($_GET['pairCode'])=="ABG7856YU"){
	if(isset($_GET['imurl']) && !empty($_GET['imurl'])){
		showImage();
	}else{
		showNothing();
	}

//}else{
//	die("Authorization Required");
//}

?>

<?php
//////////////////////////////////////// Begin of showImage //////////////////////////////////////
function showImage(){

global $hb_scene_db;
global $rootpath;
?>

<header>

</header>
<style>

div#hb_scene_viewer{
	text-align:center;
}
</style>
<div id="hb_scene_viewer">

<?php
$newUrl=decryptData($_GET['imurl']);

$query="SELECT url,uploaded_by,date,time,name,category,type,album,view,download,width,height,filesize,rate1,rate2,rate3,rate4,rate5,(rate1*1+rate2*2+rate3*3+rate4*4+rate5*5)/(rate1+rate2+rate3+rate4+rate5) AS rating FROM hb_scene_images WHERE url='".mysqli_real_escape_string($hb_scene_db,$newUrl)."' LIMIT 1";
	if($rows=mysqli_query($hb_scene_db,$query)){
		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
			if($row['url']==$newUrl){

			$_SESSION['hb_scene']['adjust_image_223']="adj365";
?>
<style>

@media screen and (min-width:900px){
	div#hb_scene_viewer #section_main{
		width:50%;
	}
}
@media screen and (max-width:899px){
	div#hb_scene_viewer #section_main{
		width:80%;
	}
}

div#hb_scene_viewer #image{
	width:100%;
	height:94%;
	background:url('<?php echo "../adjust_image.php?type=show&sqc=klPM69D&url=".$_GET['imurl']; ?>'), #345;
	background-size:contain;
	background-position:center center;
	background-repeat:no-repeat;
}
div#hb_scene_viewer #nav_line{
	width:100%;
	height:40px;
	margin:auto;
	background:#269;
	top:0px;
	color:white;
	text-align:left;
	border-left:0px solid rgba(0,0,0,0.2);
	border-right:0px solid rgba(0,0,0,0.2);
	transition:background 0.3s, color 0.3s, box-shadow 0.3s, width 0.3s, border 0.3s;
}
div#hb_scene_viewer #nav_line #back_button{
	display:inline-block;
}
/*------------------*/
div#hb_scene_viewer #nav_line #urvd_div{
	display:inline-block;
	margin:0px 10px;
	height:40px;
	font-size:20px;
}
div#hb_scene_viewer #nav_line #urvd_div > div{
	display:inline-block;
	height:24px;
	padding:8px;

}

div#hb_scene_viewer #nav_line #urvd_div #rating{
	padding-left:10px;
	padding-right:35px;
	background:url('../images/logo_rating.png');
	background-repeat:no-repeat;
	background-size:auto 50%;
	background-position:87% center;
	background-color:transparent;
	cursor:pointer;
	transition:background 0.3s;
}
div#hb_scene_viewer #nav_line #urvd_div #view{
	padding-left:25px;
	padding-right:5px;
	background:url('../images/logo_view.png');
	background-repeat:no-repeat;
	background-size:auto 50%;
	background-position:0% center;
	transition:background 0.3s;
}
div#hb_scene_viewer #nav_line #urvd_div #download{
	padding-left:25px;
	padding-right:5px;
	background:url('../images/logo_download.png');
	background-repeat:no-repeat;
	background-size:auto 50%;
	background-position:0% center;
	transition:background 0.3s;
}
/*---------------------------*/
div#hb_scene_viewer #section_main{
	margin:auto;
	background:white;
	border-left:3px solid rgba(0,0,0,0.2);
	border-right:3px solid rgba(0,0,0,0.2);
	padding:10px 10px 10px 20px;
}
div#hb_scene_viewer #section_main #img_details{

}

div#hb_scene_viewer #section_main #uploaded_area{
	float:right;
	font-style: italic;
}

div#hb_scene_viewer #section_main #upload_text{
	float:right;
	margin:4px 5px 4px 4px;
	font-style: italic;
	text-align: right;
}
div#hb_scene_viewer #section_main #uploaded_by{
		float:right;
}

div#hb_scene_viewer #section_main #uploader_logo{
	display: inline-block;
	float:right;
	width:30px;
	height:30px;
  margin:4px;
	background:url('../images/jjkl.JPG');
	background-color: #ccc;
	background-repeat:no-repeat;
	background-size:cover;
	background-position:center center;
	border-radius: 200px;
}

div#hb_scene_viewer #section_main #upload_poufamig{
	font-size:10px;
	color:#888;
	text-align: right;
}
/*---------------------------*/

div#hb_scene_viewer #section_main #img_name{
	float:left;
	font-size: 20px;
	text-align: left;
  margin:5px 0px;
}
/*-------------------------------------*/
#scene_viewer_comment_container_52lm{
	text-align: left;
}
/*---------------------------*/

div#hb_scene_viewer #blank_2748{
	display:none;
	height:40px;
}

			div#hb_scene_viewer #hb_scene_viewer_rating_details{
					position:absolute;
					left:10px;
					height:0px;
					width:0px;
					opacity:0;
					margin:32px 0px 0px 0px;
					overflow:hidden;
					color:black;
					text-align:left;
					transition:height 0.3s, width 0.3s, left 0.3s, opacity 0.3s;
					font-size:13px;
				}

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main{
					height:133px;
					margin:0px 5px 5px 5px;
					padding:10px;
					background:white;
					border:1px solid rgba(0,0,0,0.5);
					border-radius:5px;
					box-shadow:rgba(0,0,0,0.5) 2px 2px 4px;

				}
				/******************************************************************************************/
				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257{
					font-size:12px;
					height:15px;
				}
				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257 .hb_rate_progress_text{
					display:inline-block;
					float:left;
					width:25%;
					background:url('../images/logo_rating.png');
					background-repeat:no-repeat;
					background-size:auto 80%;
					background-position:55% center;
				}

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257 .hb_rate_progress_6501{
					display:inline-block;
					width:50%;
					height:3px;
					margin:6px 0px 0px 0px;
					background:#bbb;
					float:left;
				}
				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257 .hb_rate_people_num{
					width:25%;
					float:right;
					text-align:right;
				}

				/*-------------------------------------------------------------------------*/

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(1) .hb_rate_progress_6501 .hb_rate_progress_6501_fill{
					height:3px;
					background:#00a600;
					width:<?php
					if($row['rate1']+$row['rate2']+$row['rate3']+$row['rate4']+$row['rate5']){
						echo ($row['rate5']/($row['rate1']+$row['rate2']+$row['rate3']+$row['rate4']+$row['rate5'])*100);
					}else{
						echo "0";
					}
					echo "%;" ?>
				}

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(2) .hb_rate_progress_6501 .hb_rate_progress_6501_fill{
					height:3px;
					background:#84ff00;
					width:<?php
					if($row['rate1']+$row['rate2']+$row['rate3']+$row['rate4']+$row['rate5']){
						echo ($row['rate4']/($row['rate1']+$row['rate2']+$row['rate3']+$row['rate4']+$row['rate5'])*100);
					}else{
						echo "0";
					}
					echo "%;" ?>
				}

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(3) .hb_rate_progress_6501 .hb_rate_progress_6501_fill{
					height:3px;
					background:#ffff00;
					width:<?php
					if($row['rate1']+$row['rate2']+$row['rate3']+$row['rate4']+$row['rate5']){
						echo ($row['rate3']/($row['rate1']+$row['rate2']+$row['rate3']+$row['rate4']+$row['rate5'])*100);
					}else{
						echo "0";
					}
					echo "%;" ?>
				}

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(4) .hb_rate_progress_6501 .hb_rate_progress_6501_fill{
					height:3px;
					background:#fd7828;
					width:<?php
					if($row['rate1']+$row['rate2']+$row['rate3']+$row['rate4']+$row['rate5']){
						echo ($row['rate2']/($row['rate1']+$row['rate2']+$row['rate3']+$row['rate4']+$row['rate5'])*100);
					}else{
						echo "0";
					}
					echo "%;" ?>
				}

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(5) .hb_rate_progress_6501 .hb_rate_progress_6501_fill{
					height:3px;
					background:#ff0000;
					width:<?php
					if($row['rate1']+$row['rate2']+$row['rate3']+$row['rate4']+$row['rate5']){
						echo ($row['rate1']/($row['rate1']+$row['rate2']+$row['rate3']+$row['rate4']+$row['rate5'])*100);
					}else{
						echo "0";
					}
					echo "%;" ?>
				}

				/*-------------------------------------------------------------------------*/

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257 .hb_rate_people_num{
					display:inline-block;
				}

				/*-------------------------------------------------------------------------*/

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(1) .hb_rate_people_num{
				color:#00a600;
				}

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(2) .hb_rate_people_num{
				color:#6ebd2f;
				}

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(3) .hb_rate_people_num{
				color:#c3c122;
				}

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(4) .hb_rate_people_num{
				color:#fd7828;
				}

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main .hb_rate_each_1257:nth-child(5) .hb_rate_people_num{
				color:#ff0000;
				}
				/*-------------------------------------------------------------------------*/

				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main #hb_rate_of_mine_text{
					margin-top:8px;
					padding-top:5px;
					text-align:center;
					border-top:1px solid rgba(0,0,0,0.4);
					font-size:13px;
					cursor:default;
				}
				/*-----------------------------------------*/
				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main #hb_rate_of_mine_text #div_rateBut_1457{
					margin-top:8px;
					cursor:default;
				}
				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main #hb_rate_of_mine_text #div_rateBut_1457 button[id^='rateBut_1457_']{
					display:inline-block;
					padding:5px;
					width:20px;
					height:20px;
					background-color:transparent;
					border:none;
					cursor:pointer;
					background:url('../images/logo_rating_gray.png');
					background-repeat:no-repeat;
					background-size:auto 82%;
					background-position:center 25%;
					border:2px solid transparent;
					border-radius:30px;
					transition:border 0.3s, box-shadow 0.3s;
				}
				div#hb_scene_viewer #hb_scene_viewer_rating_details > div#hb_ju24_main #hb_rate_of_mine_text #div_rateBut_1457 button[id^='rateBut_1457_']:hover{
					border:2px solid gold;
					box-shadow:gold 0px 0px 5px;
				}

				/***********************************************************************/

</style>

	<div id="image">&nbsp;</div>

	<div id="nav_line">
		<div id="back_button">&nbsp;</div>
		<div id="urvd_div">

			<div id="rating" onmouseover='hb_scene_image_viewer_show_rating_details_over(this)' onmouseout='hb_scene_image_viewer_show_rating_details_over(this)'  onclick='hb_scene_image_viewer_show_rating_details(this)'><?php echo number_format($row['rating'],1); ?></div>



				<div id='hb_scene_viewer_rating_details'>
					<div id='hb_ju24_main'>
						<div>
							<div class='hb_rate_each_1257'>
								<div class='hb_rate_progress_text'>&nbsp;&nbsp;5</div>
								<div class='hb_rate_progress_6501'>
									<div class='hb_rate_progress_6501_fill'>&nbsp;</div>
								</div>
								<div class='hb_rate_people_num'><?php echo $row['rate5']; ?></div>
							</div>
							<div class='hb_rate_each_1257'>
								<div class='hb_rate_progress_text'>&nbsp;&nbsp;4</div>
								<div class='hb_rate_progress_6501'>
									<div class='hb_rate_progress_6501_fill'>&nbsp;</div>
								</div>
								<div class='hb_rate_people_num'><?php echo $row['rate4']; ?></div>
							</div>
							<div class='hb_rate_each_1257'>
								<div class='hb_rate_progress_text'>&nbsp;&nbsp;3</div>
								<div class='hb_rate_progress_6501'>
									<div class='hb_rate_progress_6501_fill'>&nbsp;</div>
								</div>
								<div class='hb_rate_people_num'><?php echo $row['rate3']; ?></div>
							</div>
							<div class='hb_rate_each_1257'>
								<div class='hb_rate_progress_text'>&nbsp;&nbsp;2</div>
								<div class='hb_rate_progress_6501'>
									<div class='hb_rate_progress_6501_fill'>&nbsp;</div>
								</div>
								<div class='hb_rate_people_num'><?php echo $row['rate2']; ?></div>
							</div>
							<div class='hb_rate_each_1257'>
								<div class='hb_rate_progress_text'>&nbsp;&nbsp;1</div>
								<div class='hb_rate_progress_6501'>
									<div class='hb_rate_progress_6501_fill'>&nbsp;</div>
								</div>
								<div class='hb_rate_people_num'><?php echo $row['rate1']; ?></div>
							</div>
						</div>

						<div id='hb_rate_of_mine_text'>
							Give your rating
							<div id='div_rateBut_1457'>
								<button id='rateBut_1457_1'>&nbsp;</button>
								<button id='rateBut_1457_1'>&nbsp;</button>
								<button id='rateBut_1457_1'>&nbsp;</button>
								<button id='rateBut_1457_1'>&nbsp;</button>
								<button id='rateBut_1457_1'>&nbsp;</button>
							</div>
						</div>
					</div>
				</div>



			<div id="view"><?php echo $row['view']; ?></div>
			<div id="download"><?php echo $row['download']; ?></div>
		</div>


	</div>

	<div id="blank_2748">&nbsp;</div>



	<div id="section_main">

		<div id="img_details">

		<div id="img_name"><?php echo $row['name']; ?></div>


		<div id="uploaded_area">

			<div id="upload_text">
				<span id="upload_poufamig">Uploader</span><br>
				<div id="uploaded_by"><?php

$query="SELECT scene_name FROM hb_scene_uploader WHERE uploader_id='".$row['uploaded_by']."' LIMIT 1";
if($fRows=mysqli_query($hb_scene_db,$query)){
	if($fRow=mysqli_fetch_array($fRows,MYSQLI_BOTH)){
		echo $fRow['scene_name'];
	}else{
		echo "Unknown";
	}
}
?></div>
			</div>

			<div id='uploader_logo' class='hb_scene_image_viewer_inside_top_line'>&nbsp;</div>
		</div>
	</div>

	<div id="clearer6565" style="clear:both; height:0px; overflow:hidden; font-size:1px;"></div>

		<div>Overview</div>
		<div id="scene_viewer_comment_container_52lm">

		</div>
	</div>
<?php
			}else{
				echo "Unable to match!";
			}
		}else{
			echo "Unable to fetch!";
		}
	}else{
		echo "Unable to query!";
	}
?>
</div>
<?php
}
//////////////////////////////////////// End of showImage ////////////////////////////////////////
?>

<?php
////////////////////////////////////////////Begin of showNothing///////////////////////////////
function showNothing(){
?>
	<style>
	#hb_445_no_prev_avble{
		text-align:center;
		font-size:30px;
		padding:10px 15px;
		margin-top:30px;
	}
	</style>

	<div id='hb_445_no_prev_avble'>No Preview Available</div>
<?php
}
////////////////////////////////////////////End of showNothing///////////////////////////////
?>
<div id="footer_blank_0032">&nbsp;</div>
<?php
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
document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height)+"px";

</script>
<?php
	include "event.php";
?>
</body>
</html>
