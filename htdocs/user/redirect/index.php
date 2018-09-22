

<?php

/*
/////////////////////////////////////////////////////////////////////////////////////////////////////
					Redirection codes
/////////////////////////////////////////////////////////////////////////////////////////////////////
		-----------------------------------------------------------
		signup main verification -- 13369
		-----------------------------------------------------------
		forget password verification -- 13368
		-----------------------------------------------------------

*/
	if(isset($_GET['red'])&&!empty($_GET['red'])){
		switch($_GET['red']){
			case 13369: //for mail verification at time of signup purpose 
			$url="/user/login/sign_up/mail_verification/verify_mail.php?red=13369&";
			$url.="nx=".$_GET['nx']."&";
			$url.="ny=".$_GET['ny']."&";
			$url.="ne=".$_GET['ne']."&";
			$url.="nr=".$_GET['nr']."&";
			$url.="nrs=".$_GET['nrs']."&";
			$url.="nu=".$_GET['nu']."&";
			$url.="nb=".$_GET['nb']."&";
			$url.="np=".$_GET['np']."&";
			$url.="ni=".$_GET['ni'];
			
			header("location:".$url);
			break;
			
			case 13368: //for mail verification at time of forget password
			$url="/user/login/sign_in/forget_password/verify.php?red=13368&";
			$url.="x=".$_GET['x']."&";
			$url.="y=".$_GET['y']."&";
			$url.="z=".$_GET['z']."&";
			$url.="u=".$_GET['u'];
			
			header("location:".$url);
			break;
			
			default:
			echo "Error to redirect. Invalid direction given.";
		}
	}else{
		echo "Nothing to redirect!";
	}
?>
