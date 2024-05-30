<?php
include 'db_config.php';

$sql = "SELECT * FROM `Order`";
$result = $conn->query($sql);

echo "<a href='Orders/create_order.php'>Add New Order</a>";

if ($result->num_rows > 0) {
    echo "<table><tr><th>Order ID</th><th>Customer ID</th><th>Order Date</th><th>Total Amount</th><th>Product</th><th>Quantity</th><th>Status</th><th>Actions</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Order_id"]. "</td><td>" . $row["Customer_id"]. "</td><td>" . $row["OrderDate"]. "</td><td>" . $row["TotalAmount"]. "</td><td>" . $row["Product"]. "</td><td>" . $row["Quantity"]. "</td><td>" . $row["Status"]. "</td>";
        echo "<td><a href='Orders/edit_order.php?id=".$row["Order_id"]."'>Edit</a> | <a href='Orders/delete_order.php?id=".$row["Order_id"]."'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
