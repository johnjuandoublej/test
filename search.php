<?php
include 'db.php';

$ISBN = $_GET['isbn'];

$sql = "SELECT * FROM books WHERE ISBN = '$ISBN'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $book = $result->fetch_assoc();
    echo json_encode($book);
} else {
    echo json_encode(null);
}

$conn->close();
?>
