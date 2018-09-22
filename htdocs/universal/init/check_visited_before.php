<?php

//checking if some one access directly or not
include "init_protect.php";

$hb_user_visited_before=false; //default value

$rows=mysqli_query($hb_db,"SELECT ip FROM hb_user_visited_before_ip WHERE ip='".$hb_user_ip."'");
if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
	if($row['ip']==$_SERVER['REMOTE_ADDR']){
		$hb_user_visited_before=true;	
		
		
	}else{
		$hb_user_visited_before=false;
		//add to visited list
		$query="INSERT INTO hb_user_visited_before_ip SET ip='".$hb_user_ip."'";
		mysqli_query($hb_db,$query);
	}
}else{
	$hb_user_visited_before=false;
	//add to visited list
	$query="INSERT INTO hb_user_visited_before_ip SET ip='".$hb_user_ip."'";
	mysqli_query($hb_db,$query);
}

?>
