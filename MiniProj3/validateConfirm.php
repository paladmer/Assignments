<!DOCTYPE html>
<html>
<body>



<?php

include "validationUtilities.php";

//$vBDay = true;

	//gets data from validate.php <in this cause uservalidate.php

  $firstname = $_POST["firstname"];
  $password =$_POST["password"];




// the ones im using
$vfname = isValidName($firstname);
$vpassword = isValidName($password);


?>



</body>
</html>