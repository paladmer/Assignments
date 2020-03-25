<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<?php

	$user = $_POST["user"];

	if (!isset($_SESSION[$user])){
		Postback();
		if ($user != ""){
			session_start();
			$_SESSION["user"]=$user;
			$_SESSION["password"]=$password;
		}else{
			header("Location: login.php");			
		}
	}
	
	function Postback(){
		$user = $_POST["user"];
		$password = $_POST["password"];
		$postback = $_POST["pback"];
	}

	function Logout(){
		if (abandon){
			session_unset();
		}
	}

	?>

	<form action="protected.php" method=POST>
		<label>Username:</label>
		<input type="text" name="user" value="<?php echo $user ?>"><br><br>
		<?php if ($postback && strlen($user) <1){
		echo "Please enter your name.";
		}?>

		<label>Password:</label>
		<input type="text" name="password" value="<?php echo $password ?>"><br><br>
		<?php if ($postback && strlen($password) <1){
		echo "Please enter your passwprd.";
		}?>

		<input type="hidden" name="pback" value="true">
		<button name="button" onclick="Postback()">Postback</button><br><br>



		<button name="button" onclick="Logout()">Logout</button><br><br>

		<input type="hidden" name="abandon" value="true">	
		<a href="protected.php">Refresh</a>	



	</form>


</body>
</html>