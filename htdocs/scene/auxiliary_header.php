<?php
//checking if some one access directly or not
if(isset($rootpath)){
	include $rootpath."universal/init/init_protect.php";
}else{
	die("Unautorized Entry!");
}
?>
<style>

@font-face{
	font-family:montserrat_regular;
	font-weight:normal;
	src:url('/fonts/Montserrat-Light.ttf');
}
@font-face{
	font-family:montserrat_bold;
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
	background-color:#6d8ba5;
	background-position: center center;
	background-size:cover;
	background-repeat:no-repeat;
	background-attachment:fixed;
	
	<?php if(isset($body_background_lyh7u) && $body_background_lyh7u == 1){

	}else{
		echo "background-image:url('/images/scene_form_background.png');";
	}
	?>

}

#hb_scene_header{
	position:fixed;
	width:100%;
	height:50px;
	top:0px;
	z-index:100;
	font-family:montserrat_regular;
	background:rgba(0,0,0,0.5);
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
/*######################## RIGHT CONTAINER ############################*/
#hb_scene_header>div>#hb_header_right_container>a{
	text-decoration:none;
	color:white;
}
#hb_scene_header>div>#hb_header_right_container{
	float:right;
}

/*------------------------------------------------*/

input[type='search']::-webkit-search-decoration,
input[type='search']::-webkit-search-cancel-button,
input[type='search']::-webkit-search-results-button,
input[type='search']::-webkit-search-results-decoration{
	display:none;
}

</style>

<header id="hb_scene_header" >
<div>
	<?php
		if(isset($hb_header1_contentent_add_f5ttyq7we) && !empty($hb_header1_contentent_add_f5ttyq7we)){
			echo $hb_header1_contentent_add_f5ttyq7we;
		}
	?>
	<img src="/images/scene_logo.png" width="36px" height="36px" onclick="window.location.href='http://scene.hazrabrothers.com/'"/>
	<div id="link_label">
		<!--a href="javascript:history.back();">
		<div id="hb_scene_upload_back">Back</div>
	</a-->


	</div>


	<div id="hb_header_right_container">

		<?php include $rootpath."scene/user_header_logo.php"; ?>

		<?php include $rootpath."scene/user_header_notification.php"; ?>

	</div>

</div>
</header>
