<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('assets/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('assets/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 400px;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>

    @stack('style')

</head>
<body>
{{--NAV--}}
<div class="flex-center position-ref full-height">
    @include('layouts.navbar')
    {{--FINAL NAV--}}
</div>
{{--BEGIN CONTENT --}}
<div id="app" class="page-container row-fluid">
    @include('layouts.sidebar')
</div>

<div id="page-wrapper">

    @yield('content')

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('assets/metisMenu/metisMenu.min.js')}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('assets/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('assets/morrisjs/morris.min.js')}}"></script>
<script src="{{ asset('data/aesa-data.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('dist/js/sb-admin-2.js')}}"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoSO7zffF_D9fGpicMhZYoRtFUHMqYW6I&libraries=visualization&callback=initMap">
</script>

@stack('scripts')

</body>

</html>
