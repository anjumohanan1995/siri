@extends('layouts.app')

@section('content')

<!-- main-content -->
<div class="main-content app-content">
	<!-- container -->
	<div class="main-container container-fluid">
		<!-- breadcrumb -->
		<div class="breadcrumb-header justify-content-between row me-0 ms-0 mb-3" >
			<div class="col-xl-3">
				<h4 class="content-title mb-2">Add Brand </h4>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">

						<li class="breadcrumb-item active" aria-current="page"><i class="side-menu__icon fe fe-box"> </i> - Brand</li>
					</ol>
				</nav>
			</div>
		</div>
		<!-- /breadcrumb -->
		<!-- main-content-body -->
		<div class="main-content-body">
				
	        </div>

			<!-- row -->

			<!-- /row -->
			<!-- row -->
			<div class="row row-sm">
				<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 ">
					<div class="card">

							<div class="card-body">

							
								<form name="createForm"  method="post" action="{{route('brands.store')}}" enctype="multipart/form-data">
                           @csrf
									<input type="hidden" name="user_id" value="{{ \Auth::user()->id}}">

									<div class="form-group">

                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Title</label></div>
                                                <div class="col-md-9"><input type="text" class="form-control" placeholder="Title" name="title" id="title" />
                                                    @error('title')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div><br>
                                         
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label"> Description</label></div>
                                                <div class="col-md-9"><textarea class="ckeditor form-control" placeholder=" Content" name="content"></textarea>
                                                    @error('content')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>   <br>                                       
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Image</label></div>
                                                <div class="col-md-9">
                                                    {{-- <input type="file" class="form-control" name="image" /> --}}
                                                    <span>Upload Maximum File Size is 2Mb</span>
                                                    <input type="file" id="img_file" name="icon" class="form-control" accept=".png, .jpg, .jpeg"  onChange="img_pathUrl(this);"><br>
                                                  

                                                    @error('image')
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
@endsection
