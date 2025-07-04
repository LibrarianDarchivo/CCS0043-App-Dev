<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #e3f2fd, #ffffff);
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        .container {
            background: #fff;
            padding-top: 10px;
            padding-bottom: 20px;
            padding-right: 30px;
            padding-left: 30px;
            max-width: 400px;
            width: 100%;
            margin-top: 150px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: #28a745;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .message {
            margin-top: 20px;
            color: green;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Dog Information Form</h2>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Breed:</label>
        <input type="text" name="breed" required>

        <label>Age:</label>
        <input type="number" name="age" required>

        <label>Address:</label>
        <input type="text" name="address" required>

        <label>Color:</label>
        <input type="text" name="color" required>

        <label>Height (cm):</label>
        <input type="number" step="0.1" name="height" required>

        <label>Weight (kg):</label>
        <input type="number" step="0.1" name="weight" required>

        <input type="submit" name="submit" value="Add Dog">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $conn = new mysqli("localhost", "root", "", "dog_db");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $name = $conn->real_escape_string($_POST['name']);
        $breed = $conn->real_escape_string($_POST['breed']);
        $age = (int)$_POST['age'];
        $address = $conn->real_escape_string($_POST['address']);
        $color = $conn->real_escape_string($_POST['color']);
        $height = (float)$_POST['height'];
        $weight = (float)$_POST['weight'];

        $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
                VALUES ('$name', '$breed', $age, '$address', '$color', $height, $weight)";

        if ($conn->query($sql) === TRUE) {
            echo "<p class='message'>Dog added successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
        }

        $conn->close();
    }
    ?>
</div>
</body>
</html>