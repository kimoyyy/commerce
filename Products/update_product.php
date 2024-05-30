<?php
include '../db_config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$stockQuantity = $_POST['stockQuantity'];

$sql = "UPDATE Product SET name='$name', Description='$description', Price='$price', StockQuantity='$stockQuantity' WHERE Product_id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Product updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php');
?>
