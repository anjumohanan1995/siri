<!DOCTYPE html>
<html>

<head>
   
    <?php
    if (session()->has('style_status')) {
        $style_status = session()->get('style_status');
    } else {
        $style_status = 'aone';
    }
    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="Description" content="SC/ST" />
    <meta name="Author" content="" />
    <!-- Title -->
    <title>SIRI</title>
    <!--- Favicon --->
    <link rel="icon" href="{{ asset('img//favicon.png') }}" type="image/x-icon" />
    <!-- Bootstrap css -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" id="style" />
    <!--- Style css --->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" />
    <!--- Icons css --->
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" />
    <!--- Animations css --->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <!-- Switcher css -->
    <link href="{{ asset('css/switcher.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" />

    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/selectize.min.js') }}"></script>
    <script src="{{ asset('js/select.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap3-typeahead.min.js') }}"></script>


    <link href="{{ asset('css/selectize.bootstrap3.min.css') }}" rel="stylesheet" />


    @if ($style_status == 'aminus')
        <link href="{{ asset('css/style-min.css') }}" rel="stylesheet" type="text/css" />
    @elseif($style_status == 'aone')
        <link href="{{ asset('css/style-one.css') }}" rel="stylesheet" type="text/css" />
    @elseif($style_status == 'aplus')
        <link href="{{ asset('css/style-plus.css') }}" rel="stylesheet" type="text/css" />
    @endif

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>

<body class="main-body app sidebar-mini ltr">

    <div class="horizontalMenucontainer">
        <!-- Switcher -->

        <!-- End Switcher -->
        <!-- Loader -->

        @if (auth()->check() && auth()->user()->role == 'User')
            <div class="modal fade" id="user-modal">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content country-select-modal border-0">
                        <div class="modal-header offcanvas-header">
                            <h6 class="modal-title">Please Update Bank Details</h6><button aria-label="Close"
                                class="btn-close" data-bs-dismiss="modal" type="button"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body p-5">
                            <form id="userForm">
                                @csrf

                                <div class="text-center">
                                    {{-- <h5>Bank Details</h5> --}}
                                    <div class="row pb-4">
                                        <div class="col-md-4">
                                            <label>Bank Name * </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="bank_name" id="bank_name"
                                                required>
                                            <span class="text-danger error-message" id="error-bank_name"></span>
                                        </div>

                                    </div>
                                    <div class="row pb-4">
                                        <div class="col-md-4">
                                            <label>Account Number * </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="account_no" id="account_no"
                                                required>
                                            <span class="text-danger error-message" id="error-account_no"></span>
                                        </div>

                                    </div>
                                    <div class="row pb-4">
                                        <div class="col-md-4">
                                            <label>IFSC Code *</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="ifsc_code" id="ifsc_code"
                                                required>

                                            <span class="text-danger error-message" id="error-ifsc_code"></span>
                                        </div>

                                    </div>
                                    <div class="row pb-4">
                                        <div class="col-md-4">
                                            <label>Passbook (Pdf/Image Max Size :2 MB) *</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="file" class="form-control" name="passbook" id="passbook"
                                                required>
                                            <span class="text-danger error-message" id="error-passbook"></span>
                                        </div>

                                    </div>

                                </div>
                                <input type="hidden" value="{{ auth()->user()->id }}" name="requestId"
                                    id="requestId">

                                <div class="text-center">
                                    <button type="button" onclick="userUpdate()"
                                        class="btn btn-primary mt-4 mb-0 me-2">Submit</button>
                                    <button class="btn btn-default mt-4 mb-0" type="Reset">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div id="global-loader">
            <img src="{{ asset('img/loader.gif') }}" class="loader-img" alt="Loader" width="250" />
        </div>
        <!-- /Loader -->
        <!-- page -->
        <div class="page custom-index">
            <!-- main-header -->
            <div class="main-header side-header sticky nav nav-item" style="margin-bottom: -63px;">
                <div class="container-fluid main-container">
                    <div class="main-header-left">
                        <div class="app-sidebar__toggle mobile-toggle" data-bs-toggle="sidebar">
                            <a class="open-toggle" href="javascript:void(0);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" class="eva eva-menu-outline header-icons">
                                    <g data-name="Layer 2">
                                        <g data-name="menu">
                                            <rect width="24" height="24" transform="rotate(180 12 12)"
                                                opacity="0"></rect>
                                            <rect x="3" y="11" width="18" height="2" rx=".95"
                                                ry=".95"></rect>
                                            <rect x="3" y="16" width="18" height="2" rx=".95"
                                                ry=".95"></rect>
                                            <rect x="3" y="6" width="18" height="2" rx=".95"
                                                ry=".95"></rect>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a class="close-toggle" href="javascript:void(0);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" class="eva eva-close-outline header-icons">
                                    <g data-name="Layer 2">
                                        <g data-name="close">
                                            <rect width="24" height="24" transform="rotate(180 12 12)"
                                                opacity="0"></rect>
                                            <path
                                                d="M13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29-4.3 4.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l4.29-4.3 4.29 4.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="responsive-logo">
                            <a href="index.html" class="header-logo">
                                <img src="{{ asset('/img/logo.png') }}" class="logo-11" />
                            </a>
                            <a href="index.html" class="header-logo">
                                <img src="{{ asset('img/logo-white.png') }}" class="logo-1" />
                            </a>
                        </div>
                        <ul class="header-megamenu-dropdown nav">


                            <li class="nav-item">
                                <div class="dropdown-menu-rounded btn-group ">
                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-link aminus"
                                        data-bs-toggle="dropdown" id="" type="button">
                                        <span> A- </span>
                                    </button>
                                    <button aria-expanded="false" aria-haspopup="true"
                                        class="btn btn-link border border-radius aone" data-bs-toggle="dropdown"
                                        id="" type="button">
                                        <span> A </span>
                                    </button>
                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-link aplus"
                                        data-bs-toggle="dropdown" id="" type="button">
                                        <span> A+ </span>
                                    </button>
                                </div>
                            </li>

                        </ul>

                    </div>


                    <button class="navbar-toggler nav-link icon navresponsive-toggler vertical-icon ms-auto"
                        type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fe fe-more-vertical header-icons navbar-toggler-icon"> </i>
                    </button>
                    <div
                        class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0 mg-lg-s-auto">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="main-header-right">

                            </div>
                        </div>
                    </div>
                    <h4 class="content-title mb-2 text-white text-right">Welcome {{ Auth::user()->name }}</h4>
                </div>

            </div>

            <!-- /main-header -->
            <!-- main-sidebar -->
            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            <div class="sticky is-expanded" style="margin-bottom:0px;">
                <aside class="app-sidebar ps ps--active-y open">
                    <div class="main-sidebar-header active">
                        {{-- <a class="desktop-logo logo-light active" href="/home">
								<img src="/img//logo.png" class="main-logo" alt="logo" />
							</a>
							<a class="desktop-logo logo-dark active" href="/home" style="height:20px;">
								<img src="../img//logo-white.png" class="main-logo" alt="logo" />
							</a>
							<a class="logo-icon mobile-logo icon-light active" href="/home">
								<img src="../img//favicon.png" alt="logo" />
							</a>
							<a class="logo-icon mobile-logo icon-dark active" href="/home">
								<img src="../img//favicon-white.png" alt="logo" />
							</a> --}}
                    </div>
                    <div class="main-sidemenu is-expanded">
                        <div class="main-sidebar-loggedin">
                            <div class="user-info text-center w-100">
                                <h6 class="mb-0 text-dark">{{ Auth::user()->name }}</h6>

                                <label class="btn btn-success">{{ Auth::user()->role }}</label>

                            </div>

                        </div>
                        <div class="sidebar-navs">
                            <ul class="nav nav-pills-circle" style="padding-left: 30px;">
                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                    data-bs-original-title="Settings" aria-describedby="tooltip365540">
                                    <a class="nav-link text-center m-2" href="{{ route('password') }}">
                                        <i class="fe fe-settings fe-spin"> </i>
                                    </a>
                                </li>

                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                    data-bs-original-title="Followers">
                                    <a class="nav-link text-center m-2" href="{{ route('profile') }}">
                                        <i class="fe fe-user"> </i>
                                    </a>
                                </li>

                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                    data-bs-original-title="Logout">

                                    <a class="nav-link text-center m-2" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                            class="fe fe-power"> </i>

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>



                                </li>
                            </ul>
                        </div>
                        <div class="slide-left disabled active is-expanded d-none" id="slide-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg>
                        </div>
                        <ul class="side-menu" style="margin-right: 0px;">
                            <li class="slide">
                                <a class="side-menu__item {{ \Request::route()->getName() == 'home.index' || \Request::route()->getName() == 'home' ? 'active' : '' }}"
                                    href="{{ url('home') }}">
                                    <i class="side-menu__icon fe fe-airplay"> </i>
                                    <span class="side-menu__label">Dashboard</span>
                                </a>
                            </li>
                            </li>
                            @if (Auth::user()->role == 'Super Admin')

                                <li class="slide">
                                    <a class="side-menu__item {{ \Request::route()->getName() == 'users.index' || \Request::route()->getName() == 'users.create' || \Request::route()->getName() == 'users.edit' ? 'active' : '' }}"
                                        href="{{ url('users') }}">
                                        <i class="side-menu__icon fe fe-users"> </i>
                                        <span class="side-menu__label">Users</span>

                                    </a>

                                </li>
                                <li class="slide">
                                    <a class="side-menu__item {{ \Request::route()->getName() == 'roles.index' || \Request::route()->getName() == 'roles.create' || \Request::route()->getName() == 'roles.edit' ? 'active' : '' }}"
                                        href="{{ url('roles') }}">
                                        <i class="side-menu__icon fe fe-file-plus"> </i>
                                        <span class="side-menu__label">Role</span>

                                    </a>

                                </li>

                                <li class="slide">
                                    <a class="side-menu__item {{ \Request::route()->getName() == 'settings.index' ? 'active' : '' }}"
                                        href="{{ url('settings') }}">
                                        <i class="side-menu__icon fe fe-settings"> </i>
                                        <span class="side-menu__label">Settings</span>

                                    </a>

                                </li>

                                <li class="slide">
                                    <a class="side-menu__item {{ \Request::route()->getName() == 'silder_catrgory.index' ? 'active' : '' }}"
                                        href="{{ url('slidercategories') }}">
                                        <i class="side-menu__icon fe fe-layers"> </i>
                                        <span class="side-menu__label">Sliders</span>

                                    </a>

                                </li>
                                <li class="slide">
                                    <a class="side-menu__item {{ \Request::route()->getName() == 'menus.index' || \Request::route()->getName() == 'menus.create' || \Request::route()->getName() == 'menus.edit' ? 'active' : '' }}"
                                        href="{{ url('menus') }}">
                                        <i class="side-menu__icon fe fe-file-plus"> </i>
                                        <span class="side-menu__label">Menus</span>
                                    </a>
                                </li>


                                <li class="slide">
                                    <a class="side-menu__item {{ \Request::route()->getName() == 'gallery.index' ? 'active' : '' }}"
                                        href="{{ url('gallery_category') }}">
                                        <i class="side-menu__icon fe fe-package"> </i>
                                        <span class="side-menu__label">Gallery</span>

                                    </a>

                                </li>
                                <li class="slide">
                                    <a class="side-menu__item {{ \Request::route()->getName() == 'admin-approach.index' ? 'active' : '' }}"
                                        href="{{ route('admin-approach.index') }}">
                                        <i class="side-menu__icon fe fe-package"> </i>
                                        <span class="side-menu__label">Our Approach</span>

                                    </a>

                                </li>
                                @php
                                    $menu = App\Models\MainMenu::where('title', 'Verticals')->first();
                                    $sub_menu = App\Models\SubMenu::where('menu_id', @$menu->id)->get();
                                @endphp
                                @if (!empty($sub_menu))
                                    <li class="slide">
                                        <a class="side-menu__item " data-bs-toggle="slide" href="">
                                            <i class="side-menu__icon fe fe-list"> </i>
                                            <span class="side-menu__label">{{ @$menu->title }}</span>
                                            <i class="angle fe fe-chevron-down"> </i>
                                        </a>

                                        <ul class="slide-menu">

                                            @foreach ($sub_menu as $sub_menus)
                                                <li class="sub-slide">
                                                    <a class="slide-item" data-bs-toggle="sub-slide"
                                                        href="/admin{{ @$sub_menus->link }}">
                                                        <span
                                                            class="sub-side-menu__label">{{ @$sub_menus->title }}</span>
                                                    </a>
                                                </li>
                                            @endforeach


                                        </ul>
                                    </li>
                                @endif
                                <li
                                    class="slide {{ \Request::route()->getName() == 'innovations.index' ? ' is-expanded' : '' }}">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="">
                                        <i class="side-menu__icon fe fe-list"> </i>
                                        <span class="side-menu__label">Innovations</span>
                                        <i class="angle fe fe-chevron-down"> </i>
                                    </a>
                                    @php
                                        $innovation = \App\Models\MainMenu::where('title', 'Innovation')->first();
                                        $inn_datas = \App\Models\SubMenu::where('menu_id', @$innovation->id)->get();
                                    @endphp
                                    <ul class="slide-menu">
                                        @foreach ($inn_datas as $inn)
                                            <li class="sub-slide">
                                                <a class="slide-item" data-bs-toggle="sub-slide"
                                                    href="/admin{{ @$inn->link }}">
                                                    <span class="sub-side-menu__label">{{ @$inn->title }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                        

										</ul>
									</li>
                                    <li class="slide">
                                        <a class="side-menu__item {{ \Request::route()->getName() == 'admin-approach.index' ? 'active' : '' }}"
                                            href="{{ route('dynamic-pages.index') }}">
                                            <i class="side-menu__icon fe fe-package"> </i>
                                            <span class="side-menu__label">Pages</span>
    
                                        </a>
    
                                    </li>
								  <li class="slide">
										<a class="side-menu__item " data-bs-toggle="slide" href="">
											<i class="side-menu__icon fe fe-list"> </i>
											<span class="side-menu__label">Homepage Contents</span>
											<i class="angle fe fe-chevron-down"> </i>
										</a>

										<ul class="slide-menu">			
                                            <li class="sub-slide">
												<a class="slide-item" data-bs-toggle="sub-slide"
													href="{{ route('panel_one.index') }}">
													<span class="sub-side-menu__label">Panel 1</span>
												</a>
											</li>
                                            <li class="sub-slide">
												<a class="slide-item" data-bs-toggle="sub-slide"
													href="{{ route('panel_two.index') }}">
													<span class="sub-side-menu__label">Panel 2</span>
												</a>
											</li>
                                            <li class="sub-slide">
												<a class="slide-item" data-bs-toggle="sub-slide"
													href="{{ route('panel_three.index') }}">
													<span class="sub-side-menu__label">Panel 3</span>
												</a>
											</li>
                                            <li class="sub-slide">
												<a class="slide-item" data-bs-toggle="sub-slide"
													href="{{ route('panel_four.index') }}">
													<span class="sub-side-menu__label">Panel 4</span>
												</a>
											</li>	
                                            <li class="sub-slide">
												<a class="slide-item" data-bs-toggle="sub-slide"
													href="{{ route('panel_five.index') }}">
													<span class="sub-side-menu__label">Panel 5</span>
												</a>
											</li>	
                                            <li class="sub-slide">
												<a class="slide-item" data-bs-toggle="sub-slide"
													href="{{ route('panel_six.index') }}">
													<span class="sub-side-menu__label">Panel 6</span>
												</a>
											</li>	
                                            <li class="sub-slide">
												<a class="slide-item" data-bs-toggle="sub-slide"
													href="{{ route('panel_seven.index') }}">
													<span class="sub-side-menu__label">Panel 7</span>
												</a>
											</li>								
											{{--  <li class="sub-slide">
												<a class="slide-item" data-bs-toggle="sub-slide"
													href="{{ route('blogs.index') }}">
													<span class="sub-side-menu__label">Blogs</span>
												</a>
											</li>
                                            <li class="sub-slide">
												<a class="slide-item" data-bs-toggle="sub-slide"
													href="{{ route('brands.index') }}">
													<span class="sub-side-menu__label">Brands</span>
												</a>
											</li>  --}}
										</ul>
									</li> 

                            @endif



                        </ul>
                        <div class="slide-right" id="slide-right">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 652px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 515px;"></div>
                    </div>
                </aside>
            </div>

            <!-- main-sidebar -->
            @yield('content')

            <!-- /main-content -->
            <div class="sidebar sidebar-right sidebar-animate ps ps--active-y">
                <div class="panel panel-primary card mb-0">
                    <div class="panel-body tabs-menu-body p-0 border-0">
                        <ul class="Date-time">
                            <li class="time">
                                <h1 class="animated">10:52</h1>
                                <p class="animated">Monday, August 22nd 2022</p>
                            </li>
                        </ul>
                        <div class="card-body latest-tasks">
                            <h3 class="events-title">
                                <span>Events For Week </span>
                            </h3>
                            <div class="event">
                                <div class="Day">Monday 20 Jan</div>
                                <a href="javascript:void(0);">No Events Today</a>
                            </div>
                            <div class="event">
                                <div class="Day">Tuesday 21 Jan</div>
                                <a href="javascript:void(0);">No Events Today</a>
                            </div>
                            <div class="event">
                                <div class="Day">Wednessday 22 Jan</div>
                                <div class="tasks">
                                    <div class="task-line primary">
                                        <a href="javascript:void(0);" class="label"> XML Import &amp; Export </a>
                                        <div class="time">12:00 PM</div>
                                    </div>
                                    <div class="checkbox">
                                        <label class="check-box">
                                            <label class="ckbox">
                                                <input checked="" type="checkbox" />
                                                <span> </span>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="tasks">
                                    <div class="task-line danger">
                                        <a href="javascript:void(0);" class="label"> Connect API to pages </a>
                                        <div class="time">08:00 AM</div>
                                    </div>
                                    <div class="checkbox">
                                        <label class="check-box">
                                            <label class="ckbox">
                                                <input type="checkbox" />
                                                <span> </span>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="event">
                                <div class="Day">Thursday 23 Jan</div>
                                <div class="tasks">
                                    <div class="task-line success">
                                        <a href="javascript:void(0);" class="label"> Create Wireframes </a>
                                        <div class="time">06:20 PM</div>
                                    </div>
                                    <div class="checkbox">
                                        <label class="check-box">
                                            <label class="ckbox">
                                                <input type="checkbox" />
                                                <span> </span>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="event">
                                <div class="Day">Friday 24 Jan</div>
                                <div class="tasks">
                                    <div class="task-line warning">
                                        <a href="javascript:void(0);" class="label"> Test new features in tablets
                                        </a>
                                        <div class="time">02: 00 PM</div>
                                    </div>
                                    <div class="checkbox">
                                        <label class="check-box">
                                            <label class="ckbox">
                                                <input type="checkbox" />
                                                <span> </span>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="tasks">
                                    <div class="task-line teal">
                                        <a href="javascript:void(0);" class="label"> Design Evommerce </a>
                                        <div class="time">10: 00 PM</div>
                                    </div>
                                    <div class="checkbox">
                                        <label class="check-box">
                                            <label class="ckbox">
                                                <input type="checkbox" />
                                                <span> </span>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="tasks mb-0">
                                    <div class="task-line purple">
                                        <a href="javascript:void(0);" class="label"> Fix Validation Issues </a>
                                        <div class="time">12: 00 AM</div>
                                    </div>
                                    <div class="checkbox">
                                        <label class="check-box">
                                            <label class="ckbox">
                                                <input type="checkbox" />
                                                <span> </span>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex pagination wd-100p">
                                <a href="javascript:void(0);">Previous</a>
                                <a href="javascript:void(0);" class="ms-auto">Next</a>
                            </div>
                        </div>
                        <div class="card-body border-top border-bottom">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <a class="" href="">
                                        <i class="dropdown-icon mdi mdi-message-outline fs-20 m-0 leading-tight"> </i>
                                    </a>
                                    <div>Inbox</div>
                                </div>
                                <div class="col-4 text-center">
                                    <a class="" href="">
                                        <i class="dropdown-icon mdi mdi-tune fs-20 m-0 leading-tight"> </i>
                                    </a>
                                    <div>Settings</div>
                                </div>
                                <div class="col-4 text-center">
                                    <a class="" href="">
                                        <i class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"> </i>
                                    </a>
                                    <div>Sign out</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 652px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 438px;"></div>
                </div>
            </div>
            <!--/Sidebar-right-->
            <!-- Footer opened -->

            <div class="main-footer ht-45">


                <div class="container-fluid pd-t-0-f ht-100p">
                    <span>
                        Copyright © 2024 <a href="javascript:void(0);" class="text-primary"></a>. Designed with by <a
                            href="javascript:void(0);"> Kawika Technologies </a> All rights reserved.
                    </span>
                </div>
            </div>
            <!-- Footer closed -->
        </div>
        <!-- page closed -->
        <!--- Back-to-top --->
        <a href="#top" id="back-to-top" style="display: block;">
            <i class="las la-angle-double-up"> </i>
        </a>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/datepicker.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/ionicons.js') }}"></script>
        <script src="{{ asset('js/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('js/chart.flot.sampledata.js') }}"></script>
        <script src="{{ asset('js/eva-icons.min.js') }}"></script>
        <script src="{{ asset('js/moment.js') }}"></script>
        <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('js/p-scroll.js') }}"></script>
        <script src="{{ asset('js/sidemenu.js') }}"></script>
        <script src="{{ asset('js/sticky.js') }}"></script>
        <script src="{{ asset('js/sidebar.js') }}"></script>
        <script src="{{ asset('js/sidebar-custom.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/index.js') }}"></script>
        <script src="{{ asset('js/themecolor.js') }}"></script>
        <script src="{{ asset('js/swither-styles.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/switcher.js') }}"></script>
        <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

        <script>
            $(function() {
                $("#datepicker").datepicker();
                $("#to_datepicker").datepicker();
            });
            $(document).ready(function() {
                /*$('#example').DataTable(
                $()


                    	);*/
                $('#example1').DataTable();


            });
        </script>



        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Dilip Kumar (36) - Arogya kiranam </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                class="eva eva-close-outline header-icons">
                                <g data-name="Layer 2">
                                    <g data-name="close">
                                        <rect width="24" height="24" transform="rotate(180 12 12)"
                                            opacity="0"></rect>
                                        <path
                                            d="M13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29-4.3 4.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l4.29-4.3 4.29 4.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z">
                                        </path>
                                    </g>
                                </g>
                            </svg></button>
                    </div>
                    <div class="modal-body">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">

                            <tr>
                                <td>
                                    <div class="project-contain">
                                        <h6 class="mb-1 tx-13">Aadhar Id</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="image-grouped"> 986643456 </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-contain">
                                        <h6 class="mb-1 tx-13">Ration Card No:</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="image-grouped"> 986643456 </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-contain">
                                        <h6 class="mb-1 tx-13">Scheme Id</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="image-grouped"> 986643456 </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-contain">
                                        <h6 class="mb-1 tx-13">Email Id</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="image-grouped"> 986643456 </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="project-contain">
                                        <h6 class="mb-1 tx-13">Appoiment Date </h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="image-grouped"> 986643456 </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-contain">
                                        <h6 class="mb-1 tx-13">Aadhar Id</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="image-grouped"> 986643456 </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-contain">
                                        <h6 class="mb-1 tx-13">Provisional Diagnosis </h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="image-grouped"> 986643456 </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-contain">
                                        <h6 class="mb-1 tx-13"> Medicines </h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="image-grouped"> 986643456 </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-contain">
                                        <h6 class="mb-1 tx-13"> Miscellaneous </h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="image-grouped"> 986643456 </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-contain">
                                        <h6 class="mb-1 tx-13"> Amount for Provisional Diagnosis </h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="image-grouped"> 986643456 </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-contain">
                                        <h6 class="mb-1 tx-13"> Amount for Medicines </h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="image-grouped"> 986643456 </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-contain">
                                        <h6 class="mb-1 tx-13"> Amount for Miscellaneous </h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="image-grouped"> 986643456 </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-contain">
                                        <h6 class="mb-1 tx-13"> Miscellaneous </h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="image-grouped"> 986643456 </div>
                                </td>
                            </tr>



                            </tbody>

                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>




    </div>
    <div class="main-navbar-backdrop"></div>
</body>

</html>

<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

<script src="{{ asset('js/toastr.js') }}"></script>

<script>
    @if (auth()->check() && auth()->user()->role == 'User')
        @if (auth()->user()->bank_name == null && auth()->user()->account_no == null && auth()->user()->passbook == null)

            $(document).ready(function() {
                $('#user-modal').modal('show');
            });
        @endif
    @endif
</script>
<script type="text/javascript">
    function userUpdate() {
        var id = $('#requestId').val();
        var passbookInput = $("#passbook")[0];
        var passbookFile = passbookInput.files[0];
        var formData = new FormData($("#userForm")[0]); // Create FormData object from the form

        // Validate all required fields
        if (validateForm()) {
            // Add passbook to formData if it exists
            if (passbookFile) {
                formData.append('passbook', passbookFile);
            }
            formData.append('id', id);



            $.ajax({

                url: "{{ route('userBankDetails.update') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,


                success: function(response) {

                    toastr.success(response.success, 'Success!')
                    $('#user-modal').modal('hide');
                    $('#success_message').fadeIn().html(response.success);
                    setTimeout(function() {
                        $('#success_message').fadeOut("slow");
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    window.location.reload();

                }
            });
        }
    }

    function validateForm() {
        var isValid = true;

        // Reset error messages
        $('.error-message').html('');

        // Validate each required field
        $('#userForm [required]').each(function() {
            if (!$(this).val()) {
                isValid = false;
                var fieldName = $(this).attr('name');
                $('#error-' + fieldName).html(fieldName + ' is required.');
            }
        });

        // Display general error message in the #errorMessages div
        // $('#errorMessages').html(isValid ? '' : 'Please fill in all required fields.');

        return isValid;
    }
    $(document).ready(function() {
        $('#user-modal').modal({
            backdrop: 'static',
            keyboard: false
        })
        //     $.ajax({

        // 	  url: "{{ route('userData.status') }}",
        // 	  type: "POST",
        // 		  data: {

        // 			  "_token": "{{ csrf_token() }}"
        // 		  },
        // 	  success: function(response) {
        // 		//alert(response.user);
        // 		if(response.user =="user"){

        // 			$('#requestId').val(response.user_data._id);
        // 			//alert(response.data);
        // 			if(response.data == "not-exist"){
        // 				$('#user-modal').modal('show');
        // 			}
        // 			else{
        // 				$('#user-modal').modal('hide');
        // 			}
        // 		}
        // 		else{
        // 			$('#user-modal').modal('hide');
        // 		}


        // 	  }
        //   })

        $('.aminus').on('click', function() {
            //alert("aminus");
            let url = "{{ route('changeStatus') }}";
            window.location.href = url + "?status=aminus";
        });
        $('.aone').on('click', function() {
            //alert("aone");
            let url = "{{ route('changeStatus') }}";
            window.location.href = url + "?status=aone";
        });
        $('.aplus').on('click', function() {
            //alert("aplus");
            let url = "{{ route('changeStatus') }}";
            window.location.href = url + "?status=aplus";
        });
    });
</script>
