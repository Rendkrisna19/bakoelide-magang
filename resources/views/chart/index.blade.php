@extends('main')
@extends('layouts.app')

@section('title', 'chart')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Add Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 pt-20 md:pt-24">

  <div class="container mx-auto p-4 ">
    <div class="grid md:grid-cols-3 gap-6">

      <!-- Cart Section -->
      <div class="md:col-span-2 bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-2xl font-bold">Cart</h2>
          <div class="text-gray-500">4 product saved</div>
          <button class="border border-gray-300 p-2 rounded-md flex items-center gap-1 text-gray-600">
            Sort by
            <i class="fas fa-chevron-down w-4 h-4"></i> <!-- Updated Icon -->
          </button>
        </div>

        <!-- Cart Items -->
        <div class="space-y-6">
          <!-- Single Item -->
          <div class="flex items-center gap-4">
            <input type="checkbox" class="accent-orange-500">
            <img src="{{ asset('assets/images/product-placeholder.png') }}" alt="Product" class="w-20 h-20 rounded-md object-cover">
            <div class="flex-1">
              <h3 class="font-bold">Name Of Product</h3>
              <p class="text-gray-500 text-sm">Brand Of Product</p>
              <div class="flex items-center mt-2 space-x-2">
                <button class="bg-gray-200 px-2 py-1 rounded">-</button>
                <span>1</span>
                <button class="bg-gray-200 px-2 py-1 rounded">+</button>
              </div>
            </div>
            <div class="text-right">
              <p class="text-sm text-gray-400 line-through">Rp199.999</p>
              <p class="font-bold text-lg">Rp99.999</p>
            </div>
          </div>
          <!-- Repeat Items -->
          <div class="flex items-center gap-4">
            <input type="checkbox" class="accent-orange-500">
            <img src="{{ asset('assets/images/product-placeholder.png') }}" alt="Product" class="w-20 h-20 rounded-md object-cover">
            <div class="flex-1">
              <h3 class="font-bold">Name Of Product</h3>
              <p class="text-gray-500 text-sm">Brand Of Product</p>
              <div class="flex items-center mt-2 space-x-2">
                <button class="bg-gray-200 px-2 py-1 rounded">-</button>
                <span>1</span>
                <button class="bg-gray-200 px-2 py-1 rounded">+</button>
              </div>
            </div>
            <div class="text-right">
              <p class="text-sm text-gray-400 line-through">Rp199.999</p>
              <p class="font-bold text-lg">Rp99.999</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <input type="checkbox" class="accent-orange-500">
            <img src="{{ asset('assets/images/product-placeholder.png') }}" alt="Product" class="w-20 h-20 rounded-md object-cover">
            <div class="flex-1">
              <h3 class="font-bold">Name Of Product</h3>
              <p class="text-gray-500 text-sm">Brand Of Product</p>
              <div class="flex items-center mt-2 space-x-2">
                <button class="bg-gray-200 px-2 py-1 rounded">-</button>
                <span>1</span>
                <button class="bg-gray-200 px-2 py-1 rounded">+</button>
              </div>
            </div>
            <div class="text-right">
              <p class="text-sm text-gray-400 line-through">Rp199.999</p>
              <p class="font-bold text-lg">Rp99.999</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <input type="checkbox" class="accent-orange-500">
            <img src="{{ asset('assets/images/product-placeholder.png') }}" alt="Product" class="w-20 h-20 rounded-md object-cover">
            <div class="flex-1">
              <h3 class="font-bold">Name Of Product</h3>
              <p class="text-gray-500 text-sm">Brand Of Product</p>
              <div class="flex items-center mt-2 space-x-2">
                <button class="bg-gray-200 px-2 py-1 rounded">-</button>
                <span>1</span>
                <button class="bg-gray-200 px-2 py-1 rounded">+</button>
              </div>
            </div>
            <div class="text-right">
              <p class="text-sm text-gray-400 line-through">Rp199.999</p>
              <p class="font-bold text-lg">Rp99.999</p>
            </div>
          </div>

          <!-- (copy item di atas buat nambah produk lain) -->
        </div>
      </div>

      <!-- Order Summary -->
      <div class="bg-white p-6 rounded-lg shadow space-y-6">
        <h2 class="text-2xl font-bold">Order Summary</h2>

        <!-- Promo Code -->
        <div>
          <label class="block text-gray-600 mb-1">Have a promo code?</label>
          <div class="relative">
            <input type="text" class="w-full border border-orange-400 rounded-md p-2 pr-10" placeholder="Promo Code">
            <button class="absolute right-2 top-2 text-gray-400 hover:text-gray-600">
              <i class="fas fa-trash-alt"></i> <!-- Updated Icon -->
            </button>
          </div>
          <p class="text-sm text-orange-500 mt-1">Promo active until tomorrow <span class="text-red-500">32 h 31 m 21 s</span></p>
        </div>

        <!-- Order Details -->
        <div class="space-y-2">
          <div class="flex justify-between text-gray-600">
            <span>2 product selected</span>
          </div>
          <div class="flex justify-between">
            <span>Subtotal</span>
            <span>Rp399.998</span>
          </div>
          <div class="flex justify-between">
            <span>Discount</span>
            <span>-Rp200.000</span>
          </div>
          <div class="flex justify-between">
            <span>Fee</span>
            <span>Rp0</span>
          </div>
          <hr>
          <div class="flex justify-between font-bold text-lg">
            <span>Total</span>
            <span>Rp199.998</span>
          </div>
        </div>

        <div class="flex items-center space-x-2">
          <input type="checkbox" class="accent-green-500">
          <p class="text-green-600 text-sm">You saved Rp200.000</p>
        </div>

        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 rounded-md">Go To Payment</button>

        <!-- Supported Payment -->
        <div class="bg-white mt-6 p-4 rounded-lg border">
          <h3 class="font-semibold mb-2">Supported Payment</h3>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <p class="font-bold">Banking</p>
              <ul class="mt-2 space-y-1 text-sm text-gray-600">
                <li><i class="fas fa-university"></i> BCA</li> <!-- Updated Icon -->
                <li><i class="fas fa-university"></i> Mandiri</li> <!-- Updated Icon -->
                <li><i class="fas fa-university"></i> BRI</li> <!-- Updated Icon -->
                <li><i class="fas fa-university"></i> BNI</li> <!-- Updated Icon -->
              </ul>
            </div>
            <div>
              <p class="font-bold">E-Wallet</p>
              <ul class="mt-2 space-y-1 text-sm text-gray-600">
                <li><i class="fab fa-github"></i> Gopay</li> <!-- Updated Icon -->
                <li><i class="fab fa-github"></i> Shopee Pay</li> <!-- Updated Icon -->
                <li><i class="fab fa-github"></i> Dana</li> <!-- Updated Icon -->
                <li><i class="fab fa-github"></i> Ovo</li> <!-- Updated Icon -->
              </ul>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

</body>
</html>

