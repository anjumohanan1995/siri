@extends('layouts.home_app')

@section('content')

<body data-rsssl="1" class="page-template-default page page-id-1754 unselectable elementor-default elementor-kit-8 elementor-page elementor-page-1754" unselectable="on">


    <main id="content" class="site-main post-1754 page type-page status-publish hentry">
    <div class="page-content">
        <div data-elementor-type="wp-page" data-elementor-id="1754" class="elementor elementor-1754" data-elementor-settings='{"scroll_snap":"yes"}' data-elementor-post-type="page">
            <section
                data-id="abf0cc8"
                data-element_type="section"
                class="pq-bg-grey elementor-section elementor-top-section elementor-element elementor-element-abf0cc8 elementor-section-full_width elementor-section-height-full elementor-section-stretched elementor-section-height-default elementor-section-items-middle nitro-stretch"
                data-settings=' '
                 
            >
            <div class="row">
                <div class="col-xl-6 p-xl-0">
                    <div class="pq-form-box ">
                        <div class="pq-section-title-box pq-mb-15">
                            <span class="pq-section-sub-title">Contact us</span>
                            <h5 class="pq-section-title">Request A Quote</h5>
                        </div>
                        <form class="contact-form pq-applyform" novalidate="">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" id="first-name" class="pq-bg-white name-field" placeholder="Your Name">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" id="e-mail" class="pq-bg-white e-mail-field" placeholder="Email">
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <select class="pq-bg-white" id="query" aria-required="true" aria-invalid="false" name="selected-query"><option value="General Query">General Query</option><option value="Investor Relations">Investor Relations</option><option value="Media Relations">Media Relations</option><option value="Job Related">Job Related</option><option value="Pre-Order">Pre-Order</option><option value="Motor Sample">Motor Sample</option></select>
                                </div>
                                
                                <div class="col-lg-12">
                                    <textarea id="message" cols="30" rows="4" placeholder="Your Message" class="pq-bg-white"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <a class="pq-button form-btn">
                                        <div class="pq-button-block">
                                            <span class="pq-button-text">Send</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 m-5">
                    <div class="pq-icon-box pq-style-7 p-5">
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