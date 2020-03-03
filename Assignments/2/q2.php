<!DOCTYPE html>
<html>
<body>

<h1> Question 2: CheckerBoard </h1>
<table width="300px" cellspacing="1px" cellpadding="1px" > 
<?php


/**row**/
for($r=0; $r<=8 ; $r++ ){
      echo "<tr>";
      /**column**/
      for($c=0; $c<=8; $c++ ){
     	 	$board=$c+$r;
	    if($board%2==1){
       		 echo "<td bgcolor=red height=35px width=35px ></td>";
        } 
        else{
       		echo "<td bgcolor=black height=35px width=35px ></td>";
      	}
   }
   echo "</tr>";
}

?> 
<a href="index.html"><br> GoBack</a> <br>
</body>
</html>
