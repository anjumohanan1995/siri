@extends('layouts.home_app')

@section('content')



<div class="banner inner_banner">
    <img src="{{asset('images_home/inner_banner.png')}}" alt="" title="1"   >
  <h1>Our Approach
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
                        <a href="">At SIRI Electromotive, we believe the future is electric. We actively participate in unlocking the full potential of clean energy, thereby building a sustainable future, and empowering everyone to participate in the transition.</a>
                    </h4>
                </div>
                <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                  
                    <div class="pq-icon-box-content">
                       
                        <p class="pq-icon-box-description">This is where our revolutionary AI-powered charging technology comes in. We are not just building chargers, we are crafting smart solutions that seamlessly work with any battery, no matter its complexity. Our hardware, firmware, and AI-powered software work together in perfect harmony, delivering unmatched performance, optimized efficiency, and unparalleled reliability.</p>
                    </div>
                </div>
                <div class="pq-icon-box pq-style-4 mt-4 mt-md-0">
                    
                    <div class="pq-icon-box-content">
                       
                        <p class="pq-icon-box-description">And, with our technology driven products, services, and solutions, we offer partnership. We understand that every company's journey towards electrification is unique. That is why we tailor our solutions to meet the specific needs of each industry vertical. Whether you are an EV manufacturer pushing the boundaries of performance, a forward-thinking fleet operator seeking operational excellence, a sustainability-focused property aiming for energy independence, or an energy storage provider maximizing the value of your batteries, we have the expertise and technology to help you achieve your goals.</p>
                    </div>
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
                    <h5 class="pq-section-title pq-text-white">Here is how we make the difference:</h5>
                    <p class="pq-section-description pq-text-white">Pioneering Innovation: We are at the forefront of smart charging technology, constantly pushing the boundaries with proprietary AI algorithms and industry-leading advancements. We are not keeping up; we are leading the way.<br><br>
                        Simplifying the Transition: We understand that entering the business of charging can be daunting. That is why we offer expert guidance and implement custom built solutions, making the journey towards electrification smooth and efficient.<br><br>
                        Intelligent Deployment and Scaling: We not only install chargers; we design and implement the entire strategic charging infrastructure that can adapt and grow as your needs evolve. We help you deploy rapidly and scale intelligently, ensuring your investment keeps pace with the electric future.<br><br>
                        Maximizing Value: We are partners in maximizing the value of your energy assets. Our solutions extend the life of your batteries, optimize energy usage, and minimize downtime, ensuring you get the most out of every watt.
                         </p>
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
                <div class="pq-section-title-box text-center mb-0">
                 
                    <h5 class="pq-section-title">Join us on the journey:</h5>
                    <p class="pq-section-description">At SIRI Electromotive, we believe in a world powered by clean energy, where the hum of electric engines replaces the roar of combustion. We are passionate about the power of sustainable energy and are committed to helping every company, every individual, play a part in the transition.
                    </p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="pq-fancy-box pq-fancybox-2">
                   
                    <div class="pq-fancybox-info">
                        <h4 class="pq-fancy-box-title text-center">Ready to turbo-charge your electric future? Contact SIRI Electromotive today.</h4>
                       
                         
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</section>
@endsection