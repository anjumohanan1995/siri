@extends('layouts.app')
@section('content')
<!-- main-content -->
<div class="main-content app-content">
   <!-- container -->
   <div class="main-container container-fluid">
      <!-- breadcrumb -->
      <div class="breadcrumb-header justify-content-between row me-0 ms-0" >
         <h4 class="content-title mb-2">   
            {{-- (  പട്ടികവർഗ്ഗ വികസന വകുപ്പിൽനിന്ന് വീടുകളുടെ നവീകരണത്തിനും അധികസൗകര്യങ്ങൾ ഏർപെടുത്തുന്നതിനും   പൂർത്തീകരിക്കുന്നതിനുമുള്ള 
            ധനസഹായത്തിനുള്ള അപേക്ഷ)   --}}
         </h4>
         @if ($message = Session::get('error'))
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-window-close"></i></button>                                {{ $message }}
         </div>
         @endif
      </div>
      <!-- /breadcrumb -->
  
      <div class="main-content-body">
         @if (session('success'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         @endif
         <!-- row -->
         <!-- row --> 
         <div class="row row-sm">
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
               <div class="card overflow-hidden">
                  <div class="card-body p-5">
                     <div id="btnHide" class="row justify-content-end m-3">
                        <a style="width: 50px" onclick="printDiv()"><img
                                src="{{ asset('admin/uploads/icons/printer.png') }}" alt=""></a>
                    </div>
                     <div id="print_content">
                     <h1
                        style="text-align: center;color: rgb(0, 0, 0);font-size: medium;  padding: 20px;line-height: 32px;font-weight: 600;"><u>
                      Details </u>
                     </h1>
                    
                     <div class="paper-1">
                        <div class="w-100">
                           <div class="row w-100">
                              <div class="col-5">
                                 <label> Title  </label><br>
                              </div>
                              <div class="col-1 w-100">
                                 <label> :  
                                 </label>
                              </div>
                              <div class="col-6">
                                 <label> 
                                 {{ @$vertical['title'] }}
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <br>
                     <div class="paper-1">
                        <div class="w-100">
                           <div class="row w-100">
                              <div class="col-5">
                                 <label> Sub Title  </label><br>
                              </div>
                              <div class="col-1 w-100">
                                 <label> :  
                                 </label>
                              </div>
                              <div class="col-6">
                                 <label> 
                                 {{ @$vertical['sub_title'] }}
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <br>
                     <div class="paper-1">
                        <div class="w-100">
                           <div class="row w-100">
                              <div class="col-5">
                                 <label>Content
                                 </label><br>
                              </div>
                              <div class="col-1 w-100">
                                 <label> :  
                                 </label>
                              </div>
                              <div class="col-6">
                                 <label> 
                              {!! @$vertical->content !!}
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <br>
                     <div class="paper-1">
                        <div class="w-100">
                           <div class="row w-100">
                              <div class="col-5">
                                 <label> Image 
                                 </label><br>
                              </div>
                              <div class="col-1 w-100">
                                 <label> :  
                                 </label>
                              </div>
                              <div class="col-6">
                                 <label> 
                                    @if(@$vertical['image'] !=null)
                                    <img src="{{ asset('vertical/'.@$vertical['image']) }}" width="150px" height="150px">
                                 @endif
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <br>
                     <div class="paper-1">
                        <div class="w-100">
                           <div class="row w-100">
                              <div class="col-5">
                                 <label>Banner Image 
                                 </label><br>
                              </div>
                              <div class="col-1 w-100">
                                 <label> :  
                                 </label>
                              </div>
                              <div class="col-6">
                                 <label> 
                                    @if(@$vertical['banner_image'] !=null)
                                    <img src="{{ asset('vertical/'.@$vertical['banner_image']) }}"  width="150px" height="150px">
                                 @endif
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                   
                     
                   
                 
                  </div>
                     <div class="row">
                        <div class="col-md-4 mb-4">
                        </div>
                        <div class="col-md-6 mb-6">
                           <a href="{{ route('admin-verticals.index') }}">  <input type="button" class="btn btn-primary" value="Back >>" >
                           </a>  
                        </div>
                     </div>
                     <br>
                    
               </div>
            </div>
         </div>
         
    

      @if(@$houseManagement->teo_view_status==1)
         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
            <div class="pt-2 card overflow-hidden">
            
               <div class="card-body">
                  
                        <div class="pb-2 row ">
                           <div class="col-5">
                              <label><i class="fas fa-eye" style="color: blue"></i>TEO Viewed Date  </label><br>
                           </div>
                           <div class="col-1 w-100">
                              <label> :  
                              </label>
                           </div>
                           <div class="col-6">
                              <label> 
                              {{ @$houseManagement['teo_view_date'] }}
                              </label>
                         
                     </div>
                  </div>
                  <hr>
                  <div class="pb-2 row ">
                     <div class="col-5">
                        <label>Status  </label><br>
                     </div>
                     <div class="col-1 w-100">
                        <label> :  
                        </label>
                     </div>
                     <div class="col-6">
                      @if(@$houseManagement->teo_status == null)
                      <button class="btn btn-warning" >Pending</button>
                      @elseif(@$houseManagement->teo_status == 1)
                      <button class="btn btn-success" >Approved</button>
                      @elseif(@$houseManagement->teo_status == 2)
                      <button class="btn btn-danger" >Rejected</button> 
                     @endif
                     </div>
            </div>
            
            @if(@$houseManagement->teo_status == 2)
            <div class="pb-2 row ">
               <div class="col-5">
                  <label>Rejected Reason  </label><br>
               </div>
               <div class="col-1 w-100">
                  <label> :  
                  </label>
               </div>
               <div class="col-6">
            {{ @$houseManagement->teo_status_reason }}
            
               </div>
      </div>
      @endif
      @if(@$houseManagement->teo_status != null)
            <div class=" pb-2 row ">
               <div class="col-5">
                  @if(@$houseManagement->teo_status == 1)
                  <label>Approved Date  </label>
                  @elseif(@$houseManagement->teo_status == 2)
                  <label>Rejected Date  </label>
                 @endif
                  
                  <br>
               </div>
               <div class="col-1 w-100">
                  <label> :  
                  </label>
               </div>
               <div class="col-6">
                  @if(@$houseManagement['teo_status_date']!=null) {{ \Carbon\Carbon::parse(@$houseManagement['teo_status_date'])->format('d-m-Y h:i a') }}@endif
              
               
               </div>
            </div>
      @endif
      
               </div>
            </div>
         </div>
          @endif


       

    </div>
   </div>
</div>
</div>
<meta name="csrf_token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

<script src="{{ asset('js/toastr.js') }}"></script>



   
<script>
   $(document).ready(function() {
       	$('#example').DataTable();
   });
   function printDiv() {
        var printContents = document.getElementById('print_content').innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
            }
</script>
<!-- main-content-body -->
@endsection