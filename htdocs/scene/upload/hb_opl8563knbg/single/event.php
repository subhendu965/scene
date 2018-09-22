<?php

?>
<script>


	document.querySelector("body").addEventListener('click',collapse_forms_on_body,false);

	window.addEventListener('resize',hb_scene_resize,false);
	window.addEventListener('load',hb_scene_load,false);


/*----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----*/

	function collapse_forms_on_body(e){

		collapse_user_header_pane_toSignIn(e);
		collapse_user_header_pane_afterSignIn(e);
	}

	function hb_scene_load(){

	}

	function hb_scene_resize(){
		//for setting height of footer
		document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height+30)+"px";

		//set height of expanding div
		if(!bln_expand_show_more_5128){
			document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #expand_container_5128").style.height="auto";
			height_of_expand_container_5128=document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #expand_container_5128").clientHeight;
			document.querySelector("form[name='post_hb_scene_upload_form'] #form_area_1458 #expand_container_5128").style.height=height_of_expand_container_5128;
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
			var elem_nm89=document.querySelectorAll("#hb_user_header_account_5449_div_toLogin *");
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
