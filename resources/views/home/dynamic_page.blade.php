@extends('layouts.inner_app')

@section('content')
<style>
    .tp-rs-img.rs-lazyload {
     top: -150px;
   }
   #slider-2-slide-2-layer-0 {
     top: -100px;
   }
   #rev_slider_2_1 {
     height: 122vh !important;
   }
   </style>
<div id="container">
    <section class="page1">
        
        <div class="row align-items-center">
            <div class="col-lg-6 p-5 pl-7">
             
                <div class="pq-breadcrumb-title">
                    <h2 class="text-white">{{ @$content->title_one }}</h2>
                </div>
                <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                  
                    <div class="pq-icon-box-content ">
                        {!! @$content->content_one !!}
                          </div>
                </div>
               
                
            </div>
            <div class="col-lg-5 mt-6 p-5">
                <img src="{{ asset('dynamic-pages/' . @$content->image_one) }}" alt="">
            </div>
        </div>

</section>
   
<section class="page4"><div class="row align-items-center">
  <div class="col-lg-5   p-5 mt-6" >
    <img src="{{ asset('dynamic-pages/' . @$content->image_two) }}" alt="">
</div>
  <div class="col-lg-7 p-5 ">
   
      <div class="pq-breadcrumb-title">
          <h2 class="text-white">{{ @$content->title_two }}</h2>
      </div>
      <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
        
          <div class="pq-icon-box-content ">
              {!! @$content->content_two !!}
                </div>
      </div>
     
      
  </div>
 
</div></section>
@if(@$content->content_three !== null)
<section class="page6"><div class="row align-items-center">
    <div class="col-lg-5   p-5 mt-6">
      <img src="{{ asset('dynamic-pages/' . @$content->image_three) }}" alt="">
  </div>
    <div class="col-lg-7 p-5 ">
     
        <div class="pq-breadcrumb-title">
            <h2 class="text-white">{{ @$content->title_three }}</h2>
        </div>
        <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
          
            <div class="pq-icon-box-content ">
                {!! @$content->content_three !!}
                  </div>
        </div>
       
        
    </div>
   
  </div></section>
  @endif
<section class="page5">   
    @include('home.footer')
</section>

  </div>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js" ></script>
  <script src="{{ asset('js_home/pageScroller.js') }}"></script>
  
  
  <script>
    $('#container').pageScroller();
  </script>
   
@endsection