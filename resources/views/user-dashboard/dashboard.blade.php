@extends('main')
@section('title', 'user-dashboard')
@section('hide_footer')
@endsection
@section('content')
    <section class="user-dashboard-section">
        <div class="user-profile-section">
            <h1>Edit Your Profile</h1>
            <div class="profile-img">
                <img src="{{ asset('img/Dwi_Nauli.jpg') }}" alt="">
            </div>
            <div class="input-section">
                <div class="user-name">
                    <label for="">User Name</label>
                    <input type="text" name="user-name" placeholder="complete name">
                </div>
                <div class="brand-name">
                    <label for="">Brand Name</label>
                    <input type="text" name="brand-name" placeholder="your brand name">
                </div>
                <div class="email">
                    <label for="">Email</label>
                    <input type="email" name="user-email" placeholder="example@email.com">
                </div>
                <div class="bussiness-type">
                    <label for="">Bussiness Type</label>
                    <select name="" id="">
                        <option value="">mid</option>
                        <option value="">medium</option>
                        <option value="">big</option>
                    </select>
                </div>
                <div class="industry">
                    <label for="">Preferred Industry</label>
                    <input type="text" name="" id="" placeholder="ex : food & baverage">
                </div>
                <small class="forgot-pass"><a href="">Forgot Password ?</a></small>
                <div class="user-profile-btn">
                    @php
                        $toasts = [['status' => 'success', 'message' => 'success']];
                    @endphp
                    <x-toast :toasts="$toasts" />
                    <a href="javascript:void(0)" id="show-toast">Save</a>
                </div>
            </div>
        </div>
        <div class="user-progress-section">
            <div class="progress-container">
                <div class="progress-title">
                    <h1>Your Progress</h1>
                    <hr>
                </div>
                <div class="small-progress-container">
                    <div class="product-container">
                        <h1>8</h1>
                        <small>products</small>
                        <p>Purchased <i class="fa-solid fa-arrow-right-long"></i></p>
                    </div>
                    <div class="template-container">
                        <h1>4</h1>
                        <small>templates</small>
                        <p>Downloaded<i class="fa-solid fa-arrow-right-long"></i></p>
                    </div>
                    <div class="webinars-container">
                        <h1>10</h1>
                        <small>webinar</small>
                        <p>Has Joined<i class="fa-solid fa-arrow-right-long"></i></p>
                    </div>
                    <div class="articles-container">
                        <h1>24</h1>
                        <small>articles</small>
                        <p>Read<i class="fa-solid fa-arrow-right-long"></i></p>
                    </div>
                </div>
            </div>
            <div class="saved-container">
                <div class="saved-title">
                    <h1>Your Saved</h1>
                    <hr>
                </div>
                <div class="saved-tabs">
                    <!-- Tabs Navigation -->
                    <div class="tabs-nav">
                        <button class="tab-button product-tabs active" data-tab="tab1">Products</button>
                        <button class="tab-button webinar-tabs" data-tab="tab2">Webinars</button>
                        <button class="tab-button article-tabs" data-tab="tab3">Articles</button>
                    </div>
                    <hr>
                    <!-- Tabs Content -->
                    <div class="tabs-content">
                        <div id="tab1" class="tab-content active">
                            <div class="tab-con1">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                                    <div class="webinar-desc">
                                        <div class="webinar-desc-content">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                            </h3>
                                            <p>⭐ 4.5 - 48 sold </p>
                                            <p class="webinar-date-time"><b>Rp 99.999</b></p>
                                        </div>
                                    </div>
                                    <div class="webinar-btn">
                                        <a href=""class="active">Add To Cart<i
                                                class="fa-solid fa-cart-shopping"></i></a>
                                        <a href=""><i class="fa-solid fa-exclamation"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con2">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/webinar2.png') }}" alt="">
                                    <div class="webinar-desc">
                                        <div class="webinar-desc-content">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                            </h3>
                                            <p>⭐ 4.5 - 48 sold </p>
                                            <p class="webinar-date-time"><b>Rp 99.999</b></p>
                                        </div>
                                    </div>
                                    <div class="webinar-btn">
                                        <a href=""class="active">Add To Cart<i
                                                class="fa-solid fa-cart-shopping"></i></a>
                                        <a href=""><i class="fa-solid fa-exclamation"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con3">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/webinar3.jpeg') }}" alt="">
                                    <div class="webinar-desc">
                                        <div class="webinar-desc-content">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                            </h3>
                                            <p>⭐ 4.5 - 48 sold </p>
                                            <p class="webinar-date-time"><b>Rp 99.999</b></p>
                                        </div>
                                    </div>
                                    <div class="webinar-btn">
                                        <a href=""class="active">Add To Cart<i
                                                class="fa-solid fa-cart-shopping"></i></a>
                                        <a href=""><i class="fa-solid fa-exclamation"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con4">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/webinar2.png') }}" alt="">
                                    <div class="webinar-desc">
                                        <div class="webinar-desc-content">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                            </h3>
                                            <p>⭐ 4.5 - 48 sold </p>
                                            <p class="webinar-date-time"><b>Rp 99.999</b></p>
                                        </div>
                                    </div>
                                    <div class="webinar-btn">
                                        <a href=""class="active">Add To Cart<i
                                                class="fa-solid fa-cart-shopping"></i></a>
                                        <a href=""><i class="fa-solid fa-exclamation"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con5">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                                    <div class="webinar-desc">
                                        <div class="webinar-desc-content">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                            </h3>
                                            <p>⭐ 4.5 - 48 sold </p>
                                            <p class="webinar-date-time"><b>Rp 99.999</b></p>
                                        </div>
                                    </div>
                                    <div class="webinar-btn">
                                        <a href=""class="active">Add To Cart<i
                                                class="fa-solid fa-cart-shopping"></i></a>
                                        <a href=""><i class="fa-solid fa-exclamation"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con6">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                                    <div class="webinar-desc">
                                        <div class="webinar-desc-content">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                            </h3>
                                            <p>⭐ 4.5 - 48 sold </p>
                                            <p class="webinar-date-time"><b>Rp 99.999</b></p>
                                        </div>
                                    </div>
                                    <div class="webinar-btn">
                                        <a href=""class="active">Add To Cart<i
                                                class="fa-solid fa-cart-shopping"></i></a>
                                        <a href=""><i class="fa-solid fa-exclamation"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-content">
                            <div class="tab-con1">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                                    <div class="webinar-desc">
                                        <div class="webinar-desc-content">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </p>
                                            <p class="webinar-date-time">Sunday , 3 Jan 2025 | 11.00 WIB</p>
                                        </div>
                                    </div>
                                    <div class="webinar-btn">
                                        <a href=""class="active">Register Now<i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="">Payment <i class="fa-regular fa-credit-card"></i></a>
                                        <a href=""><i class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con2">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                                    <div class="webinar-desc">
                                        <div class="webinar-desc-content">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </p>
                                            <p class="webinar-date-time">Sunday , 3 Jan 2025 | 11.00 WIB</p>
                                        </div>
                                    </div>
                                    <div class="webinar-btn">
                                        <a href=""class="active">Register Now<i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="">Payment <i class="fa-regular fa-credit-card"></i></a>
                                        <a href=""><i class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con3">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                                    <div class="webinar-desc">
                                        <div class="webinar-desc-content">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </p>
                                            <p class="webinar-date-time">Sunday , 3 Jan 2025 | 11.00 WIB</p>
                                        </div>
                                    </div>
                                    <div class="webinar-btn">
                                        <a href=""class="active">Register Now<i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="">Payment <i class="fa-regular fa-credit-card"></i></a>
                                        <a href=""><i class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con4">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                                    <div class="webinar-desc">
                                        <div class="webinar-desc-content">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </p>
                                            <p class="webinar-date-time">Sunday , 3 Jan 2025 | 11.00 WIB</p>
                                        </div>
                                    </div>
                                    <div class="webinar-btn">
                                        <a href=""class="active">Register Now<i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="">Payment <i class="fa-regular fa-credit-card"></i></a>
                                        <a href=""><i class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con5">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                                    <div class="webinar-desc">
                                        <div class="webinar-desc-content">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </p>
                                            <p class="webinar-date-time">Sunday , 3 Jan 2025 | 11.00 WIB</p>
                                        </div>
                                    </div>
                                    <div class="webinar-btn">
                                        <a href=""class="active">Register Now<i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="">Payment <i class="fa-regular fa-credit-card"></i></a>
                                        <a href=""><i class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con6">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/webinar.jpg') }}" alt="">
                                    <div class="webinar-desc">
                                        <div class="webinar-desc-content">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </p>
                                            <p class="webinar-date-time">Sunday , 3 Jan 2025 | 11.00 WIB</p>
                                        </div>
                                    </div>
                                    <div class="webinar-btn">
                                        <a href=""class="active">Register Now<i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="">Payment <i class="fa-regular fa-credit-card"></i></a>
                                        <a href=""><i class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="tab-content">
                            <div class="tab-con1">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="">
                                    <div class="desc">
                                        <div class="date">
                                            <h1>Des <br><span>31</span></h1>
                                        </div>
                                        <div class="desc-content">
                                            <h3>
                                                Lorem ipsum dolor
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        </div>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="" class="blog-view-article-btn">view article <i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                        <a href=""class="blog-bookmark-btn"><i
                                                class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con2">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="">
                                    <div class="desc">
                                        <div class="date">
                                            <h1>Des <br><span>31</span></h1>
                                        </div>
                                        <div class="desc-content">
                                            <h3>
                                                Lorem ipsum dolor
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        </div>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="" class="blog-view-article-btn">view article <i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                        <a href=""class="blog-bookmark-btn"><i
                                                class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con3">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="">
                                    <div class="desc">
                                        <div class="date">
                                            <h1>Des <br><span>31</span></h1>
                                        </div>
                                        <div class="desc-content">
                                            <h3>
                                                Lorem ipsum dolor
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        </div>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="" class="blog-view-article-btn">view article <i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                        <a href=""class="blog-bookmark-btn"><i
                                                class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con4">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="">
                                    <div class="desc">
                                        <div class="date">
                                            <h1>Des <br><span>31</span></h1>
                                        </div>
                                        <div class="desc-content">
                                            <h3>
                                                Lorem ipsum dolor
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        </div>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="" class="blog-view-article-btn">view article <i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                        <a href=""class="blog-bookmark-btn"><i
                                                class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con5">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="">
                                    <div class="desc">
                                        <div class="date">
                                            <h1>Des <br><span>31</span></h1>
                                        </div>
                                        <div class="desc-content">
                                            <h3>
                                                Lorem ipsum dolor
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        </div>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="" class="blog-view-article-btn">view article <i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                        <a href=""class="blog-bookmark-btn"><i
                                                class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con6">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="">
                                    <div class="desc">
                                        <div class="date">
                                            <h1>Des <br><span>31</span></h1>
                                        </div>
                                        <div class="desc-content">
                                            <h3>
                                                Lorem ipsum dolor
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        </div>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="" class="blog-view-article-btn">view article <i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                        <a href=""class="blog-bookmark-btn"><i
                                                class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con7">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="">
                                    <div class="desc">
                                        <div class="date">
                                            <h1>Des <br><span>31</span></h1>
                                        </div>
                                        <div class="desc-content">
                                            <h3>
                                                Lorem ipsum dolor
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        </div>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="" class="blog-view-article-btn">view article <i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                        <a href=""class="blog-bookmark-btn"><i
                                                class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con8">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="">
                                    <div class="desc">
                                        <div class="date">
                                            <h1>Des <br><span>31</span></h1>
                                        </div>
                                        <div class="desc-content">
                                            <h3>
                                                Lorem ipsum dolor
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        </div>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="" class="blog-view-article-btn">view article <i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                        <a href=""class="blog-bookmark-btn"><i
                                                class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-con9">
                                <div class="content-item">
                                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="">
                                    <div class="desc">
                                        <div class="date">
                                            <h1>Des <br><span>31</span></h1>
                                        </div>
                                        <div class="desc-content">
                                            <h3>
                                                Lorem ipsum dolor
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        </div>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="" class="blog-view-article-btn">view article <i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                        <a href=""class="blog-bookmark-btn"><i
                                                class="fa-solid fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $('.tab-button').on('click', function() {
                // Remove active class from all buttons
                $('.tab-button').removeClass('active');
                // Add active class to the clicked button
                $(this).addClass('active');

                // Hide all tab contents
                $('.tab-content').removeClass('active');
                // Show the corresponding tab content
                const targetTab = $(this).data('tab');
                $(`#${targetTab}`).addClass('active');
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const button = document.getElementById("show-toast");

            button.addEventListener("click", () => {
                showToast({
                    status: "success", // Can be 'success', 'error', or 'warning'
                    message: "Your data has been saved successfully!",
                });
            });

            function showToast({
                status,
                message
            }) {
                // Create the toast element
                const toast = document.createElement("div");
                toast.className = `toast ${status} show`;
                toast.innerText = message;

                // Append the toast to the body or a specific container
                document.body.appendChild(toast);

                // Automatically remove the toast after 3 seconds
                setTimeout(() => {
                    toast.classList.remove("show");
                    toast.addEventListener("transitionend", () => toast.remove());
                }, 3000);
            }
        });
    </script>
@endpush
