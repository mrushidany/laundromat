@extends('layouts.administrator.main')

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
                        <form id="form-wizard1" class="text-center mt-4">
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
                                @include('owner.form.laundry_details_form')
                                <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next">Next</button>
                            </fieldset>
                            <fieldset id="LaundryPaymentFormFieldSet">
                                @include('owner.form.laundry_payment_form')
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
                                        @include('owner.form.laundry_summary')
                                    </div>
                                </div>
                                <button type="button" name="save" class="btn btn-primary next action-button float-right" value="Save">Save</button>
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
                    console.log(values)
                    return values

                })

                $laundry_payment_form.each(function (){
                    values[this.name] = $(this).val()
                    return values

                })

                $('.laundry_and_payment_status_summary').each(function (){
                    $(this).find('.client_name').empty().append(values.full_name)
                    $(this).find('.machines_selected').empty().append(values.machine_selected.join(", "))
                    $(this).find('.total_cost').empty().append(values.total_cost)
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
            })
            $('.previous_payment_status').on('click', function () {
                $(this).closest('li').find('#payment').trigger('change','class');
            })



        })
    </script>
@endsection

