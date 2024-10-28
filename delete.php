<?php
include 'db.php';

$ISBN = $_POST['isbn'];

$sql = "DELETE FROM books WHERE ISBN='$ISBN'";

if ($conn->query($sql) === TRUE) {
    echo "Record successfully deleted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
