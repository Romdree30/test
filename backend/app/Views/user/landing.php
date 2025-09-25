<!-- app/Views/user/landing.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col items-center justify-center">
    <header class="mb-8">
        <h1 class="text-4xl font-bold text-gray-800">Welcome to GarlicShrimp!</h1>
        <p class="mt-2 text-lg text-gray-600">Your activity dashboard starts here.</p>
    </header>
    <main class="w-full max-w-md bg-white rounded-lg shadow p-6 flex flex-col items-center">
        <a href="/login" class="w-full mb-4 py-2 px-4 bg-green-600 text-white rounded hover:bg-green-700 transition">Login</a>
        <a href="/register" class="w-full py-2 px-4 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition">Register</a>
    </main>
    <footer class="mt-8 text-gray-400 text-sm">
        &copy; <?= date('Y') ?> GarlicShrimp. All rights reserved.
    </footer>
</body>
</html></header>