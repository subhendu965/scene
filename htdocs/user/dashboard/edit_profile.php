<?php
/*if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']=="http://accounts.hazrabrothers.com/dashboard/"){

}else{
	die("Unauthorized Entry!");
}*/
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

if(!$hb_user_logged_in){
	die("<a href='/user/login/sign_in/'>Log In</a> first to manage your Hazra Brothers account");
}
if(isset($_POST)){
  $flag=0;
	$user_data_path=$rootpath."user/users/user_".$_SESSION['hb_user']['username']."/user_data/";
  foreach ($_POST as $field => $value) {
    switch($field){
      case "first_name":
        if(validateFirstName($value)){
          $query="UPDATE hb_user_main_biodata SET first_name='".mysqli_real_escape_string($hb_db,$value)."' WHERE user_id='".mysqli_real_escape_string($hb_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
          if(mysqli_query($hb_db,$query)){
						if(file_exists($user_data_path."user_first_name_history.xml")){
							$xml=simplexml_load_file($user_data_path."user_first_name_history.xml");
							$tmpxml=new SimpleXMLElement($xml->asXML());
							$newcomment=$tmpxml->addChild("first_name");
							$newcomment->addChild("value",$value);
							$newcomment->addChild("date",date("Y-m-d"));
							$newcomment->addChild("time",date("H:i:s"));
							$newcomment->addChild("os",$hb_user_os);
							$newcomment->addChild("browser",$hb_user_browser);
							$newcomment->addChild("ip",$_SERVER['REMOTE_ADDR']);
							$tmpxml->asXML($user_data_path."user_first_name_history.xml");
							$flag=0;
						}else{
							$flag+=1;
							echo "Error: Unable to set first name.";
						}
          }else{
            $flag=$flag+1;
            echo "Error: Unable to set first name.";
          }

        }
        break;
      case "last_name":
        if(validateLastName($value)){
          $query="UPDATE hb_user_main_biodata SET last_name='".mysqli_real_escape_string($hb_db,$value)."' WHERE user_id='".mysqli_real_escape_string($hb_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
          if(mysqli_query($hb_db,$query)){
						if(file_exists($user_data_path."user_last_name_history.xml")){
							$xml=simplexml_load_file($user_data_path."user_last_name_history.xml");
							$tmpxml=new SimpleXMLElement($xml->asXML());
							$newcomment=$tmpxml->addChild("last_name");
							$newcomment->addChild("value",$value);
							$newcomment->addChild("date",date("Y-m-d"));
							$newcomment->addChild("time",date("H:i:s"));
							$newcomment->addChild("os",$hb_user_os);
							$newcomment->addChild("browser",$hb_user_browser);
							$newcomment->addChild("ip",$_SERVER['REMOTE_ADDR']);
							$tmpxml->asXML($user_data_path."user_last_name_history.xml");
							$flag=0;
						}else{
							$flag+=1;
							echo "Error: Unable to set last name.";
						}
          }else{
            $flag=$flag+1;
            echo "Error: Unable to set last name.";
          }
        }
        break;
      case "dob":
        if(validateDOB($value)){
          $query="UPDATE hb_user_main_biodata SET dob='".mysqli_real_escape_string($hb_db,$value)."' WHERE user_id='".mysqli_real_escape_string($hb_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
          if(mysqli_query($hb_db,$query)){
						if(file_exists($user_data_path."user_dob_history.xml")){
							$xml=simplexml_load_file($user_data_path."user_dob_history.xml");
							$tmpxml=new SimpleXMLElement($xml->asXML());
							$newcomment=$tmpxml->addChild("dob");
							$newcomment->addChild("value",$value);
							$newcomment->addChild("date",date("Y-m-d"));
							$newcomment->addChild("time",date("H:i:s"));
							$newcomment->addChild("os",$hb_user_os);
							$newcomment->addChild("browser",$hb_user_browser);
							$newcomment->addChild("ip",$_SERVER['REMOTE_ADDR']);
							$tmpxml->asXML($user_data_path."user_dob_history.xml");
							$flag=0;
						}else{
							$flag+=1;
							echo "Error: Unable to set date of birth.";
						}
          }else{
            $flag=$flag+1;
            echo "Error: Unable to set date of birth.";
          }
        }
        break;
      case "gender":
        if(validateGender($value)){
          $query="UPDATE hb_user_main_biodata SET gender='".mysqli_real_escape_string($hb_db,$value)."' WHERE user_id='".mysqli_real_escape_string($hb_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
          if(mysqli_query($hb_db,$query)){
						if(file_exists($user_data_path."user_gender_history.xml")){
							$xml=simplexml_load_file($user_data_path."user_gender_history.xml");
							$tmpxml=new SimpleXMLElement($xml->asXML());
							$newcomment=$tmpxml->addChild("gender");
							$newcomment->addChild("value",$value);
							$newcomment->addChild("date",date("Y-m-d"));
							$newcomment->addChild("time",date("H:i:s"));
							$newcomment->addChild("os",$hb_user_os);
							$newcomment->addChild("browser",$hb_user_browser);
							$newcomment->addChild("ip",$_SERVER['REMOTE_ADDR']);
							$tmpxml->asXML($user_data_path."user_gender_history.xml");
							$flag=0;
						}else{
							$flag+=1;
							echo "Error: Unable to set gender.";
						}
          }else{
            $flag=$flag+1;
            echo "Error: Unable to set gender.";
          }
        }
        break;
      case "address":
        if(validateAddress($value)){
          $query="UPDATE hb_user_main_biodata SET address='".mysqli_real_escape_string($hb_db,$value)."' WHERE user_id='".mysqli_real_escape_string($hb_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
          if(mysqli_query($hb_db,$query)){
						if(file_exists($user_data_path."user_address_history.xml")){
							$xml=simplexml_load_file($user_data_path."user_address_history.xml");
							$tmpxml=new SimpleXMLElement($xml->asXML());
							$newcomment=$tmpxml->addChild("address");
							$newcomment->addChild("value",$value);
							$newcomment->addChild("date",date("Y-m-d"));
							$newcomment->addChild("time",date("H:i:s"));
							$newcomment->addChild("os",$hb_user_os);
							$newcomment->addChild("browser",$hb_user_browser);
							$newcomment->addChild("ip",$_SERVER['REMOTE_ADDR']);
							$tmpxml->asXML($user_data_path."user_address_history.xml");
							$flag=0;
						}else{
							$flag+=1;
							echo "Error: Unable to set address.";
						}
          }else{
            $flag=$flag+1;
            echo "Error: Unable to set address.";
          }
        }
        break;
      case "pincode":
        if(validatePincode($value)){
          $query="UPDATE hb_user_main_biodata SET pincode='".mysqli_real_escape_string($hb_db,$value)."' WHERE user_id='".mysqli_real_escape_string($hb_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
          if(mysqli_query($hb_db,$query)){
						if(file_exists($user_data_path."user_pincode_history.xml")){
							$xml=simplexml_load_file($user_data_path."user_pincode_history.xml");
							$tmpxml=new SimpleXMLElement($xml->asXML());
							$newcomment=$tmpxml->addChild("pincode");
							$newcomment->addChild("value",$value);
							$newcomment->addChild("date",date("Y-m-d"));
							$newcomment->addChild("time",date("H:i:s"));
							$newcomment->addChild("os",$hb_user_os);
							$newcomment->addChild("browser",$hb_user_browser);
							$newcomment->addChild("ip",$_SERVER['REMOTE_ADDR']);
							$tmpxml->asXML($user_data_path."user_pincode_history.xml");
							$flag=0;
						}else{
							$flag+=1;
							echo "Error: Unable to set PIN code.";
						}
          }else{
            $flag=$flag+1;
            echo "Error: Unable to set PIN code.";
          }
        }
        break;
      case "phone":
        if(validatePhone($value)){
          $query="UPDATE hb_user_main_security SET phone='".mysqli_real_escape_string($hb_db,$value)."' WHERE user_id='".mysqli_real_escape_string($hb_db,$_SESSION['hb_user']['user_id'])."' LIMIT 1";
          if(mysqli_query($hb_db,$query)){
						if(file_exists($user_data_path."user_phone_history.xml")){
							$xml=simplexml_load_file($user_data_path."user_phone_history.xml");
							$tmpxml=new SimpleXMLElement($xml->asXML());
							$newcomment=$tmpxml->addChild("phone");
							$newcomment->addChild("value",$value);
							$newcomment->addChild("date",date("Y-m-d"));
							$newcomment->addChild("time",date("H:i:s"));
							$newcomment->addChild("os",$hb_user_os);
							$newcomment->addChild("browser",$hb_user_browser);
							$newcomment->addChild("ip",$_SERVER['REMOTE_ADDR']);
							$tmpxml->asXML($user_data_path."user_phone_history.xml");
							$flag=0;
						}else{
							$flag+=1;
							echo "Error: Unable to set phone number.";
						}

          }else{
            $flag=$flag+1;
            echo "Error: Unable to set phone number.";
          }
        }
        break;

    }

  }
	if($flag==0){
		echo "Done:";
	}
}

//checking firstname
function validateFirstName($name){
	if(!preg_match("/[^A-Z\^a-z ]/",$name)){
		if(strlen($name)>=1 && strlen($name)<=30){
			return true;
		}else{
			echo "Error:Length of firstname should be 1 to 30";
			return false;
		}
	}else{
		echo 'Error:first name should contain A-Z and a-z only';
		return false;
	}
}


//checking lasttname
function validateLastName($name){
	if(!preg_match("/[^A-Z\^a-z ]/",$name)){
		if(strlen($name)>=1 && strlen($name)<=30){
			return true;
		}else{
			echo "Error:Length of lastname should be 1 to 30";
			return false;
		}
	}else{
		echo 'Error:last name should contain A-Z and a-z only';
		return false;
	}
}

//check date of birth
function validateDOB($dob){
	if($dob>date("Y-m-d",strtotime('-100year')) && $dob < date("Y-m-d",strtotime('-10year'))){
		return true;
	}else{
		echo "Error:DOB should after ".date("Y-m-d",strtotime('-100year'))." and before ".date("Y-m-d",strtotime('-10year'));
		return false;
	}
}

//check gender
function validateGender($gender){
	if($gender=='Male' | $gender=='Female' | $gender=='Other'){
		return true;
	}else{
		echo "Error:Please select your gender";
	}
}

//checking address
function validateAddress($address){
	if(!preg_match("/[\`\~\#\$\%\^\*\\\?\;\"\|\=\<\>\{\}]/",$address)){
		if(strlen($address)>=10 && strlen($address)<=100){

			return true;
		}else{
			echo "Error:Length of address should be 10 to 100";
			return false;
		}
	}else{
		echo 'Error:address should not contain `~#$%^*\\?;\"|=<>{}';
		return false;
	}
}

//checking pincode ...
function validatePincode($pincode){
	if(!preg_match("/[\D]/",$pincode)){
		if(strlen($pincode)<=20){
			return true;
		}else{
			echo "Error:Length of pincode should be less than 20 only!";
			return false;
		}
	}else{
		echo "Error:Pincode should contain number only!";
		return false;
	}
}

//validate phone ...
function validatePhone($phone){
	if(!preg_match("/[\D]/",$phone)){
		if(strlen($phone)<=20){
			return true;
		}else{
			echo "Error:Length of phone number length should less than 20";
			return false;
		}
	}else{
		echo "Error:Phone number should contain number only!";
		return false;
	}
}

?>
