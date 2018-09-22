<?php
//checking if some one access directly or not
if(isset($rootpath)){
	include $rootpath."universal/init/init_protect.php";
}else{
	die("Unautorized Entry!");
}

$http_host=trim($_SERVER['HTTP_HOST']);
$request_uri=trim($_SERVER['REQUEST_URI']);

//echo "http://scene.hazrabrothers.com".substr($request_uri,6);
//echo $http_host;
//echo "<br>";
//echo $requested_uri;
if($http_host=="hazrabrothers.com"){
	header("location:http://scene.hazrabrothers.com".substr($request_uri,6));
}
//die();
$hb_scene_db=mysqli_connect("localhost","hazrabro_wehb","Tiku4&Vuchu5","hazrabro_scene");

if($hb_user_logged_in){
	if(!file_exists($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username'])){
		mkdir($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']);
	}
	if(!file_exists($rootpath."scene/user_data/user_".$_SESSION['hb_user']['username'])){
		mkdir($rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']);
	}

	$query="SELECT sl FROM hb_scene_users WHERE user_id='".$_SESSION['hb_user']['user_id']."' LIMIT 1 ";
	if($rows=mysqli_query($hb_scene_db,$query)){
		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){

		}else{
			$ref_code=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,15);
			$query="INSERT INTO hb_scene_users SET ";
			$query.="user_id='".$_SESSION['hb_user']['user_id']."', ";
			$query.="date_of_join='".date("Y-m-d")."', ";
			$query.="time_of_join='".date("H:i:s")."', ";
			$query.="points='0', ";
			$query.="total_liked='0', ";
			$query.="total_unliked='0', ";
			$query.="total_rating='0', ";
			$query.="total_share='0', ";
			$query.="total_comment='0', ";
			$query.="total_view='0', ";
			$query.="total_download='0', ";
			$query.="refer_by_you='0', ";
			$query.="ref_code='".$ref_code."', ";
			$query.="ref_success='0'";

			if(mysqli_query($hb_scene_db,$query)){

			}else{
				echo mysqli_error($hb_scene_db);
			}
		}
	}else{

	}

}


?>
