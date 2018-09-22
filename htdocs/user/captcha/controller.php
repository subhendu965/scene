<?php
if(isset($_SESSION['hb_captcha'])){
  unset($_SESSION['hb_captcha']);
}
$_SESSION['hb_captcha']['captcha_init']="cap429u";
if(isset($rootpath)){

}else{
  $rootpath="../../";
}
  $captcha_selected=$rootpath."user/captcha/simple_one_word_text/simple_one_word_text.php";
  $_SESSION['hb_captcha']['selected_captcha']="smowtxt8g5Mo3k"; //for simple_one_word_text
  //echo $captcha_selected;
  require_once($captcha_selected);
?>
