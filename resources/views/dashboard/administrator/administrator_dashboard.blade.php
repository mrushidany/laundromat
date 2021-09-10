@extends('layouts.administrator.main')

@section('content')
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
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Recent Laundry</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <button class="btn btn-sm btn-success">View All</button>
                        </div>
                    </div>
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
                                    <th></th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')
    <script>
        let main_datatable = $('.laundromat_table').DataTable({
            // processing: true,
            // serverSide: true,
            {{--lengthMenu: [[10,25,50],[10,25,50]],--}}

            {{--ajax: '{{ route('laundry_list') }}',--}}
            {{--columns: [--}}
            {{--    {data: 'full_name', name: 'full_name'},--}}
            {{--    {data: 'phone', name: 'phone'},--}}
            {{--    {data: 'quantity', name: 'quantity'},--}}
            {{--    {data: 'amount', name: 'amount'},--}}
            {{--    {data: 'created_at', name: 'created_at'},--}}
            {{--    {data: 'pickup_date', name: 'pickup_date'},--}}
            {{--    {data: 'action', name: 'action', orderable: false, searchable: false}--}}
            {{--],--}}

        });
    </script>


@endsection
