
@extends('layouts.home_app')

@section('content')
<div class="banner inner_banner">
    <img src="{{asset('images_home/inner_banner.png')}}" alt="" title="1"   >
  <h1>CMS Services
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
                   
                </div>
                <ol>
                    <li>Annual maintenance and support</li>
                    <li>White labeling
                        <li>Customized dashboards/analytics for monitoring, control and reporting</li>
                        <li>Migration into the next generation OCP Protocol</li>
                    </li>
                  </ol>
               
                
                
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <img src="{{asset('images_home/3.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection