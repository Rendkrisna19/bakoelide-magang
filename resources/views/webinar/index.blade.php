@extends('main')
@section('title', 'webinar')
@section('hero')
    <section class="webinar-hero">
        <div class="webinar-hero-content">
            <h1> {{ $translator->translate('learn, grow, and succeed with expert insights') }}</h1>
            <br>
            <p>{{ $translator->translate('browse articles, video guides, and creative tips.') }}</p>
        </div>
    </section>
@endsection
@section('content')
    <section class="webinar-section">
        <div class="webinar-container">
            <h3>{{ $translator->translate('Pick a Dates') }}</h3>
            <div class="filter-container">
                <select name="" id="" class="sort-by">
                    <option value="" selected>{{ $translator->translate('Sort By') }}</option>
                    <option value="">{{ $translator->translate('Ascanding') }}</option>
                    <option value="">{{ $translator->translate('Descanding') }}</option>
                </select>
                <input type="date" name="webinar_date" id="webinar-date" class="webinar-pick-date">
                <div class="webinar-search">
                    <input type="text" name="" id="" placeholder="{{ $translator->translate('Search...') }}">
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="webinar-coming-soon">
            <h1>{{ $translator->translate('Coming Soon !') }}</h1>
            <hr>
            <div class="coming-soon-container">
                <div class="pagination">
                    <div class="page" id="page1">
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar2.png') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar3.jpeg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="page" id="page2" style="display: none;">
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar2.png') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar3.jpeg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="page" id="page3" style="display: none;">
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar3.jpeg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar2.png') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-controls">
                    <button onclick="prevPage()"><i class="fa-solid fa-chevron-left"></i></button>
                    <div id="pagination-numbers" class="pagination-numbers"></div>
                    <button onclick="nextPage()"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>

        <div class="webinar-coming-soon">
            <h1>{{ $translator->translate('Recording Webinar') }}</h1>
            <hr>
            <div class="coming-soon-container">
                <div class="paginations">
                    <div class="pages" id="pages1">
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar2.png') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar3.jpeg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pages" id="pages2" style="display: none;">
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar2.png') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar3.jpeg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pages" id="pages3" style="display: none;">
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar3.jpeg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar2.png') }}" alt="">
                            <div class="webinar-desc">
                                <div class="webinar-desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione
                                    </p>
                                    <p class="webinar-date-time">{{ $translator->translate('Sunday , 3 jan 2025 | 11:00 Wib') }}</p>
                                </div>
                            </div>
                            <div class="webinar-btn">
                                <a href="{{ route('blank-page') }}"class="active">{{ $translator->translate('Register Now') }}<i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('blank-page') }}">{{ $translator->translate('Payment') }} <i class="fa-regular fa-credit-card"></i></a>
                                <a href="{{ route('blank-page') }}"><i class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="record-pagination-controls">
                    <button onclick="prevPages()"><i class="fa-solid fa-chevron-left"></i></button>
                    <div id="record-pagination-numbers" class="record-pagination-numbers"></div>
                    <button onclick="nextPages()"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            const dateInput = $('#webinar-date');

            // Fungsi untuk memformat tanggal menjadi "18 January 2025"
            function formatDate(date) {
                const options = {
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                };
                return new Date(date).toLocaleDateString('en-US', options);
            }

            // Atur tanggal awal ke hari ini
            const today = new Date();
            dateInput.val(today.toISOString().split('T')[0]); // Set default value
            dateInput.attr('placeholder', formatDate(today)); // Set placeholder dengan format

            // Perbarui placeholder saat tanggal dipilih
            dateInput.on('change', function() {
                const selectedDate = $(this).val();
                if (selectedDate) {
                    const formattedDate = formatDate(selectedDate);
                    $(this).attr('placeholder', formattedDate);
                }
            });
        });
    </script>
    <script>
        let currentPage = 1;
        const totalPages = 3;
        const maxVisibleNumbers = 5; // Jumlah maksimum angka pagination yang ditampilkan

        function showPage(pageNumber) {
            // Tampilkan halaman konten sesuai nomor
            for (let i = 1; i <= totalPages; i++) {
                document.getElementById(`page${i}`).style.display = i === pageNumber ? 'grid' : 'none';
            }
            currentPage = pageNumber;

            // Perbarui tombol pagination
            updatePaginationNumbers();
        }

        function prevPage() {
            if (currentPage > 1) {
                showPage(currentPage - 1);
            }
        }

        function nextPage() {
            if (currentPage < totalPages) {
                showPage(currentPage + 1);
            }
        }

        function updatePaginationNumbers() {
            const paginationNumbers = document.getElementById('pagination-numbers');
            paginationNumbers.innerHTML = '';

            // Tentukan angka pertama dan terakhir yang akan ditampilkan
            let start = Math.max(currentPage - Math.floor(maxVisibleNumbers / 2), 1);
            let end = Math.min(start + maxVisibleNumbers - 1, totalPages);

            // Penyesuaian jika di dekat awal/akhir
            if (end - start + 1 < maxVisibleNumbers) {
                start = Math.max(end - maxVisibleNumbers + 1, 1);
            }

            // Buat tombol angka pagination
            for (let i = start; i <= end; i++) {
                const button = document.createElement('button');
                button.textContent = i;
                button.classList.add('pagination-btn');
                if (i === currentPage) {
                    button.classList.add('active'); // Tambahkan kelas aktif untuk halaman saat ini
                }
                button.addEventListener('click', () => showPage(i));
                paginationNumbers.appendChild(button);
            }
        }

        // Inisialisasi saat dokumen siap
        document.addEventListener('DOMContentLoaded', () => {
            showPage(currentPage);
        });
    </script>
    <script>
        $(document).ready(function() {
            const totalPages = $('.pages').length; // Hitung jumlah halaman
            let currentPage = 1; // Halaman aktif awal

            function renderPagination() {
                let paginationNumbers = '';
                for (let i = 1; i <= totalPages; i++) {
                    paginationNumbers +=
                        `<span class="page-number ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</span>`;
                }
                $('#record-pagination-numbers').html(paginationNumbers);

                // Pasang event klik pada nomor halaman
                $('.page-number').on('click', function() {
                    const selectedPage = $(this).data('page'); // Ambil nomor halaman yang diklik
                    currentPage = selectedPage; // Update halaman aktif
                    showPage(currentPage); // Tampilkan halaman yang sesuai
                    updatePaginationState(); // Update tampilan pagination
                });
            }

            function showPage(page) {
                $('.pages').hide(); // Sembunyikan semua halaman
                $(`#pages${page}`).show(); // Tampilkan halaman sesuai ID
            }

            function updatePaginationState() {
                $('.page-number').removeClass('active'); // Hapus kelas aktif dari semua nomor
                $(`.page-number[data-page="${currentPage}"]`).addClass(
                    'active'); // Tambahkan kelas aktif ke nomor halaman saat ini
            }

            // Fungsi untuk halaman sebelumnya
            window.prevPages = function() {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                    updatePaginationState();
                }
            };

            // Fungsi untuk halaman berikutnya
            window.nextPages = function() {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                    updatePaginationState();
                }
            };

            // Inisialisasi
            renderPagination(); // Render nomor pagination
            showPage(currentPage); // Tampilkan halaman pertama
        });
    </script>
@endpush
