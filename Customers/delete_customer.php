<?php
include '../db_config.php';

$id = $_GET['id'];

$sql = "DELETE FROM Customer WHERE Customer_id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Customer deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php');
?>
