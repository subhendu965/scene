<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17006;
$hb_folder_layer=1;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

?>
<html>
<head>
<meta name="viewport" content="width=device-width" >
<title>404 Not Found</title>
</head>
<style>
html{
	position:relative;
	min-height:100%;
}
body{
	margin:0px;
	padding:0px;
	font-family:tahoma,ubuntu;
	text-align:center;
}

@media screen and (min-width:620px){
	#main{
		width:75%;
	}
	#logo_div{
		width:150px;
		height:150px;
	}
}
@media screen and (max-width:619px){
	#main{
		width:90%;
	}
	#logo_div{
		width:50px;
		height:114px;
	}
}
@media screen and (max-device-width:619px){
	#main{
		width:90%;
	}
	#logo_div{
		width:50px;
		height:114px;
	}
}


#main{
	margin:auto;
}
#logo_div{
	float:left;
	background:url("http://hazrabrothers.com/images/universal/emo_blank.png") no-repeat;
	background-size:contain;
	background-position:center center;
	margin-right:10px;
}
#text_div{
	float:right;
}
#text_div #wrn{
	font-size:30px;
}
#text_div #nf404{
	float:right;
	margin:10px;
	font-size:15px;
}
</style>
<body>
<br><br><br><br>
<div id="main">
	<div id="logo_div">	</div>

	<div id="text_div">
		<br><br><br>
		<div id="wrn">You are at wrong location!</div>
		<div id="nf404">404 Not Found</div>
	</div>
</div>
<div id="footer_blank_0032">&nbsp;</div>
<?php
	include "footer.php";
?>
<style>

#hb_scene_footer{
	position:absolute;
	bottom:0px;
	z-index:7;
}
</style>
<script>

document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height+25)+"px";
</script>

</body>
</html>
