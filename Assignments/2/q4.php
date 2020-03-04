<!DOCTYPE html>
<html>
<body>

<h1>Question 4: 10 Best Resturants in Atlanta</h1>


<?php



/**Normal**/

 echo "<h3> Normal Order:</h3>";

$rows = 11; 
$columns= 1; 



$Name =  array('Name','Chama Gaucha', 'Aviva by Kameel', 'Bone’s Restaurant', ' Umi Sushi Buckhead', ' Fandangles', ' Capital Grille', 'Canoe','One Flew South',' Fox Bros. BBQ ', ' South City Kitchen Midtown');

$avgCost = array('Average Cost','40.50', '15.00', '65.00', '40.50', '30.00', '60.50', '35.50','21.00','15.00', '29.00');


echo "<table border='1'>"; 
for ($r=0; $r<$rows ;$r++  ){

	echo "<tr>";
    
    echo "<td>$Name[$r]</td>"; 
    for ($c=1; $c<=$columns ;$c++){
	
    echo "<td>$avgCost[$r]</td>"; 
    }
    echo"</tr>";
    
}
echo '</table>';




/**Alphabetical**/
$arrays =  array('Chama Gaucha'=>'40.50',
			    'Aviva by Kameel'=>'15.00', 
                'Bone’s Restaurant'=>'65.00', 
                'Umi Sushi Buckhead'=>'40.50', 
                'Fandangles'=>'30.00', 
                'Capital Grille'=>'60.50', 
                'Canoe'=>'35.50',
                'One Flew South'=>'21.00',
                'Fox Bros. BBQ '=>'15.00', 
                'South City Kitchen Midtown'=>'29.00');

echo "<table border='1'>"; 
echo "<h3> Alphabetical Order: A to Z </h3>";
function isAlphabet($arrays, $rows, $columns){
 ksort($arrays, 4); 
            
 for ($r=1; $r<$columns ;$r++ ){
                        foreach( $arrays as $cost => $cost_value){
                            echo "<td>";
                             echo "" . $cost."      ";
                             
                            echo "" . $cost_value."     ";
                     
                            echo  "</td>";
                            
                        }
                                     
}


echo "<br>";
echo "<br>";


echo "</table>";
echo "                                                                <br>";
echo "                                                                <br>";
echo "                                                                <br>";
}


function isPrice($arrays,$rows,$columns){
	asort($arrays);
    
echo "<h3> Price Order </h3>";

echo "<table border='1'>"; 
   foreach( $arrays as $cost => $cost_value){
                            echo "<td>";
                             echo "" . $cost."      ";
                             
                            echo "" . $cost_value."     ";
                     
                            echo  "</td>";
                            
   }
   
   
echo "</table>"; 

}

isAlphabet($arrays,1,2); 
isPrice($arrays,1,2); 


  
?> 
</table>



<a href="index.html">GoBack</a> <br>
</body>
</html>
