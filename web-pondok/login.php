<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 1.5rem;
            border-radius: 0.375rem;
            background: white;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="form-container">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Login</h2>
        <form method="post" action="login_process.php">
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-medium mb-2">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" name="submit" class="w-full py-2 px-4 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
        </form>
        <?php if (isset($_GET['error'])): ?>
            <p class="text-red-500 mt-2 text-center"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
