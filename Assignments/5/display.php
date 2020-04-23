<!DOCTYPE html>
<html>
<body>

<?php

$servername = "localhost"; 
$username = "mpalad1"; 	   
$password = "mpalad1";     
$dbname = "mpalad1";       
//Comment: The professor told us to use this code. It makes a connection variable called "conn". It passes the arguments. 
$conn = new mysqli($servername, $username, $password, $dbname);
//Comment: This checks the connection. If it fails, it will echo the fail result, otherwise it was successful. 
if ($conn->connect_error) {
    echo "Connection failed.";
}
echo " ";

//choosing to select all the data from the table purchases in the database
$command = "SELECT * FROM Purchases";
$data =$conn->query($command);


// num_rows is a function . 
if ($data->num_rows > 0) {
    echo "<table>
			<tr>
			<th>Purchase No</th>
			<th>Supplier ID</th> 
			<th>Date </th> 
			<th>Quantity</th> 
			<th>Description</th> 
			<th>Price</th> 
			</tr>";

//fetch_assoc is a function  .
    while($row = $data->fetch_assoc()) {
        echo 
			"<tr><td>" 
			.$row["PurchaseNo"] ."    "
			."</td><td>" ."    "
			.$row["SupplierID"] ."    "
			.$row["DateOfPurchase"] ."    "
			."</td></tr>"  ."    "
			.$row["QuantityPurchased"] ."    "
			."</td><td>"  ."    "
			.$row["DescriptionOfItem"] ."    "
			."</td><td>" ."    "
			.$row["UnitPrice"]
			;
    }
    echo "</table>";
} else {
    echo "No results to show";
}

$conn->close();
?>


</body>
</html>