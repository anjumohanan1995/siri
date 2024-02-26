@extends('layouts.inner_app')

@section('content')
 


<div id="container">
 
 
<section class="about-us page2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 p-5 " style="padding-left: 7em !important">
                <div class="pq-section-title-box">
                    <h1 class="text-white">{{ @$vertical->title }}
                    </h1>
                    <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                  
                        <div class="pq-icon-box-content ">
                          <h5 class="pq-section-title  text-white">  {{ @$vertical->sub_title }}</h5>
                              </div>
                    </div>
                    
                    
                        
                </div>


               
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0 p-5" style="margin-top:7em !important">
                @if(@$vertical->image !=null)
                <img src="{{ asset('vertical/'.@$vertical->image) }}" alt="" title="1">
                @else
                <img src="{{ asset('images_home/3.jpg') }}" alt="" title="1">
                @endif
              
            </div>
        </div>
    </div>
</section> 
    <section class="page3">  <div class="container">{!! @$vertical->content !!}   </div></section>
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