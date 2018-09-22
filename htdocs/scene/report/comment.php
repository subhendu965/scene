<?php

if(isset($_GET['target']) && !empty($_GET['target']) && isset($_GET['imurl']) && !empty($_GET['imurl']) && isset($_GET['ctp']) && !empty($_GET['ctp'])){

}else{
	die("Unauthorized Entry!");
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17013;
$hb_folder_layer=2;
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

/////////////geting uploader from database and set xml path///////////////////////
$imageUrl=decryptData($_GET["imurl"]);
$query="SELECT uploaded_by FROM hb_scene_images WHERE url='".mysqli_real_escape_string($hb_scene_db,decryptData($_GET['imurl']))."' LIMIT 1";

	if($rows=mysqli_query($hb_scene_db,$query)){

		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
			if($row['uploaded_by']=="HB"){
				$comment_xml_url=$rootpath."scene/hb_gallery/".$imageUrl."_comment."."xml";
			}else{
				//fetch username hb_scene_uploader
				$query="SELECT username FROM hb_scene_uploader WHERE uploader_id='".$row['uploaded_by']."' LIMIT 1";
				if($fRows=mysqli_query($hb_scene_db,$query)){
					$fRow=mysqli_fetch_array($fRows,MYSQLI_BOTH);

					///setting uploaded_by variable for ease of use :) dont misunderstand
					$uploaded_by=$fRow['username'];
					$comment_xml_url=$rootpath."scene/user_gallery/user_".$uploaded_by."/".$imageUrl."_comment."."xml";
				}

			}
		}else{
			echo "Error:Error2";
		}
	}else{
		echo "Error:Error1";
	}

  /////////switch here
switch($_GET['ctp']){ //////////////ctp means comment type
      case "cmnt":
        report_on_comment($_GET['target']);
        break;
      case "rpcmnt":
        report_on_reply($_GET['target']);
        break;
      default:
        die("Unauthorized Entry!");
        break;

}

function report_on_comment($main_id){
  global $comment_xml_url;
  $xml=simplexml_load_file($comment_xml_url);
  $tmpxml=new SimpleXMLElement($xml->asXML());

  foreach($tmpxml->children() as $comment){

    if($comment->main_id == $main_id){
      echo $comment->message;
      $tmpxml->asXML($comment_xml_url);


    }
  }
}

function report_on_reply($tmp_id){
	global $comment_xml_url;
	$xml=simplexml_load_file($comment_xml_url);
	$tmpxml=new SimpleXMLElement($xml->asXML());

	$main_id=substr($tmp_id,0,10);
	$reply_id="REPCMT_".$tmp_id;
	foreach($tmpxml->children() as $comment){

		if($comment->main_id == $main_id){
      echo $comment->message;
      echo "<br>-------------------------------------------------<br>";
			foreach($comment->reply->children() as $reply_comment){

				if((string)$reply_comment->reply_id == $reply_id){
					echo $reply_comment->message;
					$tmpxml->asXML($comment_xml_url);

				}
			}



		}
	}
}


?>
