
@extends('layouts.home_app')

@section('content')

<div class="banner inner_banner">
    <img src="{{asset('images_home/inner_banner.png')}}" alt="" title="1"   >
  <h1>Charger Services
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
                   <li>
                    Installation and Commissioning
                </li>
                <li>Upgrades, Life Extension and End of Life (EOL)
                </li>
                <li>Managed Charger Service (MCS)</li>
                <li>Prescriptive Monitoring</li>
                </div>
                <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                  
                    <div class="pq-icon-box-content">
                       
                        <p class="pq-icon-box-description">SIRI EM employs an advanced proprietary technology stack that incorporates AI/ML/NN-based Prescriptive Monitoring services for our Chargers. Through continuous 24X7 monitoring, our customers are relieved from typical maintenance challenges and other complex remote procedures. We ensure that our customers concentrate on their core business, while SIRI EM focuses on maximizing charger uptime, ensuring optimal revenue generation for our customers and their end users
                        </p>
                    </div>
                </div>
               
              <li>Continued Maintenance Contract (CMC)
            </li>  
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <img src="{{asset('images_home/3.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>

@endsection