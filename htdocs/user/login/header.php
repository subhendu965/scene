<?php

?>
<style>


@media screen and (min-width:950px){
	#hb_header1>div>div>#logo_label{
		padding:7px;
	}
}
@media screen and (max-width:949px){
	#hb_header1>div>div>#logo_label{
		width:0px;
		padding:0px;
	}
}


@font-face{
	font-family:montserrat_regular;
	font-weight:normal;
	src:url('/fonts/montserrat_regular.otf');
}
*{
	font-family:montserrat_regular;
}
*:focus{
	outline:none;
}
body{
	margin:0px;
	background:url("/images/background/texture/block.png") repeat fixed;
}
#hb_header1{
	width:100%;
	height:40px;
	background:rgba(255,255,255,0.95);
	box-shadow:#888 0px 3px 4px;
	border-top:3px solid #0090b1;
	position:fixed;
	top:0px;
	z-index:200;
}
#hb_header1>div>div{
	width:95%;
}
#hb_header1>div>div>#logo_label{
	float:right;
	font-size:20px;
	overflow:hidden;
	transition:width 0.3s, transform 0.3s;
}
#hb_header1>div>div>img{
	float:right;
	padding:7px;
	padding-right:0px;
}

</style>

	<header id="hb_header1">

	<?php
		if(isset($hb_header1_contentent_add_f5ttyq7we) && !empty($hb_header1_contentent_add_f5ttyq7we)){
			echo $hb_header1_contentent_add_f5ttyq7we;
		}
	?>

	<div>
		<div>
			<div id="logo_label">Hazra Brothers</div>
			<img src="/images/universal/icon.png" width="24px" height="24px">
		</div>
	</div>
	</header>
