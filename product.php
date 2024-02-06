<?php

require_once 'connperfecto.php';

try {
  // query
  $stmt = $pdo->query('SELECT p.ProductName, p.Price, s.SupplierName 
                      FROM Product p
                      JOIN Supplier s ON p.SupplierID = s.SupplierID');
  
  echo '<table>';
  echo '<tr><th>Product Name</th><th>Price</th><th>Supplier Name</th></tr>';
  
  // get and show
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '<tr>';
      echo '<td>' . $row['ProductName'] . '</td>';
      echo '<td>' . $row['Price'] . '</td>';
      echo '<td>' . $row['SupplierName'] . '</td>';
      echo '</tr>';
  }
  
  echo '</table>';
} catch (PDOException $e) {
  // Show ERROR
  echo "ERROR query " . $e->getMessage();
}
?>
