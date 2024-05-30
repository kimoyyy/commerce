<?php
include '../db_config.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "INSERT INTO Customer (FirstName, LastName, Email, Phone, Address) VALUES ('$firstName', '$lastName', '$email', '$phone', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "New customer created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php');
?>
