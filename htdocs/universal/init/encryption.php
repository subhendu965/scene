<?php

function encryptData($data){
	$encData='';
	for($i=0;$i<strlen($data);$i++){
		$encData.=ord($data[$i])+(201);
	}
	return $encData;
}

function decryptData($encData){
	$i=0;
	$data="";
	while($i<strlen($encData)){
		$data.=chr(substr($encData,$i,3)-201);
		$i+=3;
	}
	return $data;
}

?>
