@extends('layouts.manager.main')

@section('content')
    <div class="container-fluid col-12">
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
@endsection
@section('scripts')
{{--    <script>--}}
{{--        let main_datatable = $('.laundromat_table').DataTable({--}}
{{--            processing: true,--}}
{{--            serverSide: true,--}}
{{--            lengthMenu: [[10,25,50],[10,25,50]],--}}

{{--            ajax: '{{ route('laundry_list') }}',--}}
{{--            columns: [--}}
{{--                {data: 'full_name', name: 'full_name'},--}}
{{--                {data: 'phone', name: 'phone'},--}}
{{--                {data: 'quantity', name: 'quantity'},--}}
{{--                {data: 'amount', name: 'amount'},--}}
{{--                {data: 'created_at', name: 'created_at'},--}}
{{--                {data: 'pickup_date', name: 'pickup_date'},--}}
{{--            ],--}}

{{--        });--}}
{{--    </script>--}}

@endsection
