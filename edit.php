<?php
include 'db.php';

$ISBN = $_POST['isbn'];
$Title = $_POST['title'];
$Copyright = $_POST['copyright'];
$Edition = $_POST['edition'];
$Price = $_POST['price'];
$Quantity = $_POST['quantity'];

$sql = "UPDATE books SET Title='$Title', Copyright='$Copyright', Edition='$Edition', Price='$Price', Quantity='$Quantity' WHERE ISBN='$ISBN'";

if ($conn->query($sql) === TRUE) {
    echo "Record successfully updated";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
