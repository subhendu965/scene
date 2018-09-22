<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$hb_folder_layer=4;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

$pageid="17003";
//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////
//Decode the text.

if(isset($_GET['red'])&&!empty($_GET['red'])&&$_GET['red']==13368){
	$x=decryptData($_GET['x']);
	$y=decryptData($_GET['y']);
	$z=decryptData($_GET['z']);
	$u=decryptData($_GET['u']);
	
	$rcode=$x.substr($y,0,5);
	$rsq=substr($y,5).$z;
	$u_request=$u;
	
	
	//checking in database
	$query="SELECT * FROM hb_user_forget_password WHERE ";
	$query.="rcode='".$rcode."' AND ";
	$query.="rsq='".$rsq."' AND ";
	$query.="u_request='".$u_request."' LIMIT 1";
	
	if($rows=mysqli_query($hb_db,$query)){
	
		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
			$_SESSION['hb_user']['reset_password']="fgp8595";
			$_SESSION['hb_user']['reset_password_email']=$row['email'];
			//redirect to reset password page.
			header("location: /user/login/sign_in/reset_password/");
		
		//end of fetch array	
		}else{
			echo "Some problem arised. Try again later.";
		}
	//end of main query
	}else{
		echo mysqli_error($hb_db);
	}
}else{
	echo "unauthorize entry";
}
?>
