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
                                            <th>Machine Selected</th>
                                            <th>Quantity</th>
                                            <th>Cost to be Paid</th>
                                            <th>Registered On</th>
                                            <th>Payment Status</th>
                                        </thead>
                                        <tfoot>
                                        <tr role="row">
                                            <th colspan="4" class="text-center">Total</th>
                                            <th class="bg-blue font-size-14"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
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

@section('scripts')
    <script>
        let main_datatable = $('.laundromat_table').DataTable({
            processing: true,
            serverSide: true,
            order: [5, 'desc'],
            lengthMenu: [[10,25,50],[10,25,50]],
            ajax: '{{ route('laundry_list') }}',
            columns: [
                {data: 'full_name', name: 'full_name', orderable: false},
                {data: 'phone', name: 'phone', orderable: false},
                {data: 'selected_machines', name: 'selected_machines', orderable: false},
                {data: 'quantity', name: 'quantity', orderable: false},
                {data: 'amount', name: 'amount', orderable: false},
                {data: 'created_at', name: 'created_at'},
                {data: 'payment_status', name: 'payment_status', searchable: false, orderable: false},
            ],
            "footerCallback" : function (row, data, start, end, display) {
                var api = this.api(), data;

                //Removing the formating to get the interger data
                var intVal = function (i) {
                    return typeof i === 'string' ? i.replace(' /=', '')*1 :
                        typeof i == "number" ?
                            i : 0;
                }
                // Total over all pages
                data = api.column( 4 ).data();
                total = data.length ? data.reduce( function (a, b) {
                    return intVal(a) + intVal(b); } ) : 0;

                // Total over this page
                data = api.column( 4, { page: 'current'} ).data();
                pageTotal = data.length ? data.reduce( function (a, b) {
                    return intVal(a) + intVal(b); } ) : 0;
                console.log(total + pageTotal)

                // Update footer
                $( api.column( 4 ).footer() ).html(
                    'Tshs '+pageTotal.toLocaleString() +' ( Tshs '+ (total).toLocaleString() +' total)'
                );
            }
        });
    </script>

@endsection

