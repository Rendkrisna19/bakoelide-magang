@extends('main')
@extends('layouts.app')

@section('title', 'contact')
@section('hero')
    <section class="contact-hero">
        <div class="contact-hero-content">
            <h1> {{ $translator->translate('contact us') }}</h1>
            <br>
            <p> {{ $translator->translate('get to know and reach out us to develop your brand') }}</p>
        </div>
    </section>
@endsection
@section('content')
    <section class="contact-section">
        <div class="contact-container">
            <div class="about-container">
                <div class="flow-container1">
                    <div class="flow-icon">
                        <i class="fa-regular fa-lightbulb"></i>
                    </div>
                    <div class="flow-year">
                        <h1>2023</h1>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                    <div class="flow-desc">
                        <h1 class="flow-desc-title">{{ $translator->translate('inspiration') }}</h1>
                        <p class="flow-desc-p">
                            {{ $translator->translate('The description of the history that "Bakoelide" has gone through, step by step.') }}
                        </p>
                    </div>
                </div>
                <div class="flow-container2">
                    <div class="flow-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="flow-year">
                        <h1>2024</h1>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                    <div class="flow-desc">
                        <h1 class="flow-desc-title">{{ $translator->translate('recruite team') }}</h1>
                        <p class="flow-desc-p">
                            {{ $translator->translate('The description of the history that "Bakoelide" has gone through, step by step.') }}
                        </p>
                    </div>
                </div>
                <div class="flow-container3">
                    <div class="flow-icon">
                        <i class="fa-solid fa-desktop"></i>
                    </div>
                    <div class="flow-year">
                        <h1>2024</h1>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                    <div class="flow-desc">
                        <h1 class="flow-desc-title">{{ $translator->translate('build system') }}</h1>
                        <p class="flow-desc-p">
                            {{ $translator->translate('The description of the history that "Bakoelide" has gone through, step by step.') }}
                        </p>
                    </div>
                </div>
                <div class="flow-container4">
                    <div class="flow-icon">
                        <i class="fa-regular fa-handshake"></i>
                    </div>
                    <div class="flow-year">
                        <h1>2025</h1>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                    <div class="flow-desc">
                        <h1 class="flow-desc-title">{{ $translator->translate('services') }}</h1>
                        <p class="flow-desc-p">
                            {{ $translator->translate('The description of the history that "Bakoelide" has gone through, step by step.') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="journey-container">
                <div class="list-journey">
                    <div class="list-journey1">
                        <h1 class="journey-title"> {{ $translator->translate('The spark') }}</h1>
                        <div class="journey-desc">
                            <p>
                                {{ $translator->translate('Bakoel Ide began with a vision to transform bold ideas into powerful digital
                                                                                                                                                                                                strategies that help
                                                                                                                                                                                                brands grow.') }}
                            </p>
                            <div class="icon-journey">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                        </div>
                    </div>
                    <div class="list-journey2">
                        <h1 class="journey-title"> {{ $translator->translate('the blueprint') }}</h1>
                        <div class="journey-desc">
                            <p>
                                {{ $translator->translate('We create tailored digital marketing strategies that drive growth and engage audiences.') }}
                            </p>
                            <div class="icon-journey">
                                <i class="fa-solid fa-bookmark"></i>
                            </div>
                        </div>
                    </div>
                    <div class="list-journey3">
                        <h1 class="journey-title"> {{ $translator->translate('the vow') }}</h1>
                        <div class="journey-desc">
                            <p>
                                {{ $translator->translate('  We’re committed to delivering
                                                                                                                                innovative digital experiences that connect brands with their
                                                                                                                                audience.') }}

                            </p>
                            <div class="icon-journey">
                                <i class="fa-solid fa-book"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-journey">
                    <img src="{{ asset('assets/images/team.webp') }}" alt="">
                    <h1> {{ $translator->translate('Our milestone journey') }}</h1>
                </div>
            </div>
        </div>
        <div class="our-team-container">
            <div class="our-team-header">
                <h1><span>{{ $translator->translate('Our team') }}</span> <br>
                    {{ $translator->translate('Meet the Bakoel ide team') }}
                </h1>
                <p>
                    {{ $translator->translate(' Our team consists of skilled experts with extensive experience in marketing and communication.
                                                            We understand the best strategies to tackle challenges and deliver impactful results for your brand') }}
                </p>
            </div>
            <div class="our-team-img">
                <div class="img-container1">
                    <img src="{{ asset('img/Raymond_Wolff.jpg') }}" alt="">
                    <div class="overlay">
                        <p class="name">Raymond Wolff</p>
                        <div class="position-container">
                            <p class="position">CEO</p>
                            <div class="sosmed">
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-container1">
                    <img src="{{ asset('img/Ruben_Ray.jpg') }}" alt="">
                    <div class="overlay">
                        <p class="name">Ruben Ray</p>
                        <div class="position-container">
                            <p class="position">CTO</p>
                            <div class="sosmed">
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-container1">
                    <img src="{{ asset('img/Antonius_Ardi.jpg') }}" alt="">
                    <div class="overlay">
                        <p class="name">Antonius Ardi</p>
                        <div class="position-container">
                            <p class="position">CMO</p>
                            <div class="sosmed">
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-container1">
                    <img src="{{ asset('img/Andy_taufiq.jpg') }}" alt="">
                    <div class="overlay">
                        <p class="name">Andy Taufiq</p>
                        <div class="position-container">
                            <p class="position">CFO</p>
                            <div class="sosmed">
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-container1">
                    <img src="{{ asset('img/Nadya_Bunga.jpg') }}" alt="">
                    <div class="overlay">
                        <p class="name">Nadya Bunga</p>
                        <div class="position-container">
                            <p class="position">Designer</p>
                            <div class="sosmed">
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-container1">
                    <img src="{{ asset('img/Dwi_Nauli.jpg') }}" alt="">
                    <div class="overlay">
                        <p class="name">Dwi Nauli</p>
                        <div class="position-container">
                            <p class="position">Designer</p>
                            <div class="sosmed">
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="  flex items-center justify-center p-4">

        <div class="max-w-6xl w-full flex flex-col md:flex-row items-center gap-8">
          <!-- Gambar -->
          <div class="w-full md:w-1/2 flex justify-center">
            <img src="{{ asset('assets/images/contactus.png') }}" alt="Konsultasi" class="w-80 md:w-full object-contain">
          </div>
      
          <!-- Form Konsultasi -->
          <div class="w-full md:w-1/2 bg-orange-200 p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">KONSULTASIKAN DENGAN KAMI</h2>
            <p class="text-gray-600 mb-6 text-sm">
              Dengan ini Anda percaya bahwa kami akan sungguh-sungguh membantu Anda untuk meningkatkan Produk & Layanantivitas bisnis Anda dan menambah nilai kemajuan bisnis Anda.
            </p>
            <form class="space-y-4">
              <input type="text" placeholder="Nama" class="w-full p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
              <input type="email" placeholder="Email" class="w-full p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
              <input type="text" placeholder="No. Telepon" class="w-full p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
              <input type="text" placeholder="Subjek" class="w-full p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
              <textarea placeholder="Deskripsi" class="w-full p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400" rows="4"></textarea>
              <button type="submit" class="w-full bg-orange-500 text-white py-3 rounded-md hover:bg-orange-600 transition">Kirim</button>
            </form>
          </div>
        </div>

        </section
@endsection
