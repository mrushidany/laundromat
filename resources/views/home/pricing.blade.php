@extends('home.main')

@section('navbar')
    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
        <div class="navbar-nav ml-auto py-0">
            <a href="{{route('home')}}" class="nav-item nav-link">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
            <a href="{{route('services')}}" class="nav-item nav-link">Services</a>
            <a href="{{route('pricing')}}" class="nav-item nav-link active">Pricing</a>
            <a href="{{route('contact','easywash')}}" class="nav-item nav-link">Contact</a>
            <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
        </div>
    </div>
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Pricing Plan</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="{{route('home')}}">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Pricing</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Pricing Plan Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Pricing Plan</h6>
            <h1 class="display-4 text-center mb-5">The Best Price</h1>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-easywash rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-blue">Washing</h3>
                            <h1 class="display-4 text-blue mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">T<sub>shs</sub></small><small class="align-middle">4000</small><small class="align-bottom" style="font-size: 12px; line-height: 40px;">/ 8Kg</small>
                            </h1>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">


                        </div>
                        <a href="{{route('contact','easywash')}}" class="btn btn-secondary py-2 px-4">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-easywash rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-blue">Drying</h3>
                            <h1 class="display-4 text-blue mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">T<sub>shs</sub></small><small class="align-middle">4000</small><small class="align-bottom" style="font-size: 12px; line-height: 40px;">/ 8Kg</small>
                            </h1>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">


                        </div>
                        <a href="{{route('contact','easywash')}}" class="btn btn-primary py-2 px-4">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-easywash rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-blue">Delivery</h3>
                            <h1 class="display-4 text-blue mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">T<sub>shs</sub></small><small class="align-middle">2000</small>
                            </h1>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">


                        </div>
                        <a href="{{route('contact','easywash')}}" class="btn btn-secondary py-2 px-4">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
@endsection
