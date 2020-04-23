
<html>
<body>
<?php 
$username = "mpalad1"; 
$password = "mpalad1"; 
$database = "mpalad1" = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM Purchases";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          <td> <font face="Arial">Value3</font> </td> 
          <td> <font face="Arial">Value4</font> </td> 
          <td> <font face="Arial">Value5</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Supplier"];
        $field2name = $row["Date"];
        $field3name = $row["Quantity"];
        $field4name = $row["col4"];
        $field5name = $row["col5"]; 
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>