<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17010;
$hb_folder_layer=4;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_POST['submit_reg']) && isset($_POST['verify_code'])){
$verify_code=decryptData($_POST['verify_code']);

$query="SELECT rcode FROM hb_user_tmp_data WHERE rcode='".$verify_code."' LIMIT 1";
if($rows=mysqli_query($hb_db,$query)){
	$row=mysqli_fetch_array($rows,MYSQLI_BOTH);
	if($row['rcode']==$verify_code){

	}else{
		die("some problem there");
	}
	$results=mysqli_query($hb_db,"SELECT sl FROM hb_user_main_security WHERE sqcode='".$verify_code."' LIMIT 1");
		if($result=mysqli_fetch_array($results,MYSQLI_BOTH)){
			echo "Hey You alraedy an activated user please <a href='/user/login/sign_in/'>log in</a>.";
		}else{
			//generating user_id 15 digits
			/*
			redirect to final_registration
			*/

			//redirect to the final registration
			header("location:/user/login/sign_up/registration/final_registration.php?nr=".encryptData($verify_code)."&red=15968");

		}
}else{
		echo "Error occured";
	}

}else{
	echo "unauthrized entry";
}

?>
