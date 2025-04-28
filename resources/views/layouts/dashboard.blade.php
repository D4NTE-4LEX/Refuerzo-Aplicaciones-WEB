<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/dashboard.js'])
</head>
<body class="bg-gray-100">
    @include('components.header-dashboard')
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>
</body>
</html>
