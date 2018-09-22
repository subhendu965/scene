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
//include scene init
include $rootpath."scene/scene_init.php";

if(isset($_SESSION['hb_scene']['single_file_upload_user_96523']) && $_SESSION['hb_scene']['single_file_upload_user_96523']=="Gfx62Pliu26E"){
	if(isset($_POST['imageid']) && !empty($_POST['imageid'])){

	}else{
		die("Unable to update settings!");
	}
	$status="";

	//show updated successfully
	echo "
	<style>
	#ll77_main_div{
		margin:5px;
		text-align:center;
	}
	#ll77_main_div #ll77_main_div_unit{
		margin-bottom:5px;
	}
	#ll77_main_div #ll77_img_uploaded{
		font-family:montserrat_regular;
		font-size:22px;
		margin:0px 0px 5px 0px;
	}
	#ll77_main_div #ll77_img_dashboad_label{
		font-size:14px;
		margin:8px 0px;
	}
	#ll77_main_div #ll77_img_dashboad_link{
		text-decoration:none;
	}
	#ll77_main_div #ll77_img_dashboad_link>div{
		width:200px;
		margin:5px auto;
		padding:5px 10px;
		color:#033f82;
		background-color:rgba(240,255,248,0.75);
		border:3px solid #033f82;
		border-radius:5px;
		transition:background-color 0.3s, color 0.3s;
	}
	#ll77_main_div #ll77_img_dashboad_link>div:hover{
		background-color:#033f82;
		color:white;
	}
	#ll77_main_div #ll77_img_data_info{
		font-size:12px;
		text-align:left;
		margin:8px 0px;
	}
	#ll77_main_div #ll77_img_data_info li{
		margin:3px 0px;
	}
	#ll77_main_div #ll77_img_upload_link{
		margin:5px 0px;
		text-align:center;
	}
	#ll77_main_div #ll77_img_upload_single{
		text-decoration:none;
	}
	#ll77_main_div #ll77_img_upload_single>div{
		display:inline-block;
		width:200px;
		margin:5px;
		padding:5px 10px;
		color:#018a1e;
		background-color:rgba(250,240,255,0.75);
		border:3px solid #018a1e;
		border-radius:5px;
		transition:background-color 0.3s, color 0.3s;
	}
	#ll77_main_div #ll77_img_upload_single>div:hover{
		background-color:#018a1e;
		color:white;
	}
	#ll77_main_div #ll77_img_upload_album{
		text-decoration:none;
	}
	#ll77_main_div #ll77_img_upload_album>div{
		display:inline-block;
		width:200px;
		margin:5px;
		padding:5px 10px;
		color:#d85c00;
		background-color:rgba(255,242,240,0.75);
		border:3px solid #d85c00;
		border-radius:5px;
		transition:background-color 0.3s, color 0.3s;
	}
	#ll77_main_div #ll77_img_upload_album>div:hover{
		background-color:#d85c00;
		color:white;
	}
	</style>

	<div id='ll77_main_div'>
	<div id='ll77_main_div_unit'>
		<div id='ll77_img_uploaded'>Your image is uploaded.</div>
		<div id='ll77_img_dashboad_label'>Your image is uploaded successbully. Image parameters like name, story, who can download etc can be changed from scene dashboard anytime.</div>
		<a id='ll77_img_dashboad_link' href='http://scene.hazrabrothers.com/dashboard'><div>Go to Scene Dashboard</div></a>
	</div>
	<!-- show what is updated successfully -->
	<div id='ll77_img_data_info'>
	";

/////////////////////update name
	if(isset($_POST['name']) && !empty($_POST['name'])){
		$query="UPDATE hb_scene_images SET name='".mysqli_real_escape_string($hb_scene_db,$_POST['name'])."' WHERE uniq_image_id='".$_POST['imageid']."'";
		if(mysqli_query($hb_scene_db,$query)){
			$status.="<li>Image name succesfully updated!</li>";
		}else{
			$status.="<li>Image name can not be set.</li>";
		}
	}

	////////////////////update category
	if(isset($_POST['category']) && !empty($_POST['category'])){
		$query="UPDATE hb_scene_images SET category='".mysqli_real_escape_string($hb_scene_db,$_POST['category'])."' WHERE uniq_image_id='".$_POST['imageid']."'";
		if(mysqli_query($hb_scene_db,$query)){
			$status.="<li>Image category succesfully updated!</li>";
		}else{
			$status.="<li>Image category can not be set.</li>";
		}
	}

	///////////////////update privacy
	if(isset($_POST['privacy']) && !empty($_POST['privacy'])){
		$query="UPDATE hb_scene_images SET privacy='".mysqli_real_escape_string($hb_scene_db,$_POST['privacy'])."' WHERE uniq_image_id='".$_POST['imageid']."'";
		if(mysqli_query($hb_scene_db,$query)){
			$status.="<li>Image privacy succesfully updated!</li>";
		}else{
			$status.="<li>Image privacy can not be set.</li>";
		}
	}

	///////////////////update points
	if(isset($_POST['points']) && !empty($_POST['points'])){
		$query="UPDATE hb_scene_images SET price='".mysqli_real_escape_string($hb_scene_db,$_POST['price'])."' WHERE uniq_image_id='".$_POST['imageid']."'";
		if(mysqli_query($hb_scene_db,$query)){
			$status.="<li>Ponits of image saved succesfully and yet to verify by us. You will be notify when verification is done. Only after verification price of your image can be set!</li>";
		}else{
			$status.="<li>Points of image can not be saved.".mysqli_error($hb_scene_db)."</li>";
		}
	}

	///////////////////update price
	if(isset($_POST['price']) && !empty($_POST['price'])){
		$query="UPDATE hb_scene_images SET price='".mysqli_real_escape_string($hb_scene_db,$_POST['price'])."' WHERE uniq_image_id='".$_POST['imageid']."'";
		if(mysqli_query($hb_scene_db,$query)){
			$status.="<li>Price of image saved succesfully and yet to verify by us. You will be notify when verification is done. Only after verification price of your image can be set!</li>";
		}else{
			$status.="<li>Price of image can not be saved.</li>";
		}
	}
	///////////////////update can_download
	if(isset($_POST['can_download']) && !empty($_POST['can_download'])){
		$query="UPDATE hb_scene_images SET can_download='".mysqli_real_escape_string($hb_scene_db,$_POST['can_download'])."' WHERE uniq_image_id='".$_POST['imageid']."'";
		if(mysqli_query($hb_scene_db,$query)){
			$status.="<li>Who can download your image is set.</li>";
		}else{
			$status.="<li>Who can download your image can not be saved.</li>";
		}
	}

	///////////////////update watermark
	if(isset($_POST['watermark']) && !empty($_POST['watermark'])){
		$query="UPDATE hb_scene_images SET watermark='".mysqli_real_escape_string($hb_scene_db,$_POST['watermark'])."' WHERE uniq_image_id='".$_POST['imageid']."'";
		if(mysqli_query($hb_scene_db,$query)){
			$status.="<li>Watermark option is set.</li>";
		}else{
			$status.="<li>Watermark option can not be saved.</li>";
		}
	}

	/////////////////update description
	if(isset($_POST['story']) && !empty($_POST['story'])){
		$query="SELECT url,uniq_image_id FROM hb_scene_images WHERE uniq_image_id='".$_POST['imageid']."'";
		if($rows=mysqli_query($hb_scene_db,$query)){
			if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
				if($_POST['imageid']==$row['uniq_image_id']){
					$url=$row['url'];
					$xml=simplexml_load_file($rootpath."scene/hb_gallery/".$url.".xml");
					$tmpxml=new SimpleXMLElement($xml->asXML());
					$tmpxml->story=$_POST['story'];
					$tmpxml->asXML($rootpath."scene/hb_gallery/".$url.".xml");
					$status.="<li>Your story is updated successfully.</li>";
				}else{
					$status.="<li>There is a problem to update your story.</li>";
				}
			}else{
				$status.="<li>There is a problem to update your story.</li>";
			}
		}else{
			$status.="<li>There is a problem to update your story.</li>";
		}
	}

	echo $status;
	echo "</div>";
	echo "<div id='ll77_img_upload_link'>
		<a id='ll77_img_upload_single' href='http://scene.hazrabrothers.com/upload/hb_opl8563knbg/single/'><div>Upload single image</div></a>
		<a id='ll77_img_upload_album' href='http://scene.hazrabrothers.com/upload/hb_opl8563knbg/albums/'><div>Upload an album</div></a>
	</div>

	</div>
	";


	/*if(mysqli_query($hb_scene_db,$query)){
		echo "Upldate successful!";
	}else{
		echo mysqli_error($hb_scene_db);
	}*/

}else{
  die("Unauthorized entry");
}
?>
