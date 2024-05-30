<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Order</title>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Order</title>
    <style>
        /* Your existing CSS styles */
    </style>
</head>
<body>
<div class="container">
    <h1>Create New Order</h1>
    <form action="insert_order.php" method="post">
        <label for="customer_id">Customer:</label>
        <select id="customer_id" name="customer_id">
            <option value="">Select a customer</option>
            <?php
            include_once '../db_config.php';
            $sql_query = "SELECT Customer_id, FirstName, LastName FROM Customer";
            $result_set = $conn->query($sql_query);
            if ($result_set) {
                while ($row = $result_set->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['Customer_id']; ?>">
                        <?php echo $row['FirstName'] . ' ' . $row['LastName']; ?>
                    </option>
                    <?php
                }
                $result_set->free();
            } else {
                // Handle query error
                echo "Error: " . $conn->error;
            }
            ?>
        </select>
        <label for="orderDate">Order Date:</label>
        <input type="date" id="orderDate" name="orderDate" required><br><br>
        <label for="products">Products:</label>
        <select id="products" name="product" onchange="updateTotal()">
            <?php
            $sql_query = "SELECT Product_id, name, Price FROM Product";
            $result_set = $conn->query($sql_query);
            if ($result_set) {
                while ($row = $result_set->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['Product_id']; ?>"
                            data-price="<?php echo $row['Price']; ?>">
                        <?php echo $row['name']; ?>
                    </option>
                    <?php
                }
                $result_set->free();
            } else {
                // Handle query error
                echo "Error: " . $conn->error;
            }
            ?>
        </select>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" value="1" onchange="updateTotal()" required><br><br>
        <label for="totalAmount">Total Amount:</label>
        <input type="text" id="totalAmount" name="totalAmount" readonly required><br><br>
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required><br><br>
        <input type="submit" value="Create">
    </form>
    <a href="../index.php">Back to Dashboard</a>
</div>

<script>
    function updateTotal() {
        var productSelect = document.getElementById('products');
        var selectedOption = productSelect.options[productSelect.selectedIndex];
        var price = selectedOption.getAttribute('data-price');
        var quantity = document.getElementById('quantity').value;
        var total = parseFloat(price) * parseInt(quantity);
        document.getElementById('totalAmount').value = total.toFixed(2);
    }
</script>
</body>
</html>