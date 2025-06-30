<?php
session_start();
$colors = isset($_SESSION["colors"]) ? $_SESSION["colors"] : [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Favorite Colors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff;
            text-align: center;
            padding: 50px;
        }
        .color-box {
            margin: 10px auto;
            padding: 20px;
            width: 200px;
            border-radius: 10px;
            color: black;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h2>Your Favorite Colors</h2>
<?php foreach ($colors as $color): ?>
    <div class="color-box" style="background-color: <?= htmlspecialchars($color) ?>;">
        <?= htmlspecialchars($color) ?>
    </div>
<?php endforeach; ?>
</body>
</html>