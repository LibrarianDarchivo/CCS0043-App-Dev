<?php
#$conn = new mysqli('localhost', 'root', '', 'guestbook_db');
$conn = new mysqli('mysql-mariadb-sea01-10-101.zap-srv.com', 'zap1127366-2', 'ohm0aHCcb4UJM8f5', 'zap1127366-2');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>