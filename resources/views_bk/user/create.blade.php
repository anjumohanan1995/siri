@extends('layouts.app')
@section('content')

<!-- main-content -->
				<div class="main-content app-content">
					<!-- container -->
					<div class="main-container container-fluid">
						<!-- breadcrumb -->
						<div class="breadcrumb-header justify-content-between row me-0 ms-0" >
							<div class="col-xl-9">
								<h4 class="content-title mb-2">Add New User
</h4>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">

										<li class="breadcrumb-item active" aria-current="page"><i class="side-menu__icon fe fe-box"> </i> - User
</li>
									</ol>
								</nav>
							</div><div class="col-xl-3">

							</div>

						</div>
						<!-- /breadcrumb -->
						<!-- main-content-body -->
						<div class="main-content-body">
{{--

							@if (session('success'))
								<div class="alert alert-success alert-dismissible fade show" role="alert">
	 								{{ session('success') }}
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>
							@endif  --}}

							<!-- row -->

							<!-- /row -->
							<!-- row -->
							<div class="row row-sm mt-4">
								<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 ">

									<div class="card">


										<div class="card-body">
												 <div id="success_message" class="ajax_response" style="display: none;"></div>

												<form name="userForm" id="userForm" method="post" action="{{route('users.store')}}">
													@csrf

												
													<div class="mb-4 main-content-label">User Details</div>
													<div class="form-group">
														<div class="row">
																<input type="hidden" class="form-control" placeholder="Name" name="user_id" value="{{ \Auth::user()->id}}" />
															<div class="col-md-6 mb-6">
																<label class="form-label">Name</label>
																<input type="text" class="form-control" placeholder="Name" name="name" />
																@error('name')
																   <span class="text-danger">{{$message}}</span>
																@enderror
															</div>

															<div class="col-md-6 mb-6">
																<label class="form-label">Email</label>
																<input type="email" class="form-control" placeholder="Email Id" name="email" />
																@error('email')
																   <span class="text-danger">{{$message}}</span>
																@enderror
															</div>
                                                        </div><br>
                                                        <div class="row">
																<input type="hidden" class="form-control" placeholder="Name" name="user_id" value="{{ \Auth::user()->id}}" />
															<div class="col-md-6 mb-6">
																<label class="form-label">Password (<strong>8 numbers, 1 uppercase,1 lowercase,1 symbol and 1 number</strong> )</label>
																<input type="password" class="form-control" placeholder="Password" name="password" id="password"/>
																@error('password')
																   <span class="text-danger">{{$message}}</span>
																@enderror
															</div>

															<div class="col-md-6 mb-6">
																<label class="form-label">Mobile No.</label>
																<input type="number" class="form-control" placeholder="Mobile No." name="mobile" id="mobile"  />
																@error('mobile')
																   <span class="text-danger" id="wrong_pass_alert">{{$message}}</span>
																@enderror
															</div>
                                                        </div><br>
                                                        <div class="row">
																<input type="hidden" class="form-control" placeholder="Name" name="user_id" value="{{ \Auth::user()->id}}" />
															<div class="col-md-6 mb-6">
																<label class="form-label">Role</label>
																<select class="form-control" placeholder="Choose Role" name="role" id="role" required>
																<option value="">Choose Role</option>
																

																@foreach ($role as  $roles)
																
                                                        			<option value="{{ $roles->name }}"> {{ @$roles->name }}


                                                            		</option>
                                                    			@endforeach


                                                               
																


                                                                </select>
																@error('role')
																   <span class="text-danger">{{$message}}</span>
																@enderror
															</div>

                                                        </div><br>
                                                       
						
                                                       
                                                    </div>
														
                                                        <button type="submit" id="submit" class="btn btn-warning waves-effect waves-light float-end">Save</button>

														</div>
													</div>
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
<script src="{{ asset('js/jquery.validate.min.js')}}"></script>


@endsection
