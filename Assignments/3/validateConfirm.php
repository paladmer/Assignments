<!DOCTYPE html>
<html>
<body>

<h1></h1>

<?php
//ValidationCONFIRM
			
					
$email = "";
$firstname = "";
$bday = "";
$age = "";
$state = "";
$zip = "";

$email_ERROR = "";
$firstname_ERROR = "";
$bday_ERROR = "";
$age_ERROR = "";
$state_ERROR = "";
$zip_ERROR = "";


if ($_SERVER ["REQUEST_METHOD"]  == "POST") {
	if (empty ($_POST ["email"])){
		$email_ERROR = "Please enter your email."
	}else{
		$email=($_Post["email"]); 
		echo $email; 
		echo "heeh";
	}




?> 

</body>
</html>
