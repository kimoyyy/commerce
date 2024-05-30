<?php
include 'db_config.php';

$sql = "SELECT * FROM Product";
$result = $conn->query($sql);

echo "<a href='Products/create_product.php'>Add New Product</a>";

if ($result->num_rows > 0) {
    echo "<table><tr><th>Product ID</th><th>Name</th><th>Description</th><th>Price</th><th>Stock Quantity</th><th>Actions</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Product_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["Description"]. "</td><td>" . $row["Price"]. "</td><td>" . $row["StockQuantity"]. "</td>";
        echo "<td><a href='Products/edit_product.php?id=".$row["Product_id"]."'>Edit</a> | <a href='Products/delete_product.php?id=".$row["Product_id"]."'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
