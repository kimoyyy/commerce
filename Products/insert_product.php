<?php
include '../db_config.php';

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$stockQuantity = $_POST['stockQuantity'];

$sql = "INSERT INTO Product (name, Description, Price, StockQuantity) VALUES ('$name', '$description', '$price', '$stockQuantity')";

if ($conn->query($sql) === TRUE) {
    echo "New product created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php');
?>
