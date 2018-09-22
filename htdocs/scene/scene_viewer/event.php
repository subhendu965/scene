<?php
//checking if some one access directly or not
if(isset($rootpath)){
	include $rootpath."universal/init/init_protect.php";
}else{
	die("Unautorized Entry!");
}
?>
<script>
	window.addEventListener('load',hb_scene_load,false);
	window.addEventListener('resize',hb_scene_resize,false);

	document.querySelector("div#hb_scene_viewer").addEventListener('click',collapse_all_forms,false);
function hb_scene_load(){
document.querySelector("div#hb_scene_viewer #image").style.height=window.innerHeight-document.querySelector("div#hb_scene_viewer #hb_scene_header_viewer").clientHeight;

	//making an ajax request to load
	//alert("ds");
	replyOpenArray="";
	comment_univ_request=new XMLHttpRequest();
	postString="sqc=mlo4B6rt&replyOpenArray="+replyOpenArray+"&";
	postString+="url="+globalSearchUrl;
	comment_univ_request.open("POST","../comment.php",true);
	comment_univ_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	comment_univ_request.onreadystatechange=getCommentDetailsUnivResponse;
	comment_univ_request.send(postString);
	document.querySelector("#scene_viewer_comment_container_52lm").innerHTML="Loading comments ...";
	//alert(postString);

}

function hb_scene_resize(){

//for setting height of footer
document.getElementById("footer_blank_0032").style.height=(document.getElementById("hb_scene_footer").getBoundingClientRect().height)+"px";

document.querySelector("div#hb_scene_viewer #image").style.height=window.innerHeight-document.querySelector("div#hb_scene_viewer #hb_scene_header_viewer").clientHeight;

}

function collapse_all_forms(e){
	//collapse rating details
	if(e.target==document.querySelector("div#hb_scene_viewer #rating")){ //just for conflict of button

	}else{
		//setting flag first
		var flag=0;

		//check again if the target belongs the list of actual details
		var elem_nm89=document.querySelectorAll("div#hb_scene_viewer div#hb_scene_viewer_rating_details *");
		for(var i=0;i<elem_nm89.length;i++){
			if(e.target==elem_nm89[i]){
				flag=1;
			}
		}

		if(flag){

		}else{
			document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.height="0px";
			document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.width="0px";

			document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.left="10px";

			document.querySelector("div#hb_scene_viewer #hb_scene_viewer_rating_details").style.opacity="0";

			bln_hb_scene_viewer_rating_details=false;
			bln_hb_scene_viewer_rating_details_over=false;
			document.querySelector("div#hb_scene_viewer #rating").style.backgroundColor="transparent";

		}

	}

}

</script>
