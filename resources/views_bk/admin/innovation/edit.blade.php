@extends('layouts.app')

@section('content')
<!-- main-content -->
<div class="main-content app-content">
	<!-- container -->
	<div class="main-container container-fluid">
		<!-- breadcrumb -->
		<div class="breadcrumb-header justify-content-between row me-0 ms-0 mb-3" >
			<div class="col-xl-3">
				<h4 class="content-title mb-2"> Edit Home Page Content  </h4>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">

						<li class="breadcrumb-item active" aria-current="page"><i class="side-menu__icon fe fe-box"> </i> - Edit Home Page Content </li>
					</ol>
				</nav>
			</div>
		</div>
		<!-- /breadcrumb -->
		<!-- main-content-body -->
		<div class="main-content-body">
				<div id="success_message" class="ajax_response" style="display: none;">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
	                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>Content  Updated Successfully
	            </div>
	        </div>

			<!-- row -->

			<!-- /row -->
			<!-- row -->
			<div class="row row-sm">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 ">
					<div class="card">

							<div class="card-body">

								<div class="mb-4 main-content-label">Home Page Content  - Information</div>
								<form name="createForm"  method="post" action="{{url('homepage/update/'.$data->id)}}" enctype="multipart/form-data">
                                    	@csrf
									<input type="hidden" name="user_id" value="{{ \Auth::user()->id}}">

									<div class="form-group">

										<div class="row">
											<div class="col-md-3"><label class="form-label">Section</label></div>
											<div class="col-md-9">
												<select class="form-control"  name="section" required>
													<option value="">Select Section</option>
													<option value="First Section"  @if($data->section=='First Section') selected @endif >First Section</option>
													<option value="Middle Section" @if($data->section=='Middle Section') selected @endif>Middle Section</option>
                                                    <option value="Vision and Values" @if($data->section=='Vision and Values') selected @endif>Vision and Values</option>
													<option value="Footer Section" @if($data->section=='Footer Section') selected @endif>Footer Section</option>
                                                    <option value="Others" @if($data->section=='Others') selected @endif>Others</option>
                                                </select>

												@error('section')
													<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
                                        <div class="other">
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Title</label></div>
                                                <div class="col-md-9"><input type="text" class="form-control" placeholder="Title" name="name" id="name" />
                                                    @error('name')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Head Line</label></div>
                                                <div class="col-md-9"><input type="text" class="form-control" placeholder="Head Line" name="head_line" id="head_line" />
                                                    @error('head_line')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label"> Description</label></div>
                                                <div class="col-md-9"><textarea class="ckeditor form-control" placeholder=" Description" name="description"></textarea>
                                                    @error('description')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Image Title</label></div>
                                                <div class="col-md-9"><input type="text" class="form-control" placeholder="Image Title" name="image_title"  />
                                                    @error('image_title')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Image</label></div>
                                                <div class="col-md-9">
                                                    {{-- <input type="file" class="form-control" name="image" /> --}}
                                                    <span>Upload Maximum File Size is 2Mb</span>
                                                    <input type="file" id="img_file" name="image" class="form-control" accept=".png, .jpg, .jpeg"  onChange="img_pathUrl(this);"><br>
                                                    <img src="" id="img_url" alt=" Image" class="form-control">



                                                    @error('image')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Experience</label></div>
                                                <div class="col-md-9"><input type="text" class="form-control" placeholder="5 Years" name="experience" id="experience" required/>
                                                    @error('experience')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vision" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Vision</label></div>
                                                <div class="col-md-9">
                                                    <textarea class="ckeditor form-control" placeholder="Vision" name="vision" required style="height: 150px;">{!! $data->vision !!}</textarea><br>
                                                    @error('vision')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Vision Content</label></div>
                                                <div class="col-md-9"><textarea class="ckeditor form-control" placeholder="Vision Content" name="vision_content">{!! $data->vision_content !!}</textarea><br>
                                                    @error('vision_content')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-3">
                                                        <label class="form-label">Vision Background Color</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="color" name="color" class="form-control"  id="color" value="{{@$slider->color??''}}">
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-3"><label class="form-label">Vision Background Image</label></div>
                                                    <div class="col-md-9">
                                                    <input type="file" name="image" class="form-control" accept="image/*" >
                                                    <br>
                                                          <input type="hidden" name="imgs" value="{{@$slider->image}}">
                                                    </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Values</label></div>
                                                <div class="col-md-9">
                                                    <textarea class="ckeditor form-control" placeholder="Values" name="values" required>{!! $data->values !!}</textarea>
                                                    @error('values')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"><label class="form-label">Values Content</label></div>
                                                <div class="col-md-9"><textarea class="ckeditor form-control" placeholder="Values Content" name="value_content">{!! $data->value_content !!}</textarea>
                                                    @error('value_content')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label">Values Background Color</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="color" name="vcolor" class="form-control"  id="color" value="{{@$slider->color??''}}">
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-3"><label class="form-label">Values Background Image</label></div>
                                                <div class="col-md-9">
                                                <input type="file" name="vimage" class="form-control" accept="image/*" >
                                                <br>
                                                      <input type="hidden" name="imgs" value="{{@$slider->image}}">
                                                </div>

                                        </div>
                                        <div class="mb-4 main-content-label">Other Information</div>

                                        <div class="row">
                                            <div class="col-md-3"><label class="form-label">First Person`s Name</label></div>
                                            <div class="col-md-9"><input type="text" class="form-control" placeholder="Name" name="name1" id="name1"  />
                                                @error('values')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><label class="form-label">Designation</label></div>
                                            <div class="col-md-9"><input type="text" class="form-control" placeholder="Designation" name="designation1" id="designation1"  />
                                                @error('values')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><label class="form-label">Photo</label></div>
                                            <div class="col-md-9">
                                                <input type="file" name="image1" class="form-control" accept="image/*" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><label class="form-label">Second Person`s Name</label></div>
                                            <div class="col-md-9"><input type="text" class="form-control" placeholder="Name" name="name2" id="name2"  />
                                                @error('values')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><label class="form-label">Designation</label></div>
                                            <div class="col-md-9"><input type="text" class="form-control" placeholder="Designation" name="designation2" id="designation2"  />
                                                @error('values')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><label class="form-label">Photo</label></div>
                                            <div class="col-md-9">
                                                <input type="file" name="image2" class="form-control" accept="image/*" >
                                            </div>

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
                    <script src="{{ asset('assets/js/ckeditor/ckeditor.js')}}"></script>
<script >
    function img_pathUrl(input){
       $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
   }
   $(document).ready(function() {

    var selectedValue = $('select[name="section"]').val();

           if (selectedValue === "Vision and Values") {
           $('.other').hide();
           $('#name').removeAttr('required');
           $('#head_line').removeAttr('required');
           $('#experience').removeAttr('required');
           $('#vision').attr('required', 'required');
           $('#values').attr('required', 'required');

           $('.vision').show();
           } else {
               $('#name').attr('required', 'required');
               $('#head_line').attr('required', 'required');
               $('#experience').attr('required', 'required');
               $('#vision').removeAttr('required');
               $('#values').removeAttr('required');
           $('.other').show();
           $('.vision').hide();
           }

   });
</script>
@endsection
