<?php
//checking if some ine access directly or not
if(isset($rootpath)){
include $rootpath."universal/init/init_protect.php";
}else{
include "../../../../universal/init/init_protect.php";
}



$nx=encryptData($_POST['first_name']);
$ny=encryptData($_POST['last_name']);
$ne=encryptData($_POST['email']);
$nr=encryptData(substr($rcode,0,10));
$nrs=encryptData(substr($rcode,10,10));
$nu=encryptData($_POST['username']);
$np=encryptData($_POST['phone']);
$nb=encryptData($hb_user_browser);
$ni=encryptData($hb_user_ip);

$verification_url="accounts.hazrabrothers.com/redirect/index.php?red=13369&";
$verification_url.="nx=".$nx."&";
$verification_url.="ny=".$ny."&";
$verification_url.="ne=".$ne."&";
$verification_url.="nr=".$nr."&";
$verification_url.="nrs=".$nrs."&";
$verification_url.="nu=".$nu."&";
$verification_url.="nb=".$nb."&";
$verification_url.="np=".$np."&";
$verification_url.="ni=".$ni;


//send email
$handle=fopen("mail_".$_POST['username'].".txt","w");
fwrite($handle,$verification_url);
fclose($handle);

$verification_code=encryptData($rcode);

$handle=fopen("mail_".$_POST['username']."imd.txt","w");
fwrite($handle,$verification_code);
fclose($handle);


?>
