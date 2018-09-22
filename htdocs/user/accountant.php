<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17009;
$hb_folder_layer=1;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_GET['senderid']) && isset($_GET['sendersecurity'])){
	if(decryptData($_GET['sendersecurity'])=="Anj5213964xgh0d"){
		$nr=decryptData($_GET['nr']);
		$signed=$_GET['signed'];
		$query="SELECT username,user_id,email,sqcode from hb_user_main_security WHERE sqcode='".$nr."' LIMIT 1";
		if($rows=mysqli_query($hb_db,$query)){
			if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
				if($nr==$row['sqcode']){
					//setting from security
					$_SESSION['hb_user']['username']=$row['username'];
					$_SESSION['hb_user']['email']=$row['email'];
					$_SESSION['hb_user']['sqcode']=$row['sqcode'];
					$_SESSION['hb_user']['user_id']=$row['user_id'];
					$user_id=$row['user_id'];
					//setting from biodata
					$query="SELECT first_name,last_name,gender,user_id from hb_user_main_biodata WHERE user_id='".$user_id."' LIMIT 1";
					if($rows=mysqli_query($hb_db,$query)){
						if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
							if($user_id==$row['user_id']){
								$_SESSION['hb_user']['first_name']=$row['first_name'];
								$_SESSION['hb_user']['last_name']=$row['last_name'];
								$_SESSION['hb_user']['gender']=$row['gender'];
								$_SESSION['hb_user']['stay']=$signed;


								//setting cookie
								if($signed){
								 $query="SELECT username,email from hb_user_main_security WHERE sqcode='".$nr."' LIMIT 1";

								    	if($rows=mysqli_query($hb_db,$query)){
						                    if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
						                        	setcookie("hb_user_username",$row['username'],time()+30*24*3600,"/",".hazrabrothers.com",false,true);
									                setcookie("hb_user_email",$row['email'],time()+30*24*3600,"/",".hazrabrothers.com",false,true);
						                    }
								    	}
								}
								$nr=encryptData($nr);
								$sendersecurity="Anj5213964xmb0d";
								$sendersecurity=encryptData($sendersecurity);
								$url="location:http://scene.hazrabrothers.com/accountant.php?senderid=accountpage&";
								$url.="sendersecurity=".$sendersecurity."&";
								$url.="nr=".$nr."&signed=".$signed;

								if(isset($_GET['pgid']) && !empty($_GET['pgid'])){
									$url.="&pgid=".$_GET['pgid'];
								}else{

								}

								header($url);



							}
						}
					}

					//end of biodata setting


				}
			}
		}
	}elseif(decryptData($_GET['sendersecurity'])=="Anj5213973xgh0d"){
		unset($_SESSION['hb_user']);
		unset($_SESSION['hb_scene']);
		setcookie("hb_user_username","",time()-100,"/",".hazrabrothers.com",false,true);
		setcookie("hb_user_email","",time()-100,"/",".hazrabrothers.com",false,true);
		header("location:http://hazrabrothers.com");

		$sendersecurity="Anj5213973xmb0d";
		$sendersecurity=encryptData($sendersecurity);
		$url="location:http://scene.hazrabrothers.com/accountant.php?senderid=accountpage&";
		$url.="sendersecurity=".$sendersecurity;
		header($url);
	}

}else{

echo "something wrong";
}

?>
