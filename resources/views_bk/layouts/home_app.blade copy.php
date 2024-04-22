
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siri - Electric Car & Charging Station </title>
    <!--favicon icon-->
    <link rel="shortcut icon" href="{{asset('images_home/favicon.ico')}}">
    <!--bootstrap css-->
    <link rel="stylesheet" href="{{asset('css_home/bootstrap.min.css')}}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css_home/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css_home/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css_home/rs6.css')}}">
    <!--owl carousel-->
    <link rel="stylesheet" href="{{asset('css_home/owl.carousel.min.css')}}">
    <!--Progressbar CSS-->
    <link rel="stylesheet" href="{{asset('css_home/progressbar.css')}}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('css_home/animations.min.css')}}">
    <!-- Magnefic Popup CSS -->
    <link rel="stylesheet" href="{{asset('css_home/magnific-popup.min.css')}}">
    <!--icon css -->
    <link rel="stylesheet" href="{{asset('css_home/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css_home/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css_home/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css_home/themify-icons.css')}}">
    <!--style css-->
    <link rel="stylesheet" href="{{asset('css_home/style.css')}}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{asset('css_home/responsive.css')}}">

</head>

<body>
    <!-- Start Header -->
    <header id="pq-header" class="pq-header-default">
        <div class="pq-top-header">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-md-6 text-right">
                        <div class="pq-header-social text-right">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pq-header-contact ">
                            <ul>
                                <li>
                                    <a href="tel:+1800001658"><i class="fas fa-phone"></i>
                                        <span>+91 02027464855</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:o@siri.com">
                                        <i class="fas fa-envelope"></i><span>reachus@siriem.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pq-bottom-header pq-has-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="/">
                                <img class="img-fluid logo" src="{{asset('images_home/header-logo.png')}}" alt="ecofuel">
                            </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div id="pq-menu-contain" class="pq-menu-contain">
                                    <ul id="pq-main-menu" class="navbar-nav ml-auto">
                                        <li class="menu-item current-menu-item menu-item-has-children">
                                            <a href="/" aria-current="page">Home</a>

                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('home.approachs')}}">Our Approach</a>

                                        </li>


                                        <li class="menu-item">
                                            <a href="#">Our Offerings</a><i
                                                class="fa fa-chevron-down pq-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="#">Products</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="#">		SIRINX</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="#">		Onboard</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="{{route('home.products')}}">		Charging Management System </a>
                                                        </li>
        
        
                                                    </ul> </li>
                                                <li class="menu-item">
                                                    <a href="#">Services</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="{{route('home.chargerServices')}}">	Charger services</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="{{route('home.cmsServices')}}">	CMS Services</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="{{route('home.consultingSiri')}}">	Consulting</a>
                                                        </li>
        
        
                                                    </ul></li>
                                                <li class="menu-item">
                                                    <a href="{{route('home.solutions')}}">Solutions</a>
                                                </li>


                                            </ul>
                                        </li>

                                        
                                        <li class="menu-item">
                                            <a href="#">Verticals</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="{{ route('home.verticals', ['slug' => 'fleets']) }}">Fleets</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('home.verticals', ['slug' => 'commercial']) }}">Commercial</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="{{ route('home.verticals', ['slug' => 'residential']) }}">Residential</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('home.verticals', ['slug' => 'cpos']) }}">CPOs</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('home.verticals', ['slug' => 'retail_Hospitality']) }}">Retail & Hospitality</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('home.verticals', ['slug' => 'oems']) }}">OEMs</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('home.verticals', ['slug' => 'energy_storage']) }}">Energy Storage</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Innovation</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                <a href="{{ route('home.innovation', ['slug' => 'siri-labs']) }}">SIRI Labs</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('home.innovation', ['slug' => 'tech-speak']) }}">Tech Speak</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="{{ route('home.innovation', ['slug' => 'next-releases']) }}">Next Releases</a>
                                                </li>

                                            </ul>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">Company </a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="{{ route('home.aboutUs') }}">About us</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('home.team') }}">Team</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="{{route('home.contact')}}">contact us</a>
                                                </li>

                                            </ul>
                                        </li>

                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="pq-menu-search-block">
                                <a href="javascript:void(0)" id="pq-seacrh-btn"><i class="fa fa-search"></i></a>
                                <div class="pq-search-form">
                                    <form role="search" method="get" class="search-form" action="/">
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="search" class="search-field" placeholder="Search …" value=""
                                                name="s">
                                        </label>
                                        <button type="submit" class="search-submit">
                                            <span class="screen-reader-text">Search</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <a href="{{route('home.contact')}}" class="pq-button">
                                <div class="pq-button-block">
                                    <span class="pq-button-line-left"></span>
                                    <span class="pq-button-text">Get a Quote</span>
                                    <span class="pq-button-line-right"></span>
                                    <i class="ion ion-android-arrow-dropright"></i>
                                </div>
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    	 @yield('content')

  
         <footer id="pq-footer">
            <div class="pq-subscribe align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-4 col-md-4">
                            <div class="pq-subscribe-location align-items-center text-center">
                                <a href="{{ route('home.contact') }}">
                                    <h4 class="pq-subscribe-title">Find Our near Branches </h4>
                                </a>
                                <i class="fas fa-globe-americas"></i>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 center">
                            <div class="pq-subscribe-contact">
                                <div>
                                    <img src="{{asset('images_home/call.png')}}" alt="subscribe-contact">
                                    <span>Call US On</span>
                                    <a href="tel:+1800001658">
                                        <span>+91 02027464855</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 col-md-4">
                            <div class="pq-subscribe-time align-items-center">
                                <i class="far fa-clock"></i>
                                <a href="{{ route('home.contact') }}">
                                    <h4 class="pq-subscribe-title text-center">24/7 Emergency Services </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pq-footer-style-1">
                <div class="pq-footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="widget">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img src="{{asset('images_home/footer-logo.png')}}" class="pq-footer-logo" alt="gym-footer-logo">
                                            <p>It is a long established fact that a reader by the readable content of a page
                                                when looking at its layout.</p>
                                            <div class="pq-footer-items">
                                                <i class="fa fa-phone-alt"></i>
                                                <div class="pq-footer-items-info">
                                                    <a href="tel:+1800001658">
                                                        <span>+91 02027464855</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pq-footer-items">
                                                <i class="fa fa-envelope"></i>
                                                <div class="pq-footer-items-info">
                                                    <a href="mailto:info@peacefuldesign.com">
                                                        <span>reachus@siriem.com</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3  col-md-6">
                                <div class="widget">
                                    <h1 class="footer-title">Our Services</h1>
                                    <div class="menu-our-services-container">
                                        <ul id="menu-our-services" class="menu">
                                            <li class="menu-item">
                                                <a href="ac-charger-services.html">AC Charger Services</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="dc-charger-services.html">DC Charger Services</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ev-driver-services.html">EV drivers Services</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="charge-point-services.html">Charge Point Services</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="home-charging-services.html">Home charging</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="building-technology-services.html">Building Services</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3  col-md-6">
                                <div class="widget">
                                    <h1 class="footer-title">Useful link</h1>
                                    <div class="menu-usefull-link-container">
                                        <ul id="menu-usefull-link" class="menu">
                                            <li class="menu-item">
                                                <a href="home-charging-services.html">Home charging</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="building-technology-services.html">Building technology</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="charge-point-services.html">Charge Point</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ev-driver-services.html">EV drivers</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="ac-charger-services.html">AC Charger</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="dc-charger-services.html">24/7 Hour Support</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3  col-md-6">
                                <div class="widget">
                                    <div class="pq-subscribe-content">
                                        <img src="{{asset('images_home/mail.png')}}" alt="subscribe">
                                        <h4 class="footer-title text-center">Newsletter</h4>
                                        <p class="text-center">Sign up to get exclusive offers from our favorite brands</p>
                                        <form novalidate>
                                            <div class="row text-center">
                                                <div class="col-lg-12">
                                                    <input type="email" name="EMAIL" placeholder="Your email address"
                                                        required="">
                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="submit" value="Subscribe">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pq-copyright-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 align-self-center">
                                <div class="col-md-12 align-self-center">
                                    <span class="pq-copyright"> Copyright 2024 Siri All Rights Reserved.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- End Footer -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!--Back To Top End-->

    <!--Jquery js-->
    <script src="{{asset('js_home/jquery.min.js')}}"></script>
    <!--Bootstrap js-->
    <script src="{{asset('js_home/bootstrap.min.js')}}"></script>
    <!--Owl Carousel js-->
    <script src="{{asset('js_home/owl.carousel.min.js')}}"></script>
    <!--isotope js-->
    <script src="{{asset('js_home/isotope.pkgd.min.js')}}"></script>
    <!--countTo js-->
    <script src="{{asset('js_home/jquery.countTo.min.js')}}"></script>
    <!--Maginfic-Popup js-->
    <script src="{{asset('js_home/jquery.magnific-popup.min.js')}}"></script>
    <!-- Animation JS -->
    <script src="{{asset('js_home/wow.min.js')}}"></script>
    <!--Rev Slider js-->
    <script src="{{asset('js_home/rbtools.min.js')}}"></script>
    <script src="{{asset('js_home/rs6.min.js')}}"></script>
    <script src="{{asset('js_home/rev-custom.js')}}"></script>
    <!--Custom js-->
    <script src="{{asset('js_home/custom.js')}}"></script>
</body>

</html>