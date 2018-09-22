<?php
/*if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']=="http://scene.hazrabrothers.com/dashboard/"){

}else{
	die("Unauthorized Entry!");
}*/
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17010;
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

if($hb_user_logged_in){

}else{
	die("You are not logged in. Please <a href='http://accounts.hazrabrothers.com/login/sign_in'>Log in</a> first to go to Scene Dashboard.");
}
//echo $_SERVER['HTTP_REFERER'];
echo "Done:";

/////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<style>
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed{
	margin:10px;
	padding:10px;
	font-size:15px;
	background:rgba(255,255,255,0.9);
	border-radius:5px;
	box-shadow:rgba(0,0,0,0.3) 1px 1px 2px 1.5px;
}
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed #hb_fdbk_subject_654ed{
	font-size:18px;
	font-weight:bold;
	padding:5px 0px;
	border-bottom:1px solid rgba(0,0,0,0.25);
}
/*---------------------------------*/
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed .hb_no_sub_ntr54{
	color:rgba(0,0,0,0.4);
}
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed .hb_no_msg_ntr54{
	color:rgba(0,0,0,0.4);
}
/*---------------------------------*/
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed #hb_fdbk_datetime_654ed>div{
	display:inline-block;
}
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed #hb_fdbk_datetime_654ed{
	float:right;
	font-size:13px;
}
/*---------------------------------*/
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed #hb_fdbk_message_654ed{
	padding:5px 0px;
}
/*---------------------------------*/
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed #hb_fdbk_reply_654ed{
	padding:10px;
	background:rgba(0,0,0,0.1);
	border-radius:5px;
}
/*---------------------------------*/
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed #hb_fdbk_attachment_654ed{
	padding:5px 0px;
	font-size:13px;
	color:rgb(20,140,160);
}
/*---------------------------------*/
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed #hb_fdbk_attachment_654ed a{
	text-decoration:none;
	color:rgb(20,140,160);
}
/*---------------------------*/
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed #hb_fdbk_attachment_654ed [hb_view_f1g]{
	float:right;
	margin:0px 5px;
	border-bottom:2px solid transparent;
	transition:border 0.3s;
}
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed #hb_fdbk_attachment_654ed [hb_view_f1g]:hover{
	border-color: rgb(20,140,160);
}
/*--------------------------------*/
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed #hb_fdbk_attachment_654ed [hb_download_f1g]{
	float:right;
	margin:0px 5px;
	border-bottom:2px solid transparent;
	transition:border 0.3s;
}
#hb_feedback_wrapper_227pI #hb_fdbk_items_dhu_654ed #hb_fdbk_attachment_654ed [hb_download_f1g]:hover{
	border-color: rgb(20,140,160);
}
/*-----------------------------------*/
</style>

<div id='hb_feedback_wrapper_227pI'>

<?php
$query="SELECT * FROM hb_scene_feedback WHERE email='".mysqli_real_escape_string($hb_scene_db,$_SESSION['hb_user']['email'])."' ORDER BY datetime DESC";
if($rows=mysqli_query($hb_scene_db,$query)){
	while($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
		///////////////give a subject which has no subject////////////
		if(trim($row['subject'])==""){
			$row['subject']="<span class='hb_no_sub_ntr54'>[No Subject]</span>";
		}
		///////////////give a message which has no message////////////
		if(trim($row['message'])==""){
			$row['message']="<span class='hb_no_msg_ntr54'>[No Message]</span>";
		}
		///////////// HB will give a reply which has no reply /////////////////
		if(trim($row['reply'])=="0"){
			$row['reply']="<i>No reply given till now</i>";
		}
		
		echo "
		<div id='hb_fdbk_items_dhu_654ed'>
		
			<div id='hb_fdbk_datetime_654ed'>
				<div>".$row['date']."</div>
				<div>".$row['time']."</div>
			</div>
			
			<div id='hb_fdbk_subject_654ed'>".$row['subject']."</div>
			
			<div id='hb_fdbk_message_654ed'>".$row['message']."</div>
			
			<div id='hb_fdbk_attachment_654ed'><b>Attachments:</b> 
				<span><b>3</b></span>
				
				<span hb_download_f1g><a href='#'>Download</a></span>
				<span hb_view_f1g><a href='#'>View</a></span>
			</div>
			
			<div id='hb_fdbk_reply_654ed'>".$row['reply']."</div>
			
		</div>
		";
	}
}

echo "</div>";
?>