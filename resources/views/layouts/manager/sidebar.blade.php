<div class="iq-sidebar sidebar-double-icon">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="" class="header-logo mx-auto">
            <img src="{{asset('assets/images/easywash_logo.jpeg')}}" class="img-fluid rounded-lg" alt="logo">
        </a>
        <div class="iq-menu-bt-sidebar">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div id="sidebar-scrollbar" class="data-scrollbar" data-scroll="1">
        <div class="d-block user-info mb-3">
            <div class="text-center mb-4">
                <div class="d-inline-block doc-img user-image mb-3 rounded position-relative">
                    <img src="{{asset('/assets/images/user/user-1.jpg')}}" class="img-fluid d-inline-block avatar-110 rounded" alt="logo">
                </div>
                <h4>{{Auth::user()->name}}</h4>
                <p>{{Auth::user()->email}}</p>
            </div>
        </div>
        <div class="double-icon-height">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">

                        <li>
                            <div class="d-flex align-items-center">
                                <a href="{{route('dashboard')}}" class="collapsed"  aria-expanded="false"><i class="las la-home iq-arrow-left"></i><span>Dashboard</span></a>
                                <a href="{{route('laundry.index')}}" class="collapsed active"  aria-expanded="true"><i class="dripicons dripicons-basket"></i><span>Laundry</span></a>
                            </div>
                        </li>
                        @if (Auth::user()->hasRole('manager'))
                        <li>
                            <div class="d-flex align-items-center">
                                <a href="#" class="collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-file-invoice-dollar"></i><span>Payment</span></a>

                            </div>
                        </li>
                        @endif




                </ul>
            </nav>
        </div>
        <div class="sidebar-bottom-menu">
            <nav class="iq-sidebar-menu">
                <ul class="iq-menu-bottom list-inline">
                    <li><a href="#"><i class="las la-envelope-open iq-arrow-left"></i><span>Messages </span><span class="float-right badge badge-warning rounded-circle menu-icon-right">18</span></a></li>
                </ul>
                <div class="text-center mt-3">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" class="btn btn-primary" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="las la-sign-out-alt"></i>{{ __('Logout') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>

