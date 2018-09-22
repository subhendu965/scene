<?php

if(isset($_POST['sqc']) && $_POST['sqc']=='mlo4B6rt' && isset($_POST['url']) && !empty($_POST['url'])){

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

include $rootpath."scene/scene_init.php";

if(isset($_SESSION['hb_scene']['comments']) && $_SESSION['hb_scene']['comments']=="Lmk69a"){

}else{
	die("Unauthorized entry.");
}
/*/check if user is logged in
if($hb_user_logged_in){

}else{
	die("Error:Log In first to give a comment.");

}*/


///////////////////////////delimeters and stylesheet////////////////////////////////
$comment_style_sheet_52k=<<<STYLES569
<style>
/*-----------------------------------------------------------------*/
#hb_comment_new_wrapper{
	height:30px;
	background-color:rgba(255,255,255,0.95);
	border-radius:5px;
	padding:5px;
	margin:5px;
	color:black;
}

#hb_comment_new_wrapper #textbox_div{
		display:inline-block;
		float:left;
		width:70%;
}
#hb_comment_new_wrapper #comment_message_125K{
		width:100%;
		height:30px;
		padding:5px 10px;
		border:2px solid rgba(100,120,140,1);
		border-radius:4px;
		transition:background 0.3s, border 0.3s, box-shadow 0.3s;
}
#hb_comment_new_wrapper #comment_message_125K:hover{
	border:2px solid rgba(50,60,70,1);
	box-shadow:rgba(0,0,0,0.5) 1px 1px 3px;
}
#hb_comment_new_wrapper #comment_message_125K:focus{
	box-shadow:rgba(0,0,0,0.5) 1px 1px 3px;
}
/*-----------------------*/
#hb_comment_new_wrapper #send{
		display:inline-block;
		width:30%;
}
#hb_comment_new_wrapper #hb_comment_submit_btn_125K{
	width:90%;
	float:right;
	height:16px;
	padding:5px 0px;
	text-align:center;
	color:white;
	font-size:14px;
	border:2px solid rgba(100,120,140,1);
	background:rgba(100,120,140,1);
	border-radius:4px;
	cursor:pointer;
	transition:background 0.3s, border 0.3s, box-shadow 0.3s, color 0.3s;
}

#hb_comment_new_wrapper #hb_comment_submit_btn_125K:hover{
	background:rgba(220,240,250,1);
	color:rgba(50,60,70,1);
}
/*-----------------------------------------------------------------*/

	#hb_comment_wrapper{
		background-color:rgba(255,255,255,0.95);
		border-radius:5px;
		padding:5px;
		margin:5px;
		color:black;
	}
	#hb_comment_wrapper #scene_mask_div{
		float:left;
		display:flex;
		flex:none;
		padding:5px;
		padding-right:10px;
	}
	#hb_comment_wrapper #scene_mask_div>div{
		width:50px;
		height:50px;
		border-radius:300px;
		background-color:#ccc;
		background-size:cover;
		background-position:center center;
		background-repeat:no-repeat;
		box-shadow:rgba(0,0,0,0.5) 0px 0px 5px;
	}

	#hb_comment_wrapper #comment_body{
		display:flex;
		flex:1;
	}
	#hb_comment_wrapper #comment_body #div_inner{
		width:100%;
	}
	#hb_comment_wrapper #comment_body header{

	}
	/*-------````````````````````````````----*/
	#hb_comment_wrapper #scene_name_viewer{
		display:inline-block;
		font-size:15px;
		font-weight:bold;
	}
	#hb_comment_wrapper #date_time_viewer{
		display:inline-block;
		float:right;
		text-align:right;
		font-size:12px;
		padding-right:5px;
	}
	#hb_comment_wrapper section{
		padding:8px 0px;
	}
	/*-----------*/
	#hb_comment_wrapper footer div[id$=_viewer]{
		display:inline-block;
		padding:3px 3px 5px 3px;
		margin:0px 3px 0px 0px;
		font-size:12px;

		border-bottom-left-radius:5px;
		border-bottom-right-radius:5px;

		cursor:pointer;
		transition:background 0.3s, color 0.3s;
	}
	/*------///////////////////////////////////////-----*/
	#hb_comment_wrapper footer #like_viewer{
		border-top:1px solid #272;
	}
	#hb_comment_wrapper footer #like_viewer:hover{
		background-color:rgba(150,190,160,0.5);
	}
	/*-----------*/
	#hb_comment_wrapper footer #unlike_viewer{
		border-top:1px solid #c22;
	}
	#hb_comment_wrapper footer #unlike_viewer:hover{
		background-color:rgba(190,160,150,0.5);
	}
	/*-----------*/
	#hb_comment_wrapper footer #reply_viewer{
		border-top:1px solid #468;
	}
	#hb_comment_wrapper footer #reply_viewer:hover{
		background-color:rgba(150,160,190,0.5);
	}
	/*-----------*/
	#hb_comment_wrapper footer #report_viewer{
		border-top:1px solid #526;
	}
	#hb_comment_wrapper footer #report_viewer:hover{
		background-color:rgba(180,130,200,0.45);
	}
	/*-----///////////////////////////////////////------*/
	#hb_comment_wrapper footer div[id$=_viewer] div{
		display:inline-block;
	}
	#hb_comment_wrapper a{
		text-decoration:none;
	}
	/*-----------*/
	#hb_comment_wrapper #like_comment{
		color:#262;
	}
	#hb_comment_wrapper #unlike_comment{
		color:#c22;
	}
	#hb_comment_wrapper #reply_comment{
		color:#247;
	}
	#hb_comment_wrapper #report_comment{
		color:#526;
	}
/*-------------------------------------------------------------*/
#be_the_first{
	font-size:18px;
	padding:5px 10px;
}
/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	#hb_reply_wrapper{
		background-color:rgba(100,120,140,0.1);
		border:1px solid rgba(100,120,140,0.8);
		padding:5px 0px 5px 5px;
		margin:5px 0px 5px 15px;
		border-radius:5px;
		color:black;
	}

	#hb_reply_wrapper #scene_name_viewer_reply{
		display:inline-block;
		font-size:13px;
		font-weight:bold;
	}

	#hb_reply_wrapper #scene_mask_div_reply{
		float:left;
		display:flex;
		flex:none;
		padding:5px;
		padding-right:10px;
	}
	#hb_reply_wrapper #scene_mask_div_reply>div{
		width:40px;
		height:40px;
		border-radius:300px;
		background-color:#ccc;
		background-size:cover;
		background-position:center center;
		background-repeat:no-repeat;
		box-shadow:rgba(0,0,0,0.5) 0px 0px 5px;
	}
/*--==--=-=--=-=-=-=-=--=-=-=---=--=--=-=-=-=----===--==--*/
#hb_reply_new_wrapper{
	height:30px;
	background-color:rgba(100,120,140,0.1);
	border:1px solid rgba(100,120,140,0.8);
	border-radius:5px;
	padding:5px;
	margin:5px 0px 5px 15px;
	color:black;
}
#hb_reply_new_wrapper #textbox_div{
	display:inline-block;
	float:left;
	width:70%;
}
#hb_reply_new_wrapper #reply_message_v7Uh{
	width:100%;
	height:30px;
	padding:5px 10px;
	border:2px solid rgba(100,120,140,1);
	border-radius:4px;
	transition:background 0.3s, border 0.3s, box-shadow 0.3s;
}
#hb_reply_new_wrapper #reply_message_v7Uh:hover{
	border:2px solid rgba(50,60,70,1);
	box-shadow:rgba(0,0,0,0.5) 1px 1px 3px;
}
#hb_reply_new_wrapper #reply_message_v7Uh:focus{
	box-shadow:rgba(0,0,0,0.5) 1px 1px 3px;
}
	/*-----------------------*/

#hb_reply_new_wrapper #send{
	display:inline-block;
	width:30%;
}
#hb_reply_new_wrapper #hb_reply_submit_btn_b58M{
	width:90%;
	float:right;
	padding:5px 0px;
	color:white;
	border:2px solid rgba(100,120,140,1);
	background:rgba(100,120,140,1);
	border-radius:4px;
	font-size:14px;
	text-align:center;
	cursor:pointer;
	transition:background 0.3s, border 0.3s, box-shadow 0.3s, color 0.3s;
}

#hb_reply_new_wrapper #hb_reply_submit_btn_b58M:hover{
	background:rgba(220,240,250,1);
	color:rgba(50,60,70,1);
}
</style>

STYLES569;


////////////////////////////end of delimeters and stylesheet////////////////////////
/////////////setting up xml url path///////////
if($hb_user_logged_in){
	$comment_xml_user_url=$rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/comment_list.xml";
}

$imageUrl=decryptData($_POST["url"]);
$query="SELECT uploaded_by FROM hb_scene_images WHERE url='".mysqli_real_escape_string($hb_scene_db,decryptData($_POST['url']))."' LIMIT 1";

	if($rows=mysqli_query($hb_scene_db,$query)){

		if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
			if($row['uploaded_by']=="HB"){
				$comment_xml_url=$rootpath."scene/hb_gallery/".$imageUrl."_comment."."xml";
			}else{
				//fetch username hb_scene_pages
				$query="SELECT username FROM hb_scene_pages WHERE uploader_id='".$row['uploaded_by']."' LIMIT 1";
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


//checking token and take action
if(isset($_POST['token']) && !empty($_POST['token'])){

	//check if user is logged in
	if($hb_user_logged_in){

	}else{
		$error_message_4158="
		<style>
			#comment_error_2569n{
				padding:10px;

			}
			#comment_error_2569n #main_cmt_586{
				background:rgba(255,255,255,0.8);
				border-radius:10px;
				border:2px solid red;
				box-shadow:rgba(120,120,120,0.6) 5px 5px 6px inset;
				padding:15px;
				color:black;
			}
			#comment_error_2569n #main_cmt_586 header{
				font-size:18px;
				color:maroon;
				text-align:center;
				padding:5px;
				border-bottom:1px solid maroon;
			}
			#comment_error_2569n #main_cmt_586 #sign_in_comment{
				text-decoration:none;
			}
			#comment_error_2569n #main_cmt_586 #sign_in_comment>div{
				float:right;
				padding:5px 7px;
				margin:3px;
				border:2px solid #931;
				background:#931;
				color:white;
				border-radius:5px;
				transition:color 0.3s, background 0.3s;
			}
			#comment_error_2569n #main_cmt_586 #sign_in_comment>div:hover{
				background:white;
				color:#931;
			}
		</style>
		<div id='comment_error_2569n'>
			<div id='main_cmt_586'>
				<header>
					Log in to comment
				</header>
				<article>
					<div>
						You have to sign in first to comment on an image or react on other comments.
						You can not comment or react if you are not logged in.
					</div>
					<div>
						<a href='http://accounts.hazrabrothers.com/login/sign_in' id='sign_in_comment'><div>Sign In</div></a>
						<div style='clear:both; height:0px; font-size:1px;'> </div>
					</div>
				</article>
			</div>
		</div>
		";
		die("Error:".$error_message_4158);

	}

	switch($_POST['token']){
		case "tK904":
			//create main thread
			createMainNewThread($_POST['token'],$_POST['replyOpenArray']);
			break;
		case "mc6Om":
			//like
			like_to_comment($_POST['main_id'],$_POST['replyOpenArray']);
			break;
		case "nB65j":
			//unlike
			unlike_to_comment($_POST['main_id'],$_POST['replyOpenArray']);
			break;
		case "cV20M":
			//reply show all
			show_reply_start($_POST['main_id'],$_POST['replyOpenArray']);
			break;
		case "mk2x8":
			//reply add reply
			add_reply_entry($_POST['main_id'],$_POST['replyOpenArray']);
			break;
		case "bh15s":
			//like to reply
			like_to_reply($_POST['main_id'],$_POST['replyOpenArray']);
			break;
		case "ct16J":
			unlike_to_reply($_POST['main_id'],$_POST['replyOpenArray']);
			break;
		case "lmK2g":
			report_to_comment($_POST['main_id'],$_POST['replyOpenArray']);
			break;
		case "MnTC6":
			report_to_reply($_POST['main_id'],$_POST['replyOpenArray']);
			break;
		default:
			break;
	}
}else{
	//////at the time of openning
	//check if already comment_<imageurl>.xml exists.
	if(file_exists($comment_xml_url)){ //if exists then open it
		//show all main threads.
		echo "Done:";
		show_new_comment_form();
		showMainThreads($_POST['replyOpenArray']);

	}else{		//else create it.
		echo "Done:";
		echo "<div id='be_the_first'>You have a chance to comment the image first.</div>";
		show_new_comment_form();
	}

}

////----------------------------UDFs start here---------------------------------------//////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
///////***********************************start of report ****************************************//////
////////////////////////////////////////////////////////////////////////////////////////////////////////
function report_to_comment($main_id,$replyOpenArray){
	global $comment_xml_url;
	$xml=simplexml_load_file($comment_xml_url);
	$tmpxml=new SimpleXMLElement($xml->asXML());

	foreach($tmpxml->children() as $comment){

		if($comment->main_id == $main_id){

			$tmpxml->asXML($comment_xml_url);
			echo "Redirect:";
			echo "http://scene.hazrabrothers.com/report/comment.php?ctp=cmnt&target=".$main_id."&imurl=".$_POST['url'];
		}
	}

}

////////////////////////////////////////////////////////////////////////////////////////////////////////
///////***********************************start of unlike ****************************************//////
////////////////////////////////////////////////////////////////////////////////////////////////////////
function unlike_to_comment($main_id,$replyOpenArray){
	global $comment_xml_url;
	global $comment_xml_user_url;
	global $hb_user_ip;
	global $hb_user_browser;
	global $hb_user_os;
	global $hb_user_country_three;

	$xml=simplexml_load_file($comment_xml_url);
	$tmpxml=new SimpleXMLElement($xml->asXML());

	$really_unliked_457=0;
				/////////////////user side script/////////////////////////
			if(file_exists($comment_xml_user_url)){
				$xml=simplexml_load_file($comment_xml_user_url);
				$tmpxml201=new SimpleXMLElement($xml->asXML());

			///////check if requested image is aleady exists in the list//////////////
				$flag_k23Mj=0;
				foreach($tmpxml201->children() as $comment){

					if($comment->url == decryptData($_POST['url'])){
						$flag_k23Mj=1;
						$current_comment=$comment;
					}
				}

				if($flag_k23Mj==1){
					/////////////current image same as selected/////////////////
					$flag_ml9jp=0;
					foreach ($current_comment->likes->children() as $like) {
						if($like->comment_id==$main_id){
							$flag_ml9jp=1;
							$current_like=$like;
						}
					}
					if($flag_ml9jp==1){
						//////////////current comment same as selected////////////
						if($current_like->current_reaction=="unlike"){

						}else{

							$current_like->current_reaction="unlike";
							$acnl90np=$current_like->activities->addChild("activity");
							$acnl90np->addChild("date_of_like",date("Y-m-d"));
							$acnl90np->addChild("time_of_like",date("H:i:s"));
							$acnl90np->addChild("reaction","unlike");
							$acnl90np->addChild("ip",$hb_user_ip);
							$acnl90np->addChild("browser",$hb_user_browser);
							$acnl90np->addChild("os",$hb_user_os);
							$acnl90np->addChild("country",$hb_user_country_three);
							$tmpxml201->asXML($comment_xml_user_url);

							$really_unliked_457=1;
						}

					}else{
						$nl90hk=$current_comment->likes->addChild("like");
						$nl90hk->addChild("comment_id",$main_id);
						$nl90hk->addChild("current_reaction","unlike");
						$acsnl90jk=$nl90hk->addChild("activities");
						$acnl90np=$acsnl90jk->addChild("activity");
						$acnl90np->addChild("date_of_like",date("Y-m-d"));
						$acnl90np->addChild("time_of_like",date("H:i:s"));
						$acnl90np->addChild("reaction","unlike");
						$acnl90np->addChild("ip",$hb_user_ip);
						$acnl90np->addChild("browser",$hb_user_browser);
						$acnl90np->addChild("os",$hb_user_os);
						$acnl90np->addChild("country",$hb_user_country_three);
						$tmpxml201->asXML($comment_xml_user_url);

						$really_unliked_457=5;
					}
				}else{
					$newcomment=$tmpxml201->addChild("comment");
					$newcomment->addChild("url",decryptData($_POST['url']));
					$newcomment->addChild("main_threads","");
					$newcomment->addChild("reply_threads","");
					$mt52k=$newcomment->addChild("likes","");
					$mt458m=$mt52k->addChild("like","");
					$mt458m->addChild("comment_id",$main_id);
					$mt458m->addChild("current_reaction","unlike");
					$mt778dd=$mt458m->addChild("activities","");
					$mt556f=$mt778dd->addChild("activity","");

					$mt556f->addChild("date_of_like",date("Y-m-d"));
					$mt556f->addChild("time_of_like",date("H:i:s"));
					$mt556f->addChild("reaction","unlike");
					$mt556f->addChild("ip",$hb_user_ip);
					$mt556f->addChild("browser",$hb_user_browser);
					$mt556f->addChild("os",$hb_user_os);
					$mt556f->addChild("country",$hb_user_country_three);
					$tmpxml201->asXML($comment_xml_user_url);

					$really_unliked_457=5;
				}
			}else{
				$string="<?xml version=\"1.0\"?>";
				$string.="<comments>";
				$string.="<comment>";
				$string.="<url>".decryptData($_POST['url'])."</url>";

				$string.="<main_threads>";
				$string.="</main_threads>";

				$string.="<reply_threads>";
				$string.="</reply_threads>";

				$string.="<likes>";
				$string.="<like>";
				$string.="<comment_id>".$main_id."</comment_id>";
				$string.="<current_reaction>unlike</current_reaction>";
				$string.="<activities>";
				$string.="<activity>";
				$string.="<date_of_like>".date("Y-m-d")."</date_of_like>";
				$string.="<time_of_like>".date("H:i:s")."</time_of_like>";
				$string.="<reaction>unlike</reaction>";
				$string.="<ip>".$hb_user_ip."</ip>";
				$string.="<browser>".$hb_user_browser."</browser>";
				$string.="<os>".$hb_user_os."</os>";
				$string.="<country>".$hb_user_country_three."</country>";
				$string.="</activity>";
				$string.="</activities>";
				$string.="</like>";
				$string.="</likes>";

				$string.="</comment>";
				$string.="</comments>";

				$handle=fopen($comment_xml_user_url,"w");
				fwrite($handle,$string);
				fclose($handle);

				$really_unliked_457=5;
			}

			if($really_unliked_457==5){
				foreach($tmpxml->children() as $comment){

				  if($comment->main_id == $main_id){
				    $comment->unlike+=1;
				    $cmnt_52fg=$comment->like_activities->addChild("activity","");
				    $cmnt_52fg->addChild("username",$_SESSION['hb_user']['username']);
				    $cmnt_52fg->addChild("reaction","unlike");
				    $cmnt_52fg->addChild("ip",$hb_user_ip);
				    $cmnt_52fg->addChild("browser",$hb_user_browser);
				    $cmnt_52fg->addChild("os",$hb_user_os);
				    $cmnt_52fg->addChild("country",$hb_user_country_three);
				    $tmpxml->asXML($comment_xml_url);
					}
				}
			}elseif ($really_unliked_457==1) {
				foreach($tmpxml->children() as $comment){

				  if($comment->main_id == $main_id){
				    $comment->unlike+=1;
						$comment->like-=1;
				    $cmnt_52fg=$comment->like_activities->addChild("activity","");
				    $cmnt_52fg->addChild("username",$_SESSION['hb_user']['username']);
				    $cmnt_52fg->addChild("reaction","unlike");
				    $cmnt_52fg->addChild("ip",$hb_user_ip);
				    $cmnt_52fg->addChild("browser",$hb_user_browser);
				    $cmnt_52fg->addChild("os",$hb_user_os);
				    $cmnt_52fg->addChild("country",$hb_user_country_three);
				    $tmpxml->asXML($comment_xml_url);
					}
				}
			}else {

			}

			echo "Done:";
			show_new_comment_form();
			showMainThreads($replyOpenArray);

}
////////////////////////////////////////////////////////////////////////////////////////////////////////
///////***********************************start of like *****************************************//////
////////////////////////////////////////////////////////////////////////////////////////////////////////
function like_to_comment($main_id,$replyOpenArray){
	global $comment_xml_url;
	global $comment_xml_user_url;
	global $hb_user_ip;
	global $hb_user_browser;
	global $hb_user_os;
	global $hb_user_country_three;

	$xml=simplexml_load_file($comment_xml_url);
	$tmpxml=new SimpleXMLElement($xml->asXML());

	$really_liked_457=0;

			/////////////////user side script/////////////////////////
			if(file_exists($comment_xml_user_url)){
				$xml=simplexml_load_file($comment_xml_user_url);
				$tmpxml201=new SimpleXMLElement($xml->asXML());

			///////check if requested image is aleady exists in the list//////////////
				$flag_k23Mj=0;
				foreach($tmpxml201->children() as $comment){

					if($comment->url == decryptData($_POST['url'])){
						$flag_k23Mj=1;
						$current_comment=$comment;
					}
				}

				if($flag_k23Mj==1){
					/////////////current image same as selected/////////////////
					$flag_ml9jp=0;
					foreach ($current_comment->likes->children() as $like) {
						if($like->comment_id==$main_id){
							$flag_ml9jp=1;
							$current_like=$like;
						}
					}
					if($flag_ml9jp==1){
						//////////////current comment same as selected////////////
						if($current_like->current_reaction=="like"){

						}else{
							$current_like->current_reaction="like";
							$acnl90np=$current_like->activities->addChild("activity");
							$acnl90np->addChild("date_of_like",date("Y-m-d"));
							$acnl90np->addChild("time_of_like",date("H:i:s"));
							$acnl90np->addChild("reaction","like");
							$acnl90np->addChild("ip",$hb_user_ip);
							$acnl90np->addChild("browser",$hb_user_browser);
							$acnl90np->addChild("os",$hb_user_os);
							$acnl90np->addChild("country",$hb_user_country_three);
							$tmpxml201->asXML($comment_xml_user_url);

							$really_liked_457=1;
						}

					}else{
						$nl90hk=$current_comment->likes->addChild("like");
						$nl90hk->addChild("comment_id",$main_id);
						$nl90hk->addChild("current_reaction","like");
						$acsnl90jk=$nl90hk->addChild("activities");
						$acnl90np=$acsnl90jk->addChild("activity");
						$acnl90np->addChild("date_of_like",date("Y-m-d"));
						$acnl90np->addChild("time_of_like",date("H:i:s"));
						$acnl90np->addChild("reaction","like");
						$acnl90np->addChild("ip",$hb_user_ip);
						$acnl90np->addChild("browser",$hb_user_browser);
						$acnl90np->addChild("os",$hb_user_os);
						$acnl90np->addChild("country",$hb_user_country_three);
						$tmpxml201->asXML($comment_xml_user_url);

						$really_liked_457=5;
					}
				}else{
					$newcomment=$tmpxml201->addChild("comment");
					$newcomment->addChild("url",decryptData($_POST['url']));
					$newcomment->addChild("main_threads","");
					$newcomment->addChild("reply_threads","");
					$mt52k=$newcomment->addChild("likes","");
					$mt458m=$mt52k->addChild("like","");
					$mt458m->addChild("comment_id",$main_id);
					$mt458m->addChild("current_reaction","like");
					$mt778dd=$mt458m->addChild("activities","");
					$mt556f=$mt778dd->addChild("activity","");

					$mt556f->addChild("date_of_like",date("Y-m-d"));
					$mt556f->addChild("time_of_like",date("H:i:s"));
					$mt556f->addChild("reaction","like");
					$mt556f->addChild("ip",$hb_user_ip);
					$mt556f->addChild("browser",$hb_user_browser);
					$mt556f->addChild("os",$hb_user_os);
					$mt556f->addChild("country",$hb_user_country_three);
					$tmpxml201->asXML($comment_xml_user_url);

					$really_liked_457=5;
				}
			}else{
				$string="<?xml version=\"1.0\"?>";
				$string.="<comments>";
				$string.="<comment>";
				$string.="<url>".decryptData($_POST['url'])."</url>";

				$string.="<main_threads>";
				$string.="</main_threads>";

				$string.="<reply_threads>";
				$string.="</reply_threads>";

				$string.="<likes>";
				$string.="<like>";
				$string.="<comment_id>".$main_id."</comment_id>";
				$string.="<current_reaction>like</current_reaction>";
				$string.="<activities>";
				$string.="<activity>";
				$string.="<date_of_like>".date("Y-m-d")."</date_of_like>";
				$string.="<time_of_like>".date("H:i:s")."</time_of_like>";
				$string.="<reaction>like</reaction>";
				$string.="<ip>".$hb_user_ip."</ip>";
				$string.="<browser>".$hb_user_browser."</browser>";
				$string.="<os>".$hb_user_os."</os>";
				$string.="<country>".$hb_user_country_three."</country>";
				$string.="</activity>";
				$string.="</activities>";
				$string.="</like>";
				$string.="</likes>";

				$string.="</comment>";
				$string.="</comments>";

				$handle=fopen($comment_xml_user_url,"w");
				fwrite($handle,$string);
				fclose($handle);

				$really_liked_457=5;

			}

			if($really_liked_457==5){
				foreach($tmpxml->children() as $comment){

				  if($comment->main_id == $main_id){
				    $comment->like+=1;
				    $cmnt_52fg=$comment->like_activities->addChild("activity","");
				    $cmnt_52fg->addChild("username",$_SESSION['hb_user']['username']);
				    $cmnt_52fg->addChild("reaction","like");
				    $cmnt_52fg->addChild("ip",$hb_user_ip);
				    $cmnt_52fg->addChild("browser",$hb_user_browser);
				    $cmnt_52fg->addChild("os",$hb_user_os);
				    $cmnt_52fg->addChild("country",$hb_user_country_three);
				    $tmpxml->asXML($comment_xml_url);
					}
				}
			}elseif ($really_liked_457==1) {
				foreach($tmpxml->children() as $comment){

					if($comment->main_id == $main_id){
						$comment->like+=1;
						$comment->unlike-=1;
						$cmnt_52fg=$comment->like_activities->addChild("activity","");
						$cmnt_52fg->addChild("username",$_SESSION['hb_user']['username']);
						$cmnt_52fg->addChild("reaction","like");
						$cmnt_52fg->addChild("ip",$hb_user_ip);
						$cmnt_52fg->addChild("browser",$hb_user_browser);
						$cmnt_52fg->addChild("os",$hb_user_os);
						$cmnt_52fg->addChild("country",$hb_user_country_three);
						$tmpxml->asXML($comment_xml_url);
					}
				}
			}else{

			}

			echo "Done:";
			show_new_comment_form();
			showMainThreads($replyOpenArray);

}
////////////////////////////////////////////////////////////////////////////////////////////////////////
///////***********************************start of reply *****************************************//////
////////////////////////////////////////////////////////////////////////////////////////////////////////
//==================================================================================================
/////report to reply
//====================================================================================================
function report_to_reply($tmp_id,$replyOpenArray){
	global $comment_xml_url;


	$xml=simplexml_load_file($comment_xml_url);
	$tmpxml=new SimpleXMLElement($xml->asXML());

	$main_id=substr($tmp_id,0,10);
	$reply_id="REPCMT_".$tmp_id;

	foreach($tmpxml->children() as $comment){

		if($comment->main_id == $main_id){

			foreach($comment->reply->children() as $reply_comment){

				if((string)$reply_comment->reply_id == $reply_id){
					$tmpxml->asXML($comment_xml_url);
					echo "Redirect:http://scene.hazrabrothers.com/report/comment.php?ctp=rpcmnt&target=".$tmp_id."&imurl=".$_POST['url'];

				}
			}



		}
	}
}

//==================================================================================================
///// unlike to reply
//====================================================================================================
function unlike_to_reply($tmp_id,$replyOpenArray){
	global $comment_xml_url;
	global $comment_xml_user_url;
	global $hb_user_ip;
	global $hb_user_browser;
	global $hb_user_os;
	global $hb_user_country_three;

	$xml=simplexml_load_file($comment_xml_url);
	$tmpxml=new SimpleXMLElement($xml->asXML());

	$main_id=substr($tmp_id,0,10);
	$reply_id="REPCMT_".$tmp_id;
	echo "Done:";

	$really_unliked_368=0;

					/////////////////user side script/////////////////////////
					if(file_exists($comment_xml_user_url)){
						$xml=simplexml_load_file($comment_xml_user_url);
						$tmpxml201=new SimpleXMLElement($xml->asXML());

					///////check if requested image is aleady exists in the list//////////////
						$flag_k23Mj=0;
						foreach($tmpxml201->children() as $comment){

							if($comment->url == decryptData($_POST['url'])){
								$flag_k23Mj=1;
								$current_comment=$comment;
							}
						}

						if($flag_k23Mj==1){
							$flag_ml9jp=0;
							foreach ($current_comment->likes->children() as $like) {
								if($like->comment_id==$reply_id){
									$flag_ml9jp=1;
									$current_like=$like;
								}
							}
							if($flag_ml9jp==1){
								//////////////current comment same as selected////////////
								if($current_like->current_reaction=="unlike"){

								}else{

									$current_like->current_reaction="unlike";
									$acnl90np=$current_like->activities->addChild("activity");
									$acnl90np->addChild("date_of_like",date("Y-m-d"));
									$acnl90np->addChild("time_of_like",date("H:i:s"));
									$acnl90np->addChild("reaction","unlike");
									$acnl90np->addChild("ip",$hb_user_ip);
									$acnl90np->addChild("browser",$hb_user_browser);
									$acnl90np->addChild("os",$hb_user_os);
									$acnl90np->addChild("country",$hb_user_country_three);
									$tmpxml201->asXML($comment_xml_user_url);

									$really_unliked_368=1;
								}

							}else{
								$nl90hk=$current_comment->likes->addChild("like");
								$nl90hk->addChild("comment_id",$reply_id);
								$nl90hk->addChild("current_reaction","unlike");
								$acsnl90jk=$nl90hk->addChild("activities");
								$acnl90np=$acsnl90jk->addChild("activity");
								$acnl90np->addChild("date_of_like",date("Y-m-d"));
								$acnl90np->addChild("time_of_like",date("H:i:s"));
								$acnl90np->addChild("reaction","unlike");
								$acnl90np->addChild("ip",$hb_user_ip);
								$acnl90np->addChild("browser",$hb_user_browser);
								$acnl90np->addChild("os",$hb_user_os);
								$acnl90np->addChild("country",$hb_user_country_three);
								$tmpxml201->asXML($comment_xml_user_url);

								$really_unliked_368=5;
							}
						}else{
							$newcomment=$tmpxml201->addChild("comment");
							$newcomment->addChild("url",decryptData($_POST['url']));
							$newcomment->addChild("main_threads","");
							$newcomment->addChild("reply_threads","");
							$mt52k=$newcomment->addChild("likes","");
							$mt458m=$mt52k->addChild("like","");
							$mt458m->addChild("comment_id",$reply_id);
							$mt458m->addChild("current_reaction","unlike");
							$mt778dd=$mt458m->addChild("activities","");
							$mt556f=$mt778dd->addChild("activity","");

							$mt556f->addChild("date_of_like",date("Y-m-d"));
							$mt556f->addChild("time_of_like",date("H:i:s"));
							$mt556f->addChild("reaction","unlike");
							$mt556f->addChild("ip",$hb_user_ip);
							$mt556f->addChild("browser",$hb_user_browser);
							$mt556f->addChild("os",$hb_user_os);
							$mt556f->addChild("country",$hb_user_country_three);
							$tmpxml201->asXML($comment_xml_user_url);

							$really_unliked_368=5;
						}
					}else{
						$string="<?xml version=\"1.0\"?>";
						$string.="<comments>";
						$string.="<comment>";
						$string.="<url>".decryptData($_POST['url'])."</url>";

						$string.="<main_threads>";
						$string.="</main_threads>";

						$string.="<reply_threads>";
						$string.="</reply_threads>";

						$string.="<likes>";
						$string.="<like>";
						$string.="<comment_id>".$reply_id."</comment_id>";
						$string.="<current_reaction>unlike</current_reaction>";
						$string.="<activities>";
						$string.="<activity>";
						$string.="<date_of_like>".date("Y-m-d")."</date_of_like>";
						$string.="<time_of_like>".date("H:i:s")."</time_of_like>";
						$string.="<reaction>unlike</reaction>";
						$string.="<ip>".$hb_user_ip."</ip>";
						$string.="<browser>".$hb_user_browser."</browser>";
						$string.="<os>".$hb_user_os."</os>";
						$string.="<country>".$hb_user_country_three."</country>";
						$string.="</activity>";
						$string.="</activities>";
						$string.="</like>";
						$string.="</likes>";

						$string.="</comment>";
						$string.="</comments>";

						$really_unliked_368=5;

						$handle=fopen($comment_xml_user_url,"w");
						fwrite($handle,$string);
						fclose($handle);

					}
////////////////////////image side script/////////////////////
					if($really_unliked_368==5){
						foreach($tmpxml->children() as $comment){

						  if($comment->main_id == $main_id){

						    foreach($comment->reply->children() as $reply_comment){

						      if((string)$reply_comment->reply_id == $reply_id){
						        $reply_comment->unlike=$reply_comment->unlike+1;
						        $rep_78hd=$reply_comment->like_activities->addChild("activity","");
						        $rep_78hd->addChild("username",$_SESSION['hb_user']['username']);
						        $rep_78hd->addChild("reaction","unlike");
						        $rep_78hd->addChild("ip",$hb_user_ip);
						        $rep_78hd->addChild("browser",$hb_user_browser);
						        $rep_78hd->addChild("os",$hb_user_os);
						        $rep_78hd->addChild("country",$hb_user_country_three);
						        $tmpxml->asXML($comment_xml_url);
									}
								}
							}
						}
					}elseif ($really_unliked_368==1) {
						foreach($tmpxml->children() as $comment){

						  if($comment->main_id == $main_id){

						    foreach($comment->reply->children() as $reply_comment){

						      if((string)$reply_comment->reply_id == $reply_id){
						        $reply_comment->unlike=$reply_comment->unlike+1;
										$reply_comment->like=$reply_comment->like-1;
						        $rep_78hd=$reply_comment->like_activities->addChild("activity","");
						        $rep_78hd->addChild("username",$_SESSION['hb_user']['username']);
						        $rep_78hd->addChild("reaction","unlike");
						        $rep_78hd->addChild("ip",$hb_user_ip);
						        $rep_78hd->addChild("browser",$hb_user_browser);
						        $rep_78hd->addChild("os",$hb_user_os);
						        $rep_78hd->addChild("country",$hb_user_country_three);
						        $tmpxml->asXML($comment_xml_url);
									}
								}
							}
						}
					}else{

					}

					show_new_comment_form();
					showMainThreads($replyOpenArray);




}

//==================================================================================================
///// like to reply
//====================================================================================================
function like_to_reply($tmp_id,$replyOpenArray){
	global $comment_xml_url;
	global $comment_xml_user_url;
	global $hb_user_ip;
	global $hb_user_browser;
	global $hb_user_os;
	global $hb_user_country_three;

	$xml=simplexml_load_file($comment_xml_url);
	$tmpxml=new SimpleXMLElement($xml->asXML());

	$main_id=substr($tmp_id,0,10);
	$reply_id="REPCMT_".$tmp_id;
	echo "Done:";

	$really_liked_368=0;
					/////////////////user side script/////////////////////////
					if(file_exists($comment_xml_user_url)){
						$xml=simplexml_load_file($comment_xml_user_url);
						$tmpxml201=new SimpleXMLElement($xml->asXML());

					///////check if requested image is aleady exists in the list//////////////
						$flag_k23Mj=0;
						foreach($tmpxml201->children() as $comment){

							if($comment->url == decryptData($_POST['url'])){
								$flag_k23Mj=1;
								$current_comment=$comment;
							}
						}

						if($flag_k23Mj==1){
							$flag_ml9jp=0;
							foreach ($current_comment->likes->children() as $like) {
								if($like->comment_id==$reply_id){
									$flag_ml9jp=1;
									$current_like=$like;
								}
							}
							if($flag_ml9jp==1){
								//////////////current comment same as selected////////////
								if($current_like->current_reaction=="like"){

								}else{

									$current_like->current_reaction="like";
									$acnl90np=$current_like->activities->addChild("activity");
									$acnl90np->addChild("date_of_like",date("Y-m-d"));
									$acnl90np->addChild("time_of_like",date("H:i:s"));
									$acnl90np->addChild("reaction","like");
									$acnl90np->addChild("ip",$hb_user_ip);
									$acnl90np->addChild("browser",$hb_user_browser);
									$acnl90np->addChild("os",$hb_user_os);
									$acnl90np->addChild("country",$hb_user_country_three);
									$tmpxml201->asXML($comment_xml_user_url);

									$really_liked_368=1;
								}

							}else{
								$nl90hk=$current_comment->likes->addChild("like");
								$nl90hk->addChild("comment_id",$reply_id);
								$nl90hk->addChild("current_reaction","like");
								$acsnl90jk=$nl90hk->addChild("activities");
								$acnl90np=$acsnl90jk->addChild("activity");
								$acnl90np->addChild("date_of_like",date("Y-m-d"));
								$acnl90np->addChild("time_of_like",date("H:i:s"));
								$acnl90np->addChild("reaction","unlike");
								$acnl90np->addChild("ip",$hb_user_ip);
								$acnl90np->addChild("browser",$hb_user_browser);
								$acnl90np->addChild("os",$hb_user_os);
								$acnl90np->addChild("country",$hb_user_country_three);
								$tmpxml201->asXML($comment_xml_user_url);

								$really_liked_368=5;
							}
						}else{
							$newcomment=$tmpxml201->addChild("comment");
							$newcomment->addChild("url",decryptData($_POST['url']));
							$newcomment->addChild("main_threads","");
							$newcomment->addChild("reply_threads","");
							$mt52k=$newcomment->addChild("likes","");
							$mt458m=$mt52k->addChild("like","");
							$mt458m->addChild("comment_id",$reply_id);
							$mt458m->addChild("current_reaction","like");
							$mt778dd=$mt458m->addChild("activities","");
							$mt556f=$mt778dd->addChild("activity","");

							$mt556f->addChild("date_of_like",date("Y-m-d"));
							$mt556f->addChild("time_of_like",date("H:i:s"));
							$mt556f->addChild("reaction","like");
							$mt556f->addChild("ip",$hb_user_ip);
							$mt556f->addChild("browser",$hb_user_browser);
							$mt556f->addChild("os",$hb_user_os);
							$mt556f->addChild("country",$hb_user_country_three);
							$tmpxml201->asXML($comment_xml_user_url);

							$really_liked_368=5;
						}

					}else{
						$string="<?xml version=\"1.0\"?>";
						$string.="<comments>";
						$string.="<comment>";
						$string.="<url>".decryptData($_POST['url'])."</url>";

						$string.="<main_threads>";
						$string.="</main_threads>";

						$string.="<reply_threads>";
						$string.="</reply_threads>";

						$string.="<likes>";
						$string.="<like>";
						$string.="<comment_id>".$reply_id."</comment_id>";
						$string.="<current_reaction>like</current_reaction>";
						$string.="<activities>";
						$string.="<activity>";
						$string.="<date_of_like>".date("Y-m-d")."</date_of_like>";
						$string.="<time_of_like>".date("H:i:s")."</time_of_like>";
						$string.="<reaction>like</reaction>";
						$string.="<ip>".$hb_user_ip."</ip>";
						$string.="<browser>".$hb_user_browser."</browser>";
						$string.="<os>".$hb_user_os."</os>";
						$string.="<country>".$hb_user_country_three."</country>";
						$string.="</activity>";
						$string.="</activities>";
						$string.="</like>";
						$string.="</likes>";

						$string.="</comment>";
						$string.="</comments>";

						$really_liked_368=5;

						$handle=fopen($comment_xml_user_url,"w");
						fwrite($handle,$string);
						fclose($handle);

					}

					if($really_liked_368==5){
						foreach($tmpxml->children() as $comment){

						  if($comment->main_id == $main_id){

						    foreach($comment->reply->children() as $reply_comment){

						      if((string)$reply_comment->reply_id == $reply_id){
						        $reply_comment->like=$reply_comment->like+1;
						        $rep_25lm=$reply_comment->like_activities->addChild("activity","");
						        $rep_25lm->addChild("username",$_SESSION['hb_user']['username']);
						        $rep_25lm->addChild("reaction","like");
						        $rep_25lm->addChild("date_of_like",date("Y-m-d"));
						        $rep_25lm->addChild("time_of_like",date("H:i:s"));
						        $rep_25lm->addChild("ip",$hb_user_ip);
						        $rep_25lm->addChild("browser",$hb_user_browser);
						        $rep_25lm->addChild("os",$hb_user_os);
						        $rep_25lm->addChild("country",$hb_user_country_three);
						        $tmpxml->asXML($comment_xml_url);
									}
								}
							}
						}

					}elseif ($really_liked_368==1) {
						foreach($tmpxml->children() as $comment){

						  if($comment->main_id == $main_id){

						    foreach($comment->reply->children() as $reply_comment){

						      if((string)$reply_comment->reply_id == $reply_id){
						        $reply_comment->like=$reply_comment->like+1;
										$reply_comment->unlike=$reply_comment->unlike-1;
						        $rep_25lm=$reply_comment->like_activities->addChild("activity","");
						        $rep_25lm->addChild("username",$_SESSION['hb_user']['username']);
						        $rep_25lm->addChild("reaction","like");
						        $rep_25lm->addChild("date_of_like",date("Y-m-d"));
						        $rep_25lm->addChild("time_of_like",date("H:i:s"));
						        $rep_25lm->addChild("ip",$hb_user_ip);
						        $rep_25lm->addChild("browser",$hb_user_browser);
						        $rep_25lm->addChild("os",$hb_user_os);
						        $rep_25lm->addChild("country",$hb_user_country_three);
						        $tmpxml->asXML($comment_xml_url);
									}
								}
							}
						}

					}else{

					}

					show_new_comment_form();
					showMainThreads($replyOpenArray);

}
//==================================================================================================
//////reply to comments
//=================================================================================================
function show_reply_start($main_id,$replyOpenArray){

	echo "Done:";
	show_new_comment_form();
	showMainThreads($replyOpenArray);

}
function add_reply_entry($main_id,$replyOpenArray){
	echo "Done:";
	show_new_comment_form();
	createReplyNewThread($main_id);
	showMainThreads($replyOpenArray);
}
//createReplyNewThread is for response on comment to main thread.
	function createReplyNewThread($main_id){
		global $comment_xml_url;
		global $comment_xml_user_url;
		global $_POST;
		global $hb_user_ip;
		global $hb_user_browser;
		global $hb_user_os;
		global $hb_user_country_three;

		//check if file exists otherwise create it.
		  if(isset($_POST['msg']) && !empty($_POST['msg'])){

		  }else{
			  die();
		  }
		if(file_exists($comment_xml_url)){



			$xml=simplexml_load_file($comment_xml_url);
			$tmpxml=new SimpleXMLElement($xml->asXML());

			/////////find proper main_id
			foreach($tmpxml->children() as $comment){
				if($comment->main_id == $main_id){
					$comment->replies=$comment->replies+1;
					$reply_id="REPCMT_".$comment->main_id."_".$comment->replies;


					$newcomment=$comment->reply->addChild("reply_comment");
					$tmpxml->asXML($comment_xml_url);
					$newcomment->addChild("reply_id",$reply_id);
					$newcomment->addChild("username",$_SESSION['hb_user']['username']);
					$newcomment->addChild("date_of_comment",date("Y-m-d"));
					$newcomment->addChild("time_of_comment",date("H:i:s"));
					$newcomment->addChild("ip",$hb_user_ip);
					$newcomment->addChild("browser",$hb_user_browser);
					$newcomment->addChild("os",$hb_user_os);
					$newcomment->addChild("country",$hb_user_country_three);
					$newcomment->addChild("message",urlencode($_POST['msg']));
					$newcomment->addChild("like","0");
					$newcomment->addChild("unlike","0");
					$newcomment->addChild("like_activities","");
					$tmpxml->asXML($comment_xml_url);

					/////////////////user side script/////////////////////////
					if(file_exists($comment_xml_user_url)){
						$xml=simplexml_load_file($comment_xml_user_url);
						$tmpxml201=new SimpleXMLElement($xml->asXML());

					///////check if requested image is aleady exists in the list//////////////
						$flag_k23Mj=0;
						foreach($tmpxml201->children() as $comment){

							if($comment->url == decryptData($_POST['url'])){
								$flag_k23Mj=1;
								$current_comment=$comment;
							}
						}

						if($flag_k23Mj==1){
							$mt458m=$current_comment->reply_threads->addChild("reply_thread","");
							$mt458m->addChild("message",urlencode($_POST['msg']));
							$mt458m->addChild("reply_id",$reply_id);
							$mt458m->addChild("date_of_reply",date("Y-m-d"));
							$mt458m->addChild("time_of_reply",date("H:i:s"));
							$mt458m->addChild("ip",$hb_user_ip);
							$mt458m->addChild("browser",$hb_user_browser);
							$mt458m->addChild("os",$hb_user_os);
							$mt458m->addChild("country",$hb_user_country_three);
							$tmpxml201->asXML($comment_xml_user_url);
						}else{
							$newcomment=$tmpxml201->addChild("comment");
							$newcomment->addChild("url",decryptData($_POST['url']));
							$newcomment->addChild("main_threads","");
							$mt52k=$newcomment->addChild("reply_threads","");
							$mt458m=$mt52k->addChild("reply_thread","");
							$mt458m->addChild("message",urlencode($_POST['msg']));
							$mt458m->addChild("reply_id",$reply_id);
							$mt458m->addChild("date_of_reply",date("Y-m-d"));
							$mt458m->addChild("time_of_reply",date("H:i:s"));
							$mt458m->addChild("ip",$hb_user_ip);
							$mt458m->addChild("browser",$hb_user_browser);
							$mt458m->addChild("os",$hb_user_os);
							$mt458m->addChild("country",$hb_user_country_three);
							$newcomment->addChild("likes","");
							$tmpxml201->asXML($comment_xml_user_url);
						}

					}else{
						$string="<?xml version=\"1.0\"?>";
						$string.="<comments>";
						$string.="<comment>";
						$string.="<url>".decryptData($_POST['url'])."</url>";

						$string.="<main_threads>";
						$string.="</main_threads>";

						$string.="<reply_threads>";
						$string.="<reply_thread>";
						$string.="<message>".urlencode($_POST['msg'])."</message>";
						$string.="<reply_id>".$reply_id."</reply_id>";
						$string.="<date_of_reply>".date("Y-m-d")."</date_of_reply>";
						$string.="<time_of_reply>".date("H:i:s")."</time_of_reply>";
						$string.="<ip>".$hb_user_ip."</ip>";
						$string.="<browser>".$hb_user_browser."</browser>";
						$string.="<os>".$hb_user_os."</os>";
						$string.="<country>".$hb_user_country_three."</country>";
						$string.="</reply_thread>";
						$string.="</reply_threads>";

						$string.="<likes>";
						$string.="</likes>";

						$string.="</comment>";
						$string.="</comments>";


						$handle=fopen($comment_xml_user_url,"w");
						fwrite($handle,$string);
						fclose($handle);

					}

				}
			}

		}else{
			die("Error:Some problem to reply");
		}
	}

//display all main threads
	function showReplyThreads($main_id){
		global $comment_xml_url;
		global $hb_scene_db;
		global $hb_db;
		global $rootpath;

		$xml=simplexml_load_file($comment_xml_url);
		$tmpxml=new SimpleXMLElement($xml->asXML());

		/////////find proper main_id
		foreach($tmpxml->children() as $comment){

			//echo "m=".$main_id." and cm=".$comment->main_id."--";

			if($main_id == (string)$comment->main_id){
				foreach($comment->reply->children() as $reply){
					$reply_id=$reply->reply_id;
					$username=$reply->username;
					$date_of_comment=$reply->date_of_comment;
					$time_of_comment=$reply->time_of_comment;
					$message=$reply->message;
					$like=$reply->like;
					$unlike=$reply->unlike;

					//fetching scene name from username if not available show users full name
					$query="SELECT scene_name,scene_mask_current FROM hb_scene_pages WHERE username='".$username."' LIMIT 1";
					if($rows=mysqli_query($hb_scene_db,$query)){
						if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
							$display_name=$row['scene_name'];
							$scene_mask_current=$row['scene_mask_current'];
							$display_picture_path="/user_data/user_".$username."/scene_masks/".$scene_mask_current;
							if(!file_exists($rootpath."scene".$display_picture_path)){
								$display_picture_path="/images/user_logo.png";
							}
						}else{
							///////if scene name is not available show their first and last name
							$query="SELECT user_id FROM hb_user_main_security WHERE username='".$username."' LIMIT 1";
							if($rows=mysqli_query($hb_db,$query)){
								if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
									//now fetch again from hb_user_main_biodata
									$query="SELECT first_name,last_name FROM hb_user_main_biodata WHERE user_id='".$row['user_id']."' LIMIT 1";
									if($rows=mysqli_query($hb_db,$query)){
										if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
											$display_name=$row['first_name']." ".$row['last_name'];
										}else{
											$display_name=$username;
										}
									}else{
										$display_name=$username;
									}
								}else{
									$display_name=$username;
								}
							}else{
								$display_name=$username;
							}

							///if scene page is not created
							$display_picture_path="/images/jjkl.JPG";

						}
					}else{
						///////if scene name is not available show their first and last name
						$query="SELECT user_id FROM hb_user_main_security WHERE username='".$username."' LIMIT 1";
						if($rows=mysqli_query($hb_db,$query)){
							if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
								//now fetch again from hb_user_main_biodata
								$query="SELECT first_name,last_name FROM hb_user_main_biodata WHERE user_id='".$row['user_id']."' LIMIT 1";
								if($rows=mysqli_query($hb_db,$query)){
									if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
										$display_name=$row['first_name']." ".$row['last_name'];
									}else{
										$display_name=$username;
									}
								}else{
									$display_name=$username;
								}
							}else{
								$display_name=$username;
							}
						}else{
							$display_name=$username;
						}

						///if scene page is not created
						$display_picture_path="/images/jjkl.JPG";
					}



					show_comment_reply_block($reply_id,$display_picture_path,$display_name,$date_of_comment,$time_of_comment,$message,$like,$unlike);

				}

			}
		}

		show_new_reply_comment_form($main_id);

	}

////////////////////////reply comment//////////////////////////////////////
//////////////display reply comment form/////////////////////
function show_new_reply_comment_form($main_id){
	global $rootpath;

	//global $comment_style_sheet_52k;
	//echo $comment_style_sheet_52k;
	echo "
		<div id='hb_reply_new_wrapper'>

			<form method='post' onsubmit='return false;'>
				<div id='textbox_div'>
					<input type='text' id='reply_message_v7Uh' required placeholder='Write your reply' z/>
				</div>
				<div id='send'>
					<div id='hb_reply_submit_btn_b58M'>Reply</div>
				</div>

			</form>

			<script id='script_submit_reply_f5b'>
				//document.getElementById('hb_reply_submit_btn_b58M').addEventListener('click',send_reply_558,false);
				reply_comment_btns_6190=document.querySelectorAll('#hb_reply_submit_btn_b58M');
				for(i=0; i<reply_comment_btns_6190.length; i++){
					reply_comment_btns_6190[i].addEventListener('click',function (){
						send_reply_558(this);
					},false);
				}
				reply_comment_txts_6190=document.querySelectorAll('#reply_message_v7Uh');
				for(i=0; i<reply_comment_txts_6190.length; i++){
					reply_comment_txts_6190[i].addEventListener('keypress',function (){
						if(event.keyCode===13){
							send_reply_558(this);
						}
					},false);
				}
				/*document.getElementById('reply_message_v7Uh').addEventListener('keypress',function (event){
					if(event.keyCode===13){
						send_reply_558();
					}
				},false);*/

				function send_reply_558(reply_btn){
					main_id=reply_btn.parentNode.parentNode.parentNode.parentNode.parentNode.getAttribute('hbcomment');
					if(reply_btn.parentNode.parentNode.querySelector('#reply_message_v7Uh').value!=''){
						//alert(reply_btn.parentNode.parentNode.querySelector('#reply_message_v7Uh').value);
						comment_univ_request=new XMLHttpRequest();
						postString='sqc=mlo4B6rt&token=mk2x8&replyOpenArray='+replyOpenArray+'&';
						postString+='main_id='+main_id+'&';
						postString+='msg='+reply_btn.parentNode.parentNode.querySelector('#reply_message_v7Uh').value+'&';
						postString+='url='+globalSearchUrl;
						comment_univ_request.open('POST','".$rootpath."comment.php',true);
						comment_univ_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
						comment_univ_request.onreadystatechange=getCommentDetailsUnivResponse;
						comment_univ_request.send(postString);
						//alert(postString);
					}
				}
				function getThreadResponse(){
					if(thread_reply_request.status==200 && thread_reply_request.readyState==4){
						//alert(thread_reply_request.responseText);
						if(thread_reply_request.responseText.substr(0,5)=='Done:'){
							document.querySelector('div[hbcomment=".$main_id."] #reply_container_745').innerHTML=thread_reply_request.responseText.substr(5);
							eval(document.querySelector('#hb_scene_image_viewer_HB7845_tab_2 #script_submit_reply_f5b').innerHTML);
						}
					}
				}
			</script>

		</div>
	";
}

	////////////////for display a comment reply block
function show_comment_reply_block($reply_id,$display_picture_path,$display_name,$date_of_comment,$time_of_comment,$message,$like,$unlike){
	//global $comment_style_sheet_52k;
	//echo $comment_style_sheet_52k;

	echo "
	<div id='hb_reply_wrapper' hbcomment='".$reply_id."' >
	<div id='scene_mask_div_reply'>
		<!-- chane it later scene mask here -->
		<div style='background-image:url(\"".$display_picture_path."\");'>&nbsp;</div>
	</div>

			<div id='comment_body'>
			<div id='div_inner'>
				<header>
					<div id='scene_name_viewer_reply'>".$display_name."</div>";

					///////////////////////////////calculation of time and date in comment////////////
					/*/////////plan///////////////////////
					if $time_difference is less than 60s --> Just now
					if $time_difference less than 60m and greater than 60s --> m minutes ago.
					if $time_difference less than 24h and greater than 60m --> h hour m minutes ago
					if $time_difference less than 2*24h and greater than 24h --> yesterday at <time>
					if $time_difference less than 7*24h and greater than 2*48h --> d days ago at <time>
					if $time_difference greater than 7*24h --> Month date,Year at <time>  -->Feb 14,2018 at 3:06pm

					////////////////////end of plan////*/

					$final_date_time="";
					$time_difference=time("now")-strtotime($date_of_comment." ".$time_of_comment);
					$registered_time=strtotime($date_of_comment." ".$time_of_comment);

					if($time_difference<60){
						$final_date_time="Just now";
					}elseif ($time_difference>=60 && $time_difference<60*60) {
						$final_date_time=(int)($time_difference/60)." minutes ago";
					}elseif ($time_difference>=60*60 && $time_difference<24*60*60) {
						$hr_596184=(int)($time_difference/(60*60));
						$mnt_14852=(int)(($time_difference-($hr_596184*60*60))/60);
						if($mnt_14852>0){
							$final_date_time=$hr_596184." hour ".$mnt_14852." minutes ago";
						}else{
							$final_date_time=$hr_596184." hour ago";
						}

					}elseif ($time_difference>=24*60*60 && $time_difference<2*24*60*60) {
						$final_date_time="Yesterday at ".date("g",$registered_time).":".(int)(date("i",$registered_time))." ".date("a",$registered_time);
					}elseif ($time_difference>=2*24*60*60 && $time_difference<7*24*60*60) {
						$day_52336=(int)($time_difference/(24*60*60));
						$final_date_time=$day_52336." days ago at ".date("g",$registered_time).":".(int)(date("i",$registered_time))." ".date("a",$registered_time);
					}else {
						$final_date_time=date("F",$registered_time)." ".date("j",$registered_time).", ".date("Y",$registered_time)." at ".date("g",$registered_time).":".(int)(date("i",$registered_time))." ".date("a",$registered_time);
					}


					///////////////////////////end of calculation/////////////////////////////////////


					echo "<div id='date_time_viewer'>".$final_date_time."</div>
				</header>

				<section>
					<div id='comment_message'>".htmlentities(urldecode($message))."</div>
				</section>

				<footer>
					<a id='like_comment' href='javascript:like_on_comment(\"".$reply_id."\")'>
						<div id='like_viewer'>
								<div>Like</div>
								<div id='like_number'>".$like."</div>
						</div>
					</a>

					<a id='unlike_comment' href='javascript:unlike_on_comment(\"".$reply_id."\")'>
						<div id='unlike_viewer'>
								<div>Unlike</div>
								<div id='unlike_number'>".$unlike."</div>
						</div>
					</a>

					<a id='reply_comment' href='javascript:reply_on_comment(\"".$reply_id."\")'>
						<div id='reply_viewer'>
							Reply
						</div>
					</a>

					<a id='report_comment' href='javascript:report_on_comment(\"".$reply_id."\")'>
						<div id='report_viewer'>
							Report
						</div>
					</a>
				</footer>

			</div>
			</div>

			<div id='reply_container_745'></div>

			<div style='clear:both;height:0px;font-size:1px;'>&nbsp;</div>
		</div>
		";

}
////////////////////////////////////////////////////////////////////////////////////////////////////////
///////*********************************start of main comment ************************************//////
////////////////////////////////////////////////////////////////////////////////////////////////////////

//createMainNewThread is for response on comment to main thread.
	function createMainNewThread($token,$replyOpenArray){
		global $hb_user_ip;
		global $hb_user_browser;
		global $hb_user_os;
		global $hb_user_country_three;
		global $comment_xml_url;
		global $comment_xml_user_url;
		//check if file exists otherwise create it.
		  if(isset($_POST['msg']) && !empty($_POST['msg'])){

		  }else{
			  die();
		  }

			//generate main_id
			$main_id=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,10);

		////////////////image side script//////////////////
		if(file_exists($comment_xml_url)){
			//generate main_id
			$tmpXML565=simplexml_load_file($comment_xml_url);
				do{
					$tmpcde6698=0;
					$main_id=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,10);
					foreach($tmpXML565->children() as $comment){
						if($comment->main_id==$main_id){
							continue;
						}else{
							$tmpcde6698=1;
							break;
						}
					}
					if($tmpcde6698){
						break;
					}
				}while(1);
			$xml=simplexml_load_file($comment_xml_url);
			$tmpxml=new SimpleXMLElement($xml->asXML());
			$newcomment=$tmpxml->addChild("comment");
			$newcomment->addChild("main_id",$main_id);
			$newcomment->addChild("username",$_SESSION['hb_user']['username']);
			$newcomment->addChild("date_of_comment",date("Y-m-d"));
			$newcomment->addChild("time_of_comment",date("H:i:s"));
			$newcomment->addChild("ip",$hb_user_ip);
			$newcomment->addChild("browser",$hb_user_browser);
			$newcomment->addChild("os",$hb_user_os);
			$newcomment->addChild("country",$hb_user_country_three);
			$newcomment->addChild("message",urlencode($_POST['msg']));
			$newcomment->addChild("like","0");
			$newcomment->addChild("unlike","0");
			$newcomment->addChild("like_activities","");
			$newcomment->addChild("replies","0");
			$newcomment->addChild("reply","");
			$tmpxml->asXML($comment_xml_url);

		}else{
			//create new XML file
			//create xml file

			$string="<?xml version=\"1.0\"?>";
			$string.="<comments>";
			$string.="<comment>";

			$string.="<main_id>".$main_id."</main_id>";
			$string.="<username>".$_SESSION['hb_user']['username']."</username>";
			$string.="<date_of_comment>".date("Y-m-d")."</date_of_comment>";
			$string.="<time_of_comment>".date("H:i:s")."</time_of_comment>";
			$string.="<ip>".$hb_user_ip."</ip>";
			$string.="<browser>".$hb_user_browser."</browser>";
			$string.="<os>".$hb_user_os."</os>";
			$string.="<country>".$hb_user_country_three."</country>";
			$string.="<message>".urlencode($_POST['msg'])."</message>";
			$string.="<like>0</like>";
			$string.="<unlike>0</unlike>";
			$string.="<like_activities></like_activities>";
			$string.="<replies>0</replies>";
			$string.="<reply></reply>";
			$string.="</comment>";
			$string.="</comments>";

			$handle=fopen($comment_xml_url,"w");
			fwrite($handle,$string);
			fclose($handle);

		}

		/////////////////user side script/////////////////////////
		if(file_exists($comment_xml_user_url)){
			$xml=simplexml_load_file($comment_xml_user_url);
			$tmpxml201=new SimpleXMLElement($xml->asXML());

		///////check if requested image is aleady exists in the list//////////////
			$flag_k23Mj=0;
			foreach($tmpxml201->children() as $comment){

				if($comment->url == decryptData($_POST['url'])){
					$flag_k23Mj=1;
					$current_comment=$comment;
				}
			}

			if($flag_k23Mj==1){
				$yuh74=$current_comment->main_threads->addChild("main_thread","");
				$yuh74->addChild("message",urlencode($_POST['msg']));
				$yuh74->addChild("main_id",$main_id);
				$yuh74->addChild("date_of_comment",date("Y-m-d"));
				$yuh74->addChild("time_of_comment",date("H:i:s"));
				$yuh74->addChild("ip",$hb_user_ip);
				$yuh74->addChild("browser",$hb_user_browser);
				$yuh74->addChild("os",$hb_user_os);
				$yuh74->addChild("country",$hb_user_country_three);
				$tmpxml201->asXML($comment_xml_user_url);
			}else{
				$newcomment=$tmpxml201->addChild("comment");
				$newcomment->addChild("url",decryptData($_POST['url']));
				$mt52k=$newcomment->addChild("main_threads","");
				$mt458m=$mt52k->addChild("main_thread","");
				$mt458m->addChild("message",urlencode($_POST['msg']));
				$mt458m->addChild("main_id",$main_id);
				$mt458m->addChild("date_of_comment",date("Y-m-d"));
				$mt458m->addChild("time_of_comment",date("H:i:s"));
				$mt458m->addChild("ip",$hb_user_ip);
				$mt458m->addChild("browser",$hb_user_browser);
				$mt458m->addChild("os",$hb_user_os);
				$mt458m->addChild("country",$hb_user_country_three);
				$newcomment->addChild("reply_threads","");
				$newcomment->addChild("likes","");
				$tmpxml201->asXML($comment_xml_user_url);
			}

		}else{
			$string="<?xml version=\"1.0\"?>";
			$string.="<comments>";
			$string.="<comment>";
			$string.="<url>".decryptData($_POST['url'])."</url>";

			$string.="<main_threads>";
			$string.="<main_thread>";
			$string.="<message>".urlencode($_POST['msg'])."</message>";
			$string.="<main_id>".$main_id."</main_id>";
			$string.="<date_of_comment>".date("Y-m-d")."</date_of_comment>";
			$string.="<time_of_comment>".date("H:i:s")."</time_of_comment>";
			$string.="<ip>".$hb_user_ip."</ip>";
			$string.="<browser>".$hb_user_browser."</browser>";
			$string.="<os>".$hb_user_os."</os>";
			$string.="<country>".$hb_user_country_three."</country>";
			$string.="</main_thread>";
			$string.="</main_threads>";

			$string.="<reply_threads>";
			$string.="</reply_threads>";

			$string.="<likes>";
			$string.="</likes>";

			$string.="</comment>";
			$string.="</comments>";


			$handle=fopen($comment_xml_user_url,"w");
			fwrite($handle,$string);
			fclose($handle);

		}

		//////////////////update//////////////
		echo "Done:";
		show_new_comment_form();
		showMainThreads($replyOpenArray);
	}
//display all main threads
	function showMainThreads($replyOpenArray){
		global $comment_xml_url;
		global $hb_scene_db;
		global $hb_db;
		global $rootpath;



		$xml=simplexml_load_file($comment_xml_url);
		//populating comments
		foreach($xml->children() as $comment){
			$main_id=$comment->main_id;
			$username=$comment->username;
			$date_of_comment=$comment->date_of_comment;
			$time_of_comment=$comment->time_of_comment;
			$message=$comment->message;
			$like=$comment->like;
			$unlike=$comment->unlike;
			$replies=$comment->replies;

			//fetching scene name from username if not available show users full name
			$query="SELECT scene_name,scene_mask_current FROM hb_scene_pages WHERE username='".$username."' LIMIT 1";
			if($rows=mysqli_query($hb_scene_db,$query)){
				if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
					$display_name=$row['scene_name'];
					$scene_mask_current=$row['scene_mask_current'];
					$display_picture_path="/user_data/user_".$username."/scene_masks/".$scene_mask_current;
				}else{
					///////if scene name is not available show their first and last name
					$query="SELECT user_id FROM hb_user_main_security WHERE username='".$username."' LIMIT 1";
					if($rows=mysqli_query($hb_db,$query)){
						if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
							//now fetch again from hb_user_main_biodata
							$query="SELECT first_name,last_name FROM hb_user_main_biodata WHERE user_id='".$row['user_id']."' LIMIT 1";
							if($rows=mysqli_query($hb_db,$query)){
								if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
									$display_name=$row['first_name']." ".$row['last_name'];
								}else{
									$display_name=$username;
								}
							}else{
								$display_name=$username;
							}
						}else{
							$display_name=$username;
						}
					}else{
						$display_name=$username;
					}

					///if scene page is not created
					$display_picture_path="/images/jjkl.JPG";

				}
			}else{
				///////if scene name is not available show their first and last name
				$query="SELECT user_id FROM hb_user_main_security WHERE username='".$username."' LIMIT 1";
				if($rows=mysqli_query($hb_db,$query)){
					if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
						//now fetch again from hb_user_main_biodata
						$query="SELECT first_name,last_name FROM hb_user_main_biodata WHERE user_id='".$row['user_id']."' LIMIT 1";
						if($rows=mysqli_query($hb_db,$query)){
							if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
								$display_name=$row['first_name']." ".$row['last_name'];
							}else{
								$display_name=$username;
							}
						}else{
							$display_name=$username;
						}
					}else{
						$display_name=$username;
					}
				}else{
					$display_name=$username;
				}

				///if scene page is not created
				$display_picture_path="/images/jjkl.JPG";
			}

			$expandReply="false";
			//explode replyOpenArray string
			if(!empty($replyOpenArray)){
				$replyOpenArrayList=explode("~",$replyOpenArray);
				foreach($replyOpenArrayList as $target_main_id){

					if($target_main_id==$main_id){
						$expandReply="true";
					}else{

					}

				}
			}

			show_comment_block($main_id,$display_picture_path,$display_name,$date_of_comment,$time_of_comment,$message,$like,$unlike,$replies,$expandReply);
		}///end of foreach loop main

	}


//////////////display comment form of new comment./////////////
function show_new_comment_form(){
	global $comment_style_sheet_52k;
	global $rootpath;

	echo $comment_style_sheet_52k;
	echo "
		<div id='hb_comment_new_wrapper'>

			<form method='post' onsubmit='return false;'>
				<div id='textbox_div'>
					<input type='text' id='comment_message_125K' required placeholder='Write your comment' />
				</div>
				<div id='send'>
					<div id='hb_comment_submit_btn_125K'>Comment</div>
				</div>

			</form>

			<script id='script_submit_comment_58p'>
				document.getElementById('hb_comment_submit_btn_125K').addEventListener('click',send_comment_558,false);
				document.getElementById('comment_message_125K').addEventListener('keypress',function (event){
					if(event.keyCode===13){
						send_comment_558();
					}
				},false);

				function send_comment_558(){
					if(document.getElementById('comment_message_125K').value!=''){
						//alert('as');
						comment_univ_request=new XMLHttpRequest();
						postString='sqc=mlo4B6rt&token=tK904&replyOpenArray='+replyOpenArray+'&';
						postString+='msg='+document.getElementById('comment_message_125K').value+'&';
						postString+='url='+globalSearchUrl;

						comment_univ_request.open('POST','".$rootpath."comment.php',true);
						comment_univ_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
						comment_univ_request.onreadystatechange=getCommentDetailsUnivResponse;
						comment_univ_request.send(postString);
						//alert('as');
						////////////for focusing the textbox after commenting./////
						comment_request_function_code_4kl='after_new_thread_creation_6397pt';
					}
				}
				/*function getThreadResponse(){
					if(thread_request.status==200 && thread_request.readyState==4){
						//alert(thread_request.responseText);
						if(thread_request.responseText.substr(0,5)=='Done:'){
							document.getElementById('hb_scene_image_viewer_HB7845_tab_2').innerHTML=thread_request.responseText.substr(5);
							eval(document.querySelector('#hb_scene_image_viewer_HB7845_tab_2 #script_submit_comment_58p').innerHTML);
						}
					}
				}*/
			</script>

		</div>
	";
}

////////////////for display a comment block
function show_comment_block($main_id,$display_picture_path,$display_name,$date_of_comment,$time_of_comment,$message,$like,$unlike,$replies,$expandReply){
	//global $comment_style_sheet_52k;
	//echo $comment_style_sheet_52k;

	echo "
	<div id='hb_comment_wrapper' hbcomment='".$main_id."' >
	<div id='scene_mask_div'>
		<!-- chane it later scene mask here -->
		<div style='background-image:url(\"".$display_picture_path."\");'>&nbsp;</div>
	</div>

			<div id='comment_body'>
			<div id='div_inner'>
				<header>
					<div id='scene_name_viewer'>".$display_name."</div>";

					///////////////////////////////calculation of time and date in comment////////////
					/*/////////plan///////////////////////
					if $time_difference is less than 60s --> Just now
					if $time_difference less than 60m and greater than 60s --> m minutes ago.
					if $time_difference less than 24h and greater than 60m --> h hour m minutes ago
					if $time_difference less than 2*24h and greater than 24h --> yesterday at <time>
					if $time_difference less than 7*24h and greater than 2*48h --> d days ago at <time>
					if $time_difference greater than 7*24h --> Month date,Year at <time>  -->Feb 14,2018 at 3:06pm

					////////////////////end of plan////*/

					$final_date_time="";
					$time_difference=time("now")-strtotime($date_of_comment." ".$time_of_comment);
					$registered_time=strtotime($date_of_comment." ".$time_of_comment);

					if($time_difference<60){
						$final_date_time="Just now";
					}elseif ($time_difference>=60 && $time_difference<60*60) {
						$final_date_time=(int)($time_difference/60)." minutes ago";
					}elseif ($time_difference>=60*60 && $time_difference<24*60*60) {
						$hr_596184=(int)($time_difference/(60*60));
						$mnt_14852=(int)(($time_difference-($hr_596184*60*60))/60);
						if($mnt_14852>0){
							$final_date_time=$hr_596184." hour ".$mnt_14852." minutes ago";
						}else{
							$final_date_time=$hr_596184." hour ago";
						}

					}elseif ($time_difference>=24*60*60 && $time_difference<2*24*60*60) {
						$final_date_time="Yesterday at ".date("g",$registered_time).":".(int)(date("i",$registered_time))." ".date("a",$registered_time);
					}elseif ($time_difference>=2*24*60*60 && $time_difference<7*24*60*60) {
						$day_52336=(int)($time_difference/(24*60*60));
						$final_date_time=$day_52336." days ago at ".date("g",$registered_time).":".(int)(date("i",$registered_time))." ".date("a",$registered_time);
					}else {
						$final_date_time=date("F",$registered_time)." ".date("j",$registered_time).", ".date("Y",$registered_time)." at ".date("g",$registered_time).":".(int)(date("i",$registered_time))." ".date("a",$registered_time);
					}


					///////////////////////////end of calculation/////////////////////////////////////

					echo "<div id='date_time_viewer'>".$final_date_time."</div>
				</header>

				<section>
					<div id='comment_message'>".htmlentities(urldecode($message))."</div>
				</section>

				<footer>
					<a id='like_comment' href='javascript:like_on_comment(\"".$main_id."\")'>
						<div id='like_viewer'>
								<div id='like_logo'>Like</div>
								<div id='like_number'>".$like."</div>
						</div>
					</a>


					<a id='unlike_comment' href='javascript:unlike_on_comment(\"".$main_id."\")' id='unlike_logo'>
						<div id='unlike_viewer'>
								<div id='like_logo'>Unlike</div>
								<div id='unlike_number'>".$unlike."</div>
						</div>
					</a>


					<a id='reply_comment' href='javascript:reply_on_comment(\"".$main_id."\")'>
						<div id='reply_viewer'>
								<div id='reply_logo'>Reply</div>
								<div id='like_number'>".$replies."</div>
						</div>
					</a>


					<a id='report_comment' href='javascript:report_on_comment(\"".$main_id."\")'>
						<div id='report_viewer'>
								Report
						</div>
					</a>

				</footer>

			</div>
			</div>

			<div id='reply_container_745'>";

			if($expandReply=="true"){

				showReplyThreads($main_id);
			}

			echo "</div>

			<div style='clear:both;height:0px;font-size:1px;'>&nbsp;</div>
		</div>
		";

}
?>
