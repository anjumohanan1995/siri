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
                        <h2>{{ @$content->title_one }}</h2>
                    </div>
                    <div class="pq-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fas fa-home me-2"></i>Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">{{ @$content->title_one }}</li>
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
                            {!! @$content->content_one !!}
                              </div>
                    </div>
                   
                    
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img src="{{ asset('dynamic-pages/' . @$content->image_one) }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--About Us End-->


@endsection