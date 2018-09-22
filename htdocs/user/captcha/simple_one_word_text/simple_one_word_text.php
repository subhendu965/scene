<?php
if(isset($_SESSION)){

}else{
  session_start();
}
 if(isset($_SESSION['hb_captcha']['selected_captcha']) && $_SESSION['hb_captcha']['selected_captcha']=="smowtxt8g5Mo3k"){

  }else{
    die("sa");
  }

    $_SESSION['hb_captcha']['selected_captcha_model']="m1Pb9Hyo3k"; //for m1
    $selected_captcha_generator="/user/captcha/simple_one_word_text/simpleText_m1.php";

    if(isset($_POST['token']) && $_POST['token']=="ref632d"){
      echo "Done:";
      $selected_captcha_generator="/user/captcha/simple_one_word_text/simpleText_m1.php?t=".rand(0,6000);
    }
?>
<style>
  #captcha_main_div{
    text-align: center;
    padding:5px;

  }
  #captcha_main_div #captcha_simple_text_image{
    background:url('<?php echo $selected_captcha_generator; ?>') no-repeat;
    background-size:contain;
    width:200px;
    height:100px;
    margin: auto;
  }
  #captcha_main_div .captcha_simple_one_word_569{
    width:100%;
    display:block;
  }
  #captcha_main_div #captcha_simple_one_word_text_input{
    float: none;
    font-size: 15px;
    padding:5px;
    border: 1px solid #888;
    border-radius:3px;
    margin:5px;
    box-shadow: none;
    width: 50%;
    transition:box-shadow 0.3s, border 0.3s, background 0.3s;
  }
  #captcha_main_div #captcha_simple_one_word_text_input:hover{
    box-shadow:#777 0px 0px 2px;
    border-color: #555;
  }
  #captcha_main_div #captcha_simple_one_word_text_input:focus{
    background-color:rgba(85,119,170,0.04);
  }
  #captcha_main_div .captcha_simple_one_word_569 button[type=button]{
    border:2px solid #015761;
    background:#015761;
    color:white;
    font-size: 15px;
    padding: 5px;
    border-radius: 5px;
    transition: background 0.3s,box-shadow 0.3s;
  }
  #captcha_main_div .captcha_simple_one_word_569 button[type=button]:hover{
    background: #1e92a0;
    box-shadow: rgba(120,120,120,0.6) 3px 3px 4px;
  }
</style>
<div id="captcha_main_div">
  <div>Write the text inside textbox below</div>
  <div id="captcha_simple_text_image">&nbsp;</div>
  <div>
    <div class="captcha_simple_one_word_569">
      <input type="text" id="captcha_simple_one_word_text_input" />
    </div>
    <div class="captcha_simple_one_word_569">
      <button type="button" onclick="captcha_simple_text_refresh()">Refresh</button>
      <button type="button" onclick="captcha_simple_text_verify()">Verify</button>
    </div>
  </div>
</div>
<script>
  function captcha_simple_text_refresh(){
    captcha_refresh_request=new XMLHttpRequest();
    url="token=ref632d";
    captcha_refresh_request.open("POST","/user/captcha/simple_one_word_text/simple_one_word_text.php",true);
    captcha_refresh_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    captcha_refresh_request.onreadystatechange=getCaptchaRefreshResponse;
    captcha_refresh_request.send(url);
  }

  function getCaptchaRefreshResponse(){
    //alert(captcha_refresh_request.responseText);
		if(captcha_refresh_request.readyState==4 && captcha_refresh_request.status==200){
      if(captcha_refresh_request.responseText.substr(0,6)=="Error:"){

			}else{
				if(captcha_refresh_request.responseText.substr(0,5)=="Done:"){
					document.querySelector("#captcha_main_div").parentNode.innerHTML=captcha_refresh_request.responseText.substr(5);
				}
			}
		}
	}

  function captcha_simple_text_verify(){
    captcha_verify_request=new XMLHttpRequest();
    url="reqans="+document.querySelector("#captcha_simple_one_word_text_input").value;
    captcha_verify_request.open("POST","/user/captcha/verify.php",true);
    captcha_verify_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    captcha_verify_request.onreadystatechange=getCaptchaVerifyResponse;
    captcha_verify_request.send(url);
  }
  function getCaptchaVerifyResponse(){
    //alert(captcha_verify_request.responseText);
		if(captcha_verify_request.readyState==4 && captcha_verify_request.status==200){
      if(captcha_verify_request.responseText.substr(0,6)=="Error:"){
        showError(captcha_verify_request.responseText.substr(6),"captcha_error_message","red");
        global_captcha_verified=false;
        captcha_simple_text_refresh();
			}else{
				if(captcha_verify_request.responseText.substr(0,5)=="Done:"){
				      showError(captcha_verify_request.responseText.substr(5),"captcha_error_message","green");
              document.querySelector("#captcha_main_div").parentNode.innerHTML="";
              global_captcha_verified=true;
				}
			}
		}
	}

</script>
