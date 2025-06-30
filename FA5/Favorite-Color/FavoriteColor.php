<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["colors"] = [
        $_POST["color1"],
        $_POST["color2"],
        $_POST["color3"],
        $_POST["color4"],
        $_POST["color5"]
    ];
    header("Location: ResultColors.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enter Your Favorite Colors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            text-align: center;
            padding: 50px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"] {
            margin: 10px 0;
            padding: 8px;
            width: 80%;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h2>Enter your favorite colors</h2>
<form method="POST">
    <input type="text" name="color1" placeholder="Favorite color 1"><br>
    <input type="text" name="color2" placeholder="Favorite color 2"><br>
    <input type="text" name="color3" placeholder="Favorite color 3"><br>
    <input type="text" name="color4" placeholder="Favorite color 4"><br>
    <input type="text" name="color5" placeholder="Favorite color 5"><br>
    <input type="submit" value="Send Colors">
</form>
</body>
</html>