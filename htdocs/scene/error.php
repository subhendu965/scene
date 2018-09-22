<?php

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
		width:100px;
		height:230px;
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
	background:url("/festival/greet/durga_puja/images/tri_sule.png") no-repeat;
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
	include "./scene/footer.php";
?>
<style>

#hb_scene_footer{
	position:absolute;
	bottom:0px;
	z-index:7;
}
</style>

</body>
</html>
