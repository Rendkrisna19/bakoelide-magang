@extends('main')
@section('title', 'home')
@section('hero')
    {{-- hero --}}
    <section class="hero">
        <div class="hero-content">
            <h1>
                {{ $translator->translate('Empower Your Business') }} <br>
                {{ $translator->translate('With creative') }} <br>
                {{ $translator->translate('solutions') }}
            </h1>
            <p>
                {{ $translator->translate('Explore personalized templates, tutorials, and solutions tailored to small businesses.') }}
            </p>
            <div class="btn-group">
                <a href="{{ route('blank-page') }}" class="btn-primary">
                    {{ $translator->translate('Start Personalizing') }}
                </a>
                <a href="{{ route('blank-page') }}" class="btn-secondary">
                    {{ $translator->translate('Explore Templates') }}
                </a>
            </div>
        </div>
    </section>
@endsection
@section('content')
    {{-- scores --}}
    <section>
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
            <div class="plan-container">
                <h1>{{ $translator->translate('Who are you?') }}
                    <span>{{ $translator->translate("Let's customize your experience") }}</span>
                </h1>
                <div class="plan-container-grid">
                    <div class="container-one">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <p class="text-with-border">{{ $translator->translate('Small Business Owner') }}</p>
                    </div>
                    <div class="container-two">
                        <i class="fa-solid fa-headset"></i>
                        <p class="text-with-border">{{ $translator->translate('Digital Marketer') }}</p>
                    </div>
                    <div class="container-three">
                        <i class="fa-solid fa-comments"></i>
                        <p class="text-with-border">{{ $translator->translate('Creative Entrepreneur') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- templates --}}
    <section>
        <div class="templates-section">
            <div class="templates-container">
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
                        <h1>{{ $translator->translate('This is a template.') }}</h1>
                        <p>{{ $translator->translate('Boost your business now!') }}</p>
                        <img src="{{ asset('assets/images/template1.png') }}" alt="Avatar" class="avatar">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content">
                        <h1>{{ $translator->translate('This is a template.') }}</h1>
                        <p>{{ $translator->translate('Boost your business now!') }}</p>
                        <img src="{{ asset('assets/images/template1.png') }}" alt="Avatar" class="avatar">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content">
                        <h1>{{ $translator->translate('This is a template.') }}</h1>
                        <p>{{ $translator->translate('Boost your business now!') }}</p>
                        <img src="{{ asset('assets/images/template1.png') }}" alt="Avatar" class="avatar">
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

    {{-- price --}}
    <section>
        <div class="price-section">
            <div class="price-container">
                <div class="price-img">
                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                </div>
                <div class="price-desc">
                    <h1>Lorem ipsum dolor</h1>
                    <hr>
                    <h1>{{ $translator->translate('Description') }}</h1>
                    <h1>{{ $translator->translate('Price') }}</h1>
                    <hr>
                    Rp. 99.999
                    <br>
                    <div class="btn-price-home">
                        <a href="{{ route('blank-page') }}"><i class="fa-solid fa-cart-shopping"></i>
                            {{ $translator->translate('Shop now') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- testimonial --}}
    <section>
        <div class="testimonial-container">
            <div class="arrow-icon-container">
                <img class="arrow-icon" src="{{ asset('assets/icon/arrow_icon.png') }}" alt="">
            </div>
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
