<?php

?>
<script>

	
	document.querySelector("body").addEventListener('click',collapse_forms_on_body,false);
	
	window.addEventListener('resize',hb_scene_resize,false);
	
	
/*----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----*/
	
	function collapse_forms_on_body(e){
		collapse_search_bar(e);
		collapse_user_header_pane_toSignIn(e);
		collapse_user_header_pane_afterSignIn(e);
	}
	
	
	function hb_scene_resize(){
		//for setting height of footer	
		document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height+30)+"px";
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
			var elem_nm89=document.querySelectorAll("#hb_user_header_account_5449_div_toLogin *");
			for(var i=0;i<elem_nm89.length;i++){
				if(e.target==elem_nm89[i]){
					flag=1;	
				}
			}
			
			if(flag){
			
			}else{
				document.querySelector("#hb_user_header_account_5449_div_toLogin").style.height="0px";
				document.querySelector("#hb_user_header_account_5449_div_toLogin").style.width="0px";
				document.querySelector("#hb_user_header_account_5449_div_toLogin").style.opacity="0";
				
				document.querySelector("#hb_user_header_account_5449_div_toLogin #hb_user_header_account_5449_div_toLogin_innerDiv").style.height="0px";
				document.querySelector("#hb_user_header_account_5449_div_toLogin #hb_user_header_account_5449_div_toLogin_innerDiv").style.right="-150px";
				
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
				document.querySelector("#hb_user_header_account_5449_div_afterLogin").style.height="0px";
				document.querySelector("#hb_user_header_account_5449_div_afterLogin").style.width="0px";
				document.querySelector("#hb_user_header_account_5449_div_afterLogin").style.opacity="0";
				
				document.querySelector("#hb_user_header_account_5449_div_afterLogin #hb_user_header_account_5449_div_afterLogin_innerDiv").style.right="-150px";
				
				bln_expand_hb_user_header_account_5449_afterSignInDiv = false;
				document.querySelector("#hb_user_header_account_5449_logo").style.borderRadius="100px";
				document.querySelector("#hb_user_header_account_5449_logo").style.borderColor="transparent";
			}
			
		}
			
		
		}
	}
	
</script>
