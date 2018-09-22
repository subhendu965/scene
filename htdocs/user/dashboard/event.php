<?php

?>
<script>


	window.addEventListener('resize',hb_scene_resize,false);
	window.addEventListener('load',hb_scene_load,false);


/*----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----*/


	function hb_scene_load(){
		hb_acc_dashboard_show('home','left_panel_list_item_home');

	}

	function hb_scene_resize(){
		//for setting height of footer
		document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_user_footer").getBoundingClientRect().height)+"px";

		///resize error showing tprop
		error_tprop=document.querySelectorAll("div[tprop$=_error_message]");
		for(i=0;i<error_tprop.length;i++){
			if(error_tprop[i].getAttribute("error_tprop_showed") == "true"){
				error_tprop[i].style.height="auto";
				tprop_height667=error_tprop[i].clientHeight;
				error_tprop[i].style.height=tprop_height667+"px";
			}
		}


	}


</script>
