@extends('layouts.home_app')

@section('content')

<div class="banner inner_banner">
    @if(@$vertical->image !=null)
    <img src="{{ asset('vertical/'.@$vertical->image) }}" alt="" title="1">
    @else
    <img src="{{ asset('images_home/inner_banner.png') }}" alt="" title="1">
    @endif
    <h1>{{ @$vertical->title }}
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
                        <a href="">{{ @$vertical->sub_title }}
                        </a>
                    </h4>
                    {{-- <li>
                        Additional revenue stream: Generate extra income from charging services and display
                        advertisements.
                    </li>
                    <li>Value-added services: Offer convenient charging to employees and visitors, enhancing the
                        value of your property.
                    </li>
                    <li>Aesthetic Design: Enhance your brand and create a welcoming environment with stylish
                        charging stations that complement your building's architecture and landscape.</li>
                    <li>Renewable Power Integration: Harness the power of the sun and/or wind to charge your EV
                        sustainably and reduce reliance on the grid.</li> --}}
                        {!! @$vertical->content !!}
                </div>


               
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <img src="{{ asset('images/3.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>


@endsection