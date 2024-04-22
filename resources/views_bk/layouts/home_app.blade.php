<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siri - Electric Car & Charging Station </title>
    <!--favicon icon-->
    <link rel="shortcut icon" href="{{ asset('images_home/favicon.ico') }}">
    <!--bootstrap css-->
    <link rel="stylesheet" href="{{ asset('css_home/bootstrap.min.css') }}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css_home/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css_home/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css_home/rs6.css') }}">
    <!--owl carousel-->
    <link rel="stylesheet" href="{{ asset('css_home/owl.carousel.min.css') }}">
    <!--Progressbar CSS-->
    <link rel="stylesheet" href="{{ asset('css_home/progressbar.css') }}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('css_home/animations.min.css') }}">
    <!-- Magnefic Popup CSS -->
    <link rel="stylesheet" href="{{ asset('css_home/magnific-popup.min.css') }}">
    <!--icon css -->
    <link rel="stylesheet" href="{{ asset('css_home/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css_home/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css_home/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css_home/themify-icons.css') }}">

    <link
rel="stylesheet"
onload="NPRL.onLoadStyle(this)"
onerror="NPRL.onErrorStyle(this)"
href="{{ asset('css_home/stylesheet.css') }}"
/>

<link
rel="stylesheet"
onload="NPRL.onLoadStyle(this)"
onerror="NPRL.onErrorStyle(this)"
href="{{ asset('css_home/stylesheet-1.css') }}"
/>

    <!--style css-->
    <link rel="stylesheet" href="{{ asset('css_home/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ asset('css_home/responsive.css') }}">

</head>

<body>
    <!-- Start Header -->
    <header id="pq-header" class="pq-header-default">
        {{-- <div class="pq-top-header">
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
        </div> --}}

        @php
            // Get the main menu items.
            $mainMenus = App\Models\MainMenu::whereNull('deleted_at')->get();

            // Initialize an empty array to store the structured data.
            $menuData = [];

            // Loop through each main menu item.
            foreach ($mainMenus as $mainMenu) {
                $menu = [
                    'title' => $mainMenu->title,
                    'url' => $mainMenu->link_type == 'link' ? $mainMenu->link : $mainMenu->slug,
                    'submenu' => [],
                ];

                // Get the submenus for the current main menu.
                $subMenus = App\Models\SubMenu::where('menu_id', $mainMenu->id)
                    ->whereNull('deleted_at')
                    ->get();

                // Loop through each submenu.
                foreach ($subMenus as $subMenu) {
                    $submenu = [
                        'title' => $subMenu->title,
                        'url' => $subMenu->link_type == 'link' ? $subMenu->link : $subMenu->slug,
                        'subsubmenu' => [],
                    ];

                    // Get the subsubmenus for the current submenu.
                    $subSubMenus = App\Models\SubSubMenu::where('sub_menu_id', $subMenu->id)
                        ->whereNull('deleted_at')
                        ->get();

                    // Loop through each subsubmenu.
                    foreach ($subSubMenus as $subSubMenu) {
                        $submenu['subsubmenu'][] = [
                            'title' => $subSubMenu->title,
                            'url' => $subSubMenu->link_type == 'link' ? $subSubMenu->link : $subSubMenu->slug,
                        ];
                    }

                    // Add the submenu to the main menu
                    $menu['submenu'][] = $submenu;
                }

                // Add the main menu to the overall structure
                $menuData[] = $menu;
            }
        @endphp
        <div class="pq-bottom-header pq-has-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="/">
                             
                                    <img class="img-fluid logo1" src="{{ asset('images_home/logo-1.png') }}"
                                    alt="ecofuel">
                            </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div id="pq-menu-contain" class="pq-menu-contain">
                                    <ul id="pq-main-menu" class="navbar-nav ml-auto">
                                        @if (!empty($menuData))
                                        @foreach ($menuData as $menu)
                                            <li class="menu-item">
                                                <a href="{{ $menu['url'] }}">{{ $menu['title'] }}</a><i
                                                    class="{{ isset($menu['submenu']) && !empty($menu['submenu']) ? 'fa fa-chevron-down' : '' }} pq-submenu-icon"></i>
                                                <ul class="sub-menu">
                                                    @if (!empty($menu['submenu']))
                                                        @foreach ($menu['submenu'] as $submenu)
                                                            <li class="menu-item">
                                                                <a href="{{ $submenu['url'] }}">{{ $submenu['title'] }}</a>
                                                                @if (!empty($submenu['subsubmenu']))
                                                                    <ul class="sub-menu">
                                                                        @foreach ($submenu['subsubmenu'] as $subsubmenu)
                                                                            <li class="menu-item">
                                                                                <a href="{{ $subsubmenu['url'] }}">{{ $subsubmenu['title'] }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </li>
                                        @endforeach
                                    @else
                                        <p>No menu data available.</p>
                                    @endempty
                                    

                                    </ul>

                                </div>
                            </div>
                            <div class="pq-menu-search-block">
                                <a href="javascript:void(0)" id="pq-seacrh-btn"><i class="fa fa-search"></i></a>
                                <div class="pq-search-form">
                                    <form role="search" method="get" class="search-form" action="/">
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="search" class="search-field" placeholder="Search …"
                                                value="" name="s">
                                        </label>
                                        <button type="submit" class="search-submit">
                                            <span class="screen-reader-text">Search</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <a href="\" class="pq-button">
                                <div class="pq-button-block">
                                    <span class="pq-button-line-left"></span>
                                    <span class="pq-button-text">Talk to our expert</span>
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


    {{-- <footer id="pq-footer">
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
                                <img src="{{ asset('images_home/call.png') }}" alt="subscribe-contact">
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
                                        <img src="{{ asset('images_home/footer-logo.png') }}" class="pq-footer-logo"
                                            alt="gym-footer-logo">
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
                                    <img src="{{ asset('images_home/mail.png') }}" alt="subscribe">
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
    </footer> --}}
    <!-- End Footer -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!--Back To Top End-->

    <!--Jquery js-->
    <script src="{{ asset('js_home/jquery.min.js') }}"></script>
    <!--Bootstrap js-->
    <script src="{{ asset('js_home/bootstrap.min.js') }}"></script>
    <!--Owl Carousel js-->
    <script src="{{ asset('js_home/owl.carousel.min.js') }}"></script>
    <!--isotope js-->
    <script src="{{ asset('js_home/isotope.pkgd.min.js') }}"></script>
    <!--countTo js-->
    <script src="{{ asset('js_home/jquery.countTo.min.js') }}"></script>
    <!--Maginfic-Popup js-->
    <script src="{{ asset('js_home/jquery.magnific-popup.min.js') }}"></script>
    <!-- Animation JS -->
    <script src="{{ asset('js_home/wow.min.js') }}"></script>
    <!--Rev Slider js-->
    <script src="{{ asset('js_home/rbtools.min.js') }}"></script>
    <script src="{{ asset('js_home/rs6.min.js') }}"></script>
    <script src="{{ asset('js_home/rev-custom.js') }}"></script>
    <!--Custom js-->
    <script src="{{ asset('js_home/custom.js') }}"></script>
</body>

</html>
