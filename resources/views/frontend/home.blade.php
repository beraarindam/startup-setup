@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')
<!-- start of hero -->
<section class="wpo-static-hero">
    <div class="hero-bg">
        <svg width="1920" height="938" viewBox="0 0 1920 938" fill="none">
            <mask id="mask0_1_395" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="1920"
                height="938">
                <rect width="1920" height="938" fill="#FFF5ED" />
            </mask>
            <g mask="url(#mask0_1_395)">
                <path d="M0 0H1920L1464 808L0 938V0Z" fill="#8C7BFF" />
                <path opacity="0.05" d="M0 0H1920L1189 727L0 938V0Z" fill="white" />
                <path d="M0 0H1920L921 642L0 938V0Z" fill="#8C7BFF" />
                <path opacity="0.05" d="M0 0H1920L238 254L0 938V0Z" fill="white" />
                <path d="M0 0H1920L165 63L0 938V0Z" fill="#8C7BFF" />
                <path opacity="0.06" d="M1920 0H0L492 698L1920 938V0Z" fill="#8C7BFF" />
                <path opacity="0.06" d="M1920 0H0L1120 882L1920 938V0Z" fill="#8C7BFF" />
                <path opacity="0.06" d="M1920 0H0L748 921L1920 938V0Z" fill="#8C7BFF" />
                <circle cx="1656" cy="806" r="44" fill="#FED201" />
                <circle cx="1702" cy="806" r="44" fill="#40C9FF" />
                <circle cx="1748" cy="806" r="44" fill="#7665FF" />
            </g>
        </svg>
    </div>
    <div class="hero-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="wpo-hero-content">
                        <div class="slide-title">
                            <h2>Digital IT
                                Solutions.</h2>
                        </div>
                        <div class="slide-text">
                            <p>Lorem Ipsum has been the industry standard dummy text ever since crambled it to
                                make a type specimen book.</p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="btns">
                            <a href="{{route('service')}}" class="theme-btn-s4">All Services<i
                                    class="fi flaticon-right-arrow-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="consult-pic wow fadeInRightSlow" data-wow-duration="2000ms">
        <img src="assets/images/slider/1.png" alt="">
    </div>
</section>
<!-- end of hero slider -->

<!-- start wpo-fun-fact-section -->
<section class="wpo-fun-fact-section section-padding">
    <div class="container">
        <div class="wpo-fun-fact-wrapper">
            <div class="fun-fact-shape">
                <img src="assets/images/fun-fact-shape.svg" alt="">
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="fun-fact-card">
                        <div class="card-shape">
                            <svg width="227" height="250" viewBox="0 0 227 250" fill="none">
                                <path
                                    d="M227 125C227 194.036 194.036 250 125 250C55.9644 250 0 194.036 0 125C0 55.9644 55.9644 0 125 0C194.036 0 227 55.9644 227 125Z"
                                    fill="#40C9FF" />
                            </svg>
                        </div>
                        <div class="info">
                            <h3><span class="odometer" data-count="8902">00</span></h3>
                            <p>Finished Projects</p>
                            <div class="shape">
                                <svg width="72" height="14" viewBox="0 0 72 14" fill="none">
                                    <path
                                        d="M0 4.03869C0 6.07421 1.63168 7.75801 3.78653 8.03696C3.92484 8.21686 4.14935 8.53018 4.51217 9.08403C5.71889 10.9215 7.73744 14 12.1774 14C16.6174 14 18.636 10.9235 19.8427 9.08403C19.8748 9.03754 19.9109 8.98094 19.951 8.9203C19.9911 8.98094 20.0271 9.03754 20.0592 9.08403C21.2659 10.9215 23.2845 14 27.7245 14C32.1645 14 34.183 10.9215 35.3898 9.08403C35.4218 9.03754 35.4579 8.98094 35.496 8.9203C35.5361 8.98094 35.5722 9.0335 35.6022 9.08201C36.811 10.9235 38.8295 14 43.2695 14C47.7095 14 49.7281 10.9235 50.9348 9.08403C50.9669 9.03754 51.0029 8.98094 51.043 8.9203C51.0831 8.98094 51.1192 9.03754 51.1513 9.08403C52.358 10.9235 54.3765 14 58.8166 14C63.2566 14 65.2771 10.9235 66.4838 9.08403L65.9266 8.7121L66.4838 9.08403C66.8446 8.53422 67.0691 8.21889 67.2075 8.03898C69.3683 7.76408 71.002 6.08028 71.002 4.03869C71.002 1.81115 69.0235 0 66.5921 0C62.1521 0 60.1335 3.07652 58.9268 4.91597C58.8947 4.96448 58.8586 5.01906 58.8186 5.0797C58.7785 5.01906 58.7424 4.96246 58.7103 4.91597C57.5016 3.07652 55.481 0 51.041 0C46.601 0 44.5825 3.07652 43.3758 4.91597C43.3437 4.96246 43.3076 5.01906 43.2675 5.0797C43.2274 5.01906 43.1913 4.96448 43.1593 4.91597C41.9545 3.07652 39.936 0 35.496 0C31.058 0 29.0374 3.07652 27.8307 4.91395C27.7986 4.96246 27.7626 5.01704 27.7225 5.07768C27.6824 5.01704 27.6463 4.96246 27.6162 4.91597C26.4095 3.07652 24.389 0 19.951 0C15.511 0 13.4904 3.07652 12.2837 4.91597C12.2516 4.96448 12.2155 5.01906 12.1754 5.0797C12.1353 5.01906 12.0993 4.96246 12.0672 4.91597C10.8625 3.07652 8.84393 0 4.40392 0C1.97645 0 0 1.81115 0 4.03869ZM2.67202 4.03869C2.67202 3.30898 3.46581 2.69448 4.40392 2.69448C7.40669 2.69448 8.81386 4.83714 9.84018 6.40167C10.4255 7.29512 10.9126 8.00462 11.4097 8.35634C11.8667 8.67976 12.4821 8.67976 12.9412 8.35634C13.4383 8.00462 13.9274 7.29512 14.5127 6.40167C15.539 4.83714 16.9462 2.69448 19.951 2.69448C22.9557 2.69448 24.3609 4.83714 25.3872 6.40167C25.9725 7.29512 26.4596 8.00462 26.9567 8.35432C27.4138 8.67774 28.0292 8.67774 28.4882 8.35432C28.9853 8.00462 29.4724 7.2931 30.0577 6.39965C31.084 4.83511 32.4912 2.69246 35.494 2.69246C38.4968 2.69246 39.9039 4.83511 40.9322 6.39965C41.5176 7.29108 42.0047 8.0026 42.5018 8.35432C42.9608 8.67774 43.5762 8.67774 44.0332 8.35432C44.5304 8.0026 45.0174 7.2931 45.6048 6.39965C46.6311 4.83511 48.0383 2.69246 51.041 2.69246C54.0458 2.69246 55.451 4.83511 56.4793 6.39965C57.0666 7.2931 57.5537 8.00462 58.0508 8.35432C58.5099 8.67572 59.1252 8.67572 59.5803 8.35432C60.0774 8.00462 60.5665 7.2931 61.1518 6.39965C62.1781 4.83511 63.5853 2.69246 66.5901 2.69246C67.5322 2.69246 68.328 3.30898 68.328 4.03667C68.328 4.7583 67.5402 5.37482 66.6061 5.38088C66.3615 5.38291 66.121 5.45163 65.9125 5.58302C65.4254 5.88825 64.9885 6.47444 64.2528 7.5963C63.2265 9.16084 61.8193 11.3035 58.8145 11.3035C55.8118 11.3035 54.4046 9.16084 53.3763 7.5963C52.789 6.70286 52.3019 5.99134 51.8047 5.64164C51.3537 5.32429 50.7263 5.32429 50.2753 5.64164L50.2733 5.64366C49.7762 5.99336 49.2891 6.70488 48.7038 7.59833C47.6774 9.16286 46.2703 11.3055 43.2675 11.3055C40.2647 11.3055 38.8576 9.16286 37.8293 7.59833C37.2439 6.70488 36.7568 5.99538 36.2597 5.64366C35.8007 5.32024 35.1853 5.32024 34.7263 5.64366C34.2311 5.99336 33.744 6.70286 33.1567 7.5963C32.1304 9.16084 30.7232 11.3055 27.7205 11.3055C24.7157 11.3055 23.3085 9.16084 22.2822 7.59428C21.6969 6.70286 21.2098 5.99336 20.7147 5.64366C20.4862 5.48195 20.2176 5.4011 19.949 5.4011C19.6804 5.4011 19.4117 5.48195 19.1812 5.64366C18.6841 5.99336 18.197 6.70488 17.6117 7.5963C16.5854 9.16084 15.1782 11.3035 12.1734 11.3035C9.17067 11.3035 7.7635 9.15882 6.73518 7.59428C6.27414 6.89287 5.8572 6.27635 5.45429 5.8842C5.20373 5.57089 4.81886 5.38088 4.41395 5.38088H4.39591C3.45779 5.3728 2.67202 4.7583 2.67202 4.03869Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="fun-fact-card">
                        <div class="card-shape">
                            <svg width="250" height="224" viewBox="0 0 250 224" fill="none">
                                <path
                                    d="M250 99C250 168.036 194.036 224 125 224C55.9644 224 0 168.036 0 99C0 29.9644 55.9644 0 125 0C194.036 0 250 29.9644 250 99Z"
                                    fill="#FED201" />
                            </svg>
                        </div>
                        <div class="info">
                            <h3><span class="odometer" data-count="2793">00</span></h3>
                            <p>Happy Clients</p>
                            <div class="shape">
                                <svg width="72" height="14" viewBox="0 0 72 14" fill="none">
                                    <path
                                        d="M0 4.03869C0 6.07421 1.63168 7.75801 3.78653 8.03696C3.92484 8.21686 4.14935 8.53018 4.51217 9.08403C5.71889 10.9215 7.73744 14 12.1774 14C16.6174 14 18.636 10.9235 19.8427 9.08403C19.8748 9.03754 19.9109 8.98094 19.951 8.9203C19.9911 8.98094 20.0271 9.03754 20.0592 9.08403C21.2659 10.9215 23.2845 14 27.7245 14C32.1645 14 34.183 10.9215 35.3898 9.08403C35.4218 9.03754 35.4579 8.98094 35.496 8.9203C35.5361 8.98094 35.5722 9.0335 35.6022 9.08201C36.811 10.9235 38.8295 14 43.2695 14C47.7095 14 49.7281 10.9235 50.9348 9.08403C50.9669 9.03754 51.0029 8.98094 51.043 8.9203C51.0831 8.98094 51.1192 9.03754 51.1513 9.08403C52.358 10.9235 54.3765 14 58.8166 14C63.2566 14 65.2771 10.9235 66.4838 9.08403L65.9266 8.7121L66.4838 9.08403C66.8446 8.53422 67.0691 8.21889 67.2075 8.03898C69.3683 7.76408 71.002 6.08028 71.002 4.03869C71.002 1.81115 69.0235 0 66.5921 0C62.1521 0 60.1335 3.07652 58.9268 4.91597C58.8947 4.96448 58.8586 5.01906 58.8186 5.0797C58.7785 5.01906 58.7424 4.96246 58.7103 4.91597C57.5016 3.07652 55.481 0 51.041 0C46.601 0 44.5825 3.07652 43.3758 4.91597C43.3437 4.96246 43.3076 5.01906 43.2675 5.0797C43.2274 5.01906 43.1913 4.96448 43.1593 4.91597C41.9545 3.07652 39.936 0 35.496 0C31.058 0 29.0374 3.07652 27.8307 4.91395C27.7986 4.96246 27.7626 5.01704 27.7225 5.07768C27.6824 5.01704 27.6463 4.96246 27.6162 4.91597C26.4095 3.07652 24.389 0 19.951 0C15.511 0 13.4904 3.07652 12.2837 4.91597C12.2516 4.96448 12.2155 5.01906 12.1754 5.0797C12.1353 5.01906 12.0993 4.96246 12.0672 4.91597C10.8625 3.07652 8.84393 0 4.40392 0C1.97645 0 0 1.81115 0 4.03869ZM2.67202 4.03869C2.67202 3.30898 3.46581 2.69448 4.40392 2.69448C7.40669 2.69448 8.81386 4.83714 9.84018 6.40167C10.4255 7.29512 10.9126 8.00462 11.4097 8.35634C11.8667 8.67976 12.4821 8.67976 12.9412 8.35634C13.4383 8.00462 13.9274 7.29512 14.5127 6.40167C15.539 4.83714 16.9462 2.69448 19.951 2.69448C22.9557 2.69448 24.3609 4.83714 25.3872 6.40167C25.9725 7.29512 26.4596 8.00462 26.9567 8.35432C27.4138 8.67774 28.0292 8.67774 28.4882 8.35432C28.9853 8.00462 29.4724 7.2931 30.0577 6.39965C31.084 4.83511 32.4912 2.69246 35.494 2.69246C38.4968 2.69246 39.9039 4.83511 40.9322 6.39965C41.5176 7.29108 42.0047 8.0026 42.5018 8.35432C42.9608 8.67774 43.5762 8.67774 44.0332 8.35432C44.5304 8.0026 45.0174 7.2931 45.6048 6.39965C46.6311 4.83511 48.0383 2.69246 51.041 2.69246C54.0458 2.69246 55.451 4.83511 56.4793 6.39965C57.0666 7.2931 57.5537 8.00462 58.0508 8.35432C58.5099 8.67572 59.1252 8.67572 59.5803 8.35432C60.0774 8.00462 60.5665 7.2931 61.1518 6.39965C62.1781 4.83511 63.5853 2.69246 66.5901 2.69246C67.5322 2.69246 68.328 3.30898 68.328 4.03667C68.328 4.7583 67.5402 5.37482 66.6061 5.38088C66.3615 5.38291 66.121 5.45163 65.9125 5.58302C65.4254 5.88825 64.9885 6.47444 64.2528 7.5963C63.2265 9.16084 61.8193 11.3035 58.8145 11.3035C55.8118 11.3035 54.4046 9.16084 53.3763 7.5963C52.789 6.70286 52.3019 5.99134 51.8047 5.64164C51.3537 5.32429 50.7263 5.32429 50.2753 5.64164L50.2733 5.64366C49.7762 5.99336 49.2891 6.70488 48.7038 7.59833C47.6774 9.16286 46.2703 11.3055 43.2675 11.3055C40.2647 11.3055 38.8576 9.16286 37.8293 7.59833C37.2439 6.70488 36.7568 5.99538 36.2597 5.64366C35.8007 5.32024 35.1853 5.32024 34.7263 5.64366C34.2311 5.99336 33.744 6.70286 33.1567 7.5963C32.1304 9.16084 30.7232 11.3055 27.7205 11.3055C24.7157 11.3055 23.3085 9.16084 22.2822 7.59428C21.6969 6.70286 21.2098 5.99336 20.7147 5.64366C20.4862 5.48195 20.2176 5.4011 19.949 5.4011C19.6804 5.4011 19.4117 5.48195 19.1812 5.64366C18.6841 5.99336 18.197 6.70488 17.6117 7.5963C16.5854 9.16084 15.1782 11.3035 12.1734 11.3035C9.17067 11.3035 7.7635 9.15882 6.73518 7.59428C6.27414 6.89287 5.8572 6.27635 5.45429 5.8842C5.20373 5.57089 4.81886 5.38088 4.41395 5.38088H4.39591C3.45779 5.3728 2.67202 4.7583 2.67202 4.03869Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="fun-fact-card">
                        <div class="card-shape">
                            <svg width="250" height="225" viewBox="0 0 250 225" fill="none">
                                <path
                                    d="M250 125C250 194.036 194.036 225 125 225C55.9644 225 0 194.036 0 125C0 55.9644 55.9644 0 125 0C194.036 0 250 55.9644 250 125Z"
                                    fill="#7665FF" />
                            </svg>
                        </div>
                        <div class="info">
                            <h3><span class="odometer" data-count="682">00</span>+</h3>
                            <p>Skilled Experts</p>
                            <div class="shape">
                                <svg width="72" height="14" viewBox="0 0 72 14" fill="none">
                                    <path
                                        d="M0 4.03869C0 6.07421 1.63168 7.75801 3.78653 8.03696C3.92484 8.21686 4.14935 8.53018 4.51217 9.08403C5.71889 10.9215 7.73744 14 12.1774 14C16.6174 14 18.636 10.9235 19.8427 9.08403C19.8748 9.03754 19.9109 8.98094 19.951 8.9203C19.9911 8.98094 20.0271 9.03754 20.0592 9.08403C21.2659 10.9215 23.2845 14 27.7245 14C32.1645 14 34.183 10.9215 35.3898 9.08403C35.4218 9.03754 35.4579 8.98094 35.496 8.9203C35.5361 8.98094 35.5722 9.0335 35.6022 9.08201C36.811 10.9235 38.8295 14 43.2695 14C47.7095 14 49.7281 10.9235 50.9348 9.08403C50.9669 9.03754 51.0029 8.98094 51.043 8.9203C51.0831 8.98094 51.1192 9.03754 51.1513 9.08403C52.358 10.9235 54.3765 14 58.8166 14C63.2566 14 65.2771 10.9235 66.4838 9.08403L65.9266 8.7121L66.4838 9.08403C66.8446 8.53422 67.0691 8.21889 67.2075 8.03898C69.3683 7.76408 71.002 6.08028 71.002 4.03869C71.002 1.81115 69.0235 0 66.5921 0C62.1521 0 60.1335 3.07652 58.9268 4.91597C58.8947 4.96448 58.8586 5.01906 58.8186 5.0797C58.7785 5.01906 58.7424 4.96246 58.7103 4.91597C57.5016 3.07652 55.481 0 51.041 0C46.601 0 44.5825 3.07652 43.3758 4.91597C43.3437 4.96246 43.3076 5.01906 43.2675 5.0797C43.2274 5.01906 43.1913 4.96448 43.1593 4.91597C41.9545 3.07652 39.936 0 35.496 0C31.058 0 29.0374 3.07652 27.8307 4.91395C27.7986 4.96246 27.7626 5.01704 27.7225 5.07768C27.6824 5.01704 27.6463 4.96246 27.6162 4.91597C26.4095 3.07652 24.389 0 19.951 0C15.511 0 13.4904 3.07652 12.2837 4.91597C12.2516 4.96448 12.2155 5.01906 12.1754 5.0797C12.1353 5.01906 12.0993 4.96246 12.0672 4.91597C10.8625 3.07652 8.84393 0 4.40392 0C1.97645 0 0 1.81115 0 4.03869ZM2.67202 4.03869C2.67202 3.30898 3.46581 2.69448 4.40392 2.69448C7.40669 2.69448 8.81386 4.83714 9.84018 6.40167C10.4255 7.29512 10.9126 8.00462 11.4097 8.35634C11.8667 8.67976 12.4821 8.67976 12.9412 8.35634C13.4383 8.00462 13.9274 7.29512 14.5127 6.40167C15.539 4.83714 16.9462 2.69448 19.951 2.69448C22.9557 2.69448 24.3609 4.83714 25.3872 6.40167C25.9725 7.29512 26.4596 8.00462 26.9567 8.35432C27.4138 8.67774 28.0292 8.67774 28.4882 8.35432C28.9853 8.00462 29.4724 7.2931 30.0577 6.39965C31.084 4.83511 32.4912 2.69246 35.494 2.69246C38.4968 2.69246 39.9039 4.83511 40.9322 6.39965C41.5176 7.29108 42.0047 8.0026 42.5018 8.35432C42.9608 8.67774 43.5762 8.67774 44.0332 8.35432C44.5304 8.0026 45.0174 7.2931 45.6048 6.39965C46.6311 4.83511 48.0383 2.69246 51.041 2.69246C54.0458 2.69246 55.451 4.83511 56.4793 6.39965C57.0666 7.2931 57.5537 8.00462 58.0508 8.35432C58.5099 8.67572 59.1252 8.67572 59.5803 8.35432C60.0774 8.00462 60.5665 7.2931 61.1518 6.39965C62.1781 4.83511 63.5853 2.69246 66.5901 2.69246C67.5322 2.69246 68.328 3.30898 68.328 4.03667C68.328 4.7583 67.5402 5.37482 66.6061 5.38088C66.3615 5.38291 66.121 5.45163 65.9125 5.58302C65.4254 5.88825 64.9885 6.47444 64.2528 7.5963C63.2265 9.16084 61.8193 11.3035 58.8145 11.3035C55.8118 11.3035 54.4046 9.16084 53.3763 7.5963C52.789 6.70286 52.3019 5.99134 51.8047 5.64164C51.3537 5.32429 50.7263 5.32429 50.2753 5.64164L50.2733 5.64366C49.7762 5.99336 49.2891 6.70488 48.7038 7.59833C47.6774 9.16286 46.2703 11.3055 43.2675 11.3055C40.2647 11.3055 38.8576 9.16286 37.8293 7.59833C37.2439 6.70488 36.7568 5.99538 36.2597 5.64366C35.8007 5.32024 35.1853 5.32024 34.7263 5.64366C34.2311 5.99336 33.744 6.70286 33.1567 7.5963C32.1304 9.16084 30.7232 11.3055 27.7205 11.3055C24.7157 11.3055 23.3085 9.16084 22.2822 7.59428C21.6969 6.70286 21.2098 5.99336 20.7147 5.64366C20.4862 5.48195 20.2176 5.4011 19.949 5.4011C19.6804 5.4011 19.4117 5.48195 19.1812 5.64366C18.6841 5.99336 18.197 6.70488 17.6117 7.5963C16.5854 9.16084 15.1782 11.3035 12.1734 11.3035C9.17067 11.3035 7.7635 9.15882 6.73518 7.59428C6.27414 6.89287 5.8572 6.27635 5.45429 5.8842C5.20373 5.57089 4.81886 5.38088 4.41395 5.38088H4.39591C3.45779 5.3728 2.67202 4.7583 2.67202 4.03869Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="fun-fact-card">
                        <div class="card-shape">
                            <svg width="226" height="250" viewBox="0 0 226 250" fill="none">
                                <path
                                    d="M226 125C226 194.036 170.036 250 101 250C31.9644 250 0 194.036 0 125C0 55.9644 31.9644 0 101 0C170.036 0 226 55.9644 226 125Z"
                                    fill="#FE4040" />
                            </svg>
                        </div>
                        <div class="info">
                            <h3><span class="odometer" data-count="90">00</span>+</h3>
                            <p>Total Services</p>
                            <div class="shape-2">
                                <svg width="72" height="14" viewBox="0 0 72 14" fill="none">
                                    <path
                                        d="M0 4.03869C0 6.07421 1.63168 7.75801 3.78653 8.03696C3.92484 8.21686 4.14935 8.53018 4.51217 9.08403C5.71889 10.9215 7.73744 14 12.1774 14C16.6174 14 18.636 10.9235 19.8427 9.08403C19.8748 9.03754 19.9109 8.98094 19.951 8.9203C19.9911 8.98094 20.0271 9.03754 20.0592 9.08403C21.2659 10.9215 23.2845 14 27.7245 14C32.1645 14 34.183 10.9215 35.3898 9.08403C35.4218 9.03754 35.4579 8.98094 35.496 8.9203C35.5361 8.98094 35.5722 9.0335 35.6022 9.08201C36.811 10.9235 38.8295 14 43.2695 14C47.7095 14 49.7281 10.9235 50.9348 9.08403C50.9669 9.03754 51.0029 8.98094 51.043 8.9203C51.0831 8.98094 51.1192 9.03754 51.1513 9.08403C52.358 10.9235 54.3765 14 58.8166 14C63.2566 14 65.2771 10.9235 66.4838 9.08403L65.9266 8.7121L66.4838 9.08403C66.8446 8.53422 67.0691 8.21889 67.2075 8.03898C69.3683 7.76408 71.002 6.08028 71.002 4.03869C71.002 1.81115 69.0235 0 66.5921 0C62.1521 0 60.1335 3.07652 58.9268 4.91597C58.8947 4.96448 58.8586 5.01906 58.8186 5.0797C58.7785 5.01906 58.7424 4.96246 58.7103 4.91597C57.5016 3.07652 55.481 0 51.041 0C46.601 0 44.5825 3.07652 43.3758 4.91597C43.3437 4.96246 43.3076 5.01906 43.2675 5.0797C43.2274 5.01906 43.1913 4.96448 43.1593 4.91597C41.9545 3.07652 39.936 0 35.496 0C31.058 0 29.0374 3.07652 27.8307 4.91395C27.7986 4.96246 27.7626 5.01704 27.7225 5.07768C27.6824 5.01704 27.6463 4.96246 27.6162 4.91597C26.4095 3.07652 24.389 0 19.951 0C15.511 0 13.4904 3.07652 12.2837 4.91597C12.2516 4.96448 12.2155 5.01906 12.1754 5.0797C12.1353 5.01906 12.0993 4.96246 12.0672 4.91597C10.8625 3.07652 8.84393 0 4.40392 0C1.97645 0 0 1.81115 0 4.03869ZM2.67202 4.03869C2.67202 3.30898 3.46581 2.69448 4.40392 2.69448C7.40669 2.69448 8.81386 4.83714 9.84018 6.40167C10.4255 7.29512 10.9126 8.00462 11.4097 8.35634C11.8667 8.67976 12.4821 8.67976 12.9412 8.35634C13.4383 8.00462 13.9274 7.29512 14.5127 6.40167C15.539 4.83714 16.9462 2.69448 19.951 2.69448C22.9557 2.69448 24.3609 4.83714 25.3872 6.40167C25.9725 7.29512 26.4596 8.00462 26.9567 8.35432C27.4138 8.67774 28.0292 8.67774 28.4882 8.35432C28.9853 8.00462 29.4724 7.2931 30.0577 6.39965C31.084 4.83511 32.4912 2.69246 35.494 2.69246C38.4968 2.69246 39.9039 4.83511 40.9322 6.39965C41.5176 7.29108 42.0047 8.0026 42.5018 8.35432C42.9608 8.67774 43.5762 8.67774 44.0332 8.35432C44.5304 8.0026 45.0174 7.2931 45.6048 6.39965C46.6311 4.83511 48.0383 2.69246 51.041 2.69246C54.0458 2.69246 55.451 4.83511 56.4793 6.39965C57.0666 7.2931 57.5537 8.00462 58.0508 8.35432C58.5099 8.67572 59.1252 8.67572 59.5803 8.35432C60.0774 8.00462 60.5665 7.2931 61.1518 6.39965C62.1781 4.83511 63.5853 2.69246 66.5901 2.69246C67.5322 2.69246 68.328 3.30898 68.328 4.03667C68.328 4.7583 67.5402 5.37482 66.6061 5.38088C66.3615 5.38291 66.121 5.45163 65.9125 5.58302C65.4254 5.88825 64.9885 6.47444 64.2528 7.5963C63.2265 9.16084 61.8193 11.3035 58.8145 11.3035C55.8118 11.3035 54.4046 9.16084 53.3763 7.5963C52.789 6.70286 52.3019 5.99134 51.8047 5.64164C51.3537 5.32429 50.7263 5.32429 50.2753 5.64164L50.2733 5.64366C49.7762 5.99336 49.2891 6.70488 48.7038 7.59833C47.6774 9.16286 46.2703 11.3055 43.2675 11.3055C40.2647 11.3055 38.8576 9.16286 37.8293 7.59833C37.2439 6.70488 36.7568 5.99538 36.2597 5.64366C35.8007 5.32024 35.1853 5.32024 34.7263 5.64366C34.2311 5.99336 33.744 6.70286 33.1567 7.5963C32.1304 9.16084 30.7232 11.3055 27.7205 11.3055C24.7157 11.3055 23.3085 9.16084 22.2822 7.59428C21.6969 6.70286 21.2098 5.99336 20.7147 5.64366C20.4862 5.48195 20.2176 5.4011 19.949 5.4011C19.6804 5.4011 19.4117 5.48195 19.1812 5.64366C18.6841 5.99336 18.197 6.70488 17.6117 7.5963C16.5854 9.16084 15.1782 11.3035 12.1734 11.3035C9.17067 11.3035 7.7635 9.15882 6.73518 7.59428C6.27414 6.89287 5.8572 6.27635 5.45429 5.8842C5.20373 5.57089 4.81886 5.38088 4.41395 5.38088H4.39591C3.45779 5.3728 2.67202 4.7583 2.67202 4.03869Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end wpo-fun-fact-section -->

<!-- start technut-about-section -->
<section class="technut-about-section section-padding">
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
                        <a href="{{route('about.us')}}" class="theme-btn-s4">Our about<i class="fi flaticon-right-arrow-1"></i></a>
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
<section class="technut-team-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="team-left-contant">
                    <div class="wpo-section-title">
                        <span><strong>//</strong> OUR TEAME <strong>//</strong></span>
                        <h2>Awesome team members.</h2>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the when an
                            unknown printer took.</p>
                    </div>
                    <div class="team-left-item">
                        <div class="images">
                            <img src="assets/images/team/1.svg" alt="">
                        </div>
                        <div class="text">
                            <h2>Expert Member</h2>
                            <p>Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                    <div class="team-left-item-s2">
                        <div class="images">
                            <img src="assets/images/team/2.svg" alt="">
                        </div>
                        <div class="text">
                            <h2>Awesome Solution</h2>
                            <p>Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                    <a href="about.html" class="theme-btn-s4">Join Us<i class="fi flaticon-right-arrow-1"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="team-right-contant">
                    <div class="shape">
                        <img src="assets/images/team/bg-boder.svg" alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="team-meamber">
                                <img src="assets/images/team/1.jpg" alt="">
                                <div class="text">
                                    <h2><a href="team-single.html">Antasa Hamid</a></h2>
                                    <span>WEB DEVELOPER</span>
                                    <a href="#"><i class="fi flaticon-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="team-meamber">
                                <img src="assets/images/team/2.jpg" alt="">
                                <div class="text">
                                    <h2><a href="team-single.html">Antasa Hamid</a></h2>
                                    <span>WEB DEVELOPER</span>
                                    <a href="#"><i class="fi flaticon-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="team-meamber">
                                <img src="assets/images/team/3.jpg" alt="">
                                <div class="text">
                                    <h2><a href="team-single.html">Antasa Hamid</a></h2>
                                    <span>WEB DEVELOPER</span>
                                    <a href="#"><i class="fi flaticon-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
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

<!-- start technut-project-section -->
<section class="technut-project-section section-padding">
    <div class="shape-1">
        <svg width="162" height="59" viewBox="0 0 162 59" fill="none">
            <path d="M28.5334 0L162 12.237L0 59L28.5334 0Z" fill="#40C9FF" />
        </svg>
    </div>
    <div class="shape-2"></div>
    <div class="shape-3">
    </div>
    <div class="shape-4">
        <svg width="95" height="35" viewBox="0 0 95 35" fill="none">
            <path d="M16.7325 0L95 7.25926L0 35L16.7325 0Z" fill="#7665FF" />
        </svg>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="wpo-section-title">
                    <span><strong>//</strong> OUR portfolio <strong>//</strong></span>
                    <h2>Complete Projects</h2>
                </div>
            </div>
        </div>
        <div class="technut-project-wrap">
            <div class=" technut-project-slider owl-carousel">
                <div class=" technut-project-card">
                    <div class="images">
                        <img src="assets/images/project/1.png" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="project-single.html">Cyber Security</a></h2>
                        <span>IT Security</span>
                    </div>
                </div>
                <div class=" technut-project-card">
                    <div class="images">
                        <img src="assets/images/project/2.png" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="project-single.html">Web Design</a></h2>
                        <span>IT Security</span>
                    </div>
                </div>
                <div class=" technut-project-card">
                    <div class="images">
                        <img src="assets/images/project/3.png" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="project-single.html">UX/UI Design</a></h2>
                        <span>IT Security</span>
                    </div>
                </div>
                <div class="technut-project-card">
                    <div class="images">
                        <img src="assets/images/project/2.png" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="project-single.html">Web Design</a></h2>
                        <span>IT Security</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end technut-project-section -->

<!-- start technut-testimonial-section -->
<section class="technut-testimonial-section section-padding">
    <div class="shape-bg">
        <svg width="1920" height="620" viewBox="0 0 1920 620" fill="none">
            <path d="M0 543L1920 620V114L0 0V543Z" fill="#40C9FF" />
            <path d="M0 543H1226L1674 570L1920 620V114L292 73L0 0V543Z" fill="#FED201" />
            <path d="M0 77L1920 0V506L0 620V77Z" fill="#7665FF" />
            <path opacity="0.05" d="M0 357L283.913 197L554 413L350.283 562L0 620V357Z" fill="white" />
            <path opacity="0.05" d="M1920 220L1636.09 60L1366 276L1566 402L1811 384L1920 483V220Z" fill="white" />
        </svg>
    </div>
    <div class="container">
        <div class="technut-testimonial-wrap">
            <ul class="testimonial-img">
                <li><img src="assets/images/testimonial/1.jpg" alt=""></li>
                <li><img src="assets/images/testimonial/2.jpg" alt=""></li>
                <li><img src="assets/images/testimonial/1.jpg" alt=""></li>
            </ul>
            <div class="testimonial-conternt">
                <div class="text">
                    <p>"It uses a dictionary of over 200 Latin words, combined with handful the model sentence
                        structures,
                        to generate lorem ipsum which looks reasonable the generated lorem ipsum is
                        therefore always free from repetition sentence structures, to generate lorem ipsum which
                        looks"</p>
                    <h2>Modern Sater</h2>
                    <span>Founder & CEO</span>
                </div>
                <div class="text">
                    <p>"It uses a dictionary of over 200 Latin words, combined with handful the model sentence
                        structures,
                        to generate lorem ipsum which looks reasonable the generated lorem ipsum is
                        therefore always free from repetition sentence structures, to generate lorem ipsum which
                        looks"</p>
                    <h2>Amanda Wilburn</h2>
                    <span>Founder & CEO</span>
                </div>
                <div class="text">
                    <p>"It uses a dictionary of over 200 Latin words, combined with handful the model sentence
                        structures,
                        to generate lorem ipsum which looks reasonable the generated lorem ipsum is
                        therefore always free from repetition sentence structures, to generate lorem ipsum which
                        looks"</p>
                    <h2>Modern Sater</h2>
                    <span>Founder & CEO</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end technut-testimonial-section -->

<!-- start wpo-blog-section -->
<section class="wpo-blog-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 colo-12">
                <div class="wpo-blog-left-content">
                    <div class="wpo-section-title">
                        <span><strong>//</strong> OUR Blog <strong>//</strong></span>
                        <h2>If you want to daily articles subscribe now.</h2>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the when an
                            unknown printer took.
                            Lorem Ipsum has been the industry's standard dummy text ever since the when an
                            unknown printer took</p>
                    </div>
                    <a href="blog.html" class="theme-btn-s4">Subscribe<i class="fi flaticon-right-arrow-1"></i></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-12">
                <div class="wpo-blog-right-wrap wpo-blog-slider owl-carousel">
                    <div class="blog-card">
                        <div class="images">
                            <img src="assets/images/blog/img-1.jpg" alt="">
                            <div class="shape">
                                <img src="assets/images/blog/bg-shape.png" alt="">
                            </div>
                        </div>
                        <div class="text">
                            <span>06-September-2022</span>
                            <h2>Many publishing and packages and web page editors model.</h2>
                            <a href="blog-single.html" class="theme-btn">Read More</a>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="images">
                            <img src="assets/images/blog/img-2.jpg" alt="">
                            <div class="shape">
                                <img src="assets/images/blog/bg-shape.png" alt="">
                            </div>
                        </div>
                        <div class="text">
                            <span>06-September-2022</span>
                            <h2>Many publishing and packages and web page editors model.</h2>
                            <a href="blog-single.html" class="theme-btn">Read More</a>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="images">
                            <img src="assets/images/blog/img-1.jpg" alt="">
                            <div class="shape">
                                <img src="assets/images/blog/bg-shape.png" alt="">
                            </div>
                        </div>
                        <div class="text">
                            <span>06-September-2022</span>
                            <h2>Many publishing and packages and web page editors model.</h2>
                            <a href="blog-single.html" class="theme-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end wpo-blog-section -->

@endsection
