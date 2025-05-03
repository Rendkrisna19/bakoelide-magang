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
                    @auth
                    <a href="/quiz">
                        <div class="container-one" style="padding: 20px;">
                            <i class="fa-solid fa-bag-shopping"></i>
                            <p class="text-with-border">{{ $translator->translate('Small Business Owner') }}</p>
                        </div>
                    </a>
                @endauth
                
                @guest
                    <a href="/login" onclick="alert('Silakan login terlebih dahulu untuk mengakses kuis ini.')">
                        <div class="container-one" style="padding: 20px;">
                            <i class="fa-solid fa-bag-shopping"></i>
                            <p class="text-with-border">{{ $translator->translate('Small Business Owner') }}</p>
                        </div>
                    </a>
                @endguest
                
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
        <div class="templates-section flex-col">
            <div class="templates-container text-xl font-bold ">
                <h1>
                    {{ $translator->translate('Creative') }} <span
                        class="colored">{{ $translator->translate('Templates') }}</span>
                    {{ $translator->translate('for every need') }}
                </h1>
            </div>
            <div id="my-slider1" class="splide w-full">
                <div class="splide__track py-8 lg:h-80">
                  <ul class="splide__list ">
                    <li class="splide__slide">
                      <div class="slide-item  rounded-xl shadow-xl lg:h-56">
                        <img src="{{  asset('assets/images/templates1.png') }}" alt="template" class="rounded-xl object-cover h-full w-full">
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="slide-item  rounded-xl shadow-xl lg:h-56">
                        <img src="{{  asset('assets/images/templates1.png') }}" alt="template" class="rounded-xl object-cover h-full w-full">
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="slide-item  rounded-xl shadow-xl lg:h-56">
                        <img src="{{  asset('assets/images/templates1.png') }}" alt="template" class="rounded-xl object-cover h-full w-full">
                      </div>
                    </li>
                    
                  </ul>
                </div>
              </div>
              <div class="splide__controls">
                <button id="prevBtn1" class="custom-prev">Prev</button>
              
                <!-- Custom Pagination -->
                <div id="custom-pagination" class="splide__pagination">
                  <!-- Pagination items will be added here dynamically -->
                </div>
              
                <button id="nextBtn1" class="custom-next">Next</button>
              </div>
        </div>
        {{-- <div class="carousel-container">
            <div class="carousel">
                <div class="carousel-item active">
                    <div class="content">
                        <h1>{{ $translator->translate('This is a template.') }}</h1>
                        <p>{{ $translator->translate('Boost your business now!') }}</p>
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
            <div class="navigation mx-auto">
                <button id="prev"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <button id="next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div> --}}
        
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
                    {{-- <a href="{{ route('blank-page') }}" class="inline-flex items-center gap-2 bg-orange-500 text-white px-5 py-2 rounded-full hover:bg-orange-900 transition"> --}}
                    <a href="{{ route('blank-page') }}" class="inline-flex items-center gap-2 bg-[#F26522] text-white px-5 py-2 rounded-full hover:bg-yellow-600 transition">
                        <i class="fa-solid fa-cart-shopping"></i>
                        {{ $translator->translate('Shop now') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    
    {{-- testimonial --}}
    <section class="py-8 md:py-20">
        <div class="testimonial-container container mx-auto">
           
            <div class="testimonial-title">
                <h1 class="lg:text-5xl">{{ $translator->translate('What do they say?') }}</h1>
                <p>{{ $translator->translate("Let's take a look at their experience after joining.") }}</p>
            </div>
           
              <div id="my-slider" class="splide w-full max-w-full">
                <div class="splide__track py-8 lg:py-10">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <div class="relative w-full max-w-[725px] mx-auto p-4 rounded-lg shadow-md lg:shadow-[0_0_30px_10px_rgba(0,0,0,0.25)] flex flex-col gap-3 items-start lg:gap-9 lg:p-6">
                        <img src="{{asset('img/Antonius_Ardi.jpg')}}" alt="User 2" class="absolute border border-[#F26522] right-2 top-1 size-12 shadow-md rounded-full lg:size-20 lg:top-2">
                        <h3 class="font-bold lg:text-xl max-w-[80%]">Rina, Pemilik Toko Online Fashion dsada</h3>
                        <p class="text-[#434243] text-xs lg:text-base">"Sebagai pemilik bisnis kecil, saya sering bingung harus mulai dari mana dalam mengembangkan strategi pemasaran dan operasional. Bakoel Ide benar-benar membantu saya dengan rekomendasi yang tepat berdasarkan kebutuhan bisnis saya. Setelah mengisi quiz, saya langsung mendapatkan panduan serta template yang sesuai, sehingga saya bisa fokus menjalankan bisnis tanpa harus mencari-cari referensi sendiri. Sangat praktis dan efisien!"</p>
                        <button class="bg-[#F26522] text-white px-4 py-2 rounded-full">{{ $translator->translate('Read more') }}</button>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="flex justify-between mt-4 gap-3">
                <button id="prevBtn" class="p-4 rounded-full text-[#F26522] border border-[#F26522] lg:size-16 text-sm"><i class="fa-solid fa-chevron-left"></i></button>
                <button id="nextBtn" class="p-4 rounded-full text-[#F26522] border border-[#F26522] lg:size-16 text-sm"><i class="fa-solid fa-chevron-right"></i></button>
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
<script src="{{ asset('assets/js/splide.min.js') }}"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
  const splide = new Splide('#my-slider', {
    type: 'loop',
    perPage: 3,
    pagination: false,
    arrows:false,
    gap:'2rem',
    focus:'center',
    breakpoints: {
        1024: {
            perPage: 3,
            gap:'2rem',
            focus:"center",
            peek: {
            before: 50, // terlihat sebagian di kiri
            after: 50   // terlihat sebagian di kanan
        },
        },
        640: {
            perPage: 1,
            gap:"20px",
            arrows: false,
        },
        },
    });

    const splide1 = new Splide('#my-slider1', {
    type: 'loop',
    perPage: 3,
    focus: 'center',
    pagination: false,
    arrows: false,
    gap: '30px',
    peek: {
      before: 100,
      after: 100,
    },
    breakpoints: {
        breakpoints: {
      1024: {
        perPage: 3,
        gap: '20px',
        peek: {
          before: 50,
          after: 50,
        },
      },
      640: {
        perPage: 1,
        peek: {
          before: 0,
          after: 0,
        },
      },
    }
    }
  });

  splide1.mount();
  splide.mount();

  // Tambahkan event listener setelah splide terdefinisi
  document.getElementById("prevBtn").addEventListener("click", () => {
    splide.go("<");
  });

  document.getElementById("nextBtn").addEventListener("click", () => {
    splide.go(">");
  });
});


  </script>