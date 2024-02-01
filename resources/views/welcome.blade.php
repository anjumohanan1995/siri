@extends('layouts.home_app')

@section('content')


  <!-- Start Slider -->
  <div class="banner">
    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_2_1_wrapper" data-alias="home-1" data-source="gallery"
        style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_2_1" data-version="6.5.15">
            <rs-slides>
                <rs-slide style="position: absolute;" data-key="rs-2" data-title="Slide" data-anim="ms:600;"
                    data-in="o:0;" data-out="a:false;">
                    <img src="{{asset('rev/dummy.png')}}" alt="" title="1" width="1920" height="965"
                        class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{asset('rev/1.jpg')}}" data-no-retina>
                    <!--
                        --><rs-layer id="slider-2-slide-2-layer-0" data-type="shape" data-rsp_ch="on" data-xy="x:c;y:b;"
                        data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                        data-dim="w:2372px,1868px,1569px,968px;h:340px,267px,202px,124px;minw:0px,none,none,none;"
                        data-frame_0="y:50,39,29,17;" data-frame_1="st:1600;sp:1000;" data-frame_999="o:0;st:w;"
                        style="z-index:11;background-color:#86bb45;">
                    </rs-layer><!--

                        --><rs-layer id="slider-2-slide-2-layer-1" class="pq-title-text" data-type="text" data-color="#86bb45"
                        data-rsp_ch="on" data-xy="x:c;yo:80px,100px,80px,60px;"
                        data-text="w:normal;s:82,64,62,48;l:90,70,70,56;fw:500;a:center;"
                        data-frame_0="y:50,39,29,17;" data-frame_1="st:800;sp:1000;" data-frame_999="o:0;st:w;"
                        style="z-index:9;">Charging
                    </rs-layer><!--

                        --><rs-layer id="slider-2-slide-2-layer-2" data-type="image" data-rsp_ch="on" data-xy="x:c;y:b;yo:0,0,0,1px;"
                        data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                        data-dim="w:1400px,1102px,780px,450px;h:545px,429px,304px,175px;"
                        data-frame_0="y:50,39,29,17;" data-frame_1="st:1800;sp:1000;" data-frame_999="o:0;st:w;"
                        style="z-index:12;"><img src="{{asset('rev/dummy.png')}}" alt="" class="tp-rs-img rs-lazyload"
                            width="1402" height="546" data-lazyload="{{asset('rev/1.png')}}" data-no-retina>
                    </rs-layer><!--

                        --><rs-layer id="slider-2-slide-2-layer-3" class="pq-title-text" data-type="text" data-rsp_ch="on"
                        data-xy="x:c;xo:0,30px,0,0;yo:180px,180px,160px,120px;"
                        data-text="w:normal;s:82,64,62,48;l:90,70,70,56;fw:500;a:center;"
                        data-frame_0="y:50,39,29,17;" data-frame_1="st:1000;sp:1000;" data-frame_999="o:0;st:w;"
                        style="z-index:8;">Points for Your Car
                    </rs-layer><!--

                        --><a id="slider-2-slide-2-layer-4" class="rs-layer pq-button pq-body-text rev-btn"
                        href="dc-charger-services.html" target="_self" data-type="button" data-rsp_ch="on"
                        data-xy="x:c;yo:380px,340px,260px,210px;" data-text="w:normal;s:18,14,10,6;l:50,39,29,17;"
                        data-dim="minh:0px,none,none,none;" data-padding="r:40,32,24,15;l:40,32,24,15;"
                        data-border="bor:5px,5px,5px,5px;" data-frame_0="y:50,39,29,17;"
                        data-frame_1="st:1400;sp:1000;" data-frame_999="o:0;st:w;"
                        data-frame_hover="bgc:#86bb45;bor:5px,5px,5px,5px;sp:100;e:power1.inOut;bri:100%;"
                        style="z-index:13;background-color:#86bb45;">
                        <div class="pq-button-block"><span class="pq-button-line-left"></span><span
                                class="pq-button-text">Read More</span><span class="pq-button-line-right"></span><i
                                class="ion ion-android-arrow-dropright"></i></div>
                    </a><!--

                        --><rs-layer id="slider-2-slide-2-layer-9" class="pq-body-text" data-type="text" data-rsp_ch="on"
                        data-xy="x:c;yo:280px,260px,-40px,-54px;"
                        data-text="w:normal;s:20,15,11,6;l:31,22,16,9;a:center;"
                        data-dim="w:801px,630px,478px,294px;" data-vbility="t,t,f,f" data-frame_0="y:50,39,29,17;"
                        data-frame_1="st:1200;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:10;">It is a long
                        established fact that a reader will be distracted by the readable content of a page Lorem
                        Ipsum is simply dummy when looking at its layout.
                    </rs-layer><!--
--> </rs-slide>
            </rs-slides>
        </rs-module>
    </rs-module-wrap>
</div>
<!--Banner End-->

<!--About Us Start-->
<section class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="pq-section-title-box">
                    <span class="pq-section-sub-title">About Us</span>
                    <h5 class="pq-section-title">We Provide Best Charging Services For Your EV</h5>
                    <p class="pq-section-description">Lorem Ipsum is simply dummy It is a long established fact that
                        a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
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
                <a href="about-us.html" class="pq-button pq-mt-30">
                    <div class="pq-button-block">
                        <span class="pq-button-line-left"></span>
                        <span class="pq-button-text">Read More</span>
                        <span class="pq-button-line-right"></span>
                        <i class="ion ion-android-arrow-dropright"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <img src="{{asset('images_home/3.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!--About Us End-->

<!--Services Start-->
<section class="service pq-bg-grey pq-pb-220">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="pq-section-title-box text-center">
                    <span class="pq-section-sub-title">Our Services</span>
                    <h5 class="pq-section-title">Excellent and Best Services</h5>
                    <p class="pq-section-description">Lorem Ipsum is simply dummy It is a long established fact that
                        a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
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
</section>
<!--Services End-->

<!--Whyus Start-->
<section class="whyus py-0 pq-bg-img-6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 p-0">
                <img src="{{asset('rev/whyus.jpg')}}" class="d-xl-none" alt="">
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
                        <span class="progress-value pq-text-white">85%</span>
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
</section>
<!--Whyus End-->

<!--Feature Start-->
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
<!--Feature End-->

<!--Counter Start-->
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
<!--Counter End-->

<!--Video Popup Start-->
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
<!--Video Popup End-->

<!--Download App Start-->
<section class="download-app">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-0 mt-4 mt-lg-0">
                <div class="pq-section-title-box pq-mb-30">
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
<!--Download App End-->

<!--Brand Start-->
<section class="pq-bg-grey brand">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="pq-section-title-box text-center">
                    <span class="pq-section-sub-title">Charging Brand</span>
                    <h5 class="pq-section-title">Compatible With This Vehicle Brands</h5>
                    <p class="pq-section-description">Lorem Ipsum is simply dummy It is a long established fact that
                        a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="pq-client-box pq-client-style-2 ">
                    <div class="pq-client-item-2">
                        <a href="about-us.html">
                            <img class="pq-client-img" src="{{asset('images_home/5.png')}}" alt="pq-client-img">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="pq-client-box pq-client-style-2 ">
                    <div class="pq-client-item-2">
                        <a href="about-us.html">
                            <img class="pq-client-img" src="{{asset('images_home/4.png')}}" alt="pq-client-img">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="pq-client-box pq-client-style-2 ">
                    <div class="pq-client-item-2">
                        <a href="about-us.html">
                            <img class="pq-client-img" src="{{asset('images_home/2.png')}}" alt="pq-client-img">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                <div class="pq-client-box pq-client-style-2 ">
                    <div class="pq-client-item-2">
                        <a href="about-us.html">
                            <img class="pq-client-img" src="{{asset('images_home/3.png')}}" alt="pq-client-img">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-4 pq-ps-130">
                <div class="pq-client-box pq-client-style-2 ">
                    <div class="pq-client-item-2">
                        <a href="about-us.html">
                            <img class="pq-client-img" src="{{asset('images_home/1.png')}}" alt="pq-client-img">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-4">
                <div class="pq-client-box pq-client-style-2 ">
                    <div class="pq-client-item-2">
                        <a href="about-us.html">
                            <img class="pq-client-img" src="{{asset('images_home/5.png')}}" alt="pq-client-img">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-4 pq-pe-130">
                <div class="pq-client-box pq-client-style-2 ">
                    <div class="pq-client-item-2">
                        <a href="about-us.html">
                            <img class="pq-client-img" src="{{asset('images_home/4.png')}}" alt="pq-client-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand End-->

<!--Blog Start-->
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pq-section-title-box text-center">
                    <span class="pq-section-sub-title">Recent Articles</span>
                    <h5 class="pq-section-title">Our Latest Blog</h5>
                    <p class="pq-section-description">Lorem Ipsum is simply dummy It is a long established fact that
                        a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="pq-blog text-left">
                    <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false"
                        data-desk_num="3" data-lap_num="2" data-tab_num="2" data-mob_num="1" data-mob_sm="1"
                        data-autoplay="true" data-loop="true" data-margin="30">
                        <div class="item">
                            <div class="pq-blog-post pq-blog-style-1">
                                <div class="pq-post-media">
                                    <img src="{{asset('images_home/blog/1.jpg')}}" alt="">
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
                                        <a href="evs-play-an-important-role-in-transport.html">EVs play an important
                                            role in transport</a>
                                    </h5>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. </p>
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
                        <div class="item">
                            <div class="pq-blog-post pq-blog-style-1">
                                <div class="pq-post-media">
                                    <img src="{{asset('images_home/blog/2.jpg')}}" alt="">
                                    <div class="pq-post-date">
                                        <a href="evs-play-an-important-role-in-transport.html">
                                            <span>27</span> Sep
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
                                                    0 Comments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title">
                                        <a href="evs-play-an-important-role-in-transport.html">EVs give maximum
                                            charging speed</a>
                                    </h5>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. </p>
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
                        <div class="item">
                            <div class="pq-blog-post pq-blog-style-1">
                                <div class="pq-post-media">
                                    <img src="{{asset('images_home/blog/3.jpg')}}" alt="">
                                    <div class="pq-post-date">
                                        <a href="evs-play-an-important-role-in-transport.html">
                                            <span>27</span> Sep
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
                                                    0 Comments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title">
                                        <a href="evs-play-an-important-role-in-transport.html">Some vehicles take
                                            additional cable for charging.</a>
                                    </h5>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. </p>
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
                        <div class="item">
                            <div class="pq-blog-post pq-blog-style-1">
                                <div class="pq-post-media">
                                    <img src="{{asset('images_home/blog/4.jpg')}}" alt="">
                                    <div class="pq-post-date">
                                        <a href="evs-play-an-important-role-in-transport.html">
                                            <span>27</span> Sep
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
                                                    0 Comments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title">
                                        <a href="evs-play-an-important-role-in-transport.html">Electric Vehicle
                                            Supply Equipment, or EVSE</a>
                                    </h5>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. </p>
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
                        <div class="item">
                            <div class="pq-blog-post pq-blog-style-1">
                                <div class="pq-post-media">
                                    <img src="{{asset('images_home/blog/5.jpg')}}" alt="">
                                    <div class="pq-post-date">
                                        <a href="evs-play-an-important-role-in-transport.html">
                                            <span>26</span> Jul
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
                                                    1 Comment
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title">
                                        <a href="evs-play-an-important-role-in-transport.html">EV Charging Station
                                            Network Providers</a>
                                    </h5>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. </p>
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
                        <div class="item">
                            <div class="pq-blog-post pq-blog-style-1">
                                <div class="pq-post-media">
                                    <img src="{{asset('images_home/blog/6.jpg')}}" alt="">
                                    <div class="pq-post-date">
                                        <a href="evs-play-an-important-role-in-transport.html">
                                            <span>26</span> Jul
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
                                                    0 Comments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title">
                                        <a href="evs-play-an-important-role-in-transport.html">Charging station
                                            solution for transport</a>
                                    </h5>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. </p>
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
                        <div class="item">
                            <div class="pq-blog-post pq-blog-style-1">
                                <div class="pq-post-media">
                                    <img src="{{asset('images_home/blog/7.jpg')}}" alt="">
                                    <div class="pq-post-date">
                                        <a href="evs-play-an-important-role-in-transport.html">
                                            <span>24</span> Jul
                                        </a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain pq-bg-grey">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author">
                                                <div class="pq-post-authors">
                                                    <i class="fa fa-user"></i>
                                                    <span>By admin</span>
                                                </div>
                                            </li>
                                            <li class="pq-post-comment">
                                                <a href="evs-play-an-important-role-in-transport.html">
                                                    <i class="fa fa-comments"></i>
                                                    0 Comments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title">
                                        <a href="evs-play-an-important-role-in-transport.html">How Does An Electric
                                            Motor Work?</a>
                                    </h5>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. </p>
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
                        <div class="item">
                            <div class="pq-blog-post pq-blog-style-1">
                                <div class="pq-post-media">
                                    <img src="{{asset('images_home/blog/8.jpg')}}" alt="">
                                    <div class="pq-post-date">
                                        <a href="evs-play-an-important-role-in-transport.html">
                                            <span>24</span> Jul
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
                                                    0 Comments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title">
                                        <a href="evs-play-an-important-role-in-transport.html">Dope Tech in EV’s
                                            from CES 2018</a>
                                    </h5>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. </p>
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
                        <div class="item">
                            <div class="pq-blog-post pq-blog-style-1">
                                <div class="pq-post-media">
                                    <img src="{{asset('images_home/blog/9.jpg')}}" alt="">
                                    <div class="pq-post-date">
                                        <a href="evs-play-an-important-role-in-transport.html">
                                            <span>24</span> Jul
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
                                                    0 Comments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title">
                                        <a href="evs-play-an-important-role-in-transport.html">Electric Vehicle
                                            Motors: The Next Big Thing</a>
                                    </h5>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. </p>
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
                        <div class="item">
                            <div class="pq-blog-post pq-blog-style-1">
                                <div class="pq-post-media">
                                    <img src="{{asset('images_home/blog/10.jpg')}}" alt="">
                                    <div class="pq-post-date">
                                        <a href="evs-play-an-important-role-in-transport.html">
                                            <span>24</span> Jul
                                        </a>
                                    </div>
                                </div>
                                <div class="pq-blog-contain pq-bg-grey">
                                    <div class="pq-post-meta">
                                        <ul>
                                            <li class="pq-post-author">
                                                <div class="pq-post-authors">
                                                    <i class="fa fa-user"></i>
                                                    <span>By admin</span>
                                                </div>
                                            </li>
                                            <li class="pq-post-comment">
                                                <a href="evs-play-an-important-role-in-transport.html">
                                                    <i class="fa fa-comments"></i>
                                                    0 Comments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="pq-blog-title">
                                        <a href="evs-play-an-important-role-in-transport.html">UltraCapacitors and
                                            Electric Vehicles</a>
                                    </h5>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout. </p>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- End Testimonials Section -->
    <!-- Start Blog Section -->
    
    <!-- End Blog Section -->
    <!-- Start Footer -->
@endsection
