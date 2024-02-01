@extends('layouts.home_app')

@section('content')




<div class="pq-breadcrumb pq-bg-img-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="pq-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fas fa-home me-2"></i>Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb End-->

<!--Contact Start-->
<section class="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="pq-icon-box pq-style-7">
                    <div class="pq-icon">
                        <a href="contact_us.html" class="animation-grow"><i class="ion ion-ios-location"></i></a>
                    </div>
                    <div class="pq-icon-box-content">
                        <h4 class="pq-icon-box-title">
                            <a href="contact_us">Our Location</a>
                        </h4>
                        <p class="pq-icon-box-description">51, ALKA, 154 Major Parmeshwaran Road, Wadala (West), Mumbai - 400031
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                <div class="pq-icon-box pq-style-7">
                    <div class="pq-icon">
                        <a href="contact_us.html" class="animation-grow"><i class="ion ion-android-call"></i></a>
                    </div>
                    <div class="pq-icon-box-content">
                        <h4 class="pq-icon-box-title">
                            <a href="contact_us">Our Contact</a>
                        </h4>
                        <p class="pq-icon-box-description">+91 02027464855<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                <div class="pq-icon-box pq-style-7">
                    <div class="pq-icon">
                        <a href="contact_us.html" class="animation-grow"><i class="ion ion-ios-email"></i></a>
                    </div>
                    <div class="pq-icon-box-content">
                        <h4 class="pq-icon-box-title">
                            <a href="contact-us">Our Contact</a>
                        </h4>
                        <p class="pq-icon-box-description"> reachus@siriem.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection