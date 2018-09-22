<?php
//checking if some one access directly or not
if(isset($rootpath)){
	include $rootpath."universal/init/init_protect.php";
}else{
	die("Unautorized Entry!");
}
?>



<style>

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


	<script id="hb_search_bar_script_d5f45e">
		//alert("gh")


				hb_which_show_selected = "hb_scene_topRated";
				hb_if_searched = false;
				hb_0357view_state = false;
				hb_45479_collapse_state = true;


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
    </script>
