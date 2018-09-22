<?php

/*if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']=="http://accounts.hazrabrothers.com/dashboard/"){

}else{
	die("Unauthorized Entry!");
}*/
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17006;
$hb_folder_layer=2;
$rootpath='';
for($i=1; $i<=$hb_folder_layer; $i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

if(!$hb_user_logged_in){
	die("<a href='/user/login/sign_in/'>Log In</a> first to manage your Hazra Brothers account");
}

echo "Done: ";
?>
Hi, <?php echo $_SESSION['hb_user']['first_name']." ".$_SESSION['hb_user']['last_name']; ?>
