<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Top Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600">Admin Dashboard</h1>
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">Welcome, Admin!</span>
                <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">Logout</button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-6 py-10">

        <!-- Page Title -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Dashboard</h2>
            <p class="text-gray-500">Overview of your admin panel</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid md:grid-cols-4 gap-6 mb-10">

            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <h3 class="text-gray-500">Users</h3>
                <p class="text-3xl font-bold text-indigo-600 mt-2">120</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <h3 class="text-gray-500">Orders</h3>
                <p class="text-3xl font-bold text-green-500 mt-2">75</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <h3 class="text-gray-500">Revenue</h3>
                <p class="text-3xl font-bold text-yellow-500 mt-2">$5,400</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <h3 class="text-gray-500">Tasks</h3>
                <p class="text-3xl font-bold text-red-500 mt-2">18</p>
            </div>

        </div>

        <!-- Recent Activity -->
        <div class="bg-white rounded-2xl shadow p-6">
            <h3 class="text-xl font-semibold mb-4">Recent Activity</h3>
            <ul class="divide-y divide-gray-200">
                <li class="py-3 flex justify-between">
                    <span>New user registered</span>
                    <span class="text-gray-400 text-sm">2 min ago</span>
                </li>
                <li class="py-3 flex justify-between">
                    <span>Order #1234 completed</span>
                    <span class="text-gray-400 text-sm">10 min ago</span>
                </li>
                <li class="py-3 flex justify-between">
                    <span>Server backup completed</span>
                    <span class="text-gray-400 text-sm">1 hour ago</span>
                </li>
                <li class="py-3 flex justify-between">
                    <span>Password updated</span>
                    <span class="text-gray-400 text-sm">3 hours ago</span>
                </li>
            </ul>
        </div>

    </div>

</body>
</html>
