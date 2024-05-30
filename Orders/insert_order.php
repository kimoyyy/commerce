<?php
include '../db_config.php';

// Get the data from POST request
$customer_id = $_POST['customer_id'];
$orderDate = $_POST['orderDate'];
$totalAmount = $_POST['totalAmount'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];

// Ensure the Customer_id exists in the Customer table before inserting
$check_customer_sql = "SELECT * FROM Customer WHERE Customer_id = '$customer_id'";
$customer_result = $conn->query($check_customer_sql);

if ($customer_result->num_rows > 0) {
    // Insert the order if the customer exists
    $sql = "INSERT INTO `Order` (Customer_id, OrderDate, TotalAmount, Product, Quantity, Status) VALUES ('$customer_id', '$orderDate', '$totalAmount', '$product', '$quantity', '$status')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New order created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: Customer ID does not exist.";
}

$conn->close();
header('Location: ../index.php');
?>
