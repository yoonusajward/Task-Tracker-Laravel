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
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">Task Tracker</h1>
            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 ml-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6">Organise Your Tasks with Ease</h2>
            <p class="text-lg text-gray-600 mb-8">A simple, intuitive, and efficient task management tool to boost your
                productivity.</p>
            <a href="{{ route('tasks.index') }}"
                class="bg-blue-600 text-white px-8 py-4 rounded shadow-lg text-lg hover:bg-blue-700">
                Get Started
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center bg-white shadow-lg p-8 rounded">
                <h3 class="text-xl font-semibold mb-4">User-Friendly</h3>
                <p class="text-gray-600">Easily create, edit, and manage your tasks with a simple and intuitive
                    interface.</p>
            </div>
            <div class="text-center bg-white shadow-lg p-8 rounded">
                <h3 class="text-xl font-semibold mb-4">Real-Time Updates</h3>
                <p class="text-gray-600">Keep your tasks up-to-date with live notifications and changes.</p>
            </div>
            <div class="text-center bg-white shadow-lg p-8 rounded">
                <h3 class="text-xl font-semibold mb-4">Secure & Reliable</h3>
                <p class="text-gray-600">Your data is securely stored with robust backend support.</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Task Tracker. All Rights Reserved.</p>
            <p>Developed by <a href="https://github.com/yoonusajward" class="text-blue-400 hover:underline">Yoonus
                    Ajward</a></p>
        </div>
    </footer>

</body>

</html>
