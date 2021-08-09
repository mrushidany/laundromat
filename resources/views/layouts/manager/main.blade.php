
<!doctype html>
<html>
@include('layouts.stylesheet_link')

<body class="sidebar-double-icon  ">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    @include('layouts.manager.sidebar')
    @include('layouts.manager.top_navigation')
    <div class="content-page">
        @yield('content')
    </div>
</div>
<!-- Wrapper End-->
@include('layouts.administrator.footer')
<!-- Backend Bundle JavaScript -->
@include('layouts.scripts_link')
</body>

</html>
