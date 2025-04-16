@extends('main')
@section('title', 'about')
@section('carousel')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active text-primary">About</li>
                <li class="breadcrumb-item"><a href="{{route('services')}}">Service</a></li>
                <li class="breadcrumb-item"><a href="{{route('contact')}}">Contact</a></li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid about justify-content-end" style="background-color: #DDD8D3; min-height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-lg-5 mb-5" style="margin-top: 50px;">
                <h1 class="display-4 display-sm-5 display-md-2" style="color: #5f5c5c;">
                    Meet the Bakoel Ide
                    <span class="d-inline d-md-block">Team that turns ideas</span>
                    <span class="d-inline d-md-block">into real results.</span>
                </h1>
            </div>

            <div class="col-lg-5 d-flex flex-wrap justify-content-center mb-5" style="margin-top: 50px;">
                <!-- Member 1 -->
                <div class="d-flex flex-column text-center mx-3 mb-4">
                    <img src="/img/Andy Taufiq.jpg" class="img-thumbnail avatar rounded-circle" alt="Andy Taufiq">
                    <p style="font-family: 'Garet-Bold';" class="fs-5 text-dark fw-bolder mt-2">Andy Taufiq
                        <span style="font-family: 'Garet';" class="fw-normal fs-6 d-inline d-md-block">Creative
                            Director</span>
                    </p>
                </div>

                <!-- Member 2 -->
                <div class="d-flex flex-column text-center mx-3 mb-4">
                    <img src="/img/Antonius Ardi.jpg" class="img-thumbnail avatar rounded-circle" alt="Antonius Ardi">
                    <p style="font-family: 'Garet-Bold';" class="fs-5 text-dark fw-bolder mt-2">Antonius Ardi
                        <span style="font-family: 'Garet';" class="fw-normal fs-6 d-inline d-md-block">Account
                            Director</span>
                    </p>
                </div>

                <!-- Member 3 -->
                <div class="d-flex flex-column text-center mx-3 mb-4">
                    <img src="/img/Raymond Wolff.jpg" class="img-thumbnail avatar rounded-circle" alt="Raymond Wolff">
                    <p style="font-family: 'Garet-Bold';" class="fs-5 text-dark fw-bolder mt-2">Raymond Wolff
                        <span style="font-family: 'Garet';" class="fw-normal fs-6 d-inline d-md-block">Founder</span>
                    </p>
                </div>

            </div>

            <div class="col-lg-5 d-flex flex-wrap justify-content-center mb-5" style="margin-top: 50px;">


                <!-- Member 4 -->
                <div class="d-flex flex-column text-center mx-3 mb-4">
                    <img src="/img/Ruben Ray.jpg" class="img-thumbnail avatar rounded-circle" alt="Ruben Ray">
                    <p style="font-family: 'Garet-Bold';" class="fs-5 text-dark fw-bolder mt-2">Ruben Ray
                        <span style="font-family: 'Garet';" class="fw-normal fs-6 d-inline d-md-block">Graphic
                            Designer</span>
                    </p>
                </div>

                <!-- Member 5 -->
                <div class="d-flex flex-column text-center mx-3 mb-4">
                    <img src="/img/Nadya Bunga.jpg" class="img-thumbnail avatar rounded-circle" alt="Nadya Bunga">
                    <p style="font-family: 'Garet-Bold';" class="fs-5 text-dark fw-bolder mt-2">Nadya Bunga
                        <span style="font-family: 'Garet';" class="fw-normal fs-6 d-inline d-md-block">Video Editor</span>
                    </p>
                </div>

                <!-- Member 6 -->
                <div class="d-flex flex-column text-center mx-3 mb-4">
                    <img src="/img/Dwi Nauli.jpg" class="img-thumbnail avatar rounded-circle" alt="Dwi Nauli">
                    <p style="font-family: 'Garet-Bold';" class="fs-5 text-dark fw-bolder mt-2">Dwi Nauli
                        <span style="font-family: 'Garet';" class="fw-normal fs-6 d-inline d-md-block">Social Media
                            Specialist</span>
                    </p>
                </div>
            </div>

            <div class="col-lg-5 mt-4">
                <h1 class="text-start" style="font-size: 32px; font-family: 'Garet';">Our team consists of skilled experts
                    with extensive experience in marketing and communication.</h1>
                <h1 class="text-start mt-4" style="font-size: 32px; font-family: 'Garet';">We understand the best strategies
                    to tackle challenges and deliver impactful results for your brand.</h1>
            </div>
        </div>
    </div>


    <!-- Abvout Start -->
    <div class="container-fluid about " style="margin-bottom: 70px !important; margin-top: 60px;">
        <div class="container">
            <div class="row row g-5 align-items-center">
                <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h1 class="text-primary mt-3 mb-4">OUR JOURNEY</h1>
                        <!-- <h1 class="display-5 mb-4">Meet our company unless miss the opportunity</h1>
                                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum velit temporibus repudiandae ipsa, eaque perspiciatis cumque incidunt tenetur sequi reiciendis.
                                </p> -->
                        <div class="row ">
                            <div class="col-md-4 col-lg-4 col-xl-4">
                                <div class="d-flex">
                                    <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>The SPARK </h4>
                                        <p> Bakoel Ide began with a vision to transform bold ideas into powerful digital
                                            strategies that help brands grow.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-xl-4">
                                <div class="d-flex">
                                    <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>The BLUEPRINT</h4>
                                        <p>We create tailored digital marketing strategies that drive growth and engage
                                            audiences.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-3 col-xl-4">
                                <div class="d-flex">
                                    <div><i class="bi bi-badge-vo fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>The VOW</h4>
                                        <p>We’re committed to delivering innovative digital experiences that connect brands
                                            with their audience.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                                        <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover Now</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex">
                                            <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                            <div>
                                                <h4>Call Us</h4>
                                                <p class="mb-0 fs-5" style="letter-spacing: 1px;">+01234567890</p>
                                            </div>
                                        </div>
                                    </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 wow fadeInRight mb-5" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative mt-3 overflow-hidden">
                        <img src="img/group-asia-young-creative-people-smart-casual-wear-discussing-business-celebrate-giving-five-after-dealing-feeling-happy-signing-contract-agreement-office-coworker-teamwork-concept.jpg"
                            class="img-fluid rounded w-100 " alt="">


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid offer-section  mt-5"
        style=" margin-top: 250px !important; text-align: start; background-position: left center; width: 100%; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../img/carousel-1.jpg);  background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;">
        <div class="container pb-5">

            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="nav nav-pills bg-light rounded p-5">
                        <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
                            <h5 class="mb-0">Website Design</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
                            <h5 class="mb-0">Design</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
                            <h5 class="mb-0">Digital Services</h5>
                        </a>
                        <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseFour">
                            <h5 class="mb-0">Branding Service</h5>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="tab-content">
                        <div id="collapseOne" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <!-- <img src="img/offer-1.jpg" class="img-fluid w-100 rounded" alt=""> -->
                                </div>
                                <div class="col-md-12">
                                    <h1 class="display-8 mb-4 text-light" id="bkl">Web Design, Web Development, Web
                                        Maintenance, Web Marketing</h1>
                                    <!-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                                    </p> -->

                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <!-- <img src="img/offer-2.jpg" class="img-fluid w-100 rounded" alt=""> -->
                                </div>
                                <div class="col-md-12">
                                    <h1 class="display-8 mb-4 text-light" id="bkl2">Web Design, Grapic Design, Visual
                                        Brand, Guidelines</h1>

                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <!-- <img src="img/offer-3.jpg" class="img-fluid w-100 rounded" alt=""> -->
                                </div>
                                <!-- <div class="col-md-5"> -->
                                <div class="col-md-12">
                                    <h1 class="display-8 mb-4 text-light" id="bkl3">Search Engine Ads, Sosial Media
                                        Ads, SEO, Sosial Media,Copywriting</h1>
                                    <!-- <p class="mb-4">
                                                    </p> -->

                                </div>
                            </div>
                        </div>
                        <div id="collapseFour" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <!-- <img src="img/offer-4.jpg" class="img-fluid w-100 rounded" alt=""> -->
                                </div>
                                <div class="col-md-12">
                                    <h1 class="display-8 mb-4 text-light" id="bkl4">Brand Management, Communication
                                        Strategy, Media Planning, Implementation, Branding, Business Strategy</h1>
                                    <!-- <p class="mb-4">
                                                    </p> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid feature pb-5" style="margin-top: 100px !important">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-8 mb-4">Our Idea</h1>

                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa-solid fa-circle-info fa-4x text-primary"></i>
                        </div>
                        <h4>Information</h4>
                        <p class="mb-4">we have an intelligent research platform that can provide real-time information
                            and data to against the competition
                        </p>
                        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa-solid fa-hand-sparkles fa-4x text-primary"></i>
                        </div>
                        <h4>Result</h4>
                        <p class="mb-4">after we do all that things, we can see the result and do the first step for the
                            next step
                        </p>
                        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa-regular fa-lightbulb fa-4x text-primary"></i>
                        </div>
                        <h4>Idea</h4>
                        <p class="mb-4">according to information and insight that we get, we can create the idea for our
                            plan
                        </p>
                        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa-solid fa-code-branch fa-4x text-primary"></i>
                        </div>
                        <h4>Plan</h4>
                        <p class="mb-4">how we are going to execute the idea and get ready for the creative and adaptive
                            process
                        </p>
                        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa-solid fa-briefcase fa-4x text-primary"></i>
                        </div>
                        <h4>Execution</h4>
                        <p class="mb-4">Follow the plan, but change steps if necessary. don't get discouraged if things
                            aren't going according to plan
                        </p>
                        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa-solid fa-brain fa-4x text-primary"></i>
                        </div>
                        <h4>Insight</h4>
                        <p class="mb-4">we turned information into insight which can assist to make strategy
                        </p>
                        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('footer')
<h6>footer</h6>
@endsection
