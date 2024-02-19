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

 

<!--Whyus Start-->
{{-- <section class="whyus py-0 pq-bg-img-6"> --}}
    <section class="whyus py-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 p-0">
                @if(@$approach->image1 !=null)
                <img src="{{ asset('Approach/'.@$approach->image1) }}"   alt="" title="1">
                @else
                <img src="rev/whyus.jpg" class="d-xl-none" alt="">
                @endif
               
            </div>
            <div class="col-lg-6 pq-bg-dark pq-dark-section-side-right p-130-45">
                <div class="pq-section-title-box"> 
                    <h5 class="pq-section-title pq-text-white">{{ @$approach->title1 }}</h5>
                    <p class="pq-section-description pq-text-white">{!! @$approach->content1 !!}  </p>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--Whyus End-->

<!--Feature Start-->
<section class="feature pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="pq-section-title-box text-center mb-0">
                 
                    <h5 class="pq-section-title">{{ @$approach->title2 }}</h5>
                    <p class="pq-section-description">{!! @$approach->content2 !!}
                    </p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="pq-fancy-box pq-fancybox-2">
                   
                    <div class="pq-fancybox-info">
                        {{-- <h4 class="pq-fancy-box-title text-center">Ready to turbo-charge your electric future? Contact SIRI Electromotive today.</h4>
                        --}}
                         
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</section>



@endsection