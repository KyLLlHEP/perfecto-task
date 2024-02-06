<?php

require_once 'connperfecto.php';

try {
  // query
  $stmt = $pdo->query('SELECT * FROM Supplier');
  
  echo '<table>';
  echo '<tr><th>Supplier ID</th><th>Supplier Name</th><th>Phone Number</th><th>Email</th><th>Website</th></tr>';
  
  // get and show
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '<tr>';
      echo '<td>' . $row['SupplierID'] . '</td>';
      echo '<td>' . $row['SupplierName'] . '</td>';
      echo '<td>' . $row['PhoneNumber'] . '</td>';
      echo '<td>' . $row['Email'] . '</td>';
      echo '<td>' . $row['Website'] . '</td>';
      echo '</tr>';
  }
  
  echo '</table>';
} catch (PDOException $e) {
  // Show ERROR
  echo "ERROR query " . $e->getMessage();
}
?>
