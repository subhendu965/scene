<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$pageid=17010;
$hb_folder_layer=3;
$rootpath='';
for($i=1;$i<=$hb_folder_layer;$i++){
	$rootpath.="../";
}

//checking if some ine access directly or not
include $rootpath."universal/init/init_protect.php";

include $rootpath."universal/init/init_check.php";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//unset($_SESSION['HB_Own']['scup001']);
if(isset($_SESSION['HB_Own']['scup001']) && $_SESSION['HB_Own']['scup001']>3){
	//set cookie as blocked
	$_COOKIE['BLOCKED']['gateway']="mgh56";
	die("<h2 style='color:red'>You are blocked in this gateway</h2>");

	////save to blocked list
}
if(isset($_COOKIE['BLOCKED']['gateway']) && $_COOKIE['BLOCKED']['gateway']=="mgh56"){
	die("<h2 style='color:red'>You are blocked in this gateway</h2>");
}

$questionArray=Array(
	Array("NckNmeBbGvnBUs","--/*Kiti*/--"),
	Array("NmeTrnsfrTchnlgyLtstDscvrd","--/*LonDom*/--"),
	Array("NckNmeBbGvnBUs","--/*Kiti*/--"),
	Array("NmeTrnsfrTchnlgyLtstDscvrd","--/*LonDom*/--"),
	Array("NckNmeBbGvnBUs","--/*Kiti*/--"),
	Array("NmeTrnsfrTchnlgyLtstDscvrd","--/*LonDom*/--"),
	Array("NckNmeBbGvnBUs","--/*Kiti*/--"),
	Array("NmeTrnsfrTchnlgyLtstDscvrd","--/*LonDom*/--"),
	Array("NckNmeBbGvnBUs","--/*Kiti*/--"),
	Array("NmeTrnsfrTchnlgyLtstDscvrd","--/*LonDom*/--"),

);
?>


<html>
<title>001</title>
<style>
body{
	background:#47d3e3;
}
h1{
	border-bottom:3px solid #158f9d;
	padding:30px;
}
form{
	width:50%;
	margin:100px auto;
	text-align:center;
}
form input{
	font-size:25px;
	padding:10px;
	border:none;
	border-bottom:3px solid #158f9d;
	border-radius:10px;
	transition:background 0.3s;
}
form input[type=submit]{
	background:#5097a0;
	color:white;
	padding:10px 30px;
}
form input[type=submit]:hover{
	background:#75c0c9;
}
form input:focus{
	outline:none;
	background:#e7f9fb;
}
form footer{
	margin-top:60px;
}
</style>
<body>
<h1>SCUP 001</h1>

<?php
//////second step
if(isset($_POST['getsq'])){

	if(isset($_POST['spsq']) && !empty($_POST['spsq'] && isset($_POST['qNo']))){
		$ans=$_POST['spsq'];
		$qNo=substr($_POST['qNo'],1,1);

		if($questionArray[$qNo][1]==$ans){
			//set session variables
			$_SESSION['HB_Own']['logged_in']="mb52Okj";
			//$_SESSION['HB_Own']['logged_by']=$_SESSION['hb_employee']['username'];
			header("location:http://scene.hazrabrothers.com/upload/hb_opl8563knbg/single");
		}else{
			echo "<h4 style='color:red;'>Wrong input</h4>";
			if(isset($_SESSION['HB_Own']['scup001'])){
				$_SESSION['HB_Own']['scup001']+=1;
			}else{
				$_SESSION['HB_Own']['scup001']=1;
			}
			enterToUpload();
		}

	}else{
		echo "<h4 style='color:red;'>Wrong input</h4>";
		if(isset($_SESSION['HB_Own']['scup001'])){
			$_SESSION['HB_Own']['scup001']+=1;
		}else{
			$_SESSION['HB_Own']['scup001']=1;
		}
		enterToUpload();
	}
}
////////first step
if(isset($_POST['go001']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['sqcode']) && $_POST['sqcode']=='nlr26'){
	if($_POST['username']=="h45a12z78r10a06b11r48o36t77h02e53r44s17" && $_POST['password']=="Gm9YcvT486mloP036yu745mn7sdGuOPL159siok"){
		enterToUpload();
	}else{
		echo "<h4 style='color:red;'>Wrong input</h4>";
		if(isset($_SESSION['HB_Own']['scup001'])){
			$_SESSION['HB_Own']['scup001']+=1;
		}else{
			$_SESSION['HB_Own']['scup001']=1;
		}
		showgate();
	}

}else{
	if(isset($_GET['mxcp5697lo']) && $_GET['mxcp5697lo']=="vibgyor17a" && isset($_GET['byut85lki']) && $_GET['byut85lki']=='web8956ploi'){
		showgate();
	}else{
			if(isset($_POST['getsq'])){

			}else{
				header("location:http://scene.hazrabrothers.com/upload/hb_opl8563knbg/Ncd56loxlp7.php");
			}

	}
}

?>


<?php
function showgate(){ ///////////////// start of showgate
?>



<form action="Ncd56ioxlp7.php" method="post">
	<input type="text" name="username" /><br/><br/>
	<input type="password" name="password" />
	<input type="hidden" name="sqcode" value="nlr26" />
	<br><br>
	<input type="submit" value="Go" name="go001" />
	<br>
	<footer>Hazra Brothers | 2017</footer>
</form>

</body>
</html>
<?php
}//end of function showgate


//start of enterToUplaod
function enterToUpload(){
	global $questionArray;
?>

	<form action="Ncd56ioxlp7.php" method="post">
		<?php
			$qNo=rand(0,9);
			echo $questionArray[$qNo][0]."<br>";
			echo "<input type='hidden' value='b".$qNo."Z' name='qNo'>";
	 ?>
		<input type='password' name='spsq' required>
		<br><br>
		<input name="getsq" type="submit" value="Go" name="go001" />
		<br>
		<footer>Hazra Brothers | 2017</footer>
	</form>

	</body>
	</html>
<?php
} //end of enterToUpload
?>
