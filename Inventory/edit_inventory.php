<?php
include '../db_config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM Inventory WHERE Inventory_id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Inventory</title>
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
        <h1>Edit Inventory</h1>
        <form action="update_inventory.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="product_id">Product ID:</label>
            <input type="number" id="product_id" name="product_id" value="<?php echo $row['Product_id']; ?>" required><br><br>
            <label for="quantityInStock">Quantity In Stock:</label>
            <input type="number" id="quantityInStock" name="quantityInStock" value="<?php echo $row['QuantityInStock']; ?>" required><br><br>
            <input type="submit" value="Update">
        </form>
        <a href="../index.php">Back to Dashboard</a>
    </div>
</body>
</html>
