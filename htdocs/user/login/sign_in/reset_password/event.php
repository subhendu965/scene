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

/*----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----*/

	function hb_scene_load(){
		
	}

	function hb_scene_resize(){
	/// resize the error ribbon 
	if(errorRibbonShowed){
		document.querySelector('#hb_incorrect_field').style.height='auto';
	}

	///resize error showing tprop
	error_tprop=document.querySelectorAll("div[tprop$=_error_message]");
	for(i=0;i<error_tprop.length;i++){
		if(error_tprop[i].getAttribute("error_tprop_showed") == "true"){
			error_tprop[i].style.height="auto";
			tprop_height667=error_tprop[i].clientHeight;
			error_tprop[i].style.height=tprop_height667+"px";
		}
	}
	
	//for setting height of footer
	document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_user_footer").getBoundingClientRect().height+25)+"px";
	}
	

</script>
