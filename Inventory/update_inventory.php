<?php
include '../db_config.php';

$id = $_POST['id'];
$product_id = $_POST['product_id'];
$quantityInStock = $_POST['quantityInStock'];

$sql = "UPDATE Inventory SET Product_id='$product_id', QuantityInStock='$quantityInStock' WHERE Inventory_id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Inventory updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php');
?>
