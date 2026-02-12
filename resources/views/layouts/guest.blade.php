<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-100 dark:bg-gray-900">

    <div class="min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8">

        <!-- Logo -->
        <div class="mb-8">
            <a href="/">
                <x-application-logo class="w-24 h-24 text-indigo-600" />
            </a>
        </div>

        <!-- Auth Card -->
        <div class="w-full sm:max-w-md bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8">
            {{ $slot }}
        </div>

    </div>
</body>
</html>
