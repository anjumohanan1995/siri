@extends('layouts.home_app')

@section('content')
 
<body data-rsssl="1" class="inner page-template-default page page-id-1754 unselectable elementor-default elementor-kit-8 elementor-page elementor-page-1754" unselectable="on">


<main id="content" class="site-main post-1754 page type-page status-publish hentry">
<div class="page-content">
    <div data-elementor-type="wp-page" data-elementor-id="1754" class="elementor elementor-1754" data-elementor-settings='{"scroll_snap":"yes"}' data-elementor-post-type="page">
        <section
            data-id="abf0cc8"
            data-element_type="section"
            class="page1 elementor-section elementor-top-section elementor-element elementor-element-abf0cc8 elementor-section-full_width elementor-section-height-full elementor-section-stretched elementor-section-height-default elementor-section-items-middle nitro-stretch"
            data-settings=' '
             
        >
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
        <section
            data-id="43822f7"
            data-element_type="section"
            nitro-elementor-animation="animated fadeIn"
            class="page3 elementor-section elementor-top-section elementor-element elementor-element-43822f7 elementor-section-full_width elementor-section-height-full elementor-section-stretched elementor-section-height-default elementor-section-items-middle nitro-stretch animated fadeIn"
             > 

             <div class="row align-items-center">
              <div class="pq-icon-box-content p-5 w-80"> 
                  {!! @$approach->content1 !!}
                    </div>
                  </div>

            </section>
        
        <section
        data-id="43822f7"
        data-element_type="section"
        nitro-elementor-animation="animated fadeIn"
        class="elementor-section elementor-top-section elementor-element elementor-element-43822f7 elementor-section-full_width elementor-section-height-full elementor-section-stretched elementor-section-height-default elementor-section-items-middle nitro-stretch animated fadeIn"
          
    >

    @include('home.footer')
</section>

    </div>
    <div class="post-tags"></div>
</div>
</main>
</body>
 
 


@endsection
