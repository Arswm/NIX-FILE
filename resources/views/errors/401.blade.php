<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unauthorized Access</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded-lg shadow-lg text-center">
  <h1 class="text-4xl font-bold text-red-500 mb-4">401 - Unauthorized</h1>
  <p class="text-gray-700 mb-6">Oops! You need to be logged in to access this page.</p>
  <a href="{{ route('home') }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
    Go to Home
  </a>
</div>
</body>
</html>

