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

$filepre="hb_scene_18";
	//check the file
	if(strtolower(substr($_FILES['image_file']['type'],0,5))=="image"){
		//check file size
		if($_FILES['image_file']['size']>=200 && $_FILES['image_file']['size']<=(5*1024*1024)){

			//file extension
			$ext=strtolower(substr($_FILES['image_file']['type'],6));

			//check if the picture is jpg jpeg or gif or png
			if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif'){

			}else{
				echo "Error:we support 'jpg','jpeg','png' or 'gif' only";
				die();
			}

			/////////generating filename

			do{
				$shuffle=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,15);
				$filename=$filepre.$shuffle.".".$ext;
				$query="SELECT url FROM hb_scene_images WHERE url='".$filename."'";
				if($rows=mysqli_query($hb_scene_db,$query)){
					if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
						continue; //file name exists in database
					}else{
						break; //file does not exist
					}
				}
			}while(1);

			/////////generating gcode

			do{
				$filepre=substr($_SESSION['hb_user']['user_id'],0,5);
				$shuffle=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,15);
				$gcode=$filepre.$shuffle;
				$query="SELECT url FROM hb_scene_images WHERE uniq_image_id='".$filename."'";
				if($rows=mysqli_query($hb_scene_db,$query)){
					if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
						continue; //file name exists in database
					}else{
						break; //file does not exist
					}
				}
			}while(1);


			/*while(file_exists($filename)){
				$shuffle=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,15);
				$filename=$filepre.$shuffle.".".$ext;
			}*/

			/////////check if user folder exists
			if(!file_exists($rootpath."scene/hb_gallery/thumbnail/")){
				mkdir($rootpath."scene/hb_gallery/thumbnail");
			}

			////////////////move uploaded file
			move_uploaded_file($_FILES['image_file']['tmp_name'],$rootpath."scene/hb_gallery/".$filename);

			//get image size
			$size=getimagesize($rootpath."scene/hb_gallery/".$filename);

			$quality="";
			//process quality
			switch(1){
				case $_FILES['image_file']['size']<102400: //Low
					$quality="L";
					break;
				case $_FILES['image_file']['size']>=102400 && $_FILES['image_file']['size']<512000://Medium
					$quality="M";
					break;
				case $_FILES['image_file']['size']>=512000 && $_FILES['image_file']['size']<1048576: //normal
					$quality="N";
					break;
				case $_FILES['image_file']['size']>=1048576 && $_FILES['image_file']['size']<2097152://Good
					$quality="G";
					break;
				case $_FILES['image_file']['size']>=2097152 && $_FILES['image_file']['size']<3145728://very good
					$quality="V";
					break;
				case $_FILES['image_file']['size']>=3145728 && $_FILES['image_file']['size']<4194304://excellent
					$quality="E";
					break;
				case $_FILES['image_file']['size']>=4194304 && $_FILES['image_file']['size']<5242880://out standing
					$quality="O";
					break;
				default:
					$quality="U";
			}

			/////////////////////////create xml file/////////////////////////

			$string="<?xml version=\"1.0\"?>";
			$string.="<image>";
			$string.="<quality>".$quality."</quality>";
			$string.="<type>".$_FILES['image_file']['type']."</type>";
			$string.="<story>No story given.</story>";
			$string.="<uploaded_by>".$_SESSION['hb_user']['username']."</uploaded_by>";
			$string.="</image>";

			$handle=fopen($rootpath."scene/hb_gallery/".$filename.".xml","w");
			fwrite($handle,$string);
			fclose($handle);

			////////////////////////create thumbnail/////////////////////////
			if($size[0]>3*$size[1]){ //if width is greater than 3 times of height
				$width=300;
				$height=(int)($width/$size[0]*$size[1]);
			}elseif($size[1]>3*$size[0]){ //if height is greater than 3 times of width
				$height=150;
				$width=(int)($height/$size[1]*$size[0]);
			}else{
				$height=150;
				$width=(int)($height/$size[1]*$size[0]);
			}

			switch($ext){
				case "jpg":
				case "jpeg":
					$mainImg=imageCreateFromJpeg($rootpath."scene/hb_gallery/".$filename);

					if($height<150){
						$thumbnail=imageCreateTrueColor($width,$height);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}elseif($height==150 && $width<150){
						$thumbnail=imageCreateTrueColor($width,$height);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}else{
						$thumbnail=imageCreateTrueColor($width,$height);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}


					imagejpeg($thumbnail,$rootpath."scene/hb_gallery/thumbnail/".$filename);
					imagedestroy($mainImg);
					imagedestroy($thumbnail);
					break;



				case "png":
					$mainImg=imageCreateFrompng($rootpath."scene/hb_gallery/".$filename);

					if($height<150){
						$thumbnail=imageCreateTrueColor($width,$height);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}elseif($height==150 && $width<150){
						$thumbnail=imageCreateTrueColor($width,$height);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}else{
						$thumbnail=imageCreateTrueColor($width,$height);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}

					imagepng($thumbnail,$rootpath."scene/hb_gallery/thumbnail/".$filename);
					imagedestroy($mainImg);
					imagedestroy($thumbnail);
					break;



				case "gif":
					$mainImg=imageCreateFromgif($rootpath."scene/hb_gallery/".$filename);

					if($height<150){
						$thumbnail=imageCreateTrueColor($width,$height);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}elseif($height==150 && $width<150){
						$thumbnail=imageCreateTrueColor($width,$height);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}else{
						$thumbnail=imageCreateTrueColor($width,$height);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}


					imagegif($thumbnail,$rootpath."scene/hb_gallery/thumbnail/".$filename);
					imagedestroy($mainImg);
					imagedestroy($thumbnail);
					break;
				default:


			}
			if(file_exists($rootpath."scene/hb_gallery/".$filename) && file_exists($rootpath."scene/hb_gallery/".$filename.".xml") && file_exists($rootpath."scene/hb_gallery/thumbnail/".$filename)){


			}else{
				echo "Error:Something error inside. Contact to webmaster.";
				die();
			}

			///////add the image to the database////////////////////////////////////////
			//create entry to database
			$query="INSERT INTO hb_scene_images SET ";
			$query.="url='".$filename."',";
			$query.="uniq_image_id='".$gcode."',";
			$query.="date='".date("Y-m-d")."',";
			$query.="time='".date("H:i:s")."',";
			$query.="name='".$_FILES['image_file']['name']."',";
			$query.="category='others',";
			$query.="type='".$_FILES['image_file']['type']."',";
			$query.="album='na',";
			$query.="uploaded_by='HB',";
			$query.="rate1='0',";
			$query.="rate2='0',";
			$query.="rate3='0',";
			$query.="rate4='0',";
			$query.="rate5='0',";
			$query.="liked='0',";
			$query.="unliked='0',";
			$query.="share='0',";
			$query.="privacy='public',";
			$query.="view='0',";
			$query.="download='0',";
			$query.="bought='0',";
			$query.="width='".$size[0]."',";
			$query.="height='".$size[1]."',";
			$query.="filesize='".$_FILES['image_file']['size']."',";
			$query.="popularity='0',";
			$query.="price='0',";
			$query.="points='0',";
			$query.="can_download='all',";
			$query.="watermark='scene',";
			$query.="deleted=false,";
			$query.="active=true";

			if(mysqli_query($hb_scene_db,$query)){

			}else{
				echo "error ".mysqli_error($hb_scene_db);
			}

			////////////////add upload registry to the upload.info file
			/////////check if user folder exists
			if(!file_exists($rootpath."scene/hb_data/")){
				mkdir($rootpath."scene/hb_data/");
			}
			$file_handle=fopen($rootpath."scene/hb_data/single_upload.info","a");
			$info_string=$filename.",".$_FILES['image_file']['type']."\n";
			fwrite($file_handle,$info_string);

			echo "Done".$gcode.$filename;


		}else{
				echo "Error:file size should between 200 byte to 5 MiB";
		}
	}else{
		echo "Error:give a valid image";
	}

}else{
	die("Unauthorized Entry!");
}

?>
