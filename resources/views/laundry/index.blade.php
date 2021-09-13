@extends('layouts.easywash.main')

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
                    <div class="card-footer d-flex justify-content-between">

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
                                <th>Machine Selected</th>
                                <th>Quantity</th>
                                <th>Cost to be Paid</th>
                                <th>Registered On</th>
                                <th>Payment Status</th>
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
            processing: true,
            serverSide: true,
            lengthMenu: [[10,25,50],[10,25,50]],

            ajax: '{{ route('laundry_list') }}',
            columns: [
                {data: 'full_name', name: 'full_name'},
                {data: 'phone', name: 'phone'},
                {data: 'selected_machines', name: 'selected_machines'},
                {data: 'quantity', name: 'quantity'},
                {data: 'amount', name: 'amount'},
                {data: 'created_at', name: 'created_at'},
                {data: 'payment_status', name: 'payment_status'},
            ],

        });
    </script>

@endsection
