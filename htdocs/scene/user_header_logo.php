<?php
//checking if some one access directly or not
if(isset($rootpath)){
	include $rootpath."universal/init/init_protect.php";
}else{
	die("Unautorized Entry!");
}
?>
<style>
#hb_user_header_account_5449_logo{
	display:inline-block;
	width:36px;
	height:36px;
	float:right;
	margin:4px;
	padding:0px;
	border:3px solid transparent;
	border-radius:100px;
	background-image:url("/images/jjkl.JPG");
	background-size:cover;
	background-repeat:no-repeat;
	background-position: center center;
	background-clip:padding-box;
	cursor:pointer;
	color:black;
	transition:background 0.5s,border 0.3s, border-radius 0.3s;
}
</style>

<script>

bln_expand_hb_user_header_account_5449_toSignInDiv = false;
bln_expand_hb_user_header_account_5449_afterSignInDiv = false;

</script>

<div id="hb_user_header_account_5449_logo" style="float:right; color:white;" onMouseOver="expand_hb_user_header_account_5449_div_over(this,true);" onMouseOut="expand_hb_user_header_account_5449_div_over(this,false);" onClick="expand_hb_user_header_account_5449_signInDiv(this);">&nbsp;</div>



<?php if($hb_user_logged_in){ // If user logged in then show this ?>

<style>
#hb_user_header_account_5449_div_afterLogin{
	position:absolute;
	right:0px;
	top:50px;
	width:200px;
	transform-origin:100% 0%;
	transform:scale(0,0);
	opacity:0;
	overflow:hidden;
	font-size:15px;
	color:black;
	margin:0px;
	padding:20px;
	z-index:100;
	background-color:white;
	text-align:center;
	border:1px solid rgba(0,0,0,0.5);
	border-bottom-left-radius:10px;
	box-shadow:rgba(0,0,0,0.5) -2px 2px 3px;
	transition:transform 0.3s, opacity 0.3s;
}

#hb_user_header_account_5449_div_afterLogin #hb_user_header_account_5449_user_logo{
	width:70px;
	height:70px;
	margin:auto;
	background-color:#ccc;
	background-image:url("/images/jjkl.JPG");
	background-size:cover;
	background-repeat:no-repeat;
	background-position: center center;
	background-clip:padding-box;
	border-radius:200px;
	box-shadow:rgba(0,0,0,0.5) 0px 0px 5px;
}
#hb_user_header_account_5449_div_afterLogin a{
	text-decoration:none;
	color:black;
}
/*-------------------*/

#hb_user_header_account_5449_div_afterLogin #hb_user_header_account_5449_users_name_label{
	max-height:69px;
	margin:15px 0px 10px 0px;
	padding:0px;
	overflow:hidden;
	font-size:17px;
}
#hb_user_header_account_5449_div_afterLogin #hb_user_header_account_5449_sceneDashboard_button div{
	padding:10px;
	color:#016b45;
	border:3px solid #016b45;
	border-radius:5px;
	transition:background-color 0.3s, color 0.3s;
}
#hb_user_header_account_5449_div_afterLogin #hb_user_header_account_5449_sceneDashboard_button div:hover{
	background-color:#016b45;
	color:white;
}
/*-----------------------------------------------*/

#hb_user_header_account_5449_div_afterLogin #hb_user_header_account_5449_bottom_line{

}

#hb_user_header_account_5449_div_afterLogin #hb_user_header_account_5449_myAccount_button div{
	width:85px;
	display:inline-block;
	float:left;
	font-size:12px;
	margin:15px 0px 0px 0px;
	padding:5px;
	color:#555;
	text-align:center;
	border-radius:5px;
	transition:background-color 0.3s, color 0.3s;
}
#hb_user_header_account_5449_div_afterLogin #hb_user_header_account_5449_myAccount_button div:hover{
	background-color:#033263;
	color:white;
}


/*-----------------------------------------------*/

#hb_user_header_account_5449_div_afterLogin #hb_user_header_account_5449_signOut_button div{
	width:85px;
	display:inline-block;
	float:right;
	font-size:12px;
	margin:15px 0px 0px 0px;
	padding:5px;
	color:#555;
	text-align:center;
	border-radius:5px;
	transition:background-color 0.3s, color 0.3s;
}
#hb_user_header_account_5449_div_afterLogin #hb_user_header_account_5449_signOut_button div:hover{
	background-color:#af2e2e;
	color:white;
}



</style>

	<div id="hb_user_header_account_5449_div_afterLogin">
		<div id="hb_user_header_account_5449_user_logo"> </div>

		<div id="hb_user_header_account_5449_users_name_label"><?php echo $_SESSION['hb_user']['first_name']." ".$_SESSION['hb_user']['last_name']; ?></div>
		<a href="/scene/dashboard/" id="hb_user_header_account_5449_sceneDashboard_button"><div>Scene Dashboard</div></a>

		<div id="hb_user_header_account_5449_bottom_line">
			<a href="/user/dashboard/" id="hb_user_header_account_5449_myAccount_button"><div>My Account</div></a>
			<a href="/user/login/logout.php" id="hb_user_header_account_5449_signOut_button"><div>Sign Out</div></a>
		</div>

	</div>

<script>


function expand_hb_user_header_account_5449_signInDiv(obj){
	var userDiv = document.querySelector("#hb_user_header_account_5449_div_afterLogin");

	if(!bln_expand_hb_user_header_account_5449_afterSignInDiv){
		userDiv.style.transform="scale(1,1)";
		userDiv.style.opacity="1";

		obj.style.borderRadius="4px";
		bln_expand_hb_user_header_account_5449_afterSignInDiv = true;
	}else{
		userDiv.style.transform="scale(0,0)";
		userDiv.style.opacity="0";

		obj.style.borderRadius="100px";
		bln_expand_hb_user_header_account_5449_afterSignInDiv = false;
	}
}

</script>


<?php }
else{ // If user not logged in ?>


<style>
#hb_user_header_account_5449_div_toLogin{
	position:absolute;
	right:0px;
	top:50px;
	width:150px;
	transform-origin:100% 0%;
	transform:scale(0,0);
	opacity:0;
	overflow:hidden;
	font-size:15px;
	color:black;
	margin:0px;
	padding:20px;
	z-index:100;
	background-color:white;
	text-align:center;
	border:1px solid rgba(0,0,0,0.5);
	border-bottom-left-radius:10px;
	box-shadow:rgba(0,0,0,0.5) -2px 2px 3px;
	transition:transform 0.3s, opacity 0.3s;
}

#hb_user_header_account_5449_div_toLogin a{
	text-decoration:none;
	color:black;
}
/*-------------------*/
#hb_user_header_account_5449_div_toLogin #hb_user_header_account_5449_signIn_label{
	padding:0px 0px 5px 0px;
}
#hb_user_header_account_5449_div_toLogin #hb_user_header_account_5449_signIn_button div{
	padding:10px;
	color:#4685c5;
	border:3px solid #4685c5;
	border-radius:5px;
	transition:background-color 0.3s, color 0.3s;
}
#hb_user_header_account_5449_div_toLogin #hb_user_header_account_5449_signIn_button div:hover{
	background-color:#4685c5;
	color:white;
}
#hb_user_header_account_5449_div_toLogin #hb_user_header_account_5449_signUp_label{
	padding:15px 0px 5px 0px;
}
#hb_user_header_account_5449_div_toLogin #hb_user_header_account_5449_signUp_button div{
	padding:10px;
	color:#018a1e;
	border:3px solid #018a1e;
	border-radius:5px;
	transition:background-color 0.3s, color 0.3s;
}
#hb_user_header_account_5449_div_toLogin #hb_user_header_account_5449_signUp_button div:hover{
	background-color:#018a1e;
	color:white;
}
#hb_user_header_account_5449_div_toLogin #hb_user_header_account_5449_forgetPassword_button{
	text-align:right;
}
#hb_user_header_account_5449_div_toLogin #hb_user_header_account_5449_forgetPassword_button div{
	width:100px;
	float:right;
	font-size:12px;
	margin:15px 0px 0px 0px;
	padding:5px;
	color:#555;
	text-align:center;
	border-radius:5px;
	transition:background-color 0.3s, color 0.3s;
}
#hb_user_header_account_5449_div_toLogin #hb_user_header_account_5449_forgetPassword_button div:hover{
	background-color:#555;
	color:white;
}

</style>

	<div id="hb_user_header_account_5449_div_toLogin">

		<div id="hb_user_header_account_5449_signIn_label">Yet not signed in?</div>
		<a href="/user/login/sign_in?pgid=186TSJTzcn" id="hb_user_header_account_5449_signIn_button"><div>Sign In</div></a>
		<div id="hb_user_header_account_5449_signUp_label">Not a User?</div>
		<a href="/user/login/sign_up/registration" id="hb_user_header_account_5449_signUp_button"><div>Sign Up</div></a>
		<a href="/user/login/sign_in/forget_password" id="hb_user_header_account_5449_forgetPassword_button"><div>Forget Pasword</div></a>

	</div>

<script>


function expand_hb_user_header_account_5449_signInDiv(obj){
	var userDiv = document.querySelector("#hb_user_header_account_5449_div_toLogin");

	if(!bln_expand_hb_user_header_account_5449_toSignInDiv){
		userDiv.style.transform="scale(1,1)";
		userDiv.style.opacity="1";

		obj.style.borderRadius="4px";
		bln_expand_hb_user_header_account_5449_toSignInDiv = true;
	}else{
		userDiv.style.transform="scale(0,0)";
		userDiv.style.opacity="0";

		obj.style.borderRadius="100px";
		bln_expand_hb_user_header_account_5449_toSignInDiv = false;
	}
}

</script>


<?php } ?>


<script>

function expand_hb_user_header_account_5449_div_over(obj,state){
	if(!bln_expand_hb_user_header_account_5449_toSignInDiv && !bln_expand_hb_user_header_account_5449_afterSignInDiv){
		if(state){
			obj.style.borderColor="white";
		}else{
			obj.style.borderColor="transparent";
		}
	}else{

	}
}

</script>
