@extends('frontend.layouts.app')
@section('title', 'CMS')
@section('content')
<!-- start wpo-page-title -->
<section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>CMS</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('service') }}">Service</a></li>
                        <li>CMS</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->


<!-- wpo-service-single-area start -->
<div class="wpo-service-single-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="wpo-service-single-wrap">
                    <div class="wpo-service-single-item">
                        <div class="wpo-service-single-main-img">
                            <img src="assets/images/service-single/1.jpg" alt="">
                        </div>
                        <div class="wpo-service-single-title">
                            <h3>Super App for New Devices made by touches</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Metus dis posuere amet
                            tincidunt commodo, velit. Ipsum, hac nibh fermentum nisi, platea condimentum cursus
                            velit dui. Massa volutpat odio facilisis purus sit elementum. Non, sed velit dictum
                            quam. Id risus pharetra est, at rhoncus, nec ullamcorper tincidunt. Id aliquet duis
                            sollicitudin diam, elit sit. Et nisi in libero facilisis sed est. Elit curabitur
                            amet risus bibendum. Posuere et eget orci, tempor enim.</p>
                        <p>Hac nibh fermentum nisi, platea condimentum cursus velit dui. Massa volutpat odio
                            facilisis purus sit elementum. Non, sed velit dictum quam. Id risus pharetra est, at
                            rhoncus, nec ullamcorper tincidunt. Id aliquet duis sollicitudin diam, elit sit.</p>
                        <div class="row mt-4">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="wpo-p-details-img">
                                    <img src="assets/images/service-single/2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="wpo-p-details-img">
                                    <img src="assets/images/service-single/3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpo-service-single-item list-widget">
                        <div class="wpo-service-single-title">
                            <h3>Our Capabilities</h3>
                        </div>
                        <p>Synergistically pursue accurate initiatives without economically sound imperatives.
                            Professionally architect unique process improvements via optimal.</p>
                        <ul>
                            <li>Non saed velit dictum quam risus pharetra esta.</li>
                            <li>Id risus pharetra est, at rhoncus, nec ullamcorper tincidunt.</li>
                            <li>Hac nibh fermentum nisi, platea condimentum cursus.</li>
                            <li>Massa volutpat odio facilisis purus sit elementum.</li>
                            <li>Elit curabitur amet risus bibendum.</li>
                        </ul>
                    </div>
                    <div class="wpo-service-single-item">
                        <div class="wpo-service-single-title">
                            <h3>Our approach</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat suspendisse aenean
                            tellus augue morbi risus. Sit morbi vitae morbi sed urna sed purus. Orci facilisi
                            eros sed pellentesque. Risus id sed tortor sed scelerisque. Vestibulum elit
                            elementum, magna id viverra non, velit. Pretium, eros, porttitor fusce auctor vitae
                            id. Phasellus scelerisque nibh eleifend vel enim mauris purus. Rutrum vel sem
                            adipiscing nisi vulputate molestie scelerisque molestie ultrices. Eu, fusce
                            vulputate diam interdum morbi ac a.</p>
                    </div>
                    <div class="wpo-service-single-item list-widget">
                        <div class="wpo-service-single-title">
                            <h3>Our Work Process</h3>
                        </div>
                        <ul>
                            <li>Non saed velit dictum quam risus pharetra esta.</li>
                            <li>Id risus pharetra est, at rhoncus, nec ullamcorper tincidunt.</li>
                            <li>Hac nibh fermentum nisi, platea condimentum cursus.</li>
                            <li>Massa volutpat odio facilisis purus sit elementum.</li>
                        </ul>
                    </div>
                    <div class="wpo-service-single-item">
                        <div class="wpo-service-single-title">
                            <h3>Related Service</h3>
                        </div>
                        <div class="wpo-service-area">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <i class="fi flaticon-telecommunication"></i>
                                        <h2>Advanced analytics</h2>
                                        <p>Lacus, etiam sed est eu tempus need Temer diam congue.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <i class="fi flaticon-network"></i>
                                        <h2>Automated Reports</h2>
                                        <p>Lacus, etiam sed est eu tempus need Temer diam congue.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <i class="fi flaticon-technical-support-1"></i>
                                        <h2>User Journey Flow</h2>
                                        <p>Lacus, etiam sed est eu tempus need Temer diam congue.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="blog-sidebar">
                <div class="wpo-service-single-item">
                        
                    </div>
                    <div class="widget category-widget">
                    <h3>Have project in mind? Let's discuss</h3>
                        @include('frontend.common.enquiry')
                    </div>
                    <div class="widget category-widget">
                        <h3>Other Service</h3>
                        <ul>
                            <li><a href="{{route('web.design')}}">Website Design</a></li>
                            <li><a href="{{route('web.development')}}">Website Development</a></li>
                            <li><a href="{{route('ecommerce')}}">E-Commerce</a></li>
                            <li><a href="{{route('uiUx')}}">UI/UX</a></li>
                            <li><a href="{{route('wordpress.development')}}">Wordpress Development</a></li>
                            <li><a href="{{route('website.redesign')}}">Website Redesign</a></li>
                            <li><a href="{{route('website.maintenance')}}">Website Maintenance</a></li>
                        </ul>
                    </div>
                        <!-- <div class="wpo-contact-widget widget">
                            <div class="wpo-contact-widget-inner">
                                <h2><a href="{{route('contact')}}">Contact For Advertisment 270 x 310</a></h2>
                            </div>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- wpo-service-single-area end -->
@endsection
