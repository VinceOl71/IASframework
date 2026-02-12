<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel App') }}</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600">
                {{ config('app.name', 'Laravel') }}
            </h1>

            <div class="space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-indigo-600 font-medium">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 font-medium">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
        <div class="container mx-auto px-6 py-20 text-center">
            <h2 class="text-4xl md:text-6xl font-bold mb-6">
                Welcome to {{ config('app.name', 'Laravel Application') }}
            </h2>
            <p class="text-lg md:text-xl mb-8">
                Build powerful web applications with Laravel & modern design.
            </p>

            <div class="space-x-4">
                <a href="{{ route('login') }}" class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
                    Get Started
                </a>
                <a href="#" class="border border-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-indigo-600 transition">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-bold text-gray-800">Features</h3>
                <p class="text-gray-600 mt-2">Everything you need to build amazing apps</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-3 text-indigo-600">Fast Performance</h4>
                    <p class="text-gray-600">
                        Optimized for speed and scalability to deliver top performance.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-3 text-indigo-600">Secure System</h4>
                    <p class="text-gray-600">
                        Built-in authentication and security features to protect your app.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-3 text-indigo-600">Modern Design</h4>
                    <p class="text-gray-600">
                        Clean, responsive, and user-friendly interface for all devices.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action -->
    <section class="bg-indigo-600 text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-4">Ready to get started?</h3>
            <p class="mb-6">Join us today and start building your project.</p>

            <a href="{{ route('register') }}" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
                Create Account
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-6">
        <div class="container mx-auto px-6 text-center">
            <p>
                © {{ date('Y') }} {{ config('app.name', 'Laravel App') }}. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>
