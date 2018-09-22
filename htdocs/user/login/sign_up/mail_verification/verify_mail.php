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

if(isset($_GET['red'])&&!empty($_GET['red'])){
	$nx=decryptData($_GET['nx']);
	$ny=decryptData($_GET['ny']);
	$ne=decryptData($_GET['ne']);
	$nr=decryptData($_GET['nr']);
	$nrs=decryptData($_GET['nrs']);
	$nu=decryptData($_GET['nu']);
	$nb=decryptData($_GET['nb']);
	$ni=decryptData($_GET['ni']);
	$np=decryptData($_GET['np']);
	$nr=$nr.$nrs;
	//checking in database
	$query="SELECT * FROM hb_user_tmp_data WHERE ";
	$query.="first_name='".$nx."' AND ";
	$query.="last_name='".$ny."' AND ";
	$query.="email='".$ne."' AND ";
	$query.="rcode='".$nr."' AND ";
	$query.="username='".$nu."' AND ";
	$query.="browser='".$nb."' AND ";
	$query.="phone='".$np."' AND ";
	$query.="ip='".$ni."' LIMIT 1";
	
	if($rows=mysqli_query($hb_db,$query)){
	
		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
			if($row['email_verified']==false){
				if($row['first_name']==$nx && $row['last_name']==$ny && $row['email']==$ne && $row['rcode']==$nr && $row['username']==$nu && $row['browser']==$nb && $row['ip']==$ni && $row['phone']==$np){
					
					
					//redirect to the final registration
					header("location:/user/login/sign_up/registration/final_registration.php?nu=".$_GET['nu']."&nr=".$_GET['nr'].$_GET['nrs']."&ne=".$_GET['ne']."&red=13369");
					
					
					
				}else{
					echo "Some problem arised. Try again later.";
				}
			//end of if already verified
			}else{
				echo "Hey You alraedy an activated user please <a href='/user/login/sign_in/'>log in</a>.";
			}
		
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
