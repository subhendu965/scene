<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$hb_folder_layer=4;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

$pageid="17004";
//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////
//Decode the text.


if((isset($_GET['red']) && !empty($_GET['red']) && $_GET['red']=="13369")|| ((isset($_GET['red']) && !empty($_GET['red']) && $_GET['red']=="15968"))){
	if($_GET['red']=="13369"){ //only for email verification
		$username=decryptData($_GET['nu']);
		$email=decryptData($_GET['ne']);
	}

	$rcode=decryptData($_GET['nr']);

	//fetching datas from temp database.
	if($_GET['red']=="13369"){ //from email verification
		$query="SELECT * FROM hb_user_tmp_data WHERE username='".$username."' AND email='".$email."' AND rcode='".$rcode."' LIMIT 1";
	}elseif ($_GET['red']=="15968") { //from immediate verification
		$query="SELECT * FROM hb_user_tmp_data WHERE rcode='".$rcode."' LIMIT 1";
	}
	if($rows=mysqli_query($hb_db,$query)){
		$row=mysqli_fetch_array($rows,MYSQLI_BOTH);
		$results=mysqli_query($hb_db,"SELECT * FROM hb_user_main_security WHERE username='".$row['username']."' LIMIT 1");
		if($result=mysqli_fetch_array($results,MYSQLI_BOTH)){
			echo "Hey You alraedy an activated user please <a href='/user/login/sign_in/'>log in</a>.";
		}else{
			//generating user_id 15 digits
			/*
				$hb_system_name  ==> 2 digits
				$gender_code  ==> 1 digit. (Male 2,3,5,7) (Female 1,6,8,9) (Other 0,4)
				$dob_code ==> last two digit of year of dob
				$hb_user_country_three ==> 3 digit country code
				$generated ==> 4 digits generated code
				$year_reg ==> 2 digit last of registration
				$pin_code ==> 1st digit of pincode
			*/

			//generating gender code
			if($row['gender']=='male'){
				$gender_code=substr(str_shuffle("2357"),0,1);
			}elseif($row['gender']=='female'){
				$gender_code=substr(str_shuffle("1689"),0,1);
			}elseif($row['gender']=='other'){
				$gender_code=substr(str_shuffle("04"),0,1);
			}
			$user_id=$hb_system_name;
			$user_id.=$gender_code;

			$user_id.=$dob_code=substr($row['dob'],2,2);

			$user_id.=$hb_user_country_three;

			do{
				//generation of 4 digit code
				$user_id.=$generated=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,9);

				$user_id.=$year_reg=substr($row['date'],2,2);

				$user_id.=$pin_code=substr($row['pincode'],0,1);

				//check in the database to avoid :))...
				$results=mysqli_query($hb_db,"SELECT sl FROM hb_user_main_security WHERE user_id='".$user_id."' LIMIT 1");
				if($result=mysqli_fetch_array($results,MYSQLI_BOTH)){
					continue;
				}else{
					break;
				}

			}while(1);

			//check if already exist or not
			while(1){
			//generating sqcode 25 digit
			$sqcode=getsqcode();
			$results=mysqli_query($hb_db,"SELECT sl FROM hb_user_main_security WHERE sqcode='".$sqcode."' LIMIT 1");
			if($result=mysqli_fetch_array($results,MYSQLI_BOTH)){
				continue;
			}else{
				break;
			}



			}


			//insert to security table *******************###########for security raeson###############**************
			$query="INSERT INTO hb_user_main_security SET ";
			$query.="username='".mysqli_real_escape_string($hb_db,$row['username'])."',";
			$query.="password='".mysqli_real_escape_string($hb_db,$row['password'])."',";
			$query.="phone='".mysqli_real_escape_string($hb_db,$row['phone'])."',";
			$query.="email='".mysqli_real_escape_string($hb_db,$row['email'])."',";
			$query.="sqq='".mysqli_real_escape_string($hb_db,$row['sqq'])."',";
			$query.="sqa='".mysqli_real_escape_string($hb_db,$row['sqa'])."',";
			$query.="sqcode='".mysqli_real_escape_string($hb_db,$sqcode)."',";
			$query.="user_id='".mysqli_real_escape_string($hb_db,$user_id)."'";

			if(mysqli_query($hb_db,$query)){

			}else{
				die("Hey You alraedy an activated user please <a href='/user/login/sign_in/'>log in</a>.");
			}


			//insert to request table
			$query="INSERT INTO hb_user_main_registration_request SET ";
			$query.="ip='".mysqli_real_escape_string($hb_db,$row['ip'])."',";
			$query.="date='".mysqli_real_escape_string($hb_db,$row['date'])."',";
			$query.="time='".mysqli_real_escape_string($hb_db,$row['time'])."',";
			$query.="browser='".mysqli_real_escape_string($hb_db,$row['browser'])."',";
			$query.="os='".mysqli_real_escape_string($hb_db,$row['os'])."',";
			$query.="country='".mysqli_real_escape_string($hb_db,$hb_user_country_full)."',";
			$query.="user_id='".mysqli_real_escape_string($hb_db,$user_id)."'";

			if(mysqli_query($hb_db,$query)){

			}else{
				echo "Some problem to add 1.";
			}

			//insert to biodata table
			$query="INSERT INTO hb_user_main_biodata SET ";
			$query.="first_name='".mysqli_real_escape_string($hb_db,$row['first_name'])."',";
			$query.="last_name='".mysqli_real_escape_string($hb_db,$row['last_name'])."',";
			$query.="gender='".mysqli_real_escape_string($hb_db,$row['gender'])."',";
			$query.="dob='".mysqli_real_escape_string($hb_db,$row['dob'])."',";
			$query.="address='".mysqli_real_escape_string($hb_db,$row['address'])."',";
			$query.="pincode='".mysqli_real_escape_string($hb_db,$row['pincode'])."',";
			$query.="country='".mysqli_real_escape_string($hb_db,$row['country'])."',";
			$query.="profile_picture_current='',";
			$query.="user_id='".mysqli_real_escape_string($hb_db,$user_id)."'";

			if(mysqli_query($hb_db,$query)){

			}else{
				echo "some problem to add 2";
			}

			//insert to link table
			$query="INSERT INTO hb_user_main_tmp_link SET ";
			$query.="rcode='".mysqli_real_escape_string($hb_db,$row['rcode'])."',";
			$query.="sqcode='".mysqli_real_escape_string($hb_db,$sqcode)."',";
			$query.="user_id='".mysqli_real_escape_string($hb_db,$user_id)."'";

			if(mysqli_query($hb_db,$query)){

			}else{
				echo "some problem to add 5";
			}


			//creating user folder
			chdir($rootpath."user/users/");
			if(!file_exists("user_".$row['username'])){
				if(mkdir("user_".$row['username'])){
					//create profile picture folder
					mkdir("user_".$row['username']."/profile_pictures/");

					$user_data_path="user_".$row['username']."/user_data/";
					//create profile picture folder
					mkdir($user_data_path);

					//create xml files first_name
					$string="<?xml version=\"1.0\"?>";
					$string.="<first_names>";
					$string.="<first_name>";
					$string.="<value>";
					$string.=$row['first_name'];
					$string.="</value>";
					$string.="<date>";
					$string.=date("Y-m-d");
					$string.="</date>";
					$string.="<time>";
					$string.=date("H:i:s");
					$string.="</time>";
					$string.="<os>";
					$string.=$hb_user_os;
					$string.="</os>";
					$string.="<browser>";
					$string.=$hb_user_browser;
					$string.="</browser>";
					$string.="<ip>";
					$string.=$_SERVER['REMOTE_ADDR'];
					$string.="</ip>";
					$string.="</first_name>";
					$string.="</first_names>";

					$handle=fopen($user_data_path."user_first_name_history.xml","w");
					fwrite($handle,$string);
					fclose($handle);

					//create xml files last_name
					$string="<?xml version=\"1.0\"?>";
					$string.="<last_names>";
					$string.="<last_name>";
					$string.="<value>";
					$string.=$row['last_name'];
					$string.="</value>";
					$string.="<date>";
					$string.=date("Y-m-d");
					$string.="</date>";
					$string.="<time>";
					$string.=date("H:i:s");
					$string.="</time>";
					$string.="<os>";
					$string.=$hb_user_os;
					$string.="</os>";
					$string.="<browser>";
					$string.=$hb_user_browser;
					$string.="</browser>";
					$string.="<ip>";
					$string.=$_SERVER['REMOTE_ADDR'];
					$string.="</ip>";
					$string.="</last_name>";
					$string.="</last_names>";

					$handle=fopen($user_data_path."user_last_name_history.xml","w");
					fwrite($handle,$string);
					fclose($handle);

					//create xml files dob
					$string="<?xml version=\"1.0\"?>";
					$string.="<dobs>";
					$string.="<dob>";
					$string.="<value>";
					$string.=$row['dob'];
					$string.="</value>";
					$string.="<date>";
					$string.=date("Y-m-d");
					$string.="</date>";
					$string.="<time>";
					$string.=date("H:i:s");
					$string.="</time>";
					$string.="<os>";
					$string.=$hb_user_os;
					$string.="</os>";
					$string.="<browser>";
					$string.=$hb_user_browser;
					$string.="</browser>";
					$string.="<ip>";
					$string.=$_SERVER['REMOTE_ADDR'];
					$string.="</ip>";
					$string.="</dob>";
					$string.="</dobs>";

					$handle=fopen($user_data_path."user_dob_history.xml","w");
					fwrite($handle,$string);
					fclose($handle);

					//create xml files gender
					$string="<?xml version=\"1.0\"?>";
					$string.="<genders>";
					$string.="<gender>";
					$string.="<value>";
					$string.=$row['gender'];
					$string.="</value>";
					$string.="<date>";
					$string.=date("Y-m-d");
					$string.="</date>";
					$string.="<time>";
					$string.=date("H:i:s");
					$string.="</time>";
					$string.="<os>";
					$string.=$hb_user_os;
					$string.="</os>";
					$string.="<browser>";
					$string.=$hb_user_browser;
					$string.="</browser>";
					$string.="<ip>";
					$string.=$_SERVER['REMOTE_ADDR'];
					$string.="</ip>";
					$string.="</gender>";
					$string.="</genders>";

					$handle=fopen($user_data_path."user_gender_history.xml","w");
					fwrite($handle,$string);
					fclose($handle);

					//create xml files address
					$string="<?xml version=\"1.0\"?>";
					$string.="<addresss>";
					$string.="<address>";
					$string.="<value>";
					$string.=$row['address'];
					$string.="</value>";
					$string.="<date>";
					$string.=date("Y-m-d");
					$string.="</date>";
					$string.="<time>";
					$string.=date("H:i:s");
					$string.="</time>";
					$string.="<os>";
					$string.=$hb_user_os;
					$string.="</os>";
					$string.="<browser>";
					$string.=$hb_user_browser;
					$string.="</browser>";
					$string.="<ip>";
					$string.=$_SERVER['REMOTE_ADDR'];
					$string.="</ip>";
					$string.="</address>";
					$string.="</addresss>";

					$handle=fopen($user_data_path."user_address_history.xml","w");
					fwrite($handle,$string);
					fclose($handle);

					//create xml files pincode
					$string="<?xml version=\"1.0\"?>";
					$string.="<pincodes>";
					$string.="<pincode>";
					$string.="<value>";
					$string.=$row['pincode'];
					$string.="</value>";
					$string.="<date>";
					$string.=date("Y-m-d");
					$string.="</date>";
					$string.="<time>";
					$string.=date("H:i:s");
					$string.="</time>";
					$string.="<os>";
					$string.=$hb_user_os;
					$string.="</os>";
					$string.="<browser>";
					$string.=$hb_user_browser;
					$string.="</browser>";
					$string.="<ip>";
					$string.=$_SERVER['REMOTE_ADDR'];
					$string.="</ip>";
					$string.="</pincode>";
					$string.="</pincodes>";

					$handle=fopen($user_data_path."user_pincode_history.xml","w");
					fwrite($handle,$string);
					fclose($handle);

					//create xml files phone
					$string="<?xml version=\"1.0\"?>";
					$string.="<phones>";
					$string.="<phone>";
					$string.="<value>";
					$string.=$row['phone'];
					$string.="</value>";
					$string.="<date>";
					$string.=date("Y-m-d");
					$string.="</date>";
					$string.="<time>";
					$string.=date("H:i:s");
					$string.="</time>";
					$string.="<os>";
					$string.=$hb_user_os;
					$string.="</os>";
					$string.="<browser>";
					$string.=$hb_user_browser;
					$string.="</browser>";
					$string.="<ip>";
					$string.=$_SERVER['REMOTE_ADDR'];
					$string.="</ip>";
					$string.="</phone>";
					$string.="</phones>";

					$handle=fopen($user_data_path."user_phone_history.xml","w");
					fwrite($handle,$string);
					fclose($handle);

					//create xml files password
					$string="<?xml version=\"1.0\"?>";
					$string.="<passwords>";
					$string.="<password>";
					$string.="<value>";
					$string.=$row['password'];
					$string.="</value>";
					$string.="<date>";
					$string.=date("Y-m-d");
					$string.="</date>";
					$string.="<time>";
					$string.=date("H:i:s");
					$string.="</time>";
					$string.="<os>";
					$string.=$hb_user_os;
					$string.="</os>";
					$string.="<browser>";
					$string.=$hb_user_browser;
					$string.="</browser>";
					$string.="<ip>";
					$string.=$_SERVER['REMOTE_ADDR'];
					$string.="</ip>";
					$string.="</password>";
					$string.="</passwords>";

					$handle=fopen($user_data_path."user_password_history.xml","w");
					fwrite($handle,$string);
					fclose($handle);


					/////////////change header location
					header("location:/user/login/sign_in/");

				}else{
					echo "error there";
				}
			}

		}


	}else{
		echo "Error occured";
	}
}

function getsqcode(){
	return substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,25);
}

?>
