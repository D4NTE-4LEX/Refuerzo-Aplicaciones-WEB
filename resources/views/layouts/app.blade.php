<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Fast Package')</title>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
<!-- Header -->
@include('components.header')

<!-- Main Content -->
<main class="container mx-auto py-8">
    @yield('content')
</main>

<!-- Footer -->
@include('components.footer')
</body>
</html>
