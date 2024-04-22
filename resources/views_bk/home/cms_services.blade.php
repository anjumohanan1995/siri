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
                        <h2>CMS Services</h2>
                    </div>
                    <div class="pq-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fas fa-home me-2"></i>Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">CMS Services</li>
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
                       
                        <li>
                            Annual maintenance and support
                        </li>
                        
                        <li>White labeling

                        </li>
                       
                        <li>Customized dashboards/analytics for monitoring, control and reporting

                        </li>
                       
                        <li>Migration into the next generation OCP Protocol

                        </li>
                        
                    </div>
</div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <img src="{{ asset('images_home/4.jpg') }}" alt="">
                    </div>
    </section>
    <!--About Us End-->


@endsection