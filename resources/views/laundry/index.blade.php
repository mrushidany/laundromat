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
                                <select class="form-control" name="recent_laundry">
                                    <option disabled selected value="recent_laundry">Recent Laundry</option>
                                    <option value="{{\Illuminate\Support\Carbon::now()->format('Y-m-d')}}">Today</option>
                                    <option value="{{\Illuminate\Support\Carbon::yesterday()->format('Y-m-d')}}">Yesterday</option>
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
                                        <input type="date" name="from_specific_date" class="form-control"  aria-label="Default" aria-describedby="inputGroup-sizing-small"  value="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm mb-4 ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">To</span>
                                        </div>
                                        <input type="date" name="to_desired_date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-small"  value="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group input-group-sm mb-4">
                                        <button type="button" class="btn btn-success btn-sm mt-2 date_laundry_details_filter" style="line-height: 12px;"><i class="ri-settings-4-fill pr-0"></i>Filter</button>&nbsp;&nbsp;
                                        <button type="button" class="btn btn-primary btn-sm mt-2 date_laundry_details_refresh" style="line-height: 12px;"><i class="ri-loader-4-fill pr-0"></i>Refresh</button>
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
    <script type="application/javascript">
        let main_datatable = '';
            main_datatable = $('.laundromat_table').DataTable({
                processing: true,
                serverSide: true,
                order: [5, 'desc'],
                lengthMenu: [[10,25,50],[10,25,50]],
                ajax: {
                    url : '{{ route('laundry_list') }}',
                    data: function (d){
                        d.from_specific_date = $('input[name="from_specific_date"]').val();
                        d.to_desired_date = $('input[name="to_desired_date"]').val();
                        d.recent_laundry = $('input[name="recent_laundry"]').val();
                    }
                },
                columns: [
                    {data: 'full_name', name: 'full_name', orderable: false},
                    {data: 'phone', name: 'phone', orderable: false},
                    {data: 'selected_machines', name: 'selected_machines', orderable: false},
                    {data: 'quantity', name: 'quantity', orderable: false},
                    {data: 'amount', name: 'amount', orderable: false},
                    {data: 'created_at', name: 'created_at', searchable: true},
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

                    // Update footer
                    $( api.column( 4 ).footer() ).html(
                        'Tshs '+pageTotal.toLocaleString() +' ( Tshs '+ (total).toLocaleString() +' total)'
                    );
                }
            });

           $('.date_laundry_details_filter').on('click', function (e){
               var from_specific_date = $('input[name="from_specific_date"]').val();
               var to_desired_date = $('input[name="to_desired_date"]').val();

               if(from_specific_date != '' && to_desired_date != ''){
                   main_datatable.destroy();
                   load_datatable('',from_specific_date,to_desired_date)
                   main_datatable.draw();
               }else{
                   alert('Both Dates are required!')
               }
           })
           $('.date_laundry_details_refresh').on('click', function (e){
               $('input[name="from_specific_date"]').val('');
               $('input[name="to_desired_date"]').val('');
               $('select[name="recent_laundry"]').val('recent_laundry');

              main_datatable.destroy();
               main_datatable.draw();
           })
           $('select[name="recent_laundry"]').on('change', function (e){
              var recent_laundry = $(this).val();
              if(recent_laundry != ''){
                  main_datatable.destroy();
                  load_datatable(recent_laundry,'','')
              }else{
                  alert('Nothing is selected')
              }
           })

           function load_datatable(recent_laundry = '', from_specific_date = '', to_desired_date = ''){
              main_datatable = $('.laundromat_table').DataTable({
                   processing: true,
                   serverSide: true,
                   order: [5, 'desc'],
                   lengthMenu: [[10,25,50],[10,25,50]],
                   ajax: {
                       url : '{{ route('laundry_list') }}',
                       data: {
                           from_specific_date: from_specific_date,
                           to_desired_date: to_desired_date,
                           recent_laundry: recent_laundry
                       },
                   },
                   columns: [
                       {data: 'full_name', name: 'full_name', orderable: false},
                       {data: 'phone', name: 'phone', orderable: false},
                       {data: 'selected_machines', name: 'selected_machines', orderable: false},
                       {data: 'quantity', name: 'quantity', orderable: false},
                       {data: 'amount', name: 'amount', orderable: false},
                       {data: 'created_at', name: 'created_at', searchable: true},
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

                       // Update footer
                       $( api.column( 4 ).footer() ).html(
                           'Tshs '+pageTotal.toLocaleString() +' ( Tshs '+ (total).toLocaleString() +' total)'
                       );
                   }
               });
           }
    </script>

@endsection
