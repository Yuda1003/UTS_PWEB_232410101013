@extends('layout')
@section('content')
    <div class="max-w-4xl w-full bg-white rounded-2xl shadow-lg p-8 mt-[2rem]">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-3">
                <img src="https://img.icons8.com/ios-filled/50/007BFF/task.png" class="w-10 h-10" alt="Logo">
                <h1 class="text-2xl font-bold text-blue-700">Task Manager</h1>
            </div>
            <div class="text-sm text-gray-600">
                <span>Hai, <strong>{{ session('data.username') }}</strong></span>
            </div>
        </div>

        <!-- Welcome Section -->
        <div class="bg-blue-100 rounded-xl p-6 text-center mb-6">
            <h2 class="text-3xl font-bold text-blue-800 mb-2">Selamat Datang di Dashboard!</h2>
            <p class="text-gray-700">Kelola tugas harianmu dengan lebih efisien dan terorganisir.</p>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="bg-white border border-blue-200 p-5 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold text-blue-700 mb-2">Lihat Daftar Tugas</h3>
                <p class="text-gray-600 mb-3">Pantau semua tugas yang sedang kamu kerjakan.</p>
                <a href="{{ route('pengelolaan') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Lihat Tugas</a>
            </div>

            <div class="bg-white border border-blue-200 p-5 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold text-blue-700 mb-2">Tambah Tugas Baru</h3>
                <p class="text-gray-600 mb-3">Buat tugas baru untuk membantu produktivitasmu.</p>
                <a href="#" class="inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Tambah Tugas</a>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-8 text-center text-sm text-gray-500">
            &copy; 2025 Task Manager. Semua hak dilindungi.
        </div>
    </div>
@endsection