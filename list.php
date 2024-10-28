<?php
include 'db.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['ISBN']}</td>
        <td>{$row['Title']}</td>
        <td>{$row['Copyright']}</td>
        <td>{$row['Edition']}</td>
        <td>{$row['Price']}</td>
        <td>{$row['Quantity']}</td>
    </tr>";
}

$conn->close();
?>
