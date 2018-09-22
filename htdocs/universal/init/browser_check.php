<?php
//checking if some ine access directly or not
include "init_protect.php";

include $rootpath."universal/third_party/Browser.php";

$br=new Browser();
$hb_user_browser = $br->getBrowser()." ".$br->getVersion();

?>
