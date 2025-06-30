<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration with Database</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 20px;
    }
    .container {
      background: #fff;
      padding: 20px;
      max-width: 500px;
      margin: auto;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      color: #333;
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    input[type="submit"] {
      margin-top: 15px;
      background-color: #007bff;
      color: white;
      padding: 10px;
      width: 100%;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .result {
      margin-top: 20px;
      padding: 15px;
      background: #e9ecef;
      border-left: 5px solid #007bff;
    }
    .error {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Registration Form</h2>
  <form method="POST">
    <label for="fullname">First Name:</label>
    <input type="text" name="fullname" required>

      <label for="middlename">Middle Name:</label>
      <input type="text" name="middlename" required>

      <label for="lastname">Last Name:</label>
      <input type="text" name="lastname" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="username">Username:</label>
    <input type="text" name="username" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <label for="confirm">Confirm Password:</label>
    <input type="password" name="confirm" required>

    <input type="submit" name="submit" value="Register">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "registration_db");

    if ($conn->connect_error) {
      die("<p class='error'>Connection failed: " . $conn->connect_error . "</p>");
    }

    // Get and sanitize input
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $middlename = $conn->real_escape_string($_POST['middlename']);
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $email = $conn->real_escape_string($_POST['email']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if ($password === $confirm) {
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO users (fullname, email, username, password)
              VALUES ('$firstname','$middlename','$lastname', '$email', '$username', '$hashedPassword')";

      if ($conn->query($sql) === TRUE) {
        echo "<div class='result'>";
        echo "<h3>Registration Successful!</h3>";
        echo "<p><strong>First Name:</strong> $firstname</p>";
        echo "<p><strong>Middle Name:</strong> $middlename</p>";
        echo "<p><strong>Last Name:</strong> $lastname</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Username:</strong> $username</p>";
        echo "</div>";
      } else {
        echo "<p class='error'>Error: " . $conn->error . "</p>";
      }
    } else {
      echo "<p class='error'>Password and Confirm Password are not the same.</p>";
    }

    $conn->close();
  }
  ?>
</div>
</body>
</html>