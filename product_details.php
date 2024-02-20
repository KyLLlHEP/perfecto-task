<?php
// Connect DB
require_once 'connperfecto.php';


?>
  <!-- HTML part  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            color: #555;
            margin-bottom: 10px;
        }
        .product-image {
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 5px;
            margin-bottom: 20px;
        }
        .price {
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        require_once 'connperfecto.php';

        // Get param (ProductReference)
        if (isset($_GET['product_id'])) {
            $product_id = $_GET['product_id'];

            // querry DB and get information 
            $sql = "SELECT ProductReference, ProductName, Description, Category, Price, ProductImagePath, SupplierID FROM Product WHERE ProductReference = :product_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':product_id', $product_id);
            $stmt->execute();

            // get date from DB about product 
            $product = $stmt->fetch(PDO::FETCH_ASSOC);

            // Check date get or not
            if ($product) {
                // Show information 
                echo '<h1>' . $product['ProductName'] . '</h1>';
                echo '<div class="product-image"><img src="' . $product['ProductImagePath'] . '" alt="Product Image"></div>';
                echo '<p><strong>Description:</strong> <span style="color: blue;">' . $product['Description'] . '</span></p>';
                echo '<p><strong>Category:</strong> ' . $product['Category'] . '</p>';
                echo '<p><strong>Price:</strong> <span class="price">' . $product['Price'] . '</span></p>';
            } else {
                echo 'Product not found.';
            }
        } else {
            echo 'Product ID not specified.';
        }
        ?>
    </div>
</body>
</html>
