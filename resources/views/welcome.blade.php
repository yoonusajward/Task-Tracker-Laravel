<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Header Section -->
    <header class="bg-gradient-to-r from-blue-500 to-blue-700 text-white py-6 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-3xl font-extrabold tracking-wide">Task Tracker</h1>
            @if (Route::has('login'))
                <nav class="flex space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="rounded-lg px-4 py-2 bg-blue-600 hover:bg-blue-500 transition">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-lg px-4 py-2 bg-white text-blue-700 hover:bg-blue-100 transition">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="rounded-lg px-4 py-2 bg-blue-600 hover:bg-blue-500 transition">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-b from-blue-100 to-white py-20">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-5xl font-extrabold mb-6 text-blue-700">Organise Your Tasks with Ease</h2>
            <p class="text-lg text-gray-700 mb-8">A simple, intuitive, and efficient task management tool to boost your
                productivity.</p>
            <a href="{{ route('tasks.index') }}"
                class="bg-blue-600 text-white px-10 py-4 rounded-lg shadow-lg text-lg font-semibold hover:bg-blue-500 transition">
                Get Started
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 px-4">
            <div class="bg-white shadow-md rounded-lg p-8 hover:shadow-lg transition">
                <div class="text-blue-600 text-3xl mb-4">
                    <i class="fas fa-user-check"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">User-Friendly</h3>
                <p class="text-gray-600">Easily create, edit, and manage your tasks with a simple and intuitive
                    interface.</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-8 hover:shadow-lg transition">
                <div class="text-green-600 text-3xl mb-4">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Real-Time Updates</h3>
                <p class="text-gray-600">Keep your tasks up-to-date with live notifications and changes.</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-8 hover:shadow-lg transition">
                <div class="text-red-600 text-3xl mb-4">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Secure & Reliable</h3>
                <p class="text-gray-600">Your data is securely stored with robust backend support.</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center px-4">
            <p class="text-sm">&copy; {{ date('Y') }} Task Tracker. All Rights Reserved.</p>
            <p class="text-sm">Developed by <a href="https://github.com/yoonusajward"
                    class="text-blue-400 hover:underline">Yoonus
                    Ajward</a></p>
        </div>
    </footer>

</body>

</html>
