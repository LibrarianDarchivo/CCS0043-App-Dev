<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information (GET Method)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .form-container {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .form-container:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }
        .input-field {
            border: 2px solid #e2e8f0;
            transition: all 0.3s;
        }
        .input-field:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.3);
        }
        .submit-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            letter-spacing: 1px;
            transition: all 0.3s;
        }
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(0, 0, 0, 0.1);
        }
        .info-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-left: 5px solid #4f46e5;
            animation: fadeIn 0.5s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
<div class="form-container w-full max-w-2xl p-8">
    <h1 class="text-3xl font-bold text-center mb-8 text-gradient bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600">
        Personal Information Form (GET)
    </h1>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)): ?>
        <div class="info-card p-6 mb-8 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4 text-indigo-700">Submitted Information:</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-gray-600 mb-1">First Name:</p>
                    <p class="font-medium text-gray-800"><?php echo htmlspecialchars(isset($_GET['firstname']) ? $_GET['firstname'] : ''); ?></p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1">Middle Name:</p>
                    <p class="font-medium text-gray-800"><?php echo htmlspecialchars(isset($_GET['middlename']) ? $_GET['middlename'] : ''); ?></p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1">Last Name:</p>
                    <p class="font-medium text-gray-800"><?php echo htmlspecialchars(isset($_GET['lastname']) ? $_GET['lastname'] : ''); ?></p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1">Date of Birth:</p>
                    <p class="font-medium text-gray-800"><?php echo htmlspecialchars(isset($_GET['dob']) ? $_GET['dob'] : ''); ?></p>
                </div>
                <div class="md:col-span-2">
                    <p class="text-gray-600 mb-1">Address:</p>
                    <p class="font-medium text-gray-800"><?php echo htmlspecialchars(isset($_GET['address']) ? $_GET['address'] : ''); ?></p>
                </div>
            </div>
        </div>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="block text-center text-indigo-600 hover:text-indigo-800 mb-6">
            ← Back to Form
        </a>
    <?php else: ?>
        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label for="firstname" class="block text-sm font-medium text-gray-700 mb-1">First Name *</label>
                    <input type="text" id="firstname" name="firstname" required
                           class="input-field w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-1 focus:ring-indigo-500">
                </div>
                <div>
                    <label for="middlename" class="block text-sm font-medium text-gray-700 mb-1">Middle Name</label>
                    <input type="text" id="middlename" name="middlename"
                           class="input-field w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-1 focus:ring-indigo-500">
                </div>
                <div>
                    <label for="lastname" class="block text-sm font-medium text-gray-700 mb-1">Last Name *</label>
                    <input type="text" id="lastname" name="lastname" required
                           class="input-field w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-1 focus:ring-indigo-500">
                </div>
            </div>

            <div>
                <label for="dob" class="block text-sm font-medium text-gray-700 mb-1">Date of Birth *</label>
                <input type="date" id="dob" name="dob" required
                       class="input-field w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-1 focus:ring-indigo-500">
            </div>

            <div>
                <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address *</label>
                <textarea id="address" name="address" rows="3" required
                          class="input-field w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-1 focus:ring-indigo-500"></textarea>
            </div>

            <div>
                <button type="submit" class="submit-btn w-full py-3 px-6 rounded-lg text-white font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Submit Information
                </button>
            </div>

            <p class="text-sm text-gray-500 text-center">
                Note: This form uses the GET method, so the submitted data will appear in the URL.
            </p>
        </form>
    <?php endif; ?>
</div>
</body>
</html>