<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17006;
$hb_folder_layer=2;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

if(isset($_SESSION['hb_captcha']['captcha_init']) && $_SESSION['hb_captcha']['captcha_init']=="cap429u"){
	if(isset($_SESSION['hb_captcha']['selected_captcha'])){

    switch($_SESSION['hb_captcha']['selected_captcha']){
      case "smowtxt8g5Mo3k":
        verify_simple_one_word_text();
        break;
      default:
        break;
    }

  }else{
    die();
  }
}else{
  die();
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function verify_simple_one_word_text(){
  global $_POST;

  if(isset($_SESSION['hb_captcha']['selected_captcha_model'])){
    switch ($_SESSION['hb_captcha']['selected_captcha_model']) {
      case 'm1Pb9Hyo3k':
        if(isset($_POST['reqans'])){

          if(isset($_SESSION['hb_captcha']['simple_one_word_text']) && $_SESSION['hb_captcha']['simple_one_word_text']==$_POST['reqans']){
            $_SESSION['hb_captcha']['isverified']="Im6fL24";
            echo "Done:Captcha Verified!";
          }else{
            echo "Error:Invalid Captcha.";
            if(isset($_SESSION['hb_captcha']['isverified'])){
              unset($_SESSION['hb_captcha']['isverified']);
            }
          }
        }else{
          echo "Error:Invalid Captcha.";
          if(isset($_SESSION['hb_captcha']['isverified'])){
            unset($_SESSION['hb_captcha']['isverified']);
          }
        }
        break;

      default:
        break;
    }
  }else{
    die();
  }
}
?>
