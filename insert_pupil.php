<?php
include 'db_connection.php';

$pupil_name = $_POST['pupil_name'];
$pupil_address = $_POST['pupil_address'];
$pupil_medical = $_POST['pupil_medical'];
$class_id = $_POST['class_id'];

$sql = "INSERT INTO pupils (name, address, medical_info, class_id) VALUES ('$pupil_name', '$pupil_address', '$pupil_medical', '$class_id')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
