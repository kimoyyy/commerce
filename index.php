<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Simple Commerce Dashboard</h1>
        <div class="section">
            <h2>Customers</h2>
            <?php include 'Customers/customers.php'; ?>
        </div>
        <div class="section">
            <h2>Orders</h2>
            <?php include 'Orders/orders.php'; ?>
        </div>
        <div class="section">
            <h2>Products</h2>
            <?php include 'Products/products.php'; ?>
        </div>
        <div class="section">
            <h2>Inventory</h2>
            <?php include 'Inventory/inventory.php'; ?>
        </div>
    </div>
</body>
</html>
