<h2>Guestbook</h2>
<form action="savemessage.php" method="POST">
    Name: <input type="text" name="name" required><br><br>
    Message: <textarea name="message" required></textarea><br><br>
    <button type="submit">Submit</button>
</form>
<h3>Messages:</h3>
<?php
include 'db_connect.php';
$result = $conn->query("SELECT * FROM messages ORDER BY id DESC");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<strong>" . htmlspecialchars($row['name']) . ":</strong> " .
            htmlspecialchars($row['message']) . "<br><hr>";
    }
} else {
    echo "No messages yet.";
}
$conn->close();
#auto refresh feature, set to 10s
#$page = $_SERVER['PHP_SELF'];
#$sec = "10";
#header("Refresh: $sec; url=$page");
?>