<?php
include 'db_connect.php'; // connect to database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $message = $_POST['message'];
        $stmt = $conn->prepare("INSERT INTO messages (name, message) VALUES (?,
?)");
        $stmt->bind_param("ss", $name, $message);
        if ($stmt->execute()) {
            echo "Message saved successfully!";
            header('Location: form.php');
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    } else {
        echo "Name and message are required.";
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>