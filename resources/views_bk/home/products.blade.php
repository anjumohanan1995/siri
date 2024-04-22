@extends('layouts.home_app')

@section('content')


<div class="banner inner_banner">
    <img src="{{asset('images_home/inner_banner.png')}}" alt="" title="1"   >
  <h1>CMS (Product)

                 </h1>

</div>
<!--Banner End-->

<!--About Us Start-->
<section class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="pq-section-title-box">
                    <span class="pq-section-sub-title">SIRI Electromotive</span>
                    <h4 class="pq-icon-box-title">
                        <a href="">Our Charging Management System (CMS) is a one stop solution for charging any EV through any standard charger whether it is an AC or a DC charger.


                            <br><br>It facilitates our clients to focus on business growth without worrying about the backend infrastructure.
                        </a>
                    </h4>
                </div>
           
                
                
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <img src="{{asset('images_home/3.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!--About Us End-->

 

<!--Whyus Start-->
<section class="whyus py-0 pq-bg-img-6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 p-0">
                <img src="rev/whyus.jpg" class="d-xl-none" alt="">
            </div>
            <div class="col-lg-6 pq-bg-dark pq-dark-section-side-right p-130-45">
                <div class="pq-section-title-box"> 
                    <h5 class="pq-section-title pq-text-white">The various features of our CMS are:</h5>
                    <li>            Easy and simple integration   	</li>	 
                    <li>    	             Smooth migration from existing OCCP 1.6 to future OCCP 2.0.1 protocols</li>	 
                    <li>   	Proactive Issue Monitoring</li>	 
                    <li>  	      	Custom built dashboards for monitoring and control</li>	 
                    <li>       	Smart Customer Analytics</li>	 
                    <li>      	Smart Load Management</li>	 
                    <li>       	Transparent and multi-modal payment architecture</li>	 
                    <li>      	Firmware and software updates</li>	 
                    <li>         	Extra customized features on request</li>	 

                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection