@extends('layouts.home_app')

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
  .page1 { background: #86BB45; }
  .page2 { background: #ffffff; }
  .page3 { background: #111111; }
  .page4 { background: #f7f9fa; }
  .page5 { background: #ffffff; }
  section { height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; } 
</style>
<div id="container">
    <section class="page1">
  <!-- Start Slider -->
  <div class="banner">
    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_2_1_wrapper" data-alias="home-1" data-source="gallery"
        style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_2_1" data-version="6.5.15">
            <rs-slides>
                <rs-slide style="position: absolute;" data-key="rs-2" data-title="Slide" data-anim="ms:600;"
                    data-in="o:0;" data-out="a:false;">
                    <img src="{{asset('rev/dummy.png')}}" alt="" title="1" width="1920" height="665"
                        class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{asset('rev/1.jpg')}}" data-no-retina>
                    <!--
                        --><rs-layer id="slider-2-slide-2-layer-0" data-type="shape" data-rsp_ch="on" data-xy="x:c;y:b;"
                        data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                        data-dim="w:1372px,168px,169px,968px;h:140px,67px,40px,40px;minw:0px,none,none,none;"
                        data-frame_0="y:0,39,29,17;" data-frame_1="st:500;sp:500;" data-frame_999="o:0;st:w;"
                        style="z-index:11;background-color:#86bb45;">
                    </rs-layer><!--

                        --><rs-layer id="slider-2-slide-2-layer-1" class="pq-title-text" data-type="text" data-color="#86bb45"
                        data-rsp_ch="on" data-xy="x:c;yo:250px,200px,180px,80px;"
                        data-text="w:normal;s:82,64,62,48;l:90,70,70,56;fw:500;a:center;"
                        data-frame_0="y:50,39,29,17;" data-frame_1="st:800;sp:1000;" data-frame_999="o:0;st:w;"
                        style="z-index:9;">Charging
                    </rs-layer><!--

                        --><rs-layer id="slider-2-slide-2-layer-2" data-type="image" data-rsp_ch="on" data-xy="x:c;y:b;yo:0,0,0,1px;"
                        data-text="w:normal;s:220,15,11,6;l:10,19,14,8;"
                        data-dim="w:1000px,900px,780px,450px;h:390px,350px,304px,175px;"
                        data-frame_0="y:150,139,129,17;" data-frame_1="st:1800;sp:1000;" data-frame_999="o:0;st:w;"
                        style="z-index:12;"><img src="{{asset('rev/dummy.png')}}" alt="" class="tp-rs-img rs-lazyload"
                            width="1402" height="546" data-lazyload="{{asset('rev/1.png')}}" data-no-retina>
                    </rs-layer><!--

                        --><rs-layer id="slider-2-slide-2-layer-3" class="pq-title-text" data-type="text" data-rsp_ch="on"
                        data-xy="x:c;xo:0,30px,0,0;yo:330px,180px,160px,140px;"
                        data-text="w:normal;s:82,64,62,48;l:90,70,70,56;fw:500;a:center;"
                        data-frame_0="y:100,39,29,17;" data-frame_1="st:1000;sp:1000;" data-frame_999="o:0;st:w;"
                        style="z-index:8;">Points for Your Car
                    </rs-layer><!--

                        --><a id="slider-2-slide-2-layer-4" class="rs-layer pq-button pq-body-text rev-btn"
                        href="dc-charger-services.html" target="_self" data-type="button" data-rsp_ch="on"
                        data-xy="x:c;yo:430px,340px,260px,210px;" data-text="w:normal;s:18,14,10,6;l:30,39,29,17;"
                        data-dim="minh:0px,none,none,none;" data-padding="r:20,20,20,15;l:20,20,20,15;"
                        data-border="bor:5px,5px,5px,5px;" data-frame_0="y:50,39,29,17;"
                        data-frame_1="st:1400;sp:1000;" data-frame_999="o:0;st:w;"
                        data-frame_hover="bgc:#86bb45;bor:5px,5px,5px,5px;sp:50;e:power1.inOut;bri:100%;"
                        style="z-index:13;background-color:#86bb45;">
                        <div class="pq-button-block"><span class="pq-button-line-left"></span><span
                                class="pq-button-text">Read More</span><span class="pq-button-line-right"></span><i
                                class="ion ion-android-arrow-dropright"></i></div>
                    </a><!--

                       
--> </rs-slide>
            </rs-slides>
        </rs-module>
    </rs-module-wrap>
</div>
<!--Banner End-->

    </section>

<section class="page2">
  <div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 p-5" style="padding-top: 8em;padding-left: 7em !important">
                <div class="pq-section-title-box"> 
                    {{-- <span class="pq-section-sub-title">About Us</span> --}}
                    <h4 class="pq-section-title">At SIRI Electromotive, we believe the future is electric. We actively participate in unlocking the full potential of clean energy, thereby building a sustainable future, and empowering everyone to participate in the transition.</h4>
                    <p class="pq-section-description">With our revolutionary AI-powered charging technology, we build chargers, and we craft smart solutions that seamlessly work with any battery, no matter its complexity.
                    </p>
                </div>
                <div class="pq-icon-box pq-style-4 mt-4">
                    <div class="pq-icon">
                        <a href=""><i class="flaticon-electric-car-4"></i></a>
                    </div>
                    <div class="pq-icon-box-content">
                        <h5 class="pq-icon-box-title">
                            <a href="">Our hardware, firmware, and AI-powered software work together in perfect harmony, delivering unmatched performance, optimized efficiency, and unparalleled reliability.
                            </a>
                        </h5>
                           </div>
                </div>
                 
               
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0 p-5" style="margin-top:3em !important">
                <img src="{{asset('images_home/3.jpg')}}" alt="">
            </div>
        </div>
    </div>
  </div>


  
</section>
    <section class="page3"> <div class="service pq-bg-grey">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-12">
                  <div class="pq-section-title-box text-center" style="padding-bottom: 0">
                     
                      <h5 class="pq-section-title">We understand that every company's journey towards electrification is unique. That is why we tailor our solutions to meet the specific needs of each industry vertical.
                    </h5>
                     
                  </div>
              </div>
              <div class="col-lg-12 text-center mb-3">
                <p class="charge">  <a   class="pq-text-primary">Take A
                  And here is how we make the difference:</a></p>
            </div>
              <div class="col-lg-4 col-md-6">
                  <div class="pq-fancy-box pq-fancybox-1">
                      <div class="pq-fancy-media">
                          <h5 class="pq-fancy-box-title">Pioneering Innovation</h5>
                          <i class=" flaticon-electric-car"></i>
                      </div>
                      <div class="pq-fancybox-info">
                          <p class="pq-fancybox-description">We are at the forefront of smart charging technology, constantly pushing the boundaries with proprietary AI algorithms and industry-leading advancements. We are not keeping up; we are leading the way.</p>
                         
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                  <div class="pq-fancy-box pq-fancybox-1 text-left active">
                      <div class="pq-fancy-media">
                          <h5 class="pq-fancy-box-title">Simplifying the Transition</h5>
                          <i class="flaticon-charging-battery-1"></i>
                      </div>
                      <div class="pq-fancybox-info">
                          <p class="pq-fancybox-description">We understand that entering the business of charging can be daunting. That is why we offer expert guidance and implement custom-built solutions, making the journey towards electrification smooth and efficient.</p>
                           
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                  <div class="pq-fancy-box pq-fancybox-1 ">
                      <div class="pq-fancy-media">
                          <h5 class="pq-fancy-box-title">Intelligent Deployment and Scaling</h5>
                          <i class="flaticon-charger"></i>
                      </div>
                      <div class="pq-fancybox-info">
                          <p class="pq-fancybox-description">We not only install chargers; we design and implement the entire strategic charging infrastructure that can adapt and grow as your needs evolve. We help you deploy rapidly and scale intelligently, ensuring your investment keeps pace with the electric future.</p>
                          
                      </div>
                  </div>
              </div>
              
          </div>
      </div>
    </div></section>







    <section class="page4">
      
      
      <div class="whyus py-0 pq-bg-img-6 pt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 p-0">
                <img src="{{asset('rev/whyus.jpg')}}" class="" alt="">
            </div>
            <div class="col-lg-4 pq-bg-dark pq-dark-section-side-right p-130-45">
                <div class="pq-section-title-box">
                    <span class="pq-section-sub-title pq-text-white">Our Approach</span>
                    <p class="pq-section-description pq-text-white">We focus on creating appropriate solutions for charging EVs and other Storage Battery Systems of any size and complexity. As your partner, we also maintain and support the charging infrastructure for you as per your needs. </p>
                </div>
               
            </div>
        </div>
    </div>
  </div></section>

  <section class="feature">
    
                <div class="pq-section-title-box text-center">
                    <video width="100%"  autoplay muted loop>
                        <source src="{{asset('images_home/Quench Banner.mp4.mp4')}}" type="video/mp4">
                        <source src="{{asset('images_home/Quench Banner.mp4.ogg')}}" type="video/ogg">
                        Your browser does not support HTML video.
                      </video>

                      <div class="video_text">
                    <span class="pq-section-sub-title">Our Offerings</span>
                    <h5 class="pq-section-title">We provide a range of chargers both AC and DC Fast Chargers suitable for all kinds of electric vehicles. Our Charging Management System (CMS) provides seamless integration with ours as well as chargers from other manufacturers.</h5>
                    <p >  We also provide turnkey services to examine feasibility, install, commission and maintain the charging solutions that we create for you.
                        Our consulting services encompass OEM consulting on onboard chargers, Battery system design, etc. and Strategic Charging Advisory</p>
                    </div>
           
</section>

<section class="pq-bg-grey car_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-5">
                <div class="pq-section-title-box text-center">
                    <span class="pq-section-sub-title"> Verticals:</span>
                    <h5 class="pq-section-title">Whether you are an EV manufacturer pushing the boundaries of performance, a forward-thinking fleet operator seeking operational excellence, a sustainability-focused property aiming for energy independence, or an energy storage provider maximizing the value of your batteries, we have the expertise and technology to help you achieve your goals.</h5>
                     
                </div>
            </div>

          
        </div>
    </div>
</section>
 

<section class="download-app">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-0 mt-4 mt-lg-0 p-5" >
                <div class="pq-section-title-box pq-mb-30 pt-5 mt-5">
                    <span class="pq-section-sub-title">Join us on the journey:</span>
                    <h5 class="pq-section-title">At SIRI Electromotive, we believe in a world powered by clean energy, where the hum of electric engines replaces the roar of combustion. We are passionate about the power of sustainable energy and are committed to helping every company, every individual, play a part in the transition.
                   </h5>
                   <p> Ready to turbo-charge your electric future? Contact us today.</p>
                </div>
                
            </div>
            <div class="col-lg-6">
                <img src="{{asset('images_home/1.jpg')}}" alt="">
                <div class="pq-heading-box">
                    <h3 class="pq-text-white">
                        <a href="contact-us.html">Do You Need Any Help</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="pq-bg-grey brand">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="pq-section-title-box text-center">
                    <span class="pq-section-sub-title">{{ @$data->brand_sub_title }}</span>
                    <h5 class="pq-section-title">{{ @$data->brand_title }}</h5>
                    <p class="pq-section-description">{{ @$data->brand_content }}
                    </p>
                </div>
            </div>
            @foreach (@$brands as $brand)

            <div class="col-lg-3 col-md-4">
                <div class="pq-client-box pq-client-style-2 ">
                    <div class="pq-client-item-2">
                        <a href="about-us.html">
                            <img class="pq-client-img" src="{{ asset('brands/'.$brand->image)}}" alt="pq-client-img">
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</section> --}}

{{-- <section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pq-section-title-box text-center">
                    <span class="pq-section-sub-title">{{ @$data->blog_sub_title }}</span>
                    <h5 class="pq-section-title">{{ @$data->blog_title }}</h5>
                   
                </div>
            </div>
            <div class="col-lg-12">
                <div class="pq-blog text-left">
                    <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false"
                        data-desk_num="4" data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1"
                        data-autoplay="true" data-loop="true" data-margin="30">
                        @foreach ($blogs as $blog)                        
                        <div class="item">
                            <div class="pq-blog-post pq-blog-style-1">
                                <div class="pq-post-media">
                                    <img src="{{ asset('blogs/'.$blog->image)}}" alt="">
                                    <div class="pq-post-date">
                                        <a href="evs-play-an-important-role-in-transport.html">
                                            <span>30</span> Sep
                                        </a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain pq-bg-grey">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author">
                                                <div class="pq-post-authors">
                                                    <i class="fa fa-user"></i><span>By admin</span>
                                                </div>
                                            </li>
                                            <li class="pq-post-comment">
                                                <a href="evs-play-an-important-role-in-transport.html">
                                                    <i class="fa fa-comments"></i>
                                                    2 Comments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title">
                                        <a href="evs-play-an-important-role-in-transport.html">{{ @$blog->title }}</a>
                                    </h5>
                                     {!! @$blog->content !!}  
                                    <a href="evs-play-an-important-role-in-transport.html"
                                        class="pq-button pq-btn-link">
                                        <div class="pq-button-block">
                                            <span class="pq-button-line-left"></span>
                                            <span class="pq-button-text">Read More</span>
                                            <span class="pq-button-line-right"></span>
                                            <i class="ion ion-android-arrow-dropright"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

  <section class="page5">    <footer id="pq-footer">
    <div class="pq-subscribe align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-4 col-md-4">
                    <div class="pq-subscribe-location align-items-center text-center">
                        <a href="{{ route('home.contact') }}">
                            <h4 class="pq-subscribe-title">Find Our near Branches </h4>
                        </a>
                        <i class="fas fa-globe-americas"></i>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 center">
                    <div class="pq-subscribe-contact">
                        <div>
                            <img src="{{ asset('images_home/call.png') }}" alt="subscribe-contact">
                            <span>Call US On</span>
                            <a href="tel:+1800001658">
                                <span>+91 02027464855</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-4">
                    <div class="pq-subscribe-time align-items-center">
                        <i class="far fa-clock"></i>
                        <a href="{{ route('home.contact') }}">
                            <h4 class="pq-subscribe-title text-center">24/7 Emergency Services </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pq-footer-style-1">
        <div class="pq-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="widget">
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="{{ asset('images_home/footer-logo.png') }}" class="pq-footer-logo"
                                        alt="gym-footer-logo">
                                    <p>It is a long established fact that a reader by the readable content of a page
                                        when looking at its layout.</p>
                                    <div class="pq-footer-items">
                                        <i class="fa fa-phone-alt"></i>
                                        <div class="pq-footer-items-info">
                                            <a href="tel:+1800001658">
                                                <span>+91 02027464855</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pq-footer-items">
                                        <i class="fa fa-envelope"></i>
                                        <div class="pq-footer-items-info">
                                            <a href="mailto:info@peacefuldesign.com">
                                                <span>info@siri.com</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6">
                        <div class="widget">
                            <h1 class="footer-title">Our Services</h1>
                            <div class="menu-our-services-container">
                                <ul id="menu-our-services" class="menu">
                                    <li class="menu-item">
                                        <a href="ac-charger-services.html">AC Charger Services</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="dc-charger-services.html">DC Charger Services</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ev-driver-services.html">EV drivers Services</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charge-point-services.html">Charge Point Services</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="home-char;ging-services.html">Home charging</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="building-technology-services.html">Building Services</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6">
                        <div class="widget">
                            <h1 class="footer-title">Useful link</h1>
                            <div class="menu-usefull-link-container">
                                <ul id="menu-usefull-link" class="menu">
                                    <li class="menu-item">
                                        <a href="home-charging-services.html">Home charging</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="building-technology-services.html">Building technology</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="charge-point-services.html">Charge Point</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ev-driver-services.html">EV drivers</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ac-charger-services.html">AC Charger</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="dc-charger-services.html">24/7 Hour Support</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6">
                        <div class="widget">
                            <div class="pq-subscribe-content">
                                <img src="{{ asset('images_home/mail.png') }}" alt="subscribe">
                                <h4 class="footer-title text-center">Newsletter</h4>
                                <p class="text-center">Sign up to get exclusive offers from our favorite brands</p>
                                <form novalidate>
                                    <div class="row text-center">
                                        <div class="col-lg-12">
                                            <input type="email" name="EMAIL" placeholder="Your email address"
                                                required="">
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="submit" value="Subscribe">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pq-copyright-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="col-md-12 align-self-center">
                            <span class="pq-copyright"> Copyright 2024 Siri All Rights Reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer></section>

  </div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js" ></script>
<script src="{{ asset('js_home/pageScroller.js') }}"></script>


<script>
  $('#container').pageScroller();
</script>
 

@endsection