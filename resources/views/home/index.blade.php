@extends('main')
@section('title', 'home')
@section('hero')
@include('layouts.app')
    {{-- hero --}}
    <section class="hero">
        <div class="hero-content container mx-auto">
            <h1>
                {{ $translator->translate('Empower Your Business') }} <br>
                {{ $translator->translate('With creative') }} <br>
                {{ $translator->translate('solutions') }}
            </h1>
            <p>
                {{ $translator->translate('Explore personalized templates, tutorials, and solutions tailored to small businesses.') }}
            </p>
            <div class="text-xs flex items-center gap-2">
                <a href="#quiz" class="px-4 py-2 bg-white text-blue-500 rounded-md">
                    {{ $translator->translate('Start Personalizing') }}
                </a>
                <a href="#template" class="">
                    {{ $translator->translate('Explore Templates') }}
                </a>
            </div>
        </div>
    </section>
@endsection
@section('content')
    {{-- scores --}}
    <section class="container mx-auto ">
        <div class="score-section">
            <div class="chat-img">
                <img src="{{ asset('assets/images/chat.png') }}" alt="">
            </div>
            <div class="score-container">
                {{-- <div class="score-content">
                    <h1>
                        <span>
                            {{ $translator->translate("LET'S SEE") }}
                        </span>
                        {{ $translator->translate('HOW FAST') }}
                    </h1>
                    <p>
                        {{ $translator->translate('YOUR BUSINESS IS GROWING!') }}
                    </p>
                    <small>
                        {{ $translator->translate(
                            "It's important for you to always monitor your business growth.We can help you boost your business productivity by 30% or even more. Join us to discover how far your business has progressed!",
                        ) }}
                    </small>
                    <div class="score-btn">
                        <a href="{{ route('blank-page') }}">{{ $translator->translate('Join us now !') }}</a>
                    </div>
                </div> --}}
            </div>
            <div class="plan-container" id="quiz">
                <h1>{{ $translator->translate('Who are you?') }}
                    <span>{{ $translator->translate("Let's customize your experience") }}</span>
                </h1>
                <div class="plan-container-grid">
                  <a href="/quiz">
                    <div class="container-one"  style="padding: 20px;">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <p class="text-with-border">{{ $translator->translate('Small Business Owner') }}</p>
                    </div>
                  </a>

                  <a href="/quiz2">
                    <div class="container-two"  style="padding: 20px;">
                        <i class="fa-solid fa-headset"></i>
                        <p class="text-with-border">{{ $translator->translate('Digital Marketer') }}</p>
                    </div>
                </a>

                  <a href="/quiz3">
                    <div class="container-three"  style="padding: 20px;">
                        <i class="fa-solid fa-comments"></i>
                        <p class="text-with-border">{{ $translator->translate('Creative Entrepreneur') }}</p>
                    </div>
                </a>
                
                </div>
            </div>
            
        </div>
    </section>

    {{-- templates --}}
    <section id="template" class="py-20 container mx-auto"> 
        <div class="templates-section">
            <div class="templates-container text-xl font-bold ">
                <h1>
                    {{ $translator->translate('Creative') }} <span
                        class="colored">{{ $translator->translate('Templates') }}</span>
                    {{ $translator->translate('for every need') }}
                </h1>
            </div>
        </div>
        <div class="carousel-container">
            <div class="carousel">
                <div class="carousel-item active">
                    <div class="content">
                        {{-- <h1>{{ $translator->translate('This is a template.') }}</h1>
                        <p>{{ $translator->translate('Boost your business now!') }}</p> --}}
                        <img src="{{ asset('assets/images/Rectangle 100.png') }}" alt="Avatar" class="avatar">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content">
                        <h1>{{ $translator->translate('This is a template.') }}</h1>
                        <p>{{ $translator->translate('Boost your business now!') }}</p>
                        <img src="{{ asset('assets/images/Rectangle 101.png') }}" alt="Avatar" class="avatar">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content">
                        <h1>{{ $translator->translate('This is a template.') }}</h1>
                        <p>{{ $translator->translate('Boost your business now!') }}</p>
                        <img src="{{ asset('assets/images/Rectangle 102.png') }}" alt="Avatar" class="avatar">
                    </div>
                </div>
            </div>
            <div class="navigation">
                <button id="prev"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <button id="next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <section class="py-20 px-2 bg-gray-50">
        <div class=" mx-auto flex flex-col md:flex-row gap-6 items-center justify-center container md:justify-start md:ps-10 md:gap-24">
            <!-- Gambar Seminar -->
            <div class="flex justify-start ">
                <img src="{{ asset('assets/images/webinar.jpg') }}" alt="Strategi Digital Marketing" class="rounded shadow-lg max-w-xs object-cover ">
            </div>
    
            <!-- Deskripsi Seminar -->
            <div class="space-y-4 text-center md:text-left">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Strategi Digital Marketing</h1>
                <hr class="border-gray-300 mx-auto w-20">
    
                {{-- <h2 class="text-lg font-semibold">{{ $translator->translate('Description') }}</h2> --}}
                <p class="text-gray-700 leading-relaxed max-w-[626px]">
                    Seminar ini membahas strategi digital marketing terkini untuk membantu bisnis Anda berkembang di era digital.
                    Anda akan belajar cara membuat campaign yang efektif, memanfaatkan media sosial, SEO, dan analisis data untuk mencapai target pasar yang tepat.
                </p>
    
                <h2 class="text-lg font-semibold">{{ $translator->translate('Price') }}</h2>
                <p class="text-orange-600 text-xl font-bold">Rp 0</p>
    
                <div class="pt-4">
                    <a href="{{ route('blank-page') }}" class="inline-flex items-center gap-2 bg-orange-500 text-white px-5 py-2 rounded-full hover:bg-orange-900 transition">
                        <i class="fa-solid fa-cart-shopping"></i>
                        {{ $translator->translate('Shop now') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    
    {{-- testimonial --}}
    <section class="md:py-20">
        <div class="testimonial-container">
            {{-- <div class="arrow-icon-container">
                <img class="arrow-icon" src="{{ asset('assets/icon/arrow_icon.png') }}" alt="">
            </div> --}}
            <div class="testimonial-title">
                <h1>{{ $translator->translate('What do they say?') }}</h1>
                <p>{{ $translator->translate("Let's take a look at their experience after joining.") }}</p>
            </div>
            <div class="testimonial-wrapper">
                <div class="testimonial">
                    <div class="quote">“</div>
                    <img src="{{asset('img/Dwi_Nauli.jpg')}}" alt="User 1" class="user-img">
                    <h3>Mawar Indah</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.</p>
                    <button class="read-more">{{ $translator->translate('Read more') }}</button>
                </div>
                <div class="testimonial">
                    <div class="quote">“</div>
                    <img src="{{asset('img/Antonius_Ardi.jpg')}}" alt="User 2" class="user-img">
                    <h3>Joko Santoso</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.</p>
                    <button class="read-more">{{ $translator->translate('Read more') }}</button>
                </div>
                <div class="testimonial">
                    <div class="quote">“</div>
                    <img src="{{asset('img/Ruben_Ray.jpg')}}" alt="User 3" class="user-img">
                    <h3>Siti Aisyah</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.</p>
                    <button class="read-more">{{ $translator->translate('Read more') }}</button>
                </div>
            </div>

            <div class="navigation-buttons">
                <button class="prev-btn"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="next-btn"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </section>


@endsection
{{-- @include('footer.footer') --}}

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const testimonials = document.querySelectorAll(".testimonial");
            const prevBtn = document.querySelector(".prev-btn");
            const nextBtn = document.querySelector(".next-btn");

            let index = 0;
            const totalTestimonials = testimonials.length;

            function updateTestimonial() {
                testimonials.forEach((testimonial, i) => {
                    if (i === index) {
                        testimonial.classList.add("active"); // Aktifkan yang dipilih
                    } else {
                        testimonial.classList.remove("active"); // Sembunyikan yang lain
                    }
                });
            }

            nextBtn.addEventListener("click", function() {
                index = (index + 1) % totalTestimonials;
                updateTestimonial();
            });

            prevBtn.addEventListener("click", function() {
                index = (index - 1 + totalTestimonials) % totalTestimonials;
                updateTestimonial();
            });

            // Inisialisasi pertama
            updateTestimonial();
        });
    </script>
    <script>
        const carousel = document.querySelector('.carousel');
        const carouselItems = document.querySelectorAll('.carousel-item');
        const dots = document.querySelectorAll('.dot');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');

        let currentIndex = 0;
        let isTransitioning = false;

        function updateCarousel() {
            if (isTransitioning) return;
            isTransitioning = true;

            carouselItems.forEach((item, index) => {
                item.style.opacity = "0"; // Sembunyikan semua item dengan opacity
                item.style.transform = `translateX(${(index - currentIndex) * 100}%)`;
            });

            setTimeout(() => {
                carouselItems.forEach((item, index) => {
                    item.style.display = index === currentIndex ? "flex" : "none";
                    item.style.opacity = "1";
                });
                isTransitioning = false;
            }, 500); // Waktu transisi harus sama dengan CSS transition

            // Perbarui dot indicator
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        // Event listener tombol prev dan next
        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
            updateCarousel();
        });

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % carouselItems.length;
            updateCarousel();
        });

        // Event listener untuk navigasi dot
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
            });
        });

        // Inisialisasi posisi awal
        carouselItems.forEach((item, index) => {
            item.style.transform = `translateX(${index * 100}%)`;
        });
        updateCarousel();
    </script>
@endpush
