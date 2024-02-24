<?php
// Connect DB
require_once 'connperfecto.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product Information</title>
    <style>
        /* CSS стили */
        /* Можете изменить их по своему усмотрению */
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
        input[type="text"], select {
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
        <h2>Update Product Information</h2>
        <form action="process_update_product.php" method="post">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="category">Category:</label>
            <input type="text" id="category" name="category" required>

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


