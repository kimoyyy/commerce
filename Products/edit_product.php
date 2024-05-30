<?php
include '../db_config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM Product WHERE Product_id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #4CAF50;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="number"],
        form input[type="submit"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
            width: 94%;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <form action="update_product.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br><br>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" value="<?php echo $row['Description']; ?>" required><br><br>
            <label for="price">Price:</label>
            <input type="number" step="0.01" id="price" name="price" value="<?php echo $row['Price']; ?>" required><br><br>
            <label for="stockQuantity">Stock Quantity:</label>
            <input type="number" id="stockQuantity" name="stockQuantity" value="<?php echo $row['StockQuantity']; ?>" required><br><br>
            <input type="submit" value="Update">
        </form>
        <a href="../index.php">Back to Dashboard</a>
    </div>
</body>
</html>
