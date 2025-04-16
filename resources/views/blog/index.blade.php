@extends('main')
@section('title', 'blog')
@section('hero')
    <section class="blog-hero">
        <div class="blog-hero-content">
            <h1>
                {{ $translator->translate('learn, grow, and succeed with expert insights') }}
            </h1>
            <br>
            <p>
                {{ $translator->translate('browse articles, video guides, and creative tips.') }}
            </p>
        </div>
    </section>
@endsection
@section('content')
    <section class="blog-section">
        <h1 class="blog-title">{{ $translator->translate('Latest articles') }}</h1>
        <div class="blog-container">
            <div class="container1">
                <input type="text" name="search" id="search" placeholder="{{ $translator->translate('Search...') }}">
                <div class="search-blog">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="tags">
                    <p class="active">
                        {{ $translator->translate('All Blogs') }}
                    </p>
                    <p>{{ $translator->translate('Digital Marketings') }}</p>
                    <p>{{ $translator->translate('Branding Tips') }}</p>
                    <p>{{ $translator->translate('Success Stories') }}</p>
                </div>
            </div>
            <div class="container2">
                <div class="pagination">
                    <div class="page" id="page1">
                        <div class="content-item">
                            <img src="{{ asset('assets/images/blog1.jpg') }}" alt="">
                            <div class="desc">
                                <div class="date">
                                    <h1>Des <br><span>31</span></h1>
                                </div>
                                <div class="desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione</p>
                                </div>
                            </div>
                            <div class="blog-btn">
                                <a href="{{ url('/blog/article/1') }}" class="blog-view-article-btn">{{ $translator->translate('View article') }}<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                                <a href="{{ route('blank-page') }}"class="blog-bookmark-btn"><i
                                        class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar1.jpg') }}" alt="">
                            <div class="desc">
                                <div class="date">
                                    <h1>Des <br><span>31</span></h1>
                                </div>
                                <div class="desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione</p>
                                </div>
                            </div>
                            <div class="blog-btn">
                                <a href="{{ url('/blog/article/2') }}" class="blog-view-article-btn">{{ $translator->translate('View article') }}<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                                <a href="{{ route('blank-page') }}"class="blog-bookmark-btn"><i
                                        class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/office.webp') }}" alt="">
                            <div class="desc">
                                <div class="date">
                                    <h1>Des <br><span>31</span></h1>
                                </div>
                                <div class="desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione.</p>
                                </div>
                            </div>
                            <div class="blog-btn">
                                <a href="{{ route('blank-page') }}" class="blog-view-article-btn">{{ $translator->translate('View article') }}<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                                <a href="{{ route('blank-page') }}"class="blog-bookmark-btn"><i
                                        class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/team.webp') }}" alt="">
                            <div class="desc">
                                <div class="date">
                                    <h1>Des <br><span>31</span></h1>
                                </div>
                                <div class="desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione.</p>
                                </div>
                            </div>
                            <div class="blog-btn">
                                <a href="{{ route('blank-page') }}" class="blog-view-article-btn">{{ $translator->translate('View article') }}<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                                <a href="{{ route('blank-page') }}"class="blog-bookmark-btn"><i
                                        class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="page" id="page2" style="display: none;">
                        <div class="content-item">
                            <img src="{{ asset('assets/images/office.webp') }}" alt="">
                            <div class="desc">
                                <div class="date">
                                    <h1>Des <br><span>31</span></h1>
                                </div>
                                <div class="desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione</p>
                                </div>
                            </div>
                            <div class="blog-btn">
                                <a href="{{ route('blank-page') }}" class="blog-view-article-btn">{{ $translator->translate('View article') }}<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                                <a href="{{ route('blank-page') }}"class="blog-bookmark-btn"><i
                                        class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/bg1.jpg') }}" alt="">
                            <div class="desc">
                                <div class="date">
                                    <h1>Des <br><span>31</span></h1>
                                </div>
                                <div class="desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione</p>
                                </div>
                            </div>
                            <div class="blog-btn">
                                <a href="{{ route('blank-page') }}" class="blog-view-article-btn">{{ $translator->translate('View article') }}<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                                <a href="{{ route('blank-page') }}"class="blog-bookmark-btn"><i
                                        class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/office.webp') }}" alt="">
                            <div class="desc">
                                <div class="date">
                                    <h1>Des <br><span>31</span></h1>
                                </div>
                                <div class="desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione</p>
                                </div>
                            </div>
                            <div class="blog-btn">
                                <a href="{{ route('blank-page') }}" class="blog-view-article-btn">{{ $translator->translate('View article') }}<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                                <a href="{{ route('blank-page') }}"class="blog-bookmark-btn"><i
                                        class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/blog1.jpg') }}" alt="">
                            <div class="desc">
                                <div class="date">
                                    <h1>Des <br><span>31</span></h1>
                                </div>
                                <div class="desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione</p>
                                </div>
                            </div>
                            <div class="blog-btn">
                                <a href="{{ route('blank-page') }}" class="blog-view-article-btn">{{ $translator->translate('View article') }}<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                                <a href="{{ route('blank-page') }}"class="blog-bookmark-btn"><i
                                        class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="page" id="page3" style="display: none;">
                        <div class="content-item">
                            <img src="{{ asset('assets/images/blog1.jpg') }}" alt="">
                            <div class="desc">
                                <div class="date">
                                    <h1>Des <br><span>31</span></h1>
                                </div>
                                <div class="desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione</p>
                                </div>
                            </div>
                            <div class="blog-btn">
                                <a href="{{ route('blank-page') }}" class="blog-view-article-btn">{{ $translator->translate('View article') }}<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                                <a href="{{ route('blank-page') }}"class="blog-bookmark-btn"><i
                                        class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/webinar1.jpg') }}" alt="">
                            <div class="desc">
                                <div class="date">
                                    <h1>Des <br><span>31</span></h1>
                                </div>
                                <div class="desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione</p>
                                </div>
                            </div>
                            <div class="blog-btn">
                                <a href="{{ route('blank-page') }}" class="blog-view-article-btn">{{ $translator->translate('View article') }}<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                                <a href="{{ route('blank-page') }}"class="blog-bookmark-btn"><i
                                        class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/office.webp') }}" alt="">
                            <div class="desc">
                                <div class="date">
                                    <h1>Des <br><span>31</span></h1>
                                </div>
                                <div class="desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione.</p>
                                </div>
                            </div>
                            <div class="blog-btn">
                                <a href="{{ route('blank-page') }}" class="blog-view-article-btn">{{ $translator->translate('View article') }}<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                                <a href="{{ route('blank-page') }}"class="blog-bookmark-btn"><i
                                        class="fa-regular fa-bookmark"></i></a>
                            </div>
                        </div>
                        <div class="content-item">
                            <img src="{{ asset('assets/images/team.webp') }}" alt="">
                            <div class="desc">
                                <div class="date">
                                    <h1>Des <br><span>31</span></h1>
                                </div>
                                <div class="desc-content">
                                    <h3>
                                        Lorem ipsum dolor sit amet
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequatur,
                                        laboriosam, voluptatem ratione.</p>
                                </div>
                            </div>
                            <div class="blog-btn">
                                <a href="{{ route('blank-page') }}" class="blog-view-article-btn">{{ $translator->translate('View article') }}<i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                                <a href="{{ route('blank-page') }}"class="blog-bookmark-btn"><i
                                        class="fa-regular fa-bookmark"></i></a>
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
    </section>
@endsection
@push('script')
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
@endpush
