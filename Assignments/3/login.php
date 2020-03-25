<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<form class="login" action="protected.php" type="submit" method="POST">
		<div>
			<label> Username: </label> 
			<input type="text" name="user" placeholder="User"><br><br>
			<label> Password: </label> 
			<input type="text" name="password" placeholder="Password"><br><br>
			<button type="submit" >Login</button>
		</div>
<!-- 		<?php

		function startSession(){
			session_start();
			$_SESSION['user'] = document.getElementById("user").value;
			var_dump($_SESSION);
		}

		?>
 -->

	</form>

</body>
</html>