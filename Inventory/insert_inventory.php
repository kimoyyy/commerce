<?php
include '../db_config.php';

$product_id = $_POST['product_id'];
$quantityInStock = $_POST['quantityInStock'];

$sql = "INSERT INTO Inventory (Product_id, QuantityInStock) VALUES ('$product_id', '$quantityInStock')";

if ($conn->query($sql) === TRUE) {
    echo "New inventory created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php');
?>
