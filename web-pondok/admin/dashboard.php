<?php
session_start();
if ($_SESSION['user_type'] != 'admin') {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center h-screen">
    <div class="max-w-md mx-auto p-6 bg-white shadow-md rounded-md">
        <h1 class="text-3xl font-bold mb-4">admin Dashboard</h1>
        <p>Welcome, admin!</p>
        <a href="../logout.php" class="text-blue-500 hover:underline">Logout</a>
    </div>
</body>
</html>
