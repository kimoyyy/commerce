<?php
include 'db_config.php';

$sql = "SELECT * FROM Customer";
$result = $conn->query($sql);

echo "<a href='Customers/create_customer.php'>Add New Customer</a>";

if ($result->num_rows > 0) {
    echo "<table><tr><th>Customer ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Actions</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Customer_id"]. "</td><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["Phone"]. "</td><td>" . $row["Address"]. "</td>";
        echo "<td><a href='Customers/edit_customer.php?id=".$row["Customer_id"]."'>Edit</a> | <a href='Customers/delete_customer.php?id=".$row["Customer_id"]."'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
