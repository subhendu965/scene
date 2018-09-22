<?php
if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']=="http://scene.hazrabrothers.com/"){

}else{
	die("Unauthorized Entry!");
}

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
$query="SELECT url FROM hb_scene_images WHERE active=true ORDER BY popularity DESC";

/* Start interface for filter UI*/
if(isset($_GET['filter']) && !empty($_GET['filter'])){
	switch ($_GET['filter']) {
		case 'rating':
			$query="SELECT url,(rate1*1+rate2*2+rate3*3+rate4*4+rate5*5)/(rate1+rate2+rate3+rate4+rate5) AS rating FROM hb_scene_images WHERE active=true ORDER BY rating DESC";
			break;
		case 'name':
			$query="SELECT url FROM hb_scene_images WHERE active=true ORDER BY name ASC";
			break;
		case 'like':
			$query="SELECT url FROM hb_scene_images WHERE active=true ORDER BY liked DESC";
			break;
		case 'share':
			$query="SELECT url FROM hb_scene_images WHERE active=true ORDER BY share DESC";
			break;
		case 'view':
			$query="SELECT url FROM hb_scene_images WHERE active=true ORDER BY view DESC";
			break;
		case 'download':
			$query="SELECT url FROM hb_scene_images WHERE active=true ORDER BY download DESC";
			break;
		case 'points':
			$query="SELECT url FROM hb_scene_images WHERE active=true ORDER BY points DESC";
			break;
		case 'price':
			$query="SELECT url FROM hb_scene_images WHERE active=true ORDER BY price DESC";
			break;
		case 'filesize':
			$query="SELECT url FROM hb_scene_images WHERE active=true ORDER BY filesize DESC";
			break;
		case 'popularity':
			$query="SELECT url FROM hb_scene_images WHERE active=true ORDER BY popularity ASC";
			break;

		default:
			$query="SELECT url FROM hb_scene_images WHERE active=true ORDER BY popularity DESC";
			break;
	}
}else{
	echo "
	<script id='scr_hb_scene_popular_filter_569p'>
	document.querySelector('#hb_scene_popular_filter_69Pl').addEventListener('change',hb_scene_popular_filter_change,false);

			function hb_scene_popular_filter_change(){
				scene_popular_filter_change_request=new XMLHttpRequest();
				scene_popular_filter_change_request.open('GET','hb_scene_popular.php?page=1&sqc=NC89R45jki12&filter='+document.getElementById('hb_scene_popular_filter_69Pl').value,true);
				scene_popular_filter_change_request.onreadystatechange=get_popular_filter_response;
				scene_popular_filter_change_request.send(null);
				document.getElementById('hb_scene_image_result_wrapper_4458').innerHTML=splashScreen1;
			}
			///////////////response function/////////////////////////////////////////////////////////////
			function get_popular_filter_response(){

				if(scene_popular_filter_change_request.status==200 && scene_popular_filter_change_request.readyState==4){
					document.getElementById('hb_scene_image_result_wrapper_4458').innerHTML=scene_popular_filter_change_request.responseText;
				}
				if(document.querySelector('#image_class_script_id_5697')){
					eval(document.querySelector('#image_class_script_id_5697').innerHTML);
				}
			}
		</script>
		<div id='hb_scene_popular_filter_div_586v'>
			Filter By:
			<select id='hb_scene_popular_filter_69Pl'>
				<option value='popularity'>Popularity</option>
				<option value='rating'>Rating</option>
				<option value='name'>Name</option>
				<option value='like'>Like</option>
				<option value='share'>Share</option>
				<option value='view'>View</option>
				<option value='download'>Download</option>
				<option value='points'>Points</option>
				<option value='price'>Price</option>
				<option value='filesize'>File Size</option>
			</select>
		</div>
		<style>
			div#hb_scene_popular_filter_div_586v{
				background-color:#ddd;
				padding:10px;
				font-size:15px;
			}
			select#hb_scene_popular_filter_69Pl{
				font-size:15px;
				padding:5px 25px;
				background:#f5f5f5;
				border:2px solid #999;
				border-radius:5px;

				width:150px;

				-webkit-appearance:none;
				-moz-appearance:none;
				-ms-appearance:none;

				background-image:url('/images/logo_select_arrow.png');
				background-position:95% center;
				background-repeat:no-repeat;
				background-size:8px auto;
			}
		</style>

	";
}

/*End of interface filter UI**/

echo "<div id='hb_scene_image_result_wrapper_4458'>";
showAsRating($query);
echo "</div>";

function showAsRating($query){
////////////////////////////////////////////////
global $hb_scene_db;
//$default_image_height=150;
////////////////////////////////////////////


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
