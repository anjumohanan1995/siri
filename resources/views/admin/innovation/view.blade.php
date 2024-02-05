@extends('layouts.app')
@section('content')
	<!-- main-content -->
	<div class="main-content app-content">
		<!-- container -->
		<div class="main-container container-fluid">
			<!-- breadcrumb -->
			<div class="breadcrumb-header justify-content-between row me-0 ms-0 mb-3" >
				<div class="col-xl-3">
					<h4 class="content-title mb-2">Home Page Content Details  </h4>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">

							<li class="breadcrumb-item active" aria-current="page"><i class="side-menu__icon fe fe-box"> </i> - Home Page Content Details</li>
						</ol>
					</nav>
				</div>

			</div>
			<!-- /breadcrumb -->
			<!-- main-content-body -->
			<div class="main-content-body">

				<!-- row -->

				<!-- /row -->
				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 ">
						<div class="card">
								<div class="card-body">
									<div id="success_message" class="ajax_response" style="display: none;"></div>
									<div class="mb-4 main-content-label"> Details</div>

										<table id="example" class=" " style="width:100%">
										    <tbody>
										    	  <tr>
                                                    <td>
                                                        <div class="project-contain">
                                                        <b class="mb-1 tx-13">Section</b>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div> :</div>
                                                    </td>
                                                    <td>
                                                        <div class="image-grouped"> {{ @$data['section']}}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="project-contain">
                                                        <b class="mb-1 tx-13">Title</b>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div> :</div>
                                                    </td>
                                                    <td>
                                                        <div class="image-grouped"> {{ @$data['name']}}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="project-contain">
                                                        <b class="mb-1 tx-13"> Description</b>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div> :</div>
                                                    </td>
                                                    <td>
                                                        <div class="image-grouped"> {{ @$data['description']}}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="project-contain">
                                                        <b class="mb-1 tx-13"> Image</b>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div> :</div>
                                                    </td>
                                                    <td>
                                                        <div class="image-grouped">
                                                            <img src="{{ asset('images/homepage/'.@$data['image'])}}" id="img_url1" alt="your image" class="form-control">
                                                       </div>
                                                    </td>
                                                </tr>
                                                @if(@$data['video'] != '')
                                                 <tr>
                                                    <td>
                                                        <div class="project-contain">
                                                        <b class="mb-1 tx-13"> Video</b>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div> :</div>
                                                    </td>
                                                    <td>
                                                        <div class="image-grouped">
                                                            <video width="190px" height="" autoplay="" loop="" muted="" >
					                                			<source src="{{url('/')}}/images/homepage/{{@$data->video}}" type="video/mp4">
					                            			</video>
                                                       </div>
                                                    </td>
                                                </tr>
                                                @endif



										    </tbody>
										</table>


								</div>


							</div>

					</div>




				</div>
				<!-- /row -->
				<!-- row -->

				<!-- /row -->
				<!-- row -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>



@endsection
