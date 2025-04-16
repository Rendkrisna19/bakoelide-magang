@extends('main')
@extends('layouts.app')

@section('title', 'templates')
<section class="bg-white py-8 px-4 md:px-10">
    <!-- Judul -->
    <h2 class="text-2xl font-bold mb-6 pt-20 md:pt-24">instagram feeds</h2>

    <!-- Grid Gambar Template -->
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Item 1 -->
        <div class="bg-white shadow rounded overflow-hidden">
            <img src="{{ asset('assets/images/template1.png') }}" alt="Buy Get 1" class="w-full object-cover">
        </div>

        <!-- Item 2 -->
        <div class="bg-white shadow rounded overflow-hidden">
            <img src="{{ asset('assets/images/template2.png') }}" alt="Beli 1 Gratis 1" class="w-full object-cover">
        </div>

        <!-- Item 3 -->
        <div class="bg-white shadow rounded overflow-hidden">
            <img src="{{ asset('assets/images/template3.png') }}" alt="Spesial Valentine" class="w-full object-cover">
        </div>

        <!-- Item 4 -->
        <div class="bg-white shadow rounded overflow-hidden">
            <img src="{{ asset('assets/images/template3.png') }}" alt="Spesial Valentine" class="w-full object-cover">
        </div>

        <!-- Item 5 -->
        <div class="bg-white shadow rounded overflow-hidden">
            <img src="{{ asset('assets/images/template2.png') }}" alt="Buy Get 1" class="w-full object-cover">
        </div>

        <!-- Item 6 -->
        <div class="bg-white shadow rounded overflow-hidden">
            <img src="{{ asset('assets/images/template1.png') }}" alt="Beli 1 Gratis 1" class="w-full object-cover">
        </div>
        <!-- Item 4 -->
        <div class="bg-white shadow rounded overflow-hidden">
            <img src="{{ asset('assets/images/template3.png') }}" alt="Spesial Valentine" class="w-full object-cover">
        </div>

        <!-- Item 5 -->
        <div class="bg-white shadow rounded overflow-hidden">
            <img src="{{ asset('assets/images/template2.png') }}" alt="Buy Get 1" class="w-full object-cover">
        </div>

        <!-- Item 6 -->
        <div class="bg-white shadow rounded overflow-hidden">
            <img src="{{ asset('assets/images/template1.png') }}" alt="Beli 1 Gratis 1" class="w-full object-cover">
        </div>
    </div>
</section>

@section('content')

@endsection
