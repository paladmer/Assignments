<!DOCTYPE html>
<html>
<body>



<?php

// Actually checks the user's inputs

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







?> 

</body>
</html>