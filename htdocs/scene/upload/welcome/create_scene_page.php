<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17010;
$hb_folder_layer=3;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//include scene init
include $rootpath."scene/scene_init.php";
$error_status="";

if(!$hb_user_logged_in){
	die("<a href='http://accounts.hazrabrothers.com/login/sign_in'>Log in</a> first to to upload images to scene.");
}

if(isset($_POST['submit'])){

}else{
	die("Unauthorized entry");
}



if(isset($_POST['submit'])){

  if(isset($_POST['terms_accept']) && strtolower($_POST['terms_accept'])=="on"){
		//create user_data and user_gallery folders
		/////////check if user_gallery folder exists
			if(!file_exists($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username'])){
				mkdir($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']);
			}
			if(!file_exists($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/thumbnail")){
				mkdir($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/thumbnail");
			}
			/////////check if user_data folder exists
			if(!file_exists($rootpath."scene/user_data/user_".$_SESSION['hb_user']['username'])){
				mkdir($rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']);
			}
			if(!file_exists($rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/scene_masks")){
				mkdir($rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/scene_masks");
			}

		if(isset($_POST['dp_as_scene_mask']) && strtolower($_POST['dp_as_scene_mask'])=="on"){
			///if provided that use dp as scene mask

		}else{
			//Upload Scene mask if given otherwise just set profile picture as scene mask.
			if(isset($_FILES['scene_mask']) && !empty($_FILES['scene_mask']) && $_FILES['scene_mask']['tmp_name']!=""){
				//check the file
				if(strtolower(substr($_FILES['scene_mask']['type'],0,5))=="image"){
					//check file size
					if($_FILES['scene_mask']['size']>=512 && $_FILES['scene_mask']['size']<=(4*1024*1024)){

						//file extension
						$ext=strtolower(substr($_FILES['scene_mask']['type'],6));

						//check if the picture is jpg jpeg or gif or png
						if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif'){
							do{
								$shuffle=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,15);
								$filename=$shuffle.".".$ext;

									if($row=file_exists($rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/scene_masks/".$filename)){
										continue; //file name exists in database
									}else{
										break; //file does not exist
									}

							}while(1);

						}else{
							$error_status="We support jpg png and gif only as Scene mask.<br />";
							//show_upload_form();
						}
					}else{
						$error_status="Image of Scene mask should be between 512Bytes to 4MiB.<br />";
						//show_upload_form();
					}
				}else{
					$error_status="Please provide a valid image.<br />";
					//show_upload_form();
				}
			}else{
				//copy profile pictutre to scene mask
				//obviously set $filename variable to the name of copied file for database record of scene_mask_current
				$filename="";

				$error_status.="Your Scene Mask is not set. You can change it any time from <a href='http://scene.hazrabrothers.com/dashboard'>Scene Dashboard</a>.<br />";
			}
		}


		////if scene_name is not set then create it from first and last name
		if(isset($_POST['scene_name']) && !empty($_POST['scene_name'])){
			$scene_name=$_POST['scene_name'];
		}else{
			$scene_name=$_SESSION['hb_user']['first_name']." ".$_SESSION['hb_user']['last_name'];
			$error_status.="Your Scene Name is set as ".$scene_name.". You can change it any time from <a href='http://scene.hazrabrothers.com/dashboard'>Scene Dashboard</a>.<br />";
		}


			//create a record of uploader page.

	    		$query="INSERT INTO hb_scene_pages SET ";
			$query.="uploader_id='".$_SESSION['hb_user']['user_id']."',";
			$query.="scene_name='".$scene_name."',";
			$query.="scene_mask_current='".$filename."',";
			$query.="scene_cover_photo_current='DEFSCP6922',";
			$query.="date_of_join='".date("Y-m-d")."',";
			$query.="time_of_join='".date("H:i:s")."',";
			$query.="username='".$_SESSION['hb_user']['username']."',";
			$query.="total_images='0',";
			$query.="total_albums='0',";
			$query.="gain_liked='0',";
			$query.="gain_unliked='0',";
			$query.="gain_rating='0',";
			$query.="gain_share='0',";
			$query.="gain_comment='0',";
			$query.="gain_view='0',";
			$query.="gain_download='0'";

			//check if already exist user_data
			$uq="SELECT sl,username FROM hb_scene_pages WHERE username='".$_SESSION['hb_user']['username']."' LIMIT 1";
			if($uqs=mysqli_query($hb_scene_db,$uq)){
					if($ruqr=mysqli_fetch_array($uqs,MYSQLI_BOTH)){
						if($ruqr['username']==$_SESSION['hb_user']['username']){
							///unset session
								//unset($_SESSION['hb_scene']['tmp_uploader_welcome']);
								//echo "<script>window.location.href='http://scene.hazrabrothers.com/upload/single'</script>";
								header("location:http://scene.hazrabrothers.com/upload/single");
						}
					}else{

						////////////////move uploaded file
						move_uploaded_file($_FILES['scene_mask']['tmp_name'],$rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/scene_masks/".$filename);
						//add to database
						if(mysqli_query($hb_scene_db,$query)){
							////unset session
							//unset($_SESSION['hb_scene']['tmp_uploader_welcome']);
							//echo "<script>window.location.href='http://scene.hazrabrothers.com/upload/single'</script>";
							header("location:http://scene.hazrabrothers.com/upload/welcome/final.php?err=".$error_status."&uid=".$_SESSION['hb_user']['user_id']);

						}else{

							echo "Some problem occured to create your Scene Page! Try after some time or conatct to Scene team.";
						}


					}

			}



	    //echo "Your Scene Upload Page is created success fully.";


  }else{
    echo "You have to accept the trems and conditions of Scene to upload images!";
  }
}
?>
