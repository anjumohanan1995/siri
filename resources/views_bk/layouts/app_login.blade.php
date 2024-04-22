<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="Description" content="SIRI" />
		<meta name="Author" content="" />
		<!-- Title -->
		<title>SIRI</title>
		<!--- Favicon --->
		<link rel="icon" href="img//favicon.png" type="image/x-icon" />
		<!-- Bootstrap css -->
		<link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" id="style" />
		<!--- Style css --->
		<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/plugins.css') }}" rel="stylesheet" />
		<!--- Icons css --->
		<link href="{{ asset('css/icons.css') }}" rel="stylesheet" />
		<!--- Animations css --->
		<link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
		<!-- Switcher css -->
		<link href="{{ asset('css/switcher.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/demo.css') }}" rel="stylesheet" />

		<meta http-equiv="imagetoolbar" content="no" />


        

	</head>
 <body class="main-body  dark-theme">
    <!-- Loader -->

    <!-- /Loader -->
    <!-- Start Switcher -->

    <!-- End Switcher -->
    <!-- page -->
   <div class="page">
     	<!-- main-signin-wrapper -->

     	 @yield('content')

   </div>
    <!-- page closed -->
    <!--- Back-to-top --->

</body>
</html>
