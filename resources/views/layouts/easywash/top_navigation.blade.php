<div class="iq-top-navbar">
    <div class="iq-navbar-custom d-flex align-items-center justify-content-between">
        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
            <i class="ri-menu-line wrapper-menu"></i>
            <a href="" class="header-logo">
                <img src="{{asset('assets/images/easywash_logo.jpeg')}}" class="img-fluid rounded-normal" alt="logo">
            </a>
        </div>


        <div class="iq-menu-horizontal">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu d-flex">
                    <li class="{{route('dashboard')}}">
                        <a href="" class="active" >
                            <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
        <nav class="navbar navbar-expand-lg school-navbar navbar-light p-0">
            <div class="change-mode">
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>
            @if (Auth::user()->hasRole('wash_man'))
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">
                        <li class="nav-item iq-full-screen"><a href="#" class="" id="btnFullscreen"><i
                                    class="ri-fullscreen-line"></i></a></li>
                        <li class="caption-content">
                            <a href="#" class="iq-user-toggle">
                                <img src="{{asset('/assets/images/user/user-6.jpg')}}" class="img-fluid rounded" alt="user">
                            </a>
                            <div class="iq-user-dropdown">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                        <div class="header-title">
                                            <h4 class="card-title mb-0">Profile</h4>
                                        </div>
                                        <div class="close-data text-right badge badge-primary cursor-pointer"><i
                                                class="ri-close-fill"></i></div>
                                    </div>
                                    <div class="data-scrollbar" data-scroll="2">
                                        <div class="card-body">
                                            <div class="profile-header">
                                                <div class="cover-container text-center">
                                                    <img src="{{asset('/assets/images/user/user-6.jpg')}}" alt="profile-bg"
                                                         class="rounded img-fluid avatar-80">
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
                                                    <a href=""
                                                       class="iq-sub-card bg-success-light rounded-small p-2">
                                                        <div class="media align-items-center">
                                                            <div class="rounded iq-card-icon-small">
                                                                <i class="ri-account-box-line"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Account settings</h6>
                                                                <p class="mb-0 font-size-12">Manage your account parameters.
                                                                </p>
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
            @else
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">
                        <li class="nav-item iq-full-screen"><a href="#" class="" id="btnFullscreen"><i
                                    class="ri-fullscreen-line"></i></a></li>
                        <li class="caption-content">
                            <a href="#" class="iq-user-toggle">
                                <img src="{{asset('/assets/images/user/user-1.jpg')}}" class="img-fluid rounded" alt="user">
                            </a>
                            <div class="iq-user-dropdown">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                        <div class="header-title">
                                            <h4 class="card-title mb-0">Profile</h4>
                                        </div>
                                        <div class="close-data text-right badge badge-primary cursor-pointer"><i
                                                class="ri-close-fill"></i></div>
                                    </div>
                                    <div class="data-scrollbar" data-scroll="2">
                                        <div class="card-body">
                                            <div class="profile-header">
                                                <div class="cover-container text-center">
                                                    <img src="{{asset('/assets/images/user/user-1.jpg')}}" alt="profile-bg"
                                                         class="rounded img-fluid avatar-80">
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
                                                    <a href=""
                                                       class="iq-sub-card bg-success-light rounded-small p-2">
                                                        <div class="media align-items-center">
                                                            <div class="rounded iq-card-icon-small">
                                                                <i class="ri-account-box-line"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Account settings</h6>
                                                                <p class="mb-0 font-size-12">Manage your account parameters.
                                                                </p>
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
            @endif

        </nav>
    </div>
</div>
