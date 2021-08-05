<div class="header-style-5">
    <div class="iq-top-navbar salon2-topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="iq-navbar-custom d-flex align-items-center justify-content-between">
                        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                            <i class="ri-menu-line wrapper-menu"></i>

                        </div>
                        <div class="iq-menu-horizontal">
                            <nav class="iq-sidebar-menu">
                                <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                                    <a href="index.html" class="header-logo">
                                        <img src="{{asset('assets/images/logo.png')}}" class="img-fluid rounded-normal" alt="logo">
                                    </a>
                                    <div class="iq-menu-bt-sidebar">
                                        <i class="las la-bars wrapper-menu"></i>
                                    </div>
                                </div>
                                <ul id="iq-sidebar-toggle" class="iq-menu d-flex">
                                    <li class=" ">
                                        <a href="{{route('dashboard')}}" class="">
                                            <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="#layouts" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                            <i class="las la-atom iq-arrow-left"></i><span>Human Resource</span>
                                            <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                        </a>
                                        <ul id="layouts" class="iq-submenu sub-scrll collapse" data-parent="#iq-sidebar-toggle">
                                            <li class=" ">
                                                <a href="">
                                                    <i class="dripicons dripicons-user-group"></i><span>Staff</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                            <i class="las la-shopping-cart iq-arrow-left"></i><span>Enquiries & Bookings</span>
                                            <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                        </a>
                                        <ul id="ui" class="iq-submenu sub-scrll collapse" data-parent="#iq-sidebar-toggle">
                                            <li class=" ">
                                                <a href="">
                                                    <i class="lab la-app-store"></i><span>Appointments</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="">
                                                    <i class="las la-tag"></i><span>Enquiries</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="">
                                                    <i class="las la-book-open"></i><span>Bookings</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                            <i class="las la-funnel-dollar iq-arrow-left"></i><span>Sales</span>
                                            <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                        </a>
                                        <ul id="auth" class="iq-submenu sub-scrll collapse" data-parent="#iq-sidebar-toggle">
                                            <li class=" ">
                                                <a href="">
                                                    <i class="las la-wallet"></i><span>Sales & Revenue</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="">
                                                    <i class="lab la-amazon-pay"></i><span>Expenses</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="">
                                                    <i class="las la-balance-scale"></i><span>Cash Flow</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <nav class="navbar navbar-expand-lg navbar-light px-0 salon-navbar">

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
                                            <img src="{{asset('assets/images/user/04.jpg')}}" class="img-fluid rounded" alt="user">
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
                                                                <img src="{{asset('assets/images/user/04')}}.jpg" alt="profile-bg"
                                                                     class="rounded-circle img-fluid avatar-80">
                                                                <div class="profile-detail mt-3">
                                                                    <h3>{{Auth::user()->name}}</h3>
                                                                    <p class="mb-1">{{$role ?? ''}}</p>
                                                                </div>
{{--                                                                <a href="auth-sign-in.html" class="btn btn-primary">Sign--}}
{{--                                                                    Out</a>--}}
                                                                <form method="POST" action="{{ route('logout') }}">
                                                                    @csrf
                                                                    <x-responsive-nav-link :href="route('logout')" class="btn btn-primary" onclick="event.preventDefault(); this.closest('form').submit();">
                                                                        {{ __('Log Out') }}
                                                                    </x-responsive-nav-link>
                                                                </form>
                                                            </div>
                                                            <div class="profile-details my-4">
                                                                <a href="{{route('administrator_profile')}}"
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
</div>
