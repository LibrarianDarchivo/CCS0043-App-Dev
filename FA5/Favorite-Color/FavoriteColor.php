<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f7f8fa, #ddeaf7);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 20px;
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Enter Your Favorite Colors</h2>
    <form action="ResultColors.php" method="POST">
        <label for="color1">Favorite color 1:</label>
        <input type="text" name="color1" id="color1">

        <label for="color2">Favorite color 2:</label>
        <input type="text" name="color2" id="color2">

        <label for="color3">Favorite color 3:</label>
        <input type="text" name="color3" id="color3">

        <label for="color4">Favorite color 4:</label>
        <input type="text" name="color4" id="color4">

        <label for="color5">Favorite color 5:</label>
        <input type="text" name="color5" id="color5">

        <input type="submit" value="Send Colors">
    </form>
</div>
</body>
</html>
