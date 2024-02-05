@extends('layouts.app')

@section('content')
    <!-- main-content -->


    <!-- main-content -->
    <div class="main-content app-content">
        <!-- container -->
        <div class="main-container container-fluid">
            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between row me-0 ms-0">
                <div class="col-xl-3">
                    <h4 class="content-title mb-2">Home Page Content Management</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item active" aria-current="page"><i class="side-menu__icon fe fe-user"> </i>
                                - Home Page Content</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-auto col-xl-9 pe-0">
                    <div class="card">
                        <div class="main-content-body main-content-body-mail card-body p-0">
                            <div class="card-body pt-2 pb-2">

                                <div class="row row-sm">
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label>Title</label>
                                        <input class="form-control" placeholder="Title" type="text" name="title"
                                            id="title">

                                    </div>
                                    






                                    <div class="col-lg mg-t-10 mg-lg-t-0"> <label></label><button
                                            class="btn ripple btn-success btn-block" type="submit"
                                            id="submit">Search</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /breadcrumb -->
            <!-- main-content-body -->
            <div class="main-content-body">
                @if ($message = Session::get('success'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ><i class="fa fa-window-close"></i></button>
                                  {{ $message }}
                              </div>

                            @endif
                            @if ($message = Session::get('danger'))
                                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-window-close"></i></button>
                                      {{ $message }}
                                  </div>

                             @endif

                <!-- row -->

                <!-- /row -->
                <!-- row -->
                <div class="row row-sm">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 ">
                        <div class="card">
                            <div class="card-body  table-new">
                                <div class="row mb-3">

                                    <div class="col-md-1 col-6 text-center">
                                        <div class="task-box primary mb-0">
                                            <a href="{{ route('innovation.create') }}">
                                                <p class="mb-0 tx-12">Add </p>
                                                <h3 class="mb-0"><i class="fa fa-plus"></i></h3>
                                            </a>
                                        </div>
                                    </div>
                                  
                                    <!-- <div class="col-md-8 col-6 text-center pt-3">
                <div class="float-end">
                 <select name="copytype-ESO" class="form-control" id="edit-copytype-ESO"><option value="" selected="selected">Choose one</option>
                  <option value="EO-ESO">Thiruvananthapuram</option>
                  <option value="EO-SHP">Kollam</option>
                  <option value="EO-PI">Kottayam</option>
                  <option value="EO-CI">Thrissur</option>
                  <option value="EO-PL">Kannur</option>
                  <option value="IO-IO">Alappuzha</option>
                 </select></div>
               </div>	 -->

                                </div>

                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>Section</th>
                                            <th>Title.</th>
                                            <th>Description</th>
                                            <th>Image</th>

                                          
                                            <th>Action </th>

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
                    <h6 class="modal-title">Are you sure?</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body p-5">
                    <div class="text-center">
                        <h4>Are you sure to delete this Project?</h4>
                    </div>
                    <form id="ownForm">
                        @csrf
                        <input type="hidden" id="requestId" name="requestId" value="" />
                        <div class="text-center">
                            <button type="button" onclick="ownRequest()"
                                class="btn btn-primary mt-4 mb-0 me-2">Yes</button>
                            <button class="btn btn-default mt-4 mb-0" data-bs-dismiss="modal" type="button">No</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>



    <script type="text/javascript">
        $(document).on("click", ".deleteItem", function() {

            var id = $(this).attr('data-id');
            $('#requestId').val($(this).attr('data-id'));
            $('#confirmation-popup').modal('show');
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
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                },
                url: '{{ url("homepage/delete") }}' + '/' + reqId,
                method: 'get',
                data: 1,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response.success);

                    $('#confirmation-popup').modal('hide');
                    $('#success_message').fadeIn().html(response.success);
                    setTimeout(function() {
                        $('#success_message').fadeOut("slow");
                    }, 2000);

                    $('#example').DataTable().ajax.reload();



                }
            })
        }



        $(document).ready(function() {

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

                    "url": "{{ route('getVerticals') }}",
                    // "data": { mobile: $("#mobile").val()}
                    "data": function(d) {
                        return $.extend({}, d, {
                            "title": $("#title").val(),

                        });
                    }
                },

                columns: [{
                        data: 'no'
                    },
                    {
                        data: 'section'
                    },
                    {
                        data: 'title'
                    },
                    {
                        data: 'description'
                    },

                    {
                        data: 'image'
                    },

                   
                    {
                        data: 'edit'
                    }


                ],

            });



            table.draw();

            $('#submit').click(function() {

                table.draw();
            });
            $('#refresh').click(function() {
                $("#delete_ctm").val('');
                table.draw();
            });




            $('#delete').click(function() {
                $("#delete_ctm").val(1);
                table.draw();
            });





            // DataTable


        });
    </script>
@endsection
