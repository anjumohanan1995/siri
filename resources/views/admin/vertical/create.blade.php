@extends('layouts.app')

@section('content')
<!-- main-content -->
<div class="main-content app-content">
	<!-- container -->
	<div class="main-container container-fluid">
		<!-- breadcrumb -->
		<div class="breadcrumb-header justify-content-between row me-0 ms-0" >
			
				<h4 class="content-title mb-2">create

</h4>
				

            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-window-close"></i></button>                                {{ $message }}
                </div>
            @endif
		</div>
		<!-- /breadcrumb -->


<div class="main-content-body">
    <div class="row row-sm mt-4">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 ">
           
                    
                           
                            @if(@$vertical->id)
                            <form name="patientForm" id="patientForm" method="post" action="{{ route('admin-verticals.update',$vertical->id ) }}" enctype="multipart/form-data">
                            @csrf
                               @method('PATCH')
                               @else
                               <form name="patientForm" id="patientForm" method="post" action="{{ route('admin-verticals.store') }}" enctype="multipart/form-data">
                                @csrf
                            @endif
                        <div class="card">
                            <div class="card-body">
                        <div class="form-group">
                            <div class="row">   
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">
                                        Title
                                    </label>
                                    <input type="text" value="{{ old('title',@$vertical->title) }}"  class="form-control" placeholder="Title " name="title" />
                                    @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Sub Title </label>
                                    <textarea type="text" value="{{ old('sub_title',@$vertical->sub_title) }}"  class="form-control" placeholder="Sub Title" name="sub_title" >{{ old('sub_title',@$vertical->sub_title) }}</textarea>
                                    @error('sub_title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                           
                               <div class="pt-5 row">   
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Content
                                    </label>
                                    <textarea type="text" value="{{ old('content') }}"  class="form-control" placeholder="Content" name="content" id="content">{{ old('content',@$vertical->content) }}</textarea>
                                  
                                   
                                    @error('class_start_date')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                      </div>
                                      <div class="col-md-6 mb-6">
                                        <label class="form-label">Image
                                        </label>
                                        <input type="file" value="{{ old('image') }}"  class="form-control" name="image" id="image" accept="image/*">                                     
                                       @if(@$vertical->image)
                                       <br>
                                       <img src="{{ asset('vertical/'.@$vertical->image) }}" width ="150px" height="150px">
                                       @endif
                                        @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                          </div>
                                    
                                   
                                   
                                  
                                </div>
                                <div class="pt-5 row">  
                                    <div class="col-md-6 mb-6">
                                        <label class="form-label">Banner Image
                                        </label>
                                        <input type="file" value="{{ old('banner_image') }}"  class="form-control" name="banner_image" id="banner_image" accept="image/*">                                     
                                       <br>
                                        @if(@$vertical->banner_image)
                                        <img src="{{ asset('vertical/'.@$vertical->banner_image) }}" width ="150px" height="150px">
                                        @endif
                                        @error('banner_image')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                          </div> 
                                </div>
                         
                           
                        </div>
                        <div class="row">
                            <div class="col-md-2 mb-2">
                                
                                    </div>
                                    <div class="col-md-8 mb-8">
                             
                                        <button type="reset" id="submit1" class="btn btn-primary waves-effect waves-light text-start submit">Cancel</button>
                                        <button type="submit" id="submit" class="btn btn-warning waves-effect waves-light text-start submit">Save</button>
                                    </div>
                                    
        
                                </div><br>  
                    </div>
                </div>

               
                 
                                         
                      
                                 
                            
                   
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>

<!-- Include CKEditor from CDN -->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    // Your CKEditor initialization without jQuery
    document.addEventListener('DOMContentLoaded', function () {
        CKEDITOR.replace('content', {
            enterMode: CKEDITOR.ENTER_BR,
            shiftEnterMode: CKEDITOR.ENTER_BR,
            autoParagraph: false,
        });
    });
</script>

<!-- main-content-body -->
@endsection
