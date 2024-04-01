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
  .page3 { background: #f7f9fa; }
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
            <div class="col-lg-6 " style="padding-top: 8em">
                <div class="pq-section-title-box"> 
                    <span class="pq-section-sub-title">About Us</span>
                    <h5 class="pq-section-title">We Provide Best Charging Services For Your EV</h5>
                    <p class="pq-section-description">Lorem Ipsum is simply dummy It is a long established fact that
                        a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="pq-icon-box pq-style-4 mt-4">
                    <div class="pq-icon">
                        <a href=""><i class="flaticon-electric-car-4"></i></a>
                    </div>
                    <div class="pq-icon-box-content">
                        <h4 class="pq-icon-box-title">
                            <a href="">Charging Your EVs</a>
                        </h4>
                        <p class="pq-icon-box-description">Lorem Ipsum is simply dummy It is a long established fact
                            that a reader will be by of a page when looking at its layout.</p>
                    </div>
                </div>
                <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                    <div class="pq-icon">
                        <a href=""><i class="flaticon-charging-battery-1"></i></a>
                    </div>
                    <div class="pq-icon-box-content">
                        <h4 class="pq-icon-box-title">
                            <a href="">0-80% Charge In 60 Minutes</a>
                        </h4>
                        <p class="pq-icon-box-description">Simply dummy It is a long established fact that a reader
                            will be distracted by the of a when looking at its layout.</p>
                    </div>
                </div>
                <a href="about-us.html" class="pq-button">
                    <div class="pq-button-block">
                        <span class="pq-button-line-left"></span>
                        <span class="pq-button-text">Read More</span>
                        <span class="pq-button-line-right"></span>
                        <i class="ion ion-android-arrow-dropright"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0 pt-10">
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
                  <div class="pq-section-title-box text-center">
                      <span class="pq-section-sub-title">Our Services</span>
                      <h5 class="pq-section-title">Excellent and Best Services</h5>
                     
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6">
                  <div class="pq-fancy-box pq-fancybox-1">
                      <div class="pq-fancy-media">
                          <h5 class="pq-fancy-box-title">Public stations</h5>
                          <i class=" flaticon-electric-car"></i>
                      </div>
                      <div class="pq-fancybox-info">
                          <p class="pq-fancybox-description">It is a long established fact that a reader will be
                              distracted by the readable content of a page when looking at its layout.</p>
                          <div class="pq-btn-container">
                              <div class="pq-button-block">
                                  <a class="pq-button" href="building-technology-services.html">
                                      <span class="text"><i class="fas fa-angle-right"></i></span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                  <div class="pq-fancy-box pq-fancybox-1 text-left active">
                      <div class="pq-fancy-media">
                          <h5 class="pq-fancy-box-title">Home stations</h5>
                          <i class="flaticon-charging-battery-1"></i>
                      </div>
                      <div class="pq-fancybox-info">
                          <p class="pq-fancybox-description">It is a long established fact that a reader will be
                              distracted by the readable content of a page when looking at its layout.</p>
                          <div class="pq-btn-container">
                              <div class="pq-button-block">
                                  <a class="pq-button pq-btn-link" href="home-charging-services.html">
                                      <span class="text"><i class="fas fa-angle-right"></i></span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                  <div class="pq-fancy-box pq-fancybox-1 ">
                      <div class="pq-fancy-media">
                          <h5 class="pq-fancy-box-title">charge point stations</h5>
                          <i class="flaticon-charger"></i>
                      </div>
                      <div class="pq-fancybox-info">
                          <p class="pq-fancybox-description">It is a long established fact that a reader will be
                              distracted by the readable content of a page when looking at its layout.</p>
                          <div class="pq-btn-container">
                              <div class="pq-button-block">
                                  <a class="pq-button pq-btn-link" href="charge-point-services.html">
                                      <span class="text"><i class="fas fa-angle-right"></i></span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-12 text-center pq-mt-60">
                  <p class="charge">Success Your Technology. <a href="index.html" class="pq-text-primary">Take A
                          Challenge!</a></p>
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
            <div class="col-lg-6 pq-bg-dark pq-dark-section-side-right p-130-45">
                <div class="pq-section-title-box">
                    <span class="pq-section-sub-title pq-text-white">Why Choose Us</span>
                    <h5 class="pq-section-title pq-text-white">accessible chargers provide the power for free</h5>
                    <p class="pq-section-description pq-text-white">Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. </p>
                </div>
                <div class="pq-progressbar-box pq-progressbar-style-1">
                    <div class="pq-progressbar-content">
                        <span class="progress-title">AC Charger Services</span>
                        <span class="prSectionogress-value pq-text-white">85%</span>
                        <div class="pq-progress-bar">
                            <span data-width="85" class="show-progress"></span>
                        </div>
                    </div>
                    <div class="pq-progressbar-content">
                        <span class="progress-title">DC Charger Services</span>
                        <span class="progress-value pq-text-white">90%</span>
                        <div class="pq-progress-bar">
                            <span data-width="90" class="show-progress"></span>
                        </div>
                    </div>
                    <div class="pq-progressbar-content">
                        <span class="progress-title">Point Services</span>
                        <span class="progress-value pq-text-white">90%</span>
                        <div class="pq-progress-bar">
                            <span data-width="90" class="show-progress"></span>
                        </div>
                    </div>
                    <div class="pq-progressbar-content">
                        <span class="progress-title">EV Drivers Services</span>
                        <span class="progress-value pq-text-white">98%</span>
                        <div class="pq-progress-bar">
                            <span data-width="98" class="show-progress"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div></section>

  <section class="feature">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="pq-section-title-box text-center">
                    <span class="pq-section-sub-title">Our Features</span>
                    <h5 class="pq-section-title">Take Look Into Our Best Features</h5>
                    <p class="pq-section-description">Lorem Ipsum is simply dummy It is a long established fact that
                        a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pq-fancy-box pq-fancybox-2">
                    <div class="pq-fancybox-icon">
                        <i class="flaticon-ev"></i>
                    </div>
                    <div class="pq-fancybox-info">
                        <h4 class="pq-fancy-box-title">ac charger</h4>
                        <p class="pq-fancybox-description">Lorem Ipsum is simply dummy text of the printing and of
                            the printing and typesetting industry.</p>
                        <div class="pq-btn-container">
                            <a class="pq-button pq-btn-link" href="ac-charger-services.html">
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
            </div>
            <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                <div class="pq-fancy-box pq-fancybox-2">
                    <div class="pq-fancybox-icon">
                        <i class="flaticon-electric-car"></i>
                    </div>
                    <div class="pq-fancybox-info">
                        <h4 class="pq-fancy-box-title">Dc charger</h4>
                        <p class="pq-fancybox-description">Lorem Ipsum is simply dummy text of the printing and of
                            the printing and typesetting industry.</p>
                        <div class="pq-btn-container">
                            <a class="pq-button pq-btn-link" href="dc-charger-services.html">
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
            </div>
            <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                <div class="pq-fancy-box pq-fancybox-2">
                    <div class="pq-fancybox-icon">
                        <i class="flaticon-charging-battery-1"></i>
                    </div>
                    <div class="pq-fancybox-info">
                        <h4 class="pq-fancy-box-title">EV drivers</h4>
                        <p class="pq-fancybox-description">Lorem Ipsum is simply dummy text of the printing and of
                            the printing and typesetting industry.</p>
                        <div class="pq-btn-container">
                            <a class="pq-button pq-btn-link" href="ev-driver-services.html">
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
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="pq-fancy-box pq-fancybox-2">
                    <div class="pq-fancybox-icon">
                        <i class="flaticon-charging-station"></i>
                    </div>
                    <div class="pq-fancybox-info">
                        <h4 class="pq-fancy-box-title">Charge Point </h4>
                        <p class="pq-fancybox-description">Lorem Ipsum is simply dummy text of the printing and of
                            the printing and typesetting industry.</p>
                        <div class="pq-btn-container">
                            <a class="pq-button pq-btn-link" href="charge-point-services.html">
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
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="pq-fancy-box pq-fancybox-2">
                    <div class="pq-fancybox-icon">
                        <i class="flaticon-charging-station-1"></i>
                    </div>
                    <div class="pq-fancybox-info">
                        <h4 class="pq-fancy-box-title">Home charging</h4>
                        <p class="pq-fancybox-description">Lorem Ipsum is simply dummy text of the printing and of
                            the printing and typesetting industry.</p>
                        <div class="pq-btn-container">
                            <a class="pq-button pq-btn-link" href="home-charging-services.html">
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
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="pq-fancy-box pq-fancybox-2">
                    <div class="pq-fancybox-icon">
                        <i class="flaticon-charging-station-6"></i>
                    </div>
                    <div class="pq-fancybox-info">
                        <h4 class="pq-fancy-box-title">Building Tech</h4>
                        <p class="pq-fancybox-description">Lorem Ipsum is simply dummy text of the printing and of
                            the printing and typesetting industry.</p>
                        <div class="pq-btn-container">
                            <a class="pq-button pq-btn-link" href="building-technology-services.html">
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
            </div>
        </div>
    </div>
</section>

<section class="pq-bg-grey">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-lg-12 p-0">
                <div class="pq-section-title-box text-center">
                    <span class="pq-section-sub-title">EV Counter</span>
                    <h5 class="pq-section-title">What Our Happy Clients Say about us</h5>
                    <p class="pq-section-description">Lorem Ipsum is simply dummy It is a long established fact that
                        a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="pq-counter pq-counter-style-2">
                    <div class="pq-counter-info">
                        <div class="pq-counter-num-prefix">
                            <h5 class="timer" data-to="330" data-speed="2000">330</h5>
                            <span class="pq-counter-prefix">+</span>
                        </div>
                        <p class="pq-counter-description">Ev Charging Ports Installed</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mt-4 mt-md-0">
                <div class="pq-counter pq-counter-style-2">
                    <div class="pq-counter-info">
                        <div class="pq-counter-num-prefix">
                            <h5 class="timer" data-to="250" data-speed="2000">250</h5>
                            <span class="pq-counter-prefix">+</span>
                        </div>
                        <p class="pq-counter-description">Ev Charging Ports Installed</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mt-4 mt-xl-0">
                <div class="pq-counter pq-counter-style-2">
                    <div class="pq-counter-info">
                        <div class="pq-counter-num-prefix">
                            <h5 class="timer" data-to="142" data-speed="2000">142</h5>
                            <span class="pq-counter-prefix">+</span>
                        </div>
                        <p class="pq-counter-description">Trees Planted To Restore Planted</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mt-4 mt-xl-0">
                <div class="pq-counter pq-counter-style-2">
                    <div class="pq-counter-info">
                        <div class="pq-counter-num-prefix">
                            <h5 class="timer" data-to="460" data-speed="2000">460</h5>
                            <span class="pq-counter-prefix">+</span>
                        </div>
                        <p class="pq-counter-description">Dc fast Charging Installed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>

    <div class="videopopup pq-bg-img-3 pq-py-250">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="pq-popup-video-block">
                        <div class="pq-video-icon">
                            <a href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="pq-video popup-youtube">
                                <i aria-hidden="true" class="ion ion-play"></i>
                            </a>
                        </div>
                    </div>
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
                    <span class="pq-section-sub-title">Download App</span>
                    <h5 class="pq-section-title">Become Our Partner or Host the charging Station</h5>
                </div>
                <div class="pq-accordion-block ">
                    <div class="pq-accordion-box pq-accordion-box-style-1 1 pq-active">
                        <div class="pq-ad-title">
                            <h5 class="ad-title-text">
                                Brief Introduction for You
                                <i aria-hidden="true" class="ion ion-ios-arrow-down active"></i>
                                <i aria-hidden="true" class="ion ion-ios-arrow-up inactive"></i>
                            </h5>
                        </div>
                        <div class="pq-accordion-details">
                            <p class="pq-detail-text"> There are many variations of passages of in Ipsum available,
                                but the majority have suffered alteration in some form, by injected humourLorem
                                ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                    </div>
                    <div class="pq-accordion-box pq-accordion-box-style-1 2">
                        <div class="pq-ad-title">
                            <h5 class="ad-title-text">
                                What Are the Different Services Offers
                                <i aria-hidden="true" class="ion ion-ios-arrow-down active"></i>
                                <i aria-hidden="true" class="ion ion-ios-arrow-up inactive"></i>
                            </h5>
                        </div>
                        <div class="pq-accordion-details">
                            <p class="pq-detail-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                    </div>
                    <div class="pq-accordion-box pq-accordion-box-style-1 3">
                        <div class="pq-ad-title">
                            <h5 class="ad-title-text">
                                I'm Intrested To Open Charging Store
                                <i aria-hidden="true" class="ion ion-ios-arrow-down active"></i>
                                <i aria-hidden="true" class="ion ion-ios-arrow-up inactive"></i>
                            </h5>
                        </div>
                        <div class="pq-accordion-details">
                            <p class="pq-detail-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                    </div>
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
<section class="pq-bg-grey brand">
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
</section>

<section class="blog">
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
</section>

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