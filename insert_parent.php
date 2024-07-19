<?php
include 'db_connection.php';

$parent_name = $_POST['parent_name'];
$parent_address = $_POST['parent_address'];
$parent_email = $_POST['parent_email'];
$parent_phone = $_POST['parent_phone'];

$sql = "INSERT INTO parents (name, address, email, phone) VALUES ('$parent_name', '$parent_address', '$parent_email', '$parent_phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
