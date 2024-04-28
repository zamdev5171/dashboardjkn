<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>DASHBOARD CPRC</title>
    <!--CSS Style -->
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/aos/css/aos.min.css') }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/jqvmap/css/jqvmap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::to('assets/vendor/chartist/css/chartist.min.css') }}">
	<!-- Summernote -->
    <link href="{{ URL::to('assets/vendor/summernote/summernote.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::to('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/skin-3.css') }}">
    <!-- Datatable -->
    <link href="{{ URL::to('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::to('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::to('assets/css/skin-2.css') }}">
    {{-- message toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
    <!-- Preloader start -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Preloader end -->

    <div id="main-wrapper">
    

        @yield('menu')
        <!-- Content body start -->
       {{-- content --}}
       @yield('content')
       <!-- Content body end -->
    </div>

    <!-- Required vendors -->
    <script src="{{ URL::to('assets/vendor/global/global.min.js') }}"></script>
	<script src="{{ URL::to('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/custom.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/dlabnav-init.js') }}"></script>	
    
	<!-- Datatable -->
    <script src="{{ URL::to('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/plugins-init/datatables.init.js') }}"></script>
	<!-- Chart sparkline plugin files -->
    <script src="{{ URL::to('assets/vendor/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/plugins-init/sparkline-init.js') }}"></script>
	
	<!-- Chart Morris plugin files -->
    <script src="{{ URL::to('assets/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::to('assets/vendor/morris/morris.min.js') }}"></script> 
	
    <!-- Init file -->
    <script src="{{ URL::to('assets/js/plugins-init/widgets-script-init.js') }}"></script>
	
	<!-- Demo scripts -->
    <script src="{{ URL::to('assets/js/dashboard/dashboard.js') }}"></script>
	
	<!-- Summernote -->
    <script src="{{ URL::to('assets/vendor/summernote/js/summernote.min.js') }}"></script>
    <!-- Summernote init -->
    <script src="{{ URL::to('assets/js/plugins-init/summernote-init.js') }}"></script>
	
	<!-- Svganimation scripts -->
    <script src="{{ URL::to('assets/vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ URL::to('assets/vendor/svganimation/svg.animation.js') }}"></script>
    <script src="{{ URL::to('assets/js/styleSwitcher.js') }}"></script>
		
</body>
</html>