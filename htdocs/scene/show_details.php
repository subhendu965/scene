<?php
//sleep(20);
if(isset($_GET['sqc']) && $_GET['sqc']=="P4lko23cds69"){

}else{
	die("Unautorized Entry");
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

$isliked="none";
$israted="none";

$query="SELECT url,uploaded_by,date,time,name,category,type,album,view,download,width,height,liked,unliked,filesize,rate1,rate2,rate3,rate4,rate5,(rate1*1+rate2*2+rate3*3+rate4*4+rate5*5)/(rate1+rate2+rate3+rate4+rate5) AS rating FROM hb_scene_images WHERE url='".mysqli_real_escape_string($hb_scene_db,decryptData($_GET['url']))."' LIMIT 1";

	if($rows=mysqli_query($hb_scene_db,$query)){

		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){

			if($row['url']==decryptData($_GET['url'])){

				//check if uploaded_by is hazra brothers
				if($row['uploaded_by']=='HB'){

					$imageUrl="http://scene.hazrabrothers.com/hb_gallery/".decryptData($_GET['url']);
					$xml=simplexml_load_file($imageUrl.".xml");
					$story=$xml->story;

					$imagePsudoUrl="adjust_image.php?type=show&sqc=klPM69D&url=".$_GET['url'];

					$_SESSION['hb_scene']['adjust_image_223']="adj365";


					if(isset($_SESSION['hb_user']['username'])){

						////////////////check like list of user//////////////
						$like_xml_user_url=$rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/like_list.xml";

						if(file_exists($like_xml_user_url)){
							//create new XML file
							//create xml file

							$xml=simplexml_load_file($like_xml_user_url);
							$tmpxml201=new SimpleXMLElement($xml->asXML());

						///////check if requested image is aleady exists in the list//////////////
							foreach($tmpxml201->children() as $like){

								if($like->url == decryptData($_GET['url'])){
									$isliked=$like->current_reaction;
								}
							}
						}else{
							$isliked="none";
						}

						////////////////check rating list of user//////////////
						$rating_xml_user_url=$rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/rating_list.xml";

						if(file_exists($rating_xml_user_url)){
							//create new XML file
							//create xml file

							$xml=simplexml_load_file($rating_xml_user_url);
							$tmpxml201d=new SimpleXMLElement($xml->asXML());

						///////check if requested image is aleady exists in the list//////////////
							foreach($tmpxml201d->children() as $rating){

								if($rating->url == decryptData($_GET['url'])){
									$israted=$rating->current_rating;
								}
							}
						}else{
							$israted="none";
						}


					}else{
						$isliked="none";
						$israted="none";
					}

					///////////////////////////////////////////////////////////////////

					echo "Done:";
					echo $row['rate5']."~^92f6#@~";
					echo $row['rate4']."~^92f6#@~";
					echo $row['rate3']."~^92f6#@~";
					echo $row['rate2']."~^92f6#@~";
					echo $row['rate1']."~^92f6#@~";
					echo number_format($row['rating'],1)."~^92f6#@~";
					echo $row['view']."~^92f6#@~";
					echo $row['download']."~^92f6#@~";
					echo $row['uploaded_by']."~^92f6#@~";
					echo $row['album']."~^92f6#@~";
					echo $row['category']."~^92f6#@~";
					echo $row['type']."~^92f6#@~";
					echo $row['liked']."~^92f6#@~";
					echo $row['unliked']."~^92f6#@~";
					echo $imagePsudoUrl."~^92f6#@~";
					echo $isliked."~^92f6#@~";
					echo $israted."~^92f6#@~";
					echo $story;

				}
				else{ //else go to another usre mode

						//fetch username hb_scene_pages
						$query="SELECT username,scene_name FROM hb_scene_pages WHERE uploader_id='".$row['uploaded_by']."' LIMIT 1";
						if($fRows=mysqli_query($hb_scene_db,$query)){
							$fRow=mysqli_fetch_array($fRows,MYSQLI_BOTH);

							///setting uploaded_by variable for ease of use :) dont misunderstand
							$row['uploaded_by']=$fRow['username'];

							//////////same as HB images
							$imageUrl="http://scene.hazrabrothers.com/user_gallery/user_".$row['uploaded_by']."/".decryptData($_GET['url']);
							$xml=simplexml_load_file($imageUrl.".xml");
							$story=$xml->story;

							$imagePsudoUrl="adjust_image.php?type=show&sqc=klPM69D&url=".$_GET['url'];

							$_SESSION['hb_scene']['adjust_image_223']="adj365";


							if(isset($_SESSION['hb_user']['username'])){

								////////////////check like list of user//////////////
								$like_xml_user_url=$rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/like_list.xml";

								if(file_exists($like_xml_user_url)){
									//create new XML file
									//create xml file

									$xml=simplexml_load_file($like_xml_user_url);
									$tmpxml201=new SimpleXMLElement($xml->asXML());

								///////check if requested image is aleady exists in the list//////////////
									foreach($tmpxml201->children() as $like){

										if($like->url == decryptData($_GET['url'])){
											$isliked=$like->current_reaction;
										}
									}
								}else{
									$isliked="none";
								}

								////////////////check rating list of user//////////////
								$rating_xml_user_url=$rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/rating_list.xml";

								if(file_exists($rating_xml_user_url)){
									//create new XML file
									//create xml file

									$xml=simplexml_load_file($rating_xml_user_url);
									$tmpxml201d=new SimpleXMLElement($xml->asXML());

								///////check if requested image is aleady exists in the list//////////////
									foreach($tmpxml201d->children() as $rating){

										if($rating->url == decryptData($_GET['url'])){
											$israted=$rating->current_rating;
										}
									}
								}else{
									$israted="none";
								}


							}else{
								$isliked="none";
								$israted="none";
							}

							//////////////////////////////////////////////////////////////////////

							echo "Done:";
							echo $row['rate5']."~^92f6#@~";
							echo $row['rate4']."~^92f6#@~";
							echo $row['rate3']."~^92f6#@~";
							echo $row['rate2']."~^92f6#@~";
							echo $row['rate1']."~^92f6#@~";
							echo number_format($row['rating'],1)."~^92f6#@~";
							echo $row['view']."~^92f6#@~";
							echo $row['download']."~^92f6#@~";
							echo $fRow['scene_name']."~^92f6#@~";
							echo $row['album']."~^92f6#@~";
							echo $row['category']."~^92f6#@~";
							echo $row['type']."~^92f6#@~";
							echo $row['liked']."~^92f6#@~";
							echo $row['unliked']."~^92f6#@~";
							echo $imagePsudoUrl."~^92f6#@~";
							echo $isliked."~^92f6#@~";
							echo $israted."~^92f6#@~";
							echo $story;


						}else{
							echo "Error:Something Error!";
						}
				}


			}else{
				echo "Error:Something Error!";
			}


		}else{
			echo "Error:Error2";
		}
	}else{
		echo "Error:Error1";
	}

?>
