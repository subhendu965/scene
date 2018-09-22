<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17007;
$hb_folder_layer=2;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sendersecurity="Anj5213973xmj0d";
$sendersecurity=encryptData($sendersecurity);
$url="location:/accountant.php?senderid=accountpage&";
$url.="sendersecurity=".$sendersecurity;
header($url);

?>
