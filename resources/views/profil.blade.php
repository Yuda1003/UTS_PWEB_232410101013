@extends('layout')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-100 flex flex-col items-center py-10 relative overflow-hidden">

    <!-- Ornamen background bulat -->
    <div class="absolute -top-16 -left-20 w-72 h-72 bg-blue-200 opacity-20 rounded-full blur-2xl"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-blue-300 opacity-10 rounded-full blur-2xl"></div>

    <!-- Header ala Dashboard -->
    <div class="w-full max-w-2xl bg-white/70 backdrop-blur-md rounded-xl shadow-lg px-6 py-4 flex justify-between items-center border-b-2 border-blue-500 z-10">
        <div class="flex items-center gap-3">
            <img src="https://img.icons8.com/ios-filled/50/task.png" class="w-6 h-6" />
            <h1 class="text-xl font-bold text-gray-800">Profil Pengguna</h1>
        </div>
        <div class="text-sm text-gray-600 ml-3">
            Selamat datang, <span class="font-semibold text-blue-600">{{ session('data.username') }}</span>
        </div>
    </div>

    <!-- Konten Profil -->
    <div class="w-full max-w-2xl bg-white/80 backdrop-blur-md rounded-xl shadow-xl mt-6 p-6 border border-blue-200 relative z-10">
        <!-- Avatar -->
        <div class="flex justify-center mb-4">
            <img src="https://shopee.co.id/inspirasi-shopee/wp-content/uploads/2021/10/karakter-anime-terganteng.webp" class="w-20 h-20 rounded-full shadow-md" />
        </div>

        <h2 class="text-lg font-semibold text-gray-700 mb-4 border-b pb-2 text-center">Informasi Akun</h2>
        <form class="space-y-5">
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">👤 Username</label>
                <input type="text" class="w-full px-4 py-2 border rounded-md bg-gray-100 font-medium text-gray-700" 
                    value="{{ session('data.username') }}" disabled>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">📧 Email</label>
                <input type="email" class="w-full px-4 py-2 border rounded-md bg-gray-100 text-gray-700" 
                    value="{{ session('data.email') }}" disabled>
            </div>

            <div class="pt-4">
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-md transition duration-200">
                    ✏️ Edit Profil
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
