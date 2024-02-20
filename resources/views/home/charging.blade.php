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
                        <h2>Charging Management System</h2>
                    </div>
                    <div class="pq-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fas fa-home me-2"></i>Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Charging Management System</li>
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
                <div class="col-lg-6 p-5">
                 
                    <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                      
                        <div class="pq-icon-box-content">
                        <h4>Our Charging Management System (CMS) is a one stop solution for charging any EV through any standard charger whether it is an AC or a DC charger.
                            It facilitates our clients to focus on business growth without worrying about the backend infrastructure. </h4>    
                            <ul>
                                <li>Easy and simple integration </li>
<li> Smooth migration from existing OCCP 1.6 to future OCCP 2.0.1 protocols</li>
<li>Proactive Issue Monitoring</li>
<li>Custom built dashboards for monitoring and control</li>
<li>Smart Customer Analytics</li>
<li>Smart Load Management</li>
<li>Transparent and multi-modal payment architecture</li>
<li>Firmware and software updates</li>
<li>Extra customized features on request</li>
                            </ul>
                          
                        </div>
                    </div>
                   
                    
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img src="{{ asset('images_home/4.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--About Us End-->


@endsection