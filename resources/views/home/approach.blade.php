@extends('layouts.inner_app')

@section('content')



<div class="banner inner_banner">
    @if(@$approach->image !=null)
    <img src="{{ asset('Approach/'.@$approach->banner_image) }}" alt="" title="1">
    @else
    <img src="{{asset('images_home/inner_banner.png')}}" alt="" title="1"   >
    @endif
    
  <h1>{{ @$approach->title }}
                 </h1>

</div>
<!--Banner End-->

<!--About Us Start-->
<section class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 p-5">
                <div class="pq-section-title-box">
                    <span class="pq-section-sub-title">{{ @$approach->sub_title }}</span>
                     
                </div>
                <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                  
                {!! @$approach->content !!} 
                </div>
               
                
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                @if(@$approach->image !=null)
                <img src="{{ asset('Approach/'.@$approach->image) }}" alt="" title="1">
                @else
                <img src="{{asset('images_home/3.jpg')}}" alt="" >
                @endif
               
            </div>
        </div>
    </div>
</section>
<!--About Us End-->

 



@endsection
