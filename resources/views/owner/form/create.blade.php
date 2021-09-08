@extends('layouts.administrator.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('laundry.index')}}">Laundry</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Laundry</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-md-12">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="iq-card">
                            <div class="iq-card-body">
                                <form id="form-wizard1" class="text-center mt-4">
                                    <ul id="top-tab-list" class="p-0">
                                        <li class="active" id="account">
                                            <a href="javascript:void();">
                                                <i class="ri-shopping-basket-2-line"></i><span>Laundry Details</span>
                                            </a>
                                        </li>
                                        <li id="personal">
                                            <a href="javascript:void();">
                                                <i class="ri-exchange-dollar-line"></i><span>Payment Details</span>
                                            </a>
                                        </li>
                                        <li id="confirm">
                                            <a href="javascript:void();">
                                                <i class="ri-check-fill"></i><span>Finish</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- fieldsets -->
                                    <fieldset>
                                        @include('owner.form.laundry_details_form')
                                        <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next">Next</button>
                                    </fieldset>
                                    <fieldset>
                                        @include('owner.form.laundry_payment_form')
                                        <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next">Next</button>
                                        <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous">Previous</button>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h3 class="mb-4 text-left">Finish:</h3>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Step 3 - 3</h2>
                                                </div>
                                            </div>
                                            <br><br>
                                            <h2 class="text-success text-center"><strong>SUCCESS !</strong></h2>
                                            <br>
                                            <div class="row justify-content-center">
                                                <div class="col-3"> <img src="{{asset('assets/images/page-img/img-success.png')}}" class="fit-image" alt="fit-image"> </div>
                                            </div>
                                            <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-7 text-center">
                                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
