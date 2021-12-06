@extends('layouts.easywash.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <h3 class="card-title pb-3">Welcome {{Auth::user()->name}}</h3>

            </div>
        </div>
    @if (Auth::user()->hasRole('owner'))
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="card card-block card-stretch card-height bg-primary-light">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="icon iq-icon-box bg-primary rounded">
                                        <i class="fas fa-laptop-house"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h3 class="mb-0 text-primary">20</h3>
                                        <h5>Machines</h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-5 position-relative">
                                    <div class="iq-progress-bar bg-white mt-2">
                            <span class="bg-primary iq-progress progress-1" data-percent="100">
                            <span class="progress-text-one bg-primary">100%</span>
                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="card card-block card-stretch card-height bg-primary-light">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="icon iq-icon-box bg-primary rounded">
                                        <i class="fas fa-hand-holding-usd"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h3 class="mb-0 text-primary"></h3>
                                        <h5>Sales</h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-5 position-relative">
                                    <div class="iq-progress-bar bg-white mt-2">
                            <span class="bg-primary iq-progress progress-1" data-percent="0">
                            <span class="progress-text-one bg-primary">0%</span>
                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @else
            <div class="container-fluid laundry_collapse">

            </div>
    @endif
    </div>
@endsection


