
<!DOCTYPE html>


<?php

$servername = "localhost"; 
$username = "mpalad1"; 	   
$password = "mpalad1";     
$dbname = "mpalad1";  

$conn = new mysqli($servername, $username, $password, $dbname);


if (isset($_POST['submit'])) {
		
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
		
		/** $username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = $conn -> real_escape_string($_POST['password']);
		**/ 
			 
			echo "Hello, " ;
			echo $username ; 
		
			
	}
	
?>


<html>
	<head>
		<title>
		New User Form
		</title>
	</head>
<body>

<!--This is the form for the users to input their data.-->

<link rel="stylesheet" type="text/css" href="Test.css">

<div align="center" > 
	<div class="newUser"> <h1>New User Log In: </h1> </div>
		<p id="smallSize" id="diffFont"></p>
			<div id="makeBorder">  
						
			<form method="POST" action="another.php">
				
				
				    <p> New User Registration </p> 
					<p> Fill in the information below. </p> 
			

					<label class="lbl">UserName: </label>
					<input class="usr lg-box" type="text/css" name="username" placeholder="Username" required><br><br>
					
					<label class="lbl">Password: </label>
					<input class="usr lg-box" type="text/css" name="password" placeholder="Password" required><br><br>
				
					
					<input class="usr"  type="submit" name="submit" value="Register" > <br> <br> <br> 
					
			
			
					
				</form>
				
			</div>
</div>



</body>
</html>