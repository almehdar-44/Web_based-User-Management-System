<?php
include 'db.php';

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO user (name, age) VALUES ('$name', $age)";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "خطأ في الإدخال: " . $conn->error;
}
?>
