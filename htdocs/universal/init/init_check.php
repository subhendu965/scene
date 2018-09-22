<?php

//checking if some ine access directly or not
include "init_protect.php";

//Strting the session
session_start();

//getting the ip address.
$hb_user_ip=$_SERVER['REMOTE_ADDR'];

//hazra brothers system name
$hb_system_name="FS"; //First Shadow

//hazra brothers system version
$hb_system_version="1.0";

//getting user's os
//$hb_user_os is the variable
include $rootpath."universal/init/os_check.php";

//getting user's browser
//$hb_user_browser is the variable
include $rootpath."universal/init/browser_check.php";

//grtting user's country
//$hb_user_country_two, $hb_user_country_three, $hb_user_country_full
include $rootpath."universal/init/country_check.php";

//connecting and opening database
$hb_db=mysqli_connect("localhost","hazrabro_wehb","Tiku4&Vuchu5","hazrabro_user");

//check outsider blocked list
//$hb_user_outsider_block (bool)
include $rootpath."universal/init/check_blocked_ip.php";

//check if visited 
//$hb_user_visited_before (bool)
include $rootpath."universal/init/check_visited_before.php";

//check if user logged in

//******check logged in through session ****************
if(isset($_SESSION['hb_user']['username']) && isset($_SESSION['hb_user']['email']) && isset($_SESSION['hb_user']['sqcode'])){
	
	$hb_user_logged_in=true;
	
	//setting cookie 
	if(isset($_SESSION['hb_user']['stay']) && $_SESSION['hb_user']['stay']=="true"){
		setcookie("hb_user_username",$_SESSION['hb_user']['username'],time()+30*24*3600,"/",".hazrabrothers.com",false,true);
		setcookie("hb_user_email",$_SESSION['hb_user']['email'],time()+30*24*3600,"/",".hazrabrothers.com",false,true);
	
	}
									
}elseif(isset($_COOKIE['hb_user_username']) && isset($_COOKIE['hb_user_email'])){

//******check logged in through cookie ****************
	
	
	
	$query="SELECT username,user_id,email,sqcode from hb_user_main_security WHERE username='".$_COOKIE['hb_user_username']."' AND email='".$_COOKIE['hb_user_email']."' LIMIT 1";
	if($rows=mysqli_query($hb_db,$query)){
		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
			if($_COOKIE['hb_user_username']==$row['username'] && $_COOKIE['hb_user_email']==$row['email']){
				//setting from security
				$_SESSION['hb_user']['username']=$row['username'];
				$_SESSION['hb_user']['email']=$row['email'];
				$_SESSION['hb_user']['sqcode']=$row['sqcode'];
				$_SESSION['hb_user']['user_id']=$row['user_id'];
				$user_id=$row['user_id'];
				//setting from biodata
				$query="SELECT first_name,last_name,gender,user_id from hb_user_main_biodata WHERE user_id='".$user_id."' LIMIT 1";
				if($rows=mysqli_query($hb_db,$query)){
					if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
						if($user_id==$row['user_id']){
							$_SESSION['hb_user']['first_name']=$row['first_name'];
							$_SESSION['hb_user']['last_name']=$row['last_name'];
							$_SESSION['hb_user']['gender']=$row['gender'];
						}
					}
				}
				
				//////////////increase cookie time
				setcookie("hb_user_username",$_COOKIE['hb_user_username'],time()+30*24*3600,"/",".hazrabrothers.com",false,true);
				setcookie("hb_user_email",$_COOKIE['hb_user_email'],time()+30*24*3600,"/",".hazrabrothers.com",false,true);
				
				$hb_user_logged_in=true;
			}else{
				$hb_user_logged_in=false;
			}
		}else{
			$hb_user_logged_in=false;
		}
	}else{
		$hb_user_logged_in=false;
	}	
}else{
	$hb_user_logged_in=false;
}

//encryption function
include $rootpath."universal/init/encryption.php";
?>
