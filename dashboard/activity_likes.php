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
include $rootpath."scene/image_class.php";
?>

<style>
#main_wrapper_5239{

}
#main_wrapper_5239 #upper_bar_5239{

}
#main_wrapper_5239 #upper_bar_5239 #search_div_5239{
	float:right;
	font-size: 15px;
	padding:5px;
	padding-left: 20px;
	border-bottom:2px solid rgba(0,0,0,0.3);
	margin-right:5px;
	background: url("/images/search.png");
	background-repeat: no-repeat;
	background-position: left center;
	background-size: auto 60%;
}
#main_wrapper_5239 #upper_bar_5239 #search_5239{
	border:none;
	outline:none;
	background:transparent;
}
#main_wrapper_5239 #showing_area_5239{
	text-align: center;
}
#main_wrapper_5239 #head_bar_5239{
	padding:10px;
}
#main_wrapper_5239 .jkml36985{
	display: inline-block;
	float: left;
}
#main_wrapper_5239 #like_logo_5239{

	width:100px;
	height:100px;
	background: url('/images/logo_like_active_old.png');
	background-repeat: no-repeat;
	background-position: center center;
	background-size: contain;
}
#main_wrapper_5239 #header_right_side_5239{
	font-size: 15px;
	font-style: italic;
}

#main_wrapper_5239 #like_number_5239{
	font-size: 45px;
	font-weight: bold;
}
#main_wrapper_5239 .kmg4125{
	display: inline-block;
	padding:10px;
	padding-right:5px;
}
#main_wrapper_5239 #tab_menu_bar_5239{
	box-shadow: rgba(0,0,0,0.5) 0px 3px 4px;
	text-align: center;
	margin-bottom:15px;
}
#main_wrapper_5239 .mnh521{
	display: inline-block;
	width:50%;
	float: left;
	cursor: pointer;
}
/*------------------------------------*/
#main_wrapper_5239 .mnh521>div{
	padding:10px;
	border-top: 2px solid transparent;
	border-left: 2px solid transparent;
	border-right: 2px solid transparent;

	border-top-left-radius: 100px;
	border-top-right-radius:100px;
	transition: background 0.3s, border 0.3s, box-shadow 0.3s;
}
#main_wrapper_5239 .mnh521:first-child>div{
	border-top-left-radius: 0px;
	border-top-right-radius:100px;

	border-left: 0px solid transparent;
	border-right: 2px solid transparent;
}
#main_wrapper_5239 .mnh521:nth-last-child(2)>div{
	border-top-left-radius: 100px;
	border-top-right-radius:0px;

	border-left: 2px solid transparent;
	border-right: 0px solid transparent;
}
#main_wrapper_5239 .mnh521:hover>div{
	background-color: rgba(0,0,0,0.17);
}
/*------------------------------------------------------------------------------------------------*/
#hb_header_search{
	display:inline-block;
	float:right;
	margin:0px 7px;
	height:50px;
}
#hb_header_search #hb_header_search_main_div{
	height:30px;
	margin:10px 0px;
	background-color:white;
	border-radius:200px;
	transition:background-color 0.3s;
}
#hb_header_search #hb_45479_collapse{
	width:0px;
	overflow:hidden;
	transition: width 0.3s;
}
/*------------------------------------------------*/

input[type='search']::-webkit-search-decoration,
input[type='search']::-webkit-search-cancel-button,
input[type='search']::-webkit-search-results-button,
input[type='search']::-webkit-search-results-decoration{
	display:none;
}


#hb_header_search #hb_header_search_input{
	height:30px;
	width:110px;
	border:none;
	font-size:13px;
	background:transparent;
	padding:0px 3px 0px 0px;
	margin-left:27px;
	color:black;
	font-family:montserrat_regular;
}
#hb_header_search #hb_header_search_button{
	float:right;
	height:30px;
	width:31px;
	padding:7px 0px;
	font-size:12px;
	margin:0px;
	border:none;
	font-weight:bold;
	text-align:center;
	cursor:pointer;
	background-color:transparent;
	background-image:url("/images/search.png");
	background-repeat:no-repeat;
	background-size:auto 50%;
	background-position: center center;
	border-radius:200px;
	transition:background-color 0.3s, border-radius 0.3s;
}

#hb_header_search #hb_header_search_button:hover{
	background-color:#bef;
}
/*------------------------------------------------*/
#hb_header_search #hb_header_search_cancel_button{
	float:left;
	width:0px;
	height:16px;
	position:absolute;
	padding:7px 0px;
	margin:0px;
	border:none;
	font-size:12px;
	font-weight:bold;
	cursor:pointer;
	border-top-left-radius:200px;
	border-bottom-left-radius:200px;
	transition:background-color 0.3s, width 0.3s, opacity 0.5s;
}
/*------------------------------------------------*/
#hb_header_search #hb_header_search_cancel_button>div{
	height:12px;
	width:17px;
	padding:5px 0px 0px 0px;
	float:right;
	background-image:url("/images/cross.png");
	background-color:transparent;
	background-repeat:no-repeat;
	background-size:50% 50%;
	background-position:center center;
	opacity:0;
	transition:width 0.2s, opacity 0.4s;
}

/*===================================================================*/
</style>

<div id="main_wrapper_5239">


  <div id="upper_bar_5239">
		<form id="hb_header_search" autocomplete="off">
			<div id="hb_header_search_main_div">
				<input type="submit" id="hb_header_search_button" value="&nbsp;" />

				<div id="hb_45479_collapse">
					<div id="hb_header_search_cancel_button">
						<div>&nbsp;</div>
					</div>

					<input type="search" id="hb_header_search_input" placeholder="Search" />
				</div>
			</div>
		</form>

		<!-- label>
		<div id="search_div_5239">
    	<input type="search" id="search_5239">
		</div>
	</label -->
</div>
<!------------------------------------------------------------------------------------------>

	<script id="hb_act_script_f4h1gwx">
		//alert("gh")


				hb_which_show_selected = "hb_scene_topRated";
				hb_if_searched = false;
				hb_0357view_state = false;
				hb_45479_collapse_state = true;

				hb_show_navMenu_state = false;
				hb_scroll_val_of_page = 0; //how much is the page scrolled?



		document.querySelector("#hb_header_search").addEventListener("submit",function (evt){evt.preventDefault(); hb_scene_search()},false);

		//document.querySelector("#hb_header_search #hb_header_search_button").addEventListener("click",function (){hb_scene_search()},false);

		document.querySelector("#hb_header_search #hb_header_search_cancel_button").addEventListener("click",function (){hb_0357search_clear()},false);
		document.querySelector("#hb_header_search #hb_header_search_cancel_button").addEventListener("mouseover",function (){this.style.backgroundColor='#e3d5d5'},false);
		document.querySelector("#hb_header_search #hb_header_search_cancel_button").addEventListener("mouseout",function (){this.style.backgroundColor='transparent'},false);

		document.querySelector("#hb_header_search #hb_header_search_input").addEventListener("keyup",function (){hb_0357press()},false);





		/////////////////function for search //////////////////
		function hb_scene_search(){
			var search_text=document.querySelector("#hb_header_search_input").value;
			if(hb_45479_collapse_state){
					hb_45479_collapse_expand();
			}else{
				if(search_text.trim() != ""){
					header_request=new XMLHttpRequest();
					header_request.open("GET","hb_scene_search.php?page=1&sqc=NC89R45jki12&search="+search_text,true);
					header_request.onreadystatechange=getResponse_search_hi5joy;
					header_request.send(null);

					//alert("cow go!");

					/*hb_scene_header_selector=document.querySelectorAll("#link_label a>div[id^='hb_scene_']");
					for(var i=0; i<hb_scene_header_selector.length; i++){
							hb_scene_header_selector[i].style.padding="15px 8px";
							hb_scene_header_selector[i].style.borderBottom="none";
					}*/

					hb_if_searched = true;

					document.getElementById("main_area").innerHTML=splashScreen1;

					window.scrollTo(0,0);


				}else{

					if(hb_if_searched == true){
						document.getElementById("main_area").innerHTML=splashScreen1;


						hb_0357search_clear();
						//hb_scene_show(hb_which_show_selected);

						hb_if_searched = false;
					}

				}

				document.querySelector("#hb_header_search_input").focus();
			}

			return false;
		}

				///////////////response function/////////////////////////////////////////////////////////////
				function getResponse_search_hi5joy(){
					if(header_request.status==200 && header_request.readyState==4){
						document.getElementById("main_area").innerHTML=header_request.responseText;
						//eval(document.getElementById("scr_hb_scene_popular_filter_569p").innerHTML);
						//eval(document.querySelector("#image_class_script_id_5697").innerHTML);
					}
				}

		//------------------------------------expand the searchbar---------------------------------------//
		function hb_45479_collapse_expand(){
			document.querySelector("#hb_header_search #hb_45479_collapse").style.width="140px";
			hb_45479_collapse_state = false;
			document.querySelector("#hb_header_search #hb_header_search_input").focus();
			document.querySelector("#hb_header_search #hb_header_search_button").style.borderRadius="0px 200px 200px 0px";
		}
		//-----------------------------------//-----------------------------------//-----------------------------------//
		//------------------FOR clearing search textbox and showing cross[X] icon ---------------------//
		function hb_0357press(){
			if(document.querySelector("#hb_header_search_input").value != ""){
				if(hb_0357view_state == false){
					document.querySelector("#hb_header_search_cancel_button").style.width = "20px";
					document.querySelector("#hb_header_search_cancel_button").style.opacity = "1";

					document.querySelector("#hb_header_search_cancel_button>div").style.width = "17px";
					document.querySelector("#hb_header_search_cancel_button>div").style.opacity = "1";

					hb_0357view_state = true;
				}
			}else{
				if(!hb_if_searched){
					document.querySelector("#hb_header_search_cancel_button").style.width = "0px";
					document.querySelector("#hb_header_search_cancel_button").style.opacity = "0";
					document.querySelector("#hb_header_search_cancel_button").style.background = "transparent";

					document.querySelector("#hb_header_search_cancel_button>div").style.width = "0px";
					document.querySelector("#hb_header_search_cancel_button>div").style.opacity = "0";

					hb_0357view_state = false;
				}else{
					hb_0357view_state = true;
				}
			}
		}
		//--------------------------------------------------------//

		function hb_0357search_clear(){
				document.querySelector("#hb_header_search_input").value="";

				document.querySelector("#hb_header_search_cancel_button").style.width = "0px";
				document.querySelector("#hb_header_search_cancel_button").style.opacity = "0";
				document.querySelector("#hb_header_search_cancel_button").style.background = "transparent";
				document.querySelector("#hb_header_search_cancel_button>div").style.width = "0px";
				document.querySelector("#hb_header_search_cancel_button>div").style.opacity = "0";
				hb_0357view_state = false;

				if(hb_if_searched == true){
					document.getElementById("main_area").innerHTML=splashScreen1;


					hb_scene_show(hb_which_show_selected);
					hb_if_searched = false;
				}

				document.querySelector("#hb_header_search_input").focus();

		}
/*******************************************************************/
		tab_head_527=document.querySelectorAll("#tab_menu_bar_5239 .mnh521");
		for(var i=0; i<tab_head_527.length; i++){
			tab_head_527[i].addEventListener("click",function (){show_tabs_45yr87(this)},false);
		}

		tab_fld_527=document.querySelectorAll("#showing_area_5239 .mnfld521");

		function show_tabs_45yr87(obj){

			for(var i=0; i<tab_fld_527.length; i++){
				tab_fld_527[i].style.display="none";
			}
			document.querySelector("#showing_area_5239 .mnfld521[hb_code='"+obj.getAttribute("hb_code")+"']").style.display="block";
			//alert("coe")
			for(var i=0; i<tab_head_527.length; i++){
				tab_head_527[i].querySelector("div").style.borderColor="";
				tab_head_527[i].querySelector("div").style.backgroundColor="";
				tab_head_527[i].querySelector("div").style.boxShadow="";
			}
			obj.querySelector("div").style.borderColor="rgba(0,0,0,0.4)";
			obj.querySelector("div").style.backgroundColor="rgba(0,0,0,0.15)";
			obj.querySelector("div").style.boxShadow="rgba(0,0,0,0.2) 0px 0px 3px 2px inset";

		}

/*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
show_tabs_45yr87(document.querySelector("#tab_menu_bar_5239 .mnh521[hb_code='1']"));

		</script>
<!------------------------------------------------------------------------------------------->
  <div id="head_bar_5239">
    <div id="like_logo_5239" class="jkml36985">&nbsp;</div>


		<?php
		$query="SELECT user_id,total_liked FROM hb_scene_users WHERE user_id='".$_SESSION['hb_user']['user_id']."' LIMIT 1";
		if($rows=mysqli_query($hb_scene_db,$query)){
			if($row=mysqli_fetch_array($rows, MYSQLI_BOTH)){
				if($row['user_id']==$_SESSION['hb_user']['user_id']){
					$total_likes_745=$row['total_liked'];
				}else{
					die('Unable to get information 55');
				}
			}else{
				die('Unable to get information 55');
			}
		}else{
			die('Unable to get information 55');
		}

		/////////////////////////////comment////////////////////////////////////////////
		$comment_xml_url=$rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/comment_list.xml";
		$like_comment_69=0;
		if(file_exists($comment_xml_url)){
			$xml=simplexml_load_file($comment_xml_url);
			$tmpxml201=new SimpleXMLElement($xml->asXML());

			foreach($tmpxml201->children() as $comment){
				$likes558=$comment->likes;
				foreach ($likes558->children() as $like) {
					if($like->current_reaction=="like"){
						$like_comment_69=$like_comment_69+1;
					}
					//echo "push";
				}
			}
		}else{
			$like_comment_69=0;
		}


if(($total_likes_745+$like_comment_69)<=0){
?>
	<div>
		You have not like anything till now.
	</div>
<?php
		}else{
?>
		<div id="header_right_side_5239" class="jkml36985">
			<div id="header_right_side_upper_5239">You have liked exactly</div>
			<div id="header_right_side_lower_5239" >
				<div id="like_number_5239" class="kmg4125"><?php echo ($total_likes_745+$like_comment_69); ?></div>
				<div id="header_right_side_lower_t_5239" class="kmg4125">times (<?php echo $total_likes_745; ?> on images and <?php echo $like_comment_69; ?> on comments)</div>
			</div>
		</div>
<?php
		}
?>

	<div style="clear:both;height:0px;font-size:1px;">&nbsp;</div>
  </div>

  <div id="tab_menu_bar_5239">
    <div class="mnh521" hb_code="1"><div>Images</div></div>
    <div class="mnh521" hb_code="2"><div>Comments</div></div>


		<div style="clear:both;height:0px;font-size:1px;">&nbsp;</div>
  </div>

  <div id="showing_area_5239">
		<div class="mnfld521" hb_code="1">

    <?php ///read from xml files and show///
		$like_xml_url=$rootpath."scene/user_data/user_".$_SESSION['hb_user']['username']."/like_list.xml";
		if(!file_exists($like_xml_url)){
			die("You have not like any image till now.");
		}

		$xml=simplexml_load_file($like_xml_url);
		$tmpxml201=new SimpleXMLElement($xml->asXML());

		$id=0;

		
		$cnt4788=$tmpxml201->children();
		for($i=count($cnt4788)-1; $i>=0; $i--){
			$like=$cnt4788[$i];
				
			if($like->current_reaction=="like"){
				$url=$like->url;
				$query="SELECT url,uploaded_by FROM hb_scene_images WHERE url='".$url."' LIMIT 1";
				if($rows=mysqli_query($hb_scene_db,$query)){
					if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
						if($row['url']==$url){
							$uploader_id=$row['uploaded_by'];
							////////////////////////////////////////////////////////////////////
							$query="SELECT uploader_id,username FROM hb_scene_pages WHERE uploader_id='".$uploader_id."' LIMIT 1";
							if($rows=mysqli_query($hb_scene_db,$query)){
								if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
									if($row['uploader_id']==$uploader_id){
										//////////////////show image/////////////
										$image=new image($url);
										$image->id="img".$id;
										$image->showImage();
										$id++;
									}else{
										die('Unable to get information1');
									}
								}else{
									die('Unable to get information2');
								}
							}else{
								die('Unable to get information3');
							}
							///////////////////////////////////////////////////////////////////
						}else{
							die('Unable to get information4');
						}
					}else{
						die('Unable to get information5');
					}
				}else{
					die('Unable to get information6');
				}
			}
		}


		?>

	</div>
	<div class="mnfld521" hb_code="2">
		comments are coming here.
	</div>

  </div>

</div>
