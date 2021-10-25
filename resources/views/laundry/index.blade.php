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
                        </ul>
                        <div class="tab-content" id="myTabContent-4">
                            <div class="tab-pane fade show active" id="laundry_tab" role="tabpanel" aria-labelledby="home-tab-three">
                                @include('laundry.tabs.laundry_tab')
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
        let main_datatable = '';

        default_datatable();
        function default_datatable(recent_laundry = '', from_specific_date = '', to_desired_date = '', custom_search = '' ){
            main_datatable = $('.laundromat_table').DataTable({
                processing: true,
                serverSide: true,
                order: [5, 'desc'],
                lengthMenu: [[100,150,200],[100,150,200]],
                ajax: {
                    url : '{{ route('laundry_list') }}',
                    data : {
                        recent_laundry : recent_laundry,
                        from_specific_date : from_specific_date,
                        to_desired_date : to_desired_date,
                        custom_search : custom_search,
                    },
                    dataSrc : function (data){
                        total_cost_to_be_paid  = data.total_cost_to_be_paid;
                        cash_draw = data.cash_draw;
                        return data.data;
                    },
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
                    $(api.column(4).footer()).html('Total Cost to be Paid : ' + total_cost_to_be_paid + ' /=' )
                    $(api.column(6).footer()).html('Cash at Drawer : ' + cash_draw  + ' /=')

                }
            });
        }
        function yesterday(){
            var yesterday = new Date();
            var dd = String(yesterday.getDate()-1).padStart(2, '0');
            var mm = String(yesterday.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = yesterday.getFullYear();

            yesterday = dd + '/' + mm + '/' + yyyy;
            return yesterday;
        }
        $('select[name="recent_laundry"]').on('change', function (e){
            if($(this).val() == yesterday()){
                var recent_laundry = $(this).val()
                $('.laundromat_table').DataTable().destroy()
                default_datatable(recent_laundry)
            }else{
                $('.laundromat_table').DataTable().destroy();
                default_datatable()
            }

        })
        $('.date_laundry_details_filter').on('click', function (e){
               if(!$('input[name="from_specific_date"]').val()){
                    Swal.fire({
                        title: 'Error!',
                        text : 'From Input Date Field is empty',
                        icon : 'error'
                    })
               } else if(!$('input[name="to_desired_date"]').val()){
                   Swal.fire({
                       title: 'Error!',
                       text : 'To Input Date Field is empty',
                       icon : 'error'
                   })
               }
               if($('input[name="from_specific_date"]').val() && $('input[name="to_desired_date"]').val()){
                   $('.laundromat_table').DataTable().destroy();
                   default_datatable(recent_laundry = '', from_specific_date = $('input[name="from_specific_date"]').val(), to_desired_date = $('input[name="to_desired_date"]').val() )
               }
           })
        $('.date_laundry_details_refresh').on('click', function (e){
               $('input[name="from_specific_date"]').val('');
               $('input[name="to_desired_date"]').val('');
               $('select[name="recent_laundry"]').val('recent_laundry');
               $('.laundromat_table').DataTable().destroy();
               default_datatable();
           })
        $('input[name="custom_search"]').on('keyup', function(){
            $('.laundromat_table').DataTable().destroy();
            default_datatable(recent_laundry = '', from_specific_date = '', to_desired_date = '', custom_search = $('input[name="custom_search"]').val())
        })

        function updateNotPaidPaymentStatus(id){
            Swal.fire({
                title: 'Update Payment Status',
                showCancelButton: true,
                confirmButtonText: 'Update',
                showLoaderOnConfirm: true,

                preConfirm: function (){
                    return new Promise(function (resolve) {
                        $.ajax({
                            url: '{{route('update_not_paid_payment_status')}}',
                            type: 'GET',
                            data : {
                                id: id,
                                not_paid : 'Not Paid'
                            }
                        }).done(function (data) {
                            print_receipt();
                            swal.insertQueueStep(data.text)
                            resolve()
                            main_datatable.draw()
                        })
                    })
                }


            })
        }
        function print_receipt(){
            var print_window = window.open('', 'PRINT');
            print_window.document.write('<html><head><title>Laundry Receipt</title>');
            print_window.document.write('</head><body style="text-align:center;font: Georgia, "Times New Roman", Times, serif;background: #fff;font-size: 16pt;margin:20px auto auto 50px;" >');
            print_window.document.write('<header style="text-align:center; white-space:nowrap;overflow:hidden;line-height: 1em;">' +
                '<p  style="font-size:10pt;white-space:nowrap;overflow:hidden;line-height: 12pt;">Laundry Receipt</p>' +
                '<p style="font-size:10pt;white-space:nowrap;overflow:hidden;line-height: 1em;">' + '<img src="{{asset('assets/images/easywash_web_logo.jpeg')}}" />' + '</p>' +
                '</header>');
            print_window.document.write('<content style="text-align:center;">' +
                '<p style="text-align:center; font-size: small">&copy EasyWash Laundromat</p>' +
                '');
            print_window.document.write('</body></html>');
            print_window.document.close(); // necessary for IE >= 10
            print_window.focus(); // necessary for IE >= 10*/
            print_window.print();
            print_window.close();
            return true;


            // window.print();
            {{--$.ajax({--}}
            {{--    url : '{{route('test_printing')}}',--}}
            {{--    type : 'POST',--}}
            {{--    headers : {--}}
            {{--        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')--}}
            {{--    }--}}
            {{--})--}}
        }
        $('.laundromat_table').DataTable().on('click','.not_paid', function (e){
            Swal.fire({
                title: 'Update Payment Status',
                showCancelButton: true,
                confirmButtonText: 'Update',
                showLoaderOnConfirm: true,
                preConfirm : function (){

                },
                preConfirm: (login) => {
                    return fetch(`//api.github.com/users/${login}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText)
                            }
                            return response.json()
                        })
                        .catch(error => {
                            Swal.showValidationMessage(
                                `Request failed: ${error}`
                            )
                        })
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: `${result.value.login}'s avatar`,
                        imageUrl: result.value.avatar_url
                    })
                }
            })
            e.preventDefault()
        })
        $('.laundromat_table').DataTable().on('click','.partial_payment', function (e){
            e.preventDefault()

        })
    </script>

@endsection
