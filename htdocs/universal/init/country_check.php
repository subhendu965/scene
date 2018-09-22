<?php
//checking if some ine access directly or not
include "init_protect.php";
$_SERVER['REMOTE_ADDR']="127.0.0.1";
$ip_number=preg_split("/\./",$_SERVER['REMOTE_ADDR']);

include $rootpath."universal/third_party/ip_files/".$ip_number[0].".php";
$country_code=($ip_number[0]*16777216)+($ip_number[1]*65536)+($ip_number[2]*256)+($ip_number[3]);

foreach($ranges as $country_key=>$country_value){
	if($country_key<=$country_code){
		if($ranges[$country_key][0]>=$country_code){
		$hb_user_country_two=$ranges[$country_key][1];
		break;
		}
	}
}

include $rootpath."universal/third_party/ip_files/countries.php";

foreach($countries as $country_two=>$country_other){
	if($hb_user_country_two==$country_two){
		$hb_user_country_three=$country_other[0];
		$hb_user_country_full=$country_other[1];
	}
}


?>
