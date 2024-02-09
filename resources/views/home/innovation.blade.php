@extends('layouts.home_app')

@section('content')

<div class="banner inner_banner">
    <img src="{{ asset('images_home/inner_banner.png') }}" alt="" title="1">
    <h1>{{ @$innovation->title }}
    </h1>

</div>
<!--Banner End-->

<!--About Us Start-->
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
                    <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                      
                        <div class="pq-icon-box-content">
                            {!! @$innovation->content !!}
                              </div>
                    </div>
                   
                    
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img src="{{ asset('innovation/' . @$innovation->image) }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--About Us End-->


@endsection