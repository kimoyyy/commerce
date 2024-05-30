<?php
include '../db_config.php';

$id = $_GET['id'];

$sql = "DELETE FROM Product WHERE Product_id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Product deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php');
?>
