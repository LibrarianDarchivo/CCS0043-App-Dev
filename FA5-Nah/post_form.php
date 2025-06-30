<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information (POST Method)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .form-container {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .form-container:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }
        .input-field {
            border: 2px solid #e0f2fe;
            transition: all 0.3s;
        }
        .input-field:focus {
            border-color: #0ea5e9;
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.3);
        }
        .submit-btn {
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
            letter-spacing: 1px;
            transition: all 0.3s;
        }
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(0, 0, 0, 0.1);
        }
        .info-card {
            background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 100%);
            border-left: 5px solid #0ea5e9;
            animation: fadeIn 0.5s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-blue-50 min-h-screen flex items-center justify-center p-4">
<div class="form-container w-full max-w-2xl p-8">
    <h1 class="text-3xl font-bold text-center mb-8 text-gradient bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-cyan-500">
        Personal Information Form (POST)
    </h1>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)): ?>
        <div class="info-card p-6 mb-8 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4 text-blue-700">Submitted Information:</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-gray-600 mb-1">First Name:</p>
                    <p class="font-medium text-gray-800"><?php echo htmlspecialchars(isset($_POST['firstname']) ? $_POST['firstname'] : ''); ?></p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1">Middle Name:</p>
                    <p class="font-medium text-gray-800"><?php echo htmlspecialchars(isset($_POST['middlename']) ? $_POST['middlename'] : ''); ?></p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1">Last Name:</p>
                    <p class="font-medium text-gray-800"><?php echo htmlspecialchars(isset($_POST['lastname']) ? $_POST['lastname'] : ''); ?></p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1">Date of Birth:</p>
                    <p class="font-medium text-gray-800"><?php echo htmlspecialchars(isset($_POST['dob']) ? $_POST['dob'] : ''); ?></p>
                </div>
                <div class="md:col-span-2">
                    <p class="text-gray-600 mb-1">Address:</p>
                    <p class="font-medium text-gray-800"><?php echo htmlspecialchars(isset($_POST['address']) ? $_POST['address'] : ''); ?></p>
                </div>
            </div>
        </div>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="block text-center text-blue-600 hover:text-blue-800 mb-6">
            ← Back to Form
        </a>
    <?php else: ?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label for="firstname" class="block text-sm font-medium text-gray-700 mb-1">First Name *</label>
                    <input type="text" id="firstname" name="firstname" required
                           class="input-field w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500">
                </div>
                <div>
                    <label for="middlename" class="block text-sm font-medium text-gray-700 mb-1">Middle Name</label>
                    <input type="text" id="middlename" name="middlename"
                           class="input-field w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500">
                </div>
                <div>
                    <label for="lastname" class="block text-sm font-medium text-gray-700 mb-1">Last Name *</label>
                    <input type="text" id="lastname" name="lastname" required
                           class="input-field w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500">
                </div>
            </div>

            <div>
                <label for="dob" class="block text-sm font-medium text-gray-700 mb-1">Date of Birth *</label>
                <input type="date" id="dob" name="dob" required
                       class="input-field w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>

            <div>
                <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address *</label>
                <textarea id="address" name="address" rows="3" required
                          class="input-field w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500"></textarea>
            </div>

            <div>
                <button type="submit" class="submit-btn w-full py-3 px-6 rounded-lg text-white font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Submit Information
                </button>
            </div>

            <p class="text-sm text-gray-500 text-center">
                Note: This form uses the POST method, so the submitted data won't appear in the URL.
            </p>
        </form>
    <?php endif; ?>
</div>
</body>
</html>