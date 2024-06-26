@extends('layouts.home_app')

@section('content')

<body data-rsssl="1" class="page-template-default page page-id-1754 unselectable elementor-default elementor-kit-8 elementor-page elementor-page-1754" unselectable="on">


    <main id="content" class="site-main post-1754 page type-page status-publish hentry">
    <div class="page-content">
        <div data-elementor-type="wp-page" data-elementor-id="1754" class="elementor elementor-1754" data-elementor-settings='{"scroll_snap":"yes"}' data-elementor-post-type="page">
        <section
            data-id="abf0cc8"
            data-element_type="section"
            class="page1 elementor-section elementor-top-section elementor-element elementor-element-abf0cc8 elementor-section-full_width elementor-section-height-full elementor-section-stretched elementor-section-height-default elementor-section-items-middle nitro-stretch"
            data-settings=' '
             
        > <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 p-5"  style="padding-left: 7em ">
              <div class="pq-breadcrumb-title">
                  <h1 class="text-white">Careers
                  </h1>
                  <p class="text-white">We are always looking for passionate individuals who are driven to make a change. Join our team, we promise you an exciting journey ahead.</p>
              </div>
          
          </div>
          <div class="col-lg-5 mt-4 mt-lg-0 p-5">
              @if(@$approach->image !=null)
              <img src="{{asset('images_home/3.jpg')}}" alt="" >
              @else
              <img src="{{asset('images_home/3.jpg')}}" alt="" >
              @endif
             
          </div>
      </div>  </div>
        </section>   
        
        
        
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
                            <span class="pq-section-sub-title">Apply Now</span>
                           
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                                {{ session('success') }}
                     
                            </div>
                        @endif
                        </div>
                        <form method="POST" action="{{ route('career-store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <p class="mb-0 text-white">Please select appropriate Profile and upload your profile in a PDF format.
</p>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" id="first-name" name="name" class="pq-bg-white name-field" placeholder="Your Name">
                                	@error('name')
													<span class="text-danger">{{$message}}</span>
												@enderror
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" id="e-mail" name="email" class="pq-bg-white e-mail-field" placeholder="Email">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <p class="mb-0 text-white">*Please select your domain
</p>
                                    <select class="pq-bg-white" id="query" name="subject" aria-required="true" aria-invalid="false">
                                        <option value="—Please choose an option—">—Please choose an option—</option>
                                        <option value="Business Development">Business Development</option>
                                        <option value="Sales">Sales</option>
                                        <option value="Operations">Operations</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Commercial">Commercial</option>
                                         
                                    
                                    </select>
                                </div>

                                
                                <div class="col-lg-12">
                                    <textarea id="message" cols="30" rows="4" name="message" placeholder="*Please write your cover letter here describing why would you like to join SIRI..." class="pq-bg-white"></textarea>
                                    @error('message')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="col-lg-6">
                                
                                    <input type="file" id="doc" name="doc" class="form-control"  ><br>
                                                                 </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="pq-button form-btn w-50" >
                                     
                                            <span class="pq-button-text">Send</span>
                                       
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 m-5">
                    <div class="pq-icon-box pq-style-7 p-5">
                        <!-- <div class="pq-icon">
                            <img src="{{ asset('dynamic-pages/' . @$contact->image_one) }}"/>
                        </div>
                        <div class="pq-icon-box-content">
                            <h4 class="pq-icon-box-title">
                                <a href="contact_us">{{ @$contact->title_one }}</a>
                            </h4>
                            <p class="pq-icon-box-description">{!! @$contact->content_one !!}
                            </p>
                        </div> -->
                     
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
            class="footer elementor-section elementor-top-section elementor-element elementor-element-43822f7 elementor-section-full_width elementor-section-height-full elementor-section-stretched elementor-section-height-default elementor-section-items-middle nitro-stretch animated fadeIn"
              
        >
    
        @include('home.footer')
    </section>
    
        </div>
        <div class="post-tags"></div>
    </div>
    </main>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#submitBtn').click(function(e) {
                e.preventDefault(); // Prevent default form submission
            //alert($('#first-name').val());
                // Collect form data
                var formData = {
                    name: $('#first-name').val(),
                    email: $('#e-mail').val(),
                    query: $('#query').val(),
                    message: $('#message').val()
                };
                formData['_token'] = '{{ csrf_token() }}';
                // AJAX request
                $.ajax({
                    type: 'POST',
                    url: '{{ url("contact-store") }}', // Replace with your actual URL for form submission
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                         //   alert(response.success);
                            // Reset the form
                           // $('#contactForm')[0].reset();
                            
                            // Display success message
                            jQuery("<span class='pq-thank-you-message pq-text-primary ms-5'> "+response.success+"</span>").insertAfter('#contact-form');
                            $("#contact-form")[0].reset();
                        }else{
                            jQuery("<span class='pq-thank-you-message pq-text-primary ms-5'> "+response.errors+"</span>").insertAfter('#contact-form');

                        }
                
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error('Form submission failed:', error);
                        // You can display an error message to the user here
                    }
                });
            });
        });
        </script>
@endsection
