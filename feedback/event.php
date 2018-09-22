<?php

?>
<script>
	document.querySelector("body").addEventListener('click',collapse_forms_on_body,false);
	
	window.addEventListener('resize',hb_scene_resize,false);
	window.addEventListener('scroll',hb_scene_scroll,false);
	window.addEventListener('load',hb_scene_load,false);


/*----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----*/
function collapse_forms_on_body(e){

	collapse_user_header_pane_toSignIn(e);
	collapse_user_header_pane_afterSignIn(e);
}
	
function hb_scene_load(){
	articles_545=document.querySelectorAll("#hb_scene_upload_welcome_display_area [id^=the_article_]");
	div_all=document.querySelectorAll('#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_first_page *');

	
}

function hb_scene_resize(){
  //for setting height of footer
  document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height+25)+"px";
	hb_background_img_change();
}

function hb_scene_scroll(){
	
}

	//collapsing user header panel after sign in
	function collapse_user_header_pane_afterSignIn(e){
		if(document.querySelector("#hb_user_header_account_5449_div_afterLogin") && document.querySelector("#hb_user_header_account_5449_logo")){
		if(e.target==document.querySelector("#hb_user_header_account_5449_logo")){ //just for avoiding conflict of button

		}else{
			//setting flag first
			var flag=0;

			//check again if the target belongs the list of actual details
			var elem_nm89=document.querySelectorAll("#hb_user_header_account_5449_div_afterLogin *");
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



</script>
