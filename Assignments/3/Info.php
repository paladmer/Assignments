<!DOCTYPE html>
<html>
<head>
	<title>INfo</title>
	<h1>Information Submitted:</h1>
	<?php
	$email = $_POST["email"];
	$firstname = $_POST["firstname"];
	$bday = $_POST["bday"];
	$age =  $_POST["age"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
	
	echo "Email: $email <br>";
	echo "First Name: $firstname <br>";
	echo "Birthday: $bday <br>";
	echo "Age: $age <br>";
	echo "State: $state <br>";
	echo "Zip: $zip <br>";
	?>
</head>
<body>



