<?php
include 'db_connection.php';

$class_name = $_POST['class_name'];
$class_capacity = $_POST['class_capacity'];

$sql = "INSERT INTO classes (name, capacity) VALUES ('$class_name', '$class_capacity')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
