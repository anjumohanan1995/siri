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
            <div class="col-lg-6 p-5"  style="padding-left: 7em !important">
                <div class="pq-breadcrumb-title">
                    <h1 class="text-white">{{ @$approach->title }}
                    </h1>
                </div>
            
                <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                


                 <div class="pq-icon-box-content ">
                    <div class="pq-section-title-box "> {!! @$approach->content !!} 
   
</div>
                      </div>
                </div>
               
                
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0 p-5" style="margin-top:7em !important">
                @if(@$approach->image !=null)
                <img src="{{ asset('Approach/'.@$approach->image) }}" alt="" title="1">
                @else
                <img src="{{asset('images_home/3.jpg')}}" alt="" >
                @endif
               
            </div>
        </div>


    </section>
   
<section class="page3">
    <div class="row align-items-center">
    <div class="pq-icon-box-content p-5 w-80"> 
        {!! @$approach->content1 !!}
          </div>
        </div>

</section>
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
