
<nav class="w-full bg-blue-600 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Left: Logo -->
        <div class="flex items-center gap-2">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/task.png" class="w-6 h-6" alt="Logo">
            <span class="font-bold text-lg">TaskManager</span>
        </div>

        <!-- Right: Links & User -->
        <div class="flex items-center gap-6">
            <a href="#" class="hover:text-gray-300 transition">Home</a>
            <a href="{{ route('pengelolaan') }}" class="hover:text-gray-300 transition">Tasks</a>
            <a href="{{ route('dashboard') }}" class="hover:text-gray-300 transition">Dashboard</a>
            <div class="flex items-center gap-2">
                <a href="{{ route('profile') }}" class="flex items-center gap-1 text-sm text-gray-200 hover:text-gray-300 transition">

                    <span class="text-sm">Hello, {{ session('data.username') }}</span>
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/user.png" class="w-5 h-5" alt="User">
                </a>
            </div>
        </div>
    </div>
</nav>