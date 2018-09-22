<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($rootpath)){
	include $rootpath."universal/init/init_protect.php";
}else{
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/

?>

<footer id="hb_user_footer">

<style>
#hb_user_footer{
	width:100%;
	background:rgba(3,1,23,0.9);
	box-shadow:rgba(0,0,0,0.6) 0px -3px 4px;
	color:white;
	margin:0px;
	border-top:10px solid rgba(0,84,171,0.8);
	bottom:0px;
}
#hb_user_footer>center{
	width:100%;
	border-top:1px solid rgba(228,245,255,0.8);
	padding:10px 0px;
}
#hb_user_footer>center>div{
	width:270px;
}
#hb_user_footer>center>div>#footer_label{
	float:right;
	padding:5px;
	font-size:20px;
}
#hb_user_footer>center>div>img{
	float:right;
	padding:5px;
	transition: transform 0.5s;
}
#hb_user_footer>center>div>img:hover{
	-webkit-transform:scale(-1,1);
	-moz-transform:scale(-1,1);
	transform:scale(-1,1);
}

</style>

	<center>
		<div>
			<div id="footer_label">Hazra Brothers <span style="color:#00deff;">| 2018</span></div>
			<img src="/images/universal/icon.png" width="25px" height="25px">
		</div>
	<div style="clear:both;font-size:1px;height:0px;">&nbsp;</div>
	</center>
	</footer>
