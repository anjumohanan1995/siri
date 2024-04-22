@extends('layouts.home_app')

@section('content')


</head>
<body data-rsssl="1" class="page-template-default page page-id-1754 unselectable elementor-default elementor-kit-8 elementor-page elementor-page-1754" unselectable="on">


<main id="content" class="site-main post-1754 page type-page status-publish hentry">
<div class="page-content">
    <div data-elementor-type="wp-page" data-elementor-id="1754" class="elementor elementor-1754" data-elementor-settings='{"scroll_snap":"yes"}' data-elementor-post-type="page">
        <section
            data-id="abf0cc8"
            data-element_type="section"
            class="first-section elementor-section elementor-top-section elementor-element elementor-element-abf0cc8 elementor-section-full_width elementor-section-height-full elementor-section-stretched elementor-section-height-default elementor-section-items-middle nitro-stretch"
            data-settings=' '> <div class="banner">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" style="background:url({{ asset('images_home/banner.png')}}) center top no-repeat #2f2f2f">
        <img src="{{ asset('images_home/dummy.png') }}" alt="">
        </div>
        <div class="carousel-item" style="background:url({{ asset('images_home/banner3.png')}}) center top no-repeat #2f2f2f ">
        <img src="{{ asset('images_home/dummy.png') }}" alt="">
        </div>
        <div class="carousel-item" style="background:url({{ asset('images_home/banner1.png')}}) center top no-repeat #2f2f2f ">
        <img src="{{ asset('images_home/dummy.png') }}" alt="">
        </div>
        <div class="carousel-item" style="background:url({{ asset('images_home/banner2.png')}}) center top no-repeat #2f2f2f ">
        <img src="{{ asset('images_home/dummy.png') }}" alt="">
        </div>
       
        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
        </div>
        </section>
        <section
            data-id="43822f7"
            data-element_type="section"
            nitro-elementor-animation="animated fadeIn"
            class="elementor-section elementor-top-section elementor-element elementor-element-43822f7 elementor-section-full_width elementor-section-height-full elementor-section-stretched elementor-section-height-default elementor-section-items-middle nitro-stretch animated fadeIn"
             > 
             <div class="about-us">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 p-5 pl-7 pt-8" >
                            <div class="pq-icon-box-content" style="width: 100%"> 
                                {{-- <span class="pq-section-sub-title">About Us</span> --}}
                                <p class="pq-section-title"> <b>{!! @$data->panel_two_description !!} </b></p>
                               
                               
                                    @foreach ($panel2_data as $panel2)
                                   
                                       <b>  {!! @$panel2->title !!}
  
                                             
                                       {!! @$panel2->content !!}</b>
                                        
                                      
                                    @endforeach
                                    
                              
                                <div class="clear"></div>
                           
                             </div>
                           
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0 p-5" style="margin-top:3em !important">
                            <img src="{{ asset('homecontent/panel_two/'.@$data->panel_two_image) }}" alt="">
                        </div>
                    </div>
                </div>
              </div>
            
       
         
        </section>
        <section
            data-id="c225a6a"
            data-element_type="section"
            nitro-elementor-animation="animated fadeIn"
            class=" pq-bg-grey elementor-section elementor-top-section elementor-element elementor-element-c225a6a elementor-section-full_width elementor-section-height-full elementor-section-stretched elementor-section-height-default elementor-section-items-middle nitro-stretch animated fadeIn"
            
            style=""
        >
        <div class="service">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="pq-section-title-box text-center" style="padding-bottom: 0">
                           
                            <h5 class="pq-section-title">{{ @$data->panel_three_title }}<br> {{ @$data->panel_three_subtitle }}
                          </h5>
                           
                        </div>
                    </div>
                   
                    <!-- <div class="pq-accordion-block ">
                        <div class="accordion w-50" id="accordionPanelsStayOpenExample">
                    @php $i=1; @endphp
                    @foreach ($panel3_data as $panel3)


                        <div class="accordion" id="accordionExample">
                         <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{$i}}">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}" aria-expanded="false" aria-controls="collapse{{$i}}">
                    {{ @$panel3->title }}
                    </button>
                    </h2>
                    <div id="collapse{{$i}}" class="accordion-collapse collapse" aria-labelledby="heading{{$i}}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    {{ @$panel3->content }}
                    </div>
                    </div>
                    </div>

                    </div>



 

                        @php $i++; @endphp
                    @endforeach
                    
           </div>         
                     
                    </div> -->


                    <div class="accordion w-50" id="accordionExample">
<div class="accordion-item">
<h2 class="accordion-header" id="headingOne"><button aria-controls="collapseOne" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseOne" data-bs-toggle="collapse" type="button">Pioneering Innovation</button></h2>

<div aria-labelledby="headingOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="collapseOne" style="">
<div class="accordion-body">We are at the forefront of smart charging technology, constantly pushing the boundaries with proprietary AI algorithms and industry-leading advancements. We are not keeping up; we are leading the way.</div>
</div>
</div>

<div class="accordion-item">
<h2 class="accordion-header" id="headingTwo"><button aria-controls="collapseTwo" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseTwo" data-bs-toggle="collapse" type="button">Simplifying the Transition</button></h2>

<div aria-labelledby="headingTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="collapseTwo" style="">
<div class="accordion-body">We understand that entering the business of charging can be daunting. That is why we offer expert guidance and implement custom built solutions, making the journey towards electrification smooth and efficient.</div>
</div>
</div>

<div class="accordion-item">
<h2 class="accordion-header" id="headingThree"><button aria-controls="collapseThree" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseThree" data-bs-toggle="collapse" type="button">Intelligent Deployment and Scaling</button></h2>

<div aria-labelledby="headingThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="collapseThree" style="">
<div class="accordion-body"> We not only install chargers; we design and implement the entire strategic charging infrastructure that can adapt and grow as your needs evolve. We help you deploy rapidly and scale intelligently, ensuring your investment keeps pace with the electric future.
</div>
</div>
</div>

<div class="accordion-item">
<h2 class="accordion-header" id="heading4"><button aria-controls="collapse4" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapse4" data-bs-toggle="collapse" type="button">Maximizing Value</button></h2>

<div aria-labelledby="heading4" class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="collapse4" style="">
<div class="accordion-body">We are partners in maximizing the value of your energy assets. Our solutions extend the life of your batteries, optimize energy usage, and minimize downtime, ensuring you get the most out of every watt.</div>
</div>
</div>

 
</div>



                    
                </div>
            </div>
          </div>
        </section>
        <section
            data-id="43822f7"
            data-element_type="section"
            nitro-elementor-animation="animated fadeIn"
            class="elementor-section elementor-top-section elementor-element elementor-element-43822f7 elementor-section-full_width elementor-section-height-full elementor-section-stretched elementor-section-height-default elementor-section-items-middle nitro-stretch animated fadeIn"
              
        >
           
      <div class="whyus py-0 pq-bg-img-6 pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 p-0">
                    <img src="{{ asset('homecontent/panel_four/'.@$data->panel_four_image) }}" class="" alt="">
                </div>
                <div class="col-lg-4 pq-bg-dark pq-dark-section-side-right p-130-45">
                    <div class="pq-section-title-box">
                        <span class="pq-section-sub-title pq-text-white">{{ @$data->panel_four_title }}</span>
                        <p class="pq-section-description pq-text-white">{!! @$data->panel_four_description !!} </p>
                    </div>
                   
                </div>
            </div>
        </div>
      </div>
         
        </section>
        <section
            data-id="9a1022d"
            data-element_type="section"
            nitro-elementor-animation="animated fadeIn"
            class="feature elementor-section elementor-top-section elementor-element elementor-element-9a1022d elementor-section-full_width elementor-section-height-full elementor-section-stretched elementor-section-height-default elementor-section-items-middle nitro-stretch animated fadeIn"
             
            
        >
        <div class="pq-section-title-box ">
        <img src="{{ asset('homecontent/car.jpg') }}" alt="">

              <div class="video_text">
            <span class="pq-section-sub-title">{{ @$data->panel_five_title }}</span>
            {!! @$data->panel_five_description !!}
            </div>
        </section>
        <section
            data-id="43822f7"
            data-element_type="section"
            nitro-elementor-animation="animated fadeIn"
            class="car_bg current elementor-section elementor-top-section elementor-element elementor-element-43822f7 elementor-section-full_width elementor-section-height-full elementor-section-stretched elementor-section-height-default elementor-section-items-middle nitro-stretch animated fadeIn"
        
        >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-5">
                    <div class="pq-section-title-box text-center">
                        <span class="pq-section-sub-title"> {{ @$data->panel_six_title }}</span>
                        <h5 class="pq-section-title">{!! @$data->panel_six_description !!}</h5>
                         
                    </div>
                </div>
    
              
            </div>
        </div>
        </section>
        <section
            data-id="7a7a5cb"
            data-element_type="section"
            class="bg_section download-app elementor-section elementor-top-section elementor-element elementor-element-7a7a5cb elementor-section-stretched elementor-section-boxed elementor-section-height-default nitro-stretch nitro-offscreen"
             
         
            
        >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-0 mt-4 mt-lg-0 p-5" >
                    <div class="pq-section-title-box pq-mb-30 pt-5 mt-5">
                        <span class="pq-section-sub-title">{{ @$data->panel_seven_title }}</span>
                        {!! @$data->panel_seven_description !!}
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('homecontent/panel_seven/'.@$data->panel_seven_image) }}" alt="">
                    <div class="pq-heading-box">
                        <h3 class="pq-text-white">
                            <a href="{{ @$data->panel_seven_link }}">{{ @$data->panel_seven_link_label }}</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section
        data-id="43822f7"
        data-element_type="section"
        nitro-elementor-animation="animated fadeIn"
        class="footer elementor-section elementor-top-section elementor-element elementor-element-43822f7 elementor-section-full_width elementor-section-height-full elementor-section-stretched elementor-section-height-default elementor-section-items-middle nitro-stretch animated fadeIn"
          
    >

    @include('home.footer')
</section>

    </div>
    <div class="post-tags"></div>
</div>
</main>
</body>

@endsection
