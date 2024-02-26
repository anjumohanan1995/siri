@extends('layouts.inner_app')

@section('content')

<div id="container">

    <section class="page1">
        <div class="row align-items-center">
            <div class="col-lg-6 p-5"  style="padding-left: 7em !important">
                <div class="pq-breadcrumb-title">
                    <h1 class="text-white">{{ @$innovation->title }}
                    </h1>
                </div>
            
                <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                


                 <div class="pq-icon-box-content ">
                    <div class="pq-section-title-box "> {!! @$innovation->content !!}
   
</div>
                      </div>
                </div>
               
                
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0 p-5" style="margin-top:7em !important">
                @if(@$approach->image !=null)
                <img src="{{asset('images_home/3.jpg')}}" alt="" >
                @else
                <img src="{{asset('images_home/3.jpg')}}" alt="" >
                @endif
               
            </div>
        </div>


    </section>


    <!--About Us End-->
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