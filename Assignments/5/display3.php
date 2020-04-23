<html>
<body>
<?php 

$servername="localhost"; 
$username = "mpalad1"; 
$password = "mpalad1"; 
$dbase = "mpalad1"; 
$conn = new mysqli($servername, $username, $password, $dbase); 

//testing connection 
 if ($conn->connect_error) {
    echo "Connection failed.";
}
echo " ";



$command = "SELECT * FROM Purchases";

 
$data =$conn->query($command);

			
 
echo '<table border="1" cellpadding="3" cellspacing="3" > 
      <tr> 
          <td>| Purchases |</td> 
          <td>| Supplier Id |</td> 
          <td>| Date |</td> 
          <td>| Quantity |</td> 
		  <td>| Description |</td> 
          <td>| Price |</td> 
      </tr>';
 
if ($product=$conn->query($command) {
    while ($branch = $product ->fetch_assoc()) {
        $data_PurchaseNo = $branch["PurchaseNo"];
        $data_SID = $branch["SupplierID"];
        $data_Date = $branch["Date"];
        $data_Qty = $branch["Quantity"];
        $data_Desc = $branch["Description"]; 
		$data_Price = $branch["Price"]; 
        echo '<tr> 
                  <td>'.$data_PurchaseNo.'</td> 
                  <td>'.$data_SID.'</td> 
                  <td>'.$data_Date.'</td> 
                  <td>'.$data_Qty.'</td> 
                  <td>'.$data_Desc.'</td> 
				  <td>'.$data_Price.'</td> 
				  
              </tr>';
    }
    $product->free();
} 
?>
</body>
</html>