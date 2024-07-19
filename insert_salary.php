<?php
include 'db_connection.php';

$teacher_id = $_POST['teacher_id'];
$salary_amount = $_POST['salary_amount'];
$salary_date = $_POST['salary_date'];

$sql = "INSERT INTO salary (teacher_id, amount, date) VALUES ('$teacher_id', '$salary_amount', '$salary_date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
