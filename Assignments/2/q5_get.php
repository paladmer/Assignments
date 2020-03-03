<html>


<style>
body {
    text-align: center;
    background: rgb(84,38,116);
	background: linear-gradient(4deg, rgba(84,38,116,1) 0%, rgba(253,29,29,1)34%, rgba(252,238,69,1) 84%);
}
</style>


<body>

Hamburger Quantity: <?php echo $_GET["hamb"]; ?><br>
Milkshake Quantity: <?php echo $_GET["milk"]; ?><br>
Cola Quantity: <?php echo $_GET["cola"]; ?><br>

<?php 

 $hamb_Quantity= $_GET["hamb"]; 
 
$hamb_Price= $hamb_Quantity*4.95; 

//echo "ham: $hamb_Price<br>";
//echo "ham: $hamb_Quantity<br>";

$milkshake_Quantity= $_GET["milk"]; 
$milkshake_Price= $milkshake_Quantity*1.95; 
//echo "milk: $milkshake_Price<br>";

$cola_Quantity= $_GET["cola"]; 
$cola_Price= $cola_Quantity*0.85; 
//echo "cola: $cola_Price<br>";

$totalPrices = $cola_Price + $milkshake_Price + $hamb_Price ; 

$sales = .075*$totalPrices;

$pretaxTip = .16*$totalPrices;


$total = $sales + $pretaxTip + $totalPrices; 

echo "You spent $$total"; 


?>
<a href="index.html">GoBack</a> <br>

</body>
</html>
