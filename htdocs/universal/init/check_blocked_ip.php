<?php

//checking if some ine access directly or not
include "init_protect.php";

$hb_user_outsider_block=false; //default value

$rows=mysqli_query($hb_db,"SELECT ip FROM hb_user_outsider_blocked_ip WHERE ip='".$_SERVER['REMOTE_ADDR']."'");
if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
	if($row['ip']==$_SERVER['REMOTE_ADDR']){
		$hb_user_outsider_block=true;
		die("Sorry You are blocked!");
	}else{
		$hb_user_outsider_block=false;
	}
}

?>
