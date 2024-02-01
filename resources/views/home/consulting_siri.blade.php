@extends('layouts.home_app')

@section('content')




<div class="banner inner_banner">
    <img src="{{asset('images_home/inner_banner.png')}}" alt="" title="1"   >
  <h1>Consulting
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
                        <a href="">Strategic Charging Advisory
                        </a>
                    </h4>
                </div>
                <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                  
                    <div class="pq-icon-box-content">
                       
                        <p class="pq-icon-box-description">Leverage our deep charging infrastructure expertise to optimize your electrification strategy and roadmaps. We provide:
                        </p>
                    </div>
                </div>
                <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                    <ol type="i">
                        <li>Charging Needs Assessment:</li>
                       
                     
                    
                    <ul>
                        <li>Detailed site evaluations and charger quantity recommendations
                        </li>
                        <li>Vehicle and Battery Analytics to project charging loads
                        </li>
                        <li>Future proofing for additional capacity
                        </li>
                        
                      </ul>

                      <li>Charger Architecture Design:
                    </li>
                    <ul>
                        <li>Network topology, redundancy planning

                        </li>
                        <li>Model grid interconnect capacity sizing

                        </li>
                        <li>Energy storage pairing optimizations

                        </li>
                        
                      </ul>
                      <li> Charger Selection Advisory:

                    </li>
                    <ul>
                        <li>Comparison across charger models and OEMs

                        </li>
                        <li>Evaluation of key hardware features


                        </li>
                        <li>Vendor platform comparison guidance


                        </li>
                        
                      </ul>
                     
                    </ol>
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
                <ol>
                    <li>  Charger Experience Consulting:
                        <ul>
                            <li>Branding, customized marketing skins


                            </li>
                            <li>Integration with loyalty programs and apps



                            </li>
                            <li>User experience journey mapping




                            </li>
                            
                          </ul>
                    <li> Charging Policy and Planning:</li>
                   
                 
                
                <ul>
                    <li>Dynamic pricing models and revenue optimization </li>
                    <li>	Prioritization and access rules engine </li>
                    <li>	Energy metering and sustainability reporting
                        

                    </li>
                    
                  </ul>

                  <li> Support Transitioning:

                </li>
                <ul>
                    <li>Staff developer training packages


                    </li>
                    <li>Post-deployment enhancement planning


                    </li>
                    <li>Performance dashboards and anomaly-alert setup


                    </li>
                    
                  
                  </ul>
                </ol>
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
                <div class="pq-section-title-box  mb-0">
                 
                    <h5 class="pq-section-title">OEM Consulting</h5>
                   <ul>
                    <li> 	Full custom Onboard Charger Design for OEMs (2/3/4 Wheelers and multi- axle E-Heavy Vehicles up to ~60KW)</li>
                    <li>	Battery Management System Design</li>
                    <li>	Industrial Chargers for AGV (Autonomous Guided Vehicles): 48-72V and up to 300 Amps.</li>
                    <li>	Battery Swap Station Design </li>
                    <li>	E- motor traction controllers Design </li>


                   </ul>
                   <p>We aim to guide clients on maximizing their return from charging investments through expert planning. Please inquire to start a consultation.</p>
                       
                       
                </div>
            </div>

             
          
        </div>
    </div>
</section>
@endsection