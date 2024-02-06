@extends('layouts.app')
@section('content')
<!-- main-content -->
				<div class="main-content app-content">
					<!-- container -->
					<div class="main-container container-fluid">
						<!-- breadcrumb -->
						<div class="breadcrumb-header justify-content-between row me-0 ms-0" >
							<div class="col-xl-3">
								<h4 class="content-title mb-2">Laboratory
</h4>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">

										<li class="breadcrumb-item active" aria-current="page"><i class="side-menu__icon fe fe-box"> </i> - Laboratory

</li>
									</ol>
								</nav>
							</div>
							<div class="d-flex my-auto col-xl-9 pe-0">
								 <div class="card">
            <div class="main-content-body main-content-body-mail card-body p-0">
                <div class="card-body pt-2 pb-2">
               <!--  <form name="searchForm" id="searchForm" method="post" action="javascript:void(0)">
					@csrf -->
                    <div class="row row-sm">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                        	<input class="form-control" placeholder="Patient" type="text" name="patient" id="patient">
                        </div>
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                            <input class="form-control" placeholder="Aadhar No." type="text" name="adhar" id="adhar">
                          </div>
						<div class="col-lg mg-t-10 mg-lg-t-0">
                        	<input class="form-control" placeholder="Abha No." type="text" name="abha" id="abha">
                        </div>
						<div class="col-lg mg-t-10 mg-lg-t-0">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                	<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                </div>
                                <input type="text" id="datepicker" name="from_date"  class="form-control from_date" placeholder="From Date">
                            </div>
                        </div>
						<div class="col-lg mg-t-10 mg-lg-t-0">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                	<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                </div>
                                <input type="text" id="to_datepicker" name="to_date"class="form-control" placeholder="To Date">
                            </div>
                        </div>


                        <div class="col-lg mg-t-10 mg-lg-t-0">
                        	<button class="btn ripple btn-success btn-block" type="submit" id="submit" >Search</button>
                        </div>
                    </div>
                <!-- </form> -->
                </div>
            </div>
        </div>
							</div>
							<div class="d-flex my-auto col-xl-9 pe-0">

							</div>
						</div>
						<!-- /breadcrumb -->
						<!-- main-content-body -->
						<div class="main-content-body">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-window-close"></i></button>                                {{ $message }}
                            </div>

                        @endif
							<!-- row -->

							<!-- /row -->
							<!-- row -->
							<div class="row row-sm">
								<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 ">
									<div class="card"><div class="card-body  table-new">
										 <div class="row mb-3">
										 @if(\Auth::user()->role != "Approver")
											 <div class="col-md-1 col-6 text-center"> <div class="task-box primary mb-0"> <a href="{{route('contact-us.create')}}"><p class="mb-0 tx-12">Add </p><h3 class="mb-0"><i class="fa fa-plus"></i></h3></a> </div> </div>
                                            
                                          
											 @else
											 <div class="col-md-2 col-6 text-center" id="home"> <div class="task-box primary mb-0"> <a><p class="mb-0 tx-12">Home </p><h3 class="mb-0"><i class="fa fa-spinner"></i></h3></a> </div> </div>

											 <div class="col-md-2 col-6 text-center" id="rejection_list"> <div class="task-box danger  mb-0" value="4" > <a><p class="mb-0 tx-12">Rejection  </p><h3 class="mb-0"><i class="fa fa-ban"></i></h3></a> </div> </div>
											 <div class="col-md-2 col-6 text-center" id="appoved_list"> <div class="task-box success  mb-0"><a> <p class="mb-0 tx-12">Approval  </p><h3 class="mb-0"><i class="fa fa-check"></i></h3> </a></div> </div>

											 @endif

										</div>

										<input type="hidden" class="form-control" placeholder="Name" name="role" id="role" value="{{ \Auth::user()->role}}" />
										<input type="hidden" class="form-control" placeholder="Name" name="hospital_id" id="hospital_id" value="{{ \Auth::user()->hospital_id}}" />


										<table id="example" class="table table-striped table-bordered" style="width:100%">
       											<thead>
													<tr>
														<th>Patient ID</th>
                                                        <th>Patient Name</th>
                                                        <th>Mobile </th>
                                                        <th>Address </th>
                                                        <th>Aadhar No.</th>
														<th>Abha No.</th>
														<th>Test Name</th>
														<th>Amount </th>
														<th>Date</th>
                                                        <th>Created At</th>
														<th>Time</th>
														<th>Verification status</th>
                                                        <th>Approval status</th>
                                                        <th>Action</th>


													</tr>
												</thead>

         										<tbody>

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
				<!-- /main-content -->
				<div class="modal fade" id="confirmation-popup">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content country-select-modal border-0">
                <div class="modal-header offcanvas-header">
                    <h6 class="modal-title">Are you sure?</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body p-5">
                    <div class="text-center">
                        <h4>Are you sure to delete this Laboratory?</h4>
                    </div>
                    <form id="ownForm">
                        @csrf
                    <input type="hidden" id="requestId" name="requestId" value="" />
                    <div class="text-center">
                        <button type="button" onclick="ownRequest()" class="btn btn-primary mt-4 mb-0 me-2">Yes</button>
                        <button class="btn btn-default mt-4 mb-0" data-bs-dismiss="modal" type="button">No</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

	<div class="modal fade" id="approve-popup">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content country-select-modal border-0">
                <div class="modal-header offcanvas-header">
                    <h6 class="modal-title">Are you sure?</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body p-5">
                    <div class="text-center">
                        <h4>Are you sure to approve this Laboratory?</h4>
                    </div>
                    <form id="ownForm">

                        @csrf
                    <input type="hidden" id="requestId" name="requestId" value="" />
                    <div class="text-center">
                        <button type="button" onclick="approve()" class="btn btn-primary mt-4 mb-0 me-2">Yes</button>
                        <button class="btn btn-default mt-4 mb-0" data-bs-dismiss="modal" type="button">No</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


	<div class="modal fade" id="rejection-popup">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content country-select-modal border-0">
                <div class="modal-header offcanvas-header">
                    <h6 class="modal-title">Are you sure to reject this Laboratory?</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body p-5">
					<form id="ownForm">
                        @csrf
                    <div class="text-center">
                        <h5>Reason for Rejection</h5>
						<textarea class="form-control" name="reason" id="reason" requred></textarea>
						<span id="rejection"></span>
					</div>

                    <input type="hidden" id="requestId" name="requestId" value="" />
                    <div class="text-center">
                        <button type="button" onclick="reject()" class="btn btn-primary mt-4 mb-0 me-2">Yes</button>
                        <button class="btn btn-default mt-4 mb-0" data-bs-dismiss="modal" type="button">No</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>



<script type="text/javascript">

$(document).on("click",".deleteItem",function() {

     var id =$(this).attr('data-id');
     $('#requestId').val($(this).attr('data-id') );
     $('#confirmation-popup').modal('show');
});
$(document).on("click",".rejectItem",function() {

     var id =$(this).attr('data-id');
     $('#requestId').val($(this).attr('data-id') );
     $('#rejection-popup').modal('show');
});
$(document).on("click",".approveItem",function() {

     var id =$(this).attr('data-id');
     $('#requestId').val($(this).attr('data-id') );
     $('#approve-popup').modal('show');
});

  /*$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });*/
         function ownRequest() {

            var reqId = $('#requestId').val();
            console.log(reqId);
            $.ajax({
            	headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '{{ url("laboratory/delete") }}'+'/'+reqId,
                method: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    },
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response.success);

                        $('#confirmation-popup').modal('hide');
                        $('#success_message').fadeIn().html(response.success);
							setTimeout(function() {
								$('#success_message').fadeOut("slow");
							}, 2000 );

                        $('#example').DataTable().ajax.reload();



                }
            })
        }
		function approve() {

		  var reqId = $('#requestId').val();
		  $.ajax({
			  headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
			  url: '{{ url("laboratory/approve") }}'+'/'+reqId,
			 // type: 'PATCH',
			  method: 'get',
			  data: '{"status": 1, "_token": "{{ csrf_token() }}"}',
			  contentType: false,
			  processData: false,
			  success: function(response) {
				  console.log(response.success);

					  $('#approve-popup').modal('hide');
					  $('#success_message').fadeIn().html(response.success);
						  setTimeout(function() {
							  $('#success_message').fadeOut("slow");
						  }, 2000 );

					  $('#example').DataTable().ajax.reload();



			  }
		  })
	    }

	    function reject() {
		   var reason = $('#reason').val();
		   if($('#reason').val() == ""){
			   rejection.innerHTML = "<span style='color: red;'>"+"Please enter the reason for rejection</span>";
		   }
		   else{
			   rejection.innerHTML ="";
			   var reqId = $('#requestId').val();
		   console.log(reqId);
		   $.ajax({
			   headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
			   url: '{{ url("laboratory/reject") }}'+'/'+reqId+'/'+reason,
			   method: 'get',
			   data: '{"status": 1, "reason": ' + reason + '}',
			   contentType: false,
			   processData: false,
			   success: function(response) {
				   console.log(response.success);

					   $('#rejection-popup').modal('hide');
					   $('#success_message').fadeIn().html(response.success);
						   setTimeout(function() {
							   $('#success_message').fadeOut("slow");
						   }, 2000 );

					   $('#example').DataTable().ajax.reload();



			   }
		   })

		   }
	    }



     $(document).ready(function(){

        $('#patient').on('change', function() {
            $("#patient_name").val(this.value);
          });
          $('#abha').on('change',function(e){
            $("#abha_number").val(this.value);
        });
          $('#datepicker').on('change', function() {
            $("#from_date_data").val(this.value);
          });
          $('#to_datepicker').on('change', function() {
            $("#to_date_data").val(this.value);
          });

		$('#rejection_list').val(4);
     	   var table = $('#example').DataTable({
            processing: true,
            serverSide: true,
            order: [
                [6, 'desc']
            ],
	        buttons: [
	            'copyHtml5',
	            'excelHtml5',
	            'csvHtml5',
	            'pdfHtml5'
	        ],
             "ajax": {

			       	"url": "{{route('getContact')}}",
			       	// "data": { mobile: $("#mobile").val()}
			       	"data": function ( d ) {
			        	return $.extend( {}, d, {
				            "patient": $("#patient").val(),
                            "adhar": $("#adhar").val(),
							"abha": $("#abha").val(),
							"role": $("#role").val(),
							"abha": $("#abha").val(),
				            "sc_id": $("#sc_id").val(),
				            "to_date": $("#to_datepicker").val(),
				            "from_date": $("#datepicker").val(),
				            "delete_ctm": $("#delete_ctm").val(),
							"rejection_list": $("#rejection_list").val(),
				            "hospital_id": $("#hospital_id").val(),

			          	});
       				}
       			},

             columns: [
                { data: 'patient_id' },
                { data: 'name' },
                { data: 'mobile' },
				{ data: 'address' },
                { data: 'adhar' },
				{ data: 'abha' },
                { data: 'diagonosis_name' },
                { data: 'amount' },
                { data: 'date' },
                { data: 'created_at', visible: false },
                { data: 'time' },
				{ data: 'verification' },
                { data: 'approval' },
                { data: 'edit' },


			],
            "order": [8, 'desc'],
            'ordering': true,
			columnDefs: [
				{
					"targets": 3,
					"className": "text-right",
			    }
 			]

         });



      	 table.draw();

      	$('#submit').click(function(){

        	table.draw();
    	});
    	$('#refresh').click(function(){
      		$("#delete_ctm").val('');
        	table.draw();
    	});
		$('#rejection_list').click(function(){
    		$('#rejection_list').val(2);
			table.draw();
    	});
		$('#appoved_list').click(function(){
    		$('#rejection_list').val(3);
			table.draw();
    	});
		$('#home').click(function(){
    		$('#rejection_list').val(4);
			table.draw();
    	});



    	$('#delete').click(function(){
    		$("#delete_ctm").val(1);
        	table.draw();
    	});





         // DataTable


      });
      </script>

<style>
	.text-right{
		float:right;
	}
</style>

@endsection
