@extends('layouts.inner_app')

@section('content')

<div id="container">
 

<!--Contact Start-->
<section class="contact">
    <div class="container">
        <div class="row justify-content-center p-5">
           
            <div class="col-lg-4 col-md-6">
                <div class="pq-icon-box pq-style-7">
                    <div class="pq-icon">
                        <img src="{{ asset('dynamic-pages/' . @$contact->image_one) }}"/>
                    </div>
                    <div class="pq-icon-box-content">
                        <h4 class="pq-icon-box-title">
                            <a href="contact_us">{{ @$contact->title_one }}</a>
                        </h4>
                        <p class="pq-icon-box-description">{!! @$contact->content_one !!}
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
                            <a href="contact_us">{{ @$contact->title_two }}</a>
                        </h4>
                        <p class="pq-icon-box-description">{!! @$contact->content_two !!}
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
                            <a href="contact_us">{{ @$contact->title_three }}</a>
                        </h4>
                        <p class="pq-icon-box-description">{!! @$contact->content_three !!}
                        </p>
                    </div>
                </div>
            </div>
          
       
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