<!DOCTYPE html>
<html>
<body>



<?php

include "validationUtilities.php";

//$vBDay = true;

	//gets data from validate.php
  $email = $_POST["email"];
  $firstname = $_POST["firstname"];
  $bday = $_POST["bday"];
  $age =  $_POST["age"];
  $state = $_POST["state"];
  $zip = $_POST["zip"];


$vBDay = IsValidDate($bday);
$vAge = fIsValidRange($age,1,100);
$vZip = fIsValidZipcode($zip);
$vEmail = IsValidEmail($email);
$vState = fIsValidLength($state);
$vfname = isValidName($firstname);


//echo $vBDay;
//echo $vAge;
//echo $vEmail;
//echo $vZip;
//echo $vState;

     

/**if ($_SERVER ["REQUEST_METHOD"]  == "POST") {
  if (empty ($_POST ["email"])){
    $email_ERROR =  "Please enter your email.";

  }
} **/

?>



</body>
</html>
