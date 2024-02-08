@extends('layouts.app')
@section('content')

	<!-- main-content -->
				<div class="main-content app-content">
					<!-- container -->
					<div class="main-container container-fluid">
						<!-- breadcrumb -->
						<div class="breadcrumb-header justify-content-between row me-0 ms-0" >
							<div class="col-xl-3">
								<h4 class="content-title mb-2">Dymanic Pages
</h4>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">

										<li class="breadcrumb-item active" aria-current="page"><i class="side-menu__icon fe fe-box"> </i> - User
</li>
									</ol>
								</nav>
							</div>
							<div class="d-flex my-auto col-xl-9 pe-0">
								 <div class="card">
          
        </div>
							</div>
						</div>
						<!-- /breadcrumb -->
						<!-- main-content-body -->
						<div class="main-content-body">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-window-close"></i></button>
                                {{ $message }}
                            </div>

                        @endif
							<!-- row -->

							<!-- /row -->
							<!-- row -->
							<div class="row row-sm">
								<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 ">
									<div class="card"><div class="card-body  table-new">
										

    										<table id="example" class="table table-striped table-bordered" style="width:100%">
       											<thead>
													<tr>
														<th>Menus</th>
														<th>link</th>
                                                        <th >Action</th>



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
                        <h4>Are you sure to delete this Contact?</h4>
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
    <meta name="csrf_token" content="{{ csrf_token() }}" />
	<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

	<script src="{{ asset('js/toastr.js') }}"></script>
	
	@if (session('status'))
	<script>
		toastr.success('{{ session("status") }}', 'Success!')
		
	</script>
	@endif
<script type="text/javascript">

$(document).on("click",".deleteItem",function() {

     var id =$(this).attr('data-id');
     $('#requestId').val($(this).attr('data-id') );
     $('#confirmation-popup').modal('show');
});


         function ownRequest() {

            var reqId = $('#requestId').val();
            console.log(reqId);
            $.ajax({
            	headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                url: '{{ url("contact-us/delete") }}'+'/'+reqId,
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



     $(document).ready(function(){

     	   var table = $('#example').DataTable({
            processing: true,
            serverSide: true,

	        buttons: [
	            'copyHtml5',
	            'excelHtml5',
	            'csvHtml5',
	            'pdfHtml5'
	        ],
             "ajax": {

			       	"url": "{{route('getDynamicMenus')}}",
			       	// "data": { mobile: $("#mobile").val()}
			       	"data": function ( d ) {
			        	return $.extend( {}, d, {
				            "mobile": $("#mobile").val(),
				            "name": $("#name").val(),
				            "role": $("#role").val(),
				            //"from_date": $("#datepicker").val(),
				            "delete_ctm": $("#delete_ctm").val(),


			          	});
       				}
       			},

             columns: [
                { data: 'menu' },
                { data: 'link' },
                { data: 'edit' }


			],
            "order": [1, 'desc'],
            'ordering': true,
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





         // DataTable


      });
      </script>


@endsection
