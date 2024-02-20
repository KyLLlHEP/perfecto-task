<?php

require_once 'connperfecto.php';

$sql = "SELECT ProductReference, ProductName, Description, Category, Price, ProductImagePath, SupplierID FROM Product";

// Querry and use result
$stmt = $pdo->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            max-width: 150px;
            max-height: 150px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Product List</h2>
        <table>
            <tr>
                <th>Product Reference</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Image</th>
                <th>Supplier</th>
            </tr>
            <?php
            require_once 'connperfecto.php';

            $sql = "SELECT ProductReference, ProductName, Description, Category, Price, ProductImagePath, SupplierID FROM Product";

            // use result
            $stmt = $pdo->query($sql);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                echo '<td>' . $row['ProductReference'] . '</td>';
                echo '<td>' . $row['ProductName'] . '</td>';
                echo '<td>' . $row['Description'] . '</td>';
                echo '<td>' . $row['Category'] . '</td>';
                echo '<td>' . $row['Price'] . '</td>';
                echo '<td><img src="' . $row['ProductImagePath'] . '" alt="Product Image"></td>';
                echo '<td>' . $row['SupplierID'] . '</td>';
                echo '</tr>';
                

            }
            ?>
        </table>
    </div>
</body>
</html>

