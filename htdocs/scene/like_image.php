<?php

if(isset($_POST['sqc']) && $_POST['sqc']=='nm41K' && isset($_POST['url']) && !empty($_POST['url']) && isset($_POST['react']) && !empty($_POST['react'])){

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

if($hb_user_logged_in){

}else{
	die("Error:Please log in fist to give a reaction.");
}


if($_POST['react']=='like' || $_POST['react']=='unlike'){

}else{
	die("Error:Something Wrong.");
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//include scene init

include $rootpath."scene/scene_init.php";

//////////////////////////////////////////////////////////////////////////////////////

/////////////geting user from database and set xml path///////////////////////
$like_xml_user_url=$rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/like_list.xml";

$imageUrl=decryptData($_POST["url"]);
$query="SELECT uploaded_by FROM hb_scene_images WHERE url='".mysqli_real_escape_string($hb_scene_db,decryptData($_POST['url']))."' LIMIT 1";

if($rows=mysqli_query($hb_scene_db,$query)){

	if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
		if($row['uploaded_by']=="HB"){
			$like_xml_url=$rootpath."scene/hb_gallery/".$imageUrl."_like_image."."xml";
		}else{
			//fetch username hb_scene_pages
			$query="SELECT username FROM hb_scene_pages WHERE uploader_id='".$row['uploaded_by']."' LIMIT 1";
			if($fRows=mysqli_query($hb_scene_db,$query)){
				$fRow=mysqli_fetch_array($fRows,MYSQLI_BOTH);

				///setting uploaded_by variable for ease of use :) dont misunderstand
				$uploaded_by=$fRow['username'];
				$like_xml_url=$rootpath."scene/user_gallery/user_".$uploaded_by."/".$imageUrl."_like_image."."xml";

			}

		}
	}else{
		echo "Error:Error2";
	}
}else{
	echo "Error:Error1";
}

///////////check if user file exists////////////////////////////////
if(file_exists($like_xml_user_url)){
	//create new XML file
	//create xml file

	$xml=simplexml_load_file($like_xml_user_url);
	$tmpxml201=new SimpleXMLElement($xml->asXML());

///////check if requested image is aleady exists in the list//////////////
	$flag_k23Mj=0;
	foreach($tmpxml201->children() as $like){

		if($like->url == decryptData($_POST['url'])){
			$flag_k23Mj=1;
			$current_like=$like;
		}
	}

	if($flag_k23Mj==1){
		///////////image already liked or unliked////////////////
		if($current_like->current_reaction=="like"){
			if($_POST['react']=="like"){

			}elseif ($_POST['react']=='unlike') {
				if(isset($xml) && isset($current_like)){
					$current_like->current_reaction="unlike";
					$newlike63=$current_like->activities->addChild("activity");
					$newlike63->addChild("date_of_like",date("Y-m-d"));
					$newlike63->addChild("time_of_like",date("H:i:s"));
					$newlike63->addChild("reaction",$_POST['react']);
					$newlike63->addChild("browser",$hb_user_browser);
					$newlike63->addChild("ip",$hb_user_ip);
					$newlike63->addChild("os",$hb_user_os);
					$newlike63->addChild("country",$hb_user_country_three);

					$tmpxml201->asXML($like_xml_user_url);

					changeInDataBase(decryptData($_POST['url']),"L2U");
				}
			}else{

			}
		}elseif ($current_like->current_reaction=="unlike") {
			if($_POST['react']=="like"){
				if(isset($xml) && isset($current_like)){
					$current_like->current_reaction="like";
					$newlike63=$current_like->activities->addChild("activity");
					$newlike63->addChild("date_of_like",date("Y-m-d"));
					$newlike63->addChild("time_of_like",date("H:i:s"));
					$newlike63->addChild("reaction",$_POST['react']);
					$newlike63->addChild("browser",$hb_user_browser);
					$newlike63->addChild("ip",$hb_user_ip);
					$newlike63->addChild("os",$hb_user_os);
					$newlike63->addChild("country",$hb_user_country_three);

					$tmpxml201->asXML($like_xml_user_url);

					changeInDataBase(decryptData($_POST['url']),"U2L");
				}
			}elseif ($_POST['react']=='unlike') {

			}else{

			}
		}else{

		}
	}else{
		if(isset($xml) && isset($tmpxml201)){
			$newlike78=$tmpxml201->addChild("like");
			$newlike78->addChild("url",decryptData($_POST['url']));
			$newlike78->addChild("current_reaction",$_POST['react']);
			$newlike78->addChild("activities","");
			$newlike78->activities->addChild("activity","");
			$newlike78->activities->activity->addChild("date_of_like",date("Y-m-d"));
			$newlike78->activities->activity->addChild("time_of_like",date("H:i:s"));
			$newlike78->activities->activity->addChild("reaction",$_POST['react']);
			$newlike78->activities->activity->addChild("browser",$hb_user_browser);
			$newlike78->activities->activity->addChild("ip",$hb_user_ip);
			$newlike78->activities->activity->addChild("os",$hb_user_os);
			$newlike78->activities->activity->addChild("country",$hb_user_country_three);

			$tmpxml201->asXML($like_xml_user_url);

			changeInDataBase(decryptData($_POST['url']),$_POST['react']);
		}else{

		}
	}


}else{
	$string="<?xml version=\"1.0\"?>";
	$string.="<likes>";
	$string.="<like>";

	$string.="<url>".decryptData($_POST['url'])."</url>";
	$string.="<current_reaction>".$_POST['react']."</current_reaction>";

	$string.="
	<activities>
	<activity>
	<date_of_like>".date("Y-m-d")."</date_of_like>
	<time_of_like>".date("H:i:s")."</time_of_like>
	<reaction>".$_POST['react']."</reaction>
	<browser>".$hb_user_browser."</browser>
	<ip>".$hb_user_ip."</ip>
	<os>".$hb_user_os."</os>
	<country>".$hb_user_country_three."</country>
	</activity>
	</activities>
	";
	$string.="</like>";
	$string.="</likes>";

	$handle=fopen($like_xml_user_url,"w");
	fwrite($handle,$string);
	fclose($handle);

	changeInDataBase(decryptData($_POST['url']),$_POST['react']);
}

////////////check image side file exists//////////////
  if(file_exists($like_xml_url)){
		//create new XML file
		//create xml file

		$xml=simplexml_load_file($like_xml_url);
		$tmpxml201=new SimpleXMLElement($xml->asXML());

	///////check if requested image is aleady exists in the list//////////////
		$flag_k23Mj=0;
		foreach($tmpxml201->children() as $like){

			if($like->username == $_SESSION['hb_user']['username']){
				$flag_k23Mj=1;
				$current_like=$like;
			}
		}

		if($flag_k23Mj==1){
			///////////image already liked or unliked////////////////
			if($current_like->current_reaction=="like"){
				if($_POST['react']=="like"){

				}elseif ($_POST['react']=='unlike') {
					if(isset($xml) && isset($current_like)){
						$current_like->current_reaction="unlike";
						$newlike63=$current_like->activities->addChild("activity");
						$newlike63->addChild("date_of_like",date("Y-m-d"));
						$newlike63->addChild("time_of_like",date("H:i:s"));
						$newlike63->addChild("reaction",$_POST['react']);
						$newlike63->addChild("browser",$hb_user_browser);
						$newlike63->addChild("ip",$hb_user_ip);
						$newlike63->addChild("os",$hb_user_os);
						$newlike63->addChild("country",$hb_user_country_three);

						$tmpxml201->asXML($like_xml_url);
					}
				}else{

				}
			}elseif ($current_like->current_reaction=="unlike") {
				if($_POST['react']=="like"){
					if(isset($xml) && isset($current_like)){
						$current_like->current_reaction="like";
						$newlike63=$current_like->activities->addChild("activity");
						$newlike63->addChild("date_of_like",date("Y-m-d"));
						$newlike63->addChild("time_of_like",date("H:i:s"));
						$newlike63->addChild("reaction",$_POST['react']);
						$newlike63->addChild("browser",$hb_user_browser);
						$newlike63->addChild("ip",$hb_user_ip);
						$newlike63->addChild("os",$hb_user_os);
						$newlike63->addChild("country",$hb_user_country_three);

						$tmpxml201->asXML($like_xml_url);
					}
				}elseif ($_POST['react']=='unlike') {

				}else{

				}
			}else{

			}

		}else{
			if(isset($xml) && isset($tmpxml201)){
				$newlike78=$tmpxml201->addChild("like");
				$newlike78->addChild("username",$_SESSION['hb_user']['username']);
				$newlike78->addChild("current_reaction",$_POST['react']);
				$newlike78->addChild("activities","");
				$newlike78->activities->addChild("activity","");
				$newlike78->activities->activity->addChild("date_of_like",date("Y-m-d"));
				$newlike78->activities->activity->addChild("time_of_like",date("H:i:s"));
				$newlike78->activities->activity->addChild("reaction",$_POST['react']);
				$newlike78->activities->activity->addChild("browser",$hb_user_browser);
				$newlike78->activities->activity->addChild("ip",$hb_user_ip);
				$newlike78->activities->activity->addChild("os",$hb_user_os);
				$newlike78->activities->activity->addChild("country",$hb_user_country_three);

				$tmpxml201->asXML($like_xml_url);
			}else{

			}
		}

  }else{
    //create new XML file
    //create xml file

    $string="<?xml version=\"1.0\"?>";
    $string.="<likes>";
    $string.="<like>";

    $string.="<username>".$_SESSION['hb_user']['username']."</username>";
		$string.="<current_reaction>".$_POST['react']."</current_reaction>";

		$string.="
		<activities>
		<activity>
		<date_of_like>".date("Y-m-d")."</date_of_like>
		<time_of_like>".date("H:i:s")."</time_of_like>
		<reaction>".$_POST['react']."</reaction>
		<browser>".$hb_user_browser."</browser>
		<ip>".$hb_user_ip."</ip>
		<os>".$hb_user_os."</os>
		<country>".$hb_user_country_three."</country>
		</activity>
		</activities>
		";
    $string.="</like>";
    $string.="</likes>";

    $handle=fopen($like_xml_url,"w");
    fwrite($handle,$string);
    fclose($handle);

  }
/////////////////////////////////////////////////////////////////////////////////
/////// ########################## SEND DATA TO CLIENT ##########################
/////////////////////////////////////////////////////////////////////////////////

return_current_like_unlike(decryptData($_POST['url']));

/////////////////////////////////////////////////////////////////////////////////

///////////////////change in database//////////////////
function changeInDataBase($url,$change_state){
	global $hb_scene_db;

	
	//////////////change user db/////////////////////////
	$query="SELECT url,uploaded_by FROM hb_scene_images WHERE url='".mysqli_real_escape_string($hb_scene_db,$url)."' LIMIT 1";
	if($rows=mysqli_query($hb_scene_db,$query)){
		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
			if($row['url']==$url){
				/////////////////work here////////////////
				switch ($change_state) {
					case 'like':
						$query1="UPDATE hb_scene_images SET liked=liked+1 WHERE url='".mysqli_real_escape_string($hb_scene_db,$url)."' LIMIT 1";
						$query2="UPDATE hb_scene_pages SET gain_liked=gain_liked+1 WHERE uploader_id='".mysqli_real_escape_string($hb_scene_db,$row['uploaded_by'])."' LIMIT 1";
						$query3="UPDATE hb_scene_users SET total_liked=total_liked+1 WHERE user_id='".mysqli_real_escape_string($hb_scene_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
						break;
					case 'unlike':
						$query1="UPDATE hb_scene_images SET unliked=unliked+1 WHERE url='".mysqli_real_escape_string($hb_scene_db,$url)."' LIMIT 1";
						$query2="UPDATE hb_scene_pages SET gain_unliked=gain_unliked+1 WHERE uploader_id='".mysqli_real_escape_string($hb_scene_db,$row['uploaded_by'])."' LIMIT 1";
						$query3="UPDATE hb_scene_users SET total_unliked=total_unliked+1 WHERE user_id='".mysqli_real_escape_string($hb_scene_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
						break;
					case 'L2U':
						$query1="UPDATE hb_scene_images SET liked=liked-1, unliked=unliked+1 WHERE url='".mysqli_real_escape_string($hb_scene_db,$url)."' LIMIT 1";
						$query2="UPDATE hb_scene_pages SET gain_liked=gain_liked-1, gain_unliked=gain_unliked+1 WHERE uploader_id='".mysqli_real_escape_string($hb_scene_db,$row['uploaded_by'])."' LIMIT 1";
						$query3="UPDATE hb_scene_users SET total_liked=total_liked-1, total_unliked=total_unliked+1 WHERE user_id='".mysqli_real_escape_string($hb_scene_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
						break;
					case 'U2L':
						$query1="UPDATE hb_scene_images SET liked=liked+1, unliked=unliked-1 WHERE url='".mysqli_real_escape_string($hb_scene_db,$url)."' LIMIT 1";
						$query2="UPDATE hb_scene_pages SET gain_liked=gain_liked+1, gain_unliked=gain_unliked-1 WHERE uploader_id='".mysqli_real_escape_string($hb_scene_db,$row['uploaded_by'])."' LIMIT 1";
						$query3="UPDATE hb_scene_users SET total_liked=total_liked+1, total_unliked=total_unliked-1 WHERE user_id='".mysqli_real_escape_string($hb_scene_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
						break;
					default:

						break;
				}
				if(mysqli_query($hb_scene_db,$query1)){

				}
				if(mysqli_query($hb_scene_db,$query2)){

				}
				if(mysqli_query($hb_scene_db,$query3)){

				}

			}
		}
	}

}

///////////////////////send feedback to the client funtion//////////////////////////////////

function return_current_like_unlike($url){
	global $hb_scene_db;
	$total_like_final_gh545g6=0;
	$total_unlike_final_gh545g6=0;

	$query="SELECT liked,unliked FROM hb_scene_images WHERE url='".mysqli_real_escape_string($hb_scene_db,$url)."' LIMIT 1";
	if($rows=mysqli_query($hb_scene_db,$query)){
		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
			$total_like_final_gh545g6=$row['liked'];
			$total_unlike_final_gh545g6=$row['unliked'];
		}
	}

	echo "Done:".$_POST['react']."~#@#~".$total_like_final_gh545g6."~#@#~".$total_unlike_final_gh545g6;
}
