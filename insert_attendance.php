<?php
include 'db_connection.php';

$pupil_id = $_POST['pupil_id'];
$attendance_date = $_POST['attendance_date'];
$status = $_POST['status'];

$sql = "INSERT INTO attendance (pupil_id, date, status) VALUES ('$pupil_id', '$attendance_date', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
