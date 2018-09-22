<?php
//checking if some one access directly or not
if(isset($rootpath)){
	include $rootpath."universal/init/init_protect.php";
}else{
	die("Unautorized Entry!");
}
?>
<script>

	window.addEventListener('resize',hb_scene_resize,false);
	window.addEventListener('load',hb_scene_load,false);

	document.querySelector("body").addEventListener('click',collapse_forms_on_body,false);

	document.querySelector("#hb_scene_image_viewer").addEventListener('click',collapse_all_forms,false);

/*----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----*/

	function collapse_forms_on_body(e){
		collapse_search_bar(e);
		collapse_user_header_pane_toSignIn(e);
		collapse_user_header_pane_afterSignIn(e);
		collapse_user_header_pane_notification(e);
	}

	function hb_scene_load(){
		////////////initializing intial work
		initWork();
	//for change the height of image viewer
		if(window.innerWidth >= window.innerHeight - document.querySelector("#hb_scene_header").clientHeight){ //desktop state
			if(bln_hb_scene_image_viewer_state){ //if viwer is enabled
				document.querySelector("#hb_scene_image_viewer").style.height=window.innerHeight - document.querySelector("#hb_scene_header").clientHeight;

				document.querySelector('#main_area').style.paddingTop="0px";

				document.querySelector('#hb_scene_image_viewer').style.width='50%';
				document.querySelector('#main_area').style.width='50%';
			}else{
				document.querySelector("#hb_scene_image_viewer").style.height=window.innerHeight - document.querySelector("#hb_scene_header").clientHeight;

				document.querySelector('#hb_scene_image_viewer').style.width='0%';
			}
		}else{ //mobile state
			if(bln_hb_scene_image_viewer_state){ //if viewer is enabled
				document.querySelector('#hb_scene_image_viewer').style.height=(window.innerHeight-document.querySelector('#hb_scene_header').clientHeight)/1.5+"px";

				document.querySelector('#main_area').style.paddingTop=(window.innerHeight-document.querySelector('#hb_scene_header').clientHeight)/1.5+"px";

				document.querySelector('#hb_scene_image_viewer').style.width='100%';
				document.querySelector('#main_area').style.width='100%';

			}else{
				document.querySelector('#hb_scene_image_viewer').style.height='0%';
				document.querySelector('#hb_scene_image_viewer').style.width='100%';
			}
		}

		if(document.querySelector("#style_for_ht_g56hg")){
			style_for_ht_g56hg=document.querySelector("#style_for_ht_g56hg");
			if(document.querySelector("#hb_scene_header")){

				style_for_ht_g56hg.innerHTML="#main_area{min-height:"+(window.innerHeight-document.querySelector("#hb_scene_header").clientHeight)+"px;}";
			}else{

				style_for_ht_g56hg.innerHTML="#main_area{min-height:"+(window.innerHeight)+"px;}";
			}
		}


	}

	function hb_scene_resize(){

		if(document.querySelector("#style_for_ht_g56hg")){
			style_for_ht_g56hg=document.querySelector("#style_for_ht_g56hg");
			if(document.querySelector("#hb_scene_header")){

				style_for_ht_g56hg.innerHTML="#main_area{min-height:"+(window.innerHeight-document.querySelector("#hb_scene_header").clientHeight)+"px;}";
			}else{

				style_for_ht_g56hg.innerHTML="#main_area{min-height:"+(window.innerHeight)+"px;}";
			}
		}

		
	//for change the height of image viewer
		setTimeout(function (){

		if(window.innerWidth >= window.innerHeight - document.querySelector("#hb_scene_header").clientHeight){
			if(bln_hb_scene_image_viewer_state){
				document.querySelector("#hb_scene_image_viewer").style.height=window.innerHeight - document.querySelector("#hb_scene_header").clientHeight;

				document.querySelector('#main_area').style.paddingTop="0px";

				document.querySelector('#hb_scene_image_viewer').style.width='50%';
				document.querySelector('#main_area').style.width='50%';
			}else{
				document.querySelector("#hb_scene_image_viewer").style.height=window.innerHeight - document.querySelector("#hb_scene_header").clientHeight;

				document.querySelector('#hb_scene_image_viewer').style.width='0%';
			}
		}else{
			if(bln_hb_scene_image_viewer_state){
				document.querySelector('#hb_scene_image_viewer').style.height=(window.innerHeight-document.querySelector('#hb_scene_header').clientHeight)/1.5+"px";

				document.querySelector('#main_area').style.paddingTop=(window.innerHeight-document.querySelector('#hb_scene_header').clientHeight)/1.5+"px";

				document.querySelector('#hb_scene_image_viewer').style.width='100%';
				document.querySelector('#main_area').style.width='100%';

			}else{
				document.querySelector('#hb_scene_image_viewer').style.height='0%';
				document.querySelector('#hb_scene_image_viewer').style.width='100%';
			}
		}
		setTimeout(function (){
			//setting height of details
			document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details").style.height = document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_div").clientHeight - (document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_image").clientHeight + document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_name").clientHeight);

			//setting top of rating details
			document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details").style.top=document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating").clientHeight;
		},300);

		},300);



	//for setting height of footer
	document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height+25)+"px";


		if(document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details")){
			document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_details").style.height = document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_div").clientHeight - (document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_image").clientHeight + document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_name").clientHeight);
		}

		/*if(document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line_ul")){
			document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line_ul #hb_7458_div_main_inner #waitWheel_div").style.height=document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_image").clientHeight+"px";
			document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_floating_button_line_ul").style.top=(-1*document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_image").clientHeight)+"px";
		}*/

		if(window.innerWidth >=900 && hb_show_navMenu_state){ // if opened
			show_navMenu();
		}

		//set height of notification pane
		document.querySelector("#hb_user_header_notification_3461_div").style.height=(window.innerHeight-document.querySelector('#hb_scene_header').clientHeight)+"px";

	}

	//collapsing all forms
	function collapse_all_forms(e){
		//collapse rating details
		if(e.target==document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_collapse") || e.target==document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating")){ //just for avoiding red cross and conflict of button

		}else{
			//setting flag first
			var flag=0;

			//check again if the target belongs the list of actual details
			var elem_nm89=document.querySelectorAll("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details *");
			for(var i=0;i<elem_nm89.length;i++){
				if(e.target==elem_nm89[i]){
					flag=1;
				}
			}

			if(flag){

			}else{
				document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details").style.height="0px";
				document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details").style.width="0px";
				document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details").style.right="70px";
				document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating_details").style.opacity="0";

				bln_hb_scene_image_viewer_rating_details=false;
				bln_hb_scene_image_viewer_rating_details_over=false;
				document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_rating").style.backgroundColor="transparent";

			}

		}


        //collapse download link details
		if(e.target==document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_collapse") || e.target==document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_download_link")){ //just for avoiding red cross and conflict of button

		}else{
			//setting flag first
			var flag=0;

			//check again if the target belongs the list of actual details
			var elem_nm89=document.querySelectorAll("#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details *");
			for(var i=0;i<elem_nm89.length;i++){
				if(e.target==elem_nm89[i]){
					flag=1;
				}
			}

			if(flag){

			}else{
				document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details").style.height="0px";
				document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details").style.width="0px";
				document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details").style.right="115px";
				document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_download_link_details").style.opacity="0";

				bln_hb_scene_image_viewer_download_link_details=false;
				bln_hb_scene_image_viewer_download_link_details_over=false;
				document.querySelector("#hb_scene_image_viewer #hb_scene_image_viewer_download_link").style.transform="scale(1)";

			}

		}
	}


	//collapsing search bar
	function collapse_search_bar(e){
		if(document.querySelector("#hb_scene_header #hb_header_search_input").value == "" && !hb_if_searched){
			var flag=0;

			//check again if the target belongs the list of actual details
			var elem_nm89=document.querySelectorAll("#hb_scene_header>div>#hb_header_right_container>#hb_header_search *");
			for(var i=0;i<elem_nm89.length;i++){
				if(e.target==elem_nm89[i]){
					flag=1;
				}
			}

			if(flag){

			}else{
				document.querySelector("#hb_scene_header>div>#hb_header_right_container>#hb_header_search #hb_45479_collapse").style.width="0px";
				hb_45479_collapse_state = true;
				document.querySelector("#hb_scene_header>div>#hb_header_right_container>#hb_header_search #hb_header_search_button").style.borderRadius="200px";

			}
		}


	}
	//collapsing user header panel to sign in
	function collapse_user_header_pane_toSignIn(e){
		if(document.querySelector("#hb_user_header_account_5449_div_toLogin") && document.querySelector("#hb_user_header_account_5449_logo")){
		if(e.target==document.querySelector("#hb_user_header_account_5449_logo")){ //just for avoiding conflict of button

		}else{
			//setting flag first
			var flag=0;

			//check again if the target belongs the list of actual details
			var elem_nm89=document.querySelectorAll("#hb_user_header_account_5449_div_toLogin, #hb_user_header_account_5449_div_toLogin *");
			for(var i=0;i<elem_nm89.length;i++){
				if(e.target==elem_nm89[i]){
					flag=1;
				}
			}

			if(flag){

			}else{
				document.querySelector("#hb_user_header_account_5449_div_toLogin").style.transform="scale(0,0)";
				document.querySelector("#hb_user_header_account_5449_div_toLogin").style.opacity="0";

				bln_expand_hb_user_header_account_5449_toSignInDiv = false;
				document.querySelector("#hb_user_header_account_5449_logo").style.borderRadius="100px";
				document.querySelector("#hb_user_header_account_5449_logo").style.borderColor="transparent";

			}

		}


		}
	}

	//collapsing user header panel after sign in
	function collapse_user_header_pane_afterSignIn(e){
		if(document.querySelector("#hb_user_header_account_5449_div_afterLogin") && document.querySelector("#hb_user_header_account_5449_logo")){
		if(e.target==document.querySelector("#hb_user_header_account_5449_logo")){ //just for avoiding conflict of button

		}else{
			//setting flag first
			var flag=0;

			//check again if the target belongs the list of actual details
			var elem_nm89=document.querySelectorAll("#hb_user_header_account_5449_div_afterLogin, #hb_user_header_account_5449_div_afterLogin *");
			for(var i=0;i<elem_nm89.length;i++){
				if(e.target==elem_nm89[i]){
					flag=1;
				}
			}

			if(flag){

			}else{
				document.querySelector("#hb_user_header_account_5449_div_afterLogin").style.transform="scale(0,0)";
				document.querySelector("#hb_user_header_account_5449_div_afterLogin").style.opacity="0";

				bln_expand_hb_user_header_account_5449_afterSignInDiv = false;
				document.querySelector("#hb_user_header_account_5449_logo").style.borderRadius="100px";
				document.querySelector("#hb_user_header_account_5449_logo").style.borderColor="transparent";
			}

		}


		}
	}


	//collapsing user header notification pane
	function collapse_user_header_pane_notification(e){
		if(document.querySelector("#hb_user_header_notification_3461_div") && document.querySelector("#hb_user_header_notification_3461_logo")){
		if(e.target==document.querySelector("#hb_user_header_notification_3461_logo") || e.target==document.querySelector("#hb_user_header_notification_3461_logo_number")){ //just for avoiding conflict of button

		}else{
			//setting flag first
			var flag=0;

			//check again if the target belongs the list of actual details
			var elem_nm89=document.querySelectorAll("#hb_user_header_notification_3461_div, #hb_user_header_notification_3461_div *");
			for(var i=0;i<elem_nm89.length;i++){
				if(e.target==elem_nm89[i]){
					flag=1;
				}
			}

			if(flag){

			}else{
				document.querySelector("#hb_user_header_notification_3461_div").style.transform="scale(0,1)";
				document.querySelector("#hb_user_header_notification_3461_div").style.opacity="0.5";

				bln_expand_hb_user_header_notification_3461_showNotificationDiv = false;
				document.querySelector("#hb_user_header_notification_3461_logo").style.backgroundColor="";
				document.querySelector("#hb_user_header_notification_3461_logo").style.backgroundImage="";
				document.querySelector("#hb_user_header_notification_3461_logo").style.boxShadow="";
			}

		}


		}
	}

	////////////// show nav menu when opened in phone /////////////////
	function show_navMenu(){
		if(!hb_show_navMenu_state){ // if not opened
			hb_scroll_val_of_page = window.pageYOffset;

			document.querySelector("#main_page").style.display="none";
			document.querySelector("#link_label_resp_menu").style.display="block";

			window.scrollTo(0,0);

			document.body.style.backgroundColor="rgb(120,150,150)";

			hb_show_navMenu_state = true;
		}else{

			document.querySelector("#link_label_resp_menu").style.display="none";
			document.querySelector("#main_page").style.display="block";

			window.scrollTo(0,hb_scroll_val_of_page);

			document.body.style.backgroundColor="white";

			hb_show_navMenu_state = false;
		}
	}


</script>
