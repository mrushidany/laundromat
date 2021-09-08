<div class="header-style-4">
    <div class="iq-top-navbar">
        <div class="container">
            <div class="iq-navbar-custom d-flex align-items-center justify-content-between">
                <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                    <i class="ri-menu-line wrapper-menu"></i>
                    <a href="index.html" class="header-logo">
                        <img src="{{asset('assets/images/easywash_logo.jpeg')}}" class="img-fluid rounded-normal" alt="logo">
                    </a>
                </div>

                <nav class="navbar navbar-expand-lg navbar-light px-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list align-items-center">

                            <li class="nav-item iq-full-screen"><a href="#" class="" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                            <li class="caption-content">
                                <a href="#" class="iq-user-toggle">
                                    <img src="{{asset('assets/images/user/04.jpg')}}" class="img-fluid rounded" alt="user">
                                </a>
                                <div class="iq-user-dropdown">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                            <div class="header-title">
                                                <h4 class="card-title mb-0">Profile</h4>
                                            </div>
                                            <div class="close-data text-right badge badge-primary cursor-pointer"><i class="ri-close-fill"></i></div>
                                        </div>
                                        <div class="data-scrollbar" data-scroll="4">
                                            <div class="card-body">
                                                <div class="profile-header">
                                                    <div class="cover-container text-center">
                                                        <img src="{{asset('assets/images/user/04.jpg')}}" alt="profile-bg" class="rounded img-fluid avatar-80">
                                                        <div class="profile-detail mt-3">
                                                            <h3>{{Auth::user()->name}}</h3>
                                                            <p class="mb-1">{{$role ?? ''}}</p>
                                                        </div>
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
        <div class="pay-horizontal">
            <div class="container">
                <div class="white-bg-menu">
                    <div class="iq-menu-horizontal">
                        <nav class="iq-sidebar-menu">
                            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                                <a href="index.html" class="header-logo">
                                    <img src="{{asset('assets/images/easywash_logo.jpeg')}}" class="img-fluid rounded-normal" alt="logo">
                                </a>
                                <div class="iq-menu-bt-sidebar">
                                    <i class="las la-bars wrapper-menu"></i>
                                </div>
                            </div>
                            <ul id="iq-sidebar-toggle" class="iq-menu d-flex mn-center">
                                <li class=" ">
                                    <a href="" class="">
                                        <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                                    </a>
                                </li>

                                <li class=" ">
                                    <a href="" class="">
                                        <i class="dripicons dripicons-basket"></i><span>Laundry</span>
                                    </a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
