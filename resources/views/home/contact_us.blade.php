@extends('layouts.home_app')

@section('content')




<div class="pq-breadcrumb pq-bg-img-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h2>{{ @$contact->heading }}</h2>
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
                        <img src="{{ asset('dynamic-pages/' . @$contact->image_one) }}"/>
                    </div>
                    <div class="pq-icon-box-content">
                        <h4 class="pq-icon-box-title">
                            <a href="contact_us">{{ @$contact->title_one }}</a>
                        </h4>
                        <p class="pq-icon-box-description">{!! @$contact->content !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pq-icon-box pq-style-7">
                    <div class="pq-icon">
                        <a href="" class="animation-grow"><img src="{{ asset('dynamic-pages/' . @$contact->image_two) }}"/></a>
                    </div>
                    <div class="pq-icon-box-content">
                        <h4 class="pq-icon-box-title">
                            <a href="contact_us">{{ @$contact->title_one }}</a>
                        </h4>
                        <p class="pq-icon-box-description">{!! @$contact->content !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pq-icon-box pq-style-7">
                    <div class="pq-icon">
                        <a href="" class="animation-grow"><img src="{{ asset('dynamic-pages/' . @$contact->image_three) }}"/></a>
                    </div>
                    <div class="pq-icon-box-content">
                        <h4 class="pq-icon-box-title">
                            <a href="contact_us">{{ @$contact->title_one }}</a>
                        </h4>
                        <p class="pq-icon-box-description">{!! @$contact->content !!}
                        </p>
                    </div>
                </div>
            </div>
          
       
        </div>
    </div>
</section>
@endsection