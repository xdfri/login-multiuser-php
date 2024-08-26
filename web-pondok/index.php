<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-red-600">
                    <img src="img/pcn.png" alt="logo" class="h-20 ">
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="text-gray-700 hover:text-red-600">Home</a>
                    <a href="#program" class="text-gray-700 hover:text-red-600">Program</a>
                    <a href="#psb" class="text-gray-700 hover:text-red-600">PSB</a>
                    <a href="#artikel" class="text-gray-700 hover:text-red-600">Artikel</a>
                </div>
                <div>
                    <a href="login.php" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-red-600 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Our Website</h1>
            <p class="text-lg">Discover our programs, read articles, and stay updated with the latest news.</p>
        </div>
    </section>

    <!-- Program Section -->
    <section id="program" class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8">Our Programs</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Program 1</h3>
                    <p class="text-gray-700">Description of Program 1.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Program 2</h3>
                    <p class="text-gray-700">Description of Program 2.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Program 3</h3>
                    <p class="text-gray-700">Description of Program 3.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PSB Section -->
    <section id="psb" class="bg-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8">Penerimaan Siswa Baru (PSB)</h2>
            <p class="text-center text-gray-700">Informasi lengkap tentang penerimaan siswa baru.</p>
        </div>
    </section>

    <!-- Artikel Section -->
    <section id="artikel" class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8">Artikel Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Artikel 1</h3>
                    <p class="text-gray-700">Ringkasan dari Artikel 1.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Artikel 2</h3>
                    <p class="text-gray-700">Ringkasan dari Artikel 2.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Artikel 3</h3>
                    <p class="text-gray-700">Ringkasan dari Artikel 3.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Section -->
    <section id="berita" class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8">Berita Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Berita 1</h3>
                    <p class="text-gray-700">Ringkasan dari Berita 1.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Berita 2</h3>
                    <p class="text-gray-700">Ringkasan dari Berita 2.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Berita 3</h3>
                    <p class="text-gray-700">Ringkasan dari Berita 3.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2024 Your Website. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
