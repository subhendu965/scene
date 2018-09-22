<?php
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
if(isset($_SESSION['hb_scene']['adjust_image_223']) && $_SESSION['hb_scene']['adjust_image_223']=="adj365" && isset($_GET['sqc']) && $_GET['sqc']=="klPM69D" && isset($_GET['url'])){

}else{
    die("unauthorized entry");
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//include scene init

include "./scene_init.php";

$query="SELECT url,uploaded_by,name,type,filesize FROM hb_scene_images WHERE url='".mysqli_real_escape_string($hb_scene_db,decryptData($_GET['url']))."' LIMIT 1";

if($rows=mysqli_query($hb_scene_db,$query)){

		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){

			if($row['url']==decryptData($_GET['url'])){

                /////////////check uploaded by

								/////make a query for uploaded_by in chanel description
                if($row['uploaded_by']=="HB"){
                  $imageUrl=$rootpath."scene/hb_gallery/".$row['url'];
                }else{
									//fetch username hb_scene_pages
									$query="SELECT username FROM hb_scene_pages WHERE uploader_id='".$row['uploaded_by']."' LIMIT 1";
									if($fRows=mysqli_query($hb_scene_db,$query)){
										if($fRow=mysqli_fetch_array($fRows,MYSQLI_BOTH)){

											$imageUrl=$rootpath."scene/user_gallery/user_".$fRow['username']."/".$row['url'];
										}else{
											die('No Uploader found!');
										}

									}else{
										die('No Uploader found!');
									}
								}

                $typeOfImage=strtolower(substr($row['type'],6));

                ////////////////opening image in GD
                switch($typeOfImage){
                    case "jpeg":
                    case "jpg":
                        $image=imageCreateFromJpeg($imageUrl);
                        break;
                    case "png":
                        $image=imageCreateFromPng($imageUrl);
                        break;
                    case "gif":
                        $image=imageCreateFromGif($imageUrl);
                        break;
                    default:
                }//end of switch


                ////////////////////////processing of image//

                //setting properties
                $imageWidth=imagesx($image);
                $imageHeight=imagesy($image);

                ///////introducing new variables////////////

                $newImageWidth=100;
                $newImageHeight=100;
                $newImageLeft=0;
                $newImageTop=0;

                /*//////setting new variables//////////
                if(isset($_GET['rszw']) && !empty($_GET['rszw'])){
                    $newImageWidth=$_GET['rszw'];
                }
                if(isset($_GET['rszh']) && !empty($_GET['rszh'])){
                    $newImageHeight=$_GET['rszh'];
                }
                if(isset($_GET['rszl']) && !empty($_GET['rszl'])){
                    $newImageLeft=$_GET['rszl'];
                }
                if(isset($_GET['rszt']) && !empty($_GET['rszt'])){
                    $newImageTop=$_GET['rszt'];
                }*/
								///////////////////temporary set for few days //////////
								if($row['filesize']>(1024*1024)){ //greater than 1024 kib
							 		$newImageScale=ceil($row['filesize']/(1024*1024));
							 		$newImageWidth=intVal($imageWidth/$newImageScale);
							 		$newImageHeight=intVal($imageHeight*($newImageWidth/$imageWidth));

							 } else{
							 		$newImageWidth=$imageWidth;
							 		$newImageHeight=$imageHeight;
							 }
                ////for view only////////////////////
                if(isset($_GET['type']) && $_GET['type']=="show"){
                     if($row['filesize']>(512*1024)){ //greater than 512 kib
                        $newImageScale=ceil($row['filesize']/(512*1024));
                        $newImageWidth=intVal($imageWidth/$newImageScale);
                        $newImageHeight=intVal($imageHeight*($newImageWidth/$imageWidth));

                    } else{
                        $newImageWidth=$imageWidth;
                        $newImageHeight=$imageHeight;
                    }

                }


                //creating image
                $newImage=imageCreateTrueColor($newImageWidth,$newImageHeight);
				$color52k=imageColorAllocateAlpha($newImage,0,0,0,127);
                imageFill($newImage,0,0,$color52k);
				imageSaveAlpha($newImage,true);
                //$red=imageColorAllocate($newImage,255,0,0);
                //imageColorTransparent($newImage,$red);
                //resample or redraw the image
                imageCopyResampled($newImage,$image,0,0,0,0,$newImageWidth,$newImageHeight,$imageWidth,$imageHeight);

                /////////////////////////////adding watermark
                $rawWaterMarkImage=imageCreateFromPng($rootpath."scene/images/Scene_logo_2d_3.png");

                $waterMarkImageSize=ceil($newImageWidth/8);

                $waterMarkImage=imageCreateTrueColor($waterMarkImageSize,$waterMarkImageSize);
                imageFill($waterMarkImage,0,0,$color52k);
				imageSaveAlpha($waterMarkImage,true);
                //imageColorTransparent($waterMarkImage,$red);
                imageCopyResampled($waterMarkImage,$rawWaterMarkImage,0,0,0,0,$waterMarkImageSize,$waterMarkImageSize,imagesx($rawWaterMarkImage),imagesy($rawWaterMarkImage));


                $destx=($newImageWidth-$waterMarkImageSize-20);
                $desty=($newImageHeight-$waterMarkImageSize-20);

                imageCopy($newImage,$waterMarkImage,$destx,$desty,0,0,$waterMarkImageSize,$waterMarkImageSize);

                /////////////////////////////////////////end of processing
                //ceating image
                if(isset($_SESSION['hb_scene']['nji96Pk']) && $_SESSION['hb_scene']['nji96Pk']=="mlp2014"){
                    switch($typeOfImage){
                    case "jpeg":
                    case "jpg":
                         header("Content-Disposition:attachment;filename=".$row['name'].".jpg");

                        header("Content-description:File Transfer");

                        imageJpeg($newImage,null,100);

                        break;
                    case "png":
                        header("Content-Disposition:attachment;filename=".$row['name'].".png");

                        header("Content-description:File Transfer");

                        imagePng($newImage);

                        break;
                    case "gif":
                        header("Content-Disposition:attachment;filename=".$row['name'].".gif");

                        header("Content-description:File Transfer");

                        imageGif($newImage);

                        break;
                    default:
                    }//end of switch
										///////////write download log//////////////////////////////////////
										//////////////////////////////write log file/////////////////
										$user_data_path=$rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/";
										if(file_exists($user_data_path."download_history.xml")){
											$xml=simplexml_load_file($user_data_path."download_history.xml");
											$tmpxml=new SimpleXMLElement($xml->asXML());

											///////check if requested image is aleady exists in the list//////////////
												$flag_k23Mj=0;
												foreach($tmpxml->children() as $download){

													if($download->url == decryptData($_GET['url'])){
														$flag_k23Mj=1;
														$current_downoad=$download;
													}
												}

												if($flag_k23Mj==1){
													/////////////found in the list. Do not add to the DB list//////////////

												}else{
													/////////////not found in the list. add to the DB list//////////////
													$query1="UPDATE hb_scene_images SET download=download+1 WHERE url='".mysqli_real_escape_string($hb_scene_db,decryptData($_GET['url']))."' LIMIT 1";
													$query2="UPDATE hb_scene_pages SET gain_download=gain_download+1 WHERE uploader_id='".mysqli_real_escape_string($hb_scene_db,$row['uploaded_by'])."' LIMIT 1";
													$query3="UPDATE hb_scene_users SET total_download=total_download+1 WHERE user_id='".mysqli_real_escape_string($hb_scene_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
													if(mysqli_query($hb_scene_db,$query1)){

													}
													if(mysqli_query($hb_scene_db,$query2)){

													}
													if(mysqli_query($hb_scene_db,$query3)){

													}
												}

											$newcomment=$tmpxml->addChild("download");
											$newcomment->addChild("date",date("Y-m-d"));
											$newcomment->addChild("time",date("H:i:s"));
											$newcomment->addChild("width",$newImageWidth);
											$newcomment->addChild("height",$newImageHeight);
											$newcomment->addChild("type_of_image",$typeOfImage);
											$newcomment->addChild("url",decryptData($_GET['url']));
											$newcomment->addChild("os",$hb_user_os);
											$newcomment->addChild("browser",$hb_user_browser);
											$newcomment->addChild("ip",$_SERVER['REMOTE_ADDR']);
											$tmpxml->asXML($user_data_path."download_history.xml");
										}else{
											//create xml files first_name
														$string="<?xml version=\"1.0\"?>";
														$string.="<downloads>";
														$string.="<download>";
														$string.="<date>";
														$string.=date("Y-m-d");
														$string.="</date>";
														$string.="<time>";
														$string.=date("H:i:s");
														$string.="</time>";
														$string.="<width>";
														$string.=$newImageWidth;
														$string.="</width>";
														$string.="<height>";
														$string.=$newImageHeight;
														$string.="</height>";
														$string.="<type_of_image>";
														$string.=$typeOfImage;
														$string.="</type_of_image>";
														$string.="<url>";
														$string.=decryptData($_GET['url']);
														$string.="</url>";
														$string.="<os>";
														$string.=$hb_user_os;
														$string.="</os>";
														$string.="<browser>";
														$string.=$hb_user_browser;
														$string.="</browser>";
														$string.="<ip>";
														$string.=$_SERVER['REMOTE_ADDR'];
														$string.="</ip>";
														$string.="</download>";
														$string.="</downloads>";

														$handle=fopen($user_data_path."download_history.xml","w");
														fwrite($handle,$string);
														fclose($handle);

														/////////////first time. add to the DB list//////////////
														$query1="UPDATE hb_scene_images SET download=download+1 WHERE url='".mysqli_real_escape_string($hb_scene_db,decryptData($_GET['url']))."' LIMIT 1";
														$query2="UPDATE hb_scene_pages SET gain_download=gain_download+1 WHERE uploader_id='".mysqli_real_escape_string($hb_scene_db,$row['uploaded_by'])."' LIMIT 1";
														$query3="UPDATE hb_scene_users SET total_download=total_download+1 WHERE user_id='".mysqli_real_escape_string($hb_scene_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
														if(mysqli_query($hb_scene_db,$query1)){

														}
														if(mysqli_query($hb_scene_db,$query2)){

														}
														if(mysqli_query($hb_scene_db,$query3)){

														}
										}

                }else{
									if(isset($_GET['type']) && $_GET['type']=='show'){
										switch($typeOfImage){
                     case "jpeg":
                     case "jpg":
                         header("Content-type:image/jpeg");
                         imageJpeg($newImage,null,100);
                         break;
                     case "png":
                         header("Content-type:image/png");
                         imagePng($newImage);
                         break;
                     case "gif":
                         header("Content-type:image/gif");
                         imageGif($newImage);
                         break;
                     default:
                     }//end of switch

										/////////////////////////view log//////////////////
										$user_data_path=$rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/";
 										if(file_exists($user_data_path."view_history.xml")){
 											$xml=simplexml_load_file($user_data_path."view_history.xml");
 											$tmpxml=new SimpleXMLElement($xml->asXML());

											///////check if requested image is aleady exists in the list//////////////
												$flag_k23Mj=0;
												foreach($tmpxml->children() as $view){

													if($view->url == decryptData($_GET['url'])){
														$flag_k23Mj=1;
														$current_view=$view;
													}
												}

												if($flag_k23Mj==1){
													/////////////found in the list. Do not add to the DB list//////////////

												}else{
													/////////////not found in the list. add to the DB list//////////////
													$query1="UPDATE hb_scene_images SET view=view+1 WHERE url='".mysqli_real_escape_string($hb_scene_db,decryptData($_GET['url']))."' LIMIT 1";
													$query2="UPDATE hb_scene_pages SET gain_view=gain_view+1 WHERE uploader_id='".mysqli_real_escape_string($hb_scene_db,$row['uploaded_by'])."' LIMIT 1";
													$query3="UPDATE hb_scene_users SET total_view=total_view+1 WHERE user_id='".mysqli_real_escape_string($hb_scene_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
													if(mysqli_query($hb_scene_db,$query1)){

													}
													if(mysqli_query($hb_scene_db,$query2)){

													}
													if(mysqli_query($hb_scene_db,$query3)){

													}
												}

 											$newcomment=$tmpxml->addChild("view");
 											$newcomment->addChild("date",date("Y-m-d"));
 											$newcomment->addChild("time",date("H:i:s"));
 											$newcomment->addChild("width",$newImageWidth);
 											$newcomment->addChild("height",$newImageHeight);
 											$newcomment->addChild("type_of_image",$typeOfImage);
 											$newcomment->addChild("url",decryptData($_GET['url']));
 											$newcomment->addChild("os",$hb_user_os);
 											$newcomment->addChild("browser",$hb_user_browser);
 											$newcomment->addChild("ip",$_SERVER['REMOTE_ADDR']);
 											$tmpxml->asXML($user_data_path."view_history.xml");
 										}else{
 											//create xml files first_name
 														$string="<?xml version=\"1.0\"?>";
 														$string.="<views>";
 														$string.="<view>";
 														$string.="<date>";
 														$string.=date("Y-m-d");
 														$string.="</date>";
 														$string.="<time>";
 														$string.=date("H:i:s");
 														$string.="</time>";
 														$string.="<width>";
 														$string.=$newImageWidth;
 														$string.="</width>";
 														$string.="<height>";
 														$string.=$newImageHeight;
 														$string.="</height>";
 														$string.="<type_of_image>";
 														$string.=$typeOfImage;
 														$string.="</type_of_image>";
 														$string.="<url>";
 														$string.=decryptData($_GET['url']);
 														$string.="</url>";
 														$string.="<os>";
 														$string.=$hb_user_os;
 														$string.="</os>";
 														$string.="<browser>";
 														$string.=$hb_user_browser;
 														$string.="</browser>";
 														$string.="<ip>";
 														$string.=$_SERVER['REMOTE_ADDR'];
 														$string.="</ip>";
 														$string.="</view>";
 														$string.="</views>";

 														$handle=fopen($user_data_path."view_history.xml","w");
 														fwrite($handle,$string);
 														fclose($handle);

														/////////////first time. add to the DB list//////////////
														$query1="UPDATE hb_scene_images SET view=view+1 WHERE url='".mysqli_real_escape_string($hb_scene_db,decryptData($_GET['url']))."' LIMIT 1";
														$query2="UPDATE hb_scene_pages SET gain_view=gain_view+1 WHERE uploader_id='".mysqli_real_escape_string($hb_scene_db,$row['uploaded_by'])."' LIMIT 1";
														$query3="UPDATE hb_scene_users SET total_view=total_view+1 WHERE user_id='".mysqli_real_escape_string($hb_scene_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
														if(mysqli_query($hb_scene_db,$query1)){

														}
														if(mysqli_query($hb_scene_db,$query2)){

														}
														if(mysqli_query($hb_scene_db,$query3)){

														}
 										}
									}

                }


                //destroying images
                imageDestroy($image);
                imageDestroy($newImage);

                ////////////////unset session variables
                unset($_SESSION['hb_scene']['adjust_image_223']);
                unset($_SESSION['hb_scene']['nji96Pk']);
            }else{
							echo "Problem arised!";
						}
        }else{
					echo "There is a problem occured!";

				}
}else{
	echo "pod";
}
