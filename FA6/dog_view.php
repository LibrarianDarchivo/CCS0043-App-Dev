<?php
$conn = new mysqli("localhost", "root", "", "dog_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dogs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #e3f2fd, #ffffff);
            margin: 0;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
            font-size: 2rem;
        }

        .container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 360px;
            margin: 15px 0;
            overflow: hidden;
            transition: transform 0.2s ease;
        }

        .card-header {
            background-color: #28a745;
            color: #fff;
            padding: 12px 16px;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .card-body {
            padding: 16px 20px;
            color: #444;
            font-size: 0.95rem;
        }

        .card-body p {
            margin: 6px 0;
        }

        .label {
            font-weight: 600;
            color: #111;
        }
    </style>
</head>
<body>
    <h2>All Dog Records</h2>

    <?php
    $count = 1;
    if ($result->num_rows > 0):
        while ($row = $result->fetch_assoc()):
    ?>
        <div class="container">
            <div class="card-header">Dog <?= $count++ ?></div>
            <div class="card-body">
                <p><span class="label">Name:</span> <?= htmlspecialchars($row['name']) ?></p>
                <p><span class="label">Breed:</span> <?= htmlspecialchars($row['breed']) ?></p>
                <p><span class="label">Age:</span> <?= htmlspecialchars($row['age']) ?>yrs old</p>
                <p><span class="label">Address:</span> <?= htmlspecialchars($row['address']) ?></p>
                <p><span class="label">Color:</span> <?= htmlspecialchars($row['color']) ?></p>
                <p><span class="label">Height:</span> <?= htmlspecialchars($row['height']) ?> ft</p>
                <p><span class="label">Weight:</span> <?= htmlspecialchars($row['weight']) ?> kilos</p>
            </div>
        </div>
    <?php
        endwhile;
    else:
    ?>
        <p>No records found.</p>
    <?php endif; ?>
</body>
</html>

<?php $conn->close(); ?>