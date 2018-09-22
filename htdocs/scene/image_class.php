<?php
//checking if some one access directly or not
if(isset($rootpath)){
	include $rootpath."universal/init/init_protect.php";
}else{
	die("Unautorized Entry!");
}
//////////////////////////////////////////////////////////////////////////
include "scene_init.php";

class image{
	private $imageUrl;
	private $url;
	private $thumbnailUrl;
	private $xmlUrl;
	private $id;

	private $name;
	private $description;
	private $category;
	private $height;
	private $width;
	private $filesize;
	private $quality;
	private $type;
	private $date;
	private $time;
	private $uploaded_by;
	private $rating;
	private $liked;
	private $unliked;
	private $privacy;
	private $album;
	private $totalview;
	private $download;

	//constructor
	public function __construct($url){
		global $hb_scene_db;
		//fetch uploaded_by form hb_scene_images
		$query="SELECT uploaded_by FROM hb_scene_images WHERE url='".$url."' LIMIT 1";
		if($rowus=mysqli_query($hb_scene_db,$query)){
			$rowu=mysqli_fetch_array($rowus,MYSQLI_BOTH);

			if($rowu['uploaded_by']=="HB"){
				$uploaded_by="HB";
			}else{
				//fetch username hb_scene_pages
				$query="SELECT username FROM hb_scene_pages WHERE uploader_id='".$rowu['uploaded_by']."' LIMIT 1";
				if($rows=mysqli_query($hb_scene_db,$query)){
					$row=mysqli_fetch_array($rows,MYSQLI_BOTH);
					$uploaded_by=$row['username'];
				}
			}
		}



		$this->url=$url;
		if($uploaded_by=="HB"){
			//for hazrabrothers
			$this->imageUrl="http://scene.hazrabrothers.com/hb_gallery/".$url;
			$this->xmlUrl=$this->imageUrl.".xml";
			$this->thumbnailUrl="/hb_gallery/thumbnail/".$url;
		}else{
			//for other users
			$this->imageUrl="http://scene.hazrabrothers.com/user_gallery/user_".$uploaded_by."/".$url;
			$this->xmlUrl=$this->imageUrl.".xml";
			$this->thumbnailUrl="/user_gallery/user_".$uploaded_by."/thumbnail/".$url;
		}

		//get properties from xml
		$this->getXML($this->xmlUrl);

		//get properties from database
		$this->getData($url);
	}

	//set part for all the functions
	public function __set($prop,$val){
		switch($prop){
			case "name":
				$this->name=$val;
				break;
			case "category":
				$this->category=$val;
				break;
			case "width":
				$this->width=$val;
				break;
			case "height":
				$this->height=$val;
				break;
			case "filesize":
				$this->filesize=$val;
				break;
			case "quality":
				$this->quality=$val;
				break;
			case "type":
				$this->type=$val;
				break;
			case "description":
				$this->description=$val;
				break;
			case "date":
				$this->date=$val;
				break;
			case "time":
				$this->time=$val;
				break;
			case "uploaded_by":
				$this->uploaded_by=$val;
				break;
			case "rating":
				$this->rating=$val;
				break;
			case "liked":
				$this->liked=$val;
				break;
			case "unliked":
				$this->unliked=$val;
				break;
			case "privacy":
				$this->privacy=$val;
				break;
			case "view":
				$this->view=$val;
				break;
			case "download":
				$this->download=$val;
				break;
			case "album":
				$this->album=$val;
				break;
			case "id":
				$this->id=$val;
				break;

		}
	}

	//set part for all the functions
	public function __get($prop){
		switch($prop){
			case "name":
				return $this->name;
				break;
			case "category":
				return $this->category;
				break;
			case "width":
				return $this->width;
				break;
			case "height":
				return $this->height;
				break;
			case "filesize":
				return $this->filesize;
				break;
			case "quality":
				return $this->quality;
				break;
			case "type":
				return $this->type;
				break;
			case "description":
				return $this->description;
				break;
			case "date":
				$this->date;
				break;
			case "time":
				$this->time;
				break;
			case "uploaded_by":
				return $this->uploaded_by;
				break;
			case "rating":
				return $this->rating;
				break;
			case "liked":
				return $this->liked;
				break;
			case "unliked":
				return $this->unliked;
				break;
			case "privacy":
				return $this->privacy;
				break;
			case "view":
				return $this->view;
				break;
			case "download":
				return $this->download;
				break;
			case "album":
				return $this->album;
				break;
			case "id":
				return $this->id;
				break;


		}
	}

	//function getXML
	private function getXML($xmlUrl){
		$xml=simplexml_load_file($xmlUrl);
		$this->quality=$xml->quality;
		$this->description=$xml->description;
	}

	//get data from database
	private function getData($url){
		global $hb_scene_db;
		$query="SELECT name,date,time,category,type,album,uploaded_by,view,download,width,height,filesize,liked,unliked,privacy,(rate1*1+rate2*2+rate3*3+rate4*4+rate5*5)/(rate1+rate2+rate3+rate4+rate5) AS rating FROM hb_scene_images WHERE url='".$url."' LIMIT 1";
		if($rows=mysqli_query($hb_scene_db,$query)){
			if($row=mysqli_fetch_array($rows,MYSQLI_BOTH)){
				$this->name=$row['name'];
				$this->category=$row['category'];
				$this->time=$row['time'];
				$this->date=$row['date'];
				$this->type=$row['type'];
				$this->album=$row['album'];
				$this->uploaded_by=$row['uploaded_by'];
				$this->view=$row['view'];
				$this->download=$row['download'];
				$this->filesize=$row['filesize'];
				$this->width=$row['width'];
				$this->height=$row['height'];
				$this->rating=$row['rating'];
				$this->liked=$row['liked'];
				$this->unliked=$row['unliked'];
				$this->privacy=$row['privacy'];
			}else{
				echo "something wrong";
			}
		}
	}


	//show the image
	public function showImage(){
		$quality_background_color="white";
		$quality_text_color="white";
		switch($this->quality){
			case "L":
				$quality_background_color="#e11e04";
				$quality_text_color="white";
				break;
			case "M":
				$quality_background_color="#feab10";
				$quality_text_color="brown";
				break;
			case "N":
				$quality_background_color="#0dc644";
				$quality_text_color="white";
				break;
			case "G":
				$quality_background_color="#d2ff00";
				$quality_text_color="black";
				break;
			case "V":
				$quality_background_color="#02dcab";
				$quality_text_color="black";
				break;
			case "E":
				$quality_background_color="#0862f8";
				$quality_text_color="white";
				break;
			case "O":
				$quality_background_color="#8305cd";
				$quality_text_color="white";
				break;
		}


		$extention=strtolower(substr($this->thumbnailUrl,strpos($this->thumbnailUrl,".",30)+1));

		/*switch($extention){
			case "jpeg":
			case "jpg":
				$forWidthImg=imageCreateFromJpeg($this->thumbnailUrl);
				break;
			case "gif":
				$forWidthImg=imageCreateFromGif($this->thumbnailUrl);
				break;
			case "png":
				$forWidthImg=imageCreateFromPng($this->thumbnailUrl);
				break;
		}*/


		if($this->filesize<=1024*1024){
			$filesizeToShow=number_format((($this->filesize)/1024))." KiB";
		}else{
			$filesizeToShow=number_format((($this->filesize)/1024/1024),2)." MiB";
		}

		echo "
		<a class='hb_scene_image_link' href=javascript:hb_scene_show_image('".encryptData((string)$this->url)."')>
		<div class='hb_scene_image_container' id='".$this->id."' >
		<!-- div class='hb_scene_image_container' id='".$this->id."' onmouseover='hb_over_image(this)'  onmouseout='hb_out_image(this)' -->



				<div style='background-image:url(\"".$this->thumbnailUrl."\");' class='hb_scene_image'></div>
				<div class='hb_scene_image_name' style='top:-150px;'>
				<div class='hb_scene_image_quality_div' style='background:".$quality_background_color."; color:".$quality_text_color.";'>
					".$this->quality."
				</div>

				<div class='imageName' title='".$this->name."'><pre class='imageNamePre'>".$this->name."</pre>
				</div>

				</div>

				<div class='hb_scene_image_bottom_div'>

				<div class='hb_scene_image_bottom_like_div'>

					<div class='hb77image_789_like'>
						<div class='hb77image_img'>&nbsp;</div>
						<div class='hb77image_text'>".$this->liked."</div>
					</div>

					<div class='hb77image_789_unlike'>
						<div class='hb77image_img'>&nbsp;</div>
						<div class='hb77image_text'>".$this->unliked."</div>
					</div>

				</div>

				<div class='hb_scene_image_bottom_left_part'>

				<div class='hb_scene_image_bottom_rvd_div'>

					<div id='hbi_rvd_p_1'>
						<div>&nbsp;</div>
						<div class='hb_scene_image_bottom_rvd_rating_div'>
							".number_format($this->rating,1)."
						</div>
					</div>

					<div id='hbi_rvd_p_2'>
						<div>&nbsp;</div>
						<div class='hb_scene_image_bottom_rvd_view_div'>
							".$this->view."
						</div>
					</div>

					<div id='hbi_rvd_p_3'>
						<div>&nbsp;</div>
						<div class='hb_scene_image_bottom_rvd_download_div'>
							".$this->download."
						</div>
					</div>
				</div>

				<div class='hb_scene_image_bottom_size_div' style='font-style:italic; clear:both;'>

					<div  class='hb_scene_image_bottom_size_width_div'>
						".$this->width."&nbsp;X
					</div>

					<div  class='hb_scene_image_bottom_size_height_div'>
						".$this->height."
					</div>

					<div  class='hb_scene_image_bottom_size_filesize_div'>
						".$filesizeToShow."
					</div>
				</div>



			</div>

			</div>

		</div>
		</a>
		";

		//imagedestroy($forWidthImg);
	}


}

?>
<script id="image_class_script_id_5697">

/*************************************************************************************************************************
SCRIPTS are at the parent page
*************************************************************************************************************************/
//alert("hop2");
images_85632=document.querySelectorAll(".hb_scene_image_container");

for(var i=0; i<images_85632.length; i++){
	images_85632[i].addEventListener("mouseover",function (){hb_over_image(this)},false);
	images_85632[i].addEventListener("mouseout",function (){hb_out_image(this)},false);

}

	function hb_scene_image_name_scroll(img){
				if(document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').offsetLeft<-1*parseInt(document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').getBoundingClientRect().width)){
					//clearInterval(hb_scene_image_scroll_timer);
					document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').style.left="";
					document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').style.left=document.querySelector('#'+img.id+' .hb_scene_image_name').getBoundingClientRect().width;
				}
				document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').style.left=document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').offsetLeft-50;

				//document.title=document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').offsetLeft;
				//alert("adsa");

	}


function hb_over_image(img){
	/*document.querySelector("#"+img.id+" .hb_scene_image_name").style.opacity="1";
	document.querySelector("#"+img.id+" .hb_scene_image_bottom_div").style.opacity="1";*/
//alert((document.querySelector("#"+img.id+" .hb_scene_image_name .imageName .imageNamePre").getBoundingClientRect().width))
	if(parseInt(document.querySelector("#"+img.id+" .hb_scene_image_name .imageName .imageNamePre").getBoundingClientRect().width) > parseInt(document.querySelector("#"+img.id+" .hb_scene_image_name .imageName").getBoundingClientRect().width)){
		
		document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').style.left=(document.querySelector('#'+img.id+' .hb_scene_image_name .imageName').getBoundingClientRect().width)/3;
		hb_scene_image_scroll_timer=setInterval(hb_scene_image_name_scroll,100,img);

	}

}

function hb_out_image(img){
	/*document.querySelector("#"+img.id+" .hb_scene_image_name").style.opacity="";
	document.querySelector("#"+img.id+" .hb_scene_image_bottom_div").style.opacity="";*/
	//document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').style.left=0;

	if(parseInt(document.querySelector("#"+img.id+" .hb_scene_image_name .imageName .imageNamePre").getBoundingClientRect().width) > parseInt(document.querySelector("#"+img.id+" .hb_scene_image_name .imageName").getBoundingClientRect().width)){

		document.querySelector('#'+img.id+' .hb_scene_image_name .imageName .imageNamePre').style.left=(document.querySelector('#'+img.id+' .hb_scene_image_name .imageName').getBoundingClientRect().width)/3;
		clearInterval(hb_scene_image_scroll_timer);
	}
}
</script>
<style>

@media screen and (min-width:900px){
	.hb_scene_image_container{
		height:150px;
	}
	.hb_scene_image_container .hb_scene_image_bottom_div{
		position:relative;
		top:-70px;
	}
	.hb_scene_image_container .hb_scene_image_name{
		opacity:0;
		background:rgba(0,0,0,0.35);
		padding:5px;
	}
	.hb_scene_image_container .hb_scene_image_bottom_div{
		opacity: 0;
		background:rgba(0,0,0,0.35);
		padding-top:3px;
	}
	/*--------------------*/
	.hb_scene_image_container:hover .hb_scene_image_name{
		opacity:1;
	}
	.hb_scene_image_container:hover .hb_scene_image_bottom_div{
		opacity:1;
	}
}

@media screen and (max-width:899px){
	.hb_scene_image_container{
		padding: 2px;
		border-radius: 5px;
		box-shadow: rgba(0,0,0,0.6) 0.5px 0.5px 3px 1px;
	}
	.hb_scene_image_container .hb_scene_image{
		position: relative;
		top:30px;
		border-left: 1px solid rgba(80,100,120,0.3);
		border-right:1px solid rgba(80,100,120,0.3);
	}
	.hb_scene_image_container .hb_scene_image_name{
		background:rgba(80,100,120,1);
		border-radius: 4px 4px 0px 0px;
		padding:5px 5px 4px 5px;
		border-bottom: 1px solid rgba(0,0,0,0.5);
	}
	.hb_scene_image_container .hb_scene_image_bottom_div{
		background:rgba(80,100,120,1);
		border-radius: 0px 0px 4px 4px;
		padding-top:2px;
		border-top: 1px solid rgba(0,0,0,0.5);
	}
}

/*------------------------------------------------------------------------------------------------*/

.hb_scene_image_link{
	text-decoration:none;
}
/*------------------------------------------------------------------------------------------------*/
.hb_scene_image_container .hb_scene_image_name{
	position:relative;
	font-size:15px;
	height:20px;
	color:white;
	transition:opacity 0.3s;
}
.hb_scene_image_container .hb_scene_image_name .imageName{
	overflow:hidden;
	height:20px;
}
.hb_scene_image_container .hb_scene_image_name .imageNamePre{
	margin:0px;
	position:absolute;
	transition:left 1s;
	font-family:montserrat_regular;
}
/*------------------------------------------------------------------------------------------------*/
.hb_scene_image_container .hb_scene_image{
	width:223px;
	height:150px;
	margin:auto;
	background-size:contain;
	background-repeat:no-repeat;
	background-position:center center;
}
.hb_scene_image_container .hb_scene_image_bottom_div{
	height:40px;
	color:white;
	overflow:auto;
	transition:opacity 0.3s;
}
.hb_scene_image_container .hb_scene_image_details>div{
	padding:5px;
}
/*-------------------------------------------------------------------------------------------*/

/*-------------------------------------------------------------------------------------------*/
.hb_scene_image_container{
	display:inline-block;
	width:225px;
	font-size:15px;
	margin:5px;
	overflow:hidden;
	background:rgba(17,34,68,0.1);
	/*background:url("./images/transparent_tile.png") repeat, rgba(17,34,68,0.9);*/
	border:1px solid transparent;
	font-family:montserrat_regular;
}
.hb_scene_image_container:hover{
	border:1px solid rgba(0,0,0,0.2);
}
.hb_scene_image_container .hb_scene_image_bottom_div{

}
.hb_scene_image_container .hb_scene_image_bottom_left_part{
	float:left;
}
/*---------------------------------------------------------------------------------*/
	.hb_scene_image_container .hb_scene_image_bottom_like_div{
		float:right;
	}

	.hb_scene_image_container .hb77image_789_like{
		display: inline-block;
		margin:2px 2px 0px 0px;
	}

	.hb_scene_image_container .hb77image_789_like .hb77image_img{
		width:18px;
		height:18px;
		background-image:url("/images/logo_like.png");
		background-size:contain;
		background-position: center center;
		background-repeat:no-repeat;
		margin:auto;
	}

	.hb_scene_image_container .hb77image_789_like .hb77image_text{
		font-size:10px;
		margin-top:2px;
	}



	.hb_scene_image_container .hb77image_789_unlike{
		display: inline-block;
		margin:2px 5px 0px 2px;
	}

	.hb_scene_image_container .hb77image_789_unlike .hb77image_img{
		width:18px;
		height:18px;
		background-image:url("/images/logo_unlike.png");
		background-size:contain;
		background-position: center center;
		background-repeat:no-repeat;
		margin:auto;
	}

	.hb_scene_image_container .hb77image_789_unlike .hb77image_text{
		font-size:10px;
		margin-top:2px;
	}

/*---------------------------------------------------------------------------------*/
.hb_scene_image_container .hb_scene_image_bottom_rvd_div{
	font-size:10px;
	padding: 2px 0px 1px 0px;
	text-align:left;
}
.hb_scene_image_container .hb_scene_image_bottom_rvd_rating_div{
	/*color:rgba(0,0,0,0.7);*/
	padding:0px 0px 0px 4px;
	float:left;
}
.hb_scene_image_container .hb_scene_image_bottom_rvd_view_div{
	/*color:rgba(0,0,0,0.7);*/
	padding:0px 0px 0px 4px;
	float:left;
}
.hb_scene_image_container .hb_scene_image_bottom_rvd_download_div{
	/*color:rgba(0,0,0,0.7);*/
	padding:0px 0px 0px 4px;
	float:left;
}
.hb_scene_image_container div[id^='hbi_rvd_p_']{
	display:inline-block;
	margin-left:5px;
}
.hb_scene_image_container div[id^='hbi_rvd_p_']>div{
	display:inline-block;
}
.hb_scene_image_container div[id^='hbi_rvd_p_']>div:first-child{
	display:inline-block;
	float:left;
	width:10px;
	height:12px;
	background-size:contain;
	background-position: center center;
	background-repeat:no-repeat;
}
.hb_scene_image_container div#hbi_rvd_p_1 > div:first-child{
	background-image:url("/images/logo_rating.png");
}
.hb_scene_image_container div#hbi_rvd_p_2 > div:first-child{
	background-image:url("/images/logo_view.png");
}
.hb_scene_image_container div#hbi_rvd_p_3 > div:first-child{
	background-image:url("/images/logo_download.png");
}

/*---------------------------------------------------------------------------------*/
.hb_scene_image_container .hb_scene_image_bottom_size_div{
	font-size:10px;
	padding: 1px 0px 2px 0px;
}
.hb_scene_image_container .hb_scene_image_bottom_size_width_div{
	/*color:rgba(0,0,0,0.7);*/
	padding:0px 4px;
	padding-right:1px;
	float:left;
}
.hb_scene_image_container .hb_scene_image_bottom_size_height_div{
	/*color:rgba(0,0,0,0.7);*/
	 padding:0px 4px;
	 padding-left:1px;
	 float:left;
}
.hb_scene_image_container .hb_scene_image_bottom_size_filesize_div{
	/*color:rgba(0,0,0,0.7);*/
	padding:0px 4px;
	padding-left:10px;
	float:left;
}
/*---------------------------------------------------------------------------------*/
.hb_scene_image_container .hb_scene_image_quality_div{
	float:right;
	position:relative;
	font-size:10px;
	height:10px;
	width:10px;
	padding:4px 5px 6px 5px;
	text-align:center;
	border-radius:20px;
	z-index:11;
}
</style>
