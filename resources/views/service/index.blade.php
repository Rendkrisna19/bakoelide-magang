@extends('main')
@section('title', 'services')
@section('carousel')
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <!-- <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image"> -->
            <!-- <iframe src="img/carousel-1.jpg" frameborder="0" allowfullscreen></iframe> -->
            <video id="myVideo" class="img-fluid w-100 " style="height: 100%;" controls autoplay loop>
                <source src="/img/compress/Our Service New.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="text-sm-center text-md-end"></div>
                        <div class="col-lg-0 col-xl-5"></div>
                        <div class="col-xl-7 animated fadeInLeft">
                            <div class="container text-center py-5" style="max-width: 900px;">
                                <!-- <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
                                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="about.html">About</a></li>
                                    <li class="breadcrumb-item active text-primary">Service</li>
                                    <li class="breadcrumb-item"><a href="contact.html">Contact</a></li>
                                </ol>     -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-8 mb-4 mt-5">Our Services</h1>
                <!-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic. -->
                </p>
            </div>
            <div class="row g-4">

                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="service-img">
                                <img src="img/Bakoelide Konten.PNG" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h5 d-inline-block mb-4" id="bkl">Annual Plan/
                                    StrategyComprehensive Strategy and Monthly Execution Plans</a>
                                <hr style="border: none; border-top: 3px solid #000000; margin: 1px 0;">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <div class="service-img">

                                <img src="img/bakoelide Our Services.jpg" class="img-fluid rounded-top w-100"
                                    alt="Image">

                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h5 d-inline-block mb-4" id="bkl2">Custom Content
                                    and Personalized Creative Boosts</a>
                                <hr style="border: none; border-top: 3px solid #000000; margin: 20px 0;">
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            <div class="service-img">
                                <img src="img/Frame 19.png" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h5 d-inline-block mb-4" id="bkl2">Full-Scale Web Design, SEO,
                                    and Maintenance Services</a>
                                <hr style="border: none; border-top: 3px solid #000000; margin: 20px 0;">
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                            <div class="service-img">
                                <img src="img/global-collage-smartphone-users-across-diverse-environments (1).jpg"
                                    class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h5 d-inline-block mb-4" id="bkl4">Hyper-personalized marketing
                                </a>

                            </div>
                        </a>
                    </div>
                    <hr style="border: none; border-top: 3px solid #000000; margin: 20px 0;">
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Testimonial Start -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <img src="/img/Bakoelide Konten.PNG" class="img-fluid mb-5" alt="...">
                            <span class="text-dark" class="mt-5">Annual Plan/
                                StrategyComprehensive Strategy and Monthly Execution Plans.
                            </span>
                            <hr>
                        </div>
                        <div class="col-lg-6">
                            <p class="text-bg-secondary"style="color: #000; font-family: 'Garet';">An Annual Plan sets the
                                direction for a business, outlining long-term goals and priorities. A Comprehensive Strategy
                                provides the framework for achieving these goals, focusing on key objectives, resources, and
                                performance metrics.
                                <br>
                                <br> Monthly Execution Plans break down the strategy into actionable steps, with clear
                                tasks, deadlines, and responsibilities. This approach allows for flexibility and timely
                                adjustments, ensuring alignment with overall goals and enabling companies to stay on track
                                while adapting to changes.
                                <br>
                                <br> Together, these plans drive efficiency, track progress, and help businesses achieve
                                long-term success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <img src="/img/bakoelide Our Services.jpg" class="img-fluid mb-5" alt="...">
                            <span class="text-dark" class="mt-5">Custom Content
                                and Personalized Creative Boosts

                            </span>
                            <hr>
                        </div>
                        <div class="col-lg-6">
                            <p class="text-bg-secondary"style="color: #000; font-family: 'Garet';">Custom Content is
                                crafted to engage your specific audience, ensuring relevance and connection with your brand.
                                <br>
                                <br>Personalized Creative Boosts enhance this by tailoring visuals, messaging, and
                                strategies to elevate your brand’s presence and drive deeper engagement.
                                <br>
                                <br> Together, they help strengthen your brand’s voice and create lasting connections with
                                your audience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <img src="/img/Frame 19.png" class="img-fluid " alt="...">
                            <span class="text-dark" class="mt-5">Full-Scale Web Design, SEO, and Maintenance Services
                            </span>
                            <hr>
                        </div>
                        <div class="col-lg-6">
                            <p class="text-bg-secondary"style="color: #000; font-family: 'Garet';">We offer custom Web
                                Design to create user-friendly, engaging websites tailored to your brand. Our SEO services
                                boost your site's visibility and drive organic traffic by optimizing for search engines.
                                <br>
                                <br>
                                Maintenance Services ensure your site stays secure, up-to-date, and performs at its best.
                                <br>
                                <br> Together, these services provide a complete solution to enhance your online presence
                                and keep your website running smoothly.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <img src="/img/global-collage-smartphone-users-across-diverse-environments (1).jpg"
                                class="img-fluid" alt="..." style="max-height: 350px; object-fit: cover;">
                            <hr>
                            <span class="text-dark mt-3 d-block">Hyper-personalized marketing</span>
                        </div>
                        <div class="col-lg-6">
                            <p class="text-bg-secondary" style="color: #000; font-family: 'Garet';">
                                Hyper-Personalized Marketing goes beyond basic segmentation by delivering targeted messages
                                based on individual behaviors and preferences.
                                <br><br>
                                Using data and insights, we create customized campaigns that drive deeper engagement and
                                conversions.
                                <br><br>
                                This approach ensures every interaction feels personal and impactful, fostering lasting
                                relationships with your customers. We focus on what matters most, making them feel valued at
                                every touchpoint.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
<h6>footer</h6>
@endsection
