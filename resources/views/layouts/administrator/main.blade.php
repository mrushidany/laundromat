<!doctype html>
<html>
@include('layouts.administrator.stylesheet_link')

<body class="salon-2-saidbar-main  ">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper l-horizontal">
    @include('layouts.administrator.header')
    <div class="content-page salon2-content">
        @include('layouts.administrator.horizontal_navigation')
        <div class="tab-content" id="myTabContent-2">
            @yield('content')
        </div>
    </div>
</div>
<!-- Wrapper End-->
@include('layouts.administrator.footer')
@include('layouts.administrator.scripts_link')
</body>

</html>
