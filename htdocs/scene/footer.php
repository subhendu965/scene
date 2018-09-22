<?php
//checking if some one access directly or not
if(isset($rootpath)){
	include $rootpath."universal/init/init_protect.php";
}else{
	die("Unautorized Entry!");
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>

<style id="style_for_ht_g56hg">#main_area{min-height:800px;}</style>

<footer id="hb_scene_footer">

<style>

	/*-------------------------------------------------------------------*/
	@media screen and (min-width:1000px){
		#hb_scene_footer #hb_scene_footer_links_845 div[id^=hb_ftlinks_77_]{
			display: inline-table;
			width:24%;
		}
		#hb_scene_footer #foot_note #socials{
			 display: inline-block;
		}
	}

	@media screen and (min-width:800px) and (max-width:999px){
		#hb_scene_footer #hb_scene_footer_links_845 div[id^=hb_ftlinks_77_]:nth-child(odd){
			display: inline-block;
			width:50%;
			float:left;
		}
		#hb_scene_footer #hb_scene_footer_links_845 div[id^=hb_ftlinks_77_]:nth-child(even){
			display: inline-block;
			width:50%;
			clear: both;
		}
		#hb_scene_footer #foot_note #socials{
			 display: inline-block;
		}
	}

	@media screen and (max-width:799px){
		#hb_scene_footer #hb_scene_footer_links_845 div[id^=hb_ftlinks_77_]{
			display: block;
		}
		#hb_scene_footer #foot_note #socials{
			 display: block;
		}
	}


#hb_scene_footer{
	width:100%;
	background:rgba(3,1,23,0.9);
	box-shadow:rgba(0,0,0,0.6) 0px -3px 4px;
	color:white;
	margin:0px;
	border-top:10px solid rgba(0,84,171,0.8);
	bottom:0px;
}
#hb_scene_footer>center{
	width:100%;
	border-top:1px solid rgba(228,245,255,0.8);
	padding:10px 0px;
}
#hb_scene_footer>center>div{
	width:270px;
}
#hb_scene_footer>center>div>#footer_label{
	float:right;
	cursor:pointer;
	padding:5px;
	font-size:20px;
}
#hb_scene_footer>center>div>#year_label{
	float:right;
	color:#00deff;
	cursor:default;
	padding:5px;
	font-size:20px;
}
#hb_scene_footer>center>div>img{
	float:right;
	padding:5px;
	transition: transform 0.5s;
}
#hb_scene_footer>center>div>img:hover{
	-webkit-transform:scale(-1,1);
	-moz-transform:scale(-1,1);
	transform:scale(-1,1);
}

/*----------------------------------------------------------------------------*/
#hb_scene_footer #foot_note{
	text-align:left;
	padding:10px 15px;
	font-size:20px;
    text-align: center;
}
#hb_scene_footer #foot_note>div{

}


#hb_scene_footer #foot_note #feedback{
    width:270px;
	display: inline-block;
	float:right;
    text-align: left;
}
#hb_scene_footer #foot_note #feedback a{
	text-decoration:none;
	color:#9db6da;
}
#hb_scene_footer #foot_note #feedback a > div{
    float:right;
    width:100px;
	font-size:12px;
	margin:0px 0px 0px 10px;
	padding:5px 15px;
	border-radius:5px;
	font-size:20px;
	transition:color 0.3s, background 0.3s;
}
#hb_scene_footer #foot_note #feedback a > #feedback_inner > div:first-child{
	font-size:12px;
}
#hb_scene_footer #foot_note #feedback a > #feedback_inner > div:last-child{
	font-size:20px;
}


#hb_scene_footer #foot_note #feedback a > #feedback_inner:hover{
	background:white;
	color:#57a;
}
#hb_scene_footer #foot_note #feedback a > #feedback_inner:focus{
	background:white;
	color:#57a;
}


#hb_scene_footer #foot_note #contact{
    width:270px;
	display: inline-block;
	float:left;
	padding-bottom:15px;
    text-align: left;
}

#hb_scene_footer #foot_note #contact>section{
	padding-top:5px;
}
#hb_scene_footer #foot_note #mail_image{
	float:left;
	width:30px;
	height:35px;
	margin-right:15px;
	background:url('/images/mail.png');
	background-size:contain;
	background-position:center center;
	background-repeat:no-repeat;
}
#hb_scene_footer #foot_note #mail_text{
	float:left;
	font-size:15px;
}
#hb_scene_footer #foot_note #mail_text a{
	text-decoration:none;
	color:#9db6da;
}
#hb_scene_footer #foot_note #mail_text a:hover{
	text-decoration:underline;
}
#hb_scene_footer #foot_note #mail_text a:focus{
	text-decoration:underline;
}
    #hb_scene_footer #foot_note #socials{
        width: auto;
        text-align: center;
    }
     #hb_scene_footer #foot_note #socials a>div{
        display: inline-block;
        width:20px;
        height:20px;
        background:url('/images/mail.png');
        background-size:contain;
        background-position:center center;
        background-repeat:no-repeat;
    }
	#hb_scene_footer #hb_scene_footer_links_845{
		width:100%;
		font-size:13px;
		text-align: center;
		margin-bottom:15px;
	}
	#hb_scene_footer #hb_scene_footer_links_845 div[id^=hb_ftlinks_77_]{
		margin:15px 0px;
		text-align: left;
	}
	#hb_scene_footer #hb_scene_footer_links_845 a{
		text-decoration: none;
	}
	#hb_scene_footer #hb_scene_footer_links_845 a div{
		margin:0px 10px 0px 10px;
		padding:5px 8px;
		color:white;
		cursor:pointer;
		transition:color 0.3s, background 0.3s;
	}
	#hb_scene_footer #hb_scene_footer_links_845 a:hover div{
		background: rgba(255,255,255,0.85);
		color:black;
	}


</style>

	<center>
		<div>
			<span id="year_label">| 2018</span>
			<div id="footer_label" onClick="window.location='/'">Hazra Brothers </div>
			<img src="/images/universal/icon.png" width="25px" height="25px">
		</div>
	<div style="clear:both;font-size:0px;height:0px;">&nbsp;</div>

	</center>
<?php ////////////////////////////////footer write///////////////////////////////////////////////////// ?>
	<div id="foot_note">

        <div id="socials">
           <a><div>&nbsp;</div></a>
           <a><div>&nbsp;</div></a>
           <a><div>&nbsp;</div></a>
           <a><div>&nbsp;</div></a>
           <a><div>&nbsp;</div></a>
           <a><div>&nbsp;</div></a>
        </div>

		<div id="feedback">
			<a href="/scene/feedback" target="_blank">
				<div id="feedback_inner">
				<div>Share your</div>
				<div>Feedback</div>
				</div>
			</a>
		</div>

		<div id="contact">

			<section>
                <a href="mailto:support@hazrabrothers.com?to=support@hazrabrothers.com"><div id="mail_image"></div></a>

				<div id="mail_text">
				Contact us at <br /><a href="mailto:?to=support@hazrabrothers.com">support@hazrabrothers.com</a>
				</div>
			</section>
		</div>

	</div>

	<div style="clear:both;font-size:0px;height:0px;">&nbsp;</div>
	<div id="hb_scene_footer_links_845">
		<div id="hb_ftlinks_77_1">
<?php if($hb_user_logged_in){
?>
			<a href="/user/dashboard/"><div>Manage Account</div></a>
			<a href="/scene/dashboard/"><div>Scene Dashboard</div></a>
			<a href="/user/login/logout.php"><div>Log Out</div></a>

<?php
}else{
?>
			<a href="/user/login/sign_up/registration"><div>Create Account</div></a>
			<a href="/usre/login/sign_in"><div>Log In</div></a>
<?php
} ?>
		</div>
		<div id="hb_ftlinks_77_2">
			<a href="/scene/upload/single"><div>Upload Single Image</div></a>
			<a href="/scene/upload/albums"><div>Upload an Album</div></a>
			<a href="/scene/terms_and_conditions"><div>Terms &amp; Conditions to Upload</div></a>
		</div>
		<div id="hb_ftlinks_77_3">
			<a><div>Site Map</div></a>
			<a><div>Help</div></a>
			<a href="/scene/scene_forum"><div>Scene Forum</div></a>
		</div>
		<div id="hb_ftlinks_77_4">
			<a><div>About Scene</div></a>
			<a><div>About Hazra Brothers</div></a>
			<a><div>Join Us</div></a>
		</div>
	</div>

	</footer>
