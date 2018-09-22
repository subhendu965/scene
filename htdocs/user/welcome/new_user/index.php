<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17006;
$hb_folder_layer=3;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

if(!$hb_user_logged_in){
	die("<a href='http://accounts.hazrabrothers.com/login/sign_in/'>Log In</a> first to manage your Hazra Brothers account");
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "Welcome ".$_SESSION['hb_user']['first_name']." ".$_SESSION['hb_user']['last_name'];
?>


