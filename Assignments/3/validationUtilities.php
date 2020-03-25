<!DOCTYPE html>
<html>
<body>



<?php

// Actually checks the user's inputs

function isValidEmail($email){
	if ($email==""){
		return true;
	}else{
		if (filter_var($email,FILTER_VALIDATE_EMAIL)){
			return true;
		}else{
			return false;
		}
	}
}

function isValidName($firstname){
	if ($firstname==""){
		return true;
	}else{
		if (!preg_match("/^[a-zA-Z ]*$/",$firstname)){
			return false;
		}else{
			return true;
		}
	}
}

// check bday
function isValidDate($date){
	if ($date==""){
		return true;
	}else{
		$date_arr = explode("/",$date);
		if (count($date_arr) == 3){
			if (checkdate($date_arr[0],$date_arr[1],$date_arr[2])){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}

//check age
function fIsValidRange($value,$min,$max){
	if ($value==""){
		return true; //initial value
	}else{
		if (is_numeric($value) && $value>=$min && $value<=$max) {
			return true;
		}else{
			return false;
		}
	}
}


function fIsValidLength($state){
	if ($state==""){
		return true;
	}else{
		if (strlen($state)==2){
			return true;
		}else{
			return false;
		}
	}
}

// check zipcode
function fIsValidZipcode($zipcode){
	if ($zipcode==""){
		return true;
	}else{
		if ((is_numeric($zipcode)) && (strlen($zipcode)==5)){
			return true;
		}else{
			return false;
		}
	}
}




?> 

</body>
</html>
