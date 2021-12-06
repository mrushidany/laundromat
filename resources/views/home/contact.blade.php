@extends('home.main')

@section('navbar')
    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
        <div class="navbar-nav ml-auto py-0">
            <a href="{{route('home')}}" class="nav-item nav-link ">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
            <a href="{{route('services')}}" class="nav-item nav-link">Services</a>
            <a href="{{route('pricing')}}" class="nav-item nav-link">Pricing</a>
            <a href="" class="nav-item nav-link active">Contact</a>
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
                    <h1 class="mb-4 mb-md-0 text-white">Contact Us</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="{{route('home')}}">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container" style="max-width: 900px;">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                    <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                                </div>
                                <h5 class="font-weight-medium m-0 mt-2">Sinza Mori Street, Dar es Salaam, Tanzania</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                    <i class="fa fa-2x fa-envelope-open text-secondary"></i>
                                </div>
                                <h5 class="font-weight-medium m-0 mt-2">info@easywash.co.tz</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                    <i class="fa fa-2x fa-phone-alt text-secondary"></i>
                                </div>
                                <h5 class="font-weight-medium m-0 mt-2">+255 717 174734</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sent_message" id="contact_form" method="POST" novalidate="novalidate">
                            @method('POST')
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="phone" placeholder="Your Phone" required="required" data-validation-required-message="Please enter your phone" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" id="send_message_button">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

@section('scripts')
    <script type="application/javascript">
        $(function () {

            $("#contact_form input, #contact_form textarea").jqBootstrapValidation({
                preventSubmit: true,
                submitError: function ($form, event, errors) {
                },
                submitSuccess: function ($form, event) {
                    event.preventDefault();
                    var name = $("input#name").val();
                    var phone = $("input#phone").val();
                    var subject = $("input#subject").val();
                    var message = $("textarea#message").val();

                    $this = $("#send_message_button");
                    $this.prop("disabled", true);

                    $.ajax({
                        url: '{{route("save_contact")}}',
                        type: 'POST',
                        data: {
                            name: name,
                            phone: phone,
                            subject: subject,
                            message: message,
                        },
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        cache: false,
                        success: function () {
                            $('#success').html("<div class='alert alert-success'>");
                            $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                .append("</button>");
                            $('#success > .alert-success')
                                .append("<strong>Your message has been sent. </strong>");
                            $('#success > .alert-success')
                                .append('</div>');
                            $('#contact_form').trigger("reset");
                        },
                        error: function () {
                            $('#success').html("<div class='alert alert-danger'>");
                            $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                .append("</button>");
                            $('#success > .alert-danger').append($("<strong>").text("Sorry " + name + ", it seems that our mail server is not responding. Please try again later!"));
                            $('#success > .alert-danger').append('</div>');
                            $('#contact_form').trigger("reset");
                        },
                        complete: function () {
                            setTimeout(function () {
                                $this.prop("disabled", false);
                            }, 1000);
                        }
                    });
                },
                filter: function () {
                    return $(this).is(":visible");
                },
            });

            $("a[data-toggle=\"tab\"]").click(function (e) {
                e.preventDefault();
                $(this).tab("show");
            });
        });

        $('#name').focus(function () {
            $('#success').html('');
        });

    </script>
@endsection
