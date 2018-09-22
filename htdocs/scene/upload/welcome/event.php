<?php

?>
<script>

	window.addEventListener('resize',hb_scene_resize,false);
	window.addEventListener('scroll',hb_scene_scroll,false);
	window.addEventListener('load',hb_scene_load,false);


/*----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----**----*/

function hb_scene_load(){
	articles_545=document.querySelectorAll("#hb_scene_upload_welcome_display_area [id^=the_article_]");
	div_all=document.querySelectorAll('#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_first_page *');

	hb_background_img_change();
}

function hb_scene_resize(){
  //for setting height of footer
  document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height+25)+"px";
	hb_background_img_change();
}

function hb_scene_scroll(){
	hb_background_img_change();
}
function hb_background_img_change(){
	if(document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_first_page").style.display!="none"){
		if(this.pageYOffset <= articles_545[0].clientHeight/2){
			document.body.style.backgroundImage="url('/images/vb.png')";
			document.body.style.backgroundPosition="center center";
			document.body.style.backgroundColor="rgba(1,62,74,1)";
			document.querySelector("#main_wrapper").style.textShadow="";
			document.body.style.color="white";

			document.querySelector('#main_wrapper').style.borderColor="rgba(255,255,255,0.3)";
			for(var i=0;i<div_all.length;i++){
				div_all[i].style.borderColor="rgba(255,255,255,0.4)";
			}

		}else if(this.pageYOffset > articles_545[0].clientHeight/3 && this.pageYOffset <= articles_545[0].clientHeight*3/2) {
			document.body.style.backgroundImage="url('/images/ugy2.jpg')";
			document.body.style.backgroundPosition="60% center";
			document.body.style.backgroundColor="rgba(20,110,100,1)";
			document.querySelector("#main_wrapper").style.textShadow="rgba(0,0,0,1) 3px 3px 4px";
			document.body.style.color="white";

			document.querySelector('#main_wrapper').style.borderColor="rgba(255,255,255,0.3)";
			for(var i=0;i<div_all.length;i++){
  			div_all[i].style.borderColor="gold";
			}

		}else if(this.pageYOffset > articles_545[0].clientHeight*3/2 && this.pageYOffset <= articles_545[0].clientHeight*5/2) {
			document.body.style.backgroundImage="url('/images/yrr.png')";
			document.body.style.backgroundPosition="40% center";
			document.body.style.backgroundColor="rgba(20,30,50,1)";
			document.querySelector("#main_wrapper").style.textShadow="rgba(255,255,255,0.85) 2px 2px 4px";
			document.body.style.color="black";

			document.querySelector('#main_wrapper').style.borderColor="rgba(0,0,0,0.3)";
			for(var i=0;i<div_all.length;i++){
  			div_all[i].style.borderColor="rgba(0,0,0,0.4)";
			}

		}else if(this.pageYOffset > articles_545[0].clientHeight*5/2 && this.pageYOffset <= articles_545[0].clientHeight*7/2) {
			document.body.style.backgroundImage="url('/images/vgfy.png')";
			document.body.style.backgroundPosition="center center";
			document.body.style.backgroundColor="rgba(100,30,125,1)";
			document.querySelector("#main_wrapper").style.textShadow="";
			document.body.style.color="yellow";

			document.querySelector('#main_wrapper').style.borderColor="rgba(255,255,255,0.3)";
			for(var i=0;i<div_all.length;i++){
  			div_all[i].style.borderColor="yellow";
			}

		}else if(this.pageYOffset > articles_545[0].clientHeight*7/2) {
			document.body.style.backgroundImage="url('/images/dfy.png')";
			document.body.style.backgroundPosition="70% center";
			document.body.style.backgroundColor="rgba(225,130,50,1)";
			document.querySelector("#main_wrapper").style.textShadow="";
			document.body.style.color="rgba(255,255,255,0.6)";

			document.querySelector('#main_wrapper').style.borderColor="rgba(0,0,0,0.3)";
			for(var i=0;i<div_all.length;i++){
  			div_all[i].style.borderColor="rgba(0,0,0,0.4)";
			}

		}
	}else if(document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page").style.display!="none"){
		document.body.style.backgroundImage="url('/images/night.png')";
		document.body.style.backgroundPosition="center center";
		document.body.style.backgroundColor="rgba(100,30,125,1)";
		document.querySelector("#main_wrapper").style.textShadow="";
		document.body.style.color="white";

		document.querySelector('#main_wrapper').style.borderColor="rgba(0,0,0,0.3)";
		document.querySelector('#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_second_page header').style.borderColor="rgba(255,255,255,0.6)";

	}else if(document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_third_page").style.display!="none"){
		document.body.style.backgroundImage="url('/images/vgfy.png')";
		document.body.style.backgroundPosition="70% center";
		document.body.style.backgroundColor="rgba(20,110,100,1)";
		document.querySelector("#main_wrapper").style.textShadow="";
		document.body.style.color="gold";

		document.querySelector('#main_wrapper').style.borderColor="rgba(0,0,0,0.3)";
		document.querySelector("#hb_scene_upload_welcome_display_area #hb_scene_upload_welcome_third_page header").style.borderColor="gold";

	}

}

</script>
