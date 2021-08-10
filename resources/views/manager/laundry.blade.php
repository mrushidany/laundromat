@extends('layouts.manager.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="d-flex align-items-center justify-content-between welcome-content">
                    <div class="navbar-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb m-3">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Laundry</li>
                            </ul>
                        </nav>
                    </div>
                    <div class="btn-group btn-group-toggle">
                        <button type="button" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target=".add_laundry"><i class="ri-add-line m-0"></i> Add New Laundry</button>
                        <div class="modal fade add_laundry" tabindex="-1" role="dialog"  style="display: none" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            @include('manager.form.laundry_input_form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @endsection
