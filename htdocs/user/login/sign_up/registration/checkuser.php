<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17005;
$hb_folder_layer=4;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////Username checking////////////////////////////////////////////////////////////////////////////////////////

if(isset($_GET['username']) && !empty($_GET['username'])){
	$query="SELECT sl FROM hb_user_main_security WHERE username='".$_GET['username']."'";
	if($rows=mysqli_query($hb_db,$query)){
		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
			echo "Inform:2106";
		}else{
			$query="SELECT sl FROM hb_user_tmp_data WHERE username='".$_GET['username']."'";
			if($rows=mysqli_query($hb_db,$query)){
				if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
					echo "Inform:2106"; //U=>21 and F=>06 Username False
				}else{
					echo "Inform:2120"; //U=>21 and T=>20 Username True
				}
			}
			//echo "Inform:".mysqli_error($hb_db);
		}
	}else{
		//echo "Inform:".mysqli_error($hb_db);
	}

}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////email checking/////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_GET['email']) && !empty($_GET['email'])){
	$query="SELECT sl FROM hb_user_main_security WHERE email='".$_GET['email']."'";
	if($rows=mysqli_query($hb_db,$query)){
		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
			echo "Inform:0506";
		}else{
			$query="SELECT sl FROM hb_user_tmp_data WHERE email='".$_GET['email']."'";
			if($rows=mysqli_query($hb_db,$query)){
				if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
					echo "Inform:0506"; //E=>05 F=>06 Email False
				}else{
					echo "Inform:0520"; //E=>05 T=>20 Email True
				}
			}
			//echo "Inform:".mysqli_error($hb_db);
		}
	}else{
		//echo "Inform:".mysqli_error($hb_db);
	}

}
?>
