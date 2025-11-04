<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Rental Mobil') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-[Poppins] antialiased bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-gray-100 overscroll-none">

    <div class="min-h-screen flex flex-col items-center px-6 mt-16">

        <div class="w-full max-w-md">
            {{ $slot }}
        </div>

        <div class="mt-4 text-sm text-gray-500 text-center">
            &copy; {{ date('Y') }} Rental Mobil. All rights reserved.
        </div>
    </div>
</body>
</html>
