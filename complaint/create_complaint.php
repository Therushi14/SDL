<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $complaint = $_POST['complaint'];

    $stmt = $con->prepare("INSERT INTO complaints (name, email, complaint, status, created_at) VALUES (?, ?, ?, 'Pending', NOW())");
    $stmt->bind_param("sss", $name, $email, $complaint);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit(); 
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$con->close();
?>
