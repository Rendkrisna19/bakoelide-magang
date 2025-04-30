<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Bakoelide</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icon-css/css/flag-icon.min.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
  </style>
</head>
<body class="bg-white">

  <div class="min-h-screen flex flex-col md:flex-row">
    
    <!-- Kiri: Form Login -->
    <div class="w-full md:w-1/2 flex items-center justify-center bg-white">
      <div class="w-full max-w-md bg-white bg-opacity-70 p-8 rounded-xl shadow-lg bg-orange-100 bg-gradient-to-br from-orange-50 to-orange-100">
        
        <!-- Logo -->
        <div class="text-center mb-6">
          <h1 class="text-3xl font-bold text-orange-500">bakoelide</h1>
          <p class="text-xs text-gray-700 -mt-1">Empowering Creativity for Your Business</p>
        </div>

        <!-- Title -->
        <h2 class="text-xl font-bold text-center mb-6 text-gray-800">Login to Your Account</h2>

        <!-- Form Login -->
        <form action="{{ route('login') }}" method="POST" class="space-y-4">
          @csrf
          <!-- Email -->
          <input 
            type="email" 
            name="email"
            placeholder="Email" 
            class="w-full px-4 py-2 bg-[#fcebdc] border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400"
            required 
          />

          <!-- Password -->
          <input 
            type="password" 
            name="password"
            placeholder="Password" 
            class="w-full px-4 py-2 bg-[#fcebdc] border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400"
            required 
          />

          <!-- Remember Me -->
          <div class="flex items-center">
            <input type="checkbox" name="remember" id="remember" class="mr-2">
            <label for="remember" class="text-sm text-gray-700">Remember Me</label>
          </div>

          <!-- Button -->
          <button type="submit" class="w-full bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-semibold py-2 rounded-md shadow-md">
            Login Now
          </button>
        </form>

        <!-- Atau -->
        <div class="text-center my-4 text-gray-500">or</div>

        <!-- Google Login -->
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

    <!-- Kanan: Ilustrasi -->
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
  </div>

</body>
</html>
