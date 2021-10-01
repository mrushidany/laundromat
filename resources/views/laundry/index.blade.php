@extends('layouts.easywash.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Laundry</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab-three" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab-three" data-toggle="tab" href="#laundry_tab" role="tab" aria-controls="home" aria-selected="true">Laundry</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-three" data-toggle="tab" href="#payments_and_receipts_tab" role="tab" aria-controls="profile" aria-selected="false">Payments & Receipts</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent-4">
                            <div class="tab-pane fade show active" id="laundry_tab" role="tabpanel" aria-labelledby="home-tab-three">
                                @include('laundry.tabs.laundry_tab')
                            </div>
                            <div class="tab-pane fade" id="payments_and_receipts_tab" role="tabpanel" aria-labelledby="profile-tab-three">
                                @include('laundry.tabs.payment_and_receipt_tab')
                            </div>
                            <div class="iq-loader"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
@section('scripts')
    <script type="application/javascript">

        const table = $('.laundromat_table').DataTable({
                processing: true,
                serverSide: true,
                order: [5, 'desc'],
                lengthMenu: [[10,25,50],[10,25,50]],
                ajax: {
                    url : '{{ route('laundry_list') }}',
                    dataSrc : function (data){
                        total_amount  = data.total_amount;
                        return data.data;
                    },
                    data: function (d){
                        d.from_specific_date = $('input[name="from_specific_date"]').val();
                        d.to_desired_date = $('input[name="to_desired_date"]').val();
                        d.recent_laundry = $('select[name="recent_laundry"]').val();
                    }
                },
              @if (Auth::user()->hasRole('owner'))
              columns: [
                  {data: 'full_name', name: 'full_name', orderable: false},
                  {data: 'phone', name: 'phone', orderable: false},
                  {data: 'selected_machines', name: 'selected_machines', orderable: false},
                  {data: 'quantity', name: 'quantity', orderable: false},
                  {data: 'amount', name: 'amount', orderable: false},
                  {data: 'created_at', name: 'created_at', searchable: true},
                  {data: 'payment_status', name: 'payment_status', searchable: false, orderable: false},
                  {data: 'action', name: 'action', searchable: false, orderable: false},
              ],
              @else
              columns: [
                  {data: 'full_name', name: 'full_name', orderable: false},
                  {data: 'phone', name: 'phone', orderable: false},
                  {data: 'selected_machines', name: 'selected_machines', orderable: false},
                  {data: 'quantity', name: 'quantity', orderable: false},
                  {data: 'amount', name: 'amount', orderable: false},
                  {data: 'created_at', name: 'created_at', searchable: true},
                  {data: 'payment_status', name: 'payment_status', searchable: false, orderable: false},
              ],
              @endif

            drawCallback: function (settings){
                var api = this.api();
                $(api.column(4).footer()).html('Tshs : ' + total_amount + ' Paid')
              }
                // "footerCallback" : function (row, data, start, end, display) {
                //     var api = this.api(), data;
                //
                //     //Removing the formating to get the interger data
                //     var intVal = function (i) {
                //         return typeof i === 'string' ? i.replace(' /=', '')*1 :
                //             typeof i == "number" ?
                //                 i : 0;
                //     }
                //     // Total over all pages
                //     data = api.column( 6 ).data();
                //
                //     console.log(data)
                //     total = data.length ? data.reduce( function (a, b) {
                //         return intVal(a) + intVal(b); } ) : 0;
                //
                //     // Total over this page
                //     data = api.column( 4, { page: 'current'} ).data();
                //     pageTotal = data.length ? data.reduce( function (a, b) {
                //         return intVal(a) + intVal(b); } ) : 0;
                //
                //     // Update footer
                //     $( api.column( 4 ).footer() ).html(
                //         'Tshs '+pageTotal.toLocaleString() +' ( Tshs '+ (total).toLocaleString() +' total)'
                //     );
                // }
            });
        $('select[name="recent_laundry"]').on('change', function (e){
            table.column($(this).data('column')).search($(this).val()).draw()
        })
           $('.date_laundry_details_filter').on('click', function (e){
           })
           $('.date_laundry_details_refresh').on('click', function (e){
               $('input[name="from_specific_date"]').val('');
               $('input[name="to_desired_date"]').val('');
               $('select[name="recent_laundry"]').val('recent_laundry');
           })

    </script>

@endsection
