<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17006;
$hb_folder_layer=3;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";


////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_SESSION['hb_captcha']['captcha_init']) && $_SESSION['hb_captcha']['captcha_init']=="cap429u"){
	if(isset($_SESSION['hb_captcha']['selected_captcha']) && $_SESSION['hb_captcha']['selected_captcha']=="smowtxt8g5Mo3k"){
		if(isset($_SESSION['hb_captcha']['selected_captcha_model']) && $_SESSION['hb_captcha']['selected_captcha_model']=="m1Pb9Hyo3k"){

	  }else{
	    die();
	  }
  }else{
    die();
  }
}else{
  die();
}


$width=200;
$height=100;

$background_random_red=rand(0,255);
$background_random_green=rand(0,255);
$background_random_blue=rand(0,255);

$image=imagecreate($width,$height);
$background=imagecolorallocate($image,$background_random_red,$background_random_green,$background_random_blue);

///////////////spread circles randomly 5 to 10 circles//////
for($i=0;$i<rand(25,50);$i++){
  $center_random_x=rand(0,$width);
  $center_random_y=rand(0,$width);
  $radius_random=rand(5,20);

  $color_random_circle_red=rand(0,255);
  $color_random_circle_green=rand(0,255);
  $color_random_circle_blue=rand(0,255);

  $color_random_circle=imagecolorallocate($image,$color_random_circle_red,$color_random_circle_green,$color_random_circle_blue);
  //////////ellipse/////////
  imagefilledellipse($image,$center_random_x,$center_random_y,$radius_random,$radius_random,$color_random_circle);
}

///////////////spread circles randomly 5 to 10 circles//////
for($i=0;$i<rand(50,100);$i++){

}


$font_array=Array("freebold.ttf","itc_krit.ttf","pubis.ttf");
$font_number=rand(0,2);
$font_path=$rootpath."user/fonts/".$font_array[$font_number];

$randomAngle=rand(-35,35);
//$randomAngle=0;
$random_font_size=rand(20,25);
$random_x_position=rand(10,$width/2);
$font_size=$random_font_size;

$length_of_text=($font_size*6);
$height_of_text=$font_size;
$vertical_length=$length_of_text*sin((M_PI/180)*$randomAngle);

if($randomAngle>=0){
  $random_y_position=($height/2)+($vertical_length/2)+($height_of_text/2);
}else{
  $random_y_position=($height/2)-($height_of_text/2);
}

if(($random_x_position+$length_of_text*cos((M_PI/180)*$randomAngle))>$width){
  $random_x_position=$random_x_position-$length_of_text*cos((M_PI/180)*$randomAngle)*0.5;
}
if(($random_y_position+$length_of_text*sin((M_PI/180)*$randomAngle)+$height_of_text)>$height){
  $random_y_position=$random_y_position-$length_of_text*sin((M_PI/180)*$randomAngle)*0.5;
}

if(($random_y_position-$length_of_text*sin((M_PI/180)*$randomAngle)-$height_of_text)<0){
  $random_y_position=$random_y_position+$length_of_text*sin((M_PI/180)*$randomAngle)*0.5;
}


$x_position=$random_x_position;
$y_position=$random_y_position;
$rotation_angle=$randomAngle;

///////////////////////text color/////////////////////////////
/*do{
  $text_color_red=rand(0,255);
  if($text_color_red<$background_random_red-50 || $text_color_red>$background_random_red+50){
    break;
  }else{
    continue;
  }
}while(1);

do{
  $text_color_green=rand(0,255);
  if($text_color_green<$background_random_green-50 || $text_color_green>$background_random_green+50){
    break;
  }else{
    continue;
  }
}while(1);

do{
  $text_color_blue=rand(0,255);
  if($text_color_blue<$background_random_blue-50 || $text_color_blue>$background_random_blue+50){
    break;
  }else{
    continue;
  }
}while(1);*/
$text_color_red=255-$background_random_red;
$text_color_green=255-$background_random_green;
$text_color_blue=255-$background_random_blue;
$text_color=imagecolorallocate($image,$text_color_red,$text_color_green,$text_color_blue);
/////////////////////////////////////////////////

$image_text=substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"),0,6);
$_SESSION['hb_captcha']['simple_one_word_text']=$image_text;

  $position_of_text=imagefttext($image,$font_size,$rotation_angle,$x_position,$y_position,$text_color,$font_path,$image_text);

/////////////////////spread circles randomly 5 to 10 circles//////
  for($i=0;$i<rand(25,50);$i++){
    $center_random_x=rand(0,$width);
    $center_random_y=rand(0,$width);
    $radius_random=rand(5,20);

    $color_random_circle_red=rand(0,255);
    $color_random_circle_green=rand(0,255);
    $color_random_circle_blue=rand(0,255);

    $color_random_circle=imagecolorallocate($image,$color_random_circle_red,$color_random_circle_green,$color_random_circle_blue);
    //////////ellipse/////////
    imageellipse($image,$center_random_x,$center_random_y,$radius_random,$radius_random,$color_random_circle);
  }
////////////////////////////////////////////////////////////////////

$lower_left_x=$position_of_text[0];
$lower_left_y=$position_of_text[1];
$lower_right_x=$position_of_text[2];
$lower_right_y=$position_of_text[3];
$upper_right_x=$position_of_text[4];
$upper_right_y=$position_of_text[5];
$upper_left_x=$position_of_text[6];
$upper_left_y=$position_of_text[7];

///////////////////////////main scratch///////////////////////////////


$mode_main_scratch=rand(0,1);
$extra_scratch=rand(10,50);
if($randomAngle>=0){
  $main_scratch_c1_x=$lower_left_x-$extra_scratch;
  $main_scratch_c1_y=$lower_left_y;
  $main_scratch_c2_x=$upper_right_x+$extra_scratch;
  $main_scratch_c2_y=$upper_right_y;

} else{
  $main_scratch_c1_x=$upper_left_x-$extra_scratch;
  $main_scratch_c1_y=$upper_left_y;
  $main_scratch_c2_x=$lower_right_x+$extra_scratch;
  $main_scratch_c2_y=$lower_right_y;
}

$main_scratch_color_red=rand(0,255);
$main_scratch_color_green=rand(0,255);
$main_scratch_color_blue=rand(0,255);
$main_scratch_color=imagecolorallocate($image,$main_scratch_color_red,$main_scratch_color_green,$main_scratch_color_blue);

imageline($image,$main_scratch_c1_x,$main_scratch_c1_y-1,$main_scratch_c2_x,$main_scratch_c2_y-1,$main_scratch_color);
imageline($image,$main_scratch_c1_x,$main_scratch_c1_y,$main_scratch_c2_x,$main_scratch_c2_y,$main_scratch_color);
imageline($image,$main_scratch_c1_x,$main_scratch_c1_y+1,$main_scratch_c2_x,$main_scratch_c2_y+1,$main_scratch_color);

//header("content-type:image/png");
imagepng($image);
imagedestroy($image);
?>
