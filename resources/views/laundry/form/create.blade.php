<?php

if(isset($laundry_detail)){
    $action = route('laundry.update',$laundry_detail->id);
    $method = 'PUT';
} else {
    $action = route('laundry.store');
    $method = 'POST';


}
?>
@extends('layouts.easywash.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="d-flex align-items-center justify-content-between welcome-content">
                    <div class="navbar-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb m-3">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('laundry.index')}}">Laundry</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Laundry</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-body">
                            <form id="form-wizard1" method='post' action="{{$action}}" class="text-center mt-4">
                               {{method_field($method)}}
                                {{csrf_field()}}
                                <ul id="top-tab-list" class="p-0">
                                    <li class="active" id="account">
                                        <a href="javascript:void();">
                                            <i class="ri-shopping-basket-2-line"></i><span>Laundry Details</span>
                                        </a>
                                    </li>
                                    <li id="personal">
                                        <a href="javascript:void();">
                                            <i class="ri-exchange-dollar-line"></i><span>Payment Details</span>
                                        </a>
                                    </li>
                                    <li id="payment">
                                        <a href="javascript:void();">
                                            <i class="ri-check-fill"></i><span>Summary</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset id="LaundryDetailFormFieldSet">
                                    @include('laundry.form.laundry_details_form')
                                    <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next">Next</button>
                                </fieldset>
                                <fieldset id="LaundryPaymentFormFieldSet">
                                   @include('laundry.form.laundry_payment_form')
                                    <button type="button" name="next" class="btn btn-primary next next_laundry_and_payment_summary action-button float-right" value="Next">Next</button>
                                    <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous">Previous</button>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h3 class="mb-4 text-left">Summary:</h3>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 3 - 3</h2>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            @include('laundry.form.laundry_summary')
                                        </div>
                                    </div>
                                        <input type="hidden" name="all_machines_selected">
                                        <input type="hidden" name="edited_total_cost">
                                        <button type="submit" name="save" class="btn btn-primary save_laundry next action-button float-right" value="Save">@if (!empty($laundry_detail)) Update @else Save @endif</button>
                                        <button type="button" name="previous" class="btn btn-dark previous_payment_status previous action-button-previous float-right mr-3" value="Previous">Previous</button>                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection

@section('scripts')
    <script type="application/javascript">
        $(document).ready(function () {
            $('.next_laundry_and_payment_summary').on('click',function (){
                var $laundry_detail_form = $('#LaundryDetailFormFieldSet :input')
                var $laundry_payment_form = $('#LaundryPaymentFormFieldSet :input')
                var values = {};
                $laundry_detail_form.each(function (){
                    values[this.name] = $(this).val()
                    return values
                })
                $laundry_payment_form.each(function (){
                    values[this.name] = $(this).val()
                    return values
                })
                $('.laundry_and_payment_status_summary').each(function (){
                    $(this).find('.client_name').empty().append(values.full_name)
                    $(this).find('.machines_selected').empty().append(values.machine_selected.join(", "))
                    if($('input[name="drying_machine"]').is(':checked')){
                        $(this).find('.drying_machine_selected').empty().append('Selected');
                        $('input[name="all_machines_selected"]').val(values.machine_selected.join(", ") + ', Drying Machine').trigger('change')
                    }else{
                        $(this).find('.drying_machine_selected').empty().append('Not Selected');
                        $('input[name="all_machines_selected"]').val(values.machine_selected.join(", ")).trigger('change');
                    }

                        $(this).find('.total_cost').empty().append(values.total_cost);

                })
                $('.laundry_and_payment_status_summary_2').each(function (){
                    $(this).find('.phone_number').empty().append(values.phone)
                    $(this).find('.laundry_quantity').empty().append(values.laundry_quantity)
                    switch (values.payment_status){
                        case 'Paid': $(this).find('.payment_status').empty().append(values.payment_status)
                        break;
                        case 'Not Paid': $(this).find('.payment_status').empty().append(values.payment_status)
                        break;
                        case 'Partial Payment': $(this).find('.payment_status').empty().append(values.payment_status + ' ( ' + values.initial_payment + ' /= )')
                        break;
                    }
                })
                $('button[name="save"]').on('click', function (){
                    switch (values.payment_status) {
                        case 'Paid' : print_receipt();
                        break;
                    }
                })

            })
            $('.previous_payment_status').on('click', function () {
                $(this).closest('li').find('#payment').trigger('change','class');
            })

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
        })
    </script>
@endsection
