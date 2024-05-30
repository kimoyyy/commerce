<?php
include '../db_config.php';

$id = $_GET['id'];

$sql = "DELETE FROM Inventory WHERE Inventory_id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Inventory deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php');
?>
