<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> DASHBOARD CPRC | JKWPLabuan</title>
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
	<link rel="stylesheet" href="{{ URL::to('assets/css/skin.css') }}">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/pickadate/themes/default.date.css') }}">
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
<!-- Main wrapper start -->
<div id="main-wrapper">
    <!-- Nav header start -->
    <div class="nav-header">
        <a href="{{ route('home') }}" class="brand-logo">
            <img class="logo-abbr" src="{{ URL::to('') }}" alt="">
            <img class="logo-compact" src="{{ URL::to('') }}" alt="">
            <img class="brand-title" src="{{ URL::to('assets/images/logo-white.png') }}" alt="">
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!-- Nav header end -->

    <!-- Header start -->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                    </div>

                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <span class="ml-2">{{ Auth::user()->name }}</span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                               
                                <a href="{{ route('logout') }}" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ml-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
   <!-- sidebar -->
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
 <!-- Chart Morris plugin files -->
 <script src="{{ URL::to('assets/vendor/raphael/raphael.min.js') }}"></script>
 <script src="{{ URL::to('assets/vendor/morris/morris.min.js') }}"></script>
 <!-- Chart piety plugin files -->
 <script src="{{ URL::to('assets/vendor/peity/jquery.peity.min.js') }}"></script>
 <!-- Demo scripts -->
 <script src="{{ URL::to('assets/js/dashboard/dashboard-2.js') }}"></script>
 
 
 <!-- Svganimation scripts -->
 <script src="{{ URL::to('assets/vendor/svganimation/vivus.min.js') }}"></script>
 <script src="{{ URL::to('assets/vendor/svganimation/svg.animation.js') }}"></script>
 <script src="{{ URL::to('assets/js/styleSwitcher.js') }}"></script>
 <!-- pickdate -->
 <script src="{{ URL::to('assets/vendor/pickadate/picker.js') }}"></script>
 <script src="{{ URL::to('assets/vendor/pickadate/picker.time.js') }}"></script>
 <script src="{{ URL::to('assets/vendor/pickadate/picker.date.js') }}"></script>
 <!-- Pickdate -->
 <script src="{{ URL::to('assets/js/plugins-init/pickadate-init.js') }}"></script>
<!-- Datatable -->
<!--<script src="{{ URL::to('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::to('assets/js/plugins-init/datatables.init.js') }}"></script> -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<script> 
    $(document).ready(function () {
        $('#example3').DataTable({
            dom: 'Bfrtip',
            buttons: ['excel', 'pdf', 'print']
        });
    });
</script>


</body>
</html>