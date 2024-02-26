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
                                                <span>reachus@siriem.com</span>
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