
<!doctype html>
<html>

@include('layouts.stylesheet_link')

<body class="sidebar-double-icon  ">
<div id="main_modal" role="dialog" class="modal fade" data-backdrop="static">
    <div class="modal-dialog ">
        <div class="modal-content"></div>
    </div>
</div>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    @include('layouts.easywash.sidebar')
    @include('layouts.easywash.top_navigation')
    <div class="content-page">
        @yield('content')
    </div>
</div>
<!-- Wrapper End-->
@include('layouts.footer')
<!-- Backend Bundle JavaScript -->
@include('layouts.scripts_link')
@include('layouts.scripts')
@yield('scripts')
</body>

</html>
