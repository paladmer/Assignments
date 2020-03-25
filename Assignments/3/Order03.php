<!DOCTYPE html>


<html>
   <head>
      <title>Select Model</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
   	<?php 

   	  	 $color = $_POST["color"];
         VerifyColor($_POST["color"]);

         function VerifyColor($string){
         	if (($string=="blue") || ($string=="red") || ($string=="yellow")){
         		setcookie("color", $string);
         		// exit("Invalid Color : $string");
         	}else{
         		// setcookie("color", $string);
         		exit("Invalid Color : $string");
         	}
         }

         $fname = $_COOKIE["fname"];
         $model = $_COOKIE["model"];
         // $color = $_COOKIE["color"];

   	  	if ($model == "Mustang"){
   	  		$longName = $color . " Ford Mustang";
   	  		if ($color=="blue"){
				$filepath = './blueFM.jpg'; 
   	  		}elseif ($color=="red"){
				$filepath = './redFM.jpg'; 

   	  		}else{
				$filepath = './yellowFM.jpg';
   	  		}
   	  	}elseif ($model == "Subaru"){
   	  		$longName= $color . " Subaru WRX STI";
    	  	if ($color=="blue"){
				$filepath = './blueSub.jpg'; 
   	  		}elseif ($color=="red"){
				$filepath = './redSub.jpg'; 

   	  		}else{
				$filepath = './yellowSub.jpg';
   	  		}   	  		

   	  	}else{
   	  		$longName= $color . " Corvette";
   	  		if ($color=="blue"){
				$filepath = './blueCorv.jpg'; 
   	  		}elseif ($color=="red"){
				$filepath = './redCorv.jpg'; 

   	  		}else{
				$filepath = './yellowCorv.jpg';
   	  		}
 
   	  	}
   	  	

   	?>
   	<div class="pageContainer">
   		<?php
   		echo '<h1 class="centerText">' . $fname . "'s" . '</h1>';
   		echo '<h2 class="centerText">' . $longName . '</h2>';
echo '<img class="productItem" src= " '. $filepath .' ">';
   		?>
	<a href="Order01.php">Go back to Order01</a>
   	</div>

</body>
</html>