<?php
include '../db_config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM `Order` WHERE Order_id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Order</title>
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
        form input[type="date"],
        form input[type="text"],
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
        <h1>Edit Order</h1>
        <form action="update_order.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="customer_id">Customer ID:</label>
            <input type="number" id="customer_id" name="customer_id" value="<?php echo $row['Customer_id']; ?>" required><br><br>
            <label for="orderDate">Order Date:</label>
            <input type="date" id="orderDate" name="orderDate" value="<?php echo $row['OrderDate']; ?>" required><br><br>
            <label for="totalAmount">Total Amount:</label>
            <input type="number" step="0.01" id="totalAmount" name="totalAmount" value="<?php echo $row['TotalAmount']; ?>" required><br><br>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" value="<?php echo $row['Status']; ?>" required><br><br>
            <input type="submit" value="Update">
        </form>
        <a href="../index.php">Back to Dashboard</a>
    </div>
</body>
</html>
