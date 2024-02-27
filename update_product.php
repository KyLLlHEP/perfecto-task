<?php
// Connecting to the database
require_once 'connperfecto.php';

// Checking if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving data from the form
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $supplier_id = $_POST['supplier_id'];

    // Image processing
    $image_path = ''; // default empty string
    if ($_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = '/Applications/XAMPP/xamppfiles/htdocs/img/'; //  where the image is uploaded
        $image_name = $_FILES['product_image']['name'];
        $temp_image_path = $_FILES['product_image']['tmp_name'];
        $image_path = $upload_dir . $image_name;
        move_uploaded_file($temp_image_path, $image_path);
    }

   // prep SQL
$sql = "INSERT INTO Product (ProductName, Description, Category, Price, ProductImagePath, SupplierID) 
VALUES (?, ?, ?, ?, ?, ?)";

// Prepare the SQL statement
$stmt = $pdo->prepare($sql);

// Bind parameters
$stmt->bindParam(1, $product_name);
$stmt->bindParam(2, $description);
$stmt->bindParam(3, $category);
$stmt->bindParam(4, $price);
$stmt->bindParam(5, $image_path);
$stmt->bindParam(6, $supplier_id);

    // Execute the SQL statement
    try {
        $stmt->execute();
        echo "Data has been successfully added to the database.";
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product Information</title>
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
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"], select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container"> 
    <h2>Add New Product</h2>
    <form action="update_product.php" method="post" enctype="multipart/form-data">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <option value="Interior">Interior</option>
            <option value="Exterior">Exterior</option>
        </select>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required>

        <label for="product_image">Product Image:</label>
        <input type="file" id="product_image" name="product_image" accept="image/*" required>

        <label for="supplier_id">Supplier ID:</label>
        <select id="supplier_id" name="supplier_id" required>
            <option value="S001">Supplier 1</option>
            <option value="S002">Supplier 2</option>
        </select>

        <input type="submit" value="Update Product">
    </form>
</div>
</body>
</html>
