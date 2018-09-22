<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17010;
$hb_folder_layer=2;
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

if($hb_user_logged_in){

}else{
	die("You are not logged in. Please <a href='http://accounts.hazrabrothers.com/login/sign_in'>Log in</a> first to go to Scene Dashboard.");
}


//////////////getting uploader_id/////////////////
$query="SELECT uploader_id,username FROM hb_scene_pages WHERE username='".$_SESSION['hb_user']['username']."' LIMIT 1";
if($rows=mysqli_query($hb_scene_db,$query)){
  if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
    if($row['username']==$_SESSION['hb_user']['username']){
      $uploader_id=$row['uploader_id'];

    }else{
      die("error occured1");
    }
  }else{
    die("error occurred2");
  }
}else{
  die("error occured3");
}

echo "Done:";

///include class image_class
include $rootpath."scene/image_class.php";

if(isset($uploader_id)){
  $query="SELECT * FROM hb_scene_images WHERE uploaded_by='".$uploader_id."'";
	if($rows=mysqli_query($hb_scene_db,$query)){
		//function for style tag
		$id=0;
		echo "<br />";
		if(mysqli_affected_rows($hb_scene_db)>0){
			while($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){

				$image=new image($row['url']);
				$image->id="img".$id;
				$image->showImage();
				$id++;

			}
		}else{
			echo "		<div style='display:inline-block; color:#666; font-size:30px;'>
			No Images Found!
			</div>
			<div>
				<a href='http://scene.hazrabrothers.com/upload/single' style='text-decoration:none;'>
					<div style='margin:50px auto;width:60%;text-align:center;'>
						Upload Image Now.
					</div>
				</a>
			</div>
			";
		}

	}else{
		echo "Error";
	}
}

function showThumbnail($image_url){
	echo "<img src='/user_gallery/user_".$_SESSION['hb_user']['username']."/thumbnail/".$image_url."' >";
}

?>
