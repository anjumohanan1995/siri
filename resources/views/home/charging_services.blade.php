@extends('layouts.inner_app')

@section('content')

 
<!--Banner End-->

<!--About Us Start-->
<!--About Us Start-->

<div class="pq-breadcrumb pq-bg-img-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h2>Charger Services</h2>
                    </div>
                    <div class="pq-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fas fa-home me-2"></i>Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Charger Services</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="about-us">
    <div class="container">
        <div class="row align-items-center">
<div class="col-lg-6">
                    <div class="pq-section-title-box">
                        <span class="pq-section-sub-title">SIRI Electromotive</span>
                       <ul>
                        <li>
                            Installation and Commissioning
                        </li>
                        <p>Our expert technicians handle the entire process, from precise installation considering site requirements to comprehensive commissioning ensuring optimal performance.
                        </p>
                        <li>Upgrades, Life Extension and End of Life (EOL)

                        </li>
                        <p> We offer seamless upgrades, extending the charger's capabilities while maintaining warranty coverage. When the charger is at the end of life, our responsible EOL services ensure safe recycling, minimizing environmental impact.
                        </p>
                        <li>Managed Charger Service (MCS)
                        </li>
                       
                        <li>Prescriptive Monitoring: 
                        </li>
                        <P>Forget maintenance worries. Our AI-powered Prescriptive Monitoring takes over, watching your charger 24*7. We predict issues before they happen, maximizing uptime and revenue for you and your customers. Focus on your core business, leave the charging to us.
                        </P>
                        <li>Continued Maintenance Contract (CMC)

                        </li>
                    </ul>
                    </div>
</div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <img src="{{ asset('images_home/4.jpg') }}" alt="">
                    </div>
    </section>
    <!--About Us End-->


@endsection