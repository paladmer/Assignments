<!DOCTYPE html>
<html>
<body>

<h1>Question 1: Did Charlie eat your Lunch? </h1>
<?php
function isBitten(int $x) {
echo "Choice 1: He ate it.<br>";
echo "Choice 2: He did Not eat it.<br><br>";

  for ( $i = 1; $i < $x ;$i++ ){

            $one = 1;
            $chance =rand(1,2);
              if ($chance == $one ){
              echo "Decision: $chance <br>";
              echo "Charlie ate my Lunch!<br><br>";
              
              } else {
              echo "Decision: $chance <br>"; 
              echo "Charlie did not eat my Lunch!<br><br>"; 
              
              }
  }

}

isBitten(3);




?> 

<a href="index.html">GoBack</a> <br>
</body>
</html>
