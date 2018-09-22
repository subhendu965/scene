<?php
if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']=="http://accounts.hazrabrothers.com/dashboard/"){

}else{
	die("Unauthorized Entry!");
}
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
	die("<a href='http://accounts.hazrabrothers.com/login/sign_in/'>Log In</a> first to manage your Hazra Brothers account");
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//fetching all the datas.
//from biodata
$query="SELECT * from hb_user_main_biodata WHERE user_id='".$_SESSION['hb_user']['user_id']."' LIMIT 1";
if($rows_biodata=mysqli_query($hb_db,$query)){
	if($row_biodata=mysqli_fetch_array($rows_biodata,MYSQLI_BOTH)){
		if($row_biodata['user_id']==$_SESSION['hb_user']['user_id']){
			$profile['first_name']=$row_biodata['first_name'];
			$profile['last_name']=$row_biodata['last_name'];
			$profile['dob']=$row_biodata['dob'];
			$profile['gender']=$row_biodata['gender'];
			$profile['address']=$row_biodata['address'];
			$profile['pincode']=$row_biodata['pincode'];
			$profile['profile_picture_current']=$row_biodata['profile_picture_current'];

		}else{
			die("Error:Unable to fetch data!");
		}
	}else{
		die("Error:Unable to fetch data!");
	}
}else{
	die("Error:Unable to fetch data!");
}

///from hb_user_main_security
$query="SELECT username,email,phone,user_id from hb_user_main_security WHERE user_id='".$_SESSION['hb_user']['user_id']."' LIMIT 1";
if($rows_security=mysqli_query($hb_db,$query)){
	if($row_security=mysqli_fetch_array($rows_security,MYSQLI_BOTH)){
		if($row_security['user_id']==$_SESSION['hb_user']['user_id']){
			$profile['username']=$row_security['username'];
			$profile['email']=$row_security['email'];
			$profile['phone']=$row_security['phone'];
		}
	}
}

echo "Done:";
?>
<style>
#myprofile_header{
	background: rgba(212,235,255,0.9);
	border-bottom:2px solid #0090b1;
}
#myprofile_header_img{
	display: table-cell;
	width:70px;
	height:70px;
	padding:10px;
	background-color:#ccc;
	background-size:cover;
	background-repeat:no-repeat;
	background-position: center center;
	background-clip:padding-box;
	border-radius:200px;
	box-shadow:rgba(0,0,0,0.5) 0px 0px 5px;
}
#myprofile_header_name{
	display: table-cell;
	font-size: 25px;
	margin:15px 10px;
}
</style>

<header id="myprofile_header">
	<div>
		<div id="myprofile_header_img" style="background-image:url('<?php
		if(!empty($profile['profile_picture_current'])){
			echo '/users/user_'.$profile['username']."/profile_pictures/".$profile['profile_picture_current'];
		} else{
			echo '/images/user_logo.png';
		}

		?>');" />
	</div>
	<div id="myprofile_header_name"><?php echo $profile['first_name']." ".$profile['last_name'] ?></div>
</header>
<div>

	<div id="myprofile_left_box">

		<div>
			<div class='content_for_edit'>First Name: <span id="spn_first_name"><?php echo $profile['first_name']; ?></span></div>
			<button id="edit862_first_name" >Edit</button>
		</div>

		<div>
			<div class='content_for_edit'>Last Name: <span id="spn_last_name"><?php echo $profile['last_name']; ?></spna></div>
			<button id="edit862_last_name" >Edit</button>
		</div>

		<div>
			<div class='content_for_edit'>Date of birth: <span id="spn_dob"><?php echo $profile['dob']; ?></span></div>
			<button id="edit862_dob" >Edit</button>
		</div>

		<div>
			<div class='content_for_edit'>Gender: <span id="spn_gender"><?php echo $profile['gender']; ?></span></div>
			<button id="edit862_gender" >Edit</button>
		</div>

		<div>
			<div class='content_for_edit'>Address: <span id="spn_address"><?php echo $profile['address']; ?></span></div>
			<button id="edit862_address" >Edit</button>
		</div>

		<div>
			<div class='content_for_edit'>Pincode: <span id="spn_pincode"><?php echo $profile['pincode']; ?></span></div>
			<button id="edit862_pincode" >Edit</button>
		</div>

		<div>
			<div class='content_for_edit'>Phone: <span id="spn_phone"><?php echo $profile['phone']; ?></span></div>
			<button id="edit862_phone" >Edit</button>
		</div>

		<div>
			E-mail: <?php echo $profile['email']; ?>
		</div>
		<div>
			Username: <?php echo $profile['username']; ?>
		</div>
		<div><a><div>Change Password</div></a></div>

	</div>


	<div id="myprofile_right_box">

		<div id="profile_picture_set_box">
			<div>
				<img src="<?php
				if(!empty($profile['profile_picture_current'])){
					echo '/users/user_'.$profile['username']."/profile_pictures/".$profile['profile_picture_current'];
				} else{
					echo '/images/user_logo.png';
				}

				?>" />
			</div>
			<div>
				Change profile picture
			</div>
		</div>

		<div "profile_social_link_box">

		</div>

	</div>

</div>

<script id='my_profile_script_856'>

	edit_fields=document.querySelectorAll("button[id^=edit862_]");

	for(i=0;i<edit_fields.length;i++){
			edit_fields[i].addEventListener("click",function (){
				edit_field(this);
			},false);
	}
	function edit_field(edit_btn){
		editable_field=edit_btn.parentNode.querySelector("div.content_for_edit span");
		old_value_field=editable_field.innerText;

		var elm_to_be_changed=edit_btn.id.substr(8);
		//alert(elm_to_be_changed);
		switch (elm_to_be_changed) {
			case "first_name":
				editable_field.innerHTML="<input type='text' id=input_text_"+edit_btn.id.substr(8)+"><input type='button' id=final_edit_btn_"+edit_btn.id.substr(8)+" value='Change Now'>";
				edit_btn.style.display="none";
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).value=old_value_field;
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).focus();
				editable_field.querySelector("#final_edit_btn_"+edit_btn.id.substr(8)).addEventListener("click",function (){
					changeNow("first_name");
				},false);
				break;

			case "last_name":
				editable_field.innerHTML="<input type='text' id=input_text_"+edit_btn.id.substr(8)+"><input type='button' id=final_edit_btn_"+edit_btn.id.substr(8)+" value='Change Now'>";
				edit_btn.style.display="none";
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).value=old_value_field;
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).focus();
				editable_field.querySelector("#final_edit_btn_"+edit_btn.id.substr(8)).addEventListener("click",function (){
					changeNow("last_name");
				},false);
				break;

			case "dob":
				editable_field.innerHTML="<input type='date' id=input_date_"+edit_btn.id.substr(8)+"><input type='button' id=final_edit_btn_"+edit_btn.id.substr(8)+" value='Change Now'>";
				edit_btn.style.display="none";
				editable_field.querySelector("#input_date_"+edit_btn.id.substr(8)).value=old_value_field;
				editable_field.querySelector("#input_date_"+edit_btn.id.substr(8)).focus();
				editable_field.querySelector("#final_edit_btn_"+edit_btn.id.substr(8)).addEventListener("click",function (){
					changeNow("dob");
				},false);
				break;

			case "gender":

				editable_field.innerHTML="<input type='radio' id=input_radio_"+edit_btn.id.substr(8)+" value=Male> Male <input type='radio' id=input_radio_"+edit_btn.id.substr(8)+" value=Female> Female <input type='radio' id=input_radio_"+edit_btn.id.substr(8)+" value=Others> Others <input type='button' id=final_edit_btn_"+edit_btn.id.substr(8)+" value='Change Now'>";
				edit_btn.style.display="none";
				//editable_field.querySelector("#input_radio_"+edit_btn.id.substr(8)).value=old_value_field;
				switch(old_value_field){
					case "male":
						editable_field.querySelector("#input_radio_"+edit_btn.id.substr(8)+"[value=Male]").checked=true;
						break;
					case "female":
						editable_field.querySelector("#input_radio_"+edit_btn.id.substr(8)+"[value=Female]").checked=true;
						break;
					case "others":
						editable_field.querySelector("#input_radio_"+edit_btn.id.substr(8)+"[value=Others]").checked=true;
						break;
				}
				editable_field.querySelector("#input_radio_"+edit_btn.id.substr(8)).focus();
				editable_field.querySelector("#final_edit_btn_"+edit_btn.id.substr(8)).addEventListener("click",function (){
					changeNow("gender");
				},false);
				break;

			case "address":
				editable_field.innerHTML="<textarea id=input_textarea_"+edit_btn.id.substr(8)+"></textarea> <input type='button' id=final_edit_btn_"+edit_btn.id.substr(8)+" value='Change Now'>";
				edit_btn.style.display="none";
				editable_field.querySelector("#input_textarea_"+edit_btn.id.substr(8)).value=old_value_field;
				editable_field.querySelector("#input_textarea_"+edit_btn.id.substr(8)).focus();
				editable_field.querySelector("#final_edit_btn_"+edit_btn.id.substr(8)).addEventListener("click",function (){
					changeNow("address");
				},false);
				break;

			case "pincode":
				editable_field.innerHTML="<input type='text' id=input_text_"+edit_btn.id.substr(8)+" /> <input type='button' id=final_edit_btn_"+edit_btn.id.substr(8)+" value='Change Now'>";
				edit_btn.style.display="none";
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).value=old_value_field;
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).focus();
				editable_field.querySelector("#final_edit_btn_"+edit_btn.id.substr(8)).addEventListener("click",function (){
					changeNow("pincode");
				},false);
				break;

			case "phone":
				editable_field.innerHTML="<input type='text' id=input_text_"+edit_btn.id.substr(8)+" /> <input type='button' id=final_edit_btn_"+edit_btn.id.substr(8)+" value='Change Now'>";
				edit_btn.style.display="none";
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).value=old_value_field;
				editable_field.querySelector("#input_text_"+edit_btn.id.substr(8)).focus();
				editable_field.querySelector("#final_edit_btn_"+edit_btn.id.substr(8)).addEventListener("click",function (){
					changeNow("phone");
				},false);
				break;

			default:

		}

		function changeNow(field_change){
			alert(field_change);
			//refresh the page.
			request=new XMLHttpRequest();
			request.open("GET","my_profile.php",true);
			request.onreadystatechange=getResponse;
			request.send(null);
		}

	}
</script>
<?php

?>
