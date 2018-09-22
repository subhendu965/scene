<?php
if(isset($_GET['sqc']) && $_GET['sqc']=='NC89R45jki12' && isset($_GET['search'])){

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

showAsSearch();

function showAsSearch(){
////////////////////////////////////////////
global $hb_scene_db;
//$default_image_height=150;
////////////////////////////////////////////
	$toSearch=mysqli_real_escape_string($hb_scene_db,$_GET['search']);

	$query="SELECT url,uploaded_by FROM hb_scene_images WHERE name LIKE '%".$toSearch."%' OR category LIKE '%".$toSearch."%' OR type LIKE '%".$toSearch."%' OR uploaded_by LIKE '%".$toSearch."%' OR album LIKE '%".$toSearch."%';";
	if($rows=mysqli_query($hb_scene_db,$query)){
		//function for style tag
		$id=0;
		echo "<br />";
		echo "<div style='font-size:20px;'>
			<div style='border-bottom:1px solid #ccc;'>&nbsp;</div>
		";

		if($rows->num_rows != 0){
			echo "		<div style='display:inline-block; color:bbb; font-size:12px;'>Here is the search result for</div>
					<div style='display:inline-block; color:bbb; font-size:12px; font-weight:bold; font-style:italic;'>'".$toSearch."'</div>";
		}else{
			echo "
			<style>
			#upload_img_now_54ffku{
				margin:50px auto;
				width:250px;
				padding:10px 15px;
				text-align:center;
				font-size:20px;
				color:black;
				background-color:rgba(200,170,90,0.2);
				border:2px solid rgba(200,170,90,0.7);
				border-radius:5px;
				transition:border 0.3s, background 0.3s, color 0.3s;
			}
			#upload_img_now_54ffku:hover{
				background-color:rgba(200,170,90,0.7);
			}
			</style>

			<div style='display:inline-block; color:#666; font-size:30px;'>
			No Result Found!
			</div>
			<div>
				<a href='http://scene.hazrabrothers.com/upload/single' style='text-decoration:none;'>
					<div id='upload_img_now_54ffku'>
						Upload Image Now
					</div>
				</a>
			</div>
			";

		}

		echo "</div>
			<br /><br />";


		while($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){

			$image=new image($row['url'],$row['uploaded_by']);
			$image->id="img".$id;
			$image->showImage();
			$id++;

		}
	}else{
		echo "Error";
	}
}


?>
