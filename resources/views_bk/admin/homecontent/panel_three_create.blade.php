@extends('layouts.app')

@section('content')

<!-- main-content -->
<div class="main-content app-content">
	<!-- container -->
	<div class="main-container container-fluid">
		<!-- breadcrumb -->
		<div class="breadcrumb-header justify-content-between row me-0 ms-0 mb-3" >
			<div class="col-xl-3">
				<h4 class="content-title mb-2">Home Content(Panel 3) </h4>
				
			</div>
		</div>
		<!-- /breadcrumb -->
		<!-- main-content-body -->
		<div class="main-content-body">
				<div id="success_message" class="ajax_response" style="display: none;">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
	                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>Content  Added Successfully
	            </div>
	        </div>

			<!-- row -->

			<!-- /row -->
			<!-- row -->
			<div class="row row-sm">
				<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 ">
					<div class="card">

							<div class="card-body">

								<div class="mb-4 main-content-label"></div>
								<form name="createForm"  method="post" action="{{route('panel_three.store')}}" enctype="multipart/form-data">
                           @csrf
									<input type="hidden" name="user_id" value="{{ \Auth::user()->id}}">
                                 
									<div class="form-group">

										<div class="row">
											<div class="col-md-3"><label class="form-label">Title</label></div>
											<div class="col-md-9">
											    <input type="text" value="{{@$data->panel_three_title}}"  class="form-control" placeholder="Title " name="panel_three_title" />
                                    @error('panel_three_title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
											</div>
										</div><br>
										<div class="row">
											<div class="col-md-3"><label class="form-label">Sub Title</label></div>
											<div class="col-md-9">
											    <input type="text" value="{{@$data->panel_three_subtitle}}"  class="form-control" placeholder="Sub Title " name="panel_three_subtitle" />
                                    @error('panel_three_subtitle')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
											</div>
										</div><br>
										<div class="row"><label class="form-label">Contents</label></div>
										@php $i =1; @endphp
										@foreach ($contents as $content)
										<div class="row c_removeclass1{{ $i }}">
										<div class="col-md-4 mb-4 after-add-more">
											<label class="form-label"> </label>
											<input type="text" class="form-control" placeholder="Title" name="title[]" value="{{ @$content['title'] }}" />
										   </div>
										
									  <div class="col-md-6 mb-6 after-add-more">
										  <label class="form-label"> </label>
										  <input type="text" class="form-control" placeholder="Content" name="content[]" value="{{ @$content['content'] }}" />
									   </div>
									
									  <div class="col-md-2 mb-2 after-add-more">
									  <button class="btn btn-danger btn-sm remove" type="button" onclick="c_remove_imgicon_fields1({{ $i }});">-</button>
									</div> </div>
									@php $i++; @endphp
										@endforeach
										<div class="row">

										  <div class="col-md-4 mb-4 after-add-more">
											  <label class="form-label"> </label>
											  <input type="text" class="form-control" placeholder="Title" name="title[]" />
										  </div>
										  <div class="col-md-6 mb-6 after-add-more">
											<label class="form-label"> </label>
											<input type="text" class="form-control" placeholder="Content" name="content[]" />
										</div>
								   
										  <div class="col-md-2">
											  <div class="form-group change">

												  <span class="btn btn-info btn-sm" onclick="addMore()">+</span>
											  </div>
										  </div>
										  <div id="addContent1">
										  </div>
									  </div>
                                     
                                         

									</div>

									<div class="card-footer">
										<button type="submit" id="submit" class="btn btn-primary waves-effect waves-light">Save</button>
										<!-- <button type="submit"  class="btn btn-primary waves-effect waves-light">Add</button> -->
									</div>
								</form>
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
<!-- /main-content -->
					<!-- /main-content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('js/ckeditor/ckeditor.js')}}"></script>
<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

<script src="{{ asset('js/toastr.js') }}"></script>

<script>
	var room2 = 1;
	function addMore() {
		room2++;
		var objTo = document.getElementById('addContent1');
		var divtest = document.createElement("div");
		divtest.setAttribute("class", "form-group c_removeclass" + room2);
		var rdiv = 'c_removeclass' + room2;
		divtest.innerHTML = '<div class=" row"><div class="col-md-4 mb-4 after-add-more"><label class="form-label"> </label><input type="text" class="form-control" placeholder="Title" name="title[]" /></div><div class="col-md-6 mb-6 after-add-more"><label class="form-label"> </label><input type="text" class="form-control" placeholder="Content" name="content[]" /></div><div class="col-md-2"><button class="btn btn-danger btn-sm remove" type="button" onclick="c_remove_imgicon_fields(' + room2 + ');">-</button></div></div>';
		objTo.appendChild(divtest);
	  
		// Initialize CKEditor on the newly added textarea
		CKEDITOR.replace(divtest.querySelector('.ckeditor'));
	  }
function c_remove_imgicon_fields(ridd)
{
$('.c_removeclass'+ridd).remove();
}
function c_remove_imgicon_fields1(ridd)
{
$('.c_removeclass1'+ridd).remove();
}
</script>

@if (session('status'))
<script>
    toastr.success('{{ session("status") }}', 'Success!')


    
</script>
@endif
@endsection
