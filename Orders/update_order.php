<?php
include '../db_config.php';

$id = $_POST['id'];
$customer_id = $_POST['customer_id'];
$orderDate = $_POST['orderDate'];
$totalAmount = $_POST['totalAmount'];
$status = $_POST['status'];

$sql = "UPDATE `Order` SET Customer_id='$customer_id', OrderDate='$orderDate', TotalAmount='$totalAmount', Status='$status' WHERE Order_id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Order updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php');
?>
