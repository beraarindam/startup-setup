@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')
<!-- start wpo-page-title -->
<section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>About Us</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>About Us</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->


<!-- start technut-about-section -->
<section class="technut-about-section technut-about-section-s2 section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="technut-about-left">
                    <div class="shape">
                        <img src="assets/images/about-shape.svg" alt="">
                        <div class="images">
                            <img src="assets/images/about.png" alt="">
                            <div class="info">
                                <h3><span class="odometer" data-count="28">00</span></h3>
                                <p>Years of experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="technut-about-right">
                    <div class="wpo-section-title">
                        <span><strong>//</strong> ABOUT US <strong>//</strong></span>
                        <h2>We are providing best digital IT Solutions.</h2>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic
                            typesetting.</p>
                    </div>
                    <div class="technut-about-text">
                        <p>Remaining essentially unchanged.
                            It was popularised in the 1960s with the release
                            of Letraset sheets containing
                            Lorem Ipsum passages, and more recently with </p>
                        <div class="about-single-itam">
                            <div class="icon">
                                <img src="assets/images/about-icon.svg" alt="">
                            </div>
                            <div class="text">
                                <h3>Expert Member</h3>
                                <p>Lorem Ipsum has been the industry's standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end technut-about-section -->

<!-- start technut-service-section -->
<section class="technut-service-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="wpo-section-title">
                    <span><strong>//</strong> OUR SERVICES <strong>//</strong></span>
                    <h2>Perfect IT Solutions</h2>
                </div>
            </div>
        </div>
        <div class="technut-service-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="technut-service-card">
                        <div class="service-card-shape">
                            <img src="assets/images/service/service-shape.svg" alt="">
                        </div>
                        <div class="image">
                            <img src="assets/images/service/Icon-1.svg" alt="">
                        </div>
                        <div class="text">
                            <h2>Website Design</h2>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the printer.
                            </p>
                        </div>
                        <a href="{{route('web.design')}}" class="theme-btn-s3">Details</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="technut-service-card">
                        <div class="service-card-shape">
                            <img src="assets/images/service/service-shape.svg" alt="">
                        </div>
                        <div class="image">
                            <img src="assets/images/service/Icon-2.svg" alt="">
                        </div>
                        <div class="text">
                            <h2>Web Development</h2>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the printer.
                            </p>
                        </div>
                        <a href="{{route('web.development')}}" class="theme-btn-s3">Details</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="technut-service-card">
                        <div class="service-card-shape">
                            <img src="assets/images/service/service-shape.svg" alt="">
                        </div>
                        <div class="image">
                            <img src="assets/images/service/Icon-3.svg" alt="">
                        </div>
                        <div class="text">
                            <h2>E-Commerce</h2>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the printer.
                            </p>
                        </div>
                        <a href="{{route('ecommerce')}}" class="theme-btn-s3">Details</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="technut-service-card">
                        <div class="service-card-shape">
                            <img src="assets/images/service/service-shape.svg" alt="">
                        </div>
                        <div class="image">
                            <img src="assets/images/service/Icon-4.svg" alt="">
                        </div>
                        <div class="text">
                            <h2>CMS</h2>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the printer.
                            </p>
                        </div>
                        <a href="{{route('cms')}}" class="theme-btn-s3">Details</a>
                    </div>
                </div>
            </div>
            <div class="service-view-more">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <a href="{{route('service')}}" class="theme-btn-s4">View More<i
                                class="fi flaticon-right-arrow-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="technut-service-shape-1">
    </div>
    <div class="technut-service-shape-2">
    </div>
    <div class="technut-service-shape-3">
        <svg width="101" height="84" viewBox="0 0 101 84" fill="none">
            <path d="M6.21538 35L65.2615 0L101 79.3333L0 84L6.21538 35Z" />
        </svg>
    </div>
</section>
<!-- end technut-service-section -->

<!-- start technut-cta-section -->
<section class="technut-cta-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-12">
                <div class="technut-cta-text">
                    <h1>We Are Best IT Service Provider Company In The World.</h1>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="technut-cta-right">
                    <a href="{{route('contact')}}" class="theme-btn-s4">Contact Us<i class="fi flaticon-right-arrow-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end technut-cta-section -->

<!-- start technut-team-section -->
<section class="technut-team-section-s2 section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-12">
                <div class="team-left-contant">
                    <div class="wpo-section-title">
                        <span><strong>//</strong> OUR TEAME <strong>//</strong></span>
                        <h2>Awesome team members.</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-12">
                <div class="team-right-contant">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="team-meamber">
                                <img src="assets/images/team/1.jpg" alt="">
                                <div class="text">
                                    <h2><a href="team-single.html">Antasa Hamid</a></h2>
                                    <span>WEB DEVELOPER</span>
                                    <a href="#"><i class="fi flaticon-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="team-meamber">
                                <img src="assets/images/team/2.jpg" alt="">
                                <div class="text">
                                    <h2><a href="team-single.html">Antasa Hamid</a></h2>
                                    <span>WEB DEVELOPER</span>
                                    <a href="#"><i class="fi flaticon-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="team-meamber">
                                <img src="assets/images/team/3.jpg" alt="">
                                <div class="text">
                                    <h2><a href="team-single.html">Antasa Hamid</a></h2>
                                    <span>WEB DEVELOPER</span>
                                    <a href="#"><i class="fi flaticon-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="team-meamber">
                                <img src="assets/images/team/4.jpg" alt="">
                                <div class="text">
                                    <h2><a href="team-single.html">Antasa Hamid</a></h2>
                                    <span>WEB DEVELOPER</span>
                                    <a href="#"><i class="fi flaticon-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end technut-team-section -->
@endsection
