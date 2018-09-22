<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17011;
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

$filepre="hb_scene_17";
if(isset($_POST['upload']) && isset($_POST['frtop']) && $_POST['frtop']=="ncv45fr" && $_FILES['file']['error']==0){
	//check the file
	if(strtolower(substr($_FILES['file']['type'],0,5))=="image"){
		if($_FILES['file']['size']>=200 && $_FILES['file']['size']<=(5*1024*1024)){
		
		//file extension
		$ext=strtolower(substr($_FILES['file']['type'],6));
		
		//check if the picture is jpg jpeg or gif or png
		if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif'){
		
		}else{
			die("we support 'jpg','jpeg','png' or 'gif' only");
		}
		
		$shuffle=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,15);
		$filename=$filepre.$shuffle.".".$ext;
		while(file_exists($filename)){
		$shuffle=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,15);
		$filename=$filepre.$shuffle.".".$ext;
		}
		
			
			move_uploaded_file($_FILES['file']['tmp_name'],"../../hb_gallery/".$filename);
			
			//get image size
			$size=getimagesize("../../hb_gallery/".$filename);
			
			$quality="";
			//process quality
			switch(1){
				case $_FILES['file']['size']<102400: //Low
					$quality="L";
					break;
				case $_FILES['file']['size']>=102400 && $_FILES['file']['size']<512000://Medium
					$quality="M";
					break;
				case $_FILES['file']['size']>=512000 && $_FILES['file']['size']<1048576: //normal
					$quality="N";
					break;
				case $_FILES['file']['size']>=1048576 && $_FILES['file']['size']<2097152://Good
					$quality="G";
					break;
				case $_FILES['file']['size']>=2097152 && $_FILES['file']['size']<3145728://very good
					$quality="V";
					break;
				case $_FILES['file']['size']>=3145728 && $_FILES['file']['size']<4194304://excellent
					$quality="E";
					break;
				case $_FILES['file']['size']>=4194304 && $_FILES['file']['size']<5242880://out standing
					$quality="O";
					break;
				default:
					$quality="U";
			}
			
			//create xml file
			
			$string="<?xml version=\"1.0\"?>";
			$string.="<image>";
			$string.="<quality>".$quality."</quality>";
			$string.="<type>".$_FILES['file']['type']."</type>";
			$string.="<description>".$_POST['description']."</description>";
			$string.="<uploaded_by>Hazra Brothers</uploaded_by>";
			$string.="</image>";
			
			$handle=fopen("../../hb_gallery/".$filename.".xml","w");
			fwrite($handle,$string);
			fclose($handle);
			
			//create thumbnail
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
					$mainImg=imageCreateFromJpeg("../../hb_gallery/".$filename);
					
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
				
					
					imagejpeg($thumbnail,"../../hb_gallery/thumbnail/".$filename);
					imagedestroy($mainImg);
					imagedestroy($thumbnail);
					break;
					
					
					
				case "png":
					$mainImg=imageCreateFrompng("../../hb_gallery/".$filename);
					
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
					
					imagepng($thumbnail,"../../hb_gallery/thumbnail/".$filename);
					imagedestroy($mainImg);
					imagedestroy($thumbnail);
					break;
					
					
					
				case "gif":
					$mainImg=imageCreateFromgif("../../hb_gallery/".$filename);
					
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
					
					
					imagegif($thumbnail,"../../hb_gallery/thumbnail/".$filename);
					imagedestroy($mainImg);
					imagedestroy($thumbnail);
					break;
				default:
					
			
			}
			if(file_exists("../../hb_gallery/".$filename) && file_exists("../../hb_gallery/".$filename.".xml") && file_exists("../../hb_gallery/thumbnail/".$filename)){
				
				
			}else{
				
				die("Something error inside. Contact to webmaster.");
			}
			//create entry to database
			$query="INSERT INTO hb_scene_images SET ";
			$query.="url='".$filename."',";
			$query.="date='".date("Y-m-d")."',";
			$query.="time='".date("H:i:s")."',";
			$query.="name='".$_POST['name']."',";
			$query.="category='".$_POST['category']."',";
			$query.="type='".$_FILES['file']['type']."',";
			$query.="album='na',";
			$query.="uploaded_by='HB',";
			$query.="rate1='0',";
			$query.="rate2='0',";
			$query.="rate3='0',";
			$query.="rate4='0',";
			$query.="rate5='0',";
			$query.="liked='0',";
			$query.="unliked='0',";
			$query.="privacy='public',";
			$query.="active=true,";
			$query.="price='0',";
			$query.="view='0',";
			$query.="download='0',";
			$query.="width='".$size[0]."',";
			$query.="height='".$size[1]."',";
			$query.="filesize='".$_FILES['file']['size']."'";
			
			if(mysqli_query($hb_scene_db,$query)){

				header("location:http://scene.hazrabrothers.com/upload/hb_opl8563knbg/Ncd56ioxlp7.php?mxcp5697lo=vibgyor17a&byut85lki=web8956ploi");
			}else{
				echo "error ".mysqli_error($hb_scene_db);
			}
			
			/*echo "<h1>Uploaded successfully!</h1><hr>";
			echo "<img src='"."../hb_gallery/".$filename."' width=500><br /><br />";
			echo htmlentities($string)."<br />";
			echo "<a href='Ncd56ioxlp7.php?mxcp5697lo=vibgyor17a&byut85lki=web8956ploi'>Go back</a>";*/
			
			//creating thumbnail image
			
		
			
			
		}else{
			echo "file size should between 200 byte to 5 MiB";
		}
	}else{
		echo "give a valid image";
	}
}else{
	echo "Error occured";
}

?>
