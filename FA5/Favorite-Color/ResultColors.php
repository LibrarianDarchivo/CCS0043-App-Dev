<?php
session_start();

// Store colors in session
$_SESSION["color1"] = $_POST["color1"];
$_SESSION["color2"] = $_POST["color2"];
$_SESSION["color3"] = $_POST["color3"];
$_SESSION["color4"] = $_POST["color4"];
$_SESSION["color5"] = $_POST["color5"];

// Connect to database
$conn = new mysqli("localhost", "root", "", "registration_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert into favorite_colors table
$session_id = session_id();
$color1 = $conn->real_escape_string($_SESSION["color1"]);
$color2 = $conn->real_escape_string($_SESSION["color2"]);
$color3 = $conn->real_escape_string($_SESSION["color3"]);
$color4 = $conn->real_escape_string($_SESSION["color4"]);
$color5 = $conn->real_escape_string($_SESSION["color5"]);

$sql = "INSERT INTO favorite_colors (color1, color2, color3, color4, color5)
        VALUES ($color1', '$color2', '$color3', '$color4', '$color5')";

if (!$conn->query($sql)) {
    echo "<p class='error'>Error saving colors: " . $conn->error . "</p>";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors Result</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #e3f2fd, #ffffff);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }

        .color-item {
            padding: 10px;
            margin: 5px 0;
            border-left: 6px solid #3498db;
            background-color: #f0f6ff;
            border-radius: 5px;
            font-size: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .color-swatch {
            width: 25px;
            height: 25px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<div class="result-container">
    <h2>Favorite Colors</h2>

    <?php
    for ($i = 1; $i <= 5; $i++) {
        $color = htmlspecialchars($_SESSION["color$i"]);
        echo "<div class='color-item'>My Favorite Color $i: $color";
        if (!empty($color)) {
            echo "<span class='color-swatch' style='background-color: $color;'></span>";
        }
        echo "</div>";
    }
    ?>
</div>
</body>
</html>
