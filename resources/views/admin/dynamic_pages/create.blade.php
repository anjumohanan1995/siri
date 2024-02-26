@extends('layouts.app')

@section('content')

<!-- main-content -->
<div class="main-content app-content">
	<!-- container -->
	<div class="main-container container-fluid">
		<!-- breadcrumb -->
		<div class="breadcrumb-header justify-content-between row me-0 ms-0 mb-3" >
			<div class="col-xl-3">
				<h4 class="content-title mb-2">Dynamic Page </h4>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">

						<li class="breadcrumb-item active" aria-current="page"><i class="side-menu__icon fe fe-box"> </i> - Contact</li>
					</ol>
				</nav>
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

							
								<form name="createForm"  method="post" action="{{route('dynamic-pages.store')}}" enctype="multipart/form-data">
                           @csrf
									<input type="hidden" name="user_id" value="{{ \Auth::user()->id}}">
									<input type="hidden" name="menu_id" value="{{ @$menu_id }}">

									<div class="form-group">
										<div class="row">
											<div class="col-md-3"><label class="form-label">Heading</label></div>
											<div class="col-md-9"><input type="text" class="form-control" placeholder="Heading" name="heading" id="heading" value="{{ @$data->heading }}" />
												@error('heading')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div><br>
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Title One</label></div>
                                                <div class="col-md-9"><input type="text" class="form-control" placeholder="Title One" name="title_one" id="title_one" value="{{ @$data->title_one }}" />
                                                    @error('title_one')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div><br>
                                         
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label"> Content One</label></div>
                                                <div class="col-md-9"><textarea id="" class="ckeditor editor1 form-control" placeholder=" Content" name="content_one">{{ @$data->content_one }}</textarea>
                                                    @error('content')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>   <br>                                       
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Image/Icon</label></div>
                                                <div class="col-md-9">
                                                    {{-- <input type="file" class="form-control" name="image" /> --}}
                                                    <span>Upload Maximum File Size is 2Mb</span>
                                                    <input type="file" id="img_file" name="image_one" class="form-control" accept=".png, .jpg, .jpeg"  onChange="img_pathUrl(this);"><br>
                                                    @if(@$data->image_one)
                                                    <br>
                                                    <img src="{{ asset('dynamic-pages/'.@$data->image_one) }}" width ="150px" height="150px">
                                                    @endif

                                                    @error('image')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
											<br>
											<div class="row">
                                                <div class="col-md-3"><label class="form-label">Title Two</label></div>
                                                <div class="col-md-9"><input type="text" class="form-control" placeholder="Title " name="title_two" id="title_two" value="{{ @$data->title_two }}" />
                                                    @error('title_two')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div><br>
                                         
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label"> Content Two</label></div>
                                                <div class="col-md-9"><textarea class="ckeditor form-control" placeholder=" Content" name="content_two">{{ @$data->content_two }}</textarea>
                                                    @error('content_two')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>   <br>                                       
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Image/Icon</label></div>
                                                <div class="col-md-9">
                                                    {{-- <input type="file" class="form-control" name="image" /> --}}
                                                    <span>Upload Maximum File Size is 2Mb</span>
                                                    <input type="file" id="img_file" name="image_two" class="form-control" accept=".png, .jpg, .jpeg"  onChange="img_pathUrl(this);"><br>
                                                  

                                                    @error('image_two')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
											<br>
											<div class="row">
                                                <div class="col-md-3"><label class="form-label">Title Three</label></div>
                                                <div class="col-md-9"><input type="text" class="form-control" placeholder="Title " name="title_three" id="title_three" value="{{ @$data->heading }}" />
                                                    @error('title_three')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div><br>
                                         
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label"> Content Three</label></div>
                                                <div class="col-md-9"><textarea class="ckeditor form-control" placeholder=" Content" name="content_three">{{ @$data->content_three }}</textarea>
                                                    @error('content_three')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>   <br>                                       
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Image/Icon</label></div>
                                                <div class="col-md-9">
                                                    {{-- <input type="file" class="form-control" name="image" /> --}}
                                                    <span>Upload Maximum File Size is 2Mb</span>
                                                    <input type="file" id="img_file" name="image_three" class="form-control" accept=".png, .jpg, .jpeg"  onChange="img_pathUrl(this);"><br>
                                                  

                                                    @error('image_three')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
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
  
  <script src="{{ asset('js/ckeditor/ckeditor.js')}}"></script>
  <script>

	$('.editor1').each(function(){
		this.contentEditable = true;
	});
	CKEDITOR.replace('editor1', {
		extraPlugins: 'devtools',
		allowedContent: true,
		devtools_allowedContent: true
	});
	CKEDITOR.replace('editor1', {
		extraAllowedContent: 'div(*)[*]; a(*)[*]; i(*)[*]'
	});
  </script>
@endsection
