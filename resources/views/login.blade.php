<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign In</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" min-h-screen flex flex-col items-center">
  <!-- Header -->
  <div class="relative w-full h-[14rem]">
    <img src="https://cdn.pixabay.com/photo/2016/02/17/15/37/laptop-1205256_1280.jpg"
         alt="Sign In Header"
         class="w-full h-full object-cover">
    <!-- Overlay Selimut Hitam -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <!-- Teks SIGN IN -->
    <h2 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-2xl font-bold tracking-widest">
      SIGN IN
    </h2>
  </div>

  <!-- Form -->
  <form action="{{ 'login' }}" method="POST" class="  rounded px-10 pt-8 pb-10 mt-8 w-full max-w-xl">
    @csrf
    <!-- Username Field -->
    <div class="mb-6">
      <label class="block text-gray-700 text-sm mb-2">Username</label>
      <input name="username" type="text" placeholder="Enter your username"
             class="w-full border-b-2 focus:outline-none focus:border-green-500 text-sm py-2">
    </div>

    <!-- Password Field -->
    <div class="mb-8">
      <label class="block text-gray-700 text-sm mb-2">Password</label>
      <input name="password" type="password" placeholder="Enter your password"
             class="w-full border-b-2 focus:outline-none focus:border-green-500 text-sm py-2">
    </div>

    <!-- Submit Button -->
    <div class="flex justify-center">
      <button type="submit"
              class="w-48 bg-green-500 text-white py-2 rounded-full hover:bg-green-600 transition duration-300">
        Login
      </button>
    </div>
  </form>
</body>
</html>
