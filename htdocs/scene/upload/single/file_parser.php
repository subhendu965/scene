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
			if(!file_exists($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username'])){
				mkdir($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']);
				mkdir($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/thumbnail");
			}

			////////////////move uploaded file
			move_uploaded_file($_FILES['image_file']['tmp_name'],$rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/".$filename);

			//get image size
			$size=getimagesize($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/".$filename);

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

			$handle=fopen($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/".$filename.".xml","w");
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
					$mainImg=imageCreateFromJpeg($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/".$filename);

					if($height<150){
						$thumbnail=imageCreateTrueColor($width,$height);
						$color52k=imageColorAllocateAlpha($thumbnail,0,0,0,127);
						imageFill($thumbnail,0,0,$color52k);
						imageSaveAlpha($thumbnail,true);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}elseif($height==150 && $width<150){
						$thumbnail=imageCreateTrueColor($width,$height);
						$color52k=imageColorAllocateAlpha($thumbnail,0,0,0,127);
						imageFill($thumbnail,0,0,$color52k);
						imageSaveAlpha($thumbnail,true);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}else{
						$thumbnail=imageCreateTrueColor($width,$height);
						$color52k=imageColorAllocateAlpha($thumbnail,0,0,0,127);
						imageFill($thumbnail,0,0,$color52k);
						imageSaveAlpha($thumbnail,true);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}


					imagejpeg($thumbnail,$rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/thumbnail/".$filename);
					imagedestroy($mainImg);
					imagedestroy($thumbnail);
					break;



				case "png":
					$mainImg=imageCreateFrompng($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/".$filename);

					if($height<150){
						$thumbnail=imageCreateTrueColor($width,$height);
						$color52k=imageColorAllocateAlpha($thumbnail,0,0,0,127);
						imageFill($thumbnail,0,0,$color52k);
						imageSaveAlpha($thumbnail,true);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}elseif($height==150 && $width<150){
						$thumbnail=imageCreateTrueColor($width,$height);
						$color52k=imageColorAllocateAlpha($thumbnail,0,0,0,127);
						imageFill($thumbnail,0,0,$color52k);
						imageSaveAlpha($thumbnail,true);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}else{
						$thumbnail=imageCreateTrueColor($width,$height);
						$color52k=imageColorAllocateAlpha($thumbnail,0,0,0,127);
						imageFill($thumbnail,0,0,$color52k);
						imageSaveAlpha($thumbnail,true);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}

					imagepng($thumbnail,$rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/thumbnail/".$filename);
					imagedestroy($mainImg);
					imagedestroy($thumbnail);
					break;



				case "gif":
					$mainImg=imageCreateFromgif($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/".$filename);

					if($height<150){
						$thumbnail=imageCreateTrueColor($width,$height);
						$color52k=imageColorAllocateAlpha($thumbnail,0,0,0,127);
						imageFill($thumbnail,0,0,$color52k);
						imageSaveAlpha($thumbnail,true);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}elseif($height==150 && $width<150){
						$thumbnail=imageCreateTrueColor($width,$height);
						$color52k=imageColorAllocateAlpha($thumbnail,0,0,0,127);
						imageFill($thumbnail,0,0,$color52k);
						imageSaveAlpha($thumbnail,true);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}else{
						$thumbnail=imageCreateTrueColor($width,$height);
						$color52k=imageColorAllocateAlpha($thumbnail,0,0,0,127);
						imageFill($thumbnail,0,0,$color52k);
						imageSaveAlpha($thumbnail,true);
						imageCopyResampled($thumbnail,$mainImg,0,0,0,0,$width,$height,$size[0],$size[1]);
					}


					imagegif($thumbnail,$rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/thumbnail/".$filename);
					imagedestroy($mainImg);
					imagedestroy($thumbnail);
					break;
				default:


			}
			if(file_exists($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/".$filename) && file_exists($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/".$filename.".xml") && file_exists($rootpath."scene/user_gallery/user_".$_SESSION['hb_user']['username']."/thumbnail/".$filename)){


			}else{
				echo "Error:Something error inside. Contact to webmaster.";
				die();
			}

			///////add the image to the database////////////////////////////////////////
			$new_image_name=substr($_FILES['image_file']['name'],0,strrpos($_FILES['image_file']['name'],"."));
			//create entry to database
			$query="INSERT INTO hb_scene_images SET ";
			$query.="url='".$filename."',";
			$query.="uniq_image_id='".$gcode."',";
			$query.="date='".date("Y-m-d")."',";
			$query.="time='".date("H:i:s")."',";
			$query.="name='".$new_image_name."',";
			$query.="category='others',";
			$query.="type='".$_FILES['image_file']['type']."',";
			$query.="album='na',";
			$query.="uploaded_by='".$_SESSION['hb_user']['user_id']."',";
			$query.="rate1='0',";
			$query.="rate2='0',";
			$query.="rate3='0',";
			$query.="rate4='0',";
			$query.="rate5='0',";
			$query.="liked='0',";
			$query.="unliked='0',";
			$query.="comment='0',";
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
			if(!file_exists($rootpath."scene/user_data/user_".$_SESSION['hb_user']['username'])){
				mkdir($rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']);
			}

			//////////////////////////////write log file/////////////////
			$user_data_path=$rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/";
			if(file_exists($user_data_path."upload_history.xml")){
				$xml=simplexml_load_file($user_data_path."upload_history.xml");
				$tmpxml=new SimpleXMLElement($xml->asXML());
				$newcomment=$tmpxml->addChild("login");
				$newcomment->addChild("date",date("Y-m-d"));
				$newcomment->addChild("time",date("H:i:s"));
				$newcomment->addChild("os",$hb_user_os);
				$newcomment->addChild("browser",$hb_user_browser);
				$newcomment->addChild("ip",$_SERVER['REMOTE_ADDR']);
				$tmpxml->asXML($user_data_path."upload_history.xml");
			}else{
				//create xml files first_name
							$string="<?xml version=\"1.0\"?>";
							$string.="<logins>";
							$string.="<login>";
							$string.="<date>";
							$string.=date("Y-m-d");
							$string.="</date>";
							$string.="<time>";
							$string.=date("H:i:s");
							$string.="</time>";
							$string.="<os>";
							$string.=$hb_user_os;
							$string.="</os>";
							$string.="<browser>";
							$string.=$hb_user_browser;
							$string.="</browser>";
							$string.="<ip>";
							$string.=$_SERVER['REMOTE_ADDR'];
							$string.="</ip>";
							$string.="</login>";
							$string.="</logins>";

							$handle=fopen($user_data_path."upload_history.xml","w");
							fwrite($handle,$string);
							fclose($handle);
			}

			$file_handle=fopen($rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/single_upload.info","a");
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
