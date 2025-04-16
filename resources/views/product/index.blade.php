@extends('main')
@section('title', 'products')
@extends('layouts.app')
@section('hero')
    <section class="product-hero">
        <div class="product-hero-content">
            <h1>
                {{ $translator->translate('Designed Solutions for Your Business') }}
            </h1>
            <br>
            <p>{{ $translator->translate('Explore products and services tailored to enhance your business.') }}</p>
            <div class="product-hero-btn">
                <a href="{{ route('blank-page') }}">{{ $translator->translate('View All Packages') }}</a>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="product-section">
        <div class="product-container">
            <div class="sortby-container">
                <select name="" id="">
                    <option value="">{{ $translator->translate('Sort By') }}</option>
                    <option value="">{{ $translator->translate('Latest') }}</option>
                    <option value="">{{ $translator->translate('Earliest') }}</option>
                </select>
            </div>
            <div class="product-content-container">
                <div class="filter-container">
                    <div class="filter1">
                        <h1 class="product-filter-title">{{ $translator->translate('Category') }}</h1>
                        <hr>
                        <ul>
                            <li class="active">{{ $translator->translate('Templates') }}</li>
                            <li>{{ $translator->translate('Service') }}</li>
                            <li>{{ $translator->translate('Bundle') }}</li>
                        </ul>
                    </div>
                    <div class="filter2">
                        <h1 class="product-filter-title">{{ $translator->translate('Price') }}</h1>
                        <hr>
                        <input type="range" id="price-range" class="slider" min="0" max="100000" value="50000">
                        <div class="slider-value">Rp<span id="price-value">50,000</span></div>
                    </div>
                </div>
                <!--content start-->
                <div class="product-content">
                    <div class="product-grid">
                        <div class="content-item">
                            <img src="{{ asset('assets/images/Rectangle 95.png') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Solusi Digital untuk Bisnis Anda
                                    </h3>
                                    <p class="webinar-date-time">Rp 99.999</p>
                                </div>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/Rectangle 96.png') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Coffee Truck Starter Kit
                                    </h3>
                                    <p class="webinar-date-time">Rp 99.999</p>
                                </div>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/Rectangle 97.png') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Grow Your Business With Us
                                    </h3>
                                    <p class="webinar-date-time">Rp 99.999</p>
                                </div>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/Rectangle 98.png') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Coffee Truck Starter Kit
                                    </h3>
                                    <p class="webinar-date-time">Rp 99.999</p>
                                </div>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/Rectangle 99.png') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Solusi Digital untuk Bisnis Anda
                                    </h3>
                                    <p class="webinar-date-time">Rp 99.999</p>
                                </div>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/Rectangle 100.png') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Grow Your Business With Us
                                    </h3>
                                    <p class="webinar-date-time">Rp 99.999</p>
                                </div>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Add') }}</a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Read More') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Finish Code Product-->
        <!---->
        <section class="bg-white py-6 px-4 md:px-10">
            <!-- Judul kecil -->
            <div class="mb-4">
                <h2 class="text-gray-600 font-semibold text-sm">
                    Mungkin Anda menyukai: <span class="text-black">Template Template desain berikut:</span>
                </h2>
            </div>
        
            <!-- Judul besar & tombol -->
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold">Jangkau Lebih Luas Dengan Template</h3>
                <a href="{{ url('/templates') }}" class="border border-gray-400 rounded-full px-4 py-1 text-sm hover:bg-gray-100 transition">
                    Lihat Semua
                </a>
            </div>
        
            <!-- Grid Gambar Template -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Gambar 1 -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="{{ asset('assets/images/template1.png') }}" alt="Buy Get 1" class="w-full object-cover">
                </div>
        
                <!-- Gambar 2 -->
                <div class="bg-white shadow rounded overflow-hidden relative">
                    <img src="{{ asset('assets/images/template2.png') }}" alt="Beli 1 Gratis 1" class="w-full object-cover">
                    <!-- Bubble nama (opsional) -->
                   
                </div>
        
                <!-- Gambar 3 -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <img src="{{ asset('assets/images/template3.png') }}" alt="Spesial Valentine" class="w-full object-cover">
                </div>
            </div>
        </section>
        
    </section>
@endsection


<!--Fungsi Javascript-->
@push('script')
    <script>
        const slider = document.getElementById('price-range');
        const priceValue = document.getElementById('price-value');

        slider.addEventListener('input', () => {
            const value = parseInt(slider.value).toLocaleString('id-ID'); // Format angka
            priceValue.textContent = value;
        });
    </script>
@endpush
