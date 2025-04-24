<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up - Bakoelide</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flag Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icon-css/css/flag-icon.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
    </style>
</head>

<body class="bg-white">

    <div class="min-h-screen flex flex-col md:flex-row">

        <!-- Kiri: Form Sign Up -->
        <div class="w-full md:w-1/2 flex items-center justify-center bg-white">
            <div
                class="w-full max-w-md bg-white bg-opacity-70 p-8 rounded-xl shadow-lg bg-orange-100 bg-gradient-to-br from-orange-50 to-orange-100">

                <!-- Logo -->
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold text-orange-500">bakoelide</h1>
                    <p class="text-xs text-gray-700 -mt-1">Empowering Creativity for Your Business</p>
                </div>

                <!-- Title -->
                <h2 class="text-xl font-bold text-center mb-6 text-gray-800">Sign Up Now!</h2>

                @if(session('success'))
                    <p>{{ session('success') }}</p>
                @endif

                <!-- Sign Up Form (Laravel Blade Format) -->
                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <!-- Nomor HP (Opsional) -->
                    <div class="flex">
                        <div class="flex items-center px-3 bg-gray-100 border border-r-0 rounded-l-md border-gray-300">
                            <span class="flag-icon flag-icon-id mr-1"></span> +62
                        </div>
                        <input type="tel" name="phone" placeholder="Phone Number"
                            class="w-full px-4 py-2 bg-[#fcebdc] border border-gray-300 rounded-r-md focus:outline-none focus:ring-2 focus:ring-orange-400"
                            value="{{ old('phone') }}">
                    </div>

                    <!-- Name -->
                    <div>
                        <input type="text" name="name" placeholder="Full Name"
                            class="w-full px-4 py-2 bg-[#fcebdc] border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400"
                            value="{{ old('name') }}" required>
                        @error('name')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <input type="email" name="email" placeholder="Email"
                            class="w-full px-4 py-2 bg-[#fcebdc] border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400"
                            value="{{ old('email') }}" required>
                        @error('email')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <input type="password" name="password" placeholder="Password"
                            class="w-full px-4 py-2 bg-[#fcebdc] border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400"
                            required>
                        @error('password')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                            class="w-full px-4 py-2 bg-[#fcebdc] border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400"
                            required>
                    </div>

                    <!-- Remember Me (opsional) -->
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="mr-2">
                        <label for="remember" class="text-sm text-gray-700">Remember Me</label>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-semibold py-2 rounded-md shadow-md">
                        Create Account
                    </button>
                </form>

                <!-- Atau -->
                <div class="text-center my-4 text-gray-500">or</div>

                <!-- Google Sign Up -->
                <button
                    class="w-full flex items-center justify-center border border-gray-300 rounded-md py-2 hover:bg-gray-100">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5 mr-2" />
                    Sign up with Google
                </button>

                <!-- Login -->
                <p class="text-center text-sm mt-4 text-gray-700">
                    Already have account? <a href="{{ 'login' }}" class="text-blue-500 hover:underline">Login here</a>
                </p>

            </div>
        </div>

        <!-- Kanan: Ilustrasi -->
        <div
            class="w-full md:w-1/2 flex items-center justify-center bg-gradient-to-br from-orange-200 to-orange-600 text-white relative px-4 py-10">
            <div class="text-center">
                <img src="https://cdn.pixabay.com/photo/2023/04/26/16/11/3d-7949360_960_720.png" alt="Celebrate"
                    class="w-64 mx-auto mb-6 drop-shadow-md" />
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