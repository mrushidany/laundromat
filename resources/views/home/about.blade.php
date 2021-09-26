@extends('home.main')

@section('navbar')
    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
        <div class="navbar-nav ml-auto py-0">
            <a href="{{route('home')}}" class="nav-item nav-link ">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link active">About</a>
            <a href="{{route('services')}}" class="nav-item nav-link">Services</a>
            <a href="{{route('pricing')}}" class="nav-item nav-link">Pricing</a>
            <a href="{{route('contact','easywash')}}" class="nav-item nav-link">Contact</a>
            <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">About Us</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="{{route('home')}}">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid" src="{{asset('home/img/about.jpg')}}" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Learn About Us</h6>
                    <h1 class="mb-4">Laundry has never been Easier</h1>
                    <h5 class="font-weight-medium font-italic mb-4">We have redefined your laundry experience to make your least favorite chore more likable</h5>
                    <p class="mb-2">What got us started is the need to help people ease from domestic duties, and what keeps us going is the ability to do so every day while maintaining our customer’s smiles. Considering busy schedules, we understand the frustration a pile of laundry triggers after a long day. From washing to drying, folding, and having it delivered right at your doorsteps, our services are trusted to surpass expectations.</p>
                    <div class="row">
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Quality Laundry Service</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Express Fast Delivery</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Highly Professional Staff</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">100% Satisfaction Guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Working Process</h6>
            <h1 class="display-4 text-center mb-5">How We Work</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-easywash border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">1</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Self Service</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-easywash border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">2</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Drop Off & Pick Up</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-easywash border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">3</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Pick Up & Delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Our Features</h6>
                    <h1 class="mb-4">Why Choose Us</h1>
                    <p>At all times, we consider two things top of mind while handling your laundry: Sensitivity and Urgency. For that, we are equipped with enough wash and dry machines to guarantee you timely delivery along with a dedicated team of knowledgeable and friendly staff to offer you the best hands-on services at all times. </p>
                </div>

            </div>
        </div>
    </div>


@endsection
