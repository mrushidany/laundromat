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
                                <li class="breadcrumb-item active" aria-current="page">Laundry</li>
                            </ol>
                        </nav>
                        <div class="btn-group btn-group-toggle offset-md-10">
                            <a  class="button btn btn-primary btn-sm  mr-2" href="{{route('laundry.create')}}"><i class="ri-add-line m-0"></i> Add New Laundry</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-md-12">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table  class="table data-table table-striped table-bordered dataTable laundromat_table" role="grid" aria-describedby="datatable_info">
                                <thead>
                                <tr role="row">
                                    <th>Client Name</th>
                                    <th>Phone Number</th>
                                    <th>Quantity</th>
                                    <th>Total Cost</th>
                                    <th>Registered On</th>
                                    <th>Pickup Date</th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection