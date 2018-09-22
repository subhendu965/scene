<?php

if(isset($_POST['sqc']) && $_POST['sqc']=='mlo4B6rt' && $_POST['url']){

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
$imageUrl=decryptData($_POST["url"]);
$query="SELECT uploaded_by FROM hb_scene_images WHERE url='".mysqli_real_escape_string($hb_scene_db,decryptData($_POST['url']))."' LIMIT 1";

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
///////***********************************start of unlike ****************************************//////
////////////////////////////////////////////////////////////////////////////////////////////////////////
function unlike_to_comment($main_id,$replyOpenArray){
	global $comment_xml_url;
	$xml=simplexml_load_file($comment_xml_url);
	$tmpxml=new SimpleXMLElement($xml->asXML());

	foreach($tmpxml->children() as $comment){

		if($comment->main_id == $main_id){
			$comment->unlike+=1;
			$tmpxml->asXML($comment_xml_url);
			echo "Done:";
			show_new_comment_form();
			showMainThreads($replyOpenArray);
		}
	}

}
////////////////////////////////////////////////////////////////////////////////////////////////////////
///////***********************************start of like *****************************************//////
////////////////////////////////////////////////////////////////////////////////////////////////////////
function like_to_comment($main_id,$replyOpenArray){
	global $comment_xml_url;
	$xml=simplexml_load_file($comment_xml_url);
	$tmpxml=new SimpleXMLElement($xml->asXML());

	foreach($tmpxml->children() as $comment){

		if($comment->main_id == $main_id){
			$comment->like+=1;
			$tmpxml->asXML($comment_xml_url);
			echo "Done:";
			show_new_comment_form();
			showMainThreads($replyOpenArray);

		}
	}

}
////////////////////////////////////////////////////////////////////////////////////////////////////////
///////***********************************start of reply *****************************************//////
////////////////////////////////////////////////////////////////////////////////////////////////////////
//==================================================================================================
///// unlike to reply
//====================================================================================================
function unlike_to_reply($tmp_id,$replyOpenArray){
	global $comment_xml_url;
	$xml=simplexml_load_file($comment_xml_url);
	$tmpxml=new SimpleXMLElement($xml->asXML());

	$main_id=substr($tmp_id,0,10);
	$reply_id="REPCMT_".$tmp_id;
	echo "Done:";
	foreach($tmpxml->children() as $comment){

		if($comment->main_id == $main_id){

			foreach($comment->reply->children() as $reply_comment){

				if((string)$reply_comment->reply_id == $reply_id){
					$reply_comment->unlike=$reply_comment->unlike+1;
					$tmpxml->asXML($comment_xml_url);

					show_new_comment_form();
					showMainThreads($replyOpenArray);
				}
			}



		}
	}
}

//==================================================================================================
///// like to reply
//====================================================================================================
function like_to_reply($tmp_id,$replyOpenArray){
	global $comment_xml_url;
	$xml=simplexml_load_file($comment_xml_url);
	$tmpxml=new SimpleXMLElement($xml->asXML());

	$main_id=substr($tmp_id,0,10);
	$reply_id="REPCMT_".$tmp_id;
	echo "Done:";
	foreach($tmpxml->children() as $comment){

		if($comment->main_id == $main_id){

			foreach($comment->reply->children() as $reply_comment){

				if((string)$reply_comment->reply_id == $reply_id){
					$reply_comment->like=$reply_comment->like+1;
					$tmpxml->asXML($comment_xml_url);

					show_new_comment_form();
					showMainThreads($replyOpenArray);
				}
			}



		}
	}
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
		global $_POST;
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
					$newcomment->addChild("message",$_POST['msg']);
					$newcomment->addChild("like","0");
					$newcomment->addChild("unlike","0");
					$tmpxml->asXML($comment_xml_url);


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
					$query="SELECT scene_name,scene_mask_current FROM hb_scene_uploader WHERE username='".$username."' LIMIT 1";
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
	//global $comment_style_sheet_52k;
	//echo $comment_style_sheet_52k;
	echo "
		<div id='hb_reply_new_wrapper'>

			<form method='post' onsubmit='return false;'>
				<div id='textbox_div'>
					<input type='text' id='reply_message_v7Uh' required placeholder='Write your reply' />
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
						comment_univ_request.open('POST','comment.php',true);
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
					<div id='scene_name_viewer_reply'>".$display_name."</div>
					<div id='date_time_viewer'>".$date_of_comment." at ".$time_of_comment."</div>
				</header>

				<section>
					<div id='comment_message'>".$message."</div>
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

					<a id='report_comment'>
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
		global $comment_xml_url;
		//check if file exists otherwise create it.
		  if(isset($_POST['msg']) && !empty($_POST['msg'])){

		  }else{
			  die();
		  }
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
			$newcomment->addChild("message",$_POST['msg']);
			$newcomment->addChild("like","0");
			$newcomment->addChild("unlike","0");
			$newcomment->addChild("replies","0");
			$newcomment->addChild("reply","");
			$tmpxml->asXML($comment_xml_url);

			echo "Done:";
			show_new_comment_form();
			showMainThreads($replyOpenArray);
		}else{
			//create new XML file
			//create xml file

			//generate main_id
			$main_id=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,10);

			$string="<?xml version=\"1.0\"?>";
			$string.="<comments>";
			$string.="<comment>";

			$string.="<main_id>".$main_id."</main_id>";
			$string.="<username>".$_SESSION['hb_user']['username']."</username>";
			$string.="<date_of_comment>".date("Y-m-d")."</date_of_comment>";
			$string.="<time_of_comment>".date("H:i:s")."</time_of_comment>";
			$string.="<message>".$_POST['msg']."</message>";
			$string.="<like>0</like>";
			$string.="<unlike>0</unlike>";
			$string.="<replies>0</replies>";
			$string.="<reply></reply>";
			$string.="</comment>";
			$string.="</comments>";

			$handle=fopen($comment_xml_url,"w");
			fwrite($handle,$string);
			fclose($handle);
			echo "Done:";
			show_new_comment_form();
			showMainThreads($replyOpenArray);
		}
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
			$query="SELECT scene_name,scene_mask_current FROM hb_scene_uploader WHERE username='".$username."' LIMIT 1";
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

						comment_univ_request.open('POST','comment.php',true);
						comment_univ_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
						comment_univ_request.onreadystatechange=getCommentDetailsUnivResponse;
						comment_univ_request.send(postString);
						//alert('as');
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
					<div id='scene_name_viewer'>".$display_name."</div>
					<div id='date_time_viewer'>".$date_of_comment." at ".$time_of_comment."</div>
				</header>

				<section>
					<div id='comment_message'>".$message."</div>
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


					<a id='report_comment'>
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
