<?php

if(isset($_POST['sqc']) && $_POST['sqc']=='pJ94c' && isset($_POST['url']) && !empty($_POST['url']) && isset($_POST['rating']) && !empty($_POST['rating'])){

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
	die("Error:Please log in fist to give a rating.");
}

if($_POST['rating']=='1' || $_POST['rating']=='2' || $_POST['rating']=='3' || $_POST['rating']=='4' || $_POST['rating']=='5'){

}else{
	die("Error:Something Wrong.");
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//include scene init

include $rootpath."scene/scene_init.php";

//////////////////////////////////////////////////////////////////////////////////////

/////////////geting user from database and set xml path///////////////////////
$rating_xml_user_url=$rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/rating_list.xml";

$imageUrl=decryptData($_POST["url"]);
$query="SELECT uploaded_by FROM hb_scene_images WHERE url='".mysqli_real_escape_string($hb_scene_db,decryptData($_POST['url']))."' LIMIT 1";

if($rows=mysqli_query($hb_scene_db,$query)){

	if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
		if($row['uploaded_by']=="HB"){
			$rating_xml_url=$rootpath."scene/hb_gallery/".$imageUrl."_rating_image."."xml";
		}else{
			//fetch username hb_scene_pages
			$query="SELECT username FROM hb_scene_pages WHERE uploader_id='".$row['uploaded_by']."' LIMIT 1";
			if($fRows=mysqli_query($hb_scene_db,$query)){
				$fRow=mysqli_fetch_array($fRows,MYSQLI_BOTH);

				///setting uploaded_by variable for ease of use :) dont misunderstand
				$uploaded_by=$fRow['username'];
				$rating_xml_url=$rootpath."scene/user_gallery/user_".$uploaded_by."/".$imageUrl."_rating_image."."xml";

			}

		}
	}else{
		echo "Error:Error2";
	}
}else{
	echo "Error:Error1";
}

///////////check if user file exists////////////////////////////////
if(file_exists($rating_xml_user_url)){
	//create new XML file
	//create xml file

	$xml=simplexml_load_file($rating_xml_user_url);
	$tmpxml201=new SimpleXMLElement($xml->asXML());

///////check if requested image is aleady exists in the list//////////////
	$flag_k23Mj=0;
	foreach($tmpxml201->children() as $rating){

		if($rating->url == decryptData($_POST['url'])){
			$flag_k23Mj=1;
			$current_rating=$rating;
		}
	}

	if($flag_k23Mj==1){
    if(isset($xml) && isset($current_rating)){
			$previous_rating=(string)$current_rating->current_rating;

      $current_rating->current_rating=$_POST['rating'];
      $newrating63=$current_rating->activities->addChild("activity");
      $newrating63->addChild("date_of_rating",date("Y-m-d"));
      $newrating63->addChild("time_of_rating",date("H:i:s"));
      $newrating63->addChild("rating",$_POST['rating']);
      $newrating63->addChild("browser",$hb_user_browser);
      $newrating63->addChild("ip",$hb_user_ip);
      $newrating63->addChild("os",$hb_user_os);
      $newrating63->addChild("country",$hb_user_country_three);

      $tmpxml201->asXML($rating_xml_user_url);

      changeInDataBase(decryptData($_POST['url']),$previous_rating,$_POST['rating']);
    }
	}else{
		if(isset($xml) && isset($tmpxml201)){
			$newrating78=$tmpxml201->addChild("rating");
			$newrating78->addChild("url",decryptData($_POST['url']));
			$newrating78->addChild("current_rating",$_POST['rating']);
			$newrating78->addChild("activities","");
			$newrating78->activities->addChild("activity","");
			$newrating78->activities->activity->addChild("date_of_rating",date("Y-m-d"));
			$newrating78->activities->activity->addChild("time_of_rating",date("H:i:s"));
			$newrating78->activities->activity->addChild("rating",$_POST['rating']);
			$newrating78->activities->activity->addChild("browser",$hb_user_browser);
			$newrating78->activities->activity->addChild("ip",$hb_user_ip);
			$newrating78->activities->activity->addChild("os",$hb_user_os);
			$newrating78->activities->activity->addChild("country",$hb_user_country_three);

			$tmpxml201->asXML($rating_xml_user_url);

			changeInDataBase(decryptData($_POST['url']),"none",$_POST['rating']);
  		}else{

  		}
	}


}else{
	$string="<?xml version=\"1.0\"?>";
	$string.="<ratings>";
	$string.="<rating>";

	$string.="<url>".decryptData($_POST['url'])."</url>";
	$string.="<current_rating>".$_POST['rating']."</current_rating>";

	$string.="
	<activities>
	<activity>
	<date_of_rating>".date("Y-m-d")."</date_of_rating>
	<time_of_rating>".date("H:i:s")."</time_of_rating>
	<rating>".$_POST['rating']."</rating>
	<browser>".$hb_user_browser."</browser>
	<ip>".$hb_user_ip."</ip>
	<os>".$hb_user_os."</os>
	<country>".$hb_user_country_three."</country>
	</activity>
	</activities>
	";
	$string.="</rating>";
	$string.="</ratings>";

	$handle=fopen($rating_xml_user_url,"w");
	fwrite($handle,$string);
	fclose($handle);

	changeInDataBase(decryptData($_POST['url']),"none",$_POST['rating']);
}

////////////////////////////////////////////////////////////////////////
////////////check image side file exists//////////////
  if(file_exists($rating_xml_url)){
		//create new XML file
		//create xml file

		$xml=simplexml_load_file($rating_xml_url);
		$tmpxml201=new SimpleXMLElement($xml->asXML());

	///////check if requested image is aleady exists in the list//////////////
		$flag_k23Mj=0;
		foreach($tmpxml201->children() as $rating){

			if($rating->username == $_SESSION['hb_user']['username']){
				$flag_k23Mj=1;
				$current_rating=$rating;
			}
		}

		if($flag_k23Mj==1){
			///////////image already rated////////////////
			if(isset($xml) && isset($current_rating)){
				$current_rating->current_rating=$_POST['rating'];
				$newrating63=$current_rating->activities->addChild("activity");
				$newrating63->addChild("date_of_rating",date("Y-m-d"));
				$newrating63->addChild("time_of_rating",date("H:i:s"));
				$newrating63->addChild("rating",$_POST['rating']);
				$newrating63->addChild("browser",$hb_user_browser);
				$newrating63->addChild("ip",$hb_user_ip);
				$newrating63->addChild("os",$hb_user_os);
				$newrating63->addChild("country",$hb_user_country_three);

				$tmpxml201->asXML($rating_xml_url);
			}

		}else{
			if(isset($xml) && isset($tmpxml201)){
				$newrating78=$tmpxml201->addChild("rating");
				$newrating78->addChild("username",$_SESSION['hb_user']['username']);
				$newrating78->addChild("current_rating",$_POST['rating']);
				$newrating78->addChild("activities","");
				$newrating78->activities->addChild("activity","");
				$newrating78->activities->activity->addChild("date_of_rating",date("Y-m-d"));
				$newrating78->activities->activity->addChild("time_of_rating",date("H:i:s"));
				$newrating78->activities->activity->addChild("rating",$_POST['rating']);
				$newrating78->activities->activity->addChild("browser",$hb_user_browser);
				$newrating78->activities->activity->addChild("ip",$hb_user_ip);
				$newrating78->activities->activity->addChild("os",$hb_user_os);
				$newrating78->activities->activity->addChild("country",$hb_user_country_three);

				$tmpxml201->asXML($rating_xml_url);
			}else{

			}
		}

  }else{
    //create new XML file
    //create xml file

    $string="<?xml version=\"1.0\"?>";
    $string.="<ratings>";
    $string.="<rating>";

    $string.="<username>".$_SESSION['hb_user']['username']."</username>";
		$string.="<current_rating>".$_POST['rating']."</current_rating>";

		$string.="
		<activities>
		<activity>
		<date_of_rating>".date("Y-m-d")."</date_of_rating>
		<time_of_rating>".date("H:i:s")."</time_of_rating>
		<rating>".$_POST['rating']."</rating>
		<browser>".$hb_user_browser."</browser>
		<ip>".$hb_user_ip."</ip>
		<os>".$hb_user_os."</os>
		<country>".$hb_user_country_three."</country>
		</activity>
		</activities>
		";
    $string.="</rating>";
    $string.="</ratings>";

    $handle=fopen($rating_xml_url,"w");
    fwrite($handle,$string);
    fclose($handle);

  }


	/////////////////////////////////////////////////////////////////////////////////
	/////// ########################## SEND DATA TO CLIENT ##########################
	/////////////////////////////////////////////////////////////////////////////////

	return_current_rating(decryptData($_POST['url']));

	/////////////////////////////////////////////////////////////////////////////////

	///////////////////change in database//////////////////
	function changeInDataBase($url,$prev_state,$change_state){
	global $hb_scene_db;

	$query="SELECT url,uploaded_by FROM hb_scene_images WHERE url='".mysqli_real_escape_string($hb_scene_db,$url)."' LIMIT 1";
	if($rows=mysqli_query($hb_scene_db,$query)){
		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
			if($row['url']==$url){
				/////////////////work here////////////////
				if($prev_state=='1' || $prev_state=='2' || $prev_state=='3' || $prev_state=='4' || $prev_state=='5'){

					$query1="UPDATE hb_scene_images SET rate".$change_state."=rate".$change_state."+1, rate".$prev_state."=rate".$prev_state."-1 WHERE url='".mysqli_real_escape_string($hb_scene_db,$url)."' LIMIT 1";
					if(mysqli_query($hb_scene_db,$query1)){

					}
				}elseif($prev_state == 'none'){

					$query1="UPDATE hb_scene_images SET rate".$change_state."=rate".$change_state."+1 WHERE url='".mysqli_real_escape_string($hb_scene_db,$url)."' LIMIT 1";
					$query2="UPDATE hb_scene_pages SET gain_rating=gain_rating+1 WHERE uploader_id='".mysqli_real_escape_string($hb_scene_db,$row['uploaded_by'])."' LIMIT 1";
					$query3="UPDATE hb_scene_users SET total_rating=total_rating+1 WHERE user_id='".mysqli_real_escape_string($hb_scene_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
					if(mysqli_query($hb_scene_db,$query1)){

					}
					if(mysqli_query($hb_scene_db,$query2)){

					}
					if(mysqli_query($hb_scene_db,$query3)){

					}
				}else{

				}


			}
		}
	}
	}

	///////////////////////send feedback to the client funtion//////////////////////////////////

	function return_current_rating($url){
	global $hb_scene_db;
	$total_rating_final_gh545g6hh_1=0;
	$total_rating_final_gh545g6hh_2=0;
	$total_rating_final_gh545g6hh_3=0;
	$total_rating_final_gh545g6hh_4=0;
	$total_rating_final_gh545g6hh_5=0;

	$query="SELECT rate1,rate2,rate3,rate4,rate5,(rate1*1+rate2*2+rate3*3+rate4*4+rate5*5)/(rate1+rate2+rate3+rate4+rate5) AS rating FROM hb_scene_images WHERE url='".mysqli_real_escape_string($hb_scene_db,$url)."' LIMIT 1";
	if($rows=mysqli_query($hb_scene_db,$query)){
		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){

			$total_rating_final_gh545g6hh_1=$row['rate1'];
			$total_rating_final_gh545g6hh_2=$row['rate2'];
			$total_rating_final_gh545g6hh_3=$row['rate3'];
			$total_rating_final_gh545g6hh_4=$row['rate4'];
			$total_rating_final_gh545g6hh_5=$row['rate5'];

			$total_rating_final_gh545g6hh_total=$row['rating'];
		}
	}

	echo "Done:".$_POST['rating']."~#@#~";
	echo $total_rating_final_gh545g6hh_5."~#@#~";
	echo $total_rating_final_gh545g6hh_4."~#@#~";
	echo $total_rating_final_gh545g6hh_3."~#@#~";
	echo $total_rating_final_gh545g6hh_2."~#@#~";
	echo $total_rating_final_gh545g6hh_1."~#@#~";
	echo number_format($total_rating_final_gh545g6hh_total,1);
}
