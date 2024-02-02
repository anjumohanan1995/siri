
@extends('layouts.home_app')

@section('content')


<div class="pq-breadcrumb pq-bg-img-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h2>About Us</h2>
                    </div>
                    <div class="pq-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fas fa-home me-2"></i>Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb End-->

<!--About-Us Start-->
<section class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 order-2 order-xl-0 mt-4 mt-xl-0">
                <div class="pq-section-title-box ">
                    <span class="pq-section-sub-title">About Us</span>
                    <h5 class="pq-section-title">SIRI Electromotive crafts client centric solutions for charging and discharging commercial battery systems with a specific focus on EV charging</h5>
                    <p>Our AI powered proprietary charging technology and expertise encompasses provision of future ready features with complete interoperability across vehicle types and global protocols and yet, tailored for Indian operational conditions.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="pq-icon-box pq-style-6">
                            <div class="pq-icon">
                                <a href=""><i class="flaticon-electric-car-3"></i></a>
                            </div>
                            <div class="pq-icon-box-content">
                                <h4 class="pq-icon-box-title">
                                    <a href="">Energy Storage System</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pq-icon-box pq-style-6">
                            <div class="pq-icon">
                                <a href=""><i class="flaticon-electric-car-4"></i></a>
                            </div>
                            <div class="pq-icon-box-content">
                                <h4 class="pq-icon-box-title">
                                    <a href="">25 Years Of Experience</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Our mission is to be a significant participant in the creation of a safe, reliable and secure charging infrastructure in India and globally</p>
               
            </div>
            <div class="col-xl-6">
                <img src="{{ asset('images_home/4.jpg') }}" class="wow animated fadeInRight w-100" alt="">
            </div>
        </div>
    </div>
</section>
@endsection