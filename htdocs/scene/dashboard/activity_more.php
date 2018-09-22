<?php
/*if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']=="http://scene.hazrabrothers.com/dashboard/"){

}else{
	die("Unauthorized Entry!");
}*/
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17010;
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

if($hb_user_logged_in){

}else{
	die("You are not logged in. Please <a href='http://accounts.hazrabrothers.com/login/sign_in'>Log in</a> first to go to Scene Dashboard.");
}
//echo $_SERVER['HTTP_REFERER'];
echo "Done:";
include $rootpath."scene/image_class.php";
?>

<style>
#main_wrapper_5239{
	padding:10px;
}
#main_wrapper_5239 #header478{
	padding:10px;
	font-size:22px;
	border-bottom:1px solid rgba(0,0,0,0.6);
	text-align:center;
}
#main_wrapper_5239 .method4158{
	padding:10px;
	
}
#main_wrapper_5239 .method4158 .numbering2154{
	margin:0px 5px;
	font-weight:bold;
	background:rgba(0,0,0,0.5);
	background:-webkit-linear-gradient(left,#2299aa 80%,transparent,transparent);
	background:-moz-linear-gradient(left,#2299aa 80%,transparent,transparent);
	background:-ms-linear-gradient(left,#2299aa 80%,transparent,transparent);
	background:-o-linear-gradient(left,#2299aa 80%,transparent,transparent);

	color:white;
	
	border-top-left-radius:50px;
	border-bottom-left-radius:50px;
	padding:10px;
	padding-left:15px;
	
}

/*#main_wrapper_5239 .method4158 .line58{
	width:100%;
	height:1px;
	margin:5px 0px;
	background:rgba(0,0,0,0.5);
	background:-webkit-linear-gradient(left,#2299aa,transparent,transparent);
	background:-moz-linear-gradient(left,#2299aa,transparent,transparent);
	background:-ms-linear-gradient(left,#2299aa,transparent,transparent);
	background:-o-linear-gradient(left,#2299aa,transparent,transparent);
	border-radius:100px;

}*/
#main_wrapper_5239 .method4158 .img_cont_417kl{
	padding:20px;
}
#main_wrapper_5239 .method4158 #drop_mail_img_5432{
	background:url("/images/mail54.png");
	background-repeat:no-repeat;
	background-position:center center;
	background-size:contain;
	width:100px;
	height:80px;
	margin:auto;
}
#main_wrapper_5239 .method4158 #drop_mail_img_5432 a {
	text-decoration:none;
}
#main_wrapper_5239 .method4158 #drop_mail_img_5432 a div{
	width:100px;
	height:80px;
}

#main_wrapper_5239 .method4158 #feedback_5432{
	background:rgb(0,162,232);
	border-radius:5px;
	width:200px;
	text-align:center;
	margin:auto;
}
#main_wrapper_5239 .method4158 #feedback_5432 a{
	text-decoration:none;
	color:white;
}
#main_wrapper_5239 .method4158 #feedback_5432 a div{
	padding:15px;
}
#main_wrapper_5239 #block_account_547{
	background:rgb(198,34,91);
	border-radius:5px;
	text-align:center;
	width:300px;
	margin:auto;
}
#main_wrapper_5239 #block_account_547 a{
	color:white;
	text-decoration:none;
}
#main_wrapper_5239 #block_account_547 a div{
	padding:20px;	
}
#main_wrapper_5239 #footer457{
	padding:10px;
	font-size:15px;
	border-top:1px solid rgba(0,0,0,0.6);
	text-align:right;
}
</style>

<div id="main_wrapper_5239">
	<div id="header478">
		Know more about your activity
	</div>
	
	<div>
		<div>
			<p>
			Activity is very important for your privacy. We have recorded your activities as much possible as we can.
			In your dashboard you can see your most important activities.
			But beyond that there are many activities are recorded by us for your privacy and security.
			We believe that you have full right to know your own activities and you can detect whether any one is using your account or not.
			This is also will help us to make our system more strong and more secure. 
			So if you feel that there is any abnormal activities in your account which is not performed by you,
			you can contact us or you can get some information about suspicious activities.
			</p>
			
			<p>
			If you find any strange activity with your account, you should deactivate your account immediately and contact us to protect your account. 
			</p>
			
			<p>
			Remember we shall verify you before exchange information about any your activities.
			</p>
		</div>
		
		<div class="method4158">
			<div class="numbering2154">1. Drop a mail to</div> 
			<div class="img_cont_417kl">
				
				<div id="drop_mail_img_5432">
					<a href="mailto:support@hazrabrothers.com?to=support@hazrabrothers.com&subject=INFORMATION_ABOUT_MY_ACTIVITY" >
						<div>
						&nbsp;
						</div>
					</a>
				</div>
				
			</div>
			<div>
			Drop a mail to 
			<a href="mailto:support@hazrabrothers.com?to=support@hazrabrothers.com&subject=INFORMATION_ABOUT_MY_ACTIVITY" >support@hazrabrothers.com</a> 
			to get more information.
			Be sure to give title as <b>"INFORMATION_ABOUT_MY_ACTIVITY"</b> in exact string. 
			And then write something why you are wanting to know more about your activities.
			</div>
			
		</div>
		
			
		<div class="method4158">
			<div class="numbering2154">2. Give a feedback</div>
			<div class="img_cont_417kl">
				
				<div id="feedback_5432">
				<a href="http://scene.hazrabrothers.com/feedback?sub=INFORMATION_ABOUT_MY_ACTIVITY">
				<div>
				Feedback
				</div>
				</a>
				</div>
				
			</div>
			<div>
			Give a <a href="http://scene.hazrabrothers.com/feedback?sub=INFORMATION_ABOUT_MY_ACTIVITY">Feedback</a> with subject "INFORMATION_ABOUT_MY_ACTIVITY" in exact string.
			And then write something why you are wanting to know more about your activities.
			</div>
			
		</div>
		
		
		<div id="footer457">
		 We shall contact you within 4800 hour by phone or email.
		</div>
		<br>
		<br>
		<div>
			
			<div id="block_account_547">
			<a href="http://accounts.hazrabrothers.com/deactivate/?src=3dsh">
			<div>
			Deactivate your account now
			</div>
			</a>
			</div>
			
		</div>
	</div>
	
</div>
