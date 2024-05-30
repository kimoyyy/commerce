<?php
include '../db_config.php';

$id = $_GET['id'];

$sql = "DELETE FROM `Order` WHERE Order_id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Order deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php');
?>
