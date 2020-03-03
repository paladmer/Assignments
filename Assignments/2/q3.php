<!DOCTYPE html>
<html>
<body>

<h1>Question 3: Arrays</h1>

<?php

$month =  array('January', 'February', 'March', 'April', 'May', 'June', 'July','August','September', 'October', 'November', 'December'); 

$arrayLength = count($month);
function months_InOrder($month,$arrayLength){
  for ( $i = 0 ; $i<=$arrayLength ; $i++){
  echo "$month[$i]<br>";
  }
}


function months_InAlphaOrder($month,$arrayLength){
	sort($month);
  for ( $i = 0 ; $i<=$arrayLength ; $i++){
  echo "$month[$i]<br>";
  }
}


function months_InOrder_FE($month){
   foreach ($month as $element){
   echo "$element<br>";
  }
}

function months_AlphaOrder_FE($month){
   sort($month);
   foreach ($month as $element){
   echo "$element<br>";
  }
}


echo "<h4>Months: In Order (for)</h4><br>";
months_InOrder($month,$arrayLength);

echo "<h4>Months: In Alphabetical Order (for)</h4><br>";
months_InAlphaOrder($month,$arrayLength);

echo "<h4>Months: In Order (forEach)</h4><br>";
months_InOrder_FE($month,$arrayLength);

echo "<h4>Months: In Alphabetical Order (forEach)</h4><br>";
months_AlphaOrder_FE($month,$arrayLength);


?> 
<a href="index.html">GoBack</a> <br>
</body>
</html>
