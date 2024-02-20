@extends('layouts.inner_app')

@section('content')

 
<!--Banner End-->

<!--About Us Start-->
<!--About Us Start-->

<div class="pq-breadcrumb pq-bg-img-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h2>Solutions</h2>
                    </div>
                    <div class="pq-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fas fa-home me-2"></i>Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Solutions</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="about-us">
    <div class="container">
        <div class="row align-items-center">
<div class="col-lg-6">
                    <div class="pq-section-title-box">
                        <span class="pq-section-sub-title">SIRI Electromotive</span>
                      <h4>We are experts in creating and managing battery charging solutions using our range of proprietary chargers and charger management software. </h4>
                  <p>
                    We use our array of products and services to create and manage tailored solutions that are future ready for diverse clients, including:

EV manufacturers, charging operators, property owners, fleet operators, parking space aggregators, retail, hospitality, and energy storage companies.

We craft solutions tailored to your needs and budget, unlocking economic viability in EV charging business, whether you are an individual, society or a corporation.

                  </p>
                    </div>
</div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <img src="{{ asset('images_home/4.jpg') }}" alt="">
                    </div>
    </section>
    <!--About Us End-->


@endsection