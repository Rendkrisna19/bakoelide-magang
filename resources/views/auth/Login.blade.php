<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Bakoelide</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="min-h-screen flex bg-[#c9ac96] overflow-hidden">

  <!-- Left Panel -->
  <div class="w-1/2 flex justify-center items-center p-10">
    <div class="w-full max-w-md bg-white bg-opacity-80 p-8 rounded-xl shadow-lg">
      <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-orange-500">bakoel<span class="text-[#f57c00]">ide</span></h1>
        <p class="text-sm text-gray-600">Empowering Creativity for Your Business</p>
      </div>

      <h2 class="text-xl font-bold text-center mb-6">Sign In Now!</h2>

      {{-- Tampilkan error --}}
      @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
          {{ $errors->first() }}
        </div>
      @endif

      {{-- Success Message --}}
      @if (session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-sm">
          {{ session('success') }}
        </div>
      @endif

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
          <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="w-full px-4 py-3 bg-[#ffe0cc] rounded-lg outline-none placeholder-gray-700" required />
        </div>
        <div class="mb-4 relative">
          <input type="password" name="password" placeholder="Password" class="w-full px-4 py-3 bg-[#ffe0cc] rounded-lg outline-none placeholder-gray-700 pr-10" required />
          <svg class="absolute right-3 top-3.5 w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
          </svg>
        </div>
        <div class="flex items-center mb-4">
          <input type="checkbox" class="mr-2" />
          <label class="text-sm text-gray-700">Remember Me</label>
        </div>
        <div class="text-center mt-6">
          <button type="submit" class="bg-[#ffa726] text-white py-3 px-4 rounded-lg font-semibold w-full shadow-lg">
            Sign In
          </button>
        </div>
      </form>

      <!-- Atau -->
      <div class="text-center my-4 text-gray-500">or</div>

      <!-- Google Login (opsional) -->
      <button class="w-full flex items-center justify-center border border-gray-300 rounded-md py-2 hover:bg-gray-100">
        <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5 mr-2"/>
        Sign in with Google
      </button>

      <!-- Sign Up -->
      <p class="text-center text-sm mt-4 text-gray-700">
        Don’t have an account? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register here</a>
      </p>

    </div>
  </div>

  <!-- Right Panel -->
  <div class="w-full md:w-1/2 flex items-center justify-center bg-gradient-to-br from-orange-200 to-orange-600 text-white relative px-4 py-10">
    <div class="text-center">
      <img src="{{ asset('assets/images/logingambar.jpg') }}" alt="Celebrate" class="w-64 mx-auto mb-6 drop-shadow-md" />
      <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold drop-shadow-lg leading-tight">
        ANALYZE YOUR <br />
        BRANDING RATE <br />
        WITH US!
      </h2>
    </div>
  </div>

</body>
</html>
