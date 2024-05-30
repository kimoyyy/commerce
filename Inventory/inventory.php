<?php
include 'db_config.php';

$sql = "SELECT * FROM Inventory";
$result = $conn->query($sql);

echo "<a href='Inventory/create_inventory.php'>Add New Inventory</a>";

if ($result->num_rows > 0) {
    echo "<table><tr><th>Inventory ID</th><th>Product ID</th><th>Quantity In Stock</th><th>Actions</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Inventory_id"]. "</td><td>" . $row["Product_id"]. "</td><td>" . $row["QuantityInStock"]. "</td>";
        echo "<td><a href='Inventory/edit_inventory.php?id=".$row["Inventory_id"]."'>Edit</a> | <a href='Inventory/delete_inventory.php?id=".$row["Inventory_id"]."'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
