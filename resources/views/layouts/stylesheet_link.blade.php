<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/easywash_logo.jpeg')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/backend.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/remixicon/fonts/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/@icon/dripicons/dripicons.css')}}">

    <link rel='stylesheet' href="{{asset('assets/vendor/fullcalendar/core/main.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/vendor/fullcalendar/daygrid/main.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/vendor/fullcalendar/timegrid/main.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/vendor/fullcalendar/list/main.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/mapbox/mapbox-gl.css')}}">
    <link rel="stylesheet" href="{{ asset('toastr/build/toastr.min.css') }}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('select2/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/laundromat.css') }}">

    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js' )}}"></script>
</head>
