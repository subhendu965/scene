<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17006;
$hb_folder_layer=2;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

if($hb_user_logged_in){
	header("location:new_user");
}else{

}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

print_r($_SERVER);

?>