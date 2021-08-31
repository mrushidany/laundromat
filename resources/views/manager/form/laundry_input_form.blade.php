<?php
if(isset($routine_client)){
    $phone = ltrim($routine_client->phone, '+255');
}
?>
        <div  class="card">
            <div class="card-body">
                <div class="modal-header">
                    <h3 class="modal-title offset-md-5">Add Laundry Details</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('laundry.store')}}" method="POST" autocomplete="off">
                    @csrf()
                    @method('POST')
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="client_name" class="control-label">Client Full Name</label>
                                <input name="full_name" type="text" class="form-control" value="{{$routine_client->full_name ?? ''}}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_type" class="control-label">Phone Number</label>
                                <input type="text" class="form-control" placeholder="xxxxxxxxx" name="phone_number" aria-describedby="basic-addon1" value="{{$phone ?? ''}}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="washing_machine" class="control-label">Select Machine</label>
                                <div class="input-group mb-4 select_machine">
                                    <div class="form-check form-check-inline">
                                        <select class="form-control mb-3 select2search" name="washing_machine">
                                            <option disabled selected>Select the Washing Machine</option>
                                            <option value="1" >Washing Machine 1</option>
                                            <option value="1">Washing Machine 2</option>
                                            <option value="1">Washing Machine 3</option>
                                            <option value="1" >Washing Machine 4</option>
                                            <option value="1">Washing Machine 5</option>
                                            <option value="1">Washing Machine 6</option>
                                            <option value="1" >Washing Machine 7</option>
                                            <option value="1">Washing Machine 8</option>
                                            <option value="1">Washing Machine 9</option>
                                            <option value="1" >Washing Machine 10</option>
                                            <option value="1">Washing Machine 11</option>
                                            <option value="1">Washing Machine 12</option>
                                        </select>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <select class="form-control mb-3 select2search" name="drying_machine">
                                            <option disabled selected>Select the Drying Machine</option>
                                            <option value="2" >Drying Machine 1</option>
                                            <option value="2">Drying Machine 2</option>
                                            <option value="2">Drying Machine 3</option>
                                            <option value="2" >Drying Machine 4</option>
                                            <option value="2">Drying Machine 5</option>
                                            <option value="2">Drying Machine 6</option>
                                            <option value="2" >Drying Machine 7</option>
                                            <option value="2">Drying Machine 8</option>
                                            <option value="2">Drying Machine 9</option>
                                            <option value="2" >Drying Machine 10</option>
                                            <option value="2">Drying Machine 11</option>
                                            <option value="2">Drying Machine 12</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="laundry_quantity">Laundry Quantity in Kg</label>
                                <input type="number" min="8" step="8" name="laundry_quantity" class="form-control" id="laundry_quantity" value="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="total_cost">Total Cost</label>
                                <input type="text" class="form-control" id="total_cost" name="total_cost"  value="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pickup_date">Payment Status</label>
                                <select class="form-control mb-3 "  name="payment_details">
                                    <option disabled selected>Select the Payment Status</option>
                                    <option value="">Paid</option>
                                    <option value="">Not Paid</option>
                                    <option value="">Partial Payment</option>
                                </select>
                            </div>
                            <div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

 <script type="application/javascript">
     $(document).ready(function (){
         $('#washing_machine').on('change', function (){
            if($(this).attr('checked', true)){
                var price = 4000;
                $('#total_cost').val(total_cost(price));
            }
         });

         function total_cost(price){
             var total = 0 + price + ' ' + '/=';
             var quantity = $('#laundry_quantity').val();
             var check = $('.select_machine').find('attr','checked');

             check.each(function (){
                 total += quantity * price;
             })

             return total;
         }
     })
 </script>


