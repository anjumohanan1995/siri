@extends('layouts.app')

@section('content')	<!-- main-content -->
<!-- main-content -->
<div class="main-content app-content">
	<!-- container -->
	<div class="main-container container-fluid">
		<!-- breadcrumb -->
		<div class="breadcrumb-header justify-content-between row me-0 ms-0" >
			<div class="col-xl-3">
				<h4 class="content-title mb-2">Create</h4>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">

						<li class="breadcrumb-item active" aria-current="page"><i class="side-menu__icon fe fe-user"> </i> - Student Applications</li>
					</ol>
				</nav>
			</div>
			<div class="d-flex my-auto col-xl-9 pe-0">
				<div class="card">
            		<div class="main-content-body main-content-body-mail card-body p-0">
                		<div class="card-body pt-2 pb-2">

                    		<div class="row row-sm-8">


                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                    <label>Name</label>
		                        	<input class="form-control" placeholder="Name" type="text" name="name" id="name">
		                        </div>
								
		                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                    <label>&nbsp;</label>
                                    <button class="btn ripple btn-success btn-block" type="submit" id="submit">Search</button>
		                        </div>
                    		</div>
                		</div>
            		</div>
       			</div>
			</div>
		</div>
		<!-- /breadcrumb -->
		<!-- main-content-body -->
		<div class="main-content-body">
			<!-- row -->

			<div class="row row-sm">

				<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 ">
					<div class="card">
                        <div class="alert" id="success" class="bg-success">
                            <span id="success_message"></span>
                            </div>
						<div class="card-body  table-new">
                            <div class="row mb-3">
								@if(@$vertical->id ==null)
                                <a href="{{ route('admin-verticals.create') }}">
                                <div class="col-md-1 col-6 text-center" id="refresh">
                                    <div class="task-box bg-primary-gradient  mb-0">
                                        <p class="mb-0 tx-12">Create </p>
                                        <h3 class="mb-0"><i class="fa fa-plus"></i></h3>
                                    </div>
                                </div>
                            </a>
							@endif

                            </div>


<div >

							<table id="verticalTable" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th> Sl No</th>
                                        <th> Title</th>
                                        <th> Sub Title</th>
                                        <th> Content</th>
                                        <th> Created At</th>
                                     
										<th>Action </th>

									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
<br>
						</div>
					</div>
				</div>
			</div>
		<!-- /row -->
		</div>
						<!-- /row -->
	</div>
	<!-- /container -->
</div></div>
<!-- /main-content -->


<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

<script src="{{ asset('js/toastr.js') }}"></script>

@if (session('status'))
<script>
    toastr.success('{{ session("status") }}', 'Success!')
</script>
@endif

<script type="text/javascript">


        $(document).ready(function(){
			
     	   var table = $('#verticalTable').DataTable({
            processing: true,
            serverSide: true,
           // info: false,
	        buttons: [
	            'copyHtml5',
	            'excelHtml5',
	            'csvHtml5',
	            'pdfHtml5'
	        ],
             "ajax": {

			       	"url": "{{route('getVerticals')}}",
			       	// "data": { mobile: $("#mobile").val()}
			       	"data": function ( d ) {
			        	return $.extend( {}, d, {
                            "type":$("#school_type").val(),
				            "name": $("#name").val(),
							 "application": $("#application").val(),
				            "delete_ctm": $("#delete_ctm").val(),


			          	});
       				}
       			},

             columns: [
                { data: 'sl_no' },
                { data: 'title' },
                { data: 'sub_title' },
                { data: 'content' },
             
                { data: 'created_at' },
                { data: 'edit' },


			],
            columnDefs: [ { type: 'date', 'targets': [4] } ],
order: [[ 4, 'desc' ]]

         });



      	 table.draw();

      	$('#submit').click(function(){

        	table.draw();
    	});
    	$('#refresh').click(function(){
      		$("#delete_ctm").val('');
        	table.draw();
    	});




    	$('#delete').click(function(){
    		$("#delete_ctm").val(1);
        	table.draw();
    	});





         

      });
      </script>


@endsection
