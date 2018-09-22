<?php
/*if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']=="http://scene.hazrabrothers.com/dashboard/"){

}else{
	die("Unauthorized Entry!");
}*/
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17010;
$hb_folder_layer=2;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//include scene init
include $rootpath."scene/scene_init.php";

if($hb_user_logged_in){

}else{
	die("You are not logged in. Please <a href='http://accounts.hazrabrothers.com/login/sign_in'>Log in</a> first to go to Scene Dashboard.");
}
echo "Done:";

?>
<style>
	#main_wrapper_5239{

	}
	#main_wrapper_4578l #activity_menu_4578l{
		background-color: rgba(255,255,255,0.7);
		/*border-bottom: 1px solid rgba(255,255,255,1);*/
		text-align: center;
	}

	#main_wrapper_4578l #activity_menu_4578l [act_page]{
		display:inline-block;
		padding:10px;
		font-size: 15px;
		color:black;
		cursor:pointer;
		transition: color 0.3s,background 0.3s,border-bottom 0.3s, text-shadow 0.3s;
	}
	#main_wrapper_4578l #activity_menu_4578l [act_page]:hover{
		/*border-bottom:4px solid #57a;*/
		/*padding-bottom:6px;*/
		background-color:rgba(0,0,0,0.15);
	}
	
	/*==========================================================================*/
	/*===============----- For Left Right Menu List Shift -----=================*/
	/*==========================================================================*/
		
		#hb_main_bar_f654f{
            height:40px;
            display: inline-flex;
            width:100%;
            overflow: hidden;
        }
        #hb_main_bar_f654f #hb_but_left_564jk, #hb_main_bar_f654f #hb_but_right_564jk{
            display: inline-block;
            position: absolute;
            padding:5px;
            height:18px;
            width:18px;
            border:2px solid #57a;
            text-align: center;
            border-radius:5px;
            margin:5px;
			font-family:sans-serif;
            font-size:18px;
            background-color: white;
            cursor: pointer;
            z-index: 30;
            transform-origin: 50% 50%;
            transform:scale(0,0);
            transition: all 0.3s;
        }
        #hb_main_bar_f654f #hb_but_left_564jk{
            left:0px;
        }
        #hb_main_bar_f654f #hb_but_right_564jk{
            right:0px;
        }
        #hb_main_bar_f654f #hb_but_left_564jk:hover, #hb_main_bar_f654f #hb_but_right_564jk:hover{
            background-color: #57a;
            color:white;
        }
        #hb_main_bar_f654f #main_items_div{
            display: inline-flex;
            position: relative;
            left:0px;
            transition: left 0.3s;
        }
		
        @media screen{
			#hb_main_bar_f654f{
				overflow:auto;
			}
			#hb_main_bar_f654f::-webkit-scrollbar{
				height:0px;
				width:0px;
			}
			#hb_main_bar_f654f #hb_but_left_564jk, #hb_main_bar_f654f #hb_but_right_564jk{
				display: none;
			}
		}
</style>

<div id="main_wrapper_4578l">

	<div id="activity_menu_4578l">
		<div id="hb_main_bar_f654f">
			<div id="hb_but_left_564jk">&lt;</div>
			
			<div id="main_items_div">
				<div id="home_4578l" act_page="activity_home" hb_list="fvr">Home</div>
				<div id="likes_4578l" act_page="activity_likes" hb_list="fvr">Likes</div>
				<div id="unlikes_4578l" act_page="activity_unlikes" hb_list="fvr">Unlikes</div>
				<div id="ratings_4578l" act_page="activity_ratings" hb_list="fvr">Ratings</div>
				<div id="history_4578l" act_page="activity_history" hb_list="fvr">History</div>
				<div id="downloads_4578l" act_page="activity_downloads" hb_list="fvr">Downloads</div>
				<div id="comments_4578l" act_page="activity_comments" hb_list="fvr">Comments</div>
				<div id="reports_4578l" act_page="activity_reports" hb_list="fvr">Reports</div>
				<div id="feedbacks_4578l" act_page="activity_feedbacks" hb_list="fvr">Feedbacks</div>
				<div id="chats_4578l" act_page="activity_chats" hb_list="fvr">Chats</div>
				<div id="shares_4578l" act_page="activity_shares" hb_list="fvr">Shares</div>
				<div id="log_4578l" act_page="activity_log" hb_list="fvr">Log</div>
				<div id="more_4578l" act_page="activity_more" hb_list="fvr">More</div>
			</div>    
				
			<div id="hb_but_right_564jk">&gt;</div>
		</div>
	</div>

	<div id="activity_viewing_area_4578l">

	</div>
</div>

<script id="dashboard_response_scipt">
// first time show 'home'
send_request_4578l(document.querySelector("#main_wrapper_4578l #activity_menu_4578l #home_4578l"));
	//alert("evaled");
activity_menu_items_852k = document.querySelectorAll("#main_wrapper_4578l #activity_menu_4578l [id$=_4578l]");

for(var i=0; i<activity_menu_items_852k.length; i++){
	activity_menu_items_852k[i].addEventListener("click",function (){send_request_4578l(this)},false);
}

	function send_request_4578l(obj){
		request=new XMLHttpRequest();
		request.open("GET",obj.getAttribute("act_page")+".php",true);
		request.onreadystatechange=getResponse_4578l;
		request.send(null);
		//alert("lab");
		div_uio8=obj.id;

		for(var yu=0; yu<document.querySelectorAll("#main_wrapper_4578l #activity_menu_4578l [id$=_4578l]").length; yu++){
			document.querySelectorAll("#main_wrapper_4578l #activity_menu_4578l [id$=_4578l]")[yu].style.borderBottom="";
			document.querySelectorAll("#main_wrapper_4578l #activity_menu_4578l [id$=_4578l]")[yu].style.paddingBottom="";
		}

		document.querySelector("#main_wrapper_4578l #activity_menu_4578l #"+div_uio8).style.borderBottom="4px solid #000";
		document.querySelector("#main_wrapper_4578l #activity_menu_4578l #"+div_uio8).style.paddingBottom="6px";
		document.querySelector("#activity_viewing_area_4578l").innerHTML=splashScreen1;

	}

	function getResponse_4578l(){
		if(request.status==200 && request.readyState==4){
			//alert(request.responseText);
			//document.querySelector("#inner_right_panel").innerHTML=request.responseText;

			if(request.responseText.substr(0,6)=="Error:"){
				/////////////////for unable to connect server
				document.querySelector("#activity_viewing_area_4578l").innerHTML="There is some error! Try again.";
			}else{
				if(request.responseText.substr(0,5)=="Done:"){
					document.querySelector("#activity_viewing_area_4578l").innerHTML=request.responseText.substr(5);
					if(document.querySelector("#image_class_script_id_5697")){
						eval(document.querySelector("#image_class_script_id_5697").innerHTML);
					}
					if(document.querySelector("#hb_act_script_f4h1gwx")){
						eval(document.querySelector("#hb_act_script_f4h1gwx").innerHTML);
					}
				}else{
					///////////////tmp//////////////////////
				}
			}
		}
	}
	
	/*----------------------------------------------------------------------------------*/
	/*---------------- For Left Right Menu List Shift --------------------*/
	/*----------------------------------------------------------------------------------*/
	
	
	 hb_but_left_564jk_d5f4=document.querySelector("#hb_but_left_564jk");
        hb_but_left_564jk_d5f4.addEventListener("click",function (){move_bar_ff8d('L')},false);

        hb_but_right_564jk_d5f4=document.querySelector("#hb_but_right_564jk");
        hb_but_right_564jk_d5f4.addEventListener("click",function (){move_bar_ff8d('R')},false);
        
        main_items_div_d5f4=document.querySelector("#main_items_div");
        
        ////////////////////////////////////////////////////////////////////////////////////////////
        
        function move_bar_ff8d(direction){
            
            var main_items_div_d5f4_left = main_items_div_d5f4.getBoundingClientRect().left;
            
            var visible_width = document.querySelector("#hb_main_bar_f654f").clientWidth;
            var total_width = main_items_div_d5f4.scrollWidth;
            
            var bounce_shift = 50;
            
            ///////-------------------------------------------------------------------------/////
            if(total_width>visible_width){
            
            if(direction=="L" || direction=="l"){
                if(parseInt(main_items_div_d5f4_left)*(-1)>visible_width){
                    
                    main_items_div_d5f4.style.left=(parseInt(main_items_div_d5f4_left)+parseInt(visible_width*6/7-40*2))+'px';
                }else{
                    main_items_div_d5f4.style.left=bounce_shift+"px";
                }
            }else if(direction=="R" || direction=="r"){
                    
                //(parseInt(main_items_div_d5f4_left)-parseInt((total_width-(visible_width))*(-1)))>visible_width)
                
                if((parseInt(main_items_div_d5f4_left)-parseInt((total_width)*(-1)))>2*visible_width){
                    
                    main_items_div_d5f4.style.left=(parseInt(main_items_div_d5f4_left)-parseInt(visible_width*6/7-40*2))+'px';        
                }else{
                    main_items_div_d5f4.style.left=(parseInt((total_width-(visible_width))*(-1))-bounce_shift)+'px';
                }    
            }else{
                
            }
            
            
            setTimeout(function (){
                
                /////// reload the values of variables
                main_items_div_d5f4_left = main_items_div_d5f4.getBoundingClientRect().left;

                visible_width = document.querySelector("#hb_main_bar_f654f").clientWidth;
                total_width = main_items_div_d5f4.scrollWidth;
                
                ///////////////////////////////////////////////////////////////////////////////////////////////////////

             //alert(parseInt((total_width-(main_items_div_d5f4.clientWidth*6/7-40*2))*(-1))+" "+parseInt(main_items_div_d5f4_left)+" "+visible_width);
                
               if(parseInt(main_items_div_d5f4_left)>=0){
                    main_items_div_d5f4.style.left="0px";
                    hb_but_left_564jk_d5f4.style.transform="";
                }else{

                    hb_but_left_564jk_d5f4.style.transform="scale(1,1)";
                }

                if(parseInt(main_items_div_d5f4_left)<=parseInt((total_width-(visible_width))*(-1))){
                    main_items_div_d5f4.style.left=(total_width-(visible_width))*(-1)+"px";
                    hb_but_right_564jk_d5f4.style.transform="";
                }else{

                    hb_but_right_564jk_d5f4.style.transform="scale(1,1)";
                }
            
                if(total_width>visible_width){
                }else{
                    main_items_div_d5f4.style.left="";
                    hb_but_left_564jk_d5f4.style.transform="";
                    hb_but_right_564jk_d5f4.style.transform="";
                }
            },300);
            
            }else{
                main_items_div_d5f4.style.left="";
                hb_but_left_564jk_d5f4.style.transform="";
                hb_but_right_564jk_d5f4.style.transform="";
            }
        }
        
        move_bar_ff8d('');
        window.addEventListener("resize",function (){move_bar_ff8d('')},false);
</script>
