<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ProX | Responsive Bootstrap 4 Admin Dashboard Template
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{!! asset('assets/images/favicon.ico') !!}" />

    <link rel="stylesheet" href="{!! asset('assets/css/backend.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/vendor/remixicon/fonts/remixicon.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/vendor/@icon/dripicons/dripicons.css') !!}">

    <link rel='stylesheet' href='{!! asset('assets/vendor/fullcalendar/core/main.css') !!}' />
    <link rel='stylesheet' href='{!! asset('assets/vendor/fullcalendar/daygrid/main.css') !!}' />
    <link rel='stylesheet' href='{!! asset('assets/vendor/fullcalendar/timegrid/main.css') !!}' />
    <link rel='stylesheet' href='{!! asset('assets/vendor/fullcalendar/list/main.css') !!}' />
    <link rel="stylesheet" href="{!! asset('assets/vendor/mapbox/mapbox-gl.css') !!}"></head>

<body class="salon-2-saidbar-main  ">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper l-horizontal">
    <div class="header-style-5">
        <div class="iq-top-navbar salon2-topbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="iq-navbar-custom d-flex align-items-center justify-content-between">
                            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                                <i class="ri-menu-line wrapper-menu"></i>
                                <a href="index.html" class="header-logo">
                                    <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                                </a>
                                <form class="salon-search d-none d-lg-block ml-3">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="icon-search"><i class="las la-search"></i></span>
                                    </div>
                                </form>
                            </div>
                            <div class="iq-menu-horizontal">
                                <nav class="iq-sidebar-menu">
                                    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                                        <a href="index.html" class="header-logo">
                                            <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                                        </a>
                                        <div class="iq-menu-bt-sidebar">
                                            <i class="las la-bars wrapper-menu"></i>
                                        </div>
                                    </div>
                                    <ul id="iq-sidebar-toggle" class="iq-menu d-flex">
                                        <li class=" ">
                                            <a href="../backend/index.html" class="">
                                                <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="#layouts" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                                <i class="lab la-jira iq-arrow-left"></i><span>Layouts</span>
                                                <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                            </a>
                                            <ul id="layouts" class="iq-submenu sub-scrll collapse" data-parent="#iq-sidebar-toggle">
                                                <li class=" ">
                                                    <a href="../backend/layout-1.html">
                                                        <i class="las la-hotel"></i><span>Layout 1</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-2.html">
                                                        <i class="las la-percent"></i><span>Layout 2</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-3.html">
                                                        <i class="las la-dumbbell"></i><span>Layout 3</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-4.html">
                                                        <i class="las la-magic"></i><span>Layout 4</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-5.html">
                                                        <i class="las la-coins"></i><span>Layout 5</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-6.html">
                                                        <i class="las la-utensils"></i><span>Layout 6</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-7.html">
                                                        <i class="las la-school"></i><span>Layout 7</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-8.html">
                                                        <i class="las la-home"></i><span>Layout 8</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-9.html">
                                                        <i class="las la-shopping-bag"></i><span>Layout 9</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-10.html">
                                                        <i class="lar la-credit-card"></i><span>Layout 10</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-11.html">
                                                        <i class="lar la-hospital"></i><span>Layout 11</span>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="../backend/layout-12.html">
                                                        <i class="las la-cut"></i><span>Layout 12</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-13.html">
                                                        <i class="las la-shopping-cart"></i><span>Layout 13</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-14.html">
                                                        <i class="lar la-plus-square"></i><span>Layout 14</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-15.html">
                                                        <i class="las la-icons"></i><span>Layout 15</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/layout-16.html">
                                                        <i class="las la-icons"></i><span>Layout 16</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                                <i class="lab la-elementor iq-arrow-left"></i><span>UI Elements</span>
                                                <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                            </a>
                                            <ul id="ui" class="iq-submenu sub-scrll collapse" data-parent="#iq-sidebar-toggle">
                                                <li class=" ">
                                                    <a href="../backend/ui-avatars.html">
                                                        <i class="las la-user-circle"></i><span>Avatars</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-alerts.html">
                                                        <i class="las la-tag"></i><span>Alerts</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-badges.html">
                                                        <i class="lab la-atlassian"></i><span>Badges</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-breadcrumb.html">
                                                        <i class="las la-bars"></i><span>Breadcrumb</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-buttons.html">
                                                        <i class="las la-tablet"></i><span>Buttons</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-buttons-group.html">
                                                        <i class="las la-eraser"></i><span>Buttons Group</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-boxshadow.html">
                                                        <i class="las la-chess-board"></i><span>Box Shadow</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-colors.html">
                                                        <i class="las la-palette"></i><span>Colors</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-cards.html">
                                                        <i class="las la-credit-card"></i><span>Cards</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-carousel.html">
                                                        <i class="las la-film"></i><span>Carousel</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-grid.html">
                                                        <i class="las la-border-all"></i><span>Grid</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-helper-classes.html">
                                                        <i class="las la-stream"></i><span>Helper classes</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-images.html">
                                                        <i class="las la-images"></i><span>Images</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-list-group.html">
                                                        <i class="las la-list"></i><span>list Group</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-media-object.html">
                                                        <i class="las la-ad"></i><span>Media</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-modal.html">
                                                        <i class="las la-columns"></i><span>Modal</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-notifications.html">
                                                        <i class="las la-bell"></i><span>Notifications</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-pagination.html">
                                                        <i class="las la-ellipsis-h"></i><span>Pagination</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-popovers.html">
                                                        <i class="las la-eraser"></i><span>Popovers</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-progressbars.html">
                                                        <i class="las la-hdd"></i><span>Progressbars</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-typography.html">
                                                        <i class="las la-keyboard"></i><span>Typography</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-tabs.html">
                                                        <i class="las la-database"></i><span>Tabs</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-tooltips.html">
                                                        <i class="las la-magnet"></i><span>Tooltips</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/ui-embed-video.html">
                                                        <i class="las la-video"></i><span>Video</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                                <i class="las la-pager iq-arrow-left"></i><span>Authentication</span>
                                                <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                            </a>
                                            <ul id="auth" class="iq-submenu sub-scrll collapse" data-parent="#iq-sidebar-toggle">
                                                <li class=" ">
                                                    <a href="../backend/auth-sign-in.html">
                                                        <i class="las la-sign-in-alt"></i><span>Login</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/auth-sign-up.html">
                                                        <i class="las la-sign-out-alt"></i><span>Register</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/auth-recoverpw.html">
                                                        <i class="las la-unlock-alt"></i><span>Recover Password</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/auth-confirm-mail.html">
                                                        <i class="las la-envelope-open-text"></i><span>Confirm Mail</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../backend/auth-lock-screen.html">
                                                        <i class="las la-lock"></i><span>Lock Screen</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <nav class="navbar navbar-expand-lg navbar-light px-0 salon-navbar">
                                <div class="nav-item nav-icon change-mode">
                                    <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                                        <div class="custom-switch-inner">
                                            <p class="mb-0"> </p>
                                            <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                            <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                                <span class="switch-icon-left"><i class="a-left"></i></span>
                                                <span class="switch-icon-right"><i class="a-right"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-label="Toggle navigation">
                                    <i class="ri-menu-3-line"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto navbar-list align-items-center">

                                        <li class="nav-item nav-icon search-content">
                                            <a href="#" class="search-toggle rounded" id="dropdownSearch"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="las la-search"></i>
                                            </a>
                                            <div class="iq-search-bar iq-sub-dropdown dropdown-menu"
                                                 aria-labelledby="dropdownSearch">
                                                <form action="#" class="searchbox p-2">
                                                    <div class="form-group mb-0 position-relative">
                                                        <input type="text" class="text search-input font-size-12"
                                                               placeholder="type here to search...">
                                                        <a href="#" class="search-link"><i class="las la-search"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li class="nav-item lang">
                                            <a class="search-toggle language-title dropdown-toggle" id="dropdownMenuButton4"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                               href="#"><span class="ripple rippleEffect"
                                                              style="width: 98px; height: 98px; top: -15px; left: 56.2969px;"></span><img
                                                    src="../assets/images/small/flag-01.png" alt="img-flaf"
                                                    class="img-fluid mr-1" style="height: 16px; width: 16px; min-width: 16px"> EN <i
                                                    class="ri-arrow-down-s-line"></i></a>
                                            <div class="iq-sub-dropdown dropdown-menu"
                                                 aria-labelledby="dropdownMenuButton4">
                                                <div class="p-3">
                                                    <a class="iq-sub-card" href="#"><img
                                                            src="../assets/images/small/flag-02.png" alt="img-flaf"
                                                            class="img-fluid mr-2">French</a>
                                                    <a class="iq-sub-card" href="#"><img
                                                            src="../assets/images/small/flag-03.png" alt="img-flaf"
                                                            class="img-fluid mr-2">Spanish</a>
                                                    <a class="iq-sub-card" href="#"><img
                                                            src="../assets/images/small/flag-04.png" alt="img-flaf"
                                                            class="img-fluid mr-2">Italian</a>
                                                    <a class="iq-sub-card" href="#"><img
                                                            src="../assets/images/small/flag-05.png" alt="img-flaf"
                                                            class="img-fluid mr-2">German</a>
                                                    <a class="iq-sub-card" href="#"><img
                                                            src="../assets/images/small/flag-06.png" alt="img-flaf"
                                                            class="img-fluid mr-2">Japanese</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item nav-icon dropdown">
                                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-mail-line"></i>
                                                <span class="bg-white dots"></span>
                                            </a>
                                            <div class="iq-sub-dropdown dropdown-menu"
                                                 aria-labelledby="dropdownMenuButton2">
                                                <div class="card shadow-none m-0">
                                                    <div class="card-body p-0 ">
                                                        <div class="cust-title p-3">
                                                            <h5 class="mb-0">All Messages</h5>
                                                        </div>
                                                        <div class="p-3">
                                                            <a href="#" class="iq-sub-card">
                                                                <div class="media align-items-center">
                                                                    <div class="">
                                                                        <img class="avatar-40 rounded-small"
                                                                             src="../assets/images/user/01.jpg" alt="">
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0">Barry Emma Watson <small
                                                                                class="badge badge-success float-right">New</small>
                                                                        </h6>
                                                                        <small class="float-left font-size-12">12:00
                                                                            PM</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="iq-sub-card">
                                                                <div class="media align-items-center">
                                                                    <div class="">
                                                                        <img class="avatar-40 rounded-small"
                                                                             src="../assets/images/user/02.jpg" alt="">
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                                        <small class="float-left font-size-12">20
                                                                            Apr</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="iq-sub-card">
                                                                <div class="media align-items-center">
                                                                    <div class="">
                                                                        <img class="avatar-40 rounded-small"
                                                                             src="../assets/images/user/03.jpg" alt="">
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">Why do we use it? <small
                                                                                class="badge badge-success float-right">New</small>
                                                                        </h6>
                                                                        <small class="float-left font-size-12">1:24
                                                                            PM</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="iq-sub-card">
                                                                <div class="media align-items-center">
                                                                    <div class="">
                                                                        <img class="avatar-40 rounded-small"
                                                                             src="../assets/images/user/04.jpg" alt="">
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0">Variations Passages <small
                                                                                class="badge badge-success float-right">New</small>
                                                                        </h6>
                                                                        <small class="float-left font-size-12">5:45
                                                                            PM</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="iq-sub-card">
                                                                <div class="media align-items-center">
                                                                    <div class="">
                                                                        <img class="avatar-40 rounded-small"
                                                                             src="../assets/images/user/05.jpg" alt="">
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                                        <small class="float-left font-size-12">1 day
                                                                            ago</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <a class="right-ic btn btn-primary btn-block position-relative p-2"
                                                           href="#" role="button">
                                                            <div class="dd-icon"><i class="las la-arrow-right mr-0"></i>
                                                            </div>
                                                            View All
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item nav-icon dropdown">
                                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-notification-line"></i>
                                                <span class="bg-white dots"></span>
                                            </a>
                                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <div class="card shadow-none m-0">
                                                    <div class="card-body p-0 ">
                                                        <div class="cust-title p-3">
                                                            <h5 class="mb-0">All Notifications</h5>
                                                        </div>
                                                        <div class="p-3">
                                                            <a href="#" class="iq-sub-card">
                                                                <div class="media align-items-center">
                                                                    <div class="">
                                                                        <img class="avatar-40 rounded-small"
                                                                             src="../assets/images/user/01.jpg" alt="">
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0">Emma Watson Barry <small
                                                                                class="badge badge-success float-right">New</small>
                                                                        </h6>
                                                                        <p class="mb-0">95 MB</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="iq-sub-card">
                                                                <div class="media align-items-center">
                                                                    <div class="">
                                                                        <img class="avatar-40 rounded-small"
                                                                             src="../assets/images/user/02.jpg" alt="">
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">New customer is join</h6>
                                                                        <p class="mb-0">Cyst Barry</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="iq-sub-card">
                                                                <div class="media align-items-center">
                                                                    <div class="">
                                                                        <img class="avatar-40 rounded-small"
                                                                             src="../assets/images/user/03.jpg" alt="">
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">Two customer is left</h6>
                                                                        <p class="mb-0">Cyst Barry</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="iq-sub-card">
                                                                <div class="media align-items-center">
                                                                    <div class="">
                                                                        <img class="avatar-40 rounded-small"
                                                                             src="../assets/images/user/04.jpg" alt="">
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">New Mail from Fenny <small
                                                                                class="badge badge-success float-right">New</small>
                                                                        </h6>
                                                                        <p class="mb-0">Cyst Barry</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <a class="right-ic btn btn-primary btn-block position-relative p-2"
                                                           href="#" role="button">
                                                            <div class="dd-icon"><i class="las la-arrow-right mr-0"></i>
                                                            </div>
                                                            View All
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item iq-full-screen"><a href="#" class="" id="btnFullscreen"><i
                                                    class="ri-fullscreen-line"></i></a></li>
                                        <li class="caption-content">
                                            <a href="#" class="iq-user-toggle">
                                                <img src="../assets/images/user/02.jpg" class="img-fluid rounded"
                                                     alt="user">
                                            </a>
                                            <div class="iq-user-dropdown">
                                                <div class="card">
                                                    <div
                                                        class="card-header d-flex justify-content-between align-items-center mb-0">
                                                        <div class="header-title">
                                                            <h4 class="card-title mb-0">Profile</h4>
                                                        </div>
                                                        <div
                                                            class="close-data text-right badge badge-primary cursor-pointer">
                                                            <i class="ri-close-fill"></i></div>
                                                    </div>
                                                    <div class="data-scrollbar" data-scroll="2">
                                                        <div class="card-body">
                                                            <div class="profile-header">
                                                                <div class="cover-container text-center">
                                                                    <img src="../assets/images/user/02.jpg" alt="profile-bg"
                                                                         class="rounded-circle img-fluid avatar-80">
                                                                    <div class="profile-detail mt-3">
                                                                        <h3>Barry Tech</h3>
                                                                        <p class="mb-1">Web designer</p>
                                                                    </div>
                                                                    <a href="auth-sign-in.html" class="btn btn-primary">Sign
                                                                        Out</a>
                                                                </div>
                                                                <div class="profile-details my-4">
                                                                    <a href="../app/user-profile.html"
                                                                       class="iq-sub-card bg-primary-light rounded-small p-2">
                                                                        <div class="media align-items-center">
                                                                            <div class="rounded iq-card-icon-small">
                                                                                <i class="ri-file-user-line"></i>
                                                                            </div>
                                                                            <div class="media-body ml-3">
                                                                                <h6 class="mb-0 ">My Profile</h6>
                                                                                <p class="mb-0 font-size-12">View personal
                                                                                    profile details.</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="../app/user-profile-edit.html"
                                                                       class="iq-sub-card bg-danger-light rounded-small p-2">
                                                                        <div class="media align-items-center">
                                                                            <div class="rounded iq-card-icon-small">
                                                                                <i class="ri-profile-line"></i>
                                                                            </div>
                                                                            <div class="media-body ml-3">
                                                                                <h6 class="mb-0 ">Edit Profile</h6>
                                                                                <p class="mb-0 font-size-12">Modify your
                                                                                    personal details.</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="../app/user-account-setting.html"
                                                                       class="iq-sub-card bg-success-light rounded-small p-2">
                                                                        <div class="media align-items-center">
                                                                            <div class="rounded iq-card-icon-small">
                                                                                <i class="ri-account-box-line"></i>
                                                                            </div>
                                                                            <div class="media-body ml-3">
                                                                                <h6 class="mb-0 ">Account settings</h6>
                                                                                <p class="mb-0 font-size-12">Manage your
                                                                                    account parameters.</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="../app/user-privacy-setting.html"
                                                                       class="iq-sub-card bg-info-light rounded-small p-2">
                                                                        <div class="media align-items-center">
                                                                            <div class="rounded iq-card-icon-small">
                                                                                <i class="ri-lock-line"></i>
                                                                            </div>
                                                                            <div class="media-body ml-3">
                                                                                <h6 class="mb-0 ">Privacy Settings</h6>
                                                                                <p class="mb-0 font-size-12">Control your
                                                                                    privacy parameters.</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="personal-details">
                                                                    <h5 class="card-title mb-3 mt-3">Personal Details</h5>
                                                                    <div class="row align-items-center mb-2">
                                                                        <div class="col-sm-6">
                                                                            <h6>Birthday</h6>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <p class="mb-0">3rd March</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row align-items-center mb-2">
                                                                        <div class="col-sm-6">
                                                                            <h6>Address</h6>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <p class="mb-0">Landon</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row align-items-center mb-2">
                                                                        <div class="col-sm-6">
                                                                            <h6>Phone</h6>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <p class="mb-0">(010)987 543 201</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row align-items-center mb-2">
                                                                        <div class="col-sm-6">
                                                                            <h6>Email</h6>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <p class="mb-0">Barry@example.com</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row align-items-center mb-2">
                                                                        <div class="col-sm-6">
                                                                            <h6>Twitter</h6>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <p class="mb-0">@Barry</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row align-items-center mb-2">
                                                                        <div class="col-sm-6">
                                                                            <h6>Facebook</h6>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <p class="mb-0">@Barry_Tech</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="p-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>        <div class="content-page salon2-content">
        <div class="bg-nav-horizontal mt-0">
            <div class="main-scroll">
                <ul class="nav nav-tabs h-tabs" id="myTab-1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="layout1-tab" data-toggle="tab" href="#layout1"
                           role="tab" aria-controls="layout1" aria-selected="true">Layout 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="layout2-tab" data-toggle="tab" href="#layout2" role="tab"
                           aria-controls="layout2" aria-selected="false">Layout 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="layout3-tab" data-toggle="tab" href="#layout3" role="tab"
                           aria-controls="layout3" aria-selected="false">Layout 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="layout4-tab" data-toggle="tab" href="#layout4" role="tab"
                           aria-controls="layout4" aria-selected="false">Layout 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="layout5-tab" data-toggle="tab" href="#layout5" role="tab"
                           aria-controls="layout5" aria-selected="false">Layout 5</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="myTabContent-2">
            <div class="tab-pane fade show active" id="layout1" role="tabpanel" aria-labelledby="layout1-tab">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height-half">
                                <div class="card-body res-block">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-warning-light icon iq-icon-box mr-2 rounded">
                                            <svg width="32" height="26" viewBox="0 0 32 26" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.6 12.8C12.695 12.8 15.2 10.295 15.2 7.20001C15.2 4.10501 12.695 1.60001 9.6 1.60001C6.505 1.60001 4 4.10501 4 7.20001C4 10.295 6.505 12.8 9.6 12.8ZM13.44 14.4H13.025C11.985 14.9 10.83 15.2 9.6 15.2C8.37 15.2 7.22 14.9 6.175 14.4H5.76C2.58 14.4 0 16.98 0 20.16V21.6C0 22.925 1.075 24 2.4 24H16.8C18.125 24 19.2 22.925 19.2 21.6V20.16C19.2 16.98 16.62 14.4 13.44 14.4ZM24 12.8C26.65 12.8 28.8 10.65 28.8 8.00001C28.8 5.35001 26.65 3.20001 24 3.20001C21.35 3.20001 19.2 5.35001 19.2 8.00001C19.2 10.65 21.35 12.8 24 12.8ZM26.4 14.4H26.21C25.515 14.64 24.78 14.8 24 14.8C23.22 14.8 22.485 14.64 21.79 14.4H21.6C20.58 14.4 19.64 14.695 18.815 15.17C20.035 16.485 20.8 18.23 20.8 20.16V22.08C20.8 22.19 20.775 22.295 20.77 22.4H29.6C30.925 22.4 32 21.325 32 20C32 16.905 29.495 14.4 26.4 14.4Z"
                                                    fill="#FE721C" />
                                            </svg>
                                        </div>
                                        <div class="media-support-info ml-3">
                                            <h5 class="text-warning">1334</h5>
                                            <p class="mb-0">Client’s</p>
                                        </div>
                                        <div class="media-support-amount ml-3">
                                            <div class="progress-round income-progress salon2-progress-warning mx-auto"
                                                 data-value="46">
                                            <span class="progress-left">
                                                <span class="progress-bar border-white"
                                                      style="transform: rotate(0deg);"></span>
                                            </span>
                                                <span class="progress-right">
                                                <span class="progress-bar border-warning"
                                                      style="transform: rotate(150deg);"></span>
                                            </span>
                                                <div
                                                    class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center text-center">
                                                    <div class="h4 mb-0">46</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-block card-stretch card-height-half">
                                <div class="card-body res-block">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-info-light icon iq-icon-box mr-2 rounded">
                                            <svg width="40" height="32" viewBox="0 0 40 32" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M38.1562 21.3313C38.3187 20.45 38.3187 19.55 38.1562 18.6688L39.7687 17.7375C39.9562 17.6313 40.0375 17.4125 39.975 17.2063C39.5562 15.8563 38.8375 14.6313 37.9 13.6188C37.7563 13.4625 37.525 13.425 37.3375 13.5313L35.725 14.4625C35.0437 13.8813 34.2625 13.4313 33.4188 13.1313V11.2688C33.4188 11.0563 33.2687 10.8688 33.0625 10.825C31.6688 10.5125 30.25 10.525 28.925 10.825C28.7188 10.8688 28.5688 11.0563 28.5688 11.2688V13.1313C27.725 13.4313 26.9438 13.8813 26.2625 14.4625L24.65 13.5313C24.4688 13.425 24.2312 13.4625 24.0875 13.6188C23.15 14.6313 22.4313 15.8563 22.0125 17.2063C21.95 17.4125 22.0375 17.6313 22.2188 17.7375L23.8312 18.6688C23.6687 19.55 23.6687 20.45 23.8312 21.3313L22.2188 22.2625C22.0312 22.3688 21.95 22.5875 22.0125 22.7938C22.4313 24.1438 23.15 25.3625 24.0875 26.3813C24.2312 26.5375 24.4625 26.575 24.65 26.4688L26.2625 25.5375C26.9438 26.1188 27.725 26.5688 28.5688 26.8688V28.7313C28.5688 28.9438 28.7188 29.1313 28.925 29.175C30.3187 29.4875 31.7375 29.475 33.0625 29.175C33.2687 29.1313 33.4188 28.9438 33.4188 28.7313V26.8688C34.2625 26.5688 35.0437 26.1188 35.725 25.5375L37.3375 26.4688C37.5188 26.575 37.7563 26.5375 37.9 26.3813C38.8375 25.3688 39.5562 24.1438 39.975 22.7938C40.0375 22.5875 39.95 22.3688 39.7687 22.2625L38.1562 21.3313ZM31 23.0313C29.325 23.0313 27.9688 21.6688 27.9688 20C27.9688 18.3313 29.3312 16.9688 31 16.9688C32.6688 16.9688 34.0312 18.3313 34.0312 20C34.0312 21.6688 32.675 23.0313 31 23.0313ZM6 14C8.20625 14 10 12.2063 10 10C10 7.79376 8.20625 6.00001 6 6.00001C3.79375 6.00001 2 7.79376 2 10C2 12.2063 3.79375 14 6 14ZM20 16C20.1187 16 20.2313 15.9688 20.35 15.9625C20.8687 14.6063 21.6313 13.3313 22.6187 12.2625C23.0812 11.7625 23.7375 11.475 24.425 11.475C24.8562 11.475 25.2812 11.5875 25.65 11.8063L26.1437 12.0938C26.1937 12.0625 26.2438 12.0375 26.2938 12.0063C26.7313 11.0938 26.9937 10.0813 26.9937 9.00626C26.9937 5.13751 23.8625 2.00626 19.9937 2.00626C16.125 2.00626 13 5.13126 13 9.00001C13 12.8688 16.1313 16 20 16ZM26.575 28.1563C26.4313 28.0813 26.2875 27.9938 26.15 27.9125C25.6375 28.2125 25.1938 28.525 24.4312 28.525C23.75 28.525 23.0938 28.2375 22.625 27.7375C21.4813 26.5 20.6062 24.9938 20.1125 23.3875C19.4437 21.2313 21.6688 20.2813 21.725 20.2438C21.7188 20.0813 21.7188 19.9188 21.725 19.7563L21.2313 19.4688C20.9938 19.3313 20.7937 19.1563 20.6187 18.9625C20.4125 18.975 20.2125 19 20.0063 19C18.4688 19 17.0312 18.625 15.725 18H15.2063C11.225 18 8 21.225 8 25.2V27C8 28.6563 9.34375 30 11 30H26.9625C26.7312 29.625 26.575 29.2 26.575 28.7313V28.1563ZM10.8188 17.1625C10.0938 16.4438 9.1 16 8 16H4C1.79375 16 0 17.7938 0 20V22C0 23.1063 0.89375 24 2 24H6.11875C6.5125 21.0375 8.3 18.5438 10.8188 17.1625Z"
                                                    fill="#876CFE" />
                                            </svg>
                                        </div>
                                        <div class="media-support-info ml-3">
                                            <h5 class="text-info">200</h5>
                                            <p class="mb-0">Total Staff</p>
                                        </div>
                                        <div class="media-support-amount ml-3">
                                            <div id="salon2-chart-01"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height salon-2-back" style="background: url(../assets/images/layouts/layout-12/11.png) no-repeat; background-size: cover;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="mt-4 mb-4">
                                                <h4>Good Morning</h4>
                                                <h1 class="mt-5">Mr. John Doe</h1>
                                                <h5 class="mt-3">27 October 2020 - 10:00 AM</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body res-block">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-primary-light icon iq-icon-box mr-2 rounded">
                                                <svg width="28" height="32" viewBox="0 0 28 32" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0)">
                                                        <path
                                                            d="M27.25 10H0.75C0.335812 10 0 9.66419 0 9.25V7C0 5.34312 1.34312 4 3 4H6V0.75C6 0.335813 6.33581 0 6.75 0H9.25C9.66419 0 10 0.335813 10 0.75V4H18V0.75C18 0.335813 18.3358 0 18.75 0H21.25C21.6642 0 22 0.335813 22 0.75V4H25C26.6569 4 28 5.34312 28 7V9.25C28 9.66419 27.6642 10 27.25 10ZM0.75 12H27.25C27.6642 12 28 12.3358 28 12.75V29C28 30.6569 26.6569 32 25 32H3C1.34312 32 0 30.6569 0 29V12.75C0 12.3358 0.335812 12 0.75 12ZM21.581 17.9967L19.8204 16.2218C19.5287 15.9278 19.0539 15.9258 18.7598 16.2176L12.1325 22.7916L9.25875 19.8946C8.96706 19.6005 8.49212 19.5986 8.19806 19.8903L6.42325 21.6509C6.12919 21.9426 6.12725 22.4175 6.419 22.7116L11.5816 27.9159C11.8732 28.2099 12.3481 28.2119 12.6422 27.9201L21.5767 19.0573C21.8708 18.7656 21.8727 18.2907 21.581 17.9967Z"
                                                            fill="#4788ff" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0">
                                                            <rect width="28" height="32" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="media-support-primary salon-2 ml-3">
                                                <h5 class="text-primary">1000</h5>
                                                <p class="mb-0">Event</p>
                                            </div>
                                        </div>
                                        <div class="media-support-amount ml-3">
                                            <div id="salon2-chart-02" class="chart-salon"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body res-block">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-danger-light icon iq-icon-box mr-2 rounded">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0)">
                                                        <path
                                                            d="M22 6C22 2.68625 19.3137 0 16 0C12.6862 0 10 2.68625 10 6C10 9.31375 12.6862 12 16 12C19.3137 12 22 9.31375 22 6ZM14.5994 15.0688C10.8912 12.7987 4.885 12.175 1.8625 12.0031C0.846875 11.9456 0 12.7194 0 13.6962V27.6213C0 28.5169 0.724375 29.2638 1.65562 29.3119C4.38438 29.455 9.905 29.9794 13.7206 31.9013C14.3062 32.1963 15.0006 31.7944 15.0006 31.1594V15.785C15 15.4931 14.8556 15.2256 14.5994 15.0688ZM30.1375 12.0031C27.1156 12.1744 21.1088 12.7987 17.4013 15.0688C17.145 15.2256 17.0006 15.5037 17.0006 15.7956V31.1575C17.0006 31.7944 17.6969 32.1969 18.2844 31.9013C22.0994 29.9813 27.6169 29.4569 30.345 29.3137C31.2762 29.265 32.0006 28.5181 32.0006 27.6225V13.6962C32 12.7194 31.1531 11.9456 30.1375 12.0031Z"
                                                            fill="#FF4B4B" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip1">
                                                            <rect width="32" height="32" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="media-support-danger salon-2 ml-3 flex-1">
                                                <h5 class="text-danger">1000</h5>
                                                <p class="mb-0">Enquries</p>
                                            </div>
                                        </div>
                                        <div class="media-support-amount ml-3">
                                            <div class="progress-round income-progress salon2-progress-danger mx-auto"
                                                 data-value="46">
                                            <span class="progress-left">
                                                <span class="progress-bar border-white"
                                                      style="transform: rotate(0deg);"></span>
                                            </span>
                                                <span class="progress-right">
                                                <span class="progress-bar border-danger"
                                                      style="transform: rotate(150deg);"></span>
                                            </span>
                                                <div
                                                    class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center text-center">
                                                    <div class="h4 mb-0">46</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body res-block">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-success-light icon iq-icon-box mr-2 rounded">
                                                <svg width="24" height="32" viewBox="0 0 24 32" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M23.5625 6.5625L17.4438 0.4375C17.1625 0.15625 16.7812 0 16.3813 0H16V8H24V7.61875C24 7.225 23.8438 6.84375 23.5625 6.5625ZM14 8.5V0H1.5C0.66875 0 0 0.66875 0 1.5V30.5C0 31.3312 0.66875 32 1.5 32H22.5C23.3312 32 24 31.3312 24 30.5V10H15.5C14.675 10 14 9.325 14 8.5ZM4 4.5C4 4.22375 4.22375 4 4.5 4H9.5C9.77625 4 10 4.22375 10 4.5V5.5C10 5.77625 9.77625 6 9.5 6H4.5C4.22375 6 4 5.77625 4 5.5V4.5ZM4 9.5V8.5C4 8.22375 4.22375 8 4.5 8H9.5C9.77625 8 10 8.22375 10 8.5V9.5C10 9.77625 9.77625 10 9.5 10H4.5C4.22375 10 4 9.77625 4 9.5ZM13 25.9925V27.5C13 27.7763 12.7762 28 12.5 28H11.5C11.2238 28 11 27.7763 11 27.5V25.9819C10.2944 25.9456 9.60813 25.6994 9.03938 25.2725C8.79563 25.0894 8.78312 24.7244 9.00375 24.5138L9.73812 23.8131C9.91125 23.6481 10.1687 23.6406 10.3713 23.7675C10.6131 23.9188 10.8875 24 11.1725 24H12.9294C13.3356 24 13.6669 23.63 13.6669 23.1756C13.6669 22.8037 13.4412 22.4762 13.1187 22.38L10.3062 21.5362C9.14437 21.1875 8.3325 20.0725 8.3325 18.8244C8.3325 17.2919 9.52313 16.0469 10.9994 16.0075V14.5C10.9994 14.2238 11.2231 14 11.4994 14H12.4994C12.7756 14 12.9994 14.2238 12.9994 14.5V16.0181C13.705 16.0544 14.3912 16.3 14.96 16.7275C15.2037 16.9106 15.2162 17.2756 14.9956 17.4862L14.2612 18.1869C14.0881 18.3519 13.8306 18.3594 13.6281 18.2325C13.3863 18.0806 13.1119 18 12.8269 18H11.07C10.6637 18 10.3325 18.37 10.3325 18.8244C10.3325 19.1963 10.5581 19.5238 10.8806 19.62L13.6931 20.4638C14.855 20.8125 15.6669 21.9275 15.6669 23.1756C15.6669 24.7087 14.4762 25.9531 13 25.9925Z"
                                                        fill="#37E6B0" />
                                                </svg>
                                            </div>
                                            <div class="media-support-success salon-2 ml-3">
                                                <h5 class="text-success">150</h5>
                                                <p class="mb-0">Profit</p>
                                            </div>
                                        </div>
                                        <div class="media-support-amount ml-3">
                                            <div id="salon2-chart-03" class="chart-salon"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body res-block">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-info-light icon iq-icon-box mr-2 rounded">
                                                <svg width="32" height="26" viewBox="0 0 32 26" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.8 11.2C6.565 11.2 8 9.76501 8 8.00001C8 6.23501 6.565 4.80001 4.8 4.80001C3.035 4.80001 1.6 6.23501 1.6 8.00001C1.6 9.76501 3.035 11.2 4.8 11.2ZM27.2 11.2C28.965 11.2 30.4 9.76501 30.4 8.00001C30.4 6.23501 28.965 4.80001 27.2 4.80001C25.435 4.80001 24 6.23501 24 8.00001C24 9.76501 25.435 11.2 27.2 11.2ZM28.8 12.8H25.6C24.72 12.8 23.925 13.155 23.345 13.73C25.36 14.835 26.79 16.83 27.1 19.2H30.4C31.285 19.2 32 18.485 32 17.6V16C32 14.235 30.565 12.8 28.8 12.8ZM16 12.8C19.095 12.8 21.6 10.295 21.6 7.20001C21.6 4.10501 19.095 1.60001 16 1.60001C12.905 1.60001 10.4 4.10501 10.4 7.20001C10.4 10.295 12.905 12.8 16 12.8ZM19.84 14.4H19.425C18.385 14.9 17.23 15.2 16 15.2C14.77 15.2 13.62 14.9 12.575 14.4H12.16C8.98 14.4 6.4 16.98 6.4 20.16V21.6C6.4 22.925 7.475 24 8.8 24H23.2C24.525 24 25.6 22.925 25.6 21.6V20.16C25.6 16.98 23.02 14.4 19.84 14.4ZM8.655 13.73C8.075 13.155 7.28 12.8 6.4 12.8H3.2C1.435 12.8 0 14.235 0 16V17.6C0 18.485 0.715 19.2 1.6 19.2H4.895C5.21 16.83 6.64 14.835 8.655 13.73Z"
                                                        fill="#876cfe" />
                                                </svg>
                                            </div>
                                            <div class="media-support-info salon-2 ml-3">
                                                <h5 class="text-info">1000</h5>
                                                <p class="mb-0">Visitor’s</p>
                                            </div>
                                        </div>
                                        <div class="media-support-amount ml-3">
                                            <div id="salon2-chart-04" class="chart-salon"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Experts</h4>
                                    </div>
                                    <div id="trending-order-slick-arrow" class="slick-aerrow-block">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="salone-styles">
                                        <div class="item">
                                            <div class="rounded-circle avatar-120 bg-white odr-img">
                                                <img src="../assets/images/layouts/layout-12/02.png" class="img-fluid m-auto" alt="image">
                                            </div>

                                            <div class="odr-content bg-danger-light">
                                                <h5>Ira Membrit</h5>
                                                <p class="mt-2">Hair Cut</p>
                                                <ul class="list-unstyled  mt-2 mb-0">
                                                    <li class="bg-white rounded-small iq-card-icon-small mr-3"><a href="javascript:void(0);"><i
                                                                class="lab la-facebook-f text-primary"></i></a>
                                                    <li class="bg-white rounded-small iq-card-icon-small mr-3"><a href="javascript:void(0);"><i
                                                                class="lab la-twitter text-info"></i></a></li>
                                                    <li class="bg-white rounded-small iq-card-icon-small mr-3"><a href="javascript:void(0);"> <i
                                                                class="lab la-instagram  text-danger"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="rounded-circle avatar-120 bg-white odr-img">
                                                <img src="../assets/images/layouts/layout-12/03.png" class="img-fluid m-auto" alt="image">
                                            </div>
                                            <div class="odr-content bg-info-light">
                                                <h5>Malinda</h5>
                                                <p class="mt-2">Hair Spa</p>
                                                <ul class="list-unstyled  mt-2 mb-0">
                                                    <li class="bg-white rounded-small iq-card-icon-small mr-3"><a href="javascript:void(0);"><i
                                                                class="lab la-facebook-f text-primary"></i></a>
                                                    <li class="bg-white rounded-small iq-card-icon-small mr-3"><a href="javascript:void(0);"><i
                                                                class="lab la-twitter text-info"></i></a></li>
                                                    <li class="bg-white rounded-small iq-card-icon-small mr-3"><a href="javascript:void(0);"> <i
                                                                class="lab la-instagram  text-danger"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="rounded-circle avatar-120 bg-white odr-img">
                                                <img src="../assets/images/layouts/layout-12/04.png" class="img-fluid m-auto" alt="image">
                                            </div>
                                            <div class="odr-content bg-primary-light">
                                                <h5>Maya Didas</h5>
                                                <p class="mt-2">Makeup</p>
                                                <ul class="list-unstyled mt-2 mb-0">
                                                    <li class="bg-white rounded-small iq-card-icon-small mr-3"><a href="javascript:void(0);"><i
                                                                class="lab la-facebook-f text-primary"></i></a>
                                                    <li class="bg-white rounded-small iq-card-icon-small mr-3"><a href="javascript:void(0);"><i
                                                                class="lab la-twitter text-info"></i></a></li>
                                                    <li class="bg-white rounded-small iq-card-icon-small mr-3"><a href="javascript:void(0);"> <i
                                                                class="lab la-instagram  text-danger"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height-half bg-success rounded">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div id="salon2-chart-09"></div>
                                        <div class="pl-3">
                                            <h2 class="text-white">500</h2>
                                            <p class="mb-0">Cancellation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-block card-stretch card-height-half">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div id="salon2-chart-10"></div>
                                        <div class="pl-3">
                                            <h2>2,456</h2>
                                            <p class="mb-0">Enquiry</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header">
                                    <div class="header-title">
                                        <h4 class="card-title">By Gender</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="salon2-chart-08" style="max-height: 250px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header">
                                    <div class="header-title">
                                        <h4 class="card-title">Growth</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="salon2-chart-05"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Upcoming Events</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="perfomer-lists m-0 p-0">
                                        <li class="d-flex mb-3 ">
                                            <div class="top-block-one d-flex align-items-center justify-content-between">
                                                <div
                                                    class="icon iq-icon-box event-icon bg-primary-light rounded-small font-size-18">
                                                    <div class="date">23</div>
                                                    <div class="month">Oct</div>
                                                </div>
                                            </div>
                                            <div class="media-support-info ml-3">
                                                <h5>Hugh Briss</h5>
                                                <p class="mb-0">Makeup</p>
                                                <span>08:30AM to 09:00AM</span>
                                            </div>
                                            <div class="iq-card-header-toolbar d-flex">
                                                <h5 class="mb-0"><b>$25</b></h5>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-3 align-items-center border-top pt-3">
                                            <div class="top-block-one d-flex align-items-center justify-content-between">
                                                <div
                                                    class="icon iq-icon-box event-icon bg-danger-light rounded-small font-size-18">
                                                    <div class="date">24</div>
                                                    <div class="month">Oct</div>
                                                </div>
                                            </div>
                                            <div class="media-support-info ml-3">
                                                <h5>Claire Voyant</h5>
                                                <p class="mb-0">Hair Spa</p>
                                                <span>09:00AM to 09:30AM</span>
                                            </div>
                                            <div class="iq-card-header-toolbar d-flex ">
                                                <h4><b>$50</b></h4>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center border-top pt-3">
                                            <div class="top-block-one d-flex align-items-center justify-content-between">
                                                <div
                                                    class="icon iq-icon-box event-icon bg-warning-light rounded-small font-size-18">
                                                    <div class="date">25</div>
                                                    <div class="month">Oct</div>
                                                </div>
                                            </div>
                                            <div class="media-support-info ml-3">
                                                <h5>Marcus Down</h5>
                                                <p class="mb-0"> Body Spa</p>
                                                <span>09:30AM to 10:00AM</span>
                                            </div>
                                            <div class="iq-card-header-toolbar">
                                                <h4><b>$78</b></h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Category Growth</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                        <span class="dropdown-toggle dropdown-bg bg-success rounded p-2"
                                              id="dropdownMenuButton1" data-toggle="dropdown">
                                            Monthly<i class="ri-arrow-down-s-line ml-1"></i>
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                 aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="salon2-chart-06"></div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-9 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Recent Customer</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <button class="btn btn-sm btn-success">View All</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table data-table mb-0 table-borderless">
                                            <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">Service</th>
                                                <th scope="col">Expert</th>
                                                <th scope="col">Code</th>
                                                <th scope="col">Number</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <a href="javascript:void(0);"><img
                                                                src="../assets/images/user/01.jpg"
                                                                class="img-fluid avatar-40 rounded-normal" alt="image"></a>
                                                        <div class="media-body ml-3">
                                                            <span>William Smith</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>20/08/2020</span>
                                                </td>
                                                <td>
                                                    <span>Male</span>
                                                </td>
                                                <td>
                                                    <span>Hair Spa</span>
                                                </td>
                                                <td>
                                                    <span>Smith Jackson</span>
                                                </td>
                                                <td>
                                                    <span>AB123</span>
                                                </td>
                                                <td>
                                                    <span>1234567890</span>
                                                </td>
                                                <td>
                                                    <span>25$</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger">Confirmed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <a href="javascript:void(0);"><img
                                                                src="../assets/images/user/02.jpg"
                                                                class="img-fluid avatar-40 rounded-normal" alt="image"></a>
                                                        <div class="media-body ml-3">
                                                            <span>Alena Mathew</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>02/09/2020</span>
                                                </td>
                                                <td>
                                                    <span>Female</span>
                                                </td>
                                                <td>
                                                    <span>Hair Cut</span>
                                                </td>
                                                <td>
                                                    <span>Smith Jackson</span>
                                                </td>
                                                <td>
                                                    <span>AB124</span>
                                                </td>
                                                <td>
                                                    <span>1234567890</span>
                                                </td>
                                                <td>
                                                    <span>50$</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <a href="javascript:void(0);"><img
                                                                src="../assets/images/user/03.jpg"
                                                                class="img-fluid avatar-40 rounded-normal" alt="image"></a>
                                                        <div class="media-body ml-3">
                                                            <span>Barry Deo</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>02/09/2020</span>
                                                </td>
                                                <td>
                                                    <span>Female</span>
                                                </td>
                                                <td>
                                                    <span>Hair Cut</span>
                                                </td>
                                                <td>
                                                    <span>Smith Jackson</span>
                                                </td>
                                                <td>
                                                    <span>AB124</span>
                                                </td>
                                                <td>
                                                    <span>1234567890</span>
                                                </td>
                                                <td>
                                                    <span>50$</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning">Pending</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <img src="../assets/images/user/08.jpg" class="img-fluid avatar-90 rounded-normal"
                                             alt="image">
                                        <div class="d-flex doc-social ml-4">
                                            <a href="#"><i class="lab la-facebook-f text-primary font-size-20"></i></a>
                                            <a href="#"><i class="lab la-twitter text-primary-dark font-size-20"></i></a>
                                            <a href="#"><i class="lab la-instagram mr-2 text-danger font-size-20"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="text-uppercase">Chris P. Bacon</h4>
                                    <p class="font-size-16">Top Expert</p>
                                    <div class="d-flex align-items-center pt-3">
                                    <span class="bg-warning-light rounded-small iq-card-icon-small mr-3">
                                        <i class="las la-phone-volume"></i>
                                    </span>
                                        <h5>+91 01234 56789</h5>
                                    </div>
                                    <div class="d-flex align-items-center pt-3">
                                    <span class="bg-success-light rounded-small iq-card-icon-small mr-3">
                                        <i class="las la-envelope"></i>
                                    </span>
                                        <h5>charis@salon.com</h5>
                                    </div>
                                    <div class="d-flex align-items-center pt-3">
                                    <span class="bg-primary-light rounded-small iq-card-icon-small mr-3">
                                        <i class="lab la-twitter"></i>
                                    </span>
                                        <h5>social@salon.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="layout2" role="tabpanel" aria-labelledby="layout2-tab">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="fit-icon rounded text-center bg-warning-light">
                                                    <i class="fas fa-user-friends"></i>
                                                </div>
                                                <div class="iq-card-text pl-xl-4 pl-3">
                                                    <h3 class="line-height">1334</h3>
                                                    <p class="mb-0">Users</p>
                                                    <span class="text-danger"><i class="las la-long-arrow-alt-down"></i>10%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="fit-icon rounded text-center bg-info-light">
                                                    <i class="fas fa-dumbbell"></i>
                                                </div>
                                                <div class="iq-card-text pl-xl-4 pl-3">
                                                    <h3 class="line-height">202</h3>
                                                    <p class="mb-0">Trainers</p>
                                                    <span class="text-success"><i class="las la-long-arrow-alt-up"></i>50%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="fit-icon rounded text-center bg-success-light">
                                                    <i class="fas fa-search-location"></i>
                                                </div>
                                                <div class="iq-card-text pl-xl-4 pl-3">
                                                    <h3 class="line-height">50</h3>
                                                    <p class="mb-0">Inquiry</p>
                                                    <span class="text-danger"><i class="las la-long-arrow-alt-down"></i>20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card card-transparent">
                                        <div class="card-body p-0">
                                            <div id="fit-progress-chart-01"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-block card-stretch card-height">
                                <img src="../assets/images/layouts/layout-12/tab-images/user-bg.jpg" class="img-fluid rounded" alt="image">
                                <div class="card-body iq-profile-top pt-0">
                                    <div class=" text-center">
                                        <div class="d-inline-block">
                                            <img src="../assets/images/layouts/layout-12/tab-images/user-1.jpg"
                                                 class="img-fluid d-inline-block avatar-100 mx-auto rounded" alt="image">
                                        </div>
                                    </div>
                                    <div class="row align-items-center justify-content-between pt-4">
                                        <h3 class="col-7">Jimmy Gorge</h3>
                                        <div class="col-5 text-right">
                                            <p class="mb-0 badge badge-warning">New York, NY</p>
                                        </div>
                                        <h5 class="col-6 text-secondary">Sr.Trainer</h5>
                                        <div class="col-6">
                                            <div class="d-flex doc-social float-right">
                                                <a href="#"><i class="lab la-facebook-f text-primary"></i></a>
                                                <a href="#"><i class="lab la-twitter text-primary-dark"></i></a>
                                                <a href="#"><i class="lab la-google-plus text-danger"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                    <ul class="list-inline p-0 m-0 mt-4">
                                        <li class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                                            <h6><i class="fas fa-weight text-primary pr-3"></i>Weight</h6>
                                            <p class="mb-0">50.2 Kg</p>
                                        </li>
                                        <li class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                                            <h6><i class="fas fa-heartbeat text-danger pr-3"></i>Heart Rate</h6>
                                            <p class="mb-0">98.2 Bpm</p>
                                        </li>
                                        <li class="d-flex align-items-center justify-content-between">
                                            <h6><i class="fas fa-user text-success pr-3"></i>Age</h6>
                                            <p class="mb-0">25 Yrs</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Trainers</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <span><i class="fas fa-circle text-primary mr-2 font-size-12"></i>Expert Level</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-inline p-0 m-0">
                                        <li class="media align-items-center">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/user-2.jpg"
                                                                               class="img-fluid avatar-80 rounded-small" alt="image"></a>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between res-colum">
                                                    <h5>Julia<span class="text-body pl-2">(personal)</span></h5>
                                                    <div class="text-primary"><b>5.8</b></div>
                                                </div>
                                                <p class="mb-0">Fitness</p>
                                                <div class="d-flex doc-social mt-2">
                                                    <a href="#"><i class="lab la-facebook-f text-primary"></i></a>
                                                    <a href="#"><i class="lab la-twitter text-primary-dark"></i></a>
                                                    <a href="#"><i class="lab la-google-plus text-danger"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media align-items-center mt-3">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/user-3.jpg"
                                                                               class="img-fluid avatar-80 rounded-small" alt="image"></a>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between res-colum">
                                                    <h5>Alina<span class="text-body pl-2">(General)</span></h5>
                                                    <div class="text-primary"><b>5.6</b></div>
                                                </div>
                                                <p class="mb-0">Aerobics</p>
                                                <div class="d-flex doc-social mt-2">
                                                    <a href="#"><i class="lab la-facebook-f text-primary"></i></a>
                                                    <a href="#"><i class="lab la-twitter text-primary-dark"></i></a>
                                                    <a href="#"><i class="lab la-google-plus text-danger"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media align-items-center mt-3">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/user-4.jpg"
                                                                               class="img-fluid avatar-80 rounded-small" alt="image"></a>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between res-colum">
                                                    <h5>Julia<span class="text-body pl-2">(General)</span></h5>
                                                    <div class="text-primary"><b>5.5</b></div>
                                                </div>
                                                <p class="mb-0">Zumba</p>
                                                <div class="d-flex doc-social mt-2">
                                                    <a href="#"><i class="lab la-facebook-f text-primary"></i></a>
                                                    <a href="#"><i class="lab la-twitter text-primary-dark"></i></a>
                                                    <a href="#"><i class="lab la-google-plus text-danger"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body text-center inln-date fitness-datepickr">
                                    <input type="text" id="inline-date" class="date-input basicFlatpickr d-none" readonly="readonly">
                                    <div class="text-primary text-center mt-3"><span class="font-size-18 pr-2">1 / 9 / 2020</span>Lorem
                                        ipsum dolor sit amet</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card card-block card-stretch card-height">
                                        <div class="card-body">
                                            <i class="fas fa-fire-alt text-warning font-size-40"></i>
                                            <h5 class="text-capitalize mt-3">Calories</h5>
                                            <h2>1259</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card card-block card-stretch card-height">
                                        <div class="card-body">
                                            <i class="fas fa-carrot text-warning font-size-40"></i>
                                            <h5 class="text-capitalize mt-3">Protiens</h5>
                                            <h2>489</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card card-block card-stretch card-height">
                                        <div class="card-body">
                                            <i class="fas fa-cookie-bite text-warning font-size-40"></i>
                                            <h5 class="text-capitalize mt-3">Carbs</h5>
                                            <h2>459</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card card-block card-stretch card-height bg-warning">
                                        <div class="card-body">
                                            <i class="fas fa-pizza-slice text-white font-size-40"></i>
                                            <h5 class="text-capitalize text-white mt-3">Fat</h5>
                                            <h2 class="text-white">259</h2>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">User's Progress</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                        <span
                                            class="dropdown-toggle dropdown-bg border border-primary text-primary p-2 rounded-normal"
                                            id="dropdownMenuButton2" data-toggle="dropdown">
                                            Monthly<i class="ri-arrow-down-s-line ml-1"></i>
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                 aria-labelledby="dropdownMenuButton2">
                                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body row align-items-center">
                                    <div class="col-md-9">
                                        <div id="fit-progress-chart-03"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="m-0 p-0 list-inline text-center data-indicator">
                                            <li class="position-relative">
                                                <h2 class="line-height"><b>84</b></h2>
                                                <span class="status"><i class="ri-checkbox-blank-circle-fill text-primary"></i></span>
                                                <p class="mb-0 mt-2">Your points</p>
                                            </li>
                                            <li class="mt-3 position-relative">
                                                <h2 class="line-height"><b>64</b></h2>
                                                <span class="status"><i class="ri-checkbox-blank-circle-fill text-danger"></i></span>
                                                <p class="mb-0 mt-2">Average</p>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Upcoming Events</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-inline p-0 m-0">
                                        <li class="d-flex align-items-center justify-content-between pb-3 border-bottom">
                                            <div class="icon iq-icon-box event-icon bg-primary rounded-small font-size-18">
                                                <div class="date">23</div>
                                                <div class="month">Oct</div>
                                            </div>
                                            <div class="event-info ml-3">
                                                <h5>Yoga Special Training</h5>
                                                <p class="mb-0">08 : 30 Am</p>
                                            </div>
                                            <div class="d-flex align-items-center font-size-18">
                                                <span class="mr-2"><i class="ri-edit-box-line"></i></span>
                                                <span><i class="ri-delete-bin-line text-danger"></i></span>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center justify-content-between pb-3 pt-3 border-bottom">
                                            <div class="icon iq-icon-box event-icon bg-warning rounded-small font-size-18">
                                                <div class="date">25</div>
                                                <div class="month">Oct</div>
                                            </div>
                                            <div class="event-info ml-3">
                                                <h5>Zumba Training Sessions</h5>
                                                <p class="mb-0">08 : 45 Am</p>
                                            </div>
                                            <div class="d-flex align-items-center font-size-18">
                                                <span class="mr-2"><i class="ri-edit-box-line"></i></span>
                                                <span><i class="ri-delete-bin-line text-danger"></i></span>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center justify-content-between pt-3">
                                            <div class="icon iq-icon-box event-icon bg-success rounded-small font-size-18">
                                                <div class="date">28</div>
                                                <div class="month">Oct</div>
                                            </div>
                                            <div class="event-info ml-3">
                                                <h5>Persional Training Happy Week</h5>
                                                <p class="mb-0">09 : 00 Am</p>
                                            </div>
                                            <div class="d-flex align-items-center font-size-18">
                                                <span class="mr-2"><i class="ri-edit-box-line"></i></span>
                                                <span><i class="ri-delete-bin-line text-danger"></i></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Top Performers</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary view-more">View More</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-inline p-0 m-0">
                                        <li class="media align-items-center">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/user-5.jpg"
                                                                               class="img-fluid avatar-80 rounded-small" alt="image"></a>
                                            <div class="media-body ml-4">
                                                <h5>Julia Met</h5>
                                                <p class="mb-0">Fitness</p>
                                                <div class="text-body">23/8/2020</div>
                                            </div>
                                        </li>
                                        <li class="media align-items-center mt-3">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/user-6.jpg"
                                                                               class="img-fluid avatar-80 rounded-small" alt="image"></a>
                                            <div class="media-body ml-4">
                                                <h5>Carolina Tensen</h5>
                                                <p class="mb-0">Fitness</p>
                                                <div class="text-body">23/8/2020</div>
                                            </div>
                                        </li>
                                        <li class="media align-items-center mt-3">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/user-7.jpg"
                                                                               class="img-fluid avatar-80 rounded-small" alt="image"></a>
                                            <div class="media-body ml-4">
                                                <h5>Anna Mull</h5>
                                                <p class="mb-0">Fitness</p>
                                                <div class="text-body">23/8/2020</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Social Media</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary view-more">View More</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="fit-progress-chart-02"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Products</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary view-more">View More</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-inline p-0 m-0">
                                        <li class="media align-items-center">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/prod-1.jpg"
                                                                               class="img-fluid avatar-60 rounded-small" alt="image"></a>
                                            <div class="media-body ml-3">
                                                <h5>Protien Pills</h5>
                                                <p class="mb-0">100 Items</p>
                                            </div>
                                            <p class="mb-0 font-size-18"><b>$ 12.8</b></p>
                                        </li>
                                        <li class="media align-items-center mt-3">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/prod-2.jpg"
                                                                               class="img-fluid avatar-60 rounded-small" alt="image"></a>
                                            <div class="media-body ml-3">
                                                <h5>Coffee beans</h5>
                                                <p class="mb-0">92 Items</p>
                                            </div>
                                            <p class="mb-0 font-size-18"><b>$ 8.6</b></p>
                                        </li>
                                        <li class="media align-items-center mt-3">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/prod-3.jpg"
                                                                               class="img-fluid avatar-60 rounded-small" alt="image"></a>
                                            <div class="media-body ml-3">
                                                <h5>Protien Bar</h5>
                                                <p class="mb-0">50 Items</p>
                                            </div>
                                            <p class="mb-0 font-size-18"><b>$ 15.5</b></p>
                                        </li>
                                        <li class="media align-items-center mt-3">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/prod-4.jpg"
                                                                               class="img-fluid avatar-60 rounded-small" alt="image"></a>
                                            <div class="media-body ml-3">
                                                <h5>CBD Oil</h5>
                                                <p class="mb-0">95 Items</p>
                                            </div>
                                            <p class="mb-0 font-size-18"><b>$ 110</b></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="layout3" role="tabpanel" aria-labelledby="layout3-tab">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6 col-md-12">
                            <div class="row salon1-count">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card card-block card-stretch card-height overflow-hidden">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="icon iq-icon-box bg-primary-light rounded">
                                                    <i class="las la-user-friends primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h5>Client’s</h5>
                                                    <h3 class="mb-0 text-secondary">1334</h3>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                                                <div class="iq-progress-bar bg-primary-light mt-2">
                                                <span class="bg-primary iq-progress progress-1" data-percent="85">
                                                    <span class="progress-text-one bg-primary">85%</span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="salon1-big-font">1</span>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card card-block card-stretch card-height overflow-hidden">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="icon iq-icon-box bg-success-light rounded">
                                                    <i class="las la-users success"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h5>Total Staff</h5>
                                                    <h3 class="mb-0  text-secondary">150</h3>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                                                <div class="iq-progress-bar bg-success-light mt-2">
                                                <span class="bg-success iq-progress progress-1" data-percent="55">
                                                    <span class="progress-text-one bg-success">55%</span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="salon1-big-font">2</span>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card card-block card-stretch card-height overflow-hidden">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="icon iq-icon-box bg-primary-light rounded">
                                                    <i class="las la-calendar-day primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h5>Appointments</h5>
                                                    <h3 class="mb-0  text-secondary">1000</h3>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                                                <div class="iq-progress-bar bg-primary-light mt-2">
                                                <span class="bg-primary iq-progress progress-1" data-percent="65">
                                                    <span class="progress-text-one bg-primary">65%</span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="salon1-big-font">3</span>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card card-block card-stretch card-height overflow-hidden">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="icon iq-icon-box bg-success-light rounded">
                                                    <i class="las la-headset success"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h5>Inquiry</h5>
                                                    <h3 class="mb-0  text-secondary">90</h3>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                                                <div class="iq-progress-bar bg-success-light mt-2">
                                                <span class="bg-success iq-progress progress-1" data-percent="40">
                                                    <span class="progress-text-one bg-success">40%</span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="salon1-big-font">4</span>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card card-block card-stretch card-height overflow-hidden">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="icon iq-icon-box bg-primary-light rounded">
                                                    <i class="las la-signal primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h5>Profit</h5>
                                                    <h3 class="mb-0  text-secondary">1334</h3>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                                                <div class="iq-progress-bar bg-primary-light mt-2">
                                                <span class="bg-primary iq-progress progress-1" data-percent="95">
                                                    <span class="progress-text-one bg-primary">95%</span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="salon1-big-font">5</span>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card card-block card-stretch card-height overflow-hidden">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="icon iq-icon-box bg-success-light rounded">
                                                    <i class="lar la-building"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h5>Visitor’s</h5>
                                                    <h3 class="mb-0  text-secondary">1968</h3>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                                                <div class="iq-progress-bar bg-success-light mt-2">
                                                <span class="bg-success iq-progress progress-1" data-percent="70">
                                                    <span class="progress-text-one bg-success">70%</span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="salon1-big-font">6</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card card-block card-stretch card-height salon1-wecm" style="background: url(../assets/images/layouts/layout-4/welcome-bg.png);background-repeat:no-repeat;
	background-position: center right;background-size: contain;">
                                <div class="card-body">
                                    <h4 class="text-secondary">Welcome</h4>
                                    <h1 class="mt-4 mb-2">Mary Nara</h1>
                                    <p class="mb-4">Sr. Manager</p>
                                    <h4 class="text-body wid-90">Good hair reflects your style and attitude</h4>
                                    <a href="#" class="btn btn-success mt-4">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card card-block card-stretch card-height">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="header-title">
                                                <h4 class="card-title">Experts</h4>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <button class="btn btn-sm btn-primary">View All</button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled row stylist-salon1 mb-0">
                                                <li class="col-lg-3">
                                                    <div class="card-transparent mb-0">
                                                        <div class="card-body p-0">
                                                            <img src="../assets/images/layouts/layout-12/tab-images/01.jpg"
                                                                 class="style-img rounded w-100 img-fluid" alt="image">
                                                            <div class="overly-style">
                                                            <span class="badge bg-primary "> <i
                                                                    class="las la-star text-white mr-1"></i> 4.5/5</span>
                                                            </div>
                                                            <div class="style-text text-center mt-2">
                                                                <h5>Melinda</h5>
                                                                <span>Hair Spa</span>
                                                                <ul class="list-unstyled ecommerce-social mt-2 mb-0">
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-facebook-f mr-2 text-info font-size-18"></i></a>
                                                                    </li>
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-twitter mr-2 text-primary font-size-20"></i></a>
                                                                    </li>
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-google-plus mr-2 text-danger font-size-20"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-lg-3">
                                                    <div class="card-transparent mb-0">
                                                        <div class="card-body p-0">
                                                            <img src="../assets/images/layouts/layout-12/tab-images/02.jpg"
                                                                 class="style-img rounded w-100 img-fluid" alt="image">
                                                            <div class="overly-style">
                                                                <span class="badge bg-primary "> <i class="las la-star text-white mr-1"></i> 3.0/5</span>
                                                            </div>
                                                            <div class="style-text text-center mt-2">
                                                                <h5>Sal Monella</h5>
                                                                <span>Makeup</span>
                                                                <ul class="list-unstyled ecommerce-social mt-2 mb-0">
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-facebook-f mr-2 text-info font-size-18"></i></a>
                                                                    </li>
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-twitter mr-2 text-primary font-size-20"></i></a>
                                                                    </li>
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-google-plus mr-2 text-danger font-size-20"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-lg-3">
                                                    <div class="card-transparent mb-0">
                                                        <div class="card-body p-0">
                                                            <img src="../assets/images/layouts/layout-12/tab-images/03.jpg"
                                                                 class="style-img rounded w-100 img-fluid" alt="image">
                                                            <div class="overly-style">
                                                            <span class="badge bg-primary"> <i
                                                                    class="las la-star text-white mr-1"></i> 4.0/5</span>
                                                            </div>
                                                            <div class="style-text text-center mt-2">
                                                                <h5>Maya Didas</h5>
                                                                <span>Hair Cut</span>
                                                                <ul class="list-unstyled ecommerce-social mt-2 mb-0">
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-facebook-f mr-2 text-info font-size-18"></i></a>
                                                                    </li>
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-twitter mr-2 text-primary font-size-20"></i></a>
                                                                    </li>
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-google-plus mr-2 text-danger font-size-20"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-lg-3">
                                                    <div class="card-transparent mb-0">
                                                        <div class="card-body p-0">
                                                            <img src="../assets/images/layouts/layout-12/tab-images/04.jpg"
                                                                 class="style-img rounded w-100 img-fluid" alt="image">
                                                            <div class="overly-style">
                                                                <span class="badge bg-primary "> <i class="las la-star text-white mr-1"></i> 3.5/5</span>
                                                            </div>
                                                            <div class="style-text text-center mt-2">
                                                                <h5>Ira Membrit</h5>
                                                                <span>Hair Cut</span>
                                                                <ul class="list-unstyled ecommerce-social mt-2 mb-0">
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-facebook-f mr-2 text-info font-size-18"></i></a>
                                                                    </li>
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-twitter mr-2 text-primary font-size-20"></i></a>
                                                                    </li>
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-google-plus mr-2 text-danger font-size-20"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-lg-3">
                                                    <div class="card-transparent mb-0">
                                                        <div class="card-body p-0">
                                                            <img src="../assets/images/layouts/layout-12/tab-images/01.jpg"
                                                                 class="style-img rounded w-100 img-fluid" alt="image">
                                                            <div class="overly-style">
                                                                <span class="badge bg-primary "> <i class="las la-star text-white mr-1"></i> 4.9/5</span>
                                                            </div>
                                                            <div class="style-text text-center mt-2">
                                                                <h5>Melinda</h5>
                                                                <span>Hair Spa</span>
                                                                <ul class="list-unstyled ecommerce-social mt-2 mb-0">
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-facebook-f mr-2 text-info font-size-18"></i></a>
                                                                    </li>
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-twitter mr-2 text-primary font-size-20"></i></a>
                                                                    </li>
                                                                    <li><a href="javascript:void(0);"><i
                                                                                class="lab la-google-plus mr-2 text-danger font-size-20"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card card-block card-stretch card-height">
                                        <div class="card-header">
                                            <div class="header-title">
                                                <h4 class="card-title">Category Growth</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="salon-chart-02"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card card-block card-stretch card-height">
                                        <div class="card-header">
                                            <div class="header-title">
                                                <h4 class="card-title">Goal</h4>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <div class="col-md-6 mb-md-0 mb-3">
                                                    <div class="progress-round goal-progress mx-auto" data-value="50">
                                                    <span class="progress-left">
                                                        <span class="progress-bar border-white"
                                                              style="transform: rotate(0deg);"></span>
                                                    </span>
                                                        <span class="progress-right">
                                                        <span class="progress-bar border-primary"
                                                              style="transform: rotate(180deg);"></span>
                                                    </span>
                                                        <div
                                                            class="progress-value w-100 h-100 rounded d-flex align-items-center justify-content-center text-center">
                                                            <div class="h4 mb-0 text-primary">50%<br> Ahead</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-value mt-4">
                                                        <h4>Monthly</h4>
                                                        <p class="mb-0">by Dec 2020</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="progress-round goal-progress mx-auto" data-value="50">
                                                    <span class="progress-left">
                                                        <span class="progress-bar border-white"
                                                              style="transform: rotate(0deg);"></span>
                                                    </span>
                                                        <span class="progress-right">
                                                        <span class="progress-bar border-success"
                                                              style="transform: rotate(180deg);"></span>
                                                    </span>
                                                        <div
                                                            class="progress-value w-100 h-100 rounded d-flex align-items-center justify-content-center text-center">
                                                            <div class="h4 mb-0 text-primary">50%<br> Ahead</div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-value mt-4">
                                                        <h4>Yearly</h4>
                                                        <p class="mb-0">by Dec 2020</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Upcoming Appointments</h4>
                                    </div>
                                    <div class="card-header-toolbar">
                                        <button class="btn btn-sm btn-primary">View All</button>
                                    </div>
                                </div>
                                <div class="card-body up-com">
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex mb-4 align-items-center">
                                            <div class="icon iq-icon-box event-icon bg-primary rounded-small font-size-18">
                                                <div class="date">23</div>
                                                <div class="month">Oct</div>
                                            </div>
                                            <div class="media-support-info">
                                                <h6>Julia Marten</h6>
                                                <p class="mb-0">Hair Styling</p>
                                                <span>8:30 To 9:30 AM</span>
                                            </div>
                                            <div class="media-support-amount ml-3">
                                                <h5 class="mb-0">$25</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <div class="icon iq-icon-box event-icon bg-success rounded-small font-size-18">
                                                <div class="date">24</div>
                                                <div class="month">Oct</div>
                                            </div>
                                            <div class="media-support-info">
                                                <h6>Venter Loren</h6>
                                                <p class="mb-0">Hair Spa</p>
                                                <span>9:50 To 10:45 AM</span>
                                            </div>
                                            <div class="media-support-amount ml-3">
                                                <h5 class="mb-0">$50</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <div class="icon iq-icon-box event-icon bg-primary rounded-small font-size-18">
                                                <div class="date">25</div>
                                                <div class="month">Oct</div>
                                            </div>
                                            <div class="media-support-info">
                                                <h6>John Loren</h6>
                                                <p class="mb-0">Hair Styling</p>
                                                <span>8:30 To 9:25 AM</span>
                                            </div>
                                            <div class="media-support-amount ml-3">
                                                <h5 class="mb-0">$25</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <div class="icon iq-icon-box event-icon bg-success rounded-small font-size-18">
                                                <div class="date">1</div>
                                                <div class="month">Nov</div>
                                            </div>
                                            <div class="media-support-info">
                                                <h6>Juliee Rosing</h6>
                                                <p class="mb-0">Makeup</p>
                                                <span>9:45 To 11:30 AM</span>
                                            </div>
                                            <div class="media-support-amount">
                                                <h5 class="mb-0">$70</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <div class="icon iq-icon-box event-icon bg-primary rounded-small font-size-18">
                                                <div class="date">2</div>
                                                <div class="month">Nov</div>
                                            </div>
                                            <div class="media-support-info">
                                                <h6>Darcey Nooert</h6>
                                                <p class="mb-0">Hair Spa</p>
                                                <span>10:15 To 11:30 AM</span>
                                            </div>
                                            <div class="media-support-amount ml-3">
                                                <h5 class="mb-0">$50</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <div class="icon iq-icon-box event-icon bg-success rounded-small font-size-18">
                                                <div class="date">3</div>
                                                <div class="month">Nov</div>
                                            </div>
                                            <div class="media-support-info">
                                                <h6>Petey Cruiser</h6>
                                                <p class="mb-0">Makeup</p>
                                                <span>8:30 To 11:30 AM</span>
                                            </div>
                                            <div class="media-support-amount ml-3">
                                                <h5 class="mb-0">$84</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="icon iq-icon-box event-icon bg-primary rounded-small font-size-18">
                                                <div class="date">2</div>
                                                <div class="month">Nov</div>
                                            </div>
                                            <div class="media-support-info">
                                                <h6>Gail Forcewind</h6>
                                                <p class="mb-0">Hair Styling</p>
                                                <span>9:00 To 10:45 AM</span>
                                            </div>
                                            <div class="media-support-amount ml-3">
                                                <h5 class="mb-0">$74</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Recent Customer</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <button class="btn btn-sm btn-primary">View All</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless data-table">
                                            <thead>
                                            <tr>
                                                <th style="width:15%">Name</th>
                                                <th style="width:10%">Date</th>
                                                <th style="width:10%">Gender</th>
                                                <th style="width:10%">Service</th>
                                                <th style="width:15%">Expert</th>
                                                <th style="width:10%">Code</th>
                                                <th style="width:10%">Number</th>
                                                <th style="width:10%">Price</th>
                                                <th style="width:10%">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <a href="javascript:void(0);"><img src="../assets/images/user/01.jpg"
                                                                                           class="img-fluid avatar-40 rounded" alt="image"></a>
                                                        <div class="media-body ml-3">
                                                            <span>William Smith</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>20/08/2020</span>
                                                </td>
                                                <td>
                                                    <span>Male</span>
                                                </td>
                                                <td>
                                                    <span>Hair Spa</span>
                                                </td>
                                                <td>
                                                    <span>Melinda</span>
                                                </td>
                                                <td>
                                                    <span>AB123</span>
                                                </td>
                                                <td>
                                                    <span>1234567890</span>
                                                </td>
                                                <td>
                                                    <span>25$</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger">Confirmed</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge bg-success-light mr-2" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                                class="ri-pencil-line"></i></a>
                                                        <a class="badge bg-danger-light" data-toggle="tooltip" data-placement="top"
                                                           title="" data-original-title="Delete" href="#"><i
                                                                class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <a href="javascript:void(0);"><img src="../assets/images/user/02.jpg"
                                                                                           class="img-fluid avatar-40 rounded" alt="image"></a>
                                                        <div class="media-body ml-3">
                                                            <span>Alena Mathew</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>02/09/2020</span>
                                                </td>
                                                <td>
                                                    <span>Female</span>
                                                </td>
                                                <td>
                                                    <span>Hair Cut</span>
                                                </td>
                                                <td>
                                                    <span>John Martin</span>
                                                </td>
                                                <td>
                                                    <span>AB124</span>
                                                </td>
                                                <td>
                                                    <span>1234567890</span>
                                                </td>
                                                <td>
                                                    <span>50$</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning">Pending</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge bg-success-light mr-2" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                                class="ri-pencil-line"></i></a>
                                                        <a class="badge bg-danger-light" data-toggle="tooltip" data-placement="top"
                                                           title="" data-original-title="Delete" href="#"><i
                                                                class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <a href="javascript:void(0);"><img src="../assets/images/user/03.jpg"
                                                                                           class="img-fluid avatar-40 rounded" alt="image"></a>
                                                        <div class="media-body ml-3">
                                                            <span>Barry Deo</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>02/09/2020</span>
                                                </td>
                                                <td>
                                                    <span>Female</span>
                                                </td>
                                                <td>
                                                    <span>Hair Spa</span>
                                                </td>
                                                <td>
                                                    <span>Sal Monella</span>
                                                </td>
                                                <td>
                                                    <span>AB124</span>
                                                </td>
                                                <td>
                                                    <span>1234567890</span>
                                                </td>
                                                <td>
                                                    <span>50$</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning">Pending</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge bg-success-light mr-2" data-toggle="tooltip"
                                                           data-placement="top" title="" data-original-title="Edit" href="#"><i
                                                                class="ri-pencil-line"></i></a>
                                                        <a class="badge bg-danger-light" data-toggle="tooltip" data-placement="top"
                                                           title="" data-original-title="Delete" href="#"><i
                                                                class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="layout4" role="tabpanel" aria-labelledby="layout4-tab">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-xl-8 row m-0">
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height bg-warning">
                                    <div class="card-body">
                                        <div class="top-title-text-block">
                                            <div class="d-flex align-items-center">
                                                <div class="img-icon">
                                                    <a href="javascript:void(0);">
                                                        <img src="../assets/images/layouts/layout-12/tab-images/s-2.png"
                                                             class="img-fluid bg-white avatar-60 rounded-small" alt="image"></a>
                                                </div>
                                                <div class="image-text ml-3">
                                                    <h4 class="text-white">Men's Shoes</h4>
                                                    <p class="mb-0 text-capitlise">Men's Wear</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="text-white"><b>100K</b></h1>
                                            <p class="mb-0 mt-2">Total Sell</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-5">
                                            <p class="mb-0">Total USD</p>
                                            <h3 class="text-white">$59.85k</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height bg-primary">
                                    <div class="card-body">
                                        <div class="top-title-text-block">
                                            <div class="d-flex align-items-center">
                                                <div class="img-icon">
                                                    <a href="javascript:void(0);">
                                                        <img src="../assets/images/layouts/layout-12/tab-images/s-1.png"
                                                             class="img-fluid bg-white avatar-60 rounded-small" alt="image"></a>
                                                </div>
                                                <div class="image-text ml-3">
                                                    <h4 class="text-white"><b>john Drone</b></h4>
                                                    <p class="mb-0 text-capitlise">Watches</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="text-white">200K</h1>
                                            <p class="mb-0 mt-2">Total Sell</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-5">
                                            <p class="mb-0">Total USD</p>
                                            <h3 class="text-white">$59.85k</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="card card-block card-stretch card-height bg-success">
                                    <div class="card-body">
                                        <div class="top-title-text-block mb-3">
                                            <h3 class="text-white line-height">Analytics</h3>
                                            <p class="mb-0">Status</p>
                                        </div>
                                        <div class="bg-white p-3 rounded">
                                            <div id="ecommerce2-chart-06"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body">
                                    <h3>Popular Items</h3>
                                    <p class="mb-0">Chart</p>
                                    <div id="ecommerce2-chart-07"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title mr-md-0 mr-2">
                                        <h4 class="card-title">$ 1456 M</h4>
                                        <p class="mb-0">Total Revenue</p>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                        <span class="dropdown-toggle dropdown-bg btn btn-outline-primary" id="dropdownMenuButton4"
                                              data-toggle="dropdown" aria-expanded="false" role="button">
                                            Monthly<i class="ri-arrow-down-s-line ml-1"></i>
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                 aria-labelledby="dropdownMenuButton4" style="">
                                                <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="ecommerce2-chart-01"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title mr-md-0 mr-2">
                                        <h4 class="card-title">Top Selling Products</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary view-more">View All</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-inline p-0 m-0">
                                        <li class="media align-items-center">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/t-p-1.jpg"
                                                                               class="img-fluid avatar-60 rounded-small" alt="image"></a>
                                            <div class="media-body ml-3">
                                                <div class="d-flex justify-content-between">
                                                    <h5>Gerish Watch</h5>
                                                    <div class="text-body"><b>$ 12</b></div>
                                                </div>
                                                <p class="mb-0">Electronic</p>
                                            </div>
                                        </li>
                                        <li class="media align-items-center mt-3">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/t-p-2.jpg"
                                                                               class="img-fluid avatar-60 rounded-small" alt="image"></a>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5>Brand Shoes</h5>
                                                    <div class="text-body"><b>$ 48.6</b></div>
                                                </div>
                                                <p class="mb-0">Footwear</p>
                                            </div>
                                        </li>
                                        <li class="media align-items-center mt-3">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/t-p-3.jpg"
                                                                               class="img-fluid avatar-60 rounded-small" alt="image"></a>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5>Caprese bag</h5>
                                                    <div class="text-body"><b>$ 12.5</b></div>
                                                </div>
                                                <p class="mb-0">Bag</p>
                                            </div>
                                        </li>
                                        <li class="media align-items-center mt-3">
                                            <a href="javascript:void(0);"><img src="../assets/images/layouts/layout-12/tab-images/t-p-4.jpg"
                                                                               class="img-fluid avatar-60 rounded-small" alt="image"></a>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5>Ethnic Dress</h5>
                                                    <div class="text-body"><b>$ 20.5</b></div>
                                                </div>
                                                <p class="mb-0">Clothes</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title mr-md-0 mr-2">
                                        <h4 class="card-title">New Products</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary view-more">View All</a>
                                    </div>
                                </div>
                                <div class="card-body eco2-pro">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless">
                                            <tbody>
                                            <tr class="iq-product-border">
                                                <td>
                                                    <div class="media align-items-center">
                                                        <a href="javascript:void(0);"><img
                                                                src="../assets/images/layouts/layout-12/tab-images/07.png" class="p_img"
                                                                alt="image"></a>
                                                        <div class="media-body ml-3">
                                                            <h6>Nike Shoes</h6>
                                                            <p class="mb-0">Shoes</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Item</h6>
                                                    <p class="mb-0">90</p>
                                                </td>
                                                <td>
                                                    <h6>Price</h6>
                                                    <p class="mb-0">$25.00</p>
                                                </td>
                                                <td>
                                                    <h6>Coupon Code</h6>
                                                    <p class="mb-0">Ab56789</p>
                                                </td>
                                            </tr>
                                            <tr class="iq-product-border">
                                                <td>
                                                    <div class="media align-items-center">
                                                        <a href="javascript:void(0);"><img
                                                                src="../assets/images/layouts/layout-12/tab-images/08.png" class="p_img"
                                                                alt="image"></a>
                                                        <div class="media-body ml-3">
                                                            <h6>Caprese Bag</h6>
                                                            <p class="mb-0"> Bag</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Item</h6>
                                                    <p class="mb-0">50</p>
                                                </td>
                                                <td>
                                                    <h6>Price</h6>
                                                    <p class="mb-0">$50.00</p>
                                                </td>
                                                <td>
                                                    <h6>Coupon Code</h6>
                                                    <p class="mb-0">AA56789</p>
                                                </td>
                                            </tr>
                                            <tr class="iq-product-border">
                                                <td>
                                                    <div class="media align-items-center">
                                                        <a href="javascript:void(0);"><img
                                                                src="../assets/images/layouts/layout-12/tab-images/09.png" class="p_img"
                                                                alt="image"></a>
                                                        <div class="media-body ml-3">
                                                            <h6>Smart Watch</h6>
                                                            <p class=mb-0>Watch</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Item</h6>
                                                    <p class=mb-0>80</p>
                                                </td>
                                                <td>
                                                    <h6>Price</h6>
                                                    <p class=mb-0>$75.00</p>
                                                </td>
                                                <td>
                                                    <h6>Coupon Code</h6>
                                                    <p class=mb-0>Ac56789</p>
                                                </td>
                                            </tr>
                                            <tr class="iq-product-border">
                                                <td>
                                                    <div class="media align-items-center">
                                                        <a href="javascript:void(0);"><img
                                                                src="../assets/images/layouts/layout-12/tab-images/06.png" class="p_img"
                                                                alt="image"></a>
                                                        <div class="media-body ml-3">
                                                            <h6>Skechers Shoes</h6>
                                                            <p class="mb-0">Shoes</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Item</h6>
                                                    <p class=mb-0>70</p>
                                                </td>
                                                <td>
                                                    <h6>Price</h6>
                                                    <p class=mb-0>$55.00</p>
                                                </td>
                                                <td>
                                                    <h6>Coupon Code</h6>
                                                    <p class=mb-0>Ac55656</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header">
                                    <div class="header-title">
                                        <h4 class="card-title">Viwed On Devices</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="ecommerce2-chart-02"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card card-block card-stretch card-height-half">
                                <div class="card-body mini-chart">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-12 mb-md-0 mb-4">
                                            <div id="ecommerce2-chart-04"></div>
                                        </div>
                                        <div class="col-md-6 col-12 iq-cart-text">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p class="mb-1 font-size-18"><b>Balance</b></p>
                                                    <h4>$ 30,000 M</h4>
                                                    <p class="mb-0 mt-1">Last update yesterday</p>
                                                </div>
                                                <div>
                                                <span class="icon-arrow bg-danger-light rounded d-block m-auto"><i
                                                        class="las la-long-arrow-alt-up text-danger"></i></span>
                                                    <p class="text-danger text-center pt-1">+33.5%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-block card-stretch card-height-half">
                                <div class="card-body mini-chart">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-12 mb-md-0 mb-4">
                                            <div id="ecommerce2-chart-05"></div>
                                        </div>
                                        <div class="col-md-6 col-12 iq-cart-text country-text">
                                            <div class="d-flex justify-content-between res-align">
                                                <div>
                                                    <h4>Top Selling Country</h4>
                                                    <p class="my-1 font-size-18"><b>INDIA</b></p>
                                                    <p class="mb-0">You are at the 1st postion in top Selling</p>
                                                </div>
                                                <div>
                                                    <svg width="38" height="38" class="svg-primary" viewBox="0 0 42 42" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M21 0C9.39919 0 0 9.39919 0 21C0 32.6008 9.39919 42 21 42C32.6008 42 42 32.6008 42 21C42 9.39919 32.6008 0 21 0ZM32.9734 32.9734C29.7726 36.1742 25.5218 37.9355 21 37.9355C16.4782 37.9355 12.2274 36.1742 9.02661 32.9734C5.82581 29.7726 4.06452 25.5218 4.06452 21C4.06452 16.4782 5.82581 12.2274 9.02661 9.02661C12.2274 5.82581 16.4782 4.06452 21 4.06452C25.5218 4.06452 29.7726 5.82581 32.9734 9.02661C36.1742 12.2274 37.9355 16.4782 37.9355 21C37.9355 25.5218 36.1742 29.7726 32.9734 32.9734ZM27.7742 18.2903C29.273 18.2903 30.4839 17.0794 30.4839 15.5806C30.4839 14.0819 29.273 12.871 27.7742 12.871C26.2754 12.871 25.0645 14.0819 25.0645 15.5806C25.0645 17.0794 26.2754 18.2903 27.7742 18.2903ZM14.2258 18.2903C15.7246 18.2903 16.9355 17.0794 16.9355 15.5806C16.9355 14.0819 15.7246 12.871 14.2258 12.871C12.727 12.871 11.5161 14.0819 11.5161 15.5806C11.5161 17.0794 12.727 18.2903 14.2258 18.2903ZM30.6871 23.7097H11.3129C10.6185 23.7097 10.0851 24.3024 10.1698 24.9798C10.8048 29.9927 15.1573 33.871 20.4242 33.871H21.5758C26.8427 33.871 31.1952 29.9927 31.8302 24.9798C31.9149 24.3024 31.3815 23.7097 30.6871 23.7097Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title mr-md-0 mr-2">
                                        <h4 class="card-title">Used By Country</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                        <span class="dropdown-toggle dropdown-bg bg-primary p-2" id="dropdownMenuButton11"
                                              data-toggle="dropdown" aria-expanded="false" role="button">
                                            Monthly<i class="ri-arrow-down-s-line ml-1 text-white"></i>
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                 aria-labelledby="dropdownMenuButton11" style="">
                                                <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless">
                                            <tbody>
                                            <tr>
                                                <td style="width: 10%;">
                                                    <h6>India</h6>
                                                </td>
                                                <td style="width: 85%;">
                                                    <div class="progress m-2" style="height: 10px; ">
                                                        <div class="progress-bar bg-danger rounded" role="progressbar"
                                                             style="width: 50%; height: 10px;" aria-valuenow="15" aria-valuemin="50"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-success rounded-right position-relative"
                                                             role="progressbar" style="width: 30%; height: 10px;" aria-valuenow="30"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary rounded-right position-relative"
                                                             role="progressbar" style="width: 10%; height: 10px;" aria-valuenow="20"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td style="width: 5%;">
                                                    <h6>75%</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10%;">
                                                    <h6>U.S.A</h6>
                                                </td>
                                                <td style="width: 85%;">
                                                    <div class="progress m-2" style="height: 10px;">
                                                        <div class="progress-bar bg-danger rounded" role="progressbar"
                                                             style="width: 30%; height: 10px;" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-success rounded-right position-relative"
                                                             role="progressbar" style="width: 20%; height: 10px;" aria-valuenow="30"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary rounded-right position-relative"
                                                             role="progressbar" style="width: 15%; height: 10px;" aria-valuenow="20"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td style="width: 5%;">
                                                    <h6>55%</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10%;">
                                                    <h6>Canada</h6>
                                                </td>
                                                <td style="width: 85%;">
                                                    <div class="progress m-2" style="height: 10px;">
                                                        <div class="progress-bar bg-danger rounded" role="progressbar"
                                                             style="width: 35%; height: 10px;" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-success rounded-right position-relative"
                                                             role="progressbar" style="width: 20%; height: 10px;" aria-valuenow="30"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary rounded-right position-relative"
                                                             role="progressbar" style="width: 30%; height: 10px;" aria-valuenow="20"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td style="width: 5%;">
                                                    <h6>85%</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10%;">
                                                    <h6>London</h6>
                                                </td>
                                                <td style="width: 85%;">
                                                    <div class="progress m-2" style="height: 10px;">
                                                        <div class="progress-bar bg-danger rounded" role="progressbar"
                                                             style="width: 10%; height: 10px;" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-success rounded-right position-relative"
                                                             role="progressbar" style="width: 10%; height: 10px;" aria-valuenow="30"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary rounded-right position-relative"
                                                             role="progressbar" style="width: 10%; height: 10px;" aria-valuenow="20"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td style="width: 5%;">
                                                    <h6>30%</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10%;">
                                                    <h6>Europe</h6>
                                                </td>
                                                <td style="width: 85%;">
                                                    <div class="progress m-2" style="height: 10px;">
                                                        <div class="progress-bar bg-danger rounded" role="progressbar"
                                                             style="width: 30%; height: 10px;" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-success rounded-right position-relative"
                                                             role="progressbar" style="width: 10%; height: 10px;" aria-valuenow="30"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary rounded-right position-relative"
                                                             role="progressbar" style="width: 20%; height: 10px;" aria-valuenow="20"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td style="width: 5%;">
                                                    <h6>60%</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10%;">
                                                    <h6>Japan</h6>
                                                </td>
                                                <td style="width: 85%;">
                                                    <div class="progress m-2" style="height: 10px;">
                                                        <div class="progress-bar bg-danger rounded" role="progressbar"
                                                             style="width: 15%; height: 10px;" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-success rounded-right position-relative"
                                                             role="progressbar" style="width: 40%; height: 10px;" aria-valuenow="30"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary rounded-right position-relative"
                                                             role="progressbar" style="width: 10%; height: 10px;" aria-valuenow="20"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td style="width: 5%;">
                                                    <h6>65%</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10%;">
                                                    <h6>Australia</h6>
                                                </td>
                                                <td style="width: 85%;">
                                                    <div class="progress m-2" style="height: 10px;">
                                                        <div class="progress-bar bg-danger rounded" role="progressbar"
                                                             style="width: 10%; height: 10px;" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-success rounded-right position-relative"
                                                             role="progressbar" style="width: 10%; height: 10px;" aria-valuenow="30"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-primary rounded-right position-relative"
                                                             role="progressbar" style="width: 10%; height: 10px;" aria-valuenow="20"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td style="width: 5%;">
                                                    <h6>30%</h6>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="layout5" role="tabpanel" aria-labelledby="layout5-tab">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-block card-stretch card-height bg-primary">
                                <div class="card-body tdy-appoin">
                                    <div class="d-flex align-items-center">
                                        <div class="img-icon bg-white avatar-60 rounded-small">
                                            <i class="las la-briefcase-medical"></i>
                                        </div>
                                        <div class="image-text ml-3">
                                            <h4 class="text-white mb-1"><b>john Hospital</b></h4>
                                            <p class="mb-0 text-capitlise">Today Appoinment</p>
                                        </div>
                                    </div>
                                    <div class="top-title-text-block">
                                        <div class="d-flex align-items-center">
                                            <h1 class="text-white mr-3">15</h1>
                                            <div>
                                                <span class="app-percentage">25%</span>
                                            </div>
                                        </div>
                                        <p class="mb-0 mt-2 text-white">Today Appoinment</p>
                                    </div>
                                    <div class="pt-50">
                                        <div class="d-flex align-items-center">
                                            <h1 class="text-white mr-3">30</h1>
                                            <div>
                                                <span class="app-percentage">40%</span>
                                            </div>
                                        </div>
                                        <p class="mb-0 mt-2 text-white">Upcoming Appoinment</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-block card-stretch card-height-half">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between fit-box">
                                        <div>
                                            <div class="fit-icon rounded text-center bg-danger-light svg-danger">
                                                <svg width="32" height="39" viewBox="0 0 52 65" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M39.9512 38.0488H36.7527C35.3671 38.0488 34.2439 36.9255 34.2439 35.5399C34.2439 34.7139 34.6602 33.9521 35.2961 33.4249C38.525 30.7475 40.5854 26.7077 40.5854 22.1951V9.51219C40.5854 4.26717 36.3182 0 31.0732 0H14.5854C10.0397 0 6.34146 3.69821 6.34146 8.2439C6.34146 9.40055 6.58094 10.5022 7.0129 11.5021C8.53651 15.0286 11.4146 18.3535 11.4146 22.1951C11.4146 26.7077 13.475 30.7475 16.7039 33.4249C17.3398 33.9521 17.7561 34.7139 17.7561 35.5399C17.7561 36.9255 16.6329 38.0488 15.2473 38.0488H12.0488C5.40508 38.0488 0 43.4539 0 50.0976V63.0341C0 64.0848 0.851785 64.9366 1.90244 64.9366H50.0976C51.1482 64.9366 52 64.0848 52 63.0341V50.0976C52 43.4539 46.5949 38.0488 39.9512 38.0488ZM14.5854 3.80488H31.0732C34.2202 3.80488 36.7805 6.36518 36.7805 9.51219C36.7805 11.1978 35.3111 12.5534 33.7378 11.9486C32.3083 11.3991 30.9971 10.5506 29.8817 9.43521C29.5251 9.07844 29.0412 8.87805 28.5366 8.87805C28.0319 8.87805 27.5481 9.07844 27.1914 9.43534C25.0971 11.5295 22.3127 12.6829 19.3508 12.6829H14.5854C14.284 12.6829 13.9898 12.6525 13.7052 12.5949C13.7002 12.5939 13.6952 12.5931 13.6902 12.5921C11.6701 12.1769 10.1463 10.385 10.1463 8.2439C10.1463 5.79622 12.1377 3.80488 14.5854 3.80488ZM15.2195 22.1951V20.6191C15.2195 18.3375 17.0692 16.4878 19.3508 16.4878C21.3293 16.4878 23.2489 16.1046 25.0249 15.3733C27.239 14.4617 29.8298 14.4588 32.0441 15.37C34.5782 16.4129 36.7805 18.5909 36.7805 21.3312V22.1951C36.7805 28.1395 31.9444 32.9756 26 32.9756C20.0556 32.9756 15.2195 28.1395 15.2195 22.1951ZM26 36.7805C26.2172 36.7805 26.4333 36.7757 26.6482 36.7662C28.5563 36.6821 30.439 38.0413 30.439 39.9512C30.439 41.0019 31.2908 41.8537 32.3415 41.8537H39.9512C44.4969 41.8537 48.1951 45.5519 48.1951 50.0976V50.3869C48.1951 52.8354 45.5379 54.36 43.4241 53.1242C42.4515 52.5556 41.8537 51.5136 41.8537 50.3869V50.0976C41.8537 49.0469 41.0019 48.1951 39.9512 48.1951C38.6356 48.1951 36.7091 49.1985 35.5733 48.5345L21.846 40.5093C21.6535 40.3967 21.5611 40.1742 21.5611 39.9512C21.5611 38.0414 23.4439 36.6821 25.3519 36.7662C25.5668 36.7757 25.7828 36.7805 26 36.7805ZM3.80488 50.0976C3.80488 46.7357 5.82778 43.8377 8.72028 42.5562C10.2127 41.8949 11.8638 42.6222 12.9416 43.8482L19.4683 51.2723C19.804 51.6542 19.5329 52.2537 19.0244 52.2537C15.5277 52.2537 12.6829 55.0984 12.6829 58.5951C12.6829 59.8258 11.8345 61.1317 10.6038 61.1317H7.5238C5.46989 61.1317 3.80488 59.4667 3.80488 57.4128V50.0976ZM16.4878 58.5951C16.4878 57.1964 17.6257 56.0585 19.0244 56.0585H22.5285C23.2579 56.0585 23.952 56.3725 24.4336 56.9203C25.8744 58.5592 24.7106 61.1317 22.5285 61.1317H19.0244C17.6257 61.1317 16.4878 59.9938 16.4878 58.5951ZM37.5625 61.1317C34.7908 61.1317 32.1532 59.9386 30.3232 57.8569L16.4615 42.0894C16.3809 41.9977 16.446 41.8537 16.5682 41.8537C16.5934 41.8537 16.6181 41.8604 16.6398 41.8731L47.9399 60.1715C48.098 60.264 48.1951 60.4333 48.1951 60.6164C48.1951 60.901 47.9644 61.1317 47.6798 61.1317H37.5625Z" />
                                                </svg>
                                            </div>
                                            <div class="iq-cart-text mt-3">
                                                <h2 class="text-danger">212</h2>
                                                <p class="mb-0">New Patient</p>
                                            </div>
                                        </div>
                                        <div class="iq-progress-bar-linear d-inline-block">
                                            <div class="iq-progress-bar progress-bar-vertical">
                                                <span class="bg-danger" data-percent="70"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-block card-stretch card-height-half">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between fit-box">
                                        <div>
                                            <div class="fit-icon rounded text-center bg-success-light svg-success">
                                                <svg width="43" height="39" viewBox="0 0 52 47" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M39.7522 19.5738C39.7511 19.5641 39.7504 19.5544 39.7489 19.5448C39.7421 19.4973 39.7331 19.4499 39.7202 19.4031C39.7201 19.4026 39.7199 19.4021 39.7198 19.4015C39.7078 19.3578 39.6925 19.3146 39.6752 19.2719C39.6702 19.2597 39.6648 19.2479 39.6595 19.2359C39.6459 19.2051 39.6307 19.1747 39.6142 19.1448C39.6071 19.1318 39.6001 19.1187 39.5924 19.1059C39.5882 19.099 39.5849 19.0918 39.5806 19.0848C39.5632 19.0572 39.5441 19.0312 39.5248 19.0054C39.5212 19.0006 39.5182 18.9956 39.5146 18.9908C39.4852 18.9527 39.4534 18.9173 39.4201 18.8838C39.4139 18.8774 39.4071 18.8716 39.4006 18.8654C39.3717 18.8376 39.3417 18.8114 39.3104 18.7868C39.3024 18.7806 39.2946 18.7744 39.2864 18.7684C39.2445 18.7373 39.2013 18.7084 39.1562 18.6833L21.824 8.83128L31.8034 2.54732L48.5335 12.0569L41.4875 16.4937C40.9376 16.8398 40.7726 17.5663 41.1188 18.116C41.4649 18.6659 42.1913 18.831 42.7412 18.4847L51.45 13.0009C51.8002 12.7805 52.0087 12.3924 51.9993 11.9788C51.99 11.5651 51.7643 11.187 51.4045 10.9826L32.3537 0.153696C31.9769 -0.0606553 31.5125 -0.050067 31.1455 0.180872L18.9155 7.88211C18.913 7.88364 18.9104 7.88528 18.9079 7.88681L12.7966 11.7351C12.7937 11.7369 12.7909 11.7387 12.7882 11.7404L0.549839 19.447C0.199725 19.6673 -0.00886203 20.0554 0.000549664 20.4691C0.00984371 20.8827 0.235607 21.2608 0.595369 21.4653L19.6463 32.2942C19.8268 32.3969 20.0272 32.4479 20.2276 32.4479C20.4456 32.4479 20.6632 32.3873 20.8544 32.267L29.5633 26.783C30.1131 26.4369 30.2782 25.7104 29.932 25.1607C29.586 24.6108 28.8594 24.4456 28.3096 24.792L20.1966 29.9006L3.46652 20.3908L13.446 14.1068L31.2894 24.2493V37.6823C31.2894 38.1108 31.5222 38.5053 31.8972 38.7123C32.0745 38.8102 32.2703 38.8588 32.4658 38.8588C32.6839 38.8588 32.9016 38.7982 33.0926 38.6779L39.2119 34.8246C39.554 34.6092 39.7615 34.2333 39.7615 33.8291V19.7115C39.7615 19.7046 39.7604 19.698 39.7601 19.6911C39.7594 19.652 39.7568 19.613 39.7522 19.5738ZM33.6423 35.5514V23.5649C33.6423 23.1418 33.415 22.7513 33.0471 22.5422L15.7048 12.6845L19.5651 10.2536L36.2951 19.7633L34.8303 20.6857C34.2804 21.0318 34.1153 21.7582 34.4616 22.308C34.6851 22.6633 35.0673 22.8578 35.4583 22.8578C35.6724 22.8578 35.8893 22.7993 36.0839 22.6767L37.4085 21.8427V33.1798L33.6423 35.5514Z"
                                                        fill="#37E6B0" />
                                                    <path
                                                        d="M50.1967 15.7156L41.4878 21.1994C40.9379 21.5455 40.7728 22.272 41.1191 22.8218C41.3426 23.177 41.7248 23.3715 42.1158 23.3715C42.3299 23.3715 42.5468 23.313 42.7414 23.1905L51.4503 17.7066C52.0002 17.3605 52.1652 16.634 51.819 16.0843C51.4729 15.5344 50.7464 15.3692 50.1967 15.7156Z"
                                                        fill="#37E6B0" />
                                                    <path
                                                        d="M28.3096 29.4977L20.1966 34.6064L1.758 24.1256C1.19353 23.8047 0.47495 24.0019 0.153893 24.567C-0.167163 25.1319 0.0303646 25.8501 0.595302 26.1711L19.6462 37C19.8267 37.1027 20.0272 37.1538 20.2275 37.1538C20.4455 37.1538 20.6631 37.0932 20.8543 36.9728L29.5632 31.4889C30.1131 31.1428 30.2781 30.4163 29.9319 29.8665C29.5859 29.3165 28.8593 29.1514 28.3096 29.4977Z"
                                                        fill="#37E6B0" />
                                                    <path
                                                        d="M50.1967 20.4214L41.4878 25.9053C40.9379 26.2514 40.7728 26.9778 41.1191 27.5276C41.3426 27.8829 41.7248 28.0774 42.1158 28.0774C42.3299 28.0774 42.5468 28.0189 42.7414 27.8963L51.4503 22.4125C52.0002 22.0663 52.1652 21.3399 51.819 20.7901C51.4729 20.2401 50.7464 20.0751 50.1967 20.4214Z"
                                                        fill="#37E6B0" />
                                                    <path
                                                        d="M28.3096 34.2035L20.1966 39.3122L1.758 28.8315C1.19353 28.5105 0.47495 28.7077 0.153893 29.2729C-0.167163 29.8377 0.0303646 30.5559 0.595302 30.877L19.6462 41.7058C19.8267 41.8086 20.0272 41.8596 20.2275 41.8596C20.4455 41.8596 20.6631 41.799 20.8543 41.6787L29.5632 36.1947C30.1131 35.8486 30.2781 35.1221 29.9319 34.5724C29.5859 34.0223 28.8593 33.8572 28.3096 34.2035Z"
                                                        fill="#37E6B0" />
                                                    <path
                                                        d="M50.1967 25.1273L41.4878 30.6111C40.9379 30.9572 40.7728 31.6837 41.1191 32.2334C41.3426 32.5887 41.7248 32.7832 42.1158 32.7832C42.3299 32.7832 42.5468 32.7247 42.7414 32.6021L51.4503 27.1183C52.0002 26.7722 52.1652 26.0457 51.819 25.496C51.4729 24.9461 50.7464 24.781 50.1967 25.1273Z"
                                                        fill="#37E6B0" />
                                                    <path
                                                        d="M28.3096 38.9094L20.1966 44.0181L1.758 33.5373C1.19353 33.2164 0.47495 33.4136 0.153893 33.9787C-0.167163 34.5436 0.0303646 35.2618 0.595302 35.5828L19.6462 46.4117C19.8267 46.5144 20.0272 46.5655 20.2275 46.5655C20.4455 46.5655 20.6631 46.5049 20.8543 46.3845L29.5632 40.9006C30.1131 40.5545 30.2781 39.828 29.9319 39.2782C29.5859 38.7282 28.8593 38.5631 28.3096 38.9094Z"
                                                        fill="#37E6B0" />
                                                </svg>
                                            </div>
                                            <div class="iq-cart-text mt-3">
                                                <h2 class="text-success">250 M</h2>
                                                <p class="mb-0">Total Earning</p>
                                            </div>
                                        </div>
                                        <div class="iq-progress-bar-linear d-inline-block">
                                            <div class="iq-progress-bar progress-bar-vertical">
                                                <span class="bg-danger" data-percent="70"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="c-medical-bg">
                                    <div class="card-body p-4">
                                        <h1 class="medi-text">Exceptional care close to You</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Annual Report</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                        <span class="dropdown-toggle dropdown-bg btn btn-outline-primary" role="button"
                                              id="dropdownMenuButton5" data-toggle="dropdown" aria-expanded="false">
                                            Monthly<i class="ri-arrow-down-s-line ml-1"></i>
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                 aria-labelledby="dropdownMenuButton5">
                                                <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-1">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <h4>$ 50K</h4>
                                            <p class="text-info font-weight-700 mb-0">Profit</p>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar">
                                                    <span class="bg-info" data-percent="35"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <h4>$ 75K</h4>
                                            <p class="text-warning font-weight-700 mb-0">Maintenance</p>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar">
                                                    <span class="bg-warning" data-percent="65"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <h4>$ 20K</h4>
                                            <p class="text-success font-weight-700 mb-0">Phramcay</p>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar">
                                                    <span class="bg-success" data-percent="25"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="hospital2-chart-01"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Recent Appoinment</h4>
                                    </div>
                                </div>
                                <div class="card-body recent-appo">
                                    <div class="media border rounded-normal">
                                        <div class="img-icon bg-primary position-relative rounded-small avatar-60">
                                            <img src="../assets/images/layouts/layout-12/tab-images/r-1.png" class="img-fluid" alt="image">
                                        </div>
                                        <div class="media-body ml-3">
                                            <h5 class="mb-1 text-primary">Mathew Versteng</h5>
                                            <p class="mb-1">HiLead Fenix LLC</p>
                                            <p class="mb-3"><span class="title-text">10 october 2020</span> at 4:07 PM</p>
                                            <a href="#" class="text-primary"><span>Book Now</span> <i
                                                    class="ri-arrow-right-s-line read-ic"></i></a>
                                        </div>
                                    </div>
                                    <div class="media border rounded-normal spc-20">
                                        <div class="img-icon bg-primary position-relative rounded-small avatar-60">
                                            <img src="../assets/images/layouts/layout-12/tab-images/r-2.png" class="img-fluid" alt="image">
                                        </div>
                                        <div class="media-body ml-3">
                                            <h5 class="mb-1 text-primary">Mathew Versteng</h5>
                                            <p class="mb-1">HiLead Fenix LLC</p>
                                            <p class="mb-3"><span class="title-text">10 october 2020</span> at 4:07 PM</p>
                                            <a href="#" class="text-primary"><span>Book Now</span> <i
                                                    class="ri-arrow-right-s-line read-ic"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Appoinment Survey</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="hospital2-chart-02"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">By Country</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="hospital2-chart-03"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Hospital Rating</h4>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <p class="mb-1">Your Progress is pretty good</p>
                                    <div id="hospital2-chart-04"></div>
                                    <h3 class="rat-no">4.2/5</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Operation Survey</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                        <span class="dropdown-toggle btn btn-outline-primary p-2" id="dropdownMenuButton6"
                                              role="button" data-toggle="dropdown" aria-expanded="false">
                                            Monthly<i class="ri-arrow-down-s-line ml-1"></i>
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                 aria-labelledby="dropdownMenuButton6">
                                                <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="hospital2-chart-05"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body text-center inln-date">
                                    <input type="text" id="inline-date1" class="date-input basicFlatpickr d-none" readonly="readonly">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body">
                                    <div class="media">
                                        <img src="../assets/images/user/03.jpg" class="avatar-110 res-avatar rounded" alt="image">
                                        <div class="media-body ml-4">
                                            <h4>Dr. Bob Frapples</h4>
                                            <h6 class="text-primary mt-1">Surgon Expert</h6>
                                            <p class="mb-0">Onterio, Canada</p>
                                            <div class="d-flex justify-content-left doc-social h-doc-s">
                                                <a href="#"><i class="las la-star text-warning"></i></a>
                                                <a href="#"><i class="las la-star text-warning"></i></a>
                                                <a href="#"><i class="las la-star text-warning"></i></a>
                                                <a href="#"><i class="las la-star text-warning"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="list-inline p-0 m-0 mt-4">
                                        <li class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="ex-box iq-icon-box rounded-small bg-warning-light svg-warning text-center">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.1326 7.40612C10.7945 6.96059 10.582 6.42168 10.582 5.83594V0H9.52734V5.83594C9.52734 6.84693 9.94665 7.78187 10.6387 8.45986C10.7208 8.06769 10.8971 7.71346 11.1326 7.40612Z"
                                                            fill="#FE721C" />
                                                        <path
                                                            d="M10.582 12.1641C10.582 11.5783 10.7945 11.0394 11.1326 10.5939C10.8971 10.2866 10.7208 9.9323 10.6387 9.54013C9.94669 10.2181 9.52734 11.1531 9.52734 12.1641V18H10.582V12.1641Z"
                                                            fill="#FE721C" />
                                                        <path
                                                            d="M11.6287 11.0894C11.475 11.4234 11.3838 11.7847 11.3838 12.1641C11.3838 12.8686 11.6583 13.5308 12.1557 14.0283C13.1862 15.0588 14.8901 15.0592 15.9199 14.0283C17.3407 12.6075 18.0335 10.7302 17.9982 8.86417C17.9647 7.08871 17.2721 5.32351 15.9204 3.97168C14.9244 2.97571 13.1512 2.97571 12.1563 3.97168C11.6583 4.46914 11.3838 5.13142 11.3838 5.83591C11.3838 6.21525 11.475 6.57645 11.6287 6.91057C12.0721 6.57226 12.6192 6.36329 13.2187 6.36329V7.41798C12.3463 7.41798 11.6366 8.12764 11.6366 9.00001C11.6366 9.87238 12.3463 10.582 13.2187 10.582V11.6367C12.6192 11.6367 12.0722 11.4278 11.6287 11.0894Z"
                                                            fill="#FE721C" />
                                                        <path
                                                            d="M5.84369 14.0283C6.34168 13.5308 6.61618 12.8685 6.61618 12.164C6.61618 11.6575 6.4694 11.1753 6.20457 10.758C5.72163 11.2934 5.02997 11.6367 4.25393 11.6367V10.582C5.1263 10.582 5.83596 9.87234 5.83596 8.99998C5.83596 8.12761 5.1263 7.41794 4.25393 7.41794V6.36326C5.02993 6.36326 5.72163 6.70656 6.20457 7.24195C6.4694 6.82468 6.61618 6.34241 6.61618 5.83591C6.61618 5.13142 6.34168 4.46914 5.84422 3.97168C4.84824 2.97571 3.075 2.97571 2.08008 3.97168C0.728143 5.32358 0.0354239 7.08874 0.00177939 8.8642C-0.0336229 10.7301 0.659026 12.6075 2.07955 14.0283C3.11001 15.0588 4.81386 15.0592 5.84369 14.0283Z"
                                                            fill="#FE721C" />
                                                        <path
                                                            d="M8.47273 18V12.1641C8.47273 10.9123 7.84748 9.80486 6.87699 9.13583C6.85632 9.53296 6.74695 9.90336 6.56909 10.2353C7.09225 10.718 7.41804 11.4026 7.41804 12.1641V18H8.47273Z"
                                                            fill="#FE721C" />
                                                        <path
                                                            d="M6.87699 8.86416C7.84748 8.19513 8.47273 7.08768 8.47273 5.83594V0H7.41804V5.83594C7.41804 6.59735 7.09225 7.28202 6.56909 7.76475C6.74695 8.09666 6.85632 8.46707 6.87699 8.86416Z"
                                                            fill="#FE721C" />
                                                    </svg>
                                                </div>
                                                <div class="iq-result-info">
                                                    <h5>Kidney</h5>
                                                </div>
                                            </div>
                                            <p class="mb-0 font-size-18"><b>85</b></p>
                                        </li>
                                        <li class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="ex-box iq-icon-box rounded-small bg-success-light svg-success text-center">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path
                                                                d="M10.8676 1.97743C9.60581 1.64306 8.15948 1.89454 7.15236 2.6171H6.75752C6.21668 2.6171 5.77667 2.17677 5.77667 1.6355V0.693422C5.77667 0.311063 5.46557 0 5.08325 0H4.54413C4.1618 0 3.8507 0.311063 3.8507 0.693422V1.91468C3.8507 3.15415 4.71126 4.20493 5.88495 4.47623C5.86139 4.57235 5.84192 4.67005 5.82669 4.76866C5.59565 6.26273 6.39647 7.23741 7.03993 8.02062C7.94317 9.11995 8.43398 9.77361 6.70461 11.2562C6.26611 11.6321 5.98806 12.1538 5.9181 12.7178H5.24757C4.13709 12.7178 3.23364 13.6217 3.23364 14.7327V17.3066C3.23364 17.6889 3.5447 18 3.92706 18H4.37847C4.76079 18 5.07189 17.6889 5.07189 17.3066V15.126C5.07189 14.9806 5.19019 14.8623 5.3356 14.8623H6.86672C7.29534 15.1597 8.03088 15.4026 8.68296 15.4026C9.64698 15.4026 10.695 14.9606 11.6932 14.1219C12.8828 13.1226 13.844 11.6886 14.3996 10.084C15.6562 6.45529 13.4896 2.67212 10.8676 1.97743ZM12.5101 10.2302C11.9875 11.7215 9.76788 14.2178 8.26439 13.7851C7.55353 13.5806 7.35852 12.7109 8.10545 12.0365C8.93014 11.2918 9.41175 10.4907 9.46156 9.78082C9.46831 9.68474 9.59143 9.69096 9.68751 9.69096C9.93181 9.69096 10.2897 9.75625 10.764 10.0061C11.2496 10.262 11.8126 10.2982 12.3922 10.1107C12.4651 10.0871 12.5353 10.1584 12.5101 10.2302ZM9.36105 3.51352C9.18088 3.47467 9.0906 3.29115 9.15644 3.12996C9.2746 2.84664 9.69715 2.93171 9.69715 3.23754C9.69711 3.41346 9.53697 3.54741 9.36105 3.51352ZM12.9209 6.82179C12.55 5.31436 11.8494 4.0069 10.3318 3.65752C10.1804 3.62268 10.086 3.47171 10.1208 3.32033C10.1556 3.16898 10.3066 3.07455 10.458 3.10936C11.9764 3.45892 12.9607 4.6293 13.4672 6.68739C13.5108 6.86464 13.3764 7.03593 13.1939 7.03593C13.0674 7.03589 12.9525 6.95004 12.9209 6.82179Z"
                                                                fill="#37E6B0" />
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="iq-result-info">
                                                    <h5>Stomach</h5>
                                                </div>
                                            </div>
                                            <p class="mb-0 font-size-18"><b>40</b></p>
                                        </li>
                                        <li class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="ex-box iq-icon-box rounded-small bg-info-light svg-info text-center">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path
                                                                d="M16.2674 2.14775H14.337C13.9225 2.14775 13.5035 2.12771 13.0767 2.09361C13.4374 2.93982 13.4465 3.97657 13.4289 4.43466C13.4317 5.05868 13.5678 5.5906 13.823 5.9738C14.4569 6.92548 14.8194 8.12853 14.8039 9.18849C16.3932 8.49137 18.0085 6.27952 17.9999 4.25501C17.9947 2.95318 17.3306 2.14775 16.2674 2.14775Z"
                                                                fill="#4788FF" />
                                                            <path
                                                                d="M12.3743 4.41462C12.3743 4.4111 12.4826 2.11646 11.5028 1.89743C11.5017 1.89743 11.5007 1.89708 11.5 1.89673C11.2285 1.85461 10.6225 1.73758 10.016 1.59228C8.61187 1.25513 7.15676 1.08708 5.69004 1.08989C2.55832 1.09798 0 3.69005 0 6.82564V12.8996C0 13.9479 0.852891 14.8008 1.9016 14.8008C2.57098 14.8008 3.19816 14.4426 3.53883 13.866C4.18289 12.7751 5.16691 11.918 6.36293 11.6944V10.4917C6.36293 9.67048 6.04371 8.8988 5.46328 8.31837C5.25727 8.11235 5.25727 7.77837 5.46328 7.57235C5.66895 7.36634 6.00293 7.36669 6.20895 7.57235C6.98871 8.35212 7.41797 9.38888 7.41797 10.4917V12.1778C7.425 12.4622 7.65879 12.6915 7.94496 12.6915C8.2357 12.6915 8.47195 12.4549 8.47195 12.1641C8.47195 12.1595 8.47195 12.155 8.47231 12.1508C8.47231 11.6189 8.47231 11.0221 8.47231 10.4917C8.47231 9.38888 8.90227 8.35212 9.68203 7.57235C9.8877 7.36634 10.2217 7.36634 10.4277 7.57235C10.6337 7.77837 10.6337 8.11235 10.4277 8.31837C9.84727 8.8988 9.52734 9.67048 9.52734 10.4917V11.6371C10.472 11.6371 11.3098 11.6368 11.3122 11.6368C12.5914 11.6368 13.6342 10.6422 13.7355 9.42579C13.7359 9.42333 13.7362 9.42087 13.7366 9.41841C13.8108 8.62493 13.5671 7.4922 12.9452 6.55845C12.5719 5.99771 12.3743 5.25661 12.3743 4.41462Z"
                                                                fill="#4788FF" />
                                                            <path
                                                                d="M7.41797 13.6558V16.3828C7.41797 16.6854 7.67197 16.9309 7.98609 16.9088C8.25891 16.8887 8.47231 16.6486 8.47231 16.3621V13.6554C8.30707 13.7141 8.12988 13.7461 7.94496 13.7461C7.76039 13.7461 7.58285 13.7141 7.41797 13.6558Z"
                                                                fill="#4788FF" />
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="iq-result-info">
                                                    <h5>Liver</h5>
                                                </div>
                                            </div>
                                            <p class="mb-0 font-size-18"><b>35</b></p>
                                        </li>
                                        <li class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="ex-box iq-icon-box rounded-small bg-primary-light svg-primary text-center">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.32728 11.5619C3.37552 11.5947 3.41239 11.6416 3.43279 11.6962C3.45319 11.7508 3.45612 11.8104 3.44115 11.8668C3.31611 12.3372 3.36952 12.8373 3.5911 13.2708C3.81268 13.7042 4.18677 14.0404 4.64135 14.2146H4.64163H4.64188C4.91021 14.3167 5.19763 14.359 5.48403 14.3385C5.77042 14.3179 6.04886 14.235 6.29983 14.0955C6.55081 13.9561 6.76827 13.7634 6.93697 13.5311C7.10567 13.2987 7.22154 13.0323 7.27645 12.7505C7.28316 12.7139 7.29703 12.6791 7.31728 12.6479C7.33752 12.6168 7.36374 12.59 7.39441 12.569C7.42508 12.548 7.4596 12.5334 7.49597 12.5258C7.53235 12.5183 7.56986 12.518 7.60633 12.525C7.64281 12.5321 7.67753 12.5463 7.7085 12.5668C7.73946 12.5873 7.76605 12.6138 7.78673 12.6446C7.80741 12.6755 7.82177 12.7102 7.82899 12.7466C7.8362 12.783 7.83612 12.8205 7.82876 12.857C7.76397 13.1899 7.63299 13.5064 7.44357 13.7877C7.25416 14.069 7.01017 14.3094 6.72609 14.4947C6.442 14.68 6.12361 14.8063 5.78978 14.8661C5.45596 14.926 5.11351 14.9183 4.78275 14.8433C4.78208 14.8642 4.78124 14.885 4.78124 14.9059C4.78124 15.4281 4.98866 15.9288 5.35787 16.298C5.72708 16.6673 6.22784 16.8747 6.74999 16.8747C7.27213 16.8747 7.77289 16.6673 8.14211 16.298C8.51132 15.9288 8.71874 15.4281 8.71874 14.9059V11.8125C8.27134 11.812 7.84242 11.634 7.52606 11.3177C7.2097 11.0013 7.03175 10.5724 7.03124 10.125V9.84375C7.03124 9.76916 7.06087 9.69762 7.11361 9.64488C7.16636 9.59213 7.2379 9.5625 7.31249 9.5625C7.38708 9.5625 7.45862 9.59213 7.51136 9.64488C7.56411 9.69762 7.59374 9.76916 7.59374 9.84375V10.125C7.59407 10.4233 7.71271 10.7092 7.92361 10.9201C8.13452 11.131 8.42047 11.2497 8.71874 11.25V3.65625H7.87499C7.8004 3.65625 7.72886 3.62662 7.67611 3.57387C7.62337 3.52113 7.59374 3.44959 7.59374 3.375C7.59374 3.30041 7.62337 3.22887 7.67611 3.17613C7.72886 3.12338 7.8004 3.09375 7.87499 3.09375H8.71874C8.71874 2.57161 8.51132 2.07085 8.14211 1.70163C7.77289 1.33242 7.27213 1.125 6.74999 1.125C6.22784 1.125 5.72708 1.33242 5.35787 1.70163C4.98866 2.07085 4.78124 2.57161 4.78124 3.09375C4.78124 3.11467 4.78208 3.13552 4.78275 3.1564C5.11351 3.08143 5.45596 3.07366 5.78978 3.13354C6.12361 3.19342 6.442 3.31973 6.72609 3.50498C7.01017 3.69024 7.25416 3.93066 7.44357 4.21199C7.63299 4.49332 7.76397 4.80982 7.82876 5.14273C7.83612 5.17914 7.8362 5.21665 7.82899 5.25309C7.82177 5.28953 7.80741 5.32418 7.78673 5.35504C7.76605 5.3859 7.73946 5.41236 7.7085 5.43289C7.67753 5.45342 7.64281 5.46761 7.60633 5.47464C7.56986 5.48167 7.53235 5.48141 7.49597 5.47387C7.4596 5.46632 7.42508 5.45165 7.39441 5.43069C7.36374 5.40973 7.33752 5.3829 7.31728 5.35175C7.29703 5.3206 7.28316 5.28575 7.27645 5.24922C7.22154 4.96739 7.10567 4.70097 6.93697 4.46863C6.76827 4.23628 6.55081 4.04363 6.29983 3.90415C6.04886 3.76468 5.77042 3.68176 5.48403 3.6612C5.19763 3.64064 4.91021 3.68294 4.64188 3.78513H4.64163H4.64135C4.18677 3.95929 3.81268 4.29545 3.5911 4.72889C3.36952 5.16234 3.31611 5.66244 3.44115 6.1329C3.45612 6.18925 3.45319 6.24886 3.43279 6.30348C3.41239 6.3581 3.37552 6.40503 3.32728 6.43778C2.90883 6.72138 2.56622 7.10317 2.3294 7.54977C2.09257 7.99637 1.96875 8.49418 1.96875 8.99968C1.96875 9.50519 2.09257 10.003 2.3294 10.4496C2.56622 10.8962 2.90883 11.278 3.32728 11.5616V11.5619ZM4.49999 9.84375H4.78124C5.0795 9.84342 5.36546 9.72478 5.57636 9.51388C5.78727 9.30297 5.9059 9.01702 5.90624 8.71875V8.69488C5.51328 8.62796 5.15663 8.42429 4.89931 8.11987C4.64198 7.81545 4.50054 7.42986 4.49999 7.03125V6.75C4.49999 6.67541 4.52962 6.60387 4.58236 6.55113C4.63511 6.49838 4.70665 6.46875 4.78124 6.46875C4.85583 6.46875 4.92737 6.49838 4.98011 6.55113C5.03286 6.60387 5.06249 6.67541 5.06249 6.75V7.03125C5.06249 7.32962 5.18102 7.61577 5.39199 7.82675C5.60297 8.03772 5.88912 8.15625 6.18749 8.15625C6.48586 8.15625 6.77201 8.03772 6.98298 7.82675C7.19396 7.61577 7.31249 7.32962 7.31249 7.03125V6.75C7.31249 6.67541 7.34212 6.60387 7.39486 6.55113C7.44761 6.49838 7.51915 6.46875 7.59374 6.46875C7.66833 6.46875 7.73987 6.49838 7.79261 6.55113C7.84536 6.60387 7.87499 6.67541 7.87499 6.75V7.03125C7.87443 7.42986 7.733 7.81545 7.47567 8.11987C7.21834 8.42429 6.86169 8.62796 6.46874 8.69488V8.71875C6.46823 9.16615 6.29027 9.59507 5.97392 9.91143C5.65756 10.2278 5.22863 10.4057 4.78124 10.4062H4.49999C4.4254 10.4062 4.35386 10.3766 4.30112 10.3239C4.24837 10.2711 4.21874 10.1996 4.21874 10.125C4.21874 10.0504 4.24837 9.97887 4.30112 9.92613C4.35386 9.87338 4.4254 9.84375 4.49999 9.84375Z"
                                                            fill="#4788FF" />
                                                        <path
                                                            d="M14.6727 6.43814C14.6245 6.40539 14.5876 6.35847 14.5672 6.30385C14.5468 6.24923 14.5439 6.18962 14.5588 6.13327C14.6839 5.66279 14.6305 5.16269 14.4089 4.72924C14.1873 4.29579 13.8132 3.95962 13.3586 3.78546H13.3584H13.3581C13.0898 3.68327 12.8024 3.64097 12.516 3.66153C12.2296 3.68209 11.9511 3.76501 11.7002 3.90448C11.4492 4.04395 11.2317 4.23661 11.063 4.46895C10.8943 4.7013 10.7785 4.96771 10.7235 5.24954C10.7168 5.28608 10.703 5.32093 10.6827 5.35208C10.6625 5.38323 10.6363 5.41006 10.6056 5.43101C10.5749 5.45197 10.5404 5.46665 10.504 5.47419C10.4676 5.48174 10.4301 5.482 10.3937 5.47497C10.3572 5.46793 10.3225 5.45374 10.2915 5.43322C10.2605 5.41269 10.2339 5.38623 10.2133 5.35537C10.1926 5.32451 10.1782 5.28986 10.171 5.25342C10.1638 5.21698 10.1639 5.17947 10.1712 5.14305C10.236 4.81015 10.367 4.49364 10.5564 4.21231C10.7458 3.93099 10.9898 3.69056 11.2739 3.50531C11.558 3.32006 11.8764 3.19374 12.2102 3.13387C12.5441 3.07399 12.8865 3.08176 13.2173 3.15673C13.2179 3.13584 13.2188 3.115 13.2188 3.09408C13.2188 2.57193 13.0113 2.07117 12.6421 1.70196C12.2729 1.33275 11.7721 1.12533 11.25 1.12533C10.7279 1.12533 10.2271 1.33275 9.85788 1.70196C9.48867 2.07117 9.28125 2.57193 9.28125 3.09408H10.125C10.1996 3.09408 10.2711 3.12371 10.3239 3.17645C10.3766 3.2292 10.4062 3.30074 10.4062 3.37533C10.4062 3.44992 10.3766 3.52146 10.3239 3.5742C10.2711 3.62695 10.1996 3.65658 10.125 3.65658H9.28125V11.25C9.57952 11.2497 9.86547 11.131 10.0764 10.9201C10.2873 10.7092 10.4059 10.4233 10.4062 10.125V9.84376C10.4062 9.76917 10.4359 9.69763 10.4886 9.64489C10.5414 9.59214 10.6129 9.56251 10.6875 9.56251C10.7621 9.56251 10.8336 9.59214 10.8864 9.64489C10.9391 9.69763 10.9688 9.76917 10.9688 9.84376V10.125C10.9682 10.5724 10.7903 11.0013 10.4739 11.3177C10.1576 11.634 9.72865 11.812 9.28125 11.8125V14.9063C9.28125 15.4284 9.48867 15.9292 9.85788 16.2984C10.2271 16.6676 10.7279 16.875 11.25 16.875C11.7721 16.875 12.2729 16.6676 12.6421 16.2984C13.0113 15.9292 13.2188 15.4284 13.2188 14.9063C13.2188 14.8852 13.2179 14.8645 13.2173 14.8436C12.8865 14.9186 12.5441 14.9264 12.2102 14.8665C11.8764 14.8066 11.558 14.6803 11.2739 14.495C10.9898 14.3098 10.7458 14.0694 10.5564 13.788C10.367 13.5067 10.236 13.1902 10.1712 12.8573C10.1639 12.8209 10.1638 12.7834 10.171 12.7469C10.1782 12.7105 10.1926 12.6758 10.2133 12.645C10.2339 12.6141 10.2605 12.5876 10.2915 12.5671C10.3225 12.5466 10.3572 12.5324 10.3937 12.5254C10.4301 12.5183 10.4676 12.5186 10.504 12.5261C10.5404 12.5337 10.5749 12.5484 10.6056 12.5693C10.6363 12.5903 10.6625 12.6171 10.6827 12.6483C10.703 12.6794 10.7168 12.7143 10.7235 12.7508C10.7785 13.0326 10.8943 13.299 11.063 13.5314C11.2317 13.7637 11.4492 13.9564 11.7002 14.0959C11.9511 14.2353 12.2296 14.3183 12.516 14.3388C12.8024 14.3594 13.0898 14.3171 13.3581 14.2149H13.3584H13.3586C13.8132 14.0407 14.1873 13.7046 14.4089 13.2711C14.6305 12.8377 14.6839 12.3376 14.5588 11.8671C14.5439 11.8108 14.5468 11.7511 14.5672 11.6965C14.5876 11.6419 14.6245 11.5949 14.6727 11.5622C15.0912 11.2786 15.4338 10.8968 15.6706 10.4502C15.9074 10.0036 16.0312 9.50583 16.0312 9.00033C16.0312 8.49483 15.9074 7.99702 15.6706 7.55043C15.4338 7.10384 15.0912 6.72206 14.6727 6.43846V6.43814ZM13.5 10.4063H13.2188C12.7714 10.4058 12.3424 10.2278 12.0261 9.91144C11.7097 9.59508 11.5318 9.16616 11.5312 8.71876V8.69489C11.1383 8.62797 10.7816 8.42431 10.5243 8.11988C10.267 7.81546 10.1256 7.42987 10.125 7.03126V6.75001C10.125 6.67542 10.1546 6.60388 10.2074 6.55114C10.2601 6.49839 10.3317 6.46876 10.4062 6.46876C10.4808 6.46876 10.5524 6.49839 10.6051 6.55114C10.6579 6.60388 10.6875 6.67542 10.6875 6.75001V7.03126C10.6875 7.32963 10.806 7.61578 11.017 7.82676C11.228 8.03773 11.5141 8.15626 11.8125 8.15626C12.1109 8.15626 12.397 8.03773 12.608 7.82676C12.819 7.61578 12.9375 7.32963 12.9375 7.03126V6.75001C12.9375 6.67542 12.9671 6.60388 13.0199 6.55114C13.0726 6.49839 13.1442 6.46876 13.2188 6.46876C13.2933 6.46876 13.3649 6.49839 13.4176 6.55114C13.4704 6.60388 13.5 6.67542 13.5 6.75001V7.03126C13.4994 7.42987 13.358 7.81546 13.1007 8.11988C12.8434 8.42431 12.4867 8.62797 12.0938 8.69489V8.71876C12.0941 9.01703 12.2127 9.30298 12.4236 9.51389C12.6345 9.72479 12.9205 9.84343 13.2188 9.84376H13.5C13.5746 9.84376 13.6461 9.87339 13.6989 9.92614C13.7516 9.97888 13.7812 10.0504 13.7812 10.125C13.7812 10.1996 13.7516 10.2711 13.6989 10.3239C13.6461 10.3766 13.5746 10.4063 13.5 10.4063Z"
                                                            fill="#4788FF" />
                                                    </svg>
                                                </div>
                                                <div class="iq-result-info">
                                                    <h5>Brain</h5>
                                                </div>
                                            </div>
                                            <p class="mb-0 font-size-18"><b>50</b></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Patient Survey</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                        <span class="dropdown-toggle dropdown-bg btn btn-outline-primary" role="button"
                                              id="dropdownMenuButton7" data-toggle="dropdown" aria-expanded="false">
                                            Monthly<i class="ri-arrow-down-s-line ml-1"></i>
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                 aria-labelledby="dropdownMenuButton7">
                                                <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="hospital2-chart-06"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Recent Patient</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <button class="btn btn-outline-primary">View All</button>
                                    </div>
                                </div>
                                <div class="card-body rec-pat">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0 table-borderless">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Age</th>
                                                <th>Diseases</th>
                                                <th>Doctor</th>
                                                <th>Prgoress</th>
                                                <th>Report</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <img src="../assets/images/user/08.jpg"
                                                             class="img-fluid avatar-35 rounded" alt="image">
                                                        <div class="media-body ml-3">
                                                            <p class="mb-0">William Smith</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>20/8/2020
                                                </td>
                                                <td>
                                                    25 yrs
                                                </td>
                                                <td>
                                                    Nimonia
                                                </td>
                                                <td>
                                                    Dr. Smith
                                                </td>
                                                <td>
                                                    <div class="iq-progress-bar-linear d-inline-block w-80">
                                                        <div class="iq-progress-bar">
                                                            <span data-percent="75"></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="../assets/images/icon/pdf.png" class="img-fliud" alt="image">
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Admit</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <img src="../assets/images/user/03.jpg"
                                                             class="img-fluid avatar-35 rounded" alt="image">
                                                        <div class="media-body ml-3">
                                                            <p class="mb-0">Melina Martin</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>12/9/2020
                                                </td>
                                                <td>
                                                    32 yrs
                                                </td>
                                                <td>
                                                    Typhoid
                                                </td>
                                                <td>
                                                    Dr. John
                                                </td>
                                                <td>
                                                    <div class="iq-progress-bar-linear d-inline-block w-80">
                                                        <div class="iq-progress-bar">
                                                            <span data-percent="55"></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="../assets/images/icon/pdf.png" class="img-fliud" alt="image">
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">Discharge</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <img src="../assets/images/user/07.jpg"
                                                             class="img-fluid avatar-35 rounded" alt="image">
                                                        <div class="media-body ml-3">
                                                            <p class="mb-0">Alindro Smith</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>18/8/2020
                                                </td>
                                                <td>
                                                    48 yrs
                                                </td>
                                                <td>
                                                    Malaria
                                                </td>
                                                <td>
                                                    Dr. Julia
                                                </td>
                                                <td>
                                                    <div class="iq-progress-bar-linear d-inline-block w-80">
                                                        <div class="iq-progress-bar">
                                                            <span data-percent="90"></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="../assets/images/icon/pdf.png" class="img-fliud" alt="image">
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Admit</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <img src="../assets/images/user/08.jpg"
                                                             class="img-fluid avatar-35 rounded" alt="image">
                                                        <div class="media-body ml-3">
                                                            <p class="mb-0">Kusti Franti</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>24/9/2020
                                                </td>
                                                <td>
                                                    30 yrs
                                                </td>
                                                <td>
                                                    Migraine
                                                </td>
                                                <td>
                                                    Dr. Bob
                                                </td>
                                                <td>
                                                    <div class="iq-progress-bar-linear d-inline-block w-80">
                                                        <div class="iq-progress-bar">
                                                            <span data-percent="65"></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="../assets/images/icon/pdf.png" class="img-fliud" alt="image">
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Admit</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <img src="../assets/images/user/03.jpg"
                                                             class="img-fluid avatar-35 rounded" alt="image">
                                                        <div class="media-body ml-3">
                                                            <p class="mb-0">Jules Boutin</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>28/7/2020
                                                </td>
                                                <td>
                                                    42 yrs
                                                </td>
                                                <td>
                                                    Covid-19
                                                </td>
                                                <td>
                                                    Dr. peter
                                                </td>
                                                <td>
                                                    <div class="iq-progress-bar-linear d-inline-block w-80">
                                                        <div class="iq-progress-bar">
                                                            <span data-percent="40"></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="../assets/images/icon/pdf.png" class="img-fliud" alt="image">
                                                </td>
                                                <td>
                                                    <span class="badge badge-danger">Discharge</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <img src="../assets/images/user/07.jpg"
                                                             class="img-fluid avatar-35 rounded" alt="image">
                                                        <div class="media-body ml-3">
                                                            <p class="mb-0">Greta Life</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>8/10/2020
                                                </td>
                                                <td>
                                                    28 yrs
                                                </td>
                                                <td>
                                                    Dengue
                                                </td>
                                                <td>
                                                    Dr. Anna
                                                </td>
                                                <td>
                                                    <div class="iq-progress-bar-linear d-inline-block w-80">
                                                        <div class="iq-progress-bar">
                                                            <span data-percent="95"></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="../assets/images/icon/pdf.png" class="img-fliud" alt="image">
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">Admit</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wrapper End-->
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Copyright 2020 <a href="#">ProX</a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
<!-- Backend Bundle JavaScript -->
<script src="{!! asset('assets/js/backend-bundle.min.js') !!}"></script>

<!-- Flextree Javascript-->
<script src="{!! asset('assets/js/flex-tree.min.js') !!}"></script>
<script src="{!! asset('assets/js/tree.js') !!}"></script>

<!-- Table Treeview JavaScript -->
<script src="{!! asset('assets/js/table-treeview.js') !!}"></script>

<!-- Masonary Gallery Javascript -->
<script src="{!! asset('assets/js/masonry.pkgd.min.js') !!}"></script>
<script src="{!! asset('assets/js/imagesloaded.pkgd.min.js') !!}"></script>

<!-- Mapbox Javascript -->
<script src="{!! asset('assets/js/mapbox-gl.js') !!}"></script>
<script src="{!! asset('assets/js/mapbox.js') !!}"></script>

<!-- Fullcalender Javascript -->
<script src='{!! asset('assets/vendor/fullcalendar/core/main.js') !!}'></script>
<script src='{!! asset('assets/vendor/fullcalendar/daygrid/main.js') !!}'></script>
<script src='{!! asset('assets/vendor/fullcalendar/timegrid/main.js') !!}'></script>
<script src='{!! asset('assets/vendor/fullcalendar/list/main.js') !!}'></script>

<!-- SweetAlert JavaScript -->
<script src="{!! asset('assets/js/sweetalert.js') !!}"></script>

<!-- Vectoe Map JavaScript -->
<script src="{!! asset('assets/js/vector-map-custom.js') !!}"></script>

<!-- Chart Custom JavaScript -->
<script src="{!! asset('assets/js/customizer.js') !!}"></script>

<!-- Chart Custom JavaScript -->
<script src="{!! asset('assets/js/chart-custom.js') !!}"></script>

<!-- slider JavaScript -->
<script src="{!! asset('assets/js/slider.js') !!}"></script>

<!-- app JavaScript -->
<script src="{!! asset('assets/js/app.js') !!}"></script>
</body>

</html>
