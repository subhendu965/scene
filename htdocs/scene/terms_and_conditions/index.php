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
?>

<html>
<head>
	<title>Share your Feedback</title>
	<link rel="shortcut icon" href="/images/scene_logo_title.png" />
	<meta name="viewport" content="width=device-width" />
</head>


<body>
<?php

///////////////////////////////////////////////include header/////////////////////////////////////////////////////
include $rootpath."scene/auxiliary_header.php"
///////////////////////////////////////////////end of header//////////////////////////////////////////////////////
?>


<?php ///////////////////////////////////////////////main section//////////////////////////////////////////////////// ?>


<div id="log_div">

<style>
#log_div{
	width:55%;
	text-align:left;
	border:1px solid #999;
	border-radius:7px;
	background:rgba(255,255,255,0.95);
	margin:100px auto 20px auto;
	box-shadow:#666 0px 0px 10px;
}
#log_div>#form_label{
	text-align:center;
	font-size:30px;
	padding:15px 0px;
}
#log_div>#main{
	font-size:20px;
	margin:30px;
}#reg_div>#form_label{
	text-align:center;
	font-size:30px;
	padding:15px 0px;
}
#reg_div>#main{
	font-size:20px;
	margin:30px;
}

/*-------------------------------------------------------------*/
#reg_div>#form_label{
	text-align:center;
	font-size:30px;
	padding:15px 0px;
}
#reg_div>#main{
	font-size:20px;
	margin:30px;
}

form[name=feedback_form]>div>label{
	/*float:left;
	padding:5px;
	font-size:20px;
	width:45%;*/
	font-style:italic;
}

/*-------------------------------------------------------------*/

form[name=feedback_form] input[type=text]
{
	float:right;
	width:50%;
	font-size:18px;
	background:rgba(255,255,255,0.5);
	border:0px solid transparent;
	border:1px solid rgba(85,119,170,0.2);
	border-bottom:2px solid #57a;
	padding:10px;
	transition:box-shadow 0.3s, border 0.3s, background 0.3s;
}

form[name=feedback_form] textarea{
	float:right;
	resize:none;
	width:100%;
	margin:auto;
	font-size:18px;
	background:rgba(255,255,255,0.5);
	border:0px solid transparent;
	border:1px solid rgba(85,119,170,0.2);
	border-bottom:2px solid #57a;
	padding:10px;
	transition:box-shadow 0.3s, border 0.3s, background 0.3s;
}

form[name=feedback_form] input[type=text]:focus, 
form[name=feedback_form] textarea:focus
{
	background:rgba(85,119,170,0.04);
	border:1px solid rgba(85,119,170,0.8);
	border-bottom:2px solid #57a;
	box-shadow:#57a 0px 0px 2px;
}

form[name=feedback_form] input[type=text]:hover, 
form[name=feedback_form] textarea:hover
{
	border:1px solid rgba(85,119,170,0.8);
	border-bottom:2px solid #57a;
	box-shadow:#57a 0px 0px 2px;
}

form[name=feedback_form] #to_label{
	font-size:15px;
	padding-bottom:5px;
	font-style:italic;
}
form[name=feedback_form] #msg_label{
	text-align:center;
	padding-bottom:5px;
	font-style:italic;
}
form[name=feedback_form] #from_label{
	float:right;
	padding-top:9px;
	padding-right:20px;
	font-style:italic;
}

/*-------------------------------------------------------------*/
form[name='feedback_form'] input[name='submit']{
	background:#57a;
	border:2px solid transparent;
	border-radius:5px;
	padding:10px;
	margin:5px;
	float:right;
	font-size:15px;
	font-weight:bold;
	color:white;
	box-shadow:rgba(120,120,120,0.6) 2px 2px 3px;
	transition:background 0.3s,color 0.3s, border 0.3s;
	cursor:pointer;
}
form[name='feedback_form'] input[name='submit']:hover{
	background:#CBE0FF;
	border:2px solid #57a;
	color:#2a4a7b;
}

/*-------------------------------------------------------------*/
#input_element{
	height:30px;
}

div[tprop$=_error_message]{
	clear:both;
	padding-top:4px;
	margin:5px;
	color:red;
	font-size:12px;
	text-align:right;
	height:0px;
	overflow:hidden;
	transition:height 0.3s;
}

/*-------------------------------------------------------------*/
</style>

	<div id="form_label">Share Your Feedback</div>
	
	<!-- The line as div -->
	
	<div style="	 background:rgba(150,150,150,0.5);
			 background:-webkit-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-moz-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
		 	 background:-ms-linear-gradient(left,transparent, rgba(150,150,150,0.8), transparent);
			 font-size:1px;
			 height:1px;
			 ">&nbsp;</div>
	
		
	
<div id="main">
	Terms and Condtions Here

</div>

</div>
<?php ///////////////////////////////////////////////end of main section///////////////////////////////////////////////////// ?>


<div id="footer_blank_0032">&nbsp;</div>
<?php
///////////////////////////////////////////////include footer/////////////////////////////////////////////////////
 include $rootpath."scene/footer.php"; ?>
<style>
#hb_scene_footer{
	position:absolute;
	bottom:0px;
}
</style>
</body>

<script>

	document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height+30)+"px";
	
</script>

</html>