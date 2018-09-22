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

if(isset($_SESSION['hb_scene']['tmp_uploader_welcome']) && $_SESSION['hb_scene']['tmp_uploader_welcome']=="jky639"){

}else {
  /*/check if already exist user_data
	$uq="SELECT sl,username FROM hb_scene_pages WHERE username='".$_SESSION['hb_user']['username']."' LIMIT 1";
	if($uqs=mysqli_query($hb_scene_db,$uq)){
			if($ruqr=mysqli_fetch_array($uqs,MYSQLI_BOTH)){
				if($ruqr['username']==$_SESSION['hb_user']['username']){
					header("location:http://scene.hazrabrothers.com/upload/single");
				}
			}
		}else{
			die("Unauthorized entry!");
		}*/
}

?>
<html>
<head>
  <title>Scene welcoming you to upload images</title>
  <link rel="shortcut icon" href="/images/scene_logo_title.png" />
  <meta name="viewport" content="width=device-width" />
</head>

<body>
<?php
//////////////////////////////////////include header///////////////////////////////////////////////
include $rootpath."scene/auxiliary_header.php";

$stylesheet=<<<style_of645

	<style>

	body{
		background-image: url('/images/oooi.png');
		background-color:rgba(50,130,160,1);
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
		color:white;
		transition: background 0.5s, color 0.3s;
	}

	#main{
		width:80%;
		margin:20px auto;
		border:10px solid rgba(255,255,255,0.3);
		border-radius: 20px;
		padding:10px;
		box-shadow: black 0px 0px 50px;
		text-align:center;
		transition: box-shadow 0.3s, border 0.3s;
	}
	#hb_scene_upload_welcome_display_area [id^=the_click_btn]{
		text-decoration: none;
	}
	#hb_scene_upload_welcome_display_area [id^=the_click_btn]>div{
		width:200px;
		display:inline-block;
		font-size: 20px;
		margin:5px;
		margin-top: 10px;
		padding: 8px 15px;
		border:3px solid rgba(255,255,255,0.4);
		background:rgba(0,0,0,0.4);
		border-radius: 5px;
		color:white;
		transition: background 0.3s, border 0.3s, color 0.3s;
	}
	#hb_scene_upload_welcome_display_area [id^=the_click_btn]>div:hover{
		background:rgba(200,200,200,0.4);
	}
	/*================================================================*/

	#hb_scene_upload_welcome_display_area #header_main{
		text-align:center;
		font-size:40px;
		padding-bottom:15px;
		border-bottom:2px solid rgba(255,255,255,0.6);
		line-height: 50px;
		transition:border 0.3s;
	}

	#hb_scene_upload_welcome_display_area #footer_bar{
		border-top:2px solid rgba(255,255,255,0.4);
		padding-top:10px;
		transition:border 0.3s;
	}
	/*================================================================*/

	#hb_scene_upload_welcome_display_area #upload_div_area_885{
			width:200px;
			height:200px;
			border:3px solid rgba(0,0,0,0.8);
			border-radius: 500px;
			padding:10px;
			margin:10px auto;
			color:rgba(0,0,0,0.8);
			text-shadow: rgba(255,255,255,0.8) 0px 0px 5px;
			font-size: 25px;
			text-align: center;
			background-image: url('/images/user_logo.png');
			background-repeat: no-repeat;
			background-position: center center;
			background-size: cover;
			transition: background 0.3s, color 0.3s;
		}

	#hb_scene_upload_welcome_display_area #hb_name_uploader{
			text-align: center;
			font-size: 20px;
	}
	#hb_scene_upload_welcome_display_area #error_message_457k{
			padding-top:10px;
			height:0px;
			transform: scale(1,0);
			transition: transform 0.3s, height 0.3s;
	}
	#hb_scene_upload_welcome_display_area #error_message_457k>div{
			font-size:14px;
			color:red;
			padding: 4px 8px;
			border:1px solid red;
			background: rgba(255,255,255,0.8);
			border-radius: 4px;
			text-align: center;
		}


		/*--------------------------------------------------------------------*/


	</style>

style_of645;

?>
<div id="hb_scene_blank"></div>
<?php
////////////////////////////////end of header/////////////////////////////////////////////////

if(isset($_GET['uid']) && !empty($_GET['uid'])){
  $query="SELECT sl,scene_name,scene_mask_current,uploader_id FROM hb_scene_pages WHERE uploader_id='".mysqli_real_escape_string($hb_scene_db,$_GET['uid'])."' LIMIT 1";
  if($rows=mysqli_query($hb_scene_db,$query)){
    if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
      if($row['uploader_id']==$_GET['uid']){

				echo $stylesheet;
        ?>

        <div id='main'>
					<div id='hb_scene_upload_welcome_display_area'>
          <div>
						<header id="header_main">Your Scene Page is created</header>

            <div id="error_message_457k"><div>
                <?php
                  if(isset($_GET['err']) && !empty($_GET['err'])){
                    echo $_GET['err'];
                  }else{

                  }
                 ?>

							</div>
            </div>
            <div style="font-size:15px;">You can change your Scene page settings from your dashboard any time.</div>
          </div>
          <div>
            <div>
              <div id="upload_div_area_885" style="background-image:url('<?php
							if(file_exists($rootpath.'scene/user_data/user_'.$_SESSION['hb_user']['username'].'/scene_masks/'.$row['scene_mask_current']) && isset($row['scene_mask_current']) && !empty($row['scene_mask_current'])){
								echo '/user_data/user_'.$_SESSION['hb_user']['username'].'/scene_masks/'.$row['scene_mask_current'];

							}else{
								echo "/images/user_logo.png";
							}

							?>');">&nbsp;</div>
            </div>
            <div id="hb_name_uploader">
              Scene name: <?php echo $row['scene_name']; ?>
            </div>
          </div>
          <div>
            <a href="http://scene.hazrabrothers.com/upload/single" id="the_click_btn_1"><div>Upload Image Now</div></a>
          </div>
          <div>
            <a href="http://scene.hazrabrothers.com/scene_page/" id="the_click_btn_2"><div>My Scene Page</div></a>
            <a href="http://scene.hazrabrothers.com/dashboard" id="the_click_btn_3"><div>My dashboard</div></a>
          </div>
					<br>
        </div>
				</div>

				<script>
					if(document.querySelector('#error_message_457k>div').innerText.trim() != ""){
						document.querySelector('#error_message_457k').style.transform="scale(1,1)";
						document.querySelector('#error_message_457k').style.height="auto";
					}
				</script>

        <?php
        //unset session
        unset($_SESSION['hb_scene']['tmp_uploader_welcome']);
      }else{
        scene_page_not_created();
      }
    }else{
      scene_page_not_created();
    }
  }else{
    scene_page_not_created();
  }

}else{
  scene_page_not_created();
}

function scene_page_not_created(){
	global $stylesheet;
	echo $stylesheet;
  ?>

  <div id='main'>
		<div id='hb_scene_upload_welcome_display_area'>
		    <header id="header_main">Your Scene Page is not created</header>
				<br>
		    <div style="font-size:16px;">There is some internal error so please.</div>
		    <div>
					<a href="http://scene.hazrabrothers.com/upload/single" id="the_click_btn_4"><div>Try Again</div></a>
				</div>
		</div>
  </div>

  <?php
}
?>

<div id="footer_blank_0032">&nbsp;</div>
<?php
///////////////////////////////////////////////include footer/////////////////////////////////////////////////////
include $rootpath."scene/footer.php";
?>
<style>

#hb_scene_footer{
	position:absolute;
	bottom:0px;
	z-index:80;
}
</style>
<script>

document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height+25)+"px";
</script>
<?php ///////////////////////////////////////////////end of footer///////////////////////////////////////////////////// ?>

<?php include "event_final.php"; ?>

</body>

</html>
