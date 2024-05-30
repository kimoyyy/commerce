<?php
include '../db_config.php';

$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "UPDATE Customer SET FirstName='$firstName', LastName='$lastName', Email='$email', Phone='$phone', Address='$address' WHERE Customer_id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Customer updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php');
?>
