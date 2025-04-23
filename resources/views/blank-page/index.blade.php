<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Bakoelide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="min-h-screen flex bg-[#ffcc80] overflow-hidden">
  <!-- Left Panel -->
  <div class="w-1/2 flex justify-center items-center p-10">
    <div class="w-full max-w-md bg-white bg-opacity-80 p-8 rounded-xl shadow-lg">
      <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-orange-500">bakoel<span class="text-[#f57c00]">ide</span></h1>
        <p class="text-sm text-gray-600">Empowering Creativity for Your Business</p>
      </div>

      <h2 class="text-xl font-bold text-center mb-6">Sign In Now!</h2>

      <form method="POST" action="{{ route('login') }}">
  @csrf
  <div class="mb-4">
    <input type="text" name="email" placeholder="Email/Number" class="w-full px-4 py-3 bg-[#ffe0cc] rounded-lg outline-none placeholder-gray-700" required>
  </div>
  <div class="mb-4 relative">
    <input type="password" name="password" placeholder="Password" class="w-full px-4 py-3 bg-[#ffe0cc] rounded-lg outline-none placeholder-gray-700 pr-10" required>
    <svg class="absolute right-3 top-3.5 w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
    </svg>
  </div>
  <div class="flex items-center mb-4">
    <input type="checkbox" class="mr-2">
    <label class="text-sm text-gray-700">Remember Me</label>
  </div>

  <div class="text-center mt-6">
    <button type="submit" class="bg-[#ffa726] text-white py-3 px-4 rounded-lg font-semibold w-full shadow-lg">
      Sign In
    </button>
  </div>
</form>



      <div class="my-4 text-center text-gray-500">or</div>

      <button
        class="w-full flex items-center justify-center border border-gray-300 bg-white py-3 rounded-lg shadow-sm hover:shadow-md transition">
        <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google" class="w-5 h-5 mr-2">
        Sign in with Google
      </button>

      <p class="text-sm text-center mt-4 text-gray-700">
        Doesn’t have an account? <a href="{{ url('/signup') }}" class="text-blue-600 font-medium">Create account here</a>
      </p>
    </div>
  </div>

  <!-- Right Panel -->
  <div class="w-1/2 relative flex items-center justify-center overflow-hidden rounded-l-[40px]">
    <div class="absolute top-6 right-6">
      <button class="bg-white rounded-full shadow-md px-4 py-2 flex items-center space-x-2">
        <span>🇬🇧</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
    </div>

    <!-- Image -->
    <img src="/assets/images/login.png" alt="Login Illustration"
         class="z-10 w-full max-h-[680px] object-contain">

    <!-- Overlay Text -->
    <h2 class="absolute top-[57%] left-[30%] transform -translate-x-1/2 -translate-y-1/3 text-white text-5xl font-bold drop-shadow-[2px_2px_0px_#ffcc00] leading-tight text-center z-20">
      ANALIZE YOUR
    </h2>
    <h2 class="absolute top-[65%] left-[50%] transform -translate-x-1/2 whitespace-nowrap text-white text-5xl font-bold drop-shadow-[2px_2px_0px_#ffcc00] leading-tight z-20">
      BRANDING RATE
    </h2>
    <h2 class="absolute top-[75%] left-[30%] transform -translate-x-1/2 whitespace-nowrap text-white text-5xl font-bold drop-shadow-[2px_2px_0px_#ffcc00] leading-tight z-20">
      WITH US!
    </h2>
  </div>
</body>
</html>
