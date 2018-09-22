<?php

?>
<script>

	window.addEventListener('resize',hb_scene_resize,false);
	window.addEventListener('load',hb_scene_load,false);


/*----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----*/

function hb_scene_load(){

}

function hb_scene_resize(){
  //for setting height of footer
  document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height+25)+"px";

}

</script>
