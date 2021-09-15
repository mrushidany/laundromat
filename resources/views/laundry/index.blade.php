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
                </div>
            </div>
        </div>
         <div class="row col-md-12">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group col-md-9">
                                <select class="form-control ">
                                    <option disabled selected>Recent Laundry</option>
                                    <option>Today</option>
                                    <option>Yesterday</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="form-row">
                                <div class="col">
                                    <div class="input-group input-group-sm mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">From</span>
                                        </div>
                                        <input type="date" class="form-control" id="exampleInputdate" aria-label="Default" aria-describedby="inputGroup-sizing-small"  value="2019-12-18">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm mb-4 ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">To</span>
                                        </div>
                                        <input type="date" class="form-control" id="exampleInputdate" aria-label="Default" aria-describedby="inputGroup-sizing-small"  value="2019-12-18">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm mb-4">
                                        <button type="button" class="btn btn-success btn-sm mt-2" style="line-height: 12px;"><i class="ri-settings-4-fill pr-0"></i>Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><hr>
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
                                <th class="bg-blue font-size-14" id="laundry_table_total_cost"></th>
                            </tr>
                            </tfoot>
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
