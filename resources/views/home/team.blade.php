@extends('layouts.home_app')

@section('content')
<div class="banner inner_banner">
    <img src="{{ asset('images_home/inner_banner.png') }}" alt="" title="1"   >
  <h1>Team
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
                         </h4>
                </div>
             
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <img src="{{ asset('images_home/3.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>

@endsection