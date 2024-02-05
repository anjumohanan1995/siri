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
           
                    
                           
                            @if(@$approach->id)
                            <form name="patientForm" id="patientForm" method="post" action="{{ route('admin-approach.update',$approach->id ) }}" enctype="multipart/form-data">
                            @csrf
                               @method('PATCH')
                               @else
                               <form name="patientForm" id="patientForm" method="post" action="{{ route('admin-approach.store') }}" enctype="multipart/form-data">
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
                                    <input type="text" value="{{ old('title',@$approach->title) }}"  class="form-control" placeholder="Title " name="title" />
                                    @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">
                                      Sub Title 
                                    </label>
                                    <input type="text" value="{{ old('sub_title',@$approach->sub_title) }}"  class="form-control" placeholder="Sub Title " name="sub_title" />
                                    @error('sub_title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                               
                            </div>
                           
                               <div class="pt-5 row">   
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">   Sub Title  1</label>
                                    <textarea type="text" value="{{ old('sub_title1',@$approach->sub_title1) }}"  class="form-control" placeholder="Sub Title 1" name="sub_title1" >{{ old('sub_title',@$approach->sub_title1) }}</textarea>
                                    @error('sub_title1')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label class="form-label">Content
                                    </label>
                                    <textarea type="text" value="{{ old('content') }}"  class="form-control" placeholder="Content" name="content" id="content">{{ old('content',@$approach->content) }}</textarea>
                                  
                                   
                                    @error('class_start_date')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                      </div>
                                     
                                    
                                   
                                   
                                  
                                </div>


                                <div class="pt-5 row">   
                                    <div class="col-md-6 mb-6">
                                        <label class="form-label">Image
                                        </label>
                                        <input type="file" value="{{ old('image') }}"  class="form-control" name="image" id="image" accept="image/*">                                     
                                       @if(@$approach->image)
                                       <br>
                                       <img src="{{ asset('approach/'.@$approach->image) }}" width ="150px" height="150px">
                                       @endif
                                        @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                          </div>
                                    <div class="col-md-6 mb-6">
                                        <label class="form-label"> Title  1</label>
                                        <input type="text" value="{{ old('title1',@$approach->title1) }}"  class="form-control" placeholder=" Title 1" name="title1" >
                                        @error('title1')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                  
                                         
                                        
                                       
                                       
                                      
                                    </div>
                                <div class="pt-5 row">  
                                    <div class="col-md-6 mb-6">
                                        <label class="form-label">Content 1
                                        </label>
                                        <textarea type="text" value="{{ old('content1') }}"  class="form-control" placeholder="Content 1" name="content1" id="content1">{{ old('content1',@$approach->content1) }}</textarea>
                                      
                                       
                                        @error('content1')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                          </div>
                                    <div class="col-md-6 mb-6">
                                        <label class="form-label">Image 1
                                        </label>
                                        <input type="file" value="{{ old('image1') }}"  class="form-control" name="image1" id="image1" accept="image/*">                                     
                                       @if(@$approach->image1)
                                       <br>
                                       <img src="{{ asset('approach/'.@$approach->image1) }}" width ="150px" height="150px">
                                       @endif
                                        @error('image1')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                          </div>
                                        </div>
                                        <div class="pt-5 row">  
                                            <div class="col-md-6 mb-6">
                                                <label class="form-label"> Title 2</label>
                                                <input type="text" value="{{ old('title2',@$approach->title2) }}"  class="form-control" placeholder=" Title 2" name="title2" >
                                                @error('title2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-6">
                                                <label class="form-label">Content 2
                                                </label>
                                                <textarea type="text" value="{{ old('content2') }}"  class="form-control" placeholder="Content 2" name="content2" id="content2">{{ old('content2',@$approach->content2) }}</textarea>
                                              
                                               
                                                @error('content2')
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
                                        @if(@$approach->banner_image)
                                        <img src="{{ asset('approach/'.@$approach->banner_image) }}" width ="150px" height="150px">
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
  document.addEventListener('DOMContentLoaded', function () {
        CKEDITOR.replace('content');
        CKEDITOR.replace('content1');
        CKEDITOR.replace('content2');
    });
</script>
<!-- main-content-body -->
@endsection
