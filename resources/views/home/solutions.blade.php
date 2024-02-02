@extends('layouts.home_app')

@section('content')




<div class="banner inner_banner">
    <img src="{{asset('images_home/inner_banner.png')}}" alt="" title="1"   >
  <h1>Solutions
                 </h1>

</div>
<!--Banner End-->

<!--About Us Start-->
<section class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="pq-section-title-box">
                    <span class="pq-section-sub-title">SIRI Electromotive</span>
                    <h4 class="pq-icon-box-title">
                        <a href="">We are experts in charging any battery using our range of proprietary chargers and
                            charger management software. 
                            </a>
                    </h4>
                </div>
                <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                  
                    <div class="pq-icon-box-content">
                       
                        <p class="pq-icon-box-description">We use our array of products and services to create and manage tailored solutions that are future ready for diverse clients, including EV manufacturers,charging operators, property owners, fleet operators, parking space aggregators,retail, hospitality, and energy storage companies.</p>
                    </div>
                </div>
                <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                    
                    <div class="pq-icon-box-content">
                       
                        <p class="pq-icon-box-description">We craft solutions tailored to your needs and budget, unlocking economic viability in EV charging business, whether you are an individual, society or a corporation.
                        </p>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <img src="{{asset('images_home/3.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>

@endsection