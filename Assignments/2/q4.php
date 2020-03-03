<!DOCTYPE html>
<html>
<body>

<table border="1px" width="350px" cellspacing="2px" cellpadding="2px" bgcolor="pink"  > 



<h1>Question 3: 10 Best Resturants in Atlanta</h1>
<?php

$rows = 11; 
$columns= 1; 

$Name =  array('Name','Chama Gaucha', 'Aviva by Kameel', 'Bone’s Restaurant', ' Umi Sushi Buckhead', ' Fandangles', ' Capital Grille', 'Canoe','One Flew South',' Fox Bros. BBQ ', ' South City Kitchen Midtown');

$avgCost = array('Average Cost','40.50', '15.00', '65.00', '40.50', '30.00', '60.50', '35.50','21.00','15.00', '29.00');


for ($r=0; $r<$rows ;$r++  ){

	echo "<tr>";
    
    echo "<td>$Name[$r]</td>"; 
    for ($c=1; $c<=$columns ;$c++){
	
    echo "<td>$avgCost[$r]</td>"; 
    }
    echo"</tr>";
    

}
echo "</table>";

?> 
<a href="index.html">GoBack</a> <br>
</body>
</html>
