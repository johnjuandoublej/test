<?php
include 'db.php';

$ISBN = $_POST['isbn'];
$Title = $_POST['title'];
$Copyright = $_POST['copyright'];
$Edition = $_POST['edition'];
$Price = $_POST['price'];
$Quantity = $_POST['quantity'];

$sql = "INSERT INTO books (ISBN, Title, Copyright, Edition, Price, Quantity) VALUES ('$ISBN', '$Title', '$Copyright', '$Edition', '$Price', '$Quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Record successfully added";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
