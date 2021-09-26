@extends('home.main')

@section('navbar')
    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
        <div class="navbar-nav ml-auto py-0">
            <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
            <a href="{{route('services')}}" class="nav-item nav-link">Services</a>
            <a href="{{route('pricing')}}" class="nav-item nav-link">Pricing</a>
            <a href="{{route('contact','easywash')}}" class="nav-item nav-link">Contact</a>
            <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
        </div>
    </div>
@endsection

@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('home/img/carousel-1.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3"></h4>
                        <h1 class="display-3 text-white mb-md-4">Best For Laundry Services</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('home/img/carousel-2.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3"></h4>
                        <h1 class="display-3 text-white mb-md-4">Highly Professional Staff</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- Contact Info Start -->
<div class="container-fluid contact-info mt-5 mb-4">
    <div class="container" style="padding: 0 30px;">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px;">
                <div class="d-inline-flex">
                    <i class="fa fa-2x fa-map-marker-alt text-white m-0 mr-3"></i>
                    <div class="d-flex flex-column">
                        <h5 class="text-white font-weight-medium">Our Location</h5>
                        <p class="m-0 text-white">Sinza Mori Street, Dar es Salaam, Tanzania</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0" style="height: 100px;">
                <div class="d-inline-flex text-left">
                    <i class="fa fa-2x fa-envelope text-white m-0 mr-3"></i>
                    <div class="d-flex flex-column">
                        <h5 class="text-white font-weight-medium">Email Us</h5>
                        <p class="m-0 text-white">info@easywash.co.tz</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px;">
                <div class="d-inline-flex text-left">
                    <i class="fa fa-2x fa-phone-alt text-white m-0 mr-3"></i>
                    <div class="d-flex flex-column">
                        <h5 class="text-white font-weight-medium">Call Us</h5>
                        <p class="m-0 text-white">+255 717 174734</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Info End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-0 pt-lg-4">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid" src="{{asset('home/img/about.jpg')}}" alt="">
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Learn About Us</h6>
                <h1 class="mb-4">Laundry has never been Easier </h1>
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
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Services</h6>
        <h1 class="display-4 text-center mb-5">What We Offer</h1>
        <div class="row">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <i class="fas fa-3x fa-soap text-secondary"></i>
                    </div>
                    <h4 class="font-weight-bold m-0">Wash & Rinse</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-3x fa-cloud-sun text-secondary"></i>
                    </div>
                    <h4 class="font-weight-bold m-0">Spin & Dry</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-3x fa-tshirt text-secondary"></i>
                    </div>
                    <h4 class="font-weight-bold m-0">Fold</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Features Start -->
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
<!-- Features -->


<!-- Working Process Start -->
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
<!-- Working Process End -->


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


<!-- Testimonial Start -->
{{--<div class="container-fluid py-5">--}}
{{--    <div class="container">--}}
{{--        <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Testimonial</h6>--}}
{{--        <h1 class="display-4 text-center mb-5">Our Clients Say</h1>--}}
{{--        <div class="owl-carousel testimonial-carousel">--}}
{{--            <div class="testimonial-item">--}}
{{--                <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{asset('home/img/testimonial-1.jpg')}}" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">--}}
{{--                <div class="bg-light text-center p-4 pt-0">--}}
{{--                    <h5 class="font-weight-medium mt-5">Client Name</h5>--}}
{{--                    <p class="text-muted font-italic">Profession</p>--}}
{{--                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="testimonial-item">--}}
{{--                <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{asset('home/img/testimonial-2.jpg')}}" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">--}}
{{--                <div class="bg-light text-center p-4 pt-0">--}}
{{--                    <h5 class="font-weight-medium mt-5">Client Name</h5>--}}
{{--                    <p class="text-muted font-italic">Profession</p>--}}
{{--                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="testimonial-item">--}}
{{--                <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{asset('home/img/testimonial-3.jpg')}}" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">--}}
{{--                <div class="bg-light text-center p-4 pt-0">--}}
{{--                    <h5 class="font-weight-medium mt-5">Client Name</h5>--}}
{{--                    <p class="text-muted font-italic">Profession</p>--}}
{{--                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="testimonial-item">--}}
{{--                <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{asset('home/img/testimonial-4.jpg')}}" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">--}}
{{--                <div class="bg-light text-center p-4 pt-0">--}}
{{--                    <h5 class="font-weight-medium mt-5">Client Name</h5>--}}
{{--                    <p class="text-muted font-italic">Profession</p>--}}
{{--                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Testimonial End -->

@endsection

