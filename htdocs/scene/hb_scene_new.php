<?php
/*if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']=="http://scene.hazrabrothers.com/"){

}else{
	die("Unauthorized Entry!");
}*/

if(isset($_GET['sqc']) && $_GET['sqc']=='NC89R45jki12'){

}else{
	die("Unauthorized Entry!");
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17013;
$hb_folder_layer=1;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//include scene init

include "./scene_init.php";

//setting page
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page=1;
}
//include class image_class
include "image_class.php";

showAsRating();

function showAsRating(){
////////////////////////////////////////////////
global $hb_scene_db;
//$default_image_height=150;
////////////////////////////////////////////

	$query="SELECT url,uploaded_by FROM hb_scene_images ORDER BY datetime DESC";
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


?>
